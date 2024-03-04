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
    <title>Manage Student Batch</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">

    <?php include("./style.php"); ?>

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
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Manage Student
                            Batch </span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Manage</a></li>
                            <li class="breadcrumb-item ">Student</li>
                            <li class="breadcrumb-item ">Batch</li>
                        </ol>
                    </div>

                </div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <div class="row row-sm">
                        <div class="form-group col-md-3">
                            <P><b> College</b> </p>
                            <select name="college" class="form-control form-select" data-bs-placeholder="Select Filter">
                                <option value="" selected>All</option>
                                <?php
                                $college = mysqli_query($conn, "SELECT * FROM `college`");
                                if (mysqli_num_rows($college) > 0) {
                                    while ($row = mysqli_fetch_assoc($college)) {
                                ?>
                                <option value="<?= $row['name'] ?>"><?= $row['name'] ?></option>
                                <?php
                                    }
                                }
                                ?>


                            </select>

                        </div>
                        <div class="form-group col-md-3">
                            <P> <b>Branch</b> </p>

                            <select name="branches" class="form-control form-select"
                                data-bs-placeholder="Select Filter">
                                <option value="" selected>All</option>
                                <?php $branch_query = mysqli_query($conn, "SELECT DISTINCT `branch` FROM `student`");
                                if (mysqli_num_rows($branch_query) > 0) {
                                    while ($row = mysqli_fetch_assoc($branch_query)) {
                                ?>
                                <option value="<?= $row['branch'] ?>"><?= $row['branch'] ?></option>
                                <?php
                                    }
                                }
                                ?>

                            </select>
                        </div>



                        &nbsp &nbsp <button type="submit" class="btn btn-primary"
                            style="height:40px;width:100px;margin-top:35px">Search</button>

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
                                                <th class="border-bottom-0">S.No</th>

                                                <th class="border-bottom-0">ID No</th>
                                                <th class="border-bottom-0">Student name</th>
                                                <th class="border-bottom-0">College name</th>

                                                <th class="border-bottom-0">Branch</th>
                                                <th class="border-bottom-0">Course Name</th>

                                                <th class="border-bottom-0">Date Of Registration</th>
                                                <th class="border-bottom-0">Status</th>

                                                <th class="border-bottom-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM `course_registration`";

                                            $result = $conn->query($sql);
                                            if (mysqli_num_rows($result) > 0) {
                                                $i = 1;
                                                while ($row = $result->fetch_assoc()) {
                                                    $course_query = "SELECT * FROM `course` WHERE `id` = '$row[course_id]'";

                                                    $course = mysqli_query($conn, $course_query);
                                                    if (mysqli_num_rows($course) > 0) {
                                                        $course = mysqli_fetch_array($course);
                                                        $student_query = "SELECT * FROM `student` WHERE `id` = '$row[student_id]'";
                                                        if (isset($_POST['college']) && !empty($_POST['college'])) {
                                                            $college = $_POST['college'];
                                                            $student_query .= " AND `college_name` = '$college'";
                                                        }
                                                        if (isset($_POST['branches']) && !empty($_POST['branches'])) {
                                                            $branches = $_POST['branches'];
                                                            $student_query .= " AND `branch` = '$branches'";
                                                        }
                                                        $student = mysqli_query($conn, $student_query);
                                                        if (mysqli_num_rows($student) > 0) {
                                                            $student = mysqli_fetch_assoc($student);
                                                            $batch_query = mysqli_query($conn, "SELECT * FROM `batch` WHERE `course_id` = '$row[course_id]'");
                                                            if (mysqli_num_rows($batch_query) > 0) {
                                                                $batch = mysqli_fetch_assoc($batch_query);
                                                                // while () {
                                                                if ($batch['course_id'] == $row['course_id']) {
                                                                    $student_batch_query = mysqli_query($conn, "SELECT * FROM `batch_student` WHERE `batch_id` = '{$batch['id']}'");
                                                                   
                                                                    
                                                                    echo "<tr>";
                                                                    echo "<td>" . $i++ . "</td>";
                                                                    echo "<td>STID_" . $student['id'] . "</td>";
                                                                    echo "<td>" . $student['name'] . "</td>";
                                                                    echo "<td>" . $student['college_name'] . "</td>";
                                                                    echo "<td>" . $student['branch'] . "</td>";
                                                                    echo "<td>" . $course['course_name'] . "</td>";
                                                                    echo "<td>" . $row['added_date'] . "</td>";
                                                                    echo "<td>" . $row['status'] . "</td>";
                                                                    echo '<td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bi bi-three-dots"></i>
                                                        </button>
';

                                                                    switch ($row["status"]) {
                                                                        case "Active":
                                                                            echo '<div class="dropdown-menu">
                                                            <a class="btn dropdown-item" href="change_status.php?id=' . $row['id'] . '&type=delete&batch_id=' . $batch['id'] . '">De-Allocate</a>
                                                        </div>';
                                                                            break;
                                                                        case "Pending":
                                                                            echo '<div class="dropdown-menu">
                                                            <a class="btn dropdown-item" href="allocate_student.php?id=' . $row['student_id'] . '&course_id=' . $row['course_id'] . '">Allocate</a>
                                                        </div>';
                                                                            break;
                                                                        case "Deleted":
                                                                            echo '<div class="dropdown-menu">
                                                            <a class="btn dropdown-item" href="allocate_student.php?id=' . $row['student_id'] . '&course_id=' . $row['course_id'] . '">Re-Allocate</a>
                                                        </div>';
                                                                            break;
                                                                    }

                                                                    echo '
                                                        
                                                    </div>
                                                </td>';
                                                                    echo "</tr>";
                                                                    
                                                                }
                                                            }
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

    <?php include("./scripts.php"); ?>

    <?php
    if (isset($_SESSION["success"]) && !empty($_SESSION["success"])) {
        echo "<script>toastr.success('" . $_SESSION["success"] . "')</script>";
    } else if (isset($_SESSION["error"]) && !empty($_SESSION["error"])) {
        echo "<script>toastr.error('" . $_SESSION["error"] . "')</script>";
    }
    if (session_unset()) {

        $_SESSION['previous_url'] = $_SERVER['REQUEST_URI'];
    }

    ?>

</body>

</html>