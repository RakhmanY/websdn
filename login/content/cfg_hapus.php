<?php
	session_start();

	include 'koneksi.php';

	// print_r($_GET['no_pelanggan']);
	// die();
	$id = $_GET['id_peserta'];

	if (isset($id)) 
	{
		
		// echo "berhasi";

		// $no_plnggn = $_GET['no_plnggn'];
		$sql = "DELETE FROM tb_pendaftaran WHERE id_peserta = '$id'";

		$result = $conn->query($sql);

		if ($result) 
		{
			//echo "berhasi";
			$_SESSION['alert'] = "Data Berhasil Dihapus";
		header("location:index.php?page=view_data");
		} else {
			$_SESSION['alert'] = "Data Gagal Dihapus";
			header("location:index.php?page=view_data");
		}
	}
	
?>