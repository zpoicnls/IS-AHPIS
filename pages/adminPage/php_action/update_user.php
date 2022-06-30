<?php 


require_once '../../../includes/dbh.inc.php';


//if form is submitted
if($_POST) {  

  $validator = array('success' => false, 'messages' => array());

    $usersId = $_POST['usersId'];
    $fname = $_POST['update_fname'];
    $mname = $_POST['update_mname'];
    $lname = $_POST['update_lname'];
    $email = $_POST['update_email'];
    $uname = $_POST['update_uname'];
    $pword = $_POST['update_pword'];

   
    $sql = "UPDATE tbl_users SET usersFName = '$fname', usersMName = '$mname', usersLName = '$lname', usersEmail = '$email', usersUid = '$uname', usersPwd = '$pword'  WHERE usersId = $usersId";
    
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