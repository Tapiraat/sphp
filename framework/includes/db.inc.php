<?php

if(!defined('SPHPrun')) {
   die('Direct access not permitted');
}

include 'config.php';

$connection = mysqli_connect($DatabaseServer, $DatabaseUser, $DatabasePass, $DatabaseName);

unset($DatabaseServer);
unset($DatabaseUser);
unset($DatabasePass);
unset($DatabaseName);

?>
