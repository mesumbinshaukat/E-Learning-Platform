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
		<!-- main-content -->
		<div class="main-content app-content">

			<!-- container -->
			<div class="main-container container-fluid">


				<div class="breadcrumb-header justify-content-between">
					<div class="right-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Manage Mentor</span>
					</div>

					<div class="justify-content-center mt-2">
						<ol class="breadcrumb">
							<li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Credentials</a></li>
							<li class="breadcrumb-item ">Mentor</li>
							<li class="breadcrumb-item ">Manage</li>
						</ol>
					</div>

				</div>
				<form method="post">
					<div class="row row-sm">
						<div class="form-group col-md-3">
							<b> <label>College name</label> </b>



							<select name="college_name" class="form-control form-select" data-bs-placeholder="Select Filter">
								<option value="all" selected="selected">ALL</option>
								<option value="GNR Degree College">GNR Degree College</option>
								<option value="raghu engineering college">raghu engineering college</option>
								<option value="S. V. K. P. & Dr. K. S. Raju Arts and Science College (A)">S. V. K. P. & Dr. K. S. Raju Arts and Science College (A)</option>
								<option value=""></option>
								<option value="SRI ABN & PRR COLLEGE OF SCIENCE">SRI ABN & PRR COLLEGE OF SCIENCE</option>
								<option value="Demo Degree College">Demo Degree College</option>

							</select>
						</div>
						<div class="form-group col-md-3">
							<b> <label>Designation</label> </b>



							<select name="designation" class="form-control form-select" data-bs-placeholder="Select Filter">
								<option value="all" selected="selected">ALL</option>
								<option value="SENIOR LECTURER IN COMMERCE AND ACCOUNTS">SENIOR LECTURER IN COMMERCE AND ACCOUNTS</option>
								<option value="HR Manager">HR Manager</option>
								<option value="Lecturer">Lecturer</option>
								<option value="Vice Principal">Vice Principal</option>
								<option value="Mentor">Mentor</option>

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
												<th class="border-bottom-0">S.no</th>
												<th class="border-bottom-0">Id</th>
												<th class="border-bottom-0">Mentor Name</th>
												<th class="border-bottom-0">College Name</th>
												<th class="border-bottom-0">Designation</th>
												<th class="border-bottom-0">Username</th>
												<th class="border-bottom-0">Password</th>
												<th class="border-bottom-0">Phone No</th>
												<th class="border-bottom-0">Actions</th>


											</tr>
										</thead>
										<tbody>

											<tr>


												<td> 1 </td>

												<td>TRCLGMEN_2</td>
												<td>KOMARAPURI GOVINDA</td>
												<td>GNR Degree College</td>
												<td>SENIOR LECTURER IN COMMERCE AND ACCOUNTS</td>
												<td>Govinda@123</td>
												<td>Govind@123</td>
												<td>9849932755</td>
												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a class="btn dropdown-item" href="viewmentor.php?id=2">view</a>
															<a class="btn dropdown-item" href="updatementor.php?id=2">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=2&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=2&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=2&unblock=unblock">unblock</a>


															<a class="btn dropdown-item" href="mentorstudent.php?id=2&college_name=GNR Degree College">allocate</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>


											</tr>



											</tr>
											</tr>

											<tr>


												<td> 2 </td>

												<td>TRCLGMEN_3</td>
												<td>kiya</td>
												<td>raghu engineering college</td>
												<td>HR Manager</td>
												<td>kiya@123</td>
												<td>kiya@123</td>
												<td>9347735591</td>
												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a class="btn dropdown-item" href="viewmentor.php?id=3">view</a>
															<a class="btn dropdown-item" href="updatementor.php?id=3">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=3&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=3&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=3&unblock=unblock">unblock</a>


															<a class="btn dropdown-item" href="mentorstudent.php?id=3&college_name=raghu engineering college">allocate</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>


											</tr>



											</tr>
											</tr>

											<tr>


												<td> 3 </td>

												<td>TRCLGMEN_4</td>
												<td>V MURALI KRISHNA MADASU</td>
												<td>S. V. K. P. & Dr. K. S. Raju Arts and Science College (A)</td>
												<td>Lecturer</td>
												<td>murali</td>
												<td>murali@123</td>
												<td>09948683323</td>
												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a class="btn dropdown-item" href="viewmentor.php?id=4">view</a>
															<a class="btn dropdown-item" href="updatementor.php?id=4">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=4&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=4&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=4&unblock=unblock">unblock</a>


															<a class="btn dropdown-item" href="mentorstudent.php?id=4&college_name=S. V. K. P. & Dr. K. S. Raju Arts and Science College (A)">allocate</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>


											</tr>



											</tr>
											</tr>

											<tr>


												<td> 4 </td>

												<td>TRCLGMEN_6</td>
												<td>Dr Y.Ramesh</td>
												<td></td>
												<td>Vice Principal</td>
												<td>drramesh</td>
												<td>9866408009</td>
												<td>9866408009</td>
												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a class="btn dropdown-item" href="viewmentor.php?id=6">view</a>
															<a class="btn dropdown-item" href="updatementor.php?id=6">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=6&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=6&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=6&unblock=unblock">unblock</a>


															<a class="btn dropdown-item" href="mentorstudent.php?id=6&college_name=">allocate</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>


											</tr>



											</tr>
											</tr>

											<tr>


												<td> 5 </td>

												<td>TRCLGMEN_7</td>
												<td>M.Murthy</td>
												<td>SRI ABN & PRR COLLEGE OF SCIENCE</td>
												<td>Mentor</td>
												<td>malladisatyanarayana25@gmail.com</td>
												<td>9492413259</td>
												<td>9492413259</td>
												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a class="btn dropdown-item" href="viewmentor.php?id=7">view</a>
															<a class="btn dropdown-item" href="updatementor.php?id=7">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=7&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=7&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=7&unblock=unblock">unblock</a>


															<a class="btn dropdown-item" href="mentorstudent.php?id=7&college_name=SRI ABN & PRR COLLEGE OF SCIENCE">allocate</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>


											</tr>



											</tr>
											</tr>

											<tr>


												<td> 6 </td>

												<td>TRCLGMEN_8</td>
												<td>Naim Beig</td>
												<td>SRI ABN & PRR COLLEGE OF SCIENCE</td>
												<td>Mentor</td>
												<td>naimbeig@gmail.com</td>
												<td>9948567776</td>
												<td>9948567776</td>
												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a class="btn dropdown-item" href="viewmentor.php?id=8">view</a>
															<a class="btn dropdown-item" href="updatementor.php?id=8">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=8&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=8&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=8&unblock=unblock">unblock</a>


															<a class="btn dropdown-item" href="mentorstudent.php?id=8&college_name=SRI ABN & PRR COLLEGE OF SCIENCE">allocate</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>


											</tr>



											</tr>
											</tr>

											<tr>


												<td> 7 </td>

												<td>TRCLGMEN_9</td>
												<td>M.s.v.v.v.prasad</td>
												<td>SRI ABN & PRR COLLEGE OF SCIENCE</td>
												<td>Mentor</td>
												<td>sv3prasad@gmail.com</td>
												<td>9948308030</td>
												<td>9948308030</td>
												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a class="btn dropdown-item" href="viewmentor.php?id=9">view</a>
															<a class="btn dropdown-item" href="updatementor.php?id=9">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=9&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=9&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=9&unblock=unblock">unblock</a>


															<a class="btn dropdown-item" href="mentorstudent.php?id=9&college_name=SRI ABN & PRR COLLEGE OF SCIENCE">allocate</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>


											</tr>



											</tr>
											</tr>

											<tr>


												<td> 8 </td>

												<td>TRCLGMEN_10</td>
												<td>D. Madhuri Devi</td>
												<td>SRI ABN & PRR COLLEGE OF SCIENCE</td>
												<td>Mentor</td>
												<td>madhuri9207@gmail.com</td>
												<td>9494951964</td>
												<td>9494951964</td>
												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a class="btn dropdown-item" href="viewmentor.php?id=10">view</a>
															<a class="btn dropdown-item" href="updatementor.php?id=10">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=10&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=10&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=10&unblock=unblock">unblock</a>


															<a class="btn dropdown-item" href="mentorstudent.php?id=10&college_name=SRI ABN & PRR COLLEGE OF SCIENCE">allocate</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>


											</tr>



											</tr>
											</tr>

											<tr>


												<td> 9 </td>

												<td>TRCLGMEN_11</td>
												<td>K.Suresh Babu</td>
												<td>SRI ABN & PRR COLLEGE OF SCIENCE</td>
												<td>Mentor</td>
												<td>sureshbiozeal@gmail.com</td>
												<td>9966845824</td>
												<td>9966845824</td>
												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a class="btn dropdown-item" href="viewmentor.php?id=11">view</a>
															<a class="btn dropdown-item" href="updatementor.php?id=11">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=11&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=11&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=11&unblock=unblock">unblock</a>


															<a class="btn dropdown-item" href="mentorstudent.php?id=11&college_name=SRI ABN & PRR COLLEGE OF SCIENCE">allocate</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>


											</tr>



											</tr>
											</tr>

											<tr>


												<td> 10 </td>

												<td>TRCLGMEN_12</td>
												<td>K Rama Krishna </td>
												<td>SRI ABN & PRR COLLEGE OF SCIENCE</td>
												<td>Mentor</td>
												<td>rkkoduri1960@gmail.com</td>
												<td>9989516515</td>
												<td>9989516515</td>
												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a class="btn dropdown-item" href="viewmentor.php?id=12">view</a>
															<a class="btn dropdown-item" href="updatementor.php?id=12">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=12&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=12&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=12&unblock=unblock">unblock</a>


															<a class="btn dropdown-item" href="mentorstudent.php?id=12&college_name=SRI ABN & PRR COLLEGE OF SCIENCE">allocate</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>


											</tr>



											</tr>
											</tr>

											<tr>


												<td> 11 </td>

												<td>TRCLGMEN_13</td>
												<td>B.satyanarayana</td>
												<td>SRI ABN & PRR COLLEGE OF SCIENCE</td>
												<td>Mentor</td>
												<td>narayana.bajoju@gmail.com</td>
												<td>9491929396</td>
												<td>9491929396</td>
												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a class="btn dropdown-item" href="viewmentor.php?id=13">view</a>
															<a class="btn dropdown-item" href="updatementor.php?id=13">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=13&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=13&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=13&unblock=unblock">unblock</a>


															<a class="btn dropdown-item" href="mentorstudent.php?id=13&college_name=SRI ABN & PRR COLLEGE OF SCIENCE">allocate</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>


											</tr>



											</tr>
											</tr>

											<tr>


												<td> 12 </td>

												<td>TRCLGMEN_14</td>
												<td>Sasikala</td>
												<td>SRI ABN & PRR COLLEGE OF SCIENCE</td>
												<td>Mentor</td>
												<td>sasikalatuluri@gmail.com</td>
												<td>9885861088</td>
												<td>9885861088</td>
												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a class="btn dropdown-item" href="viewmentor.php?id=14">view</a>
															<a class="btn dropdown-item" href="updatementor.php?id=14">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=14&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=14&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=14&unblock=unblock">unblock</a>


															<a class="btn dropdown-item" href="mentorstudent.php?id=14&college_name=SRI ABN & PRR COLLEGE OF SCIENCE">allocate</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>


											</tr>



											</tr>
											</tr>

											<tr>


												<td> 13 </td>

												<td>TRCLGMEN_15</td>
												<td>K Suribabu</td>
												<td>SRI ABN & PRR COLLEGE OF SCIENCE</td>
												<td>Mentor</td>
												<td>ksuricc@gmail.com</td>
												<td>9440243509</td>
												<td>9440243509</td>
												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a class="btn dropdown-item" href="viewmentor.php?id=15">view</a>
															<a class="btn dropdown-item" href="updatementor.php?id=15">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=15&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=15&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=15&unblock=unblock">unblock</a>


															<a class="btn dropdown-item" href="mentorstudent.php?id=15&college_name=SRI ABN & PRR COLLEGE OF SCIENCE">allocate</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>


											</tr>



											</tr>
											</tr>

											<tr>


												<td> 14 </td>

												<td>TRCLGMEN_16</td>
												<td>demomentor</td>
												<td>Demo Degree College</td>
												<td>Mentor</td>
												<td>demomento</td>
												<td>demomento</td>
												<td>7898138989</td>
												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a class="btn dropdown-item" href="viewmentor.php?id=16">view</a>
															<a class="btn dropdown-item" href="updatementor.php?id=16">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=16&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=16&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/mentor_manage.php?id=16&unblock=unblock">unblock</a>


															<a class="btn dropdown-item" href="mentorstudent.php?id=16&college_name=Demo Degree College">allocate</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>


											</tr>



											</tr>
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

								<p> Are you sure you want to Delete a mentor?</p>
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

								<p> Are you sure you want to Block a mentor?</p>
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

								<p> Are you sure you want to Unblock a mentor?</p>
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

</html>

                                            </tr>



                                            </tr>
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
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to Delete a mentor?</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">Delete</button>
                                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="Block">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to Block a mentor?</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">Block</button>
                                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="Unblock">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to Unblock a mentor?</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">Unblock</button>
                                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                    Now</button>
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
            Copyright © 2023 <a href="www.triaright.in" class="text-primary">triaright</a>. Designed with <span
                class="fa fa-heart text-danger"></span> by <a href="www.mycompany.co.in"> my company</a> . All rights
            reserved
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

</html>