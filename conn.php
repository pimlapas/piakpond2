<?php
	$conn= mysqli_connect("localhost","root","","db_food") or die("Error: " . mysqli_error($conn));
	mysqli_query($conn, "SET NAMES 'utf8' ");
	error_reporting(0);
 	date_default_timezone_set('Asia/Bangkok');
	
?>