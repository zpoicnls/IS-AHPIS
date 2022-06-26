<?php 

require_once 'db_connect.php';

//if form is submitted
if ($_POST) {
      
  
  
   $fname = $_POST['fname']; 
    $lname = $_POST['lname'];
    $mname = $_POST['mname']; 
    $occupation = $_POST['occupation'];   
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
     $bday = $_POST['bday'];
    $age = $_POST['age'];
     $gender = $_POST['gender'];
    $diagnosis = $_POST['diagnosis'];
    $year = $_POST['year'];
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

            $sql = "INSERT INTO patient_tbl (fname, lname, middle_name, occupation, address, email, phone, bday, age, gender) VALUES ('$fname', '$lname', '$mname', '$occupation', '$address', '$email', '$phone', '$bday', '$age', '$gender')";
                $insert_query = $conn->query($sql); 
            

       if($insert_query === TRUE) { 

             $patient_id = mysqli_insert_id($conn);


            $sql_diagnosis = "INSERT INTO diagnosis_tbl (diagnosis, year, Patient_ID) VALUES ('$diagnosis', '$year',' $patient_id')";
             $insertdiagnosis_query = $conn->query($sql_diagnosis);
         
             /*if successful*/
             if($insertdiagnosis_query===TRUE){
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

      

// close the database connection
  $conn->close();

  
}
}
?>
