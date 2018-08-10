<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Contracts\Auth\Factory as Auth;
use Illuminate\Auth\Middleware\Authenticate as lAuthenticate;
use League\OAuth2\Server\Exception\OAuthServerException;
use Lcobucci\JWT\Parser;
use Laravel\Passport\Token;

class JWTAuthenticate extends lAuthenticate
{
    

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$guards
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle($request, Closure $next, ...$guards)
    {
        
        $this->authenticate($guards);

        if(in_array("api", $guards)){
            $this->checkTokenExpire($request,$guards);
        }

        return $next($request);
    }



    public function checkTokenExpire($request,$guards){

        $user = $request->user();
        if($request->bearerToken() && isset($user->id) && $user->id){
            $jwt = $request->bearerToken();
           
            // Attempt to parse and validate the JWT
            $token = (new Parser())->parse($jwt);
            $token_id = $token->getClaim('jti');
                
                

            $tokenModel = Token::where('id',$token_id)->
                                     where('expires_at', '>', now())->
                                     where('user_id',$user->id)->
                                     where('revoked',0)->first();
                
                
            if(!isset($tokenModel['id']) || !$tokenModel['id'])
                throw new \Exception('Token is invalid');
            
        }else{
            throw new AuthenticationException('Unauthenticated.', $guards);
        }

    }

}
