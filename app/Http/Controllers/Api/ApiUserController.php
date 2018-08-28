<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\{Role,Permissions,User};
use App\Helpers\ApiHelper;

use App\Events\UpdatedModels;
use App\Exceptions\ModelValidateException;
use Exception;

class ApiUserController extends Controller
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
    * GET <baseUrl>/api/users
    *
    */
    public function getMe(Request $request){
        
        
        return $request->user(); 
    }


    /*
    *
    * GET <baseUrl>/api/users
    *
    */
    public function getUsers(Request $request){
        
        $result = User::all();
        
        return $result; 
    }



    /*
    *
    * GET <baseUrl>/api/users/<id>
    *
    */
    public function getUser($id){
        
        $model = User::findOrFail($id);

        return $model;
    }
}
