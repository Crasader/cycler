<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Deals,Field,Currency,Pipeline,Stage};
use App\{Role,Permissions,User};
use App\Helpers\ApiHelper;

class ApiDealController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //$this->middleware("auth");
       //$this->middleware("role:".config('defines.roles.SUPERVISOR'));
    }



    


    /*
    * 
    * GET <baseUrl>/api/<role_name>/deals
    *
    */
    public function getDeals(Request $request){

        $api = new ApiHelper;

        $result = $api->getByRequest(Deals::init(),$request->all());
        
        return $result;
    }



     /*
    *
    * GET <baseUrl>/api/<role_name>/deals/<id>
    *
    */
    public function getDeal($id){
        
        $deal = Deals::init($id);

        return response()->json([$deal->getAttributes()]);
    }




    /*
    * PUT <baseUrl>/api/<role_name>/deals
    */
    public function createDeal(Request $request){

        $answer = array();

        $answer['parameters'] = $request->toArray();

        $deal = Deals::init();
        
        $answer['result'] = $deal->fill($request->toArray(),true) && $deal->save() ? true : false;
        
        $answer['errors'] = $deal->errors();
        
        return $answer;
    }






    /*
    *
    * POST <baseUrl>/api/<role_name>/deals/<id>
    *
    */
    public function updateDeal($id,Request $request){
        $answer = array();
        
        $deal = Deals::init($id);
        
        if(isset($deal->{$deal->getKeyName()})){
            $answer['result'] = $deal->fill($request->toArray(),true) && $deal->save() ? true : false;
            
            $answer['deal']=$deal->getAttributes();
        
            $answer['errors'] = $deal->errors();
        }else{
            $answer['error'] = 404;
            $answer['error_message'] = "not found deal";
        }
        

        return $answer;
    }






    /*
    *
    * DELETE <baseUrl>/api/<role_name>/deals/<id>
    *
    */
    public function deleteDeal($id){
        
        $deal = Deals::init($id);
        $answer['result'] = false;
        if(isset($deal->{$deal->getKeyName()})){
            $answer['result'] = $deal->delete();
        }

        return $answer;
    }

}
