
<?php
if(!isset($_SESSION)){
    session_start();
}

// variable declaration

$password = "";
$email = "";

$errors = array(); 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'amidstus');


// LOGIN USER
if (isset($_POST['login_user'])) {
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors) == 0) { 
	
		$password = md5($password);
		$query = "SELECT * FROM sign_up WHERE email='$email' AND password='$password'";
		$results = mysqli_query($db, $query);
		

		if (mysqli_num_rows($results) == 1) { 
         $_SESSION['email'] = $email;
			$_SESSION['success'] = "Welcome to amidstus";
	
		header('location: amidstus.php');
			
		}else {     
		
			header('location: register.php');
			array_push($errors, "Wrong email/password combination");
		}
	}
}

?>
