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
    <title>Inbox</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">

    <?php include("./style.php"); ?>
    <!-- Add DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    <style>
    /* Custom Pagination Styles */
    .dataTables_paginate {
        text-align: center;
        margin-top: 20px;
    }

    .paginate_button {
        cursor: pointer;
        margin: 0 5px;
        padding: 5px 10px;
        border: 1px solid #ddd;
        background-color: #fff;
        color: #333;
        border-radius: 3px;
        transition: background-color 0.3s ease;
    }

    .paginate_button:hover {
        background-color: #eee;
    }

    .paginate_button.current {
        background-color: #007bff;
        color: #fff;
        border: 1px solid #007bff;
    }
    </style>
</head>

<body class="ltr main-body app sidebar-mini">

    <?php include("./switcher.php") ?>

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
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Inbox</span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Inbox</a></li>
                            <li class="breadcrumb-item">Chats</li>
                            <li class="breadcrumb-item">Inbox</li>
                        </ol>
                    </div>
                </div>

                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div class="table-responsive export-table">
                                    <table id="file-datatable" class="table table-bordered text-nowrap key-buttons">
                                        <thead>
                                            <tr>
                                                <th>S.no</th>
                                                <th>Login type</th>
                                                <th>User id</th>
                                                <th>Username</th>
                                                <th>Subject</th>
                                                <th>Purpose</th>
                                                <th>Description</th>
                                                <th>Attachment</th>
                                                <th>Reply</th>
                                                <th>Date and time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$query = mysqli_query($conn, "SELECT * FROM `mail`");
											if (mysqli_num_rows($query) > 0) {
												$i = 1;
												while ($row = mysqli_fetch_assoc($query)) {
											?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row['sender_type']; ?></td>
                                                <td><?php echo $row['sender_id']; ?></td>
                                                <td><?php echo $row['sender_name']; ?></td>
                                                <td><?php echo $row['subject']; ?></td>
                                                <td><?php echo $row['purpose']; ?></td>
                                                <td><?php echo $row['message']; ?></td>
                                                <td>
                                                    <a download="" target="_blank"
                                                        href="./assets/docs/attachments/<?php echo $row['attachment']; ?>"
                                                        class="btn btn-info">Download</a>
                                                </td>
                                                <?php
														if ($row["sender_type"] === "Admin") {
														?>
                                                <td><button class="btn btn-info" disabled>You Are The Sender</button>
                                                </td>
                                                <?php
														} else {
															if (!empty($row["reply_staus"])) {
															?>
                                                <td><a class="btn btn-info">Reply</a></td>
                                                <?php
															} else {
															?>
                                                <td><a class="btn btn-info">Replied</a></td>
                                                <?php
															}
														}
														?>
                                                <td><?php echo $row['sending_date']; ?></td>
                                            </tr>
                                            <?php
													$i++;
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

            </div>
        </div>

    </div>

    <?php include("./scripts.php"); ?>
    <!-- Add DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#file-datatable').DataTable({
            paging: true,
            lengthChange: false,
            searching: false,
            ordering: true,
            info: false,
            autoWidth: false,
        });
    });
    </script>
</body>

</html>