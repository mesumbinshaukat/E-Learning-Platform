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
	<div id="global-loader">
		<img src="assets/img/preloader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->
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
	<!-- Page -->
	<div class="page">


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
				<div class="main-header-right">
					<button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon fe fe-more-vertical "></span>
					</button>
					<div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
						<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
							<ul class="nav nav-item header-icons navbar-nav-right ms-auto">
								<li class="nav-link search-icon d-lg-none d-block">
									<form class="navbar-form" role="search">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search">
											<span class="input-group-btn">
												<button type="reset" class="btn btn-default">
													<i class="fas fa-times"></i>
												</button>
												<button type="submit" class="btn btn-default nav-link resp-btn">
													<svg xmlns="http://www.w3.org/2000/svg" height="24px" class="header-icon-svgs" viewBox="0 0 24 24" width="24px" fill="#000000">
														<path d="M0 0h24v24H0V0z" fill="none" />
														<path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
													</svg>
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
									<a class="new nav-link full-screen-link" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24">
											<path d="M5 5h5V3H3v7h2zm5 14H5v-5H3v7h7zm11-5h-2v5h-5v2h7zm-2-4h2V3h-7v2h5z" />
										</svg></a>
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- /main-header -->
		<!-- main-content -->
		<div class="main-content app-content">

			<!-- container -->
			<div class="main-container container-fluid">


				<div class="breadcrumb-header justify-content-between">
					<div class="right-content">
						<span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">MY certifications</span>
					</div>

					<div class="justify-content-center mt-2">
						<ol class="breadcrumb">
							<li class="breadcrumb-item tx-14"><a href="javascript:void(0);">File Manager</a></li>

							<li class="breadcrumb-item ">MY Certificates</li>
						</ol>
					</div>
				</div>
				<form method="post">
					<div class="row row-sm">
						<div class="form-group col-md-3">
							<b> <label>Batch id</label> </b>
							<select name="batch_id" class="form-control form-select" data-bs-placeholder="Select Filter">
								<option value="ALL">ALL</option>
								<option value="57">57</option>
								<option value="0">0</option>
							</select>
						</div>

						&nbsp &nbsp <button type="submit" class="btn btn-primary" name="search" style="height:40px;width:100px;margin-top:35px" value="search">Search</button>
					</div>
				</form>

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
											<!--<p class="text-muted tx-13 mb-1">Stream</p> -->
											<br>
											<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright</p>
											<p class="card-text tx-15"><span style="color: #13131a;"><b>Trainer Name :</b></span>&nbsp demotrainer</p>

											<div class="row">
												<p><a target="_blank" href="../images/Certification/Certification/0"> <button class="btn btn-info mt-3 mb-0" type="button">Download MY Certificate</button></a> </p>

											</div>
										</div>
									</div>
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
											<!--<p class="text-muted tx-13 mb-1">Stream</p> -->
											<br>
											<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright</p>
											<p class="card-text tx-15"><span style="color: #13131a;"><b>Trainer Name :</b></span>&nbsp demotrainer</p>

											<div class="row">
												<p><a target="_blank" href="../images/Certification/Certification/0"> <button class="btn btn-info mt-3 mb-0" type="button">Download MY Certificate</button></a> </p>

											</div>
										</div>
									</div>
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
											<!--<p class="text-muted tx-13 mb-1">Stream</p> -->
											<br>
											<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright</p>
											<p class="card-text tx-15"><span style="color: #13131a;"><b>Trainer Name :</b></span>&nbsp demotrainer</p>

											<div class="row">
												<p><a target="_blank" href="../images/Certification/Certification/0"> <button class="btn btn-info mt-3 mb-0" type="button">Download MY Certificate</button></a> </p>

											</div>
										</div>
									</div>
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
											<!--<p class="text-muted tx-13 mb-1">Stream</p> -->
											<br>
											<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright</p>
											<p class="card-text tx-15"><span style="color: #13131a;"><b>Trainer Name :</b></span>&nbsp demotrainer</p>

											<div class="row">
												<p><a target="_blank" href="../images/Certification/Certification/0"> <button class="btn btn-info mt-3 mb-0" type="button">Download MY Certificate</button></a> </p>

											</div>
										</div>
									</div>
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
											<!--<p class="text-muted tx-13 mb-1">Stream</p> -->
											<br>
											<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright</p>
											<p class="card-text tx-15"><span style="color: #13131a;"><b>Trainer Name :</b></span>&nbsp demotrainer</p>

											<div class="row">
												<p><a target="_blank" href="../images/Certification/Certification/0"> <button class="btn btn-info mt-3 mb-0" type="button">Download MY Certificate</button></a> </p>

											</div>
										</div>
									</div>
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
											<!--<p class="text-muted tx-13 mb-1">Stream</p> -->
											<br>
											<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright</p>
											<p class="card-text tx-15"><span style="color: #13131a;"><b>Trainer Name :</b></span>&nbsp demotrainer</p>

											<div class="row">
												<p><a target="_blank" href="../images/Certification/Certification/0"> <button class="btn btn-info mt-3 mb-0" type="button">Download MY Certificate</button></a> </p>

											</div>
										</div>
									</div>
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
											<!--<p class="text-muted tx-13 mb-1">Stream</p> -->
											<br>
											<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright</p>
											<p class="card-text tx-15"><span style="color: #13131a;"><b>Trainer Name :</b></span>&nbsp demotrainer</p>

											<div class="row">
												<p><a target="_blank" href="../images/Certification/Certification/0"> <button class="btn btn-info mt-3 mb-0" type="button">Download MY Certificate</button></a> </p>

											</div>
										</div>
									</div>
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
											<!--<p class="text-muted tx-13 mb-1">Stream</p> -->
											<br>
											<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright</p>
											<p class="card-text tx-15"><span style="color: #13131a;"><b>Trainer Name :</b></span>&nbsp demotrainer</p>

											<div class="row">
												<p><a target="_blank" href="../images/Certification/Certification/0"> <button class="btn btn-info mt-3 mb-0" type="button">Download MY Certificate</button></a> </p>

											</div>
										</div>
									</div>
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
											<!--<p class="text-muted tx-13 mb-1">Stream</p> -->
											<br>
											<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright</p>
											<p class="card-text tx-15"><span style="color: #13131a;"><b>Trainer Name :</b></span>&nbsp demotrainer</p>

											<div class="row">
												<p><a target="_blank" href="../images/Certification/Certification/0"> <button class="btn btn-info mt-3 mb-0" type="button">Download MY Certificate</button></a> </p>

											</div>
										</div>
									</div>
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
											<!--<p class="text-muted tx-13 mb-1">Stream</p> -->
											<br>
											<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright</p>
											<p class="card-text tx-15"><span style="color: #13131a;"><b>Trainer Name :</b></span>&nbsp demotrainer</p>

											<div class="row">
												<p><a target="_blank" href="../images/Certification/Certification/0"> <button class="btn btn-info mt-3 mb-0" type="button">Download MY Certificate</button></a> </p>

											</div>
										</div>
									</div>
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
											<!--<p class="text-muted tx-13 mb-1">Stream</p> -->
											<br>
											<p class="card-text tx-16"><span style="color: #13131a;"><b> Provider Name :</b></span>&nbsp Triaright</p>
											<p class="card-text tx-15"><span style="color: #13131a;"><b>Trainer Name :</b></span>&nbsp demotrainer</p>

											<div class="row">
												<p><a target="_blank" href="../images/Certification/Certification/0"> <button class="btn btn-info mt-3 mb-0" type="button">Download MY Certificate</button></a> </p>

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
		<!-- main-content closed -->

		<!-- Sidebar-right-->




		<!-- Footer opened -->
		<div class="main-footer">
			<div class="container-fluid pd-t-0-f ht-100p">
				Copyright © 2023 <a href="www.triaright.com" class="text-primary">triaright</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="http://www.mycompany.co.in"> my company</a> . All rights reserved
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

</html>        </div>
        <!-- main-content closed -->

        <!-- Sidebar-right-->




        <!-- Footer opened -->
        <div class="main-footer">
            <div class="container-fluid pd-t-0-f ht-100p">
                Copyright © 2023 <a href="www.triaright.com" class="text-primary">triaright</a>. Designed with <span
                    class="fa fa-heart text-danger"></span> by <a href="http://www.mycompany.co.in"> my company</a> .
                All rights reserved
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