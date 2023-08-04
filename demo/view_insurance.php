<?php include('server/db_login.php') ?>
<?php
  //session_start();

if ((!isset($_SESSION['email'])) && (!isset($_SESSION['afm'])))
{
	header('location: insurance.php');
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
<meta charset="utf-8"
<html>
<head>
<title>ΙΚΑ</title>
</head>


<!-- home-page start -->

<link rel="stylesheet" href="css/styles.css">

<body>

	<?php


	$db = mysqli_connect('localhost', 'root', '4386CFkld','demo');

	if (!isset($_SESSION['afm']))
	{
		$email = $_SESSION['email'];
		$query = "SELECT * FROM users WHERE email='$email'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1)
		{
			$row = mysqli_fetch_array($results);
			$afm = $row['afm'];
			$name = $row['name'];
		}
	}
	else
	{
		$afm = $_SESSION['afm'];
	}
	
	$direct = 0;
	$query = "SELECT * FROM direct WHERE afm='$afm'";
	$results = mysqli_query($db, $query);
	if (mysqli_num_rows($results) == 1)
	{
		$direct = 1;
		$row = mysqli_fetch_array($results);
		$name = $row['name'];
		$surname = $row['surname'];
		$ama = $row['ama'];
		$amka = $row['amka'];
		$start=  $row['start'];
		$end=  $row['end'];
		$type =  $row['type'];
	}

	if (isset($_SESSION['afm']))
	  unset($_SESSION['afm']);

	if ($direct == 1)
	{
		$query = "SELECT indirect.start as instart, indirect.end as inend, indirect.ama as inama, indirect.amka as inamka, indirect.name as inname, indirect.surname as insurname FROM users, direct, indirect WHERE direct.afm=users.afm and users.afm='$afm' and direct.ama=indirect.direct";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) > 0)
			$indirect = 1;
		else
			$indirect = 0;
	}
	else
		$indirect = 0;
	?>

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
				<li><a href="insurance.php">Ασφαλιστική Ικανότητα</a></li>
				<li>Προβολή Ασφαλιστικής Ικανότητας</li>
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


			<div id="insurance-view" class="middle">
				<?php  if ($direct == 1) : ?>
		            <div id="insurance-panel-content" class= "panel-content">
						<div class="panel-title">
							<p>Άμεσα Ασφαλισμένος</p>
						</div>
						<div id="subpanel" class= "panel-content">
							<div class="subpanel-content">
								<div class="panel-title">
									<p>Στοιχεία Ασφαλισμένου</p>
								</div>
								<p>A.M.A.: <?php echo $ama ?></p>
								<p>A.M.K.A.: <?php echo $amka ?></p>
								<p>Όνομα: <?php echo $name ?></p>
								<p>Επώνυμο: <?php echo $surname ?></p>
							</div>
							<div class="subpanel-content">
								<div class="panel-title">
									<p>Διάρκεια Ασφάλισης</p>
								</div>
								<p>Έναρξη: <?php echo $start ?></p>
								<p>Λήξη: <?php echo $end ?></p>
							</div>
							<div class="subpanel-content">
								<div class="panel-title">
									<p>Τύπος Ασφάλισης</p>
								</div>
								<p><?php echo $type ?></p>
							</div>
						</div>

		            </div>
				<?php endif ?>

				<?php  if ($direct == 0) : ?>

					<div id="not-found" class= "panel-content">
						<div class="panel-title">
							<p>Δε βρέθηκε ενεργή ασφάλιση</p>
						</div>
					</div>

				<?php endif ?>

				<?php  if ($indirect == 1) : ?>
					<div id="insurance-panel-content" class= "panel-content">
						<div class="panel-title">
							<p>Έμμεσα Ασφαλισμένοι</p>
						</div>
					</div>
					<?php

					$db = mysqli_connect('localhost', 'root', '', 'sdi1300098');


					$query = "SELECT indirect.relationship as inrelationship, indirect.start as instart, indirect.end as inend, indirect.ama as inama, indirect.amka as inamka, indirect.name as inname, indirect.surname as insurname FROM users, direct, indirect WHERE direct.afm=users.afm and users.afm='$afm' and direct.ama=indirect.direct";
					$results = mysqli_query($db, $query);
					if (mysqli_num_rows($results) > 0)
					{
						while ($row = mysqli_fetch_array($results))
						{
							$inname = $row['inname'];
							$insurname = $row['insurname'];
							$inamka = $row['inamka'];
							$inama = $row['inama'];
							$instart = $row['instart'];
							$inend = $row['inend'];
							$inrelationship = $row['inrelationship'];

							?>

							<div id="insurance-panel-content" class= "panel-content">
								<div id="subpanel" class= "panel-content">
									<div class="subpanel-content">
										<div class="panel-title">
											<p>Στοιχεία Ασφαλισμένου</p>
										</div>
										<p>A.M.A.: <?php echo $amka ?></p>
										<p>A.M.K.A.: <?php echo $amka ?></p>
										<p>Όνομα: <?php echo $inname ?></p>
										<p>Επώνυμο: <?php echo $insurname ?></p>
										<p>Τύπος σχέσης: <?php echo $inrelationship ?></p>
									</div>
									<div class="subpanel-content">
										<div class="panel-title">
											<p>Διάρκεια Ασφάλισης</p>
										</div>
										<p>Έναρξη: <?php echo $instart ?></p>
										<p>Λήξη: <?php echo $inend ?></p>
									</div>
									<div class="subpanel-content">
										<div class="panel-title">
											<p>Τύπος Ασφάλισης</p>
										</div>
										<p><?php echo $type ?></p>
									</div>
								</div>

							</div>
							<?php
						}
					}
					?>
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
	<form method="post" action="view_insurance.php">
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
			  <input type="hidden" name="page" value="view_insurance.php">
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
