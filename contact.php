<!DOCTYPE html>
<html lang="tr">

<head>
  <title>İletişim</title>
  <?php include("includes/meta.php"); ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/Logo-2.png" alt="Logo-1">
        <!-- <h1>Ulucan Hafriyat<span>.</span></h1> -->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Anasayfa</a></li>
          <li><a href="about.php">Hakkımızda</a></li>
          <li><a href="services.php">Hizmetler</a></li>
          <li><a href="projects.php">Projeler</a></li>
          <li><a href="arac_parkuru.php">Araç Parkuru</a></li>

          </li>
          <li><a href="contact.php" class="active">İletişim</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>İletişim </h2>
        <ol>
          <li><a href="index.php">Anasayfa</a></li>
          <li>İletişim</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Adres</h3>
              <p>Yavuz Selim, 1/3. Sk. No:16
                34203 Bağcılar/İstanbul, Türkiye
              </p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>E-Posta</h3>
              <p>info@ulucanhafriyat.com</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Bizi Arayın</h3>
              <p>O 538 989 98 13</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">

          <div class="col-lg-6 ">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3002.8334427317927!2d28.767435676049203!3d41.18179987132677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa5489577c9d7%3A0xbfa97d0d024689f!2sUlucan%20Hafriyat!5e0!3m2!1str!2str!4v1707823782491!5m2!1str!2str"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form class="php-email-form">
              <div class="row gy-4">
                <div class="col-lg-6 form-group">
                  <input type="text" name="adi_soyadi" class="form-control" id="adi_soyadi"
                    placeholder="Adınız Soyadınız" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="E-Posta" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="konu" id="konu" placeholder="Konu" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="mesaj" id="mesaj" rows="5" placeholder="Mesaj" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Yükleniyor</div>
                <div class="error-message"></div>
                <div class="sent-message">Mesaj gönderildi.</div>
              </div>
              <div class="text-center"><button  onclick="MailGonder()" type="button">Gönder</button>
              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- Footer start-->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Ulucan Hafriyat</h3>
              <p>
                Yavuz Selim, 1/3. Sk. No:16<br>
                34203 Bağcılar/İstanbul, Türkiye
                <br><br>
                <strong>Telefon:</strong> O 538 989 98 13<br>
                <strong>E-Posta:</strong> info@ulucanhafriyat.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a target="_blank" href="https://www.youtube.com/channel/UCd-loP1SR-nLthkBFi8TabA"
                  class="d-flex align-items-center justify-content-center"><i class="bi bi-youtube"></i></a>
                <a target="_blank" href="https://www.facebook.com/ulucanhafriyat/"
                  class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a target="_blank" href="https://www.instagram.com/ulucanlar_harfiyatt/"
                  class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>

              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Bağlantılar</h4>
            <ul>
              <li><a href="index.php">Anasayfa</a></li>
              <li><a href="about.php">Hakkımızda </a></li>
              <li><a href="services.php">Hizmetler</a></li>
              <li><a href="projects.php">Projeler</a></li>
              <li><a href="arac_parkuru.php">Araç Parkuru</a></li>
              <li><a href="contact.php">İletişim</a></li>

            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Hizmetlerimiz</h4>
            <ul>
              <li><a href="services.php">Kazı ve Dolum Hizmetleri</a></li>
              <li><a href="services.php">İnşaat Atıklarının Bertarafı</a></li>
              <li><a href="services.php">Zemin Stabilizasyonu</a></li>
              <li><a href="services.php">Demontaj Ve Geri Dönüşüm </a></li>
              <li><a href="services.php">Kıyı Koruma Ve İnşaat</a></li>
              <li><a href="services.php">Drenaj Sistemleri Kurulumu</a></li>
            </ul>
          </div><!-- End footer links column-->
          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Çalışma Saatlerimiz</h4>
            <ul>
              <li>Hafta İçi : 09:00 - 18:00</li>
              <li>Cumartesi : 09:00 - 15:00</li>
              <li>Pazar : Kapalı</li>
            </ul>
          </div>
          <div>
            <img src="assets/img/Logo-2.png" style="width: 30%; height: auto;">
          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          2024 &copy; Copyright <strong><span>Ulucan Hafriyat</span></strong>. Bütün hakları saklıdır
        </div>
        <div class="credits">

          Designed by <a target="_blank" href="https://erkangungur.me/">Erkan Güngür</a>
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <!--WP Start-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <a href="https://api.whatsapp.com/send?phone=905377141018&text=Merhaba" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
  </a>

  <script>
    function MailGonder() {
      const adi_soyadi = document.getElementById('adi_soyadi').value;
      const konu = document.getElementById('konu').value;
      const email = document.getElementById('email').value;
      const mesaj = document.getElementById('mesaj').value;
      const formData = new FormData();
      formData.append('adi_soyadi', adi_soyadi);
      formData.append('konu', konu);
      formData.append('email', email);
      formData.append('mesaj', mesaj);

      fetch('islemler/mailgonder.php', {
        method: 'POST',
        body: formData
      })
        .then(response => response.json())
        .then(data => {
          console.log(data);
          if (data.status == "success") {
            Swal.fire({
              title: "GÖNDERİLDİ!",
              text: " İLETİŞİM TALEBİNİZ ALINMIŞTIR",
              icon: "success"
            });
          }
          else {
            Swal.fire({
              title: "Hata!",
              text: " Hata",
              icon: "error"
            });
          }


        })

        .catch((error) => {
          console.error('Error:', error);
        });
    }

  </script>
	<!--Header anim-->
 <script>
    window.addEventListener('scroll', function() {
      var header = document.getElementById('header');
      if (window.scrollY > 0) {
        header.classList.add('active');
      } else {
        header.classList.remove('active');
      }
    });
  </script>
</body>

</html>