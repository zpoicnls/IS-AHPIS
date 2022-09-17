<?php
include 'db_connect.php';
$Patient_ID = $_GET['var_patient'];


$Patientquery = "select CONCAT(fname,_utf8 ' ', middle_name, _utf8 ' ', lname, email, address) AS name,bday,Patient_ID ,age,gender,bday,phone,email,address from patient_tbl where Patient_ID = '$Patient_ID'";
$queryP = $conn->query($Patientquery);
$row = $queryP->fetch_assoc();

$diagquery = "SELECT  d.Diagnosis,d.year,d.Diagnosis_ID,pd.Patient_ID,d.weight,d.height,temperature,bp,HR,RR,
chief_complaint,physician,vital_sign,subjective,objective,prescription,specialization,bloodtype,allergies FROM diagnosis_tbl d join tbl_patient_diagnosis pd on pd.Diagnosis_ID=d.Diagnosis_ID where pd.Patient_ID = '$Patient_ID'";
$querydiag = $conn->query($diagquery);
$row1 = $querydiag->fetch_assoc();

$diagquery2 = "SELECT  max(d.year) as last_visit FROM diagnosis_tbl d join tbl_patient_diagnosis pd on pd.Diagnosis_ID=d.Diagnosis_ID where pd.Patient_ID = '$Patient_ID'";
$querydiag2 = $conn->query($diagquery2);
$row2 = $querydiag2->fetch_assoc();


if($_POST)
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT  d.Diagnosis,d.year,d.Diagnosis_ID,pd.Patient_ID,d.weight,d.height,temperature,bp,HR,RR,
    chief_complaint,physician,vital_sign,subjective,objective,prescription,specialization,bloodtype,allergies FROM diagnosis_tbl d join tbl_patient_diagnosis pd on pd.Diagnosis_ID=d.Diagnosis_ID where  CONCAT(`Diagnosis`, `year`) LIKE '%$valueToSearch%' ";
    $search_result = filterTable($query);
    
}
else {


  
    /*for paging*/
    /*fetching data*/
   $sql="SELECT  d.Diagnosis,d.year,d.Diagnosis_ID,pd.Patient_ID,d.weight,d.height,temperature,bp,HR,RR,
   chief_complaint,physician,vital_sign,subjective,objective,prescription,specialization,bloodtype,allergies FROM diagnosis_tbl d join tbl_patient_diagnosis pd on pd.Diagnosis_ID=d.Diagnosis_ID where pd.Patient_ID = '$Patient_ID'";
   $result = $conn->query($sql);
  
  $count=mysqli_num_rows($result);
  $num = $count/5; 
  $lastpage= ceil($num); /*to avoid decimal*/
  $perpage=5; /*number of data per page */
  
  /*getting current page*/
  if(isset($_GET['currentpage'])&& is_numeric($_GET['currentpage'])){
  
    $currentpage=(int) $_GET['currentpage'];
  }else{
    /*default page number*/
    $currentpage=1;
  }
  
  /*if currentpage greater than last page*/
  
  if($currentpage > $lastpage){
    $currentpage=1;
  }
     /*set offset or list per page*/
     $offset = ($currentpage * 5) - $perpage;
     
  
      $query = "SELECT  d.Diagnosis,d.year,d.Diagnosis_ID,pd.Patient_ID,d.weight,d.height,temperature,bp,HR,RR,
      chief_complaint,physician,vital_sign,subjective,objective,prescription,specialization,bloodtype,allergies FROM diagnosis_tbl d join tbl_patient_diagnosis pd on pd.Diagnosis_ID=d.Diagnosis_ID where pd.Patient_ID = '$Patient_ID' limit $offset,$perpage";
      $search_result = filterTable($query);
    
  }
  
  
  function filterTable($query)
  {
      $connect = mysqli_connect("localhost", "root", "", "prasis");
      $filter_Result = mysqli_query($connect, $query);
      return $filter_Result;
  }
  
  
   /*for paging*/
   $sql="SELECT  d.Diagnosis,d.year,d.Diagnosis_ID,pd.Patient_ID,d.weight,d.height,temperature,bp,HR,RR,
   chief_complaint,physician,vital_sign,subjective,objective,prescription,specialization,bloodtype,allergies FROM diagnosis_tbl d join tbl_patient_diagnosis pd on pd.Diagnosis_ID=d.Diagnosis_ID where pd.Patient_ID = '$Patient_ID'";
   $result = $conn->query($sql);
  
  $count=mysqli_num_rows($result);
  $num = $count/5;
  $lastpage= ceil($num);
  $perpage=5;
  
  if(isset($_GET['currentpage'])&& is_numeric($_GET['currentpage'])){
  
    $currentpage=(int) $_GET['currentpage'];
  }else{
    /*default page num*/
    $currentpage=1;
  }
  
  /*if currentpage greater that total*/
  
  if($currentpage > $lastpage){
    $currentpage=1;
  }
     /*set offset or list per page*/
     $offset = ($currentpage * 5) - $perpage;
     
  
  
   $pagination ="";
      
                      $pagination .= "<i class='details' style='margin-top:2px'>Page $currentpage of $lastpage</i>";
  
  
