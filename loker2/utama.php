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
  <title>FORM PERUSAHAAN</title>
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
  <h3>Informasi Detail Pribadi</h3><br></div>
  <div class="container-fluid">

   
 <div class="col-sm-12" >

    <div class="col-xs-12 col-md-12 kotak3" >
    <p style="font-weight: bold;">
      <div class="alert alert-success"><b>
<?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; ?>
      </b></div>
      <div class="clear"></div>
<form method="post" action="simpanlowongan.php"> 
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Perusahaan</label>
  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Perusahaan" name="nama_perusahaan">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Posisi Lowongan</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Posisi Lowongan" name="posisi">
    <div style="margin-top: 10px;"></div>
    <select class="form-control" id="exampleFormControlSelect1" name="jenis">
      <option>Freshgraduate</option>
      <option>Berpengalaman</option>
    </select>
  </div>
    <label for="exampleInputPassword1">No Hp</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="No Hp" name="no_hp">
    <label for="exampleInputPassword1">Alamat Perusahaan</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Alamat" name="alamat_perusahaan">
    
    <label for="exampleInputPassword1">Deskripsi</label>
    <textarea class="form-control" id="form4Example3" rows="Deskripsi" name="deskripsi"></textarea>
    </label>
    <div style="margin-bottom: 10px;"></div>
     <button type="submit" class="btn btn-primary">Kirim</button>
  </div>
  
</form>
</p>



</div>
 

<div class="clear"></div>







































</div>











<br><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
