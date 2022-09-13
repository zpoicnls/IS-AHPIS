<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php
include 'header.php';
?>


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
                <?php include 'topbar.php';?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <section>
                        <div class="container py-4">
                            <a href="diagnosis_management.php" class="btn btn-primary">Back</a>
                        </div>
                    </section>

                    <section>
                        <div class="container py-4">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="card shadow mb-4" style="height:220px">
                                        <div class="card-body text-center">
                                            <img src="../../assets/img/undraw_profile.svg" alt="avatar"
                                                class="rounded-circle img-fluid" style="width: 150px;" />
                                            <a href="#">
                                                <h6 class="my-3"><i> Change Profile Image </i></h6>
                                            </a>
                                            <h3>
                                                <p class="mb-0">Juan Tamad</p>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="card shadow mb-4 bg-gradient-success" style="height:220px">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0" style="color:white;">Age</p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <?php
                                          // if (isset($_SESSION['usersUid'])) {
                                          //     echo "<p class='text-muted mb-0'>".$_SESSION['usersFName']." ".$_SESSION['usersMName']." ".$_SESSION['usersLName']."</p>";
                                          // }
                                      ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0" style="color:white;">Sex</p>
                                                </div>
                                                <div class="col-sm-9">
                                                    <?php
                                        //  if (isset($_SESSION['usersUid'])) {
                                        // echo "<p class='text-muted mb-0'>".$_SESSION['usersEmail']."</p>";
                                        // } 
                                        ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0" style="color:white;">Date of Birth</p>
                                                </div>
                                                <div class="col-sm-9">
                                                    <?php 
                                        // if (isset($_SESSION['usersUid'])) {
                                        //       echo "<p class='text-muted mb-0'>".$_SESSION['usersUid']."</p>";
                                        //       }
                                              ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0" style="color:white;">Contact #</p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <?php
                                          // if (isset($_SESSION['usersUid'])) {
                                          //     echo "<p class='text-muted mb-0' type='password'>".$_SESSION['usersPwd']."</p>";
                                          // }
                                      ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0" style="color:white;">Email</p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <?php
                                          // if (isset($_SESSION['usersUid'])) {
                                          //     echo "<p class='text-muted mb-0' type='password'>".$_SESSION['usersPwd']."</p>";
                                          // }
                                      ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <p class="mb-0" style="color:white;">Address</p>
                                                </div>
                                                <div class="col-sm-3">
                                                    <?php
                                          // if (isset($_SESSION['usersUid'])) {
                                          //     echo "<p class='text-muted mb-0' type='password'>".$_SESSION['usersPwd']."</p>";
                                          // }
                                      ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card shadow mb-4 bg-gradient-success" style="height:220px">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="mb-0" style="color:white;">Blood Type</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <?php
                                          // if (isset($_SESSION['usersUid'])) {
                                          //     echo "<p class='text-muted mb-0'>".$_SESSION['usersFName']." ".$_SESSION['usersMName']." ".$_SESSION['usersLName']."</p>";
                                          // }
                                      ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="mb-0" style="color:white;">Allergies</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <?php 
                                        // if (isset($_SESSION['usersUid'])) {
                                        // echo "<p class='text-muted mb-0'>".$_SESSION['usersEmail']."</p>";
                                        // }
                                        ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <p class="mb-0" style="color:white;">Last Visit</p>
                                                </div>
                                                <div class="col-sm-8">
                                                    <?php 
                                        // if (isset($_SESSION['usersUid'])) {
                                        //       echo "<p class='text-muted mb-0'>".$_SESSION['usersUid']."</p>";
                                        //       }
                                              ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section style="padding-left:85px; padding-right:85px;">
                        <div class="card shadow mb-4" style="height:700px">
                            <div class="card-body text-center">
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="weight" class="form-label mt-4">Date</label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <!-- Information goes here  -->

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="weight" class="form-label mt-4">Weight</label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <!-- Information goes here  -->

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="height" class="form-label mt-4">Height</label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <!-- Information goes here  -->

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="temperature" class="form-label mt-4">Temperature</label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                v
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="bp" class="form-label mt-4">Blood
                                                    Pressure</label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <!-- Information goes here  -->

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="hr" class="form-label mt-4">HR</label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <!-- Information goes here  -->

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="RR" class="form-label mt-4">RR</label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <!-- Information goes here  -->

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="cc" class="form-label mt-4">Chief
                                                    Complaint</label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <!-- Information goes here  -->


                                            </div>
                                        </div>

                                    </div>


                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="vs" class="form-label mt-4">Vital
                                                    Signs</label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <!-- Information goes here  -->

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="subj" class="form-label mt-4">Subjective</label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <!-- Information goes here  -->

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="obj" class="form-label mt-4">Objective</label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <!-- Information goes here  -->

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="diagnosis"
                                                    class="form-label mt-4">Assessment/Diagnosis</label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <!-- Information goes here  -->

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="prescription" class="form-label mt-4">Prescription</label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <!-- Information goes here  -->

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="physician" class="form-label mt-4">Attending
                                                    Physician</label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <!-- Information goes here  -->

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="specialization"
                                                    class="form-label mt-4">Specialization</label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <!-- Information goes here  -->

                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-8 mt-3">
                                                <!-- <button class="btn btn-primary btn-block">Register Check
                                                    Up</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- End of Main Content -->
                <!-- Footer -->
                <?php include 'footer.php'; ?>
                <!-- End of Footer -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>
                <!-- <script src="../../css/bootstrap.min.js"></script> -->
                <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin-2.min.js"></script>

                <!-- Page level plugins -->
                <script src="vendor/datatables/jquery.dataTables.min.js"></script>
                <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

                <!-- Page level custom scripts -->
                <!-- <script src="js/demo/datatables-demo.js"></script> -->
                <!-- patient view Javascript -->
                <script type="text/javascript" src="js/patient_JS/patient_view.js"></script>
</body>

</html>