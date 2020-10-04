<?php

namespace App\Controllers;

// use App\Models\ModelUser;

class Login extends BaseController
{
  protected $ModelUser;

  public function __construct()
  {
    // $this->ModelUser = new ModelUser();
    $this->db = \Config\Database::connect();
  }

  public function index()
  {
    return view('login/index');
  }

  public function cekuser()
  {
    if ($this->request->isAJAX()) {
      $userid = $this->request->getVar('userid');
      $pass = $this->request->getVar('pass');

      $validation = \Config\Services::validation();

      $valid = $this->validate([
        'userid' => [
          'label' => 'ID User',
          'rules' => 'required',
          'errors' => [
            'required' => '{field} tidak boleh kosong'
          ]
        ],

        'pass' => [
          'label' => 'Password',
          'rules' => 'required',
          'errors' => [
            'required' => '{field} tidak boleh kosong'
          ]
        ]
      ]);

      if (!$valid) {
        $msg = [
          'error' => [
            'userid' => $validation->getError('userid'),
            'password' => $validation->getError('pass'),
          ]
        ];
      } else {


        //cek user dulu ke database
        $query_cekuser = $this->db->query("SELECT * FROM usersid JOIN levels ON levelid=userlevelid WHERE userid='$userid'");

        // $query_cekusermahasiswa = $this->db->query("SELECT * FROM mahasiswa JOIN levels ON levelid=mhslevelid WHERE nobp='$userid'");

        $query_cekuserregister = $this->db->query("SELECT * FROM register JOIN levels ON levelid=reglevelid WHERE noreg='$userid'");

        $result = $query_cekuser->getResult();
        // $result_mhs = $query_cekusermahasiswa->getResult();

        $result_reg = $query_cekuserregister->getResult();

        if (count($result) > 0) {
          // lanjutkan
          $row = $query_cekuser->getRow();
          $password_user = $row->userpass;

          if (password_verify($pass, $password_user)) {
            //buat session
            $simpan_session = [
              'login' => true,
              'iduser' => $userid,
              'namauser' => $row->usernama,
              'idlevel' => $row->userlevelid,
              'namalevel' => $row->levelnama
            ];
            $this->session->set($simpan_session);

            $msg = [
              'sukses' => [
                // 'link' => site_url('layout/index')
                'link' => site_url('dashboard')
              ]
            ];
          } else {
            $msg = [
              'error' => [
                'password' => 'Maaf password anda salah'
              ]
            ];
          }
          // } elseif (count($result_mhs) > 0) {
          //   $row_mhs = $query_cekusermahasiswa->getRow();
          //   $pass_mhs = $row_mhs->mhspass;
        } elseif (count($result_reg) > 0) {
          $row_reg = $query_cekuserregister->getRow();
          $pass_mhs = $row_reg->mhspass;

          if (password_verify($pass, $pass_mhs)) {
            $simpan_session = [
              'login' => true,
              'iduser' => $userid,
              'namauser' => $row_reg->nama,
              'idlevel' => $row_reg->mhslevelid,
              'namalevel' => $row_reg->levelnama
            ];
            $this->session->set($simpan_session);

            $msg = [
              'sukses' => [
                'link' => site_url('layout/index')
              ]
            ];
          } else {
            $msg = [
              'error' => [
                'password' => 'Maaf password anda salah'
              ]
            ];
          }
        } else {
          $msg = [
            'error' => [
              'userid' => 'Maaf ID User tidak ditemukan'
            ]
          ];
        }
      }

      echo json_encode($msg);
    }
  }

  public function keluar()
  {
    $this->session->destroy();
    return redirect()->to('/login/index');
  }

  // function test()
  // {
  //     echo password_hash('123', PASSWORD_BCRYPT);
  // }
}