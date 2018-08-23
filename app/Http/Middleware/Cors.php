<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {    
        
        $resp =  1 ? $next($request) : $this->corsHandle($request,$next);

        return $resp;
    }
    





    
    protected function corsHandle($request, Closure $next){

        if (! $this->isCorsRequest($request)) {
            return $next($request);
        }
        
        if($request->getMethod() === 'OPTIONS'){
            $response = response('Preflight OK', 200);
            
            $response->headers->set('Access-Control-Allow-Methods',  'GET, POST, PUT, DELETE, OPTIONS, PATCH');
            $response->headers->set('Access-Control-Allow-Headers', "Origin, Authorization, Content-Type, X-Auth-Token");
            $response->headers->set('Access-Control-Allow-Origin', "*");
            $response->headers->set('Access-Control-Max-Age', 60 * 60 * 24);
            
            return $response;
        }
        
        
        $response = $next($request);
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set('Access-Control-Expose-Headers', 'Cache-Control, Content-Language, Content-Type, Expires, Last-Modified, Pragma');
        
        
        return $response;

    }
    
    protected function isCorsRequest($request): bool
    {
        if (! $request->headers->has('Origin')) {
            return false;
        }

        return $request->headers->get('Origin') !== $request->getSchemeAndHttpHost();
    }
}
