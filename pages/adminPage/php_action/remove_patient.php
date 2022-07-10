<?php 

require_once '../../../includes/dbh.inc.php';


$output = array('success' => false, 'messages' => array());

$Patient_ID = $_POST['Patient_ID'];
$sql = "DELETE FROM diagnosis_tbl WHERE Patient_ID = {$Patient_ID}";
$query = $conn->query($sql);
if($query === TRUE) {
  $sql = "DELETE FROM patient_tbl WHERE Patient_ID = {$Patient_ID}";
  $query2 = $conn->query($sql);
  if($query2 === True){
  $output['success'] = true;
  $output['messages'] = 'Successfully removed';
} else {
  $output['success'] = false;
  $output['messages'] = 'Error while removing the information';
}
} else {
  $output['success'] = false;
  $output['messages'] = 'Error while removing diagnosis';
}




// close database connection
$conn->close();

echo json_encode($output); 