<?php
	//mengaktifkan session php
	session_start();

	//menghubungkan dengan koneksi
	include 'koneksi.php';
	if (isset($_POST['submit'])) 
	{
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	//menyeleksi data admin dengan username dan password yang sesuai
	$sql = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		 	// Login berhasil
		 	$_SESSION['islogin'] = true;
		 	header("location:content/index.php");
		 } else {
		 	$_SESSION['alert'] = "Username atau password salah";
		 	header("location:index.php");
		 }
	
	}
	// $data = mysqli_query($conn,"SELECT * FROM tb_user where username='$username' and password='$password'");


	
	// $cek = mysqli_num_rows($data);

	// if ($cek>0) {
	// 	$_SESSION['username'] = $username;
	// 	$_SESSION['status'] = "login";
	// 	header("location:content/index.php");
	// } else{
	// 	header("location:index.php?pesan=gagal");
	// }

	//menghitung jumlah data yang ditemukan
	
	//menangkap data yang dikirim dari form
	
?>