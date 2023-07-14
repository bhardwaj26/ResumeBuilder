<?php
session_start();

// initializing variables
$userId = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'login_resume');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $userId = mysqli_real_escape_string($db, $_POST['userId']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($userId)) { array_push($errors, "UserId is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE userId='$userId' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['userId'] === $userId) {
      array_push($errors, "userId already exists");
    }    
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (userId,  password) 
  			  VALUES('$userId',  '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['userId'] = $userId;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $userId = mysqli_real_escape_string($db, $_POST['userId']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($userId)) {
  	array_push($errors, "userId is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE userId='$useuserIdrname' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['userId'] = $userId;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong userId/password combination");
  	}
  }
}

?>