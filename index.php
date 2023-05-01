<?php
require("config/commandes.php");
  $products=display();
?>

<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Site description -->
        <title>esamshop - Ecommerce project </title>
        <meta name="keywords" content="ESAM">
        <meta name="description" content="Achetez les meilleurs produits agricoles en ligne chez Ma Ferme en Ligne. Des fruits et légumes frais, des viandes de qualité supérieure, des produits laitiers et bien plus encore. Livraison rapide et fiable dans tout le monde">
        <meta name="author" content="ESAM">
      <!-- Site Icons -->
        <link rel="shortcut icon" href="images/ESAM-agri.ico" type="image/x-icon">
        <link rel="ESAM-agri" href="images/ESAM-agri.png">
      <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/style.css">
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
      
      <!-- Start Top Search -->
      <!-- End Top Search -->

    <main>
      <!-- Start main -->
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
    <!-- End main -->
    </main>

    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Business Time</h3>
                            <ul class="list-time">
                                <li>Monday - Friday: 09.00am to 06.00pm</li> <li>Saturday: 9.00am to 01.00pm</li> <li>Sunday: <span>Closed</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Newsletter</h3>
                            <form class="newsletter-box">
                                <div class="form-group">
                                    <input class="" type="email" name="Email" placeholder="Email Address*" />
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <button class="btn hvr-hover" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Social Media</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <ul>
                                <li><a href="https://www.linkedin.com/in/ammouri-bilel-5571a34b/"><i class="fab fa-linkedin" aria-hidden="true"></i><img src="/images/linkedin-logo.png"></a></li>
                                <li><a href="https://github.com/bilelammouri"><i class="fab fa-github" aria-hidden="true"></i><img src="/images/github-logo.png"></a></li>
                                <li><a href="https://www.researchgate.net/profile/Ammouri-Bilel"><i class="fab fa-Rgate" aria-hidden="true"></i><img src="/images/resgat-logo.png"></a></li>
                                <li><a href="https://orcid.org/0000-0002-5491-5172"><i class="fab fa-orcid" aria-hidden="true"></i><img src="/images/orcid-logo.png"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About esamshop</h4>
                            <p> Welcome to this guide on how to create an e-commerce website using PHP and XAMPP. E-commerce has become a crucial aspect of business in today's digital world, allowing businesses to reach customers worldwide and sell their products and services online. </p>                           
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Ecole Supérieure d'Agriculture de Mograne (ESA Mograne) <br>Mograne- Zaghouan,<br> 1121  </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+216-72660043">+216-72660043</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@esam-iresa.com">contactinfo@esam-iresa.com</a></p>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2023 <a href="https://github.com/bilelammouri">e-commerce Project</a> Design By :
            <a href="https://www.linkedin.com/in/ammouri-bilel-5571a34b/"><i class="fab fa-linkedin">Ammouri Bilel</a></p>
                <!-- https://html.design/ -->
    </div>
    <!-- End copyright  -->


  </body>
</html>
