<?php
    include '../../includes/dbh.inc.php';
    ?>

<html lang="en">

<head>
    <?php include 'physicianPageHeader.php'?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php

                        include 'physicianPageSidebar.php';
    ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">




                <!-- Topbar Navbar -->
                <?php

         include 'physicianPageTopbar.php';
                
    ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->


                    <!-- Submit button -->
                    <!-- Button trigger modal -->

                    <br>
                    <div class="container-fluid">
                        <h1>Hello Physician!</h1>
                    </div>

                    <!-- Logout Modal-->
                    <div class="modal fade" id="physicianLogoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Select "Logout" below if you are ready to end your current
                                    session.
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
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <?php include 'physicianPageFooter.php'; ?>
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

            <!-- Page level plugins -->
            <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

</body>

</html>