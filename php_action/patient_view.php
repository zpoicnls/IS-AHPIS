<?php 


require_once 'db_connect.php';

$output = array('data' => array());

$sql = "SELECT Patient_ID, CONCAT(fname,_utf8 ' ', middle_name, _utf8 ' ', lname) AS name,occupation,address,email,phone,bday,age,gender FROM patient_tbl";
$query = $conn->query($sql);

while ($row = $query->fetch_assoc()) {
  
 
 $actionButton = '
  <div>
      <ul><a type="button" data-toggle="modal" data-target="#editAccountModal" class=" btn-circle btn btn-info btn-lg" onclick="edit_account( '.$row['Patient_ID'].')"> <span class="glyphicon glyphicon-pencil"></span> Edit</a></div>
   <div>   <a type="button" data-toggle="modal" data-target="#removeAccountModal" onclick="remove_account( '.$row['Patient_ID'].')"> <span class="glyphicon glyphicon-trash btn-sm"></span> Remove</a></ul>  </div>   

  
    ';

 $output['data'][] = array(
                $row['name'], 
                $row['occupation'],
                $row['address'],
                $row['email'],
                $row['phone'],
                $row['gender'],
                $row['gender'],
                $actionButton
    
 );

  
}

// database connection close
$conn->close();

echo json_encode($output);