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
       //$this->middleware("auth");
       //$this->middleware("role:".config('defines.roles.SUPERVISOR'));
    }


    public function getCurrencies(Request $request){
        $api = new ApiHelper;
        
        $result = $api->getByRequest(new Currency,$request->all());
        
        return response()->json($result); 
    }


}
