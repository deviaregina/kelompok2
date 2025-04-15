<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
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
