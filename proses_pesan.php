<?php
session_start();
require_once "koneksi.php";

if(isset($_POST['bayar'])){
    $userid=$_POST['id_user'];
    $username=$_POST['nama_user'];
    $email=$_POST['email'];
    $hp=$_POST['nohp'];
    $alamat=$_POST['alamat'];
    $pembayaran=$_POST['pembayaran'];

    $username = $_SESSION['username'];

    $query = "INSERT INTO tbl_transaksi VALUES( NULL, '$userid', '$username', '$alamat', '$hp', '$email', '$pembayaran');";
    $result = mysqli_query($conn, $query);
    // echo(mysqli_error($conn));

    if(mysqli_affected_rows($conn) == 1){
        echo("
        <script>
            alert('Pembelian Berhasil');
            window.location.href='halaman_user.php';
        </script>
        ");
    }else{
        echo("
        <script>
            alert('Pembelian Gagal');
            window.location.href='halaman_pesan.php';
        </script>
        ");
    }
}