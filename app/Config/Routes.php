<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->match(['get', 'post'], '/guide/register', 'Guide::register');
$routes->group('raja-ampat', function($routes) {
    $routes->get('/', 'RajaAmpat::index');
    $routes->get('dive-spots', 'RajaAmpat::diveSpots');
    $routes->match(['get', 'post'], 'guide/register', 'RajaAmpat::registerGuide');
});