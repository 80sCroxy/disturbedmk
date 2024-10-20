<!DOCTYPE html>
<?php
include("includes/config.php");
?>
<html lang="tr">
  

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulucan Hafriyat</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link rel="icon" href="assets/img/yellow.png">
    <link rel="apple-touch-icon" href="assets/img/yellow.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
    <style>
        .arac-listesi {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Araçları ortalamak için */
        }

        .arac-ozellikleri {
            padding: 30px;
            border-radius: 20px;
            margin: 20px;
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
            width: 250px; /* Kartın genişliği */
            height: 300px; /* Kartın yüksekliği */
            background-size: cover; /* Arka plan resminin kartı kaplamasını sağlar */
            position: relative; /* Mutlak konumlandırma için */
            overflow: hidden; /* İçeriklerin kartın dışına taşmasını önler */
            text-align: center; /* Metni merkezlemek için */
            color: #fff; /* Metin rengi */
            display: flex; /* İçerikleri dikey ve yatay olarak hizalamak için */
            flex-direction: column; /* İçerikleri dikey olarak hizalamak için */
            justify-content: center; /* İçerikleri dikey olarak ortalamak için */
            align-items: center; /* İçerikleri yatay olarak ortalamak için */
        }

        .arac-ozellikleri:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .arac-adi {
            font-weight: bold;
            margin-bottom: 15px;
        }
		
		.arac-icerik {
    background-color: rgba(0, 0, 0, 0.4); /* Siyah renk ve %50 opaklık */
    padding: 10px; /* İçeriğin etrafına boşluk ekler */
    border-radius: 10px; /* Köşeleri yuvarlar */
    backdrop-filter: blur(1px); /* Arkaplanı hafifçe bulanıklaştırır */
}

        .arac-resim {
            display: none; /* Resmi gizle */
        }
    </style>
</head>

<body>

    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.php" class="logo d-flex align-items-center">
                <img src="assets/img/Logo-2.png" alt="Logo-1">
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.php">Anasayfa</a></li>
                    <li><a href="about.php">Hakkımızda</a></li>
                    <li><a href="services.php">Hizmetler</a></li>
                    <li><a href="projects.php">Projeler</a></li>
                    <li><a href="arac_parkuru.php" class="active">Araç Parkuru</a></li>
                    <li><a href="contact.php">İletişim</a></li>
                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Arac Parkuru</h2>
                <ol>
                    <li><a href="index.php">Anasayfa</a></li>
                    <li>Araç Parkuru</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <section class="sample-page">
            <div class="container">
                <div class="row arac-listesi">
                    <?php
                     include("includes/config.php"); 
                    // Bağlantıyı kontrol et
                    if ($conn->connect_error) {
                        die("Bağlantı hatası: " . $conn->connect_error);
                    }

                    // Veritabanından veri çekme sorgusu
                    $sql = "SELECT ARACAD, ARACSAYI, ARACRESIM FROM araclar";
                    $conn->set_charset("utf8mb4");
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Veritabanından gelen her bir satır için döngü
                        while ($row = $result->fetch_assoc()) {
                            // HTML içeriği içinde veritabanından çekilen verileri kullanarak dinamik olarak içerik oluştur
                            echo '<div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                                <div class="arac-ozellikleri" style="background-image: url(\'assets/img/arac-parkuru/' . $row["ARACRESIM"] . '\')">
                                    <div class="arac-icerik">
                                        <span data-purecounter-start="0" data-purecounter-end="' . $row["ARACSAYI"] . '" data-purecounter-duration="1" class="purecounter"></span>
                                        <p class="arac-adi">' . $row["ARACAD"] . '</p>
                                    </div>
                                </div>
                            </div><!-- End Stats Item -->';
                        }
                    } else {
                        echo "Veritabanında kayıt bulunamadı.";
                    }

                    
                    $conn->close();
                    ?>
                </div><!-- End Row -->
            </div><!-- End Container -->
        </section><!-- End Stats Counter Section -->

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
                <a target="_blank" href="https://www.youtube.com/channel/UCd-loP1SR-nLthkBFi8TabA" class="d-flex align-items-center justify-content-center"><i class="bi bi-youtube"></i></a>
                <a target="_blank" href="https://www.facebook.com/ulucanhafriyat/" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a target="_blank" href="https://www.instagram.com/ulucanlar_harfiyatt/" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
               
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
          2024 &copy;  Copyright <strong><span>Ulucan Hafriyat</span></strong>. Bütün hakları saklıdır
        </div>
        <div class="credits">
        
          Designed by <a  target="_blank"  href ="https://erkangungur.me/">Erkan Güngür</a>
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

  <a href="https://api.whatsapp.com/send?phone=905377141018&text=Merhaba" target="_blank">
    <div class="phone-call">
      <img src="https://cdn2.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-whatsapp-circle-512.png" width="50" alt="Call Now" title="Call Now">
    </div>
  </a>
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
