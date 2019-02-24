<?php

namespace Application\Controllers;

use PlugRoute\Http\Request;

class HomeController
{
	public function index()
	{
		echo 'Home';
	}

	public function about()
	{
		echo 'About';
	}

	public function error(Request $request)
	{
		echo 'Error';
	}
}