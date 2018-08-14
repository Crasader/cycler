<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\{Role,Permissions,User};
use App\Helpers\ApiHelper;
use App\Models\AppEvents;

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
       
        $api = new ApiHelper;
        
        $result = $api->getByRequest(new AppEvents,$request->all());
        
        return $result;
    }
}
