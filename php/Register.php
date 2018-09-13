<?php
include ('server.php');
?>
<html>
<head> 
	<title> Register  </title>
	<link rel="stylesheet" type="text/css" href="/Coursework/stylesheet/registerlogin.css">
	<link rel="stylesheet" type="text/css" href="/Coursework/stylesheet/style1.css">
	<link rel="icon" href="/Coursework_web/Images/logo.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body background="/Coursework/Images/nature4.png"> 
	<header>
			<table class="header1">
				<tr>
					<td class="moviehut"><a href="/Coursework/php/index.php">Movie <br>Hut</a></td>
					<td class="menue1"><a href="/Coursework/php/cataloglog.php">Catalog</a></td>
					<td class="menue2"><a href="/Coursework/php/Support.php"> Support</a></td>
					<td class="menue3"><a href="/Coursework/php/ContactUs.php"> Contact</a></td>
					<td class="login"><a href="/Coursework/php/Login.php"> Login</a></td>
					<td class="reg"><a href="/Coursework/php/Register.php">Register</a></td>
				</tr>
			</table>
		</header>


<script>

function checkNum(){
var num=document.forms["form1"].phonenum.value;
	if(isNaN(num));
	{
	alert("You Can Enter Numbers Only For This Field");
	}
}
</script>


 <center> <font size="15"> <font color="white"> <font face="Tekton Pro">  Join Movie Hut </center> </font> </font> </font> 

<div class="registerbody">
<form method="post" action="Register.php">
	First Name <br> <input id="registerform" type="text"  name="FName"   > <br> <br>
	Last Name <br> <input id="registerform" type="text"  name="LName"  >  <br> <br> 
	Username <br> <input id="registerform" type="text" name="Uname" required> <br> <br>
	Email <br> <input id="registerform" type="text"  name="email" required > <br> <br> 
	Password <br> <input id="registerform" type="password" name="Pword" required> <br> <br>
	
	<select id="selectionbox">
		<option value="" disabled selected> Gender </option>
		<option value="Female">Female</option>
		<option value="Male">Male</option>
	</select>
<br> <br>	
	Contact No. <br> <input id="registerform" type="text"  name="phonenum" required > <br> <br>
	By creating an account, you agree to our Terms & Conditions.  <br> 
	<input type="submit" value="Create Account" class="RegButton" name="register">  </button> </form>
	
</div>
<br>

<div class="registerbody" > 
	Already have an account?  <a href="Login.html"> Click here </a>
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
<center> Copyrights &copy; 2018 Informatics Institute of Technology.| All Rights Reserved. </center> </font> </footer>





</body>
</html>
