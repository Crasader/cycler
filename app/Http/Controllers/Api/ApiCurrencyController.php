<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Deals,Field,Currency,Pipeline,Stage};
use App\{Role,Permissions,User};
use App\Helpers\ApiHelper;

class ApiCurrencyController extends Controller
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
    * GET <baseUrl>/api/currencies
    *
    */
    public function getCurrencies(Request $request){
        $api = new ApiHelper;
        
        $result = $api->getByRequest(new Currency,$request->all());
        
        return response()->json($result); 
    }





    /*
    *
    * GET <baseUrl>/api/currency/<id>
    *
    */
    public function getCurrency($id){
        
        $model = Currency::findOrFail($id);

        return response()->json([$model->getAttributes()]);
    }




    /*
    * PUT <baseUrl>/api/currency
    */
    public function createCurrency(Request $request){

        $answer = array();

        $answer['parameters'] = $request->toArray();

        $model =  new Currency;
        
        $answer['result'] = $model->fill($request->toArray(),true) && $model->save() ? true : false;
        
        $answer['errors'] = $model->errors();
        
        return $answer;
    }






    /*
    *
    * POST <baseUrl>/api/currency/<id>
    *
    */
    public function updateCurrency($id,Request $request){
        $answer = array();
        
        $model = Currency::findOrFail($id);
        
        if(isset($model->id)){
            $answer['result'] = $model->fill($request->toArray(),true) && $model->save() ? true : false;
            
            $answer['currency']=$model->getAttributes();
        
            $answer['errors'] = $model->errors();
        }else{
            $answer['error'] = 404;
            $answer['error_message'] = "not found currency";
        }
        

        return $answer;
    }






    /*
    *
    * DELETE <baseUrl>/api/currency/<id>
    *
    */
    public function deleteCurrency($id){
        
        $model = Currency::findOrFail($id);
        $answer['result'] = false;
        if(isset($model->id)){
            $answer['result'] = $model->delete();
        }

        return $answer;
    }


}
