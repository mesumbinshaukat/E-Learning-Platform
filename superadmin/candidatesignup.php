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
                
				<?php include('./partials/navbar.php'); ?>
			
		</div>
			<!-- /main-header -->

			<!-- main-sidebar -->
			<div class="sticky">
				<?php include('./partials/sidebar.php'); ?>
			</div>
			<!-- main-sidebar -->

		</div>
		<!-- main-content -->
		<div class="main-content app-content">

			<!-- container -->
			<div class="main-container container-fluid">


				<div class="breadcrumb-header justify-content-between">
					<div class="right-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Students
							Registrations</span>
					</div>

					<div class="justify-content-center mt-2">
						<ol class="breadcrumb">
							<li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Credentials</a></li>
							<li class="breadcrumb-item ">Students</li>
							<li class="breadcrumb-item ">Registrations</li>
						</ol>
					</div>

				</div>

				<form method="post">
					<div class="row row-sm">
						<div class="form-group col-md-3">
							<b> <label>Internship Type</label> </b>
							<select name="intership_term" class="form-control form-select" data-bs-placeholder="Select Filter">
								<option value="All" selected="selected">All</option>
								<option value="long_term">long_term</option>
								<option value=""></option>
								<option value="short_term">short_term</option>
							</select>
						</div>

						&nbsp &nbsp <button type="submit" class="btn btn-primary" style="height:40px;width:100px;margin-top:35px">Search</button>
						<!-- &nbsp &nbsp <a href="javascript:void(0);" class="btn btn-danger">reset all </a>	 -->
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
												<th class="border-bottom-0">Date of Singup</th>
												<th class="border-bottom-0">ID No</th>
												<th class="border-bottom-0">Student name</th>
												<th class="border-bottom-0">Username</th>
												<th class="border-bottom-0">Password</th>
												<th class="border-bottom-0">Internship Type</th>
												<th class="border-bottom-0">Phone no</th>
												<th class="border-bottom-0">Delete</th>
												<th class="border-bottom-0">update</th>



											</tr>
										</thead>
										<tbody>

											<tr>
												<td>1</td>
												<td>2023-12-19 12:08:01</td>
												<td>STUREG_5715</td>
												<td>R Lakshmi kantha </td>
												<td>R Lakshmi kantha</td>
												<td>kantha041</td>
												<td>long_term</td>
												<td>9573647041</td>
												<td><a class="btn btn-danger" href="connection_files/manage/student_manage.php?id=5715&delete=delete&filename=registration">delete</a>
												</td>
												<td><a href="updatecandidatesignup.php?id=5715" class="btn btn-info">update</a></td>
											</tr>

											<tr>
												<td>2</td>
												<td>2023-12-26 19:05:11</td>
												<td>STUREG_5716</td>
												<td>S.Thasleem</td>
												<td>shaik Thasleem</td>
												<td>9885426830</td>
												<td>long_term</td>
												<td>9885426830</td>
												<td><a class="btn btn-danger" href="connection_files/manage/student_manage.php?id=5716&delete=delete&filename=registration">delete</a>
												</td>
												<td><a href="updatecandidatesignup.php?id=5716" class="btn btn-info">update</a></td>
											</tr>

											<tr>
												<td>3</td>
												<td>2024-01-03 14:18:17</td>
												<td>STUREG_5720</td>
												<td>Diksha Mane </td>
												<td>Diksha2024</td>
												<td>Diksha@123</td>
												<td>short_term</td>
												<td>9322114936</td>
												<td><a class="btn btn-danger" href="connection_files/manage/student_manage.php?id=5720&delete=delete&filename=registration">delete</a>
												</td>
												<td><a href="updatecandidatesignup.php?id=5720" class="btn btn-info">update</a></td>
											</tr>

											<tr>
												<td>4</td>
												<td>2024-01-04 09:17:23</td>
												<td>STUREG_5721</td>
												<td>demo12345</td>
												<td>demo12345</td>
												<td>demo12345</td>
												<td>short_term</td>
												<td>9876543210</td>
												<td><a class="btn btn-danger" href="connection_files/manage/student_manage.php?id=5721&delete=delete&filename=registration">delete</a>
												</td>
												<td><a href="updatecandidatesignup.php?id=5721" class="btn btn-info">update</a></td>
											</tr>

											<tr>
												<td>5</td>
												<td>2024-01-08 13:12:41</td>
												<td>STUREG_5722</td>
												<td>saitriaright</td>
												<td>sai123456</td>
												<td>sai123456</td>
												<td>short_term</td>
												<td>8008627750</td>
												<td><a class="btn btn-danger" href="connection_files/manage/student_manage.php?id=5722&delete=delete&filename=registration">delete</a>
												</td>
												<td><a href="updatecandidatesignup.php?id=5722" class="btn btn-info">update</a></td>
											</tr>

											<tr>
												<td>6</td>
												<td>2024-01-08 14:22:24</td>
												<td>STUREG_5727</td>
												<td>K.Arfaz Roshan </td>
												<td>K.ARFAZ ROSHAN </td>
												<td>roshan143</td>
												<td>short_term</td>
												<td>8639708674</td>
												<td><a class="btn btn-danger" href="connection_files/manage/student_manage.php?id=5727&delete=delete&filename=registration">delete</a>
												</td>
												<td><a href="updatecandidatesignup.php?id=5727" class="btn btn-info">update</a></td>
											</tr>

											<tr>
												<td>7</td>
												<td>2024-01-08 14:25:38</td>
												<td>STUREG_5730</td>
												<td>K Samreen</td>
												<td>K samreen</td>
												<td>8897298661</td>
												<td>long_term</td>
												<td>8985999331</td>
												<td><a class="btn btn-danger" href="connection_files/manage/student_manage.php?id=5730&delete=delete&filename=registration">delete</a>
												</td>
												<td><a href="updatecandidatesignup.php?id=5730" class="btn btn-info">update</a></td>
											</tr>

											<tr>
												<td>8</td>
												<td>2024-01-08 20:39:04</td>
												<td>STUREG_5738</td>
												<td>N Veena</td>
												<td>Nangi Veena Redd</td>
												<td>9347484382</td>
												<td>long_term</td>
												<td>9392265104</td>
												<td><a class="btn btn-danger" href="connection_files/manage/student_manage.php?id=5738&delete=delete&filename=registration">delete</a>
												</td>
												<td><a href="updatecandidatesignup.php?id=5738" class="btn btn-info">update</a></td>
											</tr>

											<tr>
												<td>9</td>
												<td>2024-01-09 13:56:26</td>
												<td>STUREG_5740</td>
												<td>demo2026</td>
												<td>demo2026</td>
												<td>demo2026</td>
												<td>short_term</td>
												<td>3456786543</td>
												<td><a class="btn btn-danger" href="connection_files/manage/student_manage.php?id=5740&delete=delete&filename=registration">delete</a>
												</td>
												<td><a href="updatecandidatesignup.php?id=5740" class="btn btn-info">update</a></td>
											</tr>

											<tr>
												<td>10</td>
												<td>2024-01-10 13:08:14</td>
												<td>STUREG_5741</td>
												<td>Marella Meghana</td>
												<td>Meghana Marella</td>
												<td>Maggi@24</td>
												<td>short_term</td>
												<td>9985058976</td>
												<td><a class="btn btn-danger" href="connection_files/manage/student_manage.php?id=5741&delete=delete&filename=registration">delete</a>
												</td>
												<td><a href="updatecandidatesignup.php?id=5741" class="btn btn-info">update</a></td>
											</tr>

											<tr>
												<td>11</td>
												<td>2024-01-10 15:10:55</td>
												<td>STUREG_5743</td>
												<td>D Anvi teja</td>
												<td>anviteja.D</td>
												<td>Anvi1234@</td>
												<td>long_term</td>
												<td>9032897409</td>
												<td><a class="btn btn-danger" href="connection_files/manage/student_manage.php?id=5743&delete=delete&filename=registration">delete</a>
												</td>
												<td><a href="updatecandidatesignup.php?id=5743" class="btn btn-info">update</a></td>
											</tr>

											<tr>
												<td>12</td>
												<td>2024-01-11 15:26:20</td>
												<td>STUREG_5746</td>
												<td>Vallepu</td>
												<td>Suhasini V</td>
												<td>Suhasini@2</td>
												<td>long_term</td>
												<td>9663914548</td>
												<td><a class="btn btn-danger" href="connection_files/manage/student_manage.php?id=5746&delete=delete&filename=registration">delete</a>
												</td>
												<td><a href="updatecandidatesignup.php?id=5746" class="btn btn-info">update</a></td>
											</tr>

											<tr>
												<td>13</td>
												<td>2024-01-18 14:40:25</td>
												<td>STUREG_5748</td>
												<td>a</td>
												<td>kk@gmail.com</td>
												<td>9000000000</td>
												<td>short_term</td>
												<td>9000000000</td>
												<td><a class="btn btn-danger" href="connection_files/manage/student_manage.php?id=5748&delete=delete&filename=registration">delete</a>
												</td>
												<td><a href="updatecandidatesignup.php?id=5748" class="btn btn-info">update</a></td>
											</tr>

											<tr>
												<td>14</td>
												<td>2024-01-18 15:53:59</td>
												<td>STUREG_5749</td>
												<td>p</td>
												<td>preeti2001</td>
												<td>preeti@200</td>
												<td>short_term</td>
												<td>1343547785</td>
												<td><a class="btn btn-danger" href="connection_files/manage/student_manage.php?id=5749&delete=delete&filename=registration">delete</a>
												</td>
												<td><a href="updatecandidatesignup.php?id=5749" class="btn btn-info">update</a></td>
											</tr>

											<tr>
												<td>15</td>
												<td>2024-01-19 14:11:42</td>
												<td>STUREG_5751</td>
												<td>Tejasree samudrala </td>
												<td>Tejasree Samudra</td>
												<td>Teju@123</td>
												<td>short_term</td>
												<td>9848523713</td>
												<td><a class="btn btn-danger" href="connection_files/manage/student_manage.php?id=5751&delete=delete&filename=registration">delete</a>
												</td>
												<td><a href="updatecandidatesignup.php?id=5751" class="btn btn-info">update</a></td>
											</tr>

											<tr>
												<td>16</td>
												<td>2024-01-24 18:41:11</td>
												<td>STUREG_5753</td>
												<td>as</td>
												<td>dds@gmail.com</td>
												<td>11111111</td>
												<td>short_term</td>
												<td>9000002222</td>
												<td><a class="btn btn-danger" href="connection_files/manage/student_manage.php?id=5753&delete=delete&filename=registration">delete</a>
												</td>
												<td><a href="updatecandidatesignup.php?id=5753" class="btn btn-info">update</a></td>
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

								<p> Are you sure you want to Delete a student?</p>
							</div>
							<div class="modal-footer">
								<button class="btn ripple btn-success" type="button">Accept</button>
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

								<p> Are you sure you want to Unblock a student?</p>
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