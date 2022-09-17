<?php
include 'db_connect.php';

$patientID = $_GET['var_patient'];


$Patientquery = "select CONCAT(fname,_utf8 ' ', middle_name, _utf8 ' ', lname) AS name,bday,Patient_ID from patient_tbl where Patient_ID = '$patientID'";
$queryP = $conn->query($Patientquery);
$row = $queryP->fetch_assoc();

$diagquery = "SELECT  d.Diagnosis,d.year,d.Diagnosis_ID,pd.Patient_ID FROM diagnosis_tbl d join tbl_patient_diagnosis pd on pd.Diagnosis_ID=d.Diagnosis_ID where pd.Patient_ID = '$patientID'";
$querydiag = $conn->query($diagquery);
$row1 = $querydiag->fetch_assoc();

//for search and paging

if($_POST)
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT  d.Diagnosis,d.year,d.Diagnosis_ID,pd.Patient_ID FROM diagnosis_tbl d join tbl_patient_diagnosis pd on pd.Diagnosis_ID=d.Diagnosis_ID where  CONCAT(`Diagnosis`, `year`) LIKE '%$valueToSearch%' ";
    $search_result = filterTable($query);
    
}
 else {


  
  /*for paging*/
  /*fetching data*/
 $sql="SELECT  d.Diagnosis,d.year,d.Diagnosis_ID,pd.Patient_ID FROM diagnosis_tbl d join tbl_patient_diagnosis pd on pd.Diagnosis_ID=d.Diagnosis_ID where pd.Patient_ID = '$patientID'";
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
   

    $query = "SELECT  d.Diagnosis,d.year,d.Diagnosis_ID,pd.Patient_ID FROM diagnosis_tbl d join tbl_patient_diagnosis pd on pd.Diagnosis_ID=d.Diagnosis_ID where pd.Patient_ID = '$patientID' limit $offset,$perpage";
    $search_result = filterTable($query);
  
}


function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "prasis");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}


 /*for paging*/
 $sql="SELECT  d.Diagnosis,d.year,d.Diagnosis_ID,pd.Patient_ID FROM diagnosis_tbl d join tbl_patient_diagnosis pd on pd.Diagnosis_ID=d.Diagnosis_ID where pd.Patient_ID = '$patientID'";
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

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Patient Details</h1>
                    <p class="font-weight-bold">Patient Name: <?php echo $row['name'];?></p>
                    <p class="font-weight-bold">Date of Birth: <?php echo $row['bday'];?></p>
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form action="diagnosis_mngmnt.php?var_patient= <?php echo $patientID; ?>" method="POST">
                            <div class="input-group ">
                                <input type="text" name="valueToSearch" class="form-control "
                                    placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-info" type="submit" name="search">Go!</button>
                                </span>
                            </div>
                    </div>
                    <a type="button" class="btn btn-success" title="Add New Diagnosis"
                        href="add_diagnosis_mngmnt.php?var_patient=<?php echo $patientID; ?>">Add New Diagnosis</a>
                    <!--Section: Live preview-->
                    <!-- DataTales Example -->

                    <table id="DiagnosisList" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Diagnosed Date</th>
                                <th>Diagnosis of patient</th>

                            </tr>
                        </thead>
                        <!--Table body-->
                        <tbody>


                            <?php while($row = mysqli_fetch_array($search_result)){;
              $action ='<div class="btn-group" role="group" >
  <a type="button" class="btn btn-secondary btn-info" title="Edit" href ="update_diagnosis_mngmnt.php?var_patient='.$row1['Patient_ID'].'&var_diagnose='.$row1['Diagnosis_ID'].'"><i class="fa fa-edit" aria-hidden="true" ></i></a>
  <a type="button" class="btn btn-secondary btn-danger" title="Remove" href ="delete_diagnosis_mngmnt.php?var_patient='.$row1['Patient_ID'].'&var_diagnose='.$row1['Diagnosis_ID'].'"><i class="fa fa-trash" aria-hidden="true" ></i></a>
    ';?>
                            <tr>
                                <td><?php echo $action;?></td>
                                <td><?php echo $row['year'];?></td>
                                <td><?php echo $row['Diagnosis'];?></td>

                            </tr>
                            <?php };  ?>


                        </tbody>
                        <!--Table body-->
                    </table>
                    </form>
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
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1 & var_patient=$patientID'><<</a> ";
   // get previous page num
   $prevpage = $currentpage - 1;
   // show < link to go back to 1 page
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage & var_patient=$patientID'><</a> ";
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
         echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x & var_patient=$patientID'>$x</a> ";
      } // end else
   } // end if 
} // end for
                 
// if not on last page, show forward and last page links        
if ($currentpage != $lastpage) {
   // get next page
   $nextpage = $currentpage + 1;
    // echo forward link for next page 
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage & var_patient=$patientID'>></a> ";
   // echo forward link for lastpage
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$lastpage & var_patient=$patientID'>>></a> ";
} // end if
/****** end build pagination links ******/



?>

                    </div>
                </div>



                <!-- /.container-fluid -->
                <div class="col-sm-6">
                    <form action="php_action/add_diagnosis.php" method="POST" id="createRecordForm">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Add Patient Diagnosis
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="diagnosis">
                                        Diagnosis
                                    </label>
                                    <input type="text" class="form-control" id="diagnosis" name="diagnosis" />
                                </div>
                                <div class="form-group">
                                    <label for="year">
                                        Date Diagnosed
                                    </label>
                                    <input type="date" class="form-control" id="year" name="year" />
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" value="<?php echo $patientID ?>"
                                        id="patientid" name="patientid" />
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <button button type="submit" name="submit" id="submit" class="btn btn-success"
                                            onclick="productUpdate();">
                                            Add
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include 'footer.php'; ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->



    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="staffLogoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>




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
    <script src="js/demo/datatables-demo.js"></script>
    <!-- patient view Javascript -->
    <!-- <script type="text/javascript" src="js/patient_JS/diagnosis_view.js"></script> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
    <script src="js/patient_JS/data.js"></script>
    c