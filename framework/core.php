<?php

// Warning, do not edit this file unless you know what you're doing!

if(!defined('SPHPrun')) {
   die('Direct access not permitted');
}

session_start();

include 'framework/functions/errorhandler.php';

// Some preset variables that are used throughout the site.

$sphp_corver = '1';
$sphp_cnum = '2282018';
$sphp_status = 'dev';
$sphp_ver = "SPHP R$sphp_corver ($sphp_corver.$sphp_cnum-$sphp_status)";
$year = date("Y");
$fulldate = date("F j, Y, g:i a");
$uri = "$_SERVER[REQUEST_URI]";
$compuri = htmlspecialchars( $uri, ENT_QUOTES, 'UTF-8' );
$debug = true;

if ($debug == true) {
  set_error_handler("errorHandlerDebug");
} elseif ($debug == false) {
  set_error_handler("errorHandlerLive");
}

?>
