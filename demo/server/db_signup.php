<?php

$errors = array();

$db = mysqli_connect('localhost', 'root', '4386CFkld','demo');

if (isset($_POST['reg_user']))
{
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$password_confirm = mysqli_real_escape_string($db, $_POST['password_confirm']);
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$surname = mysqli_real_escape_string($db, $_POST['surname']);
	$fathername = mysqli_real_escape_string($db, $_POST['fathername']);
	$mothername = mysqli_real_escape_string($db, $_POST['mothername']);
	$birthdate = mysqli_real_escape_string($db, $_POST['birthdate']);
	$amka = mysqli_real_escape_string($db, $_POST['amka']);
	$afm = mysqli_real_escape_string($db, $_POST['afm']);
	$phone = mysqli_real_escape_string($db, $_POST['phone']);

	$password = md5($password);//encrypt the password before saving in the database
	$query = "INSERT INTO users (email, password, name, surname, fathername, mothername, birthdate, amka, afm, phone)
			  VALUES('$email', '$password', '$name', '$surname', '$fathername', '$mothername', '$birthdate', '$amka', '$afm', '$phone')";
	mysqli_query($db, $query);
	$_SESSION['email'] = $email;

	header("location: index3.php");

}
?>
