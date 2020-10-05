<?php

namespace App\Controllers;

class Layout extends BaseController
{
  public function index()
  {
    $data = ['title' => 'Beranda'];
    return view('layout/beranda', $data);
  }

  //--------------------------------------------------------------------
  public function latihan()
  {
    $data = ['title' => 'Latihan'];
    return view('layout/latihan', $data);
  }

  //--------------------------------------------------------------------
  public function latihan2()
  {
    $data = ['title' => 'Latihan2'];
    return view('layout/latihan2', $data);
  }

  //--------------------------------------------------------------------
  public function form()
  {
    $data = ['title' => 'form'];
    return view('layout/form', $data);
  }

  //--------------------------------------------------------------------

  public function grid()
  {
    $data = ['title' => 'grid'];
    return view('layout/grid', $data);
  }

  //--------------------------------------------------------------------

}