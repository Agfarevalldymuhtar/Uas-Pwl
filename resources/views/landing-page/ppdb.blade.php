<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dinas Pendidikan Kabupaten Purwakarta</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('storage/landing-page') }}/assets/img/disdikpwk.png" rel="icon">
  <link href="{{ asset('storage/landing-page') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('storage/landing-page') }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('storage/landing-page') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('storage/landing-page') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('storage/landing-page') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('storage/landing-page') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('storage/landing-page') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('storage/landing-page') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

   <!-- Link Font Awesome -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('storage/landing-page') }}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

  <style>
.ppdb-news {
    padding: 60px 0;
}

.ppdb-news .card {
    border: none;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    height: 100%; /* Menyesuaikan tinggi dengan isi konten */
    display: flex;
    flex-direction: column;
}

.ppdb-news .card:hover {
    transform: translateY(-10px);
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
}

.ppdb-news .card-img-top {
    flex: 1; /* Membuat gambar memenuhi tinggi kartu */
    object-fit: cover;
    width: 100%; /* Memastikan gambar mengisi lebar kartu */
}

.ppdb-news .card-body {
    flex: 1; /* Memastikan body konten mengisi sisa tinggi kartu */
    display: flex;
    flex-direction: column;
}

.ppdb-news .card-title {
    font-size: 18px;
    margin-bottom: 10px;
}

.ppdb-news .card-text {
    font-size: 14px;
    color: #6c757d;
    margin-bottom: 15px;
}

