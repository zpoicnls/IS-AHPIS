<?php
//include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php
include 'adminPageHeader.php';
?>


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
                <?php include 'adminPageTopbar.php';?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-2">
                            <h1 class="h3 mb-2 text-gray-800">Patient Records</h1>
                        </div>
                        <div class="col-lg-2">
                            <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target="#createNewPatientModal">
                                New Patient
                            </button>
                        </div>
                        <div class="col-lg-8"></div>
                    </div>
                    <br>

                    <!-- DataTales Example -->
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
                                            <th>Action</th>
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
            <?php include 'adminPageFooter.php'; ?>
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

    <!-- /create new patient modal-->

    <div class="modal fade" tabindex="-1" role="dialog" id="createNewPatientModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createNewPatientModal">Create New Patient</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">x</span></button>
                </div>

                <div class="">

                    <section class="page-section" id="patient_admission">

                        <form class="form-horizontal" action="php_action\create_patient.php" method="POST"
                            id="createRecordForm">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form6Example2">Last Name:</label>
                                    <input type="text" name="lname" id="form6Example2" class="form-control"
                                        required="required" />

                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form6Example1">First Name:</label>
                                    <input type="text" name="fname" id="form6Example1" class="form-control"
                                        required="required" autofocus />
                                </div>
                            </div>


                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example3">Middle Name:</label>
                        <input type="text" name="mname" id="form6Example3" class=" form-control" required="required" />
                    </div>
                </div>

                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example4">Occupation:</label>
                        <input type="text" name="occupation" id="form6Example4" class=" form-control"
                            required="required" />

                    </div>
                </div>

                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example5">Address:</label>
                        <input type="text" name="address" id="form6Example5" class="form-control" required="required" />

                    </div>
                </div>

                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example6">E-mail:</label>
                        <input type="email" name="email" id="form6Example6" class="form-control" required="required" />

                    </div>
                </div>

                <!-- Number input -->
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example7">Phone:</label>
                        <input type="number" name="phone" id="form6Example7" class="form-control" required="required" />

                    </div>
                </div>
                <!-- Date input -->
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example8">Birthday:</label>
                        <input type="date" id="form6Example8" name="bday" class="form-control" required="required" />

                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example6">Age:</label>
                        <input type="number" id="form6Example6" name="age" class="form-control" required="required" />

                    </div>
                </div>
                <!-- Gender -->
                <div class="col">
                    <div class="form-group">

                        <label for="gender">Gender:</label>
                        <select name="gender" id="gender" class="form-control" autofocus>
                            <option disabled="disabled" selected="selected">Select Gender</option>
                            <option>Female</option>
                            <option>Male</option>
                        </select>
                    </div>
                </div>
                <!-- Diagnosis  input -->
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example7">Diagnosis:</label>
                        <textarea class="form-control" name="diagnosis" id="diagnosis" rows="4"></textarea>

                    </div>
                </div>

                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example8">Date of Check-up:</label>
                        <input type="date" id="year" name="year" class="form-control" required="required" />

                    </div>
                </div>

                <!-- Submit button -->
                <div class="modal-footer">
                    <button type="submit" name="submit" id="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

                </form>

                </section>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Content Column -->
                <div class="col-lg-6 mb-4">



                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /create patient modal -->

    <!-- edit patient record -->
    <!-- edit modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="editRecordModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Patient Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">x</span></button>
                </div>

                <form class="form-horizontal" action="php_action/update_patients.php" method="POST"
                    id="updateRecordForm">


                    <div class="modal-body">


                        <div class="form-group">
                            <label for="update_fname">First Name</label>

                            <input type="text" name="update_fname" id="update_fname" class="form-control"
                                onKeyPress="if(this.value.length==30) return false;" min="0" required autofocus>

                        </div>

                        <div class="form-group">
                            <label for="update_mname">Middle Name</label>

                            <input type="text" name="update_mname" id="update_mname" class="form-control"
                                onKeyPress="if(this.value.length==30) return false;" min="0" required autofocus>

                        </div>

                        <div class="form-group">
                            <label for="update_lname">Last Name</label>

                            <input type="text" name="update_lname" id="update_lname" class="form-control"
                                onKeyPress="if(this.value.length==30) return false;" min="0" required autofocus>

                        </div>

                        <div class="form-group">
                            <label for="update_occupation">Occupation</label>

                            <input type="text" name="update_occupation" id="update_occupation" class="form-control"
                                onKeyPress="if(this.value.length==30) return false;" min="0" required autofocus>

                        </div>

                        <div class="form-group">
                            <label for="update_address">Address</label>

                            <input type="text" name="update_address" id="update_address" class="form-control"
                                onKeyPress="if(this.value.length==30) return false;" min="0" required autofocus>

                        </div>

                        <div class="form-group">
                            <label for="update_email">Email</label>

                            <input type="email" name="update_email" id="update_email" class="form-control"
                                onKeyPress="if(this.value.length==30) return false;" min="0" required autofocus>

                        </div>

                        <div class="form-group">
                            <label for="update_phone">Contact Number</label>

                            <input type="text" name="update_phone" id="update_phone" class="form-control"
                                onKeyPress="if(this.value.length==30) return false;" min="0" required autofocus>

                        </div>

                        <div class="form-group">
                            <label for="update_bday">Birthday</label>

                            <input type="text" name="update_bday" id="update_bday" class="form-control"
                                onKeyPress="if(this.value.length==30) return false;" min="0" required autofocus>

                        </div>


                        <div class="form-group">
                            <label for="update_age">Age</label>

                            <input type="text" name="update_age" id="update_age" class="form-control"
                                onKeyPress="if(this.value.length==30) return false;" min="0" required autofocus>

                        </div>

                        <div class="form-group">
                            <label for="update_gender">Gender</label>

                            <select name="update_gender" id="update_gender" class="form-control" required>

                                <option value="female">Female</option>
                                <option value="male">Male</option>
                            </select>
                        </div>


                        <div class="edit-messages">
                        </div>


                    </div>
                    <div class="modal-footer editRecordModal">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /edit modal patient -->

    <!-- delete patient -->
    <div class="modal fade" tabindex="-1" role="dialog" id="removeAccountModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Patient</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <p>Do you really want to delete this patient?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" name="removeBtn" class="btn btn-secondary" id="removeBtn">Yes</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- /delete patient -->

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

    <script type="text/javascript" src="../../js/admin_JS/admin_patientView.js"></script>
</body>

</html>