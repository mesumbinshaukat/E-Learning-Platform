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

      
		<!-- Loader -->
		<!-- <div id="global-loader">
			<img src="assets/img/preloader.svg" class="loader-img" alt="Loader">
		</div> -->
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
			<form method="POST" enctype="multipart/form-data">

			
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">

                    
					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
						  <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Create Task</span>
						</div>
						<div class="justify-content-center mt-2">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="javascript:void(0);">Internship Management</a></li>
								<li class="breadcrumb-item active" aria-current="page">Task</li>
								<li class="breadcrumb-item active" aria-current="page">Create</li>
							</ol>
						</div>
					</div>
				
								
					<div class="form-group col-md-4">
    <select name="batch_id" required class="form-control form-select select2" data-bs-placeholder="Select Batch">
        <?php
        $trainer_id = $_COOKIE['trainer_id'];
        $batch = mysqli_query($conn, "SELECT * FROM `batch` WHERE `trainer_id` = '$trainer_id'");
        if (mysqli_num_rows($batch) > 0) {
            while ($row = mysqli_fetch_assoc($batch)) {
        ?>
                <option value="<?= $row['id'] ?>"><?= $row['batch_name'] ?></option>
        <?php
            }
        }

        ?>
    </select>
</div>

								<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									
									
								<div class="">
										<div class="row row-xs formgroup-wrapper">
									     <div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputDOB">Name of the Task</label>
												<input type="text" class="form-control" id="exampleInputName" name="batch_id" value="" hidden>
												<input class="form-control" id="dateMask" placeholder="Name" type="text" name="Name_of_the_Task" required>
											</div>
											</div>
											<div class="col-md-6">
											<div class="form-group">
										<label for="dropdown">allocated Students Type</label>
										<select  id="dropdown" onchange="showOptions1()" class="form-control form-select select2" data-bs-placeholder="Select Batch" name="allocated_Students_Type" required>
											<option value="All">All</option>
											<option value="Individual">Indiviudal</option>
										</select>
									        </div>
											</div>

										
							

							<div class="col-md-6" hidden>
											    <div class="form-group">
												<label for="exampleInputcode">Students List</label>
												<select class="form-control form-select select2" data-bs-placeholder="Select Batch" name="Students_List" required>
											<option value="All">All</option>
											</select>
										</div>
											</div>
											
												<div class="col-md-6">
											    <div class="form-group">
												<label for="exampleInputcode">Task Description</label>
												<input type="text" class="form-control"  id="exampleInputcode" placeholder="Task Description" name="Description" required>
											</div>
											</div>
											    <div class="col-md-6">
												<div class="form-group">
												<label for="exampleInputUserName">Task End Date</label>
												<input class="form-control" id="dateMask" placeholder="" type="date" name="Task_End_time" required>
											</div>
											</div>
																						
											
										   
											<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputcode"> Shared Documents</label>
												<input type="file" class="form-control" id="exampleInputcode" placeholder="" name="Shared_Documents">
											</div>
											</div>
										
										
											<div class="col-md-6" id="optionsDiv"></div>

										
										</div>
								<button type="submit" name="submit" class="btn btn-info mt-3 mb-0" data-bs-target="#schedule" data-bs-toggle="modal" style="text-align:right">add Task</button>
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
					

    
				</div>
				<!-- Container closed -->
			</div>
</form>



		</div>
		<!-- End Page -->

        <!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>
    </body>

	<?php include('./script.php')?>
</html>
