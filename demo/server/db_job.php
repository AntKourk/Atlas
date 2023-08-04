

<?php

$errors = array();

$db = mysqli_connect('localhost', 'root', '4386CFkld','demo');

$email = $_SESSION['email'];
$query = "SELECT * FROM employer WHERE email='$email'";
$results = mysqli_query($db, $query);
if (mysqli_num_rows($results) == 1)
{
	$row = mysqli_fetch_array($results);
	$company_name = $row['company_name'];
	$phone = $row['phone'];
}

if (isset($_POST['job']))
{
	$job_id = uniqid();
	$job_title = mysqli_real_escape_string($db, $_POST['job_title']);
	$job_description = mysqli_real_escape_string($db, $_POST['job_description']);
	$location = mysqli_real_escape_string($db, $_POST['location']);
	$category = mysqli_real_escape_string($db, $_POST['category']);
	$duration = mysqli_real_escape_string($db, $_POST['duration']);
	$query = "INSERT INTO jobs (job_id,job_title,job_description ,company_name, category, location,telephone, duration, email)
			  VALUES('$job_id','$job_title', '$job_description', '$company_name','$category','$location','$phone','$duration','$email')";
	mysqli_query($db, $query);
	$_SESSION['email'] = $email;

	header("location: index2.php");

}
?>


