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
						<span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Manage allocate Students </span>
					</div>

					<div class="justify-content-center mt-2">
						<ol class="breadcrumb">
							<li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Courses</a></li>
							<li class="breadcrumb-item ">allocate</li>
							<li class="breadcrumb-item ">Students </li>
							<li class="breadcrumb-item ">Manage </li>
						</ol>
					</div>

				</div>

				<form method="post">
					<div class="row row-sm">
						<div class="form-group col-md-3">
							<b> <label>College name</label> </b>
							<select name="college_name" class="form-control form-select" data-bs-placeholder="Select Filter">
								<option value="All" selected="selected">All</option>
								<option value="Aditya degree college">Aditya degree college</option>
								<option value="Aditya Degree College AWDCKKD">Aditya Degree College AWDCKKD</option>
								<option value="Aditya degree College for women">Aditya degree College for women</option>
								<option value="Aditya Degree College for women Rajahmundry">Aditya Degree College for women Rajahmundry</option>
								<option value="BRR & GKR CHAMBERS DEGREE & PG COLLEGE ">BRR & GKR CHAMBERS DEGREE & PG COLLEGE </option>
								<option value="DONBOSCO DEGREE COLLEGE">DONBOSCO DEGREE COLLEGE</option>
								<option value="DR.SARVEPALLI RADHA KRISHNA DEGREE COLLEGE">DR.SARVEPALLI RADHA KRISHNA DEGREE COLLEGE</option>
								<option value="Gayathri Degree College">Gayathri Degree College</option>
								<option value="GNR Degree College">GNR Degree College</option>
								<option value="MCV DEGREE COLLEGE">MCV DEGREE COLLEGE</option>
								<option value="S V S Degree College">S V S Degree College</option>
								<option value="S. V. K. P. & Dr. K. S. Raju Arts and Science College (A)">S. V. K. P. & Dr. K. S. Raju Arts and Science College (A)</option>
								<option value="S.V.G.M. GOVERNMENT DEGREE COLLEGE">S.V.G.M. GOVERNMENT DEGREE COLLEGE</option>
								<option value="Sir CR Reddy Degree College For Womens">Sir CR Reddy Degree College For Womens</option>
								<option value="SNR Degree College">SNR Degree College</option>
								<option value="SRI ABN & PRR COLLEGE OF SCIENCE">SRI ABN & PRR COLLEGE OF SCIENCE</option>
								<option value="Sri Aditya degree college">Sri Aditya degree college</option>
								<option value=" Sri Aditya degree college"> Sri Aditya degree college</option>
								<option value="Sri Hari Degree College">Sri Hari Degree College</option>
								<option value="SRI VIVEKANANDA DEGREE COLLEGE">SRI VIVEKANANDA DEGREE COLLEGE</option>
								<option value=" Sri Y N Degree College"> Sri Y N Degree College</option>
								<option value="Sri Y N Degree College">Sri Y N Degree College</option>
								<option value="Sri Y.N Degree College ">Sri Y.N Degree College </option>
								<option value="Sri yn college ">Sri yn college </option>
								<option value="Sri.y.n college ">Sri.y.n college </option>
								<option value="SV Degree College">SV Degree College</option>
								<option value="Svr  degree college">Svr degree college</option>
								<option value="Svr degree clg">Svr degree clg</option>
								<option value="SVR DEGREE COLLEGE">SVR DEGREE COLLEGE</option>
								<option value="testing">testing</option>
								<option value="universe">universe</option>
								<option value=""></option>
								<option value="Gayatri degree college, payakaraopeta ">Gayatri degree college, payakaraopeta </option>
								<option value=" BGBS Womens Degree College"> BGBS Womens Degree College</option>
								<option value="Andhra Pradesh residential degree College">Andhra Pradesh residential degree College</option>
								<option value="Gayatri Degree & PG College">Gayatri Degree & PG College</option>
								<option value="SRI VASAVI DEGREE COLLEGE">SRI VASAVI DEGREE COLLEGE</option>
								<option value="Sri Y.N College ">Sri Y.N College </option>
								<option value="Sri venkateshwara University  ">Sri venkateshwara University </option>
								<option value="Demo Degree College">Demo Degree College</option>
								<option value=" Sri yn college "> Sri yn college </option>
								<option value="SRI VENKATESHWARA DEGREE COLLEGE ">SRI VENKATESHWARA DEGREE COLLEGE </option>
								<option value="CNR Arts & Science College- Annamayya">CNR Arts & Science College- Annamayya</option>
								<option value="MVN JS & RVR College of Arts and Science">MVN JS & RVR College of Arts and Science</option>
								<option value="Jyothirmayee women�s degree college">Jyothirmayee women�s degree college</option>
								<option value="Sree Devi degree college ">Sree Devi degree college </option>
								<option value="Sri Balaji Vidya Vihar degree college">Sri Balaji Vidya Vihar degree college</option>
								<option value="SPVM Degree College Gorantla">SPVM Degree College Gorantla</option>
								<option value="S.p.v.m degree college ">S.p.v.m degree college </option>
								<option value="Sapthagiri Degree college Hindupur">Sapthagiri Degree college Hindupur</option>
								<option value="SMJL DEGREE COLLEGE, KADIRI-515 591">SMJL DEGREE COLLEGE, KADIRI-515 591</option>
								<option value="SVV Degree College, Penumuru ">SVV Degree College, Penumuru </option>
								<option value="Sri Y N College ">Sri Y N College </option>
								<option value="SAI DEGREE COLLEGE">SAI DEGREE COLLEGE</option>
								<option value="Jyothirmayee women’s degree college ">Jyothirmayee women’s degree college </option>
							</select>
						</div>
						<div class="form-group col-md-3">
							<b> <label>Course name</label> </b>
							<select name="course" class="form-control form-select" data-bs-placeholder="Select Filter">
								<option value="All" selected="selected">All</option>
								<option value="Voice process">Voice process</option>
								<option value="Tally">Tally</option>
								<option value="Medical Coding">Medical Coding</option>
								<option value="Web Technologies">Web Technologies</option>
								<option value="Digital Marketing ">Digital Marketing </option>
								<option value="Human resource management ">Human resource management </option>
								<option value="Python">Python</option>
								<option value="Cloud computing ">Cloud computing </option>
								<option value="Java">Java</option>
								<option value="US Taxation">US Taxation</option>
								<option value="Tally + GST">Tally + GST</option>
								<option value="My SQL ">My SQL </option>
								<option value="Power BI & Tableau">Power BI & Tableau</option>
								<option value="AI & ML">AI & ML</option>
								<option value="GST">GST</option>
								<option value="Medical Coding & Transcription">Medical Coding & Transcription</option>
								<option value="Medical Transcription">Medical Transcription</option>
								<option value="Income Tax">Income Tax</option>
								<option value="Java Script">Java Script</option>
							</select>
						</div>
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
												<th class="border-bottom-0">S.no</th>
												<th class="border-bottom-0">Date of adding</th>

												<th class="border-bottom-0">allocate ID</th>
												<th class="border-bottom-0">Students ID</th>
												<th class="border-bottom-0">College name</th>
												<th class="border-bottom-0">Student Name</th>
												<th class="border-bottom-0">Course name</th>
												<th class="border-bottom-0">Internship type</th>
												<!--	<th class="border-bottom-0">Re-allocate</th> -->



											</tr>
										</thead>
										<tbody>

											<tr>
												<td>1</td>
												<td>0000-00-00 00:00:00</td>
												<td>ALL_0898</td>

												<td>STU_0898</td>
												<td>S V S Degree College</td>
												<td>Kumbha koteswari</td>
												<td>Human resource management </td>
												<td>long_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=898&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>2</td>
												<td>2023-08-03 13:03:30</td>
												<td>ALL_02687</td>

												<td>STU_02687</td>
												<td>SV Degree College</td>
												<td>V.Rajani</td>
												<td>Web Technologies</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=2687&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>3</td>
												<td>2023-08-07 15:25:35</td>
												<td>ALL_02909</td>

												<td>STU_02909</td>
												<td>GNR Degree College</td>
												<td>C. Durga </td>
												<td>JAVA</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=2909&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>4</td>
												<td>2023-08-07 18:11:10</td>
												<td>ALL_02914</td>

												<td>STU_02914</td>
												<td>S V S Degree College</td>
												<td>PAPPALA BABURAO </td>
												<td>JAVA</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=2914&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>5</td>
												<td>2023-08-08 13:07:21</td>
												<td>ALL_02934</td>

												<td>STU_02934</td>
												<td>S V S Degree College</td>
												<td>Chellapu.n.d.prasad</td>
												<td>Medical Transcription</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=2934&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>6</td>
												<td>2023-08-08 17:28:34</td>
												<td>ALL_02938</td>

												<td>STU_02938</td>
												<td>SV Degree College</td>
												<td>Chandaka siva</td>
												<td>Tally</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=2938&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>7</td>
												<td>2023-08-08 17:28:44</td>
												<td>ALL_02940</td>

												<td>STU_02940</td>
												<td>Gayathri Degree College</td>
												<td>Yalamanchili naveen</td>
												<td>Medical Coding</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=2940&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>8</td>
												<td>2023-08-09 15:31:17</td>
												<td>ALL_02986</td>

												<td>STU_02986</td>
												<td>S V S Degree College</td>
												<td>Velaga.varalaxmi </td>
												<td>US Taxation</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=2986&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>9</td>
												<td>2023-08-09 15:31:28</td>
												<td>ALL_02987</td>

												<td>STU_02987</td>
												<td>S V S Degree College</td>
												<td>Yajjala rathnam</td>
												<td>US Taxation</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=2987&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>10</td>
												<td>2023-08-09 15:31:41</td>
												<td>ALL_02990</td>

												<td>STU_02990</td>
												<td>S V S Degree College</td>
												<td>koda malleswari </td>
												<td>US Taxation</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=2990&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>11</td>
												<td>2023-08-09 15:31:51</td>
												<td>ALL_02992</td>

												<td>STU_02992</td>
												<td>S V S Degree College</td>
												<td>Molli varaha sai chandana</td>
												<td>US Taxation</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=2992&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>12</td>
												<td>2023-08-09 15:32:18</td>
												<td>ALL_02995</td>

												<td>STU_02995</td>
												<td>S V S Degree College</td>
												<td>daddisettiumalaxmi</td>
												<td>US Taxation</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=2995&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>13</td>
												<td>2023-08-09 15:32:26</td>
												<td>ALL_02997</td>

												<td>STU_02997</td>
												<td>S V S Degree College</td>
												<td>Velaga.varalaxmi </td>
												<td>Income Tax</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=2997&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>14</td>
												<td>2023-08-09 16:51:47</td>
												<td>ALL_03007</td>

												<td>STU_03007</td>
												<td>S V S Degree College</td>
												<td>Sadireddy bhanurekha</td>
												<td>US Taxation</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=3007&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>15</td>
												<td>2023-08-09 16:51:51</td>
												<td>ALL_03008</td>

												<td>STU_03008</td>
												<td>S V S Degree College</td>
												<td>Mylapalli uma</td>
												<td>US Taxation</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=3008&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>16</td>
												<td>2023-08-10 10:05:07</td>
												<td>ALL_03021</td>

												<td>STU_03021</td>
												<td>S V S Degree College</td>
												<td>Karri meghana </td>
												<td>JAVA</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=3021&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>17</td>
												<td>2023-08-16 17:29:01</td>
												<td>ALL_03056</td>

												<td>STU_03056</td>
												<td>SV Degree College</td>
												<td>KUDUM VENNELA </td>
												<td>JAVA</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=3056&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>18</td>
												<td>2023-09-25 11:14:35</td>
												<td>ALL_03190</td>

												<td>STU_03190</td>
												<td>CNR Arts & Science College- Annamayya</td>
												<td>M Reddi Ganesh </td>
												<td>Python</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=3190&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>19</td>
												<td>2023-09-29 16:11:44</td>
												<td>ALL_03448</td>

												<td>STU_03448</td>
												<td>SRI VENKATESHWARA DEGREE COLLEGE </td>
												<td>Sarmas Hussain </td>
												<td>Digital Marketing </td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=3448&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>20</td>
												<td>2023-09-29 18:10:41</td>
												<td>ALL_03472</td>

												<td>STU_03472</td>
												<td> BGBS Womens Degree College</td>
												<td>Dulla. Lavanya</td>
												<td>US Taxation</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=3472&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>21</td>
												<td>2023-09-30 11:06:09</td>
												<td>ALL_03484</td>

												<td>STU_03484</td>
												<td>SV Degree College</td>
												<td>Kavya</td>
												<td>Web Technologies</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=3484&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>22</td>
												<td>2023-09-30 11:07:46</td>
												<td>ALL_03500</td>

												<td>STU_03500</td>
												<td>SV Degree College</td>
												<td>Sai jyothi</td>
												<td>Web Technologies</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=3500&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>23</td>
												<td>2023-09-30 12:15:33</td>
												<td>ALL_03513</td>

												<td>STU_03513</td>
												<td>SV Degree College</td>
												<td>Sai jyothi</td>
												<td>JAVA</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=3513&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>24</td>
												<td>2023-10-04 18:54:12</td>
												<td>ALL_03559</td>

												<td>STU_03559</td>
												<td>SNR Degree College</td>
												<td>Vedangi Jyothi </td>
												<td>JAVA</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=3559&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>25</td>
												<td>2023-10-06 16:12:52</td>
												<td>ALL_03653</td>

												<td>STU_03653</td>
												<td>Sri Y N Degree College</td>
												<td>Divi Siva Mahesh</td>
												<td>Income Tax</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=3653&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>26</td>
												<td>2023-10-19 11:27:24</td>
												<td>ALL_03964</td>

												<td>STU_03964</td>
												<td>SV Degree College</td>
												<td>Venu</td>
												<td>Web Technologies</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=3964&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>27</td>
												<td>2023-10-19 11:27:30</td>
												<td>ALL_03966</td>

												<td>STU_03966</td>
												<td>SAI DEGREE COLLEGE</td>
												<td>MITIA GAYATHRI</td>
												<td>Web Technologies</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=3966&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>28</td>
												<td>2023-10-20 16:29:21</td>
												<td>ALL_03978</td>

												<td>STU_03978</td>
												<td>S V S Degree College</td>
												<td>Lalitha marisetti</td>
												<td>AI & ML</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=3978&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>29</td>
												<td>2023-10-20 16:29:28</td>
												<td>ALL_03979</td>

												<td>STU_03979</td>
												<td>S V S Degree College</td>
												<td>Lalitha marisetti</td>
												<td>My SQL </td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=3979&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>30</td>
												<td>2023-10-20 16:29:24</td>
												<td>ALL_03980</td>

												<td>STU_03980</td>
												<td>S V S Degree College</td>
												<td>Lalitha marisetti</td>
												<td>JAVA</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=3980&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>31</td>
												<td>2023-10-31 13:01:15</td>
												<td>ALL_04080</td>

												<td>STU_04080</td>
												<td>Sri Y N Degree College</td>
												<td>Konatham Ayyanna Naidu </td>
												<td>My SQL </td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4080&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>32</td>
												<td>2023-11-01 11:25:37</td>
												<td>ALL_04104</td>

												<td>STU_04104</td>
												<td>Sri Y N Degree College</td>
												<td>P Praveen kumar</td>
												<td>Income Tax</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4104&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>33</td>
												<td>2023-11-03 15:37:18</td>
												<td>ALL_04115</td>

												<td>STU_04115</td>
												<td>Gayathri Degree College</td>
												<td>kuvula madhuri</td>
												<td>Medical Coding & Transcription</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4115&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>34</td>
												<td>2023-11-07 13:44:11</td>
												<td>ALL_04129</td>

												<td>STU_04129</td>
												<td>Sri Y N Degree College</td>
												<td>Potturi Kumara Arun Teja Varma</td>
												<td>AI & ML</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4129&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>35</td>
												<td>2023-12-02 13:10:05</td>
												<td>ALL_04156</td>

												<td>STU_04156</td>
												<td>SRI VIVEKANANDA DEGREE COLLEGE</td>
												<td>AKULA ARCHITHA</td>
												<td>Power BI & Tableau</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4156&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>36</td>
												<td>2023-12-02 13:10:11</td>
												<td>ALL_04158</td>

												<td>STU_04158</td>
												<td>SRI VIVEKANANDA DEGREE COLLEGE</td>
												<td>Pasupuleti Kedar Ganesh</td>
												<td>Python</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4158&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>37</td>
												<td>2023-12-02 13:11:10</td>
												<td>ALL_04176</td>

												<td>STU_04176</td>
												<td>Sri Y N Degree College</td>
												<td>GUTTULA.Bhaskara Phani Kumar</td>
												<td>Digital Marketing </td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4176&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>38</td>
												<td>2023-12-06 11:08:26</td>
												<td>ALL_04181</td>

												<td>STU_04181</td>
												<td>Jyothirmayee women’s degree college </td>
												<td>Thriveni </td>
												<td>Java Script</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4181&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>39</td>
												<td>2023-12-11 16:03:19</td>
												<td>ALL_04190</td>

												<td>STU_04190</td>
												<td>Jyothirmayee women’s degree college </td>
												<td>Kune kanthi sree</td>
												<td>Digital Marketing </td>
												<td>long_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4190&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>40</td>
												<td>2023-12-14 13:01:49</td>
												<td>ALL_04191</td>

												<td>STU_04191</td>
												<td>Demo Degree College</td>
												<td>demo2025</td>
												<td>Java Script</td>
												<td>long_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4191&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>41</td>
												<td>2023-12-18 09:56:22</td>
												<td>ALL_04192</td>

												<td>STU_04192</td>
												<td>SRI VIVEKANANDA DEGREE COLLEGE</td>
												<td>Neeluri Ganesh</td>
												<td>Digital Marketing </td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4192&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>42</td>
												<td>2023-12-20 11:00:21</td>
												<td>ALL_04193</td>

												<td>STU_04193</td>
												<td>Sri Balaji Vidya Vihar degree college</td>
												<td>Thirumala </td>
												<td>JAVA</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4193&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>43</td>
												<td>2023-12-28 18:29:25</td>
												<td>ALL_04194</td>

												<td>STU_04194</td>
												<td>Sri Balaji Vidya Vihar degree college</td>
												<td>Shaik.Arshiya</td>
												<td>Java Script</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4194&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>44</td>
												<td>2023-12-28 18:29:32</td>
												<td>ALL_04196</td>

												<td>STU_04196</td>
												<td>SRI VIVEKANANDA DEGREE COLLEGE</td>
												<td>G.Gowthami</td>
												<td>Digital Marketing </td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4196&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>45</td>
												<td>2024-01-04 15:15:48</td>
												<td>ALL_04198</td>

												<td>STU_04198</td>
												<td>Sri Y N Degree College</td>
												<td>Gadi vijay anand </td>
												<td>Java Script</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4198&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>46</td>
												<td>2024-01-09 22:59:37</td>
												<td>ALL_04204</td>

												<td>STU_04204</td>
												<td>SMJL DEGREE COLLEGE, KADIRI-515 591</td>
												<td>G GANESH </td>
												<td>Java Script</td>
												<td>long_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4204&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>47</td>
												<td>2024-01-12 15:50:53</td>
												<td>ALL_04213</td>

												<td>STU_04213</td>
												<td>SMJL DEGREE COLLEGE, KADIRI-515 591</td>
												<td>G GANESH </td>
												<td>Tally + GST</td>
												<td>long_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4213&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>48</td>
												<td>2024-01-17 19:08:29</td>
												<td>ALL_04226</td>

												<td>STU_04226</td>
												<td>SVR DEGREE COLLEGE</td>
												<td>Meghana.Medam</td>
												<td>Cloud computing </td>
												<td>long_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4226&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>49</td>
												<td>2024-01-19 17:31:25</td>
												<td>ALL_04227</td>

												<td>STU_04227</td>
												<td>SMJL DEGREE COLLEGE, KADIRI-515 591</td>
												<td>𝑆𝑢𝑟𝑒𝑠𝒉 𝑛𝑎𝑖𝑘</td>
												<td>Python</td>
												<td>long_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4227&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>50</td>
												<td>2024-01-22 16:18:21</td>
												<td>ALL_04228</td>

												<td>STU_04228</td>
												<td>SMJL DEGREE COLLEGE, KADIRI-515 591</td>
												<td>I.Kousalya</td>
												<td>Python</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4228&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>51</td>
												<td>2024-01-27 12:59:49</td>
												<td>ALL_04229</td>

												<td>STU_04229</td>
												<td>GNR Degree College</td>
												<td>Demo2024</td>
												<td>Cloud computing </td>
												<td>long_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4229&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>52</td>
												<td>2024-01-27 17:18:40</td>
												<td>ALL_04230</td>

												<td>STU_04230</td>
												<td>SMJL DEGREE COLLEGE, KADIRI-515 591</td>
												<td>Shaik Safreen </td>
												<td>Python</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4230&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>53</td>
												<td>2024-01-27 18:54:54</td>
												<td>ALL_04232</td>

												<td>STU_04232</td>
												<td>SMJL DEGREE COLLEGE, KADIRI-515 591</td>
												<td>Shaik samrin</td>
												<td>Python</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4232&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>54</td>
												<td>2024-01-27 18:54:58</td>
												<td>ALL_04233</td>

												<td>STU_04233</td>
												<td>SMJL DEGREE COLLEGE, KADIRI-515 591</td>
												<td>Ayesha</td>
												<td>Python</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4233&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>55</td>
												<td>2024-01-29 10:24:04</td>
												<td>ALL_04234</td>

												<td>STU_04234</td>
												<td>SMJL DEGREE COLLEGE, KADIRI-515 591</td>
												<td>Manasa</td>
												<td>Python</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4234&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>56</td>
												<td>2024-01-29 10:24:07</td>
												<td>ALL_04235</td>

												<td>STU_04235</td>
												<td>SMJL DEGREE COLLEGE, KADIRI-515 591</td>
												<td>Sabhavathyamuna bai</td>
												<td>Python</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4235&trid=0" class="btn btn-success">Re-allocate</a></td> -->

											</tr>


											<tr>
												<td>57</td>
												<td>2024-01-29 10:24:10</td>
												<td>ALL_04236</td>

												<td>STU_04236</td>
												<td>SMJL DEGREE COLLEGE, KADIRI-515 591</td>
												<td>Shajeeda</td>
												<td>Python</td>
												<td>short_term</td>


												<!--	<td><a href="coursestudentallocation.php?crid=4236&trid=0" class="btn btn-success">Re-allocate</a></td> -->

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

								<p> Are you sure you want to Delete a allocation?</p>
							</div>
							<div class="modal-footer">
								<button class="btn ripple btn-success" type="button">Delete</button>
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

	<?php include("./scripts.php"); ?>

</body>

<!-- Mirrored from laravel8.spruko.com/nowa/table-data by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:32:58 GMT -->

</html>