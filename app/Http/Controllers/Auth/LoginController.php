<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    protected function authenticated(Request $request, $user)
    {
        
        // $clients = $user->clients->toArray();

        // if(is_array($clients) && count($clients)){
        //     $query = http_build_query([
        //             'client_id' => $clients[0]['id'], // Replace with Client ID
        //             'redirect_uri' => $clients[0]['redirect'],
        //             'response_type' => 'code',
        //             'scope' => ''
        //     ]);
            

        //     return redirect('http://laracrm:8082/oauth/authorize?'.$query);
        // }
        
    }

}
