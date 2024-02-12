<!DOCTYPE html>
<html lang="en">


<head>
	<title>Allocate Student Internship</title>
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="">
	<?php include("./style.php") ?>
</head>

<body class="ltr main-body app sidebar-mini">
	<?php include("./switcher.php") ?>

	<!-- Page -->
	<div class="page">

		<div>

			<div class="main-header side-header sticky nav nav-item">
				<?php include("./partials/navbar.php"); ?>
			</div>
			<!-- /main-header -->

			<!-- main-sidebar -->
			<div class="sticky">
				<?php include("./partials/sidebar.php") ?>
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
						<span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Allocate Student</span>
					</div>
					<div class="justify-content-center mt-2">
						<ol class="breadcrumb">
							<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Allocate</a></li>
							<li class="breadcrumb-item active" aria-current="page">Student</li>
							<li class="breadcrumb-item active" aria-current="page">Add</li>
						</ol>
					</div>
				</div>
				<!-- /breadcrumb -->

				<!-- row -->
				<form action="https://triaright.com/superadmin/connection_files/create/allocate_student.php" method="POST">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">


									<div class="">
										<div class="row row-xs formgroup-wrapper">
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputName">Student Name</label>
													<input readonly type="text" class="form-control" id="exampleInputName" name="student_name" value="GONDELA MEENA">
													<input type="hidden" name="id" value="2">
													<input type="hidden" name="type" value="">
													<input type="hidden" name="crid" value="">
													<input type="hidden" name="sid" value="2">

												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputCompanyPhone"> Gender</label>
													<input readonly type="text" class="form-control" id="exampleInputName" name="gender" value="female">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputDOB">Date of Birth</label>
													<input readonly type="text" class="form-control" id="exampleInputName" name="date_of_birth" value="0000-00-00">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPersonalPhone"> Phone Number</label>
													<input readonly type="text" class="form-control" id="exampleInputName" name="phone_number" value="8341087923">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPersonalPhone"> Alternative Phone
														Number</label>
													<input readonly type="text" class="form-control" id="exampleInputName" name="alternative_phone_number" value="0">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPerEmail">Mail Id</label>
													<input readonly type="text" class="form-control" id="exampleInputName" name="mail_id" value="GondelaRamesh@gmail.com">
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPerEmail">address</label>
													<input readonly type="text" class="form-control" id="exampleInputName" name="address" value="">
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPerEmail">District</label>
													<input readonly type="text" class="form-control" name="district" id="exampleInputPerEmail" value="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPerEmail">State</label>
													<input type="text" class="form-control" name="state" id="exampleInputPerEmail" readonly value="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPerEmail">PIN code</label>
													<input type="number" class="form-control" name="pincode" id="exampleInputPerEmail" readonly value="">
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPerEmail">Qualification</label>
													<input readonly type="text" class="form-control" id="exampleInputName" name="qualification" value="degree">
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPerEmail">Semester</label>
													<input readonly type="text" class="form-control" id="exampleInputName" name="semester" value="6thsem">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPerEmail">Branch/Stream</label>
													<input type="text" class="form-control" readonly name="stream" id="exampleInputPerEmail" value="BA">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputPerEmail">Account type</label>
													<input readonly type="text" class="form-control" id="exampleInputName" name="account_type" value="college">
												</div>
											</div>


											<button type="submit" name="submit" class="btn btn-success mt-3 mb-0" style="text-align:right">Add for Internship</button> &nbsp &nbsp
											<button type="button" class="btn btn-danger mt-3 mb-0" data-bs-target="#modaldemo1" data-bs-toggle="modal" style="text-align:right">Cancel</button>







										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


				</form>

			</div>
			<!-- Container closed -->
		</div>

	</div>
	<!-- End Page -->

	<?php include("./scripts.php"); ?>
</body>

</html>