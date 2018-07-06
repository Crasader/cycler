<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\{Role,Permissions,User};
use App\Helpers\ApiHelper;
use App\Models\{Field};

class ApiFieldsSchemaController extends Controller
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
    * GET <baseUrl>/api/fields
    *
    */
    public function getFields(Request $request){
        $api = new ApiHelper;
        
        $result = $api->getByRequest(new Field,$request->all());
        
        return response()->json($result); 
    }





    /*
    *
    * GET <baseUrl>/api/field/<id>
    *
    */
    public function getField($id){
        
        $model = Field::find($id);

        return response()->json([$model->getAttributes()]);
    }




    /*
    * PUT <baseUrl>/api/field
    */
    public function createField(Request $request){

        $answer = array();

        $answer['parameters'] = $request->toArray();

        $model =  new Field;
        
        $answer['result'] = $model->fill($request->toArray(),true) && $model->save() ? true : false;
        
        $answer['errors'] = $model->errors();
        
        return $answer;
    }






    /*
    *
    * POST <baseUrl>/api/field/<id>
    *
    */
    public function updateField($id,Request $request){
        $answer = array();
        
        $model = Field::find($id);
        
        if(isset($model->id)){
            $answer['result'] = $model->fill($request->toArray(),true) && $model->save() ? true : false;
            
            $answer['field']=$model->getAttributes();
        
            $answer['errors'] = $model->errors();
        }else{
            $answer['error'] = 404;
            $answer['error_message'] = "not found Field";
        }
        

        return $answer;
    }






    /*
    *
    * DELETE <baseUrl>/api/field/<id>
    *
    */
    public function deleteField($id){
        
        $model = Field::find($id);
        $answer['result'] = false;
        if(isset($model->id)){
            $answer['result'] = $model->delete();
        }

        return $answer;
    }


}
