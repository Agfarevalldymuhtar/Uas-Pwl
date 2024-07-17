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

  <!-- Template Main CSS File -->
  <link href="{{ asset('storage/landing-page') }}/assets/css/style.css" rel="stylesheet">

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<style>

body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    color: #343a40;
}

.card-title {
    color: #007bff;
}

.card-body {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.card-text small {
    display: flex;
    align-items: center;
}

.card-text small i {
    margin-right: 5px;
}

.pagination .page-item .page-link {
    color: #007bff;
}

.pagination .page-item.disabled .page-link {
    color: #6c757d;
}

.pagination .page-item.active .page-link {
    background-color: #007bff;
    border-color: #007bff;
}

</style>

</head>

<body>

    <!-- HEADER -->
    <x-header></x-header>
    <!-- end HEADER -->

    <!-- Hero section -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
          <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
              <h1>GALERI KEGIATAN<br>DINAS PENDIDIKAN KABUPATEN PURWAKARTA</h1>
              <h2>"Membangun Generasi Cerdas dan Berkarakter untuk Masa Depan Gemilang"</h2>
              {{-- <div class="d-flex justify-content-center justify-content-lg-start">
                <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
                <a href="https://youtu.be/rkIZw65P0Sc?si=LGls4j2qlke5vm7P" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Profil Disdik Purwakarta</span></a>
              </div> --}}
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
              <img src="https://disdik.purwakartakab.go.id/asset/foto_berita/IMG-20220906-WA0045.jpg" class="img-fluid animated" alt="">
            </div>
          </div>
        </div>

      </section>
<!-- end Hero section -->


  <main id="main">

    <!-- ======= Services Section ======= -->
    <div class="container my-5">
        <div class="row">
            <!-- First News Card -->
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('storage/landing-page') }}/assets/img/galeri/ultahpj.png" class="card-img-top" alt="Ketentuan PPDB SMK">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        {{-- <p class="card-text">Calon Peserta Didik Baru (CPDB) yang dapat mengikuti PPDB Tahun Pelajaran 2024/2025 pada Sekolah Menengah Kejuruan Negeri (SMKN) adalah berdomisili di Provinsi DKI Jakarta dan tercatat dalam Kartu Keluarga...</p> --}}
                        <p class="card-text"><small class="text-muted"><i class="far fa-calendar-alt"></i> 27 Mei 2024</small></p>
                    </div>
                </div>
            </div>
            <!-- Second News Card -->
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('storage/landing-page') }}/assets/img/galeri/sumpahpemuda.jpg" class="card-img-top" alt="PPDB SMK 2024">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        {{-- <p class="card-text">PPDB yang dapat mengikuti PPDB Tahun Pelajaran 2024/2025 adalah CPDB yang tidak terdaftar di Satuan Pendidikan Negeri dan Swasta pada jenjang yang dituju...</p> --}}
                        <p class="card-text"><small class="text-muted"><i class="far fa-calendar-alt"></i> 27 Mei 2024</small></p>
                    </div>
                </div>
            </div>
            <!-- Third News Card -->
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://disdik.purwakartakab.go.id/asset/img_galeri/SAVE_20200810_131807.jpg" class="card-img-top" alt="Jadwal PPDB">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        {{-- <p class="card-text">Pendaftaran dan Pemilihan Sekolah pada 1 Juli 2024, Proses Seleksi pada 2 Juli 2024, dan Pengumuman pada 2 Juli 2024...</p> --}}
                        <p class="card-text"><small class="text-muted"><i class="far fa-calendar-alt"></i> 27 Mei 2024</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('storage/landing-page') }}/assets/img/galeri/guru.jpg" class="card-img-top" alt="Ketentuan PPDB SMK">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        {{-- <p class="card-text">Calon Peserta Didik Baru (CPDB) yang dapat mengikuti PPDB Tahun Pelajaran 2024/2025 pada Sekolah Menengah Kejuruan Negeri (SMKN) adalah berdomisili di Provinsi DKI Jakarta dan tercatat dalam Kartu Keluarga...</p> --}}
                        <p class="card-text"><small class="text-muted"><i class="far fa-calendar-alt"></i> 27 Mei 2024</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('storage/landing-page') }}/assets/img/galeri/sukma.jpg" class="card-img-top" alt="Ketentuan PPDB SMK">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        {{-- <p class="card-text">Calon Peserta Didik Baru (CPDB) yang dapat mengikuti PPDB Tahun Pelajaran 2024/2025 pada Sekolah Menengah Kejuruan Negeri (SMKN) adalah berdomisili di Provinsi DKI Jakarta dan tercatat dalam Kartu Keluarga...</p> --}}
                        <p class="card-text"><small class="text-muted"><i class="far fa-calendar-alt"></i> 27 Mei 2024</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('storage/landing-page') }}/assets/img/galeri/kunjungan.jpg" class="card-img-top" alt="Ketentuan PPDB SMK">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        {{-- <p class="card-text">Calon Peserta Didik Baru (CPDB) yang dapat mengikuti PPDB Tahun Pelajaran 2024/2025 pada Sekolah Menengah Kejuruan Negeri (SMKN) adalah berdomisili di Provinsi DKI Jakarta dan tercatat dalam Kartu Keluarga...</p> --}}
                        <p class="card-text"><small class="text-muted"><i class="far fa-calendar-alt"></i> 27 Mei 2024</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('storage/landing-page') }}/assets/img/galeri/lokakarya.jpeg" class="card-img-top" alt="Ketentuan PPDB SMK">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        {{-- <p class="card-text">Calon Peserta Didik Baru (CPDB) yang dapat mengikuti PPDB Tahun Pelajaran 2024/2025 pada Sekolah Menengah Kejuruan Negeri (SMKN) adalah berdomisili di Provinsi DKI Jakarta dan tercatat dalam Kartu Keluarga...</p> --}}
                        <p class="card-text"><small class="text-muted"><i class="far fa-calendar-alt"></i> 27 Mei 2024</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('storage/landing-page') }}/assets/img/galeri/ramadhan.jpg" class="card-img-top" alt="Ketentuan PPDB SMK">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        {{-- <p class="card-text">Calon Peserta Didik Baru (CPDB) yang dapat mengikuti PPDB Tahun Pelajaran 2024/2025 pada Sekolah Menengah Kejuruan Negeri (SMKN) adalah berdomisili di Provinsi DKI Jakarta dan tercatat dalam Kartu Keluarga...</p> --}}
                        <p class="card-text"><small class="text-muted"><i class="far fa-calendar-alt"></i> 27 Mei 2024</small></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('storage/landing-page') }}/assets/img/galeri/rapat.jpeg" class="card-img-top" alt="Ketentuan PPDB SMK">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        {{-- <p class="card-text">Calon Peserta Didik Baru (CPDB) yang dapat mengikuti PPDB Tahun Pelajaran 2024/2025 pada Sekolah Menengah Kejuruan Negeri (SMKN) adalah berdomisili di Provinsi DKI Jakarta dan tercatat dalam Kartu Keluarga...</p> --}}
                        <p class="card-text"><small class="text-muted"><i class="far fa-calendar-alt"></i> 27 Mei 2024</small></p>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- End Services Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <img src="{{ asset('storage/landing-page') }}/assets/img/disdikpwk.png" alt="" style="height: 100px; margin-top: -20px;">
            <br><br>
            <p>
              Jl. Beringin, Nagri Kaler, Purwakarta, Purwakarta Regency, Jawa Barat 41115
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Hubungi Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">(021) 1234-5678</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Email</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">disdik@dinaspendidikan.go.id</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Follow Disdik Purwakarta</h4>
            <p>Dapatkan berita terbaru, program pendidikan, dan informasi penting lainnya.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>STT Wastukancana</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="">Kelompok: 4</a>
      </div>
    </div>
  </footer>
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
