 <?php 

require_once 'db_connect.php';

$output = array('success' => false, 'messages' => array());

$Patient_ID = $_POST['Patient_ID'];
$sql = "DELETE FROM patient_tbl WHERE Patient_ID = {$Patient_ID}";
$query = $conn->query($sql);
if($query === TRUE) {
  $output['success'] = true;
  $output['messages'] = 'Successfully removed';
} else {
  $output['success'] = false;
  $output['messages'] = 'Error while removing the information';
}




// close database connection
$conn->close();

echo json_encode($output); 