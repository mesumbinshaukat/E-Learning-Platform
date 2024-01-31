<?php 
if (!isset($_COOKIE['trainer_username']) && !isset($_COOKIE['trainer_password'])) {
	header('location: ../trainer_login.php');
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
		<title> TriaRight: The New Era of Learning</title>

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
 <!--                                       <button class="btn btn-danger btn-Block ResetCustomStyles" type="button">Reset All-->
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
			   <?php include('./partials/navbar.php')?>
				</div>
				<!-- /main-header -->
				 <!-- main-sidebar -->
 <div class="sticky">
 <?php include('./partials/sidebar.php')?>
				</div>
				<!-- main-sidebar -->

			</div>			<!-- main-content -->
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">
                    
					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Dashboard</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								
							</ol>
						</div>
					</div>
					<!-- /breadcrumb --> 
					<div class="row">
						<div class="col-xl-7 col-lg-12 col-md-12 col-sm-12">
							<div class="card primary-custom-card1">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-5 col-lg-6 col-md-12 col-sm-12">
											<div class="prime-card"><img class="img-fluid" src="assets/img/reg.gif" alt=""></div>
										</div>
										<div class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
											<div class="text-justified align-items-center">
												<h2 class="text-dark font-weight-semibold mb-3 mt-2">Hi <span style="color:#ff6700"></span>, Welcome to <span class="text-primary">TriaRight</span></h2>
												<p class="text-dark tx-15 mb-2 lh-3">Thankyou for choosing us, We are delighted that you have joined us and we look forward you provide a wealth of resources and information that will help candidates to succeed in their academic journey.</p>
												<p class="font-weight-semibold tx-12 mb-4" style="color:#ff6700">For any queries, contact us through support chat or mail us at info@triaright.com </p> 
											<!--	<button class="btn btn-primary mb-3 shadow"><a href="registerstudent0.html"><span style="color:#ffffff;">Complete Registration</span></a></button> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
												<div class="col-sm-5 col-lg-5">
							<div class="card">
								<div class="card-header pb-0">
									<div class="card-title pb-0  mb-2">Our Progress</div>
									<!--<p class="tx-12 tx-gray-500 mb-3">On the other hand, we denounce with right indignation and dislike imagesralized <a href="#">Learn more</a></p> -->
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col text-center">
											<label class="tx-14">Courses<br> Assigned</label>
											<p class="font-weight-bold tx-20">18</p>
										</div><!-- col -->
										<div class="col border-start text-center">
											<label class="tx-14">Batches <br>allocated</label>
											<p class="font-weight-bold tx-20">1</p>
										</div><!-- col -->
										<div class="col border-start text-center">
											<label class="tx-14">Total<br> Students</label>
											<p class="font-weight-bold tx-20">0</p>
										</div><!-- col -->
										
									</div><!-- row -->

								</div>
								<div class="card-body">
									<div class="row">
										<div class="col text-center">
											<label class="tx-14">Batch-1</label>
											<p class="font-weight-bold tx-20">5049</p>
										</div><!-- col -->
										<div class="col border-start text-center">
											<label class="tx-14">batch-2</label>
											<p class="font-weight-bold tx-20">55</p>
										</div><!-- col -->
										<div class="col border-start text-center">
											<label class="tx-14">batch-3</label>
											<p class="font-weight-bold tx-20">43</p>
										</div><!-- col -->
										
									</div><!-- row -->
									<br>

								</div>
							</div>
						</div>
						
						<!-- </div> -->
				</div>
					<div class="row">
						<div class="col-lg-12 col-xl-12">

								<div class="row">
									<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											
											<div class="card-body pt-0 text-center">
												
												<a class="file-manger-icon" href="createschedule.php">
  <img src="assets/img/schedule.png"  alt="img" class="br-7" />
</a>
												<h6 class="mb-1 font-weight-semibold">Schedule</h6>
												
											</div>
										</div>
									</div>
																		<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											
											<div class="card-body pt-0 text-center">
												
												<a class="file-manger-icon" href="createmeetings.php">
  <img src="assets/img/meetings.png"  alt="img" class="br-7" />
</a>
												<h6 class="mb-1 font-weight-semibold">Meetings</h6>
												
											</div>
										</div>
									</div>
																		<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											
											<div class="card-body pt-0 text-center">
												
												<a class="file-manger-icon" href="createsummary.php">
  <img src="assets/img/summary.png"  alt="img" class="br-7" />
</a>
												<h6 class="mb-1 font-weight-semibold">Summary</h6>
												
											</div>
										</div>
									</div>
																		<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											
											<div class="card-body pt-0 text-center">
												
												<a class="file-manger-icon" href="addtask.php">
  <img src="assets/img/task.png"  alt="img" class="br-7" />
</a>
												<h6 class="mb-1 font-weight-semibold">Tasks</h6>
												
											</div>
										</div>
									</div>
																		<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											
											<div class="card-body pt-0 text-center">
												
												<a class="file-manger-icon" href="createrecordings.php">
  <img src="assets/img/recordings.png"  alt="img" class="br-7" />
</a>
												<h6 class="mb-1 font-weight-semibold">Recordings</h6>
												
											</div>
										</div>
									</div>
																		<div class="col-xl-2 col-md-4 col-sm-6">
										<div class="card p-0 ">
											
											<div class="card-body pt-0 text-center">
												
												<a class="file-manger-icon" href="uploaddocumentation.php">
  <img src="assets/img/files/file.png"  alt="img" class="br-7" />
</a>
												<h6 class="mb-1 font-weight-semibold">Documents</h6>
												
											</div>
										</div>
									</div>
									
									
							</div>
						
						</div>
					</div>
					<!--<div class="row row-sm">-->
					<!--	<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">-->
					<!--		<div class="card text-center card-img-top-1">-->
					<!--			<img class="card-img-top w-100" src="assets/img/1.png" alt="">-->
					<!--			<div class="card-body">-->
					<!--				<h4 class="card-title mb-3">Courses</h4>-->
									<!--<p class="card-text">minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
					<!--				<a class="btn btn-info btn-block" href="managecourses.php">view courses</a>-->

					<!--			</div>-->
					<!--		 </div>-->
					<!--	</div>-->
					<!--	<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">-->
					<!--		<div class="card text-center card-img-top-1">-->
					<!--			<img class="card-img-top w-100" src="assets/img/3.jpg" alt="">-->
					<!--			<div class="card-body">-->
					<!--				<h4 class="card-title mb-3">Internships</h4>-->
									<!--<p class="card-text">minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
					<!--				<a class="btn btn-info btn-block" href="internships.php">view internships</a>-->

					<!--			</div>-->
					<!--		 </div>-->
					<!--	</div>-->
					<!--	<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">-->
					<!--		<div class="card text-center card-img-top-1">-->
					<!--			<img class="card-img-top w-100" src="assets/img/2.jpg" alt="">-->
					<!--			<div class="card-body">-->
					<!--				<h4 class="card-title mb-3">Jobs</h4>-->
									<!--<p class="card-text">minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
					<!--				<a class="btn btn-info btn-block" href="placements.php">view placements</a>-->

					<!--			</div>-->
							 </div>
						</div>
					</div>

					
            
	<div class="main-footer">
				<div class="container-fluid pd-t-0-f ht-100p">
					 Copyrights ©TriaRight 2023. All rights reserved by <a href="https://www.triaright.com" class="text-primary">TriaRight</a> developed by <span class="fa fa-heart text-danger"></span><a href="http://www.mycompany.co.in" class="text-primary"> MY Company</a>.
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

<!-- Mirrored from laravel8.spruko.com/nowa/emptypage by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:32:40 GMT -->
</php>
