<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nama_perusahaan          = $_POST['nama_perusahaan'];
$posisi      			 = $_POST['posisi'];
$no_hp       			= $_POST['no_hp'];
$alamat_perusahaan      = $_POST['alamat_perusahaan'];
$deskripsi      = $_POST['deskripsi'];
$jenis =$_POST['jenis'];
$username=$_SESSION['username'];


// query SQL untuk insert data
$query="INSERT INTO kerja_tetap SET nama_perusahaan='$nama_perusahaan',alamat_perusahaan='$alamat_perusahaan',posisi='$posisi',no_hp='$no_hp',deskripsi='$deskripsi',jenis='$jenis',id_perusahaan='$username'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:tersimpan.php");
?>