<?php

namespace App\Controllers;

use App\Models\ModelUser;

class Dashboard extends BaseController
{
  protected $ModelUser;

  public function __construct()
  {
    $this->ModelUser = new ModelUser();
  }

  public function index()
  {
    // $data = [
    //   'title' => 'Dashboard'
    // ];
    // return view('dashboard/index', $data);

    $data = [
      'title'     => 'Admin Dashboard',
      'content'   => 'admin/v_dashboard'
    ];

    echo view('layout/content_wrapper_users', $data);
  }

  //--------------------------------------------------------------------
  public function admin()
  {
    $data = [
      'title'     => ' Dashboard Admin',
      'content'   => 'admin/v_dashboard'
    ];

    echo view('layout/content_wrapper_users', $data);
  }

  //--------------------------------------------------------------------
  public function user()
  {
    $data = [
      'title'     => 'Dashboard',
      'user'      => $this->ModelUser->getUsers(),
      // 'user'      => $this->ModelUser->get_data(),
      'content'   => 'users/index'
    ];
    echo view('layout/content_wrapper_users', $data);
  }

  //--------------------------------------------------------------------
  public function detail($slug)
  {
    $data = [
      'title'     => 'Dashboard',
      // 'user'      => $this->ModelUser->get_data(),
      'user'      => $this->ModelUser->getUsers($slug),
      'content'   => 'users/detail'
    ];
    echo view('layout/content_wrapper_users', $data);
  }
}