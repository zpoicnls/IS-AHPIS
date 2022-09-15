<?php 

require_once 'db_connect.php';

//if form is submitted
if ($_POST) {
      
    // Declare models for patient_tbl
    $date = $_POST['date'];
    $fname = $_POST['fname']; 
    $lname = $_POST['lname'];
    $mname = $_POST['mname']; 
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    // $occupation = $_POST['occupation'];   
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $bday = $_POST['bday'];

    // Declare models for diagnosis_tbl
    $date = $_POST['date'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $temperature = $_POST['temperature'];
    $blood = $_POST['blood'];
    $hr = $_POST['hr'];
    $rr = $_POST['rr'];
    $chiefComplaint = $_POST['chiefComplaint'];
    $vital = $_POST['vital'];
    $subjective = $_POST['subjective'];
    $objective = $_POST['objective'];
    $prescription = $_POST['prescription'];
    $plan = $_POST['plan'];
    $physician = $_POST['physician'];
    $specialization = $_POST['specialization'];
    $diagnosis = $_POST['diagnosis'];

    $select = "SELECT * FROM patient_tbl WHERE fname = '$fname' and middle_name = '$mname' and lname = '$lname'";

    $result = $conn->query($select);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
      /*if exist*/
           if($count == 1) 
           {
       
             echo "<script type='text/javascript'>alert('Data already Exist! Add Diagnosis instead');</script>";

                   $URL="../patient_mngmnt.php";
                    echo "<script>location.href='$URL'</script>"; 
            }
            /*if doesnt exist*/
           else{

            $sql = "INSERT INTO patient_tbl (fname, lname, middle_name, address, email, phone, bday, age, sex) VALUES ('$fname', '$lname', '$mname', '$address', '$email', '$phone', '$bday', '$age', '$sex')";
                $insert_query = $conn->query($sql); 
                


       if($insert_query === TRUE) { 
            $patient_id = mysqli_insert_id($conn);
             

            $sql_diagnosis = "INSERT INTO diagnosis_tbl (Diagnosis, dateToday , weight , height, temperature, blood, HR , RR , chief_complaint, physician, vital_sign, subjective, objective, prescription, specialization, plan) VALUES ('$diagnosis', '$date', '$weight', '$height' , '$temperature', '$blood', '$hr', '$rr', '$chiefComplaint', '$vital', '$subjective', '$objective', '$prescription', '$plan', '$physician', '$specialization' )";
             $insertdiagnosis_query = $conn->query($sql_diagnosis);
            

             /*if successful*/


             if($insertdiagnosis_query === TRUE) { 
                $diagnosis_id = mysqli_insert_id($conn);
             
                 $sql2="INSERT INTO tbl_patient_diagnosis(Patient_ID,Diagnosis_ID) VALUES ('$patient_id','$diagnosis_id')";
                 $insertdiagnos_p = $conn->query($sql2);
             if($insertdiagnos_p===TRUE){
                 echo "<script type='text/javascript'>alert('Successfully Added!');</script>";

                    $URL="../patient_mngmnt.php";
                    echo "<script>location.href='$URL'</script>";

                    }
            else{        
 
                 echo "<script type='text/javascript'>alert('Error!');</script>";

                    $URL="../patient_admission.php";
                    echo "<script>location.href='$URL'</script>";

                 }
                }
}
      

// close the database connection
  $conn->close();

  
}
}
?>
