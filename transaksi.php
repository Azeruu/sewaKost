<?php
session_start();
require './koneksi.php';
require './prosesHapus.php';
require './prosesEdit.php';
require './prosesTambah.php';

$user = mysqli_query($conn, "SELECT * FROM tbl_user");
$user = mysqli_num_rows($user);
$kamar = mysqli_query($conn, "SELECT*FROM tbl_kamar");
$kamar = mysqli_num_rows($kamar);
$transaksi = mysqli_query($conn, "SELECT*FROM tbl_transaksi");
$transaksi = mysqli_num_rows($transaksi);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Rukita</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="halaman_admin.php">Admin Kost</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                <div class="nav">
                        <a class="nav-link active" href="halaman_admin.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="./kamar.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-door-open"></i></div>
                            Kamar
                        </a>                        
                        <a class="nav-link" href="./user.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            User
                        </a>
                        <a class="nav-link" href="./transaksi.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-dollar-sign"></i></div>
                            Transaksi
                        </a>
                        <a class="nav-link" href="./saran.php">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-envelope-open-text"></i></div>
                            Saran Pengguna
                        </a>
                        <a class="nav-link" href="logout.php">
                            <div  class="sb-nav-link-icon"><i class="fa-solid fa-right-to-bracket"></i></div>
                            Logout
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as : <?php echo $_SESSION['username']; ?>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4 text-center">Data Transaksi</h1>

                    <div class="card mb-4">
                        <div class="card-body">
                            <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Transaksi</th>
                                        <th>ID User</th>
                                        <th>Nama Penyewa</th>
                                        <th>Alamat Penyewa</th>
                                        <th>No. Handphone</th>
                                        <th>Email</th>
                                        <th>Pembayaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $username = $_SESSION["username"];
                                    $ambilsemuadata = mysqli_query($conn, "SELECT*FROM tbl_transaksi;");
                                    $i = 1;
                                    while ($data = mysqli_fetch_array($ambilsemuadata)) {
                                        $id_transaksi = $data['id_transaksi'];
                                        $id_user = $data['id_user'];
                                        $nama_penyewa = $data['nama_penyewa'];
                                        $alamat_penyewa= $data['alamat_penyewa'];
                                        $no_hp= $data['no_hp'];
                                        $email = $data['email'];
                                        $pembayaran = $data['pembayaran'];
                                    ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?php echo $id_transaksi; ?></td>
                                            <td><?php echo $id_user; ?></td>
                                            <td><?php echo $nama_penyewa; ?></td>
                                            <td><?php echo $alamat_penyewa; ?></td>
                                            <td><?php echo $no_hp; ?></td>
                                            <td><?php echo $email; ?></td>
                                            <td><?php echo $pembayaran; ?></td>
                                            <td>
                                                <input type="hidden" name="id_user" value="<?= $id_transaksi; ?>">
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $id_transaksi; ?>">
                                                    Hapus
                                                </button>
                                            </td>

                                            <!-- MODAL Hapus -->
                                            <div class="modal fade" id="delete<?= $id_transaksi; ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Hapus Data Transaksi</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <form method="post" action="prosesHapus.php">
                                                            <div class="modal-body">
                                                                Apakah anda yakin ingin menghapus seluruh data Transaksi atas Nama "" <?= $nama_Penyewa; ?>?
                                                                <input type="hidden" name="id_transaksi" value="<?= $id_transaksi; ?>">
                                                                <br><br>
                                                                <button type="submit" name="hapusTransaksi" class="btn btn-danger">Hapus</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END MODAL Hapus -->
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Reza's Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>