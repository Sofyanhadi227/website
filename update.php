<?php
include 'koneksi.php';

$id             = $_POST['id'];
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$tempat_lahir   = $_POST['tempat_lahir'];
$tanggal_lahir  = $_POST['tanggal_lahir'];
$alamat         = $_POST['alamat'];
$jenis_kelamin  = $_POST['jenis_kelamin'];

$query = "UPDATE mahasiswa SET 
            nim='$nim',
            nama='$nama',
            tempat_lahir='$tempat_lahir',
            tanggal_lahir='$tanggal_lahir',
            alamat='$alamat',
            jenis_kelamin='$jenis_kelamin'
          WHERE id='$id'";

mysqli_query($koneksi, $query);

header("Location: index.php");
exit;
?>
