<?php

include_once("config.php");
//session_start();

// if($_SESSION['username']){
    
//     //$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa ORDER BY id ASC");

// }else{
// header("Location: http://localhost/crud-php/login.html");
// }
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa ORDER BY id ASC");

?>

<html>
<head>    
    <title>CRUD - PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>

<div class="container">
<a href="add.php"><button type="button" class="btn btn-primary">add</button></a>
<br/>
<br/>

    <table class="table table-bordered">

    <tr>
        <th>Nama</th> 
        <th>Kelas</th> 
        <th>Npm</th> 
        <th>Jurusan</th>
        <th>Action</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['kelas']."</td>";
        echo "<td>".$user_data['npm']."</td>";    
        echo "<td>".$user_data['jurusan']."</td>";    

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

</html>

