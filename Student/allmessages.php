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
    <title>TriaRight: The New Era of Learning</title>

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


    <!-- Data table css -->
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.css" rel="stylesheet" />
    <link href="assets/plugins/datatable/css/buttons.bootstrap5.min.css" rel="stylesheet">
    <link href="assets/plugins/datatable/responsive.bootstrap5.css" rel="stylesheet" />

    <!-- INTERNAL Select2 css -->
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />


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

                    <?php include('./partials/navbar.php'); ?>

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
            <div class="main-content app-content">

                <!-- container -->
                <div class="main-container container-fluid">


                    <div class="breadcrumb-header justify-content-between">
                        <div class="right-content">
                            <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Mail List</span>
                        </div>

                        <div class="justify-content-center mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">internship
                                        management</a></li>
                                <li class="breadcrumb-item ">Chats</li>
                                <li class="breadcrumb-item ">all </li>
                            </ol>
                        </div>

                    </div>

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
                                                    <th class="border-bottom-0">Message ID</th>
                                                    <th class="border-bottom-0">category</th>
                                                    <th class="border-bottom-0">login type</th>
                                                    <th class="border-bottom-0">user id</th>
                                                    <th class="border-bottom-0">username</th>
                                                    <th class="border-bottom-0">Subject</th>
                                                    <th class="border-bottom-0">purpose</th>
                                                    <th class="border-bottom-0">description</th>
                                                    <th class="border-bottom-0">Attachment</th>
                                                    <th class="border-bottom-0">date and time</th>




                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>TRMSG_643</td>
                                                    <td>Outbox</td>
                                                    <td>superadmin</td>
                                                    <td>ALL</td>
                                                    <td>superadmin</td>
                                                    <td>Error </td>
                                                    <td>issue</td>
                                                    <td>Sir I am having a problem to access the recoded sessions so
                                                        kindly fix that issue </td>
                                                    <td><a target="_blank"
                                                            href="../images/chat/add_attachments/64dc75b6ca620Screenshot_2023-08-16-12-36-59-674_com.android.chrome.jpg">
                                                            <button type="submit" class="btn btn-info mt-3 mb-0"
                                                                name="add_attachments">Download</button></a></td>
                                                    <td>2023-08-16 12:37:34</td>
                                                </tr>




                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->

                    <div class="modal fade" id="upload">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Reply</h6><button aria-label="Close" class="btn-close"
                                        data-bs-dismiss="modal" type="button"><span
                                            aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputCompanyPhone"
                                                style="color:#ff6700"><b>Subject</b></label>
                                            <input type="text" class="form-control" id="exampleInputCompanyPhone"
                                                placeholder="Enter Subject">
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-label">
                                            <label for="exampleInputAadhar"
                                                style="color:#ff6700"><b>Describe</b></label>
                                            <textarea class="form-control" placeholder="Textarea"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputcode">add attachments</label>
                                            <input type="file" class="form-control" id="exampleInputcode"
                                                placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-success" type="button">reply</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                        Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="reject">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                        class="btn-close" data-bs-dismiss="modal" type="button"><span
                                            aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">

                                    <p> Are you sure you want to reject a schedule??</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-success" type="button">Reject</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                        Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="Unblock">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                        class="btn-close" data-bs-dismiss="modal" type="button"><span
                                            aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">

                                    <p> Are you sure you want to Unblock a employee??</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-success" type="button">Unblock</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                        Now</button>
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

    <!-- Sidebar-right-->




    <!-- Footer opened -->
    <div class="main-footer">
        <div class="container-fluid pd-t-0-f ht-100p">
            Copyright © 2023 <a href="www.triaright.in" class="text-primary">triaright</a>. Designed with <span
                class="fa fa-heart text-danger"></span> by <a href="www.mycompany.co.in"> my company</a> . All rights
            reserved
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


    <!-- Internal Data tables -->
    <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
    <script src="assets/plugins/datatable/js/jszip.min.js"></script>
    <script src="assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
    <script src="assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
    <script src="assets/plugins/datatable/js/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatable/js/buttons.print.min.js"></script>
    <script src="assets/plugins/datatable/js/buttons.colVis.min.js"></script>
    <script src="assets/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
    <script src="assets/js/table-data.js"></script>

    <!-- INTERNAL Select2 js -->
    <script src="assets/plugins/select2/js/select2.full.min.js"></script>


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

<!-- Mirrored from laravel8.spruko.com/nowa/table-data by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:32:58 GMT -->

</html>