<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();


/*
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->group('admin', static function ($routes) {
    $routes->get('akun', 'Admin\Home::akun');
    $routes->get('indikator', 'Admin\Home::indikator');
    $routes->get('capaian', 'Admin\Home::capaian');
    $routes->get('bidang', 'Admin\Home::bidang');

    $routes->get('add-indikator', 'Admin\Indikator::createIndikator');
    $routes->get('edit-indikator', 'Admin\Indikator::editIndikator');

    $routes->get('add-bidang', 'Admin\Bidang::createBidang');
    $routes->post('add-bidang', 'Admin\Bidang::saveBidang');
    $routes->get('bidang/edit/(:num)', 'Admin\Bidang::edit/$1');
});




// $routes->get('/akun', 'Home::akun');
// $routes->get('/indikator', 'Home::indikator');
// $routes->get('/capaian', 'Home::capaian');
// $routes->get('/bidang', 'Home::bidang');

/*
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}