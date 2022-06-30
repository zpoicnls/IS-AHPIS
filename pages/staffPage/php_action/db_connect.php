<?php 

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "prasis";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection 
if($conn->connect_error) {
	die("Connection Failed : " . $conn->connect_error);
} else {
	//echo "Successfully Connected";
}