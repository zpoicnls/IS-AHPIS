<?php 

require_once '../../../includes/dbh.inc.php';


  $usersId =$_POST['usersId'];
 $sql = "SELECT * from tbl_users WHERE usersId = $usersId";
$query = $conn->query($sql);
$result = $query->fetch_assoc();


$conn->close();

echo json_encode($result);

