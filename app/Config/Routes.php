<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'AuthController::viewLogin');
$routes->get('register', 'AuthController::viewRegister');
$routes->get('bankSoal', 'BankSoal::index');
$routes->post('login','AuthController::login');
$routes->post('register','AuthController::register');
$routes->get('banksoal', 'BankSoal::index');
$routes->get('banksoal/(:num)', 'BankSoal::daftarBab/$1');
$routes->get('banksoal/(:num)/tambah_bab', 'BankSoal::tambahBab/$1');
$routes->get('banksoal/:num/tambah_ujian','Ujian::tambahUjian/$1');
$routes->get('banksoal/(:num)/detail_ujian/(:num)','Ujian::detailUjian/$1/$2');
$routes->get('banksoal/(:num)/ubah_ujian/(:num)','Ujian::ubahUjian/$1/$2');
$routes->get('/banksoal/(:num)/hapus_ujian/(:num)','Ujian::hapusUjian/$1/$2');
$routes->get('/banksoal/(:num)/ubah_bab/(:num)','BankSoal::ubahBab/$1/$2');
$routes->get('/banksoal/(:num)/hapus_bab/(:num)','BankSoal::hapusBab/$1/$2');
