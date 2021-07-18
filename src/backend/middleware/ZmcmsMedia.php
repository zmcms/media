<?php
namespace Zmcms\Media\Backend\Middleware;
use Closure;use Session;use URL;class ZmcmsMedia
{
	public function handle($request, Closure $next){
		return $next($request);
	}
}
