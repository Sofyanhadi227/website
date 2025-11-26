<?php
include 'koneksi.php';

$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$tempat_lahir   = $_POST['tempat_lahir'];
$tanggal_lahir  = $_POST['tanggal_lahir'];
$alamat         = $_POST['alamat'];
$jenis_kelamin  = $_POST['jenis_kelamin'];

$query = "INSERT INTO mahasiswa (nim, nama, tempat_lahir, tanggal_lahir, alamat, jenis_kelamin)
          VALUES ('$nim', '$nama', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$jenis_kelamin')";

mysqli_query($koneksi, $query);

header("Location: index.php");
exit;
?>
