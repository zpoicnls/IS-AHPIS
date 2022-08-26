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

                            <form>
                                <!-- Page Heading -->
                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-0 text-gray-800">Add new patient</h1>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-l btn-primary shadow-sm"><i
                                            class="fas fa-download fa-sm text-white-50"></i> Register</a>
                                </div>
                                <fieldset>
                                    <div class="form-group row">
                                        <div class="col-sm-9">
                                            <label for="fullName" class="form-label mt-4">Full Name</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <label for="age" class="form-label mt-4">Age</label>
                                        </div>
                                        <div class="col-sm-1">
                                            <label for="age" class="form-label mt-4">Sex</label>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="lastName"
                                                aria-describedby="lastName" placeholder="Surname" />
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="lastName"
                                                aria-describedby="lastName" placeholder="Given Name" />
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" id="lastName"
                                                aria-describedby="lastName" placeholder="Middle Name" />
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="lastName"
                                                aria-describedby="lastName" placeholder="Age" />
                                        </div>
                                        <div class="col-sm-1">
                                            <input type="text" class="form-control" id="lastName"
                                                aria-describedby="lastName" placeholder="Age" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="fullName" class="form-label mt-4">Address</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <label for="age" class="form-label mt-4">Email</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <label for="age" class="form-label mt-4">Contact #</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <label for="age" class="form-label mt-4">Date of Birth</label>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="address"
                                                aria-describedby="address" placeholder="Complete Address" />
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="email" class="form-control" id="dob" aria-describedby="dob"
                                                placeholder="Email" />
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" class="form-control" id="dob" aria-describedby="dob"
                                                placeholder="Contact #" />
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="date" class="form-control" id="dob" aria-describedby="dob"
                                                placeholder="Date of Birth" />
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <div class="col-sm-6">

                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for="weight" class="form-label mt-4">Weight</label>
                                                </div>
                                                <div class="col-sm-8 mt-3">
                                                    <input type="text" class="form-control" id="weight"
                                                        aria-describedby="weight" placeholder="lbs" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for="height" class="form-label mt-4">Height</label>
                                                </div>
                                                <div class="col-sm-8 mt-3">
                                                    <input type="text" class="form-control" id="height"
                                                        aria-describedby="height" placeholder="ft" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for="temperature" class="form-label mt-4">Temperature</label>
                                                </div>
                                                <div class="col-sm-8 mt-3">
                                                    <input type="text" class="form-control" id="temperature"
                                                        aria-describedby="temperature" placeholder="Celcius" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for="temperature" class="form-label mt-4">Blood
                                                        Pressure</label>
                                                </div>
                                                <div class="col-sm-8 mt-3">
                                                    <input type="text" class="form-control" id="temperature"
                                                        aria-describedby="temperature" placeholder="Blood Pressure" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for="temperature" class="form-label mt-4">HR</label>
                                                </div>
                                                <div class="col-sm-8 mt-3">
                                                    <input type="text" class="form-control" id="temperature"
                                                        aria-describedby="temperature" placeholder="HR" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for="temperature" class="form-label mt-4">RR</label>
                                                </div>
                                                <div class="col-sm-8 mt-3">
                                                    <input type="text" class="form-control" id="temperature"
                                                        aria-describedby="temperature" placeholder="RR" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for="temperature" class="form-label mt-4">Chief
                                                        Complaint</label>
                                                </div>
                                                <div class="col-sm-8 mt-3">
                                                    <textarea class="form-control" id="exampleTextarea" rows="3"
                                                        placeholder="Chief Complaint"></textarea>

                                                </div>
                                            </div>

                                        </div>


                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for="weight" class="form-label mt-4">Vital Signs</label>
                                                </div>
                                                <div class="col-sm-8 mt-3">
                                                    <input type="text" class="form-control" id="weight"
                                                        aria-describedby="weight" placeholder="Vital Signs" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for="height" class="form-label mt-4">Subjective</label>
                                                </div>
                                                <div class="col-sm-8 mt-3">
                                                    <input type="text" class="form-control" id="height"
                                                        aria-describedby="height" placeholder="Subjective" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for="temperature" class="form-label mt-4">Objective</label>
                                                </div>
                                                <div class="col-sm-8 mt-3">
                                                    <input type="text" class="form-control" id="temperature"
                                                        aria-describedby="temperature" placeholder="Objective" />
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for="temperature"
                                                        class="form-label mt-4">Assessment/Diagnosis</label>
                                                </div>
                                                <div class="col-sm-8 mt-3">
                                                    <textarea class="form-control" id="exampleTextarea" rows="3"
                                                        placeholder="Assessment/Diagnosis"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4">
                                                    <label for="temperature" class="form-label mt-4">Plan</label>
                                                </div>
                                                <div class="col-sm-8 mt-3">
                                                    <textarea class="form-control" id="exampleTextarea" rows="3"
                                                        placeholder="Plan"></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </fieldset>
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