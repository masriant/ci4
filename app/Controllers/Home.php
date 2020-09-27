<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		echo 'Hello Home';
	}

	//--------------------------------------------------------------------
	public function profile()
	{
		return view('layout/header');
		return view('layout/head');
		return view('layout/nav');
		return view('layout/sidebar');
		return view('layout/footer');
	}

	//--------------------------------------------------------------------
	public function about()
	{
		return view('welcome_message');
		// echo 'Hello about';
	}

	//--------------------------------------------------------------------

}