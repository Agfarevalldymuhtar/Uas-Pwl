<x-layout>
    <main id="main">

        <!-- ======= Cliens Section ======= -->
        <section id="cliens" class="cliens section-bg">
          <div class="container">
            <div id="clientsCarousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="row justify-content-center">
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                      <a href="https://beasiswa-jfl.jabarprov.go.id/">
                        <img src="{{ asset('storage/landing-page') }}/assets/img/data pendidikan/jfls.png" class="img-fluid" alt="NISN">
                      </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                      <a href="https://kurikulum.kemdikbud.go.id/">
                        <img src="{{ asset('storage/landing-page') }}/assets/img/data pendidikan/kmerdeka.png" class="img-fluid" alt="NPSN">
                      </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                      <a href="https://nisn.data.kemdikbud.go.id/">
                        <img src="{{ asset('storage/landing-page') }}/assets/img/data pendidikan/nisn.png" class="img-fluid" alt="BSE">
                      </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                      <a href="https://referensi.data.kemdikbud.go.id/pendidikan/dikdas/072601/3/jf/10/index.html">
                        <img src="{{ asset('storage/landing-page') }}/assets/img/data pendidikan/npsn.png" class="img-fluid" alt="BOS">
                      </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                      <a href="https://puslapdik.kemdikbud.go.id/faq-kip-kuliah/">
                        <img src="{{ asset('storage/landing-page') }}/assets/img/data pendidikan/kip.png"class="img-fluid" alt="Logo dinas pendidikan purwakarta">
                      </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                      <a href="https://buku.kemdikbud.go.id/faq">
                        <img src="{{ asset('storage/landing-page') }}/assets/img/data pendidikan/sibi.png" class="img-fluid" alt="">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- Tambahkan item carousel tambahan di sini -->
                <div class="carousel-item">
                  <div class="row justify-content-center">
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                      <a href="https://pusatinformasi.kampusmerdeka.kemdikbud.go.id/hc/id/articles/4417536152345-Pendaftaran-Mahasiswa-Program-Kampus-Mengajar">
                        <img src="{{ asset('storage/landing-page') }}/assets/img/data pendidikan/kampus merdeka.png" class="img-fluid" alt="Example 1">
                      </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                      <a href="https://www.kemdikbud.go.id/">
                        <img src="{{ asset('storage/landing-page') }}/assets/img/data pendidikan/kemendikbud.png" class="img-fluid" alt="Example 2">
                      </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                      <a href="https://beasiswaunggulan.kemdikbud.go.id/">
                        <img src="{{ asset('storage/landing-page') }}/assets/img/data pendidikan/beasiswaunggulan.png" class="img-fluid" alt="Example 3">
                      </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                      <a href="https://belajar.kemdikbud.go.id/">
                        <img src="{{ asset('storage/landing-page') }}/assets/img/data pendidikan/rumahbelajar.png" class="img-fluid" alt="Example 4">
                      </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                      <a href="https://bos.kemdikbud.go.id/">
                        <img src="{{ asset('storage/landing-page') }}/assets/img/data pendidikan/bos.png" class="img-fluid" alt="Example 5">
                      </a>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                      <a href="https://lpdp.kemenkeu.go.id/">
                        <img src="{{ asset('storage/landing-page') }}/assets/img/data pendidikan/lpdp.jpg" class="img-fluid" alt="Example 6">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#clientsCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#clientsCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </section>

        <!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        <section id="berita" class="berita custom-berita">
          <div class="container custom-container">
              <div class="section-title custom-section-title">
                  <h1>Berita</h1>
              </div>
              <ul class="tabs custom-tabs">
                  {{-- <li class="active"><a href="#">Berita</a></li> --}}
                  {{-- <li><a href="#">Regulasi</a></li> --}}
              </ul>
              <div class="content custom-content">
                  <div class="main-news custom-main-news">
                      <div class="news-item custom-news-item">
                          <img src="https://disdik.purwakartakab.go.id/asset/foto_berita/Dafa_Timnas.jpg" alt="Main News">
                          <h2>Dafa Al Gasemi, Jebolan ASAD Purwakarta Kini Jadi Kiper Timnas U-16</h2>
                          <p>02 Juli 2024</p>
                          <p>Purwakarta, (06/07/2024) – Kabupaten Purwakarta kembali menelurkan pemain sepakbola handal yang tahun ini terpilih sebagai bagian dari Squad Timnas U-16. Adalah Dafa Al Gasemi Setiawarman yang menjadi Kiper Timnas U-16 pada event sepakbola ASEAN Cup 2024 U-16.

                              Jurnalis Disdik Purwakarta berhasil mewawancari Dafa secara online dan mendapatkan banyak cerita luar biasa dari pemain yang saat ini bersekolah di SMA Lazuardi Purwakarta.</p>
                          <a href="#">read more...</a>
                      </div>
                  </div>
                  <div class="side-news custom-side-news">
                      <div class="side-news-item custom-side-news-item">
                          <span class="badge custom-badge">Informasi</span>
                          <h3>SURAT EDARAN NOMOR 13/SE/2024 TENTANG PERPINDAHAN (MUTASI) PESERTA DIDIK SEMESTER GANJIL TAHUN PELAJARAN 2024/2025</h3>
                          <p class="fa-calendar">02 Juli 2024</p>
                      </div>
                      <div class="side-news-item custom-side-news-item">
                          <span class="badge custom-badge">Informasi</span>
                          <h3>DISDIK DKI JAKARTA PASTIKAN DANA KJMU DIDISTRIBUSIKAN MULAI BESOK DAN DAPAT DIMANFAATKAN PENERIMA BANTUAN</h3>
                          <p>27 Juni 2024</p>
                      </div>
                      <div class="side-news-item custom-side-news-item">
                          <span class="badge custom-badge">Berita Bidang, Sudin dan UPT</span>
                          <h3>SUKSES PELAKSANAAN WEBINAR PENDIDIKAN JAKARTA MENUJU KOTA GLOBAL</h3>
                          <p>21 Juni 2024</p>
                      </div>
                      <div class="side-news-item custom-side-news-item">
                          <span class="badge custom-badge">Berita Bidang, Sudin dan UPT</span>
                          <h3>WEBINAR PENDIDIKAN JAKARTA MENUJU KOTA GLOBAL</h3>
                          <p>19 Juni 2024</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>

        <!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        <!-- <section id="why-us" class="why-us section-bg">
          <div class="container-fluid" data-aos="fade-up">

            <div class="row">

              <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                <div class="content">
                  <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                  </p>
                </div>

                <div class="accordion-list">
                  <ul>
                    <li>
                      <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                        <p>
                          Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        </p>
                      </div>
                    </li>

                    <li>
                      <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                          Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                        </p>
                      </div>
                    </li>

                    <li>
                      <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                      <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                        <p>
                          Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                        </p>
                      </div>
                    </li>

                  </ul>
                </div>

              </div>

              <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{ asset('storage/landing-page') }}/assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
            </div>

          </div>
        </section> -->
        <!-- End Why Us Section -->

        <!-- ======= Skills Section ======= -->
        <!-- <section id="skills" class="skills">
          <div class="container" data-aos="fade-up">

            <div class="row">
              <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                <img src="{{ asset('storage/landing-page') }}/assets/img/skills.png" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>

                <div class="skills-content">

                  <div class="progress">
                    <span class="skill">HTML <i class="val">100%</i></span>
                    <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>

                  <div class="progress">
                    <span class="skill">CSS <i class="val">90%</i></span>
                    <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>

                  <div class="progress">
                    <span class="skill">JavaScript <i class="val">75%</i></span>
                    <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>

                  <div class="progress">
                    <span class="skill">Photoshop <i class="val">55%</i></span>
                    <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>

                </div>

              </div>
            </div>

          </div>
        </section> -->
        <!--End Skills Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
          <div class="container-fluid services py-5 mb-5">
            <div class="container">
                <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                    <h1 class="text-black "> INFORMASI PPDB</h1>
                    <h1></h1>
                </div>
                <div class="row g-5 services-inner">
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <div class="icon-box">
                                        <img src="{{ asset('storage/landing-page') }}/assets/img/ppdb/ppdb1.jpg" alt="Icon">
                                    </div>
                                    <!-- <h4 class="mb-3">Web Design</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                    <a href="" class="btn btn-secondary text-black px-5 py-3 rounded-pill">Read More &raquo;</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <div class="icon-box">
                                        <img src="{{ asset('storage/landing-page') }}/assets/img/ppdb/ppdb3.jpg" alt="Icon">
                                    </div>
                                    <!-- <h4 class="mb-3">Web Development</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                    <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More &raquo;</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <!-- {{-- <i class="fa fa-external-link-alt fa-7x mb-4 text-primary"></i> --}} -->
                                    <div class="icon-box">
                                        <img src="{{ asset('storage/landing-page') }}/assets/img/ppdb/ppdb4.jpg" alt="Icon">
                                    </div>
                                    <!-- <h4 class="mb-3">UI/UX Design</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                    <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More &raquo;</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <!-- {{-- <i class="fas fa-user-secret fa-7x mb-4 text-primary"></i> --}} -->
                                    <div class="icon-box">
                                        <img src="{{ asset('storage/landing-page') }}/assets/img/ppdb/ppdb10.jpg" alt="Icon">
                                    </div>
                                    <!-- <h4 class="mb-3">Web Cecurity</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                    <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More &raquo;</a> -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <!-- {{-- <i class="fa fa-envelope-open fa-7x mb-4 text-primary"></i> --}} -->
                                    <div class="icon-box">
                                        <img src="{{ asset('storage/landing-page') }}/assets/img/ppdb/ppdb11.jpg" alt="Icon">
                                    </div>
                                    <!-- <h4 class="mb-3">Digital Marketing</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                    <a href="" class="btn btn-secondary text-black px-5 py-3 rounded-pill">Read More &raquo;</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                        <div class="services-item bg-light">
                            <div class="p-4 text-center services-content">
                                <div class="services-content-icon">
                                    <!-- {{-- <i class="fas fa-laptop fa-7x mb-4 text-primary"></i> --}} -->
                                    <div class="icon-box">
                                        <img src="{{ asset('storage/landing-page') }}/assets/img/ppdb/ppdb12.jpg" alt="Icon">
                                    </div>
                                    <!-- <h4 class="mb-3">Programming</h4>
                                    <p class="mb-4">Lorem ipsum dolor sit amet elit. Sed efficitur quis purus ut interdum. Aliquam dolor eget urna ultricies tincidunt.</p>
                                    <a href="" class="btn btn-secondary text-black px-5 py-3 rounded-pill">Read More &raquo;</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="imageModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="modalImage">
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
          <div class="container" data-aos="zoom-in">

            <div class="row">
              <div class="col-lg-9 text-center text-lg-start">
                <h3>Kecap Bijak Poe Ieu :</h3><br>
                <p> "Pendidikan téh senjata nu pangampuhna nu bisa anjeun pake pikeun ngarobah dunya. Pendidikan téh konci pikeun muka panto emas kamerdekaan jeung kasempetan. Ku pendidikan, urang bisa ngahontal jangkungna nu taya watesna jeung manggihan cara pikeun ngahontal impian urang. Pendidikan téh prosés pamasihan kakuatan nu kontinyu, méré urang alat pikeun ngartos dunya di sakuriling urang jeung kamampuhan pikeun nyieun kaputusan nu wijaksana." </p><br>
                <p style="font-style: italic;">- Nelson Mandela -</p>
              </div>
              <!-- <div class="col-lg-3 cta-btn-container text-center">
                <a class="cta-btn align-middle" href="#">Call To Action</a>
              </div> -->
            </div>

          </div>
        </section>
        <!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>GALERI</h2>
              <p>Selamat datang di galeri Dinas Pendidikan!<br>Temukan dokumentasi foto dan video dari berbagai kegiatan, acara, dan program pendidikan kami.</p>
            </div>

            <!-- <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul> -->

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-img"><img src="{{ asset('storage/landing-page') }}/assets/img/galeri/ultahpj.png" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                  <p style="font-weight: bold; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">SELAMAT ULANG TAHUN PJ BUPATI PURWAKARTA</p>
                  <a href="{{ asset('storage/landing-page') }}/assets/img/galeri/ultahpj.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="SELAMAT ULANG TAHUN PJ BUPATI PURWAKARTA"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-img"><img src="{{ asset('storage/landing-page') }}/assets/img/galeri/halalbihalal.jpeg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                  <p style="font-weight: bold; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">PENGUATAN ORGANISASI HIMPAUDI</p>
                  <a href="{{ asset('storage/landing-page') }}/assets/img/galeri/halalbihalal.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="PENGUATAN ORGANISASI HIMPAUDI"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-img"><img src="{{ asset('storage/landing-page') }}/assets/img/galeri/kaulinan.jpeg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                  <p style="font-weight: bold; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">FESTIVAL KAULINAN BARUDAK</p>
                  <a href="{{ asset('storage/landing-page') }}/assets/img/galeri/kaulinan.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="FESTIVAL KAULINAN BARUDAK"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-img"><img src="{{ asset('storage/landing-page') }}/assets/img/galeri/kaulinan2.jpg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                  <p style="font-weight: bold; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">FESTIVAL KAULINAN BARUDAK LEMBUR</p>
                  <a href="{{ asset('storage/landing-page') }}/assets/img/galeri/kaulinan2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="FESTIVAL KAULINAN BARUDAK LEMBUR"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-img"><img src="{{ asset('storage/landing-page') }}/assets/img/galeri/lokakarya.jpeg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                  <p style="font-weight: bold; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">LOKAKARYA ORIENTASI PROGRAM PENDIDIKAN</p>
                  <a href="{{ asset('storage/landing-page') }}/assets/img/galeri/lokakarya.jpeg.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="LOKAKARYA ORIENTASI PROGRAM PENDIDIKAN"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-img"><img src="{{ asset('storage/landing-page') }}/assets/img/galeri/ramadhan.jpg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                  <p style="font-weight: bold; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">GEMA CINTA RAMADHAN 1443 H</p>
                  <a href="{{ asset('storage/landing-page') }}/assets/img/galeri/ramadhan.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="GEMA CINTA RAMADHAN 1443 H"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-img"><img src="{{ asset('storage/landing-page') }}/assets/img/galeri/rapat.jpeg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                  <p style="font-weight: bold; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">RAPAT BERSAMA IGORNAS</p>
                  <a href="{{ asset('storage/landing-page') }}/assets/img/galeri/rapat.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="RAPAT BERSAMA IGORNAS"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-img"><img src="{{ asset('storage/landing-page') }}/assets/img/galeri/rapat2.jpg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                  <!-- <h4>Card 3</h4> -->
                  <p style="font-weight: bold; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">RAPAT LPMP JABAR PERSIAPAN SEKOLAH</p>
                  <a href="{{ asset('storage/landing-page') }}/assets/img/galeri/rapat2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="RAPAT LPMP JABAR PERSIAPAN SEKOLAH"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-img"><img src="{{ asset('storage/landing-page') }}/assets/img/galeri/sosialisasi.jpg" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                  <!-- <h4>Web 3</h4> -->
                  <p style="font-weight: bold; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">SOSIALISASI KURIKULUM BAHASA SUNDA</p>
                  <a href="{{ asset('storage/landing-page') }}/assets/img/portfolio/sosialisasi.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="SOSIALISASI KURIKULUM BAHASA SUNDA"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>

            </div>

          </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <!-- <section id="team" class="team section-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Team</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">

              <div class="col-lg-6">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pic"><img src="{{ asset('storage/landing-page') }}/assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                    <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                  <div class="pic"><img src="{{ asset('storage/landing-page') }}/assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Sarah Jhonson</h4>
                    <span>Product Manager</span>
                    <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                  <div class="pic"><img src="{{ asset('storage/landing-page') }}/assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                    <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                  <div class="pic"><img src="{{ asset('storage/landing-page') }}/assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                    <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </section>-->
        <!--End Team Section -->

        <!-- ======= Pricing Section ======= -->
        <!-- <section id="pricing" class="pricing">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Pricing</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">

              <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="box">
                  <h3>Free Plan</h3>
                  <h4><sup>$</sup>0<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                    <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>

              <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                <div class="box featured">
                  <h3>Business Plan</h3>
                  <h4><sup>$</sup>29<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                    <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>

              <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <div class="box">
                  <h3>Developer Plan</h3>
                  <h4><sup>$</sup>49<span>per month</span></h4>
                  <ul>
                    <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                    <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                    <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                    <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                    <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                  </ul>
                  <a href="#" class="buy-btn">Get Started</a>
                </div>
              </div>

            </div>

          </div>
        </section> -->
        <!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <!-- <section id="faq" class="faq section-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Frequently Asked Questions</h2>
              <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="faq-list">
              <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="500">
                  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                    <p>
                      Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>
        </section>-->
        <!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
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
        </section>
        
        <!-- End Contact Section -->

      </main
</x-layout>
