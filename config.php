<?php

if(!defined('SPHPrun')) {
   die('Direct access not permitted');
}

/*
  Config system made by Micha de Vries @ www.mystem.tk
*/

if (!function_exists('sys_config')) {
  function sys_config($function, $input = false) {
    $json = file_get_contents(__DIR__ . '/locked/config.json');
    $config = json_decode($json, true);

    if ($function == 'get') {
      return $config;
    } elseif ($function == 'set') {
      $vars = explode('=', $input);
      $config[$vars[0]] = $vars[1];
      $n_config = json_encode($config, true);
      file_put_contents(__DIR__ . '/locked/config.json', $n_config);
      return $config;
    } elseif ($function == 'del') {
      if (isset($config[$input])) { unset($config[$input]); }
      $n_config = json_encode($config, JSON_PRETTY_PRINT);
      file_put_contents(__DIR__ . '/locked/config.json', $n_config);
      return $config;
    }
  }
}

$config = sys_config('get');

// General site settings
$siteName = $config['siteName']; // This is the name we'll use for your site.
$siteUrl = $config['siteUrl']; // The url to where you have installed SPHP (ex; http://mysite.com/sphp or http://mysite.com) [DO NOT FORGET HTTP:// !]
$siteDescription = $config['siteDescription']; // The description we use in your meta tags.
$siteAuthor = $config['siteAuthor']; // Your name goes here.
$siteKeywords = $config['siteKeywords']; // Good keywords that describe your site we use in your meta tags.
$language = $config['language']; // Language used in your meta tags and admin area.
$logo = $config['logo']; // Must directly link to the file (either locally or via a direct url!)

// Advanced
$pageFolder = $config['pageFolder']; // Do not add a slash after the folder name!
$fileExtension = $config['fileExtension']; // Do not add a dot before the extension!
$homePage = $config['homePage']; // Do not add any extensions or folders here!
$errorDocument = $config['errorDocument']; // Do not add any extensions or folders here!
$passwordProtection = $config['passwordProtection']; // Support for this is coming later.
$maintenance = $config['maintenance']; // Set to true if you want to turn maintenance on.
$maintenancePage = $config['maintenancePage']; // Maintenance page file name (taken from the includes folder.)
$titleDivider = $config['titleDivider']; // Used to divide the website name and page title (ex; Website | Home)

// Database settings
$DatabaseName = $config['DatabaseName']; // Database name (ex; myDB)
$DatabasePass = $config['DatabasePass']; // Database password (ex; admin)
$DatabaseUser = $config['DatabaseUser']; // Database username (ex; root)
$DatabaseServer = $config['DatabaseServer']; // Database server (ex; localhost)

?>
