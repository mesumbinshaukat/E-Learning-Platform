<?php 
include('../db_connection/connection.php');
if (!isset($_COOKIE['trainer_username']) && !isset($_COOKIE['trainer_password'])) {
	header('location: ../trainer_login.php');
	exit();
}
if(isset($_POST['submitBtn'])){
	$Date_of_Summary = $_POST['Date_of_Summary'];
	$Performer_of_the_day = $_POST['Performer_of_the_day'];
	$Topics_Covered = $_POST['Topics_Covered'];
	$Overall_Feedback = $_POST['Overall_Feedback'];
	$batch_id = $_POST['batch_id'];

	$select_batch = mysqli_query($conn,"SELECT * FROM `batch` WHERE id = '$batch_id'");
	$fetch_batch = mysqli_fetch_assoc($select_batch);
	if($fetch_batch['id'] == $batch_id){
	$batch_name = $fetch_batch['batch_name'];
	$insert_query = mysqli_prepare($conn,"INSERT INTO `batches_summary`(`date_of_summary`, `performer_of_day`, `topics_covered`, `overall_feedback`, `batch_id`,`batch_name`) VALUES (?,?,?,?,?,?)");
	$insert_query->bind_param("ssssss",$Date_of_Summary,$Performer_of_the_day,$Topics_Covered,$Overall_Feedback,$batch_id,$batch_name);
	if($insert_query->execute()){
		$_SESSION['message_success'] = true;
		header('location: createsummary.php');
	}
	else{
		$_SESSION['message_failed'] = true;
		$_SESSION["err_msg"] = "Unexpected Error. Please fill the correct details according to the required format.";
	}
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
		<title>Create Summary</title>

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
		echo "<script>toastr.success('Summary Created Successfully')</script>";
		session_destroy();
	}
	?>

    <?php
	if (isset($_SESSION['message_failed']) && $_SESSION['message_failed'] == true) {
		echo "<script>toastr.error('" . $_SESSION["err_msg"] . "')</script>";
		session_destroy();
	}
	?>

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

			</div>			<form method="POST" enctype="multipart/form-data">

			<!-- main-content -->
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

                    
					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Create Summary</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="javascript:void(0);">batches management</a></li>
								<li class="breadcrumb-item active" aria-current="page">Summary</li>
								<li class="breadcrumb-item active" aria-current="page">Create</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->
					
                                               								
									</div>
									<br>
									<div class="form-group col-md-4">
                        <select name="batch_id" required class="form-control form-select select2"
                            data-bs-placeholder="Select Batch">
                            <?php
    				  $trainer_id = $_COOKIE['trainer_id'];
    				  $batch = mysqli_query($conn, "SELECT * FROM `batch` WHERE trainer_id = '$trainer_id'");
    				  if (mysqli_num_rows($batch) > 0) {
    				      while ($row = mysqli_fetch_assoc($batch)) {
    				  ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['batch_name'] ?></option>
                            <?php
    				      }
    				  }

      						 ?>
                        </select>
                    </div>			

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									
									
									<div class="">
										<div class="row row-xs formgroup-wrapper">
										    
									        <div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputDOB">Date of Summary</label>
												<input class="form-control" name="Date_of_Summary" id="dateMask" placeholder="MM/DD/YYYY" type="date" required>
											</div>
											</div>
											
												<div class="col-md-6">
											<div class="form-group">
										<label for="exampleInputAadhar">Performer of the day</label>
										<input type="text" name="Performer_of_the_day" class="form-control" id="exampleInputPersonalPhone" placeholder="Enter candidate name" required>
									        </div>
											</div>
											<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputAadhar">Topics Covered</label>
												<input type="text" name="Topics_Covered"  class="form-control" id="exampleInputAadhar" placeholder="Topics List" required>
											</div>
											</div>
											<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputAadhar">Overall Feedback</label>
												<input type="text"  name="Overall_Feedback" class="form-control" id="exampleInputAadhar" placeholder="Feedback" required>
											</div>
											</div>
										  
									
										</div>
								<button type="submit"  name="submitBtn" class="btn btn-info mt-3 mb-0" data-bs-target="#schedule" data-bs-toggle="modal" style="text-align:right">Add Summary</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					

    
				</div>
				<!-- Container closed -->
			</div>
		
</form>
		

		  <!-- <div class="modal fade" id="schedule">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <p> Are you sure you want to add summary?</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-success" type="button">Create</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not Now</button>
                                </div>
                            </div>
                        </div>
                    </div> -->

            
            <!-- Footer opened -->
		
			<!-- Footer closed -->

		</div>
		<!-- End Page -->

        <!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

		<!-- JQUERY JS -->
	    <?php 
	 include('./script.php'); 
	  ?>

    </body>

<!-- Mirrored from laravel8.spruko.com/nowa/emptypage by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:32:40 GMT -->
</html>
