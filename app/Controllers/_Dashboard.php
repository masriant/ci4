<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
  // public function __construct()
  // {
  //   helper('mr');
  //   $this->session = service('session');
  //   $this->auth = service('authentication');
  // }
  public function index()
  {
    // jika belum login, user tidak memiliki akses
    // if (!$this->auth->check()) {
    //   $redirectURL = session('redirect_url') ?? '/login';
    //   unset($_SESSION['redirect_url']);

    //   return redirect()->to($redirectURL);
    // }

    // $data = [
    //   'judul' => 'Dashboard'
    // ];


    // return view('dashboard/index', $data);
    return view('dashboard/index');
    // echo ('dashboard/index', $data);
    // echo 'dashboard/index';
  }

  //--------------------------------------------------------------------
  public function coba()
  {
    // return view('welcome_message');
    echo 'Hello Dashboard 2';
  }

  //--------------------------------------------------------------------
  public function home()
  {
    $data = [
      'title' => 'Home'

    ];

    // return view('dashboard/index', $data);
    echo view('dashboard/index', $data);
  }
}
