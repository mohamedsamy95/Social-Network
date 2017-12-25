<?php
session_start();

$errors = array();

if (isset($_POST['signin'])) {
	// receive all input values from the form
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);

	// form validation: ensure that the form is correctly filled
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($password)) { array_push($errors, "Password is required"); }

  if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$results = mysqli_query($connection, $query);

		if (mysqli_num_rows($results) == 1) {
			$_SESSION['email'] = $email;
			$_SESSION['success'] = "You are now logged in";
			header('location: newsfeed.php');
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}
 ?>
