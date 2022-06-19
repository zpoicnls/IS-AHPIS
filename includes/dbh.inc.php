<?php 

	$serverName = "localhost";
	$dbUserName = "root";
	$dbPassword = "";
	$dbName = "db_userlogin";

	// create connection
	$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

	// check connection 
	if(!$conn) {
		die("Connection failed : " . mysqli_connect_error());
	}