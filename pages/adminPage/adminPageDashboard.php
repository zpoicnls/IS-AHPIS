<?php
include '../../includes/dbh.inc.php';
?>

<html lang="en">

<head>
    <?php include 'adminPageHeader.php' ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php

            include 'adminPageSidebar.php';
                
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                <!-- Topbar Navbar -->
                <?php

                    include 'adminPageTopbar.php';
                
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Total Number of Patients -->
                        <div class="col-xl-4 col-md-4 mb-2">
                            <div class="card text-white bg-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-white text-uppercase mb-1">
                                                Total Number of Employees</div>
                                            <div class="h5 mb-0 font-weight-bold text-white-800">
                                                <?php
                                                
                                                    $query = "SELECT COUNT(usersId) AS count FROM tbl_users";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo $row['count'];
                                                    }
                            
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-black-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Number of Male Patients -->
                        <div class="col-xl-4 col-md-4 mb-2">
                            <div class="card text-white bg-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-white text-uppercase mb-1">
                                                Male</div>
                                            <div class="h5 mb-0 font-weight-bold text-white-800">
                                                <?php
                                                    
                                                    $query = "SELECT COUNT(usersId) AS count FROM tbl_users WHERE usersGender = 'Male' && usersGender = 'male'";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo $row['count'];
                                                    }
                                                
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-male fa-2x text-black-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Number of Female Patients-->
                        <div class="col-xl-4 col-md-4 mb-2">
                            <div class="card text-white bg-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-white text-uppercase mb-1">
                                                Female</div>
                                            <div class="h5 mb-0 font-weight-bold text-white-800">
                                                <?php
                                                    
                                                    $query = "SELECT COUNT(usersId) AS count FROM tbl_users WHERE usersGender = 'Female' && usersGender = 'female'";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo $row['count'];
                                                    }
                                                
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-female fa-2x text-black-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Total Number of Kids -->
                        <div class="col-xl-4 col-md-4 mb-2">
                            <div class="card text-white bg-info shadow h-100 py-22">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-white text-uppercase mb-1">
                                                Physician</div>
                                            <div class="h5 mb-0 font-weight-bold text-white-800">
                                                <?php
                                                
                                                    $query = "SELECT COUNT(usersId) AS count FROM tbl_users WHERE usersType = 'Physician'";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo $row['count'];
                                                    }
                                                
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-md fa-2x text-black-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Number of Teens -->
                        <div class="col-xl-4 col-md-4 mb-2">
                            <div class="card text-white bg-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-white text-uppercase mb-1">
                                                Nurse</div>
                                            <div class="h5 mb-0 font-weight-bold text-white-800">
                                                <?php
                                                    
                                                    $query = "SELECT COUNT(usersId) AS count FROM tbl_users WHERE usersType = 'Nurse'";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo $row['count'];
                                                    }
                                                
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-female fa-2x text-black-300"></i>
                                            <i class="fas fa-medkit fa-2x text-black-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Number of Adult -->
                        <div class="col-xl-4 col-md-4 mb-2">
                            <div class="card text-white bg-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-white text-uppercase mb-1">
                                                Staff</div>
                                            <div class="h5 mb-0 font-weight-bold text-white-800">
                                                <?php
                                                    
                                                    $query = "SELECT COUNT(usersId) AS count FROM tbl_users WHERE usersType = 'Office Staff'";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo $row['count'];
                                                    }
                                                
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-male fa-2x text-black-300"></i>
                                            <i class="fas fa-female  fa-2x text-black-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- End of Main Content -->
                    <br><br><br><br><br><br><br><br>


                </div>
                <!-- End of Content Wrapper -->




            </div>
            <!-- End of Content Wrapper -->
            </br></br></br>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; PRASIS-RHU 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="adminLogoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                    </div>
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
        <script src="../../vendor/jquery/jquery.min.js"></script>
        <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../../js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="../../vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="../../js/demo/chart-area-demo.js"></script>
        <script src="../../js/demo/chart-pie-demo.js"></script>

</body>

</html>