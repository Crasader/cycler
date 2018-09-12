<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Deals,Field,Currencies,Pipeline,Stage};
use App\{Role,Permission,User};
use App\Helpers\ApiHelper;
use App\Events\UpdatedModels;
use App\Exceptions\ModelValidateException;
use Exception;
class ApiRolesController extends Controller
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
    * GET <baseUrl>/api/roles
    *
    */
    public function getRoles(Request $request){

        $api = new ApiHelper;
        
        $roles = $api->getByRequest(new Role,$request->all());
        
        foreach ($roles as  $r) {
           
           $results[$r->id] =  $r;
           $results[$r->id]->permissions = Permission::getPermissionsIdsByRoleId($r->id);

        }
        return $results; 
    }





    /*
    *
    * GET <baseUrl>/api/roles/<id>
    *
    */
    public function getRole($id){

        $model = Role::findOrFail($id);

        $result = $model->toArray();
        $result['permissions']=$model->getPermissionsIds();
        return $result;
    }

    


    /*
    *
    * PUT <baseUrl>/api/roles
    *
    */
    public function createRoles(Request $request){

        $answer = array();

        $parameters = $request->toArray();

        $model = new Role;
        
        $success = $model->fill($request->toArray(),true) && $model->save() ? true : false;
        
        if($success){
            event(new UpdatedModels($model,UpdatedModels::CREATED));
        }

        $errors = $model->errors();
        
        if(count($errors))
            throw new ModelValidateException($model);

        return [
            'success'=>$success,
            'role'=>$model,
            'errors'=>$errors
        ];
    }








    /*
    *
    * POST <baseUrl>/api/roles/<id>
    *
    */
    public function editRoles($id,Request $request){
        
        
        $model = Role::find($id);
        
        if(isset($model->id)){

            if(boolval($model->is_system))
                throw new Exception("Role is system entity. You can`t update it!",500);

            $success = $model->fill($request->toArray(),true) && $model->save() ? true : false;
            
            if($success){
                event(new UpdatedModels($model,UpdatedModels::UPDATED));
            }

            
            $errors = $model->errors();
        }else{
            throw new Exception("Role not found",404);
        }
        
        if(count($errors))
            throw new ModelValidateException($model);

        return [
            'success'=>$success,
            'role'=>$model,
            'errors'=>$errors
        ];
    }





    /*
    *
    * DELETE <baseUrl>/api/roles/<id>
    *
    */
    public function removeRoles($id){
        
        $model = Role::find($id);
        

        $success = false;

        if(isset($model->id)){
            
            if(boolval($model->is_system))
                throw new Exception("Role is system entity. You can`t delete system role!",500);

            $success = $model->delete();

            if($success){
                event(new UpdatedModels($model,UpdatedModels::DELETED));
            }

        }else{
            throw new Exception("Role not found",404);
        }

        return [
            'success'=>$success
        ];
    }





    /*
    *
    * POST <baseUrl>/api/roles/<id>/permissions
    *
    */
    public function addPermissions($role_id,Request $request){
        
        $model = Role::find($role_id);
        
        $success = false;

        if(isset($model->id)){
            
            $perm = new Permission;

            $success = $perm->fill($request->toArray(),true) && $perm->save() ? true : false;

            $errors = $perm->errors();
            
            if(count($errors))
                throw new ModelValidateException($perm);


            if($success && $perm){
                
                $model->attachPermission($perm);
                //event(new UpdatedModels($model,UpdatedModels::CREATED));
            }

        }else{
            throw new Exception("Role not found",404);
        }

        return [
            'success'=>$success,
            'perm'=>$perm,
            'errors'=>$errors
        ];
    }





    /*
    *
    * POST <baseUrl>/api/roles/<id>/permissions
    *
    */
    public function attachPermissions($role_id,$permission_id){
        
        $role = Role::find($role_id);
        $perm = Permission::find($permission_id);
        
        $success = false;

        if(isset($role->id) && isset($perm->id)){
            
            $role->attachPermission($perm);
            $success = true;
        }else{
            throw new Exception("Role or Permission not found",404);
        }

        return [
            'success'=>$success
        ];
    }






    /*
    *
    * DELETE <baseUrl>/api/roles/<id>/permissions
    *
    */
    public function deletePermissions($role_id,$permission_id){
        
        $role = Role::find($role_id);
        $perm = Permission::find($permission_id);
        
        $success = false;

        if(isset($role->id) && isset($perm->id)){
            
            $role->detachPermission($perm);
            $success = true;
        }else{
            throw new Exception("Role or Permission not found",404);
        }

        return [
            'success'=>$success
        ];
    }

}
