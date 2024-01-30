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

    <link rel="icon" href="assets/img/icon.png" type="image/x-icon" />

    <!-- ICONS CSS -->
    <link href="assets/plugins/icons/icons.css" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- RIGHT-SIDEMENU CSS -->
    <link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- P-SCROLL BAR CSS -->
    <link href="assets/plugins/perfect-scrollbar/p-scrollbar.css" rel="stylesheet" />


    <!-- Data table css -->
    <link href="assets/plugins/datatable/css/dataTables.bootstrap5.css" rel="stylesheet" />
    <link href="assets/plugins/datatable/css/buttons.bootstrap5.min.css" rel="stylesheet">
    <link href="assets/plugins/datatable/responsive.bootstrap5.css" rel="stylesheet" />

    <!-- INTERNAL Select2 css -->
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />


    <!-- STYLES CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-dark.css" rel="stylesheet">
    <link href="assets/css/style-transparent.css" rel="stylesheet">


    <!-- SKIN-MODES CSS -->
    <link href="assets/css/skin-modes.css" rel="stylesheet" />

    <!-- ANIMATION CSS -->
    <link href="assets/css/animate.css" rel="stylesheet">

    <!-- SWITCHER CSS -->
    <link href="assets/switcher/css/switcher.css" rel="stylesheet" />
    <link href="assets/switcher/demo.css" rel="stylesheet" />

    <link rel="icon" href="assets/img/icon.png" type="image/x-icon" />

    <!-- ICONS CSS -->
    <link href="assets/plugins/icons/icons.css" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- RIGHT-SIDEMENU CSS -->
    <link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- P-SCROLL BAR CSS -->
    <link href="assets/plugins/perfect-scrollbar/p-scrollbar.css" rel="stylesheet" />


    <!--- Internal Select2 css-->
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet">

    <!---Internal Fileupload css-->
    <link href="assets/plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css" />

    <!---Internal Fancy uploader css-->
    <link href="assets/plugins/fancyuploder/fancy_fileupload.css" rel="stylesheet" />



    <!-- STYLES CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-dark.css" rel="stylesheet">
    <link href="assets/css/style-transparent.css" rel="stylesheet">


    <!-- SKIN-MODES CSS -->
    <link href="assets/css/skin-modes.css" rel="stylesheet" />

    <!-- ANIMATION CSS -->
    <link href="assets/css/animate.css" rel="stylesheet">

    <!-- SWITCHER CSS -->
    <link href="assets/switcher/css/switcher.css" rel="stylesheet" />
    <link href="assets/switcher/demo.css" rel="stylesheet" />

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
                <div class=" main-container container-fluid">
                    <div class="main-header-left ">
                        <div class="responsive-logo">
                            <a href="" class="header-logo">
                                <img src="assets/img/logowhite.png" class="mobile-logo logo-1" alt="logo">
                                <img src="assets/img/logoblack.png" class="mobile-logo dark-logo-1" alt="logo">
                            </a>
                        </div>
                        <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
                            <a class="open-toggle" href="javascript:void(0);"><i
                                    class="header-icon fe fe-align-left"></i></a>
                            <a class="close-toggle" href="javascript:void(0);"><i class="header-icon fe fe-x"></i></a>
                        </div>
                        <div class="logo-horizontal">
                            <a href="index.php" class="header-logo">
                                <img src="assets/img/logowhite.png" class="mobile-logo logo-1" alt="logo">
                                <img src="assets/img/logoblack.png" class="mobile-logo dark-logo-1" alt="logo">
                            </a>
                        </div>

                    </div>
                    <?php include('./partials/navbar.php') ?>
                </div>
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
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Allocate Trainers
                        </span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Courses</a></li>
                            <li class="breadcrumb-item ">allocate</li>
                            <li class="breadcrumb-item ">Trainer</li>
                        </ol>
                    </div>

                </div>
                <!--		<div class="row row-sm">
					                 <div class="form-group col-md-3">
										<select name="country" class="form-control form-select" data-bs-placeholder="Select Filter">
												<option value="br">Filter4</option>
												<option value="cz">Filter3</option>
												<option value="de">Filter2</option>
												<option value="pl" selected>Filter1</option>
											</select>
									</div>
									<div class="form-group col-md-3">
										<select name="country" class="form-control form-select" data-bs-placeholder="Select Filter">
												<option value="br">Filter4</option>
												<option value="cz">Filter3</option>
												<option value="de">Filter2</option>
												<option value="pl" selected>Filter1</option>
											</select>
									</div>
									<div class="form-group col-md-3">
										<select name="country" class="form-control form-select" data-bs-placeholder="Select Filter">
												<option value="br">Filter4</option>
												<option value="cz">Filter3</option>
												<option value="de">Filter2</option>
												<option value="pl" selected>Filter1</option>
											</select>
									</div>
																		<div class="form-group col-md-3">
										<select name="country" class="form-control form-select" data-bs-placeholder="Select Filter">
												<option value="br">Filter4</option>
												<option value="cz">Filter3</option>
												<option value="de">Filter2</option>
												<option value="pl" selected>Filter1</option>
											</select>
									</div>

									&nbsp &nbsp	<a href="javascript:void(0);" class="btn btn-success">Search</a>	
                                               &nbsp &nbsp <a href="javascript:void(0);" class="btn btn-danger">Reset All </a>									
									</div> -->

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
                                                <th class="border-bottom-0">Author</th>
                                                <th class="border-bottom-0">Trainer ID</th>
                                                <th class="border-bottom-0">Trainer Name</th>
                                                <th class="border-bottom-0">Qualification</th>
                                                <th class="border-bottom-0">Experience</th>

                                                <th class="border-bottom-0">User status</th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>2023-03-19 17:20:34</td>
                                                <td>nani1438</td>

                                                <td>TRREG_4</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="allocatetrainercourse.php?trid=4"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>2023-03-19 18:01:56</td>
                                                <td>sandeepmatta86</td>

                                                <td>TRREG_5</td>
                                                <td>M Sandeep Kumar</td>
                                                <td>Graduate</td>
                                                <td>yes</td>
                                                <td><a href="allocatetrainercourse.php?trid=5"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>2023-04-09 08:35:27</td>
                                                <td>uk1986</td>

                                                <td>TRREG_18</td>
                                                <td>Uma Kiran V</td>
                                                <td>NA</td>
                                                <td>yes</td>
                                                <td><a href="allocatetrainercourse.php?trid=18"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>2023-04-19 18:33:24</td>
                                                <td>Bala Triaright</td>

                                                <td>TRREG_19</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>MCA</td>
                                                <td>Fresher</td>
                                                <td><a href="allocatetrainercourse.php?trid=19"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>2023-04-22 16:28:46</td>
                                                <td>Srikanth</td>

                                                <td>TRREG_24</td>
                                                <td>SRIKANTH </td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="allocatetrainercourse.php?trid=24"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>2023-04-26 15:42:32</td>
                                                <td>nikhil0908</td>

                                                <td>TRREG_27</td>
                                                <td>Nikhil Chakka</td>
                                                <td>Btech</td>
                                                <td>yes</td>
                                                <td><a href="allocatetrainercourse.php?trid=27"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>2023-04-26 17:29:11</td>
                                                <td>AshrafRahil</td>

                                                <td>TRREG_28</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td>BTECH</td>
                                                <td>no</td>
                                                <td><a href="allocatetrainercourse.php?trid=28"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>2023-05-03 11:48:22</td>
                                                <td>Senthan99</td>

                                                <td>TRREG_30</td>
                                                <td>Senthan M S V S</td>
                                                <td>Bachelor of technology </td>
                                                <td>yes</td>
                                                <td><a href="allocatetrainercourse.php?trid=30"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>2023-05-03 13:41:58</td>
                                                <td>GarikaShiva</td>

                                                <td>TRREG_31</td>
                                                <td>Shiva Krishna</td>
                                                <td>B.com Computers</td>
                                                <td>yes</td>
                                                <td><a href="allocatetrainercourse.php?trid=31"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>2023-05-04 16:59:28</td>
                                                <td>Kontham balaji</td>

                                                <td>TRREG_32</td>
                                                <td>Balaji</td>
                                                <td>Bsc</td>
                                                <td>yes</td>
                                                <td><a href="allocatetrainercourse.php?trid=32"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>2023-05-04 17:10:36</td>
                                                <td>CH.Varsha</td>

                                                <td>TRREG_33</td>
                                                <td>CH.Varsha</td>
                                                <td>B Tech 3rd year</td>
                                                <td>no</td>
                                                <td><a href="allocatetrainercourse.php?trid=33"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>2023-05-08 11:09:02</td>
                                                <td>superadmin@gmail.com</td>

                                                <td>TRREG_35</td>
                                                <td>demotrainer</td>
                                                <td>Btech</td>
                                                <td>yes</td>
                                                <td><a href="allocatetrainercourse.php?trid=35"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>2023-05-09 19:10:11</td>
                                                <td>tejaswirao</td>

                                                <td>TRREG_36</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td>Doctor of pharmacy</td>
                                                <td>yes</td>
                                                <td><a href="allocatetrainercourse.php?trid=36"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>2023-05-14 18:03:57</td>
                                                <td></td>

                                                <td>TRREG_38</td>
                                                <td>Vasundhara</td>
                                                <td>Btech</td>
                                                <td>no</td>
                                                <td><a href="allocatetrainercourse.php?trid=38"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>2023-05-14 20:07:18</td>
                                                <td></td>

                                                <td>TRREG_39</td>
                                                <td>Narender</td>
                                                <td>Btech</td>
                                                <td>yes</td>
                                                <td><a href="allocatetrainercourse.php?trid=39"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>2023-05-16 14:32:22</td>
                                                <td>Madhu Varshini</td>

                                                <td>TRREG_40</td>
                                                <td>Madhu Varshini</td>
                                                <td>MBA</td>
                                                <td>no</td>
                                                <td><a href="allocatetrainercourse.php?trid=40"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>2023-05-18 14:47:38</td>
                                                <td>Saieshwari</td>

                                                <td>TRREG_41</td>
                                                <td>Saieshwari Gogu</td>
                                                <td>B.Tech</td>
                                                <td>yes</td>
                                                <td><a href="allocatetrainercourse.php?trid=41"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>18</td>
                                                <td>2023-05-31 11:07:04</td>
                                                <td>Ashokvarma1</td>

                                                <td>TRREG_44</td>
                                                <td>tirdhala ashok</td>
                                                <td>b sc biotechnology</td>
                                                <td>no</td>
                                                <td><a href="allocatetrainercourse.php?trid=44"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>2023-06-06 13:20:27</td>
                                                <td>Ramumudhiraj</td>

                                                <td>TRREG_45</td>
                                                <td>Ramu</td>
                                                <td>BSC</td>
                                                <td>yes</td>
                                                <td><a href="allocatetrainercourse.php?trid=45"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>2023-06-06 20:44:45</td>
                                                <td>Venkateshgali369</td>

                                                <td>TRREG_46</td>
                                                <td>G Venkatesh</td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="allocatetrainercourse.php?trid=46"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>21</td>
                                                <td>2023-06-20 10:40:39</td>
                                                <td>murali_77</td>

                                                <td>TRREG_47</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td>pursuing PGDM</td>
                                                <td>no</td>
                                                <td><a href="allocatetrainercourse.php?trid=47"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>22</td>
                                                <td>2023-07-29 10:32:57</td>
                                                <td>demotesting</td>

                                                <td>TRREG_49</td>
                                                <td>demotesting</td>
                                                <td>cse</td>
                                                <td>yes</td>
                                                <td><a href="allocatetrainercourse.php?trid=49"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>23</td>
                                                <td>2023-08-07 13:18:39</td>
                                                <td>augustin77</td>

                                                <td>TRREG_50</td>
                                                <td>Madanu Augustin</td>
                                                <td>B-tech</td>
                                                <td>no</td>
                                                <td><a href="allocatetrainercourse.php?trid=50"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>24</td>
                                                <td>2023-08-07 13:19:07</td>
                                                <td>suresh321</td>

                                                <td>TRREG_51</td>
                                                <td>jammu suresh kumar</td>
                                                <td>B.TECH</td>
                                                <td>yes</td>
                                                <td><a href="allocatetrainercourse.php?trid=51"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>25</td>
                                                <td>2023-08-07 17:05:59</td>
                                                <td>Priyanka</td>

                                                <td>TRREG_52</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td>B.tech</td>
                                                <td>no</td>
                                                <td><a href="allocatetrainercourse.php?trid=52"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>26</td>
                                                <td>2023-08-22 10:55:03</td>
                                                <td>AkhilaVengal</td>

                                                <td>TRREG_56</td>
                                                <td>Akhila V</td>
                                                <td>MCA</td>
                                                <td>yes</td>
                                                <td><a href="allocatetrainercourse.php?trid=56"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>27</td>
                                                <td>2023-08-22 18:44:58</td>
                                                <td>Shanti Kiran</td>

                                                <td>TRREG_57</td>
                                                <td>Shanti Kiran</td>
                                                <td>B.E</td>
                                                <td>yes</td>
                                                <td><a href="allocatetrainercourse.php?trid=57"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>28</td>
                                                <td>2023-09-04 11:28:14</td>
                                                <td>Cmr1@123</td>

                                                <td>TRREG_58</td>
                                                <td>Cmr 1</td>
                                                <td>MBA</td>
                                                <td>no</td>
                                                <td><a href="allocatetrainercourse.php?trid=58"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>29</td>
                                                <td>2023-09-04 15:26:47</td>
                                                <td>Cmr2@123</td>

                                                <td>TRREG_59</td>
                                                <td>Cmr 2</td>
                                                <td>MBA</td>
                                                <td>no</td>
                                                <td><a href="allocatetrainercourse.php?trid=59"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>30</td>
                                                <td>2023-09-29 11:38:44</td>
                                                <td>Srinivas Y</td>

                                                <td>TRREG_61</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td>Btech</td>
                                                <td>yes</td>
                                                <td><a href="allocatetrainercourse.php?trid=61"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>31</td>
                                                <td>2023-10-12 16:02:32</td>
                                                <td>vijaykumar</td>

                                                <td>TRREG_62</td>
                                                <td>vijay kumar sampathi</td>
                                                <td>degree</td>
                                                <td>no</td>
                                                <td><a href="allocatetrainercourse.php?trid=62"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>32</td>
                                                <td>2023-11-06 14:59:01</td>
                                                <td>BharathKumar</td>

                                                <td>TRREG_63</td>
                                                <td>K Bharath Kumar </td>
                                                <td>MCA</td>
                                                <td>yes</td>
                                                <td><a href="allocatetrainercourse.php?trid=63"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>33</td>
                                                <td>2023-12-21 13:25:18</td>
                                                <td>kishore2120</td>

                                                <td>TRREG_64</td>
                                                <td>Kishore Kumar </td>
                                                <td>MBA</td>
                                                <td>yes</td>
                                                <td><a href="allocatetrainercourse.php?trid=64"
                                                        class="btn btn-info">allocate</a></td>
                                            </tr>
                                            <tr>
                                                <td>34</td>
                                                <td>2024-01-18 16:37:29</td>
                                                <td>preeti@28</td>

                                                <td>TRREG_65</td>
                                                <td>preeti</td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="allocatetrainercourse.php?trid=65"
                                                        class="btn btn-info">allocate</a></td>
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

                                <p> Are you sure you want to Delete a trainer?</p>
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

                                <p> Are you sure you want to Block a trainer?</p>
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

                                <p> Are you sure you want to Unblock a trainer?</p>
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

    <!-- JQUERY JS -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- IONICONS JS -->
    <script src="assets/plugins/ionicons/ionicons.js"></script>

    <!-- MOMENT JS -->
    <script src="assets/plugins/moment/moment.js"></script>

    <!-- P-SCROLL JS -->
    <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>

    <!-- SIDEBAR JS -->
    <script src="assets/plugins/side-menu/sidemenu.js"></script>

    <!-- STICKY JS -->
    <script src="assets/js/sticky.js"></script>

    <!-- Chart-circle js -->
    <script src="assets/plugins/circle-progress/circle-progress.min.js"></script>

    <!-- RIGHT-SIDEBAR JS -->
    <script src="assets/plugins/sidebar/sidebar.js"></script>
    <script src="assets/plugins/sidebar/sidebar-custom.js"></script>


    <!-- Internal Data tables -->
    <script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
    <script src="assets/plugins/datatable/js/jszip.min.js"></script>
    <script src="assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
    <script src="assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
    <script src="assets/plugins/datatable/js/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatable/js/buttons.print.min.js"></script>
    <script src="assets/plugins/datatable/js/buttons.colVis.min.js"></script>
    <script src="assets/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
    <script src="assets/js/table-data.js"></script>

    <!-- INTERNAL Select2 js -->
    <script src="assets/plugins/select2/js/select2.full.min.js"></script>


    <!-- EVA-ICONS JS -->
    <script src="assets/plugins/eva-icons/eva-icons.min.js"></script>

    <!-- THEME-COLOR JS -->
    <script src="assets/js/themecolor.js"></script>

    <!-- CUSTOM JS -->
    <script src="assets/js/custom.js"></script>

    <!-- exported JS -->
    <script src="assets/js/exported.js"></script>

    <!-- SWITCHER JS -->
    <script src="assets/switcher/js/switcher.js"></script>

