<?php
    include '../../includes/dbh.inc.php';
?>

<html lang="en">

<head>
   <?php include '../../includes/adminPage/adminPageHeader.php' ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
                <?php

                    include '../../includes/adminPage/adminPageSidebar.php';
                ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                


                    <!-- Topbar Navbar -->
                    <?php

                     include '../../includes/adminPage/adminPageTopbar.php';
                
                    ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Create User Account</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                   

                    <div class="">

                        <section class="page-section" id="patient_admission">
                           
                              <form class="form-horizontal" action="../../includes/createUsersAccount.inc.php" method="POST" id="createRecordForm">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                   
                     <div class="col">
                        <div class="form-outline">
                           <input type="text" name="usersLName" id="form6Example1" class="form-control" required="required" autofocus />
                           <label class="form-label" for="form6Example1">Last Name</label>
                        </div>
                     </div>
                   
                        <div class="col">
                        <div class="form-outline">
                            <input type="text" name="usersFName" id="form6Example2" class="form-control" required="required" />
                            <label class="form-label" for="form6Example2">First Name</label>
                        </div>
                     </div>
                     <div class="col">
                        <div class="form-outline">
                            <input type="text" name="usersMName" id="form6Example3" class=" form-control" />
                            <label class="form-label" for="form6Example3">Middle Name</label>
                        </div>
                     </div>

                    <div class="col">
                     <div class="form-outline">
                        <input type="email " name="usersEmail" id="form6Example4" class=" form-control" required="required" />
                        <label class="form-label" for="form6Example4">Email</label>
                     </div>
                    </div>

                    <div class="col">
                      <div class="form-outline">
                         <input type="text" name="usersUid" id="form6Example5" class="form-control" required="required" />
                         <label class="form-label" for="form6Example5">Username</label>
                     </div>
                    </div>

                    <div class="col">
                      <div class="form-outline">
                         <input type="password" name="usersPwd" id="form6Example6" class="form-control" required="required" />
                         <label class="form-label" for="form6Example6">Password</label>
                      </div>  
                    </div> 

                    <div class="col">
                        <div class="form-outline">
                            <select id="form6Example7" name="usersType">
                                <option value="Physician">Physician</option>
                                <option value="Nurse">Nurse</option>
                                <option value="Office Staff">Office Staff</option>
                            </select>
                            <label for="form7Example7">User Type</label>
                        </div>
                    </div>

                 <!-- Submit button -->
                 <div class="modal-footer">
                    <button type="submit" name="submit" id="submit" class="btn btn-success" >Create Account</button>
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
            <?php include '../../includes/adminPage/adminPageFooter.php'; ?>
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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>