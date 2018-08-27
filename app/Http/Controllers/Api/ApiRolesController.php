<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Deals,Field,Currency,Pipeline,Stage};
use App\{Role,Permissions,User};
use App\Helpers\ApiHelper;

class ApiRolesController extends Controller
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
    public function getRoles(Request $request){

        $api = new ApiHelper;
        
        $result = $api->getByRequest(new Role,$request->all());
        
        return $result; 
    }

    


}
