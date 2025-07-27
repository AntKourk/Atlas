<?php

$errors = array();

$db = mysqli_connect('localhost', 'root', '4386CFkld','demo');

if (isset($_POST['verify_user']))
{
	$ama = mysqli_real_escape_string($db, $_POST['ama']);
	$amka = mysqli_real_escape_string($db, $_POST['amka']);
	$afm = mysqli_real_escape_string($db, $_POST['afm']);
	$page = mysqli_real_escape_string($db, $_POST['page']);

	if (empty($ama))
		array_push($errors, "\nΤο πεδίο Α.Μ.Α. δε γίνεται να είναι άδειο");

	if (empty($amka))
		array_push($errors, "\nΤο πεδίο Α.Μ.Κ.Α. δε γίνεται να είναι άδειο");

	if (empty($afm))
		array_push($errors, "\nΤο πεδίο Α.Φ.Μ. δε γίνεται να είναι άδειο");

	if (count($errors) == 0)
	{
		$query = "SELECT * FROM direct WHERE ama='$ama' AND amka='$amka' AND afm='$afm'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1)
		{
			$_SESSION['afm'] = $afm;
			header("location:".$page);
		}

		else
			array_push($errors, "\nΛάθος συνδυασμός A.M.A. / Α.Μ.Κ.Α. / Α.Φ.Μ.");
	}

	if (count($errors) != 0)
	{
		echo "<script>
		alert(".json_encode($errors).")
		</script>";
	}
}

?>
