<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes = Services::routes();

// ---------- FRONTEND ROUTES ----------
$routes->get('/', 'Home::index');
$routes->get('/gallery', 'Home::gallery');
$routes->get('/contact', 'Home::contact');
$routes->get('/spiti', 'Home::spiti');
$routes->get('/vehicle', 'Home::vehicle');
$routes->get('/about', 'Home::about');
$routes->post('enquiry/send', 'Home::send');
$routes->post('vehicle/save', 'Home::saveVehicle');
$routes->post('contact/save', 'Home::saveContact');

$routes->get('reviews', 'ReviewController::index');
$routes->post('ReviewController/save', 'ReviewController::save');

$routes->get('admin/reviews', 'ReviewController::list');
$routes->get('ReviewController/toggleStatus/(:num)', 'ReviewController::toggleStatus/$1');
$routes->match(['get', 'post'], 'admin/delete_review/(:num)', 'ReviewController::delete_review/$1');


// ---------- ADMIN ROUTES ----------

$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function($routes) {
    $routes->get('/', 'Auth::index');         // shows login form
    $routes->get('login', 'Auth::index');     // also shows login form
    $routes->post('login', 'Auth::login');    // handles login form submit
    $routes->get('logout', 'Auth::logout');
});

$routes->group('admin', ['namespace' => 'App\Controllers\Admin', 'filter' => 'auth'], function($routes) {
    
    $routes->get('dashboard', 'Dashboard::index');
    $routes->get('change-password', 'Auth::changePasswordShow');
    $routes->post('save-password', 'Auth::changePassword');
    
    // Gallery Management
    $routes->get('gallery', 'Gallery::index');
    $routes->get('gallery/add', 'Gallery::add');
    $routes->post('gallery/store', 'Gallery::store');
    $routes->get('gallery/edit/(:num)', 'Gallery::edit/$1');
    $routes->post('gallery/update/(:num)', 'Gallery::update/$1');
    $routes->get('gallery/delete/(:num)', 'Gallery::delete/$1');

   // Enquiry Management
    $routes->get('enquiry-list', 'Enquirylist::index');
    $routes->get('enquiry/delete/(:num)', 'Enquirylist::delete/$1');

     // contact Management
    $routes->get('contact-list', 'ContactList::index');
    $routes->post('contact/delete/(:num)', 'ContactList::delete/$1');

      // vehicle Management
    $routes->get('vehicle-list', 'VehicleRental::index');
    $routes->post('vehicle/delete/(:num)', 'VehicleRental::delete/$1'); // POST delete


    // Banner Management (NEW)
    $routes->get('banner', 'BannerController::index');
    $routes->get('banner/add', 'BannerController::upload');
    $routes->post('banner/save', 'BannerController::insert');
    $routes->get('banner/toggle-status/(:num)', 'BannerController::updateStatus/$1');
    $routes->get('banner/edit/(:num)', 'BannerController::edit/$1');
    $routes->post('banner/update/(:num)', 'BannerController::update/$1');
    $routes->get('banner/delete/(:num)', 'BannerController::delete/$1');
    
    // Tour Packages
    $routes->get('tour-package', 'TourPackageController::index');
    $routes->get('tour-package/create', 'TourPackageController::add');
    $routes->post('tour-package/save', 'TourPackageController::store');
    $routes->get('tour-package/view/(:num)', 'TourPackageController::show/$1');
    $routes->get('tour-package/edit/(:num)', 'TourPackageController::edit/$1');
    $routes->post('tour-package/update/(:num)', 'TourPackageController::update/$1');
    $routes->get('tour-package/delete/(:num)', 'TourPackageController::delete/$1');
    $routes->get('tour-package/toggle-status/(:num)', 'TourPackageController::updateStatus/$1');
    
    // Category 
    $routes->get('category', 'CategoryController::index');
    $routes->get('category/create', 'CategoryController::add');
    $routes->post('category/save', 'CategoryController::store');
    $routes->get('category/edit/(:num)', 'CategoryController::edit/$1');
    $routes->post('category/update/(:num)', 'CategoryController::update/$1');
    $routes->get('category/delete/(:num)', 'CategoryController::delete/$1');
    $routes->get('category/toggle-status/(:num)', 'CategoryController::updateStatus/$1');
    
});



