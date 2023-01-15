<?php
require './koneksi.php';

// Hapus Data Kamar
if(isset($_POST['hapuskamar'])){
    $id_kamar = $_POST['id_kamar'];

    $hapus = mysqli_query($conn,"DELETE FROM tbl_kamar WHERE id_kamar='$id_kamar'");

    if ($hapus) {
        header('location:kamar.php');
    }else{
        echo "Data gagal dihapus";
        header('location:kamar.php');
    }
}

// Hapus User
if(isset($_POST['hapususer'])){
    $id_user = $_POST['id_user'];

    $hapus1 = mysqli_query($conn,"DELETE FROM tbl_user WHERE id_user='$id_user'");

    if ($hapus1) { 
        header('location:user.php');
    }else{
        echo 'Data Gagal Dihapus';
        header('location:user.php');
    }
}
// Hapus Data Transaksi
if(isset($_POST['hapustransaksi'])){
    $id_user = $_POST['id_user'];

    $hapus2 = mysqli_query($conn,"DELETE FROM tbl_user WHERE id_user='$id_user'");

    if ($hapus2) { 
        header('location:transaksi.php');
    }else{
        echo 'Data Gagal Dihapus';
        header('location:transaksi.php');
    }
}

// Hapus Pesan
if(isset($_POST['hapuspesan'])){
    $id_pesan = $_POST['id_pesan'];
    
    $hapus3 = mysqli_query($conn,"DELETE FROM pesan WHERE id_pesan='$id_pesan'");
    if ($hapus3) { 
        header('location:saran.php');
    }else{
        echo 'Data Gagal Dihapus';
        header('location:saran.php');
    }
}

?>