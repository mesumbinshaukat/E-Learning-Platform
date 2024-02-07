
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
			   <?php include('./partials/navbar.php')?>
				</div>
				<!-- /main-header -->
				 <!-- main-sidebar -->
 <div class="sticky">
 <?php include('./partials/sidebar.php')?>
				</div>
				<!-- main-sidebar -->

			</div>			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

                    
<div class="breadcrumb-header justify-content-between">
						<div class="right-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Apply Trainer Course </span> 
						</div>
						
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
							
								<li class="breadcrumb-item ">Apply</li>
								<li class="breadcrumb-item ">Trainer</li>
							</ol>
						</div>
 
					</div>
				<!--	<div class="row row-sm">
			
								&nbsp &nbsp 		<a href="" class="btn btn-success" data-bs-target="#allocate" data-bs-toggle="modal">Apply Courses</a>	
                                               								
									</div> -->
									
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
											
														<th class="border-bottom-0">Course ID</th>
														<th class="border-bottom-0">Course name</th>
														<th class="border-bottom-0">Price</th>
														<th class="border-bottom-0">Duration</th>
														<th class="border-bottom-0">View</th>
														<th class="border-bottom-0">Apply</th>
											
												
														
														
														
													</tr>
												</thead>
												<tbody>
																									
													<tr>
														<td>1</td>
														<td>COURSE_05</td>
														<td>Java Script</td>											
														<td>5400</td>											
														<td>90</td>											
														<td><a href="viewcourse.php?id=5" class="btn btn-primary">view</a></td>
																																										<td>
																												 <button class="btn btn-info mb-3 shadow"><a href="../superadmin/connection_files/allocation/applytrainer.php?crid=5&trid="><span style="color:#ffffff;">Apply</span></a></button> &nbsp &nbsp 

										   	
														</td>
													</tr>

												
													<tr>
														<td>2</td>
														<td>COURSE_06</td>
														<td>Cloud computing </td>											
														<td>5400</td>											
														<td>90</td>											
														<td><a href="viewcourse.php?id=6" class="btn btn-primary">view</a></td>
																																										<td>
																												 <button class="btn btn-info mb-3 shadow"><a href="../superadmin/connection_files/allocation/applytrainer.php?crid=6&trid="><span style="color:#ffffff;">Apply</span></a></button> &nbsp &nbsp 

										   	
														</td>
													</tr>

												
													<tr>
														<td>3</td>
														<td>COURSE_07</td>
														<td>My SQL </td>											
														<td>5400</td>											
														<td>90</td>											
														<td><a href="viewcourse.php?id=7" class="btn btn-primary">view</a></td>
																																										<td>
																												 <button class="btn btn-info mb-3 shadow"><a href="../superadmin/connection_files/allocation/applytrainer.php?crid=7&trid="><span style="color:#ffffff;">Apply</span></a></button> &nbsp &nbsp 

										   	
														</td>
													</tr>

												
													<tr>
														<td>4</td>
														<td>COURSE_08</td>
														<td>Human resource management </td>											
														<td>5400</td>											
														<td>90</td>											
														<td><a href="viewcourse.php?id=8" class="btn btn-primary">view</a></td>
																																										<td>
																												 <button class="btn btn-info mb-3 shadow"><a href="../superadmin/connection_files/allocation/applytrainer.php?crid=8&trid="><span style="color:#ffffff;">Apply</span></a></button> &nbsp &nbsp 

										   	
														</td>
													</tr>

												
													<tr>
														<td>5</td>
														<td>COURSE_09</td>
														<td>US Taxation</td>											
														<td>5400</td>											
														<td>90</td>											
														<td><a href="viewcourse.php?id=9" class="btn btn-primary">view</a></td>
																																										<td>
																												 <button class="btn btn-info mb-3 shadow"><a href="../superadmin/connection_files/allocation/applytrainer.php?crid=9&trid="><span style="color:#ffffff;">Apply</span></a></button> &nbsp &nbsp 

										   	
														</td>
													</tr>

												
													<tr>
														<td>6</td>
														<td>COURSE_010</td>
														<td>Voice process</td>											
														<td>5400</td>											
														<td>90</td>											
														<td><a href="viewcourse.php?id=10" class="btn btn-primary">view</a></td>
																																										<td>
																												 <button class="btn btn-info mb-3 shadow"><a href="../superadmin/connection_files/allocation/applytrainer.php?crid=10&trid="><span style="color:#ffffff;">Apply</span></a></button> &nbsp &nbsp 

										   	
														</td>
													</tr>

												
													<tr>
														<td>7</td>
														<td>COURSE_011</td>
														<td>Income Tax</td>											
														<td>5400</td>											
														<td>90</td>											
														<td><a href="viewcourse.php?id=11" class="btn btn-primary">view</a></td>
																																										<td>
																												 <button class="btn btn-info mb-3 shadow"><a href="../superadmin/connection_files/allocation/applytrainer.php?crid=11&trid="><span style="color:#ffffff;">Apply</span></a></button> &nbsp &nbsp 

										   	
														</td>
													</tr>

												
													<tr>
														<td>8</td>
														<td>COURSE_012</td>
														<td>Non Voice Process</td>											
														<td>5400</td>											
														<td>90</td>											
														<td><a href="viewcourse.php?id=12" class="btn btn-primary">view</a></td>
																																										<td>
																												 <button class="btn btn-info mb-3 shadow"><a href="../superadmin/connection_files/allocation/applytrainer.php?crid=12&trid="><span style="color:#ffffff;">Apply</span></a></button> &nbsp &nbsp 

										   	
														</td>
													</tr>

												
													<tr>
														<td>9</td>
														<td>COURSE_013</td>
														<td>Transcription</td>											
														<td>5400</td>											
														<td>90</td>											
														<td><a href="viewcourse.php?id=13" class="btn btn-primary">view</a></td>
																																										<td>
																												 <button class="btn btn-info mb-3 shadow"><a href="../superadmin/connection_files/allocation/applytrainer.php?crid=13&trid="><span style="color:#ffffff;">Apply</span></a></button> &nbsp &nbsp 

										   	
														</td>
													</tr>

												
													<tr>
														<td>10</td>
														<td>COURSE_014</td>
														<td>Translation</td>											
														<td>5400</td>											
														<td>90</td>											
														<td><a href="viewcourse.php?id=14" class="btn btn-primary">view</a></td>
																																										<td>
																												 <button class="btn btn-info mb-3 shadow"><a href="../superadmin/connection_files/allocation/applytrainer.php?crid=14&trid="><span style="color:#ffffff;">Apply</span></a></button> &nbsp &nbsp 

										   	
														</td>
													</tr>

												
													<tr>
														<td>11</td>
														<td>COURSE_016</td>
														<td>Digital Marketing </td>											
														<td>5400</td>											
														<td>90</td>											
														<td><a href="viewcourse.php?id=16" class="btn btn-primary">view</a></td>
																																										<td>
																												 <button class="btn btn-info mb-3 shadow"><a href="../superadmin/connection_files/allocation/applytrainer.php?crid=16&trid="><span style="color:#ffffff;">Apply</span></a></button> &nbsp &nbsp 

										   	
														</td>
													</tr>

												
													<tr>
														<td>12</td>
														<td>COURSE_017</td>
														<td>Tally + GST</td>											
														<td>5400</td>											
														<td>90</td>											
														<td><a href="viewcourse.php?id=17" class="btn btn-primary">view</a></td>
																																										<td>
																												 <button class="btn btn-info mb-3 shadow"><a href="../superadmin/connection_files/allocation/applytrainer.php?crid=17&trid="><span style="color:#ffffff;">Apply</span></a></button> &nbsp &nbsp 

										   	
														</td>
													</tr>

												
													<tr>
														<td>13</td>
														<td>COURSE_028</td>
														<td>Python</td>											
														<td>5400</td>											
														<td>90</td>											
														<td><a href="viewcourse.php?id=28" class="btn btn-primary">view</a></td>
																																										<td>
																												 <button class="btn btn-info mb-3 shadow"><a href="../superadmin/connection_files/allocation/applytrainer.php?crid=28&trid="><span style="color:#ffffff;">Apply</span></a></button> &nbsp &nbsp 

										   	
														</td>
													</tr>

												
													<tr>
														<td>14</td>
														<td>COURSE_032</td>
														<td>JAVA</td>											
														<td>5400</td>											
														<td>90</td>											
														<td><a href="viewcourse.php?id=32" class="btn btn-primary">view</a></td>
																																										<td>
																												 <button class="btn btn-info mb-3 shadow"><a href="../superadmin/connection_files/allocation/applytrainer.php?crid=32&trid="><span style="color:#ffffff;">Apply</span></a></button> &nbsp &nbsp 

										   	
														</td>
													</tr>

												
													<tr>
														<td>15</td>
														<td>COURSE_033</td>
														<td>Web Technologies</td>											
														<td>6400</td>											
														<td>90</td>											
														<td><a href="viewcourse.php?id=33" class="btn btn-primary">view</a></td>
																																										<td>
																												 <button class="btn btn-info mb-3 shadow"><a href="../superadmin/connection_files/allocation/applytrainer.php?crid=33&trid="><span style="color:#ffffff;">Apply</span></a></button> &nbsp &nbsp 

										   	
														</td>
													</tr>

												
													<tr>
														<td>16</td>
														<td>COURSE_034</td>
														<td>Medical Coding & Transcription</td>											
														<td>6400</td>											
														<td>90</td>											
														<td><a href="viewcourse.php?id=34" class="btn btn-primary">view</a></td>
																																										<td>
																												 <button class="btn btn-info mb-3 shadow"><a href="../superadmin/connection_files/allocation/applytrainer.php?crid=34&trid="><span style="color:#ffffff;">Apply</span></a></button> &nbsp &nbsp 

										   	
														</td>
													</tr>

												
													<tr>
														<td>17</td>
														<td>COURSE_038</td>
														<td>Power BI & Tableau</td>											
														<td>5400</td>											
														<td>60</td>											
														<td><a href="viewcourse.php?id=38" class="btn btn-primary">view</a></td>
																																										<td>
																												 <button class="btn btn-info mb-3 shadow"><a href="../superadmin/connection_files/allocation/applytrainer.php?crid=38&trid="><span style="color:#ffffff;">Apply</span></a></button> &nbsp &nbsp 

										   	
														</td>
													</tr>

												
													<tr>
														<td>18</td>
														<td>COURSE_039</td>
														<td>AI & ML</td>											
														<td>2700</td>											
														<td>60</td>											
														<td><a href="viewcourse.php?id=39" class="btn btn-primary">view</a></td>
																																										<td>
																												 <button class="btn btn-info mb-3 shadow"><a href="../superadmin/connection_files/allocation/applytrainer.php?crid=39&trid="><span style="color:#ffffff;">Apply</span></a></button> &nbsp &nbsp 

										   	
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

    
		               <div class="modal fade" id="allocate">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <p> Are you sure you want to apply for courses?</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-success" type="button">Apply</button>
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

	    <?php 
	 include('./script.php'); 
	  ?>
    </body>

<!-- Mirrored from laravel8.spruko.com/nowa/table-data by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:32:58 GMT -->
</html>
