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
    <title> TriaRight: The New Era of Learning</title>

    <!-- FAVICON -->
    <link rel="icon" href="assets/img/icon.png" type="image/x-icon" />

    <!-- ICONS CSS -->
    <link href="assets/plugins/icons/icons.css" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- RIGHT-SIDEMENU CSS -->
    <link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- P-SCROLL BAR CSS -->
    <link href="assets/plugins/perfect-scrollbar/p-scrollbar.css" rel="stylesheet" />





    <!-- STYLES CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-dark.css" rel="stylesheet">
    <link href="assets/css/style-transparent.css" rel="stylesheet">


    <!-- SKIN-MODES CSS -->
    <link href="assets/css/skin-modes.css" rel="stylesheet" />

    <!-- ANIMATION CSS -->
    <link href="assets/css/animate.css" rel="stylesheet">

    <!-- SWITCHER CSS -->
    <link href="assets/switcher/css/switcher.css" rel="stylesheet" />
    <link href="assets/switcher/demo.css" rel="stylesheet" />

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

            <div class="main-header side-header sticky nav nav-item">
                <div class=" main-container container-fluid">
                    <div class="main-header-left ">
                        <div class="responsive-logo">
                            <a href="" class="header-logo">
                                <img src="assets/img/logowhite.png" class="mobile-logo logo-1" alt="logo">
                                <img src="assets/img/logoblack.png" class="mobile-logo dark-logo-1" alt="logo">
                            </a>
                        </div>
                        <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
                            <a class="open-toggle" href="javascript:void(0);"><i
                                    class="header-icon fe fe-align-left"></i></a>
                            <a class="close-toggle" href="javascript:void(0);"><i class="header-icon fe fe-x"></i></a>
                        </div>
                        <div class="logo-horizontal">
                            <a href="index.php" class="header-logo">
                                <img src="assets/img/logowhite.png" class="mobile-logo logo-1" alt="logo">
                                <img src="assets/img/logoblack.png" class="mobile-logo dark-logo-1" alt="logo">
                            </a>
                        </div>

                    </div>
                    <?php
					 include('./partials/navbar.php');
					?>

                </div>
                <!-- /main-header -->

                <!-- main-sidebar -->
                <div class="sticky">
                    <aside class="app-sidebar">
                        <div class="main-sidebar-header active">
                            <a class="header-logo active" href="index.php">
                                <img src="assets/img/logowhite.png" class="main-logo  desktop-logo" alt="logo">
                                <img src="assets/img/logoblack.png" class="main-logo  desktop-dark" alt="logo">
                                <img src="assets/img/icon.png" class="main-logo  mobile-logo" alt="logo">
                                <img src="assets/img/icon.png" class="main-logo  mobile-dark" alt="logo">
                            </a>
                        </div>
                        <div class="main-sidemenu">
                            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                                </svg></div>
                            <ul class="side-menu">

                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="dashboard.php"><i
                                            class="si si-event" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp
                                        &nbsp <span class="side-menu__label">Dashboard</span></a>

                                </li>


                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i
                                            class="si si-book-open" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp
                                        &nbsp <span class="side-menu__label">Courses</span><i
                                            class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu__label1"><a href="javascript:void(0);">Courses</a></li>
                                        <li><a class="slide-item" href="courseregister.php">List</a></li>
                                        <li><a class="slide-item" href="courseregistration.php">Registrations</a></li>
                                        <li><a class="slide-item" href="coursetransactions.php">Transactactions</a></li>
                                        <li><a class="slide-item" href="coursepayments.php">Payments</a></li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i
                                            class="fe fe-feather" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp
                                        &nbsp <span class="side-menu__label">Internships</span><i
                                            class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu__label1"><a href="javascript:void(0);">Internships</a></li>
                                        <li><a class="slide-item" href="internshipregister.php">List</a></li>
                                        <li><a class="slide-item" href="intershipregistration.php">Registrations</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i
                                            class="fe fe-file-text" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp
                                        &nbsp <span class="side-menu__label">Placements</span><i
                                            class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu__label1"><a href="javascript:void(0);">Placements</a></li>
                                        <li><a class="slide-item" href="placementsregister.php">List</a></li>
                                        <li><a class="slide-item" href="placementsregistration.php">Registrations</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i
                                            class="fe fe-users" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp
                                        &nbsp <span class="side-menu__label">My Accounts</span><i
                                            class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu__label1"><a href="javascript:void(0);">My account</a></li>
                                        <li><a class="slide-item" href="mycourses.php">My Courses</a></li>
                                        <li><a class="slide-item" href="myinternships.php">My Internships</a></li>
                                        <li><a class="slide-item" href="myplacements.php">My Placements</a></li>
                                    </ul>
                                </li>

                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i
                                            class="fe fe-mail" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp
                                        &nbsp <span class="side-menu__label">Chats</span><i
                                            class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu__label1"><a href="javascript:void(0);">Chat</a></li>
                                        <li><a class="slide-item" href="compose.php">Compose</a></li>
                                        <li><a class="slide-item" href="inbox.php">Inbox</a></li>
                                        <li><a class="slide-item" href="outbox.php">Outbox</a></li>
                                        <li><a class="slide-item" href="allmessages.php">All Details</a></li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i
                                            class="fe fe-upload" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp
                                        &nbsp <span class="side-menu__label">File Manager</span><i
                                            class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu__label1"><a href="javascript:void(0);">File Manager</a>
                                        </li>
                                        <li><a class="slide-item" href="documentation.php">Documentations</a></li>
                                        <li><a class="slide-item" href="certifications.php">Certifications</a></li>
                                    </ul>
                                </li>



                                <li class="slide">

                                    <a class="side-menu__item" data-bs-toggle="slide" href="profile.php"><i
                                            class="fe fe-user" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp
                                        &nbsp <span class="side-menu__label">Profile</span></a>

                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="changepassword.php"><i
                                            class="fe fe-lock" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp
                                        &nbsp <span class="side-menu__label">Change Password</span></a>

                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="../../"><i
                                            class="fe fe-log-out" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp
                                        &nbsp <span class="side-menu__label">Logout</span></a>

                                </li>



                            </ul>
                            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                                </svg></div>
                        </div>
                    </aside>
                </div>
                <!-- main-sidebar -->

            </div>
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
                                            <div class="prime-card"><img class="img-fluid" src="assets/img/reg.gif"
                                                    alt=""></div>
                                        </div>
                                        <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
                                            <div class="text-justified align-items-center">
                                                <h2 class="text-dark font-weight-semibold mb-3 mt-2">Hi <span
                                                        style="color:#ff6700"></span>, Welcome to <span
                                                        class="text-primary">TriaRight</span></h2>
                                                <p class="text-dark tx-15 mb-2 lh-3">Thankyou for choosing us, We are
                                                    delighted that you have joined us and we look forward to providing
                                                    you with a wealth of resources and information that will help you
                                                    succeed in your academic journey.</p>
                                                <p class="font-weight-semibold tx-12 mb-4" style="color:#ff6700">For any
                                                    queries, contact us through support chat or mail us at
                                                    info@triaright.com</p>
                                                <!--	<button class="btn btn-primary mb-3 shadow"><a href="registerstudent0.html"><span style="color:#ffffff;">Complete Registration</span></a></button> -->
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
                                            <label class="tx-12">Register students</label>
                                            <p class="font-weight-bold tx-20">5049</p>
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

                        <!-- </div> -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-xl-12">

                            <div class="row">
                                <div class="col-xl-2 col-md-4 col-sm-6">
                                    <div class="card p-0 ">

                                        <div class="card-body pt-0 text-center">

                                            <a class="file-manger-icon" href="mycourses.php">
                                                <img src="assets/img/schedule.png" alt="img" class="br-7" />
                                            </a>
                                            <h6 class="mb-1 font-weight-semibold">Schedule</h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-sm-6">
                                    <div class="card p-0 ">

                                        <div class="card-body pt-0 text-center">

                                            <a class="file-manger-icon" href="mycourses.php">
                                                <img src="assets/img/meetings.png" alt="img" class="br-7" />
                                            </a>
                                            <h6 class="mb-1 font-weight-semibold">Meetings</h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-sm-6">
                                    <div class="card p-0 ">

                                        <div class="card-body pt-0 text-center">

                                            <a class="file-manger-icon" href="mycourses.php">
                                                <img src="assets/img/summary.png" alt="img" class="br-7" />
                                            </a>
                                            <h6 class="mb-1 font-weight-semibold">Summary</h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-sm-6">
                                    <div class="card p-0 ">

                                        <div class="card-body pt-0 text-center">

                                            <a class="file-manger-icon" href="mycourses.php">
                                                <img src="assets/img/task.png" alt="img" class="br-7" />
                                            </a>
                                            <h6 class="mb-1 font-weight-semibold">Tasks</h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-sm-6">
                                    <div class="card p-0 ">

                                        <div class="card-body pt-0 text-center">

                                            <a class="file-manger-icon" href="mycourses.php">
                                                <img src="assets/img/recordings.png" alt="img" class="br-7" />
                                            </a>
                                            <h6 class="mb-1 font-weight-semibold">Recordings</h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4 col-sm-6">
                                    <div class="card p-0 ">

                                        <div class="card-body pt-0 text-center">

                                            <a class="file-manger-icon" href="mycourses.php">
                                                <img src="assets/img/files/file.png" alt="img" class="br-7" />
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

                <!-- JQUERY JS -->
                <script src="assets/plugins/jquery/jquery.min.js"></script>

                <!-- BOOTSTRAP JS -->
                <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
                <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

                <!-- IONICONS JS -->
                <script src="assets/plugins/ionicons/ionicons.js"></script>

                <!-- MOMENT JS -->
                <script src="assets/plugins/moment/moment.js"></script>

                <!-- P-SCROLL JS -->
                <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
                <script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>

                <!-- SIDEBAR JS -->
                <script src="assets/plugins/side-menu/sidemenu.js"></script>

                <!-- STICKY JS -->
                <script src="assets/js/sticky.js"></script>

                <!-- Chart-circle js -->
                <script src="assets/plugins/circle-progress/circle-progress.min.js"></script>

                <!-- RIGHT-SIDEBAR JS -->
                <script src="assets/plugins/sidebar/sidebar.js"></script>
                <script src="assets/plugins/sidebar/sidebar-custom.js"></script>



                <!-- EVA-ICONS JS -->
                <script src="assets/plugins/eva-icons/eva-icons.min.js"></script>

                <!-- THEME-COLOR JS -->
                <script src="assets/js/themecolor.js"></script>

                <!-- CUSTOM JS -->
                <script src="assets/js/custom.js"></script>

                <!-- exported JS -->
                <script src="assets/js/exported.js"></script>

                <!-- SWITCHER JS -->
                <script src="assets/switcher/js/switcher.js"></script>

</body>

</html>