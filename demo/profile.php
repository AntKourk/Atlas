<?php include('server/db_login.php') ?>
<?php include('server/db_change_info.php') ?>
<?php
  //session_start();

if (!isset($_SESSION['email']))
{
	header('location: index.php');
}

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

<link rel="stylesheet" href="css/styles8.css">

<body>
<!-- home-page start -->

<?php

$db = mysqli_connect('localhost', 'root',  '4386CFkld','demo');

$email = $_SESSION['email'];
$query = "SELECT * FROM users WHERE email='$email'";
$results = mysqli_query($db, $query);
if (mysqli_num_rows($results) == 1)
{
	$row = mysqli_fetch_array($results);
	$name = $row['name'];
	$surname = $row['surname'];
	$fathername = $row['fathername'];
	$mothername = $row['mothername'];
	$amka = $row['amka'];
	$afm = $row['afm'];
	$phone = $row['phone'];
	$birthdate = $row['birthdate'];
	$pass = $row['password'];

	$current_email = $email;
}
?>

<div class="container">
	<div id="header">
        <a href="index.html" Title><img id="logo" src="icons/atlas_logo.png" alt="LOGO" height="145"></a>
        

		<?php  if (!isset($_SESSION['email'])) : ?>

        <button id="before" onclick="document.getElementById('sb').style.display='block'" class="signup"><p>Είσοδος/Εγγραφή</p></button>

		<?php endif ?>

		<?php  if (isset($_SESSION['email'])) : ?>

		<?php

		$db = mysqli_connect('localhost', 'root', '4386CFkld', 'demo');

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
				<li class="menu-2">
					<a href="news.php" Title>Ανακοινώσεις</a>
				</li>
				<li class="menu-1">
                    <a href="javascript:AlertIt();" Title> Σύνδεσμοι Συνεργατών
					<div class="dropdown">
					<a href="https://ec.europa.eu/info/funding-tenders/funding-opportunities/funding-programmes/overview-funding-programmes/european-structural-and-investment-funds_el">Ευρωπαϊκά Διαρθρωτικά και Επενδυτικά Ταμεία</a>
                    <a href="https://www.espa.gr/en/Pages/default.aspx">ΕΣΠΑ</a>
                    <a href="http://minedu.gov.gr/">Υπουργείο Παιδείας και Θρησκευμάτων</a>
                    <a href="https://www.eury-where.gr/">εύρυwhere</a>
                    <a href="http://www.grnet.gr/">grnet</a>
					</div>
					</a>
                </li>
				<li class="menu-2">
					<a href="offers.php" Title>Οι Αιτήσεις μου</a>
				</li>
			</ul>
		</div>
	</div>



    <div id="main5">
		<ul class="breadcrumb">
            <li><a href="#">Αρχική</a></li>
			<li>Προφιλ</li>
        </ul>

	  	<form method="post" action="profile.php" novalidate onsubmit="return continue_change()" onkeyup="live_profile()" onmouseup="live_profile()">
	        <div class="middle">
	            <div class="panel-title">
	                <p>Το Προφίλ μου</p>
	            </div>
				<div id="inform">
					<p> *Για οποιαδήποτε αλλαγή στοιχείων απαιτείται η συμπλήρωση του τρέχοντος κωδικού</p>
				</div>
	            <div class="type">
	                <p>Στοιχεία Πρόσβασης:</p>
	            </div>
	            <div class="line">
	                <div class="line-content">
	                    <label for="new_email">
	                        <p>Email:</p>
	                        <div class="input-box">
	                            <input type="text" id="new_email" name="new_email" placeholder="<?= $current_email?>"/>
	                        </div>

	                        <ul class="input-requirements">
	                            <li>Έγκυρο email</li>
	                        </ul>
	                    </label>
	                </div>
					<div class="line-content">
						<label for="current_password">
							<p>Τρέχων κωδικός:</p>
							<div class="input-box">
								<input type="password" id="current_password" name="current_password" required/>
							</div>

							<ul class="input-requirements">
								<li></li>
							</ul>
						</label>
					</div>
	            </div>
	            <div class="line">
	                <div class="line-content">
	                    <label for="new_password">
	                        <p>Νέος κωδικός:</p>
	                        <div class="input-box">
	                            <input type="password" id="new_password" name="new_password">
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
	                    <label for="new_password_confirm">
	                        <p>Επιβεβαίωση νέου κωδικού:</p>
	                        <div class="input-box">
	                            <input type="password" id="new_password_confirm" name="new_password_confirm">
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
	                        <div class="output-box">
	                            <p><?= $name?></p>
	                        </div>
	                        <ul class="input-requirements">
	                            <li></li>
	                            <li></li>
	                        </ul>
	                    </label>
	                </div>

	                <div class="line-content">
	                    <label for="surname">
	                        <p>Επώνυμο:</p>
	                        <div class="output-box">
	                            <p><?= $surname?></p>
	                        </div>
	                        <ul class="input-requirements">
	                            <li></li>
	                            <li></li>
	                        </ul>
	                    </label>
	                </div>
	            </div>
	            <div class="line">
	                <div class="line-content">
	                    <label for="fathername">
	                        <p>Όνομα πατέρα:</p>
							<div class="output-box">
	                            <p><?= $fathername?></p>
	                        </div>
	                        <ul class="input-requirements">
	                            <li></li>
	                            <li></li>
	                        </ul>
	                    </label>
	                </div>
	                <div class="line-content">
	                    <label for="mothername">
	                        <p>Όνομα μητέρας:</p>
							<div class="output-box">
	                            <p><?= $mothername?></p>
	                        </div>
	                        <ul class="input-requirements">
	                            <li></li>
								<li></li>
	                        </ul>
	                    </label>
	                </div>
	            </div>

	            <div class="line">
	                <div class="line-content">
	                    <label for="birthdate">
	                        <p>Ημ/νία Γέννησης:</p>
							<div class="output-box">
	                            <p><?= $birthdate?></p>
	                        </div>
	                        <ul class="input-requirements">
	                            <li></li>
	                        </ul>
	                    </label>
	                </div>
	                <div class="line-content">
	                    <label for="amka">
	                        <p>Α.Μ.Κ.Α:</p>
							<div class="output-box">
	                            <p><?= $amka?></p>
	                        </div>
	                        <ul class="input-requirements">
	                            <li></li>
	                            <li></li>
	                        </ul>
	                    </label>
	                </div>
	            </div>
	            <div class="line">
	                <div class="line-content">
	                    <label for="afm">
	                        <p>Α.Φ.Μ.:</p>
							<div class="output-box">
	                            <p><?= $afm?></p>
	                        </div>
	                        <ul class="input-requirements">
	                            <li></li>
	                            <li></li>
	                        </ul>
	                    </label>
	                </div>
	                <div class="line-content">
	                    <label for="new_phone">
	                        <p>Τηλέφωνο:</p>
							<div class="input-box">
	                            <input type="text" id="new_phone" name="new_phone" placeholder="<?= $phone?>"/>
	                        </div>
	                        <ul class="input-requirements">
								<li>Μόνο αριθμοί</li>
	                            <li>10 ψηφία</li>
	                        </ul>
	                    </label>
	                </div>
	            </div>
				<input type="hidden" name="current_email" value="<?= $current_email?>">
				<input type="hidden" name="pass" value="<?= $pass?>">
	            <button id="confirm" type="submit" name="change_info"><p>Επιβεβαίωση</p></button>
	        </div>
	    </form>
	</div>

	<div id="footer">
        <ul class="menu_links">
            <li class="menu-0">
                <a href="AboutUs.php" Title>AboutUs</a>
            </li>
            <li class="menu-1">
                <a href="FAQ.php" Title>FAQ</a>
            </li>
        </ul>
        <div id="copyright" class="menu-0">
            <p>Copyright © 2023 ΑΤΛΑΣ</p>
        </div>
    </div>

</div>

<div id="sb" class="signup-blur">
	<form method="post" action="profile.php">
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
			  <input type="hidden" name="page" value="profile.php">
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

<script src="javascript/live_profile.js"></script>
<script src="javascript/continue_change.js"></script>

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
