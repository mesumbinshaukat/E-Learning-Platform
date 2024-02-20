<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['superadmin_username']) && !isset($_COOKIE['superadmin_password'])) {
	header('location: ../super-admin_login.php');
	exit();
}
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <title>Manage Batch</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">
    <?php include("./style.php"); ?>
    <style>
    .dropdown-menu {
        position: fixed !important;
        /* or 'fixed', depending on your layout */
        transform: translate3d(0, 0, 0);
    }
    </style>
</head>

<body class="ltr main-body app sidebar-mini">

    <?php
	include("./switcher.php");

	?>
    <!-- Page -->
    <div class="page">

        <div>
            <div class="main-header side-header sticky nav nav-item">

                <?php include('./partials/navbar.php'); ?>

            </div>
            <!-- /main-header -->

            <!-- main-sidebar -->
            <div class="sticky">
                <?php include('./partials/sidebar.php') ?>
            </div>
            <!-- main-sidebar -->

        </div>


        <!-- main-content -->
        <div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">


                <div class="breadcrumb-header justify-content-between">
                    <div class="right-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Manage Batch</span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Courses</a></li>
                            <li class="breadcrumb-item ">Student batching</li>
                            <li class="breadcrumb-item ">Manage</li>
                        </ol>
                    </div>

                </div>
                <!-- <form method="post">
                    <div class="row row-sm">
                        <div class="form-group col-md-3">
                            <b> <label>Course</label> </b>

                            </select><select name="course_name" class="form-control form-select"
                                data-bs-placeholder="Select Filter">
                                <option value="All" selected="selected">All</option>
                                <option value="Medical Coding">Medical Coding</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="JAVA">JAVA</option>
                                <option value="Python">Python</option>
                                <option value="Cloud computing">Cloud computing</option>
                                <option value="Web Technologies">Web Technologies</option>
                                <option value="Tally">Tally</option>
                                <option value="US Taxation">US Taxation</option>
                                <option value="Human resource management">Human resource management</option>
                                <option value="AI ">AI </option>
                                <option value="Power BI ">Power BI </option>
                                <option value="My SQL ">My SQL </option>
                                <option value="Tally   GST">Tally GST</option>
                                <option value="Voice process">Voice process</option>

                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <b> <label>Trainer</label> </b>
                            <select name="trainer_name" class="form-control form-select"
                                data-bs-placeholder="Select Filter">


                                <option value="All" selected="selected">All</option>
                                <option value="Nandamuru Koteswara Rao">Nandamuru Koteswara Rao</option>
                                <option value="M Sandeep Kumar">M Sandeep Kumar</option>
                                <option value="Uma Kiran V">Uma Kiran V</option>
                                <option value="V Bala Tripura Sunadri">V Bala Tripura Sunadri</option>
                                <option value="SRIKANTH ">SRIKANTH </option>
                                <option value="Nikhil Chakka">Nikhil Chakka</option>
                                <option value="Shaik Ashraf rahil">Shaik Ashraf rahil</option>
                                <option value="Senthan M S V S">Senthan M S V S</option>
                                <option value="Shiva Krishna">Shiva Krishna</option>
                                <option value="saitejaswi kolliboina">saitejaswi kolliboina</option>
                                <option value="Vasundhara">Vasundhara</option>
                                <option value="Narender">Narender</option>
                                <option value="Madhu Varshini">Madhu Varshini</option>
                                <option value="Saieshwari Gogu">Saieshwari Gogu</option>
                                <option value="tirdhala ashok">tirdhala ashok</option>
                                <option value="G Venkatesh">G Venkatesh</option>
                                <option value="Mekanaboyina Venkata murali Krishna">Mekanaboyina Venkata murali Krishna
                                </option>
                                <option value="Ramu">Ramu</option>
                                <option value="Madanu Augustin">Madanu Augustin</option>
                                <option value="Akhila V">Akhila V</option>
                                <option value="vijay kumar sampathi">vijay kumar sampathi</option>
                                <option value="Tiruvidhula Naga Sai Priyanka">Tiruvidhula Naga Sai Priyanka</option>
                                <option value="Srinivas Yerrravelli	">Srinivas Yerrravelli </option>
                                <option value="Srinivas Yerrravelli">Srinivas Yerrravelli</option>
                                <option value="Shanti Kiran">Shanti Kiran</option>
                                <option value="K Bharath Kumar">K Bharath Kumar</option>
                                <option value="demotrainer">demotrainer</option>
                                <option value="V Bala Tripura Sunadri	">V Bala Tripura Sunadri </option>
                                <option value="Kishore Kumar ">Kishore Kumar </option>

                            </select>
                        </div>

                        &nbsp &nbsp <button type="submit" class="btn btn-primary"
                            style="height:40px;width:100px;margin-top:35px">Search</button>
                        
                    </div>
                </form> -->

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
                                                <th class="border-bottom-0">S.No</th>
                                                <th class="border-bottom-0">Batch adding</th>
                                                <th class="border-bottom-0">Batch ID</th>
                                                <th class="border-bottom-0">Trainer name</th>
                                                <th class="border-bottom-0">Course name</th>
                                                <th class="border-bottom-0"> Count</th>
                                                <th class="border-bottom-0">Actions</th>
                                                <!--<th class="border-bottom-0">update</th>-->
                                                <!--<th class="border-bottom-0">add</th>-->
                                                <!--<th class="border-bottom-0">Remove</th>-->



                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$batch_query = mysqli_query($conn, "SELECT * FROM `batch`");
											if (mysqli_num_rows($batch_query) > 0) {
												$i = 1;

												// Array to store unique combinations of course and trainer
												$unique_combinations = array();

												while ($batch_row = mysqli_fetch_assoc($batch_query)) {
													if ($batch_row["status"] === "Active" || ($batch_row["status"] === "Removed" && $batch_row["status"] !== "Completed")) {
														$course_name = $batch_row['batchcourse_name'];
														$trainer_name = $batch_row['batchtrainer_name'];

														// Check if the combination of course and trainer is unique
														$combination_key = $course_name . "_" . $trainer_name;
														if (!in_array($combination_key, $unique_combinations)) {
															echo "<tr>";
															echo "<td>" . $i++ . "</td>";
															echo "<td>" . $batch_row['created_date'] . "</td>";
															echo "<td>BID_" . $batch_row['id'] . "</td>";
															echo "<td>" . $trainer_name . "</td>";
															echo "<td>" . $course_name . "</td>";

															// Count the occurrences of the current combination of course and trainer
															$count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `batch` WHERE `batchcourse_name` = '$course_name' AND `batchtrainer_name` = '$trainer_name' AND `status` = 'Active'"));
															echo "<td>{$count}</td>";

															echo '<td>
                        <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                            <button type="button" class="btn btn-info dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a href="updatefinalbatchcreate.php?id=' . $batch_row['id'] . '" class="dropdown-item">Update</a>
                                <a class="dropdown-item" href="addbatchtrainer.php?trainer_id=' . $batch_row['batchtrainer_id'] . '&course_id=' . $batch_row['batchcourse_id'] . '&batch_id=' . $batch_row['id'] . '">Add</a>
                                <a class="dropdown-item" href="removebatchtrainer.php?trainer_id=' . $batch_row['batchtrainer_id'] . '&course_id=' . $batch_row['batchcourse_id'] . '&batch_id=' . $batch_row['id'] . '">Remove</a>
                                <a class="btn dropdown-item" href="batch_manage.php?id=' . $batch_row['id'] . '&status=delete">Delete</a>
                                <a class="dropdown-item" href="batch_manage.php?id=' . $batch_row['id'] . '&status=complete">Complete</a>
                            </div>
                        </div>
                    </td>';

															// Add the combination of course and trainer to the unique combinations array
															$unique_combinations[] = $combination_key;

															echo "</tr>";
														}
													}
												}
											} else {
												echo '<tr><td colspan="7">No Record Found</td></tr>';
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

    <?php include("./scripts.php"); ?>
</body>

</html>