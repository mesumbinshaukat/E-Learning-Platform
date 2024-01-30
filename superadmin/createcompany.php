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
		<script>
			function account_type_change() {
				var x = document.getElementById('account_type').value;
				// var d=new Date();

				//alert(x);

				if (x == "yes") {
					document.getElementById('company_gst_number').style.display = "block";
					document.getElementById('company_gst_numbers_label').style.display = "block";
					document.getElementById("company_gst_number").required = true;

					document.getElementById("upload_gst").required = true;
					document.getElementById('upload_gst_label').style.display = "block";
					document.getElementById('upload_gst').style.display = "block";

				} else if (x == "no") {
					document.getElementById("company_gst_number").required = false;

					document.getElementById("upload_gst").required = false;
					document.getElementById('company_gst_number').style.display = "none";
					document.getElementById('company_gst_numbers_label').style.display = "none";
					document.getElementById('upload_gst_label').style.display = "none";
					document.getElementById('upload_gst').style.display = "none";
				}

			}


			function account_type_pan() {
				var x = document.getElementById('account_pan').value;
				// var d=new Date();

				//alert(x);

				if (x == "yes") {
					document.getElementById("company_pan_number").required = true;

					document.getElementById("upload_pan").required = true;

					document.getElementById('company_pan_number').style.display = "block";
					document.getElementById('company_pan_number_label').style.display = "block";
					document.getElementById('upload_pan_label').style.display = "block";
					document.getElementById('upload_pan').style.display = "block";
					//     // return true;
				} else if (x == "no") {
					document.getElementById("company_pan_number").required = false;

					document.getElementById("upload_pan").required = false;

					document.getElementById('upload_pan_label').style.display = "none";
					document.getElementById('upload_pan').style.display = "none";
					document.getElementById('company_pan_number').style.display = "none";
					document.getElementById('company_pan_number_label').style.display = "none";
				}

			}
		</script>
		<form action="connection_files/create/company_create.php" method="POST" enctype="multipart/form-data">
			<!-- main-content -->
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">


					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
							<span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Create Company</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Credentials</a></li>
								<li class="breadcrumb-item active" aria-current="page">Company</li>
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
													<label for="exampleInputAadhar">Are you a consultant/Employer <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<select name="cons_emp" class="form-control form-select select2" required data-bs-placeholder="Select Country" required>

														<option value="consultant">Consultant</option>
														<option value="employer">Employer</option>

													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="validationCustom01">Whom are you Hiring for?? ( seperate with comma(,))<span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input name="hiring" type="text" class="form-control" required id="validationCustom01" placeholder="Hiring Companies" required>
													<div class="valid-feedback">
														Mandatory
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="validationCustom01">Company Name <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="text" class="form-control" id="validationCustom01" required name="company_name" placeholder="Enter Name" required>
													<div class="valid-feedback">
														Mandatory
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputAadhar">Company Registration Type <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<select class="form-control form-select select2" id="exampleInputName" required name="company_registration_type" data-bs-placeholder="Select Country" required>

														<option value="soleProprietor">Sole Proprietor</option>
														<option value="limitedLiabilityPartnership_(LLP)">Limited Liability Partnership (LLP)</option>
														<option value="onePersonCompany(OPC)">One Person Company (OPC)</option>
														<option value="partnerships">Partnerships</option>
														<option value="privatLimitedCompany(.PVT)">Private Limited Company (.PVT)</option>
														<option value="publicLimitedCompany(IPO)">Public Limited Company (IPO)</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputAadhar">Your Industry <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<select class="form-control form-select select2" name="your_industry" required data-bs-placeholder="Select Country" required>

														<option value="automobileManufacturing">Automobile Manufacturing</option>
														<option value="construction">Construction</option>
														<option value="pharmaceauticals">Pharmaceauticals</option>
														<option value="tele-Communications">Tele- Communications</option>
														<option value="software/I.T">Software/I.T</option>
														<option value="textiles">Textiles</option>
														<option value="finance">Finance</option>
														<option value="management">Management</option>
														<option value="consultancy/HR_Staffing">Consultancy/HR Staffing</option>
														<option value="transportation/Toursim">Transportation/Toursim</option>
														<option value="others">Others</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputName">Enter your Industry( if others selected) <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="text" class="form-control" name="enter_industry" required id="exampleInputName" placeholder="Enter Industry" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputProEmail">Sub-Business Name <span style="color:#D3D3D3;font-size: 90%;">(Optional)</span></label>
													<input type="text" class="form-control" name="sub_business_name" id="exampleInputProEmail" placeholder="Enter Sub-Business Name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPersonalPhone">Year of Establishment <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="number" class="form-control" name="year_of_establishment" required id="exampleInputPersonalPhone" placeholder="Enter Year" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputDOB">Company Phone Number <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="number" class="form-control" id="exampleInputQualification" required name="company_phone_number" placeholder="Enter Phone no" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputQualification">Company Mail ID <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="mail" class="form-control" id="exampleInputQualification" required name="company_mail_id" placeholder="Enter Mail Id" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputUserName">Website <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span> </label>
													<input type="text" class="form-control" id="exampleInputQualification" required name="website" placeholder="Enter Website">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputAadhar">Do you have GST <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<select name="gst_yes_no" id="account_type" class="form-control form-select select2" required data-bs-placeholder="Select Country" required onchange="account_type_change()">

														<option value="yes">Yes</option>
														<option value="no">No</option>

													</select>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label id="company_gst_numbers_label" for="exampleInputPassword">Company GST Number(if yes) <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="text" class="form-control" id="company_gst_number" name="company_gst_number" placeholder="Enter GST Number">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputcode" id="upload_gst_label"> Upload GST(if yes) <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="file" class="form-control" id="upload_gst" name="upload_gst" placeholder="">
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputAadhar">Do you have Company PAN <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<select name="pan_yes_no" id='account_pan' class="form-control form-select select2" data-bs-placeholder="Select Country" required onchange="account_type_pan()">

														<option value="yes">Yes</option>
														<option value="no">No</option>

													</select>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPassword" id="company_pan_number_label">Company PAN Number(if yes) <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="text" class="form-control" id="company_pan_number" name="company_pan_number" placeholder="Enter GST Number">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputcode" id="upload_pan_label"> Upload Company PAN Number(if yes) <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="file" class="form-control" id="upload_pan" name="upload_pan" placeholder="">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label for="exampleInputPerEmail">Address <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="text" class="form-control " name="address" required id="exampleInputPerEmail" rows="5" placeholder="Enter address" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPerEmail">District <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="text" class="form-control" name="district" required id="exampleInputPerEmail" placeholder="Enter District" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPerEmail">State <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="text" class="form-control" name="state" required id="exampleInputPerEmail" placeholder="Enter State" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPerEmail">PIN code <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="number" class="form-control" name="pincode" required id="exampleInputPerEmail" placeholder="enter Pincode" required>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputDOB">Representative Name <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="text" class="form-control" id="exampleInputCompanyPhone" required name="representative_name" placeholder="Enter Representative Name" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputCompanyPhone">Designation <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="text" class="form-control" id="exampleInputCompanyPhone" required name="designation" placeholder="Enter Designation" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputDOB">Representative Phone Number <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="number" class="form-control" id="exampleInputCompanyPhone" required name="representative_phone_number" placeholder="Enter Phone Number" required>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputQualification">Personal Mail ID <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="Email" class="form-control" id="exampleInputQualification" required name="personal_mail_id" placeholder="Enter Mail Id" required>
												</div>
											</div>









											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputUserName">Company Username <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="text" class="form-control" id="exampleInputUserName" required name="company_username" placeholder="Enter Username" required>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPassword">Password <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="password" class="form-control" id="password" name="password" required minlength=8 maxlength=10 placeholder="Enter Password" required>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputRe-EnterPassword">Re-Enter Password <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
													<input type="password" class="form-control" id="retypepassword" required name="password" minlength=8 maxlength=10 placeholder="Re-Enter Password" required>
												</div>
											</div>










											<button type="submit" name="create" value="create" class="btn btn-primary mt-3 mb-0" style="text-align:right" onclick="return check()">Generate</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>



				</div>
				<!-- Container closed -->
			</div>



			<!--  <div class="modal fade" id="modaldemo1">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <p> Are you sure you want to Create a Company??</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-success" type="submit" name="create" value="create">Create</button>
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

	<!--Internal  Parsley.min js -->
	<script src="assets/plugins/parsleyjs/parsley.min.js"></script>

	<!-- Internal Form-validation js -->
	<script src="assets/js/form-validation.js"></script>


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

