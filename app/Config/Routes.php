<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('aboutUs', 'Home::about_us');
$routes->get('acercaDe', 'Home::acerca_de');
$routes->get('register', 'Home::register');
$routes->get('login', 'Home::login');
$routes->get('catalog', 'Home::catalog');
