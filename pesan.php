<?php
require_once "koneksi.php";

if(isset($_POST['kirim'])){
    $nama=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $pesan=$_POST['pesan'];

    $username = $_SESSION['username'];

    $query = "INSERT INTO pesan VALUES( NULL, '$nama', '$email', '$subject', '$pesan');";
    $result = mysqli_query($conn, $query);
    // echo(mysqli_error($conn));

    if(mysqli_affected_rows($conn) == 1){
        echo("
        <script>
            alert('Pesan Berhasil Dikirim ');
            window.location.href='halaman_user.php#contact';
        </script>
        ");
    }else{
        echo("
        <script>
            alert('Pesan Gagal dikirim');
            window.location.href='halaman_user.php#contact';
        </script>
        ");
    }
}