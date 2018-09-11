<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\{Role,Permissions,User};
use App\Helpers\ApiHelper;
use App\Models\{Pipeline};
use App\Events\UpdatedModels;
use App\Exceptions\ModelValidateException;
use Exception;
class ApiPipelinesController extends Controller
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
    * GET <baseUrl>/api/pipelines
    *
    */
    public function getPipelines(Request $request){
        $api = new ApiHelper;
        
        $result = $api->getByRequest(new Pipeline,$request->all());
        
        return response()->json($result); 
    }





    /*
    *
    * GET <baseUrl>/api/pipelines/<id>
    *
    */
    public function getPipeline($id){
        
        $model = Pipeline::findOrFail($id);

        return response()->json([$model]);
    }




    /*
    * PUT <baseUrl>/api/pipelines
    */
    public function createPipelines(Request $request){

        $answer = array();

        $parameters = $request->toArray();

        $model =  new Pipeline;
        
        $success = $model->fill($request->toArray(),true) && $model->save() ? true : false;
        
        if($success){
            event(new UpdatedModels($model,UpdatedModels::CREATED));
        }

        $errors = $model->errors();
        
        if(count($errors))
            throw new ModelValidateException($model);

        return [
            'success'=>$success,
            'pipeline'=>$model,
            'errors'=>$errors
        ];
    }






    /*
    *
    * POST <baseUrl>/api/pipelines/<id>
    *
    */
    public function editPipelines($id,Request $request){
        $answer = array();
        
        $model = Pipeline::find($id);
        
        if(isset($model->id)){
            $success = $model->fill($request->toArray(),true) && $model->save() ? true : false;
            
            if($success){
                event(new UpdatedModels($model,UpdatedModels::UPDATED));
            }

        
            $errors = $model->errors();
        }else{
            throw new Exception("Pipeline not found", 404);
        }
        
        if(count($errors))
            throw new ModelValidateException($model);

        return [
            'success'=>$success,
            'pipeline'=>$model,
            'errors'=>$errors
        ];
    }






    /*
    *
    * DELETE <baseUrl>/api/pipelines/<id>
    *
    */
    public function removePipelines($id){
        
        $model = Pipeline::findOrFail($id);
        $success = false;
        if(isset($model->id)){
            $success = $model->delete();

            if($success){
                event(new UpdatedModels($model,UpdatedModels::DELETED));
            }
        }

        return [
            'success'=>$success
        ];
    }
}
