<?php 

namespace App\Http\Middleware;

/**
 * This file is part of Entrust,
 * a role & permission management solution for Laravel.
 *
 * @license MIT
 * @package Zizaco\Entrust
 */

use Closure;
use Illuminate\Contracts\Auth\Guard;

class UserHasSomeRoles
{

	protected $auth;

	/**
	 * Creates a new instance of the middleware.
	 *
	 * @param Guard $auth
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  Closure $next
	 * @param  $roles
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		
		if($this->auth->guest()){
			return redirect("login");
		}

		$roles = $this->auth->user()->roles()->get();
		
		if (count($roles) == 1) {
			$role = $roles[0];
			return redirect()->route($role->name);
		}else{
			return redirect()->route('selectrole');
		}

		return $next($request);
	}
}
