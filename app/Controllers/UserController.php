<?php

namespace Application\Controllers;

use PlugRoute\Http\Request;

class UserController
{
	private $request;

	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	public function showName()
	{
		echo $this->request->parameter('name');
	}

	public function showFullName()
	{
		echo implode(' ', $this->request->parameters());
	}
}