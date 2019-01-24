<?php
	session_start();
	require_once 'koneksi.php';

	$username = mysqli_real_escape_string($connect,$_POST['username']);
	$password = mysqli_real_escape_string($connect,md5($_POST['password']));

	$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$result = mysqli_query($connect,$query);
	$data = mysqli_num_rows($result);

	if ($data > 0) {
		$_SESSION['username'] = $username;
		header('location: ../index.php?p=dashboard');
	} else {
		header('location: ../login.php?p&error=data_login_salah');
	}

 ?>
