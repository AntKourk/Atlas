<?php

$errors = array();
$changes = array();

$db = mysqli_connect('localhost', 'root', '4386CFkld','demo');

if (isset($_POST['change_info']))
{
	$current_email = mysqli_real_escape_string($db, $_POST['current_email']);
	$pass = mysqli_real_escape_string($db, $_POST['pass']);

	$current_password = mysqli_real_escape_string($db, $_POST['current_password']);
	$new_email = mysqli_real_escape_string($db, $_POST['new_email']);
	$new_password = mysqli_real_escape_string($db, $_POST['new_password']);
	$new_password_confirm = mysqli_real_escape_string($db, $_POST['new_password_confirm']);
	$new_phone = mysqli_real_escape_string($db, $_POST['new_phone']);


	if ((!empty($new_phone)) || (!empty($new_password)) || (!empty($new_email)))
	{
		if (empty($current_password))
		{
			$message = "Ο τρέχων κωδικός δε μπορεί να είναι κενός";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		else
		{
			$current_password = md5($current_password);

			if ($current_password == $pass)
			{
				$query = "SELECT * FROM users WHERE email='$current_email' AND password='$current_password'";
				$results = mysqli_query($db, $query);

				if (mysqli_num_rows($results) == 1)
				{


					if(!empty($new_phone))
					{
						$query = "UPDATE users SET phone = '$new_phone' where email = '$current_email'";
						mysqli_query($db, $query);
						array_push($changes, "\nΕπιτυχής αλλαγή τηλεφώνου");
					}


					if(!empty($new_password))
					{
						$new_password = md5($new_password);
						$query = "UPDATE users SET password = '$new_password' where email = '$current_email'";
						mysqli_query($db, $query);
						array_push($changes, "\nΕπιτυχής αλλαγή κωδικού");
					}



					if(!empty($new_email))
					{
						$query = "UPDATE users SET email = '$new_email' where email = '$current_email'";
						mysqli_query($db, $query);
						array_push($changes, "\nΕπιτυχής αλλαγή email");

						$_SESSION['email'] = $new_email;
					}
					if (count($changes) != 0)
					{
						echo "<script>
						alert(".json_encode($changes).")
						</script>";
					}

				}

			 }
			 else
			 {

				 $message = "Λάθος τρέχων κωδικός";
				 echo "<script type='text/javascript'>alert('$message');</script>";

			 }
		}

	}



}
?>
