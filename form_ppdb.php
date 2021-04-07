<?php
	session_start();
     
    include 'config/koneksi.php';
      
	$nama_peserta = "";
		$tmpt_lahir = "";
		$tgl_lahir = "";
		$agama = "";
		$jk = "";
		$kk = "";
		$nik = "";
		$email = "";
		$nohp = "";
		
		$nm_ayah = "";
		$tmpt_lahir_ayah = "";
		$tgl_lahir_ayah = "";
		$pkrjn_ayah = "";
		$pnddkn_ayah = "";
		$gaji_ayah = "";

		$nm_ibu = "";
		$tmpt_lahir_ibu = "";
		$tgl_lahir_ibu = "";
		$pkrjn_ibu = "";
		$pnddkn_ibu = "";
		$gaji_ibu = "";

		$nm_wali = "";
		$tmpt_lahir_wali = "";
		$tgl_lahir_wali = "";
		$pkrjn_wali = "";
		$pnddkn_wali = "";
		$gaji_wali = "";

		$alamat = "";
		$rt = "";
		$rw = "";
		$kelurahan = "";
		$kecamatan = "";
		$kota = "";
		$propinsi = "";
		$tbadan = "";
		$bbadan = "";
		$bkbthnk = "";
		$readonly = "";
		$action = 'simpan_pendaftaran.php';

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
    <title>Pendaftaran Siswa Baru</title>
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
                <h2>FORMULIR PENDAFTARAN PPDB ONLINE SDN JURANG MANGU TIMUR 02 TAHUN PELAJARAN 2020/2021</h2>
                <div class="page_link">
                  <a href="index.html">Home</a>
                  <a href="#">Pages</a>
                  <a href="form_ppdb.php">PPDB Online</a>
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
						<form method="POST" action="<?php echo $action; ?>">
							<div class="mt-10 mt-sm-20 left-align-p">
								<!-- <label class="label col-lg-3 col-md-4 mt-10 mt-sm-20">First Name : </label> -->
								<input type="text" name="nama_peserta" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'"
								 required class="single-input">
							</div>
							<div class="mt-10 ">
								<input type="text" name="tmpt_lahir" placeholder="Tempat Lahir" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tempat Lahir'"
								 required class="single-input">
							</div>
							<div class="mt-10">
								<input type="date" name="tgl_lahir" placeholder="Tahun-Bulan-Tanggal" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tahun-Bulan-Tanggal'"
								 required class="single-input">
							</div>
							<div class="mt-10">
								<!-- <div class="icon"><i class="ti-location-arrow" aria-hidden="true"></i></div> -->
								<div class="form-select">
									<select name="agama">
										<option disabled="disabled" selected="selected">Agama</option>
										<option>Islam</option>
										<option>Kristen</option>
										<option>Katholik</option>
										<option>Hindu</option>
										<option>Konghucu</option>
									</select>
								</div>
							</div>
							<!-- <div class="input-group-icon mt-10">
								<div class="icon"><i class="ti-map" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select2">
									<select>
										<option value="1">Country</option>
										<option value="1">Bangladesh</option>
										<option value="1">India</option>
										<option value="1">England</option>
										<option value="1">Srilanka</option>
									</select>
								</div>
							</div> -->
							<div class="mt-10">
								<!-- <div class="icon"><i class="ti-location-arrow" aria-hidden="true"></i></div> -->
								<div class="form-select">
									<select name="jk">
										<option disabled="disabled" selected="selected">Jenis Kelamin</option>
										<option>Laki - Laki</option>
										<option>Perempuan</option>
									</select>
								</div>
							</div>
							<div class="mt-10">
								<input type="text" name="kk" placeholder="Nomor Kartu Keluarga" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Kartu Keluarga'"
								 required class="single-input-secondary">
							</div>
							<div class="mt-10">
								<input type="text" name="nik" placeholder="NIK" onfocus="this.placeholder = ''" onblur="this.placeholder = 'nik'"
								 required class="single-input">
							</div>
							<div class="mt-10">
								<!-- <div class="icon"><i class="ti-location-email" aria-hidden="true"></i></div> -->
								<input type="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'email'"
								 required class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="nohp" onkeypress="return hanyaAngka(event)" maxlength="14" placeholder="Nomor Telepon" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Telepon'"
								 required class="single-input">
								 <script>
									function hanyaAngka(evt) {
									var charCode = (evt.which) ? evt.which : event.keyCode
									if (charCode > 31 && (charCode < 48 || charCode > 57))
								 
										   return false;
										 return true;
										}
								 </script>
							</div>
							<fieldset>
								<legend>Data Ayah :</legend>
								<div class="mt-10">
									<input type="text" name="nm_ayah" placeholder="Nama Ayah" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Ayah'"
									 required class="single-input">
								</div>
								<div class="mt-10">
									<input type="text" name="tmpt_lahir_ayah" placeholder="Tempat Lahir" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tempat Ayah'"
									 required class="single-input">
								</div>
								<div class="mt-10">
									<input type="date" name="tgl_lahir_ayah" placeholder="Tanggal Lahir" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Ayah'"
									 required class="single-input">
								</div>
								<div class="mt-10">
									<div class="form-select">
										<select name="pkrjn_ayah">
											<option disabled="disabled" selected="selected">Pilih Pekerjaan</option>
											<option>Wirausaha</option>
	                                        <option>Pegawai Negeri Sipil</option>
	                                        <option>Wiraswasta</option>
	                                        <option>dll</option>
										</select>
									</div>
								</div>
								<div class="mt-10">
									<div class="form-select">
										<select name="pnddkn_ayah">
											<option disabled="disabled" selected="selected">Pilih Pendidikan</option>
											<option>Sekolah Dasar</option>
                                            <option>Sekolah Menengah Pertama</option>
                                            <option>Sekolah Menengah Atas</option>
                                            <option>Diploma 2 -3 </option>
                                            <option>Sarjana 1</option>
                                            <option>Sarjana 2</option>
                                            <option>Sarjana 3</option>
										</select>
									</div>
								</div>
								<div class="mt-10">
									<div class="form-select">
										<select name="gaji_ayah">
											<option disabled="disabled" selected="selected">Pilih Gaji</option>
											<option>1. Kurang dari Rp 1.000.000</option>
                                            <option>2. Rp 1.000.000 - Rp 2.000.000</option>
                                            <option>3. Lebih dari Rp 2.000.000</option>
										</select>
									</div>
								</div>
							</fieldset>
							<fieldset>
								<legend>Data Ibu :</legend>
								<div class="mt-10">
									<input type="text" name="nm_ibu" placeholder="Nama Ibu" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Ibu'"
									 required class="single-input">
								</div>
								<div class="mt-10">
									<input type="text" name="tmpt_lahir_ibu" placeholder="Tempat Lahir" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tempat Lahir'"
									 required class="single-input">
								</div>
								<div class="mt-10">
									<input type="date" name="tgl_lahir_ibu" placeholder="Tanggal Lahir" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Ayah'"
									 required class="single-input">
								</div>
								<div class="mt-10">
									<div class="form-select">
										<select name="pkrjn_ibu">
											<option disabled="disabled" selected="selected">Pilih Pekerjaan</option>
											<option>Wirausaha</option>
	                                        <option>Pegawai Negeri Sipil</option>
	                                        <option>Wiraswasta</option>
	                                        <option>dll</option>
										</select>
									</div>
								</div>
								<div class="mt-10">
									<div class="form-select">
										<select name="pnddkn_ibu">
											<option disabled="disabled" selected="selected">Pilih Pendidikan</option>
											<option>Sekolah Dasar</option>
                                            <option>Sekolah Menengah Pertama</option>
                                            <option>Sekolah Menengah Atas</option>
                                            <option>Diploma 2 -3 </option>
                                            <option>Sarjana 1</option>
                                            <option>Sarjana 2</option>
                                            <option>Sarjana 3</option>
										</select>
									</div>
								</div>
								<div class="mt-10">
									<div class="form-select">
										<select name="gaji_ibu">
											<option disabled="disabled" selected="selected">Pilih Gaji</option>
											<option>1. Kurang dari Rp 1.000.000</option>
                                            <option>2. Rp 1.000.000 - Rp 2.000.000</option>
                                            <option>3. Lebih dari Rp 2.000.000</option>
										</select>
									</div>
								</div>
							</fieldset>
							<fieldset>
								<legend>Data Wali :</legend>
								<div class="mt-10">
									<input type="text" name="nm_wali" placeholder="Nama Wali" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Wali'"
									 required class="single-input">
								</div>
								<div class="mt-10">
									<input type="text" name="tmpt_lahir_wali" placeholder="Tempat Lahir" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tempat Lahir'"
									 required class="single-input">
								</div>
								<div class="mt-10">
									<input type="date" name="tgl_lahir_wali" placeholder="Tanggal Lahir" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Ayah'"
									 required class="single-input">
								</div>
								<div class="mt-10">
									<div class="form-select">
										<select name="pkrjn_wali">
											<option disabled="disabled" selected="selected">Pilih Pekerjaan</option>
											<option>Wirausaha</option>
	                                        <option>Pegawai Negeri Sipil</option>
	                                        <option>Wiraswasta</option>
	                                        <option>dll</option>
										</select>
									</div>
								</div>
								<div class="mt-10">
									<div class="form-select">
										<select name="pnddkn_wali">
											<option disabled="disabled" selected="selected">Pilih Pendidikan</option>
											<option>Sekolah Dasar</option>
                                            <option>Sekolah Menengah Pertama</option>
                                            <option>Sekolah Menengah Atas</option>
                                            <option>Diploma 2 -3 </option>
                                            <option>Sarjana 1</option>
                                            <option>Sarjana 2</option>
                                            <option>Sarjana 3</option>
										</select>
									</div>
								</div>
								<div class="mt-10">
									<div class="form-select">
										<select name="gaji_wali">
											<option disabled="disabled" selected="selected">Pilih Gaji</option>
											<option>1. Kurang dari Rp 1.000.000</option>
                                            <option>2. Rp 1.000.000 - Rp 2.000.000</option>
                                            <option>3. Lebih dari Rp 2.000.000</option>
										</select>
									</div>
								</div>
							</fieldset>
							<fieldset>
								<legend>Alamat Peserta Didik</legend>
								<div class="mt-10">
									<input type="text" name="alamat" placeholder="Alamat Peserta" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Peserta'"
									 required class="single-input">
								</div>
								<div class="mt-10">
									<input type="text" name="rt" placeholder="RT" onfocus="this.placeholder = ''" onblur="this.placeholder = 'RT'"
									 required class="single-input">
								</div>
								<div class="mt-10">
									<input type="text" name="rw" placeholder="RW" onfocus="this.placeholder = ''" onblur="this.placeholder = 'RW'"
									 required class="single-input">
								</div>
								<div class="mt-10">
									<input type="text" name="kelurahan" placeholder="Kelurahan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kelurahan'"
									 required class="single-input">
								</div>
								<div class="mt-10">
									<input type="text" name="kecamatan" placeholder="Kecamatan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kecamatan'"
									 required class="single-input">
								</div>
								<div class="mt-10">
									<input type="text" name="kota" placeholder="Kota" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kota'"
									 required class="single-input">
								</div>
								<div class="mt-10">
									<input type="text" name="propinsi" placeholder="Propinsi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Propinsi'"
									 required class="single-input">
								</div>
							</fieldset>
							<div class="mt-10">
									<input type="text" name="tbadan" placeholder="Tinggi Badan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tinggi Badan'"
									 required class="single-input">
								</div>
								<div class="mt-10">
									<input type="text" name="bbadan" placeholder="Berat Badan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Berat Badan'"
									 required class="single-input">
								</div>
								<div class="mt-10 mt-sm-10">
									<input type="text" name="bkbthnk" placeholder="Berkebutuhan Khusus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Berkebutuhan Khusus'"
									 required class="single-input">
								</div>
								<br>
							<div class="mt-10 mt-sm-20">
                                <button class="primary-btn2 text-right rounded-1 text-white" name="simpan" type="submit">Submit</button>
                            </div>
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
		</body>
	  </html>