<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Tentang</h2>
      <p>Brownies <span>Lumer</span></p>
    </div>

    <div class="row gy-4">
      <div class="col-lg-7 position-relative about-img" style="background-image: url(<?php echo base_url('assets'); ?>/img/gallery/brownies-3.jpeg) ;" data-aos="fade-up" data-aos-delay="150">
        <div class="call-us position-absolute">
          <h4>Pesan Sekarang</h4>
          <p>+1 5589 55488 55</p>
        </div>
      </div>
      <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
        <div class="content ps-0 ps-lg-5">
          <p class="fst-italic">
          Brownies jenis ini sebenarnya tidak berbeda dengan brownies biasa berbahan dasar coklat. Akan tetapi yang membedakannya adalah topping cokelat meleleh di bagian atas.
          <ul>
            <div class="section-header">
              <p><span>Topping</span></p>
            </div>
            <li><i class="bi bi-check2-all"></i> Brownies lumer dengan topping Coklat choco.</li>
            <li><i class="bi bi-check2-all"></i> Brownies lumer dengan topping Keju.</li>
            <li><i class="bi bi-check2-all"></i> Brownies lumer dengan topping oreo.</li>
          </ul>
          <p>
          Brownies yang fluffy dan padat, dengan lelehan coklat yang lumer di mulut, disajikan hangat bersama secangkir teh ataupun susu tentu menjadi ide menarik yang akan disukai oleh seluruh anggota.</p>

          <div class="position-relative mt-4">
            <img src="<?php echo base_url('assets'); ?>/img/gallery/brownies-1.jpeg" class="img-fluid" alt="">
            <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> -->
          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End About Section -->



<!-- ======= Book A Table Section ======= -->
<section id="book-a-table" class="book-a-table">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Pesan Brownies Lumer</h2>
      <p>Pesanan Anda <span>Segera Kami Kirim</span>, Terima kasih</p>
    </div>

    <div class="row g-0">

      <div class="col-lg-4 reservation-img" style="background-image: url(<?php echo base_url('assets') ?>/img/pesanan.jpeg);" data-aos="zoom-out" data-aos-delay="200"></div>

      <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Book a Table</button></div>
        </form>
      </div><!-- End Reservation Form -->

    </div>

  </div>
</section><!-- End Book A Table Section -->

<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>gallery</h2>
      <p><span>BrowniesLumer</span></p>
    </div>

    <div class="gallery-slider swiper">
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?php echo base_url('assets'); ?>/img/gallery/brownies-1.jpeg"><img src="<?php echo base_url('assets'); ?>/img/gallery/brownies-1.jpeg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?php echo base_url('assets'); ?>/img/gallery/brownies-2.jpeg"><img src="<?php echo base_url('assets'); ?>/img/gallery/brownies-2.jpeg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?php echo base_url('assets'); ?>/img/gallery/brownies-3.jpeg"><img src="<?php echo base_url('assets'); ?>/img/gallery/brownies-3.jpeg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?php echo base_url('assets'); ?>/img/gallery/brownies-4.jpeg"><img src="<?php echo base_url('assets'); ?>/img/gallery/brownies-4.jpeg" class="img-fluid" alt=""></a></div>
        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="<?php echo base_url('assets'); ?>/img/gallery/brownies-5.jpeg"><img src="<?php echo base_url('assets'); ?>/img/gallery/brownies-5.jpeg" class="img-fluid" alt=""></a></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Gallery Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <!-- <h2>Contact</h2> -->
      <p><span>Hubungi Kami</span></p>
    </div>

    <!-- <div class="mb-3">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div>End Google Maps -->

    <div class="row gy-4">

      <div class="col-md-6">
        <div class="info-item  d-flex align-items-center">
          <i class="icon bi bi-map flex-shrink-0"></i>
          <div>
            <h3>Alamat</h3>
            <p>Penggilingan, Perumahan taman buaran indah IV LA1, Jl.kebun anggrek - Jakarta Timur</p>
          </div>
        </div>
      </div><!-- End Info Item -->

      <div class="col-md-6">
        <div class="info-item d-flex align-items-center">
          <i class="icon bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Email</h3>
            <p>browniesLumer@gmail.com</p>
          </div>
        </div>
      </div><!-- End Info Item -->

      <div class="col-md-6">
        <div class="info-item  d-flex align-items-center">
          <i class="icon bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>WhatsApp</h3>
            <p>081918022902</p>
          </div>
        </div>
      </div><!-- End Info Item -->

      <div class="col-md-6">
        <div class="info-item  d-flex align-items-center">
          <i class="icon bi bi-share flex-shrink-0"></i>
          <div>
            <h3>Buka Jam</h3>
            <div><strong>setiap hari: 09.00 WIB</strong> - 16.00 WIB
              <!-- <strong>Sunday:</strong> Closed -->
            </div>
          </div>
        </div>
      </div><!-- End Info Item -->

    </div>

    <form action="forms/contact.php" method="post" role="form" class="php-email-form p-3 p-md-4">
      <div class="row">
        <div class="col-xl-6 form-group">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
        </div>
        <div class="col-xl-6 form-group">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
        </div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
      </div>
      <div class="form-group">
        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
      </div>
      <div class="my-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>
      </div>
      <div class="text-center"><button type="submit">Kirim Pesan</button></div>
    </form>
    <!--End Contact Form -->

  </div>
</section><!-- End Contact Section -->

<!-- online shop section -->
<section id="onlineshop" class="online shop">
  <div class="container" data-aos="fade-up">
    
    <div class="section-header">
      <p><span>Online Shop</span></p>
    </div>

    <div class="row gy-4">
      <div class="col-md-6">
        <div class="info-item d-flex align-items-center">
          <img src="<?php echo base_url('assets'); ?>/img/tokped.png" alt="" class="img-fluid" href="#">
          <img src="<?php echo base_url('assets'); ?>/img/shopee2.png" alt="" class="img-fluid" href="#">
        </div>
      </div>
    </div>

  </div>
</section>
<!-- End contact section -->

</main><!-- End #main -->
