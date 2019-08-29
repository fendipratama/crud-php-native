<?PHP

session_start();
include_once("config.php");

	$username = $_POST['username'];
    $password=$_POST['password'];

	if (!isset($username) || !isset($password)) {
	
		header("Location: http://localhost/crud-php/login.html");
	}

	elseif (empty($username) || empty($password)) {

		header("Location: http://localhost/crud-php/login.html");
	}

	else{

		$result=mysqli_query($mysqli, "select * from user where username='$username' AND password='$password'");

		//print_r($result);
		$rowCheck = mysqli_num_rows($result);

		if($rowCheck > 0){

			$_SESSION['username'] = $username;
			$_SESSION['status'] = "login";
			header( "Location: http://localhost/crud-php/index.php" );

		}else {

			header("location:login.php?pesan=gagal");
		}
	}
?>