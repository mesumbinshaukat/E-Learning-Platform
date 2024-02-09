<?php 
session_start();
include('../db_connection/connection.php');	
if (!isset($_COOKIE['trainer_username']) && !isset($_COOKIE['trainer_password'])) {
	header('location: ../trainer_login.php');
	exit();
}
$_SESSION['trainer_previous_url'] = $_SERVER['REQUEST_URI'];
?>
	
<!DOCTYPE html>
<html lang="en">
	
	

<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="">
		
		<!-- Title -->
		<title> Manage Schedule </title>

		<?php 
	 include('./style.php'); 
	  ?>

	</head>

	<body class="ltr main-body app sidebar-mini">

	<?php 
	 include('./switcher.php'); 
	  ?>

		<!-- Loader -->
		<!-- <div id="global-loader">
			<img src="assets/img/preloader.svg" class="loader-img" alt="Loader">
		</div> -->
		<!-- /Loader -->

		<!-- Page -->
		<div class="page">

			<div>

               <div class="main-header side-header sticky nav nav-item">
			   <?php include('./partials/navbar.php')?>
				</div> 
				<!-- /main-header -->

				 <!-- main-sidebar -->
 					<div class="sticky">
					 <?php include('./partials/sidebar.php')?>
				</div>
				<!-- main-sidebar -->

			</div>		
	
			<!-- main-content -->
			<!-- main-content -->
			<div class="main-content app-content">

<!-- container -->
<div class="main-container container-fluid">


	<div class="breadcrumb-header justify-content-between">
		<div class="right-content">
			<span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Manage Schedule </span>
		</div>

		<div class="justify-content-center mt-2">
			<ol class="breadcrumb">
				<li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Internship Management</a></li>
				<li class="breadcrumb-item ">Schedule</li>
				<li class="breadcrumb-item ">Manage</li>
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
									<th class="border-bottom-0">S.No</th>
									<th class="border-bottom-0">Date of Schedule</th>
									<th class="border-bottom-0">Main Topic</th>
									<th class="border-bottom-0">Duration </th>
									<th class="border-bottom-0">Tasks</th>
									<th class="border-bottom-0">Covering Topics</th>
									<th class="border-bottom-0">Starting Time</th>
									<th class="border-bottom-0">Ending Time</th>
									<th class="border-bottom-0">Actions</th>

								</tr>
							</thead>
							<tbody>
								<?php
								$meeting_query = mysqli_query($conn, "SELECT * FROM `scheduling_internship`");
								if (mysqli_num_rows($meeting_query) > 0) {
									$i = 1;
									while ($row = mysqli_fetch_assoc($meeting_query)) {

										echo "<tr>";
										echo "<td>" . $i++ . "</td>";
										echo "<td>" . $row['date_of_schedule'] . "</td>";
										echo "<td>" . $row['main_topic'] . "</td>";
										echo "<td>" . $row['class_duration'] . "</td>";
										echo "<td>" . $row['tasks'] . "</td>";
										echo "<td>" . $row['topics_to_be_covered'] . "</td>";
										echo "<td>" . $row['class_starting_time'] . "</td>";
										echo "<td>" . $row['class_ending_time'] . "</td>";
										echo "<td>
										<div class='col-sm-6 col-md-15 mg-t-10 mg-sm-t-0'>
											<button type='button' class='btn btn-info dropdown-toggle'
												data-bs-toggle='dropdown' aria-expanded='false'>
												<i class='fe fe-more-horizontal'></i>
											</button>

											<div class='dropdown-menu'>
												<a href='viewschedule.php?s_id=" . $row['id'] . "' class='dropdown-item'>view</a>
												<a href='updateschedule.php?s_id=" . $row['id'] . "'
													class='dropdown-item'>update</a>
												<a href='delete.php?s_id=" . $row['id'] . "'
													class='dropdown-item'>Delete</a>
											</div>
										</div>
									</td>
									</tr>";
									}
								} else {
								
									echo "No Schedule found";
								
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
		<!-- End Page -->

        <!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

		<!-- JQUERY JS -->
		<?php 
	 include('./script.php'); 
	  ?>

    </body>

</html>
