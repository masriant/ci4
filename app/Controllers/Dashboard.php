<?php

namespace App\Controllers;

class Dashboard extends BaseController
{

  public function index()
  {
    $data = [
      'title' => 'Dashboard'
    ];


    return view('dashboard/index', $data);
    // return view('dashboard/index');
    // return view('dashboard/welcome_message');
    // return view('welcome_message');
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