?>

<!DOCTYPE html>
<html lang="en">
<?php
include 'header.php';
?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
            include 'sidebar.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'topbar.php';?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <section>
                        <div class="container py-4">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="card shadow mb-4" style="height:220px">
                                        <div class="card-body text-center">
                                            <img src="../../assets/img/undraw_profile.svg" alt="avatar"
                                                class="rounded-circle img-fluid" style="width: 150px;" />
                                            <a href="#">
                                                <h6 class="my-3"><i> Change Profile Image </i></h6>
                                            </a>
                                            <h3>
                                                <p class="mb-0">Juan Tamad</p>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="card shadow mb-4 bg-gradient-success" style="height:220px">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0" style="color:white;">Age:
                                                    </p>
                                                </div>
                                                <div class="col-sm-3" style="color:white; font-weight:bold">
                                                    <?php echo $row['age'];?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0" style="color:white;">Sex:
                                                    </p>
                                                </div>
                                                <div class="col-sm-9" style="color:white; font-weight:bold">
                                                    <?php echo $row['gender'];?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0" style="color:white;">Birthday:
                                                    </p>

                                                </div>
                                                <div class="col-sm-9" style="color:white; font-weight:bold">
                                                    <?php echo $row['bday'];?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0" style="color:white;">Contact #:
                                                    </p>
                                                </div>
                                                <div class="col-sm-3" style="color:white; font-weight:bold">
                                                    <?php echo $row['phone'];?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0" style="color:white;">Email
                                                    </p>
                                                </div>
                                                <div class="col-sm-9" style="color:white; font-weight:bold">
                                                    <?php echo $row['email'];?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0" style="color:white;">Address:
                                                    </p>
                                                </div>
                                                <div class="col-sm-3" style="color:white; font-weight:bold">
                                                    <?php echo $row['address'];?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card shadow mb-4 bg-gradient-success" style="height:220px">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="mb-0" style="color:white;">Blood Type:
                                                    </p>
                                                </div>
                                                <div class="col-sm-8" style="color:white; font-weight:bold">
                                                    <?php echo $row1['bloodtype'];?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="mb-0" style="color:white;">Allergies:
                                                    </p>
                                                </div>
                                                <div class="col-sm-8" style="color:white; font-weight:bold">
                                                    <?php echo $row1['allergies'];?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="mb-0" style="color:white;">Last Visit:
                                                    </p>
                                                </div>
                                                <div class="col-sm-8" style="color:white; font-weight:bold">
                                                    <?php echo $row2['last_visit'];?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section style="padding-left:100px; padding-right:100px;">
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
                                <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#description" role="tab"
                                            aria-controls="description" aria-selected="true">Patient Medical History</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#history" role="tab" aria-controls="history"
                                            aria-selected="false">Patient Check-up Form</a>
                                    </li>
                                </ul>
                                <!-- <h1 class="h3 mb-0 text-gray-800" id="medicalHistoryHeader">Patient Medical History</h1>
              <h1 class="h3 mb-0 text-gray-800" id="newCheckUpHeader">New Patient Check-up</h1> -->
                                <!-- <a href="#" class="btn btn-sm btn-primary shadow-sm"  id="btnAddCheckup" onclick="showAddCheckup()"><i
                      class="fas fa-download fa-sm text-white-50"></i> Add Checkup Record </a>
              <a href="#" class="btn btn-sm btn-primary shadow-sm" id="btnRegCheckup" onclick="showMedRec()"><i
                      class="fas fa-download fa-sm text-white-50"></i> Register </a> -->
                            </div>
                            <div class="card-body">

                                <!-- <h4 class="card-title">Patient Medical History</h4> -->
                                <!-- <h6 class="card-subtitle mb-2">Emilia-Romagna Region, Italy</h6> -->

                                <div class="tab-content mt-3">
                                    <div class="tab-pane active" id="description" role="tabpanel">
                                        <div class="table-responsive" id="medicalHistoryTable">
                                            <table class="table table-bordered" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Attending Physician</th>
                                                        <th>Specialization</th>
                                                        <th>Patient Diagnosis</th>
                                                        <th>Date</th>
                                                        <th>View</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php while($row = mysqli_fetch_array($search_result)){;
                                                    $action ='<div class="btn-group" role="group" >
  <a type="button" class="btn fa fa-eye btn-sm" title="Edit" href ="patientFullInformation.php?var_patient='.$row1['Patient_ID'].'&var_diagnose='.$row1['Diagnosis_ID'].'"></a>
     ';?>
                                                    <tr>
                                                        <td><?php echo $row['physician'];?></td>
                                                        <td><?php echo $row['specialization'];?></td>
                                                        <td><?php echo $row['Diagnosis'];?></td>
                                                        <td><?php echo $row['year'];?></td>
                                                        <td><?php echo $action; ?></a></td>
                                                    </tr>
                                                    <?php };  ?>
                                                </tbody>
                                            </table>

                                            <div class="col-md-6 pagination ">
                                                <?php

