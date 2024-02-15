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
    <title>View Internship</title>
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


                <!-- breadcrumb -->
                <div class="breadcrumb-header justify-content-between">
                    <div class="left-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1">View Courses</span>
                    </div>
                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="javascript:void(0);">Courses</a></li>
                            <li class="breadcrumb-item " aria-current="page">View</li>
                        </ol>
                    </div>
                </div>
                <!-- /breadcrumb -->


                <!-- /row -->

                <!-- row -->

                <div class="row row-sm">

                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="carousel slide" data-bs-ride="carousel" id="carouselExample3">
                            <ol class="carousel-indicators">
                                <li class="active" data-bs-slide-to="0" data-bs-target="#carouselExample3"></li>
                                <li data-bs-slide-to="1" data-bs-target="#carouselExample3"></li>

                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img alt="img" class="d-block w-100"
                                        src="https://triaright.com/images/addinternship/main_image/65785304561f6logo&#32;png.png"
                                        width="300" height="300">
                                </div>
                                <div class="carousel-item">
                                    <img alt="img" class="d-block w-100"
                                        src="https://triaright.com/images/addinternship/inner_image/657853045639flogo&#32;updated.png"
                                        width="300" height="300">
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3"><span
                                        style="font-size:20px; color:#1d71f2; text-transform:none;">Frontend
                                        Developer</span></h4>
                                <p class="card-text"><span style="color: #ff6700; font-size:15px;">Duration(Days)
                                        :</span><span style="font-size:15px;"> 180 </p>
                                <p class="card-text"><span style="color: #ff6700; font-size:15px;">Author :</span><span
                                        style="font-size:15px;"> </p>
                                <p class="card-text"><span style="color: #ff6700; font-size:15px;">Date of posting
                                        :</span><span style="font-size:15px;"> 2023-12-12 18:03:08 </p>
                                <a class="btn btn-primary btn-block"
                                    href="https://triaright.com/College/internshipdetails.php?details=1">Read More</a>
                                <!--							<a class="btn btn-info btn-block" href="internreg.php?crid=1&stuid=&course=Information Technology">Apply for the internship</a>
        -->


                            </div>
                        </div>
                    </div>




                </div>
            </div>

        </div>
    </div>


    <!-- BACK-TO-TOP -->
    <a href="viewinternship2.php@course=Information&#32;Technology.html#top" id="back-to-top"><i
            class="las la-arrow-up"></i></a>
    <?php include("./script.php"); ?>
</body>

</html>