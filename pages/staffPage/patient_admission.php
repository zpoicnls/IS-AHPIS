<?php
include 'db_connect.php';
?>

<html lang="en">

<head>

   <?php include 'header.php' ?>

</head>

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

                


                    <!-- Topbar Navbar -->
                    <?php

                     include 'topbar.php';
                
                    ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add new patient</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                   

                    <div class="">

                        <section class="page-section" id="patient_admission">
                           
                              <form class="form-horizontal" action="PHP_Action/admission_insert.php" method="POST" id="createRecordForm">
  <!-- 2 column grid layout with text inputs for the first and last names -->
                   
                     <div class="col">
                        <div class="form-outline">
                           <input type="text" name="fname" id="form6Example1" class="form-control" required="required" autofocus />
                           <label class="form-label" for="form6Example1">First name</label>
                        </div>
                     </div>
                   
                        <div class="col">
                        <div class="form-outline">
                            <input type="text" name="lname" id="form6Example2" class="form-control" required="required" />
                            <label class="form-label" for="form6Example2">Last name</label>
                        </div>
                     </div>
                     <div class="col">
                        <div class="form-outline">
                            <input type="text" name="mname" id="form6Example3" class=" form-control" required="required" />
                            <label class="form-label" for="form6Example3">Middle name</label>
                        </div>
                     </div>

                    <div class="col">
                     <div class="form-outline">
                        <input type="text" name="occupation" id="form6Example4" class=" form-control" required="required" />
                        <label class="form-label" for="form6Example4">Occupation</label>
                     </div>
                    </div>

                    <div class="col">
                      <div class="form-outline">
                         <input type="text" name="address" id="form6Example5" class="form-control" required="required" />
                         <label class="form-label" for="form6Example5">Address</label>
                     </div>
                    </div>

                    <div class="col">
                      <div class="form-outline">
                         <input type="email" name="email" id="form6Example6" class="form-control" required="required" />
                         <label class="form-label" for="form6Example6">E-mail</label>
                      </div>  
                    </div> 

                <!-- Number input -->
                   <div class="col">
                    <div class="form-outline">
                        <input type="number" name="phone" id="form6Example7" class="form-control" required="required" />
                        <label class="form-label" for="form6Example7">Phone</label>
                    </div>
                   </div>
                <!-- Date input -->
                   <div class="col">
                    <div class="form-outline">
                        <input type="date" id="form6Example8" name="bday" class="form-control" required="required" />
                        <label class="form-label" for="form6Example8">Birthday</label>
                    </div>
                   </div>
                   <div class="col">
                    <div class="form-outline">
                        <input type="number" id="form6Example6" name="age" class="form-control" required="required" />
                        <label class="form-label" for="form6Example6">Age</label>
                    </div>
                  </div>
                 <!-- Gender -->
                 <div class="col">
                    <div class="form-group">
                    <select name="gender" id="gender" class="form-control"  autofocus>
                    <option disabled="disabled" selected="selected">Please Select</option>
                    <option>Female</option>
                    <option>Male</option>
                          </select>
                    <label for="gender">Gender</label>
                </div>
                </div>
                    <!-- Diagnosis  input -->
                <div class="col">
                    <div class="form-outline">
                        <textarea class="form-control" name="diagnosis" id="diagnosis" rows="4"></textarea>
                        <label class="form-label" for="form6Example7">Diagnosis</label>
                     </div>
              </div>

              <div class="col">
                    <div class="form-outline">
                        <input type="date" id="year" name="year" class="form-control" required="required" />
                        <label class="form-label" for="form6Example8">Date of Check-up</label>
                    </div>
                   </div>

                 <!-- Submit button -->
                 <div class="modal-footer">
                    <button type="submit" name="submit" id="submit" class="btn btn-success" >Add Record</button>
                </div>   
                
           </form>  
                              
                    </section>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                           

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
                    <?php
                      if (isset($_SESSION['usersUid'])) {
                        echo "<a class='btn btn-primary' href='../../includes/logout.inc.php'>Logout</a>";
                      }
                    ?>
                    
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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>