<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width-device-width">
		<link rel="stylesheet" href="home.css">
		<title>Sign Up</title>
	</head>
	<body>
		<?php
			$servername = "localhost";
			$username	= "webphp";
			$dbname 	= "finaldb";
			$pass       = "password";
			$userid 	= $_POST['username'];
			$password   = $_POST['password'];
			
			$connect = mysqli_connect($servername, $username, $pass);
			
			if(!$connect)
				die("Database connection failed: ".mysqli_connect_error());
			mysqli_select_db($connect, $dbname) or die("Database $dbname does not exist.");
			$select = "select * from auth where username='$userid' AND password='$password'";
			$query = mysqli_query($connect, $select) 
				or die(mysqli_error($connect));
			if( ($row=mysqli_num_rows($query)) > 0)
			{
				$row= mysqli_fetch_array($query);
				echo "
				<div>
					<h3> Welcome back $userid! Login was successful. </h3>
					<p> First Name: $row[firstName] </p>
					<p> Last Name : $row[lastName]  </p>
					<p> email     : $row[email]     </p>
					<p> phone &#35   : $row[phone]		</p>
				</div>";
			}
			else{
				echo "
				<div>
					<p> Incorrect Username or password. </p>
				</div>";
			}
		?>
	</body>
</html>
