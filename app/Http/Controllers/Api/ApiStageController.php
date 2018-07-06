<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\{Role,Permissions,User};
use App\Helpers\ApiHelper;
use App\Models\{Stage};

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
    * GET <baseUrl>/api/pipelines
    *
    */
    public function getStages(Request $request){
        $api = new ApiHelper;
        
        $result = $api->getByRequest(new Stage,$request->all());
        
        return response()->json($result); 
    }





    /*
    *
    * GET <baseUrl>/api/pipelines/<id>
    *
    */
    public function getStage($id){
        
        $model = Stage::find($id);

        return response()->json([$model->getAttributes()]);
    }




    /*
    * PUT <baseUrl>/api/pipelines
    */
    public function createStage(Request $request){

        $answer = array();

        $answer['parameters'] = $request->toArray();

        $model =  new Stage;
        
        $answer['result'] = $model->fill($request->toArray(),true) && $model->save() ? true : false;
        
        $answer['errors'] = $model->errors();
        
        return $answer;
    }






    /*
    *
    * POST <baseUrl>/api/pipelines/<id>
    *
    */
    public function updateStage($id,Request $request){
        $answer = array();
        
        $model = Stage::find($id);
        
        if(isset($model->id)){
            $answer['result'] = $model->fill($request->toArray(),true) && $model->save() ? true : false;
            
            $answer['stage']=$model->getAttributes();
        
            $answer['errors'] = $model->errors();
        }else{
            $answer['error'] = 404;
            $answer['error_message'] = "not found Stage";
        }
        

        return $answer;
    }






    /*
    *
    * DELETE <baseUrl>/api/pipelines/<id>
    *
    */
    public function deleteStage($id){
        
        $model = Stage::find($id);
        $answer['result'] = false;
        if(isset($model->id)){
            $answer['result'] = $model->delete();
        }

        return $answer;
    }
}
