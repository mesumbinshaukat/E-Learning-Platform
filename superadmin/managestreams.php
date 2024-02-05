<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['superadmin_username']) && !isset($_COOKIE['superadmin_password'])) {
	header('location: ../super-admin_login.php');
	exit();
}

$select_query = "SELECT * FROM `stream`";

$select_query_run = mysqli_query($conn, $select_query);

?>

<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">

    <?php include("./style.php"); ?>

</head>

<body class="ltr main-body app sidebar-mini">
    <?php include("./switcher.php")?>

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

        </div>
        <!-- main-content -->
        <div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">


                <div class="breadcrumb-header justify-content-between">
                    <div class="right-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Manage Streams </span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Credentials</a></li>
                            <li class="breadcrumb-item ">company</li>
                            <li class="breadcrumb-item ">Pending</li>
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
                                                <th class="border-bottom-0">date of adding</th>
                                                <th class="border-bottom-0">Stream ID</th>
                                                <th class="border-bottom-0">Category</th>
                                                <th class="border-bottom-0">Name</th>
                                                <th class="border-bottom-0">Available</th>
                                                <th class="border-bottom-0">update</th>
                                                <th class="border-bottom-0">Delete</th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											if (mysqli_num_rows($select_query_run) > 0) {

												while ($i = mysqli_fetch_assoc($select_query_run)) {


											?>
                                            <tr>
                                                <td><?php echo $i["id"] ?></td>
                                                <td><?php echo $i["date"] ?></td>
                                                <td>TRSTRM_<?php echo $i["id"] ?></td>
                                                <td><?php echo $i["stream_location"] ?></td>
                                                <td><?php echo $i["stream_name"] ?></td>
                                                <td>--</td>

                                                <td> <a href="updatestream.php?id=<?php echo $i["id"] ?>"
                                                        class="btn btn-info">update</a>
                                                </td>
                                                <td> <a class="btn btn-danger"
                                                        href="connection_files/manage/delete_stream.php?id=<?php echo $i["id"] ?>">delete</a>
                                                </td>

                                            </tr>
                                            <?php

												}
											}
											?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->




                <div class="modal fade" id="reject">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to Delete a stream?</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">Reject</button>
                                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>

    </div>
    <!-- Container closed -->


    <?php include("./scripts.php"); ?>
</body>

</html>