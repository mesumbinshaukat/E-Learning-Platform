
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

		<?php 
	 include('./style.php'); 
	  ?>

	</head>

	<body class="ltr main-body app sidebar-mini">

	<?php 
	 include('./switcher.php'); 
	  ?>
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
										
										
										
										<li class="nav-link Search-icon d-lg-none d-Block">
											<form class="navbar-form" role="Search">
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Search">
													<span class="input-group-btn">
														<button type="Reset" class="btn btn-default">
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
											<a class="new nav-link profile-user d-flex" href="#" data-bs-toggle="dropdown"><img alt="" src="../images/trainer/profile/" class=""></a>
											<div class="dropdown-menu">
												<div class="menu-header-content p-3 border-bottom">
													<div class="d-flex wd-100p">
														<div class="main-img-user"><img alt="" src="../images/trainer/profile/" class=""></div>
														<div class="ms-3 my-auto">
															<h6 class="tx-15 font-weight-semibold mb-0"></h6><span class="dropdown-title-text subtext op-6  tx-12">Trainer</span>
														</div>
													</div>
												</div>
									
												
												<a class="dropdown-item" href="changepassword.php"><i class="far fa-sun"></i>Change Password</a>
												<a class="dropdown-item" href="../../"><i class="far fa-arrow-alt-circle-left"></i> Logout</a>
											</div>
											<li class="nav-item full-screen fullscreen-button">
											<a class="new nav-link full-screen-link" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24"><path d="M5 5h5V3H3v7h2zm5 14H5v-5H3v7h7zm11-5h-2v5h-5v2h7zm-2-4h2V3h-7v2h5z"/></svg></a>
										</li>

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
										<li><a class="slide-item" href="courselist.php">List</a></li>
										<li><a class="slide-item" href="suggestions.php">Suggest Course</a></li>
											
									</ul>
								</li>
										<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-users" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp  <span class="side-menu__label">My Accounts</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">My account</a></li>
								<!--		<li><a class="slide-item" href="mycourses.php">My Courses</a></li> -->
										<li><a class="slide-item" href="mybatches.php">My Batches</a></li>
										<li><a class="slide-item" href="mystudents.php">My Students</a></li>
									</ul>
								</li>
																
									<li class="side-item side-item-category">Internship management</li>

																<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-layout" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp  <span class="side-menu__label">Schedule</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Schedule</a></li>
										<li><a class="slide-item" href="createschedule.php">Create</a></li>
										
										
										<li><a class="slide-item" href="manageschedule.php">Manage</a></li>
										<li><a class="slide-item" href="schedulelist.php">List</a></li>
								
										
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-video" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp  <span class="side-menu__label">Meetings</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Meetings</a></li>
										<li><a class="slide-item" href="createmeetings.php">Create</a></li>
										<li><a class="slide-item" href="managemeetings.php">Manage</a></li>
										<li><a class="slide-item" href="meetingslist.php">List</a></li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-edit" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp  <span class="side-menu__label">Summary</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Summary</a></li>
										<li><a class="slide-item" href="createsummary.php">Create</a></li>
										<li><a class="slide-item" href="managesummary.php">Manage</a></li>
										<li><a class="slide-item" href="summarylist.php">List</a></li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-stop-circle" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp  <span class="side-menu__label">Recordings</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Recordings</a></li>
										<li><a class="slide-item" href="createrecordings.php">Create</a></li>
										<li><a class="slide-item" href="managerecordings.php">Manage</a></li>
										<li><a class="slide-item" href="recordingslist.php">List</a></li>
									</ul>
								</li>
								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-mail" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp  <span class="side-menu__label">Chat</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Chats</a></li>
										<li><a class="slide-item" href="compose.php">Compose</a></li>
										<li><a class="slide-item" href="inbox.php">Inbox</a></li>
										<li><a class="slide-item" href="outbox.php">Outbox</a></li>
										<li><a class="slide-item" href="message.php">All Details</a></li>
									
									</ul>
								</li>
								

								<li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-clipboard" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp  <span class="side-menu__label">Tasks</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Tasks</a></li>
										<li><a class="slide-item" href="addtask.php">Add</a></li>
										<li><a class="slide-item" href="managetask.php">Manage</a></li>
										<li><a class="slide-item" href="tasklist.php">List</a></li>
									</ul>
								</li>	
                                <li class="slide">
									<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="fe fe-upload" width="24" height="24" viewBox="0 0 24 24"></i>&nbsp &nbsp  <span class="side-menu__label">Documentations</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="slide-menu">
										<li class="side-menu__label1"><a href="javascript:void(0);">Documentations</a></li>
										<li><a class="slide-item" href="uploaddocumentation.php">Upload</a></li>
										<li><a class="slide-item" href="managedocumentation.php">Manage</a></li>
										<li><a class="slide-item" href="documentationlist.php">List</a></li>
									</ul>
								</li>
                                
								
							
							
								<li class="side-item side-item-category">Settings</li>

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

			</div>			<form action="../superadmin/connection_files/create/trainer_meetings_create.php" method="POST" enctype="multipart/form-data">
			<!-- main-content -->
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

                    
					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Create Meetings</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="javascript:void(0);">Internship Management</a></li>
								<li class="breadcrumb-item active" aria-current="page">Schedule</li>
								<li class="breadcrumb-item active" aria-current="page">Meetings</li>
							</ol>
						</div>
					</div>
					<!-- /breadcrumb -->
					
											<!-- <div class="row row-sm">
					                 <div class="form-group col-md-4">
										<select name="country" class="form-control form-select select2" data-bs-placeholder="Select Course">
											<option value="">Course1</option>
											<option value="">Course2</option>
											<option value="">Course3</option>
											<option value="">Course4</option>
											<option value="" selected>Course5</option>
										</select>
									</div>
									<div class="form-group col-md-4">
									<select name="country" class="form-control form-select select2" data-bs-placeholder="Select Trainer">
											<option value="">Trainer1</option>
											<option value="">Trainer2</option>
											<option value="">Trainer3</option>
											<option value="">Trainer4</option>
											<option value="" selected>Trainer5</option>
										</select>
									</div> -->
									
									<div class="form-group col-md-4">
									<select name="batch_id" required class="form-control form-select select2" data-bs-placeholder="Select Batch">
										
										</select>
									</div>
                                        &nbsp &nbsp	<a href="https://meet.google.com/" class="btn btn-success">Create Meet</a>       								
                                        &nbsp &nbsp	<a href="https://zoom.us/" class="btn btn-info">Create Zoom</a>       								
                                        &nbsp &nbsp	<a href="https://www.microsoft.com/en-in/microsoft-teams/log-in" class="btn btn-primary">Create Teams</a>       								
                                        &nbsp &nbsp	<a href="https://www.webex.com/" class="btn btn-danger">Create Webex</a>       								
									</div>
									<br>
									

					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									
									
									<div class="">
										<div class="row row-xs formgroup-wrapper">
									     <div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputDOB">Date of Meeting link</label>
												<input class="form-control" name="Date_of_Training_link" id="dateMask" required placeholder="MM/DD/YYYY" type="date">
											</div>
											</div>
											
											<div class="col-md-6">
											<div class="form-group">
										<label for="exampleInputAadhar">Platform</label>
										<select name="Platform" required class="form-control form-select select2" data-bs-placeholder="Select Batch">
											<option value="webex">Webex</option>
											<option value="Gmeet">Gmeet</option>
											<option value="Zoom">Zoom</option>
											<option value="Microsoft_Teams">Microsoft Teams</option>
										</select>
									        </div>
											</div>
																						
											
										    <div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputcode">Meeting link</label>
												<input type="text" required name="Meeting_link" class="form-control" id="exampleInputcode" placeholder="Enter meet link">
											</div>
											</div>
											

											<!--<div class="col-md-6">-->
											<!--<div class="form-group">-->
											<!--	<label for="exampleInputcode"> additional information</label>-->
											<!--	<input type="text" required name="additional_information" class="form-control"  id="exampleInputcode" placeholder="">-->
											<!--</div>-->
											<!--</div>-->
									
										</div>
								<button type="submit" name="submit" class="btn btn-info mt-3 mb-0" data-bs-target="#schedule" data-bs-toggle="modal" style="text-align:right">Upload Link</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					

    
				</div>
				<!-- Container closed -->
			</div>
</form>
		

		  <div class="modal fade" id="schedule">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <p> Are you sure you want to upload a link??</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-success" type="button">Create</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

            
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

	    <?php 
	 include('./script.php'); 
	  ?>
    </body>

<!-- Mirrored from laravel8.spruko.com/nowa/emptypage by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:32:40 GMT -->
</html>
