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
					<?php include('./partials/navbar.php') ?>
				</div>
			</div>
			<!-- /main-header -->

			<!-- main-sidebar -->
			<div class="sticky">
				<?php include('./partials/sidebar.php') ?>
			</div>
			<!-- main-sidebar -->

		</div>
		<form action="connection_files/create/student_create.php" method="POST" enctype="multipart/form-data">
			<!-- main-content -->
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">


					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
							<span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Create Student</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Credentials</a></li>
								<li class="breadcrumb-item active" aria-current="page">Student</li>
								<li class="breadcrumb-item active" aria-current="page">Create</li>
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
													<label for="exampleInputName">Student Name <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="text" class="form-control" id="exampleInputName" name="student_name" placeholder="Enter Student Name" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputAadhar">Gender <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<select class="form-control form-select select2" name="gender" data-bs-placeholder="Select Country" required>
														<option value="male">Male</option>
														<option value="female">Female</option>
														<option value="others">others</option>
														<option value="ratherNotSay">Rather not say</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputDOB">Date of Birth <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input class="form-control" id="dateMask" name="date_of_birth" placeholder="DD/MM/YYYY" type="date" d>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPersonalPhone">Phone Number <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="number" class="form-control" name="phone_number" placeholder="1234567890" required max="9999999999" min="1000000000" id="exampleInputPersonalPhone" placeholder="1234567890" required max="9999999999" min="1000000000" placeholder="Enter Phone Number">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPersonalPhone">Alternative Phone Number <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="number" class="form-control" placeholder="1234567890" max="9999999999" min="1000000000" name="alternative_phone_number" id="exampleInputPersonalPhone" placeholder="Enter Alternative Contact Number">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPerEmail">Mail Id <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="email" class="form-control" name="mail_id" id="exampleInputPerEmail" placeholder="Enter Mail ID" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label for="exampleInputPerEmail">Address <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="text" class="form-control " name="address" id="exampleInputPerEmail" rows="5" placeholder="Enter address">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPerEmail">District <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="text" class="form-control" name="district" id="exampleInputPerEmail" placeholder="Enter District">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPerEmail">State <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="text" class="form-control" name="state" id="exampleInputPerEmail" placeholder="Enter State">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPerEmail">PIN code <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="number" class="form-control" name="pincode" id="exampleInputPerEmail" placeholder="enter Pincode">
												</div>
											</div>






											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputQualification">Qualification <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<select class="form-control form-select select2" name="qualification" data-bs-placeholder="select qulification" required>
														<option value="10th">10th</option>
														<option value="+12">+12</option>
														<option value="polytechnic">Polytechnic</option>
														<option value="degree">Degree</option>
														<option value="btech">B.Tech</option>
														<option value="pg">Post Graduation</option>
														<option value="ph.d">Ph.d</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPerEmail">Branch/Stream <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="text" class="form-control " name="stream" id="exampleInputPerEmail" placeholder="MPC/BCOM/CSE" required>
												</div>
											</div>


											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputAadhar"> Semester <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span> </label>
													<select class="form-control form-select select2" name="semester" data-bs-placeholder="Select Country" required>
														<option value="1stsem">1st sem</option>
														<option value="2ndSem">2nd Sem</option>
														<option value="3rdSem">3rd Sem</option>
														<option value="4thSem">4th Sem</option>
														<option value="5thSem">5th Sem</option>
														<option value="6thSem">6th Sem</option>
														<option value="7thSem">7th Sem</option>
														<option value="8thSem">8th Sem</option>
														<option value="Not Required">Not Required</option>
													</select>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputQualification">Account type <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<select class="form-control form-select select2" name="account_type" data-bs-placeholder="select qulification" required>
														<option value=""></option>
														<option value="college">College</option>
														<option value="individual">Individual</option>

													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputQualification">Insitution Name <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<select class="form-control form-select select2" name="institution_name" data-bs-placeholder="select qulification">

														<option value=""></option>
														<option value="GNR Degree College">GNR Degree College</option>
														<option value=""></option>
														<option value="Gayatri Degree & PG College">Gayatri Degree & PG College</option>
														<option value=""></option>
														<option value="SNR Degree College">SNR Degree College</option>
														<option value=""></option>
														<option value="SV Degree College">SV Degree College</option>
														<option value=""></option>
														<option value="Vidya Degree College">Vidya Degree College</option>
														<option value=""></option>
														<option value="Vijetha Junior & Degree College">Vijetha Junior & Degree College</option>
														<option value=""></option>
														<option value="Vignana Sudha Degree & PG College">Vignana Sudha Degree & PG College</option>
														<option value=""></option>
														<option value="R K Degree College">R K Degree College</option>
														<option value=""></option>
														<option value="Krishnaveni Degree College">Krishnaveni Degree College</option>
														<option value=""></option>
														<option value="S V S Degree College">S V S Degree College</option>
														<option value=""></option>
														<option value="SRI VIVEKANANDA DEGREE COLLEGE">SRI VIVEKANANDA DEGREE COLLEGE</option>
														<option value=""></option>
														<option value="Sri Y N Degree College">Sri Y N Degree College</option>
														<option value=""></option>
														<option value="S V R M Degree College">S V R M Degree College</option>
														<option value=""></option>
														<option value="S.V.G.M. GOVERNMENT DEGREE COLLEGE">S.V.G.M. GOVERNMENT DEGREE COLLEGE</option>
														<option value=""></option>
														<option value="QSPIRE ">QSPIRE </option>
														<option value=""></option>
														<option value="SAI PARAMESHWARA DEGREE COLLEGE">SAI PARAMESHWARA DEGREE COLLEGE</option>
														<option value=""></option>
														<option value="Satya institute of Technology and Management">Satya institute of Technology and Management</option>
														<option value=""></option>
														<option value="Sri Hari Degree College">Sri Hari Degree College</option>
														<option value=""></option>
														<option value="SVR DEGREE COLLEGE">SVR DEGREE COLLEGE</option>
														<option value=""></option>
														<option value=" BGBS Womens Degree College"> BGBS Womens Degree College</option>
														<option value=""></option>
														<option value="Dadi Veerunaidu College">Dadi Veerunaidu College</option>
														<option value=""></option>
														<option value="Aditya Degree College AWDCKKD">Aditya Degree College AWDCKKD</option>
														<option value=""></option>
														<option value="Aditya Degree College ASCSKKD">Aditya Degree College ASCSKKD</option>
														<option value=""></option>
														<option value="Aditya Degree College for women Rajahmundry">Aditya Degree College for women Rajahmundry</option>
														<option value=""></option>
														<option value="Gayathri Degree College">Gayathri Degree College</option>
														<option value=""></option>
														<option value="Aditya degree college">Aditya degree college</option>
														<option value=""></option>
														<option value="universe">universe</option>
														<option value=""></option>
														<option value="BRR & GKR CHAMBERS DEGREE & PG COLLEGE ">BRR & GKR CHAMBERS DEGREE & PG COLLEGE </option>
														<option value=""></option>
														<option value="SRI ABN & PRR COLLEGE OF SCIENCE">SRI ABN & PRR COLLEGE OF SCIENCE</option>
														<option value=""></option>
														<option value="S. V. K. P. & Dr. K. S. Raju Arts and Science College (A)">S. V. K. P. & Dr. K. S. Raju Arts and Science College (A)</option>
														<option value=""></option>
														<option value="Gokul degree college">Gokul degree college</option>
														<option value=""></option>
														<option value="Sir CR Reddy Degree College For Womens">Sir CR Reddy Degree College For Womens</option>
														<option value=""></option>
														<option value="MCV DEGREE COLLEGE ">MCV DEGREE COLLEGE </option>
														<option value=""></option>
														<option value="DR.SARVEPALLI RADHA KRISHNA DEGREE COLLEGE">DR.SARVEPALLI RADHA KRISHNA DEGREE COLLEGE</option>
														<option value=""></option>
														<option value="Andhra Pradesh residential degree College">Andhra Pradesh residential degree College</option>
														<option value=""></option>
														<option value="DONBOSCO DEGREE COLLEGE">DONBOSCO DEGREE COLLEGE</option>
														<option value=""></option>
														<option value="SRI SAMHITHA DEGREE COLLEGE">SRI SAMHITHA DEGREE COLLEGE</option>
														<option value=""></option>
														<option value="SRI VENKATESHWARA DEGREE COLLEGE ">SRI VENKATESHWARA DEGREE COLLEGE </option>
														<option value=""></option>
														<option value="SRI VASAVI DEGREE COLLEGE">SRI VASAVI DEGREE COLLEGE</option>
														<option value=""></option>
														<option value="Demo Degree College">Demo Degree College</option>
														<option value=""></option>
														<option value="SV DEGREE COLLEGE PEDAGUMMULURU">SV DEGREE COLLEGE PEDAGUMMULURU</option>
														<option value=""></option>
														<option value="AKRG Degree College">AKRG Degree College</option>
														<option value=""></option>
														<option value="CNR Arts & Science College- Annamayya">CNR Arts & Science College- Annamayya</option>
														<option value=""></option>
														<option value="Sri Balaji Vidya Vihar degree college">Sri Balaji Vidya Vihar degree college</option>
														<option value=""></option>
														<option value="MVN JS & RVR College of Arts and Science">MVN JS & RVR College of Arts and Science</option>
														<option value=""></option>
														<option value="Jyothirmayee women’s degree college ">Jyothirmayee women’s degree college </option>
														<option value=""></option>
														<option value="Sree Devi degree college ">Sree Devi degree college </option>
														<option value=""></option>
														<option value="Sapthagiri Degree college Hindupur">Sapthagiri Degree college Hindupur</option>
														<option value=""></option>
														<option value="SPVM Degree College Gorantla">SPVM Degree College Gorantla</option>
														<option value=""></option>
														<option value="SVV Degree College, Penumuru ">SVV Degree College, Penumuru </option>
														<option value=""></option>
														<option value="Sri Rachapudy Nagabhushanam Degree & P.G College, Badvel">Sri Rachapudy Nagabhushanam Degree & P.G College, Badvel</option>
														<option value=""></option>
														<option value="SMJL DEGREE COLLEGE, KADIRI-515 591">SMJL DEGREE COLLEGE, KADIRI-515 591</option>
														<option value=""></option>
														<option value="SAI DEGREE COLLEGE">SAI DEGREE COLLEGE</option>
														<option value=""></option>
														<option value="SPACE DEGREE FOR WOMEN                                  ">SPACE DEGREE FOR WOMEN </option>
														<option value=""></option>
														<option value="Vellore institute of Technology AP">Vellore institute of Technology AP</option>
													</select>
												</div>
											</div>


											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputUserName">Student Username <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="text" class="form-control" name="student_username" id="exampleInputUserName" placeholder="Enter Username" minlength=8 maxlength=16 required>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPassword">Password <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="password" class="form-control" name="password" id='password' placeholder="Enter Password" minlength=8 maxlength=10 required>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputRe-EnterPassword">Re-Enter Password <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="password" class="form-control" name="password" id='retypepassword' placeholder="Re-Enter Password" minlength=8 maxlength=10 required>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputcode">Upload CV <span style="color:#D3D3D3;font-size: 90%;">(Optional)</span></label>
													<input type="file" class="form-control" name="upload_cv" id="exampleInputcode" placeholder="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputQualification">Internship Term </label>
													<select class="form-control form-select select2" name="intership_term" data-bs-placeholder="select Internship Term" required>
														<option value="short_term">Short Term</option>
														<option value="long_term">Long Term</option>
													</select>
												</div>
											</div>


											<button type="submit" name="create" value="create" onclick="return check()" class="btn btn-primary mt-3 mb-0" style="text-align:right">Generate</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>




				</div>
				<!-- Container closed -->
			</div>



			<!-- <div class="modal fade" id="modaldemo1">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <p> Are you sure you want to Create a student?</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-success" type="button">Create</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not Now</button>
                                </div>
                            </div>
                        </div>
                    </div> -->

		</form>
		<script type="text/javascript">
			function check() {
				var b = document.getElementById('password').value;
				var c = document.getElementById('retypepassword').value;
				if (b != c) {
					alert('Password doesnt match');
					return false;
				} else
					return true;
			}
		</script>
		<!-- Footer opened -->
		<div class="main-footer">
			<div class="container-fluid pd-t-0-f ht-100p">
				Copyright © 2023 <a href="www.triaright.in" class="text-primary">triaright</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="www.mycompany.co.in"> my company</a> . All rights reserved
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

