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

		require('Textlocal.class.php');
 
	        $Textlocal = new Textlocal(false, false, 'YiGXm9MkDKc-ZZOzKe6l0W5RYfWHzfhK9URqKxhdrF');
            
	        $numbers = array($contact);
	        $sender = 'Movie Hut';
	        $message = "Welcome to Movie hut   Now you can reserve latest Movies From us.";
 
	        $response = $Textlocal->sendSms($numbers, $message, $sender);

		    header('location:indexlog.php');
		
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
			header('location:indexlog.php');
		}
		else{
			echo "<script> alert('incorrect username or password');</script>";
			
		} 
	}

	//logging out procedure
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location:index.php');
	}

	
 ?>