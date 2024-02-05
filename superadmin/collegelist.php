<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['superadmin_username']) && !isset($_COOKIE['superadmin_password'])) {
    header('location: ../super-admin_login.php');
    exit();
}

if (isset($_GET["error"])) {
    // Sanitize the value using htmlspecialchars
    $error = htmlspecialchars($_GET["error"], ENT_QUOTES, 'UTF-8');

    // Store the sanitized value in the session
    $_SESSION["error"] = $error;
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>College List</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">

    <?php include("./style.php"); ?>

</head>

<body class="ltr main-body app sidebar-mini">
    <?php include("./switcher.php"); ?>
    <?php if (isset($_SESSION["error"]) && !empty($_SESSION["error"])) {
        echo "<script>toastr.alert('" . $_SESSION["error"] . "')</script>";
    } ?>
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

        </div> <!-- main-content -->
        <div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">


                <div class="breadcrumb-header justify-content-between">
                    <div class="right-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">College List </span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Credentials</a></li>
                            <li class="breadcrumb-item ">College</li>
                            <li class="breadcrumb-item ">List</li>
                        </ol>
                    </div>

                </div>
                <form method="post">
                    <div class="row row-sm">
                        <div class="form-group col-md-4">
                            <P><b> Affliated University</b> </p>
                            <select name="affiliated_university" class="form-control form-select" data-bs-placeholder="Select Filter">
                                <?php
                                $query = "SELECT `affiliated_university` FROM `college`";
                                $result = mysqli_query($conn, $query);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        if ($row["affiliated_university"] != $_SESSION["affiliated_university"]) {
                                            $_SESSION["affiliated_university"] = $row["affiliated_university"];
                                            echo "<option value='" . $row["affiliated_university"] . "'>" . $row["affiliated_university"] . "</option>";
                                        }
                                    }
                                    session_destroy();
                                }
                                ?>

                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <P><b>District</b> </p>
                            <select name="district" class="form-control form-select" data-bs-placeholder="Select Filter">
                                <?php
                                $query = "SELECT `district` FROM `college`";
                                $result = mysqli_query($conn, $query);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        if ($row["district"] != $_SESSION["district"]) {
                                            $_SESSION["district"] = $row["district"];
                                            echo "<option value='" . $row["district"] . "'>" . $row["district"] . "</option>";
                                        }
                                    }
                                    session_destroy();
                                }
                                ?>

                            </select>
                        </div>


                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
                <br>
                <br>
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">

                                <div class="table-responsive  export-table">
                                    <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">S.no</th>
                                                <th class="border-bottom-0">Date of adding</th>
                                                <th class="border-bottom-0">College ID</th>
                                                <th class="border-bottom-0">College Name</th>
                                                <th class="border-bottom-0">Representative Name</th>
                                                <th class="border-bottom-0">District</th>
                                                <th class="border-bottom-0">Affliate Univerity Board</th>
                                                <th class="border-bottom-0">College Streams</th>
                                                <th class="border-bottom-0">Address</th>
                                                <th class="border-bottom-0">Website</th>

                                                <th class="border-bottom-0">Edit</th>
                                                <th class="border-bottom-0">Delete</th>



                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $query = mysqli_query($conn, "SELECT * FROM `college`");
                                            if (mysqli_num_rows($query) > 0) {
                                                $i = 1;
                                                while ($row = mysqli_fetch_assoc($query)) {
                                                    echo "<tr>";
                                                    echo "<td>" . $i . "</td>";
                                                    echo "<td>" . $row["creation_date"] . "</td>";
                                                    echo "<td>COL_" . $row["college_code"] . "</td>";
                                                    echo "<td>" . $row["name"] . "</td>";
                                                    echo "<td>" . $row["representative_name"] . "</td>";
                                                    echo "<td>" . $row["district"] . "</td>";
                                                    echo "<td>" . $row["affiliated_university"] . "</td>";
                                                    echo "<td>" . $row["college_streams"] . "</td>";
                                                    echo "<td>" . $row["address"] . "</td>";
                                                    echo "<td><a class='text-primary' href='https://" . $row["website"] . "'>" . $row["website"] . "</a></td>";
                                                    echo "<td><a class='btn btn-warning' href='edit_college.php?id=" . $row["id"] . "'>Edit</a></a></td>";
                                                    echo "<td><a class='btn btn-danger' href='delete.php?id=" . $row["id"] . "&user=college'>Edit</a></a></td>";
                                                    echo "</tr>";
                                                    $i++;
                                                }
                                            }

                                            ?>

                                            >

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