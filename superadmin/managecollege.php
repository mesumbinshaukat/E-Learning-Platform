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
						<span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Manage College</span>
					</div>

					<div class="justify-content-center mt-2">
						<ol class="breadcrumb">
							<li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Credentials</a></li>
							<li class="breadcrumb-item ">College</li>
							<li class="breadcrumb-item ">Manage</li>
						</ol>
					</div>

				</div>
				<form method="post">
					<div class="row row-sm">
						<div class="form-group col-md-3">
							<P><b> Affliated University</b> </p>

							<select name="affiliated_university" class="form-control form-select" data-bs-placeholder="Select Filter">
								<option value="All" selected="selected">ALL</option>
								<option value="Dr. B R Ambedkar University">Dr. B R Ambedkar University</option>
								<option value="S.V.University">S.V.University</option>
								<option value="None">None</option>
								<option value="Andhra University, Visakhapatnam">Andhra University, Visakhapatnam</option>
								<option value="SRIKRISHNA DEVARAYA UNIVERSITY">SRIKRISHNA DEVARAYA UNIVERSITY</option>
								<option value="Adikavi Nannaya University">Adikavi Nannaya University</option>
								<option value="ACHARYA NAGARJUNA UNIVERSITY">ACHARYA NAGARJUNA UNIVERSITY</option>
								<option value="SRI KRISHNADEVARAYA UNIVERSITY">SRI KRISHNADEVARAYA UNIVERSITY</option>
								<option value="Third Party">Third Party</option>
								<option value="Jntu kakinada">Jntu kakinada</option>
								<option value="Yogi Vemana University">Yogi Vemana University</option>
								<option value="Adikavi Nannya University">Adikavi Nannya University</option>
								<option value="Andhra University">Andhra University</option>
								<option value="Aadi Kavi Nannaya">Aadi Kavi Nannaya</option>
								<option value="ADIKAVI NANNAYYA UNIVERSITY ">ADIKAVI NANNAYYA UNIVERSITY </option>
								<option value="ADI KAVI NANNAYA UNIVERSITY">ADI KAVI NANNAYA UNIVERSITY</option>
								<option value="osmania university">osmania university</option>
								<option value="ADIKAVI NANAYA UNIVERSITY">ADIKAVI NANAYA UNIVERSITY</option>
								<option value="Sri venkateswara university">Sri venkateswara university</option>
								<option value="AKNU">AKNU</option>
								<option value="Demo University">Demo University</option>
								<option value="S.K.U">S.K.U</option>
								<option value=" S. k. University"> S. k. University</option>
								<option value="SK University Anantapuram">SK University Anantapuram</option>
								<option value="S V University, Tirupati ">S V University, Tirupati </option>
								<option value="SRI KRISHNA DEVARAYA UNIVERSITY ">SRI KRISHNA DEVARAYA UNIVERSITY </option>
								<option value="R U">R U</option>
								<option value="VIT University">VIT University</option>

							</select>
						</div>
						<div class="form-group col-md-3">
							<P><b>District</b> </p>


							</select>
							<select name="district" class="form-control form-select" data-bs-placeholder="Select Filter">
								<option value="All" selected="selected">ALL</option>
								<option value="VIZIANAGARAM">VIZIANAGARAM</option>
								<option value="TIRUPATI">TIRUPATI</option>
								<option value=" Chittoor"> Chittoor</option>
								<option value="Chittoor">Chittoor</option>
								<option value="Palnadu">Palnadu</option>
								<option value="Anakapalli">Anakapalli</option>
								<option value="Sri Satya sai">Sri Satya sai</option>
								<option value="West Godavari">West Godavari</option>
								<option value="Bapatla">Bapatla</option>
								<option value="ANANTAPUR">ANANTAPUR</option>
								<option value="Ranga Reddy">Ranga Reddy</option>
								<option value="Kadapa">Kadapa</option>
								<option value="PALANADU">PALANADU</option>
								<option value="Anakapalle">Anakapalle</option>
								<option value="East Godavari ">East Godavari </option>
								<option value="vskp">vskp</option>
								<option value="medchal">medchal</option>
								<option value="Eluru">Eluru</option>
								<option value="Macherla">Macherla</option>
								<option value="Narsipatnam">Narsipatnam</option>
								<option value=" ANNAMAYYA"> ANNAMAYYA</option>
								<option value="hyderabad">hyderabad</option>
								<option value="Annamayya">Annamayya</option>
								<option value="Sri Sathya Sai">Sri Sathya Sai</option>
								<option value="Konaseema">Konaseema</option>
								<option value="sri satyasai">sri satyasai</option>
								<option value=" Kurnool "> Kurnool </option>
								<option value="Guntur ">Guntur </option>

							</select>
						</div>


						&nbsp &nbsp <button type="submit" class="btn btn-primary" style="height:40px;width:100px;margin-top:35px">Search</button>

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

												<th class="border-bottom-0">College ID</th>
												<th class="border-bottom-0">College Name</th>
												<th class="border-bottom-0">Representative Name</th>
												<th class="border-bottom-0">Username</th>
												<th class="border-bottom-0">Password</th>
												<th class="border-bottom-0">Phone No</th>
												<th class="border-bottom-0">District</th>

												<th class="border-bottom-0">Actions</th>


											</tr>
										</thead>
										<tbody>


											<tr>
												<td>1</td>
												<td>TRCLG_2</td>
												<td>GNR Degree College</td>
												<td>D.Vijay Kumar</td>
												<td>GNR Degree College</td>
												<td>12345678</td>
												<td>9440940983</td>
												<td>VIZIANAGARAM</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=2" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=2&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=2&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=2&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=2&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>2</td>
												<td>TRCLG_3</td>
												<td>Gayatri Degree & PG College</td>
												<td>M.Neeraja Madhavi</td>
												<td>GAYATRI DEGREE & PG COLLEGE</td>
												<td>12345678</td>
												<td>8772260513</td>
												<td>TIRUPATI</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=3" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=3&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=3&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=3&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=3&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>3</td>
												<td>TRCLG_4</td>
												<td>SNR Degree College</td>
												<td>Muni Raju Garu </td>
												<td>SNR Degree College</td>
												<td>12345678</td>
												<td>9440345552</td>
												<td> Chittoor</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=4" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=4&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=4&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=4&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=4&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>4</td>
												<td>TRCLG_5</td>
												<td>SV Degree College</td>
												<td>Sridhar</td>
												<td>SV Degree College</td>
												<td>12345678</td>
												<td>9700123320</td>
												<td> Chittoor</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=5" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=5&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=5&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=5&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=5&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>5</td>
												<td>TRCLG_6</td>
												<td>Vidya Degree College</td>
												<td>Vasu</td>
												<td>Vidya Degree College</td>
												<td>12345678</td>
												<td>9959292981</td>
												<td> Chittoor</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=6" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=6&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=6&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=6&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=6&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>6</td>
												<td>TRCLG_7</td>
												<td>Vijetha Junior & Degree College</td>
												<td>A.Hemachandra Naidu Garu</td>
												<td>Vijetha Junior & Degree College</td>
												<td>12345678</td>
												<td>9490047251</td>
												<td>Chittoor</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=7" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=7&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=7&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=7&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=7&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>7</td>
												<td>TRCLG_8</td>
												<td>Vignana Sudha Degree & PG College</td>
												<td>Dhandapani</td>
												<td>Vignana Sudha Degree & PG College</td>
												<td>12345678</td>
												<td>1234567890</td>
												<td> Chittoor</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=8" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=8&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=8&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=8&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=8&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>8</td>
												<td>TRCLG_9</td>
												<td>R K Degree College</td>
												<td>Ramesh Babu</td>
												<td>R K Degree College</td>
												<td>12345678</td>
												<td>08572222800</td>
												<td>Chittoor</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=9" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=9&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=9&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=9&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=9&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>9</td>
												<td>TRCLG_10</td>
												<td>Krishnaveni Degree College</td>
												<td>N. Venkateswarlu</td>
												<td>Krishnaveni Degree College</td>
												<td>12345678</td>
												<td>9849788212</td>
												<td>Palnadu</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=10" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=10&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=10&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=10&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=10&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>10</td>
												<td>TRCLG_11</td>
												<td>S V S Degree College</td>
												<td>Chintakayala Pentayya</td>
												<td>Svsdecollege</td>
												<td>12345678</td>
												<td>9912648866</td>
												<td>Anakapalli</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=11" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=11&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=11&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=11&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=11&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>11</td>
												<td>TRCLG_14</td>
												<td>SRI VIVEKANANDA DEGREE COLLEGE</td>
												<td>S Rizwan basha</td>
												<td>svivekananda</td>
												<td>12345678</td>
												<td>9399995399</td>
												<td>Sri Satya sai</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=14" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=14&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=14&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=14&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=14&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>12</td>
												<td>TRCLG_17</td>
												<td>Sri Y N Degree College</td>
												<td>Dr. A P V APPARAO</td>
												<td>syndegreecollege</td>
												<td>12345678</td>
												<td>8978331125</td>
												<td>West Godavari</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=17" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=17&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=17&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=17&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=17&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>13</td>
												<td>TRCLG_18</td>
												<td>S V R M Degree College</td>
												<td>CH Nagaraju</td>
												<td>svrmdegclg</td>
												<td>12345678</td>
												<td>9393068272</td>
												<td>Bapatla</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=18" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=18&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=18&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=18&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=18&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>14</td>
												<td>TRCLG_20</td>
												<td>S.V.G.M. GOVERNMENT DEGREE COLLEGE</td>
												<td>Dr. D. Jayarama Reddy</td>
												<td>svdmgovtdegreecollege</td>
												<td>12345678</td>
												<td>9440333703</td>
												<td>ANANTAPUR</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=20" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=20&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=20&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=20&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=20&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>15</td>
												<td>TRCLG_24</td>
												<td>QSPIRE </td>
												<td>E. Sujatha</td>
												<td>qspire</td>
												<td>12345678</td>
												<td>6281776979</td>
												<td>Ranga Reddy</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=24" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=24&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=24&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=24&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=24&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>16</td>
												<td>TRCLG_28</td>
												<td>SAI PARAMESHWARA DEGREE COLLEGE</td>
												<td>NAGESHWAR RAO</td>
												<td>spdegreecollege</td>
												<td>12345678</td>
												<td>12345678</td>
												<td>Kadapa</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=28" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=28&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=28&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=28&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=28&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>17</td>
												<td>TRCLG_29</td>
												<td>Satya institute of Technology and Management</td>
												<td>Srinu</td>
												<td>SITAM2023</td>
												<td>SITAM@12</td>
												<td>9290251491</td>
												<td>Vizianagaram</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=29" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=29&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=29&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=29&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=29&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>18</td>
												<td>TRCLG_30</td>
												<td>Sri Hari Degree College</td>
												<td>Dr Pch. Praveen Kumar</td>
												<td>sriharidclg</td>
												<td>12345678</td>
												<td>9885515209</td>
												<td>Kadapa</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=30" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=30&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=30&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=30&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=30&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>19</td>
												<td>TRCLG_34</td>
												<td>SVR DEGREE COLLEGE</td>
												<td>BHEEMA VENUGOPALA RAO</td>
												<td>svrdegreecollege</td>
												<td>12345678</td>
												<td>9985203339</td>
												<td>PALANADU</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=34" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=34&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=34&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=34&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=34&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>20</td>
												<td>TRCLG_38</td>
												<td> BGBS Womens Degree College</td>
												<td>V.Ganga Lakshmi </td>
												<td>bgbswdcollege</td>
												<td>12345678</td>
												<td>273231</td>
												<td>West Godavari</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=38" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=38&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=38&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=38&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=38&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>21</td>
												<td>TRCLG_41</td>
												<td>Dadi Veerunaidu College</td>
												<td>S Daya Madhuri</td>
												<td>Dadicollege</td>
												<td>12345678</td>
												<td>9963994096</td>
												<td>Anakapalle</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=41" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=41&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=41&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=41&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=41&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>22</td>
												<td>TRCLG_42</td>
												<td>Aditya Degree College AWDCKKD</td>
												<td>Karuna</td>
												<td>awdckkd</td>
												<td>12345678</td>
												<td>9704276665</td>
												<td>East Godavari </td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=42" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=42&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=42&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=42&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=42&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>23</td>
												<td>TRCLG_43</td>
												<td>Aditya Degree College ASCSKKD</td>
												<td>Buleah</td>
												<td>ascskkd</td>
												<td>12345678</td>
												<td>9440442223</td>
												<td>East Godavari </td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=43" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=43&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=43&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=43&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=43&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>24</td>
												<td>TRCLG_44</td>
												<td>Aditya Degree College for women Rajahmundry</td>
												<td>K V S B SASTRY</td>
												<td>aditya Degree College for women</td>
												<td>12345678</td>
												<td>9701976664</td>
												<td>East Godavari</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=44" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=44&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=44&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=44&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=44&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>25</td>
												<td>TRCLG_45</td>
												<td>Gayathri Degree College</td>
												<td>P V Rajesh</td>
												<td>gayathridcollege</td>
												<td>12345678</td>
												<td>9985365555</td>
												<td>Anakapalli</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=45" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=45&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=45&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=45&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=45&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>26</td>
												<td>TRCLG_46</td>
												<td>Aditya degree college</td>
												<td>P.D.V Prasad Rao</td>
												<td>Aditya degree college</td>
												<td>12345678</td>
												<td>9963376668</td>
												<td>East godavari</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=46" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=46&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=46&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=46&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=46&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>27</td>
												<td>TRCLG_47</td>
												<td>universe</td>
												<td>mary</td>
												<td>universe@123</td>
												<td>universe@123</td>
												<td>09949793962</td>
												<td>vskp</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=47" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=47&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=47&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=47&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=47&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>28</td>
												<td>TRCLG_48</td>
												<td>BRR & GKR CHAMBERS DEGREE & PG COLLEGE </td>
												<td>K LAKSHMAN RAO</td>
												<td>chambersdcollege</td>
												<td>12345678</td>
												<td>08814229521</td>
												<td>WEST GODAVARI</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=48" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=48&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=48&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=48&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=48&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>29</td>
												<td>TRCLG_49</td>
												<td>SRI ABN & PRR COLLEGE OF SCIENCE</td>
												<td>K Suri Babu</td>
												<td>abnprrc346</td>
												<td>Abnprr@123</td>
												<td>08813232907</td>
												<td>EAST GODAVARI</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=49" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=49&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=49&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=49&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=49&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>30</td>
												<td>TRCLG_51</td>
												<td>S. V. K. P. & Dr. K. S. Raju Arts and Science College (A)</td>
												<td>S Srinivas Rao</td>
												<td>svkp</td>
												<td>svkp@1234</td>
												<td>08819246926</td>
												<td>West Godavari</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=51" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=51&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=51&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=51&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=51&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>31</td>
												<td>TRCLG_52</td>
												<td>Gokul degree college</td>
												<td>kishore kumar</td>
												<td>Gokul degree</td>
												<td>gokul@123</td>
												<td></td>
												<td>medchal</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=52" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=52&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=52&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=52&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=52&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>32</td>
												<td>TRCLG_53</td>
												<td>Sir CR Reddy Degree College For Womens</td>
												<td>D Teja Sri</td>
												<td>sircrrwomenscollege</td>
												<td>12345678</td>
												<td>08812231192</td>
												<td>Eluru</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=53" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=53&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=53&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=53&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=53&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>33</td>
												<td>TRCLG_54</td>
												<td>MCV DEGREE COLLEGE </td>
												<td>K Rajasekhar Raju</td>
												<td>MCV DEGREE COLLEGE </td>
												<td>12345678</td>
												<td>08581252899</td>
												<td>Chittoor</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=54" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=54&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=54&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=54&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=54&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>34</td>
												<td>TRCLG_55</td>
												<td>DR.SARVEPALLI RADHA KRISHNA DEGREE COLLEGE</td>
												<td>CH.KIRANKUMAR</td>
												<td>DR.SARVEPALLI RADHA KRISHNA DEGREE COLLEGE</td>
												<td>12345678</td>
												<td>08818277272</td>
												<td>EAST GODAVARI</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=55" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=55&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=55&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=55&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=55&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>35</td>
												<td>TRCLG_56</td>
												<td>Andhra Pradesh residential degree College</td>
												<td>YNS Chowdhury</td>
												<td>Andhra Pradesh residential degree College</td>
												<td>12345678</td>
												<td>9182358151</td>
												<td>Macherla</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=56" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=56&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=56&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=56&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=56&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>36</td>
												<td>TRCLG_57</td>
												<td>DONBOSCO DEGREE COLLEGE</td>
												<td>L.Nagesh</td>
												<td>DONBOSCO DEGREE COLLEGE</td>
												<td>12345678</td>
												<td>6302203508</td>
												<td>Narsipatnam</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=57" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=57&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=57&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=57&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=57&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>37</td>
												<td>TRCLG_58</td>
												<td>SRI SAMHITHA DEGREE COLLEGE</td>
												<td>NALLA NAGABABU</td>
												<td>SRI SAMHITHA DEGREE COLLEGE</td>
												<td>12345678</td>
												<td>9652652208</td>
												<td>East Godavari</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=58" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=58&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=58&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=58&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=58&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>38</td>
												<td>TRCLG_59</td>
												<td>SRI VENKATESHWARA DEGREE COLLEGE </td>
												<td>S GURUMURTHY </td>
												<td>SRI VENKATESHWARA DEGREE COLLEGE </td>
												<td>12345678</td>
												<td>9440190616</td>
												<td> ANNAMAYYA</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=59" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=59&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=59&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=59&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=59&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>39</td>
												<td>TRCLG_60</td>
												<td>SRI VASAVI DEGREE COLLEGE</td>
												<td>L. LAKSHMI NARAYANA</td>
												<td>SRI VASAVI DEGREE COLLEGE</td>
												<td>12345678</td>
												<td>08818220580</td>
												<td>WEST GODAVARI</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=60" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=60&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=60&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=60&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=60&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>40</td>
												<td>TRCLG_61</td>
												<td>Demo Degree College</td>
												<td>Demo</td>
												<td>democolle</td>
												<td>democolle</td>
												<td>7981389893</td>
												<td>hyderabad</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=61" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=61&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=61&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=61&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=61&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>41</td>
												<td>TRCLG_62</td>
												<td>SV DEGREE COLLEGE PEDAGUMMULURU</td>
												<td>ch. v.s rao </td>
												<td>SV DEGREE COLLEGE PEDAGUMMULURU</td>
												<td>12345678</td>
												<td>9490102111</td>
												<td>ANAKAPALLI</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=62" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=62&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=62&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=62&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=62&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>42</td>
												<td>TRCLG_63</td>
												<td>AKRG Degree College</td>
												<td>P Leela Kumar</td>
												<td>AKRG Degree College</td>
												<td>12345678</td>
												<td>9493443311</td>
												<td>East Godavari</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=63" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=63&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=63&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=63&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=63&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>43</td>
												<td>TRCLG_64</td>
												<td>CNR Arts & Science College- Annamayya</td>
												<td>C. Vijay Bhaskar Reddy</td>
												<td>CNR Arts & Science College</td>
												<td>12345678</td>
												<td>8584242019</td>
												<td>Annamayya</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=64" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=64&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=64&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=64&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=64&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>44</td>
												<td>TRCLG_65</td>
												<td>Sri Balaji Vidya Vihar degree college</td>
												<td>A.R Balakrishna </td>
												<td>Sri Balaji Vidya Vihar degree college</td>
												<td>12345678</td>
												<td>8019278756</td>
												<td>Sri Sathya Sai</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=65" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=65&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=65&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=65&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=65&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>45</td>
												<td>TRCLG_66</td>
												<td>MVN JS & RVR College of Arts and Science</td>
												<td>T.V.V.Satyanarayana Rao</td>
												<td>MVN JS & RVR College of Arts and Science</td>
												<td>12345678</td>
												<td>9396939655</td>
												<td>Konaseema</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=66" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=66&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=66&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=66&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=66&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>46</td>
												<td>TRCLG_67</td>
												<td>Jyothirmayee women’s degree college </td>
												<td>K HARI KRISHNA</td>
												<td>Jyothirmayee women’s degree college </td>
												<td>12345678</td>
												<td>08497295905</td>
												<td>Anantapur</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=67" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=67&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=67&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=67&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=67&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>47</td>
												<td>TRCLG_68</td>
												<td>Sree Devi degree college </td>
												<td>V Nagaraju</td>
												<td>Sree Devi degree college </td>
												<td>12345678</td>
												<td>08497220133</td>
												<td>Anantapur</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=68" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=68&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=68&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=68&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=68&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>48</td>
												<td>TRCLG_69</td>
												<td>Sapthagiri Degree college Hindupur</td>
												<td>S parthasarathi</td>
												<td>Sapthagiri Degree college Hindupur</td>
												<td>12345678</td>
												<td>8819960355</td>
												<td>sri satyasai</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=69" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=69&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=69&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=69&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=69&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>49</td>
												<td>TRCLG_70</td>
												<td>SPVM Degree College Gorantla</td>
												<td>AVSS Manoj son in law of Correspondent</td>
												<td>SPVM Degree College Gorantla</td>
												<td>12345678</td>
												<td>08556235747</td>
												<td>Sri Sathya Sai</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=70" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=70&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=70&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=70&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=70&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>50</td>
												<td>TRCLG_71</td>
												<td>SVV Degree College, Penumuru </td>
												<td>P.Suresh </td>
												<td>SVV Degree College</td>
												<td>12345678</td>
												<td>9000446640</td>
												<td>Chittoor </td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=71" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=71&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=71&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=71&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=71&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>51</td>
												<td>TRCLG_72</td>
												<td>Sri Rachapudy Nagabhushanam Degree & P.G College, Badvel</td>
												<td>Bathina Ashok</td>
												<td>Sri Rachapudy Nagabhushanam Degree & P.G College, Badvel</td>
												<td>12345678</td>
												<td>9440740477</td>
												<td>Kadapa</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=72" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=72&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=72&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=72&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=72&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>52</td>
												<td>TRCLG_73</td>
												<td>SMJL DEGREE COLLEGE, KADIRI-515 591</td>
												<td>K Ramesh</td>
												<td>SMJL DEGREE COLLEGE</td>
												<td>12345678</td>
												<td>9440080821</td>
												<td>Sri satya sai</td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=73" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=73&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=73&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=73&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=73&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>53</td>
												<td>TRCLG_74</td>
												<td>SAI DEGREE COLLEGE</td>
												<td>K Raghavendra </td>
												<td>saidegreecollege</td>
												<td>123456789</td>
												<td>918341555676</td>
												<td> Kurnool </td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=74" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=74&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=74&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=74&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=74&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>54</td>
												<td>TRCLG_75</td>
												<td>SPACE DEGREE FOR WOMEN </td>
												<td>VETTI JAYARAM</td>
												<td>SPACE DEGREE FOR WOMEN </td>
												<td>12345678</td>
												<td>9494435977</td>
												<td>SRI SATYA SAI </td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=75" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=75&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=75&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=75&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=75&unblock=unblock">unblock</a>
														</div><!-- dropdown-menu -->
													</div>
												</td>
											</tr>


											<tr>
												<td>55</td>
												<td>TRCLG_76</td>
												<td>Vellore institute of Technology AP</td>
												<td>Viswanathan</td>
												<td>superadmin@gmail.com</td>
												<td>Kittu@212025</td>
												<td>08632370444</td>
												<td>Guntur </td>


												<td>
													<div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
														<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
															<i class="fe fe-more-horizontal"></i>
														</button>

														<div class="dropdown-menu">
															<a href="viewcollege.php?id=76" class="dropdown-item">view</a>
															<a href="updatecollege.php?id=76&page=manage" class="dropdown-item">update</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=76&delete=delete">delete</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=76&block=block">block</a>
															<a class="btn dropdown-item" href="connection_files/manage/college_manage.php?id=76&unblock=unblock">unblock</a>
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


				<div class="modal fade" id="Delete">
					<div class="modal-dialog" role="document">
						<div class="modal-content modal-content-demo">
							<div class="modal-header">
								<h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">

								<p> Are you sure you want to Delete a college?</p>
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

								<p> Are you sure you want to Block a college?</p>
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

								<p> Are you sure you want to Unblock a college?</p>
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

