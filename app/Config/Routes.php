<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('error', 'Kesalahan::index');

$routes->get('login','Auth::index');
$routes->post('loginProses','Auth::loginproses');
$routes->get('logout','Auth::logout');

$routes->presenter('register');

$routes->presenter('role');
$routes->presenter('rolemenu');

$routes->post('pejabatpenandatangan/updatetoggle','Pejabatpenandatangan::updatetoggle');
$routes->presenter('pejabatpenandatangan');

$routes->post('bpk/cari','Bpk::cari');
$routes->presenter('bpk');

$routes->presenter('verifspt');

$routes->post('user/updatetoggle', 'User::updatetoggle');
$routes->presenter('user');
$routes->presenter('pegawai');

$routes->get('spt/pelaksana/(:num)','Spt::pelaksana/$1');
$routes->get('spt/getdatajenis','Spt::getdatajenis');
$routes->post('spt/getdatalokasi','Spt::getdatalokasi');
$routes->get('spt/verif','Spt::verif');
$routes->get('spt/verifinput','Spt::verifinput');
$routes->post('spt/simpanverif','Spt::simpanverif');
$routes->presenter('spt');

// $routes->get('pelaksana/updatetoggle/(:num)','Pelaksana::updatetoggle/$1');
$routes->post('pelaksana/updatetoggle','Pelaksana::updatetoggle');
// $routes->post('pelaksana/sptbupati','Pelaksana::sptbupati');
$routes->get('pelaksana/sptbupati/(:num)','Pelaksana::sptbupati/$1');
$routes->get('pelaksana/sptsekda/(:num)','Pelaksana::sptsekda/$1');
$routes->get('pelaksana/sptpdf/(:num)','Pelaksana::sptpdf/$1');
$routes->get('pelaksana/sppdpdf/(:num)','Pelaksana::sppdpdf/$1');
$routes->get('pelaksana/spdback/(:num)','Pelaksana::spdback/$1');
// $routes->get('pelaksana/cekpelaksana/(:num)','Pelaksana::cekpelaksana/$1');
$routes->presenter('pelaksana');

$routes->get('spjhotel/formspj/(:num)', 'spjhotel::formspj/$1');
$routes->post('spjhotel/upload', 'spjhotel::upload');
$routes->presenter('spjhotel');

$routes->get('spjpesawat/formspj/(:num)', 'SpjPesawat::formspj/$1');
$routes->post('spjpesawat/upload', 'SpjPesawat::upload');
$routes->presenter('spjpesawat');

$routes->get('spjtaksi/formspj/(:num)', 'SpjTaksi::formspj/$1');
$routes->post('spjtaksi/upload', 'SpjTaksi::upload');
$routes->presenter('spjtaksi');


$routes->get('laporjadin/lapor/(:num)','LaporJadin::lapor/$1');
$routes->get('laporjadin/form/(:num)','LaporJadin::form/$1');
$routes->get('laporjadin/formupload/(:num)','LaporJadin::formupload/$1');
$routes->post('laporjadin/upload','LaporJadin::upload');
$routes->presenter('laporjadin');


$routes->post('verifikasi/verif','Verifikasi::verif');
$routes->post('verifikasi/verifuangharian', 'Verifikasi::verifuangharian');
$routes->post('verifikasi/veriftaksi', 'Verifikasi::veriftaksi');
$routes->post('verifikasi/verifhotel', 'Verifikasi::verifhotel');
$routes->post('verifikasi/verifpesawat', 'Verifikasi::verifpesawat');
$routes->get('verifikasi/showlapor/(:num)','Verifikasi::showlapor/$1');
$routes->get('verifikasi/form/(:num)','Verifikasi::form/$1');
$routes->presenter('verifikasi');

$routes->get('rampung/formcetak/(:num)','Rampung::formcetak/$1');
$routes->get('rampung/form/(:num)','Rampung::form/$1');
$routes->presenter('rampung');


$routes->post('menu/updatetoggle','Menu::updatetoggle');
$routes->presenter('menu');

$routes->post('menusub/updatetoggle','Menusub::updatetoggle');
$routes->presenter('menusub');

$routes->presenter('uangharian');