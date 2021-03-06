<?php

namespace App\Controllers;

use App\Models\LakipModel;

class Home extends BaseController
{
	protected $lakipModel;
	public function __construct()
	{
		$this->lakipModel = new LakipModel();
	}
	public function index()
	{
		// $data = [
		// 	'title' => 'Home',
		// 	'lakip' => $this->lakipModel->getLakip(),
		// 	// 'lakip' => $this->lakipModel->getLakip($slug)

		// ];
		// return view('home/index', $data);

		return view('welcome_message');
		// echo 'Hello Pages';
		// return view('pages/home');

	}

	//--------------------------------------------------------------------

	public function blog()
	{
		$data = [
			'title' => 'Blog',
			'lakip' => $this->lakipModel->getLakip()
		];

		return view('home/blog', $data);
	}

	//--------------------------------------------------------------------
	public function detail($slug)
	{
		$data = [
			'title' => 'Event',
			// 'lakip' => $this->lakipModel->getLakip(), // ini untuk findAll
			'lakip' => $this->lakipModel->getLakip($slug) // ini untuk $slug

		];

		return view('home/detail', $data);
	}

	//--------------------------------------------------------------------
	public function profile()
	{
		$data = [
			'title' => 'Profile',
			'lakip' => $this->lakipModel->getLakip(), // ini untuk findAll

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
