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
<link rel="icon" href="assets/img/icon.png" type="image/x-icon"/>

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
		<link href="assets/plugins/datatable/css/buttons.bootstrap5.min.css"  rel="stylesheet">
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
		<link href="assets/switcher/css/switcher.css" rel="stylesheet"/>
		<link href="assets/switcher/demo.css" rel="stylesheet"/>

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
								<a class="open-toggle" href="javascript:void(0);"><i class="header-icon fe fe-align-left" ></i></a>
								<a class="close-toggle" href="javascript:void(0);"><i class="header-icon fe fe-x"></i></a>
							</div>
							<div class="logo-horizontal">
								<a href="index.php" class="header-logo">
									<img src="assets/img/logowhite.png" class="mobile-logo logo-1" alt="logo">
									<img src="assets/img/logoblack.png" class="mobile-logo dark-logo-1" alt="logo">
								</a>
							</div>

						</div>
						<div class="main-header-right">
							<button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon fe fe-more-vertical "></span>
							</button>
							<div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
								<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
									<ul class="nav nav-item header-icons navbar-nav-right ms-auto">
										
										<!--<li class="dropdown nav-item">-->
										<!--	<a class="new nav-link theme-layout nav-link-bg layout-setting" >-->
										<!--		<span class="dark-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M20.742 13.045a8.088 8.088 0 0 1-2.077.271c-2.135 0-4.14-.83-5.646-2.336a8.025 8.025 0 0 1-2.064-7.723A1 1 0 0 0 9.73 2.034a10.014 10.014 0 0 0-4.489 2.582c-3.898 3.898-3.898 10.243 0 14.143a9.937 9.937 0 0 0 7.072 2.93 9.93 9.93 0 0 0 7.07-2.929 10.007 10.007 0 0 0 2.583-4.491 1.001 1.001 0 0 0-1.224-1.224zm-2.772 4.301a7.947 7.947 0 0 1-5.656 2.343 7.953 7.953 0 0 1-5.658-2.344c-3.118-3.119-3.118-8.195 0-11.314a7.923 7.923 0 0 1 2.06-1.483 10.027 10.027 0 0 0 2.89 7.848 9.972 9.972 0 0 0 7.848 2.891 8.036 8.036 0 0 1-1.484 2.059z"/></svg></span>-->
										<!--		<span class="light-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M6.993 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007S14.761 6.993 12 6.993 6.993 9.239 6.993 12zM12 8.993c1.658 0 3.007 1.349 3.007 3.007S13.658 15.007 12 15.007 8.993 13.658 8.993 12 10.342 8.993 12 8.993zM10.998 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2h-3zm17 0h3v2h-3zM4.219 18.363l2.12-2.122 1.415 1.414-2.12 2.122zM16.24 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.342 7.759 4.22 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z"/></svg></span>-->
										<!--	</a>-->
										<!--</li>-->
										
										
									

										<li class="nav-link search-icon d-lg-none d-block">
											<form class="navbar-form" role="search">
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Search">
													<span class="input-group-btn">
														<button type="reset" class="btn btn-default">
															<i class="fas fa-times"></i>
														</button>
														<button type="submit" class="btn btn-default nav-link resp-btn">
															<svg xmlns="http://www.w3.org/2000/svg" height="24px" class="header-icon-svgs" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
														</button>
													</span>
												</div>
											</form>
										</li>
										<li class="dropdown main-profile-menu nav nav-item nav-link ps-lg-2">
											<a class="new nav-link profile-user d-flex" href="#" data-bs-toggle="dropdown"><img alt="" src="../images/students/profile/" class=""></a>
											<div class="dropdown-menu">
												<div class="menu-header-content p-3 border-bottom">
													<div class="d-flex wd-100p">
														<div class="main-img-user"><img alt="" src="../images/students/profile/" class=""></div>
														<div class="ms-3 my-auto">
																<h6 class="tx-15 font-weight-semibold mb-0"></h6><span class="dropdown-title-text subtext op-6  tx-12">Student</span>
														</div>
													</div>
												</div>
						
												
												<a class="dropdown-item" href="changepassword.php"><i class="far fa-sun"></i>Change Password</a>
												<a class="dropdown-item" href="../../"><i class="far fa-arrow-alt-circle-left"></i> Logout</a>
											</div>
										</li>
											<li class="nav-item full-screen fullscreen-button">
											<a class="new nav-link full-screen-link" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M5 5h5V3H3v7h2zm5 14H5v-5H3v7h7zm11-5h-2v5h-5v2h7zm-2-4h2V3h-7v2h5z"/></svg></a>
										</li>
									</ul>
								</div>
							</div>
							<!--<div class="d-flex">-->
							<!--	<a class="demo-icon new nav-link" href="javascript:void(0);">-->
							<!--		<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs fa-spin" width="24" height="24" viewBox="0 0 24 24"><path d="M12 16c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.084 0 2 .916 2 2s-.916 2-2 2-2-.916-2-2 .916-2 2-2z"/><path d="m2.845 16.136 1 1.73c.531.917 1.809 1.261 2.73.73l.529-.306A8.1 8.1 0 0 0 9 19.402V20c0 1.103.897 2 2 2h2c1.103 0 2-.897 2-2v-.598a8.132 8.132 0 0 0 1.896-1.111l.529.306c.923.53 2.198.188 2.731-.731l.999-1.729a2.001 2.001 0 0 0-.731-2.732l-.505-.292a7.718 7.718 0 0 0 0-2.224l.505-.292a2.002 2.002 0 0 0 .731-2.732l-.999-1.729c-.531-.92-1.808-1.265-2.731-.732l-.529.306A8.1 8.1 0 0 0 15 4.598V4c0-1.103-.897-2-2-2h-2c-1.103 0-2 .897-2 2v.598a8.132 8.132 0 0 0-1.896 1.111l-.529-.306c-.924-.531-2.2-.187-2.731.732l-.999 1.729a2.001 2.001 0 0 0 .731 2.732l.505.292a7.683 7.683 0 0 0 0 2.223l-.505.292a2.003 2.003 0 0 0-.731 2.733zm3.326-2.758A5.703 5.703 0 0 1 6 12c0-.462.058-.926.17-1.378a.999.999 0 0 0-.47-1.108l-1.123-.65.998-1.729 1.145.662a.997.997 0 0 0 1.188-.142 6.071 6.071 0 0 1 2.384-1.399A1 1 0 0 0 11 5.3V4h2v1.3a1 1 0 0 0 .708.956 6.083 6.083 0 0 1 2.384 1.399.999.999 0 0 0 1.188.142l1.144-.661 1 1.729-1.124.649a1 1 0 0 0-.47 1.108c.112.452.17.916.17 1.378 0 .461-.058.925-.171 1.378a1 1 0 0 0 .471 1.108l1.123.649-.998 1.729-1.145-.661a.996.996 0 0 0-1.188.142 6.071 6.071 0 0 1-2.384 1.399A1 1 0 0 0 13 18.7l.002 1.3H11v-1.3a1 1 0 0 0-.708-.956 6.083 6.083 0 0 1-2.384-1.399.992.992 0 0 0-1.188-.141l-1.144.662-1-1.729 1.124-.651a1 1 0 0 0 .471-1.108z"/></svg>-->
							<!--	</a>-->
							<!--</div>-->
						</div>
					
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
							<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
							<ul class="side-menu">
								
								<li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide" href="dashboard.php"><i class="si si-event" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp  <span class="side-menu__label">Dashboard</span></a>
									
									</li>
								
					
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="si si-book-open" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp  <span class="side-menu__label">Courses</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Courses</a></li>
										<li><a class="slide-item" href="courseregister.php">List</a></li>
										<li><a class="slide-item" href="courseregistration.php">Registrations</a></li>
										<li><a class="slide-item" href="coursetransactions.php">Transactactions</a></li>	
										<li><a class="slide-item" href="coursepayments.php">Payments</a></li>	
									</ul>
								</li>
																<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-feather" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp  <span class="side-menu__label">Internships</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Internships</a></li>
										<li><a class="slide-item" href="internshipregister.php">List</a></li>
										<li><a class="slide-item" href="intershipregistration.php">Registrations</a></li>
									</ul>
								</li>
																								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-file-text" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp  <span class="side-menu__label">Placements</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Placements</a></li>
										<li><a class="slide-item" href="placementsregister.php">List</a></li>
										<li><a class="slide-item" href="placementsregistration.php">Registrations</a></li>
									</ul>
								</li>
								
																							<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-users" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp  <span class="side-menu__label">My Accounts</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">My account</a></li>
										<li><a class="slide-item" href="mycourses.php">My Courses</a></li>
										<li><a class="slide-item" href="myinternships.php">My Internships</a></li>
										<li><a class="slide-item" href="myplacements.php">My Placements</a></li>
									</ul>
								</li>
								
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-mail" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp  <span class="side-menu__label">Chats</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Chat</a></li>
										<li><a class="slide-item" href="compose.php">Compose</a></li>
										<li><a class="slide-item" href="inbox.php">Inbox</a></li>
										<li><a class="slide-item" href="outbox.php">Outbox</a></li>
										<li><a class="slide-item" href="allmessages.php">All Details</a></li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-upload" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp  <span class="side-menu__label">File Manager</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">File Manager</a></li>
										<li><a class="slide-item" href="documentation.php">Documentations</a></li>
										<li><a class="slide-item" href="certifications.php">Certifications</a></li>
									</ul>
								</li>
								
								

									<li class="slide">
								
									<a class="side-menu__item" data-bs-toggle="slide" href="profile.php"><i class="fe fe-user" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp  <span class="side-menu__label">Profile</span></a>
								
									<li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide" href="changepassword.php"><i class="fe fe-lock" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp  <span class="side-menu__label">Change Password</span></a>
									
									</li>
								<li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide" href="../../"><i class="fe fe-log-out" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp  <span class="side-menu__label">Logout</span></a>
									
									</li>
								

								
							</ul>
														<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
						</div>
					</aside>
				</div>
				<!-- main-sidebar -->

			</div>
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

                    
<div class="breadcrumb-header justify-content-between">
						<div class="right-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Transactions</span> 
						</div>
						
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Courses</a></li>
								<li class="breadcrumb-item ">Transations</li>

							</ol>
						</div>
 
					</div>
					<!--<div class="row row-sm">
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
									</div>
									
