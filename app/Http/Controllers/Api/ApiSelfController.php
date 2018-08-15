<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Deals,Field,Currency,Pipeline,Stage};
use App\{Role,Permissions,User};
use App\Helpers\ApiHelper;

class ApiSelfController extends Controller
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
    public function self(){


        $answer = array();
        $roles = Role::all();
        foreach ($roles as $role) {
            $answer['roles'][$role->name]['title'] = $role->display_name;
            $answer['roles'][$role->name]['permissions'] = $role->perms()->get(['name','display_name'])->toArray();
        }
        
        $user = Auth::user();
        $answer['current_user']['name'] = $user->name;
        $answer['current_user']['email'] = $user->email;

        //Настройки пользователя
        $answer['current_user']['settings'] = array();

        //Роли пользователя
        $answer['current_user']['roles'] = $user->roles()->get(['name','display_name'])->toArray();

        //Справочники
        $answer['app_settings'] = array();

        //Справочники
        $answer['dictionaries'] = array();

        //схема таблиц
        $deals = new Deals();
        $answer['fields_schema'][$deals->getTable()] = Field::getSchema($deals); 
        

        return $answer;
    }

    


}
