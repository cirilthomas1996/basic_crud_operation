<?php 

//configuration of localhost
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main_form";

$link = mysqli_connect($servername,$username,$password,$dbname);

//condition checking for connection established
if($link === false)
{
	die("Could not Connect".mysqli_connect_error());
}
/*else
{
	echo "Connection Successfully";
}*/


?>