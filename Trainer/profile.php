<?php 
if (!isset($_COOKIE['trainer_username']) && !isset($_COOKIE['trainer_password'])) {
	header('location: ../trainer_login.php');
	exit();
}
?>	
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from laravel8.spruko.com/nowa/table-data by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:32:57 GMT -->
<!-- added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /added by HTTrack -->
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
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

                    
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">MY Accounts</span> 
					</div>
					<div class="justify-content-center mt-2">
						<ol class="breadcrumb">
							<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Dashboard</a></li>
							<li class="breadcrumb-item active" aria-current="page">Profile</li>
						</ol>
					</div>
				</div>
				<!-- /breadcrumb -->

				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card">
							<div class="card-body d-md-flex">
								<div class="">
									<span class="profile-image pos-relative">
										<img class="br-5" alt="" src="../images/trainer/profile/">
										
									</span>
								</div>
								<div class="my-md-auto mt-4 prof-details">
									<h4 class="font-weight-semibold ms-md-4 ms-0 mb-3 pb-0"><span style="color:#ff6700"></h4>
									<!--<p class="tx-13 text-muted ms-md-4 ms-0 mb-2 pb-2 ">
										<span class="me-3"><i class="far fa-address-card me-2"></i>Gender
										</span>
										<span class="me-3"><i class="fa fa-taxi me-2"></i>DD/MM/YYYY</span>
										
									</p> -->
									<p class="text-muted ms-md-4 ms-0 mb-3"><span><i
												class="fa fa-phone me-2"></i></span><span
											class="font-weight-semibold me-2">Phone:</span><span></span>
									</p>
									<p class="text-muted ms-md-4 ms-0 mb-3"><span><i
												class="fa fa-envelope me-2"></i></span><span
											class="font-weight-semibold me-2">Email:</span><span></span>
									</p>
									<p class="text-muted ms-md-4 ms-0 mb-3"><span><i
												class="far fa-flag me-2"></i></span><span
											class="font-weight-semibold me-2">Designation:</span><span></span>
									</p>
									
								&nbsp

								</div>
							</div>
							<!--<div class="card-footer py-0">
								<div class="profile-tab tab-menu-heading border-bottom-0">
									<nav class="nav main-nav-line p-0 tabs-menu profile-nav-line border-0 br-5 mb-0	">
										<a class="nav-link  mb-2 mt-2 active" data-bs-toggle="tab"
											href="#about">About</a>
										<a class="nav-link mb-2 mt-2" data-bs-toggle="tab" href="#edit">Edit Profile</a>
										<a class="nav-link  mb-2 mt-2" data-bs-toggle="tab"
											href="#timeline">Timeline</a>
										<a class="nav-link  mb-2 mt-2" data-bs-toggle="tab" href="#gallery">Gallery</a>
										<a class="nav-link  mb-2 mt-2" data-bs-toggle="tab" href="#friends">Friends</a>
										<a class="nav-link  mb-2 mt-2" data-bs-toggle="tab" href="#settings">Account
											Settings</a>
									</nav>
								</div> -->
							</div>
						</div>
					</div>
				</div>

				<!-- Row -->
				<div class="row row-sm">
					<div class="col-lg-12 col-md-12">
						<div class="custom-card main-content-body-profile">
							<div class="tab-content">
								<div class="main-content-body tab-pane  active" id="about">
									<div class="card">
										<div class="card-body border-0">
											<div class="mb-4 main-content-label">Trainer Information</div>
											<form class="form-horizontal">
											<!--	<div class="mb-4 main-content-label">Name</div> -->
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Trainer Name</label>
														</div>
														<div class="col-md-9">
															<input readonly type="text" class="form-control"
																placeholder="Student Name" name="Trainer_Name" id="exampleInputName" value="">
																<input type="hidden" name="id" value="">
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Phone Number</label>
														</div>
														<div class="col-md-9">
															<input readonly type="Number" class="form-control"
																placeholder="10 Digit Number" name="Personal_Phone_Number" id="exampleInputName" disabled placeholder="" value="">
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Email ID</label>
														</div>
														<div class="col-md-9">
															<input readonly type="text" class="form-control" placeholder="Email" name="Personal_mail_id" id="exampleInputName" disabled placeholder="" value=""
																>
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Date of birth</label>
														</div>
														<div class="col-md-9">
															<input readonly type="date" class="form-control" id="dateMask"
																placeholder="DD/MM/YYYY" name="Date_Of_Birth" id="exampleInputName" disabled placeholder="" value="">
														</div>
													</div>
												</div>
											<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Aadhar Card No</label>
														</div>
														<div class="col-md-9">
															<input readonly type="number" class="form-control"
																placeholder="Pincode" name="Aadhar_Card_No" id="exampleInputName" disabled placeholder="" value="">
														</div>
													</div>
												</div>
												
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Aadhar Card Document</label>
														</div>
														<a target="_blank" href="../images/trainer/aadhar_card/" ><button type="submit" class="btn btn-primary mt-3 mb-0" style="text-align:right">Download</button></a>
 
													</div>
												</div>
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label"> PAN Card No</label>
														</div>
														<div class="col-md-9">
															<input readonly type="number" class="form-control"
																placeholder="Pincode"  name="Pan_Card_No" id="exampleInputName" disabled placeholder="" value="" >
														</div>
													</div>
												</div>
												
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">  
															<label class="form-label">PAN Card Document</label>
														</div>
														<a target="_blank" href="../images/trainer/pan_card/" ><button type="submit" class="btn btn-primary mt-3 mb-0" style="text-align:right">Download</button></a>

													</div>
												</div>
												<!--<div class="mb-4 main-content-label">Contact Info</div>-->
												
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Date of Joining</label>
														</div>
														<div class="col-md-9">
															<input readonly type="date" class="form-control" id="dateMask"
																placeholder="DD/MM/YYYY" name="Date_Of_joining" id="exampleInputName" disabled placeholder="" value="">
														</div>
													</div>
												</div>
												

												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Qualification</label>
														</div>
														<div class="col-md-9">
															<input readonly type="text" class="form-control"
																placeholder="Qualification" name="Qualification" id="exampleInputName" disabled placeholder="" value="" >
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Trainer mail id</label>
														</div>
														<div class="col-md-9">
															<input readonly type="text" class="form-control"
																placeholder="Qualification" name="Personal_Mail_id" id="exampleInputName" disabled placeholder="" value="" >
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">designation</label>
														</div>
														<div class="col-md-9">
															<input readonly type="text" class="form-control"
																placeholder="Qualification" name="Designation" id="exampleInputName" disabled placeholder="" value="" >
														</div>
													</div>
												</div>
												
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Any Experience</label>
														</div>
														<div class="col-md-9">
															<input readonly type="Text" class="form-control"name="any_experience" id="exampleInputName" disabled placeholder="" value=""
																placeholder="Expereince" >
														</div>
													</div>
												</div>
												
												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Previous organisation name</label>
														</div>
														<div class="col-md-9">
															<input readonly type="text" class="form-control"
																placeholder="Organisation" name="prev_current_organization_name" id="exampleInputName" disabled placeholder="" value="">
														</div>
													</div>
												</div>
													<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Trainer Document</label>
														</div>
														<a target="_blank" href="../images/trainer/trainer_documents/" ><button type="submit" class="btn btn-primary mt-3 mb-0" style="text-align:right">Download</button></a>

													</div>
												</div>

												<div class="form-group ">
													<div class="row row-sm">
														<div class="col-md-3">
															<label class="form-label">Referral Code</label>
														</div>
														<div class="col-md-9">
															<input readonly type="text" class="form-control"
																placeholder="Referral Code"
																value="TRIARIGHT_134">
														</div>
													</div>
												</div>

												<button class="btn ripple btn-primary" type="button"><a href="updatetrainerprofile.php?Id=&page=profile">update profile</a></button>			
												
											</form>
										</div>
									</div>
								</div>
								
																</div> 
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

<!-- Mirrored from laravel8.spruko.com/nowa/profile by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:31:32 GMT -->
</html>
