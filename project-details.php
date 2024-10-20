<?php
include("includes/config.php");

$id = isset($_GET['ID']) ? intval($_GET['ID']) : 0;

if ($id > 0) {
  $sql = "SELECT ID, PAD, PACIKLAMA, PRESIM, OLCU, TARIH, KATEGORI FROM pdetay WHERE ID = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
    $ID = $row["ID"];
    $PAD = $row["PAD"];
    $PACIKLAMA = $row["PACIKLAMA"];
    $PRESIM = $row["PRESIM"];
    $KATEGORI = $row["KATEGORI"];
    $OLCU = $row["OLCU"];
    $TARIH = date("d.m.Y", strtotime($row["TARIH"]));
    // Diğer işlemleri burada yapabilirsiniz
  } else {
    // Kayıt bulunamadı
  }

  $stmt->close();
} else {
  // Hatalı veya eksik ID parametresi
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Proje Detayları </title>
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
          <li><a href="projects.php" class="active">Projeler</a></li>
          <li><a href="blog.php">Araç Parkuru</a></li>

          </li>
          <li><a href="contact.php">İletişim</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>
          Proje Detayları
        </h2>
        <ol>
          <li><a href="index.php">Anasayfa</a></li>
          <li><a href="projects.php">Projeler</a> </li>
          <li>
            <?php echo $PAD ?>
          </li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Projet Details Section ======= -->
    <section id="project-details" class="project-details">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="assets/img/projects/ProjeDetaylari/ProjeDetay-1.JPG" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/projects/ProjeDetaylari/ProjeDetay-2.JPG" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/projects/ProjeDetaylari/ProjeDetay-3.JPG" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/projects/ProjeDetaylari/ProjeDetay-4.JPG" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/projects/ProjeDetaylari/ProjeDetay-5.JPG" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2>
                <?php echo $PAD ?>
              </h2>
              <p>
                <?php echo $PACIKLAMA ?>
              </p>

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Proje Bilgi</h3>
              <ul>
                <li><strong>Kategori</strong> <span>
                    <?php echo $KATEGORI ?>
                  </span></li>
                <li><strong>Metre Küp</strong> <span>
                    <?php echo $OLCU ?> M3
                  </span></li>
                <li><strong>Proje Başlama Tarihi</strong> <span>
                    <?php echo $TARIH ?>
                  </span></li>

              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Projet Details Section -->

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
              <li><a href="blog.php">Araç Parkuru</a></li>
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
  <!--Wp end-->
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