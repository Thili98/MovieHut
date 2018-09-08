<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<link rel="stylesheet" type="text/css" href="Feedback.css"> 
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="icon" href="Images/logo.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<header>
			<table class="header1">
				<tr>
					<td class="moviehut"><a href="index.html">Movie <br>Hut</a></td>
					<td class="menue">Catalog</td>
					<td class="menue">Support</td>
					<td class="menue">Contact</td>
					<td class="login"><a href="Login.html"> Login</a></td>
					<td class="reg"><a href="Register.html">Register</a></td>
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
</body>
</html>&nbsp