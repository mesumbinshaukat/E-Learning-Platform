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
						<span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Manage Batch</span>
					</div>

					<div class="justify-content-center mt-2">
						<ol class="breadcrumb">
							<li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Courses</a></li>
							<li class="breadcrumb-item ">Student batching</li>
							<li class="breadcrumb-item ">Manage</li>
						</ol>
					</div>

				</div>
				<form method="post">
					<div class="row row-sm">
						<div class="form-group col-md-3">
							<b> <label>Course</label> </b>

							</select><select name="course_name" class="form-control form-select" data-bs-placeholder="Select Filter">
								<option value="All" selected="selected">All</option>
								<option value="Medical Coding">Medical Coding</option>
								<option value="Digital Marketing">Digital Marketing</option>
								<option value="JAVA">JAVA</option>
								<option value="Python">Python</option>
								<option value="Cloud computing">Cloud computing</option>
								<option value="Web Technologies">Web Technologies</option>
								<option value="Tally">Tally</option>
								<option value="US Taxation">US Taxation</option>
								<option value="Human resource management">Human resource management</option>
								<option value="AI ">AI </option>
								<option value="Power BI ">Power BI </option>
								<option value="My SQL ">My SQL </option>
								<option value="Tally   GST">Tally GST</option>
								<option value="Voice process">Voice process</option>

							</select>
						</div>
						<div class="form-group col-md-3">
							<b> <label>Trainer</label> </b>
							<select name="trainer_name" class="form-control form-select" data-bs-placeholder="Select Filter">


								<option value="All" selected="selected">All</option>
								<option value="Nandamuru Koteswara Rao">Nandamuru Koteswara Rao</option>
								<option value="M Sandeep Kumar">M Sandeep Kumar</option>
								<option value="Uma Kiran V">Uma Kiran V</option>
								<option value="V Bala Tripura Sunadri">V Bala Tripura Sunadri</option>
								<option value="SRIKANTH ">SRIKANTH </option>
								<option value="Nikhil Chakka">Nikhil Chakka</option>
								<option value="Shaik Ashraf rahil">Shaik Ashraf rahil</option>
								<option value="Senthan M S V S">Senthan M S V S</option>
								<option value="Shiva Krishna">Shiva Krishna</option>
								<option value="saitejaswi kolliboina">saitejaswi kolliboina</option>
								<option value="Vasundhara">Vasundhara</option>
								<option value="Narender">Narender</option>
								<option value="Madhu Varshini">Madhu Varshini</option>
								<option value="Saieshwari Gogu">Saieshwari Gogu</option>
								<option value="tirdhala ashok">tirdhala ashok</option>
								<option value="G Venkatesh">G Venkatesh</option>
								<option value="Mekanaboyina Venkata murali Krishna">Mekanaboyina Venkata murali Krishna
								</option>
								<option value="Ramu">Ramu</option>
								<option value="Madanu Augustin">Madanu Augustin</option>
								<option value="Akhila V">Akhila V</option>
								<option value="vijay kumar sampathi">vijay kumar sampathi</option>
								<option value="Tiruvidhula Naga Sai Priyanka">Tiruvidhula Naga Sai Priyanka</option>
								<option value="Srinivas Yerrravelli	">Srinivas Yerrravelli </option>
								<option value="Srinivas Yerrravelli">Srinivas Yerrravelli</option>
								<option value="Shanti Kiran">Shanti Kiran</option>
								<option value="K Bharath Kumar">K Bharath Kumar</option>
								<option value="demotrainer">demotrainer</option>
								<option value="V Bala Tripura Sunadri	">V Bala Tripura Sunadri </option>
								<option value="Kishore Kumar ">Kishore Kumar </option>

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
												<th class="border-bottom-0">Batch adding</th>
												<th class="border-bottom-0">Batch ID</th>
												<th class="border-bottom-0">Trainer name</th>
												<th class="border-bottom-0">Course name</th>
												<th class="border-bottom-0"> Count</th>
												<th class="border-bottom-0">Actions</th>
												<!--<th class="border-bottom-0">update</th>-->
												<!--<th class="border-bottom-0">add</th>-->
												<!--<th class="border-bottom-0">Remove</th>-->



											</tr>
										</thead>
										<tbody>





											<tr>
												<td>1</td>
												<td>2023-09-26 16:11:27</td>
												<td>TRSTBA_40</td>

												<td>Tiruvidhula Naga Sai Priyanka</td>
												<td>JAVA</td>
												<td>167</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">

															<a href="updatefinalbatchcreate.php?id=40" class="dropdown-item">Update</a>
															<a class="dropdown-item" href="addbatchstudent.php?trainer_id=52&course_id=32&batch_id=40">Add</a>
															<a class="dropdown-item" href="removebatchstudent.php?trainer_id=52&course_id=32&batch_id=40">Remove</a>
															<a class="btn dropdown-item" href="connection_files/manage/batch_manage.php?id=40&delete=delete">Delete</a>
															<a class="dropdown-item" href="connection_files/manage/batch_manage.php?id=40&complete=complete">Complete</a>

														</div><!-- dropdown-menu -->
													</div>
												</td>

												<!--<td><a href="updatefinalbatchcreate.php?id=40&page=manage" class="btn btn-info">update</a></td>-->
												<!--<td><a href="addbatchstudent.php?trainer_id=52&course_id=32" class="btn btn-success">add</a></td>-->
												<!--<td><a href="removebatchstudent.php?trainer_id=52&course_id=32" class="btn btn-danger">Remove</a></td>-->





											</tr>





											<tr>
												<td>2</td>
												<td>2023-09-26 16:17:25</td>
												<td>TRSTBA_41</td>

												<td>Srinivas Yerrravelli </td>
												<td>Digital Marketing</td>
												<td>20</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">

															<a href="updatefinalbatchcreate.php?id=41" class="dropdown-item">Update</a>
															<a class="dropdown-item" href="addbatchstudent.php?trainer_id=61&course_id=16&batch_id=41">Add</a>
															<a class="dropdown-item" href="removebatchstudent.php?trainer_id=61&course_id=16&batch_id=41">Remove</a>
															<a class="btn dropdown-item" href="connection_files/manage/batch_manage.php?id=41&delete=delete">Delete</a>
															<a class="dropdown-item" href="connection_files/manage/batch_manage.php?id=41&complete=complete">Complete</a>

														</div><!-- dropdown-menu -->
													</div>
												</td>

												<!--<td><a href="updatefinalbatchcreate.php?id=41&page=manage" class="btn btn-info">update</a></td>-->
												<!--<td><a href="addbatchstudent.php?trainer_id=61&course_id=16" class="btn btn-success">add</a></td>-->
												<!--<td><a href="removebatchstudent.php?trainer_id=61&course_id=16" class="btn btn-danger">Remove</a></td>-->





											</tr>





											<tr>
												<td>3</td>
												<td>2023-09-27 12:37:21</td>
												<td>TRSTBA_42</td>

												<td>V Bala Tripura Sunadri</td>
												<td>JAVA</td>
												<td>54</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">

															<a href="updatefinalbatchcreate.php?id=42" class="dropdown-item">Update</a>
															<a class="dropdown-item" href="addbatchstudent.php?trainer_id=19&course_id=32&batch_id=42">Add</a>
															<a class="dropdown-item" href="removebatchstudent.php?trainer_id=19&course_id=32&batch_id=42">Remove</a>
															<a class="btn dropdown-item" href="connection_files/manage/batch_manage.php?id=42&delete=delete">Delete</a>
															<a class="dropdown-item" href="connection_files/manage/batch_manage.php?id=42&complete=complete">Complete</a>

														</div><!-- dropdown-menu -->
													</div>
												</td>

												<!--<td><a href="updatefinalbatchcreate.php?id=42&page=manage" class="btn btn-info">update</a></td>-->
												<!--<td><a href="addbatchstudent.php?trainer_id=19&course_id=32" class="btn btn-success">add</a></td>-->
												<!--<td><a href="removebatchstudent.php?trainer_id=19&course_id=32" class="btn btn-danger">Remove</a></td>-->





											</tr>





											<tr>
												<td>4</td>
												<td>2023-09-29 11:40:53</td>
												<td>TRSTBA_45</td>

												<td>tirdhala ashok</td>
												<td>Web Technologies</td>
												<td>2</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">

															<a href="updatefinalbatchcreate.php?id=45" class="dropdown-item">Update</a>
															<a class="dropdown-item" href="addbatchstudent.php?trainer_id=44&course_id=33&batch_id=45">Add</a>
															<a class="dropdown-item" href="removebatchstudent.php?trainer_id=44&course_id=33&batch_id=45">Remove</a>
															<a class="btn dropdown-item" href="connection_files/manage/batch_manage.php?id=45&delete=delete">Delete</a>
															<a class="dropdown-item" href="connection_files/manage/batch_manage.php?id=45&complete=complete">Complete</a>

														</div><!-- dropdown-menu -->
													</div>
												</td>

												<!--<td><a href="updatefinalbatchcreate.php?id=45&page=manage" class="btn btn-info">update</a></td>-->
												<!--<td><a href="addbatchstudent.php?trainer_id=44&course_id=33" class="btn btn-success">add</a></td>-->
												<!--<td><a href="removebatchstudent.php?trainer_id=44&course_id=33" class="btn btn-danger">Remove</a></td>-->





											</tr>





											<tr>
												<td>5</td>
												<td>2023-09-29 11:59:55</td>
												<td>TRSTBA_47</td>

												<td>tirdhala ashok</td>
												<td>Web Technologies</td>
												<td>73</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">

															<a href="updatefinalbatchcreate.php?id=47" class="dropdown-item">Update</a>
															<a class="dropdown-item" href="addbatchstudent.php?trainer_id=44&course_id=33&batch_id=47">Add</a>
															<a class="dropdown-item" href="removebatchstudent.php?trainer_id=44&course_id=33&batch_id=47">Remove</a>
															<a class="btn dropdown-item" href="connection_files/manage/batch_manage.php?id=47&delete=delete">Delete</a>
															<a class="dropdown-item" href="connection_files/manage/batch_manage.php?id=47&complete=complete">Complete</a>

														</div><!-- dropdown-menu -->
													</div>
												</td>

												<!--<td><a href="updatefinalbatchcreate.php?id=47&page=manage" class="btn btn-info">update</a></td>-->
												<!--<td><a href="addbatchstudent.php?trainer_id=44&course_id=33" class="btn btn-success">add</a></td>-->
												<!--<td><a href="removebatchstudent.php?trainer_id=44&course_id=33" class="btn btn-danger">Remove</a></td>-->





											</tr>





											<tr>
												<td>6</td>
												<td>2023-09-29 14:51:12</td>
												<td>TRSTBA_48</td>

												<td>Madhu Varshini</td>
												<td>Human resource management</td>
												<td>3</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">

															<a href="updatefinalbatchcreate.php?id=48" class="dropdown-item">Update</a>
															<a class="dropdown-item" href="addbatchstudent.php?trainer_id=40&course_id=8&batch_id=48">Add</a>
															<a class="dropdown-item" href="removebatchstudent.php?trainer_id=40&course_id=8&batch_id=48">Remove</a>
															<a class="btn dropdown-item" href="connection_files/manage/batch_manage.php?id=48&delete=delete">Delete</a>
															<a class="dropdown-item" href="connection_files/manage/batch_manage.php?id=48&complete=complete">Complete</a>

														</div><!-- dropdown-menu -->
													</div>
												</td>

												<!--<td><a href="updatefinalbatchcreate.php?id=48&page=manage" class="btn btn-info">update</a></td>-->
												<!--<td><a href="addbatchstudent.php?trainer_id=40&course_id=8" class="btn btn-success">add</a></td>-->
												<!--<td><a href="removebatchstudent.php?trainer_id=40&course_id=8" class="btn btn-danger">Remove</a></td>-->





											</tr>





											<tr>
												<td>7</td>
												<td>2023-09-29 16:33:25</td>
												<td>TRSTBA_50</td>

												<td>Srinivas Yerrravelli</td>
												<td>Digital Marketing</td>
												<td>31</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">

															<a href="updatefinalbatchcreate.php?id=50" class="dropdown-item">Update</a>
															<a class="dropdown-item" href="addbatchstudent.php?trainer_id=61&course_id=16&batch_id=50">Add</a>
															<a class="dropdown-item" href="removebatchstudent.php?trainer_id=61&course_id=16&batch_id=50">Remove</a>
															<a class="btn dropdown-item" href="connection_files/manage/batch_manage.php?id=50&delete=delete">Delete</a>
															<a class="dropdown-item" href="connection_files/manage/batch_manage.php?id=50&complete=complete">Complete</a>

														</div><!-- dropdown-menu -->
													</div>
												</td>

												<!--<td><a href="updatefinalbatchcreate.php?id=50&page=manage" class="btn btn-info">update</a></td>-->
												<!--<td><a href="addbatchstudent.php?trainer_id=61&course_id=16" class="btn btn-success">add</a></td>-->
												<!--<td><a href="removebatchstudent.php?trainer_id=61&course_id=16" class="btn btn-danger">Remove</a></td>-->





											</tr>





											<tr>
												<td>8</td>
												<td>2023-10-09 12:28:15</td>
												<td>TRSTBA_51</td>

												<td>Shanti Kiran</td>
												<td>Python</td>
												<td>117</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">

															<a href="updatefinalbatchcreate.php?id=51" class="dropdown-item">Update</a>
															<a class="dropdown-item" href="addbatchstudent.php?trainer_id=57&course_id=28&batch_id=51">Add</a>
															<a class="dropdown-item" href="removebatchstudent.php?trainer_id=57&course_id=28&batch_id=51">Remove</a>
															<a class="btn dropdown-item" href="connection_files/manage/batch_manage.php?id=51&delete=delete">Delete</a>
															<a class="dropdown-item" href="connection_files/manage/batch_manage.php?id=51&complete=complete">Complete</a>

														</div><!-- dropdown-menu -->
													</div>
												</td>

												<!--<td><a href="updatefinalbatchcreate.php?id=51&page=manage" class="btn btn-info">update</a></td>-->
												<!--<td><a href="addbatchstudent.php?trainer_id=57&course_id=28" class="btn btn-success">add</a></td>-->
												<!--<td><a href="removebatchstudent.php?trainer_id=57&course_id=28" class="btn btn-danger">Remove</a></td>-->





											</tr>





											<tr>
												<td>9</td>
												<td>2023-10-12 12:54:25</td>
												<td>TRSTBA_52</td>

												<td>K Bharath Kumar</td>
												<td>Tally GST</td>
												<td>58</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">

															<a href="updatefinalbatchcreate.php?id=52" class="dropdown-item">Update</a>
															<a class="dropdown-item" href="addbatchstudent.php?trainer_id=63&course_id=17&batch_id=52">Add</a>
															<a class="dropdown-item" href="removebatchstudent.php?trainer_id=63&course_id=17&batch_id=52">Remove</a>
															<a class="btn dropdown-item" href="connection_files/manage/batch_manage.php?id=52&delete=delete">Delete</a>
															<a class="dropdown-item" href="connection_files/manage/batch_manage.php?id=52&complete=complete">Complete</a>

														</div><!-- dropdown-menu -->
													</div>
												</td>

												<!--<td><a href="updatefinalbatchcreate.php?id=52&page=manage" class="btn btn-info">update</a></td>-->
												<!--<td><a href="addbatchstudent.php?trainer_id=63&course_id=17" class="btn btn-success">add</a></td>-->
												<!--<td><a href="removebatchstudent.php?trainer_id=63&course_id=17" class="btn btn-danger">Remove</a></td>-->





											</tr>





											<tr>
												<td>10</td>
												<td>2023-10-13 13:09:35</td>
												<td>TRSTBA_54</td>

												<td>V Bala Tripura Sunadri</td>
												<td>JAVA</td>
												<td>58</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">

															<a href="updatefinalbatchcreate.php?id=54" class="dropdown-item">Update</a>
															<a class="dropdown-item" href="addbatchstudent.php?trainer_id=19&course_id=32&batch_id=54">Add</a>
															<a class="dropdown-item" href="removebatchstudent.php?trainer_id=19&course_id=32&batch_id=54">Remove</a>
															<a class="btn dropdown-item" href="connection_files/manage/batch_manage.php?id=54&delete=delete">Delete</a>
															<a class="dropdown-item" href="connection_files/manage/batch_manage.php?id=54&complete=complete">Complete</a>

														</div><!-- dropdown-menu -->
													</div>
												</td>

												<!--<td><a href="updatefinalbatchcreate.php?id=54&page=manage" class="btn btn-info">update</a></td>-->
												<!--<td><a href="addbatchstudent.php?trainer_id=19&course_id=32" class="btn btn-success">add</a></td>-->
												<!--<td><a href="removebatchstudent.php?trainer_id=19&course_id=32" class="btn btn-danger">Remove</a></td>-->





											</tr>





											<tr>
												<td>11</td>
												<td>2023-10-13 16:56:43</td>
												<td>TRSTBA_55</td>

												<td>Ramu</td>
												<td>Medical Coding</td>
												<td>72</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">

															<a href="updatefinalbatchcreate.php?id=55" class="dropdown-item">Update</a>
															<a class="dropdown-item" href="addbatchstudent.php?trainer_id=45&course_id=34&batch_id=55">Add</a>
															<a class="dropdown-item" href="removebatchstudent.php?trainer_id=45&course_id=34&batch_id=55">Remove</a>
															<a class="btn dropdown-item" href="connection_files/manage/batch_manage.php?id=55&delete=delete">Delete</a>
															<a class="dropdown-item" href="connection_files/manage/batch_manage.php?id=55&complete=complete">Complete</a>

														</div><!-- dropdown-menu -->
													</div>
												</td>

												<!--<td><a href="updatefinalbatchcreate.php?id=55&page=manage" class="btn btn-info">update</a></td>-->
												<!--<td><a href="addbatchstudent.php?trainer_id=45&course_id=34" class="btn btn-success">add</a></td>-->
												<!--<td><a href="removebatchstudent.php?trainer_id=45&course_id=34" class="btn btn-danger">Remove</a></td>-->





											</tr>





											<tr>
												<td>12</td>
												<td>2023-10-21 12:18:24</td>
												<td>TRSTBA_56</td>

												<td>tirdhala ashok</td>
												<td>Web Technologies</td>
												<td>82</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">

															<a href="updatefinalbatchcreate.php?id=56" class="dropdown-item">Update</a>
															<a class="dropdown-item" href="addbatchstudent.php?trainer_id=44&course_id=33&batch_id=56">Add</a>
															<a class="dropdown-item" href="removebatchstudent.php?trainer_id=44&course_id=33&batch_id=56">Remove</a>
															<a class="btn dropdown-item" href="connection_files/manage/batch_manage.php?id=56&delete=delete">Delete</a>
															<a class="dropdown-item" href="connection_files/manage/batch_manage.php?id=56&complete=complete">Complete</a>

														</div><!-- dropdown-menu -->
													</div>
												</td>

												<!--<td><a href="updatefinalbatchcreate.php?id=56&page=manage" class="btn btn-info">update</a></td>-->
												<!--<td><a href="addbatchstudent.php?trainer_id=44&course_id=33" class="btn btn-success">add</a></td>-->
												<!--<td><a href="removebatchstudent.php?trainer_id=44&course_id=33" class="btn btn-danger">Remove</a></td>-->





											</tr>





											<tr>
												<td>13</td>
												<td>2023-12-02 14:06:10</td>
												<td>TRSTBA_57</td>

												<td>demotrainer</td>
												<td>Voice process</td>
												<td>726</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">

															<a href="updatefinalbatchcreate.php?id=57" class="dropdown-item">Update</a>
															<a class="dropdown-item" href="addbatchstudent.php?trainer_id=35&course_id=10&batch_id=57">Add</a>
															<a class="dropdown-item" href="removebatchstudent.php?trainer_id=35&course_id=10&batch_id=57">Remove</a>
															<a class="btn dropdown-item" href="connection_files/manage/batch_manage.php?id=57&delete=delete">Delete</a>
															<a class="dropdown-item" href="connection_files/manage/batch_manage.php?id=57&complete=complete">Complete</a>

														</div><!-- dropdown-menu -->
													</div>
												</td>

												<!--<td><a href="updatefinalbatchcreate.php?id=57&page=manage" class="btn btn-info">update</a></td>-->
												<!--<td><a href="addbatchstudent.php?trainer_id=35&course_id=10" class="btn btn-success">add</a></td>-->
												<!--<td><a href="removebatchstudent.php?trainer_id=35&course_id=10" class="btn btn-danger">Remove</a></td>-->





											</tr>





											<tr>
												<td>14</td>
												<td>2023-12-04 15:32:01</td>
												<td>TRSTBA_59</td>

												<td>M Sandeep Kumar</td>
												<td>Digital Marketing</td>
												<td>9</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">

															<a href="updatefinalbatchcreate.php?id=59" class="dropdown-item">Update</a>
															<a class="dropdown-item" href="addbatchstudent.php?trainer_id=5&course_id=16&batch_id=59">Add</a>
															<a class="dropdown-item" href="removebatchstudent.php?trainer_id=5&course_id=16&batch_id=59">Remove</a>
															<a class="btn dropdown-item" href="connection_files/manage/batch_manage.php?id=59&delete=delete">Delete</a>
															<a class="dropdown-item" href="connection_files/manage/batch_manage.php?id=59&complete=complete">Complete</a>

														</div><!-- dropdown-menu -->
													</div>
												</td>

												<!--<td><a href="updatefinalbatchcreate.php?id=59&page=manage" class="btn btn-info">update</a></td>-->
												<!--<td><a href="addbatchstudent.php?trainer_id=5&course_id=16" class="btn btn-success">add</a></td>-->
												<!--<td><a href="removebatchstudent.php?trainer_id=5&course_id=16" class="btn btn-danger">Remove</a></td>-->





											</tr>





											<tr>
												<td>15</td>
												<td>2023-12-20 11:12:10</td>
												<td>TRSTBA_60</td>

												<td>V Bala Tripura Sunadri </td>
												<td>Python</td>
												<td>2</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">

															<a href="updatefinalbatchcreate.php?id=60" class="dropdown-item">Update</a>
															<a class="dropdown-item" href="addbatchstudent.php?trainer_id=19&course_id=28&batch_id=60">Add</a>
															<a class="dropdown-item" href="removebatchstudent.php?trainer_id=19&course_id=28&batch_id=60">Remove</a>
															<a class="btn dropdown-item" href="connection_files/manage/batch_manage.php?id=60&delete=delete">Delete</a>
															<a class="dropdown-item" href="connection_files/manage/batch_manage.php?id=60&complete=complete">Complete</a>

														</div><!-- dropdown-menu -->
													</div>
												</td>

												<!--<td><a href="updatefinalbatchcreate.php?id=60&page=manage" class="btn btn-info">update</a></td>-->
												<!--<td><a href="addbatchstudent.php?trainer_id=19&course_id=28" class="btn btn-success">add</a></td>-->
												<!--<td><a href="removebatchstudent.php?trainer_id=19&course_id=28" class="btn btn-danger">Remove</a></td>-->





											</tr>





											<tr>
												<td>16</td>
												<td>2023-12-21 13:30:26</td>
												<td>TRSTBA_61</td>

												<td>Kishore Kumar </td>
												<td>Human resource management</td>
												<td>42</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">

															<a href="updatefinalbatchcreate.php?id=61" class="dropdown-item">Update</a>
															<a class="dropdown-item" href="addbatchstudent.php?trainer_id=64&course_id=8&batch_id=61">Add</a>
															<a class="dropdown-item" href="removebatchstudent.php?trainer_id=64&course_id=8&batch_id=61">Remove</a>
															<a class="btn dropdown-item" href="connection_files/manage/batch_manage.php?id=61&delete=delete">Delete</a>
															<a class="dropdown-item" href="connection_files/manage/batch_manage.php?id=61&complete=complete">Complete</a>

														</div><!-- dropdown-menu -->
													</div>
												</td>

												<!--<td><a href="updatefinalbatchcreate.php?id=61&page=manage" class="btn btn-info">update</a></td>-->
												<!--<td><a href="addbatchstudent.php?trainer_id=64&course_id=8" class="btn btn-success">add</a></td>-->
												<!--<td><a href="removebatchstudent.php?trainer_id=64&course_id=8" class="btn btn-danger">Remove</a></td>-->





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

								<p> Are you sure you want to accept a student??</p>
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
								<h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">

								<p> Are you sure you want to reject a student??</p>
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
								<h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
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