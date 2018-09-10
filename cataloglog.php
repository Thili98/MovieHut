<?php
include ('server.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Catalog</title>
	<link rel="stylesheet" type="text/css" href="/Coursework_web/Feedback.css"> 
	<link rel="stylesheet" type="text/css" href="/Coursework_web/style1.css">
	<link rel="icon" href="Images/logo.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<header>
			<table class="header1">
				<tr>
					<td class="moviehut"><a href="index.php">Movie <br>Hut</a></td>
					<td class="menue"><a href="/Coursework_web/catalog.php">Catalog</a></td>
					<td class="menue">Support</td>
					<td class="menue">Contact</td>
					<td class="login"><a href="/Coursework_web/index.php?logout='1'" name="logout"> Logout</a></td>
					

					<td class="reg"><a href="/Coursework_web/profile.php">Profile</a></td> 
				</tr>
			</table>
		</header>
</head>
<body>
	<div style="opacity: 1">
		<h1>Choose your favourites here</h1>
		<p>Movie Hut always searching for ways to provide the best service to our customers, so we appreciate you for taking the time to give us feedback. Please provide your feedback in the form below.</p>
		<hr><br>
		<p>ACTION</p>


		<?php
				$servername = "localhost";
				$username = 'root';
				$password ="123";
				$dbname="moviehut";
				$conn=new mysqli("localhost",'root',"","moviehut");
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 
				
				if(isset($_GET['delete'])){
					$sql_update = "DELETE from movie WHERE film_code=".$_GET["delete"];
					
					if (!mysqli_query($conn, $sql_update)) {
						echo "Error: " . $sql_update . "<br>" . mysqli_error($conn);
					}else{
						header("Location: catalog.php"); /* Redirect browser */
						exit();
					}						
				
				}

				$sql = "SELECT * FROM movie WHERE fname = '112212' ";
				$search_value = '';
				if(isset($_GET['search'])){
					$search_value=$_GET["search"];
					$sql = 'SELECT * FROM movie WHERE fname = "'.$search_value.'"';
					$_SESSION['fname']=$fname;
				}
				$result = $conn->query($sql);

		?>	
		
		<div class="content">
			<div class="search_panel">
				<form action="catalog.php" style="text-align: right;">
				  <input type="text" placeholder="Search.." name="search" value="<?php echo $search_value; ?>" />
				  <button type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
			<div class="profile">
				<?php 
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							
							
						
				?>			
				<div class="film_name">
					<h1><?php  echo $row["fname"] ?></h1>
				</div>
				
				<div>
					<div class="image" align="middle" > <img src="data:image/jpg;base64,'.base64_encode($row['image']).'"/></div>
					<div class="desc">
						<h2>Story</h2>
						<p><?php  echo $row["details"] ?></p>
						<h4>Type :- <span><?php  echo $row["fil_type"] ?><br></span>
							<a href="profile.php">RESERVE NOW</a>
						</h4>
						
					</div>
				</div>
					
				<?php 
							
							break;
						}
					 
					}else{
				?>
						<div class="empty_page">
							<h2>no film found.! </h2>
							<h5>search film by name</h5>
						</div>
				<?php 
					}

				$conn->close(); 
				?>
				
			</div>
		</div>

		
		
		<div class="slides">
	<table style="width:100%; background-color: white;" class="slidestable">
		
		<tr>
			<td style="width:25%" bgcolor="black" ><a href=""><img src="/Coursework_web/Images/1.jpg" style="width:100%;" class="slidesimg" ></a></td>
			<td style="width:25%" bgcolor="black"><a href=""><img src="/Coursework_web/Images/2.jpg" style="width:100%;" class="slidesimg"></a></td>
			<td style="width:25%" bgcolor="black"><a href=""><img src="/Coursework_web/Images/3.jpg" style="width:100%;" class="slidesimg"></a></td>
			<td style="width:25%" bgcolor="black"><a href=""><img src="/Coursework_web/Images/4.jpg" style="width:100%;" class="slidesimg"></a></td>
		</tr>
		<tr>
			<td style="width:25%" bgcolor="black" ><a href=""><img src="/Coursework_web/Images/5.jpg" style="width:100%;" class="slidesimg" ></a></td>
			<td style="width:25%" bgcolor="black"><a href=""><img src="/Coursework_web/Images/6.jpg" style="width:100%;" class="slidesimg"></a></td>
			<td style="width:25%" bgcolor="black"><a href=""><img src="/Coursework_web/Images/7.jpg" style="width:100%;" class="slidesimg"></a></td>
			<td style="width:25%" bgcolor="black"><a href=""><img src="/Coursework_web/Images/8.jpg" style="width:100%;" class="slidesimg"></a></td>
		</tr>
	</table>
</div>
		
	</div>
</body>
</html>&nbsp