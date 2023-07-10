<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <link rel="icon" type="image/x-icon" href="http://localhost:8080/olive-kitchen/logo_olive.jpg">

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home_style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script>
        function reveal() {
    var reveals = document.querySelectorAll(".reveal");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }
  
  window.addEventListener("scroll", reveal);
    </script>
</head>

<body>
  
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="d-flex align-items-center"><span>044-22-74-1916</span></i>
      </div>

    </div>
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">


      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="<?php echo SITEURL;?>">Home</a></li>
          <li><a class="nav-link scrollto" href="<?php echo SITEURL;?>categories.php">Categories</a></li>
          <li><a class="nav-link scrollto" href="<?php echo SITEURL;?>foods.php">Foods</a></li>
          <li><a class="nav-link scrollto" href="http://localhost:8080/olive-kitchen/restaurant.php">Redirect to mainpage</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

