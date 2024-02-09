<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['superadmin_username']) && !isset($_COOKIE['superadmin_password'])) {
    header('location: ../super-admin_login.php');
    exit();
}

$_SESSION['previous_url'] = $_SERVER['REQUEST_URI'];
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
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $student_allocate_query = mysqli_query($conn, "SELECT * FROM `student_allocate`");
                                            if (mysqli_num_rows($student_allocate_query) > 0) {
                                                $i = 1;
                                                while ($std_alloc = mysqli_fetch_assoc($student_allocate_query)) {
                                                    $student_query = mysqli_query($conn, "SELECT * FROM `student` WHERE `id` = '{$std_alloc['student_id']}'");
                                                    if (mysqli_num_rows($student_query) > 0) {
                                                        $std = mysqli_fetch_assoc($student_query);
                                                        $trainer_alloc_query = mysqli_query($conn, "SELECT * FROM `allocate_trainer_course` WHERE `id` = '{$std_alloc['allocate_id']}'");
                                                        if (mysqli_num_rows($trainer_alloc_query) > 0) {
                                                            $id = $std_alloc['id'];
                                                            $tr = mysqli_fetch_assoc($trainer_alloc_query);
                                                            $trainer_query = mysqli_query($conn, "SELECT * FROM `trainer` WHERE `id` = '{$tr['trainer_id']}'");
                                                            if (mysqli_num_rows($trainer_query) > 0) {
                                                                $trainer = mysqli_fetch_assoc($trainer_query);
                                                                $course_query = mysqli_query($conn, "SELECT * FROM `course` WHERE `id` = '{$std_alloc['course_id']}'");
                                                                if (mysqli_num_rows($course_query) > 0) {
                                                                    $course = mysqli_fetch_assoc($course_query);
                                                                    echo "<tr>";
                                                                    echo "<td>" . $i++ . "</td>";
                                                                    echo "<td>" . $std_alloc['date'] . "</td>";
                                                                    echo "<td>STDALLOCID_" . $std_alloc['allocate_id'] . "</td>";
                                                                    echo "<td>STU_" . $std['id'] . "</td>";
                                                                    echo "<td>" . $std['college_name'] . "</td>";
                                                                    echo "<td>" . $std['name'] . "</td>";
                                                                    echo "<td>" . $course['course_name'] . "</td>";
                                                                    echo "<td>" . $trainer['name'] . "</td>";

                                                                    echo "</tr>";
                                                                } else {
                                                                    echo "No Course found";
                                                                }
                                                            } else {
                                                                echo "No Trainer found";
                                                            }
                                                        } else {
                                                            echo "No Trainer Allocated";
                                                        }
                                                    } else {
                                                        echo "No Student found";
                                                    }
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
    <!-- Container closed -->


    <?php include("./scripts.php"); ?>

</body>

</html>