<!-- Mirrored from laravel8.spruko.com/nowa/emptypage by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:32:40 GMT -->

</html>                                                        <option value="QSPIRE ">QSPIRE </option>
                                                        <option value=""></option>
                                                        <option value="SAI PARAMESHWARA DEGREE COLLEGE">SAI PARAMESHWARA
                                                            DEGREE COLLEGE</option>
                                                        <option value=""></option>
                                                        <option value="Satya institute of Technology and Management">
                                                            Satya institute of Technology and Management</option>
                                                        <option value=""></option>
                                                        <option value="Sri Hari Degree College">Sri Hari Degree College
                                                        </option>
                                                        <option value=""></option>
                                                        <option value="SVR DEGREE COLLEGE">SVR DEGREE COLLEGE</option>
                                                        <option value=""></option>
                                                        <option value=" BGBS Womens Degree College"> BGBS Womens Degree
                                                            College</option>
                                                        <option value=""></option>
                                                        <option value="Dadi Veerunaidu College">Dadi Veerunaidu College
                                                        </option>
                                                        <option value=""></option>
                                                        <option value="Aditya Degree College AWDCKKD">Aditya Degree
                                                            College AWDCKKD</option>
                                                        <option value=""></option>
                                                        <option value="Aditya Degree College ASCSKKD">Aditya Degree
                                                            College ASCSKKD</option>
                                                        <option value=""></option>
                                                        <option value="Aditya Degree College for women Rajahmundry">
                                                            Aditya Degree College for women Rajahmundry</option>
                                                        <option value=""></option>
                                                        <option value="Gayathri Degree College">Gayathri Degree College
                                                        </option>
                                                        <option value=""></option>
                                                        <option value="Aditya degree college">Aditya degree college
                                                        </option>
                                                        <option value=""></option>
                                                        <option value="universe">universe</option>
                                                        <option value=""></option>
                                                        <option value="BRR & GKR CHAMBERS DEGREE & PG COLLEGE ">BRR &
                                                            GKR CHAMBERS DEGREE & PG COLLEGE </option>
                                                        <option value=""></option>
                                                        <option value="SRI ABN & PRR COLLEGE OF SCIENCE">SRI ABN & PRR
                                                            COLLEGE OF SCIENCE</option>
                                                        <option value=""></option>
                                                        <option
                                                            value="S. V. K. P. & Dr. K. S. Raju Arts and Science College (A)">
                                                            S. V. K. P. & Dr. K. S. Raju Arts and Science College (A)
                                                        </option>
                                                        <option value=""></option>
                                                        <option value="Gokul degree college">Gokul degree college
                                                        </option>
                                                        <option value=""></option>
                                                        <option value="Sir CR Reddy Degree College For Womens">Sir CR
                                                            Reddy Degree College For Womens</option>
                                                        <option value=""></option>
                                                        <option value="MCV DEGREE COLLEGE ">MCV DEGREE COLLEGE </option>
                                                        <option value=""></option>
                                                        <option value="DR.SARVEPALLI RADHA KRISHNA DEGREE COLLEGE">
                                                            DR.SARVEPALLI RADHA KRISHNA DEGREE COLLEGE</option>
                                                        <option value=""></option>
                                                        <option value="Andhra Pradesh residential degree College">Andhra
                                                            Pradesh residential degree College</option>
                                                        <option value=""></option>
                                                        <option value="DONBOSCO DEGREE COLLEGE">DONBOSCO DEGREE COLLEGE
                                                        </option>
                                                        <option value=""></option>
                                                        <option value="SRI SAMHITHA DEGREE COLLEGE">SRI SAMHITHA DEGREE
                                                            COLLEGE</option>
                                                        <option value=""></option>
                                                        <option value="SRI VENKATESHWARA DEGREE COLLEGE ">SRI
                                                            VENKATESHWARA DEGREE COLLEGE </option>
                                                        <option value=""></option>
                                                        <option value="SRI VASAVI DEGREE COLLEGE">SRI VASAVI DEGREE
                                                            COLLEGE</option>
                                                        <option value=""></option>
                                                        <option value="Demo Degree College">Demo Degree College</option>
                                                        <option value=""></option>
                                                        <option value="SV DEGREE COLLEGE PEDAGUMMULURU">SV DEGREE
                                                            COLLEGE PEDAGUMMULURU</option>
                                                        <option value=""></option>
                                                        <option value="AKRG Degree College">AKRG Degree College</option>
                                                        <option value=""></option>
                                                        <option value="CNR Arts & Science College- Annamayya">CNR Arts &
                                                            Science College- Annamayya</option>
                                                        <option value=""></option>
                                                        <option value="Sri Balaji Vidya Vihar degree college">Sri Balaji
                                                            Vidya Vihar degree college</option>
                                                        <option value=""></option>
                                                        <option value="MVN JS & RVR College of Arts and Science">MVN JS
                                                            & RVR College of Arts and Science</option>
                                                        <option value=""></option>
                                                        <option value="Jyothirmayee women’s degree college ">
                                                            Jyothirmayee women’s degree college </option>
                                                        <option value=""></option>
                                                        <option value="Sree Devi degree college ">Sree Devi degree
                                                            college </option>
                                                        <option value=""></option>
                                                        <option value="Sapthagiri Degree college Hindupur">Sapthagiri
                                                            Degree college Hindupur</option>
                                                        <option value=""></option>
                                                        <option value="SPVM Degree College Gorantla">SPVM Degree College
                                                            Gorantla</option>
                                                        <option value=""></option>
                                                        <option value="SVV Degree College, Penumuru ">SVV Degree
                                                            College, Penumuru </option>
                                                        <option value=""></option>
                                                        <option
                                                            value="Sri Rachapudy Nagabhushanam Degree & P.G College, Badvel">
                                                            Sri Rachapudy Nagabhushanam Degree & P.G College, Badvel
                                                        </option>
                                                        <option value=""></option>
                                                        <option value="SMJL DEGREE COLLEGE, KADIRI-515 591">SMJL DEGREE
                                                            COLLEGE, KADIRI-515 591</option>
                                                        <option value=""></option>
                                                        <option value="SAI DEGREE COLLEGE">SAI DEGREE COLLEGE</option>
                                                        <option value=""></option>
                                                        <option
                                                            value="SPACE DEGREE FOR WOMEN                                  ">
                                                            SPACE DEGREE FOR WOMEN </option>
                                                        <option value=""></option>
                                                        <option value="Vellore institute of Technology AP">Vellore
                                                            institute of Technology AP</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputUserName">Student Username <span
                                                            style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span
                                                            style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <input type="text" class="form-control" name="student_username"
                                                        id="exampleInputUserName" placeholder="Enter Username"
                                                        minlength=8 maxlength=16 required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword">Password <span
                                                            style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span
                                                            style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <input type="password" class="form-control" name="password"
                                                        id='password' placeholder="Enter Password" minlength=8
                                                        maxlength=10 required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputRe-EnterPassword">Re-Enter Password <span
                                                            style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span
                                                            style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <input type="password" class="form-control" name="password"
                                                        id='retypepassword' placeholder="Re-Enter Password" minlength=8
                                                        maxlength=10 required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputcode">Upload CV <span
                                                            style="color:#D3D3D3;font-size: 90%;">(Optional)</span></label>
                                                    <input type="file" class="form-control" name="upload_cv"
                                                        id="exampleInputcode" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputQualification">Internship Term </label>
                                                    <select class="form-control form-select select2"
                                                        name="intership_term"
                                                        data-bs-placeholder="select Internship Term" required>
                                                        <option value="short_term">Short Term</option>
                                                        <option value="long_term">Long Term</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <button type="submit" name="create" value="create" onclick="return check()"
                                                class="btn btn-primary mt-3 mb-0"
                                                style="text-align:right">Generate</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
                <!-- Container closed -->
            </div>



            <!-- <div class="modal fade" id="modaldemo1">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <p> Are you sure you want to Create a student?</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-success" type="button">Create</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not Now</button>
                                </div>
                            </div>
                        </div>
                    </div> -->

        </form>
        <script type="text/javascript">
        function check() {
            var b = document.getElementById('password').value;
            var c = document.getElementById('retypepassword').value;
            if (b != c) {
                alert('Password doesnt match');
                return false;
            } else
                return true;
        }
        </script>
        <!-- Footer opened -->
        <div class="main-footer">
            <div class="container-fluid pd-t-0-f ht-100p">
                Copyright © 2023 <a href="www.triaright.in" class="text-primary">triaright</a>. Designed with <span
                    class="fa fa-heart text-danger"></span> by <a href="www.mycompany.co.in"> my company</a> . All
                rights reserved
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

<!-- Mirrored from laravel8.spruko.com/nowa/emptypage by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:32:40 GMT -->

</html>