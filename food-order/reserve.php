<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <link rel="icon" type="image/x-icon" href="../logo_olive.jpg">

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home_style.css">

</head>

<body>
    <!-- Navbar Section Starts Here -->
    <!-- ======= Top Bar ======= -->
    <div class="bg_reserve">
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

      <h1 class="logo me-auto me-lg-0"><a href="#">Olive Kitchen</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="../restaurant.php">Home</a></li>
          <li><a class="nav-link scrollto" href="<?php echo SITEURL; ?>login_res.php">Login</a></li>
          <li><a class="nav-link scrollto" href="<?php echo SITEURL; ?>regis_res.php">Register</a></li>
        </ul>
      </nav><!-- .navbar -->
      

    </div>
  </header><!-- End Header -->
  <section>
    <div class="container bef_reserve">
      <?php
      if(isset($_SESSION['register'])){

        echo($_SESSION['register']);
        unset($_SESSION['register']);
      }

      ?>
    <h4 class="section-title"><p>Ready for dinner with someone special??</p></h4>
    <a onclick="alert('Please login to book table')" class="btn-book animated fadeInUp scrollto">Book a Table</a>
    </div>
      </section>
</div>

</div>


</body>
    </html>


