<?php
	include("config.php");
	$id = $_GET["id"];
	$delete_query = "DELETE FROM `form_details` WHERE `id` = " . $id;

	if(mysqli_query($link,$delete_query))
	{
		header("Location: display.php");
	}
?>