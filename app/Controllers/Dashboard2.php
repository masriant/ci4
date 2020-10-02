<?php

namespace App\Controllers;

class Dashboard2 extends BaseController
{

  public function index()
  {
    $data = [
      'title'     => 'Dashboard',
      'content'   => 'dashboard2/index'
    ];

    echo view('layout/content_wrapper', $data);
  }

  //--------------------------------------------------------------------
  public function contact()
  {
    $data = [
      'title'     => 'contact',
      'content'   => 'dashboard2/contact'
    ];

    echo view('layout/content_wrapper', $data);
  }

  //--------------------------------------------------------------------
  public function coba()
  {

    // return view('welcome_message');
    // echo view('layout/v_wrapper', $data);

    echo 'Hello Dashboard 2';
  }

  //--------------------------------------------------------------------
  public function home()
  {
    $data = [
      'title'     => 'Home',
      'content'   => 'dashboard2/home'
    ];

    echo view('layout/content_wrapper', $data);
  }
}