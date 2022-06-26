<?php
include 'db_connect.php';


$sql = "SELECT d.diagnosis_ID, Diagnosis,year FROM diagnosis_tbl d join patient_tbl p on p.diagnosis_ID=d.diagnosis_ID where patient_ID = $_SESSION['Patient'] ";
$query = $conn->query($sql);

while ($row = $query->fetch_assoc()) {
 
 $output['data'][] = array(
                $row['year'], 
                $row['Diagnosis'],
               
    
 );

  
}

// database connection close
$conn->close();

echo json_encode($output);