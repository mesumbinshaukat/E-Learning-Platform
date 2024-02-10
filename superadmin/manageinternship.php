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
    <title>Internship Management</title>
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
                <?php include('./partials/sidebar.php') ?>
            </div>
            <!-- main-sidebar -->

        </div> <!-- main-content -->
        <div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">


                <div class="breadcrumb-header justify-content-between">
                    <div class="right-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Manage Internship
                        </span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Internship</a></li>
                            <li class="breadcrumb-item ">Create</li>
                            <li class="breadcrumb-item ">Manage</li>
                        </ol>
                    </div>

                </div>
                <form method="post">
                    <div class="row row-sm">
                        <div class="form-group col-md-3">
                            <b>
                                <p>Company name</p>
                            </b>

                            <select name="company_name" class="form-control form-select"
                                data-bs-placeholder="Select Filter">

                                <option value="ALL" selected="selected">ALL</option>
                                <option value="Triaright Solutions LLP">Triaright Solutions LLP</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <P><b> Internship Category</b> </p>
                            <select name="internship_category" class="form-control form-select"
                                data-bs-placeholder="Select Filter">
                                <option value="ALL" selected="selected">ALL</option>
                                <option value="Virtual">Virtual</option>
                                <option value="Offline">Offline</option>
                                <option value="Hybrid">Hybrid</option>
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
                                                <th class="border-bottom-0">date of adding</th>
                                                <th class="border-bottom-0">Company name</th>
                                                <th class="border-bottom-0">Internship ID</th>
                                                <th class="border-bottom-0">Internship Category</th>
                                                <th class="border-bottom-0">Role</th>
                                                <th class="border-bottom-0">Vacancy</th>
                                                <th class="border-bottom-0">Last date</th>
                                                <th class="border-bottom-0">actions</th>


                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>2023-12-12 18:03:08</td>
                                                <td>Triaright Solutions LLP</td>
                                                <td>TRINT_01</td>
                                                <td>Virtual</td>
                                                <td>Frontend Developer</td>
                                                <td>50</td>
                                                <td>2023-12-31</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bi bi-three-dots"></i>
                                                        </button>

                                                        <div class="dropdown-menu">
                                                            <a href="viewinternship.php?id=1"
                                                                class="dropdown-item">view</a>
                                                            <a href="updateinternship.php?id=1"
                                                                class="dropdown-item">update</a>
                                                            <a data-bs-target="#complete" data-bs-toggle="modal"
                                                                class="dropdown-item">complete</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/internshipcreate_manage.php?id=1&block=block">pause</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/internshipcreate_manage.php?id=1&unblock=unblock">resume</a>
                                                            <a href="internshipregistration.html"
                                                                class="dropdown-item">registered candidates</a>
                                                            <a href="selectstudent.html" class="dropdown-item">add
                                                                candidate</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/internshipcreate_manage.php?id=1&delete=delete">delete</a>

                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>
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