.ppdb-news .btn-primary {
    background-color: #007bff;
    border: none;
    color: #fff;
    padding: 10px 20px;
    border-radius: 4px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.ppdb-news .btn-primary:hover {
    background-color: #0056b3;
}

  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <div class="logo me-auto">
        <a href="index.html"><img src="https://disdik.purwakartakab.go.id/asset/logo/Logo_Disdik_Fix2.png" alt="Logo"><span style="font-weight: bold; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Dinas Pendidikan</span></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">BERANDA</a></li>
          <li class="dropdown">
            <a href="#"><span>PROFIL</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/visimisi">Visi & Misi</a></li>
              <li><a href="organisasi">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#"><span>PPDB</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/ppdb">Berita PPDB</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#"><span>BERITA</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/berita1">Berita Pendidikan</a></li>
              <li><a href="/berita2">Berita Dinas Pendidikan</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/regulasi">REGULASI</a></li>
          <li><a class="nav-link scrollto" href="/galeri">GALERI</a></li>
          <li><a class="nav-link scrollto" href="/contact">CONTACT</a></li>
          <li><a class="getstarted scrollto" href="/login">LOGIN & DAFTAR</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

    <!-- section hero -->

  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>INFORMASI SEPUTAR PPDB 2024</h1>
          <h3 style="color: rgb(9, 9, 98)">Jenjang SMA, SMK dan SLB</h3>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
            <a href="https://youtu.be/uU9wKr_xIDs?si=fRFwoG1EhfhvwaSS" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Info PPDB</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="https://ppdb.jabarprov.go.id/images/banner-ppdb-2024.webp" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>

  <!-- end section hero -->

    <!-- ======= Services Section ======= -->
    <section id="ppdb-news" class="ppdb-news section-bg">
        <div class="container-fluid ppdb-news py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h1 class="text-black">Berita PPDB</h1>
                    <p class="text-black">Informasi terbaru mengenai Penerimaan Peserta Didik Baru (PPDB)</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="card">
                            <img src="{{ asset('storage/landing-page') }}/assets/img/ppdb/ppdb1.jpg" class="card-img-top" alt="Berita 1">
                            <div class="card-body">
                                {{-- <h5 class="card-title">Judul Berita 1</h5>
                                <p class="card-text">Ringkasan singkat dari berita PPDB 1.</p>
                                <a href="#" class="btn btn-primary">Baca Selengkapnya</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay=".6s">
                        <div class="card">
                            <img src="{{ asset('storage/landing-page') }}/assets/img/ppdb/ppdb2.jpeg" class="card-img-top" alt="Berita 2">
                            <div class="card-body">
                                {{-- <h5 class="card-title">Judul Berita 2</h5>
                                <p class="card-text">Ringkasan singkat dari berita PPDB 2.</p>
                                <a href="#" class="btn btn-primary">Baca Selengkapnya</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="card">
                            <img src="{{ asset('storage/landing-page') }}/assets/img/ppdb/ppdb3.jpg" class="card-img-top" alt="Berita 3">
                            <div class="card-body">
                                {{-- <h5 class="card-title">Judul Berita 3</h5>
                                <p class="card-text">Ringkasan singkat dari berita PPDB 3.</p>
                                <a href="#" class="btn btn-primary">Baca Selengkapnya</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="card">
                            <img src="{{ asset('storage/landing-page') }}/assets/img/ppdb/ppdb4.jpg" class="card-img-top" alt="Berita 3">
                            <div class="card-body">
                                {{-- <h5 class="card-title">Judul Berita 3</h5>
                                <p class="card-text">Ringkasan singkat dari berita PPDB 3.</p>
                                <a href="#" class="btn btn-primary">Baca Selengkapnya</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="card">
                            <img src="{{ asset('storage/landing-page') }}/assets/img/ppdb/ppdb5.jpg" class="card-img-top" alt="Berita 3">
                            <div class="card-body">
                                {{-- <h5 class="card-title">Judul Berita 3</h5>
                                <p class="card-text">Ringkasan singkat dari berita PPDB 3.</p>
                                <a href="#" class="btn btn-primary">Baca Selengkapnya</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="card">
                            <img src="{{ asset('storage/landing-page') }}/assets/img/ppdb/ppdb6.jpg" class="card-img-top" alt="Berita 3">
                            <div class="card-body">
                                {{-- <h5 class="card-title">Judul Berita 3</h5>
                                <p class="card-text">Ringkasan singkat dari berita PPDB 3.</p>
                                <a href="#" class="btn btn-primary">Baca Selengkapnya</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="card">
                            <img src="{{ asset('storage/landing-page') }}/assets/img/ppdb/ppdb7.jpg" class="card-img-top" alt="Berita 3">
                            <div class="card-body">
                                {{-- <h5 class="card-title">Judul Berita 3</h5>
                                <p class="card-text">Ringkasan singkat dari berita PPDB 3.</p>
                                <a href="#" class="btn btn-primary">Baca Selengkapnya</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="card">
                            <img src="{{ asset('storage/landing-page') }}/assets/img/ppdb/ppdb8.jpg" class="card-img-top" alt="Berita 3">
                            <div class="card-body">
                                {{-- <h5 class="card-title">Judul Berita 3</h5>
                                <p class="card-text">Ringkasan singkat dari berita PPDB 3.</p>
                                <a href="#" class="btn btn-primary">Baca Selengkapnya</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="card">
                            <img src="{{ asset('storage/landing-page') }}/assets/img/ppdb/ppdb9.jpg" class="card-img-top" alt="Berita 3">
                            <div class="card-body">
                                {{-- <h5 class="card-title">Judul Berita 3</h5>
                                <p class="card-text">Ringkasan singkat dari berita PPDB 3.</p>
                                <a href="#" class="btn btn-primary">Baca Selengkapnya</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="card">
                            <img src="{{ asset('storage/landing-page') }}/assets/img/ppdb/ppdb10.jpg" class="card-img-top" alt="Berita 3">
                            <div class="card-body">
                                {{-- <h5 class="card-title">Judul Berita 3</h5>
                                <p class="card-text">Ringkasan singkat dari berita PPDB 3.</p>
                                <a href="#" class="btn btn-primary">Baca Selengkapnya</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="card">
                            <img src="{{ asset('storage/landing-page') }}/assets/img/ppdb/ppdb11.jpg" class="card-img-top" alt="Berita 3">
                            <div class="card-body">
                                {{-- <h5 class="card-title">Judul Berita 3</h5>
                                <p class="card-text">Ringkasan singkat dari berita PPDB 3.</p>
                                <a href="#" class="btn btn-primary">Baca Selengkapnya</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="card">
                            <img src="{{ asset('storage/landing-page') }}/assets/img/ppdb/ppdb12.jpg" class="card-img-top" alt="Berita 3">
                            <div class="card-body">
                                {{-- <h5 class="card-title">Judul Berita 3</h5>
                                <p class="card-text">Ringkasan singkat dari berita PPDB 3.</p>
                                <a href="#" class="btn btn-primary">Baca Selengkapnya</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- End Services Section -->

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Hubungi Dinas Pendidikan</h2>
            <p>Apakah Anda memiliki pertanyaan, saran, atau keluhan?<br>Hubungi dinas pendidikan melalui formulir kontak atau nomor telepon yang tersedia.<br>Kami siap membantu Anda!</p>
          </div>

          <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Alamat:</h4>
                  <p>Jl. Beringin, Nagri Kaler, Purwakarta, Purwakarta Regency, Jawa Barat 41115</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>disdik@dinaspendidikan.go.id</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Telepon:</h4>
                  <p>(021) 1234-5678</p>
                </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495.48358393174357!2d107.44580560815034!3d-6.538264427043656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690e6f343964d9%3A0x2481a8f85f983297!2sDinas%20Pendidikan%20Kabupaten%20Purwakarta!5e0!3m2!1sid!2sid!4v1720573118744!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">Tujuan: (pertanyaan, saran, kritik, pengaduan)</label>
                  <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group">
                  <label for="name">Pesan</label>
                  <textarea class="form-control" name="message" rows="10" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Kirim Pesan</button></div>
              </form>
            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('storage/landing-page') }}/assets/img/disdikpwk.png" alt="Logo" style="height: 100px; margin-right: 10px;">
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Alamat</h4>
                    <p>
                        Jl. Dr. Rajiman No.6, Pasir Kaliki, Kec. Cicendo, Kota Bandung, Jawa Barat 40171<br><br>

                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Surel</h4>
                    <p>
                        disdik@jabarprov.go.id
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Bantuan</h4>
                    <p>
                        Telp: (022) 4264318<br>
                        Faks: (022) 4264881<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Media Sosial</h4>
                    <div class="social-links mt-3">
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer>

  <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->

        <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('storage/landing-page') }}/assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('storage/landing-page') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('storage/landing-page') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('storage/landing-page') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('storage/landing-page') }}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('storage/landing-page') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('storage/landing-page') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('storage/landing-page') }}/assets/js/main.js"></script>

</body>

</html>

