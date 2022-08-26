<?php
include '../../includes/dbh.inc.php';
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
                                                           echo "<p class='text-muted mb-0'>".$_SESSION['usersFName']." ".$_SESSION['usersMName']." ".$_SESSION['usersLName'].""."</p>";
                                                       }
                                                    ?>

                                                </div>
                                                <div class="col-sm-6">
                                                    <a href="#" data-mdb-toggle="modal"
                                                        data-mdb-target="#editUserProfileModal"><i>Edit Profile
                                                            Information</i></a>
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
                                                    <a href="#" data-mdb-toggle="modal"
                                                        data-mdb-target="#changePasswordModal"><i>Change User
                                                            Password</i></a>
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

        <!-- edit modal -->
        <div class="modal fade" id="editUserProfileModal" data-mdb-backdrop="static" data-mdb-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Update Profile Information</h5>
                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" action="../../includes/updateUserProfile.inc.php" method="POST"
                            id="updateUserProfile">
                            <!-- First Name Input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="usersFName" name="usersFName" class="form-control"
                                    value="<?php echo $_SESSION['usersFName'];?>" required />
                                <label class="form-label" for="usersFName">First Name</label>
                            </div>

                            <!-- Middle Name Input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="usersMName" name="usersMName" class="form-control"
                                    value="<?php echo $_SESSION['usersMName'];?>" required />
                                <label class=" form-label" for="usersMName">Middle Name</label>
                            </div>

                            <!-- Last Name Input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="usersLName" name="usersLName" class="form-control"
                                    value="<?php echo $_SESSION['usersLName'];?>" required />
                                <label class=" form-label" for="usersLName">Last Name</label>
                            </div>

                            <!-- Email Input-->
                            <div class="form-outline mb-4">
                                <input type="email" id="usersEmail" name="usersEmail" class="form-control"
                                    value="<?php echo $_SESSION['usersEmail'];?>" required />
                                <label class=" form-label" for="usersEmail">Email</label>
                            </div>

                            <!-- User ID Input-->
                            <div class="form-outline mb-4">
                                <input type="text" id="usersUid" name="usersUid" class="form-control"
                                    value="<?php echo $_SESSION['usersUid'];?>" required />
                                <label class=" form-label" for="usersUid">Username</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" name="update" class="btn btn-success btn-block">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Change Password Modal -->
        <div class="modal fade" id="changePasswordModal" data-mdb-backdrop="static" data-mdb-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Change Password</h5>
                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form class="form-horizontal" action="../../includes/changePassword.inc.php" method="POST"
                            id="updateUserProfile">
                            <!-- Enter Current Password -->
                            <div class="form-outline mb-4">
                                <input type="password" id="currentPassword" name="currentPassword" class="form-control"
                                    required />
                                <label class="form-label" for="currentPassword">Enter Current Password</label>
                            </div>

                            <!-- Enter New Password -->
                            <div class="form-outline mb-4">
                                <input type="password" id="newPassword" name="newPassword" class="form-control"
                                    required />
                                <label class="form-label" for="newPassword">Enter New Password Password</label>
                            </div>

                            <!-- Enter New Password Again -->
                            <div class="form-outline mb-4">
                                <input type="password" id="newPassword2" name="newPassword2" class="form-control"
                                    required />
                                <label class="form-label" for="newPassword2">Enter New Password Again</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" name="changePassword"
                                class="btn btn-success btn-block">Change</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../../vendor/jquery/jquery.min.js"></script>
        <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- MDB -->
        <script type="text/javascript" src="../../js/mdb.min.js"></script>

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