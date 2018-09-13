<?php 
	session_start();//starting the session

	//connecting the database
	$db=mysqli_connect('localhost','root','','moviehut');

	if(isset($_POST['register'])){
		$firstname=($_POST['FName']);
		$lasttname=($_POST['LName']);
		$username=($_POST['Uname']);
		$email=($_POST['email']);
		$contact=($_POST['phonenum']);
		$password=($_POST['Pword']);

		//inserting the form data to the database
		$sql="INSERT INTO customer(first_name,last_name,email,contact,username,userpassword) VALUES ('$firstname','$lasttname','$email','$contact','$username','$password')";

	
		mysqli_query($db,$sql);

		//register procedure
		$_SESSION['username']=$username;
		$_SESSION['success']="You're now logged to moviehut";
		header('location:/Coursework/php/indexlog.php');
		
	}

	//log in procedure
	if(isset($_POST['login'])){
		$username=($_POST['username']);
		$password=($_POST['pword']);
		$sql="SELECT * FROM customer WHERE username='$username'";
		$query= mysqli_query($db,$sql);

		$row=$query->fetch_assoc();

		if($row['userpassword']==$password){
			$_SESSION['username']=$username;
			header('location:/Coursework/php/indexlog.php');
		}
		else{
			echo "<script> alert('incorrect username or password');</script>";
			
		} 
	}

	$sql1 = "SELECT * FROM movie WHERE fname = '112212' ";
				$search_value = '';
				if(isset($_GET['search'])){
					$search_value=$_GET["search"];
					$sql = 'SELECT * FROM movie WHERE fname = "'.$search_value.'"';
				}

				mysqli_query($db,$sql1);

	if(isset($_GET['Reserve1'])){
					$filmname=$row["fname"];
					$filmimage=$row["image"];
					$_SESSION['image']=$filmimage;
					$_SESSION['fname']=$filmname;
					header('location:/Coursework/php/profile.php');
		
				}

	//logging out procedure
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location:/Coursework/php/index.php');
	}


	
 ?>

