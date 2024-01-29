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
    <title>Course Payment</title>

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
                            <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Payments</span>
                        </div>

                        <div class="justify-content-center mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Courses</a></li>
                                <li class="breadcrumb-item ">Transations</li>

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
                                                    <th class="border-bottom-0">Course Accepting Date</th>
                                                    <th class="border-bottom-0">Course Stream</th>

                                                    <th class="border-bottom-0">Course Name</th>
                                                    <th class="border-bottom-0">amount </th>
                                                    <th class="border-bottom-0">Final Payment </th>
                                                    <th class="border-bottom-0">Paid Amount</th>
                                                    <th class="border-bottom-0">Make Payment </th>
                                                    <!--<th class="border-bottom-0">Uploading</th>-->
                                                    <!--<th class="border-bottom-0">invoice</th>-->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2023-06-05 10:14:12</td>

                                                    <td>Voice process</td>
                                                    <td></td>
                                                    <td>6400</td>


                                                    <td>-</td>
                                                    <td>-</td>





                                                    <td>
                                                        <button class="btn btn-primary mt-3 mb-0"><a
                                                                href="makereferalcodestatus.php?crid=10"><span
                                                                    style="color:#ffffff;">Make
                                                                    payment</span></a></button> &nbsp &nbsp
                                                    </td>


                                                </tr>



                                                <tr>
                                                    <td>2</td>
                                                    <td>2023-06-07 11:09:55</td>

                                                    <td>Voice process</td>
                                                    <td></td>
                                                    <td>5400</td>


                                                    <td>-</td>
                                                    <td>-</td>





                                                    <td>
                                                        <button class="btn btn-primary mt-3 mb-0"><a
                                                                href="makereferalcodestatus.php?crid=10"><span
                                                                    style="color:#ffffff;">Make
                                                                    payment</span></a></button> &nbsp &nbsp
                                                    </td>


                                                </tr>



                                                <tr>
                                                    <td>3</td>
                                                    <td>2023-08-05 17:43:37</td>

                                                    <td>Voice process</td>
                                                    <td></td>
                                                    <td>5400</td>


                                                    <td>-</td>
                                                    <td>-</td>





                                                    <td>
                                                        <button class="btn btn-primary mt-3 mb-0"><a
                                                                href="makereferalcodestatus.php?crid=10"><span
                                                                    style="color:#ffffff;">Make
                                                                    payment</span></a></button> &nbsp &nbsp
                                                    </td>


                                                </tr>



                                                <tr>
                                                    <td>4</td>
                                                    <td>2023-08-11 10:32:31</td>

                                                    <td>Voice process</td>
                                                    <td></td>
                                                    <td>5400</td>


                                                    <td>-</td>
                                                    <td>-</td>





                                                    <td>
                                                        <button class="btn btn-primary mt-3 mb-0"><a
                                                                href="makereferalcodestatus.php?crid=10"><span
                                                                    style="color:#ffffff;">Make
                                                                    payment</span></a></button> &nbsp &nbsp
                                                    </td>


                                                </tr>



                                                <tr>
                                                    <td>5</td>
                                                    <td>2023-08-17 10:37:53</td>

                                                    <td>Voice process</td>
                                                    <td></td>
                                                    <td>5400</td>


                                                    <td>-</td>
                                                    <td>-</td>





                                                    <td>
                                                        <button class="btn btn-primary mt-3 mb-0"><a
                                                                href="makereferalcodestatus.php?crid=10"><span
                                                                    style="color:#ffffff;">Make
                                                                    payment</span></a></button> &nbsp &nbsp
                                                    </td>


                                                </tr>



                                                <tr>
                                                    <td>6</td>
                                                    <td>2023-09-27 18:30:33</td>

                                                    <td>Voice process</td>
                                                    <td></td>
                                                    <td>5400</td>


                                                    <td>-</td>
                                                    <td>-</td>





                                                    <td>
                                                        <button class="btn btn-primary mt-3 mb-0"><a
                                                                href="makereferalcodestatus.php?crid=10"><span
                                                                    style="color:#ffffff;">Make
                                                                    payment</span></a></button> &nbsp &nbsp
                                                    </td>


                                                </tr>



                                                <tr>
                                                    <td>7</td>
                                                    <td>2023-09-27 19:08:42</td>

                                                    <td>Voice process</td>
                                                    <td></td>
                                                    <td>5400</td>


                                                    <td>-</td>
                                                    <td>-</td>





                                                    <td>
                                                        <button class="btn btn-primary mt-3 mb-0"><a
                                                                href="makereferalcodestatus.php?crid=10"><span
                                                                    style="color:#ffffff;">Make
                                                                    payment</span></a></button> &nbsp &nbsp
                                                    </td>


                                                </tr>



                                                <tr>
                                                    <td>8</td>
                                                    <td>2023-10-20 10:52:11</td>

                                                    <td>Voice process</td>
                                                    <td></td>
                                                    <td>5400</td>


                                                    <td>-</td>
                                                    <td>-</td>





                                                    <td>
                                                        <button class="btn btn-primary mt-3 mb-0"><a
                                                                href="makereferalcodestatus.php?crid=10"><span
                                                                    style="color:#ffffff;">Make
                                                                    payment</span></a></button> &nbsp &nbsp
                                                    </td>


                                                </tr>



                                                <tr>
                                                    <td>9</td>
                                                    <td>2023-10-20 10:52:14</td>

                                                    <td>Voice process</td>
                                                    <td></td>
                                                    <td>2700</td>


                                                    <td>-</td>
                                                    <td>-</td>





                                                    <td>
                                                        <button class="btn btn-primary mt-3 mb-0"><a
                                                                href="makereferalcodestatus.php?crid=10"><span
                                                                    style="color:#ffffff;">Make
                                                                    payment</span></a></button> &nbsp &nbsp
                                                    </td>


                                                </tr>




                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->


                    <div class="modal fade" id="accept">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                        class="btn-close" data-bs-dismiss="modal" type="button"><span
                                            aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">

                                    <p> Are you sure you want to accept a student??</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-success" type="button">Accept</button>
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

                                    <p> Are you sure you want to reject a student??</p>
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

    <?php include("./scripts.php") ?>
</body>

</html>