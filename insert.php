<?php
	require("database_connection_test.php");
	if(isset($_GET['submit2'])){
		$userInput =  $_GET['searchBox2'];

		//Adding to a Database Practical Lab H
		$sqlADD = "INSERT INTO `practical_lab_table`(`Search_item`) VALUES ('$userInput')";
		if ($conn->query($sqlADD) === TRUE) {
  			echo "success";
		} else {
  			echo "Error: " . $sqlADD . "<br>" . $conn->error;
		}


	}

?>