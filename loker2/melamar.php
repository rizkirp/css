<!DOCTYPE html>
<html lang="en">
<head>
  <title>Melamar Kerja</title>
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

<div class="jumbotron bgdepan1">s
 <div class="container text-center">
  <h1>LOKER</h1>      
    <p>WUJUDKAN IMPIAN DAN CITA-CITAMU</p>
     Bersama Loker mari membangun Negeri
 </div>
</div>


<div class="container">

  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loker";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$id=$_GET['id'];
$sql = "SELECT * FROM kerja_tetap where int_tetap='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
?>
<?php
while($row = mysqli_fetch_assoc($result)) 
{
  ?>
  
  <div class="col-xs-12 col-md-3 kotak12" >
     <div class="alert alert-info" role="alert">
     <b>
      <?php
echo $row['nama_perusahaan'];

    ?>
  </b>
    <P></P>
    posisi : <?php
echo $row['posisi'];

    ?>
    <br>
    <?php
echo $row['deskripsi'];

    ?>

      

    </div>
   <b>
   </b><p>

   


  </div>

<?php }} ?>
<div class="row col-xs-3 col-md-4"></div>
<div class="col-xs-8 col-md-4 kotak2">
<form action="kirim.php">
        <h1 class="h3 mb-3 font-weight-normal">Input Data Lamaran</h1>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
        <label for="inputEmail" class="sr-only">Nama</label>
        <div class="clear" style="margin-bottom: 5px;"></div>
        <input type="text" id="inputEmail" class="form-control" placeholder="Nama" required autofocus>
        <div class="clear" style="margin-bottom: 5px;"></div>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="text" id="inputPassword" class="form-control" placeholder="No.Telp" required>
        <div class="checkbox mb-2">
         
          <div class="alert alert-info"> Upload surat lamaran file doc</div>

    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
   <div class="clear" style="margin-bottom: 15px;"></div>
   <div class="alert alert-info"> Upload CV file doc</div>
    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
    
  </div>
       
      
        <button class="btn btn-lg btn-primary btn-block" type="submit">Kirim Data Lamaran</button>
        <p class="mt-5 mb-3 text-muted">© 2017-2020</p>
    </form>
</div>




 
 
  
















</body>
</html>
