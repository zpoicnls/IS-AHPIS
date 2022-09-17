<?php 

  require_once 'db_connect.php';

  $output = array('data' => array());

  $sql = "SELECT Patient_ID, CONCAT(fname,_utf8 ' ', middle_name, _utf8 ' ', lname) AS name,age,gender,address,email,phone,bday FROM patient_tbl";
  $query = $conn->query($sql);

  while ($row = $query->fetch_assoc()) {

    $diagnosis = '<a type="button" class="btn fa fa-eye " title="View Diagnosis"  href="diagnosis_management.php?var_patient='.$row['Patient_ID'].'" id ="diagnosis"></a>';
    $actionButton = '
      <div class="btn-group" role="group" >
      <a type="button" class="btn btn-secondary btn-info" title="Edit" data-toggle="modal" data-target="#editAccountModal" ><i class="fa fa-edit" aria-hidden="true" ></i></a>
      <a type="button" class="btn btn-secondary btn-danger" title="Remove" data-toggle="modal" data-target="#removeAccountModal" onclick="remove_patient( '.$row['Patient_ID'].')"><i class="fa fa-trash" aria-hidden="true" ></i></a>';

    $output['data'][] = array(
                  $row['name'], 
                  $row['age'],
                  $row['gender'],
                  $row['address'],
                  $row['email'],
                  $row['phone'],
                  $row['bday'],
                  $diagnosis,
                  $actionButton
      
  );

    
  }

  // database connection close
  $conn->close();

  echo json_encode($output);