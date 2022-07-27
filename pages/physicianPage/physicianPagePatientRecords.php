<?php
//include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php
include 'physicianPageHeader.php';
?>


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

                <!-- Topbar -->
                <?php include 'physicianPageTopbar.php';?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Patient Records</h1>

                    <!-- DataTables Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="managetable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Occupation</th>
                                            <th>Address</th>
                                            <th>E-mail</th>
                                            <th>Contact Number</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Diagnosis</th>
                                        </tr>
                                    </thead>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

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

    <!-- view patient diagnosis modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="viewDiagnosisModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewDiagnosisModalLabel">Patient Diagnosis</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">x</span></button>
                </div>

                <form class="form-horizontal" id="viewDiagnosisModal">
                    <div class="modal-body">

                        <div class="form-group">

                            <label for="view_diagnosis">Diagnosis:</label>
                            <textarea class="form-control" id="viewDiagnosisTextarea" readonly></textarea>
                        </div>

                        <div class="form-group">
                            <label for="diagnosis_year">Year:</label>
                            <input type="text" name="diagnosis_year" id="diagnosis_year" class="form-control" readonly>
                        </div>

                    </div>
            </div>
            <div class="modal-footer viewDiagnosisModal">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /view patient diagnosis -->


    <!-- Logout Modal-->
    <div class="modal fade" id="physicianLogoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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

    <script type="text/javascript" src="../../js/physician_JS/physician_patientview.js"></script>
</body>

</html>