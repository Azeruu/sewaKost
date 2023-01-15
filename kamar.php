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

function rupiah($harga)
{
    $hasil = "Rp" . number_format($harga, 2, ',', '.');
    return $hasil;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Reza's Store</title>
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
                    <h1 class="mt-4 text-center">Data Kamar</h1>

                    <div class="card mb-4">
                        <div class="card-header">
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                Tambah Kamar
                            </button>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-responsive" id="datatablesSimple" width="100%" cellspacing="0">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID Kamar</th>
                                        <th>Gambar</th>
                                        <th>Nama Kamar</th>
                                        <th>Kategori</th>
                                        <th>Tipe Kamar</th>
                                        <th>Harga Kamar</th>
                                        <th>Fasilitas Kamar</th>
                                        <th>Deskripsi Kamar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $username = $_SESSION["username"];
                                    $ambilsemuadata = mysqli_query($conn, "SELECT*FROM tbl_kamar;");
                                    $i = 1;
                                    while ($data = mysqli_fetch_array($ambilsemuadata)) {
                                        $id_kamar = $data['id_kamar'];
                                        $gambar = $data['gambar'];
                                        $nama_kamar = $data['nama_kamar'];
                                        $kategori = $data['kategori'];
                                        $tipe_kamar = $data['tipe_kamar'];
                                        $harga = $data['harga_kamar'];
                                        $fasilitas = $data['fasilitas'];
                                        $deskripsi = $data['deskripsi'];
                                    ?>
                                        <tr>
                                            <td><?php echo $id_kamar; ?></td>
                                            <td><?php echo $gambar; ?></td>
                                            <td><?php echo $nama_kamar; ?></td>
                                            <td><?php echo $kategori; ?></td>
                                            <td><?php echo $tipe_kamar; ?></td>
                                            <td><?php echo $harga; ?></td>
                                            <td><?php echo $fasilitas; ?></td>
                                            <td><?php echo $deskripsi; ?></td>
                                            <td>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $id_kamar; ?>">
                                                    Edit
                                                </button>
                                                <input type="hidden" name="id_kamar" value="<?= $id_kamar; ?>">
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $id_kamar; ?>">
                                                    Delete
                                                </button>
                                            </td>
                                            <!-- MODAL Edit -->
                                            <div class="modal fade" id="edit<?= $id_kamar; ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Data Kamar</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <form method="post">
                                                            <div class="modal-body">
                                                                Kode Kamar
                                                                <input type="number" name="id_kamar" value="<?= $id_kamar; ?>" class="form-control"><br>Gambar :
                                                                <input type="file" name="gambar" value="<?= $gambar; ?>" class="form-control"><br>Nama Kamar :
                                                                <input type="text" name="nama_kamar" value="<?= $nama_kamar; ?>" class="form-control" required><br>Kategori :
                                                                <input type="text" name="kategori" value="<?= $kategori; ?>" class="form-control" required><br>Tipe Kamar :
                                                                <input type="text" name="tipe_kamar" value="<?= $tipe_kamar; ?>" class="form-control" required><br>Harga Kamar:
                                                                <input type="number" name="harga_kamar" value="<?= $harga; ?>" class="form-control" required><br>Fasilitas :
                                                                <input type="text" name="fasilitas" value="<?= $fasilitas; ?>" class="form-control" required><br>Deskripsi :
                                                                <input type="text" name="deskripsi" value="<?= $deskripsi; ?>" class="form-control" required><br>
                                                                <button type="submit" name="updatekamar" class="btn btn-warning">Edit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END Edit MODAL -->

                                            <!-- MODAL Hapus -->
                                            <div class="modal fade" id="delete<?= $id_kamar; ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Hapus Barang</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <form method="post">
                                                            <div class="modal-body">
                                                                Apakah anda yakin ingin menghapus seluruh data <?= $nama_kamar; ?> ?
                                                                <input type="hidden" name="id_kamar" value="<?= $id_kamar; ?>">
                                                                <br><br>
                                                                <button type="submit" name="hapusKamar" class="btn btn-danger">Hapus</button>
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

<!-- Modal Tambah -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Barang</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <form method="post">
                <div class="modal-body">
                    Kode Kamar
                    <input type="number" name="id_kamar" placeholder="Masukan ID Kamar" class="form-control" required><br>Gambar :
                    <input type="file" name="gambar" class="form-control"><br>Nama Kamar :
                    <input type="text" name="nama_kamar" placeholder="Masukan Nama Kamar" class="form-control" required><br>Kategori :
                    <input type="text" name="kategori" placeholder="Masukan Kategori Kamar" class="form-control" required><br>Tipe Kamar :
                    <input type="text" name="tipe_kamar" placeholder="Masukan Tipe Kamar" class="form-control" required><br>Harga Kamar:
                    <input type="number" name="harga_kamar" placeholder="Masukan Harga Kamar (Rp)" class="form-control" required><br>Fasilitas :
                    <input type="text" name="fasilitas" placeholder="Masukan Faislitas Kamar" class="form-control" required><br>Deskripsi :
                    <input type="text" name="deskripsi" placeholder="Masukan Deskripsi Kamar" class="form-control" required><br>
                    <button type="submit" id="tambah" name="tambah" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END MODAL Tambah-->



</html>