<?php
require 'koneksi.php';

if (isset($_POST['register'])) {
	$nama_lengkap = $_POST['nama_lengkap'];
	$username     = $_POST['username'];
	$password     = $_POST['password'];
	$password2    = $_POST['password2'];

	$cek_username = mysqli_query($conn, "SELECT username FROM tbl_user WHERE username = '$username'");
	if ($cek_username->num_rows > 0) {
		echo ("
		<script>
		alert('gagal, Username sudah tersedia!');
		</script>
		");
		header('Location: register.php');
	} else {
		if ($password == $password2) {
			$query = mysqli_query($conn, "INSERT INTO tbl_user (nama_lengkap, username, password) VALUES ('$nama_lengkap', '$username', '$password')");
			if ($query == TRUE) {
				echo ("
				<script>
				alert('Selamat, akun anda berhasil terdaftar');
				</script>
				");
				header('Location: login.php');
			} else {
				echo ("
				<script>
				alert('Daftar Gagal, Coba Lagi');
				</script>
				");
				header('Location: register.php');
			}
		} else {
			echo ("
				<script>
				alert('Username sudah ada, silahkan coba yang lain!!');
				</script>
				");
			header('Location: register.php');
		}
	}
} else header('Location: register.php');
