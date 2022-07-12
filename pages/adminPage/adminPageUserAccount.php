<?php
    include '../../includes/dbh.inc.php';
?>

<html lang="en">

<head>
    <?php include 'adminPageHeader.php'?>

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




                <!-- Topbar Navbar -->
                <?php

                     include 'adminPageTopbar.php';
                
                    ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->


                    <!-- Submit button -->
                    <!-- Button trigger modal -->








                    <?php
                            if (isset($_GET["error"])) {
                                if ($_GET["error"] == "usernametaken") {
                                    echo '<script language="javascript">';
                                    echo 'alert("User ID Aready Exists!s ")';
                                    echo '</script>';
                                }
                            }
                            if (isset($_GET["status"])) {
                                if ($_GET['status'] == 'success') {
                                    echo '<script language="javascript">';
                                    echo 'alert("Account created successfully.")';
                                    echo '</script>';
                                }
                            }
                        ?>

                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="row">
                            <div class="col-lg-2">
                                <h1 class="h3 mb-2 text-gray-800">User Accounts</h1>
                            </div>
                            <div class="col-lg-2">
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#createuserModal">
                                    Create User Account
                                </button>
                            </div>
                            <div class="col-lg-8"></div>
                        </div>
                        <br>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered  table-responsive content  table-hover "
                                        id="managetable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Middle Name</th>
                                                <th>E-mail</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Usertype</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" tabindex="-1" role="dialog" id="createuserModal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Create User Account</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">x</span></button>
                                    </div>

                                    <form class="form-horizontal" action="../../includes/createUsersAccount.inc.php"
                                        method="POST" id="updateRecordForm">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="usersLName">Last Name:</label>

                                                <input type="text" name="usersLName" id="usersLName"
                                                    class="form-control"
                                                    onKeyPress="if(this.value.length==30) return false;" min="0"
                                                    required autofocus>

                                            </div>

                                            <div class="form-group">
                                                <label for="usersFName">First Name:</label>

                                                <input type="text" name="usersFName" id="usersFName"
                                                    class="form-control"
                                                    onKeyPress="if(this.value.length==30) return false;" min="0"
                                                    required autofocus>

                                            </div>

                                            <div class="form-group">
                                                <label for="usersMName">Middle Name:</label>

                                                <input type="text" name="usersMName" id="usersMName"
                                                    class="form-control"
                                                    onKeyPress="if(this.value.length==30) return false;" min="0"
                                                    required autofocus>

                                            </div>

                                            <div class="form-group">
                                                <label for="usersEmail">Email:</label>

                                                <input type="text" name="usersEmail" id="usersEmail"
                                                    class="form-control"
                                                    onKeyPress="if(this.value.length==30) return false;" min="0"
                                                    required autofocus>

                                            </div>

                                            <div class="form-group">
                                                <label for="usersUid">Username:</label>

                                                <input type="text" name="usersUid" id="usersUid" class="form-control"
                                                    onKeyPress="if(this.value.length==30) return false;" min="0"
                                                    required autofocus>

                                            </div>

                                            <div class="form-group">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form6Example6">Password:</label>
                                                    <input type="password" name="usersPwd" id="form6Example6"
                                                        class="form-control" required="required" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="update_address">Type of User:</label>
                                                <br>
                                                <select class="form-select" name="usersType"
                                                    aria-label="Default select example">
                                                    <option selected>Select User Type</option>
                                                    <option value="Physician">Physician</option>
                                                    <option value="Nurse">Nurse</option>
                                                    <option value="Office Staff">Office Staff</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer editRecordModal">
                                            <button type="submit" name="submit" id="submit"
                                                class="btn btn-primary">Save</button>
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </form>

                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <!-- /edit modal patient -->


                    </div>


                    </section>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Content Column -->
                    <div class="col-lg-6 mb-4">


                    </div>
                    <!-- /.container-fluid -->
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
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

        <!-- edit User Account Modal -->
        <!-- edit modal -->
        <div class="modal fade" tabindex="-1" role="dialog" id="editUserAccountModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update User Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">x</span></button>
                    </div>

                    <form class="form-horizontal" action="php_action/update_user.php" method="POST"
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
                                <label for="update_email">Email</label>

                                <input type="text" name="update_email" id="update_email" class="form-control"
                                    onKeyPress="if(this.value.length==30) return false;" min="0" required autofocus>

                            </div>

                            <div class="form-group">
                                <label for="update_uname">Username</label>

                                <input type="text" name="update_uname" id="update_uname" class="form-control"
                                    onKeyPress="if(this.value.length==30) return false;" min="0" required autofocus>

                            </div>

                            <div class="form-group">
                                <label for="update_pword">Password</label>

                                <input type="text" name="update_pword" id="update_pword" class="form-control"
                                    onKeyPress="if(this.value.length==30) return false;" min="0" required autofocus>

                            </div>
                            <div class="edit-messages">
                            </div>
                        </div>
                        <div class="modal-footer editUserAccountModal">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- /edit modal user account -->

        <!-- Remove user account modal confirmation -->
        <div class="modal fade" tabindex="-1" role="dialog" id="removeUserAccountModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete User Account</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to delete this account?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                        <button type="button" name="removeBtn" class="btn btn-secondary" id="removeBtn">Yes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- /remove modal -->


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

        <script type="text/javascript" src="../../js/admin_JS/adminUser.js"></script>
</body>

</html>