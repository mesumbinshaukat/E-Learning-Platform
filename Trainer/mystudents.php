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
		<title>My Students</title>

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

			</div>		


			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

                    
<div class="breadcrumb-header justify-content-between">
						<div class="right-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Student List </span> 
						</div>
						
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
						
								<li class="breadcrumb-item ">Student</li>
								<li class="breadcrumb-item ">List</li>
							</ol>
						</div>
 
					</div>
									<form method="post">
					<div class="row row-sm">

									<div class="form-group col-md-3">  
								<b>	<label>Batch id</label> </b>
																	            
										<select name="batch_id" class="form-control form-select" data-bs-placeholder="Select Filter">
										    
												<option value="ALL"  selected="selected">ALL</option>
                                                 <option value="17" >17</option>
                                                											</select>
									</div>

									&nbsp &nbsp	<button type="submit" class="btn btn-primary" name="search" style="height:40px;width:100px;margin-top:35px" value="search">Search</button>	
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
													<th class="border-bottom-0">S.No</th>
														<th class="border-bottom-0">Date of adding</th>
														<th class="border-bottom-0">ID No</th>
														<th class="border-bottom-0">Author</th>
														<th class="border-bottom-0">Batch ID</th>
														<th class="border-bottom-0">Batch Name</th>
														<th class="border-bottom-0">Student name</th>
														<th class="border-bottom-0">College</th>
														<th class="border-bottom-0">stream</th>
													
														<th class="border-bottom-0">View Profile</th>
														
														
														
													</tr>
												</thead>
												<tbody>
																									
														<tr>
														 
														<td> 1 </td>
														<td>2023-04-04 11:05:24</td> 
														<td>TRSTU_786</td>
														<td></td>
															<td>TRSTBA_17</td>
															<td>Human Resources Management Batch 1 Madhu</td>
														<td>Kumbha koteswari</td>
														 <td>S V S Degree College</td>
														 <td>B.sc</td>
														 
	                                  <td><a class="btn btn-info" href="studentprofile.php?id=786" >view</a></td>
	                                  	
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
                                    
                                    <p> Are you sure you want to Delete a student?</p>
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
                                    
                                    <p> Are you sure you want to Block a student?</p>
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
                                    
                                    <p> Are you sure you want to Unblock a student?</p>
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
