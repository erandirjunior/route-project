<?php

require_once dirname(__DIR__).'/vendor/autoload.php';

$route = new \PlugRoute\PlugRoute();

$route->setRouteError('Application\Controllers\HomeController@error');

$route->get('/', 'Application\Controllers\HomeController@index');

$route->get('/about', 'Application\Controllers\HomeController@about');

$route->group(['prefix'=> '/people', 'middleware' => ['Application\Middleware\AccessMiddleware']], function($route) {
	$route->get('/{name:[a-z]+}', 'Application\Controllers\UserController@showName');

	$route->get('/{name:[a-z]+}/{lastName:[a-z]+}', 'Application\Controllers\UserController@showFullName');
});

$route->on();