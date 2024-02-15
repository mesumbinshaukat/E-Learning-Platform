<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['college_username']) && !isset($_COOKIE['college_password'])) {
	header('location: ../college_login.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <title>Internship Details</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">

    <?php include("./style.php") ?>
</head>

<body class="ltr main-body app sidebar-mini">

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
                        <span class="main-content-title mg-b-0 mg-b-lg-1">Internship Details</span>
                    </div>
                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Internship</a></li>
                            <li class="breadcrumb-item active" aria-current="page">full details</li>
                        </ol>
                    </div>
                </div>
                <!-- /breadcrumb -->

                <!-- row -->
                <div class="row row-sm">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body ">
                                <div class="row row-sm ">
                                    <div class=" col-xl-6 col-lg-12 col-md-12">
                                        <div class="row">
                                            <!--<div class="col-xl-2">
												<div class="clearfix carousel-slider">
													<div id="thumbcarousel" class="carousel slide" data-bs-interval="t">
														<div class="carousel-inner">
															<ul class="carousel-item active">
																<li data-bs-target="#Slider" data-bs-slide-to="0"
																	class="thumb active my-2"><img
																		src="assets/img/ecommerce/shirt-1.png"
																		alt="img"></li>
																<li data-bs-target="#Slider" data-bs-slide-to="1"
																	class="thumb my-2"><img
																		src="assets/img/ecommerce/shirt-3.png"
																		alt="img"></li>
																<li data-bs-target="#Slider" data-bs-slide-to="2"
																	class="thumb my-2"><img
																		src="assets/img/ecommerce/shirt-4.png"
																		alt="img"></li>
																<li data-bs-target="#Slider" data-bs-slide-to="3"
																	class="thumb my-2"><img
																		src="assets/img/ecommerce/shirt-2.png"
																		alt="img"></li>
															</ul>
														</div>
													</div>
												</div>
											</div> -->
                                            <div class="col-xl-10">
                                                <div class="product-carousel  border br-5">
                                                    <div id="Slider" class="carousel slide" data-bs-ride="false">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active"><img
                                                                    src="https://triaright.com/images/addinternship/main_image/65785304561f6logo&#32;png.png"
                                                                    alt="img" class="img-fluid mx-auto d-block">
                                                                <div class="text-center mt-5 mb-5 btn-list">
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="text-center  mt-4">
													<a href="product-cart.php" class="btn ripple btn-primary me-2"><i
															class="fe fe-shopping-cart"> </i> Add to cart</a>
													<a href="check-out.php" class="btn ripple btn-secondary"><i
															class="fe fe-credit-card"> </i> Buy Now</a>
												</div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="details col-xl-6 col-lg-12 col-md-12 mt-4 mt-xl-0">

                                        <h4 class="product-title mb-1"><b style="color: #ff6700;">Frontend Developer</b>
                                        </h4>
                                        <p class="text-muted tx-13 mb-1">Information Technology</p>
                                        <br>



                                        <p class="card-text tx-15"><span style="color: #13131a;"> Company Name &nbsp
                                                &nbsp &nbsp &nbsp &nbsp &nbsp :</span>&nbsp &nbspTriaright Solutions LLP
                                        </p>
                                        <p class="card-text tx-15"><span style="color: #13131a;"> Salary &nbsp &nbsp
                                                &nbsp &nbsp &nbsp &nbsp &nbsp :</span>&nbsp &nbsp*_*</p>
                                        <p class="card-text tx-15"><span style="color: #13131a;"> Duration (Days) &nbsp
                                                &nbsp &nbsp &nbsp &nbsp &nbsp :</span>&nbsp &nbsp180</p>
                                        <p class="card-text tx-15"><span style="color: #13131a;"> Eligibility &nbsp
                                                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :</span>&nbsp &nbspGraduate
                                        </p>
                                        <p class="card-text tx-15"><span style="color: #13131a;"> Internship Type &nbsp
                                                &nbsp &nbsp &nbsp &nbsp &nbsp :</span>&nbsp &nbspFree</p>
                                        <p class="card-text tx-15"><span style="color: #13131a;"> Location &nbsp &nbsp
                                                &nbsp &nbsp &nbsp &nbsp :</span>&nbsp &nbsp Hyderabad</p>
                                        <p class="card-text tx-15"><span style="color: #13131a;"> Certification &nbsp
                                                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :</span>&nbsp &nbsp Yes</p>
                                        <p class="card-text tx-15"><span style="color: #13131a;"> Pricing(paid) &nbsp
                                                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :</span>&nbsp &nbsp 0 </p>
                                        <p class="card-text tx-15"><span style="color: #13131a;"> Pricing(stifund) &nbsp
                                                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :</span>&nbsp &nbsp 0</p>
                                        <p class="card-text tx-15"><span style="color: #13131a;"> Preference &nbsp &nbsp
                                                &nbsp &nbsp &nbsp &nbsp :</span>&nbsp &nbsp Both</p>
                                        <p class="card-text tx-15"><span style="color: #13131a;">No.of. vacancies&nbsp
                                                &nbsp &nbsp &nbsp &nbsp:</span>&nbsp &nbsp 50</p>
                                        <p class="card-text tx-15"><span style="color: #13131a;">Last date to apply
                                                &nbsp &nbsp :</span>&nbsp &nbsp &nbsp 2023-12-31</p>
                                        <p class="card-text tx-15"><span style="color: #13131a;">Food Allowance &nbsp
                                                &nbsp :</span>&nbsp &nbsp &nbsp No</p>
                                        <p class="card-text tx-15"><span style="color: #13131a;">Travel Allowance &nbsp
                                                &nbsp :</span>&nbsp &nbsp &nbsp No</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-sm">
                    <div class="col-lg-12 col-md-12">
                        <div class="card productdesc">
                            <div class="card-body">
                                <div class="panel panel-primary">
                                    <div class=" tab-menu-heading">
                                        <div class="tabs-menu1">
                                            <!-- Tabs -->
                                            <ul class="nav panel-tabs">
                                                <li><a href="internshipdetails.php@details=1.html#tab5" class="active"
                                                        data-bs-toggle="tab">Full Description</a></li>

                                                <li><a href="internshipdetails.php@details=1.html#tab6"
                                                        data-bs-toggle="tab">Pre Requirements</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel-body tabs-menu-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab5">
                                                <h5 class="mb-2 mt-1 fw-semibold"><span style="color:#ff6700;">Full
                                                        Description :</span></h5>
                                                <p class="mb-3 tx-13"><span style="line-height:30px">Frontend
                                                        Developement</span>
                                                </p>

                                            </div>
                                            <div class="tab-pane active" id="tab6">
                                                <h5 class="mb-2 mt-1 fw-semibold"><span style="color:#ff6700;">Pre
                                                        Requirements :</span></h5>
                                                <p class="mb-3 tx-13"><span style="line-height:30px">NA</span>
                                                </p>

                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /row -->


                <!-- /row -->


            </div>
            <!-- Container closed -->
        </div>
        <!-- main-content closed -->

    </div>
    <!-- End Page -->

    <!-- BACK-TO-TOP -->
    <a href="internshipdetails.php@details=1.html#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

    <?php include("./script.php"); ?>
</body>


</html>