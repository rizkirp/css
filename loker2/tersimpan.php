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
  <title>Terima Lamaran</title>
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
        <li><a href="datapostingan.php"> Data Lowongan</a></li>
         <li><a href="logout.php"> Logout</a></li>
            
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron bgdepan1">s
 <div class="container text-center">
  <h1>LOKER</h1>      
    <p>WUJUDKAN IMPIAN DAN CITA-CITAMU</p>
     Bersama Loker mari membangun Negeri
 </div>
</div>


<div class="container">




<div class="row col-xs-3 col-md-2"></div>
<div class="col-xs-8 col-md-8" >

        
        <div class="alert alert-info"><h3 style="color: red"><center>Selamat Lowongan Anda Sudah Tersimpan</center></h3>

          <a href="datapostingan.php" class="btn btn-primary">  Lihat Detail</a>

        </div>

  
</div>




 
 
  
















</body>
</html>
