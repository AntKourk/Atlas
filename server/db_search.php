<?php


$errors = array();

$db = mysqli_connect('localhost', 'root', '4386CFkld','demo');

if (isset($_POST['jobs'])) {
	$location = mysqli_real_escape_string($db, $_POST['location']);
	$category = mysqli_real_escape_string($db, $_POST['category']);
	$duration = mysqli_real_escape_string($db, $_POST['duration']);
	header("location: searchresults.php?location=".$location."&category=".$category."&duration=".$duration);

}

?>
