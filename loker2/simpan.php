<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nama            = $_POST['nama'];
$email           = $_POST['email'];
$password        = $_POST['password'];

// query SQL untuk insert data
$query="INSERT INTO users SET username='$nama',email='$email',password='$password'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:sukses.php");
?>