<!DOCTYPE html>
<html>
<head>
  <img src="">
  <title>Export Data Siswa Baru SDN Jurang Mangu Timur 02 - www.sdnjurangmangutimur02.com</title>
</head>
<body>
  <style type="text/css">
  body{
    font-family: sans-serif;
  }
  table{
    margin: 20px auto;
    border-collapse: collapse;
  }
  table th,
  table td{
    border: 1px solid #3c3c3c;
    padding: 3px 8px;
 
  }
  a{
    background: blue;
    color: #fff;
    padding: 8px 10px;
    text-decoration: none;
    border-radius: 2px;
  }
  </style>
 
  <?php
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=Data Siswa Baru.xls");
  ?>
 
  <center>
    <h1>Export Data Siswa Baru SDN Jurang Mangu Timur 02 - 
    www.sdnjurangmangutimur02.com</h1>
  </center>
 
  <table border="1">
    <tr>
      <th>No</th>
      <th>Id Peserta</th>
      <th>Nama Peserta</th>
      <th>Tempat Lahir</th>
      <th>Tanggal Lahir</th>
      <th>Agama</th>
      <th>Jenis Kelamin</th>
      <th>Nomor KK</th>
      <th>Nomor NIK</th>
      <th>Email</th>
      <th>No Telpon</th>

      <th>Nama Ayah</th>
      <th>Tempat Lahir Ayah</th>
      <th>Tanggal Lahir Ayah</th>
      <th>Pekerjaan Ayah</th>
      <th>Pendidikan Ayah</th>
      <th>Gaji Ayah</th>

      <th>Nama Ibu</th>
      <th>Tempat Lahir Ibu</th>
      <th>Tanggal Lahir Ibu</th>
      <th>Pekerjaan Ibu</th>
      <th>Pendidikan Ibu</th>
      <th>Gaji Ibu</th>

      <th>Nama Wali</th>
      <th>Tempat Lahir Wali</th>
      <th>Tanggal Lahir Wali</th>
      <th>Pekerjaan Wali</th>
      <th>Pendidikan Wali</th>
      <th>Gaji Wali</th>

      <th>Alamat Peserta</th>
      <th>RT</th>
      <th>RW</th>
      <th>Kelurahan</th>
      <th>Kecamatan</th>
      <th>Kota</th>
      <th>Propinsi</th>
      <th>Tinggi Badan</th>
      <th>Berat Badan</th>
      <th>Berkebutuhan Khusus</th>


    </tr>
    <?php
      include 'koneksi.php';

      $sql = "SELECT * FROM tb_pendaftaran";
      $results = $conn->query($sql);

      $no = 1;
      if ($results->num_rows>0) 
      {
      while ($row = $results->fetch_assoc()) {
    ?>
    <table border="1">
    <tr>
      <!-- Data Peserta -->
      <td><?php echo $no++; ?></td>
      <td><?php echo $row['id_peserta']; ?></td>
      <td><?php echo $row['nama_peserta']; ?></td>
      <td><?php echo $row['t_lahir']; ?></td>
      <td><?php echo $row['tl_lahir']; ?></td>
      <td><?php echo $row['agama']; ?></td>
      <td><?php echo $row['jk']; ?></td>
      <td><?php echo $row['no_kk']; ?></td>
      <td><?php echo $row['no_nik']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['no_telp']; ?></td>

      <!-- Data Ayah -->
      <td><?php echo $row['nm_ayah']; ?></td>
      <td><?php echo $row['t_ayah']; ?></td>
      <td><?php echo $row['tl_ayah']; ?></td>
      <td><?php echo $row['pk_ayah']; ?></td>
      <td><?php echo $row['pdk_ayah']; ?></td>
      <td><?php echo $row['gaji_ayah']; ?></td>

      <!-- Data Ibu -->
      <td><?php echo $row['nm_ibu']; ?></td>
      <td><?php echo $row['t_ibu']; ?></td>
      <td><?php echo $row['tl_ibu']; ?></td>
      <td><?php echo $row['pk_ibu']; ?></td>
      <td><?php echo $row['pdk_ibu']; ?></td>
      <td><?php echo $row['gaji_ibu']; ?></td>

      <!-- Data Wali -->
      <td><?php echo $row['nm_wali']; ?></td>
      <td><?php echo $row['t_wali']; ?></td>
      <td><?php echo $row['tl_wali']; ?></td>
      <td><?php echo $row['pk_wali']; ?></td>
      <td><?php echo $row['pdk_wali']; ?></td>
      <td><?php echo $row['gaji_wali']; ?></td>

      <!-- Alamat Peserta -->
      <td><?php echo $row['alamat_peserta']; ?></td>
      <td><?php echo $row['rt']; ?></td>
      <td><?php echo $row['rw']; ?></td>
      <td><?php echo $row['kelurahan']; ?></td>
      <td><?php echo $row['kecamatan']; ?></td>
      <td><?php echo $row['kota']; ?></td>  
      <td><?php echo $row['propinsi']; ?></td>  
      <td><?php echo $row['t_badan']; ?></td>  
      <td><?php echo $row['b_badan']; ?></td>  
      <td><?php echo $row['bkbthnk']; ?></td>  
    </tr>
    <?php 
      }
    }
    ?>
  </table>
</body>
</html>