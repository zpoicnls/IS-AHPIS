<?php
include 'db_connect.php';

$patientID = $_GET['var_patient'];
$sql = "SELECT  d.Diagnosis,d.year FROM diagnosis_tbl d join patient_tbl p on p.Patient_ID=d.Patient_ID where p.Patient_ID = '$patientID' ";
$query = $conn->query($sql); 

$Patientquery = "select CONCAT(fname,_utf8 ' ', middle_name, _utf8 ' ', lname) AS name,bday from patient_tbl where Patient_ID = '$patientID'";
$queryP = $conn->query($Patientquery);
$row = $queryP->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">
<link href="css/custom.min.css" rel="stylesheet" type="text/css">
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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Diagnosis Details</h1>
               <div class="title_right ">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group ">
                    <input type="text" name="valueToSearch"  class="form-control " placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-info" type="submit" name="search">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
                    <!-- DataTables -->
                     <div class="container my-4">

    <p class="font-weight-bold">Patient Name: <?php echo $row['name'];?></p>
    <p class="font-weight-bold">Date of Birth: <?php echo $row['bday'];?></p>
    <!--Section: Live preview-->
    <section>

      <div class="table-responsive text-nowrap">
        <!--Table-->
        <table class="table table-striped" >

          <!--Table head-->
          <thead>
            <tr class ="table-info table-success">
              <th>Date</th>
              <th>Diagnosis</th>
              
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
            
            <tr>
              <?php while ($row = $query->fetch_assoc()){;?>
                <td><?php echo $row['year'];?></td>
                <td><?php echo $row['Diagnosis'];?></td>
              <?php };  ?>
            </tr>
          </tbody>
          <!--Table body-->


        </table>
        <!--Table-->
      </div>
    </section>
    <!--Section: Live preview-->


  </div>

                </div>
                <!-- /.container-fluid -->

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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <a class="btn btn-primary" href="login.html">LogouT</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Remove patient modal confirmation -->
  <div class="modal fade" tabindex="-1" role="dialog" id="removeAccountModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Remove Patient</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
        </div>
        <div class="modal-body">
          <p>Do you really want to delete the details of this patient?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
          <button type="button" name="removeBtn" class="btn btn-secondary" id="removeBtn">Yes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- /remove modal -->


    <!-- edit PATIENT -->
<!-- edit modal -->
  <div class="modal fade" tabindex="-1" role="dialog" id="editAccountModal" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Patient Personal Information</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
        </div>
  
   <form class="form-horizontal" action="php_action/edit_patients.php" method="POST" id="updateRecordForm">
          

        <div class="modal-body">
            
        
           <div class="form-group">
                             <label for="update_fname">First Name</label>
                          
                             <input type="text" name="update_fname" id="update_fname"  class="form-control" onKeyPress="if(this.value.length==30) return false;" min="0" required autofocus>
                             
                             </div>

                             <div class="form-group">
                             <label for="update_mname">Middle Name</label>
                          
                             <input type="text" name="update_mname" id="update_mname"  class="form-control" onKeyPress="if(this.value.length==30) return false;" min="0" required autofocus>
                             
                             </div>

                             <div class="form-group">
                             <label for="update_lname">Last Name</label>
                          
                             <input type="text" name="update_lname" id="update_lname"  class="form-control" onKeyPress="if(this.value.length==30) return false;" min="0" required autofocus>
                             
                             </div>

                             <div class="form-group">
                             <label for="update_occupation">Occupation</label>
                          
                             <input type="text" name="update_occupation" id="update_occupation"  class="form-control" onKeyPress="if(this.value.length==30) return false;" min="0" required autofocus>
                             
                             </div>

                             <div class="form-group">
                             <label for="update_address">Address</label>
                          
                             <input type="text" name="update_address" id="update_address"  class="form-control" onKeyPress="if(this.value.length==30) return false;" min="0" required autofocus>
                             
                             </div>

                             <div class="form-group">
                             <label for="update_email">Email</label>
                          
                             <input type="email" name="update_email" id="update_email"  class="form-control" onKeyPress="if(this.value.length==30) return false;" min="0" required autofocus>
                             
                             </div>

                              <div class="form-group">
                             <label for="update_phone">Contact Number</label>
                          
                             <input type="text" name="update_phone" id="update_phone"  class="form-control" onKeyPress="if(this.value.length==30) return false;" min="0" required autofocus>
                             
                             </div>

                            <div class="form-group">
                             <label for="update_bday">Birthday</label>
                          
                             <input type="text" name="update_bday" id="update_bday"  class="form-control" onKeyPress="if(this.value.length==30) return false;" min="0" required autofocus>
                             
                             </div>


                             <div class="form-group">
                             <label for="update_age">Age</label>
                          
                             <input type="text" name="update_age" id="update_age"  class="form-control" onKeyPress="if(this.value.length==30) return false;" min="0" required autofocus>
                             
                             </div>

                              <div class="form-group">
                             <label for="update_gender">Gender</label>
                          
                               <select name="update_gender" id="update_gender"  class="form-control" required >
                                <option disabled="disabled">Select</option>
                             <option value="female">Female</option>
                             <option value="male">Male</option>
                             </select>
                             </div>
                           

  <div class="edit-messages">
  </div>

       
        </div>
        <div class="modal-footer editRecordModal">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- /edit modal patient -->


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
   
</body>

</html>