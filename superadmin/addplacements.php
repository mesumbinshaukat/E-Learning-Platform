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

	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="">

	<link rel="icon" href="assets/img/icon.png" type="image/x-icon" />

	<!-- ICONS CSS -->
	<link href="assets/plugins/icons/icons.css" rel="stylesheet">

	<!-- BOOTSTRAP CSS -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

	<!-- RIGHT-SIDEMENU CSS -->
	<link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

	<!-- P-SCROLL BAR CSS -->
	<link href="assets/plugins/perfect-scrollbar/p-scrollbar.css" rel="stylesheet" />


	<!-- Data table css -->
	<link href="assets/plugins/datatable/css/dataTables.bootstrap5.css" rel="stylesheet" />
	<link href="assets/plugins/datatable/css/buttons.bootstrap5.min.css" rel="stylesheet">
	<link href="assets/plugins/datatable/responsive.bootstrap5.css" rel="stylesheet" />

	<!-- INTERNAL Select2 css -->
	<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />


	<!-- STYLES CSS -->
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/style-dark.css" rel="stylesheet">
	<link href="assets/css/style-transparent.css" rel="stylesheet">


	<!-- SKIN-MODES CSS -->
	<link href="assets/css/skin-modes.css" rel="stylesheet" />

	<!-- ANIMATION CSS -->
	<link href="assets/css/animate.css" rel="stylesheet">

	<!-- SWITCHER CSS -->
	<link href="assets/switcher/css/switcher.css" rel="stylesheet" />
	<link href="assets/switcher/demo.css" rel="stylesheet" />

	<link rel="icon" href="assets/img/icon.png" type="image/x-icon" />

	<!-- ICONS CSS -->
	<link href="assets/plugins/icons/icons.css" rel="stylesheet">

	<!-- BOOTSTRAP CSS -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

	<!-- RIGHT-SIDEMENU CSS -->
	<link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

	<!-- P-SCROLL BAR CSS -->
	<link href="assets/plugins/perfect-scrollbar/p-scrollbar.css" rel="stylesheet" />


	<!--- Internal Select2 css-->
	<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet">

	<!---Internal Fileupload css-->
	<link href="assets/plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css" />

	<!---Internal Fancy uploader css-->
	<link href="assets/plugins/fancyuploder/fancy_fileupload.css" rel="stylesheet" />



	<!-- STYLES CSS -->
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/style-dark.css" rel="stylesheet">
	<link href="assets/css/style-transparent.css" rel="stylesheet">


	<!-- SKIN-MODES CSS -->
	<link href="assets/css/skin-modes.css" rel="stylesheet" />

	<!-- ANIMATION CSS -->
	<link href="assets/css/animate.css" rel="stylesheet">

	<!-- SWITCHER CSS -->
	<link href="assets/switcher/css/switcher.css" rel="stylesheet" />
	<link href="assets/switcher/demo.css" rel="stylesheet" />

</head>

