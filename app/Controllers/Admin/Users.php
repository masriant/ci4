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
      'user'      => $this->ModelUser->getUsers(),
      // 'user'      => $this->ModelUser->get_data(),
      'content'   => 'admin/v_users'

    ];
    echo view('layout/content_wrapper_users', $data);
    // echo 'Ini adalah controller Users method index dalam folder Admin';
  }

  //--------------------------------------------------------------------
  public function detail($slug)
  {

    $data = [
      'title' => 'Detail Users',
      'user' => $this->ModelUser->getUsers($slug),
      'content'   => 'admin/v_usersdetail'
    ];

    if (empty($data['user'])) {
      throw new \CodeIgniter\Exceptions\PageNotFoundException('Data yang dicari adalah " ' . $slug . ' " tidak ditemukan dalam database kami.');
    }
    // return view('admin/users/detail', $data);
    echo view('layout/content_wrapper_users', $data);
  }

  //--------------------------------------------------------------------
  public function create()
  {
    $data = [
      'title'     => 'Tambah Data Pengguna',
      'validation' => \Config\Services::validation(),
      'content'   => 'admin/v_adduser'
    ];
    echo view('layout/content_wrapper_users', $data);
  }

  //--------------------------------------------------------------------
  public function edit($slug)
  {
    $data = [
      'title'     => 'Edit Data Pengguna',
      'user'      => $this->ModelUser->getUsers($slug),
      'validation' => \Config\Services::validation(),
      'content'   => 'admin/v_editusers'
    ];
    echo view('layout/content_wrapper_users', $data);
  }

  //--------------------------------------------------------------------
  public function save()
  {
    if (!$this->validate([
      'nama' =>
      [
        'rules' => 'required|is_unique[users.nama]',
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'username' =>
      [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'password' =>
      [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'level' =>
      [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ]
    ])) {

      // return redirect()->to('/admin/users/create')->withInput();
      return redirect()->to('/admin/create')->withInput();
    }

    $slug = url_title($this->request->getVar('nama'), '-', true);

    $this->ModelUser->save([
      'nama'        => $this->request->getVar('nama'),
      'slug'        => $slug,
      'username'    => $this->request->getVar('username'),
      'password'    => $this->request->getVar('password'),
      'level'       => $this->request->getVar('level')
    ]);


    session()->setFlashdata('success', 'Data berhasil ditambahkan.');

    return redirect()->to(base_url('admin/users'));
  }
  //--------------------------------------------------------------------

  public function update($id)
  {
    $usersLama = $this->ModelUser->getUsers($this->request->getVar('slug'));
    if ($usersLama['nama'] == $this->request->getVar('nama')) {
      $rule_nama = 'required';
    } else {
      $rule_nama = 'required|is_unique[users.nama]';
    }

    if (!$this->validate([
      'nama' =>
      [
        'rules' => $rule_nama,
        'errors' => [
          'required' => '{field} harus diisi.',
          'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'username' =>
      [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'password' =>
      [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ],
      'level' =>
      [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} harus diisi.',
          // 'is_unique' => '{field} sudah terdaftar.'
        ]
      ]
    ])) {

      // return redirect()->to('/admin/users/edit/' . $this->request->getVar('slug'))->withInput();
      return redirect()->to('/admin/edit/' . $this->request->getVar('slug'))->withInput();
    }

    $slug = url_title($this->request->getVar('nama'), '-', true);

    $this->ModelUser->save([
      'id'          => $id,
      'nama'        => $this->request->getVar('nama'),
      'slug'        => $slug,
      'username'    => $this->request->getVar('username'),
      'password'    => $this->request->getVar('password'),
      'level'       => $this->request->getVar('level')
    ]);

    session()->setFlashdata('success', 'Data berhasil diubah.');

    return redirect()->to(base_url('admin/users'));
  }
  //--------------------------------------------------------------------
  //--------------------------------------------------------------------
  public function delete($id)
  {
    // cari gambar/sampul berdasarkan "id"
    // $user = $this->ModelUser->find($id);

    // cek jika gambar/sampul default.jpg
    // if ($user['sampul'] != 'default.jpg') {
    // Hapus gambar/sampul
    // unlink('img/' . $user['sampul']);
    // }

    $this->ModelUser->delete($id);
    session()->setFlashdata('success', 'Data berhasil dihapus.');
    return redirect()->to('/admin/users');
  }

  //--------------------------------------------------------------------
}