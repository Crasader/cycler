<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\{Role,Permissions,User};
use App\Helpers\ApiHelper;
use App\Models\{Settings};

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
    public function createSetting(Request $request){

        $answer = array();

        $answer['parameters'] = $request->toArray();

        $model =  new Settings;
        
        $answer['result'] = $model->fill($request->toArray(),true) && $model->save() ? true : false;
        
        $answer['errors'] = $model->errors();
        
        return $answer;
    }






    /*
    *
    * POST <baseUrl>/api/settings/<id>
    *
    */
    public function updateSetting($id,Request $request){
        $answer = array();
        
        $model = Settings::findOrFail($id);
        
        if(isset($model->id)){
            $answer['result'] = $model->fill($request->toArray(),true) && $model->save() ? true : false;
            
            $answer['setting']=$model->getAttributes();
        
            $answer['errors'] = $model->errors();
        }else{
            $answer['error'] = 404;
            $answer['error_message'] = "not found Setting";
        }
        

        return $answer;
    }






    /*
    *
    * DELETE <baseUrl>/api/settings/<id>
    *
    */
    public function deleteSetting($id){
        
        $model = Settings::findOrFail($id);
        $answer['result'] = false;
        if(isset($model->id)){
            $answer['result'] = $model->delete();
        }

        return $answer;
    }
}
