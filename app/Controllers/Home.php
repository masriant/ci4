<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home',
		];
		return view('home/index', $data);

		// return view('welcome_message');
		// echo 'Hello Pages';
		// return view('pages/home');

	}

	//--------------------------------------------------------------------

	public function profile()
	{
		$data = [
			'title' => 'Profile',
		];

		return view('home/profile', $data);
	}

	//--------------------------------------------------------------------

	public function about()
	{
		$data = [
			'title' => 'About Me',
		];

		return view('home/about', $data);
	}

	//--------------------------------------------------------------------
	public function contact()
	{
		$data = [
			'title' => 'Contact Us',
		];

		return view('home/contact', $data);
	}

	//--------------------------------------------------------------------

}