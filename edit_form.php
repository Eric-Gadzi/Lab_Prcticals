<?php
	require("database_connection_test.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit_form</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="updateBox" value="<?php
			$id = null;
			if(isset($_GET['edit'])){
				$id = $_GET['Lab_id'];
				$sqlSELECT = "SELECT `Search_item` FROM `practical_lab_table` WHERE Lab_id = '$id'";
				$result = $conn->query($sqlSELECT);

				if ($result->num_rows > 0) {
  				// output data of each row
  				while($row = $result->fetch_assoc()) {
  					echo $row['Search_item'];
			}
			}
		}

		?>
		">
		<button style="background: green; color: white;" name="update">Update </button>

	</form>
</body>
</html>


<!-- Checking if the UPDATE BUTTON IS CLICKED -->
<?php
	if(isset($_POST['update'])){
		$newUpdate = $_POST['updateBox'];
		$sqlUPDATE = "UPDATE `practical_lab_table` SET `Search_item`='$newUpdate' WHERE `Lab_id`='$id'";
		$result = $conn->query($sqlUPDATE);
		if($result){
			echo "Updated successfully";
			header("location: results_page.php");
		}
		else{
			echo "COULD NOT UPDATE";
			echo $conn->error;
		}
	}

?>
