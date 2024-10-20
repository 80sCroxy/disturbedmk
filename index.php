<?php
include("includes/config.php");
?>

<!DOCTYPE html>
<html lang="tr">

<head>
  <title>Ulucan Hafriyat </title>
  <?php include("includes/meta.php"); ?>
  <link href="assets/css/custom.css" rel="stylesheet">

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
          <li><a href="index.php" class="active">Anasayfa</a></li>
          <li><a href="about.php">Hakkımızda</a></li>
          <li><a href="services.php">Hizmetler</a></li>
          <li><a href="projects.php">Projeler</a></li>
          <li><a href="arac_parkuru.php">Araç Parkuru</a></li>
          <li><a href="contact.php">İletişim</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down"> <span>Ulucan Hafriyat</span></h2>
            <p data-aos="fade-up"></p>
            <p data-aos="fade-down"> <span>İnşaat Projelerinizdeki Güvenli Yolculuğunuzun Anahtarı!</span></p>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/4.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/5.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <!-- ======= Main Section ======= -->
  <main id="main">

    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Faaliyetlerimiz</h2>
          <!--<p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>-->

        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/F-1.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Hafriyat</h4>
                    <p>Hafriyat hizmetleri, inşaat projelerindeki toprak kazıma, taşıma ve doldurma gibi temel işlemleri
                      içerir. Profesyonel ekip ve ekipmanlarımızla, her türden hafriyat işlerinde güvenilir ve etkili
                      çözümler sunuyoruz.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/F-2.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Nakliye</h4>
                    <p>Nakliye hizmetleri, malzemelerin veya ekipmanların güvenli ve zamanında taşınmasını sağlar. Geniş
                      filomuz ve deneyimli personelimizle, nakliye ihtiyaçlarınızı karşılayacak uygun ve güvenilir
                      çözümler sunuyoruz.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/constructions-3.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Temel Hizmetleri</h4>
                    <p>Temel hizmetleri, inşaat projelerinin temel altyapısını oluşturan işlemleri içerir. Yüksek
                      kaliteli malzemeler ve uzman mühendislikle, sağlam ve dayanıklı temel yapılar inşa etmek için
                      gereken tüm hizmetleri sunuyoruz.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(assets/img/F-4.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Alt Yapı Hizmetleri</h4>
                    <p>Altyapı hizmetleri, şehir planlaması ve gelişim projeleri için gerekli olan alt yapı işlerini
                      içerir. Su, kanalizasyon, elektrik ve yol gibi altyapı sistemlerinin kurulumu ve bakımı
                      konularında uzmanlaşmış bir ekip olarak, şehirlerin ve toplulukların büyümesine katkıda
                      bulunuyoruz.




                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Constructions Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Hizmetlerimiz</h2>
          <p> Firmamız, inşaat endüstrisinde çeşitli ihtiyaçları karşılamak için geniş bir hizmet yelpazesi sunmaktadır.
            Deneyimli personelimiz ve modern ekipmanlarımızla, projelerinizi başarıyla tamamlamak için gereken her türlü
            desteği sağlıyoruz.</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fa-solid fa-mountain-city"></i>
              </div>
              <h3>Kazı ve Dolum Hizmetleri</h3>
              <p>Projeleriniz için özel olarak planlanmış kazı ve dolum hizmetleri sunuyoruz. İhtiyacınıza göre toprak
                kazıyor, düzleştiriyor ve dolduruyoruz, böylece projenizin başarıyla tamamlanmasını sağlıyoruz.</p>
              <a href="service-details_1.php" class="readmore stretched-link">Detaylı Bilgi <i
                  class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>İnşaat Atıklarının Bertarafı</h3>
              <p>İnşaat sürecinde oluşan atıkların düzenli bir şekilde toplanması, taşınması ve bertaraf edilmesi
                konusunda uzmanız. Çevre dostu yöntemlerle atıklarınızın etkili bir şekilde yönetilmesini sağlıyoruz.
              </p>
              <a href="service-details_2.php" class="readmore stretched-link">Detaylı Bilgi <i
                  class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-compass-drafting"></i>
              </div>
              <h3>Zemin Stabilizasyonu</h3>
              <p>Zemin stabilizasyonu hizmetleri ile zeminin taşıma kapasitesini artırıyor ve yapıların daha güvenli ve
                sağlam temellere oturmasını sağlıyoruz. İnşaat projelerinizin başarısı için zemin stabilizasyonu
                çözümleri sunuyoruz.</p>
              <a href="service-details_3.php" class="readmore stretched-link">Detaylı Bilgi <i
                  class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-trowel-bricks"></i>
              </div>
              <h3>Demontaj ve Geri Dönüşüm Hizmetleri</h3>
              <p>Mevcut yapıların güvenli bir şekilde demonte edilmesi ve malzemelerin geri dönüşümü konusunda uzmanız.
                Yapılarınızın demonte edilmesi ve malzemelerin geri dönüşümüyle çevre dostu bir yaklaşım sunuyoruz.</p>
              <a href="service-details_4.php" class="readmore stretched-link">Detaylı Bilgi <i
                  class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-helmet-safety"></i>
              </div>
              <h3>Kıyı Koruma ve İnşaatı</h3>
              <p>Kıyı koruma ve inşaatı hizmetleriyle, sahil bölgelerinde erozyonu önlemek ve kıyı hatlarını korumak
                için mühendislik çözümleri sunuyoruz. Kıyı projelerinizin güvenliği ve dayanıklılığı için uzman desteği
                sağlıyoruz.</p>
              <a href="service-details_5.php" class="readmore stretched-link">Detaylı Bilgi <i
                  class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water "></i>
              </div>
              <h3>Drenaj Sistemleri Kurulumu</h3>
              <p>Yağmur sularının ve yeraltı suyunun etkili bir şekilde yönetilmesini sağlayacak drenaj sistemleri
                kurulumu yapıyoruz. Projenizin mühendislik gereksinimlerine uygun drenaj sistemleriyle su yönetimini
                kolaylaştırıyoruz.</p>
              <a href="service-details_6.php" class="readmore stretched-link">Detaylı Bilgi <i
                  class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services.jpg);" data-aos="zoom-in"
            data-aos-delay="100"></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Vizyonumuz</h3>
            <p>Ulucan Hafriyat olarak, inşaat sektöründe yenilikçi ve sürdürülebilir çözümlerle öncü olmayı
              hedefliyoruz. Müşteri odaklı yaklaşımımızla sektördeki liderliğimizi pekiştirirken, çevreye duyarlı ve
              etik değerlere bağlı bir şirket olmaktan gurur duyuyoruz.</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">İnovasyon ve Teknoloji</a></h4>
                <p> Sektördeki en son teknolojileri ve yenilikleri takip ederek, projelerimizi daha verimli ve
                  sürdürülebilir hale getiriyoruz.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Müşteri Memnuniyeti</a></h4>
                <p>Müşterilerimizin ihtiyaçlarını anlayarak, onlara özel çözümler sunarak uzun vadeli ilişkiler kurmayı
                  ve memnuniyetlerini sağlamayı amaçlıyoruz.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Çevreye Duyarlılık</a></h4>
                <p>Doğal kaynakların korunması ve çevrenin sürdürülebilirliği için çaba gösteriyor, projelerimizi çevre
                  dostu yöntemlerle yürütüyoruz.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Toplumsal Katkı</a></h4>
                <p>Faaliyet gösterdiğimiz toplumun gelişimine katkıda bulunarak, sosyal sorumluluk bilinciyle hareket
                  ediyor ve toplumsal fayda sağlamayı hedefliyoruz.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="fa-solid fa-helmet-safety flex-shrink-0"></i>

              <div>
                <h4><a href="" class="stretched-link">Ekipman ve İş Güvenliği</a></h4>
                <p>Çalışanlarımızın ve müşterilerimizin güvenliğini her şeyin önünde tutarak, en yüksek iş güvenliği
                  standartlarına uygun şekilde hareket ediyoruz.</p>
              </div>
            </div><!-- End Icon Box -->

          </div>
        </div>

      </div>
    </section><!-- End Alt Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Önde Gelen Projelerimiz</h2>
        </div>
        <ul class="nav nav-tabs row g-2 d-flex">
          <?php
          $sql = "SELECT ID, PAD, PACIKLAMA, PRESIM
          FROM pdetay
          ORDER BY TARIH DESC LIMIT 4 ";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $id = 1;
            while ($row = $result->fetch_assoc()) {
              if ($id == 1) {
                $active = "active show";
              } else {
                $active = " ";
              }
              echo '<li class="nav-item col-3">';
              echo '<a class="nav-link ' . $active . ' " data-bs-toggle="tab" data-bs-target="#tab-' . $id . '">';
              echo '<h4>' . $row["PAD"] . '</h4>';
              echo '</a></li>';
              $id = $id + 1;
            }
          } else {
            echo '<li class="nav-item col-12">KAYIT BULUNAMADI HATA !!! </li>';
          }
          ?>
        </ul>

        <div class="tab-content">
          <?php
          $sql = "SELECT ID, PAD, PACIKLAMA, PRESIM
          FROM pdetay
          ORDER BY TARIH DESC LIMIT 4 ";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            $id = 1;
            while ($row = $result->fetch_assoc()) {
              if ($id == 1) {
                $active = "active show";
              } else {
                $active = " ";
              }

              echo '<div class="tab-pane ' . $active . '" id="tab-' . $id . '">';
              echo '<div class="row">';
              echo '<div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
              data-aos="fade-up" data-aos-delay="100">';
              echo '<h3>' . $row["PAD"] . '</h3>';
              echo '<p> ' . $row["PACIKLAMA"] . '</p>';
              echo '<a href="project-details.php?ID=' . $row["ID"] . '" class="projebutton">Proje Detayları </a>';
              echo '</div>';
              echo '<div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">';
              echo '<img src="' . $row["PRESIM"] . '" alt="" class="img-fluid">';
              echo '</div></div></div>';
              $id = $id + 1;
            }
          } else {
            echo '<div>KAYIT BULUNAMADI HATA !!!</div>';
          }
          ?>
        </div>
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Projeler</h2>
          <p>Projelerimizde uzmanlığımızla her adımda yanınızdayız. İnşaat, altyapı, yol yapımı ve daha fazlasında
            sunduğumuz çözümlerle, güvenilir ve başarılı projelere imza atıyoruz.</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
          data-portfolio-sort="original-order">

           <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Tümü</li>
            <li data-filter=".filter-remodeling">Biten</li>
            <li data-filter=".filter-construction">Devam Eden</li>
          </ul> <!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/ProjeDetaylari/ProjeDetay-1.JPG" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>PİYALEPAŞA PREMİUM</h4>
                  <p>POLAT İNŞAAT GAY</p>
                  <a href="assets/img/projects/1.jpg" title="PİYALEPAŞA PREMİUM"
                    data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                      class="bi bi-zoom-in custom-icon"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg custom-icon"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Proje 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/2.jpg" title="Construction 1"
                    data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Proje 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/3.jpg" title="Repairs 1" data-gallery="portfolio-gallery-repairs"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Proje 4</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/4.jpg" title="Repairs 1" data-gallery="portfolio-gallery-book"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Proje 5</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/5.jpg" title="Remodeling 2" data-gallery="portfolio-gallery-remodeling"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/6.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Proje 6</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/6.jpg" title="Construction 2"
                    data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/7.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Proje 7</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/7.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/8.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Proje 8</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/8.jpg" title="Repairs 2" data-gallery="portfolio-gallery-book"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/9.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Proje 9</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/9.jpg" title="Remodeling 3" data-gallery="portfolio-gallery-remodeling"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/10.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Proje 10</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/10.jpg" title="Construction 3"
                    data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/11.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Proje 11</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/11.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="assets/img/projects/12.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Proje 12</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/projects/12.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book"
                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="project-details.php" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->

  </main>
  <!-- End #main -->

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
  <a href="https://api.whatsapp.com/send?phone=905377141018&text=Merhaba" target="_blank">
    <div class="phone-call">
      <img
        src="https://cdn2.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-whatsapp-circle-512.png"
        width="50" alt="Call Now" title="Call Now">
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