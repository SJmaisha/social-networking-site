
<?php
// session_start();

// variable declaration

$password = "";
$email = "";

$errors = array(); 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'amidstus');

// REGISTER USER
if (isset($_POST['reg_user'])) {
	// receive all input values from the form
	$username= mysqli_real_escape_string($db, $_POST['username']);
	$firstname= mysqli_real_escape_string($db, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { array_push($errors, "Username is required"); }
	if (empty($firstname)) { array_push($errors, "Firstname is required"); }
	if (empty($lastname)) { array_push($errors, "Lastname is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($password_1)) { array_push($errors, "Password is required"); }

	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database
	$query = "INSERT INTO sign_up (username,firstname, lastname,email, password) 
				  VALUES('$username','$firstname','$lastname', '$email', '$password')";
		mysqli_query($db, $query);
$query1 = "INSERT INTO user_profile (workplace,educational_institution, dob,motto) 
				  VALUES('Workplace-','Educational Institution-','Date of birth-', 'Motto of You Life')";
		mysqli_query($db, $query1);

		header('location: register.php');
	}

}


?>
