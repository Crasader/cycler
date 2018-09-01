<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\{Role,Permissions,User};
use App\Helpers\ApiHelper;
use App\Models\{Stage};
use App\Events\UpdatedModels;
use App\Exceptions\ModelValidateException;
use Exception;
class ApiStageController extends Controller
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
    * GET <baseUrl>/api/stages
    *
    */
    public function getStages(Request $request){
        $api = new ApiHelper;
        
        $result = $api->getByRequest(new Stage,$request->all());
        
        return response()->json($result); 
    }





    /*
    *
    * GET <baseUrl>/api/stages/<id>
    *
    */
    public function getStage($id){
        
        $model = Stage::findOrFail($id);

        return response()->json([$model->getAttributes()]);
    }




    /*
    * PUT <baseUrl>/api/stages
    */
    public function createStages(Request $request){


        $parameters = $request->toArray();

        $model =  new Stage;
        
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
    * POST <baseUrl>/api/stages/<id>
    *
    */
    public function editStages($id,Request $request){
        
        
        $model = Stage::find($id);
        
        if(isset($model->id)){
            $success = $model->fill($request->toArray(),true) && $model->save() ? true : false;
            
            if($success){
                event(new UpdatedModels($model,UpdatedModels::UPDATED));
            }

            $stage=$model->getAttributes();
            
            $errors = $model->errors();
        }else{
            throw new Exception("Stage not found",404);
        }
        
        if(count($errors))
            throw new ModelValidateException($model);

        return [
            'success'=>$success,
            'stage'=>$stage,
            'errors'=>$errors
        ];
    }






    /*
    *
    * DELETE <baseUrl>/api/stages/<id>
    *
    */
    public function removeStages($id){
        
        $model = Stage::find($id);
        
        $success = false;

        if(isset($model->id)){
            $success = $model->delete();
            if($success){
                event(new UpdatedModels($model,UpdatedModels::DELETED));
            }
        }else{
            throw new Exception("Stage not found",404);
        }

        return [
            'success'=>$success
        ];
    }
}
