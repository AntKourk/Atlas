<?php include('server/db_login.php') ?>
<?php include('server/db_search.php') ?>
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

        <button id="before" onclick="document.getElementById('sb').style.display='block'" class="signup	"><p>Είσοδος/Εγγραφή Φοιτητή</p></button>
		<button id="before" onclick="document.getElementById('sb3').style.display='block'" class="signup2"><p>Είσοδος/Εγγραφή Φορέα</p></button>
			

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
		
		$query = "SELECT * FROM employer WHERE email='$email'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1)
		{
			$row = mysqli_fetch_array($results);
			$company_name = $row['company_name'];
		}
		?>

		<button id="after" onclick="document.getElementById('sb2').style.display='block'" class="signup"><p><?php echo $name; ?></p></button>
		<button id="after" onclick="document.getElementById('sb4').style.display='block'" class="signup2"><p><?php echo $company_name; ?></p></button>

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
			</ul>
		</div>

	</div>

	<div class="index">
	    <div id="main">
	        
			<form method="post" 
			novalidate onsubmit="return continueOrNot()">
				<div class="middle">		
						<div class="panel-content">
							<div class="side-title2"> 
								<b>ΦΙΛΤΡΑ ΑΝΑΖΗΤΗΣΗΣ</b>
							</div>
							<div class="side-title"> 
								<p>Πόλη Εργασίας</p>
							</div>	
								<label for="location">Search location:</label>
								<input type="text" id="location" name="location" placeholder="Πόλη Εργασίας">

							<div class="side-title"> 
									<p>Χρονική διάρκεια</p>
							</div>
							<select id="duration">
								<option value="">Select duration</option>
								<option value="3">3 μήνες</option>
								<option value="6">6 μήνες</option>
							</select>
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
				</div>
				<div id="search-box">
					<div class="input-box">		
						<input type="text" name="search" placeholder="Αναζήτηση...">
						<button id="confirm" onClick="location.href='searchresults.php'" type="submit"  name="jobs"><p>Αναζήτηση</p></button>
					</div>	
					
				</div>
			</form> 
		</div>
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
	<form method="post" action="index3.php">
	  <div class="signup-popup">
		  <span onclick="document.getElementById('sb').style.display='none'" class="exit-button">&times;</span>
		  <div class="popup-content">
			  <h3>Είσοδος Φοιτητή</h3>
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
			  <input type="hidden" name="page" value="index3.php">
			  <button type="submit" class="button" name="login_user">Είσοδος</button>
			  <p>&nbsp;</p>
			  <input type=button id="signup"class="button" onClick="location.href='signup.php'" value='Εγγραφή φοιτητη'>

		  </div>
	  </div>
	</form>
</div>

<div id="sb3" class="signup-blur">
	<form method="post" action="index2.php">
	  <div class="signup-popup">
		  <span onclick="document.getElementById('sb3').style.display='none'" class="exit-button">&times;</span>
		  <div class="popup-content">
			  <h3>Είσοδος Φορεα</h3>
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
			  <input type="hidden" name="page" value="index2.php">
			  <button type="submit" class="button" name="login_employer">Είσοδος</button>
			  <p>&nbsp;</p>
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

<div id="sb4" class="signup-blur">
	<div class="signup-popup">
		<span onclick="document.getElementById('sb4').style.display='none'" class="exit-button">&times;</span>
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


<script>

var modal = document.getElementById('sb');
var modal2 = document.getElementById('sb2');
var modal3 = document.getElementById('sb3');
var modal3 = document.getElementById('sb4');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2 || event.target == modal || event.target == modal3) {
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
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>



</body>
</html>
