<?php
  
  //session_start();
  include 'koneksi.php';

  $id         = "";
  $nama       = "";
  $tmptLahir  = "";
  $tglLahir   = "";
  $agama      = "";
  $jk         = "";
  $nokk       = "";
  $nik        = "";
  $email      = "";
  $nohp       = "";
  $nmAyah     = "";
  $tmptLahirAyah = "";
  $tglLahirAyah = "";
  $pkrjnAyah  = "";
  $pnddknAyah = "";
  $gajiAyah   = "";
  $nmIbu     = "";
  $tmptLahirIbu = "";
  $tglLahirIbu = "";
  $pkrjnIbu  = "";
  $pnddknIbu = "";
  $gajiIbu   = "";
  $nmWali     = "";
  $tmptLahirWali = "";
  $tglLahirWali = "";
  $pkrjnWali  = "";
  $pnddknWali = "";
  $gajiWali   = "";
  
  $alamat     = "";
  $rt         = "";
  $rw         = "";
  $kelurahan  = "";
  $kecamatan  = "";
  $kota       = "";
  $propinsi   = "";
  $tBadan     = "";
  $bBadan     = "";
  $bkbthnk    = "";

  $readonly   = "";
  $action     = 'cfg_simpan.php';

  if (isset($_GET['id_peserta'])) 
  {
    $id = $_GET['id_peserta'];

    $sql = "SELECT * FROM tb_pendaftaran WHERE id_peserta = '$id'";
    $results = $conn->query($sql);

    if ($results->num_rows > 0) 
      {
      while ($row = $results->fetch_assoc())
          {
            //$id         = $row['id_peserta'];
            $nama       = $row['nama_peserta'];
            $tmptLahir  = $row['t_lahir'];
            $tglLahir   = $row['tl_lahir'];
            $agama      = $row['agama'];
            $jk         = $row['jk'];
            $nokk       = $row['no_kk'];
            $nik        = $row['no_nik'];
            $email      = $row['email'];
            $nohp       = $row['no_telp'];
            
            $nmAyah     = $row['nm_ayah'];
            $tmptLahirAyah = $row['t_ayah'];
            $tglLahirAyah = $row['tl_ayah'];
            $pkrjnAyah  = $row['pk_ayah'];
            $pnddknAyah = $row['pdk_ayah'];
            $gajiAyah   = $row['gaji_ayah'];
            
            $nmIbu     = $row['nm_ibu'];
            $tmptLahirIbu = $row['t_ibu'];
            $tglLahirIbu = $row['tl_ibu'];
            $pkrjnIbu  = $row['pk_ibu'];
            $pnddknIbu = $row['pdk_ibu'];
            $gajiIbu   = $row['gaji_ibu'];
            
            $nmWali     = $row['nm_wali'];
            $tmptLahirWali = $row['t_wali'];
            $tglLahirWali = $row['tl_wali'];
            $pkrjnWali  = $row['pk_wali'];
            $pnddknWali = $row['pdk_wali'];
            $gajiWali   = $row['gaji_wali'];
            
            $alamat     = $row['alamat_peserta'];
            $rt         = $row['rt'];
            $rw         = $row['rw'];
            $kelurahan  = $row['kelurahan'];
            $kecamatan  = $row['kecamatan'];
            $kota       = $row['kota'];;
            $propinsi   = $row['propinsi'];
            
            $tBadan     = $row['t_badan'];
            $bBadan     = $row['b_badan'];
            $bkbthnk    = $row['bkbthnk'];
            $readonly   = "readonly";
            $action     = 'cfg_update.php';

          }
      }
  }

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?page=1">Home</a></li>
              <li class="breadcrumb-item active">Form Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    

    <!-- Main content -->
    <form action="<?php echo $action; ?>" method="POST">
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Peserta Didik</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="id_psrt">Id Lengkap</label>
                <input type="text" disabled="disabled" id="id_psrt" name="id_psrt" class="form-control" value="<?php echo $id; ?>"> <?php echo $readonly; ?>
              </div>
              <div class="form-group">
                <label for="nama_peserta">Nama Lengkap</label>
                <input type="text" id="nama_peserta" name="nama_peserta" class="form-control" value="<?php echo $nama; ?>">
              </div>
              <div class="form-group">
                <label for="tmpt_lahir">Tempat Lahir</label>
                <input type="text" id="tmpt_lahir" name="tmpt_lahir" class="form-control" value="<?php echo $tmptLahir; ?>">
              </div>
              <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" value="<?php echo $tglLahir; ?>">
              </div>
              <div class="form-group">
                <label for="agama">Agama</label>
                <select class="form-control custom-select" id="agama" name="agama">
                  <option selected value=""><?php echo $agama; ?></option>
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Katholik</option>
                    <option>Hindu</option>
                    <option>Konghucu</option>
                </select>
              </div>
              <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select class="form-control custom-select" name="jk" id="jk">
                  <option selected value=""><?php echo $jk; ?></option>
                    <option>Laki - Laki</option>
                    <option>Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="kk">Nomor Kartu Keluarga</label>
                <input type="text" name="kk" id="kk" class="form-control" value="<?php echo $nokk; ?>">
              </div>
              <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" id="nik" name="nik" class="form-control" value="<?php echo $nik; ?>">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control" value="<?php echo $email; ?>">
              </div>
              <div class="form-group">
                <label for="nohp">Nomor Telepon</label>
                <input type="text" id="nohp" class="form-control" name="nohp" value="<?php echo $nohp; ?>">
              </div>
              <div class="form-group">
                <label for="tbadan">Tinggi Badan</label>
                <input type="text" id="tbadan" class="form-control" name="tbadan" value="<?php echo $tBadan; ?>">
              </div>
              <div class="form-group">
                <label for="bbadan">Berat Badan</label>
                <input type="text" id="bbadan" class="form-control" name="bbadan" value="<?php echo $bBadan; ?>">
              </div>
              <div class="form-group">
                <label for="bkbthnk">Berkebutuhan Khusus</label>
                <input type="text" id="bkbthnk" class="form-control" name="bkbthnk" value="<?php echo $bkbthnk; ?>">
              </div>
            </div>
            <!-- /.card-body -->

            <!-- Data Ayah -->
            <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Ayah</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="nm_ayah">Nama Ayah</label>
                <input type="text" id="nm_ayah" name="nm_ayah" class="form-control" value="<?php echo $nmAyah; ?>">
              </div>
              <div class="form-group">
                <label for="tmpt_lahir_ayah">Tempat Lahir</label>
                <input type="text" id="tmpt_lahir_ayah" name="tmpt_lahir_ayah" class="form-control" value="<?php echo $tmptLahirAyah; ?>">
              </div>
              <div class="form-group">
                <label for="tgl_lahir_ayah">Tanggal Lahir</label>
                <input type="date" id="tgl_lahir_ayah" name="tgl_lahir_ayah" class="form-control" value="<?php echo $tglLahirAyah; ?>">
              </div>
              <div class="form-group">
                <label for="pkrjn_ayah">Pilih Pekerjaan</label>
                <select name="pkrjn_ayah" id="pkrjn_ayah" class="form-control custom-select">
                  <option selected><?php echo $pkrjnAyah; ?></option>
                    <option>Wirausaha</option>
                    <option>Pegawai Negeri Sipil</option>
                    <option>Wiraswasta</option>
                    <option>dll</option>
                </select>
              </div>
              <div class="form-group">
                <label for="pnddkn_ayah">Pilih Pendidikan</label>
                <select name="pnddkn_ayah" id="pnddkn_ayah" class="form-control custom-select">
                  <option selected><?php echo $pnddknAyah; ?></option>
                    <option>Sekolah Dasar</option>
                    <option>Sekolah Menengah Pertama</option>
                     <option>Sekolah Menengah Atas</option>
                     <option>Diploma 2 -3 </option>
                     <option>Sarjana 1</option>
                     <option>Sarjana 2</option>
                     <option>Sarjana 3</option>
                </select>
              </div>
              <div class="form-group">
                <label for="gaji_ayah">Pilih Gaji</label>
                <select name="gaji_ayah" id="gaji_ayah" class="form-control custom-select">
                  <option selected><?php echo $gajiAyah; ?></option>
                  <option>1. Kurang dari Rp 1.000.000</option>
                  <option>2. Rp 1.000.000 - Rp 2.000.000</option>
                  <option>3. Lebih dari Rp 2.000.000</option>
                </select>
              </div>
            </div>
            <!-- End Data Ayah -->

            <!-- /.card-body -->
          </div>
          </div>
          <!-- /.card -->
        </div>

        <div class="col-md-6">
          
          <!-- /.card -->
          

          <!-- Data Ibu -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Ibu</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="nm_ibu">Nama Ibu</label>
                <input type="text" id="nm_ibu" name="nm_ibu" class="form-control" value="<?php echo $nmIbu; ?>">
              </div>
              <div class="form-group">
                <label for="tmpt_lahir_ibu">Tempat Lahir</label>
                <input type="text" id="tmpt_lahir_ibu" name="tmpt_lahir_ibu" class="form-control" value="<?php echo $tmptLahirIbu; ?>">
              </div>
              <div class="form-group">
                <label for="tgl_lahir_ibu">Tanggal Lahir</label>
                <input type="date" id="tgl_lahir_ibu" name="tgl_lahir_ibu" class="form-control" value="<?php echo $tglLahirIbu; ?>">
              </div>
              <div class="form-group">
                <label for="pkrjn_ibu">Pilih Pekerjaan</label>
                <select name="pkrjn_ibu" id="pkrjn_ibu" class="form-control custom-select">
                  <option selected><?php echo $pkrjnIbu; ?></option>
                    <option>Wirausaha</option>
                    <option>Pegawai Negeri Sipil</option>
                    <option>Wiraswasta</option>
                    <option>dll</option>
                </select>
              </div>
              <div class="form-group">
                <label for="pnddkn_ibu">Pilih Pendidikan</label>
                <select name="pnddkn_ibu" id="pnddkn_ibu" class="form-control custom-select">
                  <option selected><?php echo $pnddknIbu; ?></option>
                    <option>Sekolah Dasar</option>
                    <option>Sekolah Menengah Pertama</option>
                     <option>Sekolah Menengah Atas</option>
                     <option>Diploma 2 -3 </option>
                     <option>Sarjana 1</option>
                     <option>Sarjana 2</option>
                     <option>Sarjana 3</option>
                </select>
              </div>
              <div class="form-group">
                <label for="gaji_ibu">Pilih Gaji</label>
                <select name="gaji_ibu" id="gaji_ibu" class="form-control custom-select">
                  <option selected><?php echo $gajiIbu; ?></option>
                  <option>1. Kurang dari Rp 1.000.000</option>
                  <option>2. Rp 1.000.000 - Rp 2.000.000</option>
                  <option>3. Lebih dari Rp 2.000.000</option>
                </select>
              </div>
            </div>
          <!-- /.card -->
          <!-- End Data Ibu -->

          <!-- Data Wali -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Wali</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="nm_wali">Nama Wali</label>
                <input type="text" id="nm_wali" name="nm_wali" class="form-control" value="<?php echo $nmWali; ?>">
              </div>
              <div class="form-group">
                <label for="tmpt_lahir_wali">Tempat Lahir</label>
                <input type="text" id="tmpt_lahir_wali" name="tmpt_lahir_wali" class="form-control" value="<?php echo $tmptLahirWali; ?>">
              </div>
              <div class="form-group">
                <label for="tgl_lahir_wali">Tanggal Lahir</label>
                <input type="date" id="tgl_lahir_wali" name="tgl_lahir_wali" class="form-control" value="<?php echo $tglLahirWali; ?>">
              </div>
              <div class="form-group">
                <label for="pkrjn_wali">Pilih Pekerjaan</label>
                <select name="pkrjn_wali" id="pkrjn_wali" class="form-control custom-select">
                  <option selected><?php echo $pkrjnWali; ?></option>
                    <option>Wirausaha</option>
                    <option>Pegawai Negeri Sipil</option>
                    <option>Wiraswasta</option>
                    <option>dll</option>
                </select>
              </div>
              <div class="form-group">
                <label for="pnddkn_wali">Pilih Pendidikan</label>
                <select name="pnddkn_wali" id="pnddkn_wali" class="form-control custom-select">
                  <option selected><?php echo $pnddknWali; ?></option>
                    <option>Sekolah Dasar</option>
                    <option>Sekolah Menengah Pertama</option>
                     <option>Sekolah Menengah Atas</option>
                     <option>Diploma 2 -3 </option>
                     <option>Sarjana 1</option>
                     <option>Sarjana 2</option>
                     <option>Sarjana 3</option>
                </select>
              </div>
              <div class="form-group">
                <label for="gaji_wali">Pilih Gaji</label>
                <select name="gaji_wali" id="gaji_wali" class="form-control custom-select">
                  <option selected><?php echo $gajiWali; ?></option>
                  <option>1. Kurang dari Rp 1.000.000</option>
                  <option>2. Rp 1.000.000 - Rp 2.000.000</option>
                  <option>3. Lebih dari Rp 2.000.000</option>
                </select>
              </div>
            </div>
          <!-- /.card -->
          <!-- End Data Wali-->

          <!-- Alamat Peserta Didik -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Alamat Peserta Didik</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="alamat">Alamat Peserta</label>
                <input type="text" id="alamat" name="alamat" class="form-control" value="<?php echo $alamat; ?>">
              </div>
              <div class="form-group">
                <label for="rt">RT</label>
                <input type="text" id="rt" name="rt" class="form-control" value="<?php echo $rt; ?>">
              </div>
              <div class="form-group">
                <label for="rw">RW</label>
                <input type="text" id="rw" name="rw" class="form-control" value="<?php echo $rw; ?>">
              </div>
              <div class="form-group">
                <label for="kelurahan">Kelurahan</label>
                <input type="text" id="kelurahan" name="kelurahan" class="form-control" value="<?php echo $kelurahan; ?>">
              </div>
              <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
                <input type="text" id="kecamatan" name="kecamatan" class="form-control" value="<?php echo $kecamatan; ?>">
              </div>
              <div class="form-group">
                <label for="kota">Kota</label>
                <input type="text" id="kota" name="kota" class="form-control" value="<?php echo $kota; ?>">
              </div>
              <div class="form-group">
                <label for="propinsi">Propinsi</label>
                <input type="text" id="propinsi" name="propinsi" class="form-control" value="<?php echo $propinsi; ?>">
              </div>
            </div>
          <!-- End Alamat Peserta Didik -->

        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <!-- <a href="#" class="btn btn-secondary">Cancel</a> -->
          <!-- <input type="submit" value="Save Changes" name="simpan" class="btn btn-success float-right"> -->
          <button type="submit" name="simpan" class="btn btn-block btn-success">Save Changes</button>
        </div>
      </div>
    </section>
    </form>
    <!-- /.content -->
    <script type="text/javascript">
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultInfo').click(function() {
      toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultWarning').click(function() {
      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });

    $('.toastsDefaultDefault').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
  });
</script>
</div>    