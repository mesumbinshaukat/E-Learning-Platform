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
    <title>Manage Certification </title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">

    <?php include("./style.php"); ?>

</head>

<body class="ltr main-body app sidebar-mini">

    <?php
    include("./switcher.php")

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
                <?php include('./partials/sidebar.php'); ?>
            </div>
            <!-- main-sidebar -->

        </div>
        <!-- main-content -->
        <div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">


                <div class="breadcrumb-header justify-content-between">
                    <div class="right-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Certification
                            Manage</span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">batches management</a>
                            </li>
                            <li class="breadcrumb-item ">Certification</li>
                            <li class="breadcrumb-item ">Manage</li>
                        </ol>
                    </div>

                </div>
                <form method="post">
                    <div class="row row-sm">

                        <div class="form-group col-md-3">
                            <b> <label>Course name</label> </b>

                            <select name="course_name" class="form-control form-select"
                                data-bs-placeholder="Select Filter">

                                <option value="" selected="selected">ALL</option>
                                <?php
                                $query = "SELECT DISTINCT `course_name`,`course_id` FROM `certificate`";
                                $result = mysqli_query($conn, $query);

                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <option value="<?= $row['course_id'] ?>"><?= $row['course_name'] ?>
                                </option>
                                <?php
                                }
                                ?>

                            </select>
                        </div>

                        &nbsp &nbsp <button type="submit" class="btn btn-primary" name="search"
                            style="height:40px;width:100px;margin-top:35px" value="search">Search</button>
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
                                                <th class="border-bottom-0">S.no</th>
                                                <th class="border-bottom-0">Student ID</th>
                                                <th class="border-bottom-0">Student Name</th>
                                                <th class="border-bottom-0">Course Name</th>
                                                <th class="border-bottom-0">Course Id</th>
                                                <th class="border-bottom-0">View students</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $certificate = "SELECT * FROM `certificate` WHERE 1=1";

                                            if (isset($_POST["course_name"]) && !empty($_POST["course_name"])) {
                                                $certificate .= " AND `course_id` = '" . $_POST["course_name"] . "'";
                                            }
                                            $run_certificate = mysqli_query($conn, $certificate);
                                            if (mysqli_num_rows($run_certificate) > 0) {
                                                $i = 1;
                                                while ($row = mysqli_fetch_array($run_certificate)) {

                                                    echo "<tr>";
                                                    echo "<td>" . $i . "</td>";
                                                    echo "<td>STID_" . $row['student_id'] . "</td>";
                                                    echo "<td>" . $row['student_name'] . "</td>";
                                                    $student_query = mysqli_query($conn, "SELECT * FROM `student` WHERE `id` = '{$row['student_id']}'");
                                                    $student_row = mysqli_fetch_array($student_query);

                                                    echo "<td>" . $student_row['college_name'] . "</td>";
                                                    echo "<td>" . $row['course_name'] . "</td>";
                                                    echo "<td><a href='./assets/docs/certificate/" . $row['certificate'] . "' download='' class='btn btn-info'>View</a></td>";
                                                    echo "</tr>";
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
    <!-- Container closed -->


    <?php include("./scripts.php"); ?>

</body>

</html>