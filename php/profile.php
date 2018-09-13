<?php
include('server.php')

?>

<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	<link rel="stylesheet" type="text/css" href="/Coursework/stylesheet/Feedback.css"> 
	<link rel="stylesheet" type="text/css" href="/Coursework/stylesheet/style1.css">
	<link rel="icon" href="Images/logo.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body background="/Coursework/Images/nature4.png">
		<header>
			<table class="header1">
				<tr>
					<td class="moviehut"><a href="/Coursework/php/indexlog.php">Movie <br>Hut</a></td>
					<td class="menue1"><a href="/Coursework/php/cataloglog.php">Catalog</a></td>
					<td class="menue2"><a href="/Coursework/php/Support.php"> Support</td>
					<td class="menue3"><a href="/Coursework/php/ContactUs.php"> Contact</a></td>
					<td class="login"><a href="/Coursework/php/index.php?logout='1'" name="logout"> Logout</a></td>
					

					<td class="reg"><a href="/Coursework/php/profile.php">Profile</a></td> 
				</tr>
			</table>
		</header>
</head>
<body>
	<div>
		
		<h1>My Profile</h1>
		<p>Movie Hut always searching for ways to provide the best service to our customers, so we appreciate you for taking the time to give us feedback. Please provide your feedback in the form below.</p>
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
		echo $_SESSION['image'];
		echo $_SESSION['fname'];
		echo "HIII";
		?>

	</div>
</body>
</html>&nbsp