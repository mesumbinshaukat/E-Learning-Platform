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
	<title>Compose</title>
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
				<?php include('./partials/sidebar.php'); ?>
			</div>
			<!-- main-sidebar -->

		</div>
		<form action="connection_files/create/chat_create.php" method="POST" enctype="multipart/form-data">
			<!-- main-content -->
			<!-- main-content -->
			<div class="main-content app-content">

				<!-- container -->
				<div class="main-container container-fluid">


					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="left-content">
							<span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Compose Mail</span>
						</div>

					</div>
					<div class="card">
						<div class="card-body">

							<div class="row row-sm">
								<div class="form-group col-md-6">
									<label for="dropdown">Recipient</label>
									<select id="dropdown1" onchange="showOptions1()" name="Receipant" required class="form-control form-select select2" data-bs-placeholder="Select Country">

										<option value="College">College</option>
										<!-- <option value="CollegeMentor">College-Mentor</option> -->
										<option value="Trainer">Trainer</option>
										<option value="Student">Student</option>
									</select>
								</div>
								<div class="form-group col-md-6">
									<label for="dropdown">Sending format</label>
									<select id="dropdown" onchange="showOptions1()" name="Sending_format" required class="form-control form-select select2" data-bs-placeholder="Select Country">
										<option value="All">All</option>
										<option value="Individuals">Individuals</option>
										<option id="batch" style="display:none;" value="batches">Batches</option>
									</select>
								</div>
								<div class="form-group col-md-12" id="optionsDiv">
									<label for="exampleInputAadhar" hidden>User ID</label>
									<select name="User_ID" hidden required class="form-control form-select select2" data-bs-placeholder="Select Country">
										<option value="ALL"></option>
									</select>
								</div>

								<script>
									function showOptions1() {
										var harsha = document.getElementById("dropdown1").value;
										if (harsha === "Student") {
											document.getElementById("batch").style.display = "unset";

											var selectedOption = document.getElementById("dropdown").value;
											if (selectedOption === "Individuals") {
												document.getElementById("optionsDiv").innerHTML = `

<label for="exampleInputAadhar">User ID</label>
<select name="User_ID" required class="form-control form-select select2" data-bs-placeholder="Select Student">

	
</select>

`;
											} else if (selectedOption === "batches") {
												document.getElementById("optionsDiv").innerHTML = `
				<div class="form-group col-md-6">
											<label for="exampleInputAadhar">Select batch</label>
										<select name="Select_batch" required class="form-control form-select select2" data-bs-placeholder="Select Batch">
																				
</select>

`;
											} else if (selectedOption === "batches") {
												document.getElementById("dropdown").innerHTML = `<select id="dropdown" onchange="showOptions1()" name="Sending_format" required class="form-control form-select select2" data-bs-placeholder="Select Batch">
										   
											<option value="All">All</option>
											<option value="Individuals">Individuals</option>
											<option id="batch" style="display:none;" value="batches">batches</option>
											</select>`;
												document.getElementById("optionsDiv").innerHTML = "";
											} else {
												document.getElementById("optionsDiv").innerHTML = `
				<label for="exampleInputAadhar" hidden>User ID</label>
				<select name="User_ID" hidden required class="form-control form-select select2" data-bs-placeholder="Select Country">
				<option value="ALL"></option>
				</select>
				`;
											}
										} else if (harsha === "College") {
											document.getElementById("batch").style.display = "none";

											var selectedOption = document.getElementById("dropdown").value;
											if (selectedOption === "Individuals") {
												document.getElementById("optionsDiv").innerHTML = `

<label for="exampleInputAadhar">College ID</label>
<select name="User_ID" required class="form-control form-select select2" data-bs-placeholder="Select Country">
<?php
$college_query = mysqli_query($conn, "SELECT * FROM college");
$i = 1;
if (mysqli_num_rows($college_query) > 0) {
	while ($college = mysqli_fetch_assoc($college_query)) {
		echo "<option value='$i'>{$i}) {$college['name']}</option>";
		$i++;
	}
}
?>
</select>

`;
											} else if (selectedOption === "batches") {
												document.getElementById("dropdown").innerHTML = `<select id="dropdown" onchange="showOptions1()" name="Sending_format" required class="form-control form-select select2" data-bs-placeholder="Select Country">
										   
											<option value="All">All</option>
											<option value="Individuals">Individuals</option>
											<option id="batch" style="display:none;" value="Batches">batches</option>
											</select>`;
												document.getElementById("optionsDiv").innerHTML = "";
											} else {
												document.getElementById("optionsDiv").innerHTML = `
				<label for="exampleInputAadhar" hidden>User ID</label>
				<select name="User_ID" hidden required class="form-control form-select select2" data-bs-placeholder="Select Country">
				<option value="ALL"></option>
				</select>
				`;
											}
										} else if (harsha === "Trainer") {
											document.getElementById("batch").style.display = "none";

											var selectedOption = document.getElementById("dropdown").value;
											if (selectedOption === "Individuals") {
												document.getElementById("optionsDiv").innerHTML = `

<label for="exampleInputAadhar">User ID</label>
<select name="User_ID" required class="form-control form-select select2" data-bs-placeholder="Select Trainer">
	<?php
	$trainer_query = mysqli_query($conn, "SELECT * FROM trainer");
	$i = 1;
	if (mysqli_num_rows($trainer_query) > 0) {
		while ($trainer = mysqli_fetch_assoc($trainer_query)) {
			echo "<option value='$i'>{$i}) {$trainer['name']}</option>";
			$i++;
		}
	}
	?>										
</select>

`;
											} else if (selectedOption === "batches") {
												document.getElementById("dropdown").innerHTML = `<select id="dropdown" onchange="showOptions1()" name="Sending_format" required class="form-control form-select select2" data-bs-placeholder="Select Country">
										    <option selected value="NULL"></option>
											<option value="All">All</option>
											<option value="Individuals">Individuals</option>
											<option id="batch" style="display:none;" value="batches">batches</option>
											</select>`;
												document.getElementById("optionsDiv").innerHTML = "";
											} else {
												document.getElementById("optionsDiv").innerHTML = `
				<label for="exampleInputAadhar" hidden>User ID</label>
				<select name="User_ID" hidden required class="form-control form-select select2" data-bs-placeholder="Select Country">
				<option value="ALL"></option>
				</select>
				`;
											}
										} else {
											document.getElementById("batch").style.display = "none";
										}
									}
								</script>

							</div>


							<!-- row -->
							<div class="row">
								<div class="col-lg-12 col-md-12">


									<div class="">
										<div class="row row-xs formgroup-wrapper">


											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputCompanyPhone" style="color:#ff6700"><b>Subject</b></label>
													<input type="text" class="form-control" id="exampleInputCompanyPhone" placeholder="Enter Subject" name="Subject" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="exampleInputAadhar" style="color:#ff6700"><b>Purpose</b></label>
													<select name="Purpose" class="form-control form-select select2" data-bs-placeholder="Select Country" required>
														<option value="query">query</option>
														<option value="feedback">feedback</option>
														<option value="issue">issue</option>
														<option value="General">General</option>
													</select>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-label">
													<label for="exampleInputAadhar" style="color:#ff6700"><b>Describe</b></label>
													<input class="form-control" placeholder="Textarea" name="Describe" required>
												</div>
											</div>

											<div class="col-md-12">
												<div class="form-group">
													<label for="exampleInputcode">add attachments</label>
													<input type="file" class="form-control" id="exampleInputcode" placeholder="" name="add_attachments" required>
												</div>
											</div>

											<button type="submit" name="submit" class="btn btn-primary mt-3 mb-0" data-bs-target="#send" data-bs-toggle="modal" style="text-align:right">send</button>
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

	<?php include("./scripts.php"); ?>

</body>

</html>