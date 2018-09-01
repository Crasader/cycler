<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Deals,Field,Currency,Pipeline,Stage};
use App\{Role,Permission,User};
use App\Helpers\ApiHelper;
use App\Events\UpdatedModels;
use App\Exceptions\ModelValidateException;
use Exception;
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
    * GET <baseUrl>/api/permissions
    *
    */
    public function getPerms(Request $request){

        $api = new ApiHelper;
        
        $result = $api->getByRequest(new Permission,$request->all());
        
        return $result; 
    }


    

    /*
    *
    * GET <baseUrl>/api/permissions/<id>
    *
    */
    public function getPerm($id){
        
        $model = Permission::findOrFail($id);

        return response()->json([$model->getAttributes()]);
    }


}
