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
			'alamat' => [
				[
					'tipe' => 'Rumah',
					'alamat' => 'Jl. Serdang Baru IX No. 4',
					'kota' => 'Jakarta Pusat'
				],
				[
					'tipe' => 'Kantor',
					'alamat' => 'Jl. Serdang Baru Raya No. 4B',
					'kota' => 'Jakarta Pusat'
				]
			]
		];

		return view('home/contact', $data);
	}

	//--------------------------------------------------------------------

}