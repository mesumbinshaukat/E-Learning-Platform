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

    <title>Internship Registration List</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">

    <?php include("./style.php"); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
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
        </div> <!-- main-content -->
        <div class="main-content app-content">
            <!-- container -->
            <div class="main-container container-fluid">
                <div class="breadcrumb-header justify-content-between">
                    <div class="right-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Internship List</span>
                    </div>
                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Internship</a></li>
                            <li class="breadcrumb-item ">Registrations</li>
                            <li class="breadcrumb-item ">List</li>
                        </ol>
                    </div>
                </div>

                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div class="table-responsive export-table">
                                    <table id="file-datatable"
                                        class="table table-bordered text-nowrap key-buttons border-bottom">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">S.no</th>
                                                <th class="border-bottom-0">Date of Adding OR Applying</th>
                                                <th class="border-bottom-0">Role</th>
                                                <th class="border-bottom-0">Internship Applied ID</th>
                                                <th class="border-bottom-0">Student Name</th>
                                                <th class="border-bottom-0">Company Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$internship_list_query = mysqli_query($conn, "SELECT * FROM `internship_registration`");
											if (mysqli_num_rows($internship_list_query) > 0) {
												$i = 1;
												while ($row = mysqli_fetch_assoc($internship_list_query)) {
													$internship_query = mysqli_query($conn, "SELECT * FROM `internship` WHERE `id` = '{$row["internship_id"]}'");
													if (mysqli_num_rows($internship_query) > 0) {
														$student_query = mysqli_query($conn, "SELECT * FROM `student` WHERE `id` = '$row[student_id]'");
														$student = mysqli_fetch_assoc($student_query);
														if (mysqli_num_rows($student_query) > 0) {
															$internship = mysqli_fetch_assoc($internship_query);
															echo "<tr>";
															echo "<td>" . $i++ . "</td>";
															echo "<td>" . $row['applied_date'] . "</td>";
															echo "<td>" . $internship['internship'] . "</td>";
															echo "<td>INTID_" . $internship['id'] . "</td>";
															echo "<td>" . $student['name'] . "</td>";
															echo "<td>" . $internship['company_name'] . "</td>";
															echo "</tr>";
														}
													}
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

    </script>
    <?php include("./scripts.php"); ?>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#file-datatable').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true
        });
    });
    </script>
</body>

</html>