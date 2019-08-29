<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Motor</title>

    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM motor ORDER BY id ASC");

session_start();
    if($_SESSION['status'] != "login"){
        header("location:login/index.php?pesan=belum_login");
    }

?>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="motor.php">Motor</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="mobil.php">Mobil</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="pesawat.php">Pesawat</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contoh.php"></a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
    
    <a href="logout.php"><button type="button" class="btn btn-primary">logout</button></a>

    </form>
  </div>
</nav>

<br/>
<br/>
<br/>
<br/>
<div class="container">
<form action="add_motor.php" method="post" name="form1">
        <div class="form-group">
            <label>Merk</label>
            <input type="text" name="merk" class="form-control">
        </div>

        <div class="form-group">
            <label>Type</label>
            <input type="text" name="type" class="form-control">
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control">
        </div>
        
        <button type="submit" name="Submit" class="btn btn-success">Submit</button>
    </form>

    <?php

        if(isset($_POST['Submit'])) {
            
            $merk = $_POST['merk'];
            $type = $_POST['type'];
            $harga = $_POST['harga'];
            
            include_once("config.php");

            $result = mysqli_query($mysqli, "INSERT INTO motor(merk,type,harga) VALUES('$merk','$type','$harga')");

            header('Location: http://localhost/crud-php/motor.php');

        }
    ?>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>\

</body>
</html>
