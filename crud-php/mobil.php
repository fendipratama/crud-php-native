<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Starter Template · Bootstrap</title>

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

$result = mysqli_query($mysqli, "SELECT * FROM mobil ORDER BY id ASC");

session_start();
    if($_SESSION['status']!="login"){
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

<div class="container">
  <br/>
<br/>
<br/>
<br/>
<a href="add.php"><button type="button" class="btn btn-primary">add</button></a>
<br/>
<br/>

    <table class="table table-bordered">

    <tr>
        <th>Merk</th> 
        <th>Type</th> 
        <th>harga</th>
        <th>Action</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['merk']."</td>";
        echo "<td>".$user_data['type']."</td>";    
        echo "<td>".$user_data['harga']."</td>";    

        echo "
            <td>
                <a href='edit.php?id=$user_data[id]'><button type='button' class='btn btn-success'>edit</button></a>
                <a href='delete.php?id=$user_data[id]'><button type='button' class='btn btn-danger'>delete</button></a>
            </td>
            </tr>";        
    }
    ?>
    </table>
</body>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>\

</body>
</html>
