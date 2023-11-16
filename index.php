<?php 
include "koneksi.php";
$query_diskon = mysqli_query($conn,"SELECT * FROM tb_diskon INNER JOIN tb_menu ON tb_diskon.id_diskon = tb_menu.id_menu;");
$query_menu = mysqli_query($conn,"SELECT * FROM tb_menu INNER JOIN tb_kategori ON tb_kategori.id_kategori = tb_menu.id_kategori;");
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/logo_gacoan.png" type="">

  <title> Mie Gacoan </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
  <div class="hero_area">
    <div class="bg-box">
      <img src="images/header/HEADER.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              <img src="images/mie-gacoan.png" style="width: 100px;">
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.php">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  CRUD
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="crud/produk.php">Produk</a></li>
                  <li><a class="dropdown-item" href="#">Kategori</a></li>
                  <li><a class="dropdown-item" href="crud/diskon.php">Diskon</a></li>
                </ul>
              </li>
            </ul>
            <div class="user_option">
              <a href="" class="user_link">
                <i class="fa fa-user" aria-hidden="true"></i>
              </a>
              <a class="cart_link" href="#">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                </svg>
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
              <a href="#" class="order_online">
                Order Online
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 mx-auto">
                  <div class="detail-box">
                    <img src="images/logo.png" style="width: 150px; margin-bottom: 50px; margin-left: 200px;"> <br>
                    <img src="images/header/tagline-1.png" style="width: 400px; margin-left: 100px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 mx-auto">
                  <div class="detail-box">
                    <img src="images/logo.png" style="width: 150px; margin-bottom: 50px; margin-left: 200px;"> <br>
                    <img src="images/header/tagline-2.png" style="width: 500px; margin-left: 30px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 mx-auto">
                  <div class="detail-box">
                    <img src="images/logo.png" style="width: 150px; margin-bottom: 50px; margin-left: 200px;"> <br>
                    <img src="images/header/tagline-3.png" style="width: 400px; margin-left: 90px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- offer section -->

  <section class="offer_section layout_padding-bottom">
    <div class="offer_container">
      <div class="container ">
        <div class="row">
          <?php 
            $no = 1;
            while($data = mysqli_fetch_array($query_diskon)) { 
          ?>
          <div class="col-md-6  ">
            <div class="box">
              <div class="img-box">
                <img src="images/menu/i PANGSIT GORENG.jpg" alt="" style="width: 260px;">
              </div>
              <div class="detail-box">
                <h5>
                  <?php echo $data['nama_menu']; ?>
                </h5>
                <h6>
                  <span><?php echo $data['diskon']; ?>%</span> Off
                </h6>
              </div>
            </div>
          </div>
          <?php $no++; } ?>
        </div>
      </div>
    </div>
  </section>

  <!-- end offer section -->

  <!-- food section -->

  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Menu
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        <li data-filter=".Mie">Mie</li>
        <li data-filter=".Minuman">Minuman</li>
        <li data-filter=".Dimsum">Dimsum</li>
      </ul>

      <div class="filters-content" style="height: 130vh; overflow: auto;">
        <div class="row grid" >
          <?php 
            while($data = mysqli_fetch_array($query_menu)) { 
          ?>
          <div class="col-sm-6 col-lg-3 all <?php echo $data['nama_kategori']; ?>">
            <div class="box" style="height: 500px;">
              <div>
                <div class="img-box">
                  <img src="images/menu/<?php echo $data['gambar']; ?>" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    <?php echo $data['nama_menu']; ?>
                  </h5>
                  <p>
                    <?php echo $data['deskripsi']; ?>                
                  </p>
                  <div class="options">
                    <h6>
                      <?php
                      $angka = $data['harga'];
                      echo "Rp. " . number_format($angka,2,',','.'); 
                      ?>
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <!-- end food section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container ">

      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/mie-gacoan.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Tentang
              </h2>
            </div>
            <p>
              Nama "Mie Gacoan" diambil dari kata "Gaco" yang artinya jagoan / andalan dalam bahasa jawa. Tidak heran jika Mie Gacoan menjadi tempat bersantap favorit bagi masyarakat indonesia, khususnya mahasiswa, pelajar dan keluarga. Dengan mengusung suasana restoran yang atraktif, keren dan lega, dan juga dilengkapi berbagai fasilitas membuat setiap pengunjung makin betah dan selalu ingin kembali lagi.            
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Visi
              </h2>
            </div>
            <p>
              Menjadi brand F&B retail terbaik dan terbesar dengan standard pelayanan, produk, dan kebersihan bertaraf internasional            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Misi
              </h2>
            </div>
            <p>
              1. Menyediakan produk terbaik dengan harga yang sangat terjangkau untuk customer kelas menengah <br>
              2. Menciptakan customer experience yang terbaik dan berkelanjutan <br>
              3. Membawa nama Indonesia ke dalam peta F&B dunia          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- book section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2 class="mx-auto">
          Booking Meja
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" class="form-control" placeholder="Nama" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="No. Telpon" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" />
              </div>
              <div>
                <select class="form-control nice-select wide">
                  <option value="" disabled selected>
                    Jumlah orang
                  </option>
                  <option value="">
                    2
                  </option>
                  <option value="">
                    3
                  </option>
                  <option value="">
                    4
                  </option>
                  <option value="">
                    5
                  </option>
                </select>
              </div>
              <div>
                <input type="date" class="form-control">
              </div>
              <div class="btn_box">
                <button>
                  Kirim
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          TESTIMONI
        </h2>
      </div>
      <div class="carousel-wrap row ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                </p>
                <h6>
                  Presiden Joko Widodo
                </h6>
                <p>
                  Presiden RI-7
                </p>
              </div>
              <div class="img-box">
                <img src="images/review/jokowi.jpg" alt="" class="box-img">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                </p>
                <h6>
                  Irfan Fathur
                </h6>
                <p>
                  Manusia
                </p>
              </div>
              <div class="img-box">
                <img src="images/review/foto_irfan.jpeg" alt="" class="box-img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Kontak
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  0857815347
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  gacoan@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Mie Gacoan
            </a>
            <div class="footer_social">
              <a href="https://www.facebook.com/warunkgacoankota/">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="https://twitter.com/mie_gacoan">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="https://api.whatsapp.com/send/?phone=6289639345020&text&type=phone_number&app_absent=0">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
              </a>
              <a href="https://www.instagram.com/mie.gacoan/">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Buka - Tutup
          </h4>
          <p>
            Setiap hari
          </p>
          <p>
            09.00 Am - 23.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> Dibuat oleh
          <a href="" target="_blank">Irfan Fathurrohman</a>
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>