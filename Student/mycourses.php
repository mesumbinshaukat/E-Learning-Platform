<?php
if (!isset($_COOKIE['student_username']) && !isset($_COOKIE['student_password'])) {
	header('location: ../student_login.php');
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

	<!-- Title -->
	<title>TriaRight: The New Era of Learning</title>

	<!-- FAVICON -->
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

</head>

<body class="ltr main-body app sidebar-mini">
	<!-- Switcher -->
	<!--<div class="switcher-wrapper">-->
	<!--		<div class="demo_changer">-->
	<!--			<div class="form_holder sidebar-right1">-->
	<!--				<div class="row">-->
	<!--					<div class="predefined_styles">-->

	<!--						<div class="swichermainleft text-center">-->
	<!--							<h4>LTR AND RTL VERSIONS</h4>-->
	<!--							<div class="skin-body">-->
	<!--								<div class="switch_section">-->
	<!--									<div class="switch-toggle d-flex mt-2">-->
	<!--										<span class="me-auto">LTR</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch25" id="myonoffswitch54" class="onoffswitch2-checkbox" checked>-->
	<!--											<label for="myonoffswitch54" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--									<div class="switch-toggle d-flex mt-2">-->
	<!--										<span class="me-auto">RTL</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch25" id="myonoffswitch55" class="onoffswitch2-checkbox">-->
	<!--											<label for="myonoffswitch55" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--						<div class="swichermainleft">-->
	<!--							<h4>Navigation Style</h4>-->
	<!--							<div class="skin-body">-->
	<!--								<div class="switch_section">-->
	<!--									<div class="switch-toggle d-flex">-->
	<!--										<span class="me-auto">Vertical Menu</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch34" class="onoffswitch2-checkbox" checked>-->
	<!--											<label for="myonoffswitch34" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--									<div class="switch-toggle d-flex mt-2">-->
	<!--										<span class="me-auto">Horizantal Click Menu</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch35" class="onoffswitch2-checkbox">-->
	<!--											<label for="myonoffswitch35" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--									<div class="switch-toggle d-flex mt-2">-->
	<!--										<span class="me-auto">Horizantal Hover Menu</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch111" class="onoffswitch2-checkbox">-->
	<!--											<label for="myonoffswitch111" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--						<div class="swichermainleft">-->
	<!--							<h4>Light Theme Style</h4>-->
	<!--							<div class="skin-body">-->
	<!--								<div class="switch_section">-->
	<!--									<div class="switch-toggle d-flex">-->
	<!--										<span class="me-auto">Light Theme</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox">-->
	<!--											<label for="myonoffswitch1" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--									<div class="switch-toggle d-flex">-->
	<!--										<span class="me-auto">Light Primary</span>-->
	<!--										<div class="">-->
	<!--											<input class="wd-25 ht-25 input-color-picker color-primary-light" value="#38cab3" id="colorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"  data-id7="transparentcolor"  name="lightPrimary">-->
	<!--										</div>-->
	<!--									</div>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--						<div class="swichermainleft">-->
	<!--							<h4>Dark Theme Style</h4>-->
	<!--							<div class="skin-body">-->
	<!--								<div class="switch_section">-->
	<!--									<div class="switch-toggle d-flex mt-2">-->
	<!--										<span class="me-auto">Dark Theme</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">-->
	<!--											<label for="myonoffswitch2" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--									<div class="switch-toggle d-flex mt-2">-->
	<!--										<span class="me-auto">Dark Primary</span>-->
	<!--										<div class="">-->
	<!--											<input class="wd-25 ht-25 input-dark-color-picker color-primary-dark" value="#38cab3" id="darkPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary"  data-id8="transparentcolor" name="darkPrimary">-->
	<!--										</div>-->
	<!--									</div>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--						<div class="swichermainleft">-->
	<!--							<h4>Transparent Style</h4>-->
	<!--							<div class="skin-body">-->
	<!--								<div class="switch_section">-->
	<!--									<div class="switch-toggle d-flex mt-2 mb-3">-->
	<!--										<span class="me-auto">Transparent Theme</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitchTransparent" class="onoffswitch2-checkbox" >-->
	<!--											<label for="myonoffswitchTransparent" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--									<div class="switch-toggle d-flex">-->
	<!--										<span class="me-auto">Transparent Primary</span>-->
	<!--										<div class="">-->
	<!--											<input class="wd-30 ht-30 input-transparent-color-picker color-primary-transparent" value="#38cab3" id="transparentPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary"  data-id9="transparentcolor" name="tranparentPrimary">-->
	<!--										</div>-->
	<!--									</div>-->
	<!--									<div class="switch-toggle d-flex mt-2">-->
	<!--										<span class="me-auto">Transparent Background</span>-->
	<!--										<div class="">-->
	<!--											<input class="wd-30 ht-30 input-transparent-color-picker color-bg-transparent" value="#38cab3" id="transparentBgColorID" type="color" data-id5="body" data-id6="theme"  data-id9="transparentcolor" name="transparentBackground">-->
	<!--										</div>-->
	<!--									</div>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--						<div class="swichermainleft">-->
	<!--							<h4>Transparent Bg-Image Style</h4>-->
	<!--							<div class="skin-body">-->
	<!--								<div class="switch_section">-->
	<!--									<div class="switch-toggle d-flex">-->
	<!--										<span class="me-auto">BG-Image Primary</span>-->
	<!--										<div class="">-->
	<!--											<input class="wd-30 ht-30 input-transparent-color-picker color-bgImg-transparent" value="#38cab3" id="transparentBgImgPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary"  data-id9="transparentcolor" name="tranparentPrimary">-->
	<!--										</div>-->
	<!--									</div>-->
	<!--									<div class="switch-toggle">-->
	<!--										<a class="bg-img1 bg-img" href="javascript:void(0);"><img src="assets/img/media/bg-img1.jpg" id="bgimage1" alt="switch-img"></a>-->
	<!--										<a class="bg-img2 bg-img" href="javascript:void(0);"><img src="assets/img/media/bg-img2.jpg"  id="bgimage2" alt="switch-img"></a>-->
	<!--										<a class="bg-img3 bg-img" href="javascript:void(0);"><img src="assets/img/media/bg-img3.jpg"  id="bgimage3" alt="switch-img"></a>-->
	<!--										<a class="bg-img4 bg-img" href="javascript:void(0);"><img src="assets/img/media/bg-img4.jpg"  id="bgimage4" alt="switch-img"></a>-->
	<!--									</div>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--						<div class="swichermainleft leftmenu-styles">-->
	<!--							<h4>Leftmenu Styles</h4>-->
	<!--							<div class="skin-body">-->
	<!--								<div class="switch_section">-->
	<!--									<div class="switch-toggle d-flex">-->
	<!--										<span class="me-auto">Light Menu</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch3" class="onoffswitch2-checkbox"  checked>-->
	<!--											<label for="myonoffswitch3" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--									<div class="switch-toggle d-flex mt-2">-->
	<!--										<span class="me-auto">Color Menu</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch4" class="onoffswitch2-checkbox">-->
	<!--											<label for="myonoffswitch4" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--									<div class="switch-toggle d-flex mt-2">-->
	<!--										<span class="me-auto">Dark Menu</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch5" class="onoffswitch2-checkbox">-->
	<!--											<label for="myonoffswitch5" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--									<div class="switch-toggle d-flex mt-2">-->
	<!--										<span class="me-auto">Gradient Menu</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch25" class="onoffswitch2-checkbox">-->
	<!--											<label for="myonoffswitch25" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--						<div class="swichermainleft header-styles">-->
	<!--							<h4>Header Styles</h4>-->
	<!--							<div class="skin-body">-->
	<!--								<div class="switch_section">-->
	<!--									<div class="switch-toggle d-flex">-->
	<!--										<span class="me-auto">Light Header</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch6" class="onoffswitch2-checkbox"  checked>-->
	<!--											<label for="myonoffswitch6" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--									<div class="switch-toggle d-flex mt-2">-->
	<!--										<span class="me-auto">Color Header</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch7" class="onoffswitch2-checkbox">-->
	<!--											<label for="myonoffswitch7" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--									<div class="switch-toggle d-flex mt-2">-->
	<!--										<span class="me-auto">Dark Header</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch8" class="onoffswitch2-checkbox">-->
	<!--											<label for="myonoffswitch8" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--									<div class="switch-toggle d-flex mt-2">-->
	<!--										<span class="me-auto">Gradient Header</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch26" class="onoffswitch2-checkbox">-->
	<!--											<label for="myonoffswitch26" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--						<div class="swichermainleft">-->
	<!--							<h4>Layout Width Styles</h4>-->
	<!--							<div class="skin-body">-->
	<!--								<div class="switch_section">-->
	<!--									<div class="switch-toggle d-flex">-->
	<!--										<span class="me-auto">Full Width</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4" id="myonoffswitch9" class="onoffswitch2-checkbox" checked>-->
	<!--											<label for="myonoffswitch9" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--									<div class="switch-toggle d-flex mt-2">-->
	<!--										<span class="me-auto">Boxed</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4" id="myonoffswitch10" class="onoffswitch2-checkbox">-->
	<!--											<label for="myonoffswitch10" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--						<div class="swichermainleft">-->
	<!--							<h4>Layout Positions</h4>-->
	<!--							<div class="skin-body">-->
	<!--								<div class="switch_section">-->
	<!--									<div class="switch-toggle d-flex">-->
	<!--										<span class="me-auto">Fixed</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5" id="myonoffswitch11" class="onoffswitch2-checkbox" checked>-->
	<!--											<label for="myonoffswitch11" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--									<div class="switch-toggle d-flex mt-2">-->
	<!--										<span class="me-auto">Scrollable</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5" id="myonoffswitch12" class="onoffswitch2-checkbox">-->
	<!--											<label for="myonoffswitch12" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--						<div class="swichermainleft vertical-switcher">-->
	<!--							<h4>Sidemenu layout Styles</h4>-->
	<!--							<div class="skin-body">-->
	<!--								<div class="switch_section">-->
	<!--									<div class="switch-toggle d-flex">-->
	<!--										<span class="me-auto">Default Menu</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>-->
	<!--											<label for="myonoffswitch13" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--									<div class="switch-toggle d-flex mt-2">-->
	<!--										<span class="me-auto">Closed Menu</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch30" class="onoffswitch2-checkbox default-menu">-->
	<!--											<label for="myonoffswitch30" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--									<div class="switch-toggle d-flex mt-2">-->
	<!--										<span class="me-auto">Icon with Text</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch14" class="onoffswitch2-checkbox">-->
	<!--											<label for="myonoffswitch14" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--									<div class="switch-toggle d-flex mt-2">-->
	<!--										<span class="me-auto">Icon Overlay</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch15" class="onoffswitch2-checkbox">-->
	<!--											<label for="myonoffswitch15" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--									<div class="switch-toggle d-flex mt-2">-->
	<!--										<span class="me-auto">Hover Submenu</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch32" class="onoffswitch2-checkbox">-->
	<!--											<label for="myonoffswitch32" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--									<div class="switch-toggle d-flex mt-2">-->
	<!--										<span class="me-auto">Hover Submenu style 1</span>-->
	<!--										<p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch33" class="onoffswitch2-checkbox">-->
	<!--											<label for="myonoffswitch33" class="onoffswitch2-label"></label>-->
	<!--										</p>-->
	<!--									</div>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--						<div class="swichermainleft">-->
	<!--                               <h4>Reset All Styles</h4>-->
	<!--                               <div class="skin-body">-->
	<!--                                   <div class="switch_section my-4">-->
	<!--                                       <button class="btn btn-danger btn-block resetCustomStyles" type="button">Reset All-->
	<!--                                       </button>-->
	<!--                                   </div>-->
	<!--                               </div>-->
	<!--                           </div>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!-- End Switcher -->

	<!-- Loader -->
	<div id="global-loader">
		<img src="assets/img/preloader.svg" class="loader-img" alt="Loader">
	</div>
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
				<!-- /main-header -->



				<!-- main-sidebar -->
				<div class="sticky">
					<aside class="app-sidebar">
						<div class="main-sidebar-header active">
							<a class="header-logo active" href="index.php">
								<img src="assets/img/logowhite.png" class="main-logo  desktop-logo" alt="logo">
								<img src="assets/img/logoblack.png" class="main-logo  desktop-dark" alt="logo">
								<img src="assets/img/icon.png" class="main-logo  mobile-logo" alt="logo">
								<img src="assets/img/icon.png" class="main-logo  mobile-dark" alt="logo">
							</a>
						</div>
						<div class="main-sidemenu">
							<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
									<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
								</svg></div>
							<ul class="side-menu">

								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="dashboard.php"><i class="si si-event" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp <span class="side-menu__label">Dashboard</span></a>

								</li>


								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="si si-book-open" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp <span class="side-menu__label">Courses</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Courses</a></li>
										<li><a class="slide-item" href="courseregister.php">List</a></li>
										<li><a class="slide-item" href="courseregistration.php">Registrations</a></li>
										<li><a class="slide-item" href="coursetransactions.php">Transactactions</a></li>
										<li><a class="slide-item" href="coursepayments.php">Payments</a></li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-feather" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp <span class="side-menu__label">Internships</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Internships</a></li>
										<li><a class="slide-item" href="internshipregister.php">List</a></li>
										<li><a class="slide-item" href="intershipregistration.php">Registrations</a></li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-file-text" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp <span class="side-menu__label">Placements</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Placements</a></li>
										<li><a class="slide-item" href="placementsregister.php">List</a></li>
										<li><a class="slide-item" href="placementsregistration.php">Registrations</a></li>
									</ul>
								</li>

								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-users" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp <span class="side-menu__label">My Accounts</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">My account</a></li>
										<li><a class="slide-item" href="mycourses.php">My Courses</a></li>
										<li><a class="slide-item" href="myinternships.php">My Internships</a></li>
										<li><a class="slide-item" href="myplacements.php">My Placements</a></li>
									</ul>
								</li>

								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-mail" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp <span class="side-menu__label">Chats</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Chat</a></li>
										<li><a class="slide-item" href="compose.php">Compose</a></li>
										<li><a class="slide-item" href="inbox.php">Inbox</a></li>
										<li><a class="slide-item" href="outbox.php">Outbox</a></li>
										<li><a class="slide-item" href="allmessages.php">All Details</a></li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-upload" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp <span class="side-menu__label">File Manager</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">File Manager</a></li>
										<li><a class="slide-item" href="documentation.php">Documentations</a></li>
										<li><a class="slide-item" href="certifications.php">Certifications</a></li>
									</ul>
								</li>



								<li class="slide">

									<a class="side-menu__item" data-bs-toggle="slide" href="profile.php"><i class="fe fe-user" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp <span class="side-menu__label">Profile</span></a>

								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="changepassword.php"><i class="fe fe-lock" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp <span class="side-menu__label">Change Password</span></a>

								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="../../"><i class="fe fe-log-out" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp <span class="side-menu__label">Logout</span></a>

								</li>



							</ul>
							<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
									<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
								</svg></div>
						</div>
					</aside>
				</div>
				<!-- main-sidebar -->

			</div>
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">


					<div class="breadcrumb-header justify-content-between">


						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">

								<span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">MY Courses</span>
							</ol>
						</div>

					</div>


					<div class="row row-sm">
						<div class="col-sm-12 col-lg-12">
							<div class="card primary-custom-card1">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
											<div class="prime-card1">
												<img class="img-fluid" src="assets/img/s2.jpg" alt="">
											</div>
										</div>
										<div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
											<div class="text-justified align-items-center">
												<h4 class="product-title mb-1"><b style="color: #ff6700;">Voice process</b>
												</h4>
												<p class="text-muted tx-13 mb-1">Non IT</p>
												<br>




												<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright </p>
												<p class="card-text tx-15"><span style="color: #13131a;"><b> Course Fee :</b></span>&nbsp 6400</p>
												<p class="card-text tx-15"><span style="color: #13131a;"><b>Cateogry :</b></span>&nbsp Individual</p>
												<p class="card-text tx-15"><span style="color: #13131a;"><b>Payment :</b></span>&nbsp Individual</p>
												<p class="card-text tx-16"><span style="color: #13131a;"><b> Batch Name :</b></span>&nbsp Demo Batch For Trash </p>
												<p class="card-text tx-15"><span style="color: #13131a;"><b> Class Duration :</b></span>&nbsp </p>
												<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Starting Date :</b></span>&nbsp 2023-12-02</p>
												<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Ending Date:</b></span>&nbsp 2024-01-02</p>
												<p class="card-text tx-15"><span style="color: #13131a;"><b>Session Slot :</b></span>&nbsp Evening-2 </p>
												<p class="card-text tx-15"><span style="color: #13131a;"><b>Additional Information :</b></span>&nbsp Na </p>

												<div class="row">


													<button class="btn btn-primary mb-3 shadow"><a href="schedule.php?batch_id=57"><span style="color:#ffffff;">Schedule</span></a></button> &nbsp &nbsp
													<button class="btn btn-primary mb-3 shadow"><a href="meetings.php?batch_id=57"><span style="color:#ffffff;">Meetings</span></a></button> &nbsp &nbsp
													<button class="btn btn-primary mb-3 shadow"><a href="summary.php?batch_id=57"><span style="color:#ffffff;">Summary</span></a></button> &nbsp &nbsp
													<button class="btn btn-primary mb-3 shadow"><a href="recordings.php?batch_id=57"><span style="color:#ffffff;">Recordings</span></a></button> &nbsp &nbsp
													<button class="btn btn-primary mb-3 shadow"><a href="tasks.php?batch_id=57"><span style="color:#ffffff;">Tasks</span></a></button> &nbsp &nbsp
													<button class="btn btn-primary mb-3 shadow"><a href="documentations.php?batch_id=57"><span style="color:#ffffff;">Documentations</span></a></button> &nbsp &nbsp
												</div>


											</div>
										</div>
									</div>
								</div>


								<div class="row row-sm">
									<div class="col-sm-12 col-lg-12">
										<div class="card primary-custom-card1">
											<div class="card-body">
												<div class="row">
													<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
														<div class="prime-card1">
															<img class="img-fluid" src="assets/img/s2.jpg" alt="">
														</div>
													</div>
													<div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
														<div class="text-justified align-items-center">
															<h4 class="product-title mb-1"><b style="color: #ff6700;">Voice process</b>
															</h4>
															<p class="text-muted tx-13 mb-1">Non IT</p>
															<br>




															<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright </p>
															<p class="card-text tx-15"><span style="color: #13131a;"><b> Course Fee :</b></span>&nbsp 5400</p>
															<p class="card-text tx-15"><span style="color: #13131a;"><b>Cateogry :</b></span>&nbsp Individual</p>
															<p class="card-text tx-15"><span style="color: #13131a;"><b>Payment :</b></span>&nbsp Individual</p>
															<p class="card-text tx-16"><span style="color: #13131a;"><b> Batch Name :</b></span>&nbsp Demo Batch For Trash </p>
															<p class="card-text tx-15"><span style="color: #13131a;"><b> Class Duration :</b></span>&nbsp </p>
															<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Starting Date :</b></span>&nbsp 2023-12-02</p>
															<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Ending Date:</b></span>&nbsp 2024-01-02</p>
															<p class="card-text tx-15"><span style="color: #13131a;"><b>Session Slot :</b></span>&nbsp Evening-2 </p>
															<p class="card-text tx-15"><span style="color: #13131a;"><b>Additional Information :</b></span>&nbsp Na </p>

															<div class="row">


																<button class="btn btn-primary mb-3 shadow"><a href="schedule.php?batch_id=57"><span style="color:#ffffff;">Schedule</span></a></button> &nbsp &nbsp
																<button class="btn btn-primary mb-3 shadow"><a href="meetings.php?batch_id=57"><span style="color:#ffffff;">Meetings</span></a></button> &nbsp &nbsp
																<button class="btn btn-primary mb-3 shadow"><a href="summary.php?batch_id=57"><span style="color:#ffffff;">Summary</span></a></button> &nbsp &nbsp
																<button class="btn btn-primary mb-3 shadow"><a href="recordings.php?batch_id=57"><span style="color:#ffffff;">Recordings</span></a></button> &nbsp &nbsp
																<button class="btn btn-primary mb-3 shadow"><a href="tasks.php?batch_id=57"><span style="color:#ffffff;">Tasks</span></a></button> &nbsp &nbsp
																<button class="btn btn-primary mb-3 shadow"><a href="documentations.php?batch_id=57"><span style="color:#ffffff;">Documentations</span></a></button> &nbsp &nbsp
															</div>


														</div>
													</div>
												</div>
											</div>


											<div class="row row-sm">
												<div class="col-sm-12 col-lg-12">
													<div class="card primary-custom-card1">
														<div class="card-body">
															<div class="row">
																<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
																	<div class="prime-card1">
																		<img class="img-fluid" src="assets/img/s2.jpg" alt="">
																	</div>
																</div>
																<div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
																	<div class="text-justified align-items-center">
																		<h4 class="product-title mb-1"><b style="color: #ff6700;">Voice process</b>
																		</h4>
																		<p class="text-muted tx-13 mb-1">Non IT</p>
																		<br>




																		<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright </p>
																		<p class="card-text tx-15"><span style="color: #13131a;"><b> Course Fee :</b></span>&nbsp 6400</p>
																		<p class="card-text tx-15"><span style="color: #13131a;"><b>Cateogry :</b></span>&nbsp College</p>
																		<p class="card-text tx-15"><span style="color: #13131a;"><b>Payment :</b></span>&nbsp College</p>
																		<p class="card-text tx-16"><span style="color: #13131a;"><b> Batch Name :</b></span>&nbsp Demo Batch For Trash </p>
																		<p class="card-text tx-15"><span style="color: #13131a;"><b> Class Duration :</b></span>&nbsp </p>
																		<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Starting Date :</b></span>&nbsp 2023-12-02</p>
																		<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Ending Date:</b></span>&nbsp 2024-01-02</p>
																		<p class="card-text tx-15"><span style="color: #13131a;"><b>Session Slot :</b></span>&nbsp Evening-2 </p>
																		<p class="card-text tx-15"><span style="color: #13131a;"><b>Additional Information :</b></span>&nbsp Na </p>

																		<div class="row">


																			<button class="btn btn-primary mb-3 shadow"><a href="schedule.php?batch_id=57"><span style="color:#ffffff;">Schedule</span></a></button> &nbsp &nbsp
																			<button class="btn btn-primary mb-3 shadow"><a href="meetings.php?batch_id=57"><span style="color:#ffffff;">Meetings</span></a></button> &nbsp &nbsp
																			<button class="btn btn-primary mb-3 shadow"><a href="summary.php?batch_id=57"><span style="color:#ffffff;">Summary</span></a></button> &nbsp &nbsp
																			<button class="btn btn-primary mb-3 shadow"><a href="recordings.php?batch_id=57"><span style="color:#ffffff;">Recordings</span></a></button> &nbsp &nbsp
																			<button class="btn btn-primary mb-3 shadow"><a href="tasks.php?batch_id=57"><span style="color:#ffffff;">Tasks</span></a></button> &nbsp &nbsp
																			<button class="btn btn-primary mb-3 shadow"><a href="documentations.php?batch_id=57"><span style="color:#ffffff;">Documentations</span></a></button> &nbsp &nbsp
																		</div>


																	</div>
																</div>
															</div>
														</div>


														<div class="row row-sm">
															<div class="col-sm-12 col-lg-12">
																<div class="card primary-custom-card1">
																	<div class="card-body">
																		<div class="row">
																			<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
																				<div class="prime-card1">
																					<img class="img-fluid" src="assets/img/s2.jpg" alt="">
																				</div>
																			</div>
																			<div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
																				<div class="text-justified align-items-center">
																					<h4 class="product-title mb-1"><b style="color: #ff6700;">Voice process</b>
																					</h4>
																					<p class="text-muted tx-13 mb-1">Non IT</p>
																					<br>




																					<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright </p>
																					<p class="card-text tx-15"><span style="color: #13131a;"><b> Course Fee :</b></span>&nbsp 5400</p>
																					<p class="card-text tx-15"><span style="color: #13131a;"><b>Cateogry :</b></span>&nbsp Individual</p>
																					<p class="card-text tx-15"><span style="color: #13131a;"><b>Payment :</b></span>&nbsp Individual</p>
																					<p class="card-text tx-16"><span style="color: #13131a;"><b> Batch Name :</b></span>&nbsp Demo Batch For Trash </p>
																					<p class="card-text tx-15"><span style="color: #13131a;"><b> Class Duration :</b></span>&nbsp </p>
																					<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Starting Date :</b></span>&nbsp 2023-12-02</p>
																					<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Ending Date:</b></span>&nbsp 2024-01-02</p>
																					<p class="card-text tx-15"><span style="color: #13131a;"><b>Session Slot :</b></span>&nbsp Evening-2 </p>
																					<p class="card-text tx-15"><span style="color: #13131a;"><b>Additional Information :</b></span>&nbsp Na </p>

																					<div class="row">


																						<button class="btn btn-primary mb-3 shadow"><a href="schedule.php?batch_id=57"><span style="color:#ffffff;">Schedule</span></a></button> &nbsp &nbsp
																						<button class="btn btn-primary mb-3 shadow"><a href="meetings.php?batch_id=57"><span style="color:#ffffff;">Meetings</span></a></button> &nbsp &nbsp
																						<button class="btn btn-primary mb-3 shadow"><a href="summary.php?batch_id=57"><span style="color:#ffffff;">Summary</span></a></button> &nbsp &nbsp
																						<button class="btn btn-primary mb-3 shadow"><a href="recordings.php?batch_id=57"><span style="color:#ffffff;">Recordings</span></a></button> &nbsp &nbsp
																						<button class="btn btn-primary mb-3 shadow"><a href="tasks.php?batch_id=57"><span style="color:#ffffff;">Tasks</span></a></button> &nbsp &nbsp
																						<button class="btn btn-primary mb-3 shadow"><a href="documentations.php?batch_id=57"><span style="color:#ffffff;">Documentations</span></a></button> &nbsp &nbsp
																					</div>


																				</div>
																			</div>
																		</div>
																	</div>


																	<div class="row row-sm">
																		<div class="col-sm-12 col-lg-12">
																			<div class="card primary-custom-card1">
																				<div class="card-body">
																					<div class="row">
																						<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
																							<div class="prime-card1">
																								<img class="img-fluid" src="assets/img/s2.jpg" alt="">
																							</div>
																						</div>
																						<div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
																							<div class="text-justified align-items-center">
																								<h4 class="product-title mb-1"><b style="color: #ff6700;">Voice process</b>
																								</h4>
																								<p class="text-muted tx-13 mb-1">Non IT</p>
																								<br>




																								<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright </p>
																								<p class="card-text tx-15"><span style="color: #13131a;"><b> Course Fee :</b></span>&nbsp 5400</p>
																								<p class="card-text tx-15"><span style="color: #13131a;"><b>Cateogry :</b></span>&nbsp Individual</p>
																								<p class="card-text tx-15"><span style="color: #13131a;"><b>Payment :</b></span>&nbsp Individual</p>
																								<p class="card-text tx-16"><span style="color: #13131a;"><b> Batch Name :</b></span>&nbsp Demo Batch For Trash </p>
																								<p class="card-text tx-15"><span style="color: #13131a;"><b> Class Duration :</b></span>&nbsp </p>
																								<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Starting Date :</b></span>&nbsp 2023-12-02</p>
																								<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Ending Date:</b></span>&nbsp 2024-01-02</p>
																								<p class="card-text tx-15"><span style="color: #13131a;"><b>Session Slot :</b></span>&nbsp Evening-2 </p>
																								<p class="card-text tx-15"><span style="color: #13131a;"><b>Additional Information :</b></span>&nbsp Na </p>

																								<div class="row">


																									<button class="btn btn-primary mb-3 shadow"><a href="schedule.php?batch_id=57"><span style="color:#ffffff;">Schedule</span></a></button> &nbsp &nbsp
																									<button class="btn btn-primary mb-3 shadow"><a href="meetings.php?batch_id=57"><span style="color:#ffffff;">Meetings</span></a></button> &nbsp &nbsp
																									<button class="btn btn-primary mb-3 shadow"><a href="summary.php?batch_id=57"><span style="color:#ffffff;">Summary</span></a></button> &nbsp &nbsp
																									<button class="btn btn-primary mb-3 shadow"><a href="recordings.php?batch_id=57"><span style="color:#ffffff;">Recordings</span></a></button> &nbsp &nbsp
																									<button class="btn btn-primary mb-3 shadow"><a href="tasks.php?batch_id=57"><span style="color:#ffffff;">Tasks</span></a></button> &nbsp &nbsp
																									<button class="btn btn-primary mb-3 shadow"><a href="documentations.php?batch_id=57"><span style="color:#ffffff;">Documentations</span></a></button> &nbsp &nbsp
																								</div>


																							</div>
																						</div>
																					</div>
																				</div>


																				<div class="row row-sm">
																					<div class="col-sm-12 col-lg-12">
																						<div class="card primary-custom-card1">
																							<div class="card-body">
																								<div class="row">
																									<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
																										<div class="prime-card1">
																											<img class="img-fluid" src="assets/img/s2.jpg" alt="">
																										</div>
																									</div>
																									<div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
																										<div class="text-justified align-items-center">
																											<h4 class="product-title mb-1"><b style="color: #ff6700;">Voice process</b>
																											</h4>
																											<p class="text-muted tx-13 mb-1">Non IT</p>
																											<br>




																											<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright </p>
																											<p class="card-text tx-15"><span style="color: #13131a;"><b> Course Fee :</b></span>&nbsp 5400</p>
																											<p class="card-text tx-15"><span style="color: #13131a;"><b>Cateogry :</b></span>&nbsp Individual</p>
																											<p class="card-text tx-15"><span style="color: #13131a;"><b>Payment :</b></span>&nbsp Individual</p>
																											<p class="card-text tx-16"><span style="color: #13131a;"><b> Batch Name :</b></span>&nbsp Demo Batch For Trash </p>
																											<p class="card-text tx-15"><span style="color: #13131a;"><b> Class Duration :</b></span>&nbsp </p>
																											<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Starting Date :</b></span>&nbsp 2023-12-02</p>
																											<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Ending Date:</b></span>&nbsp 2024-01-02</p>
																											<p class="card-text tx-15"><span style="color: #13131a;"><b>Session Slot :</b></span>&nbsp Evening-2 </p>
																											<p class="card-text tx-15"><span style="color: #13131a;"><b>Additional Information :</b></span>&nbsp Na </p>

																											<div class="row">


																												<button class="btn btn-primary mb-3 shadow"><a href="schedule.php?batch_id=57"><span style="color:#ffffff;">Schedule</span></a></button> &nbsp &nbsp
																												<button class="btn btn-primary mb-3 shadow"><a href="meetings.php?batch_id=57"><span style="color:#ffffff;">Meetings</span></a></button> &nbsp &nbsp
																												<button class="btn btn-primary mb-3 shadow"><a href="summary.php?batch_id=57"><span style="color:#ffffff;">Summary</span></a></button> &nbsp &nbsp
																												<button class="btn btn-primary mb-3 shadow"><a href="recordings.php?batch_id=57"><span style="color:#ffffff;">Recordings</span></a></button> &nbsp &nbsp
																												<button class="btn btn-primary mb-3 shadow"><a href="tasks.php?batch_id=57"><span style="color:#ffffff;">Tasks</span></a></button> &nbsp &nbsp
																												<button class="btn btn-primary mb-3 shadow"><a href="documentations.php?batch_id=57"><span style="color:#ffffff;">Documentations</span></a></button> &nbsp &nbsp
																											</div>


																										</div>
																									</div>
																								</div>
																							</div>


																							<div class="row row-sm">
																								<div class="col-sm-12 col-lg-12">
																									<div class="card primary-custom-card1">
																										<div class="card-body">
																											<div class="row">
																												<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
																													<div class="prime-card1">
																														<img class="img-fluid" src="assets/img/s2.jpg" alt="">
																													</div>
																												</div>
																												<div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
																													<div class="text-justified align-items-center">
																														<h4 class="product-title mb-1"><b style="color: #ff6700;">Voice process</b>
																														</h4>
																														<p class="text-muted tx-13 mb-1">Non IT</p>
																														<br>




																														<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright </p>
																														<p class="card-text tx-15"><span style="color: #13131a;"><b> Course Fee :</b></span>&nbsp 5400</p>
																														<p class="card-text tx-15"><span style="color: #13131a;"><b>Cateogry :</b></span>&nbsp Individual</p>
																														<p class="card-text tx-15"><span style="color: #13131a;"><b>Payment :</b></span>&nbsp Individual</p>
																														<p class="card-text tx-16"><span style="color: #13131a;"><b> Batch Name :</b></span>&nbsp Demo Batch For Trash </p>
																														<p class="card-text tx-15"><span style="color: #13131a;"><b> Class Duration :</b></span>&nbsp </p>
																														<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Starting Date :</b></span>&nbsp 2023-12-02</p>
																														<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Ending Date:</b></span>&nbsp 2024-01-02</p>
																														<p class="card-text tx-15"><span style="color: #13131a;"><b>Session Slot :</b></span>&nbsp Evening-2 </p>
																														<p class="card-text tx-15"><span style="color: #13131a;"><b>Additional Information :</b></span>&nbsp Na </p>

																														<div class="row">


																															<button class="btn btn-primary mb-3 shadow"><a href="schedule.php?batch_id=57"><span style="color:#ffffff;">Schedule</span></a></button> &nbsp &nbsp
																															<button class="btn btn-primary mb-3 shadow"><a href="meetings.php?batch_id=57"><span style="color:#ffffff;">Meetings</span></a></button> &nbsp &nbsp
																															<button class="btn btn-primary mb-3 shadow"><a href="summary.php?batch_id=57"><span style="color:#ffffff;">Summary</span></a></button> &nbsp &nbsp
																															<button class="btn btn-primary mb-3 shadow"><a href="recordings.php?batch_id=57"><span style="color:#ffffff;">Recordings</span></a></button> &nbsp &nbsp
																															<button class="btn btn-primary mb-3 shadow"><a href="tasks.php?batch_id=57"><span style="color:#ffffff;">Tasks</span></a></button> &nbsp &nbsp
																															<button class="btn btn-primary mb-3 shadow"><a href="documentations.php?batch_id=57"><span style="color:#ffffff;">Documentations</span></a></button> &nbsp &nbsp
																														</div>


																													</div>
																												</div>
																											</div>
																										</div>


																										<div class="row row-sm">
																											<div class="col-sm-12 col-lg-12">
																												<div class="card primary-custom-card1">
																													<div class="card-body">
																														<div class="row">
																															<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
																																<div class="prime-card1">
																																	<img class="img-fluid" src="assets/img/s2.jpg" alt="">
																																</div>
																															</div>
																															<div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
																																<div class="text-justified align-items-center">
																																	<h4 class="product-title mb-1"><b style="color: #ff6700;">Voice process</b>
																																	</h4>
																																	<p class="text-muted tx-13 mb-1">Non IT</p>
																																	<br>




																																	<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright </p>
																																	<p class="card-text tx-15"><span style="color: #13131a;"><b> Course Fee :</b></span>&nbsp 5400</p>
																																	<p class="card-text tx-15"><span style="color: #13131a;"><b>Cateogry :</b></span>&nbsp Individual</p>
																																	<p class="card-text tx-15"><span style="color: #13131a;"><b>Payment :</b></span>&nbsp Individual</p>
																																	<p class="card-text tx-16"><span style="color: #13131a;"><b> Batch Name :</b></span>&nbsp Demo Batch For Trash </p>
																																	<p class="card-text tx-15"><span style="color: #13131a;"><b> Class Duration :</b></span>&nbsp </p>
																																	<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Starting Date :</b></span>&nbsp 2023-12-02</p>
																																	<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Ending Date:</b></span>&nbsp 2024-01-02</p>
																																	<p class="card-text tx-15"><span style="color: #13131a;"><b>Session Slot :</b></span>&nbsp Evening-2 </p>
																																	<p class="card-text tx-15"><span style="color: #13131a;"><b>Additional Information :</b></span>&nbsp Na </p>

																																	<div class="row">


																																		<button class="btn btn-primary mb-3 shadow"><a href="schedule.php?batch_id=57"><span style="color:#ffffff;">Schedule</span></a></button> &nbsp &nbsp
																																		<button class="btn btn-primary mb-3 shadow"><a href="meetings.php?batch_id=57"><span style="color:#ffffff;">Meetings</span></a></button> &nbsp &nbsp
																																		<button class="btn btn-primary mb-3 shadow"><a href="summary.php?batch_id=57"><span style="color:#ffffff;">Summary</span></a></button> &nbsp &nbsp
																																		<button class="btn btn-primary mb-3 shadow"><a href="recordings.php?batch_id=57"><span style="color:#ffffff;">Recordings</span></a></button> &nbsp &nbsp
																																		<button class="btn btn-primary mb-3 shadow"><a href="tasks.php?batch_id=57"><span style="color:#ffffff;">Tasks</span></a></button> &nbsp &nbsp
																																		<button class="btn btn-primary mb-3 shadow"><a href="documentations.php?batch_id=57"><span style="color:#ffffff;">Documentations</span></a></button> &nbsp &nbsp
																																	</div>


																																</div>
																															</div>
																														</div>
																													</div>


																													<div class="row row-sm">
																														<div class="col-sm-12 col-lg-12">
																															<div class="card primary-custom-card1">
																																<div class="card-body">
																																	<div class="row">
																																		<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
																																			<div class="prime-card1">
																																				<img class="img-fluid" src="assets/img/s2.jpg" alt="">
																																			</div>
																																		</div>
																																		<div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
																																			<div class="text-justified align-items-center">
																																				<h4 class="product-title mb-1"><b style="color: #ff6700;">Voice process</b>
																																				</h4>
																																				<p class="text-muted tx-13 mb-1">Non IT</p>
																																				<br>




																																				<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright </p>
																																				<p class="card-text tx-15"><span style="color: #13131a;"><b> Course Fee :</b></span>&nbsp 5400</p>
																																				<p class="card-text tx-15"><span style="color: #13131a;"><b>Cateogry :</b></span>&nbsp College</p>
																																				<p class="card-text tx-15"><span style="color: #13131a;"><b>Payment :</b></span>&nbsp College</p>
																																				<p class="card-text tx-16"><span style="color: #13131a;"><b> Batch Name :</b></span>&nbsp Demo Batch For Trash </p>
																																				<p class="card-text tx-15"><span style="color: #13131a;"><b> Class Duration :</b></span>&nbsp </p>
																																				<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Starting Date :</b></span>&nbsp 2023-12-02</p>
																																				<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Ending Date:</b></span>&nbsp 2024-01-02</p>
																																				<p class="card-text tx-15"><span style="color: #13131a;"><b>Session Slot :</b></span>&nbsp Evening-2 </p>
																																				<p class="card-text tx-15"><span style="color: #13131a;"><b>Additional Information :</b></span>&nbsp Na </p>

																																				<div class="row">


																																					<button class="btn btn-primary mb-3 shadow"><a href="schedule.php?batch_id=57"><span style="color:#ffffff;">Schedule</span></a></button> &nbsp &nbsp
																																					<button class="btn btn-primary mb-3 shadow"><a href="meetings.php?batch_id=57"><span style="color:#ffffff;">Meetings</span></a></button> &nbsp &nbsp
																																					<button class="btn btn-primary mb-3 shadow"><a href="summary.php?batch_id=57"><span style="color:#ffffff;">Summary</span></a></button> &nbsp &nbsp
																																					<button class="btn btn-primary mb-3 shadow"><a href="recordings.php?batch_id=57"><span style="color:#ffffff;">Recordings</span></a></button> &nbsp &nbsp
																																					<button class="btn btn-primary mb-3 shadow"><a href="tasks.php?batch_id=57"><span style="color:#ffffff;">Tasks</span></a></button> &nbsp &nbsp
																																					<button class="btn btn-primary mb-3 shadow"><a href="documentations.php?batch_id=57"><span style="color:#ffffff;">Documentations</span></a></button> &nbsp &nbsp
																																				</div>


																																			</div>
																																		</div>
																																	</div>
																																</div>


																																<div class="row row-sm">
																																	<div class="col-sm-12 col-lg-12">
																																		<div class="card primary-custom-card1">
																																			<div class="card-body">
																																				<div class="row">
																																					<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
																																						<div class="prime-card1">
																																							<img class="img-fluid" src="assets/img/s2.jpg" alt="">
																																						</div>
																																					</div>
																																					<div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
																																						<div class="text-justified align-items-center">
																																							<h4 class="product-title mb-1"><b style="color: #ff6700;">Voice process</b>
																																							</h4>
																																							<p class="text-muted tx-13 mb-1">Non IT</p>
																																							<br>




																																							<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright </p>
																																							<p class="card-text tx-15"><span style="color: #13131a;"><b> Course Fee :</b></span>&nbsp 5400</p>
																																							<p class="card-text tx-15"><span style="color: #13131a;"><b>Cateogry :</b></span>&nbsp Individual</p>
																																							<p class="card-text tx-15"><span style="color: #13131a;"><b>Payment :</b></span>&nbsp Individual</p>
																																							<p class="card-text tx-16"><span style="color: #13131a;"><b> Batch Name :</b></span>&nbsp Demo Batch For Trash </p>
																																							<p class="card-text tx-15"><span style="color: #13131a;"><b> Class Duration :</b></span>&nbsp </p>
																																							<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Starting Date :</b></span>&nbsp 2023-12-02</p>
																																							<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Ending Date:</b></span>&nbsp 2024-01-02</p>
																																							<p class="card-text tx-15"><span style="color: #13131a;"><b>Session Slot :</b></span>&nbsp Evening-2 </p>
																																							<p class="card-text tx-15"><span style="color: #13131a;"><b>Additional Information :</b></span>&nbsp Na </p>

																																							<div class="row">


																																								<button class="btn btn-primary mb-3 shadow"><a href="schedule.php?batch_id=57"><span style="color:#ffffff;">Schedule</span></a></button> &nbsp &nbsp
																																								<button class="btn btn-primary mb-3 shadow"><a href="meetings.php?batch_id=57"><span style="color:#ffffff;">Meetings</span></a></button> &nbsp &nbsp
																																								<button class="btn btn-primary mb-3 shadow"><a href="summary.php?batch_id=57"><span style="color:#ffffff;">Summary</span></a></button> &nbsp &nbsp
																																								<button class="btn btn-primary mb-3 shadow"><a href="recordings.php?batch_id=57"><span style="color:#ffffff;">Recordings</span></a></button> &nbsp &nbsp
																																								<button class="btn btn-primary mb-3 shadow"><a href="tasks.php?batch_id=57"><span style="color:#ffffff;">Tasks</span></a></button> &nbsp &nbsp
																																								<button class="btn btn-primary mb-3 shadow"><a href="documentations.php?batch_id=57"><span style="color:#ffffff;">Documentations</span></a></button> &nbsp &nbsp
																																							</div>


																																						</div>
																																					</div>
																																				</div>
																																			</div>


																																			<div class="row row-sm">
																																				<div class="col-sm-12 col-lg-12">
																																					<div class="card primary-custom-card1">
																																						<div class="card-body">
																																							<div class="row">
																																								<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
																																									<div class="prime-card1">
																																										<img class="img-fluid" src="assets/img/s2.jpg" alt="">
																																									</div>
																																								</div>
																																								<div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
																																									<div class="text-justified align-items-center">
																																										<h4 class="product-title mb-1"><b style="color: #ff6700;">Voice process</b>
																																										</h4>
																																										<p class="text-muted tx-13 mb-1">Non IT</p>
																																										<br>




																																										<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright </p>
																																										<p class="card-text tx-15"><span style="color: #13131a;"><b> Course Fee :</b></span>&nbsp 2700</p>
																																										<p class="card-text tx-15"><span style="color: #13131a;"><b>Cateogry :</b></span>&nbsp Individual</p>
																																										<p class="card-text tx-15"><span style="color: #13131a;"><b>Payment :</b></span>&nbsp Individual</p>
																																										<p class="card-text tx-16"><span style="color: #13131a;"><b> Batch Name :</b></span>&nbsp Demo Batch For Trash </p>
																																										<p class="card-text tx-15"><span style="color: #13131a;"><b> Class Duration :</b></span>&nbsp </p>
																																										<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Starting Date :</b></span>&nbsp 2023-12-02</p>
																																										<p class="card-text tx-15"><span style="color: #13131a;"><b>Batch Ending Date:</b></span>&nbsp 2024-01-02</p>
																																										<p class="card-text tx-15"><span style="color: #13131a;"><b>Session Slot :</b></span>&nbsp Evening-2 </p>
																																										<p class="card-text tx-15"><span style="color: #13131a;"><b>Additional Information :</b></span>&nbsp Na </p>

																																										<div class="row">


																																											<button class="btn btn-primary mb-3 shadow"><a href="schedule.php?batch_id=57"><span style="color:#ffffff;">Schedule</span></a></button> &nbsp &nbsp
																																											<button class="btn btn-primary mb-3 shadow"><a href="meetings.php?batch_id=57"><span style="color:#ffffff;">Meetings</span></a></button> &nbsp &nbsp
																																											<button class="btn btn-primary mb-3 shadow"><a href="summary.php?batch_id=57"><span style="color:#ffffff;">Summary</span></a></button> &nbsp &nbsp
																																											<button class="btn btn-primary mb-3 shadow"><a href="recordings.php?batch_id=57"><span style="color:#ffffff;">Recordings</span></a></button> &nbsp &nbsp
																																											<button class="btn btn-primary mb-3 shadow"><a href="tasks.php?batch_id=57"><span style="color:#ffffff;">Tasks</span></a></button> &nbsp &nbsp
																																											<button class="btn btn-primary mb-3 shadow"><a href="documentations.php?batch_id=57"><span style="color:#ffffff;">Documentations</span></a></button> &nbsp &nbsp
																																										</div>


																																									</div>
																																								</div>
																																							</div>
																																						</div>


																																					</div>
																																				</div>

																																			</div>

																																		</div>
																																	</div>

																																</div>
																																<!-- Container closed -->
																															</div>








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