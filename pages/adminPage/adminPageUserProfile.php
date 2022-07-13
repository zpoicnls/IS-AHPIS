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

                    <section style="background-color: #eee;">
                        <div class="container py-5">

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card mb-4">
                                        <div class="card-body text-center">
                                            <img src="../../assets/img/undraw_profile.svg" alt="avatar"
                                                class="rounded-circle img-fluid" style="width: 150px;">
                                            <a href="#">
                                                <h6 class='my-3'>Change Profile Image</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0">Full Name</p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <?php
                                                        if (isset($_SESSION['usersUid'])) {
                                                            echo "<p class='text-muted mb-0'>".$_SESSION['usersFName']." "
                                                            .$_SESSION['usersMName']." ".$_SESSION['usersLName']."</p>";
                                                        }
                                                    ?>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a href="#"><i>Edit Profile Information</i></a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0">Email Address</p>
                                                </div>
                                                <div class="col-sm-9">
                                                    <?php
                                                        if (isset($_SESSION['usersUid'])) {
                                                            echo "<p class='text-muted mb-0'>".$_SESSION['usersEmail']."</p>";
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0">Username</p>
                                                </div>
                                                <div class="col-sm-9">
                                                    <?php
                                                        if (isset($_SESSION['usersUid'])) {
                                                            echo "<p class='text-muted mb-0'>".$_SESSION['usersUid']."</p>";
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0">Password</p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <?php
                                                        if (isset($_SESSION['usersUid'])) {
                                                            echo "<p class='text-muted mb-0' type='password'>".$_SESSION['usersPwd']."</p>";
                                                        }
                                                    ?>
                                                </div>
                                                <div class="col-sm-3">
                                                    <a href="#"><i>Change Password</i></a>
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




            </div>
            <!-- End of Content Wrapper -->
            </br></br></br></br></br></br></br></br></br>
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