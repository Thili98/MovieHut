<?php
include ('server.php');
?>
<html>
<head> 
	<title> Register  </title>
	<link rel="stylesheet" type="text/css" href="stylesheet/registerlogin.css">
</head>

<body background="Images/Register.jpg"> <br>
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
	<input type="submit" value="Create Account" class="RegButton" name="register">  </button>
	
</div>
<br>

<div class="registerbody" > 
	Already have an account?  <a href="Login.html"> Click here </a>
</div>






</body>
</html>
