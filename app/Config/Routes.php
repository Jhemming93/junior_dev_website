<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');



$routes->get('events', 'Events::index');

$routes->get('contact', 'Contact::index');
$routes->post('contact', 'Contact::sendEmail');

// Auth
service('auth')->routes($routes);
$routes->get('auth', 'Auth::index');
$routes->get('auth/login', 'Auth::login');
$routes->get('auth/register', 'Auth::register');
$routes->get('auth/magiclink', 'Auth::magiclink');

use App\Controllers\Pages;

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);


service('auth')->routes($routes);
