<?php

$errors = array();

$db = mysqli_connect('localhost', 'root', '4386CFkld','demo');

if (isset($_POST['employer']))
{
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$password_confirm = mysqli_real_escape_string($db, $_POST['password_confirm']);
	$company_name = mysqli_real_escape_string($db, $_POST['company_name']);
	$site = mysqli_real_escape_string($db, $_POST['site']);
	$afm = mysqli_real_escape_string($db, $_POST['afm']);
	$phone = mysqli_real_escape_string($db, $_POST['phone']);
	$city = mysqli_real_escape_string($db, $_POST['city']);
	$address = mysqli_real_escape_string($db, $_POST['address']);
	$postal_code = mysqli_real_escape_string($db, $_POST['postal_code']);
	$doi = mysqli_real_escape_string($db, $_POST['doi']);

	//$password = md5($password);//encrypt the password before saving in the database
	$query = "INSERT INTO employer (email, password,company_name, site, afm, phone, city, address, postal_code, doi)
			  VALUES('$email', '$password', '$company_name', '$site', '$afm', '$phone', '$city', '$address', '$postal_code', '$doi')";
	mysqli_query($db, $query);
	$_SESSION['email'] = $email;

	header("location: index2.php");

}
?>
