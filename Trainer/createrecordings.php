
<?php 
include('../db_connection/connection.php');
if (!isset($_COOKIE['trainer_username']) && !isset($_COOKIE['trainer_password'])) {
	header('location: ../trainer_login.php');
	exit();
}
if(isset($_POST['submitBtn'])){
	$recording_name = $_POST['recording_name'];
	$Date_of_Upload = $_POST['Date_of_Upload'];
	$Driving_link = $_POST['Driving_link'];
	$insert_query = mysqli_prepare($conn,"INSERT INTO `internship_recording`(`recording_topic_name`, `date_of_upload`, `driving_link`,`trainer_id`) VALUES (?,?,?,?)");
	$insert_query->bind_param('sssi',$recording_name,$Date_of_Upload,$Driving_link,$_COOKIE['trainer_id']);
	if($insert_query->execute()){
		$_SESSION['message_success'] = true;	
		header('location: createrecordings.php');
	}
	else{
		$_SESSION['message_failed'] = true;
		$_SESSION["err_msg"] = "Unexpected Error. Please fill the correct details according to the required format.";
	}
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
<?php
	if (isset($_SESSION['message_success']) && $_SESSION['message_success'] == true) {
		echo "<script>toastr.success('Meeting Scheduled Successfully')</script>";
		session_destroy();
	}
	?>

    <?php
	if (isset($_SESSION['message_failed']) && $_SESSION['message_failed'] == true) {
		echo "<script>toastr.error('" . $_SESSION["err_msg"] . "')</script>";
		session_destroy();
	}
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

			</div>			<form action="" method="POST" enctype="multipart/form-data">
			<!-- main-content -->
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

                    
					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Create Recordings</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="javascript:void(0);">Internship Management</a></li>
								<li class="breadcrumb-item active" aria-current="page">Recordings</li>
								<li class="breadcrumb-item active" aria-current="page">Meetings</li>
							</ol>
						</div>
					</div>
					
									
								
                                               								
									</div>
									<br>
									

					
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									
									
									<div class="">
										<div class="row row-xs formgroup-wrapper">
										         <div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputDOB">Recording Topic Name</label>
												<input class="form-control"  placeholder="enter the recording name" type="text" name="recording_name" required>
											</div>
											</div>
									
									     <div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputDOB">Date of Upload</label>
												<input class="form-control" id="dateMask" placeholder="MM/DD/YYYY" type="date" name="Date_of_Upload" required>
											</div>
											</div>
											
											
																						
											
										    <div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputcode">Driving link</label>
												<input type="text" class="form-control" id="exampleInputcode" placeholder="Enter driving link" name="Driving_link" required>
											</div>
											</div> <br>
											

											

									
										</div>
								<button type="submit" name="submitBtn" class="btn btn-info mt-3 mb-0" data-bs-target="#schedule" data-bs-toggle="modal" style="text-align:right">Upload Recording</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					

    
				</div>
				<!-- Container closed -->
			</div>
		
</form>
		

		  <div class="modal fade" id="schedule">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <p> Are you sure you want to upload a recording??</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-success" type="button">Create</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not Now</button>
                                </div>
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
</html>
