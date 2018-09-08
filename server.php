<?php 
	session_start();

	$db=mysqli_connect('localhost','root','','moviehut');

	if(isset($_POST['register'])){
		$firstname=($_POST['FName']);
		$lasttname=($_POST['LName']);
		$username=($_POST['Uname']);
		$email=($_POST['email']);
		$contact=($_POST['phonenum']);
		$password=($_POST['Pword']);

		$sql="INSERT INTO customer(first_name,last_name,email,contact,username,userpassword) VALUES ('$firstname','$lasttname','$email','$contact','$username','$password')";

		mysqli_query($db,$sql);

		$_SESSION['username']=$username;
		$_SESSION['success']="You're now logged to moviehut";
		header('location:indexlog.php');
		
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location:index.php')
	}

 ?>