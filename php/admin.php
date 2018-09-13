<?php
include ('server.php');
?>
<html>
<head> 
	<title> Admin Log In  </title>
	<link rel="stylesheet" type="text/css" href="/Coursework_web/stylesheet/registerlogin.css">
	<link rel="stylesheet" type="text/css" href="/Coursework_web/style1.css">
	<link rel="icon" href="Images/logo.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body background="/Coursework_web/Images/nature5.png">
	<header>
			<table class="header1">
				<tr>
					<td class="moviehut"><a href="/Coursework_web/index.php">Movie <br>Hut</a></td>
					<td class="menue1"><a href="/Coursework_web/catalog.php">Catalog</a></td>
					<td class="menue2"><a href="/Coursework_web/Support.php"> Support</td>
					<td class="menue3"><a href="/Coursework_web/ContactUs.php"> Contact</a></td>
					<td class="login"><a href="/Coursework_web/Login.php"> Login</a></td>
					<td class="reg"><a href="/Coursework_web/Register.php">Register</a></td>
				</tr>
			</table>
		</header>
<br> <br> <br>
<h1> <center> <font color="white"> Log In as Admin </center> </font> </h1>

<div class="loginbody">
<form method="post" action="admin.php">
	Username <br>  
	<input id="loginform" type="text"  name="username"  >  <br> <br> 
	Password <br> 
	<input id="loginform" type="password" name="pword"> <br> 
	
	<input  type="submit" value="Login" class="LoginButton" name="adminlogin"> 
	

</div>
<br>

<div class="loginbody" > 
	Wanna Login as a Customer? <a id="login" href="/Coursework_web/Login.php"> Click here </a> <br> <br>
	
</div> <br> <br>
<footer>
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
						<a href="/Coursework_web/Feedback.php"><li>Feedback</li>
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
<center> Copyrights &copy; 2018 Informatics Institute of Technology.| All Rights Reserved. </center> </font> </footer>





</body>
</html>
