<?php if(!defined('SPHPrun')){die('Direct access not permitted');}
$pageTitle = "Home";
include 'framework/includes/head.inc.php';
?>

<div class="container">
  <h1>SPHP (Simple PHP)</h1>
  <h4>A flexible system built to help front-end developers get their projects off the ground without learning a back-end language.</h4>
  <hr>
  <h6>What's new in 1.2:</h6>
  <p>
    - The ability to change the home page.<br>
    - The ability to change the 404 page.<br>
    - The ability to change the page folder.<br>
    - New custom error handler for your live site.<br>
    - A maintenance mode (with the ability to change the maintenance page.)<br>
    - Page loading system has been moved out of the index.php file.<br>
    - Connect to your database from the config.php file (then use the variable $connection in your code.)<br>
    - Page titles are now automatically added to the site title.<br>
    - The ability to change the divider (that divides the site name from the page title.)<br>
    - Meta tags now automatically get filled in with the info given in the config.php file.<br>
    - config.php has been moved to the root folder.
  </p>
</div>
