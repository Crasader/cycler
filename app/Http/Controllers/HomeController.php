<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware("auth");
       $this->middleware("hasRole");
       $this->middleware('hasSomeRoles')->except('selectrole');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('dashboard');
    }



    public function selectrole(){

        return view('auth.selectrole',['_user'=>Auth::user()]);
    }

}
