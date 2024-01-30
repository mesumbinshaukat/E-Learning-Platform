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
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Task List </span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">internship management</a>
                            </li>
                            <li class="breadcrumb-item ">Task</li>
                            <li class="breadcrumb-item ">List</li>
                        </ol>
                    </div>

                </div>
                <form method="post">
                    <div class="row row-sm">
                        <div class="form-group col-md-3">
                            <b> <label>Batch id</label> </b>
                            <select name="batch_id" class="form-control form-select"
                                data-bs-placeholder="Select Filter">
                                <option value="ALL">ALL</option>


                                <option value="23">23_Web Technologies Batch 1 Ashok</option>

                                <option value="7">7_Python Batch 1 Bala</option>

                                <option value="14">14_Medical Coding Batch 1 Tejaswi</option>

                                <option value="18">18_Medical Coding Batch 2 Tejaswi</option>


                                <option value="26">26_Python Batch 1 2M</option>

                                <option value="31">31_Web Technologies Batch 1 2M</option>

                                <option value="32">32_Medical Coding Batch 1 2M</option>

                                <option value="27">27_Java Batch 1 2M</option>

                                <option value="34">34_AI & ML Batch 1 2M</option>

                                <option value="43">43_Java Batch 3 2M</option>

                                <option value="42">42_Java Batch 2 2M</option>

                                <option value="30">30_Human Resources Management Batch 1 2M</option>

                                <option value="40">40_Java Fullstack Batch 1 2M & 6M</option>

                                <option value="44">44_Medical Coding Batch 2 2M</option>

                                <option value="39">39_Medical Coding Batch 3 2M</option>

                                <option value="48">48_Human Resource Management Batch 2 2M</option>

                                <option value="47">47_Web Technologies Batch 3 2M</option>

                                <option value="54">54_Java Batch 4 2M</option>

                                <option value="51">51_Python Batch 1 Shanti 2M</option>

                                <option value="52">52_Tally + GST Batch 1 2M</option>

                                <option value="55">55_Medical Coding Batch 4 2M</option>

                                <option value="60">60_Python Batch 1 2M</option>

                                <option value="62">62_PYTHON</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <P><b> Status</b> </p>
                            <select name="user_status" class="form-control form-select"
                                data-bs-placeholder="Select Filter">
                                <option value="ALL">ALL</option>
                                <option value="0">Active</option>
                                <option value="1">blocked</option>
                                <option value="2">Deleted</option>
                            </select>
                        </div>

                        &nbsp &nbsp <button type="submit" class="btn btn-primary" name="search"
                            style="height:40px;width:100px;margin-top:35px" value="search">Search</button>
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
                                                <th class="border-bottom-0">date of approve</th>
                                                <th class="border-bottom-0">ID No</th>
                                                <th class="border-bottom-0">Batch</th>
                                                <th class="border-bottom-0">Trainer Name</th>
                                                <th class="border-bottom-0">Name of the task</th>
                                                <th class="border-bottom-0">Student Type</th>
                                                <th class="border-bottom-0">Task End Time</th>
                                                <th class="border-bottom-0">User status</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <tr>
                                                <td>1</td>
                                                <td>2023-05-27 16:55:11</td>
                                                <td>TRTASK_1</td>
                                                </td>
                                                <td>What is the meaninig of Triaright</td>
                                                <td>All</td>
                                                <td>2023-05-19</td>


                                                <td style=color:#E3242B>
                                                    <b>
                                                        Deleted <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>2</td>
                                                <td>2023-05-23 11:56:39</td>
                                                <td>TRTASK_2</td>
                                                </td>
                                                <td>demo task</td>
                                                <td>Individual</td>
                                                <td>2023-05-23</td>


                                                <td style=color:#E3242B>
                                                    <b>
                                                        Deleted <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>3</td>
                                                <td>2023-05-23 11:59:25</td>
                                                <td>TRTASK_3</td>
                                                </td>
                                                <td>testing superadmin</td>
                                                <td>Individual</td>
                                                <td>2023-05-23</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>4</td>
                                                <td>2023-05-24 15:31:11</td>
                                                <td>TRTASK_4</td>
                                                </td>
                                                <td>pari</td>
                                                <td>Individual</td>
                                                <td>2023-05-24</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>5</td>
                                                <td>2023-05-26 09:46:29</td>
                                                <td>TRTASK_5</td>
                                                </td>
                                                <td>What is the meaninig of Triaright</td>
                                                <td>All</td>
                                                <td>2023-05-27</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>6</td>
                                                <td>2023-05-26 10:10:25</td>
                                                <td>TRTASK_6</td>
                                                </td>
                                                <td>What is the meaninig of Triaright</td>
                                                <td>All</td>
                                                <td>2023-05-26</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>7</td>
                                                <td>2023-05-26 22:14:19</td>
                                                <td>TRTASK_7</td>
                                                </td>
                                                <td>What is the meaninig of Triaright</td>
                                                <td>Individual</td>
                                                <td>2023-05-26</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>8</td>
                                                <td>2023-05-27 16:44:59</td>
                                                <td>TRTASK_8</td>
                                                </td>
                                                <td>nhjhyu6</td>
                                                <td>Individual</td>
                                                <td>2023-05-28</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>9</td>
                                                <td>2023-05-31 16:16:22</td>
                                                <td>TRTASK_9</td>
                                                </td>
                                                <td>task</td>
                                                <td>All</td>
                                                <td>2023-05-31</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>10</td>
                                                <td>2023-05-31 16:42:08</td>
                                                <td>TRTASK_10</td>
                                                <td>23_Web Technologies Batch 1 Ashok</td>
                                                <td>tirdhala ashok</td>
                                                <td>website building</td>
                                                <td>All</td>
                                                <td>2023-05-31</td>


                                                <td style=color:#E3242B>
                                                    <b>
                                                        Deleted <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>11</td>
                                                <td>2023-06-05 14:43:38</td>
                                                <td>TRTASK_11</td>
                                                <td>23_Web Technologies Batch 1 Ashok</td>
                                                <td>tirdhala ashok</td>
                                                <td>programs for practice in python</td>
                                                <td>All</td>
                                                <td>2023-06-05</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>12</td>
                                                <td>2023-06-05 16:52:32</td>
                                                <td>TRTASK_12</td>
                                                <td>23_Web Technologies Batch 1 Ashok</td>
                                                <td>tirdhala ashok</td>
                                                <td>basic website template for practice</td>
                                                <td>All</td>
                                                <td>2023-06-05</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>13</td>
                                                <td>2023-06-07 12:45:45</td>
                                                <td>TRTASK_13</td>
                                                </td>
                                                <td>triaright</td>
                                                <td>All</td>
                                                <td>2023-06-07</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>14</td>
                                                <td>2023-06-09 17:53:00</td>
                                                <td>TRTASK_14</td>
                                                <td>23_Web Technologies Batch 1 Ashok</td>
                                                <td>tirdhala ashok</td>
                                                <td>write 2 program using css specificity , cascade and inheritance</td>
                                                <td>All</td>
                                                <td>2023-06-09</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>15</td>
                                                <td>2023-06-10 12:51:56</td>
                                                <td>TRTASK_15</td>
                                                <td>7_Python Batch 1 Bala</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Python Parctice Programs</td>
                                                <td>All</td>
                                                <td>2023-06-12</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>16</td>
                                                <td>2023-06-12 18:37:55</td>
                                                <td>TRTASK_16</td>
                                                <td>23_Web Technologies Batch 1 Ashok</td>
                                                <td>tirdhala ashok</td>
                                                <td>a webpage with navbar and carousel</td>
                                                <td>All</td>
                                                <td>2023-06-12</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>17</td>
                                                <td>2023-06-13 22:34:02</td>
                                                <td>TRTASK_17</td>
                                                <td>23_Web Technologies Batch 1 Ashok</td>
                                                <td>tirdhala ashok</td>
                                                <td>web page using navbar,carousel and embed utilities</td>
                                                <td>All</td>
                                                <td>2023-06-13</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>18</td>
                                                <td>2023-06-14 09:32:10</td>
                                                <td>TRTASK_18</td>
                                                <td>14_Medical Coding Batch 1 Tejaswi</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td>anatomy test</td>
                                                <td>All</td>
                                                <td>2023-06-14</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>19</td>
                                                <td>2023-06-14 10:21:29</td>
                                                <td>TRTASK_19</td>
                                                <td>14_Medical Coding Batch 1 Tejaswi</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td>anatomy test</td>
                                                <td>All</td>
                                                <td>2023-06-14</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>20</td>
                                                <td>2023-06-16 15:26:44</td>
                                                <td>TRTASK_20</td>
                                                <td>23_Web Technologies Batch 1 Ashok</td>
                                                <td>tirdhala ashok</td>
                                                <td>restaurant website live project part 1</td>
                                                <td>All</td>
                                                <td>2023-06-15</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>21</td>
                                                <td>2023-06-16 18:06:25</td>
                                                <td>TRTASK_21</td>
                                                <td>23_Web Technologies Batch 1 Ashok</td>
                                                <td>tirdhala ashok</td>
                                                <td>restaurant website part 1 and 2</td>
                                                <td>All</td>
                                                <td>2023-06-16</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>22</td>
                                                <td>2023-06-22 13:40:02</td>
                                                <td>TRTASK_22</td>
                                                <td>18_Medical Coding Batch 2 Tejaswi</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td>anatomy test for certification</td>
                                                <td>All</td>
                                                <td>2023-06-22</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>23</td>
                                                <td>2023-06-22 15:38:38</td>
                                                <td>TRTASK_23</td>
                                                </td>
                                                <td>shyam</td>
                                                <td>Individual</td>
                                                <td>2023-06-21</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>24</td>
                                                <td>2023-06-22 18:04:44</td>
                                                <td>TRTASK_24</td>
                                                <td>23_Web Technologies Batch 1 Ashok</td>
                                                <td>tirdhala ashok</td>
                                                <td>build a website using bootstrap display utilities</td>
                                                <td>All</td>
                                                <td>2023-06-22</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>25</td>
                                                <td>2023-06-23 18:21:32</td>
                                                <td>TRTASK_25</td>
                                                <td>23_Web Technologies Batch 1 Ashok</td>
                                                <td>tirdhala ashok</td>
                                                <td>bootstrap display utilities task</td>
                                                <td>All</td>
                                                <td>2023-06-26</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>26</td>
                                                <td>2023-06-24 10:20:39</td>
                                                <td>TRTASK_26</td>
                                                <td>7_Python Batch 1 Bala</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Mysql Quiz - 2</td>
                                                <td>All</td>
                                                <td>2023-06-25</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>27</td>
                                                <td>2023-06-26 14:18:35</td>
                                                <td>TRTASK_27</td>
                                                </td>
                                                <td>task triaright</td>
                                                <td>All</td>
                                                <td>2023-06-26</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>28</td>
                                                <td>2023-08-11 12:00:33</td>
                                                <td>TRTASK_28</td>
                                                </td>
                                                <td>task triaright</td>
                                                <td>All</td>
                                                <td>2023-08-11</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>29</td>
                                                <td>2023-08-11 13:07:55</td>
                                                <td>TRTASK_29</td>
                                                <td>26_Python Batch 1 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Python Practice Programs(Variables,Datatypes)</td>
                                                <td>All</td>
                                                <td>2023-08-13</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>30</td>
                                                <td>2023-08-17 12:58:25</td>
                                                <td>TRTASK_30</td>
                                                <td>26_Python Batch 1 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>python list programs</td>
                                                <td>All</td>
                                                <td>2023-08-18</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>31</td>
                                                <td>2023-08-19 12:20:57</td>
                                                <td>TRTASK_31</td>
                                                <td>26_Python Batch 1 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>python practice programs</td>
                                                <td>All</td>
                                                <td>2023-08-20</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>32</td>
                                                <td>2023-08-23 15:29:10</td>
                                                <td>TRTASK_32</td>
                                                <td>31_Web Technologies Batch 1 2M</td>
                                                <td>tirdhala ashok</td>
                                                <td>facebook login page</td>
                                                <td>All</td>
                                                <td>2023-08-23</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>33</td>
                                                <td>2023-08-24 16:25:18</td>
                                                <td>TRTASK_33</td>
                                                </td>
                                                <td>ASHOK VARMA</td>
                                                <td>Individual</td>
                                                <td>2023-08-24</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>34</td>
                                                <td>2023-08-25 12:07:48</td>
                                                <td>TRTASK_34</td>
                                                <td>26_Python Batch 1 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>python practice programs</td>
                                                <td>All</td>
                                                <td>2023-08-27</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>35</td>
                                                <td>2023-08-29 11:37:29</td>
                                                <td>TRTASK_35</td>
                                                </td>
                                                <td>task triaright</td>
                                                <td>All</td>
                                                <td>2023-08-29</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>36</td>
                                                <td>2023-08-30 11:19:20</td>
                                                <td>TRTASK_36</td>
                                                <td>32_Medical Coding Batch 1 2M</td>
                                                <td>Ramu</td>
                                                <td>anatomy questions task paper</td>
                                                <td>All</td>
                                                <td>2023-08-30</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>37</td>
                                                <td>2023-08-30 11:34:32</td>
                                                <td>TRTASK_37</td>
                                                </td>
                                                <td>medical coding</td>
                                                <td>All</td>
                                                <td>2023-08-30</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>38</td>
                                                <td>2023-09-04 18:31:53</td>
                                                <td>TRTASK_38</td>
                                                <td>27_Java Batch 1 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Practice Programs</td>
                                                <td>All</td>
                                                <td>2023-09-04</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>39</td>
                                                <td>2023-09-07 15:00:41</td>
                                                <td>TRTASK_39</td>
                                                <td>31_Web Technologies Batch 1 2M</td>
                                                <td>tirdhala ashok</td>
                                                <td>basic website template</td>
                                                <td>All</td>
                                                <td>2023-09-07</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>40</td>
                                                <td>2023-09-08 15:31:09</td>
                                                <td>TRTASK_40</td>
                                                <td>31_Web Technologies Batch 1 2M</td>
                                                <td>tirdhala ashok</td>
                                                <td>build a basic website template</td>
                                                <td>All</td>
                                                <td>2023-09-08</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>41</td>
                                                <td>2023-09-11 00:13:27</td>
                                                <td>TRTASK_41</td>
                                                <td>34_AI & ML Batch 1 2M</td>
                                                <td>Madanu Augustin</td>
                                                <td>Task_1_Basics</td>
                                                <td>All</td>
                                                <td>2023-09-13</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>42</td>
                                                <td>2023-09-12 11:49:34</td>
                                                <td>TRTASK_42</td>
                                                <td>26_Python Batch 1 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Quiz</td>
                                                <td>All</td>
                                                <td>2023-09-11</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>43</td>
                                                <td>2023-09-11 13:10:58</td>
                                                <td>TRTASK_43</td>
                                                <td>32_Medical Coding Batch 1 2M</td>
                                                <td>Ramu</td>
                                                <td>anatomy questions task paper 2</td>
                                                <td>All</td>
                                                <td>2023-09-11</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>44</td>
                                                <td>2023-09-11 17:20:30</td>
                                                <td>TRTASK_44</td>
                                                <td>34_AI & ML Batch 1 2M</td>
                                                <td>Madanu Augustin</td>
                                                <td>Basics</td>
                                                <td>All</td>
                                                <td>2023-09-12</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>45</td>
                                                <td>2023-09-11 18:03:52</td>
                                                <td>TRTASK_45</td>
                                                <td>27_Java Batch 1 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Quiz</td>
                                                <td>All</td>
                                                <td>2023-09-11</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>46</td>
                                                <td>2023-09-12 11:54:45</td>
                                                <td>TRTASK_46</td>
                                                <td>26_Python Batch 1 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Quiz 1</td>
                                                <td>All</td>
                                                <td>2023-09-13</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>47</td>
                                                <td>2023-09-13 15:40:44</td>
                                                <td>TRTASK_47</td>
                                                <td>31_Web Technologies Batch 1 2M</td>
                                                <td>tirdhala ashok</td>
                                                <td>website template with carousel and navbar</td>
                                                <td>All</td>
                                                <td>2023-09-13</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>48</td>
                                                <td>2023-09-13 17:53:08</td>
                                                <td>TRTASK_48</td>
                                                <td>27_Java Batch 1 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Quiz</td>
                                                <td>All</td>
                                                <td>2023-09-14</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>49</td>
                                                <td>2023-09-14 18:17:02</td>
                                                <td>TRTASK_49</td>
                                                <td>34_AI & ML Batch 1 2M</td>
                                                <td>Madanu Augustin</td>
                                                <td>task2</td>
                                                <td>All</td>
                                                <td>2023-09-14</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>50</td>
                                                <td>2023-09-15 12:12:38</td>
                                                <td>TRTASK_50</td>
                                                <td>26_Python Batch 1 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Python practice programs</td>
                                                <td>All</td>
                                                <td>2023-09-15</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>51</td>
                                                <td>2023-09-16 14:55:03</td>
                                                <td>TRTASK_51</td>
                                                <td>27_Java Batch 1 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Practice Programs</td>
                                                <td>All</td>
                                                <td>2023-09-18</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>52</td>
                                                <td>2023-09-25 12:05:03</td>
                                                <td>TRTASK_52</td>
                                                <td>26_Python Batch 1 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>python practice programs</td>
                                                <td>All</td>
                                                <td>2023-09-26</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>53</td>
                                                <td>2023-09-26 17:17:17</td>
                                                <td>TRTASK_53</td>
                                                <td>34_AI & ML Batch 1 2M</td>
                                                <td>Madanu Augustin</td>
                                                <td>Task3</td>
                                                <td>All</td>
                                                <td>2023-09-26</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>54</td>
                                                <td>2023-10-06 16:15:06</td>
                                                <td>TRTASK_54</td>
                                                <td>43_Java Batch 3 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Programs</td>
                                                <td>All</td>
                                                <td>2023-10-06</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>55</td>
                                                <td>2023-10-09 16:12:15</td>
                                                <td>TRTASK_55</td>
                                                <td>43_Java Batch 3 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>JAVA PROGRAMS</td>
                                                <td>All</td>
                                                <td>2023-10-09</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>56</td>
                                                <td>2023-10-09 16:10:52</td>
                                                <td>TRTASK_56</td>
                                                <td>42_Java Batch 2 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Practice Programs</td>
                                                <td>All</td>
                                                <td>2023-10-09</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>57</td>
                                                <td>2023-10-09 15:58:29</td>
                                                <td>TRTASK_57</td>
                                                <td>30_Human Resources Management Batch 1 2M</td>
                                                <td>Madhu Varshini</td>
                                                <td>Prepare Job Description</td>
                                                <td>All</td>
                                                <td>2023-10-10</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>58</td>
                                                <td>2023-10-10 12:12:54</td>
                                                <td>TRTASK_58</td>
                                                <td>42_Java Batch 2 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>java Programs 1</td>
                                                <td>All</td>
                                                <td>2023-10-11</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>59</td>
                                                <td>2023-10-10 15:16:42</td>
                                                <td>TRTASK_59</td>
                                                <td>43_Java Batch 3 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Practice Programs1</td>
                                                <td>All</td>
                                                <td>2023-10-11</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>60</td>
                                                <td>2023-10-10 19:13:21</td>
                                                <td>TRTASK_60</td>
                                                <td>40_Java Fullstack Batch 1 2M & 6M</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td>basic program</td>
                                                <td>All</td>
                                                <td>2023-10-11</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>61</td>
                                                <td>2023-10-11 13:03:46</td>
                                                <td>TRTASK_61</td>
                                                <td>44_Medical Coding Batch 2 2M</td>
                                                <td>Ramu</td>
                                                <td>anatomy questions task paper 1</td>
                                                <td>All</td>
                                                <td>2023-10-11</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>62</td>
                                                <td>2023-12-11 17:11:53</td>
                                                <td>TRTASK_62</td>
                                                <td>39_Medical Coding Batch 3 2M</td>
                                                <td>vijay kumar sampathi</td>
                                                <td>anatomy questions task paper 1 vijay kumar</td>
                                                <td>All</td>
                                                <td>2023-10-11</td>


                                                <td style=color:#E3242B>
                                                    <b>
                                                        Deleted <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>63</td>
                                                <td>2023-10-13 12:43:37</td>
                                                <td>TRTASK_63</td>
                                                <td>42_Java Batch 2 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Programs</td>
                                                <td>All</td>
                                                <td>2023-10-15</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>64</td>
                                                <td>2023-10-13 12:44:23</td>
                                                <td>TRTASK_64</td>
                                                <td>43_Java Batch 3 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Programs</td>
                                                <td>All</td>
                                                <td>2023-10-15</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>65</td>
                                                <td>2023-10-13 15:58:50</td>
                                                <td>TRTASK_65</td>
                                                <td>30_Human Resources Management Batch 1 2M</td>
                                                <td>Madhu Varshini</td>
                                                <td>HR Planning</td>
                                                <td>All</td>
                                                <td>2023-10-16</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>66</td>
                                                <td>2023-10-13 18:51:53</td>
                                                <td>TRTASK_66</td>
                                                <td>40_Java Fullstack Batch 1 2M & 6M</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td>program about variables and datatypes</td>
                                                <td>All</td>
                                                <td>2023-10-13</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>67</td>
                                                <td>2023-10-16 17:56:32</td>
                                                <td>TRTASK_67</td>
                                                <td>48_Human Resource Management Batch 2 2M</td>
                                                <td>Madhu Varshini</td>
                                                <td>HR Planning</td>
                                                <td>All</td>
                                                <td>2023-10-16</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>68</td>
                                                <td>2023-10-16 18:53:56</td>
                                                <td>TRTASK_68</td>
                                                <td>47_Web Technologies Batch 3 2M</td>
                                                <td>tirdhala ashok</td>
                                                <td>a task on css id selectors and anchor tags</td>
                                                <td>All</td>
                                                <td>2023-10-16</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>69</td>
                                                <td>2023-10-16 18:59:40</td>
                                                <td>TRTASK_69</td>
                                                <td>40_Java Fullstack Batch 1 2M & 6M</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td>operators</td>
                                                <td>All</td>
                                                <td>2023-10-18</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>70</td>
                                                <td>2023-10-17 19:10:02</td>
                                                <td>TRTASK_70</td>
                                                <td>48_Human Resource Management Batch 2 2M</td>
                                                <td>Madhu Varshini</td>
                                                <td>HR Planning</td>
                                                <td>All</td>
                                                <td>2023-10-17</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>71</td>
                                                <td>2023-10-18 18:19:51</td>
                                                <td>TRTASK_71</td>
                                                <td>47_Web Technologies Batch 3 2M</td>
                                                <td>tirdhala ashok</td>
                                                <td>a task on css inheritance </td>
                                                <td>All</td>
                                                <td>2023-10-18</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>72</td>
                                                <td>2023-10-19 14:30:57</td>
                                                <td>TRTASK_72</td>
                                                <td>30_Human Resources Management Batch 1 2M</td>
                                                <td>Madhu Varshini</td>
                                                <td>Induction </td>
                                                <td>All</td>
                                                <td>2023-10-19</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>73</td>
                                                <td>2023-10-19 17:51:29</td>
                                                <td>TRTASK_73</td>
                                                <td>39_Medical Coding Batch 3 2M</td>
                                                <td>vijay kumar sampathi</td>
                                                <td>DIGESTIVE SYSTEM ICD CODING TASK</td>
                                                <td>All</td>
                                                <td>2023-10-19</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>74</td>
                                                <td>2023-10-19 19:03:31</td>
                                                <td>TRTASK_74</td>
                                                <td>40_Java Fullstack Batch 1 2M & 6M</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td>type casting, scanner class</td>
                                                <td>All</td>
                                                <td>2023-10-20</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>75</td>
                                                <td>2023-10-20 18:08:01</td>
                                                <td>TRTASK_75</td>
                                                <td>39_Medical Coding Batch 3 2M</td>
                                                <td>vijay kumar sampathi</td>
                                                <td>digestive system total exam</td>
                                                <td>All</td>
                                                <td>2023-10-21</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>76</td>
                                                <td>2023-10-21 11:05:32</td>
                                                <td>TRTASK_76</td>
                                                <td>40_Java Fullstack Batch 1 2M & 6M</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td>Programs on scanner and conditional statements</td>
                                                <td>All</td>
                                                <td>2023-10-23</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>77</td>
                                                <td>2023-10-31 14:22:09</td>
                                                <td>TRTASK_77</td>
                                                <td>42_Java Batch 2 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Quiz</td>
                                                <td>All</td>
                                                <td>2023-10-22</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>78</td>
                                                <td>2023-10-26 16:36:24</td>
                                                <td>TRTASK_78</td>
                                                <td>43_Java Batch 3 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Quiz</td>
                                                <td>All</td>
                                                <td>2023-10-22</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>79</td>
                                                <td>2023-10-25 18:34:06</td>
                                                <td>TRTASK_79</td>
                                                <td>54_Java Batch 4 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Quiz</td>
                                                <td>All</td>
                                                <td>2023-10-26</td>


                                                <td style=color:#E3242B>
                                                    <b>
                                                        Deleted <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>80</td>
                                                <td>2023-10-27 16:01:15</td>
                                                <td>TRTASK_80</td>
                                                <td>43_Java Batch 3 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Quiz</td>
                                                <td>All</td>
                                                <td>2023-10-29</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>81</td>
                                                <td>2023-10-27 16:35:17</td>
                                                <td>TRTASK_81</td>
                                                <td>43_Java Batch 3 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Practice Programs</td>
                                                <td>All</td>
                                                <td>2023-10-30</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>82</td>
                                                <td>2023-10-27 16:40:45</td>
                                                <td>TRTASK_82</td>
                                                <td>54_Java Batch 4 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Practice Programs</td>
                                                <td>All</td>
                                                <td>2023-10-29</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>83</td>
                                                <td>2023-10-27 17:42:42</td>
                                                <td>TRTASK_83</td>
                                                <td>48_Human Resource Management Batch 2 2M</td>
                                                <td>Madhu Varshini</td>
                                                <td>Job Design</td>
                                                <td>All</td>
                                                <td>2023-10-27</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>84</td>
                                                <td>2023-10-27 17:45:48</td>
                                                <td>TRTASK_84</td>
                                                <td>51_Python Batch 1 Shanti 2M</td>
                                                <td>Shanti Kiran</td>
                                                <td>task1</td>
                                                <td>All</td>
                                                <td>2023-10-27</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>85</td>
                                                <td>2023-10-27 18:29:35</td>
                                                <td>TRTASK_85</td>
                                                <td>54_Java Batch 4 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Quiz</td>
                                                <td>All</td>
                                                <td>2023-10-28</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>86</td>
                                                <td>2023-10-30 11:05:49</td>
                                                <td>TRTASK_86</td>
                                                <td>40_Java Fullstack Batch 1 2M & 6M</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td>programs on switch statement and for loop</td>
                                                <td>All</td>
                                                <td>2023-10-31</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>87</td>
                                                <td>2023-10-31 16:20:39</td>
                                                <td>TRTASK_87</td>
                                                <td>43_Java Batch 3 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Practice Programs</td>
                                                <td>All</td>
                                                <td>2023-11-01</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>88</td>
                                                <td>2023-10-31 18:39:01</td>
                                                <td>TRTASK_88</td>
                                                <td>54_Java Batch 4 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Practice Programs</td>
                                                <td>All</td>
                                                <td>2023-11-01</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>89</td>
                                                <td>2023-11-01 13:19:43</td>
                                                <td>TRTASK_89</td>
                                                <td>42_Java Batch 2 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Quiz</td>
                                                <td>All</td>
                                                <td>2023-11-02</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>90</td>
                                                <td>2023-11-02 12:47:30</td>
                                                <td>TRTASK_90</td>
                                                <td>44_Medical Coding Batch 2 2M</td>
                                                <td>Ramu</td>
                                                <td>anatomy questions task paper 2</td>
                                                <td>All</td>
                                                <td>2023-11-02</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>91</td>
                                                <td>2023-11-02 13:30:42</td>
                                                <td>TRTASK_91</td>
                                                <td>42_Java Batch 2 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Practice Programs</td>
                                                <td>All</td>
                                                <td>2023-11-03</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>92</td>
                                                <td>2023-11-03 17:31:02</td>
                                                <td>TRTASK_92</td>
                                                <td>39_Medical Coding Batch 3 2M</td>
                                                <td>vijay kumar sampathi</td>
                                                <td>respiratory system</td>
                                                <td>All</td>
                                                <td>2023-11-03</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>93</td>
                                                <td>2023-11-03 19:14:36</td>
                                                <td>TRTASK_93</td>
                                                <td>48_Human Resource Management Batch 2 2M</td>
                                                <td>Madhu Varshini</td>
                                                <td>Hiring Post Sample</td>
                                                <td>All</td>
                                                <td>2023-11-03</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>94</td>
                                                <td>2023-11-04 11:55:30</td>
                                                <td>TRTASK_94</td>
                                                <td>43_Java Batch 3 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Exam</td>
                                                <td>All</td>
                                                <td>2023-11-05</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>95</td>
                                                <td>2023-11-04 11:54:08</td>
                                                <td>TRTASK_95</td>
                                                <td>42_Java Batch 2 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Exam</td>
                                                <td>All</td>
                                                <td>2023-11-05</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>96</td>
                                                <td>2023-11-04 11:54:52</td>
                                                <td>TRTASK_96</td>
                                                <td>54_Java Batch 4 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Exam</td>
                                                <td>All</td>
                                                <td>2023-11-05</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>97</td>
                                                <td>2023-11-06 14:52:31</td>
                                                <td>TRTASK_97</td>
                                                <td>43_Java Batch 3 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Exam</td>
                                                <td>All</td>
                                                <td>2023-11-06</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>98</td>
                                                <td>2023-11-06 17:34:22</td>
                                                <td>TRTASK_98</td>
                                                <td>39_Medical Coding Batch 3 2M</td>
                                                <td>vijay kumar sampathi</td>
                                                <td>digestive system task</td>
                                                <td>All</td>
                                                <td>2023-11-06</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>99</td>
                                                <td>2023-11-06 18:32:00</td>
                                                <td>TRTASK_99</td>
                                                <td>51_Python Batch 1 Shanti 2M</td>
                                                <td>Shanti Kiran</td>
                                                <td>TASK2</td>
                                                <td>All</td>
                                                <td>2023-11-07</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>100</td>
                                                <td>2023-11-08 18:01:19</td>
                                                <td>TRTASK_100</td>
                                                <td>48_Human Resource Management Batch 2 2M</td>
                                                <td>Madhu Varshini</td>
                                                <td>Induction PPT</td>
                                                <td>All</td>
                                                <td>2023-11-08</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>101</td>
                                                <td>2023-11-10 18:48:24</td>
                                                <td>TRTASK_101</td>
                                                <td>52_Tally + GST Batch 1 2M</td>
                                                <td>K Bharath Kumar</td>
                                                <td>Send the Screen Shots of All Bank Accounts Closing Balance values
                                                </td>
                                                <td>All</td>
                                                <td>2023-11-12</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>102</td>
                                                <td>2023-11-11 12:04:11</td>
                                                <td>TRTASK_102</td>
                                                <td>42_Java Batch 2 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Practice Programs</td>
                                                <td>All</td>
                                                <td>2023-11-11</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>103</td>
                                                <td>2023-11-11 12:05:57</td>
                                                <td>TRTASK_103</td>
                                                <td>54_Java Batch 4 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Practice Programs</td>
                                                <td>All</td>
                                                <td>2023-11-11</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>104</td>
                                                <td>2023-11-13 17:48:45</td>
                                                <td>TRTASK_104</td>
                                                <td>55_Medical Coding Batch 4 2M</td>
                                                <td>Ramu</td>
                                                <td>medical coding</td>
                                                <td>All</td>
                                                <td>2023-11-13</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>105</td>
                                                <td>2023-11-17 19:00:25</td>
                                                <td>TRTASK_105</td>
                                                <td>51_Python Batch 1 Shanti 2M</td>
                                                <td>Shanti Kiran</td>
                                                <td>Task3</td>
                                                <td>All</td>
                                                <td>2023-11-17</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>106</td>
                                                <td>2023-11-22 17:03:21</td>
                                                <td>TRTASK_106</td>
                                                <td>55_Medical Coding Batch 4 2M</td>
                                                <td>Ramu</td>
                                                <td>medical coding</td>
                                                <td>All</td>
                                                <td>2023-11-22</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>107</td>
                                                <td>2023-11-28 11:49:18</td>
                                                <td>TRTASK_107</td>
                                                <td>51_Python Batch 1 Shanti 2M</td>
                                                <td>Shanti Kiran</td>
                                                <td>PPT ON INHERITANCE TOPICS</td>
                                                <td>All</td>
                                                <td>2023-11-28</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>108</td>
                                                <td>2023-12-04 17:46:40</td>
                                                <td>TRTASK_108</td>
                                                <td>40_Java Fullstack Batch 1 2M & 6M</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td>Programs on operators and scanner class</td>
                                                <td>All</td>
                                                <td>2023-12-06</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>109</td>
                                                <td>2023-12-05 18:46:07</td>
                                                <td>TRTASK_109</td>
                                                <td>40_Java Fullstack Batch 1 2M & 6M</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td>conditional and loop statements</td>
                                                <td>All</td>
                                                <td>2023-12-07</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>110</td>
                                                <td>2023-12-09 11:50:03</td>
                                                <td>TRTASK_111</td>
                                                <td>40_Java Fullstack Batch 1 2M & 6M</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td>program on arrays</td>
                                                <td>All</td>
                                                <td>2023-12-10</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>111</td>
                                                <td>2023-12-09 12:17:12</td>
                                                <td>TRTASK_112</td>
                                                <td>40_Java Fullstack Batch 1 2M & 6M</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td>ashok varma123</td>
                                                <td>All</td>
                                                <td>2023-12-09</td>


                                                <td style=color:#E3242B>
                                                    <b>
                                                        Deleted <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>112</td>
                                                <td>2023-12-14 19:03:11</td>
                                                <td>TRTASK_113</td>
                                                <td>40_Java Fullstack Batch 1 2M & 6M</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td>Programs upto Conditional statements which are discussed in class
                                                </td>
                                                <td>All</td>
                                                <td>2023-12-14</td>


                                                <td style=color:#E3242B>
                                                    <b>
                                                        Deleted <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>113</td>
                                                <td>2023-12-15 18:52:23</td>
                                                <td>TRTASK_114</td>
                                                <td>40_Java Fullstack Batch 1 2M & 6M</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td>Programs upto conditional statements which are discussed in class
                                                </td>
                                                <td>All</td>
                                                <td>2023-12-17</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>114</td>
                                                <td>2023-12-20 14:04:48</td>
                                                <td>TRTASK_115</td>
                                                <td>40_Java Fullstack Batch 1 2M & 6M</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td>Programs on Arrays</td>
                                                <td>All</td>
                                                <td>2023-12-22</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>115</td>
                                                <td>2023-12-28 14:26:47</td>
                                                <td>TRTASK_116</td>
                                                <td>42_Java Batch 2 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Practice Programs</td>
                                                <td>All</td>
                                                <td>2023-12-29</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>116</td>
                                                <td>2023-12-30 11:40:48</td>
                                                <td>TRTASK_117</td>
                                                <td>42_Java Batch 2 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Quiz</td>
                                                <td>All</td>
                                                <td>2023-12-30</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>117</td>
                                                <td>2024-01-06 11:18:10</td>
                                                <td>TRTASK_118</td>
                                                <td>42_Java Batch 2 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Programs</td>
                                                <td>All</td>
                                                <td>2024-01-07</td>


                                                <td style=color:#E3242B>
                                                    <b>
                                                        Deleted <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>118</td>
                                                <td>2024-01-06 11:18:10</td>
                                                <td>TRTASK_119</td>
                                                <td>42_Java Batch 2 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Programs</td>
                                                <td>All</td>
                                                <td>2024-01-07</td>


                                                <td style=color:#E3242B>
                                                    <b>
                                                        Deleted <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>119</td>
                                                <td>2024-01-06 11:18:10</td>
                                                <td>TRTASK_120</td>
                                                <td>42_Java Batch 2 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Programs</td>
                                                <td>All</td>
                                                <td>2024-01-07</td>


                                                <td style=color:#E3242B>
                                                    <b>
                                                        Deleted <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>120</td>
                                                <td>2024-01-06 11:23:23</td>
                                                <td>TRTASK_121</td>
                                                <td>42_Java Batch 2 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Programs</td>
                                                <td>All</td>
                                                <td>2024-01-07</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>121</td>
                                                <td>2024-01-06 14:34:44</td>
                                                <td>TRTASK_122</td>
                                                <td>60_Python Batch 1 2M</td>
                                                <td>V Bala Tripura Sunadri </td>
                                                <td>Python Quiz</td>
                                                <td>All</td>
                                                <td>2024-01-07</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>122</td>
                                                <td>2024-01-08 13:31:38</td>
                                                <td>TRTASK_123</td>
                                                <td>42_Java Batch 2 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Programs</td>
                                                <td>All</td>
                                                <td>2024-01-09</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>123</td>
                                                <td>2024-01-25 14:25:49</td>
                                                <td>TRTASK_124</td>
                                                <td>62_PYTHON</td>
                                                <td>Shanti Kiran</td>
                                                <td>task1</td>
                                                <td>All</td>
                                                <td>2024-01-25</td>


                                                <td style=color:#E3242B>
                                                    <b>
                                                        Deleted <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>124</td>
                                                <td>2024-01-25 16:08:22</td>
                                                <td>TRTASK_125</td>
                                                <td>62_PYTHON</td>
                                                <td>Shanti Kiran</td>
                                                <td>task1</td>
                                                <td>All</td>
                                                <td>2024-01-25</td>


                                                <td style=color:#E3242B>
                                                    <b>
                                                        Deleted <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>125</td>
                                                <td>2024-01-25 16:22:20</td>
                                                <td>TRTASK_126</td>
                                                <td>51_Python Batch 1 Shanti 2M</td>
                                                <td>Shanti Kiran</td>
                                                <td>hello</td>
                                                <td>All</td>
                                                <td>2024-01-26</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>126</td>
                                                <td>2024-01-27 10:27:35</td>
                                                <td>TRTASK_127</td>
                                                <td>40_Java Fullstack Batch 1 2M & 6M</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td>JAVA PROGRAMS</td>
                                                <td>All</td>
                                                <td>2024-01-28</td>


                                                <td style=color:#E3242B>
                                                    <b>
                                                        Deleted <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>127</td>
                                                <td>2024-01-27 10:52:49</td>
                                                <td>TRTASK_128</td>
                                                <td>40_Java Fullstack Batch 1 2M & 6M</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td>hello </td>
                                                <td>All</td>
                                                <td>2024-01-18</td>


                                                <td style=color:#E3242B>
                                                    <b>
                                                        Deleted <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>128</td>
                                                <td>2024-01-27 12:21:00</td>
                                                <td>TRTASK_129</td>
                                                <td>42_Java Batch 2 2M</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td>Java Quiz-2</td>
                                                <td>All</td>
                                                <td>2024-01-28</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>129</td>
                                                <td>2024-01-27 13:36:08</td>
                                                <td>TRTASK_130</td>
                                                <td>60_Python Batch 1 2M</td>
                                                <td>V Bala Tripura Sunadri </td>
                                                <td>Python Quiz</td>
                                                <td>All</td>
                                                <td>2024-01-27</td>


                                                <td style=color:#4aa02c>
                                                    <b>
                                                        Active <b>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>130</td>
                                                <td>2024-01-29 16:53:58</td>
                                                <td>TRTASK_131</td>
                                                <td>40_Java Fullstack Batch 1 2M & 6M</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td>cxzvx</td>
                                                <td>All</td>
                                                <td>2024-01-25</td>


                                                <td style=color:#E3242B>
                                                    <b>
                                                        Deleted <b>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->


                <div class="modal fade" id="accept">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to accept a schedule??</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">Accept</button>
                                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="reject">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to reject a schedule??</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">Reject</button>
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

                                <p> Are you sure you want to Unblock a employee??</p>
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