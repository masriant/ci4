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

    echo view('layout/content_wrapper_admin', $data);
    // return view('welcome_message');
    //echo 'Ini adalah controller Admin method index dalam folder Admin';
  }

  //--------------------------------------------------------------------
  public function dashboard()
  {
    $data = [
      'title'     => 'Admin Dashboard',
      'content'   => 'admin/v_dashboard'
    ];

    echo view('layout/content_wrapper_users', $data);
  }

  //--------------------------------------------------------------------
  public function home()
  {
    $data = [
      'title'     => 'Admin Home',
      'content'   => 'admin/home'
    ];

    echo view('layout/content_wrapper_users', $data);
  }

  //--------------------------------------------------------------------
  public function charts()
  {
    $data = [
      'title'     => 'Charts JS',
      'content'   => 'admin/charts'
    ];

    echo view('layout/content_wrapper_users', $data);
  }

  //--------------------------------------------------------------------
  //--------------------------------------------------------------------
  public function chartsflot()
  {
    $data = [
      'title'     => 'Charts Flot',
      'content'   => 'admin/chartsflot'
    ];

    echo view('layout/content_wrapper_users', $data);
  }

  //--------------------------------------------------------------------

}