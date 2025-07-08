<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Aplikasi Peminjaman Ruangan</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
    <link href="{{ asset('landing-page/img/logo.png') }}" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('landing-page/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing-page/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('landing-page/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h4 class="sitename">BookingClass</h4>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#facility">Facility</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#team">Our Team</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a class="btn-getstarted" href="...">Log In</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <img src="{{ asset('landing-page/img/hero-bg-2.jpg') }}" alt="" class="hero-bg">

      <div class="container">
        <div class="row gy-4 justify-content-between">
          <div class="col-lg-4 order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{ asset('landing-page/img/hero-img.png') }}" class="img-fluid animated" alt="">
          </div>

          <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
            <h1 class="display-1 fw-bold"> <span class="display-2"> PEMINJAMAN <br> RUANGAN </span></h1>
            <p>Aplikasi ini Merupakan sebuah project yang dibuat oleh kelompok 2 dalam memudahkan mahasiswa maupun dosen dalam melakukan peminjaman ruangan di STT-NF.</p>
            <div class="d-flex space-x-5">
              <a href="{{ route('filament.admin.auth.login') }}" class="btn-get-login">Login</a>
              <a href="{{ route('filament.admin.auth.register') }}" class="btn-get-login  ms-3">Register</a>
            </div>
          </div>

        </div>
      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-start gy-5">
          <div class="col-xl-5 content">
            <h3>Kelompok 2 - 24SI02</h3>
            <h2>About Us</h2>
            <p>Aplikasi ini dirancang untuk memudahkan proses peminjaman ruangan bagi mahasiswa dan dosen, sehingga kegiatan akademik dan non-akademik dapat berjalan lebih teratur dan efisien. Dengan antarmuka yang sederhana dan fitur yang fungsional, Pinjam Ruang hadir sebagai solusi digital untuk manajemen ruangan di lingkungan kampus. Kami percaya bahwa teknologi dapat memberikan kemudahan dalam pengelolaan fasilitas kampus secara transparan, cepat, dan terorganisir.</p>
            <a href="{{ route('filament.admin.auth.login') }}" class="read-more"><span>Login</span><i class="bi bi-arrow-right"></i></a>
          </div>
          <div class="col-xl-7">
            <section id="faq" class="faq section light-background" style="padding:0; background:none;">
              <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">
                <!-- Seluruh isi FAQ yang sudah ada dipindahkan ke sini -->
                <div class="faq-item faq-active">
                  <i class="faq-icon bi bi-balloon"></i>
                  <h3>Jangkauan Ruangan</h3>
                  <div class="faq-content">
                    <p>Sistem mencakup berbagai ruangan yang tersedia di lingkungan kampus STT-NF, seperti ruang kelas, perpustakaan, ruang seminar, dan aula. Gedung yang terdaftar meliputi Gedung B1, B2, B3, B4, dll.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
                <div class="faq-item">
                  <i class="faq-icon bi bi-star"></i>
                  <h3>Kemudahan Akses</h3>
                  <div class="faq-content">
                    <p>Aplikasi dapat diakses kapan saja. Antarmukanya dirancang sederhana agar mudah digunakan oleh seluruh civitas akademika, dengan informasi ruangan yang diperbarui secara real-time.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
                <div class="faq-item">
                  <i class="faq-icon bi bi-chat-square-heart-fill"></i>
                  <h3>Penggunaan Aplikasi</h3>
                  <div class="faq-content">
                    <p>Terbuka untuk seluruh civitas akademika, mulai dari mahasiswa, dosen, hingga staf kampus yang memerlukan ruangan untuk kegiatan akademik maupun non-akademik.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
                <div class="faq-item">
                  <i class="faq-icon bi bi-emoji-smile"></i>
                  <h3>Kapasitas</h3>
                  <div class="faq-content">
                    <p>Setiap ruangan memiliki kapasitas berbeda, mulai dari 20 hingga 150 orang. Informasi kapasitas ditampilkan di aplikasi untuk membantu pemilihan sesuai kebutuhan acara.</p>
                  </div>
                  <i class="faq-toggle bi bi-chevron-right"></i>
                </div><!-- End Faq item-->
              </div>
            </section>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    
    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-people"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="862" data-purecounter-duration="1" class="purecounter"></span>
              <p>Total Peminjaman</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-building"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter"></span>
              <p>Ruangan</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-bar-chart-line-fill"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Fasilitas</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-buildings"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
              <p>Gedung</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- facility Section -->
    <section id="facility" class="facility section">
        <div class="container section-title" data-aos="fade-up">
          <h2>Facility</h2>
        <div><span>Check Our</span> <span class="description-title">Facility</span></div>
        </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="facility-item">
              <i class="bi bi-fan" style="color: #ffbb2c;"></i>
              <h3><a href="" class="stretched-link">AC / Kipas Angin</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="facility-item">
              <i class="bi bi-pc-horizontal" style="color: #5578ff;"></i>
              <h3><a href="" class="stretched-link">LCD Projector</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="facility-item">
              <i class="bi bi-wifi" style="color: #e80368;"></i>
              <h3><a href="" class="stretched-link">Wifi</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="400">
            <div class="facility-item">
              <i class="bi bi-box" style="color: #e361ff;"></i>
              <h3><a href="" class="stretched-link">Meja & Kursi</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="500">
            <div class="facility-item">
              <i class="bi bi-pen" style="color: #47aeff;"></i>
              <h3><a href="" class="stretched-link">Alat Tulis</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="600">
            <div class="facility-item">
              <i class="bi bi-speaker" style="color: #ffa76e;"></i>
              <h3><a href="" class="stretched-link">Sound System</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="700">
            <div class="facility-item">
              <i class="bi bi-mic" style="color: #11dbcf;"></i>
              <h3><a href="" class="stretched-link">Microfon</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="800">
            <div class="facility-item">
              <i class="bi bi-laptop" style="color: #4233ff;"></i>
              <h3><a href="" class="stretched-link">Laptop / Komputer</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="900">
            <div class="facility-item">
              <i class="bi bi-calendar" style="color: #b2904f;"></i>
              <h3><a href="" class="stretched-link">Papan Tulis</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1000">
            <div class="facility-item">
              <i class="bi bi-tv" style="color: #b20969;"></i>
              <h3><a href="" class="stretched-link">Tv</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1100">
            <div class="facility-item">
              <i class="bi bi-plug" style="color: #ff5828;"></i>
              <h3><a href="" class="stretched-link">Stop Kontak</a></h3>
            </div>
          </div><!-- End Feature Item -->

          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="1200">
            <div class="facility-item">
              <i class="bi bi-moisture" style="color: #29cc61;"></i>
              <h3><a href="" class="stretched-link">Dispenser</a></h3>
            </div>
          </div><!-- End Feature Item -->

        </div>

      </div>

    </section><!-- /facility Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Ruangan</h2>
        <div><span>Our</span> <span class="description-title">Gallery</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('landing-page/img/gallery/gallery-1.png') }}" class="glightbox" data-gallery="images-gallery">
                <img src="{{ asset('landing-page/img/gallery/gallery-1.png') }}" alt="" class="img-fluid">
            </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('landing-page/img/gallery/gallery-2.png') }}" class="glightbox" data-gallery="images-gallery">
                <img src="{{ asset('landing-page/img/gallery/gallery-2.png') }}" alt="" class="img-fluid">
            </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('landing-page/img/gallery/gallery-3.png') }}" class="glightbox" data-gallery="images-gallery">
            <img src="{{ asset('landing-page/img/gallery/gallery-3.png') }}" alt="" class="img-fluid">
            </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('landing-page/img/gallery/gallery-4.png') }}" class="glightbox" data-gallery="images-gallery">
            <img src="{{ asset('landing-page/img/gallery/gallery-4.png') }}" alt="" class="img-fluid">
                </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset('landing-page/img/gallery/gallery-5.png') }}" class="glightbox" data-gallery="images-gallery">
            <img src="{{ asset('landing-page/img/gallery/gallery-5.png') }}" alt="" class="img-fluid">
            </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
                <a href="{{ asset('landing-page/img/gallery/gallery-6.png') }}" class="glightbox" data-gallery="images-gallery">
                <img src="{{ asset('landing-page/img/gallery/gallery-6.png') }}" alt="" class="img-fluid">
                </a>
            </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
                <a href="{{ asset('landing-page/img/gallery/gallery-7.png') }}" class="glightbox" data-gallery="images-gallery">
                <img src="{{ asset('landing-page/img/gallery/gallery-7.png') }}" alt="" class="img-fluid">
                </a>
            </div>
            </div><!-- End Gallery Item -->

            <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
                <a href="{{ asset('landing-page/img/gallery/gallery-8.png') }}" class="glightbox" data-gallery="images-gallery">
                <img src="{{ asset('landing-page/img/gallery/gallery-8.png') }}" alt="" class="img-fluid">
                </a>
            </div>
            </div><!-- End Gallery Item -->

        </div>

      </div>

    </section><!-- /Gallery Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <div><span>Check Our</span> <span class="description-title">Team</span></div>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": false,
              "speed": 600,
              "slidesPerView": 1,
              "spaceBetween": 30,
              "navigation": {
                "nextEl": ".team-swiper-button-next",
                "prevEl": ".team-swiper-button-prev"
              },
              "breakpoints": {
                "768": { "slidesPerView": 2 },
                "992": { "slidesPerView": 3 }
              }
            }
          </script>
          <div class="swiper-wrapper">
            <!-- Team Member 1 -->
        <div class="swiper-slide">
        <div class="member">
            <div class="pic">
            <img src="{{ asset('landing-page/img/team/zhahara.png') }}" class="img-fluid" alt="Zhahara N Sukirman">
            </div>
            <div class="member-info">
            <h4>Zhahara N Sukirman</h4>
            <span>0110124206</span>
            <div class="social">
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
            </div>
        </div>
        </div>

        <!-- Team Member 2 -->
        <div class="swiper-slide">
        <div class="member">
            <div class="pic">
            <img src="{{ asset('landing-page/img/team/fauzan.jpg') }}" class="img-fluid" alt="Muhammad Syahrul Fauzan">
            </div>
            <div class="member-info">
            <h4>Muhammad Syahrul Fauzan</h4>
            <span>0110124225</span>
            <div class="social">
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
            </div>
        </div>
        </div>

        <!-- Team Member 3 -->
        <div class="swiper-slide">
        <div class="member">
            <div class="pic">
            <img src="{{ asset('landing-page/img/team/mulan.jpg') }}" class="img-fluid" alt="Mulandari Putri">
            </div>
            <div class="member-info">
            <h4>Mulandari Putri</h4>
            <span>0110124132</span>
            <div class="social">
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
            </div>
        </div>
        </div>

           <!-- Team Member 4 -->
        <div class="swiper-slide">
        <div class="member">
            <div class="pic">
            <img src="{{ asset('landing-page/img/team/qois.png') }}" class="img-fluid" alt="Qois Nahwal Firdaus">
            </div>
            <div class="member-info">
            <h4>Qois Nahwal Firdaus</h4>
            <span>0110124014</span>
            <div class="social">
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
            </div>
        </div>
        </div>

        <!-- Team Member 5 -->
        <div class="swiper-slide">
        <div class="member">
            <div class="pic">
            <img src="{{ asset('landing-page/img/team/sania.jpg') }}" class="img-fluid" alt="Sania Agustin">
            </div>
            <div class="member-info">
            <h4>Sania Agustin</h4>
            <span>0110124180</span>
            <div class="social">
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
            </div>
        </div>
        </div>

          <!-- Swiper Navigation -->
          <div class="team-swiper-button-prev swiper-button-prev"></div>
          <div class="team-swiper-button-next swiper-button-next"></div>
        </div>
      </div>

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Contact</h2>
        <div><span>Check Our</span> <span class="description-title">Contact</span></div>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>Kampus A : Jl. Situ Indah 116, Tugu, Cimanggis, Depok, Jawa Barat.</p>
                <p>Kampus B: Jl. Raya Lenteng Agung No.20-21, RT.4/RW.1, Srengseng Sawah, Jagakarsa, Jakarta Selatan</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>Hotline: 0217863191</p>
                <p>Whatsapp: 085716243174</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>info@nurulfikri.ac.id</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">STT-NF</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Kampus A, Jalan Situ Indah No. 116, Depok;</p>
            <p>Kampus B, Jalan Lenteng Agung Raya No.20, Jakarta Selatan</p>
            <p class="mt-3"><strong>Phone:</strong> <span>085716243174</span></p>
            <p><strong>Email:</strong> <span>info@nurulfikri.ac.id</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-youtube"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>2024/2025</span> <strong class="px-1 sitename">Kelompok 2</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
    <script src="{{ asset('landing-page/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landing-page/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('landing-page/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('landing-page/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('landing-page/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('landing-page/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('landing-page/js/main.js') }}"></script>


</body>

</html>