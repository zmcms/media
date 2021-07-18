<?php
namespace Zmcms\Media\Frontend\Middleware;
use Closure;use Session;use URL;class ZmcmsMedia
{
	public function handle($request, Closure $next){
		return $next($request);
	}
}