echo $pagination;

?>
                                            </div>

                                            <div class="col-md-6 paging">
                                                <?php

  /*range of num links to show*/
    $range =3 ;
    // if not on page 1, don't show back links
if ($currentpage > 1) {
   // show << link to go back to page 1
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1 & var_patient=$Patient_ID'><<</a> ";
   // get previous page num
   $prevpage = $currentpage - 1;
   // show < link to go back to 1 page
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage & var_patient=$Patient_ID'><</a> ";
} // end if 
// loop to show links to range of pages around current page
for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
   // if it's a valid page number...
   if (($x > 0) && ($x <= $lastpage)) {
      // if we're on current page...
      if ($x == $currentpage) {
         // 'highlight' it but don't make a link
         echo " <i>$x</i> ";
      // if not current page...
      } else {
         // make it a link
         echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x & var_patient=$Patient_ID'>$x</a> ";
      } // end else
   } // end if 
} // end for
                 
// if not on last page, show forward and last page links        
if ($currentpage != $lastpage) {
   // get next page
   $nextpage = $currentpage + 1;
    // echo forward link for next page 
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage & var_patient=$Patient_ID'>></a> ";
   // echo forward link for lastpage
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$lastpage & var_patient=$Patient_ID'>>></a> ";
} // end if
/****** end build pagination links ******/



