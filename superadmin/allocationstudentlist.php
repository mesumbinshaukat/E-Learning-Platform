<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['superadmin_username']) && !isset($_COOKIE['superadmin_password'])) {
	header('location: ../super-admin_login.php');
	exit();
}
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <title>Student Allocation List</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">

    <?php include("./style.php"); ?>

</head>

<body class="ltr main-body app sidebar-mini">
    <?php include("./switcher.php"); ?>

    <!-- Page -->
    <div class="page">

        <div>

            <div class="main-header side-header sticky nav nav-item">

                <?php include('./partials/navbar.php'); ?>

            </div>
            <!-- /main-header -->

            <!-- main-sidebar -->
            <div class="sticky">
                <?php include('./partials/sidebar.php')?>
            </div>
            <!-- main-sidebar -->

        </div>
        <!-- main-content -->
        <div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">


                <div class="breadcrumb-header justify-content-between">
                    <div class="right-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Allocate Student List
                        </span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Courses</a></li>
                            <li class="breadcrumb-item ">Allocate</li>
                            <li class="breadcrumb-item ">Students </li>
                            <li class="breadcrumb-item ">List</li>
                        </ol>
                    </div>

                </div>
                <form method="post">
                    <div class="row row-sm">
                        <div class="form-group col-md-3">
                            <b> <label>College name</label> </b>
                            <select name="college_name" class="form-control form-select"
                                data-bs-placeholder="Select Filter">
                                <!-- College Name -->
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <b> <label>Trainer name</label> </b>
                            <select name="Trainer_Name" class="form-control form-select"
                                data-bs-placeholder="Select Filter">
                                <!-- Trainer Name -->
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <b> <label>Course name</label> </b>
                            <select name="course" class="form-control form-select" data-bs-placeholder="Select Filter">
                                <!-- Course -->
                            </select>
                        </div>


                        &nbsp &nbsp <button type="submit" class="btn btn-primary"
                            style="height:40px;width:100px;margin-top:35px">Search</button>

                    </div>
                </form>

                <br>
                <br>
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">

                                <div class="table-responsive  export-table">
                                    <table id="file-datatable"
                                        class="table table-bordered text-nowrap key-buttons border-bottom">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">S.No</th>
                                                <th class="border-bottom-0">Date of adding</th>
                                                <th class="border-bottom-0">allocate ID</th>
                                                <th class="border-bottom-0">Students ID</th>
                                                <th class="border-bottom-0">College Name</th>
                                                <th class="border-bottom-0">Student Name</th>
                                                <th class="border-bottom-0">Trainer name</th>
                                                <th class="border-bottom-0">Course name</th>
                                                <th class="border-bottom-0">status</th>




                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRALL_1</td>

                                                <td>TRSTU_2270</td>
                                                <td>Aditya degree college</td>
                                                <td>Undi Rohith</td>
                                                <td>demotrainer</td>

                                                <td>Voice process</td>

                                                <td style=color:#4aa02c> <b> Active <b></td>


                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->




            </div>
        </div>

    </div>
    <!-- Container closed -->


    <?php include("./scripts.php"); ?>

</body>

</html>