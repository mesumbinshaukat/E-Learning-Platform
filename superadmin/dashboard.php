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

    <title>Dashboard</title>

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
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch25" id="myonoffswitch54" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch54" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">RTL</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch25" id="myonoffswitch55" class="onoffswitch2-checkbox">
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
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch34" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizantal Click Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch35" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch35" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizantal Hover Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch111" class="onoffswitch2-checkbox">
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
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Primary</span>
                                        <div class="">
                                            <input class="wd-25 ht-25 input-color-picker color-primary-light" value="#38cab3" id="colorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id7="transparentcolor" name="lightPrimary">
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
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Primary</span>
                                        <div class="">
                                            <input class="wd-25 ht-25 input-dark-color-picker color-primary-dark" value="#38cab3" id="darkPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id8="transparentcolor" name="darkPrimary">
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
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitchTransparent" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitchTransparent" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Transparent Primary</span>
                                        <div class="">
                                            <input class="wd-30 ht-30 input-transparent-color-picker color-primary-transparent" value="#38cab3" id="transparentPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary" data-id9="transparentcolor" name="tranparentPrimary">
                                        </div>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Transparent Background</span>
                                        <div class="">
                                            <input class="wd-30 ht-30 input-transparent-color-picker color-bg-transparent" value="#38cab3" id="transparentBgColorID" type="color" data-id5="body" data-id6="theme" data-id9="transparentcolor" name="transparentBackground">
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
                                            <input class="wd-30 ht-30 input-transparent-color-picker color-bgImg-transparent" value="#38cab3" id="transparentBgImgPrimaryColorID" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary" data-id9="transparentcolor" name="tranparentPrimary">
                                        </div>
                                    </div>
                                    <div class="switch-toggle">
                                        <a class="bg-img1 bg-img" href="javascript:void(0);"><img src="assets/img/media/bg-img1.jpg" id="bgimage1" alt="switch-img"></a>
                                        <a class="bg-img2 bg-img" href="javascript:void(0);"><img src="assets/img/media/bg-img2.jpg" id="bgimage2" alt="switch-img"></a>
                                        <a class="bg-img3 bg-img" href="javascript:void(0);"><img src="assets/img/media/bg-img3.jpg" id="bgimage3" alt="switch-img"></a>
                                        <a class="bg-img4 bg-img" href="javascript:void(0);"><img src="assets/img/media/bg-img4.jpg" id="bgimage4" alt="switch-img"></a>
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
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch3" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Color Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch4" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch5" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Gradient Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch25" class="onoffswitch2-checkbox">
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
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch6" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Color Header</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch7" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Header</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch8" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Gradient Header</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch26" class="onoffswitch2-checkbox">
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
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4" id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Boxed</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4" id="myonoffswitch10" class="onoffswitch2-checkbox">
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
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5" id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Scrollable</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5" id="myonoffswitch12" class="onoffswitch2-checkbox">
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
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
                                            <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Closed Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch30" class="onoffswitch2-checkbox default-menu">
                                            <label for="myonoffswitch30" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon with Text</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch14" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon Overlay</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch15" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch32" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch32" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu style 1</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch33" class="onoffswitch2-checkbox">
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
                            <a class="open-toggle" href="javascript:void(0);"><i class="header-icon bi bi-distribute-vertical"></i></a>
                            <a class="close-toggle" href="javascript:void(0);"><i class="header-icon bi bi-x-lg"></i></a>
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
        <!-- main-content -->
        <div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">


                <!-- breadcrumb -->
                <div class="breadcrumb-header justify-content-between">
                    <div class="left-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Dashboard</span>
                    </div>
                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>

                        </ol>
                    </div>
                </div>
                <!-- /breadcrumb -->
                <div class="row">


                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="card-title pb-0  mb-2">Credentials - student</div>

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">

                                        <label class="tx-12">Sign up</label>
                                        <a href="candidatesignup.php" style="color:#1D71F2">
                                            <p class="font-weight-bold tx-24">16</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Pending</label>
                                        <a href="pendingstudent.php" style="color:#FF6700">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Total </label>
                                        <a href="studentlist.php" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">5049</p>
                                        </a>
                                    </div><!-- col -->

                                </div><!-- row -->

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <label class="tx-12">Rejected</label>
                                        <a href="studentlist.php?type=rejected" style="color:#FF0000">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Block</label>
                                        <a href="studentlist.php?type=block" style="color:#FF6700">
                                            <p class="font-weight-bold tx-24">1</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Active</label>
                                        <a href="studentlist.php?type=active" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">5032</p>
                                        </a>
                                    </div><!-- col -->

                                    <div class="col border-start text-center">
                                        <label class="tx-12">Delete</label>
                                        <a href="studentlist.php?type=delete" style="color:#000000">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->


                                </div><!-- row -->


                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="card-title pb-0  mb-2">Credentials - College</div>

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <label class="tx-12">Sign up</label>
                                        <a href="collegesignup.php" style="color:#1D71F2">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Pending</label>
                                        <a href="pendingcollege.php" style="color:#FF6700">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Total</label>
                                        <a href="collegelist.php" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">55</p>
                                        </a>
                                    </div><!-- col -->

                                </div><!-- row -->

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <label class="tx-12">Rejected</label>
                                        <a href="collegelist.php?type=rejected" style="color:#FF0000">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Block</label>
                                        <a href="collegelist.php?type=block" style="color:#FF6700">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Active</label>
                                        <a href="collegelist.php?type=active" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">55</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Delete</label>
                                        <a href="collegelist.php?type=delete" style="color:#000000">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->

                                </div><!-- row -->


                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="card-title pb-0  mb-2">Credentials - Company</div>

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <label class="tx-12">Sign up</label>
                                        <a href="companysignup.php" style="color:#1D71F2">
                                            <p class="font-weight-bold tx-24">9</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Pending</label>
                                        <a href="pendingcompany.php" style="color:#FF6700">
                                            <p class="font-weight-bold tx-24">1</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Total</label>
                                        <a href="managecompany.php" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">20</p>
                                        </a>
                                    </div><!-- col -->

                                </div><!-- row -->

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <label class="tx-12">Rejected</label>
                                        <a href="companylist.php?type=rejected" style="color:#FF0000">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Block</label>
                                        <a href="companylist.php?type=block" style="color:#FF6700">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Active</label>
                                        <a href="companylist.php?type=active" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">7</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Delete</label>
                                        <a href="companylist.php?type=delete" style="color:#000000">
                                            <p class="font-weight-bold tx-24">3</p>
                                        </a>
                                    </div><!-- col -->

                                </div><!-- row -->


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="card-title pb-0  mb-2">Credentials - College Mentor</div>

                            </div>
                            <div class="card-body">
                                <div class="row">


                                    <div class="col border-start text-center">
                                        <label class="tx-12">Total</label>
                                        <a href="managementor.php" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">14</p>
                                        </a>
                                    </div><!-- col -->

                                </div><!-- row -->

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!--										<div class="col text-center">-->
                                    <!--											<label class="tx-12">Rejected</label>-->
                                    <!--<a href="mentorlist.php?type=rejected" style="color:#FF0000"><p class="font-weight-bold tx-24">14</p></a>-->
                                    <!--										</div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Block</label>
                                        <a href="mentorlist.php?type=block" style="color:#FF6700">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Active</label>
                                        <a href="mentorlist.php?type=active" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">14</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Delete</label>
                                        <a href="mentorlist.php?type=delete" style="color:#000000">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->

                                </div><!-- row -->


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="card-title pb-0  mb-2">Credentials - Trainer</div>

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <label class="tx-12">Sign up</label>
                                        <a href="trainersignup.php" style="color:#1D71F2">
                                            <p class="font-weight-bold tx-24">6</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Pending</label>
                                        <a href="pendingtrainer.php" style="color:#FF6700">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Total</label>
                                        <a href="trainerlist.php" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">43</p>
                                        </a>
                                    </div><!-- col -->


                                </div><!-- row -->

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <label class="tx-12">Rejected</label>
                                        <a href="trainerlist.php?type=rejected" style="color:#FF0000">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Block</label>
                                        <a href="trainerlist.php?type=block" style="color:#FF6700">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Active</label>
                                        <a href="trainerlist.php?type=active" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">34</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Delete</label>
                                        <a href="trainerlist.php?type=delete" style="color:#000000">
                                            <p class="font-weight-bold tx-24">3</p>
                                        </a>
                                    </div><!-- col -->
                                </div><!-- row -->


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="card-title pb-0  mb-2">Credentials - Employee</div>

                            </div>
                            <div class="card-body">
                                <div class="row">


                                    <div class="col border-start text-center">
                                        <label class="tx-12">Total</label>
                                        <a href="manageemployee.php" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">8</p>
                                        </a>
                                    </div><!-- col -->

                                </div><!-- row -->

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!--										<div class="col text-center">-->
                                    <!--											<label class="tx-12">Rejected</label>-->
                                    <!--<a href="employeelist.php?type=rejected" style="color:#FF0000"><p class="font-weight-bold tx-24">8</p></a>-->
                                    <!--										</div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Block</label>
                                        <a href="employeelist.php?type=block" style="color:#FF6700">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Active</label>
                                        <a href="employeelist.php?type=active" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">8</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Delete</label>
                                        <a href="employeelist.php?type=delete" style="color:#000000">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                </div><!-- row -->


                            </div>
                        </div>
                    </div>

                </div>

                <div class="breadcrumb-header justify-content-between">
                    <div class="left-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Courses</span>
                    </div>
                </div>
                <div class="row row-sm">
                    <div class="col-lg-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-header pb-1">
                                <div class="card-title mb-2">Listings</div>
                            </div>
                            <div class="card-body p-0">
                                <div class="list-group projects-list border-0">
                                    <a href="courselist.php" style="color:#1d71f2" class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Registered</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>18</b></h4>
                                        </div>
                                    </a>
                                    <a href="courselist.php?type=active" style="color:#4AA02C" class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Active</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>18</b></h4>
                                        </div>
                                    </a>
                                    <a href="courselist.php?type=pause" style="color:#ff6700" class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Paused</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>0</b></h4>
                                        </div>
                                    </a>
                                    <a href="courselist.php?type=delete" style="color:#000000" class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Delete</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>0</b></h4>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-header pb-1">
                                <div class="card-title mb-2">Registrations</div>
                            </div>
                            <div class="card-body p-0">
                                <div class="list-group projects-list border-0">
                                    <a href="courseregistrationslist.php" style="color:#1d71f2" class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Applied</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>4046</b></h4>
                                        </div>
                                    </a>
                                    <a href="pendingcourseregistrations.php" style="color:#ff6700" class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Pending</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>0</b></h4>
                                        </div>
                                        <a href="managecourseregistrations.php" style="color:#4AA02C" class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <p class="tx-13 mb-2 font-weight-semibold ">Accepted</p>
                                                <h4 class=" mb-0 font-weight-semibold  tx-18"><b>3978</b></h4>
                                            </div>
                                        </a>

                                    </a>
                                    <a href="courseregistrationslist.php?type=rejected" style="color:#ff0000" class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Rejected</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>12</b></h4>
                                        </div>
                                    </a>
                                    <a href="courseregistrationslist.php?type=delete" style="color:#ff0000" class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Deleted</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>50</b></h4>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-header pb-1">
                                <div class="card-title mb-2">Allocation</div>
                            </div>
                            <div class="card-body p-0">
                                <div class="list-group projects-list border-0">
                                    <a href="managecourseregistrations.php" style="color:#1d71f2" class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Available</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>3978</b></h4>
                                        </div>
                                    </a>
                                    <a href="managestudentallocation.php" style="color:#4AA02C" class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Allocated</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>3921</b></h4>
                                        </div>
                                    </a>
                                    <a href="managestudentdeallocation.php" style="color:#ff6700" class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Unallocated</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>57</b></h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-header pb-1">
                                <div class="card-title mb-2">Student batch</div>
                            </div>
                            <div class="card-body p-0">
                                <div class="list-group projects-list border-0">
                                    <a href="batchlist.php" style="color:#1d71f2" class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Created</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>52</b></h4>
                                        </div>
                                    </a>
                                    <a href="batchlist.php?type=active" style="color:#ff6700" class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Active</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>16</b></h4>
                                        </div>
                                    </a>
                                    <a href="batchlist.php?type=complete" style="color:#4AA02C" class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Completed</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>31</b></h4>
                                        </div>
                                    </a>
                                    <a href="batchlist.php?type=delete" style="color:#4AA02C" class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Deleted</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>5</b></h4>
                                        </div>
                                    </a>
                                    <a href="allocationstudentlist.php?type=batch" style="color:#ff6700" class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Students</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>3980</b></h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="breadcrumb-header justify-content-between">
                    <div class="left-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Others</span>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="card-title pb-0  mb-2">Payments Analysis</div>

                            </div>
                            <div class="card-body">

                                <div class="col text-center">
                                    <label class="tx-14">Expected Revenue</label>

                                    <a href="managecourseregistrations.php" style="color:#1d71f2">
                                        <p class="font-weight-bold tx-24">14922500</p>
                                    </a>
                                </div>

                                <!-- col -->


                                <!--			<div class="col border-start text-center">-->
                                <!--				<label class="tx-14">Acutal Revenue</label>-->
                                <!--<a  style="color:#000000"><p class="font-weight-bold tx-24">6364800</p></a>-->
                                <!--			</div>-->
                                <!-- col -->

                                <div class="col border-start text-center">
                                    <label class="tx-14">Received college </label>
                                    <a href="paymentslist.php?type=receivedcollege" style="color:#4AA02c">
                                        <p class="font-weight-bold tx-24">10000</p>
                                    </a>
                                </div><!-- col -->


                                <div class="col border-start text-center">
                                    <label class="tx-14">Received individuals </label>
                                    <a href="paymentslist.php?type=receivedindividuals" style="color:#4AA02c">
                                        <p class="font-weight-bold tx-24">2147968289</p>
                                    </a>
                                </div><!-- col -->


                                <div class="col border-start text-center">
                                    <label class="tx-14">Hold </label>
                                    <a href="paymentslist.php?type=hold" style="color:#ff6700">
                                        <p class="font-weight-bold tx-24"></p>
                                    </a>
                                </div><!-- col -->

                                <div class="col border-start text-center">
                                    <label class="tx-14">Remaining</label>
                                    <a href="paymentslist.php?type=remaining" style="color:#ff0000">
                                        <p class="font-weight-bold tx-24">-2133055789</p>
                                    </a>
                                </div><!-- col -->

                                <div class="col border-start text-center">
                                    <label class="tx-14">Rejected </label>
                                    <a href="paymentslist.php?type=rejected" style="color:#000000">
                                        <p class="font-weight-bold tx-24">2147502852</p>
                                    </a>
                                </div><!-- col -->



                            </div>

                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="card-title pb-0  mb-2">Internships</div>

                            </div>
                            <div class="card-body">

                                <div class="col text-center">
                                    <label class="tx-14">Listed</label>
                                    <a href="internshipcompanylist.php" style="color:#1d71f2">
                                        <p class="font-weight-bold tx-24">1</p>
                                    </a>
                                </div><!-- col -->
                                <div class="col border-start text-center">
                                    <label class="tx-14">Companies</label>
                                    <a style="color:#1d71f2" href="managecompanyinternship.php">
                                        <p class="font-weight-bold tx-24">1</p>
                                    </a>
                                </div><!-- col -->
                                <div class="col border-start text-center">
                                    <label class="tx-14">Vacancies</label>
                                    <a href="managecompanyinternship.php" style="color:#1d71f2">
                                        <p class="font-weight-bold tx-24">50</p>
                                    </a>
                                </div><!-- col -->

                                <div class="col border-start text-center">
                                    <label class="tx-14">Applicants</label>
                                    <a href="internshipregistrationlist.php" style="color:#000000">
                                        <p class="font-weight-bold tx-24">12</p>
                                    </a>
                                </div><!-- col -->

                                <div class="col border-start text-center">
                                    <label class="tx-14">Hold</label>
                                    <a href="pendinginternshipregistrations.php" style="color:#ff6700">
                                        <p class="font-weight-bold tx-24">2</p>
                                    </a>
                                </div><!-- col -->

                                <div class="col border-start text-center">
                                    <label class="tx-14">Selected </label>
                                    <a href="internshipregistrationlist.php?type=selected" style="color:#4AA20C">
                                        <p class="font-weight-bold tx-24">9</p>
                                    </a>
                                </div><!-- col -->
                                <div class="col border-start text-center">
                                    <label class="tx-14">Not selected & Deleted </label>
                                    <a href="internshipregistrationlist.php?type=notselected" style="color:#FF0000">
                                        <p class="font-weight-bold tx-24">1</p>
                                    </a>
                                </div><!-- col -->



                            </div>

                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="card-title pb-0  mb-2">Placements</div>

                            </div>
                            <div class="card-body">

                                <div class="col text-center">
                                    <label class="tx-14">Listed</label>
                                    <a href="placementcompanylist.php" style="color:#1d71f2">
                                        <p class="font-weight-bold tx-24">0</p>
                                    </a>
                                </div><!-- col -->
                                <div class="col border-start text-center">
                                    <label class="tx-14">Companies</label>
                                    <a style="color:#1d71f2">
                                        <p class="font-weight-bold tx-24">0</p>
                                    </a>
                                </div><!-- col -->
                                <div class="col border-start text-center">
                                    <label class="tx-14">Vacancies</label>
                                    <a href="placementcompanylist.php" style="color:#1d71f2">
                                        <p class="font-weight-bold tx-24"></p>
                                    </a>
                                </div><!-- col -->

                                <div class="col border-start text-center">
                                    <label class="tx-14">Applicants</label>
                                    <a href="placementcompanylist.php" style="color:#000000">
                                        <p class="font-weight-bold tx-24">4</p>
                                    </a>
                                </div><!-- col -->

                                <div class="col border-start text-center">
                                    <label class="tx-14">Hold</label>
                                    <a href="pendingplacementsregistrations.php" style="color:#ff6700">
                                        <p class="font-weight-bold tx-24">0</p>
                                    </a>
                                </div><!-- col -->

                                <div class="col border-start text-center">
                                    <label class="tx-14">Selected </label>
                                    <a href="placementsregistrationlist.php?type=selected" style="color:#4AA20C">
                                        <p class="font-weight-bold tx-24">0</p>
                                    </a>
                                </div><!-- col -->
                                <div class="col border-start text-center">
                                    <label class="tx-14">Not selected & Deleted </label>
                                    <a href="placementsregistrationlist.php?type=notselected" style="color:#FF0000">
                                        <p class="font-weight-bold tx-24">4</p>
                                    </a>
                                </div><!-- col -->



                            </div>

                        </div>
                    </div>


                    <div class="main-footer">
                        <div class="container-fluid pd-t-0-f ht-100p">
                            Copyrights ©TriaRight 2023. All rights reserved by <a href="https://www.triaright.com" class="text-primary">TriaRight</a> developed by <span class="fa fa-heart text-danger"></span><a href="http://www.mycompany.co.in" class="text-primary"> MY Company</a>.
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