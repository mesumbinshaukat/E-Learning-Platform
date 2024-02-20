<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['superadmin_username']) && !isset($_COOKIE['superadmin_password'])) {
    header('location: ../super-admin_login.php');
    exit();
}

// Store the current URL in the session
$_SESSION['previous_url'] = $_SERVER['REQUEST_URI'];
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <title>Manage Course</title>
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
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Manage Courses </span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Courses</a></li>
                            <li class="breadcrumb-item ">Manage</li>
                            <li class="breadcrumb-item ">Courses</li>
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
                                                <th class="border-bottom-0">Date of adding</th>

                                                <th class="border-bottom-0">Course ID</th>
                                                <th class="border-bottom-0">Course name</th>
                                                <th class="border-bottom-0">Category</th>
                                                <th class="border-bottom-0"> Final price</th>
                                                <th class="border-bottom-0">Duration(Days)</th>
                                                <th class="border-bottom-0">Actions</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $course_query = mysqli_query($conn, "SELECT * FROM `course`");
                                            if (mysqli_num_rows($course_query) > 0) {
                                                $i = 1;
                                                while ($row = mysqli_fetch_assoc($course_query)) {

                                                    echo "<tr>";
                                                    echo "<td>" . $i++ . "</td>";
                                                    echo "<td>" . $row['creation_date'] . "</td>";
                                                    echo "<td>CRID_" . $row['id'] . "</td>";
                                                    echo "<td>" . $row['course_name'] . "</td>";
                                                    echo "<td>" . $row['course_category_name'] . "</td>";
                                                    echo "<td>" . $row['final_cost'] . "</td>";
                                                    echo "<td>" . $row['duration_days'] . "</td>";
                                                    echo "<td>
                                                    <div class='col-sm-6 col-md-15 mg-t-10 mg-sm-t-0'>
                                                        <button type='button' class='btn btn-info dropdown-toggle'
                                                            data-bs-toggle='dropdown' aria-expanded='false'>
                                                            <i class='bi bi-three-dots'></i>
                                                        </button>

                                                        <div class='dropdown-menu'>
                                                            <a href='viewcourse.php?id=" . $row['id'] . "' class='dropdown-item'>view</a>
                                                            <a href='updatecourse.php?id=" . $row['id'] . "'
                                                                class='dropdown-item'>update</a>
                                                            
                                                            <a href='delete.php?id=" . $row['id'] . "&type=course'
                                                                class='dropdown-item'>Delete</a>


                                                        </div>
                                                    </div>
                                                </td>";
                                                }
                                            } else {
                                                echo "No data found";
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

    <?php
    if (isset($_SESSION["success"]) && !empty($_SESSION["success"])) {
        echo "<script>toastr.success('" . $_SESSION["success"] . "')</script>";
    } else if (isset($_SESSION["error"]) && !empty($_SESSION["error"])) {
        echo "<script>toastr.error('" . $_SESSION["error"] . "')</script>";
    }
    session_destroy();
    ?>

</body>

</html>