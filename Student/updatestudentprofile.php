<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="">

	<!-- Title -->
	<title>Update Student Profile</title>
	<?php include("./links.php") ?>
</head>

<body class="ltr main-body app sidebar-mini">

	<!-- Loader -->
	<div id="global-loader">
		<img src="https://triaright.com/Student/assets/img/preloader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->

	<!-- Page -->
	<div class="page">

		<div>

			<div class="main-header side-header sticky nav nav-item">
				<div class=" main-container container-fluid">
					<div class="main-header-left ">
						<div class="responsive-logo">
							<a href="updatestudentprofile.php@id=769.html" class="header-logo">
								<img src="https://triaright.com/Student/assets/img/logowhite.png" class="mobile-logo logo-1" alt="logo">
								<img src="https://triaright.com/Student/assets/img/logoblack.png" class="mobile-logo dark-logo-1" alt="logo">
							</a>
						</div>
						<div class="app-sidebar__toggle" data-bs-toggle="sidebar">
							<a class="open-toggle" href="javascript:void(0);"><i class="header-icon fe fe-align-left"></i></a>
							<a class="close-toggle" href="javascript:void(0);"><i class="header-icon fe fe-x"></i></a>
						</div>
						<div class="logo-horizontal">
							<a href="https://triaright.com/Student/index.php" class="header-logo">
								<img src="https://triaright.com/Student/assets/img/logowhite.png" class="mobile-logo logo-1" alt="logo">
								<img src="https://triaright.com/Student/assets/img/logoblack.png" class="mobile-logo dark-logo-1" alt="logo">
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
										<a class="new nav-link profile-user d-flex" href="updatestudentprofile.php@id=769.html#" data-bs-toggle="dropdown"><img alt="" src="https://triaright.com/images/students/profile/" class=""></a>
										<div class="dropdown-menu">
											<div class="menu-header-content p-3 border-bottom">
												<div class="d-flex wd-100p">
													<div class="main-img-user"><img alt="" src="https://triaright.com/images/students/profile/" class=""></div>
													<div class="ms-3 my-auto">
														<h6 class="tx-15 font-weight-semibold mb-0">demo2024</h6><span class="dropdown-title-text subtext op-6  tx-12">Student</span>
													</div>
												</div>
											</div>


											<a class="dropdown-item" href="https://triaright.com/Student/changepassword.php"><i class="far fa-sun"></i>Change Password</a>
											<a class="dropdown-item" href="https://triaright.com/"><i class="far fa-arrow-alt-circle-left"></i> Logout</a>
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
							<a class="header-logo active" href="https://triaright.com/Student/index.php">
								<img src="https://triaright.com/Student/assets/img/logowhite.png" class="main-logo  desktop-logo" alt="logo">
								<img src="https://triaright.com/Student/assets/img/logoblack.png" class="main-logo  desktop-dark" alt="logo">
								<img src="https://triaright.com/Student/assets/img/icon.png" class="main-logo  mobile-logo" alt="logo">
								<img src="https://triaright.com/Student/assets/img/icon.png" class="main-logo  mobile-dark" alt="logo">
							</a>
						</div>
						<div class="main-sidemenu">
							<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
									<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
								</svg></div>
							<ul class="side-menu">

								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="https://triaright.com/Student/dashboard.php"><i class="si si-event" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp <span class="side-menu__label">Dashboard</span></a>

								</li>


								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="si si-book-open" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp
										&nbsp <span class="side-menu__label">Courses</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Courses</a></li>
										<li><a class="slide-item" href="https://triaright.com/Student/courseregister.php">List</a></li>
										<li><a class="slide-item" href="https://triaright.com/Student/courseregistration.php">Registrations</a>
										</li>
										<li><a class="slide-item" href="https://triaright.com/Student/coursetransactions.php">Transactactions</a>
										</li>
										<li><a class="slide-item" href="https://triaright.com/Student/coursepayments.php">Payments</a>
										</li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-feather" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp
										&nbsp <span class="side-menu__label">Internships</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Internships</a></li>
										<li><a class="slide-item" href="https://triaright.com/Student/internshipregister.php">List</a>
										</li>
										<li><a class="slide-item" href="https://triaright.com/Student/intershipregistration.php">Registrations</a>
										</li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-file-text" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp
										&nbsp <span class="side-menu__label">Placements</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Placements</a></li>
										<li><a class="slide-item" href="https://triaright.com/Student/placementsregister.php">List</a>
										</li>
										<li><a class="slide-item" href="https://triaright.com/Student/placementsregistration.php">Registrations</a>
										</li>
									</ul>
								</li>

								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-users" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp
										&nbsp <span class="side-menu__label">My Accounts</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">My account</a></li>
										<li><a class="slide-item" href="https://triaright.com/Student/mycourses.php">My
												Courses</a></li>
										<li><a class="slide-item" href="https://triaright.com/Student/myinternships.php">My
												Internships</a></li>
										<li><a class="slide-item" href="https://triaright.com/Student/myplacements.php">My Placements</a>
										</li>
									</ul>
								</li>

								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-mail" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp
										&nbsp <span class="side-menu__label">Chats</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Chat</a></li>
										<li><a class="slide-item" href="https://triaright.com/Student/compose.php">Compose</a></li>
										<li><a class="slide-item" href="https://triaright.com/Student/inbox.php">Inbox</a></li>
										<li><a class="slide-item" href="https://triaright.com/Student/outbox.php">Outbox</a></li>
										<li><a class="slide-item" href="https://triaright.com/Student/allmessages.php">All Details</a>
										</li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-upload" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp
										&nbsp <span class="side-menu__label">File Manager</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">File Manager</a>
										</li>
										<li><a class="slide-item" href="https://triaright.com/Student/documentation.php">Documentations</a>
										</li>
										<li><a class="slide-item" href="https://triaright.com/Student/certifications.php">Certifications</a>
										</li>
									</ul>
								</li>



								<li class="slide">

									<a class="side-menu__item" data-bs-toggle="slide" href="https://triaright.com/Student/profile.php"><i class="fe fe-user" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp <span class="side-menu__label">Profile</span></a>

								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="https://triaright.com/Student/changepassword.php"><i class="fe fe-lock" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp <span class="side-menu__label">Change Password</span></a>

								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="https://triaright.com/"><i class="fe fe-log-out" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp
										&nbsp <span class="side-menu__label">Logout</span></a>

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
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">


					<!-- breadcrumb -->

					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
							<span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">MY Accounts</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">Profile</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->

					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card custom-card">
								<div class="card-body d-md-flex">
									<div class="">
										<span class="profile-image pos-relative">
											<img class="br-5" alt="" src="https://triaright.com/images/students/profile/">

										</span>
									</div>
									<div class="my-md-auto mt-4 prof-details">
										<h4 class="font-weight-semibold ms-md-4 ms-0 mb-3 pb-0"><span style="color:#ff6700">demo2024</h4>
										<!--<p class="tx-13 text-muted ms-md-4 ms-0 mb-2 pb-2 ">
										<span class="me-3"><i class="far fa-address-card me-2"></i>Gender
										</span>
										<span class="me-3"><i class="fa fa-taxi me-2"></i>DD/MM/YYYY</span>
										
									</p> -->
										<p class="text-muted ms-md-4 ms-0 mb-3"><span><i class="fa fa-phone me-2"></i></span><span class="font-weight-semibold me-2">Phone:</span><span>1234569856</span>
										</p>
										<p class="text-muted ms-md-4 ms-0 mb-3"><span><i class="fa fa-envelope me-2"></i></span><span class="font-weight-semibold me-2">Email:</span><span>demo2024@gmail.com</span>
										</p>
										<p class="text-muted ms-md-4 ms-0 mb-3"><span><i class="far fa-flag me-2"></i></span><span class="font-weight-semibold me-2">Address:</span><span> Hyderabad</span>
										</p>

										&nbsp
										<button class="btn btn-primary mb-3 shadow"><a href="updatestudentprofile.php@id=769.html"><span style="color:#ffffff;">CV Download</span></a></button>

									</div>
								</div>
								<!--<div class="card-footer py-0">
								<div class="profile-tab tab-menu-heading border-bottom-0">
									<nav class="nav main-nav-line p-0 tabs-menu profile-nav-line border-0 br-5 mb-0	">
										<a class="nav-link  mb-2 mt-2 active" data-bs-toggle="tab"
											href="#about">About</a>
										<a class="nav-link mb-2 mt-2" data-bs-toggle="tab" href="#edit">Edit Profile</a>
										<a class="nav-link  mb-2 mt-2" data-bs-toggle="tab"
											href="#timeline">Timeline</a>
										<a class="nav-link  mb-2 mt-2" data-bs-toggle="tab" href="#gallery">Gallery</a>
										<a class="nav-link  mb-2 mt-2" data-bs-toggle="tab" href="#friends">Friends</a>
										<a class="nav-link  mb-2 mt-2" data-bs-toggle="tab" href="#settings">Account
											Settings</a>
									</nav>
								</div> -->
							</div>
						</div>
					</div>
				</div>

				<!-- Row -->
				<form action="https://triaright.com/superadmin/connection_files/update_studentprofile.php" method="POST" enctype="multipart/form-data">

					<div class="row row-sm">
						<div class="col-lg-12 col-md-12">
							<div class="custom-card main-content-body-profile">
								<div class="tab-content">
									<div class="main-content-body tab-pane  active" id="about">
										<div class="card">
											<div class="card-body border-0">
												<div class="mb-4 main-content-label">Student Information</div>
												<form class="form-horizontal">
													<!--	<div class="mb-4 main-content-label">Name</div> -->
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">Student Name</label>
															</div>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Student Name" name="student_name" value="Demo2024">
																<input type="hidden" name="id" value="769">
																<input type="hidden" name="student_username" value="demo2024">
																<input type="hidden" name="password" value="demo2024">

															</div>
														</div>
													</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">Gender</label>
															</div>
															<div class="col-md-9">

																<select name="gender" required class="form-control form-select select2" data-bs-placeholder="male">

																	<option value="male" selected="selected">Male
																	</option>
																	<option value="female">Female</option>
																	<option value="others">others</option>
																	<option value="ratherNotSay">Rather Not Say</option>

																</select>
															</div>
														</div>

														<div class="form-group ">
															<div class="row row-sm">
																<div class="col-md-3">
																	<label class="form-label">Date of Birth</label>
																</div>
																<div class="col-md-9">
																	<input type="date" class="form-control" id="dateMask" placeholder="DD/MM/YYYY" name="date_of_birth" value="2000-05-10">
																</div>
															</div>
														</div>
														<div class="form-group ">
															<div class="row row-sm">
																<div class="col-md-3">
																	<label class="form-label">Phone Number</label>
																</div>
																<div class="col-md-9">
																	<input readonly type="Number" class="form-control" placeholder="10 Digit Number" name="phone_number" value="1234569856">
																</div>
															</div>
														</div>
														<div class="form-group ">
															<div class="row row-sm">
																<div class="col-md-3">
																	<label class="form-label">Alternative Phone
																		Number</label>
																</div>
																<div class="col-md-9">
																	<input type="number" class="form-control" placeholder="10 Digit Number" name="alternative_phone_number" value="8523654895">
																</div>
															</div>
														</div>
														<!--<div class="mb-4 main-content-label">Contact Info</div>-->
														<div class="form-group ">
															<div class="row row-sm">
																<div class="col-md-3">
																	<label class="form-label">Email ID</label>
																</div>
																<div class="col-md-9">
																	<input readonly type="mail" class="form-control" placeholder="Email" name="mail_id" value="demo2024@gmail.com">
																</div>
															</div>
														</div>
														<div class="form-group ">
															<div class="row row-sm">
																<div class="col-md-3">
																	<label class="form-label">Address</label>
																</div>
																<div class="col-md-9">
																	<input type="text" class="form-control" id="exampleInputName" name="address" value="Hyderabad">
																</div>
															</div>
														</div>
														<div class="form-group ">
															<div class="row row-sm">
																<div class="col-md-3">
																	<label class="form-label">District</label>
																</div>
																<div class="col-md-9">
																	<input type="text" class="form-control" placeholder="District" name="district" value="Hyderabad">
																</div>
															</div>
														</div>
														<div class="form-group ">
															<div class="row row-sm">
																<div class="col-md-3">
																	<label class="form-label">State</label>
																</div>
																<div class="col-md-9">
																	<input type="text" class="form-control" placeholder="State" name="state" id="exampleInputPerEmail" value="ANDHRA PRADESH">
																</div>
															</div>
														</div>
														<div class="form-group ">
															<div class="row row-sm">
																<div class="col-md-3">
																	<label class="form-label">Pincode</label>
																</div>
																<div class="col-md-9">
																	<input type="number" class="form-control" placeholder="Pincode" name="pincode" id="exampleInputPerEmail" value="500016">
																</div>
															</div>
														</div>
														<div class="form-group ">
															<div class="row row-sm">
																<div class="col-md-3">
																	<label class="form-label">Qualification</label>
																</div>
																<div class="col-md-9">
																	<select name="qualification" required class="form-control form-select select2" data-bs-placeholder="10th">

																		<option value="10th" selected="selected">10th
																		</option>
																		<option value="+12">+12</option>
																		<option value="polythecnic">Polytechnic</option>
																		<option value="degree">Degree</option>
																		<option value="btech">B.Tech</option>
																		<option value="pg">Post Graduation</option>
																		<option value="phd">Ph.d</option>



																	</select>
																</div>
															</div>

															<div class="form-group ">
																<div class="row row-sm">
																	<div class="col-md-3">
																		<label class="form-label">Semester</label>
																	</div>
																	<div class="col-md-9">
																		<select name="semester" required class="form-control form-select select2" data-bs-placeholder="6thsem">

																			<option value="1stsem">1st sem</option>
																			<option value="2ndsem">2nd sem</option>
																			<option value="3rdsem">3rd sem</option>
																			<option value="4thsem">4th sem</option>
																			<option value="5thsem">5th sem</option>
																			<option value="6thsem" selected="selected">
																				6th sem</option>
																			<option value="7thsem">7th sem</option>
																			<option value="8thsem">8th sem</option>
																			<option value="notrequired"> Not required
																			</option>


																		</select>
																	</div>
																</div>


																<div class="form-group ">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<label class="form-label">Branch/Stream</label>
																		</div>
																		<div class="col-md-9">
																			<input type="text" class="form-control" placeholder="Branch/Stream" name="stream" id="exampleInputPerEmail" value="BSC">
																		</div>
																	</div>
																</div>
																<!--	<div class="mb-4 main-content-label">Social Info</div> -->
																<div class="form-group ">
																	<div class="row row-sm">
																		<div class="col-md-3">
																			<label class="form-label">Account
																				Type</label>
																		</div>
																		<div class="col-md-9">
																			<select name="account_type" required class="form-control form-select select2" data-bs-placeholder="individual">

																				<option value="college">college</option>
																				<option value="individual" selected="selected">individual
																				</option>




																			</select>
																		</div>
																	</div>

																	<div class="form-group ">
																		<div class="row row-sm">
																			<div class="col-md-3">
																				<label class="form-label">Institutions</label>
																			</div>
																			<div class="col-md-9">
																				<input type="text" class="form-control" placeholder="Institutions" name="institution_name" value="GNR Degree College">
																			</div>
																		</div>
																	</div>
																	<div class="form-group ">
																		<div class="row row-sm">
																			<div class="col-md-3">
																				<label class="form-label">Referral
																					Code</label>
																			</div>
																			<div class="col-md-9">
																				<input readonly type="text" class="form-control" placeholder="Referral Code" value="TRIARIGHT_134">
																			</div>
																		</div>
																	</div>
																	<div class="form-group ">
																		<div class="row row-sm">
																			<div class="col-md-3">
																				<label class="form-label">Upload
																					Resume</label>
																			</div>
																			<div class="col-md-9">

																				<input type="file" class="form-control" name="upload_cv" id="exampleInputcode" placeholder="">
																				<a target="_blank" href="https://triaright.com/images/students/cv/64299436b880e"><button type="button" class="btn btn-primary mt-3 mb-0" name="upload_cv" style="text-align:right">Download</button></a>

																			</div>
																		</div>
																	</div>
																	<div class="form-group ">
																		<div class="row row-sm">
																			<div class="col-md-3">
																				<label class="form-label">Upload Profile
																					Picture</label>
																			</div>
																			<div class="col-md-9">
																				<input type="file" class="form-control" name="upload_profile">
																			</div>
																		</div>
																	</div>
																	<!-- <button class="btn btn-primary mb-3 shadow"><a href="" data-bs-target="#apply" data-bs-toggle="modal"><span style="color:#ffffff;">Update profile</span></a></button>  -->
																	<button type="submit" name="update" class="btn btn-success mt-3 mb-0" style="text-align:right">Update</button> &nbsp
																	&nbsp


																</div>
															</div>
														</div>

													</div>
											</div>
										</div>
									</div>

								</div>
				</form>



			</div>
			<!-- End Page -->

			<!-- BACK-TO-TOP -->
			<a href="updatestudentprofile.php@id=769.html#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

			<?php include("./scripts.php") ?>

</body>

<!-- Mirrored from laravel8.spruko.com/nowa/profile by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:31:32 GMT -->

</html>