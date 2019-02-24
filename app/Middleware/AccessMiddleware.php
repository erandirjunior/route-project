<?php

namespace Application\Middleware;

use PlugRoute\Http\Request;
use PlugRoute\Middleware\PlugRouteMiddleware;

class AccessMiddleware implements PlugRouteMiddleware
{
	public function handle($request): Request
	{
		return $request;
	}
}