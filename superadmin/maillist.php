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
						<span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Mail List</span>
					</div>

					<div class="justify-content-center mt-2">
						<ol class="breadcrumb">
							<li class="breadcrumb-item tx-14"><a href="javascript:void(0);">internship management</a>
							</li>
							<li class="breadcrumb-item ">Chats</li>
							<li class="breadcrumb-item ">all </li>
						</ol>
					</div>

				</div>

				<div class="row row-sm">
					<div class="col-lg-12">
						<div class="card custom-card overflow-hidden">
							<div class="card-body">

								<div class="table-responsive  export-table">
									<table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
										<thead>
											<tr>
												<th class="border-bottom-0">S.no</th>
												<th class="border-bottom-0">Message ID</th>
												<th class="border-bottom-0">category</th>
												<th class="border-bottom-0">login type</th>
												<th class="border-bottom-0">user id</th>
												<th class="border-bottom-0">username</th>
												<th class="border-bottom-0">Subject</th>
												<th class="border-bottom-0">purpose</th>
												<th class="border-bottom-0">description</th>
												<th class="border-bottom-0">Attachment</th>
												<th class="border-bottom-0">date and time</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>TRMSG_621</td>
												<td>Inbox</td>
												<td>Student</td>
												<td>2871</td>
												<td>Lavanya.V</td>
												<td>Medical coding</td>
												<td>query</td>
												<td>Sir documentation is not opening sir please can you solve this
													problem as early as possible </td>
												<td><a target="_blank" href="../images/chat/add_attachments/6494478b926da16874392215582276110032337182469.jpg">
														<button type="submit" class="btn btn-info mt-3 mb-0" name="add_attachments">Download</button></a></td>
												<td>2023-06-22 18:37:23</td>
											</tr>
											<tr>
												<td>2</td>
												<td>TRMSG_622</td>
												<td>Inbox</td>
												<td>Student</td>
												<td>2871</td>
												<td>Lavanya.V</td>
												<td>Medical coding</td>
												<td>query</td>
												<td>Sir documentation is not opening sir please can you solve this
													problem as early as possible </td>
												<td><a target="_blank" href="../images/chat/add_attachments/649447c1dab7216874392215582276110032337182469.jpg">
														<button type="submit" class="btn btn-info mt-3 mb-0" name="add_attachments">Download</button></a></td>
												<td>2023-06-22 18:38:17</td>
											</tr>
											<tr>
												<td>3</td>
												<td>TRMSG_626</td>
												<td>Inbox</td>
												<td>Student</td>
												<td>2664</td>
												<td>Mamata Venagi </td>
												<td>Full stack developer</td>
												<td>General</td>
												<td>Higher order function</td>
												<td><a target="_blank" href="../images/chat/add_attachments/64982d3de7880IMG_20230625_173201.jpg">
														<button type="submit" class="btn btn-info mt-3 mb-0" name="add_attachments">Download</button></a></td>
												<td>2023-06-25 17:34:13</td>
											</tr>
											<tr>
												<td>4</td>
												<td>TRMSG_631</td>
												<td>Inbox</td>
												<td>College</td>
												<td>61</td>
												<td>Demo Degree College</td>
												<td>Better</td>
												<td>feedback</td>
												<td>Better</td>
												<td><a target="_blank" href="../images/chat/add_attachments/6499581c09b28bird 03-01.png">
														<button type="submit" class="btn btn-info mt-3 mb-0" name="add_attachments">Download</button></a></td>
												<td>2023-06-26 14:49:24</td>
											</tr>
											<tr>
												<td>5</td>
												<td>TRMSG_632</td>
												<td>Outbox</td>
												<td>College</td>
												<td>61</td>
												<td>Demo Degree College</td>
												<td>khebqefehk</td>
												<td>query</td>
												<td>hqebihfiheq</td>
												<td><a target="_blank" href="../images/chat/add_attachments/6499598e98def123.png">
														<button type="submit" class="btn btn-info mt-3 mb-0" name="add_attachments">Download</button></a></td>
												<td>2023-06-26 14:55:34</td>
											</tr>
											<tr>
												<td>6</td>
												<td>TRMSG_642</td>
												<td>Inbox</td>
												<td>Student</td>
												<td>4232</td>
												<td>Nimalpalli Shaik Ashwak</td>
												<td>Course problem</td>
												<td>query</td>
												<td>I have Applied for the course python why my applied course is not
													seen in the my course option</td>
												<td><a target="_blank" href="../images/chat/add_attachments/64d5f1900cefdIMG-20230811-WA0002 (1).jpg">
														<button type="submit" class="btn btn-info mt-3 mb-0" name="add_attachments">Download</button></a></td>
												<td>2023-08-11 14:00:08</td>
											</tr>
											<tr>
												<td>7</td>
												<td>TRMSG_643</td>
												<td>Inbox</td>
												<td>Student</td>
												<td></td>
												<td>Nimalpalli Shaik Ashwak</td>
												<td>Error </td>
												<td>issue</td>
												<td>Sir I am having a problem to access the recoded sessions so kindly
													fix that issue </td>
												<td><a target="_blank" href="../images/chat/add_attachments/64dc75b6ca620Screenshot_2023-08-16-12-36-59-674_com.android.chrome.jpg">
														<button type="submit" class="btn btn-info mt-3 mb-0" name="add_attachments">Download</button></a></td>
												<td>2023-08-16 12:37:34</td>
											</tr>
											<tr>
												<td>8</td>
												<td>TRMSG_644</td>
												<td>Outbox</td>
												<td>Trainer</td>
												<td>56</td>
												<td>Akhila V</td>
												<td>hi</td>
												<td>query</td>
												<td>bye</td>
												<td><a target="_blank" href="../images/chat/add_attachments/6512a2bf7de9bDigital form.pdf">
														<button type="submit" class="btn btn-info mt-3 mb-0" name="add_attachments">Download</button></a></td>
												<td>2023-09-26 14:52:07</td>
											</tr>
											<tr>
												<td>9</td>
												<td>TRMSG_645</td>
												<td>Inbox</td>
												<td>Student</td>
												<td>4620</td>
												<td> Shaik .faridha</td>
												<td>Course </td>
												<td>issue</td>
												<td>After applied for the course, but that same course is not showing in
													'my course' </td>
												<td><a target="_blank" href="../images/chat/add_attachments/6517996561af8Screenshot_2023-09-30-09-13-15-319_com.android.chrome.png">
														<button type="submit" class="btn btn-info mt-3 mb-0" name="add_attachments">Download</button></a></td>
												<td>2023-09-30 09:13:33</td>
											</tr>
											<tr>
												<td>10</td>
												<td>TRMSG_646</td>
												<td>Inbox</td>
												<td>Student</td>
												<td>4738</td>
												<td>P chandrakala</td>
												<td>Java</td>
												<td>issue</td>
												<td>Can apply for java course but approval kaledhu madam </td>
												<td><a target="_blank" href="../images/chat/add_attachments/651fdf5185a69Resume_Padigeri chandrakala_Format2.pdf">
														<button type="submit" class="btn btn-info mt-3 mb-0" name="add_attachments">Download</button></a></td>
												<td>2023-10-06 15:50:01</td>
											</tr>
											<tr>
												<td>11</td>
												<td>TRMSG_654</td>
												<td>Inbox</td>
												<td>Student</td>
												<td>4867</td>
												<td>Nvnugopal</td>
												<td>Medical coding</td>
												<td>query</td>
												<td>Endocrine anatomy</td>
												<td><a target="_blank" href="../images/chat/add_attachments/6540cd18090bdResume_Lilly_Format1.pdf">
														<button type="submit" class="btn btn-info mt-3 mb-0" name="add_attachments">Download</button></a></td>
												<td>2023-10-31 15:17:04</td>
											</tr>
											<tr>
												<td>12</td>
												<td>TRMSG_655</td>
												<td>Inbox</td>
												<td>Student</td>
												<td>4738</td>
												<td>P chandrakala</td>
												<td>java</td>
												<td>issue</td>
												<td>2 months internship java bur 6 months internship converted into
													digital marketing</td>
												<td><a target="_blank" href="../images/chat/add_attachments/655b261c6f7a2resume.pdf">
														<button type="submit" class="btn btn-info mt-3 mb-0" name="add_attachments">Download</button></a></td>
												<td>2023-11-20 14:55:48</td>
											</tr>
											<tr>
												<td>13</td>
												<td>TRMSG_656</td>
												<td>Inbox</td>
												<td>Student</td>
												<td>20</td>
												<td>GUTTAVALLI PAVAN KALYAN</td>
												<td>kk</td>
												<td>feedback</td>
												<td>kk</td>
												<td><a target="_blank" href="../images/chat/add_attachments/65a8f307db0aclord-shiva.jpg">
														<button type="submit" class="btn btn-info mt-3 mb-0" name="add_attachments">Download</button></a></td>
												<td>2024-01-18 15:14:39</td>
											</tr>




										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Row -->

				<div class="modal fade" id="upload">
					<div class="modal-dialog" role="document">
						<div class="modal-content modal-content-demo">
							<div class="modal-header">
								<h6 class="modal-title">Reply</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								<div class="col-md-12">
									<div class="form-group">
										<label for="exampleInputCompanyPhone" style="color:#ff6700"><b>Subject</b></label>
										<input type="text" class="form-control" id="exampleInputCompanyPhone" placeholder="Enter Subject">
									</div>
								</div>


								<div class="col-md-12">
									<div class="form-label">
										<label for="exampleInputAadhar" style="color:#ff6700"><b>Describe</b></label>
										<textarea class="form-control" placeholder="Textarea"></textarea>
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<label for="exampleInputcode">add attachments</label>
										<input type="file" class="form-control" id="exampleInputcode" placeholder="">
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button class="btn ripple btn-success" type="button">reply</button>
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

								<p> Are you sure you want to reject a schedule??</p>
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
	<?php include("./style.php"); ?>
</body>

</html>