<?php

include 'core/config.php';
include 'core/head.php';
include 'core/navbar.php';

if (!empty($homePage)) {
  include "pages/".$page;
} else {
  echo "Please include a homepage in your configuration file."
}

include 'core/footer.php';
?>
