<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use Illuminate\Session\TokenMismatchException;
use Closure;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        
    ];



    public function handle($request, Closure $next){
        try {
            return parent::handle($request, $next);
        } catch (TokenMismatchException $e) {
            
            if ($request->ajax() || strpos($request->getUri(), '/api') !== false) {
                return response()->json(['message' => 'Надо залогиниться'], 418);
            }

            return redirect()->route('login');
        }
    }
}
