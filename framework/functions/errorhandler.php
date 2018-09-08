<?php

if(!defined('SPHPrun')) {
   die('Direct access not permitted');
}

function errorHandlerLive() {
  echo 'An error has occured, please contact the system administrator.';
}

function errorHandlerDebug($errorNr, $errorStr, $errorFileName, $errorLine) {
  echo "<b>Error:</b> [<b>$errorNr</b>] $errorStr in <b>$errorFileName</b> on line <b>$errorLine</b>. <b>(Report SPHP errors <a target=\"_blank\" href=\"https://github.com/Tapiraat/sphp/issues\">here</a>)</b><br>";
}

?>
