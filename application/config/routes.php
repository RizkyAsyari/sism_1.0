<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['login']='AuthController/login';
$route['logout']='AuthController/logout';


$route['dashboard']='DashboardController/index';
$route['tracking']='TrackingController/index';
$route['tracking/timeline']='TrackingController/lihat';
$route['tracking/timeline/(:any)']='TrackingController/lihat/$1';

$route['surat']='SuratController/index';
$route['surat/buat']='SuratController/buat';
$route['surat/lihat/(:any)']='SuratController/lihat/$1';
$route['surat/hapus/(:any)']='SuratController/hapus/$1';
$route['surat/edit/(:any)']='SuratController/edit/$1';
$route['surat/update/(:any)']='SuratController/update/$1';
$route['surat/disposisi/(:any)']='SuratController/disposisi/$1';
$route['surat/tampil_disposisi']='SuratController/tampil_disposisi';
$route['surat/tolak_surat']='SuratController/tolak_surat';
$route['surat/simpan_surat/(:any)']='SuratController/simpan_surat/$1';

$route['surat_keluar']='SuratKeluarController';
$route['surat_keluar/create/(:any)']='SuratKeluarController/create/$1';
$route['surat_keluar/setuju/(:any)']='SuratKeluarController/setujui_surat/$1';
$route['surat_keluar/cetak/(:any)']='SuratKeluarController/cetak_surat/$1';
$route['surat_keluar/tolak']='SuratKeluarController/tolak_surat';
$route['surat_keluar/hapus/(:any)']='SuratKeluarController/hapus/$1';




$route['akun']='AkunController/index';
$route['akun/hapus/(:any)']='AkunController/hapus/$1';
$route['akun/edit/(:any)']='AkunController/edit/$1';
$route['akun/update/(:any)']='AkunController/update/$1';


$route['default_controller'] = 'DashboardController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
