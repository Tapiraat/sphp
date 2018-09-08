<?php

if(!defined('SPHPrun')) {
   die('Direct access not permitted');
}

function SPHPBoot()
{
  include 'framework/core.php';
  include 'config.php';
  include 'framework/includes/db.inc.php';
  if ($passwordProtection == true) {
    include "$pageFolder/password_protection.$fileExtension";
    include 'framework/includes/footer.inc.php';
  } else { if ($maintenance == true) {
      include "framework/includes/$maintenancePage.$fileExtension";
      include 'framework/includes/footer.inc.php';
    } elseif ($maintenance == true && !file_exists("pages/$compuri.php")) {
      include "framework/includes/$maintenancePage.$fileExtension";
    } else { if ($compuri == "/") {
        include "$pageFolder/$homePage.$fileExtension";
      } elseif (!file_exists("$pageFolder/$compuri.$fileExtension")) {
        include "framework/includes/$errorDocument.$fileExtension";
      } else {
        include "$pageFolder/$compuri.$fileExtension";
      } include 'framework/includes/footer.inc.php';
    }
  }
}

?>
