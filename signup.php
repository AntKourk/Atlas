<?php include('server/db_login.php') ?>
<?php include('server/db_signup.php') ?>
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
<meta charset="utf-8">
<html>
<head>
<title>ΙΚΑ</title>
</head>


<!-- home-page start-->

<link rel="stylesheet" href="css/styles7.css">

<body>
<!-- home-page start -->

<div class="container">
	<div id="header">
        <a href="index.php" Title><img id="logo" src="icons/atlas_logo.png" alt="LOGO" height="145"></a>
        
        
		<?php  if (!isset($_SESSION['email'])) : ?>

		<button id="before" onclick="document.getElementById('sb').style.display='block'" class="signup"><p>Είσοδος/Εγγραφή</p></button>

		<?php endif ?>

		<?php  if (isset($_SESSION['email'])) : ?>

			<?php

			$db = mysqli_connect('localhost', 'root',  '4386CFkld','demo');

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



    <div id="main2">
        <ul class="breadcrumb">
            <li><a href="#">Αρχική</a></li>
            <li>Εγγραφή</li>
        </ul>

	  	<form method="post" action="signup.php" novalidate onsubmit="return continueOrNot()" onkeyup="liveValidate()" onmouseup="liveValidate()">
	        <div class="middle">
	            <div class="panel-title">
	                <p>Εγγραφή Φοιτητή</p>
	            </div>
	            <div class="type">
	                <p>Στοιχεία Πρόσβασης:</p>
	            </div>
	            <div class="line">
	                <div class="line-content">
	                    <label for="email">
	                        <p>Email:</p>
	                        <div class="input-box">
	                            <input type="text" id="email" name="email" required>
	                        </div>
	                        <ul class="input-requirements">
	                            <li>Έγκυρο email</li>
	                        </ul>
	                    </label>
	                </div>
	            </div>
	            <div class="line">
	                <div class="line-content">
	                    <label for="password">
	                        <p>Κωδικός:</p>
	                        <div class="input-box">
	                            <input type="password" id="password" name="password" required>
	                        </div>

	                        <ul class="input-requirements">
	                            <li>Τουλάχιστον:</li>
	        					<li>8 χαρακτήρες, εκ των οποίων:</li>
	        					<li>1 αριθμός</li>
	        					<li>Ένας πεζός λατινικός χαρακτήρας</li>
	        					<li>Ένας κεφαλαίος λατινικός χαρακτήρας</li>
	        				</ul>

	                    </label>
	                </div>

	                <div class="line-content">
	                    <label for="password_confirm">
	                        <p>Επιβεβαίωση κωδικού:</p>
	                        <div class="input-box">
	                            <input type="password" id="password_confirm" name="password_confirm" required>
	                        </div>

	                        <ul class="input-requirements">
	                            <li>Οι κωδικοί ταιριάζουν</li>
	                        </ul>
	                    </label>
	                </div>
	            </div>

	            <div class="type">
	                <p>Προσωπικά Στοιχεία:</p>
	            </div>
	            <div class="line">
	                <div class="line-content">
	                    <label for="name">
	                        <p>Όνομα:</p>
	                        <div class="input-box">
	                            <input type="text" id="name" name="name" required onkeyup="upper('name')">
	                        </div>
	                        <ul class="input-requirements">
	                            <li>Το πεδίο δε μπορεί να είναι κενό</li>
	                            <li>Μόνο χαρακτήρες</li>
	                        </ul>
	                    </label>
	                </div>

	                <div class="line-content">
	                    <label for="surname">
	                        <p>Επώνυμο:</p>
	                        <div class="input-box">
	                            <input type="text" id="surname" name="surname" required onkeyup="upper('surname')">
	                        </div>
	                        <ul class="input-requirements">
	                            <li>Το πεδίο δε μπορεί να είναι κενό</li>
	                            <li>Μόνο χαρακτήρες</li>
	                        </ul>
	                    </label>
	                </div>
	            </div>
	            <div class="line">
	                <div class="line-content">
	                    <label for="fathername">
	                        <p>Όνομα πατέρα:</p>
	                        <div class="input-box">
	                            <input type="text" id="fathername" name="fathername" required onkeyup="upper('fathername')">
	                        </div>
	                        <ul class="input-requirements">
	                            <li>Το πεδίο δε μπορεί να είναι κενό</li>
	                            <li>Μόνο χαρακτήρες</li>
	                        </ul>
	                    </label>
	                </div>
	                <div class="line-content">
	                    <label for="mothername">
	                        <p>Όνομα μητέρας:</p>
	                        <div class="input-box">
	                            <input type="text" id="mothername" name="mothername" required onkeyup="upper('mothername')">
	                        </div>
	                        <ul class="input-requirements">
	                            <li>Το πεδίο δε μπορεί να είναι κενό</li>
								<li>Μόνο χαρακτήρες</li>
	                        </ul>
	                    </label>
	                </div>
	            </div>

	            <div class="line">
	                <div class="line-content">
	                    <label for="birthdate">
	                        <p>Ημ/νία Γέννησης:</p>
	                        <div class="input-box">
	                            <input type="date" id="birthdate" name="birthdate" required>
	                        </div>
	                        <ul class="input-requirements">
	                            <li>Μορφή ημ/νίας ΗΗ/ΜΜ/ΕΕΕΕ</li>
	                        </ul>
	                    </label>
	                </div>
	                <div class="line-content">
	                    <label for="amka">
	                        <p>Α.Μ.Κ.Α:</p>
	                        <div class="input-box">
	                            <input type="text" id="amka" name="amka" required>
	                        </div>
	                        <ul class="input-requirements">
	                            <li>Μόνο αριθμοί</li>
	                            <li>11 ψηφία</li>
	                        </ul>
	                    </label>
	                </div>
	            </div>
	            <div class="line">
	                <div class="line-content">
	                    <label for="afm">
	                        <p>Α.Φ.Μ.:</p>
	                        <div class="input-box">
	                            <input type="text" id="afm" name="afm" required>
	                        </div>
	                        <ul class="input-requirements">
	                            <li>Μόνο αριθμοί</li>
	                            <li>9 ψηφία</li>
	                        </ul>
	                    </label>
	                </div>
	                <div class="line-content">
	                    <label for="phone">
	                        <p>Τηλέφωνο:</p>
	                        <div class="input-box">
	                            <input type="text" id="phone" name="phone" required>
	                        </div>
	                        <ul class="input-requirements">
	                            <li>Μόνο αριθμοί</li>
	                            <li>10 ψηφία</li>
	                        </ul>
	                    </label>
	                </div>
	            </div>
	            <button id="confirm" type="submit" name="reg_user"><p>Επιβεβαίωση</p></button>
	        </div>
	    </form>
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
	<form method="post" action="signup.php">
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
			  <input type="hidden" name="page" value="signup.php">
			  <button type="submit" class="button" name="login_user">Είσοδος</button>
			  <p>&nbsp;</p>
			  <input type=button id="signup"class="button" onClick="location.href='signup.php'" value='Εγγραφή φοιτητη'>
			  <input type=button id="signup"class="button" onClick="location.href='signup2.php'" value='Εγγραφή φορεα'>
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
<script src="javascript/liveValidate.js"></script>
<script src="javascript/continue_signup.js"></script>

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

<script>
function upper(n)
{
    var x = document.getElementById(n);
    x.value = x.value.toUpperCase();
}
</script>

</body>
</html>
