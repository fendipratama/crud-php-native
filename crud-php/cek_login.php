<?PHP

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

		print_r($result);
		// $rowCheck = mysqli_num_rows($result);

		// if($rowCheck > 0){
		
		// 	while($row = mysqli_fetch_array($result)){

		// 		session_start();
		// 		$_SESSION['username'];

		// 		header( "Location: http://localhost/crud-php/index.php" );
		// 	}

		// }
		// else {

		// 	echo 'Invalid username or password';

		// 	echo "<a href='login.html'><button type='button'>Go to Home</button></a>";
		// }
	}
?>