<?php

	include("config.php");

	$id = $_GET["id"];
	$query = "SELECT  `first_name`, `last_name` FROM `form_details` WHERE `id`= " . $id;
	$result = $link->query($query);
	$row = mysqli_fetch_assoc($result);

	if(isset($_POST["update"]))
	{
		$id = $_GET["id"];
		$fname = $_POST["f_name"];
		$lname = $_POST["l_name"];

		$update = "UPDATE `form_details` SET `first_name`='$fname',`last_name`='$lname' WHERE `id` = " . $id;
		
		if(mysqli_query($link,$update))
		{
			header("Location: display.php");
		}
		else
		{
			echo "Could not update record:".mysqli_error($link);
		}

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/style.css" rel=stylesheet>
  <title>Document</title>
</head>

<body>
  <div class="main_title">
    <h1 name="main_div">UPDATE FORM</h1>
  </div>
    <form action="" method="post">
  <div class="main_form">
      <div class="row">
        <div class="col-25">
          <label for="fname">First Name</label>
        </div>
        <div class="col-75">
          <input type="text" name="f_name" placeholder="Enter the First Name" autocomplete="off" value="<?php echo $row['first_name'];?>">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Last Name</label>
        </div>
        <div class="col-75">
          <input type="text" name="l_name" placeholder="Enter the Last Name" autocomplete="off" value="<?php echo $row['last_name'];?>">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-75">
          <button type="submit" name="update">Update</button>
        </div>
    </form>
  </div>
</body>

</html>