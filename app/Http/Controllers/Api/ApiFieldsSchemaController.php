<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\{Role,Permissions,User};
use App\Helpers\ApiHelper;
use App\Models\{Field};
use App\Events\UpdatedModels;
use Exception;

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
        
        $params = $request->toArray();

        $model =  new Field;
        if(isset($params['name'])){
            $params['name'] = str_replace(" ", "_", trim($params['name']));
        }
        
        $success = false;

        if($model->fill($params,true) && $model->save()){
            
            try {
                if($model->addColumn()){
                    $success = true;    
                }else{
                    $model->delete();
                }
            } catch (\Exception $e) {
                throw new \Exception("Error Processing add new field", 500);
            }

        }

        if($success){
            event(new UpdatedModels($model,UpdatedModels::CREATED));
        }

        $errors = $model->errors();
        if(count($errors))
            throw new ModelValidateException($model);

        return [
            'success'=>$success,
            'errors'=>$errors,
            'requestData'=>$params
        ];
    }






    /*
    *
    * POST <baseUrl>/api/field/<id>/rename
    *
    */
    public function updateField($id,Request $request){
        //Переименование столбца
        
        $model = Field::find($id);
        
        $success = false;

        if(isset($model->id)){

            $old_name = $model->name;
            $params =  $request->toArray();
            $name = isset($params['name']) ? str_replace(" ", "_", trim($params['name'])) : null;
            $attr = $model->getAttributes();
            $attr['name']=$name;
            
            if($model->validate($attr)){
                try {
                    if($model->renameColumn($name)){
                        $success =  true;
                    }
                } catch (Exception $e) {
                    throw new \Exception("Error Processing rename field", 500);
                    
                }
            }

            $field=$model->getAttributes();
        
            $errors = $model->errors();
            

            if($success){
                event(new UpdatedModels($model,UpdatedModels::UPDATED));
            }
            
        }else{
            throw new \Exception("Field not found",404);
        }
        
        if(count($errors))
                throw new ModelValidateException($model);

        return [
            'success'=>$success,
            'field'=>$field,
            'errors'=>$errors
        ];
    }






    /*
    *
    * DELETE <baseUrl>/api/field/<id>
    *
    */
    public function deleteField($id){
        
        $model = Field::findOrFail($id);
        $success = false;
        try{
            if($model->delete()){

                $model->dropColumn();

                $success =  true;

                event(new UpdatedModels($model,UpdatedModels::DELETED));
            }
        }catch (Exception $e) {
            throw new Exception("Error processing delete field", 500);
                
        }
        
        return [
            'success'=>$success
        ];
    }


}
