<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\{Role,Permissions,User,Deals,Field,Currency,Pipeline,Stage};

class SupervisorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware("auth");
       $this->middleware("role:supervisor");
    }






    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('dashboard');
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
        

        return response()->json($answer);
    }






    /*
    * 
    * GET <baseUrl>/api/<role_name>/deals
    *
    */
    public function getDeals(Request $request){

        $deals = Deals::all(['*'])->toArray();
        
        return response()->json($deals);
    }






    /*
    * PUT <baseUrl>/api/<role_name>/deals
    */
    public function createDeal(Request $request){

        $answer['result'] = $request->toArray();
        return response()->json($answer);
    }






    /*
    *
    * GET <baseUrl>/api/<role_name>/deals/<id>
    *
    */
    public function getDeal($id){
        return response()->json(['result'=>1]);
    }





    /*
    *
    * POST <baseUrl>/api/<role_name>/deals/<id>
    *
    */
    public function updateDeal($id,Request $request){


        return response()->json(['result'=>1]);
    }






    /*
    *
    * DELETE <baseUrl>/api/<role_name>/deals/<id>
    *
    */
    public function deleteDeal($id){
        return response()->json(['result'=>1]);
    }






    public function getCurrencies(Request $request){

        
        return response()->json($request->toArray()); 
    }


}
