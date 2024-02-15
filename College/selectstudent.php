<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['college_username']) && !isset($_COOKIE['college_password'])) {
	header('location: ../college_login.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Select Student</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">
    <?php include("./style.php") ?>
</head>

<body class="ltr main-body app sidebar-mini">


    <!-- Page -->
    <div class="page">

        <div>

            <div class="main-header side-header sticky nav nav-item">
                <?php include("./partials/navbar.php") ?>
            </div>
            <!-- /main-header -->

            <!-- main-sidebar -->
            <!-- main-sidebar -->
            <div class="sticky">
                <?php include("./partials/sidebar.php"); ?>
            </div>
            <!-- main-sidebar -->

        </div>
        <!-- main-sidebar -->

    </div>

    <!-- main-content -->
    <div class="main-content app-content">

        <!-- container -->
        <div class="main-container container-fluid">


            <div class="breadcrumb-header justify-content-between">
                <div class="right-content">
                    <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Registration Allocation
                    </span>
                </div>

                <div class="justify-content-center mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Courses</a></li>
                        <li class="breadcrumb-item ">registration</li>
                        <li class="breadcrumb-item ">add</li>
                    </ol>
                </div>

            </div>

            <br>
            <br>
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
                                            <th class="border-bottom-0">S.no</th>
                                            <th class="border-bottom-0">date of adding</th>
                                            <th class="border-bottom-0">ID No</th>
                                            <th class="border-bottom-0">Author</th>
                                            <th class="border-bottom-0">Student name</th>
                                            <th class="border-bottom-0">College</th>
                                            <th class="border-bottom-0">stream</th>
                                            <th class="border-bottom-0">District</th>
                                            <th class="border-bottom-0">View Profile</th>
                                            <th class="border-bottom-0">Allocate</th>



                                        </tr>
                                    </thead>
                                    <tbody>

                                        ?>

                                        <tr>
                                            <td>1</td>
                                            <td>2023-10-03 15:32:21</td>
                                            <td>TRSTU_5020</td>
                                            <td>Neha banu</td>
                                            <td>Neha banu</td>
                                            <td></td>
                                            <td>Kadiri</td>
                                            <td>Sri sathya sai</td>
                                            <td><a href="https://triaright.com/College/studentprofile.php?id=5020"
                                                    class="btn-info btn">view</a> </td>

                                            <td>
                                                <a href="https://triaright.com/College/alloc_student.php?crid=5&amp;id=5020"
                                                    class="btn-info btn">allocate</a>
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


            <div class="modal fade" id="allocate">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                class="btn-close" data-bs-dismiss="modal" type="button"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">

                            <p> Are you sure you want to allocate a student??</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn ripple btn-success" type="button">allocate</button>
                            <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="allocate">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                class="btn-close" data-bs-dismiss="modal" type="button"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">

                            <p> Are you sure you want to delete a student??</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn ripple btn-success" type="button">allocate</button>
                            <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                Now</button>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>


    <!-- BACK-TO-TOP -->
    <a href="selectstudent.php@crid=5.html#top" id="back-to-top"><i class="las la-arrow-up"></i></a>
    <?php include("./script.php"); ?>
</body>

</html>