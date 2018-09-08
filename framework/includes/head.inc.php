<?php if(!defined('SPHPrun')){die('Direct access not permitted');}?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="og:title" content="<?php echo $pageTitle ?>"/>
    <meta name="og:url" content="<?php echo "$siteUrl$compuri"?>"/>
    <meta name="og:image" content="<?php echo $logo ?>"/>
    <meta name="og:site_name" content="<?php echo $siteName ?>"/>
    <meta name="og:description" content="<?php echo $siteDescription ?>"/>
    <meta name="keywords" content="<?php echo $siteKeywords ?>"/>
    <meta name="description" content="<?php echo $siteDescription ?>"/>
    <meta name="copyright"content="<?php echo $siteName ?>">
    <meta name="language" content="<?php echo $language ?>">
    <meta name="author" content="<?php echo $siteAuthor ?>">
    <link rel="shortcut icon" type="image/png" href="<?php echo $logo ?>"/>
    <link rel="stylesheet" href="assets/css/master.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/master.css">
    <title><?php echo "$siteName $titleDivider $pageTitle";?></title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"><img src="<?php echo $logo ?>" width="30" height="30" class="d-inline-block align-top" alt=""><?php echo $siteName ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search - Not functional" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
