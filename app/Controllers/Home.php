<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Home extends BaseController
{
	protected $komikModel;
	public function __construct()
	{
		$this->komikModel = new KomikModel();
	}
	public function index()
	{
		$data = [
			'title' => 'Home',
			'komik' => $this->komikModel->getKomik(),
			// 'komik' => $this->komikModel->getKomik($slug)

		];
		return view('home/index', $data);

		// return view('welcome_message');
		// echo 'Hello Pages';
		// return view('pages/home');

	}

	//--------------------------------------------------------------------

	public function blog()
	{
		$data = [
			'title' => 'Blog',
			'komik' => $this->komikModel->getKomik()
		];

		return view('home/blog', $data);
	}

	//--------------------------------------------------------------------
	public function detail($slug)
	{
		$data = [
			'title' => 'Event',
			// 'komik' => $this->komikModel->getKomik(), // ini untuk findAll
			'komik' => $this->komikModel->getKomik($slug) // ini untuk $slug

		];

		return view('home/detail', $data);
	}

	//--------------------------------------------------------------------
	public function profile()
	{
		$data = [
			'title' => 'Profile',
			'komik' => $this->komikModel->getKomik(), // ini untuk findAll

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