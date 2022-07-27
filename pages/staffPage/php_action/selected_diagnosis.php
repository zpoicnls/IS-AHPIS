<?php 

require_once 'db_connect.php';


  $Diagnosis_ID =$_POST['Diagnosis_ID'];
 $sql = "SELECT * from diagnosis_tbl WHERE Diagnosis_ID = $Diagnosis_ID";
$query = $conn->query($sql);
$result = $query->fetch_assoc();


$conn->close();

echo json_encode($result);

