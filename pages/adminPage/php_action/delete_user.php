<?php 

require_once '../../../includes/dbh.inc.php';

$output = array('success' => false, 'messages' => array());

$usersId= $_POST['usersId'];
$sql = "DELETE FROM tbl_users WHERE usersId = {$usersId}";
$query = $conn->query($sql);
if($query === TRUE) {
  $output['success'] = true;
  $output['messages'] = 'Successfully removed';
} else {
  $output['success'] = false;
  $output['messages'] = 'Error deleting account.';
}




// close database connection
$conn->close();

echo json_encode($output); 