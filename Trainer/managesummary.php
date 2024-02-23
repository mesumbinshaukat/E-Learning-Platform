<?php
session_start();
include('../db_connection/connection.php');
if (!isset($_COOKIE['trainer_username']) && !isset($_COOKIE['trainer_password'])) {
    header('location: ../trainer_login.php');
    exit();
}
$_SESSION['previous_url'] = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">



<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">

    <!-- Title -->
    <title> Manage Summary </title>

    <?php
    include('./style.php');
    ?>

</head>

<body class="ltr main-body app sidebar-mini">

    <?php
    include('./switcher.php');
    ?>

    <!-- Page -->
    <div class="page">

        <div>

            <div class="main-header side-header sticky nav nav-item">
                <?php include('./partials/navbar.php') ?>
            </div>
            <!-- /main-header -->

            <!-- main-sidebar -->
            <div class="sticky">
                <?php include('./partials/sidebar.php') ?>
            </div>
            <!-- main-sidebar -->

        </div>

        <!-- main-content -->
        <!-- main-content -->
        <div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">


                <div class="breadcrumb-header justify-content-between">
                    <div class="right-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Manage Summary </span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">batches management</a>
                            </li>
                            <li class="breadcrumb-item ">Summary</li>
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
                                                <th class="border-bottom-0">Date of Summary</th>
                                                <th class="border-bottom-0">Performer of the day</th>
                                                <th class="border-bottom-0">Topics to be Covered </th>
                                                <th class="border-bottom-0">Overall Feedback</th>

                                                <th class="border-bottom-0">Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $meeting_query = mysqli_query($conn, "SELECT * FROM `batches_summary`");
                                            if (mysqli_num_rows($meeting_query) > 0) {
                                                $i = 1;
                                                while ($row = mysqli_fetch_assoc($meeting_query)) {

                                                    echo "<tr>";
                                                    echo "<td>" . $i++ . "</td>";
                                                    echo "<td>" . $row['date_of_summary'] . "</td>";
                                                    echo "<td>" . $row['performer_of_day'] . "</td>";
                                                    echo "<td>" . $row['topics_covered'] . "</td>";
                                                    echo "<td>" . $row['overall_feedback'] . "</td>";
                                                    echo "<td>
										<div class='col-sm-6 col-md-15 mg-t-10 mg-sm-t-0'>
											<button type='button' class='btn btn-info dropdown-toggle'
												data-bs-toggle='dropdown' aria-expanded='false'>
												<i class='fe fe-more-horizontal'></i>
											</button>

											<div class='dropdown-menu'>
												<a href='viewsummary.php?summary_id=" . $row['id'] . "' class='dropdown-item'>view</a>
												<a href='updatesummary.php?summary_id=" . $row['id'] . "'
													class='dropdown-item'>update</a>
												<a href='delete.php?summary_id=" . $row['id'] . "'
													class='dropdown-item'>Delete</a>
											</div>
										</div>
									</td>
									</tr>";
                                                }
                                            } else {

                                                echo "No Summary found";
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
    <!-- End Page -->

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

    <!-- JQUERY JS -->
    <?php
    include('./script.php');
    ?>


    <?php
    if (isset($_SESSION["success"]) && !empty($_SESSION["success"])) {
        echo "<script>toastr.success('" . $_SESSION["success"] . "')</script>";
    }
    if (isset($_SESSION["error"]) && !empty($_SESSION["error"])) {
        echo "<script>toastr.error('" . $_SESSION["error"] . "')</script>";
    }
    session_destroy();
    ?>

</body>

</html>