<?php

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (isset($_SESSION['status']) || $_SESSION['status'] !== "login") {
  header('Location: login.php');
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PPTQ AL-MUSTAQIMIYYAH</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous" />
  <!-- Font Google -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand navbar-logo" href="#">
        <img src="images/yayasan markaz.png" width="190px" height="50" alt="pptqlogo" class="logo-1" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fas fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="" data-scroll-nav="0">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-scroll-nav="1">Sejarah Pondok</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-scroll-nav="2">Target Hafalan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-scroll-nav="3">Pendiri pondok</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-scroll-nav="4">Prestasi Santri</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" data-scroll-nav="6">contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <!-------header pondok------->
  <section class="banner" data-scroll-index="0">
    <div class="banner-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="banner-text">
              <h2 class="white">PPTQ AL-MUSTAQIMIYAAH</h2>
              <h6 class="white">
                MENCETAK HAFIZH/HAFIZZHOH<a href="target"="_blank" rel="dofollow" class="weblink"></a>
              </h6>
              <p class="banner-text white">
                Pesantren Al Mustaqimiyyah Bogor didirikan oleh KH lyus
                Farussabti dan Umi Hj. Isti'anah Muay. Yang istimewa, pendiri
                memiliki prestasi juara tahfidz Quran tingkat nasional 30 juz
                pada tahun 1987. Inilah pangkal dari sisi menarik ponpes Al
                Mustaqimiyyah. Adapun secara program memiliki fokus pada tiga
                hal. Pertama adalah Al Quran, mulai dari tahsin hingga tahfidz
                Quran. Ada juga pendidikan formal. Dan yang ketika adalah
                pendidikan syariah diniyyah. Jadi cukup lengkap.
              </p>
            </div>
          </div>
          <div class="Foto-Depan">
            <img width="100%" height="100%" src="images/UMI ABI.png" class="img-fluid wow fadeInUp" />
          </div>
        </div>
      </div>
    </div>
    <span class="svg-wave">
      <img style="z-index: 999" width="100%" class="svg-hero" src="images/applight-wave.svg" />
    </span>
  </section>

  <!-------heeder End------->

  <!-------Sejarah Pondok End------->

  <section class="Sejarah Pondok section-padding prelative" data-scroll-index="1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sectioner-header text-center">
            <h3>Sejarah Pondok</h3>
            <span class="line"></span>
            <p>
              Pesantren Al Mustaqimiyyah Bogor didirikan oleh KH. Iyus
              Farussabti dan Umi Hj. Isti'anah Muay. Yang istimewa, pendiri
              memiliki prestasi juara tahfidz Quran tingkat nasional 30 juz
              pada tahun 1987. Adapun secara program memiliki fokus pada tiga
              hal. Pertama adalah Al Quran, mulai dari tahsin hingga tahfidz
              Quran.
            </p>
          </div>
          <div class="section-content text-center">
            <div class="row">
              <div class="col-md-4">
                <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <h5>1998</h5>
                  <p>
                    Awal mula didirikannya pondok pesantren tahfidzil quran
                    AL-MUSTAQIMIYYAH
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                  <i class="fa fa-mobile" aria-hidden="true"></i>
                  <h5>2003</h5>
                  <p>Peletakan batu pertama sekaligus peresmian tempat</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="icon-box wow fadeInUp" data-wow-delay="0.6s">
                  <i class="fa fa-bolt" aria-hidden="true"></i>
                  <h5>2014</h5>
                  <p>didirikannya yayasan sekolah smp dan sma</p>
                </div>
              </div>
            </div>
            <a href="#" class="Sej arah Pondok-btn">Learn More</a>
            <!--ISI LINK/ HREFKAN KE BLOG/ARTIKEL YANG BERISI SEJARAH PPONDOK-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-------Sejarah Pondok End------->

  <!-------Video Start------->
  <section class="video-section prelative text-center white">
    <div class="section-padding video-overlay">
      <div class="container">
        <h3>Watch Now</h3>
        <i class="fa fa-play" id="video-icon" aria-hidden="true"></i>
        <div class="video-popup">
          <div class="video-src">
            <div class="iframe-src">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/EkE2Yb3N1Lw?si=jkfAUNeZnoi5PDFU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-------Video End------->

  <!-------Target Hafalan Start------->
  <section class="feature section-padding" data-scroll-index="2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sectioner-header text-center">
            <h3>Target Hafalan</h3>
            <span class="line"></span>
            <p>
              Target Hafalah program kelas sekolah
            </p>
          </div>
          <div class="section-content text-center">
            <div class="row">
              <div class="col-md-4 col-sm-12">
                <div class="media single-feature wow fadeInUp" data-wow-delay="0.2s">
                  <div class="media-body text-right media-right-margin">
                    <h5>1 SMP</h5>
                    <p>
                      JUZ 1-5
                    </p>
                  </div>
                  <div class="media-right icon-border">
                    <span class="fa fa-hdd" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="media single-feature wow fadeInUp" data-wow-delay="0.4s">
                  <div class="media-body text-right media-right-margin">
                    <h5>2 SMP</h5>
                    <p>
                      JUZ 6-10
                    </p>
                  </div>
                  <div class="media-right icon-border">
                    <span class="fa fa-hdd" aria-hidden="true"></span>
                  </div>
                </div>
                <div class="media single-feature wow fadeInUp" data-wow-delay="0.6s">
                  <div class="media-body text-right media-right-margin">
                    <h5>3 SMP</h5>
                    <p>
                      JUZ 11-15
                    </p>
                  </div>
                  <div class="media-right icon-border">
                    <span class="fa fa-hdd" aria-hidden="true"></span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 d-none d-md-block d-lg-block">
                <div class="feature-mobile">
                  <img src="images/buatcuriculum.png" class="img-fluid" />
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="media single-feature wow fadeInUp" data-wow-delay="0.2s">
                  <div class="media-left icon-border media-right-margin">
                    <span class="fa fa-hdd" aria-hidden="true"></span>
                  </div>
                  <div class="media-body text-left">
                    <h5>1 SMA</h5>
                    <p>
                      JUZ 16-20
                    </p>
                  </div>
                </div>
                <div class="media single-feature wow fadeInUp" data-wow-delay="0.4s">
                  <div class="media-left icon-border media-right-margin">
                    <span class="fa fa-hdd" aria-hidden="true"></span>
                  </div>
                  <div class="media-body text-left">
                    <h5>2 SMA </h5>
                    <p>
                      21-25
                    </p>
                  </div>
                </div>
                <div class="media single-feature wow fadeInUp" data-wow-delay="0.6s">
                  <div class="media-left icon-border media-right-margin">
                    <span class="fa fa-hdd" aria-hidden="true"></span>
                  </div>
                  <div class="media-body text-left">
                    <h5>3 SMA</h5>
                    <p>
                      UZ
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-------Target Hafalan End------->

  <!-------Pendiri pondok Start------->
  <section class="Pendiri pondok section-padding" data-scroll-index="3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sectioner-header text-center">
            <h3>pengasuh dan pendiri</h3>
            <span class="line"></span>
            <p>
              pengasuh dan pendiri pondok pesantren tahfidzil quran almustaqimiyyah 1999-sekarang.
            </p>
          </div>
          <div class="section-content text-center">
            <div class="row">
              <div class="col-md-6">
                <div class="Pendiri pondok-detail wow bounce" data-wow-delay="0.2s">
                  <img src="images/umiedit.jpg" class="img-fluid" />
                  <h4>Umi hj istianah muay</h4>
                  <p>Pendiri sekaligus pengasuh</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="Pendiri pondok-detail wow bounce" data-wow-delay="0.4s">
                  <img src="images/buyaedit.jpg" class="img-fluid" />
                  <h4>buya KH iyus fahrusabti</h4>
                  <p>Pendiri sekaligus pengasuh</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-------Pendiri pondok End------->

  <!-------Testimonial Start------->
  <section class="testimonial section-padding" data-scroll-index="4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sectioner-header text-center white">
            <h3>Prestasi Santri</h3>
            <span class="line"></span>
            <p class="white">
              salah satu bentuk syiar tahfiz santri almustaqimiyyah adalah dengan membumikan alquran dalam segala aspek.
            </p>
          </div>

          <div class="section-content">
            <div class="row">
              <div class="offset-md-2 col-md-8 col-sm-12">
                <div class="slider">
                  <div class="slider-item">
                    <div class="test-img">
                      <img src="images/fotoprestasi1.jpg" alt="Placeholder" width="157" height="157" />
                    </div>
                    <div class="test-text">
                      <span class="title"><span>umi hj istianah muay</span> pendiri sekaligus pengasuh</span>
                      Juara Tartil Al-Quran Provinsi jawa barat 1987
                    </div>
                  </div>
                  <div class="slider-item">
                    <div class="test-img">
                      <img src="images/fotoprestasi1.jpg" alt="Placeholder" width="157" height="157" />
                    </div>
                    <div class="test-text">
                      <span class="title"><span>umi hj istianah muay</span> pendiri sekaligus pengasuh</span>
                      Juara tahfizh 30 juz putri indonesia di LIbya 2007
                    </div>
                  </div>
                  <div class="slider-item">
                    <div class="test-img">
                      <img src="images/fotoprestasi1.jpg" alt="Placeholder" width="157" height="157" />
                    </div>
                    <div class="test-text">
                      <span class="title"><span>kh.deden M makhyaruddin</span> tafsir </span>
                      Juara
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-------Testimonial End------->

  <!-------FAQ Start------->

  <!-------FAQ End------->

  <!-------Contact Start------->
  <section class="contact section-padding" data-scroll-index="6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sectioner-header text-center">
            <h3>Contact us</h3>
            <span class="line"></span>
            <p>
              Target Hafalah program kelas sekolah
            </p>
          </div>
          <div class="section-content">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-8">
                <form id="contact_form" action="" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col">
                      <input type="text" id="your_name" class="form-input w-100" name="Nama" placeholder="Full Name" required />
                    </div>
                    <div class="col">
                      <input type="email" id="email" class="form-input w-100" name="email" placeholder="Email" required />
                    </div>
                  </div>
                  <input type="text" id="Keluhann" class="form-input w-100" name="keluhann" placeholder="Keluhann" />
                  <input type="text" id="saran " class="form-input w-100" name="saran" placeholder="saran" />
                  <input type="text" id="masukan " class="form-input w-100" name="masukan" placeholder="masukan" />
                  <input type="text" id="untuk" class="form-input w-100" name="untuk" placeholder="untuk" />
                  <textarea class="form-input w-100" id="message" placeholder="Message" name="message"></textarea>
                  <button class="btn-grad w-100 text-uppercase" type="button" onclick="handleSubmit()" name="button">
                    submit
                  </button>
                </form>
              </div>
              <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="contact-info white">
                  <div class="contact-item media">
                    <i class="fa fa-map-marker-alt media-left media-right-margin"></i>
                    <div class="media-body">
                      <p class="text-uppercase">Address</p>
                      <p class="text-uppercase">New Delhi, India</p>
                    </div>
                  </div>
                  <div class="contact-item media">
                    <i class="fa fa-mobile media-left media-right-margin"></i>
                    <div class="media-body">
                      <p class="text-uppercase">Phone</p>
                      <p class="text-uppercase">
                        <a class="text-white" href="tel:+15173977100">009900990099</a>
                      </p>
                    </div>
                  </div>
                  <div class="contact-item media">
                    <i class="fa fa-envelope media-left media-right-margin"></i>
                    <div class="media-body">
                      <p class="text-uppercase">E-mail</p>
                      <p class="text-uppercase">
                        <a class="text-white" href="mailto:abcdefg@gmail.com">yogeshsingh.now@gmail.com</a>
                      </p>
                    </div>
                  </div>
                  <div class="contact-item media">
                    <i class="fa fa-clock media-left media-right-margin"></i>
                    <div class="media-body">
                      <p class="text-uppercase">Working Hours</p>
                      <p class="text-uppercase">Mon-Fri 9.00 AM to 5.00PM.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-------Contact End------->

  <!-------PSB ------->
  <section class="download section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="sectioner-header text-center white">
            <h1>PSB</h1>
            <h3>pendaftaran Santri Baru</h3>
            <span class="line"></span>
            <a href="https://psb.almustaqimiyyah.sch.id" target="_blank">https://psb.almustaqimiyyah.sch.id</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-------PSB ------->

  <footer class="footer-copy">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <p>
            2023 @wildan fathu rijan </a>
          </p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <!-- scrollIt js -->
  <script src="js/scrollIt.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    wow = new WOW();
    wow.init();
    $(document).ready(function(e) {
      $("#video-icon").on("click", function(e) {
        e.preventDefault();
        $(".video-popup").css("display", "flex");
        $(".iframe-src").slideDown();
      });
      $(".video-popup").on("click", function(e) {
        var $target = e.target.nodeName;
        var video_src = $(this).find("iframe").attr("src");
        if ($target != "IFRAME") {
          $(".video-popup").fadeOut();
          $(".iframe-src").slideUp();
          $(".video-popup iframe").attr("src", " ");
          $(".video-popup iframe").attr("src", video_src);
        }
      });

      $(".slider").bxSlider({
        pager: false,
      });
    });

    $(window).on("scroll", function() {
      var bodyScroll = $(window).scrollTop(),
        navbar = $(".navbar");

      ////navbar scoll ilang
      if (bodyScroll > 50) {
        $(".navbar-pptq img").attr("src", "images/logo-black.png");
        navbar.addClass("nav-scroll");
      } else {
        $(".navbar-pptq img").attr("src", "images/pptqlogo.png");
        navbar.removeClass("nav-scroll");
      }
    });
    $(window).on("load", function() {
      var bodyScroll = $(window).scrollTop(),
        navbar = $(".navbar");

      if (bodyScroll > 50) {
        $(".navbar-pptq img").attr("src", "images/logo-black.png");
        navbar.addClass("nav-scroll");
      } else {
        $(".navbar-pptq img").attr("src", "images/logo-white.png");
        navbar.removeClass("nav-scroll");
      }

      $.scrollIt({
        easing: "swing", // the easing function for animation
        scrollTime: 900, // how long (in ms) the animation takes
        activeClass: "active", // class given to the active nav element
        onPageChange: null, // function(pageIndex) that is called when page is changed
        topOffset: -63,
      });
    });
  </script>
  <script>
    function handleSubmit() {
      const formData = new FormData(document.getElementById('contact_form'));
      const jsonData = {};

      formData.forEach((value, key) => {
        jsonData[key] = value;
      });

      console.log(formData)

      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'https://pptq-api.vercel.app', true);
      xhr.setRequestHeader('Content-Type', 'application/json');

      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 201) {
            console.log('pesan created successfully:', JSON.parse(xhr.responseText));
            alert("Berhasil mengirim pesan!");
            window.location.reload();
          } else {
            console.error('Error creating pesan:', JSON.parse(xhr.responseText));
            alert("Gagal mengirim pesan, silahkan refresh dan coba lagi!");
          }
        }
      };

      xhr.send(JSON.stringify(jsonData));
    }
  </script>
</body>

</html>