</html>                                                                class="dropdown-item">view</a>
                                                            <a href="updatecollege.php?id=70&page=manage"
                                                                class="dropdown-item">update</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/college_manage.php?id=70&delete=delete">delete</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/college_manage.php?id=70&block=block">block</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/college_manage.php?id=70&unblock=unblock">unblock</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>50</td>
                                                <td>TRCLG_71</td>
                                                <td>SVV Degree College, Penumuru </td>
                                                <td>P.Suresh </td>
                                                <td>SVV Degree College</td>
                                                <td>12345678</td>
                                                <td>9000446640</td>
                                                <td>Chittoor </td>


                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>

                                                        <div class="dropdown-menu">
                                                            <a href="viewcollege.php?id=71"
                                                                class="dropdown-item">view</a>
                                                            <a href="updatecollege.php?id=71&page=manage"
                                                                class="dropdown-item">update</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/college_manage.php?id=71&delete=delete">delete</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/college_manage.php?id=71&block=block">block</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/college_manage.php?id=71&unblock=unblock">unblock</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>51</td>
                                                <td>TRCLG_72</td>
                                                <td>Sri Rachapudy Nagabhushanam Degree & P.G College, Badvel</td>
                                                <td>Bathina Ashok</td>
                                                <td>Sri Rachapudy Nagabhushanam Degree & P.G College, Badvel</td>
                                                <td>12345678</td>
                                                <td>9440740477</td>
                                                <td>Kadapa</td>


                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>

                                                        <div class="dropdown-menu">
                                                            <a href="viewcollege.php?id=72"
                                                                class="dropdown-item">view</a>
                                                            <a href="updatecollege.php?id=72&page=manage"
                                                                class="dropdown-item">update</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/college_manage.php?id=72&delete=delete">delete</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/college_manage.php?id=72&block=block">block</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/college_manage.php?id=72&unblock=unblock">unblock</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>52</td>
                                                <td>TRCLG_73</td>
                                                <td>SMJL DEGREE COLLEGE, KADIRI-515 591</td>
                                                <td>K Ramesh</td>
                                                <td>SMJL DEGREE COLLEGE</td>
                                                <td>12345678</td>
                                                <td>9440080821</td>
                                                <td>Sri satya sai</td>


                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>

                                                        <div class="dropdown-menu">
                                                            <a href="viewcollege.php?id=73"
                                                                class="dropdown-item">view</a>
                                                            <a href="updatecollege.php?id=73&page=manage"
                                                                class="dropdown-item">update</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/college_manage.php?id=73&delete=delete">delete</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/college_manage.php?id=73&block=block">block</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/college_manage.php?id=73&unblock=unblock">unblock</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>53</td>
                                                <td>TRCLG_74</td>
                                                <td>SAI DEGREE COLLEGE</td>
                                                <td>K Raghavendra </td>
                                                <td>saidegreecollege</td>
                                                <td>123456789</td>
                                                <td>918341555676</td>
                                                <td> Kurnool </td>


                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>

                                                        <div class="dropdown-menu">
                                                            <a href="viewcollege.php?id=74"
                                                                class="dropdown-item">view</a>
                                                            <a href="updatecollege.php?id=74&page=manage"
                                                                class="dropdown-item">update</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/college_manage.php?id=74&delete=delete">delete</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/college_manage.php?id=74&block=block">block</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/college_manage.php?id=74&unblock=unblock">unblock</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>54</td>
                                                <td>TRCLG_75</td>
                                                <td>SPACE DEGREE FOR WOMEN </td>
                                                <td>VETTI JAYARAM</td>
                                                <td>SPACE DEGREE FOR WOMEN </td>
                                                <td>12345678</td>
                                                <td>9494435977</td>
                                                <td>SRI SATYA SAI </td>


                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>

                                                        <div class="dropdown-menu">
                                                            <a href="viewcollege.php?id=75"
                                                                class="dropdown-item">view</a>
                                                            <a href="updatecollege.php?id=75&page=manage"
                                                                class="dropdown-item">update</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/college_manage.php?id=75&delete=delete">delete</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/college_manage.php?id=75&block=block">block</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/college_manage.php?id=75&unblock=unblock">unblock</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>55</td>
                                                <td>TRCLG_76</td>
                                                <td>Vellore institute of Technology AP</td>
                                                <td>Viswanathan</td>
                                                <td>superadmin@gmail.com</td>
                                                <td>Kittu@212025</td>
                                                <td>08632370444</td>
                                                <td>Guntur </td>


                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>

                                                        <div class="dropdown-menu">
                                                            <a href="viewcollege.php?id=76"
                                                                class="dropdown-item">view</a>
                                                            <a href="updatecollege.php?id=76&page=manage"
                                                                class="dropdown-item">update</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/college_manage.php?id=76&delete=delete">delete</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/college_manage.php?id=76&block=block">block</a>
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/college_manage.php?id=76&unblock=unblock">unblock</a>
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


                <div class="modal fade" id="Delete">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to Delete a college?</p>
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

                                <p> Are you sure you want to Block a college?</p>
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

                                <p> Are you sure you want to Unblock a college?</p>
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