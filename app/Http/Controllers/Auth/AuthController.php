<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
   
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }


    public function auth(Request $request){

      $params = $request->only('email', 'password');

      $email = $params['email'] ?? "admin@admin.ru";
      $password = $params['password'] ?? "secret";

      if(\Auth::attempt(['email' => $email, 'password' => $password])){
        return \Auth::user()->createToken('token_user', []);
      }

      return response()->json(['error' => 'Invalid email or Password']);
    }



    public function index(Request $request){
        return $request->user();
    }

}
