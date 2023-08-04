<?php include('server/db_login2.php') ?>
<?php
  //session_start();

  if (isset($_GET['logout']))
  {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: index2.php");
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
		$job_id = $_GET['job_id'];
		?>
		
		<button id="after" onclick="document.getElementById('sb2').style.display='block'" class="signup2"><p><?php echo $company_name; ?></p></button>


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
		<ul class="breadcrumb">
            <li><a href="#">Αρχική</a></li>
            <li>Αρχική Φορεα</li>
			<li>Αιτήσεις μου</li>
        </ul>
		<div class="index">
			<div class="job-title">
	            <b>Οι Αιτήσεις μου</b>
	        </div>
	</div>
	    <div id="main">
	        
				<?php
					
				?>
	        <div class="main">		
				<?php
					$query = "SELECT job_id,CV,anal_bathmologia,email FROM offers WHERE job_id = $job_id";
					$result = $db->query($query);
					if (mysqli_num_rows($result) == 0){
						print("no aggelia");
					}
					echo "<table>";
					echo "<tr>";
					echo "<th>Job Title</th>";
					echo "<th>Job Location</th>";
					echo "<th>email</th>";
					echo "</tr>";
					while ($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<tbody>";
						$query2 = "SELECT job_title FROM jobs WHERE job_id = $job_id";
						$result2 = $db->query($query2);
						$row2 = $result2->fetch_assoc();
						echo "<td width=100>" . $row2['job_title']. "</td>";
						echo "<td width=100>" . $row['CV'] . "</td>";
						echo "<td width=100>" . $row['anal_bathmologia'] . "</td>";
						echo "<td width=100>" . $row['email'] . "</td>";
						echo "</tr>";
						echo "/tbody>";
					}
						echo "</table>";
						
						
				?>
    		</div>	
			 	
	        <div id="useful-links" class="side">
				
				<a href="create_job.php">
            	<button class="green-button">Δημιουργία Αγγελίας +</button>
        		</a>
				
	        </div>
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
	<form method="post" action="index2.php">
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
			  <input type="hidden" name="page" value="index2.php">
			  <button type="submit" class="button" name="login_employer">Είσοδος</button>
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
