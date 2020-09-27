<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Daftar Komik'
    ];


    // $komikModel = new \App\Models\KomikModel();

    $komikModel = new KomikModel();
    $komik = $komikModel->findAll();
    dd($komik);

    return view('komik/index', $data);
  }
  //--------------------------------------------------------------------

}