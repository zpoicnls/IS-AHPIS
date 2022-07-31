<?php
include 'db_connect.php';

$patientID = $_GET['var_patient'];
$diagnosisID = $_GET['var_diagnose'];

$sql1 = "SELECT Diagnosis,year,Diagnosis_ID FROM diagnosis_tbl d where Diagnosis_ID= '$diagnosisID' ";
$queryD = $conn->query($sql1); 
$rowD = $queryD->fetch_assoc();


$Patientquery = "select CONCAT(fname,_utf8 ' ', middle_name, _utf8 ' ', lname) AS name,bday,Patient_ID from patient_tbl where Patient_ID = '$patientID'";
$queryP = $conn->query($Patientquery);
$row = $queryP->fetch_assoc();

$diagquery = "SELECT  d.Diagnosis,d.year,d.Diagnosis_ID,pd.Patient_ID FROM diagnosis_tbl d join tbl_patient_diagnosis pd on pd.Diagnosis_ID=d.Diagnosis_ID where pd.Patient_ID = '$patientID'";
$querydiag = $conn->query($diagquery);
$row1 = $querydiag->fetch_assoc();


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

               
      <div class="col-sm-6">
        <form action="php_action/edit_diagnosis.php" method="POST" id="createRecordForm">
        <div class="panel panel-primary">
          <div class="panel-heading">
            Update Patient Diagnosis
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label for="diagnosis">
                Diagnosis
              </label>
              <input type="text"
                     class="form-control"
                     id="diagnosis" name="diagnosis" value="<?php echo $rowD['Diagnosis'] ?>" autofocus />
            </div>
            <div class="form-group">
              <label for="year">
                Date Diagnosed
              </label>
              <input type="date"
                     class="form-control"
                     id="year" name="year" value="<?php echo $rowD['year'] ?>" />
            </div>
            <div class="form-group">
              <input type="hidden"
                     class="form-control"
                     value="<?php echo $diagnosisID ?>"
                     id="diagnosisid" name="diagnosisid" />
            </div>
            <div class="form-group">
              <input type="hidden"
                     class="form-control"
                     value="<?php echo $patientID ?>"
                     id="patientid" name="patientid" />
            </div>
          </div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-xs-12">
                <button button type="submit" name="submit" id="submit" class="btn btn-success" 
                  >
                  Update
                </button>
                <a button type="cancel" name="cancel" id="cancel" class="btn btn-danger"  href ="diagnosis_mngmnt.php?var_patient=<?php echo $patientID; ?>" 
                  >
                  Cancel
                </a>
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
</body>

</html>