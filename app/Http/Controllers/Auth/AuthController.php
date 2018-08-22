<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;

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
      
      $email = $params['email'] ?? "";
      $password = $params['password'] ?? "";

      
      if(\Auth::attempt(['email' => $email, 'password' => $password])){
        
        
        $token = \Auth::user()->createToken('token_user', [],time()+config('auth.access_token_expires'));
        $json['token'] = $token->accessToken;
        $exp = $token->token->expires_at;
        
        $exp_date = $token->token->expires_at->toArray();
        $json['expires_at'] = $exp_date['timestamp'];
        
        return $json;
      }

      return response()->json(['error' => 'Invalid email or Password'],400);
    }



    public function register(Request $request){

        $v = $this->validator($request->all());
        

        if($v->fails()){
          return response()->json($v->errors(),400);
        }

        $user = $this->create($request->all());

        event(new Registered($user));

        return response()->json($user);
        
    }



    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


    public function index(Request $request){
        return $request->user();
    }

}
