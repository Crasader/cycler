<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware("auth");
       $this->middleware("role:manager");
       
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
        return response()->json(['result'=>1]);
    }






    /*
    * 
    * GET <baseUrl>/api/<role_name>/deals
    *
    */
    public function getDeals(){
        return response()->json(['result'=>1]);
    }






    /*
    * PUT <baseUrl>/api/<role_name>/deals
    */
    public function createDeals(){
        return response()->json(['result'=>1]);
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
    public function updateDeal($id){
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
}
