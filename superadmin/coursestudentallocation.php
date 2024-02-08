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
    <title>Course Student Allocation</title>
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
                <?php include("./partials/navbar.php"); ?>
            </div>
            <!-- /main-header -->

            <!-- main-sidebar -->
            <div class="sticky">
                <?php include("./partials/sidebar.php"); ?>
            </div>
            <!-- main-sidebar -->

        </div>
        <!-- main-content -->
        <div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">


                <div class="breadcrumb-header justify-content-between">
                    <div class="right-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Registration Allocation
                        </span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Courses</a></li>
                            <li class="breadcrumb-item ">registration</li>
                            <li class="breadcrumb-item ">add</li>
                        </ol>
                    </div>

                </div>
                <form method="post">
                    <div class="row row-sm">
                        <div class="form-group col-md-3">
                            <b> <label>College Name</label> </b>
                            <select name="college_name" class="form-control form-select"
                                data-bs-placeholder="Select Filter">
                                <option value="ALL">ALL</option>
                                <!-- College Name -->
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
                                                <th class="border-bottom-0">Course id</th>
                                                <th class="border-bottom-0">student name</th>

                                                <th class="border-bottom-0">College name</th>
                                                <th class="border-bottom-0">Course</th>
                                                <th class="border-bottom-0">full info.</th>
                                                <th class="border-bottom-0">allocate </th>




                                            </tr>
                                        </thead>
                                        <tbody>


                                            <tr>

                                                <td>1</td>
                                                <td>COUREG_5</td>
                                                <td>Thriveni </td>
                                                <td>Jyothirmayee women’s degree college </td>
                                                <td>Java Script</td>
                                                <td><a href="./viewstudent.php?id=5332" class="btn btn-info">view</a>
                                                </td>
                                                <td> <a href="./allocatestu.php?crid=5&amp;trid=&amp;stuid=5332"
                                                        class="btn btn-success">allocate</a></td>

                                                <b></td>

                                            </tr>

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