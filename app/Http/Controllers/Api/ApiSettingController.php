<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\{Role,Permissions,User};
use App\Helpers\ApiHelper;
use App\Models\{Settings};
use App\Events\UpdatedModels;
use Exception;
use App\Exceptions\ModelValidateException;

class ApiSettingController extends Controller
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
    * GET <baseUrl>/api/settings
    *
    */
    public function getSettings(Request $request){
        $api = new ApiHelper;
        
        $result = $api->getByRequest(new Settings,$request->all());
        
        return response()->json($result); 
    }





    /*
    *
    * GET <baseUrl>/api/settings/<id>
    *
    */
    public function getSetting($id){
        
        $model = Settings::findOrFail($id);

        return response()->json([$model->getAttributes()]);
    }




    /*
    * PUT <baseUrl>/api/settings
    */
    public function createSettings(Request $request){


        $parameters = $request->toArray();

        $model =  new Settings;
        
        $success = $model->fill($request->toArray(),true) && $model->save() ? true : false;
        
        if($success){
            event(new UpdatedModels($model,UpdatedModels::CREATED));
        }

        $errors = $model->errors();
        
        if(count($errors))
                throw new ModelValidateException($model);

        return [
            'success'=>$success,
            'errors'=>$errors,
            'requestData'=>$parameters
        ];
    }






    /*
    *
    * POST <baseUrl>/api/settings/<id>
    *
    */
    public function editSettings($id,Request $request){
        $answer = array();
        
        $model = Settings::find($id);
        
        if(isset($model->id)){
            $success = $model->fill($request->toArray(),true) && $model->save() ? true : false;
            
            if($success){
                event(new UpdatedModels($model,UpdatedModels::UPDATED));
            }

            $setting=$model->getAttributes();
        
            $errors = $model->errors();
        }else{
            throw new Exception("Setting not found",404);
        }
        
        if(count($errors))
            throw new ModelValidateException($model);

        return [
            'success'=>$success,
            'setting'=>$setting,
            'errors'=>$errors
        ];
    }






    /*
    *
    * DELETE <baseUrl>/api/settings/<id>
    *
    */
    public function removeSettings($id){
        
        $model = Settings::find($id);
        $success = false;
        if(isset($model->id)){
            $success = $model->delete();
            if($success){
                event(new UpdatedModels($model,UpdatedModels::DELETED));
            }
        }else{
            throw new Exception("Setting not found",404);
        }

        return [
            'success'=>$success
        ];
    }
}
