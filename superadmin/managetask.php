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

		</div> <!-- main-content -->
		<div class="main-content app-content">

			<!-- container -->
			<div class="main-container container-fluid">


				<div class="breadcrumb-header justify-content-between">
					<div class="right-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Trainer Task</span>
					</div>

					<div class="justify-content-center mt-2">
						<ol class="breadcrumb">
							<li class="breadcrumb-item tx-14"><a href="javascript:void(0);">internship management</a></li>
							<li class="breadcrumb-item ">Tasks</li>
							<li class="breadcrumb-item ">Manage</li>
						</ol>
					</div>

				</div>
				<form method="post">
					<div class="row row-sm">
						<div class="form-group col-md-3">
							<b> <label>Batch id</label> </b>
							<select name="batch_id" class="form-control form-select" data-bs-placeholder="Select Filter">
								<option value="ALL">ALL</option>


								<option value="23">23_Web Technologies Batch 1 Ashok</option>

								<option value="7">7_Python Batch 1 Bala</option>

								<option value="14">14_Medical Coding Batch 1 Tejaswi</option>

								<option value="18">18_Medical Coding Batch 2 Tejaswi</option>


								<option value="26">26_Python Batch 1 2M</option>

								<option value="31">31_Web Technologies Batch 1 2M</option>

								<option value="32">32_Medical Coding Batch 1 2M</option>

								<option value="27">27_Java Batch 1 2M</option>

								<option value="34">34_AI & ML Batch 1 2M</option>

								<option value="43">43_Java Batch 3 2M</option>

								<option value="42">42_Java Batch 2 2M</option>

								<option value="30">30_Human Resources Management Batch 1 2M</option>

								<option value="40">40_Java Fullstack Batch 1 2M & 6M</option>

								<option value="44">44_Medical Coding Batch 2 2M</option>

								<option value="39">39_Medical Coding Batch 3 2M</option>

								<option value="48">48_Human Resource Management Batch 2 2M</option>

								<option value="47">47_Web Technologies Batch 3 2M</option>

								<option value="54">54_Java Batch 4 2M</option>

								<option value="51">51_Python Batch 1 Shanti 2M</option>

								<option value="52">52_Tally + GST Batch 1 2M</option>

								<option value="55">55_Medical Coding Batch 4 2M</option>

								<option value="60">60_Python Batch 1 2M</option>

								<option value="62">62_PYTHON</option>
							</select>
						</div>


						&nbsp &nbsp <button type="submit" class="btn btn-primary" name="search" style="height:40px;width:100px;margin-top:35px" value="search">Search</button>
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
												<th class="border-bottom-0">Date and time</th>
												<th class="border-bottom-0">Task ID</th>
												<th class="border-bottom-0">Batch ID</th>
												<th class="border-bottom-0">Batch Name</th>
												<th class="border-bottom-0">task type</th>
												<th class="border-bottom-0">task name</th>
												<th class="border-bottom-0">Actions</th>
											</tr>
										</thead>
										<tbody>


											<tr>
												<td>1</td>
												<td>2023-05-23 11:59:25</td>
												<td>TRTASK_3</td>
												<td>TRSTBA_19</td>
												<td></td>
												<td>Individual</td>
												<td>testing superadmin</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=3&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=3" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=3&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>2</td>
												<td>2023-05-24 15:31:11</td>
												<td>TRTASK_4</td>
												<td>TRSTBA_19</td>
												<td></td>
												<td>Individual</td>
												<td>pari</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=4&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=4" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=4&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>3</td>
												<td>2023-05-26 09:46:29</td>
												<td>TRTASK_5</td>
												<td>TRSTBA_19</td>
												<td></td>
												<td>All</td>
												<td>What is the meaninig of Triaright</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=5&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=5" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=5&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>4</td>
												<td>2023-05-26 10:10:25</td>
												<td>TRTASK_6</td>
												<td>TRSTBA_19</td>
												<td></td>
												<td>All</td>
												<td>What is the meaninig of Triaright</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=6&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=6" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=6&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>5</td>
												<td>2023-05-26 22:14:19</td>
												<td>TRTASK_7</td>
												<td>TRSTBA_19</td>
												<td></td>
												<td>Individual</td>
												<td>What is the meaninig of Triaright</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=7&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=7" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=7&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>6</td>
												<td>2023-05-27 16:44:59</td>
												<td>TRTASK_8</td>
												<td>TRSTBA_19</td>
												<td></td>
												<td>Individual</td>
												<td>nhjhyu6</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=8&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=8" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=8&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>7</td>
												<td>2023-05-31 16:16:22</td>
												<td>TRTASK_9</td>
												<td>TRSTBA_19</td>
												<td></td>
												<td>All</td>
												<td>task</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=9&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=9" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=9&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>8</td>
												<td>2023-06-05 14:43:38</td>
												<td>TRTASK_11</td>
												<td>TRSTBA_23</td>
												<td>Web Technologies Batch 1 Ashok</td>
												<td>All</td>
												<td>programs for practice in python</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=11&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=11" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=11&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>9</td>
												<td>2023-06-05 16:52:32</td>
												<td>TRTASK_12</td>
												<td>TRSTBA_23</td>
												<td>Web Technologies Batch 1 Ashok</td>
												<td>All</td>
												<td>basic website template for practice</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=12&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=12" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=12&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>10</td>
												<td>2023-06-07 12:45:45</td>
												<td>TRTASK_13</td>
												<td>TRSTBA_19</td>
												<td></td>
												<td>All</td>
												<td>triaright</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=13&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=13" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=13&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>11</td>
												<td>2023-06-09 17:53:00</td>
												<td>TRTASK_14</td>
												<td>TRSTBA_23</td>
												<td>Web Technologies Batch 1 Ashok</td>
												<td>All</td>
												<td>write 2 program using css specificity , cascade and inheritance</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=14&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=14" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=14&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>12</td>
												<td>2023-06-10 12:51:56</td>
												<td>TRTASK_15</td>
												<td>TRSTBA_7</td>
												<td>Python Batch 1 Bala</td>
												<td>All</td>
												<td>Python Parctice Programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=15&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=15" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=15&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>13</td>
												<td>2023-06-12 18:37:55</td>
												<td>TRTASK_16</td>
												<td>TRSTBA_23</td>
												<td>Web Technologies Batch 1 Ashok</td>
												<td>All</td>
												<td>a webpage with navbar and carousel</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=16&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=16" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=16&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>14</td>
												<td>2023-06-13 22:34:02</td>
												<td>TRTASK_17</td>
												<td>TRSTBA_23</td>
												<td>Web Technologies Batch 1 Ashok</td>
												<td>All</td>
												<td>web page using navbar,carousel and embed utilities</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=17&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=17" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=17&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>15</td>
												<td>2023-06-14 09:32:10</td>
												<td>TRTASK_18</td>
												<td>TRSTBA_14</td>
												<td>Medical Coding Batch 1 Tejaswi</td>
												<td>All</td>
												<td>anatomy test</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=18&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=18" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=18&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>16</td>
												<td>2023-06-14 10:21:29</td>
												<td>TRTASK_19</td>
												<td>TRSTBA_14</td>
												<td>Medical Coding Batch 1 Tejaswi</td>
												<td>All</td>
												<td>anatomy test</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=19&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=19" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=19&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>17</td>
												<td>2023-06-16 15:26:44</td>
												<td>TRTASK_20</td>
												<td>TRSTBA_23</td>
												<td>Web Technologies Batch 1 Ashok</td>
												<td>All</td>
												<td>restaurant website live project part 1</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=20&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=20" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=20&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>18</td>
												<td>2023-06-16 18:06:25</td>
												<td>TRTASK_21</td>
												<td>TRSTBA_23</td>
												<td>Web Technologies Batch 1 Ashok</td>
												<td>All</td>
												<td>restaurant website part 1 and 2</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=21&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=21" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=21&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>19</td>
												<td>2023-06-22 13:40:02</td>
												<td>TRTASK_22</td>
												<td>TRSTBA_18</td>
												<td>Medical Coding Batch 2 Tejaswi</td>
												<td>All</td>
												<td>anatomy test for certification</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=22&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=22" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=22&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>20</td>
												<td>2023-06-22 15:38:38</td>
												<td>TRTASK_23</td>
												<td>TRSTBA_19</td>
												<td></td>
												<td>Individual</td>
												<td>shyam</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=23&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=23" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=23&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>21</td>
												<td>2023-06-22 18:04:44</td>
												<td>TRTASK_24</td>
												<td>TRSTBA_23</td>
												<td>Web Technologies Batch 1 Ashok</td>
												<td>All</td>
												<td>build a website using bootstrap display utilities</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=24&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=24" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=24&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>22</td>
												<td>2023-06-23 18:21:32</td>
												<td>TRTASK_25</td>
												<td>TRSTBA_23</td>
												<td>Web Technologies Batch 1 Ashok</td>
												<td>All</td>
												<td>bootstrap display utilities task</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=25&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=25" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=25&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>23</td>
												<td>2023-06-24 10:20:39</td>
												<td>TRTASK_26</td>
												<td>TRSTBA_7</td>
												<td>Python Batch 1 Bala</td>
												<td>All</td>
												<td>Mysql Quiz - 2</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=26&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=26" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=26&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>24</td>
												<td>2023-06-26 14:18:35</td>
												<td>TRTASK_27</td>
												<td>TRSTBA_19</td>
												<td></td>
												<td>All</td>
												<td>task triaright</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=27&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=27" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=27&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>25</td>
												<td>2023-08-11 12:00:33</td>
												<td>TRTASK_28</td>
												<td>TRSTBA_33</td>
												<td></td>
												<td>All</td>
												<td>task triaright</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=28&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=28" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=28&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>26</td>
												<td>2023-08-11 13:07:55</td>
												<td>TRTASK_29</td>
												<td>TRSTBA_26</td>
												<td>Python Batch 1 2M</td>
												<td>All</td>
												<td>Python Practice Programs(Variables,Datatypes)</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=29&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=29" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=29&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>27</td>
												<td>2023-08-17 12:58:25</td>
												<td>TRTASK_30</td>
												<td>TRSTBA_26</td>
												<td>Python Batch 1 2M</td>
												<td>All</td>
												<td>python list programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=30&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=30" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=30&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>28</td>
												<td>2023-08-19 12:20:57</td>
												<td>TRTASK_31</td>
												<td>TRSTBA_26</td>
												<td>Python Batch 1 2M</td>
												<td>All</td>
												<td>python practice programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=31&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=31" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=31&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>29</td>
												<td>2023-08-23 15:29:10</td>
												<td>TRTASK_32</td>
												<td>TRSTBA_31</td>
												<td>Web Technologies Batch 1 2M</td>
												<td>All</td>
												<td>facebook login page</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=32&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=32" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=32&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>30</td>
												<td>2023-08-24 16:25:18</td>
												<td>TRTASK_33</td>
												<td>TRSTBA_19</td>
												<td></td>
												<td>Individual</td>
												<td>ASHOK VARMA</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=33&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=33" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=33&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>31</td>
												<td>2023-08-25 12:07:48</td>
												<td>TRTASK_34</td>
												<td>TRSTBA_26</td>
												<td>Python Batch 1 2M</td>
												<td>All</td>
												<td>python practice programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=34&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=34" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=34&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>32</td>
												<td>2023-08-29 11:37:29</td>
												<td>TRTASK_35</td>
												<td>TRSTBA_19</td>
												<td></td>
												<td>All</td>
												<td>task triaright</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=35&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=35" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=35&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>33</td>
												<td>2023-08-30 11:19:20</td>
												<td>TRTASK_36</td>
												<td>TRSTBA_32</td>
												<td>Medical Coding Batch 1 2M</td>
												<td>All</td>
												<td>anatomy questions task paper</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=36&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=36" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=36&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>34</td>
												<td>2023-08-30 11:34:32</td>
												<td>TRTASK_37</td>
												<td>TRSTBA_19</td>
												<td></td>
												<td>All</td>
												<td>medical coding</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=37&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=37" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=37&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>35</td>
												<td>2023-09-04 18:31:53</td>
												<td>TRTASK_38</td>
												<td>TRSTBA_27</td>
												<td>Java Batch 1 2M</td>
												<td>All</td>
												<td>Java Practice Programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=38&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=38" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=38&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>36</td>
												<td>2023-09-07 15:00:41</td>
												<td>TRTASK_39</td>
												<td>TRSTBA_31</td>
												<td>Web Technologies Batch 1 2M</td>
												<td>All</td>
												<td>basic website template</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=39&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=39" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=39&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>37</td>
												<td>2023-09-08 15:31:09</td>
												<td>TRTASK_40</td>
												<td>TRSTBA_31</td>
												<td>Web Technologies Batch 1 2M</td>
												<td>All</td>
												<td>build a basic website template</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=40&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=40" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=40&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>38</td>
												<td>2023-09-11 00:13:27</td>
												<td>TRTASK_41</td>
												<td>TRSTBA_34</td>
												<td>AI & ML Batch 1 2M</td>
												<td>All</td>
												<td>Task_1_Basics</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=41&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=41" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=41&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>39</td>
												<td>2023-09-12 11:49:34</td>
												<td>TRTASK_42</td>
												<td>TRSTBA_26</td>
												<td>Python Batch 1 2M</td>
												<td>All</td>
												<td>Quiz</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=42&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=42" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=42&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>40</td>
												<td>2023-09-11 13:10:58</td>
												<td>TRTASK_43</td>
												<td>TRSTBA_32</td>
												<td>Medical Coding Batch 1 2M</td>
												<td>All</td>
												<td>anatomy questions task paper 2</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=43&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=43" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=43&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>41</td>
												<td>2023-09-11 17:20:30</td>
												<td>TRTASK_44</td>
												<td>TRSTBA_34</td>
												<td>AI & ML Batch 1 2M</td>
												<td>All</td>
												<td>Basics</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=44&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=44" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=44&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>42</td>
												<td>2023-09-11 18:03:52</td>
												<td>TRTASK_45</td>
												<td>TRSTBA_27</td>
												<td>Java Batch 1 2M</td>
												<td>All</td>
												<td>Java Quiz</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=45&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=45" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=45&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>43</td>
												<td>2023-09-12 11:54:45</td>
												<td>TRTASK_46</td>
												<td>TRSTBA_26</td>
												<td>Python Batch 1 2M</td>
												<td>All</td>
												<td>Quiz 1</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=46&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=46" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=46&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>44</td>
												<td>2023-09-13 15:40:44</td>
												<td>TRTASK_47</td>
												<td>TRSTBA_31</td>
												<td>Web Technologies Batch 1 2M</td>
												<td>All</td>
												<td>website template with carousel and navbar</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=47&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=47" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=47&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>45</td>
												<td>2023-09-13 17:53:08</td>
												<td>TRTASK_48</td>
												<td>TRSTBA_27</td>
												<td>Java Batch 1 2M</td>
												<td>All</td>
												<td>Java Quiz</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=48&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=48" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=48&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>46</td>
												<td>2023-09-14 18:17:02</td>
												<td>TRTASK_49</td>
												<td>TRSTBA_34</td>
												<td>AI & ML Batch 1 2M</td>
												<td>All</td>
												<td>task2</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=49&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=49" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=49&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>47</td>
												<td>2023-09-15 12:12:38</td>
												<td>TRTASK_50</td>
												<td>TRSTBA_26</td>
												<td>Python Batch 1 2M</td>
												<td>All</td>
												<td>Python practice programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=50&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=50" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=50&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>48</td>
												<td>2023-09-16 14:55:03</td>
												<td>TRTASK_51</td>
												<td>TRSTBA_27</td>
												<td>Java Batch 1 2M</td>
												<td>All</td>
												<td>Java Practice Programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=51&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=51" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=51&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>49</td>
												<td>2023-09-25 12:05:03</td>
												<td>TRTASK_52</td>
												<td>TRSTBA_26</td>
												<td>Python Batch 1 2M</td>
												<td>All</td>
												<td>python practice programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=52&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=52" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=52&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>50</td>
												<td>2023-09-26 17:17:17</td>
												<td>TRTASK_53</td>
												<td>TRSTBA_34</td>
												<td>AI & ML Batch 1 2M</td>
												<td>All</td>
												<td>Task3</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=53&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=53" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=53&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>51</td>
												<td>2023-10-06 16:15:06</td>
												<td>TRTASK_54</td>
												<td>TRSTBA_43</td>
												<td>Java Batch 3 2M</td>
												<td>All</td>
												<td>Java Programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=54&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=54" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=54&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>52</td>
												<td>2023-10-09 16:12:15</td>
												<td>TRTASK_55</td>
												<td>TRSTBA_43</td>
												<td>Java Batch 3 2M</td>
												<td>All</td>
												<td>JAVA PROGRAMS</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=55&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=55" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=55&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>53</td>
												<td>2023-10-09 16:10:52</td>
												<td>TRTASK_56</td>
												<td>TRSTBA_42</td>
												<td>Java Batch 2 2M</td>
												<td>All</td>
												<td>Java Practice Programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=56&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=56" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=56&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>54</td>
												<td>2023-10-09 15:58:29</td>
												<td>TRTASK_57</td>
												<td>TRSTBA_30</td>
												<td>Human Resources Management Batch 1 2M</td>
												<td>All</td>
												<td>Prepare Job Description</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=57&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=57" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=57&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>55</td>
												<td>2023-10-10 12:12:54</td>
												<td>TRTASK_58</td>
												<td>TRSTBA_42</td>
												<td>Java Batch 2 2M</td>
												<td>All</td>
												<td>java Programs 1</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=58&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=58" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=58&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>56</td>
												<td>2023-10-10 15:16:42</td>
												<td>TRTASK_59</td>
												<td>TRSTBA_43</td>
												<td>Java Batch 3 2M</td>
												<td>All</td>
												<td>Java Practice Programs1</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=59&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=59" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=59&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>57</td>
												<td>2023-10-10 19:13:21</td>
												<td>TRTASK_60</td>
												<td>TRSTBA_40</td>
												<td>Java Fullstack Batch 1 2M & 6M</td>
												<td>All</td>
												<td>basic program</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=60&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=60" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=60&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>58</td>
												<td>2023-10-11 13:03:46</td>
												<td>TRTASK_61</td>
												<td>TRSTBA_44</td>
												<td>Medical Coding Batch 2 2M</td>
												<td>All</td>
												<td>anatomy questions task paper 1</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=61&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=61" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=61&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>59</td>
												<td>2023-10-13 12:43:37</td>
												<td>TRTASK_63</td>
												<td>TRSTBA_42</td>
												<td>Java Batch 2 2M</td>
												<td>All</td>
												<td>Java Programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=63&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=63" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=63&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>60</td>
												<td>2023-10-13 12:44:23</td>
												<td>TRTASK_64</td>
												<td>TRSTBA_43</td>
												<td>Java Batch 3 2M</td>
												<td>All</td>
												<td>Java Programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=64&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=64" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=64&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>61</td>
												<td>2023-10-13 15:58:50</td>
												<td>TRTASK_65</td>
												<td>TRSTBA_30</td>
												<td>Human Resources Management Batch 1 2M</td>
												<td>All</td>
												<td>HR Planning</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=65&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=65" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=65&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>62</td>
												<td>2023-10-13 18:51:53</td>
												<td>TRTASK_66</td>
												<td>TRSTBA_40</td>
												<td>Java Fullstack Batch 1 2M & 6M</td>
												<td>All</td>
												<td>program about variables and datatypes</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=66&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=66" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=66&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>63</td>
												<td>2023-10-16 17:56:32</td>
												<td>TRTASK_67</td>
												<td>TRSTBA_48</td>
												<td>Human Resource Management Batch 2 2M</td>
												<td>All</td>
												<td>HR Planning</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=67&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=67" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=67&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>64</td>
												<td>2023-10-16 18:53:56</td>
												<td>TRTASK_68</td>
												<td>TRSTBA_47</td>
												<td>Web Technologies Batch 3 2M</td>
												<td>All</td>
												<td>a task on css id selectors and anchor tags</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=68&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=68" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=68&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>65</td>
												<td>2023-10-16 18:59:40</td>
												<td>TRTASK_69</td>
												<td>TRSTBA_40</td>
												<td>Java Fullstack Batch 1 2M & 6M</td>
												<td>All</td>
												<td>operators</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=69&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=69" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=69&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>66</td>
												<td>2023-10-17 19:10:02</td>
												<td>TRTASK_70</td>
												<td>TRSTBA_48</td>
												<td>Human Resource Management Batch 2 2M</td>
												<td>All</td>
												<td>HR Planning</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=70&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=70" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=70&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>67</td>
												<td>2023-10-18 18:19:51</td>
												<td>TRTASK_71</td>
												<td>TRSTBA_47</td>
												<td>Web Technologies Batch 3 2M</td>
												<td>All</td>
												<td>a task on css inheritance </td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=71&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=71" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=71&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>68</td>
												<td>2023-10-19 14:30:57</td>
												<td>TRTASK_72</td>
												<td>TRSTBA_30</td>
												<td>Human Resources Management Batch 1 2M</td>
												<td>All</td>
												<td>Induction </td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=72&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=72" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=72&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>69</td>
												<td>2023-10-19 17:51:29</td>
												<td>TRTASK_73</td>
												<td>TRSTBA_39</td>
												<td>Medical Coding Batch 3 2M</td>
												<td>All</td>
												<td>DIGESTIVE SYSTEM ICD CODING TASK</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=73&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=73" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=73&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>70</td>
												<td>2023-10-19 19:03:31</td>
												<td>TRTASK_74</td>
												<td>TRSTBA_40</td>
												<td>Java Fullstack Batch 1 2M & 6M</td>
												<td>All</td>
												<td>type casting, scanner class</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=74&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=74" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=74&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>71</td>
												<td>2023-10-20 18:08:01</td>
												<td>TRTASK_75</td>
												<td>TRSTBA_39</td>
												<td>Medical Coding Batch 3 2M</td>
												<td>All</td>
												<td>digestive system total exam</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=75&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=75" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=75&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>72</td>
												<td>2023-10-21 11:05:32</td>
												<td>TRTASK_76</td>
												<td>TRSTBA_40</td>
												<td>Java Fullstack Batch 1 2M & 6M</td>
												<td>All</td>
												<td>Programs on scanner and conditional statements</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=76&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=76" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=76&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>73</td>
												<td>2023-10-31 14:22:09</td>
												<td>TRTASK_77</td>
												<td>TRSTBA_42</td>
												<td>Java Batch 2 2M</td>
												<td>All</td>
												<td>Java Quiz</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=77&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=77" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=77&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>74</td>
												<td>2023-10-26 16:36:24</td>
												<td>TRTASK_78</td>
												<td>TRSTBA_43</td>
												<td>Java Batch 3 2M</td>
												<td>All</td>
												<td>Java Quiz</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=78&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=78" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=78&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>75</td>
												<td>2023-10-27 16:01:15</td>
												<td>TRTASK_80</td>
												<td>TRSTBA_43</td>
												<td>Java Batch 3 2M</td>
												<td>All</td>
												<td>Quiz</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=80&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=80" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=80&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>76</td>
												<td>2023-10-27 16:35:17</td>
												<td>TRTASK_81</td>
												<td>TRSTBA_43</td>
												<td>Java Batch 3 2M</td>
												<td>All</td>
												<td>Java Practice Programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=81&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=81" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=81&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>77</td>
												<td>2023-10-27 16:40:45</td>
												<td>TRTASK_82</td>
												<td>TRSTBA_54</td>
												<td>Java Batch 4 2M</td>
												<td>All</td>
												<td>Java Practice Programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=82&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=82" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=82&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>78</td>
												<td>2023-10-27 17:42:42</td>
												<td>TRTASK_83</td>
												<td>TRSTBA_48</td>
												<td>Human Resource Management Batch 2 2M</td>
												<td>All</td>
												<td>Job Design</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=83&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=83" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=83&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>79</td>
												<td>2023-10-27 17:45:48</td>
												<td>TRTASK_84</td>
												<td>TRSTBA_51</td>
												<td>Python Batch 1 Shanti 2M</td>
												<td>All</td>
												<td>task1</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=84&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=84" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=84&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>80</td>
												<td>2023-10-27 18:29:35</td>
												<td>TRTASK_85</td>
												<td>TRSTBA_54</td>
												<td>Java Batch 4 2M</td>
												<td>All</td>
												<td>Quiz</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=85&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=85" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=85&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>81</td>
												<td>2023-10-30 11:05:49</td>
												<td>TRTASK_86</td>
												<td>TRSTBA_40</td>
												<td>Java Fullstack Batch 1 2M & 6M</td>
												<td>All</td>
												<td>programs on switch statement and for loop</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=86&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=86" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=86&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>82</td>
												<td>2023-10-31 16:20:39</td>
												<td>TRTASK_87</td>
												<td>TRSTBA_43</td>
												<td>Java Batch 3 2M</td>
												<td>All</td>
												<td>Java Practice Programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=87&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=87" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=87&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>83</td>
												<td>2023-10-31 18:39:01</td>
												<td>TRTASK_88</td>
												<td>TRSTBA_54</td>
												<td>Java Batch 4 2M</td>
												<td>All</td>
												<td>Java Practice Programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=88&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=88" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=88&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>84</td>
												<td>2023-11-01 13:19:43</td>
												<td>TRTASK_89</td>
												<td>TRSTBA_42</td>
												<td>Java Batch 2 2M</td>
												<td>All</td>
												<td>Java Quiz</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=89&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=89" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=89&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>85</td>
												<td>2023-11-02 12:47:30</td>
												<td>TRTASK_90</td>
												<td>TRSTBA_44</td>
												<td>Medical Coding Batch 2 2M</td>
												<td>All</td>
												<td>anatomy questions task paper 2</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=90&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=90" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=90&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>86</td>
												<td>2023-11-02 13:30:42</td>
												<td>TRTASK_91</td>
												<td>TRSTBA_42</td>
												<td>Java Batch 2 2M</td>
												<td>All</td>
												<td>Java Practice Programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=91&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=91" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=91&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>87</td>
												<td>2023-11-03 17:31:02</td>
												<td>TRTASK_92</td>
												<td>TRSTBA_39</td>
												<td>Medical Coding Batch 3 2M</td>
												<td>All</td>
												<td>respiratory system</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=92&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=92" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=92&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>88</td>
												<td>2023-11-03 19:14:36</td>
												<td>TRTASK_93</td>
												<td>TRSTBA_48</td>
												<td>Human Resource Management Batch 2 2M</td>
												<td>All</td>
												<td>Hiring Post Sample</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=93&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=93" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=93&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>89</td>
												<td>2023-11-04 11:55:30</td>
												<td>TRTASK_94</td>
												<td>TRSTBA_43</td>
												<td>Java Batch 3 2M</td>
												<td>All</td>
												<td>Java Exam</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=94&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=94" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=94&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>90</td>
												<td>2023-11-04 11:54:08</td>
												<td>TRTASK_95</td>
												<td>TRSTBA_42</td>
												<td>Java Batch 2 2M</td>
												<td>All</td>
												<td>Java Exam</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=95&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=95" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=95&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>91</td>
												<td>2023-11-04 11:54:52</td>
												<td>TRTASK_96</td>
												<td>TRSTBA_54</td>
												<td>Java Batch 4 2M</td>
												<td>All</td>
												<td>Java Exam</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=96&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=96" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=96&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>92</td>
												<td>2023-11-06 14:52:31</td>
												<td>TRTASK_97</td>
												<td>TRSTBA_43</td>
												<td>Java Batch 3 2M</td>
												<td>All</td>
												<td>Java Exam</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=97&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=97" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=97&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>93</td>
												<td>2023-11-06 17:34:22</td>
												<td>TRTASK_98</td>
												<td>TRSTBA_39</td>
												<td>Medical Coding Batch 3 2M</td>
												<td>All</td>
												<td>digestive system task</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=98&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=98" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=98&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>94</td>
												<td>2023-11-06 18:32:00</td>
												<td>TRTASK_99</td>
												<td>TRSTBA_51</td>
												<td>Python Batch 1 Shanti 2M</td>
												<td>All</td>
												<td>TASK2</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=99&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=99" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=99&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>95</td>
												<td>2023-11-08 18:01:19</td>
												<td>TRTASK_100</td>
												<td>TRSTBA_48</td>
												<td>Human Resource Management Batch 2 2M</td>
												<td>All</td>
												<td>Induction PPT</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=100&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=100" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=100&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>96</td>
												<td>2023-11-10 18:48:24</td>
												<td>TRTASK_101</td>
												<td>TRSTBA_52</td>
												<td>Tally + GST Batch 1 2M</td>
												<td>All</td>
												<td>Send the Screen Shots of All Bank Accounts Closing Balance values </td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=101&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=101" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=101&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>97</td>
												<td>2023-11-11 12:04:11</td>
												<td>TRTASK_102</td>
												<td>TRSTBA_42</td>
												<td>Java Batch 2 2M</td>
												<td>All</td>
												<td>Java Practice Programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=102&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=102" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=102&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>98</td>
												<td>2023-11-11 12:05:57</td>
												<td>TRTASK_103</td>
												<td>TRSTBA_54</td>
												<td>Java Batch 4 2M</td>
												<td>All</td>
												<td>Java Practice Programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=103&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=103" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=103&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>99</td>
												<td>2023-11-13 17:48:45</td>
												<td>TRTASK_104</td>
												<td>TRSTBA_55</td>
												<td>Medical Coding Batch 4 2M</td>
												<td>All</td>
												<td>medical coding</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=104&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=104" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=104&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>100</td>
												<td>2023-11-17 19:00:25</td>
												<td>TRTASK_105</td>
												<td>TRSTBA_51</td>
												<td>Python Batch 1 Shanti 2M</td>
												<td>All</td>
												<td>Task3</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=105&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=105" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=105&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>101</td>
												<td>2023-11-22 17:03:21</td>
												<td>TRTASK_106</td>
												<td>TRSTBA_55</td>
												<td>Medical Coding Batch 4 2M</td>
												<td>All</td>
												<td>medical coding</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=106&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=106" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=106&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>102</td>
												<td>2023-11-28 11:49:18</td>
												<td>TRTASK_107</td>
												<td>TRSTBA_51</td>
												<td>Python Batch 1 Shanti 2M</td>
												<td>All</td>
												<td>PPT ON INHERITANCE TOPICS</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=107&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=107" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=107&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>103</td>
												<td>2023-12-04 17:46:40</td>
												<td>TRTASK_108</td>
												<td>TRSTBA_40</td>
												<td>Java Fullstack Batch 1 2M & 6M</td>
												<td>All</td>
												<td>Programs on operators and scanner class</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=108&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=108" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=108&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>104</td>
												<td>2023-12-05 18:46:07</td>
												<td>TRTASK_109</td>
												<td>TRSTBA_40</td>
												<td>Java Fullstack Batch 1 2M & 6M</td>
												<td>All</td>
												<td>conditional and loop statements</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=109&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=109" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=109&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>105</td>
												<td>2023-12-09 11:50:03</td>
												<td>TRTASK_111</td>
												<td>TRSTBA_40</td>
												<td>Java Fullstack Batch 1 2M & 6M</td>
												<td>All</td>
												<td>program on arrays</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=111&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=111" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=111&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>106</td>
												<td>2023-12-15 18:52:23</td>
												<td>TRTASK_114</td>
												<td>TRSTBA_40</td>
												<td>Java Fullstack Batch 1 2M & 6M</td>
												<td>All</td>
												<td>Programs upto conditional statements which are discussed in class</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=114&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=114" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=114&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>107</td>
												<td>2023-12-20 14:04:48</td>
												<td>TRTASK_115</td>
												<td>TRSTBA_40</td>
												<td>Java Fullstack Batch 1 2M & 6M</td>
												<td>All</td>
												<td>Programs on Arrays</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=115&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=115" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=115&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>108</td>
												<td>2023-12-28 14:26:47</td>
												<td>TRTASK_116</td>
												<td>TRSTBA_42</td>
												<td>Java Batch 2 2M</td>
												<td>All</td>
												<td>Java Practice Programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=116&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=116" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=116&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>109</td>
												<td>2023-12-30 11:40:48</td>
												<td>TRTASK_117</td>
												<td>TRSTBA_42</td>
												<td>Java Batch 2 2M</td>
												<td>All</td>
												<td>Java Quiz</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=117&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=117" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=117&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>110</td>
												<td>2024-01-06 11:23:23</td>
												<td>TRTASK_121</td>
												<td>TRSTBA_42</td>
												<td>Java Batch 2 2M</td>
												<td>All</td>
												<td>Java Programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=121&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=121" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=121&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>111</td>
												<td>2024-01-06 14:34:44</td>
												<td>TRTASK_122</td>
												<td>TRSTBA_60</td>
												<td>Python Batch 1 2M</td>
												<td>All</td>
												<td>Python Quiz</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=122&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=122" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=122&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>112</td>
												<td>2024-01-08 13:31:38</td>
												<td>TRTASK_123</td>
												<td>TRSTBA_42</td>
												<td>Java Batch 2 2M</td>
												<td>All</td>
												<td>Java Programs</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=123&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=123" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=123&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>113</td>
												<td>2024-01-25 16:22:20</td>
												<td>TRTASK_126</td>
												<td>TRSTBA_51</td>
												<td>Python Batch 1 Shanti 2M</td>
												<td>All</td>
												<td>hello</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=126&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=126" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=126&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>114</td>
												<td>2024-01-27 12:21:00</td>
												<td>TRTASK_129</td>
												<td>TRSTBA_42</td>
												<td>Java Batch 2 2M</td>
												<td>All</td>
												<td>Java Quiz-2</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=129&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=129" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=129&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>115</td>
												<td>2024-01-27 13:36:08</td>
												<td>TRTASK_130</td>
												<td>TRSTBA_60</td>
												<td>Python Batch 1 2M</td>
												<td>All</td>
												<td>Python Quiz</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>
														<div class="dropdown-menu">
															<a href="updatetask.php?id=130&page=pending" class="dropdown-item">update</a>
															<a href="taskwork.php?id=130" class="dropdown-item">view work</a>
															<a class="btn dropdown-item" href="delete_task.php?id=130&delete=delete">delete</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Row -->


				<div class="modal fade" id="accept">
					<div class="modal-dialog" role="document">
						<div class="modal-content modal-content-demo">
							<div class="modal-header">
								<h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">

								<p> Are you sure you want to accept a schedule??</p>
							</div>
							<div class="modal-footer">
								<button class="btn ripple btn-success" type="button">Accept</button>
								<button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not Now</button>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="reject">
					<div class="modal-dialog" role="document">
						<div class="modal-content modal-content-demo">
							<div class="modal-header">
								<h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">

								<p> Are you sure you want to reject a schedule??</p>
							</div>
							<div class="modal-footer">
								<button class="btn ripple btn-success" type="button">Reject</button>
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

								<p> Are you sure you want to Unblock a employee??</p>
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

