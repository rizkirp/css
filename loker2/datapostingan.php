<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Postingan</title>
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
         <li><a href="utama.php"> Post</a></li>
       
    
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="datapostingan.php"> Data Lowongan</a></li>
         <li><a href="logout.php"> Logout</a></li>
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
  <h3>Pekerjaan Yang Dibutuhkan Perusahaan Anda</h3><br></div>
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
$username=$_SESSION['username'];
$sql = "SELECT * FROM kerja_tetap where id_perusahaan ='$username' order by int_tetap desc limit 20";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
?>
 <div class="col-sm-12" >
<?php
while($row = mysqli_fetch_assoc($result)) 
{
  ?>
    <div class="col-xs-6 col-md-3 kotak22" >
    <p style="font-weight: bold;">
      <div class="alert alert-success">
        <b><a href="view.php?id=<?php echo $row['int_tetap']; ?>">
          <?php
echo $row['nama_perusahaan'];
      ?></a>
    </b>
  </div>
      <div class="clear"></div>
 <p>

  <?php
echo $row['alamat_perusahaan'];
      ?></p>


    
      <p><b style="color: red;">Posisi : </b><br><b><?php
echo $row['posisi'];
      ?></b></p>

       <p><b style="color: red;"></b><br><?php
echo substr($row['deskripsi'],0,100);
      ?></p>
      
<a href="view.php?id=<?php echo $row['int_tetap']; ?>">
      <button type="button" class="btn btn-primary btn-sm">Lihat Detail</button></a>

</div>

<?php
}
}
?>

</div>






































 



</div>







































</div>











<br><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
