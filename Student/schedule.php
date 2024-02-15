<?php
if (!isset($_COOKIE['student_username']) && !isset($_COOKIE['student_password'])) {
	header('location: ../student_login.php');
	exit();
}
include('../db_connection/connection.php');
$query = "SELECT * FROM `scheduling_internship`";
$query_run = mysqli_query($conn, $query);
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

	<?php include("./links.php"); ?>

</head>

<body class="ltr main-body app sidebar-mini">
    <!-- Loader -->
    <div id="global-loader">
        <img src="https://triaright.com/Student/assets/img/preloader.svg" class="loader-img" alt="Loader">
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


                    <!-- breadcrumb -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="right-content">
                            <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">MY Schedule</span>
                        </div>

                        <div class="justify-content-center mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Courses</a></li>
                                <li class="breadcrumb-item ">Schedule</li>

                            </ol>
                        </div>

                    </div>
                    <!-- /breadcrumb -->

                    <!-- row -->
                    <div class="row row-sm">

					<?php if(mysqli_num_rows($query_run) == 0) {
                    echo "<h2>No Schedules!</h2>";
                } else {
                    while ($data = mysqli_fetch_array($query_run)) { ?>



                        <div class="col-sm-12 col-lg-6">
                            <div class="card primary-custom-card1">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="col-xl-12 col-lg-6 col-md-12 col-sm-12">
                                            <div class="text-justified align-items-center">
                                                <h4 class="product-title mb-1"><b style="color: #ff6700;"><?php echo $data['date_of_schedule']; ?></b>
                                                </h4>
                                                <p class="text-muted tx-13 mb-1">Schedule</p>
                                                <br>
                                                <h5 class="mb-2 tx-18 font-weight-semibold text-dark"><span
                                                        style="color:#1D71F2;"><?php echo $data['main_topic']; ?></SPAN></h5>

                                                <p class="mb-1 tx-15 mb-3 text-muted"><span
                                                        style="color:#000000;"><b>Tasks: &nbsp;</b></span> <?php echo $data['tasks']; ?></p>
                                                <p class="mb-1 tx-15 mb-3 text-muted"> <span
                                                        style="color:#000000;"><b>Duration: &nbsp;</b></span>&nbsp;<?php echo $data['class_duration']; ?></p>
                                                <p class="mb-1 tx-15 mb-3 text-muted"><span
                                                        style="color:#000000;"><b>Starting time: &nbsp;</b></span><?php echo $data['class_starting_time']; ?></p>
                                                <p class="mb-1 tx-15 mb-3 text-muted"><span
                                                        style="color:#000000;"><b>Ending time: &nbsp;</b></span><?php echo $data['class_ending_time']; ?></p>

                                                <p class="mb-1 tx-15 mb-3 text-muted"><span
                                                        style="color:#000000;"><b>Topics Covered: &nbsp;</b></span><?php echo $data['topics_to_be_covered']; ?></p>

                                                
                                                <p class="mb-1 tx-15 mb-3 text-muted"><span
                                                        style="color:#000000;"><b>Shared Documents:</b></span>
                                                    <a href="../superadmin/assets/docs/shared_document/<?php echo $data['shared_documents']; ?>" download="../superadmin/assets/docs/shared_document/<?php echo $data['shared_documents']; ?>">
                                                        <button class="btn btn-info mt-3 mb-0"
                                                            type="button">Download</button></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php } }?>

                    </div>
                    <!-- row closed -->


                </div>
                <!-- Container closed -->
            </div>
            <!-- main-content closed -->

            <!-- Sidebar-right-->



            <div class="main-footer">
                <div class="container-fluid pd-t-0-f ht-100p">
                    Copyright © 2023 <a href="https://triaright.com/Student/www.triaright.com"
                        class="text-primary">triaright</a>. Designed with <span class="fa fa-heart text-danger"></span>
                    by <a href="http://www.mycompany.co.in"> my company</a> . All rights reserved
                </div>
            </div>
            <!-- Footer closed -->

        </div>
        <!-- End Page -->

        <!-- BACK-TO-TOP -->
        <a href="schedule.php@batch_id=5.html#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

        <!-- JQUERY JS -->
		<?php include("./scripts.php") ?>

</body>

<!-- Mirrored from laravel8.spruko.com/nowa/profile-notifications by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:32:39 GMT -->

</html>