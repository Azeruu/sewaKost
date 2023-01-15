<?php
require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Login</title>
	<link href="css/styles.css" rel="stylesheet" />
	<link href="dashboard-template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="dashboard-template/css/sb-admin.css" rel="stylesheet">
	<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

	<style>
		body {
			position: absolute;
			width: 100%;
			height: 100%;
			background: #403c49 url(css/rukita_logo.png);
			background-size: 50%;
			background-repeat: no-repeat;
			background-position:  bottom 50px right 50px;;
		}

		.kanan {
			justify-content: center;
		}
	</style>
</head>

<body class="bg-primary">
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<div class="container-fluid">
					<div class="row gy-4">
						<div class="col-lg-8">
							<div class="card card-login mx-auto mt-5">
								<div class="card-header text-center">Register</div>
								<div class="card-body">

									<form action="proses_register.php" method="POST">
										<div class="form-group">
											Nama
											<input type="text" name="nama_lengkap" placeholder="Nama Lengkap" autocomplete="off" required="required" class="form-control">
										</div>
										<div class="form-group">
											Username
											<input type="text" name="username" placeholder="Username" autocomplete="off" required="required" class="form-control">
										</div>
										<div class="form-group">
											Password
											<input type="password" name="password" placeholder="Password" autocomplete="off" required="required" class="form-control">
										</div>
										<div class="form-group">
											Konfirmasi Password
											<input type="password" name="password2" placeholder="Konfirmasi Password" autocomplete="off" required="required" class="form-control">
										</div>
										<div class="form-group">
											<button type="submit" name="register" class="btn btn-sm btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> Register</button>
										</div>
									</form>
									<div class="text-center">
										<div class="small">
											Sudah Punya Akun? <a href="login.php">Login</a>!
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>

	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<script src="js/scripts.js"></script>
</body>

</div>

</html>