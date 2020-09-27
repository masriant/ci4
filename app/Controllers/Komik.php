<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
  protected $komikModel;
  public function __construct()
  {
    $this->komikModel = new KomikModel();
  }
  public function index()
  {
    $data = [
      'title' => 'Daftar Komik'
    ];



    // konneksi db menggunakan metode object oriented dgn model

    $komik = $this->komikModel->findAll();
    dd($komik);

    return view('komik/index', $data);
  }
  //--------------------------------------------------------------------

}