<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;

class ApiPublicController extends Controller
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
    * PUT <baseUrl>/api/<role_name>/deals
    */
    public function createDeals(Request $request){
        return response()->json(['result'=>1]);
    }




    /*
    * PUT <baseUrl>/api/<role_name>/calls
    */
    public function addCall(Request $request){
        return response()->json(['result'=>1]);
    }

}
