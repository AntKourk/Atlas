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
<title>ΙΚΑ</title>
</head>


<!-- home-page start -->

<link rel="stylesheet" href="css/styles.css">

<body>
<!-- home-page start -->
<div class="container">
	<div id="header">
        <a href="index.php" Title><img id="logo" src="icons/new_logo_ika.png" alt="LOGO" height="145"></a>
        <div id="search-box">
            <form id="search">
                <input type="text" name="search" placeholder="Αναζήτηση...">
            </form>
        </div>

		<?php  if (!isset($_SESSION['email'])) : ?>

        <button id="before" onclick="document.getElementById('sb').style.display='block'" class="signup"><p>Είσοδος/Εγγραφή</p></button>

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

		<div id="mainmenu">
			<ul class="menu_links">
				<li class="menu-0">
					<a href="index.php" Title>Αρχική</a>
				</li>
				<li class="menu-1">
				<a href="index.php" Title>Ηλεκτρονικές Υπηρεσίες</a>
				<div class="dropdown">
					<a href="insurance.php">Ασφαλισμένοι</a>
					<a href="javascript:AlertIt();">Συνταξιούχοι</a>
					<a href="employer.php">Εργοδότες</a>
					<a href="javascript:AlertIt();">Οφειλέτες</a>
					<a href="javascript:AlertIt();">Πάροχοι</a>
					<a href="javascript:AlertIt();">Φορείς</a>
					<a href="javascript:AlertIt();">Ιατροί</a>
				</div>
				</li>
				<li class="menu-2">
					<a href="javascript:AlertIt();" Title>Ανακοινώσεις</a>
				</li>
				<li class="menu-2">
					<a href="javascript:AlertIt();" Title>Εγκύκλιοι</a>
				</li>
				<li class="menu-2">
					<a href="javascript:AlertIt();" Title>Χρήσιμοι Σύνδεσμοι</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="service">
	    <div id="main">
			<ul class="breadcrumb">
				<li><a href="index.php">Αρχική</a></li>
				<li><a href="employer.php">Εργοδότες</a></li>
				<li>Υπολογισμός Εισφορών</li>
			</ul>
	        <div class="side">
	            <div class="panel-title">
	                <p>Υπηρεσίες προς Εργοδότες</p>
	            </div>
				<div class="panel-content">
	                <div class="content">
	                    <div class="content-title">
	                        <a href="employer.php">
	                            Πιστοποίηση Εργοδότη
	                        </a>
	                    </div>
	                </div>
	                <div class="content">
	                    <div class="content-title">
	                        <a href="javascript:AlertIt();">
	                            Βεβαίωση Ασφαλιστικής Ενημερώτητας
	                        </a>
	                    </div>
	                </div>
	                <div class="content">
	                    <div class="content-title">
	                        <a href="javascript:AlertIt();">
	                            Οικονομική Καρτέλα Εργοδότη
	                        </a>
	                    </div>
	                </div>
	                <div class="content">
	                    <div class="content-title">
	                        <a href="javascript:AlertIt();">
	                            Υποβολή Αναλυτικής Περιοδικής Δήλωσης (Α.Π.Δ.)
	                        </a>
	                    </div>
	                </div>
	                <div class="content">
	                    <div class="content-title">
	                        <a href="contribution.php">
	                            Υπολογισμός Εισφορών
	                        </a>
	                    </div>
	                </div>
	                <div class="content">
	                    <div class="content-title">
	                        <a href="javascript:AlertIt();">
	                            Ταυτοποίηση Εργαζομένων
	                        </a>
	                    </div>
	                </div>
					<div class="content">
						<div class="content-title">
							<a href="javascript:AlertIt();">
								Ατομικός Λογαριασμός Ασφάλισης Εργαζομένων
							</a>
						</div>
					</div>
	                <div class="content">
	                    <div class="content-title">
	                        <a href="javascript:AlertIt();">
	                            Βοήθεια
	                        </a>
	                    </div>
	                </div>
				</div>
	        </div>


			<div class="middle">
				<div class="panel-title">
	                <p>Υπολογισμός Εισφορών</p>
	            </div>
	            <div class= "panel-content">
	                    <p> Σύμφωνα με τη νομοθεσία του ΙΚΑ-ΕΤΑΜ, ο εργοδότης είναι υπεύθυνοι για την καταβολή όχι μόνο των εισφορών
							που τον βαρύνουν (εργοδοτικές εισφορές), αλλά και των εισφορών που βαρύνουν τους εργαζομένούς του (εργατικές εισφορές).
							<br><br>Μέσω της υπηρεσίας Υπολογισμού Εισφορών ο Εργοδότης επιλέγοντας τον κωδικό ειδικότητας εργαζομένου και συμπληρώνοντας
							τα βασικά στοιχεία απασχόλησης του μπορεί να υπολογίσει άμεσα τις εισφορές που θα κληθεί να καταβάλει. </p>
	            </div>
	            <button id="confirm" onclick="location.href='contribution_calculator.php'" class="signup"><p>Είσοδος στην Υπηρεσία</p></button>
	        </div>

		</div>
	</div>

	<div id="footer">
		<ul class="menu_links">
			<li class="menu-0">
				<a href="javascript:AlertIt();" Title>Όροι Χρήσης</a>
			</li>
			<li class="menu-1">
				<a href="javascript:AlertIt();" Title>Χάρτης Πλοήγησης</a>
			</li>
			<li id="last-item" class="menu-1">
					<a href="javascript:AlertIt();" Title>Επικοινωνία</a>
			</li>
		</ul>
		<div id="copyright" class="menu-0">
			<p>Copyright © 2018 IKA-ETAM</p>
		</div>
	</div>

</div>

<div id="sb" class="signup-blur">
	<form method="post" action="contribution.php">
	  <div class="signup-popup">
		  <span onclick="document.getElementById('sb').style.display='none'" class="exit-button">&times;</span>
		  <div class="popup-content">
			  <h3>Είσοδος</h3>
			  <p>*Email:
				  <div class="input-box">
					  <input type="text" name="email">
				  </div>
			  </p>
			  <p>&nbsp;</p>
			  <p>*Κωδικός:
				  <div class="input-box">
					  <input type="password" name="password">
				  </div>
			  </p>
			  <p><input type="checkbox"> Διατήρηση σύνδεσης</p>

			  <a href="https://www2.hm.com/en_eur/password/requestSignIn" class="forgot-password">Ξέχασα τον κωδικό μου</a>
			  <p>&nbsp;</p>
			  <input type="hidden" name="page" value="contribution.php">
			  <button type="submit" class="button" name="login_user">Σύνδεση</button>
			  <p>&nbsp;</p>
			  <input type=button id="signup"class="button" onClick="location.href='signup.php'" value='Εγγραφή'>

		  </div>
	  </div>
	</form>
</div>

<div id="sb2" class="signup-blur">
	<div class="signup-popup">
		<span onclick="document.getElementById('sb2').style.display='none'" class="exit-button">&times;</span>
		<div class="popup-content">
			<h3>Καλώς Ορίσατε</h3>
			<div class="line">
				<div id="profile">
					<a href="profile.php" >Το προφίλ μου</a>
				</div>
			</div>
			<div class="line">
				<div id="logout">
					<a href="index.php?logout='1'" >Αποσύνδεση</a>
				</div>
			</div>
		</div>
	</div>
</div>


<script>

var modal = document.getElementById('sb');
var modal2 = document.getElementById('sb2');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2 || event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
    function AlertIt()
    {
        alert("Η υπηρεσία δεν είναι διαθέσιμη.");
    }
</script>

</body>
</html>
