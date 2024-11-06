

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dashboard PPID 1374</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href={{asset("assets/img/favicon.png")}} rel="icon">
  <link href={{asset("assets/img/apple-touch-icon.png")}} rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- Vendor CSS Files -->
  <link href={{asset("assets/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">
  <link href={{asset("assets/vendor/bootstrap-icons/bootstrap-icons.css")}} rel="stylesheet">
  <link href={{asset("assets/vendor/aos/aos.css")}} rel="stylesheet">
  <link href={{asset("assets/vendor/glightbox/css/glightbox.min.css")}} rel="stylesheet">
  <link href={{asset("assets/vendor/swiper/swiper-bundle.min.css")}} rel="stylesheet">

  <!-- Main CSS File -->
  <link href={{asset("assets/css/main.css")}} rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="portfolio-details-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="/" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Dashboard</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          {{-- <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> --}}
          <li><a href="/">Home</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="">{{ auth()->user()->name}}</a>
      <a class="btn text-white" href="/logout">
        <i class="fa fa-sign-out"></i>
      </a>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Dashboard</li>
          </ol>
        </nav>
        <h1>Permohonan Informasi Publik</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Rincian Permintaan</h2>
          <p>Permohonan Informasi Publik</p>
        </div><!-- End Section Title -->

        <div class="container">
            <!-- Table -->
            <div class="row">
                <div class="col-4">
                    <h5 class="mb-3">Tanggal Permohonan </h5>
                    <h5 class="mb-3">Nama Pemohon</h5>
                    <h5 class="mb-3">Contact Person </h5>
                    <h5 class="mb-3">Rincian Informasi </h5>
                    <h5 class="mb-3">Tujuan Informasi</h5>
                    <h5 class="mb-3">Cara Memperoleh Informasi</h5>
                    <h5 class="mb-3">Cara Mendapatkan Salinan Informasi</h5>
                    <h5 class="mb-3">Status</h5>
                </div>
                <div class="col-8">
                    <p>: {{\Carbon\Carbon::parse($data->created_at)->format('d/m/Y')}}</p>
                    <p>: {{$data->nama}}</p>
                    <p>: {{$data->no_telp}}</p>
                    <p>: {{$data->rincian_info}}</p>
                    <p>: {{$data->tujuan_info}}</p>
                    <p>: {{$data->cara_peroleh_info}}</p>
                    <p>: {{$data->cara_dapat_salinan_info}}</p>
                    <p>: Selesai</p>
                </div>
            </div>
            <div>
        </div>

        </div>

      </section><!-- /Portfolio Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

        <img src="assets/img/cta-bg.jpg" alt="">

        <div class="container">

            {{-- <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-9 text-center text-xl-start">
                <h3>Form Permohonan Informasi Publik</h3>
                <p>Permintaan Informasi Publik melalui Pengisian Formulir</p>
            </div>
            <div class="col-xl-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href={{ url("/permohonan/create")}}>Buat Permohonan Informasi</a>
            </div>
            </div> --}}

        </div>

    </section><!-- /Call To Action Section -->

  </main>

  <footer id="footer" class="footer">

    {{-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div> --}}

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-6 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">BPS Kota Padang Panjang</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jl. Sutan Syahrir No. 2</p>
            <p>Silaing Bawah, Kota Padang Panjang</p>
            <p class="mt-3"><strong>Telepon :</strong> <span>(0752) 83089</span></p>
            <p><strong>Email:</strong> <span>bps1374@bps.go.id</span></p>
            <p><strong>Website:</strong> <span>padangpanjangkota.bps.go.id</span></p>
          </div>
        </div>

        {{-- <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div> --}}

        <div class="col-lg-6 col-md-12">
          <h4>Follow Us</h4>
          <p>Sosial Media BPS Kota Padang Panjang</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">BPS Kota Padang Panjang</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src={{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>
    <script src={{asset("assets/vendor/php-email-form/validate.js")}}></script>
    <script src={{asset("assets/vendor/aos/aos.js")}}></script>
    <script src={{asset("assets/vendor/glightbox/js/glightbox.min.js")}}></script>
    <script src={{asset("assets/vendor/swiper/swiper-bundle.min.js")}}></script>
    <script src={{asset("assets/vendor/waypoints/noframework.waypoints.js")}}></script>
    <script src={{asset("assets/vendor/imagesloaded/imagesloaded.pkgd.min.js")}}></script>
    <script src={{asset("assets/vendor/isotope-layout/isotope.pkgd.min.js")}}></script>

    <!-- Main JS File -->
    <script src={{asset("assets/js/main.js")}}></script>

</body>

</html>
