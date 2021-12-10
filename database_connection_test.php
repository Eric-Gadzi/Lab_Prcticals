<?php 
	require("database_credentials.php");

	$conn = mysqli_connect(host, username, password, db);


	// Check connection
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
	}
		echo "Connected successfully";
	
	

 ?>