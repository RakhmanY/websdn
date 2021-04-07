<?php

	session_start();

	include 'koneksi.php';

	if (isset($_POST['simpan'])) 
	{
		$id         = $_POST['id_psrt'];
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
           
           $sql = "INSERT INTO tb_pendaftaran (id_peserta, nama_peserta, t_lahir, tl_lahir, agama, jk, no_kk, no_nik, email, no_telp, nm_ayah, t_ayah, tl_ayah, pk_ayah, pdk_ayah, gaji_ayah, nm_ibu, t_ibu, tl_ibu, pk_ibu, pdk_ibu, gaji_ibu, nm_wali, t_wali, tl_wali, pk_wali, pdk_wali, gaji_wali, alamat_peserta, rt, rw, kelurahan, kecamatan, kota, propinsi, t_badan, b_badan, bkbthnk) VALUES ('$id','$nama', '$tmptLahir', '$tglLahir', '$agama', '$jk' , '$nokk', '$nik', '$email', '$nohp', '$nmAyah', '$tmptLahirAyah', '$tglLahirAyah', '$pkrjnAyah', '$pnddknAyah', '$gajiAyah', '$nmIbu', '$tmptLahirIbu', '$tglLahirIbu', '$pkrjnIbu', '$pnddknIbu', '$gajiIbu', '$nmWali', '$tmptLahirWali', '$tmptLahirWali', '$pkrjnWali', '$pnddknWali', '$gajiWali', '$alamat', '$rt', '$rw', '$kelurahan', '$kecamatan', '$kota', '$propinsi', '$tBadan', '$bBadan', '$bkbthnk')";
		$results = $conn->query($sql);

		if ($results) 
		{
			$_SESSION[''] = "Data Berhasil Disimpan";
			header("location:index.php?page=form");
			//echo "Berhasil";
		} else {
			$_SESSION[''] = "Data Gagal Disimpan";
			header("location:index.php?page=formadd");
			//echo "Gagal";
		}

	}
	
?>