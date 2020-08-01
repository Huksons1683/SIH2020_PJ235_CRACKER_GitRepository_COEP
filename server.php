<?php
session_start();

// initializing variables
$fname  = "";
$lname  = "";
$email  = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'register_login');

// REGISTER USER
if (isset($_POST['reg_user']))
{
	// receive all input values from the form
	$fname = mysqli_real_escape_string($db, $_POST['fname']);
	$lname = mysqli_real_escape_string($db, $_POST['lname']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	if (empty($fname)) 
	{
		array_push($errors, '<div class="alert alert-danger" role="alert">Frist Name is required</div>');
	}

	if (empty($lname)) 
	{
		array_push($errors, '<div class="alert alert-danger" role="alert">Last Name is required</div>');
	}

	if (empty($email)) 
	{
		array_push($errors,'<div class="alert alert-danger" role="alert">Email is required</div>');
	}

	if (empty($phone_number))
	{
		array_push($errors, '<div class="alert alert-danger" role="alert">Phone number is required</div>');
	}

	if (empty($password_1))
	{
		array_push($errors, '<div class="alert alert-danger" role="alert">Password is required</div>');
	}
	if ($password_1 != $password_2)
	{
		array_push($errors, '<div class="alert alert-danger" role="alert">The two passwords do not match</div>');
	}

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user_login WHERE fname='$fname' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

	if ($user)
	{ // if user exists
	if ($user['fname'] === $fname) 
	{
		array_push($errors, '<div class="alert alert-danger" role="alert">Username already exists</div>');
	}

	if ($user['email'] === $email)
		{
		array_push($errors, '<div class="alert alert-danger" role="alert">Email already exists</div>');
	}
	}

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0)
	{
		$password = md5($password_1);//encrypt the password before saving in the database

		$query = "INSERT INTO `user_login`(`fname`, `lname`, `email`, `phone_number`, `password`)
				VALUES('$fname','$lname', '$email','$phone_number', '$password')";
		mysqli_query($db, $query);
		$_SESSION['fname'] = $fname;
		$_SESSION['lname'] = $lname;
		$_SESSION['success'] = "You are now logged in";
		header('location: signin.php');
	}
}

//**********************/

// LOGIN USER
if (isset($_POST['login_user'])) {
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($email)) {
		array_push($errors, '<div class="alert alert-danger" role="alert">email is required</div>');
	}
	if (empty($password)) {
		array_push($errors, '<div class="alert alert-danger" role="alert">password is required</div>');
	}

	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM user_login WHERE email='$email' and password='$password'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {
			$_SESSION['email'] = $email;
			$_SESSION['success'] = '<h4 class="text-center">You are now logged in<h4>';
			header('location:hackathon/index.html');
		}else {
			array_push($errors,'<div class="alert alert-danger" role="alert">Wrong email/password, Please login again.</div>');
		}
	}
}

?>