</html>                                                        id="exampleInputCompanyPhone" required
                                                        name="representative_phone_number"
                                                        placeholder="Enter Phone Number" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputQualification">Personal Mail ID <span
                                                            style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span
                                                            style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <input type="Email" class="form-control"
                                                        id="exampleInputQualification" required name="personal_mail_id"
                                                        placeholder="Enter Mail Id" required>
                                                </div>
                                            </div>









                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputUserName">Company Username <span
                                                            style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span
                                                            style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <input type="text" class="form-control" id="exampleInputUserName"
                                                        required name="company_username" placeholder="Enter Username"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword">Password <span
                                                            style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span
                                                            style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <input type="password" class="form-control" id="password"
                                                        name="password" required minlength=8 maxlength=10
                                                        placeholder="Enter Password" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputRe-EnterPassword">Re-Enter Password <span
                                                            style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span
                                                            style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <input type="password" class="form-control" id="retypepassword"
                                                        required name="password" minlength=8 maxlength=10
                                                        placeholder="Re-Enter Password" required>
                                                </div>
                                            </div>










                                            <button type="submit" name="create" value="create"
                                                class="btn btn-primary mt-3 mb-0" style="text-align:right"
                                                onclick="return check()">Generate</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- Container closed -->
            </div>



            <!--  <div class="modal fade" id="modaldemo1">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <p> Are you sure you want to Create a Company??</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-success" type="submit" name="create" value="create">Create</button>
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

    <!--Internal  Parsley.min js -->
    <script src="assets/plugins/parsleyjs/parsley.min.js"></script>

    <!-- Internal Form-validation js -->
    <script src="assets/js/form-validation.js"></script>


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