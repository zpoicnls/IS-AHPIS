<?php 

require_once 'db_connect.php';

//if form is submitted
if ($_POST) {
    
   $patientID = $_POST['patientid'];   
   $diagnosisID = $_POST['diagnosisid'];

$sql = "DELETE FROM tbl_patient_diagnosis WHERE Diagnosis_ID = $diagnosisID and Patient_ID=$patientID";
$query = $conn->query($sql);
if($query === TRUE) { 
  $sql2 = "DELETE FROM diagnosis_tbl WHERE Diagnosis_ID = $diagnosisID";
  $query2 = $conn->query($sql2);
    if($query2 === TRUE) { 
                 echo "<script type='text/javascript'>alert('Removed Successfully!');</script>";

                  
                    echo ("<script language='JavaScript'>
         window.location.href='../diagnosis_mngmnt.php?var_patient=$patientID';
       </script>");

                    }
            else{        
 
                 echo "<script type='text/javascript'>alert('Error removing!');</script>";

                   echo ("<script language='JavaScript'>
         window.location.href='../diagnosis_mngmnt.php?var_patient=$patientID';
       </script>");

                 }
}

 }

// close the database connection
  $conn->close();

  

?>


   
    
    
