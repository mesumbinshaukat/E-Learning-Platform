<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['college_username']) && !isset($_COOKIE['college_password'])) {
	header('location: ../college_login.php');
	exit();
}
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <title>Internships</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">
    <?php include("./style.php") ?>
</head>

<body class="ltr main-body app sidebar-mini">


    <!-- Page -->
    <div class="page">

        <div>

            <div class="main-header side-header sticky nav nav-item">
                <?php include("./partials/navbar.php") ?>
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
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Internships
                            Streams</span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Internships</a></li>

                            <li class="breadcrumb-item ">Streams</li>
                        </ol>
                    </div>

                </div>


                <br>
                <br>
                <!-- row closed -->

                <!-- row opened -->
                <div class="text-wrap">
                    <div class="example">
                        <div class="row row-sm">

                            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                <div class="card text-center card-img-top-1">
                                    <img class="card-img-top w-100" src="../images/streams/image/63f8a57357c93IT 4.jpg"
                                        alt="welcome" width="300" height="300">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3"><span
                                                style="color:#ff6700; Font-size:18px">Information Technology</span></h4>
                                        <div class="user-wideget-footer">
                                            <div class="row">
                                                <div class="col-sm-4 border-end">
                                                    <div class="description-block">


                                                        <h5 class="description-header">1</h5>
                                                        <p class="card-text"><span
                                                                style="color:#999999; Font-size:11px">Companies</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 border-end">
                                                    <div class="description-block">
                                                        <h5 class="description-header">1</h5>

                                                        <p class="card-text"><span
                                                                style="color:#999999; Font-size:11px">Postings</span>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="description-block">
                                                        <h5 class="description-header">50</h5>
                                                        <p class="card-text"><span
                                                                style="color:#999999; Font-size:11px">Vacancy</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a class="btn btn-primary btn-block"
                                            href="viewinternship2.php?course=Information Technology">Check now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                <div class="card text-center card-img-top-1">
                                    <img class="card-img-top w-100"
                                        src="../images/streams/image/63f8a76f9f2b4non it it.png" alt="welcome"
                                        width="300" height="300">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3"><span style="color:#ff6700; Font-size:18px">Non
                                                IT</span></h4>
                                        <div class="user-wideget-footer">
                                            <div class="row">
                                                <div class="col-sm-4 border-end">
                                                    <div class="description-block">


                                                        <h5 class="description-header">0</h5>
                                                        <p class="card-text"><span
                                                                style="color:#999999; Font-size:11px">Companies</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 border-end">
                                                    <div class="description-block">
                                                        <h5 class="description-header">0</h5>

                                                        <p class="card-text"><span
                                                                style="color:#999999; Font-size:11px">Postings</span>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="description-block">
                                                        <h5 class="description-header"></h5>
                                                        <p class="card-text"><span
                                                                style="color:#999999; Font-size:11px">Vacancy</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a class="btn btn-primary btn-block"
                                            href="viewinternship2.php?course=Non IT">Check now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                <div class="card text-center card-img-top-1">
                                    <img class="card-img-top w-100"
                                        src="../images/streams/image/63f8a7e313a0fFinance 1.jpg" alt="welcome"
                                        width="300" height="300">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3"><span
                                                style="color:#ff6700; Font-size:18px">Finance</span></h4>
                                        <div class="user-wideget-footer">
                                            <div class="row">
                                                <div class="col-sm-4 border-end">
                                                    <div class="description-block">


                                                        <h5 class="description-header">0</h5>
                                                        <p class="card-text"><span
                                                                style="color:#999999; Font-size:11px">Companies</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 border-end">
                                                    <div class="description-block">
                                                        <h5 class="description-header">0</h5>

                                                        <p class="card-text"><span
                                                                style="color:#999999; Font-size:11px">Postings</span>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="description-block">
                                                        <h5 class="description-header"></h5>
                                                        <p class="card-text"><span
                                                                style="color:#999999; Font-size:11px">Vacancy</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a class="btn btn-primary btn-block"
                                            href="viewinternship2.php?course=Finance">Check now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                <div class="card text-center card-img-top-1">
                                    <img class="card-img-top w-100"
                                        src="../images/streams/image/63f8a8621964ebusiness-pharmaceuticals-overview.jpg"
                                        alt="welcome" width="300" height="300">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3"><span
                                                style="color:#ff6700; Font-size:18px">Pharmaceuticals</span></h4>
                                        <div class="user-wideget-footer">
                                            <div class="row">
                                                <div class="col-sm-4 border-end">
                                                    <div class="description-block">


                                                        <h5 class="description-header">0</h5>
                                                        <p class="card-text"><span
                                                                style="color:#999999; Font-size:11px">Companies</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 border-end">
                                                    <div class="description-block">
                                                        <h5 class="description-header">0</h5>

                                                        <p class="card-text"><span
                                                                style="color:#999999; Font-size:11px">Postings</span>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="description-block">
                                                        <h5 class="description-header"></h5>
                                                        <p class="card-text"><span
                                                                style="color:#999999; Font-size:11px">Vacancy</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a class="btn btn-primary btn-block"
                                            href="viewinternship2.php?course=Pharmaceuticals">Check now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                <div class="card text-center card-img-top-1">
                                    <img class="card-img-top w-100"
                                        src="../images/streams/image/63f8a8b198c8aModern Methods of Management_1616503554_1632688028.jpg"
                                        alt="welcome" width="300" height="300">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3"><span
                                                style="color:#ff6700; Font-size:18px">Management</span></h4>
                                        <div class="user-wideget-footer">
                                            <div class="row">
                                                <div class="col-sm-4 border-end">
                                                    <div class="description-block">


                                                        <h5 class="description-header">0</h5>
                                                        <p class="card-text"><span
                                                                style="color:#999999; Font-size:11px">Companies</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 border-end">
                                                    <div class="description-block">
                                                        <h5 class="description-header">0</h5>

                                                        <p class="card-text"><span
                                                                style="color:#999999; Font-size:11px">Postings</span>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="description-block">
                                                        <h5 class="description-header"></h5>
                                                        <p class="card-text"><span
                                                                style="color:#999999; Font-size:11px">Vacancy</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a class="btn btn-primary btn-block"
                                            href="viewinternship2.php?course=Management">Check now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                <div class="card text-center card-img-top-1">
                                    <img class="card-img-top w-100" src="../images/streams/image/64187a5da8162c16.jpg"
                                        alt="welcome" width="300" height="300">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3"><span
                                                style="color:#ff6700; Font-size:18px">event</span></h4>
                                        <div class="user-wideget-footer">
                                            <div class="row">
                                                <div class="col-sm-4 border-end">
                                                    <div class="description-block">


                                                        <h5 class="description-header">0</h5>
                                                        <p class="card-text"><span
                                                                style="color:#999999; Font-size:11px">Companies</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 border-end">
                                                    <div class="description-block">
                                                        <h5 class="description-header">0</h5>

                                                        <p class="card-text"><span
                                                                style="color:#999999; Font-size:11px">Postings</span>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="description-block">
                                                        <h5 class="description-header"></h5>
                                                        <p class="card-text"><span
                                                                style="color:#999999; Font-size:11px">Vacancy</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a class="btn btn-primary btn-block"
                                            href="viewinternship2.php?course=event">Check now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                <div class="card text-center card-img-top-1">
                                    <img class="card-img-top w-100"
                                        src="../images/streams/image/641e7979e39dbCapture.PNG" alt="welcome" width="300"
                                        height="300">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3"><span
                                                style="color:#ff6700; Font-size:18px">TESTING</span></h4>
                                        <div class="user-wideget-footer">
                                            <div class="row">
                                                <div class="col-sm-4 border-end">
                                                    <div class="description-block">


                                                        <h5 class="description-header">0</h5>
                                                        <p class="card-text"><span
                                                                style="color:#999999; Font-size:11px">Companies</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 border-end">
                                                    <div class="description-block">
                                                        <h5 class="description-header">0</h5>

                                                        <p class="card-text"><span
                                                                style="color:#999999; Font-size:11px">Postings</span>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="description-block">
                                                        <h5 class="description-header"></h5>
                                                        <p class="card-text"><span
                                                                style="color:#999999; Font-size:11px">Vacancy</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a class="btn btn-primary btn-block"
                                            href="viewinternship2.php?course=TESTING">Check now</a>
                                    </div>
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
    </div>
    <!-- main-content closed -->

    <!-- Sidebar-right-->



    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>
    <?php include("./script.php"); ?>
</body>

</html>