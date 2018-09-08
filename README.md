![Logo](https://raw.githubusercontent.com/Tapiraat/sphp/master/assets/img/logo.pngs=100)

(SPHP is NOT built for non-developers, but front-end developers instead.)

A simple PHP template for building websites, removing the hassle of needing to build a system like this every single time.

SPHP has been built using classic PHP instead of OOP to make it easier to read for beginners.

## Setup

After downloading SPHP you can easily configure everything from your config.php file. This file allows you to change the site name, logo, homepage, and a lot more.

Before we get to that we need to first create our .htaccess (Apache) or nginx.conf (Nginx);
Apache is set up by default, but if you're using Nginx you can find your required nginx.conf file contents in the .htaccess as well.
```
#try_files $uri /index.php;
```

Once you're done setting everything up you're ready to start creating pages and style your site.

## Add a page

Go to your pages folder and create a new .php  file (or whatever you have set your file extension to in config.php); Now add this at the top off your page:

```php
<?php if(!defined('SPHPrun')){die('Direct access not permitted');}
$pageTitle = "Your page's name.";
include 'framework/includes/head.inc.php';
?>
```

You're now free to add anything you want.

## Style your site

To style your site you need to add all your styling inside assets/css/master.css

Your styling now get's loaded onto all your pages automatically. You can add classes to HtML on pages the same way as you were used to.

## Edit maintenance page

Your maintenance page (which you can toggle from your config.php) is located in framework/includes/maintenance.php, you can edit it from there.

## Your config.php file

## Advanced

Now getting into the more advanced SPHP features;