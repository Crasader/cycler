<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Deals,Field,Currency,Pipeline,Stage};
use App\{Role,Permission,User};
use App\Helpers\ApiHelper;

class ApiPermissionsController extends Controller
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
    * GET <baseUrl>/api/<role_name>/self
    *
    */
    public function getPerms(Request $request){

        $api = new ApiHelper;
        
        $result = $api->getByRequest(new Permission,$request->all());
        
        return $result; 
    }

    


}
