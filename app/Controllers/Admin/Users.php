<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class Users extends BaseController
{
  protected $ModelUser;

  public function __construct()
  {
    $this->ModelUser = new ModelUser();
  }

  public function index()
  {
    $data = [
      'title'     => 'Users',
      'user'      => $this->ModelUser->get_data(),
      'content'   => 'admin/v_users'

    ];
    echo view('layout/content_wrapper_users', $data);
    // echo 'Ini adalah controller Users method index dalam folder Admin';
  }

  //--------------------------------------------------------------------
  public function create()
  {
    $data = [
      'title'     => 'Tambah Data Pengguna',
      'content'   => 'admin/v_adduser'
    ];
    echo view('layout/content_wrapper_users', $data);
  }

  //--------------------------------------------------------------------
  public function edit($id)
  {
    $data = [
      'title'     => 'Tambah Data Pengguna',
      // 'user'      => $this->ModelUser->find($id),
      'user'      => $this->ModelUser->getUsers($id),
      'content'   => 'admin/v_editusers'
    ];
    echo view('layout/content_wrapper_users', $data);
  }

  //--------------------------------------------------------------------
  public function save()
  {
    $slug = url_title($this->request->getVar('nama'), '-', true);
    $data = [
      'nama'        => $this->request->getPost('nama'),
      'slug'        => $slug,
      'username'    => $this->request->getPost('username'),
      'password'    => $this->request->getPost('password'),
      'level'       => $this->request->getPost('level')
    ];

    $this->ModelUser->insert_data($data);
    session()->setFlashdata('success', 'Data berhasil ditambahkan.');

    return redirect()->to(base_url('admin/users'));
  }
}