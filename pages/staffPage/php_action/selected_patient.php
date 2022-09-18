<?php 

require_once 'db_connect.php';


  $Patient_ID =$_POST['Patient_ID'];
 $sql = "SELECT * from patient_tbl WHERE Patient_ID = $Patient_ID";
$query = $conn->query($sql);
$result = $query->fetch_assoc();


$conn->close();

echo json_encode($result);