</html>                                                            <a href="updatetask.php?id=96&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=96" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=96&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>92</td>
                                                <td>2023-11-06 14:52:31</td>
                                                <td>TRTASK_97</td>
                                                <td>TRSTBA_43</td>
                                                <td>Java Batch 3 2M</td>
                                                <td>All</td>
                                                <td>Java Exam</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=97&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=97" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=97&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>93</td>
                                                <td>2023-11-06 17:34:22</td>
                                                <td>TRTASK_98</td>
                                                <td>TRSTBA_39</td>
                                                <td>Medical Coding Batch 3 2M</td>
                                                <td>All</td>
                                                <td>digestive system task</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=98&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=98" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=98&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>94</td>
                                                <td>2023-11-06 18:32:00</td>
                                                <td>TRTASK_99</td>
                                                <td>TRSTBA_51</td>
                                                <td>Python Batch 1 Shanti 2M</td>
                                                <td>All</td>
                                                <td>TASK2</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=99&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=99" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=99&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>95</td>
                                                <td>2023-11-08 18:01:19</td>
                                                <td>TRTASK_100</td>
                                                <td>TRSTBA_48</td>
                                                <td>Human Resource Management Batch 2 2M</td>
                                                <td>All</td>
                                                <td>Induction PPT</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=100&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=100" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=100&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>96</td>
                                                <td>2023-11-10 18:48:24</td>
                                                <td>TRTASK_101</td>
                                                <td>TRSTBA_52</td>
                                                <td>Tally + GST Batch 1 2M</td>
                                                <td>All</td>
                                                <td>Send the Screen Shots of All Bank Accounts Closing Balance values
                                                </td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=101&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=101" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=101&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>97</td>
                                                <td>2023-11-11 12:04:11</td>
                                                <td>TRTASK_102</td>
                                                <td>TRSTBA_42</td>
                                                <td>Java Batch 2 2M</td>
                                                <td>All</td>
                                                <td>Java Practice Programs</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=102&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=102" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=102&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>98</td>
                                                <td>2023-11-11 12:05:57</td>
                                                <td>TRTASK_103</td>
                                                <td>TRSTBA_54</td>
                                                <td>Java Batch 4 2M</td>
                                                <td>All</td>
                                                <td>Java Practice Programs</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=103&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=103" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=103&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>99</td>
                                                <td>2023-11-13 17:48:45</td>
                                                <td>TRTASK_104</td>
                                                <td>TRSTBA_55</td>
                                                <td>Medical Coding Batch 4 2M</td>
                                                <td>All</td>
                                                <td>medical coding</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=104&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=104" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=104&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>100</td>
                                                <td>2023-11-17 19:00:25</td>
                                                <td>TRTASK_105</td>
                                                <td>TRSTBA_51</td>
                                                <td>Python Batch 1 Shanti 2M</td>
                                                <td>All</td>
                                                <td>Task3</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=105&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=105" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=105&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>101</td>
                                                <td>2023-11-22 17:03:21</td>
                                                <td>TRTASK_106</td>
                                                <td>TRSTBA_55</td>
                                                <td>Medical Coding Batch 4 2M</td>
                                                <td>All</td>
                                                <td>medical coding</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=106&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=106" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=106&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>102</td>
                                                <td>2023-11-28 11:49:18</td>
                                                <td>TRTASK_107</td>
                                                <td>TRSTBA_51</td>
                                                <td>Python Batch 1 Shanti 2M</td>
                                                <td>All</td>
                                                <td>PPT ON INHERITANCE TOPICS</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=107&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=107" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=107&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>103</td>
                                                <td>2023-12-04 17:46:40</td>
                                                <td>TRTASK_108</td>
                                                <td>TRSTBA_40</td>
                                                <td>Java Fullstack Batch 1 2M & 6M</td>
                                                <td>All</td>
                                                <td>Programs on operators and scanner class</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=108&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=108" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=108&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>104</td>
                                                <td>2023-12-05 18:46:07</td>
                                                <td>TRTASK_109</td>
                                                <td>TRSTBA_40</td>
                                                <td>Java Fullstack Batch 1 2M & 6M</td>
                                                <td>All</td>
                                                <td>conditional and loop statements</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=109&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=109" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=109&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>105</td>
                                                <td>2023-12-09 11:50:03</td>
                                                <td>TRTASK_111</td>
                                                <td>TRSTBA_40</td>
                                                <td>Java Fullstack Batch 1 2M & 6M</td>
                                                <td>All</td>
                                                <td>program on arrays</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=111&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=111" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=111&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>106</td>
                                                <td>2023-12-15 18:52:23</td>
                                                <td>TRTASK_114</td>
                                                <td>TRSTBA_40</td>
                                                <td>Java Fullstack Batch 1 2M & 6M</td>
                                                <td>All</td>
                                                <td>Programs upto conditional statements which are discussed in class
                                                </td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=114&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=114" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=114&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>107</td>
                                                <td>2023-12-20 14:04:48</td>
                                                <td>TRTASK_115</td>
                                                <td>TRSTBA_40</td>
                                                <td>Java Fullstack Batch 1 2M & 6M</td>
                                                <td>All</td>
                                                <td>Programs on Arrays</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=115&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=115" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=115&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>108</td>
                                                <td>2023-12-28 14:26:47</td>
                                                <td>TRTASK_116</td>
                                                <td>TRSTBA_42</td>
                                                <td>Java Batch 2 2M</td>
                                                <td>All</td>
                                                <td>Java Practice Programs</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=116&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=116" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=116&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>109</td>
                                                <td>2023-12-30 11:40:48</td>
                                                <td>TRTASK_117</td>
                                                <td>TRSTBA_42</td>
                                                <td>Java Batch 2 2M</td>
                                                <td>All</td>
                                                <td>Java Quiz</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=117&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=117" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=117&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>110</td>
                                                <td>2024-01-06 11:23:23</td>
                                                <td>TRTASK_121</td>
                                                <td>TRSTBA_42</td>
                                                <td>Java Batch 2 2M</td>
                                                <td>All</td>
                                                <td>Java Programs</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=121&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=121" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=121&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>111</td>
                                                <td>2024-01-06 14:34:44</td>
                                                <td>TRTASK_122</td>
                                                <td>TRSTBA_60</td>
                                                <td>Python Batch 1 2M</td>
                                                <td>All</td>
                                                <td>Python Quiz</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=122&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=122" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=122&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>112</td>
                                                <td>2024-01-08 13:31:38</td>
                                                <td>TRTASK_123</td>
                                                <td>TRSTBA_42</td>
                                                <td>Java Batch 2 2M</td>
                                                <td>All</td>
                                                <td>Java Programs</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=123&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=123" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=123&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>113</td>
                                                <td>2024-01-25 16:22:20</td>
                                                <td>TRTASK_126</td>
                                                <td>TRSTBA_51</td>
                                                <td>Python Batch 1 Shanti 2M</td>
                                                <td>All</td>
                                                <td>hello</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=126&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=126" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=126&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>114</td>
                                                <td>2024-01-27 12:21:00</td>
                                                <td>TRTASK_129</td>
                                                <td>TRSTBA_42</td>
                                                <td>Java Batch 2 2M</td>
                                                <td>All</td>
                                                <td>Java Quiz-2</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=129&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=129" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=129&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>115</td>
                                                <td>2024-01-27 13:36:08</td>
                                                <td>TRTASK_130</td>
                                                <td>TRSTBA_60</td>
                                                <td>Python Batch 1 2M</td>
                                                <td>All</td>
                                                <td>Python Quiz</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a href="updatetask.php?id=130&page=pending"
                                                                class="dropdown-item">update</a>
                                                            <a href="taskwork.php?id=130" class="dropdown-item">view
                                                                work</a>
                                                            <a class="btn dropdown-item"
                                                                href="delete_task.php?id=130&delete=delete">delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->


                <div class="modal fade" id="accept">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to accept a schedule??</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">Accept</button>
                                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="reject">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to reject a schedule??</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">Reject</button>
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

                                <p> Are you sure you want to Unblock a employee??</p>
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