</body>

<!-- Mirrored from laravel8.spruko.com/nowa/table-data by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:32:58 GMT -->

</html>
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

<!-- JQUERY JS -->
<script src="assets/plugins/jquery/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- IONICONS JS -->
<script src="assets/plugins/ionicons/ionicons.js"></script>

<!-- MOMENT JS -->
<script src="assets/plugins/moment/moment.js"></script>

<!-- P-SCROLL JS -->
<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>

<!-- SIDEBAR JS -->
<script src="assets/plugins/side-menu/sidemenu.js"></script>

<!-- STICKY JS -->
<script src="assets/js/sticky.js"></script>

<!-- Chart-circle js -->
<script src="assets/plugins/circle-progress/circle-progress.min.js"></script>

<!-- RIGHT-SIDEBAR JS -->
<script src="assets/plugins/sidebar/sidebar.js"></script>
<script src="assets/plugins/sidebar/sidebar-custom.js"></script>


<!-- Internal Data tables -->
<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
<script src="assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
<script src="assets/plugins/datatable/js/jszip.min.js"></script>
<script src="assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
<script src="assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
<script src="assets/plugins/datatable/js/buttons.html5.min.js"></script>
<script src="assets/plugins/datatable/js/buttons.print.min.js"></script>
<script src="assets/plugins/datatable/js/buttons.colVis.min.js"></script>
<script src="assets/plugins/datatable/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
<script src="assets/js/table-data.js"></script>

<!-- INTERNAL Select2 js -->
<script src="assets/plugins/select2/js/select2.full.min.js"></script>


<!-- EVA-ICONS JS -->
<script src="assets/plugins/eva-icons/eva-icons.min.js"></script>

<!-- THEME-COLOR JS -->
<script src="assets/js/themecolor.js"></script>

<!-- CUSTOM JS -->
<script src="assets/js/custom.js"></script>

<!-- exported JS -->
<script src="assets/js/exported.js"></script>

<!-- SWITCHER JS -->
<script src="assets/switcher/js/switcher.js"></script>

</body>

<!-- Mirrored from laravel8.spruko.com/nowa/table-data by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:32:58 GMT -->

</html>