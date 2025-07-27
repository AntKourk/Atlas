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

    <div id="main">
		<ul class="breadcrumb">
			<li><a href="index.php">Αρχική</a></li>
			<li><a href="javascript:AlertIt();">Ανακοινώσεις</a></li>
			<li>Σχετικά με δημοσιεύματα για επιπλέον χρηματοδότηση του ΙΚΑ-ΕΤΑΜ</li>
		</ul>

		<div id="announcement-extended" class="middle">
            <div class="panel-title">
                <p>Σχετικά με δημοσιεύματα για επιπλέον χρηματοδότηση του ΙΚΑ-ΕΤΑΜ</p>
            </div>

            <div class= "panel-content">
			<p> Η βελτίωση της εισπραξιμότητας του ΙΚΑ-ΕΤΑΜ εντός του έτους 2016 συνεχίζεται. <br><br>Η πρόοδος της αποτελεσματικότητας των υπηρεσιών,
				η ενίσχυση των ελεγκτικών μηχανισμών, οι εκσυγχρονισμοί και η γενικότερη προσπάθεια βελτίωσης της λειτουργίας του Ιδρύματος συνέβαλαν
				ώστε το ενδεκάμηνο του 2016 να βελτιωθούν τα έσοδα του ΙΚΑ-ΕΤΑΜ κατά 455,23 εκατομμύρια ευρώ ή ποσοστό 4,77% σε σχέση με το αντίστοιχο
				ενδεκάμηνο του 2015. <br><br>Περαιτέρω, σε ενίσχυση της κοινωνικής πολιτικής, εγκαταστάθηκαν από τις υπηρεσίες του ΙΚΑ-ΕΤΑΜ ηλεκτρονικές
				εφαρμογές, που διευκολύνουν τους πολίτες με αίτημα αναγνώρισης ποσοστού αναπηρίας προς τα ΚΕΝΤΡΑ ΠΙΣΤΟΠΟΙΗΣΗΣ ΑΝΑΠΗΡΙΑΣ (ΚΕΠΑ).<br><br>
				Από σήμερα οι πολίτες έχουν στη διάθεσή τους μία σειρά διευκολύνσεων στα πλαίσια εκσυγχρονισμού του πληροφοριακού συστήματος: <br><br>
				Α) Η υποβολή του αιτήματος εξέτασης από την Επιτροπή Αναπηρίας, μπορεί να γίνεται και μέσω της ιστοσελίδας www.ika.gr. Έτσι απαλλάσσονται
				 της υποχρέωσης φυσικής υποβολής του αιτήματος και αποφεύγεται μία δοκιμασία για αυτή την ευαίσθητη κατηγορία πολιτών. <br><br>Β) Το
				 αποτέλεσμα της εξέτασης αναπηρίας γίνεται γνωστό πλέον στον ενδιαφερόμενο και ηλεκτρονικά μέσω της ανωτέρω ιστοσελίδας. <br><br>Γ) Η
				 πιστοποίηση αναπηρίας κοινοποιείται και ηλεκτρονικά προς όποια υπηρεσία επιθυμεί ο ενδιαφερόμενος, αποφεύγοντας περιττές μετακινήσεις και
				  υποβολές εγγράφων. <br><br>Δ) Είναι δυνατή η παρακολούθηση της εξέλιξης του αιτήματος και ηλεκτρονικά. <br><br>Ε) Ο ενδιαφερόμενος
				  διαθέτει πλέον το δικαίωμα και ηλεκτρονικής υποβολής ένστασης για το αποτέλεσμα της πρωτοβάθμιας επιτροπής και υποβολής αίτησης
				  επανεξέτασης λόγω επιδείνωσης. <br><br>ΣΤ) Τέλος, υποστηρίζονται ηλεκτρονικά και οι πολίτες που εμπίπτουν στην κατηγορία απαλλαγής
				  καταβολής παραβόλου (46,14 ευρώ) για εξέταση από Υγειονομική Επιτροπή ΚΕΠΑ σε 1ο και 2ο βαθμό. <br><br>Το ΙΚΑ-ΕΤΑΜ, με συνείδηση των
				  δυσκολιών και των προβλημάτων, εγγυάται τη συνεχή προσπάθεια για τη βελτίωση των προσφερόμενων κοινωνικοασφαλιστικών υπηρεσιών. Με σταθερή
				  αναπτυξιακή πορεία γεφυρώνει την ασφαλιστική μεταρρύθμιση με τη λειτουργία του Ενιαίου Φορέα Κοινωνικής Ασφάλισης (ΕΦΚΑ).
			</p>
				<h4 style="float: right;">ΑΠΟ ΤΗ ΔΙΟΙΚΗΣΗ<br><br>ΤΟΥ ΙΚΑ-ΕΤΑΜ</h4>
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
	<form method="post" action="an161220.php">
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
			  <input type="hidden" name="page" value="an161220.php">
			  <button type="submit" class="button" name="login_user">Είσοδος</button>
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
