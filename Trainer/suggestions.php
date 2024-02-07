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

			</div><form action="../superadmin/connection_files/create/suggestion_create.php" method="POST">
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

                    
					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Suggest a Course</span>
						</div>
                      
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Courses</a></li>
								<li class="breadcrumb-item active" aria-current="page">Suggestions</li>
								<li class="breadcrumb-item active" aria-current="page">add</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									
									
									<div class="">
										<div class="row row-xs formgroup-wrapper">
											<div class="col-md-6">
												<div class="form-group">
												<label for="exampleInputName">name of the Course</label>
												<input type="text" name="course_name" class="form-control" id="exampleInputName" placeholder="Enter Name">
											</div>
											</div>
											<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputCompanyPhone"> Course Description</label>
												<textarea class="form-control" name="course_description" placeholder="Textarea" rows="2"></textarea>
											</div>
											</div>
											<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputCompanyPhone">Topics to be covered</label>
												<textarea class="form-control" name="topics_to_be_covered" placeholder="Textarea" rows="2"></textarea>
											</div>
											</div>
											<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputPersonalPhone"> Duration</label>
												<input type="number" class="form-control" name="duration" id="exampleInputPersonalPhone" placeholder="duration of Course">
											</div>
											</div>
											<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputCompanyPhone">Benefits of Course</label>
												<textarea class="form-control" placeholder="Textarea" name="benefits" rows="2"></textarea>
											</div>
											</div>
											
											<div class="col-md-6">
											<div class="form-group">
										<label for="exampleInputAadhar">Training Type</label>
										<select  class="form-control form-select select2" name="training_type" data-bs-placeholder="Select Country">
											<option value="Hybrid">Hybrid</option>
											<option value="Offline">Offline</option>
											<option value="Virtual Live Sessions">Virtual Live Sessions</option>
											<option value="Virtual Recorded Sessions">Virtual Recorded Sessions</option>
										</select>
									</div>
											</div>
										   
																						<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputQualification">suitable student qualification</label>
												<input type="text" class="form-control" name="suitable_quallification" id="exampleInputQualification" placeholder="Enter qualification">
											</div>
											</div>
											<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputCompanyPhone">Pre-requirements</label>
												<textarea class="form-control" placeholder="Textarea" name="pre_requirements" rows="2"></textarea>
											</div>
											</div>
											

											<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputAadhar">Approx Cost for Course</label>
												<input type="number" class="form-control" id="exampleInputAadhar" name="cost_of_course" placeholder="Course cost">
											</div>
											</div>
											
											

											
											<div class="col-md-6">
												<div class="form-group">
												<label for="exampleInputUserName">Hours per day </label>
												<input class="form-control" id="number" placeholder="00:00" name="hours_perday" type="text">
											</div>
											</div>
											
											<div class="col-md-12">
											<div class="form-group">
												<label for="exampleInputcode"> Supportive documents</label>
												<input type="file" class="form-control" id="exampleInputcode" name="supportive_documents" placeholder="">
											</div>
											</div>
											
										<div class="col-md-12">
											<div class="form-group">
												<label for="exampleInputcode"> additional information</label>
												<input type="text" class="form-control"  id="exampleInputcode" name="additional_info" placeholder="">
											</div>
											</div>
											

											
									        
											

											
											
									
											
						
										<button type="submit" name="create" value="create" class="btn btn-primary mt-3 mb-0" data-bs-target="#suggest" data-bs-toggle="modal" style="text-align:right">Suggest a Course</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					

    
				</div>
				<!-- Container closed -->
			</div>
</form>
		

		  <!-- <div class="modal fade" id="suggest">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <p> Are you sure you want to suggest a Course??</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-success" type="button">Create</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not Now</button>
                                </div>
                            </div>
                        </div>
                    </div> -->
			<!-- main-content closed -->

       

            
            <!-- Footer opened -->
			<div class="main-footer">
				<div class="container-fluid pd-t-0-f ht-100p">
					 Copyright © 2023 <a href="www.triaright.in" class="text-primary">triaright</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="http://www.mycompany.co.in"> my company</a> . All rights reserved
				</div>
			</div>
			<!-- Footer closed -->

		</div>
		<!-- End Page -->

        <!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

		<?php 
	 include('./script.php'); 
	  ?>

    </body>

<!-- Mirrored from laravel8.spruko.com/nowa/form-wizards by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:32:55 GMT -->
</html>
