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
class ApiPermissionsController extends Controller
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
    * GET <baseUrl>/api/permissions
    *
    */
    public function getPermissions(Request $request){

        $api = new ApiHelper;
        
        $result = $api->getByRequest(new Permission,$request->all());
        
        return $result; 
    }


    

    /*
    *
    * GET <baseUrl>/api/permissions/<id>
    *
    */
    public function getPermission($id){
        
        $model = Permission::findOrFail($id);

        return response()->json([$model->getAttributes()]);
    }



    /*
    *
    * PUT <baseUrl>/api/permissions
    *
    */
    public function createPermissions(Request $request){

        $answer = array();

        $parameters = $request->toArray();

        $model = new Permission;
        
        $success = $model->fill($request->toArray(),true) && $model->save() ? true : false;
        
        if($success){
            event(new UpdatedModels($model,UpdatedModels::CREATED));
        }

        $errors = $model->errors();
        
        if(count($errors))
            throw new ModelValidateException($model);

        return [
            'success'=>$success,
            'requestData'=>$parameters,
            'errors'=>$errors
        ];
    }








    /*
    *
    * POST <baseUrl>/api/permissions/<id>
    *
    */
    public function editPermissions($id,Request $request){
        
        
        $model = Permission::find($id);
        
        if(isset($model->id)){

            if(boolval($model->is_system))
                throw new Exception("Permission is system entity. You can`t update it!",500);

            $success = $model->fill($request->toArray(),true) && $model->save() ? true : false;
            
            if($success){
                event(new UpdatedModels($model,UpdatedModels::UPDATED));
            }

            $permission=$model->getAttributes();
            
            $errors = $model->errors();
        }else{
            throw new Exception("Permission not found",404);
        }
        
        if(count($errors))
            throw new ModelValidateException($model);

        return [
            'success'=>$success,
            'role'=>$permission,
            'errors'=>$errors
        ];
    }





    /*
    *
    * DELETE <baseUrl>/api/permissions/<id>
    *
    */
    public function removePermissions($id){
        
        $model = Permission::find($id);
        

        $success = false;

        if(isset($model->id)){
            
            if(boolval($model->is_system))
                throw new Exception("Permission is system entity. You can`t delete system permission!",500);

            $success = $model->delete();

            if($success){
                event(new UpdatedModels($model,UpdatedModels::DELETED));
            }

        }else{
            throw new Exception("Permission not found",404);
        }

        return [
            'success'=>$success
        ];
    }

}
