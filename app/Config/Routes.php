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
$routes->setDefaultController('Home');
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
$routes->get('/', 'Admin\Home::index');
$routes->group('admin', function ($routes) {
	$routes->add('buttons', 'Admin\Buttons::index');
	$routes->add('utilities-color', 'Admin\UColor::index');
	$routes->add('utilities-border', 'Admin\UBorder::index');
	$routes->add('utilities-animation', 'Admin\UAnimation::index');
	$routes->add('utilities-other', 'Admin\UOther::index');

	$routes->add('charts', 'Admin\Charts::index');
	$routes->add('tables', 'Admin\Tables::index');
});
$routes->get('/login', 'Admin\Login::index');
$routes->get('/register', 'Admin\Register::index');
$routes->get('/forgot-password', 'Admin\ForgotPassword::index');

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