<body class="ltr main-body app sidebar-mini">

	<!-- Switcher -->
	<div class="switcher-wrapper">
		<div class="demo_changer">
			<div class="form_holder sidebar-right1">
				<div class="row">
					<div class="predefined_styles">

						<div class="swichermainleft text-center">
							<h4>LTR AND RTL VERSIONS</h4>
							<div class="skin-body">
								<div class="switch_section">
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">LTR</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch25" id="myonoffswitch54" class="onoffswitch2-checkbox" checked>
											<label for="myonoffswitch54" class="onoffswitch2-label"></label>
										</p>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">RTL</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch25" id="myonoffswitch55" class="onoffswitch2-checkbox">
											<label for="myonoffswitch55" class="onoffswitch2-label"></label>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="swichermainleft">
							<h4>Navigation Style</h4>
							<div class="skin-body">
								<div class="switch_section">
									<div class="switch-toggle d-flex">
										<span class="me-auto">Vertical Menu</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
											<label for="myonoffswitch34" class="onoffswitch2-label"></label>
										</p>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Horizantal Click Menu</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch35" class="onoffswitch2-checkbox">
											<label for="myonoffswitch35" class="onoffswitch2-label"></label>
										</p>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Horizantal Hover Menu</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch111" class="onoffswitch2-checkbox">
											<label for="myonoffswitch111" class="onoffswitch2-label"></label>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="swichermainleft">
							<h4>Light Theme Style</h4>
							<div class="skin-body">
								<div class="switch_section">
									<div class="switch-toggle d-flex">
										<span class="me-auto">Light Theme</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox">
											<label for="myonoffswitch1" class="onoffswitch2-label"></label>
										</p>
									</div>
									<div class="switch-toggle d-flex">
										<span class="me-auto">Light Primary</span>
										<div class="">
											<input class="wd-25 ht-25 input-color-picker color-primary-light" value="#38cab3" id="colorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id7="transparentcolor" name="lightPrimary">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swichermainleft">
							<h4>Dark Theme Style</h4>
							<div class="skin-body">
								<div class="switch_section">
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Dark Theme</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">
											<label for="myonoffswitch2" class="onoffswitch2-label"></label>
										</p>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Dark Primary</span>
										<div class="">
											<input class="wd-25 ht-25 input-dark-color-picker color-primary-dark" value="#38cab3" id="darkPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id8="transparentcolor" name="darkPrimary">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swichermainleft">
							<h4>Transparent Style</h4>
							<div class="skin-body">
								<div class="switch_section">
									<div class="switch-toggle d-flex mt-2 mb-3">
										<span class="me-auto">Transparent Theme</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitchTransparent" class="onoffswitch2-checkbox">
											<label for="myonoffswitchTransparent" class="onoffswitch2-label"></label>
										</p>
									</div>
									<div class="switch-toggle d-flex">
										<span class="me-auto">Transparent Primary</span>
										<div class="">
											<input class="wd-30 ht-30 input-transparent-color-picker color-primary-transparent" value="#38cab3" id="transparentPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary" data-id9="transparentcolor" name="tranparentPrimary">
										</div>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Transparent Background</span>
										<div class="">
											<input class="wd-30 ht-30 input-transparent-color-picker color-bg-transparent" value="#38cab3" id="transparentBgColorID" type="color" data-id5="body" data-id6="theme" data-id9="transparentcolor" name="transparentBackground">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swichermainleft">
							<h4>Transparent Bg-Image Style</h4>
							<div class="skin-body">
								<div class="switch_section">
									<div class="switch-toggle d-flex">
										<span class="me-auto">BG-Image Primary</span>
										<div class="">
											<input class="wd-30 ht-30 input-transparent-color-picker color-bgImg-transparent" value="#38cab3" id="transparentBgImgPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary" data-id9="transparentcolor" name="tranparentPrimary">
										</div>
									</div>
									<div class="switch-toggle">
										<a class="bg-img1 bg-img" href="javascript:void(0);"><img src="assets/img/media/bg-img1.jpg" id="bgimage1" alt="switch-img"></a>
										<a class="bg-img2 bg-img" href="javascript:void(0);"><img src="assets/img/media/bg-img2.jpg" id="bgimage2" alt="switch-img"></a>
										<a class="bg-img3 bg-img" href="javascript:void(0);"><img src="assets/img/media/bg-img3.jpg" id="bgimage3" alt="switch-img"></a>
										<a class="bg-img4 bg-img" href="javascript:void(0);"><img src="assets/img/media/bg-img4.jpg" id="bgimage4" alt="switch-img"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="swichermainleft leftmenu-styles">
							<h4>Leftmenu Styles</h4>
							<div class="skin-body">
								<div class="switch_section">
									<div class="switch-toggle d-flex">
										<span class="me-auto">Light Menu</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch3" class="onoffswitch2-checkbox" checked>
											<label for="myonoffswitch3" class="onoffswitch2-label"></label>
										</p>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Color Menu</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch4" class="onoffswitch2-checkbox">
											<label for="myonoffswitch4" class="onoffswitch2-label"></label>
										</p>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Dark Menu</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch5" class="onoffswitch2-checkbox">
											<label for="myonoffswitch5" class="onoffswitch2-label"></label>
										</p>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Gradient Menu</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch25" class="onoffswitch2-checkbox">
											<label for="myonoffswitch25" class="onoffswitch2-label"></label>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="swichermainleft header-styles">
							<h4>Header Styles</h4>
							<div class="skin-body">
								<div class="switch_section">
									<div class="switch-toggle d-flex">
										<span class="me-auto">Light Header</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch6" class="onoffswitch2-checkbox" checked>
											<label for="myonoffswitch6" class="onoffswitch2-label"></label>
										</p>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Color Header</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch7" class="onoffswitch2-checkbox">
											<label for="myonoffswitch7" class="onoffswitch2-label"></label>
										</p>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Dark Header</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch8" class="onoffswitch2-checkbox">
											<label for="myonoffswitch8" class="onoffswitch2-label"></label>
										</p>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Gradient Header</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch26" class="onoffswitch2-checkbox">
											<label for="myonoffswitch26" class="onoffswitch2-label"></label>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="swichermainleft">
							<h4>Layout Width Styles</h4>
							<div class="skin-body">
								<div class="switch_section">
									<div class="switch-toggle d-flex">
										<span class="me-auto">Full Width</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4" id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
											<label for="myonoffswitch9" class="onoffswitch2-label"></label>
										</p>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Boxed</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4" id="myonoffswitch10" class="onoffswitch2-checkbox">
											<label for="myonoffswitch10" class="onoffswitch2-label"></label>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="swichermainleft">
							<h4>Layout Positions</h4>
							<div class="skin-body">
								<div class="switch_section">
									<div class="switch-toggle d-flex">
										<span class="me-auto">Fixed</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5" id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
											<label for="myonoffswitch11" class="onoffswitch2-label"></label>
										</p>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Scrollable</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5" id="myonoffswitch12" class="onoffswitch2-checkbox">
											<label for="myonoffswitch12" class="onoffswitch2-label"></label>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="swichermainleft vertical-switcher">
							<h4>Sidemenu layout Styles</h4>
							<div class="skin-body">
								<div class="switch_section">
									<div class="switch-toggle d-flex">
										<span class="me-auto">Default Menu</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
											<label for="myonoffswitch13" class="onoffswitch2-label"></label>
										</p>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Closed Menu</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch30" class="onoffswitch2-checkbox default-menu">
											<label for="myonoffswitch30" class="onoffswitch2-label"></label>
										</p>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Icon with Text</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch14" class="onoffswitch2-checkbox">
											<label for="myonoffswitch14" class="onoffswitch2-label"></label>
										</p>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Icon Overlay</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch15" class="onoffswitch2-checkbox">
											<label for="myonoffswitch15" class="onoffswitch2-label"></label>
										</p>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Hover Submenu</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch32" class="onoffswitch2-checkbox">
											<label for="myonoffswitch32" class="onoffswitch2-label"></label>
										</p>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<span class="me-auto">Hover Submenu style 1</span>
										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch33" class="onoffswitch2-checkbox">
											<label for="myonoffswitch33" class="onoffswitch2-label"></label>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="swichermainleft">
							<h4>Reset All Styles</h4>
							<div class="skin-body">
								<div class="switch_section my-4">
									<button class="btn btn-danger btn-Block ResetCustomStyles" type="button">Reset All
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Switcher -->

	<!-- Loader -->
	<!--<div id="global-loader">-->
	<!--	<img src="assets/img/preloader.svg" class="loader-img" alt="Loader">-->
	<!--</div>-->
	<!-- /Loader -->

	<!-- Page -->
	<div class="page">

		<div>

			<div class="main-header side-header sticky nav nav-item">
				<div class=" main-container container-fluid">
					<div class="main-header-left ">
						<div class="responsive-logo">
							<a href="" class="header-logo">
								<img src="assets/img/logowhite.png" class="mobile-logo logo-1" alt="logo">
								<img src="assets/img/logoblack.png" class="mobile-logo dark-logo-1" alt="logo">
							</a>
						</div>
						<div class="app-sidebar__toggle" data-bs-toggle="sidebar">
							<a class="open-toggle" href="javascript:void(0);"><i class="header-icon fe fe-align-left"></i></a>
							<a class="close-toggle" href="javascript:void(0);"><i class="header-icon fe fe-x"></i></a>
						</div>
						<div class="logo-horizontal">
							<a href="index.php" class="header-logo">
								<img src="assets/img/logowhite.png" class="mobile-logo logo-1" alt="logo">
								<img src="assets/img/logoblack.png" class="mobile-logo dark-logo-1" alt="logo">
							</a>
						</div>

					</div>
					<?php include('./partials/navbar.php'); ?>
				</div>
			</div>
			<!-- /main-header -->

			<!-- main-sidebar -->
			<div class="sticky">
				<?php include('./partials/sidebar.php'); ?>
			</div>
			<!-- main-sidebar -->

		</div>
		<form action="connection_files/create/add_placements.php" method="POST" enctype="multipart/form-data">
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">


					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
							<span class="main-content-title mg-b-0 mg-b-lg-1">Add Placement</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item "><a href="javascript:void(0);">Placement</a></li>
								<li class="breadcrumb-item " aria-current="page">Add</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->


					<!-- /row -->

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">

									<div id="wizard3">
										<h3>Overview</h3>
										<section>
											<div class="control-group form-group">
												<label class="form-label">Company Name <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>

												<input type="text" name="company_name" class="form-control required" placeholder="Company Name" required>
											</div>
											<div class="control-group form-group">
												<label class="form-label">Job Role <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
												<input type="text" name="job_role" class="form-control required" placeholder="Role" required>
											</div>
											<div class="control-group form-group">
												<label class="form-label">Salary <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
												<input type="number" name="salary" class="form-control required" placeholder="Enter Salary" required>
											</div>
											<div class="control-group form-group mb-2">
												<label class="form-label">Industry <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
												<select name="industry" class="form-control form-select select2" data-bs-placeholder="Select Stream" required>

													<option value="Information Technology">Information Technology
													</option>
													<option value="Non IT">Non IT</option>
													<option value="Finance">Finance</option>
													<option value="Pharmaceuticals">Pharmaceuticals</option>
													<option value="Management">Management</option>
													<option value="event">event</option>
													<option value="TESTING">TESTING</option>
												</select>
											</div>
											<div class="control-group form-group mb-2">
												<label class="form-label">Experience <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
												<select name="experience" class="form-control form-select select2" data-bs-placeholder="Yes/No" required>
													<option value="Fresher">Fresher</option>
													<option value="Experience">Experience</option>
													<option value="Both">Both</option>

												</select>
											</div>

											<div class="control-group form-group mb-2">
												<label class="form-label">Work Mode <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
												<select name="workmode" class="form-control form-select select2" data-bs-placeholder="Yes/No" required>
													<option value="WorkfromHome">Work from Home</option>
													<option value="WorkFromoffice">Work From office</option>
													<option value="Hybrid">Hybrid</option>

												</select>
											</div>

											<div class="control-group form-group">
												<label class="form-label">Years of Experience <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
												<input type="number" name="years_of_experience" class="form-control required" placeholder="Experience" required>
											</div>

											<div class="control-group form-group mb-2">
												<label class="form-label">Eligibility <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
												<select name="eligibility" class="form-control form-select select2" data-bs-placeholder="Select Eligibility" required>
													<option value="UnderGraduate">Under Graduate</option>
													<option value="Graduate">Graduate</option>
													<option value="Post Graduate">Post Graduate</option>




												</select>
											</div>
											<div class="control-group form-group">
												<label class="form-label">Location <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
												<input type="text" name="location" class="form-control required" placeholder="Enter Location" required>
											</div>
											<div class="control-group form-group mb-2">
												<label class="form-label">Job Type <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
												<select name="jobtype" class="form-control form-select select2" data-bs-placeholder="Select Type" required>
													<option value="FullTime">Full Time</option>
													<option value="PartTime">Part Time</option>

												</select>
											</div>

											<div class="control-group form-group mb-2">
												<label class="form-label">Preferred For <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
												<select name="preffered_for" class="form-control form-select select2" data-bs-placeholder="Select Eligibility" required>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
													<option value="Both">Both</option>
												</select>
											</div>
											<div class="control-group form-group">
												<label class="form-label">Number of Vaccancies <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
												<input type="number" name="number_of_vacancies" class="form-control required" placeholder="Vaccancies Count" required>
											</div>
											<div class="control-group form-group">
												<label class="form-label">Last Date to apply <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
												<input type="date" name="last_date" class="form-control required" placeholder="Vaccancies Count" required>
											</div>



										</section>
										<h3> Full information</h3>
										<section>

											<label class="form-label">Full Description <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
											<div class="form-label">
												<input type="text" name="full_description" class="form-control" placeholder="Textarea" required>
											</div>


											<label class="form-label">Requirements <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
											<div class="form-label">
												<input type="text" name="requirements" class="form-control" placeholder="Textarea" required>
											</div>

											<label class="form-label">Additional information <span style="color:#D3D3D3;font-size: 90%;">(Optional)</span></label>
											<div class="form-label">
												<input type="text" name="additional_information" class="form-control" placeholder="Textarea">
											</div>

										</section>
										<h3>Facilities </h3>
										<section>

											<div class="control-group form-group mb-2">
												<label class="form-label">Food Allowances <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
												<select name="food_allowance" class="form-control form-select select2" data-bs-placeholder="Yes/No" required>
													<option value="Yes">Yes</option>
													<option value="No">No</option>

												</select>
											</div>

											<div class="control-group form-group mb-2">
												<label class="form-label">Transport Allowances <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
												<select name="transport_allowance" class="form-control form-select select2" data-bs-placeholder="Yes/No" required>
													<option value="Yes">Yes</option>
													<option value="No">No</option>

												</select>
											</div>

											<div class="control-group form-group mb-2">
												<label class="form-label">ESI/PF <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
												<select name="espf" class="form-control form-select select2" data-bs-placeholder="Yes/No" required>
													<option value="Yes">Yes</option>
													<option value="No">No</option>

												</select>
											</div>

										</section>

										<h3>Uploadings </h3>
										<section>

											<div class="control-group form-group">
												<label class="form-label">Main Image (1200px*800px) <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
												<input type="file" name="main_image" class="form-control" placeholder="Choose File" required width="540" height="300">
											</div>
											<div class="control-group form-group">
												<label class="form-label">Inner image (600px*600px) <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
												<input type="file" name="inner_image" class="form-control" placeholder="Choose File" required width="540" height="300">
											</div>
											<div class="control-group form-group">
												<label class="form-label">image2(1200px*800px) <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
												<input type="file" name="image2" class="form-control required" placeholder="Choose File" required width="540" height="300">
											</div>
										</section>
										<button name="create" value="submit" type="submit" class="btn btn-primary mt-3 mb-0" onclick="return check()" style="text-align:right">Generate</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- row closed -->


				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->
		</form>

		<!-- Sidebar-right-->
		<div class="sidebar sidebar-right sidebar-animate">
			<div class="panel panel-primary card mb-0 box-shadow">
				<div class="tab-menu-heading card-img-top-1 border-0 p-3">
					<div class="card-title mb-0">Notifications</div>
					<div class="card-options ms-auto">
						<a href="javascript:void(0);" class="sidebar-remove"><i class="fe fe-x"></i></a>
					</div>
				</div>
				<div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
					<div class="tabs-menu ">
						<!-- Tabs -->
						<ul class="nav panel-tabs">
							<li class=""><a href="#side1" class="active" data-bs-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24" viewBox="0 0 24 24" width="24">
										<path d="M0 0h24v24H0V0z" fill="none" />
										<path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z" />
									</svg> Chat</a></li>
							<li><a href="#side2" data-bs-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
										<path d="M10 3H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM9 9H5V5h4v4zm11-6h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 6h-4V5h4v4zm-9 4H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zm-1 6H5v-4h4v4zm8-6c-2.206 0-4 1.794-4 4s1.794 4 4 4 4-1.794 4-4-1.794-4-4-4zm0 6c-1.103 0-2-.897-2-2s.897-2 2-2 2 .897 2 2-.897 2-2 2z" />
									</svg> Notifications</a></li>
							<li><a href="#side3" data-bs-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="side-menu__icon" height="24" version="1.1" width="24" viewBox="0 0 24 24">
										<path d="M12,2C6.48,2 2,6.48 2,12C2,17.52 6.48,22 12,22C17.52,22 22,17.52 22,12C22,6.48 17.52,2 12,2M7.07,18.28C7.5,17.38 10.12,16.5 12,16.5C13.88,16.5 16.5,17.38 16.93,18.28C15.57,19.36 13.86,20 12,20C10.14,20 8.43,19.36 7.07,18.28M18.36,16.83C16.93,15.09 13.46,14.5 12,14.5C10.54,14.5 7.07,15.09 5.64,16.83C4.62,15.5 4,13.82 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,13.82 19.38,15.5 18.36,16.83M12,6C10.06,6 8.5,7.56 8.5,9.5C8.5,11.44 10.06,13 12,13C13.94,13 15.5,11.44 15.5,9.5C15.5,7.56 13.94,6 12,6M12,11C11.17,11 10.5,10.33 10.5,9.5C10.5,8.67 11.17,8 12,8C12.83,8 13.5,8.67 13.5,9.5C13.5,10.33 12.83,11 12,11Z" />
									</svg> Friends</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane active " id="side1">
							<div class="List d-flex align-items-center border-bottom p-3">
								<div class="">
									<span class="avatar bg-primary brround avatar-md">CH</span>
								</div>
								<a class="wrapper w-100 ms-3" href="javascript:void(0);">
									<p class="mb-0 d-flex ">
										<b>New Websites is Created</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
											<small class="text-muted ms-auto">30 mins ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</a>
							</div>
							<div class="List d-flex align-items-center border-bottom p-3">
								<div class="">
									<span class="avatar bg-danger brround avatar-md">N</span>
								</div>
								<a class="wrapper w-100 ms-3" href="javascript:void(0);">
									<p class="mb-0 d-flex ">
										<b>Prepare For the Next Project</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
											<small class="text-muted ms-auto">2 hours ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</a>
							</div>
							<div class="List d-flex align-items-center border-bottom p-3">
								<div class="">
									<span class="avatar bg-info brround avatar-md">S</span>
								</div>
								<a class="wrapper w-100 ms-3" href="javascript:void(0);">
									<p class="mb-0 d-flex ">
										<b>Decide the live Discussion</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
											<small class="text-muted ms-auto">3 hours ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</a>
							</div>
							<div class="List d-flex align-items-center border-bottom p-3">
								<div class="">
									<span class="avatar bg-warning brround avatar-md">K</span>
								</div>
								<a class="wrapper w-100 ms-3" href="javascript:void(0);">
									<p class="mb-0 d-flex ">
										<b>Meeting at 3:00 pm</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
											<small class="text-muted ms-auto">4 hours ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</a>
							</div>
							<div class="List d-flex align-items-center border-bottom p-3">
								<div class="">
									<span class="avatar bg-success brround avatar-md">R</span>
								</div>
								<a class="wrapper w-100 ms-3" href="javascript:void(0);">
									<p class="mb-0 d-flex ">
										<b>Prepare for Presentation</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
											<small class="text-muted ms-auto">1 days ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</a>
							</div>
							<div class="List d-flex align-items-center border-bottom p-3">
								<div class="">
									<span class="avatar bg-pink brround avatar-md">MS</span>
								</div>
								<a class="wrapper w-100 ms-3" href="javascript:void(0);">
									<p class="mb-0 d-flex ">
										<b>Prepare for Presentation</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
											<small class="text-muted ms-auto">1 days ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</a>
							</div>
							<div class="List d-flex align-items-center border-bottom p-3">
								<div class="">
									<span class="avatar bg-purple brround avatar-md">L</span>
								</div>
								<a class="wrapper w-100 ms-3" href="javascript:void(0);">
									<p class="mb-0 d-flex ">
										<b>Prepare for Presentation</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
											<small class="text-muted ms-auto">45 mintues ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</a>
							</div>
							<div class="List d-flex align-items-center p-3">
								<div class="">
									<span class="avatar bg-blue brround avatar-md">U</span>
								</div>
								<a class="wrapper w-100 ms-3" href="javascript:void(0);">
									<p class="mb-0 d-flex ">
										<b>Prepare for Presentation</b>
									</p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<i class="mdi mdi-clock text-muted me-1 tx-11"></i>
											<small class="text-muted ms-auto">2 days ago</small>
											<p class="mb-0"></p>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="tab-pane  " id="side2">
							<div class="List-group List-group-flush ">
								<div class="List-group-item d-flex  align-items-center">
									<div class="me-3">
										<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div>
										<strong>Madeleine</strong> Hey! there I' am available....
										<div class="small text-muted">
											3 hours ago
										</div>
									</div>
								</div>
								<div class="List-group-item d-flex  align-items-center">
									<div class="me-3">
										<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/1.jpg"></span>
									</div>
									<div>
										<strong>Anthony</strong> New product Launching...
										<div class="small text-muted">
											5 hour ago
										</div>
									</div>
								</div>
								<div class="List-group-item d-flex  align-items-center">
									<div class="me-3">
										<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div>
										<strong>Olivia</strong> New Schedule Realease......
										<div class="small text-muted">
											45 mintues ago
										</div>
									</div>
								</div>
								<div class="List-group-item d-flex  align-items-center">
									<div class="me-3">
										<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/8.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div>
										<strong>Madeleine</strong> Hey! there I' am available....
										<div class="small text-muted">
											3 hours ago
										</div>
									</div>
								</div>
								<div class="List-group-item d-flex  align-items-center">
									<div class="me-3">
										<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/11.jpg"></span>
									</div>
									<div>
										<strong>Anthony</strong> New product Launching...
										<div class="small text-muted">
											5 hour ago
										</div>
									</div>
								</div>
								<div class="List-group-item d-flex  align-items-center">
									<div class="me-3">
										<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/6.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div>
										<strong>Olivia</strong> New Schedule Realease......
										<div class="small text-muted">
											45 mintues ago
										</div>
									</div>
								</div>
								<div class="List-group-item d-flex  align-items-center">
									<div class="me-3">
										<span class="avatar avatar-lg brround cover-image" data-image-src="assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div>
										<strong>Olivia</strong> Hey! there I' am available....
										<div class="small text-muted">
											12 mintues ago
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane  " id="side3">
							<div class="List-group List-group-flush ">
								<div class="List-group-item d-flex  align-items-center">
									<div class="me-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Mozelle Belt</div>
									</div>
									<div class="ms-auto">
										<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
									</div>
								</div>
								<div class="List-group-item d-flex  align-items-center">
									<div class="me-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/11.jpg"></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
									</div>
									<div class="ms-auto">
										<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
									</div>
								</div>
								<div class="List-group-item d-flex  align-items-center">
									<div class="me-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/10.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
									</div>
									<div class="ms-auto">
										<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
									</div>
								</div>
								<div class="List-group-item d-flex  align-items-center">
									<div class="me-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
									</div>
									<div class="ms-auto">
										<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
									</div>
								</div>
								<div class="List-group-item d-flex  align-items-center">
									<div class="me-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/13.jpg"></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
									</div>
									<div class="ms-auto">
										<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
									</div>
								</div>
								<div class="List-group-item d-flex  align-items-center">
									<div class="me-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Mozelle Belt</div>
									</div>
									<div class="ms-auto">
										<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded"><i class="mdi mdi-message-outline"></i></a>
									</div>
								</div>
								<div class="List-group-item d-flex  align-items-center">
									<div class="me-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/4.jpg"></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
									</div>
									<div class="ms-auto">
										<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
									</div>
								</div>
								<div class="List-group-item d-flex  align-items-center">
									<div class="me-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/7.jpg"></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
									</div>
									<div class="ms-auto">
										<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded"><i class="mdi mdi-message-outline"></i></a>
									</div>
								</div>
								<div class="List-group-item d-flex  align-items-center">
									<div class="me-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/2.jpg"></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
									</div>
									<div class="ms-auto">
										<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
									</div>
								</div>
								<div class="List-group-item d-flex  align-items-center">
									<div class="me-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/14.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
									</div>
									<div class="ms-auto">
										<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded"><i class="mdi mdi-message-outline"></i></a>
									</div>
								</div>
								<div class="List-group-item d-flex  align-items-center">
									<div class="me-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/11.jpg"></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Florinda Carasco</div>
									</div>
									<div class="ms-auto">
										<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
									</div>
								</div>
								<div class="List-group-item d-flex  align-items-center">
									<div class="me-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/9.jpg"></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Alina Bernier</div>
									</div>
									<div class="ms-auto">
										<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
									</div>
								</div>
								<div class="List-group-item d-flex  align-items-center">
									<div class="me-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/15.jpg"><span class="avatar-status bg-success"></span></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Zula Mclaughin</div>
									</div>
									<div class="ms-auto">
										<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
									</div>
								</div>
								<div class="List-group-item d-flex  align-items-center">
									<div class="me-2">
										<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/4.jpg"></span>
									</div>
									<div class="">
										<div class="font-weight-semibold" data-bs-toggle="modal" data-bs-target="#chatmodel">Isidro Heide</div>
									</div>
									<div class="ms-auto">
										<a href="javascript:void(0);" class="btn btn-sm btn-outline-light btn-rounded" data-bs-toggle="modal" data-bs-target="#chatmodel"><i class="mdi mdi-message-outline"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/Sidebar-right-->

		<!-- Country-selector modal-->
		<div class="modal fade" id="country-selector">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header border-bottom">
						<h6 class="modal-title">Choose Country</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
					</div>
					<div class="modal-body">
						<ul class="row p-3">
							<li class="col-lg-6 mb-2">
								<a href="javascript:void(0);" class="btn btn-country btn-lg btn-Block active">
									<span class="country-selector"><img alt="" src="assets/img/flags/us_flag.jpg" class="me-3 language"></span>Usa
								</a>
							</li>
							<li class="col-lg-6 mb-2 mb-2">
								<a href="javascript:void(0);" class="btn btn-country btn-lg btn-Block">
									<span class="country-selector"><img alt="" src="assets/img/flags/italy_flag.jpg" class="me-3 language"></span>Italy
								</a>
							</li>
							<li class="col-lg-6 mb-2">
								<a href="javascript:void(0);" class="btn btn-country btn-lg btn-Block">
									<span class="country-selector"><img alt="" src="assets/img/flags/spain_flag.jpg" class="me-3 language"></span>Spain
								</a>
							</li>
							<li class="col-lg-6 mb-2">
								<a href="javascript:void(0);" class="btn btn-country btn-lg btn-Block">
									<span class="country-selector"><img alt="" src="assets/img/flags/india_flag.jpg" class="me-3 language"></span>India
								</a>
							</li>
							<li class="col-lg-6 mb-2">
								<a href="javascript:void(0);" class="btn btn-country btn-lg btn-Block">
									<span class="country-selector"><img alt="" src="assets/img/flags/french_flag.jpg" class="me-3 language"></span>France
								</a>
							</li>
							<li class="col-lg-6 mb-2">
								<a href="javascript:void(0);" class="btn btn-country btn-lg btn-Block">
									<span class="country-selector"><img alt="" src="assets/img/flags/mexico.jpg" class="me-3 language"></span>Mexico
								</a>
							</li>
							<li class="col-lg-6 mb-2">
								<a href="javascript:void(0);" class="btn btn-country btn-lg btn-Block">
									<span class="country-selector"><img alt="" src="assets/img/flags/singapore.jpg" class="me-3 language"></span>Singapore
								</a>
							</li>
							<li class="col-lg-6 mb-2">
								<a href="javascript:void(0);" class="btn btn-country btn-lg btn-Block">
									<span class="country-selector"><img alt="" src="assets/img/flags/poland.jpg" class="me-3 language"></span>Poland
								</a>
							</li>
							<li class="col-lg-6 mb-2">
								<a href="javascript:void(0);" class="btn btn-country btn-lg btn-Block">
									<span class="country-selector"><img alt="" src="assets/img/flags/austria.jpg" class="me-3 language"></span>Austria
								</a>
							</li>
							<li class="col-lg-6 mb-2">
								<a href="javascript:void(0);" class="btn btn-country btn-lg btn-Block">
									<span class="country-selector"><img alt="" src="assets/img/flags/russia_flag.jpg" class="me-3 language"></span>Russia
								</a>
							</li>
							<li class="col-lg-6 mb-2">
								<a href="javascript:void(0);" class="btn btn-country btn-lg btn-Block">
									<span class="country-selector"><img alt="" src="assets/img/flags/germany_flag.jpg" class="me-3 language"></span>Germany
								</a>
							</li>
							<li class="col-lg-6 mb-2">
								<a href="javascript:void(0);" class="btn btn-country btn-lg btn-Block">
									<span class="country-selector"><img alt="" src="assets/img/flags/argentina.jpg" class="me-3 language"></span>Argentina
								</a>
							</li>
							<li class="col-lg-6 mb-2">
								<a href="javascript:void(0);" class="btn btn-country btn-lg btn-Block">
									<span class="country-selector"><img alt="" src="assets/img/flags/brazil.jpg" class="me-3 language"></span>Brazil
								</a>
							</li>
							<li class="col-lg-6 mb-2">
								<a href="javascript:void(0);" class="btn btn-country btn-lg btn-Block">
									<span class="country-selector"><img alt="" src="assets/img/flags/uae.jpg" class="me-3 language"></span>U.A.E
								</a>
							</li>
							<li class="col-lg-6 mb-2">
								<a href="javascript:void(0);" class="btn btn-country btn-lg btn-Block">
									<span class="country-selector"><img alt="" src="assets/img/flags/china.jpg" class="me-3 language"></span>China
								</a>
							</li>
							<li class="col-lg-6 mb-2">
								<a href="javascript:void(0);" class="btn btn-country btn-lg btn-Block">
									<span class="country-selector"><img alt="" src="assets/img/flags/uk.jpg" class="me-3 language"></span>U.K
								</a>
							</li>
							<li class="col-lg-6 mb-2">
								<a href="javascript:void(0);" class="btn btn-country btn-lg btn-Block">
									<span class="country-selector"><img alt="" src="assets/img/flags/malaysia.jpg" class="me-3 language"></span>Malaysia
								</a>
							</li>
							<li class="col-lg-6 mb-2">
								<a href="javascript:void(0);" class="btn btn-country btn-lg btn-Block">
									<span class="country-selector"><img alt="" src="assets/img/flags/canada.jpg" class="me-3 language"></span>Canada
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Country-selector modal-->

		<!-- Message Modal -->
		<div class="modal fade" id="chatmodel" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-right chatbox" role="document">
				<div class="modal-content chat border-0">
					<div class="card overflow-hidden mb-0 border-0">
						<!-- action-header -->
						<div class="action-header clearfix">
							<div class="float-start hidden-xs d-flex ms-2">
								<div class="img_cont me-3">
									<img src="assets/img/faces/6.jpg" class="rounded-circle user_img" alt="img">
								</div>
								<div class="align-items-center mt-0">
									<h4 class="text-white mb-0 font-weight-semibold">Daneil Scott</h4>
									<span class="dot-label bg-success"></span><span class="me-3 text-white">online</span>
								</div>
							</div>
							<ul class="ah-actions actions align-items-center">
								<li class="call-icon">
									<a href="#" class="d-done d-md-Block phone-button" data-bs-toggle="modal" data-bs-target="javascript:void(0);audiomodal">
										<i class="fe fe-phone"></i>
									</a>
								</li>
								<li class="video-icon">
									<a href="#" class="d-done d-md-Block phone-button" data-bs-toggle="modal" data-bs-target="javascript:void(0);videomodal">
										<i class="fe fe-video"></i>
									</a>
								</li>
								<li class="dropdown">
									<a href="#" data-bs-toggle="dropdown" aria-expanded="true">
										<i class="fe fe-more-vertical"></i>
									</a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><i class="fa fa-user-circle"></i> view profile</li>
										<li><i class="fa fa-users"></i>add friends</li>
										<li><i class="fa fa-plus"></i> add to group</li>
										<li><i class="fa fa-ban"></i> Block</li>
									</ul>
								</li>
								<li>
									<a href="#" class="" data-bs-dismiss="modal" aria-label="Close">
										<span aria-hidden="true"><i class="fe fe-x-circle text-white"></i></span>
									</a>
								</li>
							</ul>
						</div>
						<!-- action-header end -->

						<!-- msg_card_body -->
						<div class="card-body msg_card_body">
							<div class="chat-box-single-line">
								<abbr class="timestamp">july 1st, 2021</abbr>
							</div>
							<div class="d-flex justify-content-start">
								<div class="img_cont_msg">
									<img src="assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Hi, how are you Jenna Side?
									<span class="msg_time">8:40 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end ">
								<div class="msg_cotainer_send">
									Hi Connor Paige i am good tnx how about you?
									<span class="msg_time_send">8:55 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start ">
								<div class="img_cont_msg">
									<img src="assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									I am good too, thank you for your chat template
									<span class="msg_time">9:00 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end ">
								<div class="msg_cotainer_send">
									You welcome Connor Paige
									<span class="msg_time_send">9:05 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start ">
								<div class="img_cont_msg">
									<img src="assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Yo, Can you update views?
									<span class="msg_time">9:07 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									But I must explain to you how all this mistaken born and I will give
									<span class="msg_time_send">9:10 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start ">
								<div class="img_cont_msg">
									<img src="assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Yo, Can you update views?
									<span class="msg_time">9:07 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									But I must explain to you how all this mistaken born and I will give
									<span class="msg_time_send">9:10 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start ">
								<div class="img_cont_msg">
									<img src="assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Yo, Can you update views?
									<span class="msg_time">9:07 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									But I must explain to you how all this mistaken born and I will give
									<span class="msg_time_send">9:10 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start">
								<div class="img_cont_msg">
									<img src="assets/img/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Okay Bye, text you later..
									<span class="msg_time">9:12 AM, Today</span>
								</div>
							</div>
						</div>
						<!-- msg_card_body end -->
						<!-- card-footer -->
						<div class="card-footer">
							<div class="msb-reply d-flex">
								<div class="input-group">
									<input type="text" class="form-control " placeholder="Typing....">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary ">
											<i class="far fa-paper-plane" aria-hidden="true"></i>
										</button>
									</div>
								</div>
							</div>
						</div><!-- card-footer end -->
					</div>
				</div>
			</div>
		</div>

		<!--Video Modal -->
		<div id="videomodal" class="modal fade">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body mx-auto text-center p-7">
						<h5>Nowa Video call</h5>
						<img src="assets/img/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
						<h4 class="mb-1 font-weight-semibold">Daneil Scott</h4>
						<h6>Calling...</h6>
						<div class="mt-5">
							<div class="row">
								<div class="col-4">
									<a class="icon icon-shape rounded-circle mb-0 me-3" href="javascript:void(0);">
										<i class="fas fa-video-slash"></i>
									</a>
								</div>
								<div class="col-4">
									<a class="icon icon-shape rounded-circle text-white mb-0 me-3" href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
										<i class="fas fa-phone bg-danger text-white"></i>
									</a>
								</div>
								<div class="col-4">
									<a class="icon icon-shape rounded-circle mb-0 me-3" href="javascript:void(0);">
										<i class="fas fa-microphone-slash"></i>
									</a>
								</div>
							</div>
						</div>
					</div><!-- modal-body -->
				</div>
			</div><!-- modal-dialog -->
		</div><!-- modal -->

		<!-- Audio Modal -->
		<div id="audiomodal" class="modal fade">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body mx-auto text-center p-7">
						<h5>Nowa Voice call</h5>
						<img src="assets/img/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
						<h4 class="mb-1  font-weight-semibold">Daneil Scott</h4>
						<h6>Calling...</h6>
						<div class="mt-5">
							<div class="row">
								<div class="col-4">
									<a class="icon icon-shape rounded-circle mb-0 me-3" href="javascript:void(0);">
										<i class="fas fa-volume-up bg-light"></i>
									</a>
								</div>
								<div class="col-4">
									<a class="icon icon-shape rounded-circle text-white mb-0 me-3" href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
										<i class="fas fa-phone text-white bg-primary"></i>
									</a>
								</div>
								<div class="col-4">
									<a class="icon icon-shape  rounded-circle mb-0 me-3" href="javascript:void(0);">
										<i class="fas fa-microphone-slash bg-light"></i>
									</a>
								</div>
							</div>
						</div>
					</div><!-- modal-body -->
				</div>
			</div><!-- modal-dialog -->
		</div><!-- modal -->


		<!-- Footer opened -->
		<div class="main-footer">
			<div class="container-fluid pd-t-0-f ht-100p">
				Copyrights ©TriaRight 2023. All rights reserved by <a href="https://www.triaright.com" class="text-primary">TriaRight</a> developed by <span class="fa fa-heart text-danger"></span><a href="http://www.mycompany.co.in" class="text-primary"> MY Company</a>.
			</div>
		</div>
		<!-- Footer closed -->

	</div>
	<!-- End Page -->

	<!-- BACK-TO-TOP -->
	<a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

	<!-- JQUERY JS -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>

	<!-- BOOTSTRAP JS -->
	<script src="assets/plugins/bootstrap/js/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- IONICONS JS -->
	<script src="assets/plugins/ionicons/ionicons.js"></script>

	<!-- MOMENT JS -->
	<script src="assets/plugins/moment/moment.js"></script>

	<!-- P-SCROLL JS -->
	<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>

	<!-- SIDEBAR JS -->
	<script src="assets/plugins/side-menu/sidemenu.js"></script>

	<!-- STICKY JS -->
	<script src="assets/js/sticky.js"></script>

	<!-- Chart-circle js -->
	<script src="assets/plugins/circle-progress/circle-progress.min.js"></script>

	<!-- RIGHT-SIDEBAR JS -->
	<script src="assets/plugins/sidebar/sidebar.js"></script>
	<script src="assets/plugins/sidebar/sidebar-custom.js"></script>


	<!--Internal  Select2 js -->
	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<!-- Internal Jquery.steps js -->
	<script src="assets/plugins/jquery-steps/jquery.steps.min.js"></script>
	<script src="assets/plugins/parsleyjs/parsley.min.js"></script>

	<!--Internal  Form-wizard js -->
	<script src="assets/js/form-wizard.js"></script>

	<!--Internal Fileuploads js-->
	<script src="assets/plugins/fileuploads/js/fileupload.js"></script>
	<script src="assets/plugins/fileuploads/js/file-upload.js"></script>

	<!--Internal Fancy uploader js-->
	<script src="assets/plugins/fancyuploder/jquery.ui.widget.js"></script>
	<script src="assets/plugins/fancyuploder/jquery.fileupload.js"></script>
	<script src="assets/plugins/fancyuploder/jquery.iframe-transport.js"></script>
	<script src="assets/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
	<script src="assets/plugins/fancyuploder/fancy-uploader.js"></script>


	<!-- EVA-ICONS JS -->
	<script src="assets/plugins/eva-icons/eva-icons.min.js"></script>

	<!-- THEME-COLOR JS -->
	<script src="assets/js/themecolor.js"></script>

	<!-- CUSTOM JS -->
	<script src="assets/js/custom.js"></script>

	<!-- exported JS -->
	<script src="assets/js/exported.js"></script>

	<!-- SWITCHER JS -->
	<script src="assets/switcher/js/switcher.js"></script>

</body>

<!-- Mirrored from laravel8.spruko.com/nowa/form-wizards by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:32:55 GMT -->

</html>