<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Import');
// $routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'Import::index');

// $routes->get('/', 'Layout::index', ['filter' => 'ceklogin']);

// Pasang ke semua yang akan di filter => , ['filter' => 'ceklogin']);

// $routes->get('/layout/(:any)', 'Layout::$1', ['filter' => 'ceklogin']);
// $routes->get('/layout', 'Layout::index', ['filter' => 'ceklogin']);

// Controller Dashboard
// $routes->get('/dashboard', 'Dashboard::index');
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'ceklogin']);
$routes->get('/dashboard/user', 'Dashboard::user', ['filter' => 'ceklogin']);
$routes->get('/dashboard/(:any)', 'Dashboard::detail/$1', ['filter' => 'ceklogin']);
$routes->get('/dashboard/(:any)', 'Dashboard::$1', ['filter' => 'ceklogin']);
$routes->get('/dashboard', 'Dashboard::$1', ['filter' => 'ceklogin']);



$routes->get('/dashboard2/(:any)', 'Dashboard::$1', ['filter' => 'ceklogin']);


// Controller Pages
// $routes->get('/', 'Pages::index');


// Controller Komik
$routes->get('/komik/create', 'Komik::create');
$routes->get('/komik/edit/(:segment)', 'Komik::edit/$1');
$routes->delete('/komik/(:num)', 'Komik::delete/$1');
$routes->get('/komik/(:any)', 'Komik::detail/$1');
$routes->get('/komik/(:any)', 'Komik::$1', ['filter' => 'ceklogin']);
$routes->get('/komik', 'Komik::$1', ['filter' => 'ceklogin']);

// Controller Orang
$routes->get('/orang/create', 'Orang::create');
$routes->get('/orang/edit/(:segment)', 'Orang::edit/$1');
$routes->delete('/orang/(:num)', 'Orang::delete/$1');
$routes->get('/orang/(:any)', 'Orang::detail/$1');

// Controller Blog
$routes->get('/blog/create', 'Blog::create');
$routes->get('/blog/edit/(:segment)', 'Blog::edit/$1');
$routes->delete('/blog/(:num)', 'Blog::delete/$1');
$routes->get('/blog/(:any)', 'Blog::detail/$1');

// Controller Home
$routes->get('/home/blog', 'Home::blog');
$routes->get('/home/contact', 'Home::contact');
$routes->get('/home/profile', 'Home::profile');
$routes->get('/home/(:segment)', 'Home::detail/$1');

// Khusus Controller Admin dan Users
// $routes->get('/admin', 'Admin\Admin::index');
// $routes->get('/users', 'Admin\Users::index');


// $routes->get('/admin', 'Admin\Users::index');
// $routes->get('/admin/users/create', 'Admin\Users::create');
// $routes->get('/admin/users/edit/(:segment)', 'Admin\Users::edit/$1');
// $routes->get('/admin/users/update/(:segment)', 'Admin\Users::update/$1');
// $routes->delete('/admin/users/(:num)', 'Admin\Users::delete/$1');
// $routes->get('/admin/users/(:any)', 'Admin\Users::detail/$1');

// Khusus Controller Admin = Admin\Users
// $routes->get('/admin', 'Admin\Users::index', ['filter' => 'ceklogin']);
// $routes->get('/admin/users', 'Admin\Users::index', ['filter' => 'ceklogin']);
// $routes->get('/admin/users/create', 'Admin\Users::create', ['filter' => 'ceklogin']);
// $routes->get('/admin/users/edit/(:segment)', 'Admin\Users::edit/$1', ['filter' => 'ceklogin']);
// $routes->get('/admin/users/update/(:segment)', 'Admin\Users::update/$1', ['filter' => 'ceklogin']);
// $routes->delete('/admin/users/(:num)', 'Admin\Users::delete/$1', ['filter' => 'ceklogin']);
// $routes->get('/admin/users/(:any)', 'Admin\Users::detail/$1', ['filter' => 'ceklogin']);

// Khusus Controller Admin = Admin
$routes->get('/admin', 'Admin\Users::index', ['filter' => 'ceklogin']);
$routes->get('/admin/users', 'Admin\Users::index', ['filter' => 'ceklogin']);
$routes->get('/admin/create', 'Admin\Users::create', ['filter' => 'ceklogin']);
$routes->get('/admin/edit/(:segment)', 'Admin\Users::edit/$1', ['filter' => 'ceklogin']);
// $routes->get('/admin/update/(:segment)', 'Admin\Users::update/$1', ['filter' => 'ceklogin']);
$routes->delete('/admin/(:num)', 'Admin\Users::delete/$1', ['filter' => 'ceklogin']);
$routes->get('/admin/(:any)', 'Admin\Users::detail/$1', ['filter' => 'ceklogin']);
$routes->get('/admin/(:any)', 'Admin\Users::$1', ['filter' => 'ceklogin']);
//// $routes->get('/admin', 'Admin\Users::$1', ['filter' => 'ceklogin']);

// Khusus Controller Users = Users
// $routes->get('/users', 'Admin\Users::index', ['filter' => 'ceklogin']);
// $routes->get('/users/create', 'Admin\Users::create', ['filter' => 'ceklogin']);
// $routes->get('/users/edit/(:segment)', 'Admin\Users::edit/$1', ['filter' => 'ceklogin']);
// $routes->get('/users/update/(:segment)', 'Admin\Users::update/$1', ['filter' => 'ceklogin']);
// $routes->delete('/users/(:num)', 'Admin\Users::delete/$1', ['filter' => 'ceklogin']);
// $routes->get('/users/(:any)', 'Admin\Users::detail/$1', ['filter' => 'ceklogin']);

// Khusus Controller Users = Admin\Users
$routes->get('/users', 'Admin\Users::index', ['filter' => 'ceklogin']);
$routes->get('/users/create', 'Admin\Users::create', ['filter' => 'ceklogin']);
$routes->get('/users/edit/(:segment)', 'Admin\Users::edit/$1', ['filter' => 'ceklogin']);
// $routes->get('/users/update/(:segment)', 'Admin\Users::update/$1', ['filter' => 'ceklogin']);
$routes->delete('/users/(:num)', 'Admin\Users::delete/$1', ['filter' => 'ceklogin']);
$routes->get('/users/(:any)', 'Admin\Users::detail/$1', ['filter' => 'ceklogin']);
$routes->get('/users/(:any)', 'Admin\Users::$1', ['filter' => 'ceklogin']);
// $routes->get('/users', 'Admin\Users::$1', ['filter' => 'ceklogin']);
/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}