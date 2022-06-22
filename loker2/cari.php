<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cari lowongan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/loker.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">LOKER</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"> Login</a></li>
            <li><a href="daftar.php"> daftar</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="jumbotron bgdepan1">

  <div class="container text-center">

    <h1>LOKER</h1>      
    <p>WUJUDKAN IMPIAN DAN CITA-CITAMU</p>
     Bersama Loker mari membangun Negeri
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <form action="cari.php" method="get">
  <label> </label>
  <input type="text" name="cari">
  <input type="submit" value="Cari">
</form>  
  <h3>Informasi Detail Perusahaan</h3><br></div>

  <div class="container-fluid">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loker";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$cari = $_GET['cari'];
$sql = "SELECT * FROM kerja_tetap where posisi like '%".$cari."%' order by int_tetap desc limit 20";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
?>
   
 <div class="col-sm-12" >
<?php
while($row = mysqli_fetch_assoc($result)) 
{
  ?>
    <div class="col-xs-12 col-md-12 kotak3" >
    <p style="font-weight: bold;">
      <div class="alert alert-success"><b>
<?php
echo $row['nama_perusahaan'];
      ?>
      </b></div>
      <div class="clear"></div>
<div class="clear"></div>
<b>Alamat</b>
 <p>
<?php 
echo $row['alamat_perusahaan'];   
 ?>
</p>
<b>Informasi Lowongan</b>

 <p>
<?php 
echo $row['deskripsi'];   
 ?>
</p>

      <p><b style="color: red;">Posisi : </b><br></p><div class="clear"></div>

     <p>
<?php 
echo $row['posisi'];   
 ?>
</p>
      <a href="melamar.php?id=<?php echo $row['int_tetap'];   ?>" class="btn btn-primary">Melamar</a>
    
      <div style="margin-bottom: 20px;">


</div>



</div>
<?php }} ?>

<div class="clear"></div>
 







































</div>











<br><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
