<?php
session_start();
include '../koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($query);

if($cek > 0){
    $_SESSION['username'] = $username;
    header("Location: ../index.php");
} else {
    echo "Login gagal. <a href='login.php'>Coba lagi</a>";
}
?>
