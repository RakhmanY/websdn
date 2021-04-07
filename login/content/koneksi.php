<?php  
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "ppdb";

	//Membuat Koneksi
	$conn = mysqli_connect($host, $user, $pass, $dbname);

	//Cek Koneksi
	if ($conn->connect_error) {
		die("Koneksi Gagal: " . $conn->connect_error);
	}

?>