<?php 


require_once 'db_connect.php';

//if form is submitted
if($_POST) {  

  $validator = array('success' => false, 'messages' => array());


 
 $Patient_ID = $_POST['Patient_ID'];
   $fname = $_POST['update_fname'];
     $mname = $_POST['update_mname'];
      $lname = $_POST['update_lname'];
     $occupation = $_POST['update_occupation'];
      $address = $_POST['update_address'];
      $email = $_POST['update_email'];
      $bday = $_POST['update_bday'];
      $age = $_POST['update_age'];
      $gender = $_POST['update_gender'];




   
    $sql = "UPDATE patient_tbl SET fname = '$fname', middle_name = '$mname', lname = '$lname', occupation = '$occupation',address = '$address', email = '$email', bday = '$bday',age = '$age',gender = '$gender'    WHERE Patient_ID = $Patient_ID";
    
    $query = $conn->query($sql);

  

if($query===TRUE) {           
        $validator['success'] = true;
        $validator['messages'] = "Updated Successfully";        
    } else {        
        $validator['success'] = false;
        $validator['messages'] = "Error while updating the information";
    }


  // close the database connection
  $conn->close();

  echo json_encode($validator);

}


?>