<?php
	session_start();

	include 'config/koneksi.php';

	if (isset($_POST['simpan'])) {
		$nama_peserta = $_POST['nama_peserta'];
		$tmpt_lahir = $_POST['tmpt_lahir'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$agama = $_POST['agama'];
		$jk = $_POST['jk'];
		$kk = $_POST['kk'];
		$nik = $_POST['nik'];
		$email = $_POST['email'];
		$nohp = $_POST['nohp'];
		
		$nm_ayah = $_POST['nm_ayah'];
		$tmpt_lahir_ayah = $_POST['tmpt_lahir_ayah'];
		$tgl_lahir_ayah = $_POST['tgl_lahir_ayah'];
		$pkrjn_ayah = $_POST['pkrjn_ayah'];
		$pnddkn_ayah = $_POST['pnddkn_ayah'];
		$gaji_ayah = $_POST['gaji_ayah'];

		$nm_ibu = $_POST['nm_ibu'];
		$tmpt_lahir_ibu = $_POST['tmpt_lahir_ibu'];
		$tgl_lahir_ibu = $_POST['tgl_lahir_ibu'];
		$pkrjn_ibu = $_POST['pkrjn_ibu'];
		$pnddkn_ibu = $_POST['pnddkn_ibu'];
		$gaji_ibu = $_POST['gaji_ibu'];

		$nm_wali = $_POST['nm_wali'];
		$tmpt_lahir_wali = $_POST['tmpt_lahir_wali'];
		$tgl_lahir_wali = $_POST['tgl_lahir_wali'];
		$pkrjn_wali = $_POST['pkrjn_wali'];
		$pnddkn_wali = $_POST['pnddkn_wali'];
		$gaji_wali = $_POST['gaji_wali'];

		$alamat = $_POST['alamat'];
		$rt = $_POST['rt'];
		$rw = $_POST['rw'];
		$kelurahan = $_POST['kelurahan'];
		$kecamatan = $_POST['kecamatan'];
		$kota = $_POST['kota'];
		$propinsi = $_POST['propinsi'];
		$tbadan = $_POST['tbadan'];
		$bbadan = $_POST['bbadan'];
		$bkbthnk = $_POST['bkbthnk'];


		$sql = "INSERT INTO tb_pendaftaran (nama_peserta, t_lahir, tl_lahir, agama, jk, no_kk, no_nik, email, no_telp, nm_ayah, t_ayah, tl_ayah, pk_ayah, pdk_ayah, gaji_ayah, nm_ibu, t_ibu, tl_ibu, pk_ibu, pdk_ibu, gaji_ibu, nm_wali, t_wali, tl_wali, pk_wali, pdk_wali, gaji_wali, alamat_peserta, rt, rw, kelurahan, kecamatan, kota, propinsi, t_badan, b_badan, bkbthnk) VALUES ('$nama_peserta', '$tmpt_lahir', '$tgl_lahir', '$agama', '$jk' , '$kk', '$nik', '$email', '$nohp', '$nm_ayah', '$tmpt_lahir_ayah', '$tgl_lahir_ayah', '$pkrjn_ayah', '$pnddkn_ayah', '$gaji_ayah', '$nm_ibu', '$tmpt_lahir_ibu', '$tgl_lahir_ibu', '$pkrjn_ibu', '$pnddkn_ibu', '$gaji_ibu', '$nm_wali', '$tmpt_lahir_wali', '$tgl_lahir_wali', '$pkrjn_wali', '$pnddkn_wali', '$gaji_wali', '$alamat', '$rt', '$rw', '$kelurahan', '$kecamatan', '$kota', '$propinsi', '$tbadan', '$bbadan', '$bkbthnk')";
		$result = $conn->query($sql);

		if ($result) 
		{
			$_SESSION['alert'] = "Data Pelanggan Telah Disimpan";
			header("location:form_ppdb.php");
		} else {
			echo "location:index.php";
		}
	}


?>