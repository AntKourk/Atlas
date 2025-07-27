<?php include('server/db_login.php') ?>
<?php include('server/db_job.php') ?>
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

<link rel="stylesheet" href="css/styles8.css">

<body>
<!-- home-page start -->

<div class="container">
	<div id="header">
        <a href="index.php" Title><img id="logo" src="icons/atlas_logo.png" alt="LOGO" height="145"></a>
        
        
		<?php  if (!isset($_SESSION['email'])) : ?>

		<?php endif ?>

		<?php  if (isset($_SESSION['email'])) : ?>

			<?php

			$db = mysqli_connect('localhost', 'root', '4386CFkld','demo');

			$email = $_SESSION['email'];
			$query = "SELECT * FROM employer WHERE email='$email'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1)
			{
				$row = mysqli_fetch_array($results);
				$company_name = $row['company_name'];
			}
			?>




		<button id="after" onclick="document.getElementById('sb2').style.display='block'" class="signup"><p><?php echo $company_name; ?></p></button>


		<?php endif ?>
		<div id="mainmenu">
			<ul class="menu_links">
				<li class="menu-0">
					<a href="index.php" Title>Αρχική</a>
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
			</ul>
		</div>
	</div>



    <div id="main3">
	  	<form method="post" action="create_job.php" novalidate onsubmit="return continueOrNot()" onkeyup="liveValidate()" onmouseup="liveValidate()">
	        <div class="middle2">
	            <div class="panel-title">
	                <p>Δημιουργία Αγγελίας</p>
	            </div>
	            <div class="type">
	                <p>Στοιχεία Αγγελίας:</p>
	            </div>
	            <div class="line">
	                <div class="line-content">
						<input type="hidden" name="company_name" id="company_name">
						<input type="hidden" name="phone" id="phone">
						<input type="hidden" name="job_id" id="job_id">
	                    <label for="name">
	                        <p>Τίτλος:</p>
	                        <div class="input-box">
	                            <input type="text" id="job_title" name="job_title" required onkeyup="upper('job_title')">
	                        </div>
	                        <ul class="input-requirements">
	                            <li>Το πεδίο δε μπορεί να είναι κενό</li>
	                            <li>Μόνο χαρακτήρες</li>
	                        </ul>
	                    </label>
	                </div>
	                <div class="line-content">
						<label for="job_description"></label>
						<p>Job Description</p>
						<textarea id="job_description" name="job_description" required></textarea>
	                </div>
	            </div>
	            <div class="line">
	                <div class="line-content">
					<label for="category"></label>
						<p>Category</p>
						<select id="category" name="category">
						<option value="">-----------</option>
						<option value="IT">IT</option>
						<option value="Finance">Finance</option>
						<option value="Marketing">Marketing</option>
						<option value="Engineering">Engineering</option>
						</select>
	                </div>
	                <div class="line-content">
					<label for="location"></label>
						<p>Location</p>
						<select id="location" name="location">
						<option value="">----------</option>
						<option value="Αθήνα">Αθήνα</option>
						<option value="New York">New York</option>
						<option value="Los Angeles">Los Angeles</option>
						<option value="Chicago">Chicago</option>
						<option value="Houston">Houston</option>
						</select>

	                </div>
	            </div>

	            <div class="line">
	                <div class="line-content">
					<label for="duration"></label>
						<p>Duration</p>
						<select id="duration" name="duration">
						<option value="">---------</option>
						<option value="3">3 μήνες</option>
						<option value="6">6 μήνες</option>
						</select>
	                </div>
	                <div class="line-content">
	                </div>
	            </div>
	            <button id="confirm" type="submit" name="job"><p>Επιβεβαίωση</p></button>
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
	<form method="post" action="create_job.php">
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
					<a href="profile2.php" >Το προφίλ μου</a>
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
<!-- <script src="javascript/continue_signup.js"></script> -->
<script>

var modal = document.getElementById('sb');
//var modal2 = document.getElementById('sb2');

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
