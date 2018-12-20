<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="<?php echo url_for('/img/dc.jpg'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/style.css'); ?>" >

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Dh33raj Portfolio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo url_for('/'); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo url_for('/about'); ?>">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo url_for('/resume'); ?>">Resume</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo url_for('/gallery'); ?>">Gallery</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Contact
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="https://www.facebook.com/i.am.anaremo" target="blank">Facebook</a>
              <a class="dropdown-item" href="https://www.twitter.com/theweirdgenie" target="blank">Twitter</a>
              <a class="dropdown-item" href="https://www.instagram.com/theweirdgenie" target="blank">Instagram</a>
                <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="mailto:dheeraj_chettri@yahoo.com">Email</a>
            </div>
            </li>
          </ul>
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>