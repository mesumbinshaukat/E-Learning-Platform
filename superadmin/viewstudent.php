<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['superadmin_username']) && !isset($_COOKIE['superadmin_password'])) {
	header('location: ../super-admin_login.php');
	exit();
}
$_SESSION['previous_url'] = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">


<head>
	<title>View Student</title>
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="">
	<?php include("./style.php") ?>
</head>

<body class="ltr main-body app sidebar-mini">
	<?php include("./switcher.php"); ?>
	<!-- Page -->
	<div class="page">

		<div>

			<div class="main-header side-header sticky nav nav-item">
				<?php include("./partials/navbar.php"); ?>
			</div>
			<!-- /main-header -->

			<!-- main-sidebar -->
			<div class="sticky">
				<?php include("./partials/sidebar.php"); ?>
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
						<span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> view Student</span>
					</div>
					<div class="justify-content-center mt-2">
						<ol class="breadcrumb">
							<li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Credentials</a></li>
							<li class="breadcrumb-item active" aria-current="page">Student</li>
							<li class="breadcrumb-item active" aria-current="page">view</li>
						</ol>
					</div>
				</div>
				<!-- /breadcrumb -->

				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">


								<div class="">
									<div class="row row-xs formgroup-wrapper">
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputName">Student Name</label>
												<input readonly type="text" class="form-control" id="exampleInputName" name="student_name" value="demo2025">
												<input type="hidden" name="id" value="879">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputCompanyPhone"> Gender</label>
												<input readonly type="text" class="form-control" id="exampleInputName" name="gender" value="male">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputDOB">Date of Birth</label>
												<input readonly type="text" class="form-control" id="exampleInputName" name="date_of_birth" value="2000-05-10">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputPersonalPhone"> Phone Number</label>
												<input readonly type="text" class="form-control" id="exampleInputName" name="phone_number" value="9878564865">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputPersonalPhone"> Alternative Phone Number</label>
												<input readonly type="text" class="form-control" id="exampleInputName" name="alternative_phone_number" value="9632586458">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputPerEmail">Mail Id</label>
												<input readonly type="text" class="form-control" id="exampleInputName" name="mail_id" value="demo22020@gmail.com">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputPerEmail">address</label>
												<input readonly type="text" class="form-control" id="exampleInputName" name="address" value="Hyderabad">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputPerEmail">District</label>
												<input type="text" class="form-control" name="district" id="exampleInputPerEmail" value="Hyderabad">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputPerEmail">State</label>
												<input type="text" class="form-control" name="state" id="exampleInputPerEmail" value="ANDHRA PRADESH">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputPerEmail">PIN code</label>
												<input type="number" class="form-control" name="pincode" id="exampleInputPerEmail" value="500016">
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
												<input type="text" class="form-control " name="stream" id="exampleInputPerEmail" value="BSC">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputPerEmail">Account type</label>
												<input readonly type="text" class="form-control" id="exampleInputName" name="account_type" value="college">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputPerEmail">Institution Name</label>
												<input readonly type="text" class="form-control" id="exampleInputName" name="institution_name" value="Demo Degree College">
											</div>
										</div>











										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputUserName">Student Username</label>
												<input readonly type="text" class="form-control" id="exampleInputName" name="student_username" value="demo2025">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputPassword">Password</label>
												<input readonly type="text" class="form-control" id="exampleInputName" name="password" value="demo2025">
											</div>
										</div>


										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputcode"> request Author</label>
												<input readonly type="text" class="form-control" id="exampleInputName" disabled placeholder="">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputcode">ID no</label>
												<input readonly type="text" class="form-control" id="exampleInputName" value="TRSTU_879">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputcode">Date of Request</label>
												<input readonly type="text" class="form-control" id="exampleInputName" name="created_date" value="2023-04-10 12:02:38 ">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputcode">Date of acceptance</label>
												<input readonly type="text" class="form-control" id="exampleInputName" value="2023-04-10 12:05:18">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputcode"> Approved Author</label>
												<input readonly type="text" class="form-control" id="exampleInputName" disabled placeholder="">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label for="exampleInputcode">Student CV</label><br>
												<a target="_blank" href="https://triaright.com/images/students/cv/647ed8050fd29123.png">
													<button type="submit" class="btn btn-primary mt-3 mb-0" name="upload_cv" style="text-align:right">Download</button></a>
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
	</div>
	<?php include("./scripts.php") ?>
</body>

</html>