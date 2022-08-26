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

                <!-- Topbar -->

                <!-- Topbar Navbar -->
                <?php

                     include 'topbar.php';
                
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
                                                Total Number of Patients</div>
                                            <div class="h5 mb-0 font-weight-bold text-white-800">
                                                <?php
                                                
                                                    $query = "SELECT COUNT(Patient_ID) AS count FROM patient_tbl";
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
                                                    
                                                    $query = "SELECT COUNT(Patient_ID) AS count FROM patient_tbl WHERE gender = 'Male' && gender = 'male'";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo $row['count'];
                                                    }
                                                
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bed fa-2x text-black-300"></i>
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
                                                    
                                                    $query = "SELECT COUNT(Patient_ID) AS count FROM patient_tbl WHERE gender = 'Female' && gender = 'female'";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo $row['count'];
                                                    }
                                                
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bed fa-2x text-black-300"></i>
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
                                                Kids</div>
                                            <div class="h5 mb-0 font-weight-bold text-white-800">
                                                <?php
                                                
                                                    $query = "SELECT COUNT(Patient_ID) AS count FROM patient_tbl WHERE age < 13";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo $row['count'];
                                                    }
                                                
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-child fa-2x text-black-300"></i>
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
                                                Teens</div>
                                            <div class="h5 mb-0 font-weight-bold text-white-800">
                                                <?php
                                                    
                                                    $query = "SELECT COUNT(Patient_ID) AS count FROM patient_tbl WHERE age > 12 && age < 20";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo $row['count'];
                                                    }
                                                
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-male fa-2x text-black-300"></i>
                                            <i class="fas fa-female fa-2x text-black-300"></i>
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
                                                Adult</div>
                                            <div class="h5 mb-0 font-weight-bold text-white-800">
                                                <?php
                                                    
                                                    $query = "SELECT COUNT(Patient_ID) AS count FROM patient_tbl WHERE age > 19";
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
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


                </div>
                <!-- End of Content Wrapper -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
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
            <div class="modal fade" id="staffLogoutModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <a class="btn btn-primary" href="../../index.html">Logout</a>
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