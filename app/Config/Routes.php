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
$routes->get('banksoal/(:num)', 'BankSoal::daftarBab/$1');
$routes->get('banksoal/(:num)/tambah_bab', 'BankSoal::tambahBab/$1');
$routes->get('banksoal/:num/tambah_ujian','Ujian::tambahUjian/$1');
$routes->get('banksoal/(:num)/detail_ujian/(:num)','Ujian::detailUjian/$1/$2');
$routes->get('banksoal/(:num)/ubah_ujian/(:num)','Ujian::ubahUjian/$1/$2');
$routes->get('banksoal/(:num)/hapus_ujian/(:num)','Ujian::hapusUjian/$1/$2');
$routes->get('banksoal/(:num)/ubah_bab/(:num)','BankSoal::ubahBab/$1/$2');
$routes->get('banksoal/(:num)/hapus_bab/(:num)','BankSoal::hapusBab/$1/$2');
$routes->get('banksoal/(:num)/bab/(:num)','Soal::daftarSoal/$1/$2');
$routes->get('banksoal/(:num)/bab/(:num)/tambah_soal','Soal::tambahSoal/$1/$2');
$routes->post('banksoal/(:num)/bab/(:num)/simpan_soal','Soal::simpanSoal/$1/$2');
$routes->get('banksoal/(:num)/bab/(:num)/detail_soal/(:num)','Soal::detailSoal/$1/$2/$3');
$routes->get('banksoal/(:num)/bab/(:num)/ubah_soal/(:num)','Soal::ubahSoal/$1/$2/$3');
$routes->get('banksoal/(:num)/bab/(:num)/hapus_soal/(:num)','Soal::hapusSoal/$1/$2/$3');
$routes->get('banksoal/(:num)/bab/(:num)/update_soal/(:num)','Soal::updateSoal/$1/$2/$3');