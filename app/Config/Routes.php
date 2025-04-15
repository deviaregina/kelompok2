<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
<<<<<<< HEAD
$routes->get('/', 'Login::index');
$routes->get('login', 'Login::index');
$routes->post('login', 'Login::login');
$routes->get('logout', 'Login::logout');
$routes->get('dashboard', 'DashboardController::index');

$routes->get('dashboard/edit-profile', 'DashboardController::editProfile');
$routes->post('dashboard/update-profile', 'DashboardController::updateProfile');

$routes->get('dashboard/edit-profile', 'DashboardController::editProfile');
$routes->post('dashboard/update-profile', 'DashboardController::updateProfile');

$routes->get('training', 'MenuController::training');
$routes->get('mall', 'MenuController::mall');
$routes->get('berita', 'MenuController::berita');
$routes->get('member', 'MenuController::member');
$routes->get('pusat-saya', 'MenuController::pusatSaya');
=======
$routes->get('/auth', 'Auth::index');
$routes->post('/auth/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');

>>>>>>> 6eb8e969e6f907eda0a887bc62d007c6e0acbf87
