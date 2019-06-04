<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller']    = 'home';
$route['404_override']          = 'home/error_page';
$route['translate_uri_dashes']  = FALSE;
$route['detail-box/(:any)']     = 'product/detail/$1';
$route['pesan-box']             = 'product/order';
