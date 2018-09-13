<?php
include ('server.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<link rel="stylesheet" type="text/css" href="/Coursework/stylesheet/Feedback.css"> 
	<link rel="stylesheet" type="text/css" href="/Coursework/stylesheet/style1.css">
	<link rel="icon" href="Images/logo.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<header>
			<table class="header1">
				<tr>
					<td class="moviehut"><a href="/Coursework/php/index.php">Movie <br>Hut</a></td>
					<td class="menue1"><a href="/Coursework/php/cataloglog.php">Catalog</a></td>
					<td class="menue2"><a href="/Coursework/php/Support.php">Support</td>
					<td class="menue3"><a href="/Coursework/php/ContactUs.php"> Contact</a></td>
					<td class="login"><a href="/Coursework/php/ogin.php"> Login</a></td>
					<td class="reg"><a href="/Coursework/php/Register.php">Register</a></td>
				</tr>
			</table>
		</header>
</head>
<body>
	<div>
		<h1>Give Movie Hut Your Feedback</h1>
		<p>Movie Hut always searching for ways to provide the best service to our customers, so we appreciate you for taking the time to give us feedback. Please provide your feedback in the form below.</p>
		<hr><br>
		<form action="" method="post" target="_blank">
			Username<span>*</span> &nbsp&nbsp&nbsp&nbsp
			<input type="text" name="fname" placeholder="Eg: David86" required/><br><br>
			First Name<span>*</span> &nbsp&nbsp
			<input type="text" name="fname" placeholder="Eg: David" required/><br><br>
			Last Name &nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="text" name="lname" placeholder="Eg: Smith" /><br><br>
			Email<span>*</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<input type="email" name="email" placeholder="Eg: davidsmith@gmail.com" required/><br><br>
			Feedback Message<span>*</span> <br>
			<textarea rows="8" cols="29" required></textarea><br><br>
			<input type="checkbox" onchange""/>
			<label> I accept the terms and conditions of Movie Hut </lable><br><br> 
			<input id="sub1" type="submit" name="submit" value="Send" onclick="alert('Thank you!')"/>
		</form>
	</div>
	<table class="foot">
				<tr>
					<td><ul class="foot">
						<li>Catalog</li>
						<li>Action</li>
						<li>Comedy</li>
						<li>Thriller</li>
						<li>Family</li>
						<li>Fantasy</li>
						<li>Documentory</li>
					</ul></td>
					<td><ul class="foot">
						<a href="Feedback.html"><li>Feedback</li>
						<li>Need help?</li>
						<li>Contact</li>
						<li>Support</li>
						<li>Subscribe</li>
					</ul></td>
					<td><ul class="foot">
						<li>Follow Us</li>
						<a href=""><i class="fa fa-google-plus-circle"></i></a>&nbsp
						<a href=""><i class="fa fa-facebook-official"></i></a>&nbsp
						<a href=""><i class="fa fa-pinterest-square"></i></a>&nbsp
						<a href=""><i class="fa fa-instagram"></i></a>&nbsp
						<a href=""><i class="fa fa-twitter-square"></i></a>
					</ul></td>
				</tr>
			</table>
	<hr> <font color="white">
<center> Copyrights &copy; 2018 Informatics Institute of Technology.| All Rights Reserved. </center> </font>
</body>
</html>&nbsp