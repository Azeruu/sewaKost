<?php
require './koneksi.php';
if(isset($_POST['tambah'])){
    $id_kamar = $_POST['id_kamar'];
    $gambar = $_POST['gambar'];
    $nama_kamar = $_POST['nama_kamar'];
    $kategori = $_POST['kategori'];
    $tipe_kamar = $_POST['tipe_kamar'];
    $harga = $_POST['harga_kamar'];
    $fasilitas = $_POST['fasilitas'];
    $deskripsi = $_POST['deskripsi'];

    $addtotable = mysqli_query($conn,"INSERT INTO  tbl_kamar (null, gambar, nama_kamar, kategori, tipe_kamar, harga_kamar, fasilitas, deskripsi) 
    values ('$gambar', '$nama_kamar', '$kategori', '$tipe_kamar', '$harga', '$fasilitas', '$deskripsi')");
    if ($addtotable) {
        echo ("
        <script type='text/javascript'>
        alert('Data Berhasil Ditambah');
        window.location.href='kamar.php';
        </script>
        ");
        header('location:kamar.php');
    }else{
        echo ("
        <script type='text/javascript'>
        alert('Data Gagal Ditambah');
        window.location.href='halaman_admin.php';
        </script>
        ");
        header('location:halaman_admin.php');
    }
}
?>