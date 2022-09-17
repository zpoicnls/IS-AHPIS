<?php 

require_once 'db_connect.php';

//if form is submitted
if ($_POST) {
      
   $patientID = $_POST['patientid'];
   $Diagnosis = $_POST['diagnosis']; 
    $year = $_POST['year'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $temperature = $_POST['temperature']; 
     $bp = $_POST['BP'];
     $HR = $_POST['HR'];
     $RR = $_POST['RR'];
     $chief_complaint = $_POST['cc']; 
      $physician = $_POST['physician'];
      $vital_sign = $_POST['vital_sign'];
      $subjective = $_POST['subjective']; 
      $objective = $_POST['objective'];
      $prescription = $_POST['prescription'];  
      $specialization = $_POST['specialization']; 
      


   
$sql_diagnosis = "INSERT INTO diagnosis_tbl (Diagnosis,year,weight,height,temperature,BP,HR,RR,chief_complaint,physician,vital_sign,subjective,objective,prescription,specialization,bloodtype,allergies)VALUES ('$Diagnosis', '$year','$weight','$height','$temperature','$bp','$HR','$RR','$chief_complaint','$physician','$vital_sign','$subjective','$objective','$prescription','$specialization','','')";
$insertdiagnosis_query = $conn->query($sql_diagnosis);
if($insertdiagnosis_query === TRUE) { 
                $diagnosis_id = mysqli_insert_id($conn);
             
                 $sql2="INSERT INTO tbl_patient_diagnosis (Patient_ID,Diagnosis_ID) VALUES ('$patientID','$diagnosis_id')";
                 $insertdiagnos_p = $conn->query($sql2);


             if($insertdiagnos_p === TRUE) { 

                 echo "<script type='text/javascript'>alert('Successfully Added!');</script>";

                  
                    echo ("<script language='JavaScript'>
         window.location.href='../diagnosis_management.php?var_patient=$patientID';
       </script>");

                    }
            else{        
 
                 echo "<script type='text/javascript'>alert('Error!');</script>";

                   echo ("<script language='JavaScript'>
         window.location.href='../diagnosis_mngmnt.php?var_patient=$patientID';
       </script>");

                 }
                }
}
      

// close the database connection
  $conn->close();

  

?>