<?php

namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

class AuthController extends Controller
{
  public function auth()
  {
  $this->session = service('session');

  $this->config = config('Auth');
  $this->auth = service('authentication');
  }

  public function login()
  {
    // jika belum login, user tidak memiliki akses
    // No need to show a login form if the user
    // is already logged in. 
    if (!$this->auth->check()) {
      $redirectURL = session('redirect_url') ?? '/';
      unset($_SESSION['redirect_url']);

      return redirect()->to($redirectURL);
    }

    // set a return URL if none is specified
    $_SESSION['redirect_url'] = session('redirect_url') ?? previous_url() ?? '/login';

    return view($this->config->views['login'], ['config' => $this->config]);
  }

  public function attemptLogin()
  $rules = [
    'login'     => 'required',
    'password'  => 'required'
  ];
  if ($this->config->validFields == ['email']) {
    $rules['login'] .= '|valid_email';
  }

  if (!$this->validate($rules)) {
    return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
  }

  $login = $this->request->getPost('login');
  $password = $this->request->getPost('password');
  $remember = (bool) $this->request->getPost('remember');

  // Determine credential type
  $type =filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

  // try to log then in... 
  if (!$this->auth->attempt([$type => $login, 'password' => $password], $remember)) {
      return redirect()->back()->withInput()->with('error', $this->auth->error() ?? lang('Auth.badAttempt'));
  }

  // is the user being forced to reset their password?
  if ($this->auth->user()->force_pass_reset === true) {
    return redirect()->to(route_to('reset-password') . '?token=' . $this->auth->user()->reset_hash);
  }

  $redirectURL = session('redirect_url') ?? '/login';
  unset($_SESSION['redirect_url']);

  return redirect()->to('/')->with('message', lang('Auth.loginSuccess'));
  
}

// Log the user out
public function logout()
{
  if ($this->auth->check()) {
    $this->auth->logout();
  }

  return redirect()->to('login')
}