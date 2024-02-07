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

			</div>
			<!-- main-content -->
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

                    
					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Change Password</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Change Password</a></li>
								<li class="breadcrumb-item active" aria-current="page">Password</li>
								<li class="breadcrumb-item active" aria-current="page">Change</li>
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
												<label for="exampleInputPassword">Current Password</label>
												<input type="text" class="form-control" id="exampleInputName" placeholder="Enter Current Password">
											</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
												<label for="exampleInputPassword">New Password</label>
												<input  type="text" class="form-control" id="exampleInputName" placeholder="Enter New Passowrd">
											</div>
											</div>
										<div class="col-md-6">
												<div class="form-group">
												<label for="exampleInputPassword">Re-Enter New Password</label>
												<input type="text" class="form-control" id="exampleInputName" placeholder="Re-Enter New Passowrd">
											</div>
											</div>
										

											
									        
											

											
											
									
											
						
										
										</div>
										<button type="submit" class="btn btn-info mt-3 mb-0" data-bs-target="#schedule" data-bs-toggle="modal" style="text-align:right">Change Password</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					

    
				</div>
				<!-- Container closed -->
			</div>
		
		

		  <div class="modal fade" id="schedule">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <p> Are you sure you want to change the password??</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-success" type="button">Change</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

            
            <!-- Footer opened -->
						<div class="main-footer">
				<div class="container-fluid pd-t-0-f ht-100p">
					 Copyright © 2023 <a href="www.triaright.com" class="text-primary">triaright</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="http://www.mycompany.co.in"> my company</a> . All rights reserved
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

<!-- Mirrored from laravel8.spruko.com/nowa/emptypage by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:32:40 GMT -->
</html>
