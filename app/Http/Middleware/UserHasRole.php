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

class UserHasRole
{
	const DELIMITER = '|';

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
	public function handle($request, Closure $next, $roles = null)
	{
		

		if($this->auth->guest()){
			return redirect("login");
		}

		if($roles){
			if (!is_array($roles)) {
				$roles = explode(self::DELIMITER, $roles);
			}
			
			if (!$request->user()->hasRole($roles)) {
				return redirect("norole");
			}
			
		}else{
			$user_roles = $request->user()->roles()->get()->toArray();

			if(!count($user_roles)){
				return redirect("norole");
			}
		}
		

		return $next($request);
	}
}