<br>																		
<br>	-->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										
										<div class="table-responsive  export-table">
											<table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
												<thead>
													<tr>
														<th class="border-bottom-0">S.no</th>
														<th class="border-bottom-0">date of payment</th>
														<th class="border-bottom-0">Transation ID</th>

														<th class="border-bottom-0">Course ID</th>
														<th class="border-bottom-0">Rupees paid</th>
														<th class="border-bottom-0">Status</th>
														<th class="border-bottom-0">Uploading</th>
													</tr>
												</thead>
												<tbody>
																								<tr>
														<td>1</td>
														<td>2023-03-26 15:55:50</td>
														<td>TRXN10</td>

														<td>23</td>
														<td>1600</td>
														<td>rejected														</td>
														<td><a target="_blank" href="../images/payments/64201dae208dfD52DB252-7F83-4F57-967F-A712488FE7A8.jpeg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>2</td>
														<td>2023-03-27 14:59:37</td>
														<td>TRXN12</td>

														<td>23</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/64216201ad13eIMG-20230324-WA0031(2).jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>3</td>
														<td>2023-03-27 15:08:26</td>
														<td>TRXN13</td>

														<td>23</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/642164129dbb9IMG-20230324-WA0031(2).jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>4</td>
														<td>2023-04-03 11:05:23</td>
														<td>TRXN18</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/642a659bcbbcbInShot_20230403_110434081.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>5</td>
														<td>2023-04-03 11:12:30</td>
														<td>TRXN19</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/642a6746d43f0Screenshot_2023-04-03-11-11-53-600_com.phonepe.app.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>6</td>
														<td>2023-04-03 11:26:52</td>
														<td>TRXN24</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/642a6aa453f7bIMG-20230323-WA0001.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>7</td>
														<td>2023-04-03 11:28:58</td>
														<td>TRXN26</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/642a6b22e57d6IMG-20230323-WA0001.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>8</td>
														<td>2023-04-03 11:43:20</td>
														<td>TRXN42</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/642a6e80d10ebScreenshot_2023-04-03-11-42-55-838_com.phonepe.app.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>9</td>
														<td>2023-04-04 10:42:13</td>
														<td>TRXN55</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/642bb1ad20630IMG-20230323-WA0001.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>10</td>
														<td>2023-04-15 12:22:34</td>
														<td>TRXN64</td>

														<td>8</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a49b290491All PDF Reader 20230415 12.06.03.pdf"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>11</td>
														<td>2023-04-15 12:22:59</td>
														<td>TRXN66</td>

														<td>8</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a49cb0f64dAll PDF Reader 20230415 12.06.03.pdf"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>12</td>
														<td>2023-04-15 12:23:30</td>
														<td>TRXN67</td>

														<td>8</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a49ea0be72All PDF Reader 20230415 12.06.03.pdf"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>13</td>
														<td>2023-04-15 13:18:27</td>
														<td>TRXN82</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a56cb016f6IMG-20230415-WA0065.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>14</td>
														<td>2023-04-15 13:19:45</td>
														<td>TRXN83</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a5719aa1d9IMG_20230415_130835.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>15</td>
														<td>2023-04-15 13:21:54</td>
														<td>TRXN84</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a579aca4caScreenshot_2023-04-08-10-24-10-77.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>16</td>
														<td>2023-04-15 13:32:05</td>
														<td>TRXN89</td>

														<td>6</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a59fd2aa5fScreenshot_2023-04-15-13-25-30-66_944a2809ea1b4cda6ef12d1db9048ed3.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>17</td>
														<td>2023-04-15 13:34:07</td>
														<td>TRXN90</td>

														<td>16</td>
														<td>1000</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a5a77dea9fIMG-20230415-WA0005.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>18</td>
														<td>2023-04-15 13:35:49</td>
														<td>TRXN92</td>

														<td>16</td>
														<td>1000</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a5addd3307IMG-20230415-WA0005.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>19</td>
														<td>2023-04-15 13:36:48</td>
														<td>TRXN93</td>

														<td>16</td>
														<td>1000</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a5b18b7bc9IMG-20230415-WA0005.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>20</td>
														<td>2023-04-15 13:39:59</td>
														<td>TRXN94</td>

														<td>16</td>
														<td>1000</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a5bd7457d7IMG-20230415-WA0005.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>21</td>
														<td>2023-04-15 13:41:18</td>
														<td>TRXN97</td>

														<td>16</td>
														<td>1000</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a5c269ceedIMG-20230415-WA0005.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>22</td>
														<td>2023-04-15 13:41:22</td>
														<td>TRXN98</td>

														<td>16</td>
														<td>1000</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a5c2a07d54IMG-20230415-WA0005.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>23</td>
														<td>2023-04-15 13:46:35</td>
														<td>TRXN102</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a5d634b675IMG-20230409-WA0017.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>24</td>
														<td>2023-04-15 13:49:52</td>
														<td>TRXN104</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a5e286c665Triveni.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>25</td>
														<td>2023-04-15 13:51:48</td>
														<td>TRXN105</td>

														<td>6</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a5e9cc5e0bScreenshot_2023-04-15-13-25-30-66_944a2809ea1b4cda6ef12d1db9048ed3.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>26</td>
														<td>2023-04-15 13:55:05</td>
														<td>TRXN106</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a5f616d95fIMG-20230409-WA0017.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>27</td>
														<td>2023-04-15 13:57:57</td>
														<td>TRXN107</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a600d8e5caIMG-20230409-WA0017.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>28</td>
														<td>2023-04-15 14:28:04</td>
														<td>TRXN109</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a671cb8281Sangeetha.pdf"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>29</td>
														<td>2023-04-15 14:29:07</td>
														<td>TRXN110</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a675b1a41fWhatsApp Image 2023-04-15 at 2.26.59 PM.jpeg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>30</td>
														<td>2023-04-15 14:31:33</td>
														<td>TRXN111</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a67ed44c1aWhatsApp Image 2023-04-15 at 2.26.59 PM.jpeg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>31</td>
														<td>2023-04-15 14:31:52</td>
														<td>TRXN112</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a6800476c2Sangeetha.pdf"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>32</td>
														<td>2023-04-15 14:33:16</td>
														<td>TRXN113</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a6854b1418Sangeetha.pdf"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>33</td>
														<td>2023-04-15 14:36:20</td>
														<td>TRXN114</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a690cd8dd7WhatsApp Image 2023-04-15 at 2.26.59 PM.jpeg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>34</td>
														<td>2023-04-15 14:41:09</td>
														<td>TRXN117</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a6a2d8aab2WhatsApp Image 2023-04-15 at 2.26.59 PM.jpeg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>35</td>
														<td>2023-04-15 14:45:51</td>
														<td>TRXN118</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a6b4736e49Screenshot_2023-04-15-14-45-12-384_com.phonepe.app.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>36</td>
														<td>2023-04-15 14:53:12</td>
														<td>TRXN120</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a6d0064d99Screenshot_2023-04-15-14-51-52-521_com.phonepe.app.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>37</td>
														<td>2023-04-15 15:00:59</td>
														<td>TRXN122</td>

														<td>23</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a6ed3214dbIMG-20230324-WA0031(5).jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>38</td>
														<td>2023-04-15 15:03:44</td>
														<td>TRXN128</td>

														<td>23</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a6f7851a06Screenshot_2023-04-15-15-02-45-84_944a2809ea1b4cda6ef12d1db9048ed3.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>39</td>
														<td>2023-04-15 15:11:16</td>
														<td>TRXN130</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a713c7af41tmp-cam-5093915247891635695.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>40</td>
														<td>2023-04-15 15:16:58</td>
														<td>TRXN133</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a72921f6cbIMG-20230415-WA0066.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>41</td>
														<td>2023-04-15 15:23:20</td>
														<td>TRXN134</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a741013ef2tmp-cam-7284101619150084013.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>42</td>
														<td>2023-04-15 15:27:50</td>
														<td>TRXN135</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a751e84b4dIMG-20230415-WA0022.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>43</td>
														<td>2023-04-15 15:31:59</td>
														<td>TRXN138</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a7617e90adIMG-20230415-WA0022.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>44</td>
														<td>2023-04-15 15:36:35</td>
														<td>TRXN141</td>

														<td>6</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a772b6ac73Screenshot_2023-04-15-13-25-30-66_944a2809ea1b4cda6ef12d1db9048ed3.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>45</td>
														<td>2023-04-15 15:42:30</td>
														<td>TRXN142</td>

														<td>22</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a788e27018IMG_20230407_123051_1.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>46</td>
														<td>2023-04-15 16:58:13</td>
														<td>TRXN145</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a8a4dd2ebfIMG-20230411-WA0011.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>47</td>
														<td>2023-04-15 17:15:02</td>
														<td>TRXN147</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a8e3e148deIMG-20230411-WA0011.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>48</td>
														<td>2023-04-15 17:15:55</td>
														<td>TRXN148</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a8e730308aIMG-20230411-WA0011.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>49</td>
														<td>2023-04-15 17:18:00</td>
														<td>TRXN150</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a8ef0e59e0IMG-20230411-WA0011.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>50</td>
														<td>2023-04-15 17:24:29</td>
														<td>TRXN151</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a907561a05IMG-20230411-WA0011.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>51</td>
														<td>2023-04-15 17:26:44</td>
														<td>TRXN152</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a90fc5a032IMG-20230411-WA0011.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>52</td>
														<td>2023-04-15 17:33:00</td>
														<td>TRXN153</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a9274eeb0bIMG-20230415-WA0022.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>53</td>
														<td>2023-04-15 17:33:08</td>
														<td>TRXN154</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a927c969cdIMG-20230415-WA0022.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>54</td>
														<td>2023-04-15 17:33:12</td>
														<td>TRXN155</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a9280a6f49IMG-20230415-WA0022.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>55</td>
														<td>2023-04-15 17:33:14</td>
														<td>TRXN156</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a92824e74bIMG-20230415-WA0022.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>56</td>
														<td>2023-04-15 17:33:15</td>
														<td>TRXN157</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a928362244IMG-20230415-WA0022.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>57</td>
														<td>2023-04-15 17:33:16</td>
														<td>TRXN158</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a9284767bfIMG-20230415-WA0022.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>58</td>
														<td>2023-04-15 17:33:18</td>
														<td>TRXN159</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a92869d659IMG-20230415-WA0022.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>59</td>
														<td>2023-04-15 17:33:19</td>
														<td>TRXN160</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a9287585e4IMG-20230415-WA0022.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>60</td>
														<td>2023-04-15 17:50:35</td>
														<td>TRXN161</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a9693425abWhatsApp Image 2023-03-24 at 8.14.41 AM.jpeg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>61</td>
														<td>2023-04-15 18:09:29</td>
														<td>TRXN164</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a9b0173319Screenshot_2023-04-15-13-30-10-219_com.whatsapp.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>62</td>
														<td>2023-04-15 18:15:45</td>
														<td>TRXN165</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643a9c7920d05IMG_20230415_181446.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>63</td>
														<td>2023-04-15 18:31:27</td>
														<td>TRXN166</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643aa0273f325Screenshot_2023-04-15-18-30-43-998_com.whatsapp.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>64</td>
														<td>2023-04-15 18:41:35</td>
														<td>TRXN168</td>

														<td>23</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643aa2871d8b1IMG_1210.png"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>65</td>
														<td>2023-04-15 20:01:53</td>
														<td>TRXN173</td>

														<td>16</td>
														<td>1000</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643ab55966020IMG-20230415-WA0016.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>66</td>
														<td>2023-04-15 20:02:17</td>
														<td>TRXN174</td>

														<td>16</td>
														<td>1000</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643ab5715b8b0IMG-20230415-WA0016.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>67</td>
														<td>2023-04-15 20:23:43</td>
														<td>TRXN176</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643aba77ad6bbScreenshot_20230415_182618.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>68</td>
														<td>2023-04-15 21:42:23</td>
														<td>TRXN180</td>

														<td>16</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643acce730c6bIMG-20230415-WA0021.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>69</td>
														<td>2023-04-16 06:46:59</td>
														<td>TRXN183</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643b4c8b8120fIMG-20230415-WA0025.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>70</td>
														<td>2023-04-16 06:53:11</td>
														<td>TRXN184</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643b4dff823b7IMG-20230415-WA0025.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>71</td>
														<td>2023-04-16 06:56:56</td>
														<td>TRXN185</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643b4ee03b220IMG-20230415-WA0025.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>72</td>
														<td>2023-04-16 09:44:36</td>
														<td>TRXN189</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643b762c136f2IMG-20230411-WA0011.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>73</td>
														<td>2023-04-16 09:45:14</td>
														<td>TRXN190</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643b765245306IMG-20230411-WA0011.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>74</td>
														<td>2023-04-16 09:45:47</td>
														<td>TRXN191</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643b7673834ebIMG-20230411-WA0011.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>75</td>
														<td>2023-04-16 10:13:13</td>
														<td>TRXN192</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643b7ce120142IMG-20230408-WA0019.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>76</td>
														<td>2023-04-16 10:13:52</td>
														<td>TRXN193</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643b7d08800c8IMG-20230408-WA0019.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>77</td>
														<td>2023-04-16 10:17:23</td>
														<td>TRXN194</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643b7ddb0ad2eIMG-20230408-WA0019.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>78</td>
														<td>2023-04-16 10:17:42</td>
														<td>TRXN195</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643b7deee531bIMG-20230408-WA0019.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>79</td>
														<td>2023-04-16 10:18:43</td>
														<td>TRXN196</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643b7e2bb1973IMG-20230408-WA0019.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>80</td>
														<td>2023-04-16 10:19:54</td>
														<td>TRXN197</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643b7e72ef107IMG-20230408-WA0019.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>81</td>
														<td>2023-04-16 16:37:42</td>
														<td>TRXN205</td>

														<td>23</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643bd6fe17e9dScreenshot_20230327_205247.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>82</td>
														<td>2023-04-16 16:49:05</td>
														<td>TRXN206</td>

														<td>23</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643bd9a94a826IMG-20230415-WA0017.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>83</td>
														<td>2023-04-16 16:50:55</td>
														<td>TRXN208</td>

														<td>23</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643bda17085e8IMG-20230415-WA0017.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>84</td>
														<td>2023-04-16 20:08:46</td>
														<td>TRXN214</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c08768d455Screenshot_2023-03-27-19-02-14-96_49b96b5fbae0d12a18edc4a3afe0dfd9.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>85</td>
														<td>2023-04-16 20:16:36</td>
														<td>TRXN216</td>

														<td>23</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c0a4ce5621Screenshot_20230327_205247.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>86</td>
														<td>2023-04-16 21:14:01</td>
														<td>TRXN219</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c17c120bbfIMG-20230416-WA0014.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>87</td>
														<td>2023-04-16 22:05:35</td>
														<td>TRXN220</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c23d7ad822IMG-20230415-WA0022.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>88</td>
														<td>2023-04-16 22:06:25</td>
														<td>TRXN221</td>

														<td>6</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c24097ce1aIMG-20230330-WA0011.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>89</td>
														<td>2023-04-16 22:09:39</td>
														<td>TRXN222</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c24cb4fdadScreenshot_20230416-220808.png"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>90</td>
														<td>2023-04-16 22:09:43</td>
														<td>TRXN223</td>

														<td>23</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c24cf2f538IMG-20230416-WA0000.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>91</td>
														<td>2023-04-16 22:12:39</td>
														<td>TRXN224</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c257f57c15Screenshot_2023-04-16-22-12-15-588_com.phonepe.app.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>92</td>
														<td>2023-04-16 22:12:56</td>
														<td>TRXN225</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c2590a9862Screenshot_20230416-220808.png"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>93</td>
														<td>2023-04-16 22:13:25</td>
														<td>TRXN226</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c25ad862dbIMG-20230416-WA0007.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>94</td>
														<td>2023-04-16 22:13:35</td>
														<td>TRXN227</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c25b795ac3Screenshot_2023-04-16-22-12-15-588_com.phonepe.app.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>95</td>
														<td>2023-04-16 22:14:32</td>
														<td>TRXN228</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c25f076515IMG-20230416-WA0009.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>96</td>
														<td>2023-04-16 22:17:44</td>
														<td>TRXN229</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c26b042a79IMG-20230416-WA0009.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>97</td>
														<td>2023-04-16 22:25:32</td>
														<td>TRXN230</td>

														<td>22</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c2884bc43eScreenshot_2023-03-27-14-22-44-20_944a2809ea1b4cda6ef12d1db9048ed3.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>98</td>
														<td>2023-04-16 22:26:03</td>
														<td>TRXN231</td>

														<td>23</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c28a30964bIMG-20230401-WA0001.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>99</td>
														<td>2023-04-16 22:26:40</td>
														<td>TRXN232</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c28c8710aaScreenshot_2023-04-16-22-21-53-303_com.phonepe.app.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>100</td>
														<td>2023-04-16 22:27:44</td>
														<td>TRXN233</td>

														<td>23</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c2908ccd8dScreenshot_2023-04-16-22-24-42-231_com.miui.gallery.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>101</td>
														<td>2023-04-16 22:27:51</td>
														<td>TRXN234</td>

														<td>23</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c290f5fd63Screenshot_20230324_131228.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>102</td>
														<td>2023-04-16 22:38:14</td>
														<td>TRXN237</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c2b7eeb077IMG-20230416-WA0009.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>103</td>
														<td>2023-04-16 22:39:19</td>
														<td>TRXN238</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c2bbf1b488IMG-20230416-WA0009.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>104</td>
														<td>2023-04-16 22:39:39</td>
														<td>TRXN239</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c2bd37d850triaright fee.pdf"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>105</td>
														<td>2023-04-16 22:44:45</td>
														<td>TRXN240</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c2d05a3833IMG-20230415-WA0065.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>106</td>
														<td>2023-04-17 05:09:01</td>
														<td>TRXN241</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c8715df164Screenshot_20230415_190020.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>107</td>
														<td>2023-04-17 06:21:23</td>
														<td>TRXN242</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c980b4530bIMG-20230416-WA0006.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>108</td>
														<td>2023-04-17 06:21:56</td>
														<td>TRXN243</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c982cce341IMG-20230416-WA0006.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>109</td>
														<td>2023-04-17 06:32:10</td>
														<td>TRXN244</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c9a929dbdaIMG-20230323-WA0023(1).jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>110</td>
														<td>2023-04-17 06:33:33</td>
														<td>TRXN245</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643c9ae52f26dIMG-20230323-WA0023(1).jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>111</td>
														<td>2023-04-17 07:06:01</td>
														<td>TRXN246</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643ca281877f0Screenshot_20230415_190020.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>112</td>
														<td>2023-04-17 07:31:55</td>
														<td>TRXN247</td>

														<td>23</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643ca89317a7eScreenshot_20230417_073132.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>113</td>
														<td>2023-04-17 07:36:21</td>
														<td>TRXN248</td>

														<td>23</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643ca99d689e7IMG-20230417-WA0000.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>114</td>
														<td>2023-04-17 07:54:48</td>
														<td>TRXN249</td>

														<td>6</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643cadf0edabdScreenshot_2023-04-15-13-25-30-66_944a2809ea1b4cda6ef12d1db9048ed3.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>115</td>
														<td>2023-04-17 08:11:44</td>
														<td>TRXN250</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643cb1e8d1935IMG-20230323-WA0009.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>116</td>
														<td>2023-04-17 08:18:31</td>
														<td>TRXN251</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643cb37f61433IMG-20230417-WA0003.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>117</td>
														<td>2023-04-17 08:40:45</td>
														<td>TRXN252</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643cb8b500bafIMG-20230409-WA0017.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>118</td>
														<td>2023-04-17 08:58:55</td>
														<td>TRXN253</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643cbcf76a1adScreenshot_2023-03-27-12-29-56-21.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>119</td>
														<td>2023-04-17 08:59:54</td>
														<td>TRXN254</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643cbd3252338Screenshot_2023-03-27-12-29-56-21.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>120</td>
														<td>2023-04-17 09:05:28</td>
														<td>TRXN256</td>

														<td>23</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643cbe80330ffIMG-20230407-WA0007.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>121</td>
														<td>2023-04-17 09:59:59</td>
														<td>TRXN258</td>

														<td>6</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643ccb4763a7dScreenshot_2023-04-17-09-58-50-953_com.phonepe.app.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>122</td>
														<td>2023-04-17 10:00:02</td>
														<td>TRXN259</td>

														<td>6</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643ccb4a81526Screenshot_2023-04-17-09-58-50-953_com.phonepe.app.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>123</td>
														<td>2023-04-17 10:02:05</td>
														<td>TRXN260</td>

														<td>6</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643ccbc53f4ccScreenshot_2023-04-17-09-58-50-953_com.phonepe.app.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>124</td>
														<td>2023-04-17 10:03:00</td>
														<td>TRXN261</td>

														<td>6</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643ccbfce1a9eScreenshot_2023-04-17-09-58-50-953_com.phonepe.app.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>125</td>
														<td>2023-04-17 10:24:09</td>
														<td>TRXN262</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643cd0f189e91Screenshot_20230417-084929.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>126</td>
														<td>2023-04-17 11:03:39</td>
														<td>TRXN265</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643cda3385439DocScanner 17-Apr-2023 10-56 AM.pdf"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>127</td>
														<td>2023-04-17 11:05:06</td>
														<td>TRXN268</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643cda8ab45bcDocScanner 17-Apr-2023 10-56 AM.pdf"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>128</td>
														<td>2023-04-17 11:05:42</td>
														<td>TRXN269</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643cdaae04ea7DocScanner 17-Apr-2023 10-56 AM.pdf"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>129</td>
														<td>2023-04-17 11:06:20</td>
														<td>TRXN270</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643cdad48f95bDocScanner 17-Apr-2023 10-56 AM.pdf"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>130</td>
														<td>2023-04-17 11:06:38</td>
														<td>TRXN271</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643cdae68c982DocScanner 17-Apr-2023 10-56 AM.pdf"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>131</td>
														<td>2023-04-17 11:13:07</td>
														<td>TRXN274</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643cdc6b9da46IMG-20230415-WA0035.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>132</td>
														<td>2023-04-17 11:14:23</td>
														<td>TRXN275</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643cdcb7a6cd4IMG-20230415-WA0035.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>133</td>
														<td>2023-04-17 11:35:53</td>
														<td>TRXN276</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643ce1c19515eScreenshot_2023-04-16-22-30-48-904_com.miui.gallery.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>134</td>
														<td>2023-04-17 12:06:00</td>
														<td>TRXN277</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643ce8d0be8ecIMG-20230331-WA0050.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>135</td>
														<td>2023-04-17 12:09:54</td>
														<td>TRXN278</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643ce9ba4976dIMG-20230331-WA0050.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>136</td>
														<td>2023-04-17 12:48:35</td>
														<td>TRXN279</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643cf2cb22bdcScreenshot_2023-04-17-12-47-46-62_944a2809ea1b4cda6ef12d1db9048ed3.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>137</td>
														<td>2023-04-17 13:20:56</td>
														<td>TRXN282</td>

														<td>22</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643cfa604b644IMG_20230407_123051_1.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>138</td>
														<td>2023-04-17 15:42:16</td>
														<td>TRXN286</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643d1b80451b3DocScanner 17-Apr-2023 10-56 AM.pdf"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>139</td>
														<td>2023-04-17 15:45:01</td>
														<td>TRXN287</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643d1c2516811DocScanner 17-Apr-2023 10-56 AM.pdf"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>140</td>
														<td>2023-04-17 16:06:56</td>
														<td>TRXN288</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643d2148d2eb1VID-20230410-WA0007.mp4"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>141</td>
														<td>2023-04-17 18:24:37</td>
														<td>TRXN297</td>

														<td>3</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643d418d60f5aIMG-20230417-WA0007.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>142</td>
														<td>2023-04-17 19:20:48</td>
														<td>TRXN298</td>

														<td>6</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643d4eb86f6ffScreenshot_2023-04-17-18-07-43-129_com.phonepe.app.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>143</td>
														<td>2023-04-19 16:24:35</td>
														<td>TRXN301</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643fc86bbae58IMG-20230417-WA0009.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>144</td>
														<td>2023-04-19 16:40:03</td>
														<td>TRXN302</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643fcc0b43a43IMG-20230415-WA0015.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>145</td>
														<td>2023-04-19 16:47:51</td>
														<td>TRXN303</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/643fcddf147d2Screenshot_2023-04-18-07-30-57-33_6012fa4d4ddec268fc5c7112cbb265e7.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>146</td>
														<td>2023-04-23 10:22:08</td>
														<td>TRXN305</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/6444b97888f38Triaright payment pdf .pdf"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>147</td>
														<td>2023-04-26 09:37:55</td>
														<td>TRXN308</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/6448a39bd02aeTriaRight The New Era of Learning (1).pdf"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>148</td>
														<td>2023-04-26 20:27:11</td>
														<td>TRXN312</td>

														<td>23</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/64493bc7496ddScreenshot_2023-04-26-20-18-00-340_com.android.chrome.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>149</td>
														<td>2023-04-26 20:57:12</td>
														<td>TRXN313</td>

														<td>4</td>
														<td>3000</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/644942d0a5f48WhatsApp Image 2023-04-26 at 8.55.46 PM.jpeg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>150</td>
														<td>2023-04-27 08:09:15</td>
														<td>TRXN314</td>

														<td>4</td>
														<td>3000</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/6449e053265a9Screenshot_20230427_080810.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>151</td>
														<td>2023-04-27 12:53:45</td>
														<td>TRXN315</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/644a2301b2f86Screenshot_20230427_125305.jpg"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
													</tr>
																							
													
													
																										<tr>
														<td>152</td>
														<td>2023-05-11 16:00:42</td>
														<td>TRXN322</td>

														<td>4</td>
														<td>1600</td>
														<td>accepted														</td>
														<td><a target="_blank" href="../images/payments/645cc3d2ca29eTriaRight The New Era of Learning (1).pdf"><button type="submit" class="btn btn-primary mt-3 mb-0" name="trans_proof" style="text-align:right">Download</button></a>
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
                                    
                                    <p> Are you sure you want to reject a student??</p>
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
</html>
