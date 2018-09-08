<?php

if(!defined('SPHPrun')) {
   die('Direct access not permitted');
}

// General site settings
$siteName = "Website"; // This is the name we'll use for your site.
$siteUrl = "https://mysite.com"; // The url to where you have installed SPHP (ex; http://mysite.com/sphp or http://mysite.com) [DO NOT FORGET HTTP:// !]
$siteDescription = ""; // The description we use in your meta tags.
$siteAuthor = ""; // Your name goes here.
$siteKeywords = "Anything, can, go, here"; // Good keywords that describe your site we use in your meta tags.
$language = "EN"; // Language used in your meta tags and admin area.
$logo = "assets/img/logo.png"; // Must directly link to the file (either locally or via a direct url!)

// Advanced
$pageFolder = "pages"; // Do not add a slash after the folder name!
$fileExtension = "php"; // Do not add a dot before the extension!
$homePage = "home"; // Do not add any extensions or folders here!
$errorDocument = "404"; // Do not add any extensions or folders here!
$passwordProtection = false; // Support for this is coming later.
$maintenance = false; // Set to true if you want to turn maintenance on.
$maintenancePage = "maintenance"; // Maintenance page file name (taken from the includes folder.)
$titleDivider = "|"; // Used to divide the website name and page title (ex; Website | Home)

// Database settings
$DatabaseName = ""; // Database name (ex; myDB)
$DatabasePass = ""; // Database password (ex; admin)
$DatabaseUser = ""; // Database username (ex; root)
$DatabaseServer = ""; // Database server (ex; localhost)

?>
