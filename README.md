# SPHP

A simple PHP template for building websites, removing the hassle of needing to build a system like this every single time.

SPHP has been built using classic PHP instead of OOP to make it easier to read for beginners.

## How to make a new page

Go to your pages folder and make a new page, now add this at the top off your page;

```php
<?php if(!defined('SPHPrun')){die('Direct access not permitted');}
$pageTitle = "Your page's name.";
include 'framework/includes/head.inc.php';
?>
```

You're now free to add anything you want.
