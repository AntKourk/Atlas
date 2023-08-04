<?php
session_start();

$errors = array();

$db = mysqli_connect('localhost', 'root', '4386CFkld','demo');

if (isset($_POST['login_user']))
{
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$page = mysqli_real_escape_string($db, $_POST['page']);

	if (empty($email)) {
		array_push($errors, "\nΤο πεδίο Email δε γίνεται να είναι άδειο");
		header("location: index.php");
	}
	if (empty($password)) {
		array_push($errors, "\nΤο πεδίο Κωδικός δε γίνεται να είναι άδειο");
		header("location: index.php");
	}

	if (count($errors) == 0)
	{
		$password = md5($password);
		$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1)
		{
			$_SESSION['email'] = $email;
			header("location:".$page);
		} else {
			array_push($errors, "\nΛάθος συνδυασμός Email/Κωδικού");
			header("location: index.php");
		}
	}

	if (count($errors) != 0)
	{
		echo "<script>
		alert(".json_encode($errors).")
		</script>";
	}
}

?>
