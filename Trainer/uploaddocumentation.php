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
<form action="../superadmin/connection_files/create/trainer_documentations_create.php" method="POST" enctype="multipart/form-data">
			<!-- main-content -->
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

                    
					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Upload Documentations</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="javascript:void(0);">Internship Management</a></li>
								<li class="breadcrumb-item active" aria-current="page">Documentation</li>
								<li class="breadcrumb-item active" aria-current="page">Upload</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->
					
										<!-- <div class="row row-sm">
					                 <div class="form-group col-md-4">
										<select name="country" class="form-control form-select select2" data-bs-placeholder="Select Course">
											<option value="">Course1</option>
											<option value="">Course2</option>
											<option value="">Course3</option>
											<option value="">Course4</option>
											<option value="" selected>Course5</option>
										</select>
									</div>
									<div class="form-group col-md-4">
									<select name="country" class="form-control form-select select2" data-bs-placeholder="Select Trainer">
											<option value="">Trainer1</option>
											<option value="">Trainer2</option>
											<option value="">Trainer3</option>
											<option value="">Trainer4</option>
											<option value="" selected>Trainer5</option>
										</select>
									</div>
									 -->
									<div class="form-group col-md-4">
	                                <select name="batch_id" required class="form-control form-select select2" data-bs-placeholder="Select Batch">
										
										</select>
									</div>
                                               								
									</div>
									<br>
									

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									
									<div class="">
										<div class="row row-xs formgroup-wrapper">
									    	<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputcode"> Shared Documents</label>
												<input type="file" class="form-control" id="exampleInputcode" placeholder="" name="Shared_Documents" required>
											</div>
											</div>
											
												<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputcode"> Description</label>
												<input type="text" class="form-control"  id="exampleInputcode" placeholder="" name="Description" required>
											</div>
											</div>
																		
											<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputcode"> additional information</label>
												<input type="text" class="form-control"  id="exampleInputcode" placeholder="" name="additional_information" required>
											</div>
											</div>

                                         	<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputcode">Date of documentation</label>
												<input type="date" class="form-control" id="exampleInputcode" placeholder="" name="date_of_documentation" required>
											</div>
											</div>  
											
										</div>
										<button type="submit" name="submit"class="btn btn-info mt-3 mb-0" data-bs-target="#schedule" data-bs-toggle="modal" style="text-align:right">add Documentation</button>
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
                                    
                                    <p> Are you sure you want to add document?</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-success" type="button">Create</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

            
            <!-- Footer opened -->
		
			<!-- Footer closed -->

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
