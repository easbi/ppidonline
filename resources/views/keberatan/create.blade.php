<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio Details - Arsha Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href={{asset("assets/img/favicon.png")}} rel="icon">
  <link href={{asset("assets/img/apple-touch-icon.png")}} rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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

      <a href={{url("/")}} class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">PPID</h1>
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
          <li><a href={{url("/")}}>Home</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="dashboard">Login</a>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href={{url("/")}}>Home</a></li>
            <li class="current">Pengajuan Keberatan atas Permohonan Informasi Publik</li>
          </ol>
        </nav>
        <h1>Pengajuan Keberatan atas Permohonan Informasi Publik</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Formulir</h2>
          <p>Pengajuan Keberatan atas Permohonan Informasi Publik</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row gy-4">

            {{-- <div class="col-lg-5">

              <div class="info-wrap">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h3>Address</h3>
                    <p>A108 Adam Street, New York, NY 535022</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone flex-shrink-0"></i>
                  <div>
                    <h3>Call Us</h3>
                    <p>+1 5589 55488 55</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h3>Email Us</h3>
                    <p>info@example.com</p>
                  </div>
                </div><!-- End Info Item -->

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div> --}}

            <div class="col-lg-12">
              <form action={{url("/keberatan")}} method="get" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">
                    <h4>A. INFORMASI PENGAJU KEBERATAN</h4>
                    <div class="col-md-12">
                        <label for="name-field" class="pb-2">Nomor Pendaftaran Permohonan Informasi*</label>
                        <input type="text" name="name" id="name-field" class="form-control" required="">
                    </div>
                    <div class="col-md-12">
                        <label for="name-field" class="pb-2">Tujuan Penggunaan Informasi*</label>
                        <input type="text" name="name" id="name-field" class="form-control" required="">
                    </div>
                    <h5>Identitas Pemohon</h5>
                    <div class="col-md-12">
                        <label for="name-field" class="pb-2">Nama Lengkap*</label>
                        <input type="text" name="name" id="name-field" class="form-control" required="">
                    </div>

                    <div class="col-md-12">
                        <label for="message-field" class="pb-2">Alamat</label>
                        <textarea class="form-control" name="message" rows="5" id="message-field" required=""></textarea>
                    </div>

                    <div class="col-md-12">
                        <label for="name-field" class="pb-2">Pekerjaan</label>
                        <input type="text" name="name" id="name-field" class="form-control" required="">
                    </div>

                    <div class="col-md-12">
                        <label for="name-field" class="pb-2">Email*</label>
                        <input type="text" name="name" id="name-field" class="form-control" required="">
                    </div>
                    <div class="col-md-12">
                        <label for="name-field" class="pb-2">No. Telepon/HP*</label>
                        <input type="text" name="name" id="name-field" class="form-control" required="">
                    </div>

                    <div class="col-md-12">
                        <label for="name-field" class="pb-2">Nomor Pendaftaran Permohonan Informasi*</label>
                        <input type="text" name="name" id="name-field" class="form-control" required="">
                    </div>

                    <h5>Identitas Kuasa Pemohon</h5>
                    <p>(Identitas kuasa pemohon diisi jika ada kuasa pemohonnya dan melampirkan Surat Kuasa)</p>

                    <div class="col-md-12">
                        <label for="name-field" class="pb-2">Nama Lengkap*</label>
                        <input type="text" name="name" id="name-field" class="form-control" required="">
                    </div>

                    <div class="col-md-12">
                        <label for="message-field" class="pb-2">Alamat</label>
                        <textarea class="form-control" name="message" rows="5" id="message-field" required=""></textarea>
                    </div>

                    <div class="col-md-12">
                        <label for="name-field" class="pb-2">No. Telepon/HP*</label>
                        <input type="text" name="name" id="name-field" class="form-control" required="">
                    </div>

                    <h4>B. INFORMASI PENGAJU KEBERATAN*</h4>

                    <div class="col-md-12 pb-3">
                        {{-- <label class="pb-2">Alasan Pengajuan Keberatan*</label><br> --}}
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keberatan_reason" id="reason1" value="reason1" required>
                            <label class="form-check-label" for="reason1">
                                a. Permohonan Informasi ditolak.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keberatan_reason" id="reason2" value="reason2" required>
                            <label class="form-check-label" for="reason2">
                                b. Informasi berkala tidak disediakan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keberatan_reason" id="reason3" value="reason3" required>
                            <label class="form-check-label" for="reason3">
                                c. Permintaan informasi tidak ditanggapi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keberatan_reason" id="reason4" value="reason4" required>
                            <label class="form-check-label" for="reason4">
                                d. Permintaan informasi ditanggapi tidak sebagaimana yang diminta
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keberatan_reason" id="reason5" value="reason5" required>
                            <label class="form-check-label" for="reason5">
                                e. Permintaan informasi tidak dipenuhi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keberatan_reason" id="reason5" value="reason5" required>
                            <label class="form-check-label" for="reason5">
                                f. Biaya yang dikenakan tidak wajar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="keberatan_reason" id="reason5" value="reason5" required>
                            <label class="form-check-label" for="reason5">
                                e. Informasi disampaikan melebihi jangka waktu yang ditentukan
                            </label>
                        </div>
                    </div>

                    <h4>C. KASUS POSISI</h4>

                    <div class="col-md-12">
                        <label for="message-field" class="pb-2"></label>
                        <textarea class="form-control" name="message" rows="5" id="message-field" required=""></textarea>
                    </div>

                    <h4>D. HARI/TANGGAL TANGGAPAN ATAS KEBERATAN AKAN DIBERIKAN</h4>
                    <p>Tanggapan atas keberatan pemohon informasi publik akan disampaikan dalam jangka waktu paling lambat <strong> (tiga puluh) hari kerja </strong> sejak diterimanya keberatan. <br>
                        Demikian keberatan ini saya sampaikan, atas perhatian dan tanggapannya, saya ucapkan terimakasih.</p>

                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit">Submit Permohonan</button>
                  </div>

                </div>
              </form>
            </div><!-- End Contact Form -->

          </div>

        </div>

      </section><!-- /Contact Section -->


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
