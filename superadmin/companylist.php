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

		</div> <!-- main-content -->
		<div class="main-content app-content">

			<!-- container -->
			<div class="main-container container-fluid">


				<div class="breadcrumb-header justify-content-between">
					<div class="right-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Company List </span>
					</div>

					<div class="justify-content-center mt-2">
						<ol class="breadcrumb">
							<li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Credentials</a></li>
							<li class="breadcrumb-item ">Company</li>
							<li class="breadcrumb-item ">List</li>
						</ol>
					</div>

				</div>
				<form method="post">
					<div class="row row-sm">
						<div class="form-group col-md-3">
							<P><b> Industry</b> </p>

							<select name="your_industry" class="form-control form-select" data-bs-placeholder="Select Filter">
								<option value="All" selected="selected">All</option>

								<option value="automobileManufacturing" selected="selected">Automobile Manufacturing</option>
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
						<div class="form-group col-md-3">
							<P><b>District</b> </p>

							<!-- <select name="district" class="form-control form-select" data-bs-placeholder="Select Filter">
												<option value="All" selected>All</option>
												<option value="visakhapatnam">visakhapatnam</option>
												<option value="Palnadu">Palnadu</option>
												<option value="TIRUPATI">TIRUPATI</option>
												<option value="Chittoor">Chittoor</option>

											</select> -->
							<select name="district" class="form-control form-select" data-bs-placeholder="Select Filter">
								<option value="All" selected="selected">ALL</option>
								<option value="Hyderabad">Hyderabad</option>
								<option value=""></option>
								<option value="visakhapatnam">visakhapatnam</option>
								<option value="vizag">vizag</option>
								<option value="west godavari">west godavari</option>
								<option value="demo company">demo company</option>
								<option value="howrah">howrah</option>
								<!--<option value="vidya">vidya</option>-->
								<!--<option value="lalitha">lalitha</option>-->
								<!--<option value="keerthi">keerthi</option>-->
							</select>


						</div>

						<div class="form-group col-md-3">
							<P><b>Cateogry</b> </p>
							<select name="gst_yes_no" class="form-control form-select" data-bs-placeholder="Select Filter">
								<option value="All" selected="selected">All</option>
								<option value="consultant">Consultant</option>
								<option value="employer">Employer</option>
							</select>
						</div>
						<div class="form-group col-md-3">
							<P><b>User Status</b> </p>
							<select name="user_status" class="form-control form-select" data-bs-placeholder="Select Filter">
								<option value="0">Active</option>
								<option value="1">Blocked</option>
								<option value="2">Deleted</option>
								<option value="All">ALL</option>
							</select>
						</div>

						&nbsp &nbsp <button type="submit" class="btn btn-primary" style="height:40px;width:100px;margin-top:35px">Search</button>

					</div>
				</form>
				<br>
				<br>
				<div class="row row-sm">
					<div class="col-lg-12">
						<div class="card custom-card overflow-hidden">
							<div class="card-body">

								<div class="table-responsive  export-table">
									<table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
										<thead>
											<tr>
												<th class="border-bottom-0">S.No</th>
												<th class="border-bottom-0">date of adding</th>
												<th class="border-bottom-0">Company ID</th>
												<th class="border-bottom-0">Company name</th>
												<th class="border-bottom-0">Representative Name</th>
												<th class="border-bottom-0">Industry</th>
												<th class="border-bottom-0">District</th>
												<th class="border-bottom-0">Phone no</th>

												<th class="border-bottom-0">User status</th>



											</tr>
										</thead>
										<tbody>


											<tr>
												<td>1</td>
												<td>2023-02-27 16:49:36</td>
												<td>TRCOM_1</td>
												<td>Vispo Business Solutions</td>
												<td>Raja Shekar</td>
												<td>automobileManufacturing</td>
												<td>Hyderabad</td>
												<td>7569433950</td>
												<td style=color:#4aa02c> <b> Active <b></td>
											</tr>



											<tr>
												<td>2</td>
												<td>2023-03-02 12:31:15</td>
												<td>TRCOM_2</td>
												<td>AVS Skills Academy </td>
												<td></td>
												<td></td>
												<td></td>
												<td>9573446406</td>
												<td style=color:#E3242B> <b> Deleted <b></td>
											</tr>



											<tr>
												<td>3</td>
												<td>2023-03-20 20:24:19</td>
												<td>TRCOM_4</td>
												<td>earnathome</td>
												<td>manju</td>
												<td>hyjhytj</td>
												<td>visakhapatnam</td>
												<td>2323232323</td>
												<td style=color:#4aa02c> <b> Active <b></td>
											</tr>



											<tr>
												<td>4</td>
												<td>2023-03-25 02:34:07</td>
												<td>TRCOM_5</td>
												<td>andhra company</td>
												<td>srilekha</td>
												<td>software</td>
												<td>vizag</td>
												<td>6300763348</td>
												<td style=color:#4aa02c> <b> Active <b></td>
											</tr>



											<tr>
												<td>5</td>
												<td>2023-03-25 11:01:26</td>
												<td>TRCOM_6</td>
												<td>testing</td>
												<td>joy</td>
												<td>automobileManufacturing</td>
												<td>visakhapatnam</td>
												<td>9948474747</td>
												<td style=color:#4aa02c> <b> Active <b></td>
											</tr>



											<tr>
												<td>6</td>
												<td>2023-03-25 22:54:47</td>
												<td>TRCOM_7</td>
												<td>DevSai</td>
												<td>saiteja</td>
												<td>automobileManufacturing</td>
												<td>west godavari</td>
												<td>9182661299</td>
												<td style=color:#4aa02c> <b> Active <b></td>
											</tr>



											<tr>
												<td>7</td>
												<td>2023-03-25 22:58:09</td>
												<td>TRCOM_8</td>
												<td>saiteja</td>
												<td>saiteja</td>
												<td>construction</td>
												<td>west godavari</td>
												<td>9912413844</td>
												<td style=color:#4aa02c> <b> Active <b></td>
											</tr>



											<tr>
												<td>8</td>
												<td>2023-04-18 14:41:59</td>
												<td>TRCOM_10</td>
												<td>Sunitha rachapothula</td>
												<td></td>
												<td></td>
												<td></td>
												<td>8074342126</td>
												<td style=color:#E3242B> <b> Deleted <b></td>
											</tr>



											<tr>
												<td>9</td>
												<td>2023-04-25 10:56:43</td>
												<td>TRCOM_11</td>
												<td>Bharat Biotech</td>
												<td></td>
												<td></td>
												<td></td>
												<td>8063244321</td>
												<td style=color:#E3242B> <b> Deleted <b></td>
											</tr>



											<tr>
												<td>10</td>
												<td>2023-05-26 22:15:14</td>
												<td>TRCOM_12</td>
												<td>InfoLumi Business Solutions</td>
												<td>demo company</td>
												<td>construction</td>
												<td>demo company</td>
												<td>1234567891</td>
												<td style=color:#4aa02c> <b> Active <b></td>
											</tr>



											<tr>
												<td>11</td>
												<td>2023-08-03 12:33:30</td>
												<td>TRCOM_13</td>
												<td>D.Reddy prasad</td>
												<td></td>
												<td></td>
												<td></td>
												<td>9390954365</td>
												<td style=color:#4aa02c> <b> Active <b></td>
											</tr>



											<tr>
												<td>12</td>
												<td>2023-08-10 12:29:29</td>
												<td>TRCOM_14</td>
												<td>Triaright</td>
												<td></td>
												<td></td>
												<td></td>
												<td>9515032295</td>
												<td style=color:#4aa02c> <b> Active <b></td>
											</tr>



											<tr>
												<td>13</td>
												<td>2023-08-14 21:15:54</td>
												<td>TRCOM_15</td>
												<td>Rekadi ramprasad</td>
												<td></td>
												<td></td>
												<td></td>
												<td>8179651078</td>
												<td style=color:#4aa02c> <b> Active <b></td>
											</tr>



											<tr>
												<td>14</td>
												<td>2023-08-15 16:21:55</td>
												<td>TRCOM_16</td>
												<td>Triarigh</td>
												<td></td>
												<td></td>
												<td></td>
												<td>9550035199</td>
												<td style=color:#4aa02c> <b> Active <b></td>
											</tr>



											<tr>
												<td>15</td>
												<td>2023-08-15 17:26:38</td>
												<td>TRCOM_17</td>
												<td>Meduri ganeshsailokesh</td>
												<td></td>
												<td></td>
												<td></td>
												<td>9346378189</td>
												<td style=color:#4aa02c> <b> Active <b></td>
											</tr>



											<tr>
												<td>16</td>
												<td>2023-08-16 11:58:31</td>
												<td>TRCOM_18</td>
												<td>Kollu Rajesh </td>
												<td></td>
												<td></td>
												<td></td>
												<td>8977213833</td>
												<td style=color:#4aa02c> <b> Active <b></td>
											</tr>



											<tr>
												<td>17</td>
												<td>2023-10-05 19:56:01</td>
												<td>TRCOM_19</td>
												<td>Long term </td>
												<td></td>
												<td></td>
												<td></td>
												<td>6305757901</td>
												<td style=color:#4aa02c> <b> Active <b></td>
											</tr>



											<tr>
												<td>18</td>
												<td>2024-01-18 14:44:02</td>
												<td>TRCOM_20</td>
												<td>kk</td>
												<td></td>
												<td></td>
												<td></td>
												<td>2000000000</td>
												<td style=color:#4aa02c> <b> Active <b></td>
											</tr>



											<tr>
												<td>19</td>
												<td>2024-01-18 16:31:34</td>
												<td>TRCOM_21</td>
												<td>online foood</td>
												<td>kali krishna </td>
												<td>consultant</td>
												<td>howrah</td>
												<td>2233445566</td>
												<td style=color:#4aa02c> <b> Active <b></td>
											</tr>



											<tr>
												<td>20</td>
												<td>2024-01-22 10:01:17</td>
												<td>TRCOM_23</td>
												<td>test1</td>
												<td></td>
												<td></td>
												<td></td>
												<td>1212121212</td>
												<td style=color:#4aa02c> <b> Active <b></td>
											</tr>




										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Row -->


				<div class="modal fade" id="Delete">
					<div class="modal-dialog" role="document">
						<div class="modal-content modal-content-demo">
							<div class="modal-header">
								<h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">

								<p> Are you sure you want to Delete a company?</p>
							</div>
							<div class="modal-footer">
								<button class="btn ripple btn-success" type="button">Delete</button>
								<button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not Now</button>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="Block">
					<div class="modal-dialog" role="document">
						<div class="modal-content modal-content-demo">
							<div class="modal-header">
								<h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">

								<p> Are you sure you want to Block a company?</p>
							</div>
							<div class="modal-footer">
								<button class="btn ripple btn-success" type="button">Block</button>
								<button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not Now</button>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="Unblock">
					<div class="modal-dialog" role="document">
						<div class="modal-content modal-content-demo">
							<div class="modal-header">
								<h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">

								<p> Are you sure you want to Unblock a company?</p>
							</div>
							<div class="modal-footer">
								<button class="btn ripple btn-success" type="button">Unblock</button>
								<button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not Now</button>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>

	</div>
	<!-- Container closed -->
	</div>
	<!-- main-content closed -->

	<!-- Sidebar-right-->




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


	<!-- Internal Data tables -->
	<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
	<script src="assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
	<script src="assets/plugins/datatable/js/jszip.min.js"></script>
	<script src="assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
	<script src="assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
	<script src="assets/plugins/datatable/js/buttons.html5.min.js"></script>
	<script src="assets/plugins/datatable/js/buttons.print.min.js"></script>
	<script src="assets/plugins/datatable/js/buttons.colVis.min.js"></script>
	<script src="assets/plugins/datatable/dataTables.responsive.min.js"></script>
	<script src="assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
	<script src="assets/js/table-data.js"></script>

	<!-- INTERNAL Select2 js -->
	<script src="assets/plugins/select2/js/select2.full.min.js"></script>


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

<!-- Mirrored from laravel8.spruko.com/nowa/table-data by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:32:58 GMT -->

</html>    <!-- JQUERY JS -->
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


    <!-- Internal Data tables -->
    <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
    <script src="assets/plugins/datatable/js/jszip.min.js"></script>
    <script src="assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
    <script src="assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
    <script src="assets/plugins/datatable/js/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatable/js/buttons.print.min.js"></script>
    <script src="assets/plugins/datatable/js/buttons.colVis.min.js"></script>
    <script src="assets/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
    <script src="assets/js/table-data.js"></script>

    <!-- INTERNAL Select2 js -->
    <script src="assets/plugins/select2/js/select2.full.min.js"></script>


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

<!-- Mirrored from laravel8.spruko.com/nowa/table-data by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:32:58 GMT -->

</html>