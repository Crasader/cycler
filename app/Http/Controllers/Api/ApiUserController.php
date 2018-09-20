<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\{Role,Permission,User};
use App\Helpers\ApiHelper;
use Illuminate\Support\Facades\DB;
use App\Events\UpdatedModels;
use App\Exceptions\ModelValidateException;
use Exception;

class ApiUserController extends Controller
{

    
    /**
    * GET <baseUrl>/api/user
    * role *
    * permission *
    * @return array()
    */
    public function getMe(){
        
        
        $answer = array();
        $user = Auth::user();


        $account['id']  = $user->id;
        $account['name'] = $user->name;
        $account['email'] = $user->email;
        $account['created_at'] = $user->created_at;
        $account['updated_at'] = $user->updated_at;
       

        //Роли пользователя
        $rolesObjects = $user->roles()->get(['id','name','display_name','description']);

        $roles = array();
        $allPerms = array();
        foreach ($rolesObjects as $key => $r) {
            $roles[$r->id]['id']=$r->id;
            $roles[$r->id]['name']=$r->name;
            $roles[$r->id]['title']=$r->display_name;
            $roles[$r->id]['description']=$r->description;
            
            $perms = $r->perms()->get(['id','name','display_name','description'])->toArray();
            $allPerms = array_merge($allPerms, $perms);
            
            $roles[$r->id]['permissions']=array_map(function($p){return $p['id'];}, $perms);
        }
        
        $arrayRolesIds = array_keys($roles);
        
        $permissions = array();
        $account['roles'] = array();
        
        
        if($arrayRolesIds){
            $p = new Permission();
            $perms = DB::table($p->getTable())
                            ->join(config('entrust.permission_role_table'), 'permission_id', '=', 'id')
                            ->whereRaw("role_id IN (".implode(",", $arrayRolesIds).")")->get()->toArray();
            
            $permissions=$perms;
            $account['roles'] = $arrayRolesIds;
        }
        
        //Настройки пользователя
        $settings = array();

        return [
            'account'=>$account,
            'roles'=>$roles,
            'permissions'=>$permissions,
            'settings'=>$settings,
        ];
    }




    /**
    * GET <baseUrl>/api/users
    * roles: *
    * permission: read:users
    * filters: Yes
    * @param Request
    * @return Array Users
    */
    public function getUsers(Request $request){
        
        
        $api = new ApiHelper;
        // $users = User::all();
        $users = $api->getByRequest(new User,$request->all());
        
        $results = array();
        foreach ($users as $u) {
            $results[$u->id] = $u->toArray();
            
            $results[$u->id]['roles'] = $u->getRolesIds();
        }

        return $results; 
    }



    /**
    * GET <baseUrl>/api/users/<id>
    * permission: read:users
    * filters: No
    * @param id - user identificator
    * @return User
    */
    public function getUser($id){
        
        $model = User::findOrFail($id);
        $user = $model->toArray();
        $user['roles'] = $model->getRolesIds();
        
        return $user;
    }





    /**
    * POST <baseUrl>/api/users/<user_id>/roles/<role_id>
    * permission: edit:users_roles | permission:create:users_roles
    * @param $user_id - user identificator
    * @param $role_id - role identificator
    * @return [success => <boolean>]
    */
    public function attachRole($user_id,$role_id){
        
        $user = User::find($user_id);
        $role = Role::find($role_id);
        
        $success = false;

        if(isset($user->id) && isset($role->id)){
            
            if($user->hasRole($role->name))
                throw new Exception("User already has this role",500);
            

            $user->attachRole($role);
            
            if(!$user->hasRole($role->name))
                throw new Exception("Can`t attach role to this user",500);

            $success = true;
        }else{
            throw new Exception("Role or User not found",404);
        }

        return [
            'success'=>$success
        ];
    }






    /*
    *
    * DELETE <baseUrl>/api/users/<user_id>/roles/<role_id>
    *
    */
    public function detachRole($user_id,$role_id){
        
        $user = User::find($user_id);
        $role = Role::find($role_id);
        
        $success = false;

        if(isset($user->id) && isset($role->id)){
            
            if(!$user->hasRole($role->name))
                throw new Exception("User hasn`t this role",500);
        
            $user->detachRole($role);
            
            if($user->hasRole($role->name))
                throw new Exception("Can`t detach role from this user",500);

            $success = true;
        }else{
            throw new Exception("Role or User not found",404);
        }

        return [
            'success'=>$success
        ];
    }
}
