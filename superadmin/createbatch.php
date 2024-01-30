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

	<?php include("./style.php"); ?>

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
						<span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Create Batch </span>
					</div>

					<div class="justify-content-center mt-2">
						<ol class="breadcrumb">
							<li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Courses</a></li>
							<li class="breadcrumb-item ">student batch</li>
							<li class="breadcrumb-item ">Create</li>
						</ol>
					</div>

				</div>
				<!--		<div class="row row-sm">
					                 <div class="form-group col-md-3">
										<select name="country" class="form-control form-select" data-bs-placeholder="Select Filter">
												<option value="br">Filter4</option>
												<option value="cz">Filter3</option>
												<option value="de">Filter2</option>
												<option value="pl" selected>Filter1</option>
											</select>
									</div>
									<div class="form-group col-md-3">
										<select name="country" class="form-control form-select" data-bs-placeholder="Select Filter">
												<option value="br">Filter4</option>
												<option value="cz">Filter3</option>
												<option value="de">Filter2</option>
												<option value="pl" selected>Filter1</option>
											</select>
									</div>
									<div class="form-group col-md-3">
										<select name="country" class="form-control form-select" data-bs-placeholder="Select Filter">
												<option value="br">Filter4</option>
												<option value="cz">Filter3</option>
												<option value="de">Filter2</option>
												<option value="pl" selected>Filter1</option>
											</select>
									</div>
																		<div class="form-group col-md-3">
										<select name="country" class="form-control form-select" data-bs-placeholder="Select Filter">
												<option value="br">Filter4</option>
												<option value="cz">Filter3</option>
												<option value="de">Filter2</option>
												<option value="pl" selected>Filter1</option>
											</select>
									</div>

									&nbsp &nbsp	<a href="javascript:void(0);" class="btn btn-success">Search</a>	
                                               &nbsp &nbsp <a href="javascript:void(0);" class="btn btn-danger">Reset All </a>									
									</div> -->

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
												<th class="border-bottom-0">Date of adding</th>
												<th class="border-bottom-0">Trainer ID</th>
												<th class="border-bottom-0">Trainer Name</th>
												<th class="border-bottom-0">Course name</th>
												<th class="border-bottom-0">Total</th>
												<th class="border-bottom-0">allocated</th>
												<th class="border-bottom-0">Create</th>



											</tr>
										</thead>
										<tbody>




											<tr>
												<td>1</td>
												<td>2023-05-16 00:57:07</td>
												<td>TRTRA_4</td>

												<td>Nandamuru Koteswara Rao</td>
												<td>Medical Coding</td>
												<td>39</td>
												<td>39</td>


												<td><a href="batchfinalcreate.php?id=4&crid=34" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>2</td>
												<td>2023-05-16 00:57:40</td>
												<td>TRTRA_5</td>

												<td>M Sandeep Kumar</td>
												<td>Digital Marketing</td>
												<td>83</td>
												<td>83</td>


												<td><a href="batchfinalcreate.php?id=5&crid=16" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>3</td>
												<td>2023-05-16 00:58:01</td>
												<td>TRTRA_4</td>

												<td>Nandamuru Koteswara Rao</td>
												<td>Medical Transcription</td>
												<td>0</td>
												<td>0</td>


												<td><a href="batchfinalcreate.php?id=4&crid=20" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>4</td>
												<td>2023-05-16 00:58:06</td>
												<td>TRTRA_4</td>

												<td>Nandamuru Koteswara Rao</td>
												<td>Medical Billing</td>
												<td>0</td>
												<td>0</td>


												<td><a href="batchfinalcreate.php?id=4&crid=21" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>5</td>
												<td>2023-05-16 00:59:59</td>
												<td>TRTRA_18</td>

												<td>Uma Kiran V</td>
												<td>Medical Transcription</td>
												<td>0</td>
												<td>0</td>


												<td><a href="batchfinalcreate.php?id=18&crid=20" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>6</td>
												<td>2023-05-16 01:00:04</td>
												<td>TRTRA_18</td>

												<td>Uma Kiran V</td>
												<td>Medical Billing</td>
												<td>0</td>
												<td>0</td>


												<td><a href="batchfinalcreate.php?id=18&crid=21" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>7</td>
												<td>2023-05-16 01:00:09</td>
												<td>TRTRA_18</td>

												<td>Uma Kiran V</td>
												<td>Medical Coding</td>
												<td>208</td>
												<td>208</td>


												<td><a href="batchfinalcreate.php?id=18&crid=34" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>8</td>
												<td>2023-05-16 01:00:38</td>
												<td>TRTRA_19</td>

												<td>V Bala Tripura Sunadri</td>
												<td>JAVA</td>
												<td>161</td>
												<td>161</td>


												<td><a href="batchfinalcreate.php?id=19&crid=32" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>9</td>
												<td>2023-05-16 01:00:44</td>
												<td>TRTRA_19</td>

												<td>V Bala Tripura Sunadri</td>
												<td>Python</td>
												<td>243</td>
												<td>243</td>


												<td><a href="batchfinalcreate.php?id=19&crid=28" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>10</td>
												<td>2023-05-16 01:00:58</td>
												<td>TRTRA_24</td>

												<td>SRIKANTH </td>
												<td>Cloud computing</td>
												<td>1</td>
												<td>0</td>


												<td><a href="batchfinalcreate.php?id=24&crid=6" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>11</td>
												<td>2023-05-16 01:01:11</td>
												<td>TRTRA_27</td>

												<td>Nikhil Chakka</td>
												<td>Python</td>
												<td>102</td>
												<td>102</td>


												<td><a href="batchfinalcreate.php?id=27&crid=28" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>12</td>
												<td>2023-05-16 01:01:31</td>
												<td>TRTRA_28</td>

												<td>Shaik Ashraf rahil</td>
												<td>Web Technologies</td>
												<td>356</td>
												<td>356</td>


												<td><a href="batchfinalcreate.php?id=28&crid=33" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>13</td>
												<td>2023-05-16 01:02:51</td>
												<td>TRTRA_30</td>

												<td>Senthan M S V S</td>
												<td>Python</td>
												<td>262</td>
												<td>262</td>


												<td><a href="batchfinalcreate.php?id=30&crid=28" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>14</td>
												<td>2023-05-16 01:03:06</td>
												<td>TRTRA_31</td>

												<td>Shiva Krishna</td>
												<td>Digital Marketing</td>
												<td>28</td>
												<td>28</td>


												<td><a href="batchfinalcreate.php?id=31&crid=16" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>15</td>
												<td>2023-05-16 01:03:45</td>
												<td>TRTRA_36</td>

												<td>saitejaswi kolliboina</td>
												<td>Medical Coding</td>
												<td>380</td>
												<td>380</td>


												<td><a href="batchfinalcreate.php?id=36&crid=34" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>16</td>
												<td>2023-05-16 01:03:53</td>
												<td>TRTRA_36</td>

												<td>saitejaswi kolliboina</td>
												<td>Medical Transcription</td>
												<td>0</td>
												<td>0</td>


												<td><a href="batchfinalcreate.php?id=36&crid=20" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>17</td>
												<td>2023-05-16 01:03:58</td>
												<td>TRTRA_36</td>

												<td>saitejaswi kolliboina</td>
												<td>Medical Billing</td>
												<td>0</td>
												<td>0</td>


												<td><a href="batchfinalcreate.php?id=36&crid=21" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>18</td>
												<td>2023-05-16 01:04:15</td>
												<td>TRTRA_38</td>

												<td>Vasundhara</td>
												<td>Tally</td>
												<td>90</td>
												<td>90</td>


												<td><a href="batchfinalcreate.php?id=38&crid=17" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>19</td>
												<td>2023-05-16 01:04:35</td>
												<td>TRTRA_39</td>

												<td>Narender</td>
												<td>US Taxation</td>
												<td>118</td>
												<td>118</td>


												<td><a href="batchfinalcreate.php?id=39&crid=9" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>20</td>
												<td>2023-05-16 14:54:55</td>
												<td>TRTRA_40</td>

												<td>Madhu Varshini</td>
												<td>Human resource management</td>
												<td>8</td>
												<td>8</td>


												<td><a href="batchfinalcreate.php?id=40&crid=8" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>21</td>
												<td>2023-05-17 11:48:46</td>
												<td>TRTRA_35</td>

												<td>demotrainer</td>
												<td>Python</td>
												<td>3</td>
												<td>3</td>


												<td><a href="batchfinalcreate.php?id=35&crid=28" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>22</td>
												<td>2023-05-17 11:49:20</td>
												<td>TRTRA_35</td>

												<td>demotrainer</td>
												<td>My SQL</td>
												<td>1</td>
												<td>1</td>


												<td><a href="batchfinalcreate.php?id=35&crid=7" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>23</td>
												<td>2023-05-18 16:26:25</td>
												<td>TRTRA_41</td>

												<td>Saieshwari Gogu</td>
												<td>Digital Marketing</td>
												<td>36</td>
												<td>36</td>


												<td><a href="batchfinalcreate.php?id=41&crid=16" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>24</td>
												<td>2023-05-31 11:31:18</td>
												<td>TRTRA_44</td>

												<td>tirdhala ashok</td>
												<td>Web Technologies</td>
												<td>201</td>
												<td>200</td>


												<td><a href="batchfinalcreate.php?id=44&crid=33" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>25</td>
												<td>2023-06-04 00:18:52</td>
												<td>TRTRA_4</td>

												<td>Nandamuru Koteswara Rao</td>
												<td>Java Script</td>
												<td>0</td>
												<td>0</td>


												<td><a href="batchfinalcreate.php?id=4&crid=5" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>26</td>
												<td>2023-06-16 18:55:51</td>
												<td>TRTRA_46</td>

												<td>G Venkatesh</td>
												<td>Cloud computing</td>
												<td>27</td>
												<td>27</td>


												<td><a href="batchfinalcreate.php?id=46&crid=6" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>27</td>
												<td>2023-06-21 16:44:56</td>
												<td>TRTRA_47</td>

												<td>Mekanaboyina Venkata murali Krishna</td>
												<td>Tally</td>
												<td>37</td>
												<td>37</td>


												<td><a href="batchfinalcreate.php?id=47&crid=17" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>28</td>
												<td>2023-08-09 10:01:36</td>
												<td>TRTRA_49</td>

												<td>demotesting</td>
												<td>Python</td>
												<td>0</td>
												<td>0</td>


												<td><a href="batchfinalcreate.php?id=49&crid=28" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>29</td>
												<td>2023-08-09 11:03:00</td>
												<td>TRTRA_45</td>

												<td>Ramu</td>
												<td>Medical Coding</td>
												<td>231</td>
												<td>231</td>


												<td><a href="batchfinalcreate.php?id=45&crid=34" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>30</td>
												<td>2023-08-10 17:37:28</td>
												<td>TRTRA_50</td>

												<td>Madanu Augustin</td>
												<td>AI </td>
												<td>177</td>
												<td>177</td>


												<td><a href="batchfinalcreate.php?id=50&crid=39" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>31</td>
												<td>2023-08-11 10:54:10</td>
												<td>TRTRA_50</td>

												<td>Madanu Augustin</td>
												<td>Power BI </td>
												<td>15</td>
												<td>15</td>


												<td><a href="batchfinalcreate.php?id=50&crid=38" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>32</td>
												<td></td>
												<td>TRTRA_56</td>

												<td>Akhila V</td>
												<td>My SQL </td>
												<td>2</td>
												<td>2</td>


												<td><a href="batchfinalcreate.php?id=56&crid=7" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>33</td>
												<td>2023-08-25 15:39:31</td>
												<td>TRTRA_19</td>

												<td>V Bala Tripura Sunadri</td>
												<td>Java Script</td>
												<td>0</td>
												<td>0</td>


												<td><a href="batchfinalcreate.php?id=19&crid=5" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>34</td>
												<td>2023-09-26 16:06:52</td>
												<td>TRTRA_52</td>

												<td>Tiruvidhula Naga Sai Priyanka</td>
												<td>JAVA</td>
												<td>169</td>
												<td>168</td>


												<td><a href="batchfinalcreate.php?id=52&crid=32" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>35</td>
												<td>2023-09-29 11:47:53</td>
												<td>TRTRA_61</td>

												<td>Srinivas Yerrravelli</td>
												<td>Digital Marketing</td>
												<td>47</td>
												<td>47</td>


												<td><a href="batchfinalcreate.php?id=61&crid=16" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>36</td>
												<td>2023-10-09 11:59:57</td>
												<td>TRTRA_57</td>

												<td>Shanti Kiran</td>
												<td>Python</td>
												<td>116</td>
												<td>116</td>


												<td><a href="batchfinalcreate.php?id=57&crid=28" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>37</td>
												<td>2023-10-12 12:52:58</td>
												<td>TRTRA_56</td>

												<td>Akhila V</td>
												<td>Tally GST</td>
												<td>0</td>
												<td>0</td>


												<td><a href="batchfinalcreate.php?id=56&crid=17" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>38</td>
												<td>2023-10-12 16:16:31</td>
												<td>TRTRA_62</td>

												<td>vijay kumar sampathi</td>
												<td>Medical Coding </td>
												<td>18</td>
												<td>18</td>


												<td><a href="batchfinalcreate.php?id=62&crid=34" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>39</td>
												<td>2023-11-07 17:09:13</td>
												<td>TRTRA_63</td>

												<td>K Bharath Kumar </td>
												<td>Tally GST</td>
												<td>58</td>
												<td>58</td>


												<td><a href="batchfinalcreate.php?id=63&crid=17" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>40</td>
												<td>2023-12-02 14:04:50</td>
												<td>TRTRA_35</td>

												<td>demotrainer</td>
												<td>Voice process</td>
												<td>726</td>
												<td>726</td>


												<td><a href="batchfinalcreate.php?id=35&crid=10" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>41</td>
												<td>2023-12-21 13:28:21</td>
												<td>TRTRA_64</td>

												<td>Kishore Kumar </td>
												<td>Human resource management</td>
												<td>38</td>
												<td>38</td>


												<td><a href="batchfinalcreate.php?id=64&crid=8" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>42</td>
												<td>2023-12-21 13:28:21</td>
												<td>TRTRA_64</td>

												<td>Kishore Kumar </td>
												<td>Human resource management</td>
												<td>38</td>
												<td>38</td>


												<td><a href="batchfinalcreate.php?id=64&crid=8" class="btn btn-info">Create</a></td>


											</tr>




											<tr>
												<td>43</td>
												<td></td>
												<td>TRTRA_44</td>

												<td>tirdhala ashok</td>
												<td>Java Script</td>
												<td>0</td>
												<td>0</td>


												<td><a href="batchfinalcreate.php?id=44&crid=5" class="btn btn-info">Create</a></td>


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

								<p> Are you sure you want to Delete a trainer?</p>
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
								<h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">

								<p> Are you sure you want to Block a trainer?</p>
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
								<h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">

								<p> Are you sure you want to Unblock a trainer?</p>
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
			Copyright © 2023 <a href="www.triaright.in" class="text-primary">triaright</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="www.mycompany.co.in"> my company</a> . All rights
			reserved
		</div>
	</div>
	<!-- Footer closed -->


	</div>
	<!-- End Page -->

	<!-- BACK-TO-TOP -->
	<a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>
	<?php include("./scripts.php"); ?>

</body>

</html>