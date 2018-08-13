<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\{Role,Permissions,User};
use App\Helpers\ApiHelper;

class ApiEventsController extends Controller
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
    * GET <baseUrl>/api/events
    *
    */
    public function getEvents(Request $request){
       
        
        return response()->json([]); 
    }
}
