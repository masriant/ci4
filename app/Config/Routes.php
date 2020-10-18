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
$routes->setDefaultController('Dashboard');
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
// $routes->get('/', 'Dashboard::index');
// $routes->get('/data', 'Data::index');
// $routes->get('/lakip', 'Lakip::index');
// $routes->get('/', 'Pages::index');

// Controller Dashboard
$routes->get('/dashboard/create', 'Dashboard::create');
$routes->get('/dashboard/edit/(:segment)', 'Dashboard::edit/$1');
$routes->delete('/dashboard/(:num)', 'Dashboard::delete/$1');
$routes->get('/dashboard/(:any)', 'Dashboard::detail/$1');
// Controller Data
$routes->get('/data/create', 'Data::create');
$routes->get('/data/edit/(:segment)', 'Data::edit/$1');
$routes->delete('/data/(:num)', 'Data::delete/$1');
$routes->get('/data/(:any)', 'Data::detail/$1');
// Controller Lakip
$routes->get('/lakip/create', 'Lakip::create');
$routes->get('/lakip/edit/(:segment)', 'Lakip::edit/$1');
$routes->delete('/lakip/(:num)', 'Lakip::delete/$1');
$routes->get('/lakip/(:any)', 'Lakip::detail/$1');
// Controller Category
$routes->get('/category/create', 'Category::create');
$routes->get('/category/edit/(:segment)', 'Category::edit/$1');
$routes->delete('/category/(:num)', 'Category::delete/$1');
$routes->get('/category/(:any)', 'Category::detail/$1');













// Controller Komik
$routes->get('/komik/create', 'Komik::create');
$routes->get('/komik/edit/(:segment)', 'Komik::edit/$1');
$routes->delete('/komik/(:num)', 'Komik::delete/$1');
$routes->get('/komik/(:any)', 'Komik::detail/$1');

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
$routes->get('/admin', 'Admin\Admin::index');
$routes->get('/users', 'Admin\Users::index');

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
