<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('contact_form'); //welcome_message
	}
}
