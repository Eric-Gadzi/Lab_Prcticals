<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My_Form</title>
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
</head>
<body>

	<form>
		<!-- First Input Box -->
		<?php
	//beginnng a new session
		session_start();
	//Assigning a value to session
		if(isset($_GET['Submit'])){
			$_SESSION['formValueSession'] = $_GET['searchBox1'];
	}
	?>
		<input type="text" name="searchBox1" value="<?php
		//get form data 
		if(isset($_GET['Submit'])){
			echo $_SESSION['formValueSession'];
	}
	?>">
		<input type="submit" name="submit1">
	</form>
	<p>
		<h3>Result of what you submitted is: </h3>
	</p>

	<?php 
		if(isset($_GET['submit1'])){
			echo $_GET['searchBox1'];
		}
	 ?>


	<form action="insert.php">
		<!-- Second Input Box -->
		<!-- regular expression in the pattern to allow for only numbers -->
		<input type="text" name="searchBox2" id="searchBox2"  pattern='(?=.*0-9).{8,}'
			title="must be 8 or more characters"; 
		>
		<input type="submit" name="submit2">
	</form>

	<br>
	<br>
	<br>
	<h1>
		UPLOADING FILES
	</h1>

	<!-- Submit A FILE -->
	<form method="POST" action="results_page.php" enctype="multipart/form-data">
		<input type="file" name="filechooser" placeholder="Choose a file">
		<input type="submit" name="upload" value="Upload">
	</form>



	<p id="result"></p>

<!-- AJAX Script -->
	<script type="text/javascript">
		$('form').submit(function(e){
			e.preventDefault();      //this prevent the page from refreshing
			
			$.get(
					'insert.php',
					{
						searhBox2: $("#searchBox2").val()
					},
					function(result){
						if(result == "success"){
							$("#result").val("Value Inserted Successfully");
						}else{
							$("#result").val("Error Occurred");
						}
					}

				);


		});

	</script>
</body>
</html>