<x-layout>
    <main id="main">

        <!-- ======= Services Section ======= -->

        <section id="services" class="services section-bg">
            <div class="container-fluid services py-5 mb-5">
                <div class="container">
                    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                        <h1 class="text-black "> VISI & MISI <br> DINAS PENDIDIKAN PURWAKARTA</h1>
                        <h1></h1>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8 wow fadeIn" data-wow-delay=".5s">
                            <div class="services-item bg-light">
                                <div class="p-4 text-center services-content">
                                    <div class="services-content-icon">
                                        <div class="icon-box">
                                            <img src="{{ asset('storage/landing-page') }}/assets/img/visimisi.png" alt="Icon" class="large-image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
        .large-image {
            width: 100%;
            max-width: 800px; /* Anda bisa menyesuaikan ukuran ini sesuai kebutuhan */
            height: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        </style>


        <!-- End Services Section -->

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
        </section><!-- End Contact Section -->

      </main>
      <!-- End #main -->
</x-layout>
