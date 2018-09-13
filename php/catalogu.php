<?php
include ('server.php');
?>
<?php
	/*variable needed for the user to connect to the database*/		
	$host="localhost";
	$dbuser="root";
	$dbpassword="";
	$dbase="moviehut";
	
	/*connect to mysqli database */	
	$con=mysqli_connect($host,$dbuser,$dbpassword,$dbase) or die("Can't connect to server");
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Catalog</title>
	<link rel="stylesheet" type="text/css" href="/Coursework/stylesheet/Feedback.css"> 
	<link rel="stylesheet" type="text/css" href="/Coursework/stylesheet/style1.css">
	<link rel="icon" href="/Coursework_web/Images/logo.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<<body background="/Coursework/Images/nature4.png">
		<header>
			<table class="header1">
				<tr>
					<td class="moviehut"><a href="/Coursework/php/index.php">Movie <br>Hut</a></td>
					<td class="menue1"><a href="/Coursework/php/cataloglog.php">Catalog</a></td>
					<td class="menue2"><a href="/Coursework/php/Support.php">Support</td>
					<td class="menue3"><a href="/Coursework/php/ContactUs.php"> Contact</a></td>
					<td class="login"><a href="/Coursework/php/Login.php"> Login</a></td>
					<td class="reg"><a href="/Coursework/php/Register.php">Register</a></td>
				</tr>
			</table>
		</header>
</head>
<body>
	<div style="opacity: 0.9">
		<h1>Choose your favourites here</h1>
		<p>Movie Hut always searching for ways to provide the best service to our customers, so we appreciate you for taking the time to give us feedback. Please provide your feedback in the form below.</p>
		<hr><br>
		<div class="cat1">		 
	<form action="" method="GET">
			<b>Movie name:</b><input type="text" name="name"><br><br>
			<input type="submit" name="submit" value=" Search ">&nbsp&nbsp
			<input type="reset" name="reset_s" value="Cancel">
	</form>
  </div> 
      
    <?php
		
		if(isset($_GET["submit"])) {
			$name = $_GET["name"];
			header("Location: results.php?name=$name&submit");
		}
			
			echo "<h1>Upcoming movies</h1>";
			$query2="SELECT * FROM catalog WHERE releasedDate > CURDATE()";
			$result2=mysqli_query($con,$query2);
			while($finfo2 = mysqli_fetch_row($result2)) {
			
			echo "<a href=\"results.php?name=$finfo2[1]&submit\"><img src=\"$finfo2[5]\"></a>";
			echo " ";
			}
			
			echo "<h1>Released movies</h1>";
			$query3="SELECT * FROM catalog WHERE releasedDate <= CURDATE()";
			$result3=mysqli_query($con,$query3);
			while($finfo3 = mysqli_fetch_row($result3)) {
			
			echo "<a href=\"results.php?name=$finfo3[1]&submit\"><img src=\"$finfo3[5]\"></a>";
			echo " ";
		}
    ?>
	</div>
	
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
					</ul><hr>All Copyrights Reserved</td>
				</tr>
			</table>
		</footer>	
	
</body>
</html>