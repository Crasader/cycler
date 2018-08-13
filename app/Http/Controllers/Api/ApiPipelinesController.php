<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\{Role,Permissions,User};
use App\Helpers\ApiHelper;
use App\Models\{Pipeline};
use App\Events\UpdatedModels;

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

        $answer['parameters'] = $request->toArray();

        $model =  new Pipeline;
        
        $answer['result'] = $model->fill($request->toArray(),true) && $model->save() ? true : false;
        
        if($answer['result']){
            event(new UpdatedModels($model),UpdatedModels::CREATED);
        }

        $answer['errors'] = $model->errors();
        
        return $answer;
    }






    /*
    *
    * POST <baseUrl>/api/pipelines/<id>
    *
    */
    public function updatePipeline($id,Request $request){
        $answer = array();
        
        $model = Pipeline::findOrFail($id);
        
        if(isset($model->id)){
            $answer['result'] = $model->fill($request->toArray(),true) && $model->save() ? true : false;
            
            if($answer['result']){
                event(new UpdatedModels($model),UpdatedModels::UPDATED);
            }

            $answer['pipeline']=$model->getAttributes();
        
            $answer['errors'] = $model->errors();
        }else{
            $answer['error'] = 404;
            $answer['error_message'] = "not found Pipeline";
        }
        

        return $answer;
    }






    /*
    *
    * DELETE <baseUrl>/api/pipelines/<id>
    *
    */
    public function deletePipeline($id){
        
        $model = Pipeline::findOrFail($id);
        $result = false;
        if(isset($model->id)){
            $result = $model->delete();

            if($result){
                event(new UpdatedModels($model,UpdatedModels::DELETED));
            }
        }

        return [
            'success'=>$result
        ];
    }
}
