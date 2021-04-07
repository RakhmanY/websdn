<?php
  include 'koneksi.php';

  $sql = "SELECT * FROM tb_pendaftaran";
  $results = $conn->query($sql);
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title ">Data Yang Telah Terdaftar</h3>
                <a class="btn btn-info btn-sm float-sm-right" href="pages/dashboard/export_excel.php">Export Excel</a>
                

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="text-center">Nama Peserta</th>
                    <th class="text-center">Tanggal Lahir</th>
                    <th class="text-center">Nomor Kartu Keluarga</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">Keterangan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
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
                    <td class="project-actions text-center">
                      <a class="btn btn-info btn-sm" href="?page=formadd&id_peserta=<?php echo $row['id_peserta'] ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm swalDefaultSuccess" href="cfg_hapus.php?id_peserta=<?php echo $row['id_peserta'] ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                    </td>
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
                    <th class="text-center">Keterangan</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <script type="text/javascript">
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        icon: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultError').click(function() {
      Toast.fire({
        icon: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultWarning').click(function() {
      Toast.fire({
        icon: 'warning',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultQuestion').click(function() {
      Toast.fire({
        icon: 'question',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
 </script>  
