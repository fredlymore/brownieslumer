<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $page_title; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- fontawesome -->
  <!-- <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" /> -->

  <!-- Favicons -->
  <link href="<?php echo base_url('assets'); ?>/img/ico.png" rel="icon">
  <link href="<?php echo base_url('assets'); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets'); ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url('assets'); ?>/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url('assets'); ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets'); ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo base_url('assets'); ?>/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy - v1.3.0
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="./img/logo.png" alt=""> -->
        <h1>BrowniesLumer<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#onlineshop">Online Shop</a></li>
        </ul>
      </nav><!-- .navbar -->

      <!-- <a class="btn-book-a-table" href="#book-a-table">Pesan Sekarang</a> -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Brownies Lumer<br>Rasanya Bikin Nagih!!</h2>
          <p data-aos="fade-up" data-aos-delay="100">brownies dengan lelehan cokelat di atasnya sangat sempurna, dijamin bikin kamu gak berhenti makan.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
          <a href="https://api.whatsapp.com/send?phone=6287787858529&amp;text=Halo%20Toko%20BrowniesLumer,%20saya%20mau%20Tanya%20BrowniesLumer?" class="float" target="_blank">
            <i class="bi bi-whatsapp btn btn-outline-success bt-lg">WhatsApp</i>
          </a>
            <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 text-center text-lg-start">
          <img src="<?php echo base_url('assets'); ?>/img/logo.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="200">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->


  <!-- start main -->

  <?php echo $body; ?>

  <!-- end main -->


  <footer id="footer" class="footer">

<div class="container">
  <div class="row gy-3">
    <div class="col-lg-3 col-md-6 d-flex">
      <i class="bi bi-geo-alt icon"></i>
      <div>
        <h4>Alamat</h4>
        <p>
        Penggilingan, Perumahan taman buaran indah IV LA1,<br>
        Jl.kebun anggrek - Jakarta Timur<br>
        </p>
      </div>

    </div>

    <div class="col-lg-3 col-md-6 footer-links d-flex">
      <i class="bi bi-telephone icon"></i>
      <div>
        <h4>Hubungi</h4>
        <p>
          <strong>WhatsApp:</strong> 081918022902<br>
          <strong>Email:</strong> rowniesLumer@gmail.com<br>
        </p>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 footer-links d-flex">
      <i class="bi bi-clock icon"></i>
      <div>
        <h4>Buka Jam</h4>
        <p>
          <strong>setiap hari: 09.00 WIB</strong> - 16.00 WIB<br>
          <!-- Sunday: Closed -->
        </p>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 footer-links">
      <h4>Follow Media Social</h4>
      <div class="social-links d-flex">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

  </div>
</div>

<div class="container">
  <div class="copyright">
    <!-- &copy; Copyright <strong><span>Yummy</span></strong>. All Rights Reserved -->
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</div>

</footer><!-- End Footer -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?php echo base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/aos/aos.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/php-email-form/validate.js"></script>
<script src="<?php echo base_url('assets'); ?>/fontawesome/metadata/icons.json"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url('assets'); ?>/js/main.js"></script>

<!-- font awesome -->
<!-- <script src="https://kit.fontawesome.com/e6b2da2d8b.js" crossorigin="anonymous"></script> -->
</body>

</html>