<?php

if (isset($_POST['cal_cont']))
{
	$specialty = mysqli_real_escape_string($db, $_POST['specialty']);
	$age = mysqli_real_escape_string($db, $_POST['age']);
	$hours = mysqli_real_escape_string($db, $_POST['hours']);
	$wage = mysqli_real_escape_string($db, $_POST['wage']);

	$employer = mysqli_real_escape_string($db, $_POST['employer']);
	$worker = mysqli_real_escape_string($db, $_POST['worker']);
	$total = mysqli_real_escape_string($db, $_POST['total']);

	if ($specialty==882240)
		$per = 0.154;
	if ($specialty==882241)
		$per = 0.167;
	if ($specialty==882242)
		$per = 0.148;
	else
		$per = 0.15;

	if ($age < 25)
		$per = $per - ($per * 0.2);

	if ($hours < 20)
		$per = $per + ($per * 0.1);

	$employer = $wage * $per;
	$worker = $wage * ($per - $per * 0.15 );

	$total = $employer + $worker;

	$_SESSION['employer'] = round($employer,2);
	$_SESSION['worker'] = round($worker,2);
	$_SESSION['total'] = round($total,2);


	header('location: contribution_result.php');
}

?>
