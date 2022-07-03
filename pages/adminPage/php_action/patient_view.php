<?php 


require_once '../../../includes/dbh.inc.php';


$output = array('data' => array());

$sql = "SELECT Patient_ID, CONCAT(fname,_utf8 ' ', middle_name, _utf8 ' ', lname) AS name,occupation,address,email,phone,bday,age,gender FROM patient_tbl";
$query = $conn->query($sql);

while ($row = $query->fetch_assoc()) {


 $diagnosis = '
 <a type="button" class="btn btn-primary" title="View" data-toggle="modal" data-target="#viewDiagnosisModal" onclick="view_diagnosis( '.$row['Patient_ID'].')">View</a>';
 $action = '
  <div class="btn-group" role="group" >
  <a type="button" class="btn btn-secondary btn-info" title="Edit" ><i class="fa fa-edit" aria-hidden="true" ></i></a>
  <a type="button" class="btn btn-secondary btn-danger" title="Remove" ><i class="fa fa-trash" aria-hidden="true" ></i></a>
    ';
 $output['data'][] = array(
                $row['name'], 
                $row['occupation'],
                $row['address'],
                $row['email'],
                $row['phone'],
                $row['gender'],
                $row['age'],
                $diagnosis,
                $action
 );

  
}

// database connection close
$conn->close();

echo json_encode($output);