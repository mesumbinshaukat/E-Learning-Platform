<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['student_username']) && !isset($_COOKIE['student_password'])) {
    header('location: ../student_login.php');
    exit();
}

$query = "SELECT * FROM `student`";

$run_query = mysqli_query($conn, $query);

?>


<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">

    <!-- Title -->
    <title>Dashboard</title>

    <?php include("./links.php"); ?>

</head>

<body class="ltr main-body app sidebar-mini">

    <!-- Loader -->
    <div id="global-loader">
        <img src="assets/img/preloader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">

        <div>

            <?php include("./partials/sidebar.php"); ?>

            <!-- main-content -->
            <!-- main-content -->
            <div class="main-content app-content">

                <!-- container -->
                <div class="main-container container-fluid">


                    <!-- breadcrumb -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="left-content">
                            <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Dashboard</span>
                        </div>
                        <div class="justify-content-center mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>

                            </ol>
                        </div>
                    </div>
                    <!-- /breadcrumb -->
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="card primary-custom-card1">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
                                            <div class="prime-card"><img class="img-fluid"
                                                    src="assets/icons/classroom.gif" alt=""></div>
                                        </div>
                                        <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
                                            <div class="text-justified align-items-center">
                                                <h2 class="text-dark font-weight-semibold mb-3 mt-2">Hi <span
                                                        style="color:#ff6700"></span>, Welcome to <span
                                                        class="text-primary">E-Learning Platform</span></h2>
                                                <p class="text-dark tx-15 mb-2 lh-3">Thankyou for choosing us, We are
                                                    delighted that you have joined us and we look forward to providing
                                                    you with a wealth of resources and information that will help you
                                                    succeed in your academic journey.</p>
                                                <p class="font-weight-semibold tx-12 mb-4" style="color:#ff6700">For any
                                                    queries, contact us through support chat or mail us at
                                                    info@mesum.online</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="col-sm-12 col-lg-6">
                            <div class="card">
                                <div class="card-header pb-0">

                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col text-center">
                                            <label class="tx-12">Courses</label>
                                            <p class="font-weight-bold tx-20">18</p>
                                        </div><!-- col -->
                                        <div class="col border-start text-center">
                                            <label class="tx-12">Internships</label>
                                            <p class="font-weight-bold tx-20">1</p>
                                        </div><!-- col -->
                                        <div class="col border-start text-center">
                                            <label class="tx-12">Placements</label>
                                            <p class="font-weight-bold tx-20">0</p>
                                        </div><!-- col -->

                                    </div><!-- row -->

                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col text-center">
                                            <label class="tx-12">Resgitered Students</label>
                                            <p class="font-weight-bold tx-20"><?php if ($run_query) {
                                                                                    $student_count = mysqli_num_rows($run_query);
                                                                                    echo $student_count;
                                                                                } ?></p>
                                        </div><!-- col -->
                                        <div class="col border-start text-center">
                                            <label class="tx-12">Colleges</label>
                                            <p class="font-weight-bold tx-20">55</p>
                                        </div><!-- col -->
                                        <div class="col border-start text-center">
                                            <label class="tx-12">Trainers</label>
                                            <p class="font-weight-bold tx-20">43</p>
                                        </div><!-- col -->

                                    </div><!-- row -->
                                    <br>

                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-xl-12">

                            <div class="row">
                                <div class="col-xl-2 col-md-4 col-sm-6">
                                    <div class="card p-0 ">

                                        <div class="card-body pt-0 text-center">

                                            <a class="file-manger-icon" href="mycourses.php">
                                                <img src="assets/icons/schedule.png" alt="img" class="br-7" />
                                            </a>
                                            <h6 class="mb-1 font-weight-semibold">Schedule</h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-sm-6">
                                    <div class="card p-0 ">

                                        <div class="card-body pt-0 text-center">

                                            <a class="file-manger-icon" href="mycourses.php">
                                                <img src="assets/icons/meeting.png" alt="img" class="br-7" />
                                            </a>
                                            <h6 class="mb-1 font-weight-semibold">Meetings</h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-sm-6">
                                    <div class="card p-0 ">

                                        <div class="card-body pt-0 text-center">

                                            <a class="file-manger-icon" href="mycourses.php">
                                                <img src="assets/icons/summary.png" alt="img" class="br-7" />
                                            </a>
                                            <h6 class="mb-1 font-weight-semibold">Summary</h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-sm-6">
                                    <div class="card p-0 ">

                                        <div class="card-body pt-0 text-center">

                                            <a class="file-manger-icon" href="mycourses.php">
                                                <img src="assets/icons/task-list.png" alt="img" class="br-7" />
                                            </a>
                                            <h6 class="mb-1 font-weight-semibold">Tasks</h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-sm-6">
                                    <div class="card p-0 ">

                                        <div class="card-body pt-0 text-center">

                                            <a class="file-manger-icon" href="mycourses.php">
                                                <img src="assets/icons/video-recording.png" alt="img" class="br-7" />
                                            </a>
                                            <h6 class="mb-1 font-weight-semibold">Recordings</h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-sm-6">
                                    <div class="card p-0 ">

                                        <div class="card-body pt-0 text-center">

                                            <a class="file-manger-icon" href="mycourses.php">
                                                <img src="assets/icons/archive.png" alt="img" class="br-7" />
                                            </a>
                                            <h6 class="mb-1 font-weight-semibold">Documents</h6>

                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>

                    <div class="row row-sm">
                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <div class="card text-center card-img-top-1">
                                <img class="card-img-top w-100" src="assets/img/1.png" alt="">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">Courses</h4>
                                    <!--<p class="card-text">minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                                    <a class="btn btn-info btn-block" href="courseregister.php">View Courses</a>
                                    <a class="btn btn-primary btn-block" href="mycourses.php">MY Courses</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <div class="card text-center card-img-top-1">
                                <img class="card-img-top w-100" src="assets/img/3.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">Internships</h4>
                                    <!--<p class="card-text">minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
                                    <a class="btn btn-info btn-block" href="internshipregister.php">View Internships</a>
                                    <a class="btn btn-primary btn-block" href="myinternships.php">MY Internships</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                            <div class="card text-center card-img-top-1">
                                <img class="card-img-top w-100" src="assets/img/2.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title mb-3">Jobs</h4>

                                    <a class="btn btn-info btn-block" href="placementsregister.php">View Placements</a>
                                    <a class="btn btn-primary btn-block" href="myplacements.php">MY Placements</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="main-footer">
                        <div class="container-fluid pd-t-0-f ht-100p">
                            Copyrights ©TriaRight 2023. All rights reserved by <a href="https://www.triaright.com"
                                class="text-primary">TriaRight</a> developed by <span
                                class="fa fa-heart text-danger"></span><a href="http://www.mycompany.co.in"
                                class="text-primary"> MY Company</a>.
                        </div>
                    </div>
                    <!-- Footer closed -->

                </div>
                <!-- End Page -->

                <!-- BACK-TO-TOP -->
                <a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

                <?php include("./scripts.php") ?>

</body>

</html>