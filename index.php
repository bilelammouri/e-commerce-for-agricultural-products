<?php

require("config/commandes.php");

  $products=display();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>esamshop - Ecommerce project </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS for conexion box -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> 
</head>

    
<body>

  <header>
    <!-- Start Main Top -->
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Sign in</h4>
            <ul class="list-unstyled">
              <li><a href="login.php" class="text-white">Connect</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="15" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
          <strong>esam</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  <!-- End Main Top -->

  <!-- Start Main Top -->
  <header class="main-header">

      <!-- Start Navigation -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
          <div class="container">
              <!-- Start Header Navigation -->
              <div class="navbar-header">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa fa-bars"></i>
              </button>
                  <a class="navbar-brand" href="index.php"><img src="images/logob.png" class="logo" alt=""></a>
              </div>
              <!-- End Header Navigation -->

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="navbar-menu">
                  <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                      <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                      <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                      <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                      <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                  </ul>
              </div>
              <!-- /.navbar-collapse -->

              <!-- Start Atribute Navigation -->
              <div class="attr-nav">
                  <ul>
                      <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                      <li class="side-menu">
            <a href="https://www.google.com/maps/place/Ecole+Sup%C3%A9rieure+d'Agriculture+de+Mograne/@36.4279948,10.0911528,17z/data=!3m1!4b1!4m6!3m5!1s0x12fd10bb021689d3:0x423e78e729737b29!8m2!3d36.4279905!4d10.0937277!16s%2Fg%2F1hm38215h">
              <i class="fa fa-shopping-bag"></i>
              <span class="badge">3</span>
              <p>My Cart</p>
            </a>
          </li>
                  </ul>
              </div>
              <!-- End Atribute Navigation -->
          </div>


      </nav>
      <!-- End Navigation -->
  </header>
  <!-- End Main Top -->



    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->






<main>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php foreach($products as $product): ?> 
        <div class="col">
          <div class="card shadow-sm">
            <h3><?= $product->name ?></h3>
            <img src="<?= $product->image ?>" style="width: 24%">

            <div class="card-body">
              <p class="card-text"><?= substr($product->description, 0, 160); ?>...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="produit.php?pdt=<?= $product->id ?>"><button type="button" class="btn btn-sm btn-success">Voir plus</button></a>
                </div>
                <small class="text" style="font-weight: bold;"><?= $product->price ?> €</small>
              </div>
            </div>
          </div>
        </div>
  <?php endforeach; ?>


      </div>
    </div>
  </div>

</main>

  </body>
</html>
