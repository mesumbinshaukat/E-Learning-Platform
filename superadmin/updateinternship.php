<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['superadmin_username']) && !isset($_COOKIE['superadmin_password'])) {
	header('location: ../super-admin_login.php');
	exit();
}

if (!isset($_GET["id"])) {
	header('location: ./manageinternship.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title>Internship Management</title>
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
                <?php include("./partials/navbar.php") ?>
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
                        <span class="main-content-title mg-b-0 mg-b-lg-1">View Internship</span>
                    </div>
                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="javascript:void(0);">Internship</a></li>
                            <li class="breadcrumb-item " aria-current="page">view</li>
                        </ol>
                    </div>
                </div>
                <!-- /breadcrumb -->


                <!-- /row -->

                <!-- row -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <?php
								$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
								$id = (int) $id;
								$sql = "SELECT * FROM `internship` WHERE `id` = $id";
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									$fetch = mysqli_fetch_assoc($result);

								?>
                                <div id="wizard3">
                                    <h3>Overview</h3>
                                    <section>
                                        <div class="control-group form-group">
                                            <label class="form-label">Company Name</label>
                                            <input type="text" class="form-control" placeholder="Course Name"
                                                value="<?php echo $fetch['company_name']; ?>">
                                        </div>
                                        <div class="control-group form-group">
                                            <label class="form-label">Internship Title</label>
                                            <input type="text" class="form-control" placeholder="Title"
                                                value="<?php echo $fetch['internship']; ?>">
                                        </div>
                                        <div class="control-group form-group">
                                            <label class="form-label">Industry</label>
                                            <input type="text" class="form-control" placeholder="Stream"
                                                value="<?php echo $fetch["industry"] ?>">
                                        </div>
                                        <div class="control-group form-group">
                                            <label class="form-label">Duration(Days)</label>
                                            <input type="number" class="form-control" placeholder="Duration(min)"
                                                value="<?php echo $fetch["duration_days"] ?>">
                                        </div>

                                        <div class="control-group form-group">
                                            <label class="form-label">Eligibility</label>
                                            <input type="text" class="form-control" placeholder="Eligibility"
                                                value="<?php echo $fetch["eligibility"] ?>">
                                        </div>
                                        <div class="control-group form-group">
                                            <label class="form-label">Location</label>
                                            <input type="" class="form-control" placeholder="Enter Location"
                                                value="<?php echo $fetch["location"] ?>">
                                        </div>
                                        <div class="control-group form-group">
                                            <label class="form-label">Internship Category</label>
                                            <input type="text" class="form-control" placeholder="Offline"
                                                value="<?php echo $fetch["internship_category"] ?>">
                                        </div>
                                        <div class="control-group form-group">
                                            <label class="form-label">Preferred For</label>
                                            <input type="text" class="form-control" placeholder="Both"
                                                value="<?php echo $fetch["gender"] ?>">
                                        </div>
                                        <div class="control-group form-group">
                                            <label class="form-label">Number of Vacancies</label>
                                            <input type="number" class="form-control" placeholder="Vaccancies Count"
                                                value="<?php echo $fetch["vacancies"] ?>">
                                        </div>
                                        <div class="control-group form-group">
                                            <label class="form-label">Last Date to apply</label>
                                            <input type="text" class="form-control" name="last_date_to_apply"
                                                placeholder="YYYY\MM\DD"
                                                value="<?php echo $fetch["last_date_to_apply"] ?>">
                                        </div>

                                        <div class="control-group form-group">
                                            <label class="form-label">Certification</label>
                                            <input type="text" class="form-control" placeholder="Yes"
                                                value="<?php echo $fetch["certification"] ?>">
                                        </div>


                                    </section>
                                    <h3> Full information</h3>
                                    <section>

                                        <label class="form-label">Full Description</label>
                                        <div class="form-label">
                                            <input class="form-control" placeholder="Textarea" rows="5"
                                                value="<?php echo $fetch["full-description"] ?>"></input>
                                        </div>


                                        <label class="form-label"> Pre-Requirements</label>
                                        <div class="form-label">
                                            <input class="form-control" placeholder="Textarea" rows="5"
                                                value="<?php echo $fetch["pre-requirements"] ?>"></input>
                                        </div>

                                        <label class="form-label">additional information</label>
                                        <div class="form-label">
                                            <input class="form-control" placeholder="Textarea" rows="3"
                                                value="<?php echo $fetch["additional_info"] ?>">
                                        </div>

                                    </section>
                                    <h3>Pricings </h3>
                                    <section>
                                        <div class="control-group form-group">
                                            <label class="form-label">Internship Type</label>
                                            <select class="form-control form-select select2" name="internship_type"
                                                data-bs-placeholder="Internship Type" required>
                                                <?php  switch($fetch["internship_type"]){
														case "Paid":
															echo '<option value="Paid" selected>Paid</option>
															<option value="Free">Free</option>
															<option value="Stipend">Stipend</option>';
															break;
														case "Free":
															echo '<option value="Paid">Paid</option>
															<option value="Free" selected>Free</option>
															<option value="Stipend">Stipend</option>';
															break;
														case "Stipend":
															echo '<option value="Paid">Paid</option>
															<option value="Free">Free</option>
															<option value="Stipend" selected>Stipend</option>';
															break;
														default:
															echo '<option value="Paid">Paid</option>
															<option value="Free">Free</option>
															<option value="Stipend">Stipend</option>';
															break;
													} ?>

                                            </select>

                                        </div>

                                        <div class="control-group form-group">
                                            <label class="form-label">Food Allowances</label>
                                            <input type="text" class="form-control" placeholder="Yes"
                                                value="<?php echo $fetch["food_allowances"] ?>">
                                        </div>

                                        <div class="control-group form-group">
                                            <label class="form-label">Transport Allowances</label>
                                            <input type="text" class="form-control" placeholder="Yes"
                                                value="<?php echo $fetch["transport_allowances"] ?>">
                                        </div>

                                    </section>
                                    <h3>Uploadings </h3>
                                    <section>

                                        <div class="control-group form-group">
                                            <label class="form-label">Main Image</label>
                                            <a download=""
                                                href="./assets/img/internship/<?php echo $fetch["main_image"] ?>"
                                                class="btn btn-primary mt-3 mb-0" style="text-align:right">Download</a>
                                        </div>
                                        <div class="control-group form-group">
                                            <label class="form-label">Inner image</label>
                                            <a download=""
                                                href="<?php echo "./assets/img/internship/" . $fetch["inner_image"] ?>"
                                                class="btn btn-primary mt-3 mb-0" style="text-align:right">Download</a>
                                        </div>

                                    </section>
                                </div>

                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row closed -->


            </div>
            <!-- Container closed -->
        </div>
        <!-- main-content closed -->



    </div>
    <!-- End Page -->
    <?php include("./scripts.php") ?>
</body>

</html>