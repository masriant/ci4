<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Admin extends BaseController
{
  public function index()
  {
    $data = [
      'title'     => 'Admin',
      'content'   => 'admin/index'
    ];

    echo view('layout/content_wrapper', $data);
    // return view('welcome_message');
    //echo 'Ini adalah controller Admin method index dalam folder Admin';
  }

  //--------------------------------------------------------------------
  public function home()
  {
    $data = [
      'title'     => 'Admin Home',
      'content'   => 'admin/home'
    ];

    echo view('layout/content_wrapper', $data);
  }

  //--------------------------------------------------------------------

}