<?php
include ('server.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	<link rel="stylesheet" type="text/css" href="/Coursework_web/Feedback.css"> 
	<link rel="stylesheet" type="text/css" href="/Coursework_web/style1.css">
	<link rel="icon" href="Images/logo.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<header>
			<table class="header1">
				<tr>
					<td class="moviehut"><a href="/Coursework_web/indexlog.php">Movie <br>Hut</a></td>
					<td class="menue"><a href="/Coursework_web/cataloglog.php">Catalog</a></td>
					<td class="menue">Support</td>
					<td class="menue"><a href="/Coursework_web/ContactUs.php"> Contact</a></td>
					<td class="login"><a href="/Coursework_web/index.php?logout='1'" name="logout"> Logout</a></td>
					

					<td class="reg"><a href="/Coursework_web/profile.php">Profile</a></td> 
				</tr>
			</table>
		</header>
</head>
<body>
	<div>
		
		<h1>My Profile</h1>
		<p>Movie Hut always searching for ways to provide the best service to our customers, now you have the power to reserve your favourite movies! plaese note that you can reserve only two movies and reservations will be held for 72 hours/.
		<hr><br>
		<h1>
			<?php 
				echo('Welcome  ');
				echo $_SESSION['username'];
			?>
			<br><br>
		</h1>

		<h1>Reserved Movies</h1><hr>
		<?php
		echo $_SESSION['fname'];
		?>

	</div>
</body>
</html>&nbsp