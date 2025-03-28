<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'AuthController::viewLogin');
$routes->get('register', 'AuthController::viewRegister');
$routes->post('login','AuthController::login');
$routes->post('register','AuthController::register');
