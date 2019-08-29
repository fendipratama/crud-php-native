<html>
<head>
    <title>Add</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
<a href="index.php"><button type="button" class="btn btn-primary">Go to Home</button></a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>

        <div class="form-group">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control">
        </div>

        <div class="form-group">
            <label>Npm</label>
            <input type="text" name="npm" class="form-control">
        </div>

        <div class="form-group">
            <label>Jurusan</label>
            <input type="text" name="jurusan" class="form-control">
        </div>
        
        <button type="submit" name="Submit" class="btn btn-success">Submit</button>
    </form>

    <?php

        if(isset($_POST['Submit'])) {
            
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $npm = $_POST['npm'];
            $jurusan = $_POST['jurusan'];

            include_once("config.php");

            $result = mysqli_query($mysqli, "INSERT INTO mahasiswa(nama,kelas,npm,jurusan) VALUES('$nama','$kelas','$npm','$jurusan')");

            header('Location: http://localhost/crud-php/index.php');

        }
    ?>

    </div>
    
</body>
</html>