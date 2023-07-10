<?php include('food-order/config/constants.php'); ?>

<!DOCTYPE html>
<html>
<head>
<title>Olive Kitchen</title>

<link rel="icon" type="image/x-icon" href="logo_olive.jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="bootstrap.min.css" rel="stylesheet">
    
    <link href="home_style.css" rel="stylesheet">

    <script>
        function reveall() {
    var reveals = document.querySelectorAll(".reveall");
  
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
  
  window.addEventListener("scroll", reveall);
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

      <h1 class="logo me-auto me-lg-0"><a href="#">Olive Kitchen</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#">Home</a></li>
          <li><a class="nav-link scrollto" href="<?php echo SITEURL; ?>">Food Order</a></li>
          <li><a class="nav-link scrollto" href="<?php echo SITEURL; ?>reserve.php">Reservation</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="feedback.php">Feedback</a></li>
          <li><a class="nav-link scrollto" href="<?php echo SITEURL; ?>admin/manage-admin.php ?>">Admin login</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

</div>
 
    <div id="hero">

      <div class="mySlides fade">
        <img src="about-bg.jpg" class="slideshow-container">
        <div class="pos_slide1">
          <span class="slide_welto">WELCOME TO </span><br><span class="slide_ok"><b>OLIVE KITCHEN</b></span>
        </div>
      </div>
      
      <div class="mySlides fade">
        <img src="hero-bg.jpg" class="slideshow-container">
        <div class="pos_slide2"><b>Making the world a better place<br> one plate at a time.</b></div>
      </div>
      
      <div class="mySlides fade">
        <img src="banner-img.jpg" class="slideshow-container">
        <div class="pos_slide2" style="color:#d9ba85;"><b>Come in with expectations.<br> Leave a lot more.!!!</b></div>
      </div>
      

     </div>

        <!-- About Start -->
        <div class="container-xxl py-5 slideshow-container reveall" id="about">
          <div class="container">
              <div class="row g-5 align-items-center">
                  <div class="col-lg-6">
                      <div class="row g-3 reveall">
                          <div class="col-6 text-start">
                              <img class="img-fluid rounded w-100 wow zoomIn" class="reveall" src="about-1.jpg">
                          </div>
                          <div class="col-6 text-start">
                              <img class="img-fluid rounded w-75 wow zoomIn" class="reveall"  src="about-2.jpg" style="margin-top: 25%;">
                          </div>
                          <div class="col-6 text-end">
                              <img class="img-fluid rounded w-75 wow zoomIn"class="reveall"  src="about-3.jpg">
                          </div>
                          <div class="col-6 text-end">
                              <img class="img-fluid rounded w-100 wow zoomIn"class="reveall"  src="about-4.jpg">
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 reveall">
                      <h5 class="section-title"><p>About Us</p></h5>
                      <h1 class="mb-4"><span style="color:antiquewhite">Welcome to</span>  <i class="fa fa-utensils text-primary me-2"></i><span style="color:antiquewhite;">Olive</span></h1>
                      <p class="mb-4 ">We welcome you to sit back, unwind and appreciate the lovely sights and hints of the ocean while our best gourmet expert sets you up a scrumptious dinner utilizing the best and freshest ingredients.<i>Olive Kitchen</i> legacy comes from The parent  Restaurant which was built up in 1963.

                        <i>Olive Kitchen</i> was worked for people in general and has advanced into a combination between exquisite chic and contemporary fine charge.
                        Enjoy our dazzling dishes and make the most of your eating background with us!</p>
                      <p class="mb-4"><br>Weekdays-9.00a.m-9.00-p.m<br>Weekends-24hrs working<br>Wednesday-Holiday</p>
                      <div class="row g-4 mb-4">
                          <div class="col-sm-6">
                              <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                  <h1 class="flex-shrink-0 display-5 text-primary mb-0" >15</h1>
                                  <div class="ps-4">
                                      <p class="mb-0">Years of</p>
                                      <h6 class="text-uppercase mb-0">Experience</h6>
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                  <h1 class="flex-shrink-0 display-5 text-primary mb-0" >50</h1>
                                  <div class="ps-4">
                                      <p class="mb-0">Popular</p>
                                      <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                  </div>
                              </div>
                          </div>
                      </div>
                     
                  </div>
              </div>
          </div>
      </div>
      <!-- About End -->
   

 <!-- ======= Events Section ======= -->
 <section id="events" class="events reveall">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Events</h2>
          <p>Organize Your Events in our Restaurant</p>
        </div>

        <div class="events-slider reveall">

              <div class="row event-item reveall">
                <div class="col-lg-6">
                  <img src="img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content reveall">
                  <h3>Birthday Parties</h3>
                  <div class="price">
                    <p><span>$189</span></p>
                  </div>
                  <p class="fst-italic">
                  The best thing about having a birthday party at Olive is that you would be having much less work to perform before or even after the event. The restaurant manager or even the restaurant owner would take down your details and requirements. They would be setting up and effectively organizing the party for you. Later on, once the party is over, you could reward the waiting staff.
                  </p>
                  <ul>
                    
                    <li><i class="bi bi-check-circled"></i><p class="fst-italic">You’re also saving a lot of money because you don’t have to pay anyone to arrange for separate items or services; everything you need is in one place. Many restaurants also have entertainment options like live bands too. Restaurant parties are more intimate and offer a better experience than ones held in halls.</p></li>
                  </ul>
                </div>
              </div>
<!-- End testimonial item -->
              <br/>
              <div class="row event-item reveall">
                <div class="col-lg-6">
                  <img src="img/event-private.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content reveall">
                  <h3>Private Parties</h3>
                  <div class="price">
                    <p><span>$290</span></p>
                  </div>
                  <p class="fst-italic">
                  Are you hosting a dinner party this weekend? There’s something about bringing friends and good food around a table that warms the soul. Dinner parties also create an opportunity to snap social media worthy photos of drinks, food, and friends enjoying each others company.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i> <p class="fst-italic">Keeping calm as we party on!</p></li>
                  
                  </ul>
                
                </div>
              </div>
<!-- End testimonial item -->
              <br/>
              <div class="row event-item reveall">
                <div class="col-lg-6">
                  <img src="img/event-custom.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content reveall">
                  <h3>Custom Parties</h3>
                  <div class="price">
                    <p><span>$99</span></p>
                  </div>
                  <p class="fst-italic">
                    Searching for a good sopt to host a custom party??? Well you have come to the right place!!!
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i> <p class="fst-italic">Our restaurant's peaceful environment will attarct you and sow the thought of coming again!!</p></li>
                    <li><i class="bi bi-check-circled"></i><p class="fst-italic">Come enjoy your party with us!!!</p></li>
                  </ul>
                </div>
              </div>
<!-- End testimonial item -->
            <br/>
          
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

     <!-- ======= Gallery Section ======= -->
     <section id="gallery" class="gallery reveall">

<div class="container" >
  <div class="section-title">
    <h2>Gallery</h2>
    <p>Some photos from Our Restaurant</p>
  </div>
</div>

<div class="container-fluid reveall">

  <div class="row g-0 reveall">

    <div class="col-lg-3 col-md-4 reveall">
      <div class="gallery-item">
        <a href="img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
          <img src="img/gallery/gallery-1.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-4 reveall">
      <div class="gallery-item">
        <a href="img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
          <img src="img/gallery/gallery-2.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-4 reveall">
      <div class="gallery-item">
        <a href="img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
          <img src="img/gallery/gallery-3.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-4 reveall">
      <div class="gallery-item">
        <a href="img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
          <img src="img/gallery/gallery-4.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-4 reveall">
      <div class="gallery-item">
        <a href="img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
          <img src="img/gallery/gallery-5.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-4 reveall">
      <div class="gallery-item">
        <a href="img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
          <img src="img/gallery/gallery-6.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-4 reveall">
      <div class="gallery-item">
        <a href="img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
          <img src="img/gallery/gallery-7.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div>

    <div class="col-lg-3 col-md-4 reveall">
      <div class="gallery-item">
        <a href="img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
          <img src="img/gallery/gallery-8.jpg" alt="" class="img-fluid">
        </a>
      </div>
    </div>

  </div>

</div>
</section><!-- End Gallery Section -->
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact reveall">
      <div class="container" >

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

      <div >
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d135547.2914750638!2d80.11368435984741!3d13.05725702820327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267da08fb322f%3A0xb15b37d2bbc0a948!2sOlive%20Kitchen!5e1!3m2!1sen!2sin!4v1655978722629!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
      </div>
      <p style="font-size:25px;">For details and queries,<br>Contact us:9445729803,8899234673<br>Email id:olivekitchen@gmail.com<br>Address:<br>267M+263, Anna University,<br>Kotturpuram,Chennai,<br>Tamil Nadu 600025</p>  
      
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


</body>
<script>
  let slideIndex = 0;
  showSlides();
  
  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 4000); // Change image every 4 seconds

    
  }
  </script>
</html>
