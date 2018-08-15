<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\{Role,Permissions,User};
use App\Helpers\ApiHelper;
use App\Models\{Pipeline};
use App\Events\UpdatedModels;
use \Exception;
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

        return response()->json([$model->getAttributes()]);
    }




    /*
    * PUT <baseUrl>/api/pipelines
    */
    public function createPipeline(Request $request){

        $answer = array();

        $parameters = $request->toArray();

        $model =  new Pipeline;
        
        $success = $model->fill($request->toArray(),true) && $model->save() ? true : false;
        
        if($success){
            event(new UpdatedModels($model,UpdatedModels::CREATED));
        }

        $errors = $model->errors();
        
        return [
            'success'=>$success,
            'requestData'=>$parameters,
            'errors'=>$errors
        ];
    }






    /*
    *
    * POST <baseUrl>/api/pipelines/<id>
    *
    */
    public function updatePipeline($id,Request $request){
        $answer = array();
        
        $model = Pipeline::find($id);
        
        if(isset($model->id)){
            $success = $model->fill($request->toArray(),true) && $model->save() ? true : false;
            
            if($success){
                event(new UpdatedModels($model,UpdatedModels::UPDATED));
            }

            $pipeline=$model->getAttributes();
        
            $errors = $model->errors();
        }else{
            throw new Exception("Pipeline not found", 404);
        }
        

        return [
            'success'=>$success,
            'pipeline'=>$pipeline,
            'errors'=>$errors
        ];
    }






    /*
    *
    * DELETE <baseUrl>/api/pipelines/<id>
    *
    */
    public function deletePipeline($id){
        
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
