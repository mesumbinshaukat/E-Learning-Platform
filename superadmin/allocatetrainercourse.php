<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['superadmin_username']) && !isset($_COOKIE['superadmin_password'])) {
	header('location: ../super-admin_login.php');
	exit();
}

if (!isset($_GET["id"]) && empty($_GET["id"])) {
	if (isset($_SESSION['previous_url'])) {
		header('Location: ' . $_SESSION['previous_url']);
		exit();
	} else {
		// Fallback redirection if previous_url is not set
		header('Location: ./dashboard.php');
		exit();
	}
}

$id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
$id = (int) $id;
$_SESSION['previous_url'] = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title>Allocate Trainer Course</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">
    <?php include("./style.php"); ?>
</head>

<body class="ltr main-body app sidebar-mini">

    <?php
	include("./switcher.php");

	?>

    <!-- Page -->
    <div class="page">

        <div>

            <div class="main-header side-header sticky nav nav-item">
                <?php include("./partials/navbar.php"); ?>
            </div>
            <!-- /main-header -->

            <!-- main-sidebar -->
            <div class="sticky">
                <?php include("./partials/sidebar.php"); ?>
            </div>
            <!-- main-sidebar -->

        </div> <!-- main-content -->
        <div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">


                <div class="breadcrumb-header justify-content-between">
                    <div class="right-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Allocate Trainer Course
                        </span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Courses</a></li>
                            <li class="breadcrumb-item ">Allocate</li>
                            <li class="breadcrumb-item ">Trainer Course</li>
                        </ol>
                    </div>

                </div>


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

                                                <th class="border-bottom-0">Course ID</th>
                                                <th class="border-bottom-0">Course name</th>
                                                <th class="border-bottom-0">Price</th>
                                                <th class="border-bottom-0">Duration</th>
                                                <th class="border-bottom-0">view</th>
                                                <th class="border-bottom-0">allocate</th>





                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
											$trainer = mysqli_query($conn, "SELECT * FROM `trainer` WHERE `id`='$id'");
											if (mysqli_num_rows($trainer) > 0) {
												$std = mysqli_fetch_assoc($trainer);
												$course = mysqli_query($conn, "SELECT * FROM `course`");
												if (mysqli_num_rows($course) > 0) {
													$i = 1;
													while ($cr = mysqli_fetch_assoc($course)) {
											?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td>TRCR_<?php echo $cr['id']; ?></td>
                                                <td><?php echo $cr['course_name']; ?></td>
                                                <td><?php echo $cr['final_cost']; ?></td>
                                                <td><?php echo $cr['duration_days']; ?> days</td>
                                                <td><a href="./viewcourse.php?id=<?php echo $cr['id']; ?>"
                                                        class="btn btn-info">View</a></td>
                                                <?php
															$cr_id = $cr["id"];
															$alloc_select_query = mysqli_query($conn, "SELECT * FROM `allocate_trainer_course` WHERE `trainer_id` = '$id' AND `course_id` = '$cr_id'");

															$fetch_details = mysqli_fetch_assoc($alloc_select_query);

															if ($fetch_details != null) {
															?>

                                                <td>
                                                    <a href="./alloctrainer.php?cr_id=<?php echo $cr['id']; ?>&trainer_id=<?php echo $id; ?>&type=unallocate"
                                                        class="btn btn-danger">Unallocate</a>

                                                </td>


                                                <?php
															} else {
															?>
                                                <td>
                                                    <a href="./alloctrainer.php?id=<?php echo $cr['id']; ?>&trainer_id=<?php echo $id; ?>"
                                                        class="btn btn-success">Allocate</a>

                                                </td>
                                                <?php
															}
															?>

                                            </tr>
                                            <?php
													}
												} else {
													echo '<tr><td colspan="7" class="text-center">No courses found</td></tr>';
												}
											} else {
												if (isset($_SESSION['previous_url'])) {
													header('Location: ' . $_SESSION['previous_url']);
													exit();
												} else {
													// Fallback redirection if previous_url is not set
													header('Location: ./dashboard.php');
													exit();
												}
											}
											?>


                                        </tbody>
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

    <?php include("./scripts.php") ?>

</body>


</html>