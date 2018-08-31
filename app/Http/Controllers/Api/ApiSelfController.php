<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\{Deals,Field,Currency,Pipeline,Stage};
use App\{Role,Permission,User};
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
        
        // $roles = Role::all();
        
        // foreach ($roles as $role) {
        //     $answer['roles'][$role->name]['title'] = $role->display_name;
        //     $answer['roles'][$role->name]['permissions'] = $role->perms()->get(['name','display_name'])->toArray();
        // }
        
        $user = Auth::user();
        $answer['account']['id']  = $user->id;
        $answer['account']['name'] = $user->name;
        $answer['account']['email'] = $user->email;

        //Настройки пользователя
        $answer['settings'] = array();

        //Роли пользователя
        $rolesObjects = $user->roles()->get(['id','name','display_name','description']);

        $roles = array();
        $allPerms = array();
        foreach ($rolesObjects as $key => $r) {
            $roles[$r->id]['id']=$r->id;
            $roles[$r->id]['name']=$r->name;
            $roles[$r->id]['title']=$r->display_name;
            $roles[$r->id]['description']=$r->description;
            
            $perms = $r->perms()->get(['id','name','display_name','description'])->toArray();
            array_push($allPerms, $perms);
            
            $roles[$r->id]['permissions']=array_map(function($p){return $p['id'];}, $perms);
        }
        
        $answer['roles']=$roles;
        $answer['permissions']=$allPerms;

        // //схема таблиц
        // $deals = new Deals();
        // $answer['fields_schema'][$deals->getTable()] = Field::getSchema($deals); 
        

        return $answer;
    }

    


}
