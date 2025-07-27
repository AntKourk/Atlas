<?php include('server/db_login.php') ?>
<?php
  //session_start();

  if (isset($_GET['logout']))
  {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="el">
<meta charset="utf-8"
<html>
<head>
<title>ΑTLAS</title>
</head>


<!-- home-page start -->

<link rel="stylesheet" href="css/styles8.css">

<body>
<!-- home-page start -->

<div class="container">
	<div id="header">
        <a href="index.php" Title><img id="logo" src="icons/atlas_logo.png" alt="LOGO" height="145"></a>
        

		<?php  if (!isset($_SESSION['email'])) : ?>

        <button id="before" onclick="document.getElementById('sb').style.display='block'" class="signup"><p>Είσοδος/Εγγραφή</p></button>
		<button id="before" onclick="document.getElementById('sb').style.display='block'" class="signup2"><p>Είσοδος/Εγγραφή Φορείς</p></button>

		<?php endif ?>

		<?php  if (isset($_SESSION['email'])) : ?>

		<?php

		$db = mysqli_connect('localhost', 'root', '4386CFkld','demo');

		$email = $_SESSION['email'];
		$query = "SELECT * FROM users WHERE email='$email'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1)
		{
			$row = mysqli_fetch_array($results);
			$name = $row['name'];
		}
		?>

		<button id="after" onclick="document.getElementById('sb2').style.display='block'" class="signup"><p><?php echo $name; ?></p></button>


		<?php endif ?>

		<div class="content">
		<ul class="breadcrumb">
				<li><a href="index.php">Αρχική</a></li>
				<li>AboutUs</li>
			</ul>
            <div class="side-title2"> 
				<b>Τι είναι το Άτλας;</b>
			</div>
			<p>
				Ο Άτλας είναι μία κεντρική διαδικτυακή υπηρεσία, η οποία διασυνδέει τους φορείς που παρέχουν θέσεις πρακτικής άσκησης (ΠΑ)
				με όλα τα ακαδημαϊκά Ιδρύματα της επικράτειας, δημιουργώντας μία ενιαία βάση θέσεων πρακτικής άσκησης οι οποίες είναι 
				διαθέσιμες προς επιλογή στα Ιδρύματα.Παράλληλα προσφέρει σφαιρική ενημέρωση σε θέματα που άπτονται της αγοράς εργασίας 
				και των πρώτων βημάτων των φοιτητών σε αυτή.
            </p>
			<div class="side-title2"> 
				<b>Ποιούς αφορά το Άτλας;</b>
			</div>
			<p>
			Τους φορείς (ιδιωτικούς, δημόσιους, ΜΚΟ κλπ) που μπορούν να παρέχουν θέσεις ΠΑ
			</p>
			<p>
			Τα όργανα των ακαδημαϊκών Ιδρυμάτων που έχουν αναλάβει το συντονισμό της ΠΑ
			</p>
			<p>
			Τους φοιτητές που έχουν δικαίωμα να εκτελέσουν ΠΑ βάσει του προγράμματος σπουδών της σχολής τους
			</p>
			<div class="side-title2"> 
				<b>Που αποσκοπεί το Άτλας;</b>
			</div>
			<p>
			Στους στόχους του προγράμματος συγκαταλέγονται:
			</p>
			<p>
			Αύξηση του αριθμού διαθέσιμων θέσεων πρακτικής άσκησης στους φοιτητές ΑΕΙ
			</p>
			<p>	
			Απλοποίηση της επικοινωνίας των φορέων υποδοχής ΠΑ με τα επιμέρους Ιδρύματα
			</p>
			<p>
			Άμεση ενημέρωση των Ιδρυμάτων για τις διαθέσιμες θέσεις και δυνατότητα άμεσης δέσμευσής τους
			</p>
			<p>
			Δημιουργία κεντρικής βάσης διαθέσιμων θέσεων ΠΑ
			</p>
			<p>
			Άμεσος έλεγχος της ποιότητας κατάρτισης και των γνώσεων που αποκομίζουν οι φοιτητές μέσω υποβολής αξιολόγησης από τους ίδιους και από τα αντίστοιχα όργανα των Ιδρυμάτων
			</p>
			<p>
			Περιορισμός της γραφειοκρατίας που συνοδεύει την εκτέλεση πρακτικής άσκησης
			</p>
		</div>
	</div>

    <div id="footer">
        <ul class="menu_links">
            <li class="menu-0">
                <a href="FAQ.php" Title>FAQ</a>
            </li>
        </ul>
        <div id="copyright" class="menu-0">
            <p>Copyright © 2023 ΑΤΛΑΣ</p>
        </div>
    </div>
</div>