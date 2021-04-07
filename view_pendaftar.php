<?php
	session_start();
     
    include 'config/koneksi.php';
      
	

		$sqlCommand = "SELECT COUNT(*) FROM tb_pendaftaran";      
		$sqlP = "SELECT COUNT(*) FROM tb_pendaftaran where jk='Perempuan'"; 
		$sqlL = "SELECT COUNT(*) FROM tb_pendaftaran where jk='Laki - Laki'"; 

		$queryJml = mysqli_query($conn, $sqlCommand) or die (mysqli_error());
		$queryP = mysqli_query($conn, $sqlP) or die (mysqli_error());
		$queryL = mysqli_query($conn, $sqlL) or die (mysqli_error()); 
		$rowJml = mysqli_fetch_row($queryJml);
		$rowP = mysqli_fetch_row($queryP);
		$rowL = mysqli_fetch_row($queryL);



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/tutwuri.png" type="image/png" />
    <title>Pendaftar Siswa Baru</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />

    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

	<!-- Font Awesome 
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
 
 <!-- Ionicons 
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->

  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <!-- iCheck 
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->

  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

  <!-- Theme style 
  <link rel="stylesheet" href="dist/css/adminlte.min.css">-->

  <!-- overlayScrollbars 
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">-->

  <!-- Daterange picker 
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">-->

  <!-- summernote 
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">-->
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area white-header">
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
            <a class="navbar-brand" href="index.html">
              <img class="logo-2" src="img/teslogo.png" alt="" />
            </a>
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
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="about-us.php">About</a>
                </li> -->
                <li class="nav-item submenu dropdown active">
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
                <li class="nav-item submenu dropdown ">
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

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="banner_content text-center">
                <h2>PENDAFTAR PPDB ONLINE SDN JURANG MANGU TIMUR 02 TAHUN PELAJARAN 2020/2021</h2>
                <div class="page_link">
                  <a href="index.html">Home</a>
                  <a href="#">Pages</a>
                  <a href="view_pendaftar.php">Pendaftar PPDB Online</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->
	
	<!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container">
			
			<div class="section-top-border">
				<div class="row">
					<div class="col-lg-8 col-md-8 "> <!-- col-lg-8 col-md-8 -->
				 <table id="example1" class="table table-bordered table-striped">
				<form method="POST" action="">
                  <thead>
                  <tr>
                    <th class="text-center">Nama Peserta</th>
                    <th class="text-center">Tanggal Lahir</th>
                    <th class="text-center">Nomor Kartu Keluarga</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">Nama Ayah</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  	include 'config/koneksi.php';

  					$sql = "SELECT * FROM tb_pendaftaran";
  					$results = $conn->query($sql);

                  $no = 1;
                    if ($results->num_rows>0) 
                    {
                      while ($row = $results->fetch_assoc()) {
                        # code...
                      
                  ?>
                  <tr>
                    <td class="text-center"><?php echo $row['nama_peserta']; ?></td>
                    <td class="text-center"><?php echo $row['tl_lahir']; ?>
                    </td>
                    <td class="text-center"><?php echo $row['no_kk']; ?></td>
                    <td class="text-center"><?php echo $row['jk']; ?></td>
                    <td class="text-center"><?php echo $row['nm_ayah']; ?></td>
                  </tr>
                  <?php
                      }
                    }  
                  ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th class="text-center">Nama Peserta</th>
                    <th class="text-center">Tanggal Lahir</th>
                    <th class="text-center">Nomor Kartu Keluarga</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">Nama Ayah</th>
                  </tr>
                  </tfoot>
                </table>
						</form>
					</div>
					<div class="col-lg-4 right-contents">
                    <ul>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Jumlah Siswa Terdaftar</p>
                                <span class="or"><?php echo $rowJml[0]." Siswa/i"; ?></span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Laki - Laki </p>
                                <span><?php echo $rowL[0]." Siswa"; ?></span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Perempuan </p>
                                <span><?php echo $rowP[0]." Siswi"; ?></span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="view_pendaftar.php">
                                <p>Pendaftaran Berakhir pada </p>
                                <span>28 Juni 2020</span>
                            </a>
                        </li>
                    </ul>
                        <div class="feedeback">
                            <h6>Kritik dan Saran</h6>
                            <textarea name="feedback" class="form-control" cols="10" rows="10"></textarea>
                            <div class="mt-10 text-right">
                                <a href="#" class="primary-btn2 text-right rounded-0 text-white">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
	
	<!-- End Align Area -->

	<!--================ Start footer Area  =================-->
    <footer class="footer-area section_gap">
			<div class="container">
			  <div class="row">
				<!-- <div class="col-lg-2 col-md-6 single-footer-widget">
				  <h4>Top Products</h4>
				  <ul>
					<li><a href="#">Managed Website</a></li>
					<li><a href="#">Manage Reputation</a></li>
					<li><a href="#">Power Tools</a></li>
					<li><a href="#">Marketing Service</a></li>
				  </ul>
				</div> -->
				<!-- <div class="col-lg-2 col-md-6 single-footer-widget">
				  <h4>Quick Links</h4>
				  <ul>
					<li><a href="#">Jobs</a></li>
					<li><a href="#">Brand Assets</a></li>
					<li><a href="#">Investor Relations</a></li>
					<li><a href="#">Terms of Service</a></li>
				  </ul>
				</div> -->
				<!-- <div class="col-lg-2 col-md-6 single-footer-widget">
				  <h4>Features</h4>
				  <ul>
					<li><a href="#">Jobs</a></li>
					<li><a href="#">Brand Assets</a></li>
					<li><a href="#">Investor Relations</a></li>
					<li><a href="#">Terms of Service</a></li>
				  </ul>
				</div> -->
				<!-- <div class="col-lg-2 col-md-6 single-footer-widget">
				  <h4>Resources</h4>
				  <ul>
					<li><a href="#">Guides</a></li>
					<li><a href="#">Research</a></li>
					<li><a href="#">Experts</a></li>
					<li><a href="#">Agencies</a></li>
				  </ul>
				</div> -->
				<div class="col-lg-4 col-md-6 single-footer-widget">
				  <!-- <h4>Newsletter</h4>
				  <p>You can trust us. we only send promo offers,</p>
				  <div class="form-wrap" id="mc_embed_signup">
					<form
					  target="_blank"
					  action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
					  method="get"
					  class="form-inline"
					>
					  <input
						class="form-control"
						name="EMAIL"
						placeholder="Your Email Address"
						onfocus="this.placeholder = ''"
						onblur="this.placeholder = 'Your Email Address'"
						required=""
						type="email"
					  />
					  <button class="click-btn btn btn-default">
						<span>subscribe</span>
					  </button>
					  <div style="position: absolute; left: -5000px;">
						<input
						  name="b_36c4fd991d266f23781ded980_aefe40901a"
						  tabindex="-1"
						  value=""
						  type="text"
						/>
					  </div>
	  
					  <div class="info"></div>
					</form>
				  </div> -->
				</div>
			  </div>
			  <div class="row footer-bottom d-flex justify-content-between">
				<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
				  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Website Sekolah Dasar | <i class="" aria-hidden="true"></i> by <a href="#" target="_blank">Yudaz A Rakhman</a>
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

    <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Bootstrap 4 -->
<!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->

<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>

<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>

<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>

<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

		</body>
	  </html>