?>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="history" role="tabpanel" aria-labelledby="history-tab">
                                        <!-- New Patient Check Up Form -->
                                        <form action="php_action/add_diagnosis.php" method="POST">
                                            <fieldset>



                                                <div class="form-group row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group row">
                                                            <div class="col-sm-4">
                                                                <label for="weight" class="form-label mt-4"
                                                                    id="year">Date</label>

                                                            </div>
                                                            <div class="col-sm-8 mt-3">
                                                                <input type="date" class="form-control" id="year"
                                                                    name="year" aria-describedby="year"
                                                                    placeholder="lbs" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-sm-4">
                                                                <label for="weight"
                                                                    class="form-label mt-4">Weight</label>
                                                            </div>
                                                            <div class="col-sm-8 mt-3">
                                                                <input type="text" class="form-control" id="weight"
                                                                    name="weight" aria-describedby="weight"
                                                                    placeholder="lbs" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-sm-4">
                                                                <label for="height"
                                                                    class="form-label mt-4">Height</label>
                                                            </div>
                                                            <div class="col-sm-8 mt-3">
                                                                <input type="text" class="form-control" name="height"
                                                                    id="height" aria-describedby="height"
                                                                    placeholder="ft" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-sm-4">
                                                                <label for="temperature"
                                                                    class="form-label mt-4">Temperature</label>
                                                            </div>
                                                            <div class="col-sm-8 mt-3">
                                                                <input type="text" class="form-control"
                                                                    name="temperature" id="temperature"
                                                                    aria-describedby="temperature"
                                                                    placeholder="Celcius" />
                                                            </div>
                                                        </div>
                                                        <input type="hidden" class="form-control"
                                                            value="<?php echo $Patient_ID ?>" id="patientid"
                                                            name="patientid" />
                                                        <div class="form-group row">
                                                            <div class="col-sm-4">
                                                                <label for="bp" class="form-label mt-4">Blood
                                                                    Pressure</label>
                                                            </div>
                                                            <div class="col-sm-8 mt-3">
                                                                <input type="text" class="form-control" id="BP"
                                                                    aria-describedby="bp" name="BP"
                                                                    placeholder="Blood Pressure" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-sm-4">
                                                                <label for="hr" class="form-label mt-4">HR</label>
                                                            </div>
                                                            <div class="col-sm-8 mt-3">
                                                                <input type="text" class="form-control" id="HR"
                                                                    name="HR" aria-describedby="hr" placeholder="HR" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-sm-4">
                                                                <label for="RR" class="form-label mt-4">RR</label>
                                                            </div>
                                                            <div class="col-sm-8 mt-3">
                                                                <input type="text" class="form-control" id="RR"
                                                                    name="RR" aria-describedby="RR" placeholder="RR" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-sm-4">
                                                                <label for="cc" class="form-label mt-4">Chief
                                                                    Complaint</label>
                                                            </div>
                                                            <div class="col-sm-8 mt-3">
                                                                <textarea class="form-control" id="cc" name="cc"
                                                                    rows="3" placeholder="Chief Complaint"></textarea>

                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="col-sm-6">
                                                        <div class="form-group row">
                                                            <div class="col-sm-4">
                                                                <label for="vs" class="form-label mt-4">Vital
                                                                    Signs</label>
                                                            </div>
                                                            <div class="col-sm-8 mt-3">
                                                                <input type="text" class="form-control" id="vital_sign"
                                                                    aria-describedby="vs" name="vital_sign"
                                                                    placeholder="Vital Signs" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-sm-4">
                                                                <label for="subj"
                                                                    class="form-label mt-4">Subjective</label>
                                                            </div>
                                                            <div class="col-sm-8 mt-3">
                                                                <input type="text" class="form-control"
                                                                    name="subjective" id="subjective"
                                                                    aria-describedby="subj" placeholder="Subjective" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-sm-4">
                                                                <label for="obj"
                                                                    class="form-label mt-4">Objective</label>
                                                            </div>
                                                            <div class="col-sm-8 mt-3">
                                                                <input type="text" class="form-control" name="objective"
                                                                    id="objective" aria-describedby="obj"
                                                                    placeholder="Objective" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-sm-4">
                                                                <label for="diagnosis"
                                                                    class="form-label mt-4">Assessment/Diagnosis</label>
                                                            </div>
                                                            <div class="col-sm-8 mt-3">
                                                                <textarea class="form-control" name="diagnosis"
                                                                    id="diagnosis" rows="3"
                                                                    placeholder="Assessment/Diagnosis"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-sm-4">
                                                                <label for="prescription"
                                                                    class="form-label mt-4">Prescription</label>
                                                            </div>
                                                            <div class="col-sm-8 mt-3">
                                                                <textarea class="form-control" id="prescription"
                                                                    name="prescription" rows="3"
                                                                    placeholder="Prescription"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-sm-4">
                                                                <label for="physician" class="form-label mt-4">Attending
                                                                    Physician</label>
                                                            </div>
                                                            <div class="col-sm-8 mt-3">
                                                                <input type="text" class="form-control" id="physician"
                                                                    name="physician" aria-describedby="obj"
                                                                    placeholder="physician" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-sm-4">
                                                                <label for="specialization"
                                                                    class="form-label mt-4">Specialization</label>
                                                            </div>
                                                            <div class="col-sm-8 mt-3">
                                                                <input type="text" class="form-control"
                                                                    id="specialization" name="specialization"
                                                                    aria-describedby="obj"
                                                                    placeholder="specialization" />
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-sm-4"></div>
                                                            <div class="col-sm-8 mt-3">
                                                                <button class="btn btn-primary btn-block">Register Check
                                                                    Up</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    </div>
                                </div>





                            </div>
                        </div>
                    </section>
                </div>
                <!-- End of Main Content -->
                <!-- Footer -->
                <?php include 'footer.php'; ?>
                <!-- End of Footer -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>
                <!-- <script src="../../css/bootstrap.min.js"></script> -->
                <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin-2.min.js"></script>

                <!-- Page level plugins -->
                <script src="vendor/datatables/jquery.dataTables.min.js"></script>
                <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

                <!-- Page level custom scripts -->
                <!-- <script src="js/demo/datatables-demo.js"></script> -->
                <!-- patient view Javascript -->
                <script type="text/javascript" src="js/patient_JS/patient_view.js"></script>
</body>

</html>