<?php 

require_once 'db_connect.php';

//if form is submitted
if ($_POST) {
    
   $patientID = $_POST['patientid'];   
   $diagnosisID = $_POST['diagnosisid'];
   $Diagnosis = $_POST['diagnosis']; 
    $year = $_POST['year'];

   
$sql = "UPDATE diagnosis_tbl SET Diagnosis = '$Diagnosis', year = '$year'  WHERE Diagnosis_ID = $diagnosisID";
$query = $conn->query($sql);
if($query === TRUE) { 

                 echo "<script type='text/javascript'>alert('Successfully Updated!');</script>";

                  
                    echo ("<script language='JavaScript'>
         window.location.href='../diagnosis_mngmnt.php?var_patient=$patientID';
       </script>");

                    }
            else{        
 
                 echo "<script type='text/javascript'>alert('Error!');</script>";

                   echo ("<script language='JavaScript'>
         window.location.href='../diagnosis_mngmnt.php?var_patient=$patientID';
       </script>");

                 }
}

      

// close the database connection
  $conn->close();

  

?>


   
    
    
