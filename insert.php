<?php 

	//on button click it will check 
	if(isset($_POST["sn"]))
	{
		//database config include
		include("config.php");

		//get the first and last name
		$fname = $_POST["fname"];	
		$lname = $_POST["lname"];

		//query for insert
		$insert = "INSERT INTO `form_details`(`first_name`, `last_name`) VALUES ('$fname','$lname')";

		//condition  for checking for insert query
		if(mysqli_query($link,$insert))
		{
			header("Location:display.php");

		}
		else
		{
			echo "Could not insert record:".mysqli_error($link);
		}
		mysqli_close($link);  

	}
?>