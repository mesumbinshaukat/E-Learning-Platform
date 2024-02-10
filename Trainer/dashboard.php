<?php 
if (!isset($_COOKIE['trainer_username']) && !isset($_COOKIE['trainer_password'])) {
	header('location: ../trainer_login.php');
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

		<?php 
	 include('./style.php'); 
	  ?>

	</head>

	<body class="ltr main-body app sidebar-mini">
    <?php 
	 include('./switcher.php'); 
	  ?>

		<!-- Loader -->
		<div id="global-loader">
			<img src="assets/img/preloader.svg" class="loader-img" alt="Loader">
		</div>
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

			</div>			<!-- main-content -->
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
						<div class="col-xl-7 col-lg-12 col-md-12 col-sm-12">
							<div class="card primary-custom-card1">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
											<div class="prime-card"><img class="img-fluid" src="assets/img/reg.gif" alt=""></div>
										</div>
										<div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
											<div class="text-justified align-items-center">
												<h2 class="text-dark font-weight-semibold mb-3 mt-2">Hi <span style="color:#ff6700"></span>, Welcome to <span class="text-primary">TriaRight</span></h2>
												<p class="text-dark tx-15 mb-2 lh-3">Thankyou for choosing us, We are delighted that you have joined us and we look forward you provide a wealth of resources and information that will help candidates to succeed in their academic journey.</p>
												<p class="font-weight-semibold tx-12 mb-4" style="color:#ff6700">For any queries, contact us through support chat or mail us at info@triaright.com </p> 
											<!--	<button class="btn btn-primary mb-3 shadow"><a href="registerstudent0.html"><span style="color:#ffffff;">Complete Registration</span></a></button> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
												<div class="col-sm-5 col-lg-5">
							<div class="card">
								<div class="card-header pb-0">
									<div class="card-title pb-0  mb-2">Our Progress</div>
									<!--<p class="tx-12 tx-gray-500 mb-3">On the other hand, we denounce with right indignation and dislike imagesralized <a href="#">Learn more</a></p> -->
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col text-center">
											<label class="tx-14">Courses<br> Assigned</label>
											<p class="font-weight-bold tx-20">18</p>
										</div><!-- col -->
										<div class="col border-start text-center">
											<label class="tx-14">Batches <br>allocated</label>
											<p class="font-weight-bold tx-20">1</p>
										</div><!-- col -->
										<div class="col border-start text-center">
											<label class="tx-14">Total<br> Students</label>
											<p class="font-weight-bold tx-20">0</p>
										</div><!-- col -->
										
									</div><!-- row -->

								</div>
								<div class="card-body">
									<div class="row">
										<div class="col text-center">
											<label class="tx-14">Batch-1</label>
											<p class="font-weight-bold tx-20">5049</p>
										</div><!-- col -->
										<div class="col border-start text-center">
											<label class="tx-14">batch-2</label>
											<p class="font-weight-bold tx-20">55</p>
										</div><!-- col -->
										<div class="col border-start text-center">
											<label class="tx-14">batch-3</label>
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
												
												<a class="file-manger-icon" href="createschedule.php">
  <img src="assets/img/schedule.png"  alt="img" class="br-7" />
</a>
												<h6 class="mb-1 font-weight-semibold">Schedule</h6>
												
											</div>
										</div>
									</div>
																		<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											
											<div class="card-body pt-0 text-center">
												
												<a class="file-manger-icon" href="createmeetings.php">
  <img src="assets/img/meetings.png"  alt="img" class="br-7" />
</a>
												<h6 class="mb-1 font-weight-semibold">Meetings</h6>
												
											</div>
										</div>
									</div>
																		<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											
											<div class="card-body pt-0 text-center">
												
												<a class="file-manger-icon" href="createsummary.php">
  <img src="assets/img/summary.png"  alt="img" class="br-7" />
</a>
												<h6 class="mb-1 font-weight-semibold">Summary</h6>
												
											</div>
										</div>
									</div>
																		<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											
											<div class="card-body pt-0 text-center">
												
												<a class="file-manger-icon" href="addtask.php">
  <img src="assets/img/task.png"  alt="img" class="br-7" />
</a>
												<h6 class="mb-1 font-weight-semibold">Tasks</h6>
												
											</div>
										</div>
									</div>
																		<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											
											<div class="card-body pt-0 text-center">
												
												<a class="file-manger-icon" href="createrecordings.php">
  <img src="assets/img/recordings.png"  alt="img" class="br-7" />
</a>
												<h6 class="mb-1 font-weight-semibold">Recordings</h6>
												
											</div>
										</div>
									</div>
																		<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											
											<div class="card-body pt-0 text-center">
												
												<a class="file-manger-icon" href="uploaddocumentation.php">
  <img src="assets/img/files/file.png"  alt="img" class="br-7" />
</a>
												<h6 class="mb-1 font-weight-semibold">Documents</h6>
												
											</div>
										</div>
									</div>
									
									
							</div>
						
						</div>
					</div>
					<!--<div class="row row-sm">-->
					<!--	<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">-->
					<!--		<div class="card text-center card-img-top-1">-->
					<!--			<img class="card-img-top w-100" src="assets/img/1.png" alt="">-->
					<!--			<div class="card-body">-->
					<!--				<h4 class="card-title mb-3">Courses</h4>-->
									<!--<p class="card-text">minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
					<!--				<a class="btn btn-info btn-block" href="managecourses.php">view courses</a>-->

					<!--			</div>-->
					<!--		 </div>-->
					<!--	</div>-->
					<!--	<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">-->
					<!--		<div class="card text-center card-img-top-1">-->
					<!--			<img class="card-img-top w-100" src="assets/img/3.jpg" alt="">-->
					<!--			<div class="card-body">-->
					<!--				<h4 class="card-title mb-3">Internships</h4>-->
									<!--<p class="card-text">minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
					<!--				<a class="btn btn-info btn-block" href="internships.php">view internships</a>-->

					<!--			</div>-->
					<!--		 </div>-->
					<!--	</div>-->
					<!--	<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">-->
					<!--		<div class="card text-center card-img-top-1">-->
					<!--			<img class="card-img-top w-100" src="assets/img/2.jpg" alt="">-->
					<!--			<div class="card-body">-->
					<!--				<h4 class="card-title mb-3">Jobs</h4>-->
									<!--<p class="card-text">minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
					<!--				<a class="btn btn-info btn-block" href="placements.php">view placements</a>-->

					<!--			</div>-->
							 </div>
						</div>
					</div>

					
            
	

		</div>
		<!-- End Page -->

        <!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

	    <?php 
	 include('./script.php'); 
	  ?>
    </body>

<!-- Mirrored from laravel8.spruko.com/nowa/emptypage by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:32:40 GMT -->
</php>
