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
$routes->setAutoRoute(true); //Untuk mencari jalan sendiri ke database secara otomatis
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

// === ROUTES UNTUK TODOLIST === 
$routes->get('/todolist', 'todolist::index');

// === ROUTES UNTUK ASISTEN ===
//asisten itu nama untuk mempersingkat nama dari asistencontroller
use App\Controllers\AsistenController;
use App\Controllers\SalonController;

// $routes->get('asisten', 'AsistenController::index');
// $routes->get('/asisten/edit', [AsistenController::class, 'edit']);
// $routes->get('/asisten/delete', [AsistenController::class, 'delete']);

// $routes->get('/asisten', 'AsistenController::index');
// $routes->get('/asisten/edit', 'AsistenController::edit');
// $routes->get('/asisten/delete', 'AsistenController::delete');

// $routes->match(['get', 'post'], 'asisten/simpan',[AsistenController::class, 'simpan']);

// $routes->get('/', 'Home::index');
// $routes->get('/asisten', 'AsistenController::index');
// $routes->match(['get', 'post'], 'asisten/simpan', [AsistenController::class, 'simpan']);
// $routes->match(['get', 'post'], 'asisten/update', [AsistenController::class, 'update']);
// $routes->match(['get', 'post'], 'asisten/delete', [AsistenController::class, 'delete']);
// $routes->match(['get', 'post'], 'asisten/search', [AsistenController::class, 'search']);
// $routes->match(['get', 'post'], 'asisten/login', [AsistenController::class, 'login']);
// $routes->match(['get', 'post'], 'asisten/check', [AsistenController::class, 'check']);
// $routes->match(['get', 'post'], 'asisten/logout', [AsistenController::class, 'logout']);

// =========== SALON CONTROLLER ===============
$routes->get('/start', 'SalonController::salonStart');
$routes->get('/home', 'SalonController::index');
$routes->get('/homeL', 'SalonController::afterLogin');
$routes->get('/homeAdmin', 'SalonController::homeAdmin');
$routes->get('/salon/logout', 'SalonController::logout');


// ===== ADMIN =====
$routes->match(['get', 'post'], 'salon/salonLoginAdmin', [SalonController::class, 'loginAdmin']);
$routes->match(['get', 'post'], 'salon/salonCheckLoginAdmin', [SalonController::class, 'checkLoginAdmin']);


// ===== MEMBER  & GUEST =====
$routes->match(['get', 'post'], 'salon/salonRegister', [SalonController::class, 'register']);
$routes->match(['get', 'post'], 'salon/salonCheckRegister', [SalonController::class, 'checkRegister']);

$routes->match(['get', 'post'], 'salon/salonLogin', [SalonController::class, 'login']);
$routes->match(['get', 'post'], 'salon/salonCheckLogin', [SalonController::class, 'checkLogin']);
$routes->match(['get', 'post'], 'salon/salonPricelistL', [SalonController::class, 'listLogin']);
$routes->match(['get', 'post'], 'salon/simpanReservasi', [SalonController::class, 'simpanRev']);

$routes->match(['get', 'post'], 'salon/salonPricelist', [SalonController::class, 'list']);
$routes->match(['get', 'post'], 'salon/salonPriceAdmin', [SalonController::class, 'listPriceAdmin']);
$routes->match(['get', 'post'], 'salon/salonTambahJasa', [SalonController::class, 'tambahJasa']);
$routes->match(['get', 'post'], 'salon/salonHapusJasa', [SalonController::class, 'hapusJasa']);
$routes->match(['get', 'post'], '/salon/salonValidasiPembayaran', [SalonController::class, 'ValidasiPembayaran']);
$routes->match(['get', 'post'], '/salon/updateValidasi', [SalonController::class, 'updateValidasi']);



// === ROUTES UNTUK PESAN ===  
// use App\Controllers\Pesan;
// $routes->get('/pesann', 'Pesan::index');
// $routes->get('(:segmen)',[Pesan::class, 'tampil']);
// $routes->match(['get', 'post'], 'pesan/inputpesan', [Pesan::class, 'inputpesan']);

// === ROUTES UNTUK KTP === 
// $routes->get('/Ktp', 'Ktp::index');
// $routes->get('(:segmen)',[Ktp::class, 'view']);

// === ROUTES UNTUK NEWS === 
// use App\Controllers\News;
// $routes->get('/news', 'News::index');
// $routes->match(['get', 'post'], 'news/create', [News::class, 'create']);
// $routes->get('news/(:segment)', [News::class, 'view']);
// $routes->get('news', [News::class, 'index']);

// === ROUTES UNTUK PAGES === 
// use App\Controllers\Pages;
// $routes -> get('pages', [Pages::class, 'index']);
// $routes->get('(:segmen)',[Pages::class, 'view']);
// $routes->get('pages', [Pages::class, 'index']);
// $routes->get('(:segment)', [Pages::class, 'view']);

// //ROUTES UNTUK LOGIN 
use App\Controllers\Login;
$routes->get('login', 'Login::index');
$routes->get('login/home', [Login::class, 'home']);
$routes->get('login/logout', [Login::class, 'logout']);
$routes->match(['get', 'post'], 'login/check', [Login::class, 'check']);

// // === ROUTES UNTUK SALON === 
// $routes->get('/salon', 'Salon::index');
// use App\Controllers\Salon;

// $routes->match(['get', 'post'], 'salon/create', [News::class, 'create']);
// $routes->get('news/(:segment)', [News::class, 'view']);
// $routes->get('news', [News::class, 'index']);
// $routes->get('pages', [Pages::class, 'index']);
// $routes->get('(:segment)', [Pages::class, 'view']);



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
