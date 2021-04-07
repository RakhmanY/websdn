<?php
	session_start();

	include 'koneksi.php';

	if (isset($_POST['simpan'])) 
	{
		$id_psrt    = $_POST['id_psrt'];
		$nama       = $_POST['nama_peserta'];
            $tmptLahir  = $_POST['tmpt_lahir'];
            $tglLahir   = $_POST['tgl_lahir'];
            $agama      = $_POST['agama'];
            $jk         = $_POST['jk'];
            $nokk       = $_POST['kk'];
            $nik        = $_POST['nik'];
            $email      = $_POST['email'];
            $nohp       = $_POST['nohp'];
            
            $nmAyah     	= $_POST['nm_ayah'];
            $tmptLahirAyah 	= $_POST['tmpt_lahir_ayah'];
            $tglLahirAyah 	= $_POST['tgl_lahir_ayah'];
            $pkrjnAyah  	= $_POST['pkrjn_ayah'];
            $pnddknAyah 	= $_POST['pnddkn_ayah'];
            $gajiAyah   	= $_POST['gaji_ayah'];
            
            $nmIbu     		= $_POST['nm_ibu'];
            $tmptLahirIbu 	= $_POST['tmpt_lahir_ibu'];
            $tglLahirIbu 	= $_POST['tgl_lahir_ibu'];
            $pkrjnIbu  		= $_POST['pkrjn_ibu'];
            $pnddknIbu 		= $_POST['pnddkn_ibu'];
            $gajiIbu   		= $_POST['gaji_ibu'];
            
            $nmWali     	= $_POST['nm_wali'];
            $tmptLahirWali 	= $_POST['tmpt_lahir_wali'];
            $tglLahirWali 	= $_POST['tgl_lahir_wali'];
            $pkrjnWali  	= $_POST['pkrjn_wali'];
            $pnddknWali 	= $_POST['pnddkn_wali'];
            $gajiWali   	= $_POST['gaji_wali'];
            
            $alamat     = $_POST['alamat'];
            $rt         = $_POST['rt'];
            $rw         = $_POST['rw'];
            $kelurahan  = $_POST['kelurahan'];
            $kecamatan  = $_POST['kecamatan'];
            $kota       = $_POST['kota'];;
            $propinsi   = $_POST['propinsi'];
            
            $tBadan     = $_POST['tbadan'];
            $bBadan     = $_POST['bbadan'];
            $bkbthnk    = $_POST['bkbthnk'];

            $sql = "UPDATE tb_pendaftaran SET nama_peserta = '$nama', t_lahir = '$tmptLahir', tl_lahir = '$tglLahir', agama = '$agama', jk = '$jk', no_kk = '$nokk', no_nik = '$nik', email = '$email', no_telp = '$nohp', nm_ayah = '$nmAyah', t_ayah = '$tmptLahirAyah', tl_ayah = 'tglLahirAyah$', pk_ayah = '$pkrjnAyah', pdk_ayah = '$pnddknAyah', gaji_ayah = '$gajiAyah', nm_ibu = '$nmIbu', t_ibu = '$tmptLahirIbu', tl_ibu = '$tglLahirIbu', pk_ibu = '$pkrjnIbu', pdk_ibu = '$pnddknIbu', gaji_ibu = '$gajiIbu', nm_wali = '$nmWali', t_wali = '$tmptLahirWali', tl_wali = '$tglLahirWali', pk_wali = '$pkrjnWali', pdk_wali = '$pnddknWali', gaji_wali = '$gajiWali', alamat_peserta = '$alamat', rt = '$rt', rw = '$rw', kelurahan = '$kelurahan', kecamatan = '$kecamatan', kota = '$kota', propinsi = '$propinsi', t_badan = '$tBadan', b_badan = '$bBadan', bkbthnk = '$bkbthnk' WHERE id_peserta = '$id_psrt'";

		$results = $conn->query($sql);
		if ($results) 
		{
			echo "Berhasil";
			// $_SESSION[''] = "Data Berhasil Disimpan";
			// header("location:index.php?page=form");
		} else {
			echo "gagal";
			// $_SESSION[''] = "Data Gagal Disimpan";
			// header("location:index.php?page=formadd");
		}
	}
?>