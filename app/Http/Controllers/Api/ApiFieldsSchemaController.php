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
    public function getField($id,Request $request){
        
        $model = Field::findOrFail($id);

        if(isset($model->id)){
            return response()->json([$model->getAttributes()]);
        }else{
            throw new \Exception("Not found field",404);
        }

        
    }




    /*
    * PUT <baseUrl>/api/field
    */
    public function createField(Request $request){

        //Создание новой колонки
        $answer = array();

        $params = $request->toArray();

        $model =  new Field;
        if(isset($params['name'])){
            $params['name'] = str_replace(" ", "_", trim($params['name']));
        }
        
        $answer['result'] = false;

        if($model->fill($params,true) && $model->save()){
            
            if($model->addColumn()){
                $answer['result'] = true;    
            }else{
                $model->delete();
            }

        }

        $answer['errors'] = $model->errors();
        
        return $answer;
    }






    /*
    *
    * POST <baseUrl>/api/field/<id>/rename
    *
    */
    public function updateField($id,Request $request){
        $answer = array();
        
        $model = Field::findOrFail($id);
        
        $answer['result'] = false;

        if(isset($model->id)){

            $old_name = $model->name;
            $params =  $request->toArray();
            $name = isset($params['name']) ? str_replace(" ", "_", trim($params['name'])) : null;
            $attr = $model->getAttributes();
            $attr['name']=$name;
            if($model->validate($attr)){
                if($model->renameColumn($name)){
                    $answer['result'] =  true;
                }
            }

            $a['errors']= $model->errors();
            return $a;

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
        
        $model = Field::findOrFail($id);
        $answer['result'] = false;
        if(isset($model->id)){
            
            if($model->delete()){
               $model->dropColumn();
               $answer['result'] =  true;
            }
        }

        return $answer;
    }


}
