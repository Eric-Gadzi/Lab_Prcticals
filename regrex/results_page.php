<?php
	require("database_connection_test.php");
	if(isset($_GET['submit2'])){
		$userInput =  $_GET['searchBox2'];
		if(preg_match('(?=.*0-9).{8,}', $userInput)){
		//Adding to a Database Practical Lab H
		$sqlADD = "INSERT INTO `practical_lab_table`(`Search_item`) VALUES ('$userInput')";
		if ($conn->query($sqlADD) === TRUE) {
  			echo "success";
		} else {
  			echo "Error: " . $sqlADD . "<br>" . $conn->error;
		}
	}
	else{
		echo " 
			<script>
				alert('Entry must be numbers only')
			</script>

		";
	}

	}

?>




<!-- LAB PRACTICAL I SELECTING RESULTS-->
<?php
	$sqlSELECT = "SELECT `Lab_id`, `Search_item` FROM `practical_lab_table`";
	$result = $conn->query($sqlSELECT);
	echo "<h4> Things in the database are: </h4>";
	$termID = null;
	if ($result->num_rows > 0) {
  		// output data of each row
  		while($row = $result->fetch_assoc()) {
		$termID = $row["Lab_id"];
    	echo " Search_item: " . $row["Search_item"];
    	echo "
		<form style = 'display:inline'>
			<input type = 'hidden' name = 'Lab_id' value = '$termID'/>
			<button name = 'delete' style = 'background:red;'>delete</button>
		</form
    	"."<br>";


    	echo "
    	<form action = 'edit_form.php' style = 'display:inline'>
			<input type = 'hidden' name = 'Lab_id' value = '$termID'/>
			<button name = 'edit' style = 'background:blue;'>Edit</button>
		</form
    	"."<br>";

    	

    	echo "<br>";
	  }
	} else {
  		echo "0 results";
		}
?>
<!-- DELETE FROM THE DATABASE PRACTICAL LAB J -->
<?php
	if(isset($_GET['delete'])){
		$id = $_GET['Lab_id'];
		$sqlDELETE = "DELETE FROM `practical_lab_table` WHERE Lab_id = $id";
		if($conn->query($sqlDELETE)){
			echo "delete successfully";
			header("location: results_page.php");
		}
		else{
			echo "Could not delete the value";
		}
	}

?>


<?php
	$uploadOk = 1;

 if(isset($_POST['upload'])){
		echo "<h4>The file chosen is:  </h4>";
	$target_dir = "user_image/";
	$uploadOK = 1;

	// file path

	$target_file = $target_dir.basename($_FILES["filechooser"]["name"]);

	$image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

	// echo "<h4>The file chosen is:  </h4>";
	echo $target_file;

	//checking if the image file is fake or real
	$check = getimagesize($_FILES["filechooser"]["tmp_name"]);

	if($check !== False){
		echo "File is an image - ".$check["mime"].".<br>";
	}else{
		 echo "File is not an image.";
		 $uploadOK = 0;
	}


	//checking if file already exists
	if(file_exists($target_file)){
		 echo "Sorry, file already exists.";
  		$uploadOk = 0;
	}

	// Check file size
	if ($_FILES["filechooser"]["size"] > 500000) {
  		echo "Sorry, your file is too large.";
  		$uploadOk = 0;
	}

	// Allow certain file formats
	if($image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "jpeg"
	&& $image_file_type != "gif" ) {
  	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  	$uploadOk = 0;
	}

	if ($uploadOk === 0) {
  echo "Sorry, your file was not uploaded.";
	}
  else{
  	$uploadImage = move_uploaded_file($_FILES["filechooser"]["tmp_name"],$target_file);
  	if($uploadImage){
  		$sqlUPLOAD = "INSERT INTO `practical_upload_lab`(`User_image`) VALUES ('$target_file')";
  		if($conn->query($sqlUPLOAD)){
  		echo "The file ". htmlspecialchars( basename( $_FILES["filechooser"]["name"])). " has been uploaded.";
  		$sqlSELECTFILE = "SELECT `Lab_id`, `User_image` FROM `practical_upload_lab`";

	$result = $conn->query($sqlSELECTFILE);
	if($result->num_rows > 0){

		while($row = $result->fetch_assoc()){
			$termID = $row["Lab_id"];
    	echo  $row["User_image"];
    	echo "
		<form style = 'display:inline'>
			<input type = 'hidden' name = 'Lab_id' value = '$termID'/>
			<button name = 'delete' style = 'background:red;'>delete</button>
		</form>
    	";


    	echo "
    	<form action = 'edit_form.php' style = 'display:inline'>
			<input type = 'hidden' name = 'Lab_id' value = '$termID'/>
			<button name = 'edit' style = 'background:blue;'>Edit</button>
		</form>
    	"."<br>";

    	echo "<br>";
		}

	}

  	


  	}
  	}
  }





}else{
	$sqlSELECTFILE = "SELECT `Lab_id`, `User_image` FROM `practical_upload_lab`";

	$result = $conn->query($sqlSELECTFILE);
	if($result->num_rows > 0){

		while($row = $result->fetch_assoc()){
			$termID = $row["Lab_id"];
			$user_img = $row['User_image'];
    	echo  "
    		<img src='$user_img'>

    	";
    	echo "
		<form style = 'display:inline'>
			<input type = 'hidden' name = 'Lab_id' value = '$termID'/>
			<button name = 'delete' style = 'background:red;'>delete</button>
		</form>
    	";


    	echo "
    	<form action = 'edit_form.php' style = 'display:inline'>
			<input type = 'hidden' name = 'Lab_id' value = '$termID'/>
			<button name = 'edit' style = 'background:blue;'>Edit</button>
		</form>
    	"."<br>";

    	echo "<br>";
		}

	}
}

?>




