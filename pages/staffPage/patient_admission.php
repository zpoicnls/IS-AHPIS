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




                <!-- Topbar Navbar -->
                <?php

                     include 'topbar.php';
                
                    ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->


                    <div class="">

                        <section class="page-section" id="patient_admission">

                            <form action="php_action/admission_insert.php" method="POST" id="createRecordForm">
                                <!-- Page Heading -->
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-0 text-gray-800">Add new patient</h1>
                                    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-l btn-primary shadow-sm"><i
                                            class="fas fa-download fa-sm text-white-50"></i> Register</a> -->
                                    <button type="submit" name="submit" id="submit"
                                        class="btn btn-success">Register</button>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">

                                        <div class="form-group row">
                                            <div class="col-sm-2">
                                                <label for="date" class="form-label mt-4"><b>Date</b></label>
                                            </div>
                                            <div class="col-sm-4 mt-3">
                                                <input type="date" name="date" class="form-control" id="date"
                                                    aria-describedby="date" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-9">
                                        <label for="fullName" class="form-label mt-4"><b>Full Name</b></label>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="age" class="form-label mt-4"><b>Age</b></label>
                                    </div>
                                    <div class="col-sm-1">
                                        <label for="age" class="form-label mt-4"><b>Sex</b></label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <input type="text" name="lname" class="form-control" id="lname"
                                            aria-describedby="lastName" placeholder="Surname" required />
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" name="fname" class="form-control" id="fname"
                                            aria-describedby="firstName" placeholder="Given Name" required />
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" name="mname" class="form-control" id="mname"
                                            aria-describedby="middleName" placeholder="Middle Name" />
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" name="age" id="age"
                                            aria-describedby="age" placeholder="Age" required />
                                    </div>
                                    <div class="col-sm-1">
                                        <input type="text" name="gender" class="form-control" id="gender"
                                            aria-describedby="sex" placeholder="M or F" required />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <label for="fullName" class="form-label mt-4"><b>Address</b></label>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="age" class="form-label mt-4"><b>Email</b></label>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="age" class="form-label mt-4"><b>Contact #</b></label>
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="bday" class="form-label mt-4"><b>Date of Birth</b></label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="text" name="address" class="form-control" id="address"
                                            aria-describedby="address" placeholder="Complete Address" required />
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="email" name="email" class="form-control" id="email"
                                            aria-describedby="email" placeholder="Email Address" required />
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="text" name="phone" class="form-control" id="phone"
                                            aria-describedby="contact" placeholder="Cellphone #" required />
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="date" name="bday" class="form-control" id="bday"
                                            aria-describedby="dob" placeholder="Date of Birth" required />
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-sm-6">

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="bloodtype" class="form-label mt-4"><b>Blood Type</b></label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <input type="text" name="bloodtype" class="form-control" id="bloodtype"
                                                    aria-describedby="bloodtype" placeholder="Blood Type" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="weight" class="form-label mt-4"><b>Weight</b></label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <input type="text" name="weight" class="form-control" id="weight"
                                                    aria-describedby="weight" placeholder="kl" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="height" class="form-label mt-4"><b>Height</b></label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <input type="text" name="height" class="form-control" id="height"
                                                    aria-describedby="height" placeholder="height in CM" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="temperature"
                                                    class="form-label mt-4"><b>Temperature</b></label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <input type="text" name="temperature" class="form-control"
                                                    id="temperature" aria-describedby="temperature"
                                                    placeholder="Celcius" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="bp" class="form-label mt-4"><b>Blood
                                                        Pressure</b></label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <input type="text" name="blood" class="form-control" id="bp"
                                                    aria-describedby="bp" placeholder="Blood Pressure" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="hr" class="form-label mt-4"><b>HR</b></label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <input type="text" name="hr" class="form-control" id="hr"
                                                    aria-describedby="hr" placeholder="HR" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="rr" class="form-label mt-4"><b>RR</b></label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <input type="text" name="rr" class="form-control" id="rr"
                                                    aria-describedby="rr" placeholder="RR" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="chiefComplaint" class="form-label mt-4"><b>Chief
                                                        Complaint</b></label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <textarea class="form-control" name="chiefComplaint" id="chiefComplaint"
                                                    rows="3" placeholder="Chief Complaint"></textarea>

                                            </div>
                                        </div>

                                    </div>


                                    <div class="col-sm-6">

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="allergies" class="form-label mt-4"><b>Allergies</b></label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <input type="text" name="allergies" class="form-control" id="allergies"
                                                    aria-describedby="allergies" placeholder="Allergies" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="vital" class="form-label mt-4"><b>Vital
                                                        Signs</b></label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <input type="text" name="vital" class="form-control" id="vital"
                                                    aria-describedby="vital" placeholder="Vital Signs" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="subjective"
                                                    class="form-label mt-4"><b>Subjective</b></label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <input type="text" name="subjective" class="form-control"
                                                    id="subjective" aria-describedby="subjective"
                                                    placeholder="Subjective" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="objective" class="form-label mt-4"><b>Objective</b></label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <input type="text" name="objective" class="form-control" id="objective"
                                                    aria-describedby="objective" placeholder="Objective" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="diagnosis"
                                                    class="form-label mt-4"><b>Assessment/Diagnosis</b></label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <textarea class="form-control" name="diagnosis" id="diagnosis" rows="3"
                                                    placeholder="Assessment/Diagnosis"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="prescription"
                                                    class="form-label mt-4"><b>Prescription</b></label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <textarea class="form-control" name="prescription" id="prescription"
                                                    rows="3" placeholder="Prescription"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="plan" class="form-label mt-4"><b>Plan</b></label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <textarea class="form-control" name="plan" id="plan" rows="3"
                                                    placeholder="Plan"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="physician" class="form-label mt-4"><b>Pysician</b></label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <input type="text" name="physician" class="form-control" id="physician"
                                                    aria-describedby="physician" placeholder="Attending Physician" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group row">
                                            <div class="col-sm-4">
                                                <label for="specializaiton"
                                                    class="form-label mt-4"><b>Specialization</b></label>
                                            </div>
                                            <div class="col-sm-8 mt-3">
                                                <input type="text" name="specialization" class="form-control"
                                                    id="specializaiton" aria-describedby="specializaiton"
                                                    placeholder="Physician Specialization" />
                                            </div>
                                        </div>
                                    </div>
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
                    <?php include 'footer.php'; ?>
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