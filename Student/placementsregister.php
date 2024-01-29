<?php
if (!isset($_COOKIE['student_username']) && !isset($_COOKIE['student_password'])) {
	header('location: ../student_login.php');
	exit();
}

?>

<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">

    <!-- Title -->
    <title>Placement Resgister</title>

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
            <div class="main-content app-content">

                <!-- container -->
                <div class="main-container container-fluid">


                    <div class="breadcrumb-header justify-content-between">
                        <div class="right-content">
                            <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Placements
                                List</span>
                        </div>

                        <div class="justify-content-center mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Placements</a></li>

                                <li class="breadcrumb-item ">List</li>
                            </ol>
                        </div>

                    </div>

                    <div class="text-wrap">
                        <div class="example">
                            <div class="row row-sm">

                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="card text-center card-img-top-1">
                                        <img class="card-img-top w-100"
                                            src="../images/streams/image/63f8a8f16cf53download.jpg" alt="welcome"
                                            width="300" height="300">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3"><span
                                                    style="color:#ff6700; Font-size:18px">Information Technology</span>
                                            </h4>
                                            <div class="user-wideget-footer">
                                                <div class="row">
                                                    <div class="col-sm-4 border-end">
                                                        <div class="description-block">
                                                            <h5 class="description-header"></h5>
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
                                                                    style="color:#999999; Font-size:11px">Vacancy</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <a class="btn btn-primary btn-block"
                                                href="viewplacements2.php?course=Information Technology">Check now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="card text-center card-img-top-1">
                                        <img class="card-img-top w-100"
                                            src="../images/streams/image/63f8ab3f983e9Capture.PNG" alt="welcome"
                                            width="300" height="300">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3"><span style="color:#ff6700; Font-size:18px">Non
                                                    IT</span></h4>
                                            <div class="user-wideget-footer">
                                                <div class="row">
                                                    <div class="col-sm-4 border-end">
                                                        <div class="description-block">
                                                            <h5 class="description-header"></h5>
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
                                                                    style="color:#999999; Font-size:11px">Vacancy</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <a class="btn btn-primary btn-block"
                                                href="viewplacements2.php?course=Non IT">Check now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="card text-center card-img-top-1">
                                        <img class="card-img-top w-100"
                                            src="../images/streams/image/63f8aa26732f52018-07-09-WhatExpectEarnFinanceDegree-ThinkstockPhotos-494940062.jpg"
                                            alt="welcome" width="300" height="300">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3"><span
                                                    style="color:#ff6700; Font-size:18px">Finance</span></h4>
                                            <div class="user-wideget-footer">
                                                <div class="row">
                                                    <div class="col-sm-4 border-end">
                                                        <div class="description-block">
                                                            <h5 class="description-header"></h5>
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
                                                                    style="color:#999999; Font-size:11px">Vacancy</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <a class="btn btn-primary btn-block"
                                                href="viewplacements2.php?course=Finance">Check now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="card text-center card-img-top-1">
                                        <img class="card-img-top w-100"
                                            src="../images/streams/image/63f8aa6bdd3b1images.jpg" alt="welcome"
                                            width="300" height="300">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3"><span
                                                    style="color:#ff6700; Font-size:18px">Pharmaceuticals</span></h4>
                                            <div class="user-wideget-footer">
                                                <div class="row">
                                                    <div class="col-sm-4 border-end">
                                                        <div class="description-block">
                                                            <h5 class="description-header"></h5>
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
                                                                    style="color:#999999; Font-size:11px">Vacancy</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <a class="btn btn-primary btn-block"
                                                href="viewplacements2.php?course=Pharmaceuticals">Check now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="card text-center card-img-top-1">
                                        <img class="card-img-top w-100"
                                            src="../images/streams/image/63f8aabcd4e4bwealth_inicial.jpg" alt="welcome"
                                            width="300" height="300">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3"><span
                                                    style="color:#ff6700; Font-size:18px">Management</span></h4>
                                            <div class="user-wideget-footer">
                                                <div class="row">
                                                    <div class="col-sm-4 border-end">
                                                        <div class="description-block">
                                                            <h5 class="description-header"></h5>
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
                                                                    style="color:#999999; Font-size:11px">Vacancy</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <a class="btn btn-primary btn-block"
                                                href="viewplacements2.php?course=Management">Check now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="card text-center card-img-top-1">
                                        <img class="card-img-top w-100"
                                            src="../images/streams/image/64187a6db77d8c16.jpg" alt="welcome" width="300"
                                            height="300">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3"><span
                                                    style="color:#ff6700; Font-size:18px">event</span></h4>
                                            <div class="user-wideget-footer">
                                                <div class="row">
                                                    <div class="col-sm-4 border-end">
                                                        <div class="description-block">
                                                            <h5 class="description-header"></h5>
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
                                                                    style="color:#999999; Font-size:11px">Vacancy</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <a class="btn btn-primary btn-block"
                                                href="viewplacements2.php?course=event">Check now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="card text-center card-img-top-1">
                                        <img class="card-img-top w-100"
                                            src="../images/streams/image/641e798a9bfffCapture.PNG" alt="welcome"
                                            width="300" height="300">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3"><span
                                                    style="color:#ff6700; Font-size:18px">TESTING</span></h4>
                                            <div class="user-wideget-footer">
                                                <div class="row">
                                                    <div class="col-sm-4 border-end">
                                                        <div class="description-block">
                                                            <h5 class="description-header"></h5>
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
                                                                    style="color:#999999; Font-size:11px">Vacancy</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <a class="btn btn-primary btn-block"
                                                href="viewplacements2.php?course=TESTING">Check now</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>






                    </div>
                </div>

            </div>
            <!-- Container closed -->
        </div>
        <!-- main-content closed -->


        <!-- Footer opened -->
        <div class="main-footer">
            <div class="container-fluid pd-t-0-f ht-100p">
                Copyright © 2023 <a href="www.triaright.com" class="text-primary">triaright</a>. Designed with <span
                    class="fa fa-heart text-danger"></span> by <a href="http://www.mycompany.co.in"> my company</a> .
                All rights reserved
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