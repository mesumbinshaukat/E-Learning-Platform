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
    <title>Internship Resgister</title>

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
                            <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Internships
                                List</span>
                        </div>

                        <div class="justify-content-center mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">internships</a></li>

                                <li class="breadcrumb-item ">List</li>
                            </ol>
                        </div>

                    </div>

                    <div class="text-wrap">
                        <div class="example">
                            <div class="row row-sm">

                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="card text-center card-img-top-1">
                                        <img class="card-img-top w-100" src="../images/streams/image/63f8a57357c93IT 4.jpg" alt="welcome" width="300" height="300">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3"><span style="color:#ff6700; Font-size:18px">Information Technology</span>
                                            </h4>
                                            <div class="user-wideget-footer">
                                                <div class="row">
                                                    <div class="col-sm-4 border-end">
                                                        <div class="description-block">


                                                            <h5 class="description-header">1</h5>
                                                            <p class="card-text"><span style="color:#999999; Font-size:11px">Companies</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 border-end">
                                                        <div class="description-block">
                                                            <h5 class="description-header">1</h5>

                                                            <p class="card-text"><span style="color:#999999; Font-size:11px">Postings</span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="description-block">
                                                            <h5 class="description-header">50</h5>
                                                            <p class="card-text"><span style="color:#999999; Font-size:11px">Vacancy</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <a class="btn btn-primary btn-block" href="viewinternship2.php?course=Information Technology">Check now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="card text-center card-img-top-1">
                                        <img class="card-img-top w-100" src="../images/streams/image/63f8a76f9f2b4non it it.png" alt="welcome" width="300" height="300">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3"><span style="color:#ff6700; Font-size:18px">Non
                                                    IT</span></h4>
                                            <div class="user-wideget-footer">
                                                <div class="row">
                                                    <div class="col-sm-4 border-end">
                                                        <div class="description-block">


                                                            <h5 class="description-header">0</h5>
                                                            <p class="card-text"><span style="color:#999999; Font-size:11px">Companies</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 border-end">
                                                        <div class="description-block">
                                                            <h5 class="description-header">0</h5>

                                                            <p class="card-text"><span style="color:#999999; Font-size:11px">Postings</span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="description-block">
                                                            <h5 class="description-header"></h5>
                                                            <p class="card-text"><span style="color:#999999; Font-size:11px">Vacancy</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <a class="btn btn-primary btn-block" href="viewinternship2.php?course=Non IT">Check now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="card text-center card-img-top-1">
                                        <img class="card-img-top w-100" src="../images/streams/image/63f8a7e313a0fFinance 1.jpg" alt="welcome" width="300" height="300">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3"><span style="color:#ff6700; Font-size:18px">Finance</span></h4>
                                            <div class="user-wideget-footer">
                                                <div class="row">
                                                    <div class="col-sm-4 border-end">
                                                        <div class="description-block">


                                                            <h5 class="description-header">0</h5>
                                                            <p class="card-text"><span style="color:#999999; Font-size:11px">Companies</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 border-end">
                                                        <div class="description-block">
                                                            <h5 class="description-header">0</h5>

                                                            <p class="card-text"><span style="color:#999999; Font-size:11px">Postings</span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="description-block">
                                                            <h5 class="description-header"></h5>
                                                            <p class="card-text"><span style="color:#999999; Font-size:11px">Vacancy</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <a class="btn btn-primary btn-block" href="viewinternship2.php?course=Finance">Check now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="card text-center card-img-top-1">
                                        <img class="card-img-top w-100" src="../images/streams/image/63f8a8621964ebusiness-pharmaceuticals-overview.jpg" alt="welcome" width="300" height="300">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3"><span style="color:#ff6700; Font-size:18px">Pharmaceuticals</span></h4>
                                            <div class="user-wideget-footer">
                                                <div class="row">
                                                    <div class="col-sm-4 border-end">
                                                        <div class="description-block">


                                                            <h5 class="description-header">0</h5>
                                                            <p class="card-text"><span style="color:#999999; Font-size:11px">Companies</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 border-end">
                                                        <div class="description-block">
                                                            <h5 class="description-header">0</h5>

                                                            <p class="card-text"><span style="color:#999999; Font-size:11px">Postings</span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="description-block">
                                                            <h5 class="description-header"></h5>
                                                            <p class="card-text"><span style="color:#999999; Font-size:11px">Vacancy</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <a class="btn btn-primary btn-block" href="viewinternship2.php?course=Pharmaceuticals">Check now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="card text-center card-img-top-1">
                                        <img class="card-img-top w-100" src="../images/streams/image/63f8a8b198c8aModern Methods of Management_1616503554_1632688028.jpg" alt="welcome" width="300" height="300">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3"><span style="color:#ff6700; Font-size:18px">Management</span></h4>
                                            <div class="user-wideget-footer">
                                                <div class="row">
                                                    <div class="col-sm-4 border-end">
                                                        <div class="description-block">


                                                            <h5 class="description-header">0</h5>
                                                            <p class="card-text"><span style="color:#999999; Font-size:11px">Companies</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 border-end">
                                                        <div class="description-block">
                                                            <h5 class="description-header">0</h5>

                                                            <p class="card-text"><span style="color:#999999; Font-size:11px">Postings</span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="description-block">
                                                            <h5 class="description-header"></h5>
                                                            <p class="card-text"><span style="color:#999999; Font-size:11px">Vacancy</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <a class="btn btn-primary btn-block" href="viewinternship2.php?course=Management">Check now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="card text-center card-img-top-1">
                                        <img class="card-img-top w-100" src="../images/streams/image/64187a5da8162c16.jpg" alt="welcome" width="300" height="300">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3"><span style="color:#ff6700; Font-size:18px">event</span></h4>
                                            <div class="user-wideget-footer">
                                                <div class="row">
                                                    <div class="col-sm-4 border-end">
                                                        <div class="description-block">


                                                            <h5 class="description-header">0</h5>
                                                            <p class="card-text"><span style="color:#999999; Font-size:11px">Companies</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 border-end">
                                                        <div class="description-block">
                                                            <h5 class="description-header">0</h5>

                                                            <p class="card-text"><span style="color:#999999; Font-size:11px">Postings</span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="description-block">
                                                            <h5 class="description-header"></h5>
                                                            <p class="card-text"><span style="color:#999999; Font-size:11px">Vacancy</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <a class="btn btn-primary btn-block" href="viewinternship2.php?course=event">Check now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                    <div class="card text-center card-img-top-1">
                                        <img class="card-img-top w-100" src="../images/streams/image/641e7979e39dbCapture.PNG" alt="welcome" width="300" height="300">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3"><span style="color:#ff6700; Font-size:18px">TESTING</span></h4>
                                            <div class="user-wideget-footer">
                                                <div class="row">
                                                    <div class="col-sm-4 border-end">
                                                        <div class="description-block">


                                                            <h5 class="description-header">0</h5>
                                                            <p class="card-text"><span style="color:#999999; Font-size:11px">Companies</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 border-end">
                                                        <div class="description-block">
                                                            <h5 class="description-header">0</h5>

                                                            <p class="card-text"><span style="color:#999999; Font-size:11px">Postings</span>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="description-block">
                                                            <h5 class="description-header"></h5>
                                                            <p class="card-text"><span style="color:#999999; Font-size:11px">Vacancy</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <a class="btn btn-primary btn-block" href="viewinternship2.php?course=TESTING">Check now</a>
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

        <div class="modal fade" id="apply">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Confirm registration</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <h6>Course Training Category</h6>
                        <!-- Select2 -->
                        <select class="form-control select2-show-search select2-dropdown">
                            <option value="">Self / Individual</option>
                            <option value="">Institution type</option>
                        </select>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputcode">Insitiutiton Name</label>
                                <input type="text" class="form-control" id="exampleInputcode" placeholder="institution Name">
                            </div>
                        </div>
                        <h6>Payment Mode</h6>
                        <!-- Select2 -->
                        <select class="form-control select2-show-search select2-dropdown">
                            <option value="">Self / Individual</option>
                            <option value="">Institution type</option>
                        </select>
                        <!-- Select2 -->

                    </div>
                    <div class="modal-footer">
                        <button class="btn ripple btn-primary" type="button">Register</button>
                        <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="apply1">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Need more information</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputAadhar">Course Training category</label>
                                <select name="country" class="form-control form-select select2" data-bs-placeholder="Category">
                                    <option value="">Self / Individual</option>
                                    <option value="">Institution type</option>
                                </select>
                            </div>
                        </div>



                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputAadhar">Payment mode</label>
                                <select name="country" class="form-control form-select select2" data-bs-placeholder="Category">
                                    <option value="">Self / Individual</option>
                                    <option value="">Institution</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn ripple btn-success" type="button">Apply</button>
                        <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not Now</button>
                    </div>
                </div>
            </div>
        </div>



        <!-- Footer opened -->
        <div class="main-footer">
            <div class="container-fluid pd-t-0-f ht-100p">
                Copyright © 2023 <a href="www.triaright.com" class="text-primary">triaright</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="http://www.mycompany.co.in"> my company</a> .
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