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

	<?php include("./switcher.php"); ?>
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
						<span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Student List </span>
					</div>

					<div class="justify-content-center mt-2">
						<ol class="breadcrumb">
							<li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Credentials</a></li>
							<li class="breadcrumb-item ">Student</li>
							<li class="breadcrumb-item ">List</li>
						</ol>
					</div>

				</div>
				<form method="post">
					<div class="row row-sm">
						<div class="form-group col-md-3">
							<P><b> College Name</b> </p>



							<select name="institution_name" class="form-control form-select" data-bs-placeholder="Select Filter">
								<option value="All" selected="selected">All</option>
								<option value=" GNR Degree College"> GNR Degree College</option>
								<option value="GNR Degree College">GNR Degree College</option>

							</select>
						</div>
						<div class="form-group col-md-3">
							<P><b> Semester</b> </p>
							<select name="Semester" class="form-control form-select" data-bs-placeholder="Select Filter">
								<option value="All" selected="selected">All</option>
								<!-- <option value="none">none</option> -->
								<option value="1stSem">1st Sem</option>
								<option value="2ndSem">2nd Sem</option>
								<option value="3rdSem">3rd Sem</option>
								<option value="4thSem">4th Sem</option>
								<option value="5thSem">5nd Sem</option>
								<option value="6thSem">6nd Sem</option>
								<option value="7thSem">7nd Sem</option>
								<option value="8thSem">8nd Sem</option>
							</select>
						</div>
						<div class="form-group col-md-3">
							<P><b> Account Type</b> </p>
							<select name="account_type" class="form-control form-select" data-bs-placeholder="Select Filter">
								<option value="All" selected="selected">All</option>
								<!-- <option value="none">none</option> -->
								<option value="college">College type</option>
								<option value="individual">Individual type</option>
							</select>
						</div>
						<div class="form-group col-md-3">
							<P><b> Status</b> </p>

							<select name="user_status" class="form-control form-select" data-bs-placeholder="Select Filter">
								<option value="0">Active</option>
								<option value="1">blocked</option>
								<option value="2">Deleted</option>
								<option value="All" selected="selected">ALL</option>
							</select>
						</div>

						&nbsp &nbsp <button type="submit" class="btn btn-primary" style="height:40px;width:100px;margin-top:35px">Search</button>

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
												<th class="border-bottom-0">date of adding</th>
												<th class="border-bottom-0">ID No</th>
												<th class="border-bottom-0">Author</th>
												<th class="border-bottom-0">Student name</th>
												<th class="border-bottom-0">College</th>
												<th class="border-bottom-0">stream</th>
												<th class="border-bottom-0">District</th>

												<th class="border-bottom-0">User status</th>



											</tr>
										</thead>
										<tbody>


											<tr>
												<td>1</td>
												<td>2023-03-10 10:38:28</td>
												<td>TRSTU_2</td>
												<td></td>
												<td>GONDELA MEENA</td>
												<td> GNR Degree College</td>
												<td>BA</td>
												<td></td>


												<td style=color:#ff840a> <b> Blocked <b></td>
											</tr>


										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Row -->

			</div>
		</div>

	</div>
	<!-- Container closed -->

	<?php include("./scripts.php"); ?>

</body>


</html>