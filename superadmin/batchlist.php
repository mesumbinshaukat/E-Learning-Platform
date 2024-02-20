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
    <title>Batch List</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">

    <?php include("./style.php"); ?>

</head>

<body class="ltr main-body app sidebar-mini">
    <?php
    include("./switcher.php");

    ?>

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
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Batch List</span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Courses</a></li>
                            <li class="breadcrumb-item ">Student batching</li>
                            <li class="breadcrumb-item ">List</li>
                        </ol>
                    </div>

                </div>
                <!-- <form method="post">
                    <div class="row row-sm">
                        <div class="form-group col-md-3">
                            <b> <label>Course Name</label> </b>

                            </select><select name="course_name" class="form-control form-select" data-bs-placeholder="Select Filter">
                               
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <b> <label>Trainer</label> </b>
                            <select name="trainer_name" class="form-control form-select" data-bs-placeholder="Select Filter">                              
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <P><b> Status</b> </p>
                            <select name="user_status" class="form-control form-select" data-bs-placeholder="Select Filter">
                               
                            </select>
                        </div>

                        &nbsp &nbsp <button type="submit" class="btn btn-primary" style="height:40px;width:100px;margin-top:35px">Search</button>
                      
                    </div>
                </form> -->

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
                                                <th class="border-bottom-0">Batch adding</th>
                                                <th class="border-bottom-0">Batch ID</th>
                                                <th class="border-bottom-0">Trainer name</th>
                                                <th class="border-bottom-0">Course name</th>

                                                <th class="border-bottom-0">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $select_query = "SELECT * FROM `batch`";
                                            $result = mysqli_query($conn, $select_query);
                                            if (mysqli_num_rows($result) > 0) {
                                                $i = 1;
                                                while ($data = mysqli_fetch_assoc($result)) {

                                                    echo "<tr>";
                                                    echo "<td>" . $i++ . "</td>";
                                                    echo "<td>" . $data['created_date'] . "</td>";
                                                    echo "<td>" . $data['id'] . "</td>";
                                                    echo "<td>" . $data['batchtrainer_name'] . "</td>";
                                                    echo "<td>" . $data['batchcourse_name'] . "</td>";
                                            ?>
                                            <td>
                                                <?php switch ($data['status']) {
                                                            case "Active":
                                                                echo "<span class='badge badge-primary'>Active</span>";
                                                                break;
                                                            case "Removed":
                                                                echo "<span class='badge badge-dark'>Inactive/Unallocated</span>";
                                                                break;
                                                            case "Completed":
                                                                echo "<span class='badge badge-success'>Completed</span>";
                                                                break;
                                                            case "Deleted":
                                                                echo "<span class='badge badge-danger'>Deleted</span>";
                                                                break;
                                                            default:
                                                                echo "<span class='badge badge-warning'>Pending</span>";
                                                        } ?>
                                            </td>
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
            </div>
        </div>

    </div>

    <?php include("./scripts.php"); ?>

</body>

</html>