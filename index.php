<?php

      //session_start();
      include 'config/koneksi.php';
      
      
$sqlCommand = "SELECT COUNT(*) FROM tb_pendaftaran"; 
$query = mysqli_query($conn, $sqlCommand) or die (mysqli_error()); 
$row = mysqli_fetch_row($query);
// echo "Ada " . $row[0] . " Perusahaan.";
// mysqli_free_result($query); 
// mysqli_close($konek);
?>
      

<!DOCTYPE php>
<php lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/tutwuri.png" type="image/png" />
    <title>SDN Jurang Mangu Timur 02</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
      <div class="main_menu">
        <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.php"
              ><img src="img/teslogo2.png" alt=""
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="about-us.php">About</a>
                </li> -->
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Pages</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="form_ppdb.php">PPDB Online</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Kegiatan</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="seni_tari.php">Seni Tari</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="jumat_berkah.php"
                        >Jumat Berkah</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pencak_silat.php"
                        >Pencak Silat</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ End Header Menu Area =================-->

    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center">
                <p class="text-uppercase">
                  Cerdas, Modern dan Religius
                </p>
                <h2 class="text-uppercase mt-4 mb-5">
                  SDN JURANG MANGU TIMUR 02
                </h2>
                <div>
                  <a href="form_ppdb.php" class="primary-btn2 mb-3 mb-sm-0">Pendaftaran Siswa Baru</a>
                  <a href="view_pendaftar.php" class="primary-btn ml-sm-3 ml-0">Yang Telah Mendaftar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start Feature Area =================-->
    <section class="feature_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Data Siswa</h2>
              <p>
                Jumlah siswa pada tahun ajaran 2019-2020 beserta medali dan juara yang telah diraih dimulai pada tahun 2000
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-student"> <?php echo $row[0]." Siswa"; ?> </span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Jumlah Siswa</h4>
                <p>
                  Jumlah Siswa/i ini terhitung pada tahun ajaran 2019-2020
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-book"> 5 Fasilitas </span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Fasilitas Sekolah</h4>
                <p>
                  Jumlah fasilitas yang dimiliki yang disediakan kepada siswa/i dan orang tua ataupun tamu
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-earth"> 78 Medali </span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Medali</h4>
                <p>
                  Jumlah medali atau piala yang telah didapatkan terhitung mulai dari tahun 2000 - sekarang dan akan bertambah
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Feature Area =================-->

    <!--================ Start Kegiatan Sekolah =================-->
    <div class="popular_courses">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Kegiatan Sekolah</h2>
              <p>
                Kegiatan sekolah diterapkan untuk membiasakan siswa/i dan Lomba yang dimenangkan
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single course -->
          <div class="col-lg-12">
            <div class="owl-carousel active_course">
              <div class="single_course">
                <div class="course_head">
                  <img class="img-fluid" src="img/lomba/juarasilat.jpg" alt="" />
                </div>
                <div class="course_content">
                  <!-- <span class="price">$25</span> -->
                  <span class="tag mb-4 d-inline-block">Ekskul</span>
                  <h4 class="mb-3">
                    <a href="pencak_silat.php">Pencak Silat</a>
                  </h4>
                  <p>
                    Menjuarai silat pada kejuaraan Gugus
                  </p>
                  <div
                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                    
                    <!-- Start Area Profile love & people -->
                    <!-- <div class="authr_meta">
                      <img src="img/courses/author1.png" alt="" />
                      <span class="d-inline-block ml-2">Cameron</span>
                    </div>
                    <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                      <span class="meta_info"
                        ><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span
                      >
                    </div> -->
                    <!-- End Area Profile love & people -->

                  </div>
                </div>
              </div>

              <div class="single_course">
                <div class="course_head">
                  <img class="img-fluid" src="img/lomba/tarii.jpg" alt="" />
                </div>
                <div class="course_content">
                  <!-- <span class="price">$25</span> -->
                  <span class="tag mb-4 d-inline-block">Ekskul</span>
                  <h4 class="mb-3">
                    <a href="seni_tari.php">Seni Tari</a>
                  </h4>
                  <p>
                    Dengan adanya FLS2N Gugus 18 Pondok Aren Tahun 2020 Seni Tari sebagai salah satu kegiatan yang di ikuti kami
                  </p>
                  <div
                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                    
                    <!-- Start Area Profile love & people -->
                    
                    <!-- Endd Area Profile love & people -->

                  </div>
                </div>
              </div>

              <div class="single_course">
                <div class="course_head">
                  <img class="img-fluid" src="img/kegiatan/jumat berkah 2.jpg" alt="" />
                </div>
                <div class="course_content">
                  <!-- <span class="price">$25</span> -->
                  <span class="tag mb-4 d-inline-block">Kegiatan Rutin</span>
                  <h4 class="mb-3">
                    <a href="course-details.php">Jum'at Berkah</a>
                  </h4>
                  <p>
                    Kegiatan yang diselenggarakan setiap Jum'at pagi dengan membaca Ayat Al - Quran dengan diikuti oleh seluruh Siswa, Guru, Karyawan lainnya.
                  </p>
                  <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">

                    <!-- Start Area Profile love & people -->
                    
                    <!-- Endd Area Profile love & people -->


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--================ End Popular Courses Area =================-->

    <!--================ Start footer Area  =================-->
    <footer class="footer-area section_gap">
      <div class="container">
        <div class="row">
        
        <div class="col-lg-4 col-md-6 single-footer-widget">
          
        </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between">
        <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> SDN JURANG MANGU TIMUR 02. All Rights Reserved  <i class="" aria-hidden="true"></i> <!-- by <a href="#" target="_blank">Colorlib</a> -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

        </p>
        <div class="col-lg-4 col-sm-12 footer-social">
          <a href="#"><i class="ti-facebook"></i></a>
          <a href="#"><i class="ti-twitter"></i></a>
          <a href="#"><i class="ti-dribbble"></i></a>
          <a href="#"><i class="ti-linkedin"></i></a>
        </div>
        </div>
      </div>
      </footer>
      <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
  </body>
</php>
