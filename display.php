<?php include("config.php");?>
<?php 
	$query = "SELECT * FROM `form_details`";
	$result = $link->query($query);	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Display Detail Forms</title>
</head>
<body>
	<div class="container">
		<div class="sub_cont">
			<h1>FORM DETAILS</h1>
		</div>
	</div>
	<div class="table_container">
		<table class="center">
			<thead>
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				while($rows = $result->fetch_assoc()){

					?>
					<tr>
					<td><?php echo $rows['id'];?></td>
					<td><?php echo $rows['first_name'];?></td>
					<td><?php echo $rows['last_name'];?></td>
					<td><a href="update.php?id=<?php echo $rows['id'];?>">Edit</a></td>
					<td><a href="delete.php?id=<?php echo $rows['id'];?>">Delete</a></td>
			<?php		
				}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>