<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['superadmin_username']) && !isset($_COOKIE['superadmin_password'])) {
    header('location: ../super-admin_login.php');
    exit();
}
$_SESSION['previous_url'] = $_SERVER['REQUEST_URI'];

if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $sql = "UPDATE `internship_registration` SET `status`='Active' WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $id);
    if (mysqli_stmt_execute($stmt)) {
        $_SESSION["success"] = "Student Registration Accepted.";
        header("location: pendinginternshipregistrations.php");
        exit();
    } else {
        $_SESSION["error"] = "Something went wrong. Please try again.";
        header("location: pendinginternshipregistrations.php");
        exit();
    }
}

?>


<!DOCTYPE html>
<html lang="en">


<head>
    <title>Pending Internship Registration</title>
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
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Manage Internship
                            Registrations </span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Internship</a></li>
                            <li class="breadcrumb-item ">Registrations</li>
                            <li class="breadcrumb-item ">Pending</li>
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
                                                <th class="border-bottom-0">S.no</th>
                                                <th class="border-bottom-0">Date Of Adding</th>
                                                <th class="border-bottom-0">ID No</th>
                                                <th class="border-bottom-0">Trainer Name</th>
                                                <th class="border-bottom-0">date of schedule</th>
                                                <th class="border-bottom-0">update</th>
                                                <th class="border-bottom-0">Accept</th>
                                                <th class="border-bottom-0">Reject</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $result = mysqli_query($conn, "SELECT * FROM `batches_schedule`");

                                            if (mysqli_num_rows($result) > 0) {
                                                $i = 1;
                                                while ($row = mysqli_fetch_assoc($result)) {
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
    }
    if (isset($_SESSION["error"]) && !empty($_SESSION["error"])) {
        echo "<script>toastr.error('" . $_SESSION["error"] . "')</script>";
    }
    session_destroy();
    ?>

</body>

</html>