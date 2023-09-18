<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login','Auth::index');
$routes->post('loginProses','Auth::loginproses');

$routes->presenter('register');
