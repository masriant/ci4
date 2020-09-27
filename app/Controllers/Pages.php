<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home',
    ];
    echo view('templates/header');
    echo view('templates/head', $data);
    echo view('templates/nav');
    echo view('templates/sidebar');
    echo view('pages/home');
    echo view('templates/footer');
    // return view('welcome_message');
    // echo 'Hello Pages';
    // return view('pages/home');

  }

  //--------------------------------------------------------------------

  public function profile()
  {
    $data = [
      'title' => 'Profile',
    ];
    echo view('templates/header');
    echo view('templates/head', $data);
    echo view('templates/nav');
    echo view('templates/sidebar');
    echo view('pages/profile');
    echo view('templates/footer');
  }

  //--------------------------------------------------------------------

  public function about()
  {
    $data = [
      'title' => 'About Me',
    ];
    echo view('templates/header');
    echo view('templates/head', $data);
    echo view('templates/nav');
    echo view('templates/sidebar');
    echo view('pages/about');
    echo view('templates/footer');
  }

  //--------------------------------------------------------------------
  public function contact()
  {
    $data = [
      'title' => 'Contact Us',
    ];
    echo view('templates/header');
    echo view('templates/head', $data);
    echo view('templates/nav');
    echo view('templates/sidebar');
    echo view('pages/contact');
    echo view('templates/footer');
  }

  //--------------------------------------------------------------------

}