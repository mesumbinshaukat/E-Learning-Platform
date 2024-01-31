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

    <!-- Switcher -->
    <div class="switcher-wrapper">
        <div class="demo_changer">
            <div class="form_holder sidebar-right1">
                <div class="row">
                    <div class="predefined_styles">

                        <div class="swichermainleft text-center">
                            <h4>LTR AND RTL VERSIONS</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">LTR</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch25"
                                                id="myonoffswitch54" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch54" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">RTL</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch25"
                                                id="myonoffswitch55" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch55" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Navigation Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Vertical Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15"
                                                id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch34" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizantal Click Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15"
                                                id="myonoffswitch35" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch35" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizantal Hover Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15"
                                                id="myonoffswitch111" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch111" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Light Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Theme</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1"
                                                id="myonoffswitch1" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Primary</span>
                                        <div class="">
                                            <input class="wd-25 ht-25 input-color-picker color-primary-light"
                                                value="#38cab3" id="colorID" type="color" data-id="bg-color"
                                                data-id1="bg-hover" data-id2="bg-border" data-id7="transparentcolor"
                                                name="lightPrimary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Dark Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Theme</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1"
                                                id="myonoffswitch2" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Primary</span>
                                        <div class="">
                                            <input class="wd-25 ht-25 input-dark-color-picker color-primary-dark"
                                                value="#38cab3" id="darkPrimaryColorID" type="color" data-id="bg-color"
                                                data-id1="bg-hover" data-id2="bg-border" data-id3="primary"
                                                data-id8="transparentcolor" name="darkPrimary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Transparent Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex mt-2 mb-3">
                                        <span class="me-auto">Transparent Theme</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1"
                                                id="myonoffswitchTransparent" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitchTransparent" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Transparent Primary</span>
                                        <div class="">
                                            <input
                                                class="wd-30 ht-30 input-transparent-color-picker color-primary-transparent"
                                                value="#38cab3" id="transparentPrimaryColorID" type="color"
                                                data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
                                                data-id3="primary" data-id4="primary" data-id9="transparentcolor"
                                                name="tranparentPrimary">
                                        </div>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Transparent Background</span>
                                        <div class="">
                                            <input
                                                class="wd-30 ht-30 input-transparent-color-picker color-bg-transparent"
                                                value="#38cab3" id="transparentBgColorID" type="color" data-id5="body"
                                                data-id6="theme" data-id9="transparentcolor"
                                                name="transparentBackground">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Transparent Bg-Image Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">BG-Image Primary</span>
                                        <div class="">
                                            <input
                                                class="wd-30 ht-30 input-transparent-color-picker color-bgImg-transparent"
                                                value="#38cab3" id="transparentBgImgPrimaryColorID" type="color"
                                                data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
                                                data-id3="primary" data-id4="primary" data-id9="transparentcolor"
                                                name="tranparentPrimary">
                                        </div>
                                    </div>
                                    <div class="switch-toggle">
                                        <a class="bg-img1 bg-img" href="javascript:void(0);"><img
                                                src="assets/img/media/bg-img1.jpg" id="bgimage1" alt="switch-img"></a>
                                        <a class="bg-img2 bg-img" href="javascript:void(0);"><img
                                                src="assets/img/media/bg-img2.jpg" id="bgimage2" alt="switch-img"></a>
                                        <a class="bg-img3 bg-img" href="javascript:void(0);"><img
                                                src="assets/img/media/bg-img3.jpg" id="bgimage3" alt="switch-img"></a>
                                        <a class="bg-img4 bg-img" href="javascript:void(0);"><img
                                                src="assets/img/media/bg-img4.jpg" id="bgimage4" alt="switch-img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft leftmenu-styles">
                            <h4>Leftmenu Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch3" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Color Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch4" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch5" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Gradient Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch25" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch25" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft header-styles">
                            <h4>Header Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Header</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch6" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Color Header</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch7" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Header</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch8" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Gradient Header</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch26" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch26" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Layout Width Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Full Width</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4"
                                                id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Boxed</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4"
                                                id="myonoffswitch10" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Layout Positions</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Fixed</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5"
                                                id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Scrollable</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5"
                                                id="myonoffswitch12" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft vertical-switcher">
                            <h4>Sidemenu layout Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Default Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
                                            <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Closed Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch30" class="onoffswitch2-checkbox default-menu">
                                            <label for="myonoffswitch30" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon with Text</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch14" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon Overlay</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch15" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch32" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch32" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu style 1</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch33" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch33" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Reset All Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section my-4">
                                    <button class="btn btn-danger btn-Block ResetCustomStyles" type="button">Reset All
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->

    <!-- Loader -->
    <!--<div id="global-loader">-->
    <!--	<img src="assets/img/preloader.svg" class="loader-img" alt="Loader">-->
    <!--</div>-->
    <!-- /Loader -->

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

        </div> <!-- main-content -->
        <div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">


                <div class="breadcrumb-header justify-content-between">
                    <div class="right-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">College List </span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Credentials</a></li>
                            <li class="breadcrumb-item ">College</li>
                            <li class="breadcrumb-item ">List</li>
                        </ol>
                    </div>

                </div>
                <form method="post">
                    <div class="row row-sm">
                        <div class="form-group col-md-4">
                            <P><b> Affliated University</b> </p>
                            <select name="affiliated_university" class="form-control form-select"
                                data-bs-placeholder="Select Filter">
                                <option value="All" selected>All</option>
                                <option value="SRIKRISHNA DEVARAYA UNIVERSITY">SRIKRISHNA DEVARAYA UNIVERSITY</option>
                                <option value="Andhra University, Visakhapatnam">Andhra University, Visakhapatnam
                                </option>
                                <option value="S.V.University">S.V.University</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <P><b>District</b> </p>
                            <select name="district" class="form-control form-select"
                                data-bs-placeholder="Select Filter">
                                <option value="All" selected>All</option>
                                <option value="visakhapatnam">visakhapatnam</option>
                                <option value="Palnadu">Palnadu</option>
                                <option value="TIRUPATI">TIRUPATI</option>
                                <option value="Chittoor">Chittoor</option>

                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <P><b> College Status</b> </p>
                            <select name="user_status" class="form-control form-select"
                                data-bs-placeholder="Select Filter">
                                <option value="0">Active</option>
                                <option value="1">blocked</option>
                                <option value="2">Deleted</option>
                                <option value="All" selected>ALL</option>
                            </select>
                        </div>
                        <!--	<div class="form-group col-md-3">
										<select name="country" class="form-control form-select" data-bs-placeholder="Select Filter">
												<option value="br">Filter4</option>
												<option value="cz">Filter3</option>
												<option value="de">Filter2</option>
												<option value="pl" selected>Filter1</option>
											</select>
									</div> -->


                        &nbsp &nbsp <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>
                <br>
                <br>
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">

                                <div class="table-responsive  export-table">
                                    <table id="file-datatable"
                                        class="table table-bordered text-nowrap key-buttons border-bottom">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">S.no</th>
                                                <th class="border-bottom-0">Date of adding</th>
                                                <th class="border-bottom-0">College ID</th>
                                                <th class="border-bottom-0">College Name</th>
                                                <th class="border-bottom-0">Representative Name</th>
                                                <th class="border-bottom-0">District</th>
                                                <th class="border-bottom-0">Affliate Univerity Board</th>
                                                <th class="border-bottom-0">Students login Acc.</th>
                                                <th class="border-bottom-0">Students Courses Reg,</th>

                                                <th class="border-bottom-0">User status</th>



                                            </tr>
                                        </thead>
                                        <tbody>


                                            <tr>
                                                <td>1</td>
                                                <td>2023-03-09 10:19:52</td>
                                                <td>TRCLG_2</td>
                                                <td>GNR Degree College</td>
                                                <td>D.Vijay Kumar</td>
                                                <td>VIZIANAGARAM</td>
                                                <td>Dr. B R Ambedkar University</td>
                                                <td>GNR Degree College</td>
                                                <td>BSC, BCOM</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>2</td>
                                                <td>2023-03-09 13:42:58</td>
                                                <td>TRCLG_3</td>
                                                <td>Gayatri Degree & PG College</td>
                                                <td>M.Neeraja Madhavi</td>
                                                <td>TIRUPATI</td>
                                                <td>S.V.University</td>
                                                <td>GAYATRI DEGREE & PG COLLEGE</td>
                                                <td>BSC, BCOM</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>3</td>
                                                <td>2023-03-09 14:56:19</td>
                                                <td>TRCLG_4</td>
                                                <td>SNR Degree College</td>
                                                <td>Muni Raju Garu </td>
                                                <td> Chittoor</td>
                                                <td>None</td>
                                                <td>SNR Degree College</td>
                                                <td>BSC, BCOM</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>4</td>
                                                <td>2023-03-09 15:00:33</td>
                                                <td>TRCLG_5</td>
                                                <td>SV Degree College</td>
                                                <td>Sridhar</td>
                                                <td> Chittoor</td>
                                                <td>None</td>
                                                <td>SV Degree College</td>
                                                <td>BSC, BCOM</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>5</td>
                                                <td>2023-03-09 15:04:46</td>
                                                <td>TRCLG_6</td>
                                                <td>Vidya Degree College</td>
                                                <td>Vasu</td>
                                                <td> Chittoor</td>
                                                <td>None</td>
                                                <td>Vidya Degree College</td>
                                                <td>BSC, BCOM</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>6</td>
                                                <td>2023-03-09 15:19:34</td>
                                                <td>TRCLG_7</td>
                                                <td>Vijetha Junior & Degree College</td>
                                                <td>A.Hemachandra Naidu Garu</td>
                                                <td>Chittoor</td>
                                                <td>None</td>
                                                <td>Vijetha Junior & Degree College</td>
                                                <td>BSC, BCOM</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>7</td>
                                                <td>2023-03-09 15:26:28</td>
                                                <td>TRCLG_8</td>
                                                <td>Vignana Sudha Degree & PG College</td>
                                                <td>Dhandapani</td>
                                                <td> Chittoor</td>
                                                <td>None</td>
                                                <td>Vignana Sudha Degree & PG College</td>
                                                <td>BSC, BCOM</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>8</td>
                                                <td>2023-03-09 15:34:14</td>
                                                <td>TRCLG_9</td>
                                                <td>R K Degree College</td>
                                                <td>Ramesh Babu</td>
                                                <td>Chittoor</td>
                                                <td>None</td>
                                                <td>R K Degree College</td>
                                                <td>BSC, BCOM</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>9</td>
                                                <td>2023-03-09 17:15:27</td>
                                                <td>TRCLG_10</td>
                                                <td>Krishnaveni Degree College</td>
                                                <td>N. Venkateswarlu</td>
                                                <td>Palnadu</td>
                                                <td>None</td>
                                                <td>Krishnaveni Degree College</td>
                                                <td>BSC, BCOM</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>10</td>
                                                <td>2023-03-10 12:25:38</td>
                                                <td>TRCLG_11</td>
                                                <td>S V S Degree College</td>
                                                <td>Chintakayala Pentayya</td>
                                                <td>Anakapalli</td>
                                                <td>Andhra University, Visakhapatnam</td>
                                                <td>Svsdecollege</td>
                                                <td>BSC, BCOM, BA</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>11</td>
                                                <td>2023-03-16 11:20:35</td>
                                                <td>TRCLG_14</td>
                                                <td>SRI VIVEKANANDA DEGREE COLLEGE</td>
                                                <td>S Rizwan basha</td>
                                                <td>Sri Satya sai</td>
                                                <td>SRIKRISHNA DEVARAYA UNIVERSITY</td>
                                                <td>svivekananda</td>
                                                <td>BSC, MPCs, MSCs, MECs, BZC, Bcom, CA, BBA, BA</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>12</td>
                                                <td>2023-03-21 13:17:34</td>
                                                <td>TRCLG_17</td>
                                                <td>Sri Y N Degree College</td>
                                                <td>Dr. A P V APPARAO</td>
                                                <td>West Godavari</td>
                                                <td>Adikavi Nannaya University</td>
                                                <td>syndegreecollege</td>
                                                <td>MPC, MPE, MPCs, MECs, MSCs, MCCs, BZC, CBM, AZC, BHC, B. Com, B.Com,
                                                    BBA, BA,(HEP), BA (HGP)</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>13</td>
                                                <td>2023-03-24 08:58:41</td>
                                                <td>TRCLG_18</td>
                                                <td>S V R M Degree College</td>
                                                <td>CH Nagaraju</td>
                                                <td>Bapatla</td>
                                                <td>ACHARYA NAGARJUNA UNIVERSITY</td>
                                                <td>svrmdegclg</td>
                                                <td>Bsc (MPCs, MECs, MPC, CZA, CBZ), BA, B.Com(General), B.Com(Reg)</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>14</td>
                                                <td>2023-03-24 16:16:02</td>
                                                <td>TRCLG_20</td>
                                                <td>S.V.G.M. GOVERNMENT DEGREE COLLEGE</td>
                                                <td>Dr. D. Jayarama Reddy</td>
                                                <td>ANANTAPUR</td>
                                                <td>SRI KRISHNADEVARAYA UNIVERSITY</td>
                                                <td>svdmgovtdegreecollege</td>
                                                <td>BSC(B.Z.C.), BSC(PMT)</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>15</td>
                                                <td>2023-03-25 10:50:59</td>
                                                <td>TRCLG_24</td>
                                                <td>QSPIRE </td>
                                                <td>E. Sujatha</td>
                                                <td>Ranga Reddy</td>
                                                <td>Third Party</td>
                                                <td>qspire</td>
                                                <td>Python, Medical Coding</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>16</td>
                                                <td>2023-03-28 11:27:26</td>
                                                <td>TRCLG_28</td>
                                                <td>SAI PARAMESHWARA DEGREE COLLEGE</td>
                                                <td>NAGESHWAR RAO</td>
                                                <td>Kadapa</td>
                                                <td>NONE</td>
                                                <td>spdegreecollege</td>
                                                <td>BSC, BCOM</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>17</td>
                                                <td>2023-03-28 12:54:28</td>
                                                <td>TRCLG_29</td>
                                                <td>Satya institute of Technology and Management</td>
                                                <td>Srinu</td>
                                                <td>Vizianagaram</td>
                                                <td>Jntu kakinada</td>
                                                <td>SITAM2023</td>
                                                <td>B.TECH</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>18</td>
                                                <td>2023-03-28 21:37:54</td>
                                                <td>TRCLG_30</td>
                                                <td>Sri Hari Degree College</td>
                                                <td>Dr Pch. Praveen Kumar</td>
                                                <td>Kadapa</td>
                                                <td>Yogi Vemana University</td>
                                                <td>sriharidclg</td>
                                                <td>Medical Coding</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>19</td>
                                                <td>2023-04-04 10:24:29</td>
                                                <td>TRCLG_34</td>
                                                <td>SVR DEGREE COLLEGE</td>
                                                <td>BHEEMA VENUGOPALA RAO</td>
                                                <td>PALANADU</td>
                                                <td>Acharya Nagarjuna University</td>
                                                <td>svrdegreecollege</td>
                                                <td>B.Sc(MPC, MPCs, BZC), B.COM(Computers)</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>20</td>
                                                <td>2023-04-06 11:27:06</td>
                                                <td>TRCLG_38</td>
                                                <td> BGBS Womens Degree College</td>
                                                <td>V.Ganga Lakshmi </td>
                                                <td>West Godavari</td>
                                                <td>Adikavi Nannya University</td>
                                                <td>bgbswdcollege</td>
                                                <td>BSC, BCOM, BA, BZC, MPC</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>21</td>
                                                <td>2023-04-13 14:12:13</td>
                                                <td>TRCLG_41</td>
                                                <td>Dadi Veerunaidu College</td>
                                                <td>S Daya Madhuri</td>
                                                <td>Anakapalle</td>
                                                <td>Andhra University</td>
                                                <td>Dadicollege</td>
                                                <td>BSC, MPC, CBZ, MPCS, MECS, MSCS, B.COM Computers</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>22</td>
                                                <td>2023-04-17 10:28:06</td>
                                                <td>TRCLG_42</td>
                                                <td>Aditya Degree College AWDCKKD</td>
                                                <td>Karuna</td>
                                                <td>East Godavari </td>
                                                <td>Aadi Kavi Nannaya</td>
                                                <td>awdckkd</td>
                                                <td>Data sciences </td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>23</td>
                                                <td>2023-04-17 11:37:34</td>
                                                <td>TRCLG_43</td>
                                                <td>Aditya Degree College ASCSKKD</td>
                                                <td>Buleah</td>
                                                <td>East Godavari </td>
                                                <td>Aadi Kavi Nannaya</td>
                                                <td>ascskkd</td>
                                                <td>BCA</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>24</td>
                                                <td>2023-04-18 10:15:14</td>
                                                <td>TRCLG_44</td>
                                                <td>Aditya Degree College for women Rajahmundry</td>
                                                <td>K V S B SASTRY</td>
                                                <td>East Godavari</td>
                                                <td>ADIKAVI NANNAYA UNIVERSITY</td>
                                                <td>aditya Degree College for women</td>
                                                <td>MPC BTMC MPCS DSSTCS MECS MCCS MPAIR BCA BBA GENERAL BBA DM BCOM MPC
                                                    MSCS</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>25</td>
                                                <td>2023-04-18 12:00:07</td>
                                                <td>TRCLG_45</td>
                                                <td>Gayathri Degree College</td>
                                                <td>P V Rajesh</td>
                                                <td>Anakapalli</td>
                                                <td>Andhra University</td>
                                                <td>gayathridcollege</td>
                                                <td>BSC computers, BSC chemistry, CBZ, BA</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>26</td>
                                                <td>2023-04-18 15:05:25</td>
                                                <td>TRCLG_46</td>
                                                <td>Aditya degree college</td>
                                                <td>P.D.V Prasad Rao</td>
                                                <td>East godavari</td>
                                                <td>ADIKAVI NANNAYA UNIVERSITY</td>
                                                <td>Aditya degree college</td>
                                                <td>MPCS DSSTCS MECS MCCS MPAIR BCA BBA GENERAL BBA DM BCOM MPC MSCS
                                                </td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>27</td>
                                                <td>2023-04-22 14:44:14</td>
                                                <td>TRCLG_47</td>
                                                <td>universe</td>
                                                <td>mary</td>
                                                <td>vskp</td>
                                                <td>andhra university</td>
                                                <td>universe@123</td>
                                                <td>btech,mtech,degree</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>28</td>
                                                <td>2023-04-24 10:12:57</td>
                                                <td>TRCLG_48</td>
                                                <td>BRR & GKR CHAMBERS DEGREE & PG COLLEGE </td>
                                                <td>K LAKSHMAN RAO</td>
                                                <td>WEST GODAVARI</td>
                                                <td>ADIKAVI NANNAYYA UNIVERSITY </td>
                                                <td>chambersdcollege</td>
                                                <td>MPC, MPCS, MECS, MCCS, MSCS, ( BT, BC, CHEMISTRY), BCOM(CA), BBA
                                                </td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>29</td>
                                                <td>2023-04-24 11:22:21</td>
                                                <td>TRCLG_49</td>
                                                <td>SRI ABN & PRR COLLEGE OF SCIENCE</td>
                                                <td>K Suri Babu</td>
                                                <td>EAST GODAVARI</td>
                                                <td>ADI KAVI NANNAYA UNIVERSITY</td>
                                                <td>abnprrc346</td>
                                                <td>MPC, MPCS, MSCS, MCCS, CBC BT, MBBC BT,B.COM COMPUTERS, B.COM
                                                    GENERAL</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>30</td>
                                                <td>2023-04-24 12:11:13</td>
                                                <td>TRCLG_51</td>
                                                <td>S. V. K. P. & Dr. K. S. Raju Arts and Science College (A)</td>
                                                <td>S Srinivas Rao</td>
                                                <td>West Godavari</td>
                                                <td>Aadi Kavi Nannaya</td>
                                                <td>svkp</td>
                                                <td>BSC, MPCs, MCCs, MECs, MPC, MPE, BZC, CZBT, MBBCBT, Bcom(CA),
                                                    Bcom.(G) BA</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>31</td>
                                                <td>2023-04-24 18:25:26</td>
                                                <td>TRCLG_52</td>
                                                <td>Gokul degree college</td>
                                                <td>kishore kumar</td>
                                                <td>medchal</td>
                                                <td>osmania university</td>
                                                <td>Gokul degree</td>
                                                <td>b.com</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>32</td>
                                                <td>2023-04-25 11:36:56</td>
                                                <td>TRCLG_53</td>
                                                <td>Sir CR Reddy Degree College For Womens</td>
                                                <td>D Teja Sri</td>
                                                <td>Eluru</td>
                                                <td>ADIKAVI NANAYA UNIVERSITY</td>
                                                <td>sircrrwomenscollege</td>
                                                <td>MPCS, MSCS, MCCS, MECS, MPC, CBZ, BZBT, ZFC, B.COM(CA), </td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>33</td>
                                                <td>2023-04-26 17:32:01</td>
                                                <td>TRCLG_54</td>
                                                <td>MCV DEGREE COLLEGE </td>
                                                <td>K Rajasekhar Raju</td>
                                                <td>Chittoor</td>
                                                <td>Sri venkateswara university</td>
                                                <td>MCV DEGREE COLLEGE </td>
                                                <td>B.SC B.COM(Computers)</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>34</td>
                                                <td>2023-05-01 17:32:01</td>
                                                <td>TRCLG_55</td>
                                                <td>DR.SARVEPALLI RADHA KRISHNA DEGREE COLLEGE</td>
                                                <td>CH.KIRANKUMAR</td>
                                                <td>EAST GODAVARI</td>
                                                <td>AKNU</td>
                                                <td>DR.SARVEPALLI RADHA KRISHNA DEGREE COLLEGE</td>
                                                <td>B.COM(RR), BCOM(CA),BBA BSC(MPC), BSC(MPCS), BSC(BZC)</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>35</td>
                                                <td>2023-05-02 14:05:17</td>
                                                <td>TRCLG_56</td>
                                                <td>Andhra Pradesh residential degree College</td>
                                                <td>YNS Chowdhury</td>
                                                <td>Macherla</td>
                                                <td>ACHARYA NAGARJUNA UNIVERSITY</td>
                                                <td>Andhra Pradesh residential degree College</td>
                                                <td>MSCS,BA,MPC,B.COM</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>36</td>
                                                <td>2023-05-07 15:31:56</td>
                                                <td>TRCLG_57</td>
                                                <td>DONBOSCO DEGREE COLLEGE</td>
                                                <td>L.Nagesh</td>
                                                <td>Narsipatnam</td>
                                                <td>ANDHRA UNIVERSITY</td>
                                                <td>DONBOSCO DEGREE COLLEGE</td>
                                                <td>MPCS,MPC,BCOM(VOC)</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>37</td>
                                                <td>2023-05-10 12:47:05</td>
                                                <td>TRCLG_58</td>
                                                <td>SRI SAMHITHA DEGREE COLLEGE</td>
                                                <td>NALLA NAGABABU</td>
                                                <td>East Godavari</td>
                                                <td>ADIKAVI NANNAYYA UNIVERSITY</td>
                                                <td>SRI SAMHITHA DEGREE COLLEGE</td>
                                                <td>B.com computer application</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>38</td>
                                                <td>2023-05-11 12:18:34</td>
                                                <td>TRCLG_59</td>
                                                <td>SRI VENKATESHWARA DEGREE COLLEGE </td>
                                                <td>S GURUMURTHY </td>
                                                <td> ANNAMAYYA</td>
                                                <td>sri venkateswara University </td>
                                                <td>SRI VENKATESHWARA DEGREE COLLEGE </td>
                                                <td>B.com B.Sc[BZC,MPCS]</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>39</td>
                                                <td>2023-05-29 09:52:57</td>
                                                <td>TRCLG_60</td>
                                                <td>SRI VASAVI DEGREE COLLEGE</td>
                                                <td>L. LAKSHMI NARAYANA</td>
                                                <td>WEST GODAVARI</td>
                                                <td>Adikavi Nannaya University</td>
                                                <td>SRI VASAVI DEGREE COLLEGE</td>
                                                <td>B.Sc(MPC,MPCs,MECs,BZC) B.Com(CA, General) BBA </td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>40</td>
                                                <td>2023-06-06 12:27:52</td>
                                                <td>TRCLG_61</td>
                                                <td>Demo Degree College</td>
                                                <td>Demo</td>
                                                <td>hyderabad</td>
                                                <td>Demo University</td>
                                                <td>democolle</td>
                                                <td>bsc bcom</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>41</td>
                                                <td>2023-06-06 17:28:59</td>
                                                <td>TRCLG_62</td>
                                                <td>SV DEGREE COLLEGE PEDAGUMMULURU</td>
                                                <td>ch. v.s rao </td>
                                                <td>ANAKAPALLI</td>
                                                <td>ANDHRA UNIVERSITY</td>
                                                <td>SV DEGREE COLLEGE PEDAGUMMULURU</td>
                                                <td>BSC MPC, MCCS, BZC</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>42</td>
                                                <td>2023-06-08 11:43:33</td>
                                                <td>TRCLG_63</td>
                                                <td>AKRG Degree College</td>
                                                <td>P Leela Kumar</td>
                                                <td>East Godavari</td>
                                                <td>AKNU</td>
                                                <td>AKRG Degree College</td>
                                                <td>B.Sc MPC, B.Sc MPCS, B.Sc CBZ, B.Sc MECS, B.Sc CBMB, B.Sc MCCS B.Com
                                                    GENERAL, B.Com Computer Applications</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>43</td>
                                                <td>2023-07-31 14:15:39</td>
                                                <td>TRCLG_64</td>
                                                <td>CNR Arts & Science College- Annamayya</td>
                                                <td>C. Vijay Bhaskar Reddy</td>
                                                <td>Annamayya</td>
                                                <td>Sri Venkateswara University</td>
                                                <td>CNR Arts & Science College</td>
                                                <td>BBA, B.Sc-MPCs, BZC, B.Com-CA</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>44</td>
                                                <td>2023-08-08 15:47:25</td>
                                                <td>TRCLG_65</td>
                                                <td>Sri Balaji Vidya Vihar degree college</td>
                                                <td>A.R Balakrishna </td>
                                                <td>Sri Sathya Sai</td>
                                                <td>S.K.U</td>
                                                <td>Sri Balaji Vidya Vihar degree college</td>
                                                <td>Bsc,Bcom,BBA</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>45</td>
                                                <td>2023-08-14 13:14:46</td>
                                                <td>TRCLG_66</td>
                                                <td>MVN JS & RVR College of Arts and Science</td>
                                                <td>T.V.V.Satyanarayana Rao</td>
                                                <td>Konaseema</td>
                                                <td>Adikavi Nannaya University</td>
                                                <td>MVN JS & RVR College of Arts and Science</td>
                                                <td>BA, B.Sc., B.Com, BCA</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>46</td>
                                                <td>2023-08-21 11:49:30</td>
                                                <td>TRCLG_67</td>
                                                <td>Jyothirmayee women’s degree college </td>
                                                <td>K HARI KRISHNA</td>
                                                <td>Anantapur</td>
                                                <td>Sri Krishnadevaraya university</td>
                                                <td>Jyothirmayee women’s degree college </td>
                                                <td>BBA, B.Sc-MPCs, BZC, B.Com-CA</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>47</td>
                                                <td>2023-08-21 12:04:34</td>
                                                <td>TRCLG_68</td>
                                                <td>Sree Devi degree college </td>
                                                <td>V Nagaraju</td>
                                                <td>Anantapur</td>
                                                <td>Sri Krishnadevaraya university</td>
                                                <td>Sree Devi degree college </td>
                                                <td>BBA, B.Sc-MPCs, BZC, B.Com-CA</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>48</td>
                                                <td>2023-08-23 17:44:31</td>
                                                <td>TRCLG_69</td>
                                                <td>Sapthagiri Degree college Hindupur</td>
                                                <td>S parthasarathi</td>
                                                <td>sri satyasai</td>
                                                <td> S. k. University</td>
                                                <td>Sapthagiri Degree college Hindupur</td>
                                                <td>Bsc BZC </td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>49</td>
                                                <td>2023-08-23 18:32:31</td>
                                                <td>TRCLG_70</td>
                                                <td>SPVM Degree College Gorantla</td>
                                                <td>AVSS Manoj son in law of Correspondent</td>
                                                <td>Sri Sathya Sai</td>
                                                <td>SK University Anantapuram</td>
                                                <td>SPVM Degree College Gorantla</td>
                                                <td>BA EHP, THP, B.Sc BZC, MPC &MPCs, B.Com General, B.Com Computers,
                                                    BBA</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>50</td>
                                                <td>2023-09-01 13:21:13</td>
                                                <td>TRCLG_71</td>
                                                <td>SVV Degree College, Penumuru </td>
                                                <td>P.Suresh </td>
                                                <td>Chittoor </td>
                                                <td>S V University, Tirupati </td>
                                                <td>SVV Degree College</td>
                                                <td>B.SC(M.S.CS),B.Com(C.A)</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>51</td>
                                                <td>2023-09-07 16:04:24</td>
                                                <td>TRCLG_72</td>
                                                <td>Sri Rachapudy Nagabhushanam Degree & P.G College, Badvel</td>
                                                <td>Bathina Ashok</td>
                                                <td>Kadapa</td>
                                                <td>YOGI VEMANA UNIVERSITY</td>
                                                <td>Sri Rachapudy Nagabhushanam Degree & P.G College, Badvel</td>
                                                <td>B. Com (Computer Applications), B.Sc- MPC, MPCS, MSCS, BZC</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>52</td>
                                                <td>2023-09-30 12:25:07</td>
                                                <td>TRCLG_73</td>
                                                <td>SMJL DEGREE COLLEGE, KADIRI-515 591</td>
                                                <td>K Ramesh</td>
                                                <td>Sri satya sai</td>
                                                <td>SRI KRISHNA DEVARAYA UNIVERSITY </td>
                                                <td>SMJL DEGREE COLLEGE</td>
                                                <td>BA THP , B COM (CA) BSc., BZC,MPC, MPCs, Biochemistry,Bio-Techology
                                                </td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>53</td>
                                                <td>2023-10-16 11:22:05</td>
                                                <td>TRCLG_74</td>
                                                <td>SAI DEGREE COLLEGE</td>
                                                <td>K Raghavendra </td>
                                                <td> Kurnool </td>
                                                <td>R U</td>
                                                <td>saidegreecollege</td>
                                                <td>B Com CA ,BA ,BZC,MPCS,MSCS</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>54</td>
                                                <td>2023-11-01 18:01:08</td>
                                                <td>TRCLG_75</td>
                                                <td>SPACE DEGREE FOR WOMEN </td>
                                                <td>VETTI JAYARAM</td>
                                                <td>SRI SATYA SAI </td>
                                                <td>SK University Anantapuram</td>
                                                <td>SPACE DEGREE FOR WOMEN </td>
                                                <td>b.com bsc</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>


                                            <tr>
                                                <td>55</td>
                                                <td>2024-01-12 11:22:22</td>
                                                <td>TRCLG_76</td>
                                                <td>Vellore institute of Technology AP</td>
                                                <td>Viswanathan</td>
                                                <td>Guntur </td>
                                                <td>VIT University</td>
                                                <td>superadmin@gmail.com</td>
                                                <td>CSE ( Ai,core,Data analytics,Networking , Business
                                                    system,Robotics)Mechanical,ECE</td>


                                                <td style=color:#4aa02c> <b> Active <b></td>
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
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to Delete a college?</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">Delete</button>
                                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="Block">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to Block a college?</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">Block</button>
                                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="Unblock">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to Unblock a college?</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">Unblock</button>
                                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                    Now</button>
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
            Copyright © 2023 <a href="www.triaright.in" class="text-primary">triaright</a>. Designed with <span
                class="fa fa-heart text-danger"></span> by <a href="www.mycompany.co.in"> my company</a> . All rights
            reserved
        </div>
    </div>
    <!-- Footer closed -->


    </div>
    <!-- End Page -->

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

    <?php include("./scripts.php"); ?>

</body>

</html>
<div class="modal fade" id="Block">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close"
                    data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <p> Are you sure you want to Block a college?</p>
            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-success" type="button">Block</button>
                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                    Now</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Unblock">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close"
                    data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

                <p> Are you sure you want to Unblock a college?</p>
            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-success" type="button">Unblock</button>
                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                    Now</button>
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
        Copyright © 2023 <a href="www.triaright.in" class="text-primary">triaright</a>. Designed with <span
            class="fa fa-heart text-danger"></span> by <a href="www.mycompany.co.in"> my company</a> . All rights
        reserved
    </div>
</div>
<!-- Footer closed -->


</div>
<!-- End Page -->

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

<?php include("./scripts.php"); ?>


</body>

</html>