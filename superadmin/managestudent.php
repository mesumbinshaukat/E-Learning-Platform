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
    <title>Manage Student</title>
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
                <?php include('./partials/sidebar.php') ?>
            </div>
            <!-- main-sidebar -->

        </div> <!-- main-content -->
        <div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">


                <div class="breadcrumb-header justify-content-between">
                    <div class="right-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Manage Student</span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Credentials</a></li>
                            <li class="breadcrumb-item ">Student</li>
                            <li class="breadcrumb-item ">Manage</li>


                        </ol>
                    </div>
                </div>

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
                                                <th class="border-bottom-0">ID No</th>
                                                <th class="border-bottom-0">Student name</th>
                                                <th class="border-bottom-0">College</th>
                                                <th class="border-bottom-0">Internship Term</th>
                                                <th class="border-bottom-0">Username</th>
                                                <th class="border-bottom-0">Password</th>
                                                <th class="border-bottom-0">Phone No</th>
                                                <th class="border-bottom-0">Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>


                                            <tr>

                                                <td>1</td>
                                                <td>TRSTU_2</td>
                                                <td>GONDELA MEENA</td>
                                                <td> GNR Degree College</td>
                                                <td>long_term</td>

                                                <td>GONDELA MEENA</td>
                                                <td>12345678</td>
                                                <td>8341087923</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>

                                                        <div class="dropdown-menu">
                                                            <a href="viewstudent.php?id=2"
                                                                class="dropdown-item">view</a>
                                                            <a href="updatestudent.php?id=2&page=manage"
                                                                class="dropdown-item">update</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/student_manage.php?id=2&delete=delete">delete</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/student_manage.php?id=2&block=block">block</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/student_manage.php?id=2&unblock=unblock">unblock</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
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
        <!-- End Page -->
        <?php include("./scripts.php"); ?>
</body>

</html>