<?php

namespace App\Controllers;

class Komik extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Daftar Komik'
    ];
    // cara konneksi db tanpa model
    $db = \Config\Database::connect();
    $komik = $db->query("SELECT * FROM komik");
    foreach ($komik->getResultArray() as $row) {
      d($row);
    }
    return view('komik/index', $data);
  }
  //--------------------------------------------------------------------

}