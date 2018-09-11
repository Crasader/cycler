<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Deals,Field,Currencies,Pipeline,Stage};
use App\{Role,Permissions,User};
use App\Helpers\ApiHelper;
use App\Events\UpdatedModels;

use App\Exceptions\ModelValidateException;
use Exception;
class ApiDealController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
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

        return $deal;
    }




    /*
    * PUT <baseUrl>/api/<role_name>/deals
    */
    public function createDeals(Request $request){

        $answer = array();

        $parameters = $request->toArray();

        $deal = Deals::init();
        
        $success = $deal->fill($request->toArray(),true) && $deal->save() ? true : false;
        
        if($success){
            event(new UpdatedModels($deal,UpdatedModels::CREATED));
        }

        $errors = $deal->errors();
        
        if(count($errors))
            throw new ModelValidateException($deal);

        return [
            'success'=>$success,
            'errors'=>$errors,
            'deal'=>$success ?$deal : null,
            'created_at'=> $success ? strtotime($deal->created_at) : null,
        ];
    }






    /*
    *
    * POST <baseUrl>/api/<role_name>/deals/<id>
    *
    */
    public function editDeals($id,Request $request){
        $answer = array();
        
        $deal = Deals::init($id);
        
        if(isset($deal->{$deal->getKeyName()})){
            $success = $deal->fill($request->toArray(),true) && $deal->save() ? true : false;
            
            if($success){
                event(new UpdatedModels($deal,UpdatedModels::UPDATED));
            }

            $errors = $deal->errors();

            
        }else{
            throw new \Exception("Deal not found",404);
        }
        
        if(count($errors))
            throw new ModelValidateException($model);

        return [
            'success'=>$success,
            'deal'=>$deal,
            'errors'=>$errors,
            'updated_at'=> $success ? strtotime($deal->updated_at) : null,
        ];
    }






    /*
    * DELETE <baseUrl>/api/<role_name>/deals/<id>
    *
    */
    public function removeDeals($id){
        
        $deal = Deals::init($id);
        $success = false;
        if(isset($deal->{$deal->getKeyName()})){
            $success = $deal->delete();
            if($success){
                event(new UpdatedModels($deal,UpdatedModels::DELETED));
            }
        }

        return [
            'success'=>$success
        ];
    }

}
