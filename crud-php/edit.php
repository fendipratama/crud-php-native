<?php

include_once("config.php");

if(isset($_POST['update'])){

    $id = $_POST['id'];
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $npm=$_POST['npm'];
    $jurusan=$_POST['jurusan'];

    $result = mysqli_query($mysqli, "UPDATE mahasiswa SET nama='$nama', kelas='$kelas', npm='$npm', jurusan='$jurusan' where id='$id' ");

    header("Location: index.php");
}
?>

<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE id = $id");

while($user_data = mysqli_fetch_array($result)){

    $nama = $user_data['nama'];
    $kelas = $user_data['kelas'];
    $npm = $user_data['npm'];
    $jurusan = $user_data['jurusan'];
}
?>
<html>
<head>  
    <title>Edit</title>
</head>

<body>
    <a href="index.php"><button type="button">home</button></a>
    <br/><br/>

    <form name="update" method="post" action="edit.php">
        <table border="0" width="25%">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>
            <tr> 
                <td>Kelas</td>
                <td><input type="text" name="kelas" value="<?php echo $kelas; ?>"></td>
            </tr>
            <tr> 
                <td>Npm</td>
                <td><input type="text" name="npm" value="<?php echo $npm; ?>"></td>
            </tr>
            <tr> 
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" value="<?php echo $jurusan; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>