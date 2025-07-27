<?php include('server/db_login.php') ?>
<?php include('server/db_verify.php') ?>

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
				<li><a href="insurance.php">Ασφαλισμένοι</a></li>
				<li>Ασφαλιστική Ικανότητα</li>
			</ul>
			<div id="insurance-side" class="side">
				<div class="panel-title">
					<p>Υπηρεσίες προς ασφαλισμένους</p>
				</div>
				<div class="panel-content">
					<div class="content">
						<div class="content-title">
							<a href="insurance.php">
								Ασφαλιστική Ικανότητα
							</a>
						</div>
					</div>
					<div class="content">
						<div class="content-title">
							<a href="javascript:AlertIt();">
								Ατομικός Λογαριασμός Ασφάλισης
							</a>
						</div>
					</div>
					<div class="content">
						<div class="content-title">
							<a href="javascript:AlertIt();">
								Απογραφή Έμμεσα Ασφαλισμένων
							</a>
						</div>
					</div>
					<div class="content">
						<div class="content-title">
							<a href="javascript:AlertIt();">
								Αίτηση Συνταξιοδότησης
							</a>
						</div>
					</div>
					<div class="content">
						<div class="content-title">
							<a href="javascript:AlertIt();">
								Κέντρο Πιστοποίησης Αναπηρίας (ΚΕ.Π.Α.)
							</a>
						</div>
					</div>
					<div class="content">
						<div class="content-title">
							<a href="javascript:AlertIt();">
								Αναρρωτική Άδεια - Επίδομα Ασθενείας
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
	                <p>Ασφαλιστική Ικανότητα</p>
	            </div>
	            <div class= "panel-content">
	                    <p> Με σκοπό τον περιορισμό της επισκεψιμότητας στα Υποκαταστήματα,
	                        το ΙΚΑ-ΕΤΑΜ παρέχει τη δυνατότητα στους ασφαλισμένους του να πληροφορούνται,
	                        μέσω της παρούσας ηλεκτρονικής υπηρεσίας, εάν διαθέτουν ενεργή Ασφαλιστική Ικανότητα.
	                        <br><br>Επιπλέον, σε περίπτωση που ο ασφαλισμένος διαθέτει ενεργή Ασφαλιστική Ικανότητα,
	                        ενημερώνεται ακόμη σχετικά με το χρονικό διάστημα που η ικανότητα του παραμένει ενεργή αλλά και για τον τύπο της.
	                        <br><br>Τέλος, εάν ο ασφαλισμένος έχει προστατευόμενα μέλη που ασφαλίζει έμμεσα (έμμεσα ασφαλισμένοι),
	                        οι παραπάνω πληροφορίες θα του δωθούν και για τα μέλη αυτά. </p>
	            </div>

				<?php  if (!isset($_SESSION['email'])) : ?>
					<button id="confirm" onclick="document.getElementById('sb3').style.display='block'" class="signup"><p>Είσοδος στην Υπηρεσία</p></button>
				<?php endif ?>

				<?php  if (isset($_SESSION['email'])) : ?>
					<button id="confirm" onclick="location.href='view_insurance.php';" class="signup"><p>Είσοδος στην Υπηρεσία</p></button>
				<?php endif ?>

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
	<form method="post" action="insurance.php">
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
			  <input type="hidden" name="page" value="insurance.php">
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

<div id="sb3" class="signup-blur">
	<div id="double-panel" class="signup-popup">
		<div id="double-panel-title">
			<h3>Για την είσοδο στην υπηρεσία απαιτείται ταυτοποίηση</h3>
		</div>
		<div id="double-panel-content">
			<span onclick="document.getElementById('sb3').style.display='none'" class="exit-button">&times;</span>

			<div id="left" class="popup-content">
				<form method="post" action="insurance.php">
					  <h4>Ταυτοποίηση με λογαριασμό</h3>
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
					  <input type="hidden" name="page" value="view_insurance.php">
					  <button type="submit" class="button" name="login_user">Είσοδος</button>
					  <p>&nbsp;</p>
					  <input type=button id="signup"class="button" onClick="location.href='signup.php'" value='Εγγραφή'>
				</form>
			</div>
			<div id="between"></div>
			<div id="right" class="popup-content">
				<form method="post" action="insurance.php">
					  <h4>Ταυτοποίηση χωρίς λογαριασμό</h3>
					  <p>*Α.Μ.Α:
						  <div class="input-box">
							  <input type="text" name="ama">
						  </div>
					  </p>
					  <p>&nbsp;</p>
					  <p>*Α.Μ.Κ.Α:
						  <div class="input-box">
							  <input type="text" name="amka">
						  </div>
					  </p>
					  <p>&nbsp;</p>
					  <p>*Α.Φ.Μ.:
						  <div class="input-box">
							  <input type="text" name="afm">
						  </div>
					  </p>
					  <p>&nbsp;</p>
					  <input type="hidden" name="page" value="view_insurance.php">
					  <button type="submit" class="button" name="verify_user">Είσοδος</button>
				</form>
			</div>
		</div>
	</div>
</div>



<script>
// Get the modal
var modal = document.getElementById('sb');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

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
