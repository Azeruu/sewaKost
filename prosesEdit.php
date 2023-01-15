<?php
require './koneksi.php';
if(isset($_POST['updatekamar'])){
    $id_kamar = $_POST['id_kamar'];
    $gambar = $_POST['gambar'];
    $nama_kamar = $_POST['nama_kamar'];
    $kategori = $_POST['kategori'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $harga = $_POST['harga_kamar'];
    $fasilitas = $_POST['fasilitas'];
    $deskripsi = $_POST['deskripsi'];

    //ambil data dari tabael kamar
    $kamar = mysqli_query($conn, "SELECT FROM tbl_kamar WHERE id_kamar='$id_kamar'");
    $kamarnya=mysqli_fetch_array($kamar);

        $update = mysqli_query($conn, "UPDATE tbl_kamar WHERE id_kamar='$id_kamar'");
            if ($update) {
                header('location:kamar.php');
            }else{
                echo "Data gagal Ditambah";
                header('location:halaman_admin.php');
            }
    
}
?>