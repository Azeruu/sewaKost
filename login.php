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
            body{
            position: absolute;
            width: 100%;
            height: 100%;
            background: #403c49 url(css/rukita_logo.png);
            background-size: 50%;
            background-repeat: no-repeat;
            background-position: bottom 50px right 50px;
        }
        .kanan{
            justify-content : center;
        }
        </style> 
    </head>
    
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                <div class="container item-center">
					<div class="row gy-4">
						<div class="col-lg-4">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                        <div class="container">
                                        <form action="proses_login.php" method="post">
                                            <div class="form-group"><p>Username</p>
                                                <input type="text" name="username" placeholder="Masukan Username" autocomplete="off" required="required" class="form-control">
                                            </div>
                                            <div class="form-group"><p>Password</p>
                                                <input type="password" name="password" placeholder="Masukan Password" autocomplete="off" required="required" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="login" class="btn btn-sm btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> Login</button>
                                            </div>
                                        </form>
                                            <div class="text-center">
                                            <a class="d-block small mt-3" href="register.php">Belum Punya Akun? Daftar Disini</a>
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
