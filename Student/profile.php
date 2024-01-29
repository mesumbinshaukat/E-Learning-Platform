<?php
if (!isset($_COOKIE['student_username']) && !isset($_COOKIE['student_password'])) {
	header('location: ../student_login.php');
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
    <title>Profile</title>

    <?php include("./links.php"); ?>
</head>

<body class="ltr main-body app sidebar-mini">


    <!-- Loader -->
    <div id="global-loader">
        <img src="assets/img/preloader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">

        <div>
            <?php include("./partials/sidebar.php"); ?>
            <!-- main-content -->
            <div class="main-content app-content">

                <!-- container -->
                <div class="main-container container-fluid">


                    <!-- breadcrumb -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="left-content">
                            <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">MY Accounts</span>
                        </div>
                        <div class="justify-content-center mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /breadcrumb -->

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-body d-md-flex">
                                    <div class="">
                                        <span class="profile-image pos-relative">
                                            <img class="br-5" alt="" src="../images/students/profile/">

                                        </span>
                                    </div>
                                    <div class="my-md-auto mt-4 prof-details">
                                        <h4 class="font-weight-semibold ms-md-4 ms-0 mb-3 pb-0"> <span
                                                style="color:#ff6700"></h4>
                                        <!--<p class="tx-13 text-muted ms-md-4 ms-0 mb-2 pb-2 ">
										<span class="me-3"><i class="far fa-address-card me-2"></i>Gender
										</span>
										<span class="me-3"><i class="fa fa-taxi me-2"></i>DD/MM/YYYY</span>
										
									</p> -->
                                        <p class="text-muted ms-md-4 ms-0 mb-3"><span><i
                                                    class="fa fa-phone me-2"></i></span><span
                                                class="font-weight-semibold me-2">Phone:</span></span>
                                        </p>
                                        <p class="text-muted ms-md-4 ms-0 mb-3"><span><i
                                                    class="fa fa-envelope me-2"></i></span><span
                                                class="font-weight-semibold me-2">Email:</span></span>
                                        </p>
                                        <p class="text-muted ms-md-4 ms-0 mb-3"><span><i
                                                    class="far fa-flag me-2"></i></span><span
                                                class="font-weight-semibold me-2">Address:</span></span>
                                        </p>

                                        &nbsp
                                        <button class="btn btn-primary mb-3 shadow"><a
                                                href="../images/students/cv/"><span style="color:#ffffff;">CV
                                                    Download</span></a></button>

                                    </div>
                                </div>
                                <!--<div class="card-footer py-0">
								<div class="profile-tab tab-menu-heading border-bottom-0">
									<nav class="nav main-nav-line p-0 tabs-menu profile-nav-line border-0 br-5 mb-0	">
										<a class="nav-link  mb-2 mt-2 active" data-bs-toggle="tab"
											href="#about">About</a>
										<a class="nav-link mb-2 mt-2" data-bs-toggle="tab" href="#edit">Edit Profile</a>
										<a class="nav-link  mb-2 mt-2" data-bs-toggle="tab"
											href="#timeline">Timeline</a>
										<a class="nav-link  mb-2 mt-2" data-bs-toggle="tab" href="#gallery">Gallery</a>
										<a class="nav-link  mb-2 mt-2" data-bs-toggle="tab" href="#friends">Friends</a>
										<a class="nav-link  mb-2 mt-2" data-bs-toggle="tab" href="#settings">Account
											Settings</a>
									</nav>
								</div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12 col-md-12">
                        <div class="custom-card main-content-body-profile">
                            <div class="tab-content">
                                <div class="main-content-body tab-pane active" id="about">
                                    <div class="card">
                                        <div class="card-body border-0">
                                            <div class="mb-4 main-content-label">Student Information</div>
                                            <form class="form-horizontal">
                                                <!--	<div class="mb-4 main-content-label">Name</div> -->
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Student Name</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input readonly type="text" class="form-control"
                                                                placeholder="Student Name" name="student_name" value="">
                                                            <input type="hidden" name="id" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Gender</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input readonly type="text" class="form-control"
                                                                placeholder="Gender" name="gender" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Date of birth</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input readonly type="date" class="form-control"
                                                                id="dateMask" placeholder="DD/MM/YYYY"
                                                                name="date_of_birth" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Phone Number</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input readonly type="Number" class="form-control"
                                                                placeholder="10 Digit Number" name="phone_number"
                                                                value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Alternative Phone Number</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input readonly type="number" class="form-control"
                                                                placeholder="10 Digit Number"
                                                                name="alternative_phone_number" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--<div class="mb-4 main-content-label">Contact Info</div>-->
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Email ID</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input readonly type="mail" class="form-control"
                                                                placeholder="Email" name="mail_id" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Address</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input readonly readonly type="text" class="form-control"
                                                                id="exampleInputName" name="address" value="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row row-sm">
                                                            <div class="col-md-3">
                                                                <label class="form-label">District</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input readonly type="text" class="form-control"
                                                                    placeholder="District" name="district" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row row-sm">
                                                            <div class="col-md-3">
                                                                <label class="form-label">State</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input readonly type="text" class="form-control"
                                                                    placeholder="State" name="state"
                                                                    id="exampleInputPerEmail" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row row-sm">
                                                            <div class="col-md-3">
                                                                <label class="form-label">Pincode</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input readonly type="number" class="form-control"
                                                                    placeholder="Pincode" name="pincode"
                                                                    id="exampleInputPerEmail" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row row-sm">
                                                            <div class="col-md-3">
                                                                <label class="form-label">Qualification</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input readonly type="text" class="form-control"
                                                                    placeholder="Qualification" name="qualification"
                                                                    value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row row-sm">
                                                            <div class="col-md-3">
                                                                <label class="form-label">Semester</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input readonly type="text" class="form-control"
                                                                    placeholder="Semester" name="semester" value="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group ">
                                                        <div class="row row-sm">
                                                            <div class="col-md-3">
                                                                <label class="form-label">Branch/Stream</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input readonly type="text" class="form-control"
                                                                    placeholder="Branch/Stream" name="stream"
                                                                    id="exampleInputPerEmail" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--	<div class="mb-4 main-content-label">Social Info</div> -->
                                                    <div class="form-group ">
                                                        <div class="row row-sm">
                                                            <div class="col-md-3">
                                                                <label class="form-label">Account Type</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input readonly type="text" class="form-control"
                                                                    placeholder="Individual" name="account_type"
                                                                    value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row row-sm">
                                                            <div class="col-md-3">
                                                                <label class="form-label">Institutions</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input readonly type="text" class="form-control"
                                                                    placeholder="Institutions" name="institution_name"
                                                                    value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row row-sm">
                                                            <div class="col-md-3">
                                                                <label class="form-label">Referral Code</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <input readonly type="text" class="form-control"
                                                                    placeholder="Referral Code" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row row-sm">
                                                            <div class="col-md-3">
                                                                <label class="form-label">Upload Resume</label>
                                                            </div>
                                                            <div class="col-md-9">

                                                                <a target="_blank" href="../images/students/cv/"><button
                                                                        type="button" class="btn btn-primary mt-3 mb-0"
                                                                        name="upload_cv"
                                                                        style="text-align:right">Download</button></a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class=" btn btn-info mt-3 mb-0"><a
                                                            href="updatestudentprofile.php?id=&page=profile">Update
                                                            Profile</a></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="modal fade" id="apply">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                class="btn-close" data-bs-dismiss="modal" type="button"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">

                            <p> Are you sure you want to update profile?</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn ripple btn-success" type="button">Update</button>
                            <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-footer">
                <div class="container-fluid pd-t-0-f ht-100p">
                    Copyright © 2023 <a href="www.triaright.com" class="text-primary">triaright</a>. Designed with <span
                        class="fa fa-heart text-danger"></span> by <a href="http://www.mycompany.co.in"> my company</a>
                    . All rights reserved
                </div>
            </div>


        </div>
        <!-- End Page -->

        <!-- BACK-TO-TOP -->
        <a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

        <?php include("./scripts.php") ?>

</body>

</html>