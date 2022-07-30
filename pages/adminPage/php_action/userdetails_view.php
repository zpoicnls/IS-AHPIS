<?php


require_once '../../../includes/dbh.inc.php';


$output = array('data' => array());

$sql = "SELECT usersId, usersLName, usersFName, usersMName, usersEmail,usersType,usersUid , usersPwd, usersGender FROM tbl_users";
$query = $conn->query($sql);

while ($row = $query->fetch_assoc()) {
    $actionButton = '
  <div class="btn-group" role="group" >
  <a type="button" class="btn btn-secondary btn-info" title="Edit" data-toggle="modal" data-target="#editUserAccountModal" onclick="update_account( '.$row['usersId'].')"><i class="fa fa-edit" aria-hidden="true" ></i></a>
  <a type="button" class="btn btn-secondary btn-danger" title="Remove" data-toggle="modal" data-target="#removeUserAccountModal" onclick="delete_account( '.$row['usersId'].')"><i class="fa fa-trash" aria-hidden="true" ></i></a>
    ';

    $output['data'][] = array(
                $row['usersFName'],
                $row['usersMName'],
                $row['usersLName'],
                $row['usersEmail'],
                $row['usersGender'],
                $row['usersUid'],
                $row['usersPwd'],
                $row['usersType'],
                $actionButton
    
 );
}

// database connection close
$conn->close();

echo json_encode($output);