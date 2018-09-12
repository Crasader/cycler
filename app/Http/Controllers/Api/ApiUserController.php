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
     * 
     * @return void
     */
    public function __construct()
    {
      
    }


    

    /*
    *
    * GET <baseUrl>/api/user
    *
    */
    public function getMe(Request $request){
        
        
        $answer = array();
        $user = Auth::user();


        $answer['account']['id']  = $user->id;
        $answer['account']['name'] = $user->name;
        $answer['account']['email'] = $user->email;

       

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
        
        $answer['permissions'] = array();
        $answer['account']['roles'] = array();
        $answer['roles']=$roles;
        
        if($arrayRolesIds){
            $p = new Permission();
            $perms = DB::table($p->getTable())
                            ->join(config('entrust.permission_role_table'), 'permission_id', '=', 'id')
                            ->whereRaw("role_id IN (".implode(",", $arrayRolesIds).")")->get()->toArray();
            
            $answer['permissions']=$perms;
            $answer['account']['roles'] = $arrayRolesIds;
        }
        

        

        //Настройки пользователя
        $answer['settings'] = array();

        return $answer;
    }


    /*
    *
    * GET <baseUrl>/api/users
    *
    */
    public function getUsers(Request $request){
        
        $users = User::all();
        
        $results = array();
        foreach ($users as $u) {
            $results[$u->id] = $u->toArray();
            
            $results[$u->id]['roles']=$u->getRolesIds();
        }

        return $results; 
    }



    /*
    *
    * GET <baseUrl>/api/users/<id>
    *
    */
    public function getUser($id){
        
        $model = User::findOrFail($id);

        return [
            'id'=>$model->id,
            'name'=>$model->name,
            'email'=>$model->email,
            'roles'=>$model->getRolesIds()
        ];
    }





    /*
    *
    * POST <baseUrl>/api/users/<user_id>/roles/<role_id>
    *
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
