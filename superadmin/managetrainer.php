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
						<span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Manage Trainer</span>
					</div>

					<div class="justify-content-center mt-2">
						<ol class="breadcrumb">
							<li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Credentials</a></li>
							<li class="breadcrumb-item ">Trainer</li>
							<li class="breadcrumb-item ">Manage</li>
						</ol>
					</div>

				</div>
				<form method="post">
					<div class="row row-sm">
						<div class="form-group col-md-3">
							<b> <label>Qualifications</label> </b>
							<select name="Qualification" class="form-control form-select" data-bs-placeholder="Select Filter">
								<option value="ALL">ALL</option>
								<option value=""></option>
								<option value="Graduate">Graduate</option>
								<option value="NA">NA</option>
								<option value="MCA">MCA</option>
								<option value="Btech">Btech</option>
								<option value="Bachelor of technology ">Bachelor of technology </option>
								<option value="B.com Computers">B.com Computers</option>
								<option value="Bsc">Bsc</option>
								<option value="B Tech 3rd year">B Tech 3rd year</option>
								<option value="Doctor of pharmacy">Doctor of pharmacy</option>
								<option value="MBA">MBA</option>
								<option value="B.Tech">B.Tech</option>
								<option value="b sc biotechnology">b sc biotechnology</option>
								<option value="pursuing PGDM">pursuing PGDM</option>
								<option value="cse">cse</option>
								<option value="B-tech">B-tech</option>
								<option value="B.E">B.E</option>
								<option value="degree">degree</option>
							</select>
						</div>
						<div class="form-group col-md-3">
							<b> <label>Any Experience</label> </b>

							<select name="Any_Experience" class="form-control form-select" data-bs-placeholder="Select Filter">

								<option value="ALL" selected="selected">ALL</option>
								<option value=""></option>
								<option value="yes">yes</option>
								<option value="Fresher">Fresher</option>
								<option value="no">no</option>
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
												<th class="border-bottom-0">Trainer ID</th>
												<th class="border-bottom-0">Trainer Name</th>
												<th class="border-bottom-0">Username</th>
												<th class="border-bottom-0">Password</th>
												<th class="border-bottom-0">Phone No</th>

												<th class="border-bottom-0">Qualification</th>
												<th class="border-bottom-0">Experience</th>



												<th class="border-bottom-0">Actions</th>


											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>TRTRA_4</td>
												<td>Nandamuru Koteswara Rao</td>
												<td>nani1438</td>
												<td>Lucky4*3*</td>
												<td>9885446397</td>
												<td></td>

												<td></td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=4" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=4" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=4&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=4&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=4&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>TRTRA_5</td>
												<td>M Sandeep Kumar</td>
												<td>sandeepmatta86</td>
												<td>Guessme10!</td>
												<td>8008490769</td>
												<td>Graduate</td>

												<td>yes</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=5" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=5" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=5&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=5&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=5&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>TRTRA_18</td>
												<td>Uma Kiran V</td>
												<td>uk1986</td>
												<td>lord@9168</td>
												<td>9030779908</td>
												<td>NA</td>

												<td>yes</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=18" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=18" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=18&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=18&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=18&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>4</td>
												<td>TRTRA_19</td>
												<td>V Bala Tripura Sunadri</td>
												<td>Bala Triaright</td>
												<td>Sundari16</td>
												<td>7569371172</td>
												<td>MCA</td>

												<td>Fresher</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=19" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=19" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=19&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=19&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=19&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>5</td>
												<td>TRTRA_24</td>
												<td>SRIKANTH </td>
												<td>Srikanth</td>
												<td>Ss77949661</td>
												<td>7794966150</td>
												<td></td>

												<td></td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=24" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=24" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=24&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=24&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=24&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>6</td>
												<td>TRTRA_27</td>
												<td>Nikhil Chakka</td>
												<td>nikhil0908</td>
												<td>Nikhil@200</td>
												<td>9182394164</td>
												<td>Btech</td>

												<td>yes</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=27" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=27" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=27&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=27&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=27&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>7</td>
												<td>TRTRA_28</td>
												<td>Shaik Ashraf rahil</td>
												<td>AshrafRahil</td>
												<td>Ashu@1223</td>
												<td>9505536778</td>
												<td>BTECH</td>

												<td>no</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=28" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=28" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=28&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=28&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=28&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>8</td>
												<td>TRTRA_30</td>
												<td>Senthan M S V S</td>
												<td>Senthan99</td>
												<td>Janvasu246</td>
												<td>8463908988</td>
												<td>Bachelor of technology </td>

												<td>yes</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=30" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=30" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=30&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=30&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=30&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>9</td>
												<td>TRTRA_31</td>
												<td>Shiva Krishna</td>
												<td>GarikaShiva</td>
												<td>Deepna@123</td>
												<td>9701885280</td>
												<td>B.com Computers</td>

												<td>yes</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=31" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=31" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=31&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=31&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=31&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>10</td>
												<td>TRTRA_32</td>
												<td>Balaji</td>
												<td>Kontham balaji</td>
												<td>nani royal</td>
												<td>9398978563</td>
												<td>Bsc</td>

												<td>yes</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=32" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=32" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=32&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=32&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=32&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>11</td>
												<td>TRTRA_33</td>
												<td>CH.Varsha</td>
												<td>CH.Varsha</td>
												<td>Varsha@123</td>
												<td>9573066040</td>
												<td>B Tech 3rd year</td>

												<td>no</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=33" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=33" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=33&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=33&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=33&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>12</td>
												<td>TRTRA_35</td>
												<td>demotrainer</td>
												<td>demotrainer</td>
												<td>demotraine</td>
												<td>9515245974</td>
												<td>Btech</td>

												<td>yes</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=35" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=35" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=35&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=35&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=35&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>13</td>
												<td>TRTRA_36</td>
												<td>saitejaswi kolliboina</td>
												<td>tejaswirao</td>
												<td>Vishnu1@</td>
												<td>6305769721</td>
												<td>Doctor of pharmacy</td>

												<td>yes</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=36" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=36" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=36&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=36&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=36&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>14</td>
												<td>TRTRA_38</td>
												<td>Vasundhara</td>
												<td>vasu2023</td>
												<td>vasu2023</td>
												<td>7396971900</td>
												<td>Btech</td>

												<td>no</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=38" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=38" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=38&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=38&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=38&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>15</td>
												<td>TRTRA_39</td>
												<td>Narender</td>
												<td>narender</td>
												<td>12345678</td>
												<td>9177627750</td>
												<td>Btech</td>

												<td>yes</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=39" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=39" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=39&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=39&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=39&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>16</td>
												<td>TRTRA_40</td>
												<td>Madhu Varshini</td>
												<td>Madhu Varshini</td>
												<td>Vfxce+121</td>
												<td>7386827750</td>
												<td>MBA</td>

												<td>no</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=40" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=40" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=40&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=40&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=40&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>17</td>
												<td>TRTRA_41</td>
												<td>Saieshwari Gogu</td>
												<td>Saieshwari</td>
												<td>sg2023tria</td>
												<td>7095739748</td>
												<td>B.Tech</td>

												<td>yes</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=41" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=41" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=41&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=41&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=41&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>18</td>
												<td>TRTRA_44</td>
												<td>tirdhala ashok</td>
												<td>Ashokvarma1</td>
												<td>.adgjm143@</td>
												<td>9963627750</td>
												<td>b sc biotechnology</td>

												<td>no</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=44" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=44" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=44&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=44&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=44&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>19</td>
												<td>TRTRA_45</td>
												<td>Ramu</td>
												<td>Ramumudhiraj</td>
												<td>9848047413</td>
												<td>9381281408</td>
												<td>BSC</td>

												<td>yes</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=45" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=45" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=45&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=45&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=45&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>20</td>
												<td>TRTRA_46</td>
												<td>G Venkatesh</td>
												<td>Venkateshgali369</td>
												<td>Venkatesh@</td>
												<td>9133539219</td>
												<td></td>

												<td></td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=46" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=46" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=46&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=46&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=46&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>21</td>
												<td>TRTRA_47</td>
												<td>Mekanaboyina Venkata murali Krishna</td>
												<td>murali_77</td>
												<td>9014050844</td>
												<td>9014050844</td>
												<td>pursuing PGDM</td>

												<td>no</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=47" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=47" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=47&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=47&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=47&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>22</td>
												<td>TRTRA_49</td>
												<td>demotesting</td>
												<td>demotesting</td>
												<td>demotestin</td>
												<td>9182661999</td>
												<td>cse</td>

												<td>yes</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=49" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=49" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=49&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=49&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=49&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>23</td>
												<td>TRTRA_50</td>
												<td>Madanu Augustin</td>
												<td>augustin77</td>
												<td>augustin77</td>
												<td>7396722162</td>
												<td>B-tech</td>

												<td>no</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=50" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=50" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=50&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=50&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=50&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>24</td>
												<td>TRTRA_51</td>
												<td>jammu suresh kumar</td>
												<td>suresh321</td>
												<td>triaright3</td>
												<td>9160078570</td>
												<td>B.TECH</td>

												<td>yes</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=51" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=51" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=51&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=51&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=51&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>25</td>
												<td>TRTRA_52</td>
												<td>Tiruvidhula Naga Sai Priyanka</td>
												<td>Priyanka</td>
												<td>Priya@03</td>
												<td>9491826798</td>
												<td>B.tech</td>

												<td>no</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=52" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=52" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=52&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=52&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=52&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>26</td>
												<td>TRTRA_56</td>
												<td>Akhila V</td>
												<td>AkhilaVengal</td>
												<td>Akhil@9792</td>
												<td>8208419792</td>
												<td>MCA</td>

												<td>yes</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=56" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=56" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=56&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=56&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=56&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>27</td>
												<td>TRTRA_57</td>
												<td>Shanti Kiran</td>
												<td>Shanti Kiran</td>
												<td>Triaright@</td>
												<td>7670980921</td>
												<td>B.E</td>

												<td>yes</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=57" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=57" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=57&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=57&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=57&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>28</td>
												<td>TRTRA_58</td>
												<td>Cmr 1</td>
												<td>Cmr1@123</td>
												<td>12345678</td>
												<td>8885267750</td>
												<td>MBA</td>

												<td>no</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=58" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=58" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=58&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=58&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=58&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>29</td>
												<td>TRTRA_59</td>
												<td>Cmr 2</td>
												<td>Cmr2@123</td>
												<td>12345678</td>
												<td>9848627750</td>
												<td>MBA</td>

												<td>no</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=59" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=59" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=59&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=59&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=59&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>30</td>
												<td>TRTRA_61</td>
												<td>Srinivas Yerrravelli</td>
												<td>Srinivas Y</td>
												<td>9515245974</td>
												<td>6304464810</td>
												<td>Btech</td>

												<td>yes</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=61" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=61" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=61&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=61&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=61&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>31</td>
												<td>TRTRA_62</td>
												<td>vijay kumar sampathi</td>
												<td>vijaykumar</td>
												<td>8367733682</td>
												<td>8367733682</td>
												<td>degree</td>

												<td>no</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=62" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=62" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=62&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=62&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=62&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>32</td>
												<td>TRTRA_63</td>
												<td>K Bharath Kumar </td>
												<td>BharathKumar</td>
												<td>Bharath@12</td>
												<td>8985745966</td>
												<td>MCA</td>

												<td>yes</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=63" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=63" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=63&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=63&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=63&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>33</td>
												<td>TRTRA_64</td>
												<td>Kishore Kumar </td>
												<td>kishore2120</td>
												<td>kishore2120</td>
												<td>8008627750</td>
												<td>MBA</td>

												<td>yes</td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=64" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=64" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=64&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=64&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=64&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>
											<tr>
												<td>34</td>
												<td>TRTRA_65</td>
												<td>preeti</td>
												<td>preeti@28</td>
												<td>Krishna@14</td>
												<td>3344556677</td>
												<td></td>

												<td></td>

												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewtrainer.php?Id=65" class="dropdown-item">view</a>
															<a href="updatetrainer.php?Id=65" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=65&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=65&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/trainer_manage.php?Id=65&unblock=unblock">unblock</a>

															<!--	<a href="allocateemployee.html" class="dropdown-item">Allocate</a> -->
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


				<div class="modal fade" id="delete">
					<div class="modal-dialog" role="document">
						<div class="modal-content modal-content-demo">
							<div class="modal-header">
								<h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">

								<p> Are you sure you want to delete a trainer?</p>
							</div>
							<div class="modal-footer">
								<button class="btn ripple btn-success" type="button">Delete</button>
								<button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
									Now</button>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="block">
					<div class="modal-dialog" role="document">
						<div class="modal-content modal-content-demo">
							<div class="modal-header">
								<h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">

								<p> Are you sure you want to block a trainer?</p>
							</div>
							<div class="modal-footer">
								<button class="btn ripple btn-success" type="button">block</button>
								<button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
									Now</button>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="unblock">
					<div class="modal-dialog" role="document">
						<div class="modal-content modal-content-demo">
							<div class="modal-header">
								<h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">

								<p> Are you sure you want to unblock a trainer?</p>
							</div>
							<div class="modal-footer">
								<button class="btn ripple btn-success" type="button">unblock</button>
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