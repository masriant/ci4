<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    // return view('welcome_message');
    echo 'Hello Pages';
  }

  //--------------------------------------------------------------------
  public function about()
  {
    // return view('welcome_message');
    echo 'Hello Pages 2';
  }

  //--------------------------------------------------------------------

}