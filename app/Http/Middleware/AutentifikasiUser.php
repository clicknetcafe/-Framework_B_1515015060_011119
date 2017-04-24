<?php namespace App\Http\Middleware;

use Closure;

class AutentifikasiUser
{
	private $auth;
	public function __construct()
	{
		$this->auth = app('auth');
	}
	public function handle($request, Closure $next)
	{
		if($this->auth->Check()) {
			return $next($request);
		}
		return redirect('login')->withErrors('Silahkan Login terlebih dahulu');
	}
}