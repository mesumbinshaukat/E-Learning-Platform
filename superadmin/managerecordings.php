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
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Trainer
                            Recordings</span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">internship management</a>
                            </li>
                            <li class="breadcrumb-item ">Recordings</li>
                            <li class="breadcrumb-item ">Manage</li>
                        </ol>
                    </div>

                </div>
                <form method="post">
                    <div class="row row-sm">
                        <div class="form-group col-md-3">
                            <b> <label>Trainer name</label> </b>
                            <select name="trainer_name" class="form-control form-select"
                                data-bs-placeholder="Select Filter">
                                <option value="ALL">ALL</option>

                                <option value="2">2_M Sandeep Kumar</option>

                                <option value="14">14_saitejaswi kolliboina</option>

                                <option value="12">12_Senthan M S V S</option>


                                <option value="9">9_Nikhil Chakka</option>

                                <option value="13">13_Shiva Krishna</option>

                                <option value="1">1_Nandamuru Koteswara Rao</option>

                                <option value="7">7_V Bala Tripura Sunadri</option>

                                <option value="18">18_saitejaswi kolliboina</option>

                                <option value="15">15_Vasundhara</option>

                                <option value="20">20_Saieshwari Gogu</option>

                                <option value="11">11_Shaik Ashraf rahil</option>

                                <option value="3">3_Uma Kiran V</option>

                                <option value="4">4_Uma Kiran V</option>

                                <option value="23">23_tirdhala ashok</option>

                                <option value="6">6_V Bala Tripura Sunadri</option>

                                <option value="10">10_Shaik Ashraf rahil</option>

                                <option value="16">16_Narender</option>

                                <option value="31">31_tirdhala ashok</option>

                                <option value="32">32_Ramu</option>

                                <option value="29">29_Mekanaboyina Venkata murali Krishna</option>

                                <option value="34">34_Madanu Augustin</option>

                                <option value="26">26_V Bala Tripura Sunadri</option>

                                <option value="37">37_Madanu Augustin</option>

                                <option value="28">28_Saieshwari Gogu</option>

                                <option value="27">27_V Bala Tripura Sunadri</option>

                                <option value="44">44_Ramu</option>

                                <option value="30">30_Madhu Varshini</option>

                                <option value="43">43_V Bala Tripura Sunadri</option>

                                <option value="42">42_V Bala Tripura Sunadri</option>

                                <option value="45">45_tirdhala ashok</option>

                                <option value="50">50_Srinivas Yerrravelli</option>

                                <option value="41">41_Srinivas Yerrravelli </option>

                                <option value="47">47_tirdhala ashok</option>

                                <option value="39">39_vijay kumar sampathi</option>

                                <option value="40">40_Tiruvidhula Naga Sai Priyanka</option>

                                <option value="48">48_Madhu Varshini</option>

                                <option value="51">51_Shanti Kiran</option>

                                <option value="52">52_K Bharath Kumar</option>

                                <option value="54">54_V Bala Tripura Sunadri</option>

                                <option value="55">55_Ramu</option>

                                <option value="56">56_tirdhala ashok</option>

                                <option value="59">59_M Sandeep Kumar</option>

                                <option value="60">60_V Bala Tripura Sunadri </option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <b> <label>Date Of Upload</label> </b>

                            <select name="Date_of_Upload" class="form-control form-select"
                                data-bs-placeholder="Select Filter">

                                <option value="ALL" selected="selected">ALL</option>
                                <option value="2023-05-04">2023-05-04</option>
                                <option value="2023-05-05">2023-05-05</option>
                                <option value="2023-05-08">2023-05-08</option>
                                <option value="2023-05-09">2023-05-09</option>
                                <option value="2023-05-10">2023-05-10</option>
                                <option value="2023-05-11">2023-05-11</option>
                                <option value="2023-05-12">2023-05-12</option>
                                <option value="2023-05-15">2023-05-15</option>
                                <option value="2023-05-17">2023-05-17</option>
                                <option value="2023-05-18">2023-05-18</option>
                                <option value="2023-04-10">2023-04-10</option>
                                <option value="2023-05-03">2023-05-03</option>
                                <option value="2023-05-16">2023-05-16</option>
                                <option value="2023-05-19">2023-05-19</option>
                                <option value="2023-05-22">2023-05-22</option>
                                <option value="2222-02-02">2222-02-02</option>
                                <option value="2321-03-12">2321-03-12</option>
                                <option value="2023-05-24">2023-05-24</option>
                                <option value="2023-04-11">2023-04-11</option>
                                <option value="2023-05-26">2023-05-26</option>
                                <option value="2023-05-23">2023-05-23</option>
                                <option value="2023-05-27">2023-05-27</option>
                                <option value="2023-05-29">2023-05-29</option>
                                <option value="2023-05-30">2023-05-30</option>
                                <option value="2023-05-31">2023-05-31</option>
                                <option value="2023-06-01">2023-06-01</option>
                                <option value="2023-06-02">2023-06-02</option>
                                <option value="2023-04-25">2023-04-25</option>
                                <option value="2023-04-28">2023-04-28</option>
                                <option value="2023-04-27">2023-04-27</option>
                                <option value="2023-06-05">2023-06-05</option>
                                <option value="2023-05-06">2023-05-06</option>
                                <option value="2023-06-06">2023-06-06</option>
                                <option value="2023-06-07">2023-06-07</option>
                                <option value="2023-07-07">2023-07-07</option>
                                <option value="2023-06-08">2023-06-08</option>
                                <option value="2023-06-09">2023-06-09</option>
                                <option value="2023-06-10">2023-06-10</option>
                                <option value="2023-06-12">2023-06-12</option>
                                <option value="2023-06-13">2023-06-13</option>
                                <option value="2023-06-14">2023-06-14</option>
                                <option value="2023-06-15">2023-06-15</option>
                                <option value="2023-06-16">2023-06-16</option>
                                <option value="2023-06-19">2023-06-19</option>
                                <option value="2023-06-20">2023-06-20</option>
                                <option value="2023-06-21">2023-06-21</option>
                                <option value="2023-06-22">2023-06-22</option>
                                <option value="2023-06-23">2023-06-23</option>
                                <option value="2023-11-17">2023-11-17</option>
                                <option value="2023-06-24">2023-06-24</option>
                                <option value="2023-06-26">2023-06-26</option>
                                <option value="2023-06-27">2023-06-27</option>
                                <option value="2023-06-28">2023-06-28</option>
                                <option value="2023-06-30">2023-06-30</option>
                                <option value="2023-07-03">2023-07-03</option>
                                <option value="2023-07-04">2023-07-04</option>
                                <option value="2023-07-05">2023-07-05</option>
                                <option value="2023-07-10">2023-07-10</option>
                                <option value="2023-07-11">2023-07-11</option>
                                <option value="2023-07-12">2023-07-12</option>
                                <option value="2023-07-18">2023-07-18</option>
                                <option value="2023-07-19">2023-07-19</option>
                                <option value="2023-07-20">2023-07-20</option>
                                <option value="2023-07-21">2023-07-21</option>
                                <option value="2023-07-24">2023-07-24</option>
                                <option value="2023-07-25">2023-07-25</option>
                                <option value="2023-08-09">2023-08-09</option>
                                <option value="2023-08-10">2023-08-10</option>
                                <option value="2023-08-11">2023-08-11</option>
                                <option value="2023-08-14">2023-08-14</option>
                                <option value="2023-08-16">2023-08-16</option>
                                <option value="2023-08-17">2023-08-17</option>
                                <option value="2023-08-18">2023-08-18</option>
                                <option value="2023-08-21">2023-08-21</option>
                                <option value="2023-08-22">2023-08-22</option>
                                <option value="2023-08-23">2023-08-23</option>
                                <option value="2023-08-24">2023-08-24</option>
                                <option value="2023-08-25">2023-08-25</option>
                                <option value="2023-08-28">2023-08-28</option>
                                <option value="2023-08-29">2023-08-29</option>
                                <option value="2023-08-30">2023-08-30</option>
                                <option value="2023-09-01">2023-09-01</option>
                                <option value="2023-09-04">2023-09-04</option>
                                <option value="2023-09-05">2023-09-05</option>
                                <option value="2023-09-06">2023-09-06</option>
                                <option value="2023-09-07">2023-09-07</option>
                                <option value="2023-09-08">2023-09-08</option>
                                <option value="2023-09-09">2023-09-09</option>
                                <option value="2023-09-11">2023-09-11</option>
                                <option value="2023-09-12">2023-09-12</option>
                                <option value="2023-09-13">2023-09-13</option>
                                <option value="2023-09-14">2023-09-14</option>
                                <option value="2023-09-15">2023-09-15</option>
                                <option value="2023-09-16">2023-09-16</option>
                                <option value="2023-09-20">2023-09-20</option>
                                <option value="2023-09-21">2023-09-21</option>
                                <option value="2023-09-25">2023-09-25</option>
                                <option value="2023-09-26">2023-09-26</option>
                                <option value="2023-09-27">2023-09-27</option>
                                <option value="2023-09-29">2023-09-29</option>
                                <option value="2023-10-03">2023-10-03</option>
                                <option value="2023-10-04">2023-10-04</option>
                                <option value="2023-10-06">2023-10-06</option>
                                <option value="2023-10-09">2023-10-09</option>
                                <option value="2023-10-05">2023-10-05</option>
                                <option value="2023-10-10">2023-10-10</option>
                                <option value="2023-10-11">2023-10-11</option>
                                <option value="2023-10-12">2023-10-12</option>
                                <option value="2023-10-13">2023-10-13</option>
                                <option value="2023-10-16">2023-10-16</option>
                                <option value="2023-10-17">2023-10-17</option>
                                <option value="2023-10-28">2023-10-28</option>
                                <option value="2023-10-18">2023-10-18</option>
                                <option value="2023-10-19">2023-10-19</option>
                                <option value="2023-10-20">2023-10-20</option>
                                <option value="2023-10-21">2023-10-21</option>
                                <option value="2023-10-25">2023-10-25</option>
                                <option value="2023-10-26">2023-10-26</option>
                                <option value="2023-10-27">2023-10-27</option>
                                <option value="2023-10-30">2023-10-30</option>
                                <option value="2023-10-31">2023-10-31</option>
                                <option value="2023-11-01">2023-11-01</option>
                                <option value="2023-11-02">2023-11-02</option>
                                <option value="2023-11-03">2023-11-03</option>
                                <option value="2023-11-06">2023-11-06</option>
                                <option value="2023-11-04">2023-11-04</option>
                                <option value="2023-03-11">2023-03-11</option>
                                <option value="2023-11-07">2023-11-07</option>
                                <option value="2023-11-08">2023-11-08</option>
                                <option value="2023-11-09">2023-11-09</option>
                                <option value="2023-11-10">2023-11-10</option>
                                <option value="2023-11-13">2023-11-13</option>
                                <option value="2023-11-14">2023-11-14</option>
                                <option value="2023-11-16">2023-11-16</option>
                                <option value="2023-11-20">2023-11-20</option>
                                <option value="2023-11-24">2023-11-24</option>
                                <option value="2023-11-25">2023-11-25</option>
                                <option value="2023-11-27">2023-11-27</option>
                                <option value="2023-11-30">2023-11-30</option>
                                <option value="2023-11-28">2023-11-28</option>
                                <option value="2023-11-29">2023-11-29</option>
                                <option value="2023-12-01">2023-12-01</option>
                                <option value="2023-12-04">2023-12-04</option>
                                <option value="2023-12-05">2023-12-05</option>
                                <option value="2023-12-06">2023-12-06</option>
                                <option value="2023-12-07">2023-12-07</option>
                                <option value="2023-12-08">2023-12-08</option>
                                <option value="2023-12-11">2023-12-11</option>
                                <option value="2023-12-14">2023-12-14</option>
                                <option value="2023-12-15">2023-12-15</option>
                                <option value="2023-12-18">2023-12-18</option>
                                <option value="2023-12-19">2023-12-19</option>
                                <option value="2023-12-20">2023-12-20</option>
                                <option value="2023-12-12">2023-12-12</option>
                                <option value="2023-12-21">2023-12-21</option>
                                <option value="2023-12-22">2023-12-22</option>
                                <option value="2023-12-13">2023-12-13</option>
                                <option value="2023-12-26">2023-12-26</option>
                                <option value="2023-12-28">2023-12-28</option>
                                <option value="2023-12-29">2023-12-29</option>
                                <option value="2024-01-02">2024-01-02</option>
                                <option value="2024-01-04">2024-01-04</option>
                                <option value="2024-01-05">2024-01-05</option>
                                <option value="2024-01-08">2024-01-08</option>
                                <option value="2024-01-09">2024-01-09</option>
                                <option value="2024-01-10">2024-01-10</option>
                                <option value="2024-01-11">2024-01-11</option>
                                <option value="2024-01-12">2024-01-12</option>
                                <option value="2024-01-17">2024-01-17</option>
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
                                                <th class="border-bottom-0">Recording name</th>
                                                <th class="border-bottom-0">date of Upload</th>
                                                <th class="border-bottom-0">Trainer Name</th>
                                                <th class="border-bottom-0">Link </th>

                                                <th class="border-bottom-0">update</th>




                                            </tr>
                                        </thead>
                                        <tbody>



                                            <tr>
                                                <td>1</td>
                                                <td>2023-12-11 16:56:04</td>
                                                <td>TRREC_1</td>
                                                <td>dinesh</td>
                                                <td>2023-05-04</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1jQT9TUUoRH28IHJa0bL6J8KxOCSH3BHn/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=1&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>2</td>
                                                <td>2023-05-13 14:48:22</td>
                                                <td>TRREC_2</td>
                                                <td></td>
                                                <td>2023-05-05</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1ngrigOkJGeI7VvHKlWF_1Tz5vvg5A75u/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=2&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>3</td>
                                                <td>2023-05-13 14:49:34</td>
                                                <td>TRREC_3</td>
                                                <td></td>
                                                <td>2023-05-08</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1l66JKbrjSutR0SUFo5tPM8W9GauAnwD0/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=3&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>4</td>
                                                <td>2023-05-13 14:51:15</td>
                                                <td>TRREC_4</td>
                                                <td></td>
                                                <td>2023-05-09</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1GhVrGAaQ00SYp5I-8ywtuQHvVd4V6yBX/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=4&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>5</td>
                                                <td>2023-05-13 14:52:24</td>
                                                <td>TRREC_5</td>
                                                <td></td>
                                                <td>2023-05-10</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1SuihQWzyEYAvzQvaIdGxMm0mq5uM1lJy/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=5&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>6</td>
                                                <td>2023-05-13 14:54:40</td>
                                                <td>TRREC_6</td>
                                                <td></td>
                                                <td>2023-05-11</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1x2jQJFmm7JHddWaHKNjA8or5EUtViVQ8/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=6&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>7</td>
                                                <td>2023-05-13 15:07:19</td>
                                                <td>TRREC_7</td>
                                                <td></td>
                                                <td>2023-05-12</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1gG-i6hZURTmZiEL9G0C-eo7JMDJa5miz/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=7&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>8</td>
                                                <td>2023-06-07 18:04:38</td>
                                                <td>TRREC_12</td>
                                                <td>musculo skeletal system</td>
                                                <td>2023-05-15</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/108sJMxr9tzCGzAdBms9Q1e25KWvHhPUT/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=12&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>9</td>
                                                <td>2023-05-16 08:28:25</td>
                                                <td>TRREC_13</td>
                                                <td></td>
                                                <td>2023-05-15</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1NgKJH72CzUvdDiVoFKXXmfEOO3nNlMZH/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=13&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>10</td>
                                                <td>2023-05-17 12:22:47</td>
                                                <td>TRREC_14</td>
                                                <td></td>
                                                <td>2023-05-17</td>
                                                <td></td>
                                                <td><a href="https://triarightsolutionsllp.my.webex.com/triarightsolutionsllp.my/ldr.php?RCID=cac8c621cbb52f1c18fd35ee660786cb"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=14&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>11</td>
                                                <td>2023-05-17 12:41:13</td>
                                                <td>TRREC_15</td>
                                                <td></td>
                                                <td>2023-05-17</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://triarightsolutionsllp.my.webex.com/meet/kk.c4deals"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=15&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>12</td>
                                                <td>2023-05-17 13:12:24</td>
                                                <td>TRREC_16</td>
                                                <td></td>
                                                <td>2023-05-18</td>
                                                <td></td>
                                                <td><a href="https://drive.google.com/drive/folders/18ARh82IuXC9drKWPfQHXgF5PTo_dWlZR?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=16&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>13</td>
                                                <td>2023-05-24 18:08:23</td>
                                                <td>TRREC_17</td>
                                                <td></td>
                                                <td>2023-04-10</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1AdkNAIkQN4DanLpmy15C6P7xAbPSeldP/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=17&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>14</td>
                                                <td>2023-05-18 09:30:41</td>
                                                <td>TRREC_18</td>
                                                <td></td>
                                                <td>2023-05-04</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://triarightsolutionsllp.my.webex.com/meet/mailkishore2113"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=18&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>15</td>
                                                <td>2023-05-18 09:33:47</td>
                                                <td>TRREC_19</td>
                                                <td></td>
                                                <td>2023-05-05</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://triarightsolutionsllp.my.webex.com/meet/mailkishore2113"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=19&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>16</td>
                                                <td>2023-05-18 09:35:00</td>
                                                <td>TRREC_20</td>
                                                <td></td>
                                                <td>2023-05-03</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://triarightsolutionsllp.my.webex.com/meet/mailkishore2113"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=20&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>17</td>
                                                <td>2023-05-18 09:38:12</td>
                                                <td>TRREC_21</td>
                                                <td></td>
                                                <td>2023-05-08</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://triarightsolutionsllp.my.webex.com/meet/mailkishore2113"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=21&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>18</td>
                                                <td>2023-05-18 09:39:55</td>
                                                <td>TRREC_22</td>
                                                <td></td>
                                                <td>2023-05-09</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://triarightsolutionsllp.my.webex.com/meet/infolumi21"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=22&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>19</td>
                                                <td>2023-05-18 09:41:37</td>
                                                <td>TRREC_23</td>
                                                <td></td>
                                                <td>2023-05-10</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://triarightsolutionsllp.my.webex.com/meet/mailkishore2113"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=23&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>20</td>
                                                <td>2023-05-18 09:43:31</td>
                                                <td>TRREC_24</td>
                                                <td></td>
                                                <td>2023-05-11</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://triarightsolutionsllp.my.webex.com/meet/mailkishore2113"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=24&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>21</td>
                                                <td>2023-05-18 09:45:30</td>
                                                <td>TRREC_25</td>
                                                <td></td>
                                                <td>2023-05-12</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://triarightsolutionsllp.my.webex.com/meet/mailkishore2113"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=25&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>22</td>
                                                <td>2023-05-18 09:46:33</td>
                                                <td>TRREC_26</td>
                                                <td></td>
                                                <td>2023-05-15</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://triarightsolutionsllp.my.webex.com/meet/mailkishore2113"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=26&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>23</td>
                                                <td>2023-05-18 09:47:51</td>
                                                <td>TRREC_27</td>
                                                <td></td>
                                                <td>2023-05-16</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://triarightsolutionsllp.my.webex.com/meet/mailkishore2113"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=27&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>24</td>
                                                <td>2023-05-18 09:49:04</td>
                                                <td>TRREC_28</td>
                                                <td></td>
                                                <td>2023-05-17</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://triarightsolutionsllp.my.webex.com/meet/mailkishore2113"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=28&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>25</td>
                                                <td>2023-06-01 10:49:29</td>
                                                <td>TRREC_29</td>
                                                <td>Congenital Disorders</td>
                                                <td>2023-05-11</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/18if-E12pPM7vsQ2z3Fqb37JOCR8vxfqq/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=29&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>26</td>
                                                <td>2023-05-18 14:18:07</td>
                                                <td>TRREC_30</td>
                                                <td></td>
                                                <td>2023-05-18</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://triarightsolutionsllp.my.webex.com/meet/mailkishore2113"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=30&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>27</td>
                                                <td>2023-05-18 16:57:30</td>
                                                <td>TRREC_31</td>
                                                <td></td>
                                                <td>2023-05-15</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href=" https://drive.google.com/file/d/1SpyWHYur1wZ43R7Evz9T6qOK3PrOzsQs/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=31&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>28</td>
                                                <td>2023-06-01 10:47:09</td>
                                                <td>TRREC_32</td>
                                                <td>Neoplastic Disorder</td>
                                                <td>2023-05-12</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/18YPr-n11My9T-RBehIy29-_rNL_VxiXg/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=32&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>29</td>
                                                <td>2023-06-01 10:51:07</td>
                                                <td>TRREC_33</td>
                                                <td>Pathalogy</td>
                                                <td>2023-05-15</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/18rloNxorn6EddAV9z_lhzb7VSLk-wFTp/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=33&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>30</td>
                                                <td>2023-06-01 10:53:20</td>
                                                <td>TRREC_34</td>
                                                <td>Terminology</td>
                                                <td>2023-05-10</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/18MuCyfz4wz_Um9PKSNrGAZKF_XjWahFJ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=34&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>31</td>
                                                <td>2023-06-01 10:55:39</td>
                                                <td>TRREC_35</td>
                                                <td>Respiratory System</td>
                                                <td>2023-05-03</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/1ABbZpE4toTJaAuuYfi3K9dZ1U952bKM1/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=35&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>32</td>
                                                <td>2023-05-19 08:07:02</td>
                                                <td>TRREC_36</td>
                                                <td></td>
                                                <td>2023-05-04</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1jQT9TUUoRH28IHJa0bL6J8KxOCSH3BHn/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=36&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>33</td>
                                                <td>2023-05-19 08:07:54</td>
                                                <td>TRREC_37</td>
                                                <td></td>
                                                <td>2023-05-05</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1ngrigOkJGeI7VvHKlWF_1Tz5vvg5A75u/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=37&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>34</td>
                                                <td>2023-05-19 08:08:47</td>
                                                <td>TRREC_38</td>
                                                <td></td>
                                                <td>2023-05-08</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1l66JKbrjSutR0SUFo5tPM8W9GauAnwD0/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=38&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>35</td>
                                                <td>2023-05-19 08:09:37</td>
                                                <td>TRREC_39</td>
                                                <td></td>
                                                <td>2023-05-09</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1GhVrGAaQ00SYp5I-8ywtuQHvVd4V6yBX/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=39&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>36</td>
                                                <td>2023-05-19 08:10:37</td>
                                                <td>TRREC_40</td>
                                                <td></td>
                                                <td>2023-05-10</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1SuihQWzyEYAvzQvaIdGxMm0mq5uM1lJy/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=40&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>37</td>
                                                <td>2023-05-19 08:11:46</td>
                                                <td>TRREC_41</td>
                                                <td></td>
                                                <td>2023-05-11</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1x2jQJFmm7JHddWaHKNjA8or5EUtViVQ8/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=41&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>38</td>
                                                <td>2023-05-19 08:12:58</td>
                                                <td>TRREC_42</td>
                                                <td></td>
                                                <td>2023-05-12</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1gG-i6hZURTmZiEL9G0C-eo7JMDJa5miz/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=42&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>39</td>
                                                <td>2023-05-19 08:14:10</td>
                                                <td>TRREC_43</td>
                                                <td></td>
                                                <td>2023-05-15</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1NgKJH72CzUvdDiVoFKXXmfEOO3nNlMZH/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=43&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>40</td>
                                                <td>2023-06-07 18:03:44</td>
                                                <td>TRREC_44</td>
                                                <td>pulmonology</td>
                                                <td>2023-05-09</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1tY9mES-USLM8sqT3dXFWU_1PcRF1eYbo/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=44&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>41</td>
                                                <td>2023-06-07 18:02:45</td>
                                                <td>TRREC_45</td>
                                                <td>pulmonary system</td>
                                                <td>2023-05-10</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1IsrLLYAU02dq5c8afvVq5fqEf-ywmhFh/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=45&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>42</td>
                                                <td>2023-06-07 18:01:44</td>
                                                <td>TRREC_46</td>
                                                <td>musculo skeletal system</td>
                                                <td>2023-05-11</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1YeoR8uxThbC9ULyoBzogSno17tBR_IvX/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=46&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>43</td>
                                                <td>2023-06-07 18:00:54</td>
                                                <td>TRREC_47</td>
                                                <td>musculo skeletal system</td>
                                                <td>2023-05-12</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/108sJMxr9tzCGzAdBms9Q1e25KWvHhPUT/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=47&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>44</td>
                                                <td>2023-06-07 18:00:09</td>
                                                <td>TRREC_48</td>
                                                <td>medical terminology</td>
                                                <td>2023-05-15</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1L5cGQGz65wXh76GNG55ojmlp2xWmKtBI/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=48&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>45</td>
                                                <td>2023-06-07 18:14:14</td>
                                                <td>TRREC_49</td>
                                                <td>medical coding introduction</td>
                                                <td>2023-05-16</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1ih5fcFHtzV0OmNyEZSvP_W5CZKWhmOtR/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=49&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>46</td>
                                                <td>2023-06-07 17:59:10</td>
                                                <td>TRREC_50</td>
                                                <td>medical terminology</td>
                                                <td>2023-05-16</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/19RISqcDrzkTD3nAHpdRTFCcrSWLpBlpC/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=50&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>47</td>
                                                <td>2023-06-07 18:13:27</td>
                                                <td>TRREC_51</td>
                                                <td>medical terminology</td>
                                                <td>2023-05-17</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1cGW9M5pfma0zIybllBMVzUo7oIPUxAE-/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=51&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>48</td>
                                                <td>2023-06-07 17:58:07</td>
                                                <td>TRREC_52</td>
                                                <td>blood, lymphatic system and immune system</td>
                                                <td>2023-05-17</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1FKpf_zdVTMAORysYQfBR0j5-pkeZK99P/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=52&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>49</td>
                                                <td>2023-06-07 18:12:14</td>
                                                <td>TRREC_53</td>
                                                <td>medical terminology</td>
                                                <td>2023-05-18</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1u7kOWyJ_ty7pKMtq50Wzv9W5RIZhwhSH/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=53&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>50</td>
                                                <td>2023-06-07 17:56:44</td>
                                                <td>TRREC_54</td>
                                                <td>digestive system</td>
                                                <td>2023-05-19</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1JGpacONsWN8NgTifAxrfCFFoH3oiD16G/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=54&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>51</td>
                                                <td>2023-06-07 18:11:29</td>
                                                <td>TRREC_55</td>
                                                <td>pulmonary system</td>
                                                <td>2023-05-19</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1DiyLVqo8ZeiWFEmCzJdRzEIAFc9JRvVJ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=55&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>52</td>
                                                <td>2023-06-07 17:57:12</td>
                                                <td>TRREC_56</td>
                                                <td>gastroentrology completion</td>
                                                <td>2023-05-22</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1Z1O5ky5fbX2Qm8XNIbBgbWn54VTHCNoE/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=56&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>53</td>
                                                <td>2023-06-07 14:25:07</td>
                                                <td>TRREC_57</td>
                                                <td>demo testing</td>
                                                <td>2222-02-02</td>
                                                <td></td>
                                                <td><a href="dfjknk" target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=57&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>54</td>
                                                <td>2023-05-23 11:33:58</td>
                                                <td>TRREC_58</td>
                                                <td>hicscs</td>
                                                <td>2321-03-12</td>
                                                <td></td>
                                                <td><a href="csssc" target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=58&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>55</td>
                                                <td>2023-05-24 11:51:22</td>
                                                <td>TRREC_59</td>
                                                <td>sai</td>
                                                <td>2023-05-24</td>
                                                <td></td>
                                                <td><a href="meet" target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=59&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>56</td>
                                                <td>2023-05-24 15:24:40</td>
                                                <td>TRREC_60</td>
                                                <td>demo </td>
                                                <td>2023-05-24</td>
                                                <td></td>
                                                <td><a href="https://drive.google.com/drive/folders/18KRaSJspeWfvAmbr8Lv3_2DY7W3BgFUf?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=60&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>57</td>
                                                <td>2023-05-24 15:50:38</td>
                                                <td>TRREC_61</td>
                                                <td>pari</td>
                                                <td>2023-05-24</td>
                                                <td></td>
                                                <td><a href="https://drive.google.com/drive/folders/18KRaSJspeWfvAmbr8Lv3_2DY7W3BgFUf?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=61&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>58</td>
                                                <td>2023-05-24 15:53:03</td>
                                                <td>TRREC_62</td>
                                                <td>pari</td>
                                                <td>2023-05-24</td>
                                                <td></td>
                                                <td><a href="https://drive.google.com/file/d/18MuCyfz4wz_Um9PKSNrGAZKF_XjWahFJ/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=62&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>59</td>
                                                <td>2023-05-24 18:09:05</td>
                                                <td>TRREC_63</td>
                                                <td>python</td>
                                                <td>2023-04-11</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1fH7BP6dn_NWzA7xUE3R7I26LtwSoQby1/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=63&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>60</td>
                                                <td>2023-06-05 14:09:52</td>
                                                <td>TRREC_64</td>
                                                <td>12/04/2023</td>
                                                <td>2023-05-24</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1hlgnyew2aA3g-s4_7Vm3uCJOU1xkEVvz/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=64&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>61</td>
                                                <td>2023-06-05 14:10:13</td>
                                                <td>TRREC_65</td>
                                                <td>13/04/2023</td>
                                                <td>2023-05-24</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1xo98GUq4gGFHniXRh9GdVp9WpqPyuO97/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=65&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>62</td>
                                                <td>2023-06-05 14:10:38</td>
                                                <td>TRREC_66</td>
                                                <td>17/04/23</td>
                                                <td>2023-05-24</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1wPnfG4YAwjBFWQLc5M545eLnWblAzCM1/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=66&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>63</td>
                                                <td>2023-06-05 14:11:00</td>
                                                <td>TRREC_67</td>
                                                <td>18/04/23</td>
                                                <td>2023-05-24</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1wsjFp-9o2F_XtJIRUCcb2Fw6eB5r89Gb/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=67&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>64</td>
                                                <td>2023-06-05 14:11:25</td>
                                                <td>TRREC_68</td>
                                                <td>20/04/23</td>
                                                <td>2023-05-24</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1KRKUv9kxRqbhx4ZWd8vGDeNZUirsMh5p/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=68&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>65</td>
                                                <td>2023-06-05 14:11:50</td>
                                                <td>TRREC_69</td>
                                                <td>24/04/23</td>
                                                <td>2023-05-24</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1-Fzw4vlI3o5KQeSDMKizrkuaoIqp2Q9w/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=69&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>66</td>
                                                <td>2023-06-05 14:12:27</td>
                                                <td>TRREC_70</td>
                                                <td>2/05/23</td>
                                                <td>2023-05-24</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1aatlwamwfW5n6tfLWQBCmabEtlwapwvj/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=70&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>67</td>
                                                <td>2023-06-05 14:12:52</td>
                                                <td>TRREC_71</td>
                                                <td>3/05/23</td>
                                                <td>2023-05-24</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1YKa6v3rdH1D6QYbtj--yy6J-rIAR5dfO/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=71&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>68</td>
                                                <td>2023-05-26 12:40:10</td>
                                                <td>TRREC_72</td>
                                                <td>TRIARIGHT</td>
                                                <td>2023-05-26</td>
                                                <td></td>
                                                <td><a href="https://drive.google.com/drive/folders/18ARh82IuXC9drKWPfQHXgF5PTo_dWlZR?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=72&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>69</td>
                                                <td>2023-05-26 15:40:31</td>
                                                <td>TRREC_73</td>
                                                <td>what is accounting and overview of accounting</td>
                                                <td>2023-05-19</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/1DZHcCtdL1Qz-IGkjXRPVdA7452rO5siM/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=73&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>70</td>
                                                <td>2023-05-26 16:02:56</td>
                                                <td>TRREC_74</td>
                                                <td>what is tally prime and overall brief of tally prime</td>
                                                <td>2023-05-22</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/1KskIenltlApw-MLnVp9w2FkKJEjrwteo/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=74&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>71</td>
                                                <td>2023-05-26 16:05:54</td>
                                                <td>TRREC_75</td>
                                                <td>what is groups and vouchers and their types</td>
                                                <td>2023-05-23</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/1kxYG1Z58tm5EJWbRv4oSVDidYoSHiQh8/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=75&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>72</td>
                                                <td>2023-05-26 15:29:43</td>
                                                <td>TRREC_76</td>
                                                <td>how to create,alter,select,shut,delete a company in tally</td>
                                                <td>2023-05-26</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/1kxYG1Z58tm5EJWbRv4oSVDidYoSHiQh8/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=76&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>73</td>
                                                <td>2023-05-26 15:49:49</td>
                                                <td>TRREC_77</td>
                                                <td>INTRODUCTTION TO DIGITAL MARKETING</td>
                                                <td>2023-05-19</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1iHm1RX_ACVW11o0ziKYEl08vAHadifQv/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=77&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>74</td>
                                                <td>2023-05-26 16:02:18</td>
                                                <td>TRREC_78</td>
                                                <td>BLOGGING</td>
                                                <td>2023-05-22</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1JVubbCFQRAwt7si-9nS_BjpMlMaivv8j/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=78&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>75</td>
                                                <td>2023-06-07 17:55:10</td>
                                                <td>TRREC_79</td>
                                                <td>digestive system- mechanism of digestion, pathological conditions,
                                                    abbtrevations, therapeutic proced</td>
                                                <td>2023-05-22</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1Z1O5ky5fbX2Qm8XNIbBgbWn54VTHCNoE/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=79&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>76</td>
                                                <td>2023-06-07 17:54:12</td>
                                                <td>TRREC_80</td>
                                                <td>urology or nephrology</td>
                                                <td>2023-05-23</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1D6m5gthPj0YQq0mCbdWjOQ7W_zEFSABx/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=80&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>77</td>
                                                <td>2023-06-07 18:10:35</td>
                                                <td>TRREC_81</td>
                                                <td>musculo skeletal system</td>
                                                <td>2023-05-23</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1QgBoWB1IPuXroZpgc_7-Uav_K2z3tAGE/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=81&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>78</td>
                                                <td>2023-06-07 17:53:23</td>
                                                <td>TRREC_82</td>
                                                <td>urinary system remaining</td>
                                                <td>2023-05-26</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1ijLWJWJyl_jXNfNrYhOPPct9dAsn8U92/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=82&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>79</td>
                                                <td>2023-06-07 18:09:53</td>
                                                <td>TRREC_83</td>
                                                <td>musculoskeletal system</td>
                                                <td>2023-05-26</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1-pbN2gjdmrv0D7KRdApyt-_UHUTsAPfQ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=83&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>80</td>
                                                <td>2023-05-27 08:42:25</td>
                                                <td>TRREC_84</td>
                                                <td>Python Basic Problems</td>
                                                <td>2023-05-16</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1veBg9x6HSdvm3Kqs5b8sRtmm_S_24BCA/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=84&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>81</td>
                                                <td>2023-05-27 08:43:20</td>
                                                <td>TRREC_85</td>
                                                <td>Python Basic Problems</td>
                                                <td>2023-05-17</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1i8Y9FyfqXCMswqMd-BIBN8ODNJwECtNr/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=85&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>82</td>
                                                <td>2023-05-27 08:44:26</td>
                                                <td>TRREC_86</td>
                                                <td>Python Basic Problems</td>
                                                <td>2023-05-18</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1btuHMH17ptQ4MyT3GDEdhQYZJJABKxWb/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=86&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>83</td>
                                                <td>2023-05-27 08:45:04</td>
                                                <td>TRREC_87</td>
                                                <td>Python Basic Problems</td>
                                                <td>2023-05-19</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1DnrwoUQ0G48YMDTTti8IDf9KgMrN9mrj/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=87&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>84</td>
                                                <td>2023-05-27 08:47:27</td>
                                                <td>TRREC_88</td>
                                                <td>Python Pattern Printing</td>
                                                <td>2023-05-22</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1kaGJngB4lKby-A8DVLJcZQGfqKrs16rY/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=88&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>85</td>
                                                <td>2023-05-27 08:49:49</td>
                                                <td>TRREC_89</td>
                                                <td>Python 2D arrays introduction</td>
                                                <td>2023-05-23</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1AWsXOdcyksZ5ajBCFBTBsu7MlnyHmS-G/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=89&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>86</td>
                                                <td>2023-05-27 10:44:07</td>
                                                <td>TRREC_90</td>
                                                <td>GOOGLE ANALYTICS</td>
                                                <td>2023-05-26</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1sGaNkttbo9zH_N0wOAOyZRYKLzCST49w/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=90&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>87</td>
                                                <td>2023-06-07 17:52:24</td>
                                                <td>TRREC_91</td>
                                                <td>female reproductive system and introduction to male reproductive
                                                    system</td>
                                                <td>2023-05-27</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1SlMrERKR5ELsNZeGJgIMgBGNnO2yQaeB/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=91&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>88</td>
                                                <td>2023-06-07 18:09:06</td>
                                                <td>TRREC_95</td>
                                                <td>musculoskeletal system- abbrevations, combining form, introduction
                                                    to digestive system,mechanism of </td>
                                                <td>2023-05-27</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1nUngIPm7b0orlnZgitOXJgLF0enE9ZUZ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=95&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>89</td>
                                                <td>2023-05-29 00:14:50</td>
                                                <td>TRREC_96</td>
                                                <td>Digital marketing introduction</td>
                                                <td>2023-05-03</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://triarightsolutionsllp.my.webex.com/meet/mailkishore2113"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=96&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>90</td>
                                                <td>2023-05-29 08:42:56</td>
                                                <td>TRREC_97</td>
                                                <td>Python Matrix Multiplication and dictionaries</td>
                                                <td>2023-05-27</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1_-J3eB36zYHM4BFlw_Vzckt2QgkWZzRe/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=97&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>91</td>
                                                <td>2023-06-05 14:15:50</td>
                                                <td>TRREC_98</td>
                                                <td>Python 10-04-2023</td>
                                                <td>2023-05-29</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1wopl0jzLPIxa-DKG_AgWTVpMiDe7NGt-/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=98&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>92</td>
                                                <td>2023-06-07 17:50:28</td>
                                                <td>TRREC_99</td>
                                                <td>male reproductive system completion and introduction to
                                                    endocrinology</td>
                                                <td>2023-05-29</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1uC0RVlHujW8FAjIcWJK1YD7NSOOKu3AL/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=99&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>93</td>
                                                <td>2023-05-29 18:55:29</td>
                                                <td>TRREC_100</td>
                                                <td>Create multiple address for company</td>
                                                <td>2023-05-29</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://docs.google.com/document/d/1DCWnwheT4Cmm-90feb2KCRYul6NcGPFE8ACTNE6bBx4/edit?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=100&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>94</td>
                                                <td>2023-06-07 18:08:16</td>
                                                <td>TRREC_101</td>
                                                <td>digestive system, and introduction to blood, lymphatic and immune
                                                    system</td>
                                                <td>2023-05-29</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1kKq-wLG32p_UOKLYWf1SWl1OtSX3YOTQ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=101&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>95</td>
                                                <td>2023-05-29 20:39:21</td>
                                                <td>TRREC_102</td>
                                                <td>EMAIL MARKETING</td>
                                                <td>2023-05-29</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1e7sGdFZV4QZBaflxyxwQlBFyvm19R3QQ/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=102&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>96</td>
                                                <td>2023-06-07 17:49:33</td>
                                                <td>TRREC_103</td>
                                                <td>endocrinology</td>
                                                <td>2023-05-30</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1kKq-wLG32p_UOKLYWf1SWl1OtSX3YOTQ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=103&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>97</td>
                                                <td>2023-06-07 17:46:56</td>
                                                <td>TRREC_104</td>
                                                <td>endocrinology</td>
                                                <td>2023-05-30</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/18YX2NaH-68H6y8FZQKXqqEXJq81Y3qPz/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=104&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>98</td>
                                                <td>2023-06-07 18:07:16</td>
                                                <td>TRREC_105</td>
                                                <td>digestive system- mechanism of digestion, pathological conditions,
                                                    abbtrevations, therapeutic proced</td>
                                                <td>2023-05-30</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1WOQHUiMsEAS9Zc-_00B9sfEwKKyxoxrf/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=105&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>99</td>
                                                <td>2023-05-31 12:51:36</td>
                                                <td>TRREC_106</td>
                                                <td>MAIL CHIMP</td>
                                                <td>2023-05-30</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1BPRS2bTvyazXx1g2IudrMEvZSX-k2p1N/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=106&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>100</td>
                                                <td>2023-05-31 12:53:58</td>
                                                <td>TRREC_107</td>
                                                <td>introduction of web technology</td>
                                                <td>2023-05-31</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/12Ypj8nwjyXFzfNP5HRkTGHHA5jg-nWTW/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=107&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>101</td>
                                                <td>2023-05-31 13:11:38</td>
                                                <td>TRREC_108</td>
                                                <td> introduction of frontend</td>
                                                <td>2023-05-31</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1cY0S-kt6zjzkfxul2AGS3sGymK7WKlW0/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=108&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>102</td>
                                                <td>2023-05-31 13:15:42</td>
                                                <td>TRREC_109</td>
                                                <td>Managing multiple companies in tallyprime</td>
                                                <td>2023-05-30</td>
                                                <td>Vasundhara</td>
                                                <td><a href=" https://drive.google.com/file/d/1ks6OtlppZRGfBx1yXXlqICJFhBMM0gE7/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=109&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>103</td>
                                                <td>2023-05-31 13:19:38</td>
                                                <td>TRREC_110</td>
                                                <td>introduction of html</td>
                                                <td>2023-05-31</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1Nkodit5HEL3HwXYoZDMb64X6ASBfnSg_/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=110&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>104</td>
                                                <td>2023-05-31 13:21:43</td>
                                                <td>TRREC_111</td>
                                                <td>User access and control features in tally prime</td>
                                                <td>2023-05-31</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/1smY7cJIYCA6J8EswTyWxLVMUvKxE4EgO/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=111&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>105</td>
                                                <td>2023-05-31 19:15:52</td>
                                                <td>TRREC_112</td>
                                                <td>Musculoskeletal system</td>
                                                <td>2023-05-16</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/1AcNS3LbGtQOUTp9peb-8hqJZK03LnDC3/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=112&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>106</td>
                                                <td>2023-05-31 19:18:26</td>
                                                <td>TRREC_113</td>
                                                <td>composition of blood</td>
                                                <td>2023-05-17</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/1Frez5njZ2IW2-2YxQ9-u6YcyH-6xPmwZ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=113&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>107</td>
                                                <td>2023-05-31 19:19:50</td>
                                                <td>TRREC_114</td>
                                                <td>Terminology combining forms</td>
                                                <td>2023-05-18</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/1gy1sj4Ceo2xVbokvNilW-_qYeGyAf5TQ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=114&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>108</td>
                                                <td>2023-05-31 19:21:27</td>
                                                <td>TRREC_115</td>
                                                <td>Laboratory tests and clinical procedures</td>
                                                <td>2023-05-19</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/16ql1NQR8qLsBx8QhkYXhkpFuRwmK1AyN/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=115&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>109</td>
                                                <td>2023-05-31 19:23:06</td>
                                                <td>TRREC_116</td>
                                                <td>Major Endocrine Glands and Endocrine system</td>
                                                <td>2023-05-22</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/17mdSBaUKy8hXpHmxoJZ2SBuRv1cf2vqE/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=116&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>110</td>
                                                <td>2023-05-31 19:25:11</td>
                                                <td>TRREC_117</td>
                                                <td>endocrine system ,hypothyroidism,parathyroid glands adrenal cortex
                                                    adrenal medulla</td>
                                                <td>2023-05-23</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/1LsIUetJ7bEn6TD3F4vI_wJT-IeGMcrQU/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=117&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>111</td>
                                                <td>2023-05-31 19:26:35</td>
                                                <td>TRREC_118</td>
                                                <td>carcinomas and the epithelial tissues</td>
                                                <td>2023-05-26</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/1TgWX1b0T4YQFGKw0w7gRze_2lGLSnwr_/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=118&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>112</td>
                                                <td>2023-06-07 18:06:31</td>
                                                <td>TRREC_119</td>
                                                <td>blood, lymphatic system and immune system</td>
                                                <td>2023-05-31</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1_cjLxXNDBqXa636IC9DW9syOQphuFkym/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=119&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>113</td>
                                                <td>2023-06-01 10:56:09</td>
                                                <td>TRREC_120</td>
                                                <td>html strating</td>
                                                <td>2023-06-01</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1SeAO9FpPuMcDputw9D9MUhSDClzMz9wz/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=120&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>114</td>
                                                <td>2023-06-01 11:02:14</td>
                                                <td>TRREC_121</td>
                                                <td>image tag in html</td>
                                                <td>2023-06-01</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1mDNc1AkT1ieofEWIMBsjSyAfsGXizOrF/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=121&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>115</td>
                                                <td>2023-06-01 11:04:09</td>
                                                <td>TRREC_122</td>
                                                <td>lists in html</td>
                                                <td>2023-06-01</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1vIG0KtJN8esfcj2Za_ZnQTyvq_5k8LDT/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=122&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>116</td>
                                                <td>2023-06-01 11:05:25</td>
                                                <td>TRREC_123</td>
                                                <td>forms in html</td>
                                                <td>2023-06-01</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1YjbGthiHbcwtXsGUF04i4fS3UM_likPD/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=123&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>117</td>
                                                <td>2023-06-01 11:06:18</td>
                                                <td>TRREC_124</td>
                                                <td>forms part 2</td>
                                                <td>2023-06-01</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1H6UVJ3oCbFme2IYSozDeTaeRGnjbI-VH/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=124&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>118</td>
                                                <td>2023-06-01 11:10:37</td>
                                                <td>TRREC_125</td>
                                                <td>introduction to css</td>
                                                <td>2023-06-01</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1HgdM8DAz-FN1bGt4FMouGD5cxf2nkxCu/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=125&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>119</td>
                                                <td>2023-06-01 11:15:29</td>
                                                <td>TRREC_126</td>
                                                <td>CSS Box model</td>
                                                <td>2023-06-01</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1z4cBaHCbokKH2f1hvAC0jf9PhXHBaS-1/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=126&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>120</td>
                                                <td>2023-06-01 11:17:35</td>
                                                <td>TRREC_127</td>
                                                <td>flex box</td>
                                                <td>2023-06-01</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1E6LaC16c6Va8g9rX64CXE4zENRUU9tuA/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=127&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>121</td>
                                                <td>2023-06-01 11:18:46</td>
                                                <td>TRREC_128</td>
                                                <td>Grid in CSS</td>
                                                <td>2023-06-01</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1sjZwtSDLsl_YoPkYlGwVkQ3xYB8rkr9d/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=128&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>122</td>
                                                <td>2023-06-01 11:20:02</td>
                                                <td>TRREC_129</td>
                                                <td>DOM</td>
                                                <td>2023-06-01</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1ww5tS82a5SGHAgLa6dxW5e_KIMcyc4aU/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=129&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>123</td>
                                                <td>2023-06-01 11:23:40</td>
                                                <td>TRREC_130</td>
                                                <td>introduction of javaScript</td>
                                                <td>2023-06-01</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1qgTz8S0Puw6tUd9ZkRY83VZ-JK0exu8N/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=130&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>124</td>
                                                <td>2023-06-01 11:24:59</td>
                                                <td>TRREC_131</td>
                                                <td>INBOUND MARKETING, OUTBOUND MARKETING, METHODOLOGY, STRATEGIES,
                                                    FLYWHEEL MODEL</td>
                                                <td>2023-05-31</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/12Jg76GJfXo48bb3VExp4Bj1bKuYep1Fu/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=131&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>125</td>
                                                <td>2023-06-01 11:26:06</td>
                                                <td>TRREC_132</td>
                                                <td>positions in CSS</td>
                                                <td>2023-06-01</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1CIlk_F3oSCATafQADuxrx-ORBVLDHM_T/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=132&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>126</td>
                                                <td>2023-06-01 11:26:15</td>
                                                <td>TRREC_133</td>
                                                <td>Pharmacology ,drug actions and interctions</td>
                                                <td>2023-05-31</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/1y62Ix1yIUBql0XtQKCemIVP-9XIY-KrM/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=133&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>127</td>
                                                <td>2023-06-01 11:27:26</td>
                                                <td>TRREC_134</td>
                                                <td>Variables</td>
                                                <td>2023-06-01</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1Picq2hFf56fbxQHkIw2wADUfXJawjFVe/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=134&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>128</td>
                                                <td>2023-06-01 11:29:03</td>
                                                <td>TRREC_135</td>
                                                <td>Cancer Treatment , Radiation Therapy ,Cancer Medicine ,Chemotherapy
                                                </td>
                                                <td>2023-05-30</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/1cbe2_ybm4yiwtkrpPgP8VcDR5TRgvdtO/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=135&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>129</td>
                                                <td>2023-06-01 12:07:09</td>
                                                <td>TRREC_136</td>
                                                <td>Respiratory system</td>
                                                <td>2023-05-03</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/1iycLySnUd6HFTuYo-bPFzDfw_nqKuncQ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=136&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>130</td>
                                                <td>2023-06-01 12:11:22</td>
                                                <td>TRREC_137</td>
                                                <td>Respiratory system</td>
                                                <td>2023-05-04</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/1eOci7fFJueUPMq-IZQotepRdRbCO77CF/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=137&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>131</td>
                                                <td>2023-06-01 12:13:21</td>
                                                <td>TRREC_138</td>
                                                <td>Cardiovascular system</td>
                                                <td>2023-05-08</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/1DjmBdPlt6LFY91VdlnxVmopD053vxSB9/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=138&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>132</td>
                                                <td>2023-06-01 12:20:20</td>
                                                <td>TRREC_139</td>
                                                <td>understanding the chart of accounts</td>
                                                <td>2023-06-01</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/1VEC0lpopwVEuJu-c-TNqHZyJaFDGh1pQ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=139&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>133</td>
                                                <td>2023-06-01 18:59:52</td>
                                                <td>TRREC_140</td>
                                                <td>Respiratory system</td>
                                                <td>2023-06-01</td>
                                                <td></td>
                                                <td><a href="https://drive.google.com/file/d/1gy1sj4Ceo2xVbokvNilW-_qYeGyAf5TQ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=140&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>134</td>
                                                <td>2023-06-02 09:44:40</td>
                                                <td>TRREC_141</td>
                                                <td>Respiratory system</td>
                                                <td>2023-06-02</td>
                                                <td></td>
                                                <td><a href="https://drive.google.com/drive/folders/1K2FsjwPK8ZCem4k-nySY9tDGC8uZnaK8?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=141&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>135</td>
                                                <td>2023-06-02 17:41:36</td>
                                                <td>TRREC_142</td>
                                                <td>Muskuloskeletal System</td>
                                                <td>2023-05-31</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1yDhbrlyuRzkD31nR9RRvBjdzvUBzqanI/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=142&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>136</td>
                                                <td>2023-06-02 17:46:10</td>
                                                <td>TRREC_143</td>
                                                <td>Urinary System</td>
                                                <td>2023-05-11</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1UL9wJ50c74tbAd5j1EEiF355ehNPyRzB/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=143&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>137</td>
                                                <td>2023-06-02 17:47:30</td>
                                                <td>TRREC_144</td>
                                                <td>Female reproductive system</td>
                                                <td>2023-05-12</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1xF6lmRYlhtMO702UKS0qggEuLz8_FfYU/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=144&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>138</td>
                                                <td>2023-06-02 17:49:08</td>
                                                <td>TRREC_145</td>
                                                <td>Female reproductive system - Pathology</td>
                                                <td>2023-05-15</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1Mo4QMc21nbfliHMdmRywyxrJPfiQ60YD/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=145&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>139</td>
                                                <td>2023-06-02 17:52:22</td>
                                                <td>TRREC_146</td>
                                                <td>Male Reproductive system</td>
                                                <td>2023-05-18</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1te3_uij7vuaDqmKdRs376ok_OanZXM5y/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=146&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>140</td>
                                                <td>2023-06-07 12:15:56</td>
                                                <td>TRREC_147</td>
                                                <td>Nervous System</td>
                                                <td>2023-05-19</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1UF6qAvqGig7cERv5Mv_Z6pCJgNCfJ6GY/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=147&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>141</td>
                                                <td>2023-06-02 17:55:12</td>
                                                <td>TRREC_148</td>
                                                <td>Cardiovascular system</td>
                                                <td>2023-05-22</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1Mo5MKrLEz2p3WIZIq3oaFr-jH2wT5mXY/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=148&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>142</td>
                                                <td>2023-06-02 17:56:12</td>
                                                <td>TRREC_149</td>
                                                <td>Respiratory System</td>
                                                <td>2023-05-23</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1A6_WXjTPK_Jy_TWTn8QlFapYeukhaqvS/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=149&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>143</td>
                                                <td>2023-06-02 17:57:15</td>
                                                <td>TRREC_150</td>
                                                <td>Blood System</td>
                                                <td>2023-05-26</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1MfHjCJPQCZUNyNsU905VpUeLascqZnrN/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=150&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>144</td>
                                                <td>2023-06-02 18:00:17</td>
                                                <td>TRREC_151</td>
                                                <td>Lymphatic and Immune system</td>
                                                <td>2023-05-30</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1DawbYY1sFyVImPz2ATgKVBXMJjxFXwb6/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=151&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>145</td>
                                                <td>2023-06-05 14:35:25</td>
                                                <td>TRREC_152</td>
                                                <td>python</td>
                                                <td>2023-04-25</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1LN9yvwdVnbH-qqdhd2dr-PsD10Z8kwJ6/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=152&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>146</td>
                                                <td>2023-06-05 14:36:21</td>
                                                <td>TRREC_153</td>
                                                <td>python</td>
                                                <td>2023-05-04</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/14DqUPLDEFjrIAHU_3Y3ydSFPKvTZ4FbH/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=153&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>147</td>
                                                <td>2023-06-05 14:37:00</td>
                                                <td>TRREC_154</td>
                                                <td>python</td>
                                                <td>2023-05-05</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1vCTkKeUZng3434rK2LegV4vQaY-msZzK/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=154&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>148</td>
                                                <td>2023-06-05 14:37:25</td>
                                                <td>TRREC_155</td>
                                                <td>python</td>
                                                <td>2023-05-09</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1iu2yePWmqDvVPcdAO2W37uCjcTOg2kS8/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=155&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>149</td>
                                                <td>2023-06-05 14:38:01</td>
                                                <td>TRREC_156</td>
                                                <td>python</td>
                                                <td>2023-05-10</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1FRkZKIaOOwQbx4ORNdM3zJd2k4uBz69N/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=156&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>150</td>
                                                <td>2023-06-05 14:38:28</td>
                                                <td>TRREC_157</td>
                                                <td>python</td>
                                                <td>2023-05-11</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/16IOMPcR5OHiGQKWGs2AEP5XLTTKKX05c/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=157&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>151</td>
                                                <td>2023-06-05 14:38:51</td>
                                                <td>TRREC_158</td>
                                                <td>python</td>
                                                <td>2023-05-12</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1dkbYQ6vcr-lLt0ZaQ1-n4MYKX-g5QTqC/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=158&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>152</td>
                                                <td>2023-06-05 14:39:15</td>
                                                <td>TRREC_159</td>
                                                <td>python</td>
                                                <td>2023-05-15</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1H-MewkS-6SuZo687W-7_TUVaiT8n8-yN/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=159&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>153</td>
                                                <td>2023-06-05 14:39:37</td>
                                                <td>TRREC_160</td>
                                                <td>python</td>
                                                <td>2023-05-16</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1fVRnU4zQsdPZ6uABHeE5KDjDv9O0TgCb/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=160&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>154</td>
                                                <td>2023-06-05 14:40:02</td>
                                                <td>TRREC_161</td>
                                                <td>python</td>
                                                <td>2023-05-17</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1zw1pKhs2kDirMb2B3ppvvEPavk1LAyS4/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=161&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>155</td>
                                                <td>2023-06-05 14:40:27</td>
                                                <td>TRREC_162</td>
                                                <td>python</td>
                                                <td>2023-05-18</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1denhj-OSbs6X-Li-y78H_TzC6v-ka9Xd/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=162&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>156</td>
                                                <td>2023-06-05 14:40:53</td>
                                                <td>TRREC_163</td>
                                                <td>python</td>
                                                <td>2023-05-22</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1ITCts7_EORXhIYW4bpKr8AVBiCFLwigo/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=163&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>157</td>
                                                <td>2023-06-05 14:41:17</td>
                                                <td>TRREC_164</td>
                                                <td>python</td>
                                                <td>2023-05-26</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/13IN4g3lIIODcse_zvSs5DRizaqMHpVeT/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=164&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>158</td>
                                                <td>2023-06-05 14:45:13</td>
                                                <td>TRREC_165</td>
                                                <td>python</td>
                                                <td>2023-05-29</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1B4j4o7ICAIaa4F5LljBl5jrn3wu0daJB/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=165&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>159</td>
                                                <td>2023-06-05 14:41:40</td>
                                                <td>TRREC_166</td>
                                                <td>python</td>
                                                <td>2023-04-28</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1vRh0qxQbYYApwz95C9Lo5jB6AvF5L4YF/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=166&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>160</td>
                                                <td>2023-06-05 14:42:14</td>
                                                <td>TRREC_167</td>
                                                <td>python</td>
                                                <td>2023-04-27</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1Gj3cdez2M0jx9mT-WWie9TbeyaKtwq0M/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=167&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>161</td>
                                                <td>2023-06-05 14:42:40</td>
                                                <td>TRREC_168</td>
                                                <td>python</td>
                                                <td>2023-05-30</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/14nJi6Pd-tlfbztlD1tSbeGCT_u7sQ9oJ/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=168&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>162</td>
                                                <td>2023-06-05 14:43:07</td>
                                                <td>TRREC_169</td>
                                                <td>python</td>
                                                <td>2023-05-31</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1BMdBqOjktkVi5_Y0dWJ_aZIVqLad5F6u/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=169&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>163</td>
                                                <td>2023-06-05 14:43:34</td>
                                                <td>TRREC_170</td>
                                                <td>python</td>
                                                <td>2023-06-01</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/13p9i0mCKCyYTXH8mOqgMAB1W9o1QIdbC/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=170&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>164</td>
                                                <td>2023-06-05 14:44:03</td>
                                                <td>TRREC_171</td>
                                                <td>python</td>
                                                <td>2023-06-05</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1Yi_Adp5jZfq2zLsxcA7-9BpFe61XLJuD/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=171&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>165</td>
                                                <td>2023-06-05 16:12:13</td>
                                                <td>TRREC_172</td>
                                                <td>Problems on Python 2D arrays</td>
                                                <td>2023-05-29</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1KlgCBvURdiYCoNUxcGclQLrHjqmQ2uEd/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=172&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>166</td>
                                                <td>2023-06-05 16:14:05</td>
                                                <td>TRREC_173</td>
                                                <td>Problems on Python 2D arrays</td>
                                                <td>2023-05-30</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1xY4J8ennc6P9_-2_pmkFtsaSQYTkNL0N/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=173&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>167</td>
                                                <td>2023-06-05 16:16:58</td>
                                                <td>TRREC_174</td>
                                                <td>Problems on Python 2D arrays</td>
                                                <td>2023-05-31</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1Yt_nPHCTKRpt_m64xJVt3jLqEFVSMSK7/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=174&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>168</td>
                                                <td>2023-06-05 16:18:40</td>
                                                <td>TRREC_175</td>
                                                <td>Problems on Python 2D arrays-Printing in Snake form</td>
                                                <td>2023-06-01</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1kTCcvZTFfgaogJO8nCxw8a6-XC6gKnH1/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=175&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>169</td>
                                                <td>2023-06-05 16:20:28</td>
                                                <td>TRREC_176</td>
                                                <td>Problems on Python 2D arrays-printing in spiral form</td>
                                                <td>2023-06-02</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1owIwaDKoei4jNI36X-ZIvLiV4Y9Z6oZ6/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=176&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>170</td>
                                                <td>2023-06-05 16:21:30</td>
                                                <td>TRREC_177</td>
                                                <td>Problems on Python 2D arrays-Spiral Printing</td>
                                                <td>2023-06-05</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1owIwaDKoei4jNI36X-ZIvLiV4Y9Z6oZ6/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=177&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>171</td>
                                                <td>2023-06-05 17:41:21</td>
                                                <td>TRREC_178</td>
                                                <td>Digital marketing introduction</td>
                                                <td>2023-05-04</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1iwlDR0bR4NLo114DuoCItmbvx7mveS1u/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=178&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>172</td>
                                                <td>2023-06-05 17:42:29</td>
                                                <td>TRREC_179</td>
                                                <td>Digital marketing introduction</td>
                                                <td>2023-05-05</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1wI3MqzAtbDeNHcQfc6qHAhOPM-Q3-ANw/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=179&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>173</td>
                                                <td>2023-06-05 17:48:33</td>
                                                <td>TRREC_180</td>
                                                <td>Digital marketing introduction</td>
                                                <td>2023-05-06</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1iwlDR0bR4NLo114DuoCItmbvx7mveS1u/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=180&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>174</td>
                                                <td>2023-06-05 18:12:39</td>
                                                <td>TRREC_181</td>
                                                <td>Digital marketing introduction to new student</td>
                                                <td>2023-05-08</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1NkR7aT8tgyNs41XYWc46eQ-HiTyigAdx/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=181&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>175</td>
                                                <td>2023-06-05 18:16:05</td>
                                                <td>TRREC_182</td>
                                                <td>Digital marketing introduction to new student</td>
                                                <td>2023-05-09</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1E_23UbC9-lTqeJDN6BfsQgpbla623rKL/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=182&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>176</td>
                                                <td>2023-06-06 08:15:15</td>
                                                <td>TRREC_183</td>
                                                <td>Basic Word Structure</td>
                                                <td>2023-05-11</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/18zk-IzcJAmseMWR7tX7iKMq7dEmEat7W/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=183&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>177</td>
                                                <td>2023-06-06 08:16:56</td>
                                                <td>TRREC_184</td>
                                                <td>Terms Pertaining to Body</td>
                                                <td>2023-05-12</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1o7MVlWfCoXMWUKJ90U9ujxvaKfpkMfpX/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=184&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>178</td>
                                                <td>2023-06-06 08:18:26</td>
                                                <td>TRREC_185</td>
                                                <td>Terms Pertaining to Body - Terminology</td>
                                                <td>2023-05-16</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1-o9rVMzrHhs3QDjfAWKLeOkzTf3GAd1I/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=185&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>179</td>
                                                <td>2023-06-06 08:19:54</td>
                                                <td>TRREC_186</td>
                                                <td>Suffixes</td>
                                                <td>2023-05-17</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1PNTWsaXfHZHgfoTiP0-6jIggXdNozxDO/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=186&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>180</td>
                                                <td>2023-06-06 09:48:47</td>
                                                <td>TRREC_187</td>
                                                <td>Adwords</td>
                                                <td>2023-05-11</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/119bm3gzu3YxwNh2O4vovAopZcRTkXMW5/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=187&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>181</td>
                                                <td>2023-06-06 09:49:55</td>
                                                <td>TRREC_188</td>
                                                <td>Digital marketing</td>
                                                <td>2023-05-12</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1lKzVtMPwmLYPk0TBwCYTVIQUxe3P6P5Y/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=188&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>182</td>
                                                <td>2023-06-06 09:53:16</td>
                                                <td>TRREC_189</td>
                                                <td>Digital marketing SEO</td>
                                                <td>2023-05-15</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1-qvpNGwli7YkrBIHc1x2OONw4M49YOXV/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=189&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>183</td>
                                                <td>2023-06-06 09:56:03</td>
                                                <td>TRREC_190</td>
                                                <td>SEO keywords and optimization</td>
                                                <td>2023-05-16</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1Lfi4Lk-by8j15Agcl5Mla5CeWCXjifXa/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=190&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>184</td>
                                                <td>2023-06-06 09:57:47</td>
                                                <td>TRREC_191</td>
                                                <td>Off page SEO</td>
                                                <td>2023-05-17</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/15IM4GsviYzSS1aF1t-WVgX6WgkzKjQiy/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=191&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>185</td>
                                                <td>2023-06-06 10:00:14</td>
                                                <td>TRREC_192</td>
                                                <td>SMM</td>
                                                <td>2023-05-18</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1eWWcDulHusQkAy4eFuPsXZAlDc3L6kOR/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=192&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>186</td>
                                                <td>2023-06-06 10:01:59</td>
                                                <td>TRREC_193</td>
                                                <td>Content Marketing</td>
                                                <td>2023-05-19</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/192f-9bXrUy9i8Oswz8U21VtcfH8jChJe/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=193&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>187</td>
                                                <td>2023-06-06 10:04:38</td>
                                                <td>TRREC_194</td>
                                                <td>Social Media Introduction</td>
                                                <td>2023-05-22</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1eWWcDulHusQkAy4eFuPsXZAlDc3L6kOR/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=194&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>188</td>
                                                <td>2023-06-06 10:07:32</td>
                                                <td>TRREC_195</td>
                                                <td>Digital marketing introduction</td>
                                                <td>2023-05-23</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1E_23UbC9-lTqeJDN6BfsQgpbla623rKL/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=195&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>189</td>
                                                <td>2023-06-06 10:11:09</td>
                                                <td>TRREC_196</td>
                                                <td>Adwords responsive ads</td>
                                                <td>2023-05-26</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1nV1AptvfCw6RohujBCvh9Cj5xXEmrcS3/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=196&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>190</td>
                                                <td>2023-06-06 10:13:14</td>
                                                <td>TRREC_197</td>
                                                <td>google analytics</td>
                                                <td>2023-05-29</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1xbccaUqutQHl9N5aDJrFK-uoiJjl0rZV/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=197&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>191</td>
                                                <td>2023-06-06 10:17:33</td>
                                                <td>TRREC_198</td>
                                                <td>ROI AND KPI </td>
                                                <td>2023-05-30</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1VZYa-TXZnhRxf-VL_mYMSaEt-zMvQNdn/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=198&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>192</td>
                                                <td>2023-06-06 10:19:58</td>
                                                <td>TRREC_199</td>
                                                <td>Adwords certification</td>
                                                <td>2023-05-31</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1Z9Zt1TvRipdO1R4yxlkOp3E_nRfbsdPz/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=199&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>193</td>
                                                <td>2023-06-06 10:23:34</td>
                                                <td>TRREC_200</td>
                                                <td>Class recap due to low students volume</td>
                                                <td>2023-06-01</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/14F4Vpnj9E9eLQGiXesmTcAZ5QhTuP0NL/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=200&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>194</td>
                                                <td>2023-06-06 10:25:22</td>
                                                <td>TRREC_201</td>
                                                <td>Paid marketing and camapigns types</td>
                                                <td>2023-06-02</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1knrT8lfsgZSi5ruvB9rFTTbj6aNPKl3v/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=201&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>195</td>
                                                <td>2023-06-06 10:27:20</td>
                                                <td>TRREC_202</td>
                                                <td>Traffic types,</td>
                                                <td>2023-06-05</td>
                                                <td>Shiva Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/119bm3gzu3YxwNh2O4vovAopZcRTkXMW5/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=202&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>196</td>
                                                <td>2023-06-06 11:10:57</td>
                                                <td>TRREC_203</td>
                                                <td>Bootstrap grid system in detail</td>
                                                <td>2023-06-01</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1h35aLq-qA7p2rU6aaaB0lWWeGLbOPJNB/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=203&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>197</td>
                                                <td>2023-06-06 16:25:09</td>
                                                <td>TRREC_204</td>
                                                <td>Introduction to HTML and CSS part 1</td>
                                                <td>2023-05-22</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1h35aLq-qA7p2rU6aaaB0lWWeGLbOPJNB/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=204&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>198</td>
                                                <td>2023-06-06 16:27:32</td>
                                                <td>TRREC_205</td>
                                                <td>INtroduction to HTML and CSS part 2</td>
                                                <td>2023-05-23</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1h35aLq-qA7p2rU6aaaB0lWWeGLbOPJNB/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=205&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>199</td>
                                                <td>2023-06-06 16:30:37</td>
                                                <td>TRREC_206</td>
                                                <td>creating and managing ledger accounts</td>
                                                <td>2023-06-02</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/1D9sQu5A3wT4kyGYv0CPCfML5kdrOJqU2/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=206&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>200</td>
                                                <td>2023-06-06 16:31:40</td>
                                                <td>TRREC_207</td>
                                                <td>configuring groups and subgroups</td>
                                                <td>2023-06-05</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/10Yw4Ciy-uyf9lcA2r2xb0KOkXglWolHh/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=207&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>201</td>
                                                <td>2023-06-06 16:32:44</td>
                                                <td>TRREC_208</td>
                                                <td>handling opening balances and closing balances</td>
                                                <td>2023-06-06</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/1PXEkkyrsa_b2nWDqbhwC6bZTktZWWzbH/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=208&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>202</td>
                                                <td>2023-06-06 16:38:19</td>
                                                <td>TRREC_209</td>
                                                <td>building basic project on HTML and CSS part -1</td>
                                                <td>2023-05-26</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/18YmaOMDMpffrky7WzIRJKKq6uJF_MXMj/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=209&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>203</td>
                                                <td>2023-06-06 16:41:01</td>
                                                <td>TRREC_210</td>
                                                <td>Building basic project on HTML and css part-2</td>
                                                <td>2023-05-27</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1BZyljZR5nvRr-nSvxtDdE7_plqpdiV9c/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=210&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>204</td>
                                                <td>2023-06-06 16:44:36</td>
                                                <td>TRREC_211</td>
                                                <td>Introduction to bootstrap</td>
                                                <td>2023-05-29</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1Jqn6gp99p0TYKncknZq8OlCf6_xp700e/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=211&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>205</td>
                                                <td>2023-06-06 16:46:40</td>
                                                <td>TRREC_212</td>
                                                <td>Introduction to bootstrap flex box properties</td>
                                                <td>2023-05-31</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/145V-ZWUsgGdgEdPQTJvhsfkeWz7P1fY7/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=212&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>206</td>
                                                <td>2023-06-06 16:52:27</td>
                                                <td>TRREC_213</td>
                                                <td>Prefixes</td>
                                                <td>2023-05-19</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://docs.google.com/forms/d/1yF30gXoncADZh6PcvZG3-KFisj3IAh6G_FENrSVXvn0/edit"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=213&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>207</td>
                                                <td>2023-06-06 16:56:31</td>
                                                <td>TRREC_214</td>
                                                <td>Prefixes Terminology</td>
                                                <td>2023-05-22</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1KMZhBB0g6IqfLkYSy1sUuKhpU0pAhd_3/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=214&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>208</td>
                                                <td>2023-06-06 16:58:28</td>
                                                <td>TRREC_215</td>
                                                <td>Digestive system anatomy</td>
                                                <td>2023-05-23</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/14tgNBKmIRoQvtTZ7DbiX8U0QUH2BLU9P/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=215&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>209</td>
                                                <td>2023-06-06 17:03:19</td>
                                                <td>TRREC_216</td>
                                                <td>Digestive system anatomy 2</td>
                                                <td>2023-05-26</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1yqRFbUT15spnrYHAQM09ivxvhQs99kaF/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=216&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>210</td>
                                                <td>2023-06-06 17:08:34</td>
                                                <td>TRREC_217</td>
                                                <td>Digestive system terminology</td>
                                                <td>2023-05-27</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1VYEBLdsCwXgucscPqJfhEFFVYPKJFT1Q/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=217&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>211</td>
                                                <td>2023-06-06 17:10:27</td>
                                                <td>TRREC_218</td>
                                                <td>Digestive system terminology 2</td>
                                                <td>2023-05-30</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/10LAfaDQDRCVzMEtbDbXthYqdAckLD0vB/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=218&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>212</td>
                                                <td>2023-06-06 17:11:36</td>
                                                <td>TRREC_219</td>
                                                <td>Digestive system pathology</td>
                                                <td>2023-05-31</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1X061tAFkROPir8FMEn7TU0yamNLzHoTp/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=219&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>213</td>
                                                <td>2023-06-06 20:26:20</td>
                                                <td>TRREC_220</td>
                                                <td>HTML css and bootstrap demo project live demonstration</td>
                                                <td>2023-06-06</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1Ga8tRlk8JHjpLj4uoVxrJonrMe1RYS4H/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=220&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>214</td>
                                                <td>2023-06-07 09:06:22</td>
                                                <td>TRREC_221</td>
                                                <td>Tkinter in python</td>
                                                <td>2023-06-06</td>
                                                <td>Nikhil Chakka</td>
                                                <td><a href="https://drive.google.com/file/d/1AZoomfunbphNiDwmmfA0rcTU5Pd50qMA/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=221&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>215</td>
                                                <td>2023-06-07 09:12:35</td>
                                                <td>TRREC_222</td>
                                                <td>Python Functions</td>
                                                <td>2023-06-06</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1BodtfmpFIcuGC95-OIxYALuqZDpPgWyS/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=222&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>216</td>
                                                <td>2023-06-07 10:56:40</td>
                                                <td>TRREC_223</td>
                                                <td>Python Functions and recursion</td>
                                                <td>2023-06-07</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1VUQAyCMWdi4864guWdTFA7NvYo1NA0iE/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=223&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>217</td>
                                                <td>2023-06-07 11:59:51</td>
                                                <td>TRREC_224</td>
                                                <td>types of vouchers and their usage</td>
                                                <td>2023-06-07</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/1Nipoyhy7iRoyMbK5V4Mx6hi3WB-mv_p0/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=224&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>218</td>
                                                <td>2023-06-07 15:18:05</td>
                                                <td>TRREC_225</td>
                                                <td>Introduction of Python</td>
                                                <td>2023-05-15</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1Rtq77YJaZN6LRmMyhwiVaLQJ0JdYR3XS/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=225&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>219</td>
                                                <td>2023-06-07 13:16:50</td>
                                                <td>TRREC_226</td>
                                                <td>BUYER PERSONA</td>
                                                <td>2023-06-01</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/10MkoykpsTvlx0QlAN2I2-OtmJk3zOkRn/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=226&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>220</td>
                                                <td>2023-06-07 13:17:26</td>
                                                <td>TRREC_227</td>
                                                <td>Data Types and Variables in python</td>
                                                <td>2023-05-16</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1eSzeDNuU6UF1-Q3wD1DvENoOnhZT8Q6f/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=227&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>221</td>
                                                <td>2023-06-07 13:19:27</td>
                                                <td>TRREC_228</td>
                                                <td>Operators and Python Indentation</td>
                                                <td>2023-05-17</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1kuTcOBHODjDxbrTXsnvSmAPI2aU71VQ5/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=228&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>222</td>
                                                <td>2023-06-07 13:22:17</td>
                                                <td>TRREC_229</td>
                                                <td>Type Casting and Conditional Statements in Python</td>
                                                <td>2023-05-18</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1mMzEZLgSd88hG0NWpGBK7qrINY1hh71C/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=229&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>223</td>
                                                <td>2023-06-07 14:26:41</td>
                                                <td>TRREC_231</td>
                                                <td>Testig</td>
                                                <td>2023-07-07</td>
                                                <td></td>
                                                <td><a href="https://drive.google.com/file/d/18YPr-n11My9T-RBehIy29-_rNL_VxiXg/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=231&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>224</td>
                                                <td>2023-06-07 14:34:40</td>
                                                <td>TRREC_232</td>
                                                <td>Tuple, List, Dictionaries and sets in python</td>
                                                <td>2023-05-19</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1C4UOFoCFH1iX7-xmA33DPL5vL_5mrz_H/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=232&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>225</td>
                                                <td>2023-06-07 14:37:34</td>
                                                <td>TRREC_233</td>
                                                <td>Arrays in Python</td>
                                                <td>2023-05-22</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1vQtltyULVX6A8lWXHRhcPAsdDG2NJ8oP/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=233&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>226</td>
                                                <td>2023-06-07 14:38:50</td>
                                                <td>TRREC_234</td>
                                                <td>Array in Python</td>
                                                <td>2023-05-22</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1jiGF4_h0O2IEVTCLFDaeYj8xEFcFSBUT/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=234&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>227</td>
                                                <td>2023-06-07 14:40:00</td>
                                                <td>TRREC_235</td>
                                                <td>Strings in Python</td>
                                                <td>2023-05-23</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1ZykdzK9WfYAtOCn8y3nDfAXV_zdY2xDs/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=235&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>228</td>
                                                <td>2023-06-07 14:40:25</td>
                                                <td>TRREC_236</td>
                                                <td>data types</td>
                                                <td>2023-06-07</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1Ezw_SmL2X0ja3iZro1oV_A61Gytk2Nj7/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=236&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>229</td>
                                                <td>2023-06-07 14:42:28</td>
                                                <td>TRREC_237</td>
                                                <td>Solving Python Basic Programs</td>
                                                <td>2023-05-27</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1FMzU23hUbtloN1fKcGVW0moFTndhSdFz/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=237&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>230</td>
                                                <td>2023-06-07 14:44:28</td>
                                                <td>TRREC_238</td>
                                                <td>Recursion Function and OOPs Concept(class , Object)</td>
                                                <td>2023-05-29</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/13telGVYZJRvj-McSDdO2VgGrkbNaNaeD/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=238&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>231</td>
                                                <td>2023-06-07 14:44:42</td>
                                                <td>TRREC_239</td>
                                                <td>basic operators</td>
                                                <td>2023-06-02</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1OT7bYdEmQ0ItSyiKjpT49JnLueB5odZ3/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=239&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>232</td>
                                                <td>2023-06-07 14:45:39</td>
                                                <td>TRREC_240</td>
                                                <td>OOPS Concept in Python</td>
                                                <td>2023-05-30</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1laahL6XrtF2XBVuLWnNIh31fHu246_p1/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=240&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>233</td>
                                                <td>2023-06-07 14:47:29</td>
                                                <td>TRREC_241</td>
                                                <td>comparision operators</td>
                                                <td>2023-06-06</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1I9Wx3IuSifg_-HbDYzzBOONA3I_l4Ys0/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=241&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>234</td>
                                                <td>2023-06-07 14:48:01</td>
                                                <td>TRREC_242</td>
                                                <td>Constructor in Python</td>
                                                <td>2023-05-31</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1fusLfr-yg9z2SFOHihcX3WGTp14UFwQe/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=242&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>235</td>
                                                <td>2023-06-07 14:48:58</td>
                                                <td>TRREC_243</td>
                                                <td>Constructor in Python</td>
                                                <td>2023-05-31</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1qFR9bKyVKDMQjji5Yo74GAdoMCLd9nEQ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=243&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>236</td>
                                                <td>2023-06-07 14:51:02</td>
                                                <td>TRREC_244</td>
                                                <td>Python Scope and Methods</td>
                                                <td>2023-06-01</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1Jod89X2kBDUZMlSKCo-lNXQrx30lGcqy/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=244&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>237</td>
                                                <td>2023-06-07 14:52:46</td>
                                                <td>TRREC_245</td>
                                                <td>Abstract Method and Abstract Class in python</td>
                                                <td>2023-06-02</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1rX6yrw4Wnng17Q_8BC63AmD5ny0ndpVA/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=245&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>238</td>
                                                <td>2023-06-07 14:54:16</td>
                                                <td>TRREC_246</td>
                                                <td>Python Modules</td>
                                                <td>2023-06-05</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/17pEfJ6cU5VlGWRXapT-KYBMmZHyPyunm/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=246&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>239</td>
                                                <td>2023-06-07 15:45:06</td>
                                                <td>TRREC_247</td>
                                                <td>Interfaces , Error and Exceptions in Python</td>
                                                <td>2023-06-06</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1tk4QlX9FRo2S15YLev2Q3IAXMUmHsDaJ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=247&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>240</td>
                                                <td>2023-06-07 16:40:24</td>
                                                <td>TRREC_248</td>
                                                <td>endocrine system</td>
                                                <td>2023-06-07</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1xXswI_Z_CJ8gZxvxQTvfGV7EZh782r_K/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=248&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>241</td>
                                                <td>2023-06-07 16:53:48</td>
                                                <td>TRREC_249</td>
                                                <td>Data Types and Java Tokens</td>
                                                <td>2023-05-04</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1bTNe2Vy9SJqD_Es6t5oqfsjCtjqJUUFW/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=249&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>242</td>
                                                <td>2023-06-07 16:57:17</td>
                                                <td>TRREC_250</td>
                                                <td>Operators and Selection Statements in Java</td>
                                                <td>2023-05-05</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1d3PJa49bQOe3UFF0woXOYY0W-Pu6CIai/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=250&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>243</td>
                                                <td>2023-06-07 16:59:57</td>
                                                <td>TRREC_251</td>
                                                <td>Selection and Looping Statements in Python</td>
                                                <td>2023-05-08</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1oVovdg4YNIzYodJSoDyplC_Y_WhARw7S/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=251&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>244</td>
                                                <td>2023-06-07 17:03:37</td>
                                                <td>TRREC_252</td>
                                                <td>Jump Statements and OOPS Concept in Java</td>
                                                <td>2023-05-09</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1etJvICM2O9uFD62EgSDu0RyDY-uJUdYg/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=252&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>245</td>
                                                <td>2023-06-07 17:20:11</td>
                                                <td>TRREC_253</td>
                                                <td>Access Specifiers and Type Casting in Java</td>
                                                <td>2023-05-10</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1xGfj8DcQptxqimTackHjq4GMAwJXllCc/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=253&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>246</td>
                                                <td>2023-06-07 17:22:16</td>
                                                <td>TRREC_254</td>
                                                <td>Arrays and Scanner Method in Java</td>
                                                <td>2023-05-11</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1UqS-RhSN8C-zhIzazrjHK3psIaDcDQy1/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=254&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>247</td>
                                                <td>2023-06-07 17:24:19</td>
                                                <td>TRREC_255</td>
                                                <td>Strings and Constructor in Java</td>
                                                <td>2023-05-12</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/10__zY60ht0J5eNNQiRLg58clgX7_Avsn/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=255&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>248</td>
                                                <td>2023-06-07 18:09:35</td>
                                                <td>TRREC_256</td>
                                                <td>Static Keyword and Types of Variables</td>
                                                <td>2023-05-15</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1XmWTJjPajcVZg2Fw4QkmS7WQPqyL8GH8/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=256&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>249</td>
                                                <td>2023-06-07 18:13:11</td>
                                                <td>TRREC_257</td>
                                                <td>This keyword, Inheritance and Abstract Class </td>
                                                <td>2023-05-16</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1_S9KUQRBiC8FF_r1al8bXFW_Pt_Hs036/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=257&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>250</td>
                                                <td>2023-06-07 18:16:42</td>
                                                <td>TRREC_258</td>
                                                <td>Errors and Exception in Java</td>
                                                <td>2023-05-22</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1u_Ed0OK9_J6lm06e4KNhEuCGfoq52hbp/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=258&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>251</td>
                                                <td>2023-06-07 18:21:58</td>
                                                <td>TRREC_259</td>
                                                <td>Error Encapsulation and Assertion in Thread</td>
                                                <td>2023-05-23</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1ra40c84z1MWTlcivFuw6YfK0wpv_Pcar/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=259&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>252</td>
                                                <td>2023-06-07 18:24:40</td>
                                                <td>TRREC_260</td>
                                                <td>Threads in Java</td>
                                                <td>2023-05-29</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1AKId7WndPErfJ5SiJcCYh8oxaPOhtrJL/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=260&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>253</td>
                                                <td>2023-06-07 18:31:26</td>
                                                <td>TRREC_261</td>
                                                <td>Inter thread Communication in Java</td>
                                                <td>2023-05-30</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1MZ_PJNS7_00h0Z6u0_O7n5qVXheT5OKl/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=261&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>254</td>
                                                <td>2023-06-07 18:32:49</td>
                                                <td>TRREC_262</td>
                                                <td>Packages in Java</td>
                                                <td>2023-05-31</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/18pL5U0lrmxlp_bNSGhk4-j4f56Q7b9fw/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=262&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>255</td>
                                                <td>2023-06-08 10:36:14</td>
                                                <td>TRREC_263</td>
                                                <td>css selectors and html lists</td>
                                                <td>2023-06-07</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1XFDvoLjPUnQh9pNnZai8o7vJR4ATlUQg/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=263&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>256</td>
                                                <td>2023-06-08 10:50:08</td>
                                                <td>TRREC_264</td>
                                                <td>logical operator and if condition</td>
                                                <td>2023-06-07</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1dap1uSrxHCHEM2_D13lRlHr528Gfw1bK/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=264&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>257</td>
                                                <td>2023-06-08 12:07:58</td>
                                                <td>TRREC_265</td>
                                                <td>recording transactions using vouchers</td>
                                                <td>2023-06-08</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/1hM83f8z7FHy6NXBaxB4_0Wh6Kpv8tAGZ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=265&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>258</td>
                                                <td>2023-06-08 13:42:56</td>
                                                <td>TRREC_266</td>
                                                <td>senseorgans</td>
                                                <td>2023-06-08</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1K8SdrDrBl4rjHxCPfzYQAUgIEtoDlR5n/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=266&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>259</td>
                                                <td>2023-06-08 18:48:01</td>
                                                <td>TRREC_267</td>
                                                <td>CONTENT MARKETING</td>
                                                <td>2023-06-05</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1CaORY1jUf6zJ7dq5r1JuVJXhkMtE0NSH/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=267&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>260</td>
                                                <td>2023-06-09 08:41:55</td>
                                                <td>TRREC_268</td>
                                                <td>Python Functions</td>
                                                <td>2023-06-08</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1bQfv49ngjJcgHzFWbJ-xatRd3AwUJO_s/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=268&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>261</td>
                                                <td>2023-06-09 09:42:36</td>
                                                <td>TRREC_269</td>
                                                <td>nervous system</td>
                                                <td>2023-06-08</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1_xAaxT-HXbxKFFBthHt1c6Stp__EdLj0/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=269&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>262</td>
                                                <td>2023-06-09 10:37:52</td>
                                                <td>TRREC_270</td>
                                                <td>css fundamentals - cascade, inheritance and specificity</td>
                                                <td>2023-06-08</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1lnXBK7wrfNGiE-_L6xofTRK7rUqC-W2V/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=270&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>263</td>
                                                <td>2023-06-09 11:19:44</td>
                                                <td>TRREC_271</td>
                                                <td>switch statement</td>
                                                <td>2023-06-09</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/17XVFExMywq2uhkagPEMYaodeh6SQuqP_/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=271&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>264</td>
                                                <td>2023-06-09 12:23:16</td>
                                                <td>TRREC_272</td>
                                                <td>shortcuts and tips for productivity</td>
                                                <td>2023-06-09</td>
                                                <td>Vasundhara</td>
                                                <td><a href=" https://drive.google.com/file/d/1KAEsw3rSNYyNQwhWbCCUgjfu-gK3Nd32/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=272&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>265</td>
                                                <td>2023-06-09 13:43:18</td>
                                                <td>TRREC_273</td>
                                                <td>senseorgans</td>
                                                <td>2023-06-09</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1CS0YKHlGaxUibe51uwYiAb4QADF0qHGF/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=273&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>266</td>
                                                <td>2023-06-09 17:04:55</td>
                                                <td>TRREC_274</td>
                                                <td>nervous system</td>
                                                <td>2023-06-09</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1gWFWk88Aajl-YsTyPQlIEbytBisnYEVT/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=274&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>267</td>
                                                <td>2023-06-10 10:37:56</td>
                                                <td>TRREC_275</td>
                                                <td>css fundamentals - cascade, inheritance and specificity revision
                                                </td>
                                                <td>2023-06-10</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1zsQxPz8K2IVY1k4o-584mSpT1ok4RZdi/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=275&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>268</td>
                                                <td>2023-06-10 11:22:23</td>
                                                <td>TRREC_276</td>
                                                <td>SEARCH ENGINE</td>
                                                <td>2023-06-07</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1C9VPBhTW1w3S19t1wop5_SmHnuIrMuXO/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=276&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>269</td>
                                                <td>2023-06-10 12:22:53</td>
                                                <td>TRREC_277</td>
                                                <td>SEO</td>
                                                <td>2023-06-08</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1CjpHbfUm7GmKyI9dqGCPpW8ppNfyLMC_/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=277&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>270</td>
                                                <td>2023-06-10 12:46:47</td>
                                                <td>TRREC_278</td>
                                                <td>GOOGLE TRENDS</td>
                                                <td>2023-06-09</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1Q2mjrDPtXHjsJYQaLIVfhY-xyKduHXRk/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=278&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>271</td>
                                                <td>2023-06-12 08:37:04</td>
                                                <td>TRREC_279</td>
                                                <td>Problems on Python recursion</td>
                                                <td>2023-06-09</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://triarightsolutionsllp.my.webex.com/meet/kk.c4deals"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=279&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>272</td>
                                                <td>2023-06-12 11:11:40</td>
                                                <td>TRREC_280</td>
                                                <td>loops in js (for and while)</td>
                                                <td>2023-06-09</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1ud6Q4o53drEBon4qBjrDTFwZm8aBBhZe/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=280&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>273</td>
                                                <td>2023-06-12 13:47:53</td>
                                                <td>TRREC_281</td>
                                                <td>psychiatric diorders</td>
                                                <td>2023-06-12</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1dMEl0aI_RPG1SZW8inZfrsi3Y8VnKHxw/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=281&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>274</td>
                                                <td>2023-06-12 16:04:24</td>
                                                <td>TRREC_282</td>
                                                <td>Python Scope and Methods in python</td>
                                                <td>2023-06-01</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1Jod89X2kBDUZMlSKCo-lNXQrx30lGcqy/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=282&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>275</td>
                                                <td>2023-06-12 16:13:36</td>
                                                <td>TRREC_283</td>
                                                <td>User defined Exceptions in Python</td>
                                                <td>2023-06-07</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1rsKS3hlbHzSyxP-FKbRVPe3GGury4n8l/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=283&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>276</td>
                                                <td>2023-06-12 16:16:41</td>
                                                <td>TRREC_284</td>
                                                <td>Regular Expressions in python</td>
                                                <td>2023-06-08</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1Nt4xpL2AedQ2PLlA-e_lEJ0hIBCp70Je/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=284&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>277</td>
                                                <td>2023-06-12 16:18:34</td>
                                                <td>TRREC_285</td>
                                                <td>Thread in python</td>
                                                <td>2023-06-12</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1xopSfNGSWunFNcHMJyJ-Tel2zNKX5sgz/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=285&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>278</td>
                                                <td>2023-06-12 16:44:08</td>
                                                <td>TRREC_286</td>
                                                <td>Access levels and Wrapper class</td>
                                                <td>2023-06-01</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1MgZJ9LZw5biX1pVPPoYblkshy6o0AYpX/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=286&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>279</td>
                                                <td>2023-06-12 16:47:23</td>
                                                <td>TRREC_287</td>
                                                <td>Vector and Wrapper class in java</td>
                                                <td>2023-06-06</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1qyZS_De7d0BCooNhB67ngSWIJQVaDnaf/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=287&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>280</td>
                                                <td>2023-06-12 16:54:18</td>
                                                <td>TRREC_288</td>
                                                <td>Applet Programming and Events in java</td>
                                                <td>2023-06-08</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1o5he3mfnzMJW_aqHf7ztVbMHZarhnCxt/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=288&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>281</td>
                                                <td>2023-06-12 16:56:10</td>
                                                <td>TRREC_289</td>
                                                <td>Components and Containers in AWT</td>
                                                <td>2023-06-12</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1KIY4BaqBEQY_Ymw6NJRRNwKY_b1TLz7B/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=289&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>282</td>
                                                <td>2023-06-12 18:46:33</td>
                                                <td>TRREC_290</td>
                                                <td>bootstrap utilities</td>
                                                <td>2023-06-12</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/117EK-EpYB0GLuKGs_s9JtRHAn3Wh1ZKh/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=290&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>283</td>
                                                <td>2023-06-13 08:47:18</td>
                                                <td>TRREC_291</td>
                                                <td>functions</td>
                                                <td>2023-06-12</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/18SIU811HKlUe_NYWIy0DDTK7V83SpEyv/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=291&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>284</td>
                                                <td>2023-06-13 08:51:30</td>
                                                <td>TRREC_292</td>
                                                <td>Problems on python functions and dictionaries, strings</td>
                                                <td>2023-06-12</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/13pa3u-SRJxHSmnuMDe0FQ5Pr-sGDD1kc/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=292&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>285</td>
                                                <td>2023-06-13 10:20:17</td>
                                                <td>TRREC_293</td>
                                                <td>nervous system</td>
                                                <td>2023-06-12</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1LLk9JetnLc1VPlPjW3rNdJAtF6qP5Lqw/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=293&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>286</td>
                                                <td>2023-06-13 10:20:23</td>
                                                <td>TRREC_294</td>
                                                <td>nervous system</td>
                                                <td>2023-06-12</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1LLk9JetnLc1VPlPjW3rNdJAtF6qP5Lqw/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=294&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>287</td>
                                                <td>2023-06-13 12:22:22</td>
                                                <td>TRREC_295</td>
                                                <td>types of incomes</td>
                                                <td>2023-06-08</td>
                                                <td>Narender</td>
                                                <td><a href="https://drive.google.com/file/d/1hYcPoqt1VVP07JEWi4WzdyEpgWYERjy4/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=295&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>288</td>
                                                <td>2023-06-13 12:23:43</td>
                                                <td>TRREC_296</td>
                                                <td>W2 Forms</td>
                                                <td>2023-06-12</td>
                                                <td>Narender</td>
                                                <td><a href="https://drive.google.com/file/d/1wkNOn75vi8EeVk6SuTzl8XmoQKUsrvuW/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=296&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>289</td>
                                                <td>2023-06-13 13:51:15</td>
                                                <td>TRREC_297</td>
                                                <td>revision</td>
                                                <td>2023-06-13</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1sIvhl8E958nFAhEu2-U--0ugkk2TUCSN/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=297&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>290</td>
                                                <td>2023-06-13 15:53:53</td>
                                                <td>TRREC_298</td>
                                                <td>PAGE RANK, PA, DA</td>
                                                <td>2023-06-12</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1OSRxyl4VtyQmq5pYHAAdALG_00fgvQxa/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=298&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>291</td>
                                                <td>2023-06-13 18:10:40</td>
                                                <td>TRREC_299</td>
                                                <td>ON PAGE, OFF PAGE SEO</td>
                                                <td>2023-06-13</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1IghMA4Q80Z95voQlSM5r016-jiM08yAJ/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=299&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>292</td>
                                                <td>2023-06-14 10:00:41</td>
                                                <td>TRREC_300</td>
                                                <td>cardiovascular system</td>
                                                <td>2023-06-13</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1cV2fizy5Y5SOz1HhgAMCSOsGzky8WfDN/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=300&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>293</td>
                                                <td>2023-06-14 10:24:57</td>
                                                <td>TRREC_301</td>
                                                <td>functions expression</td>
                                                <td>2023-06-14</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1PctgFDYjtwu1TGIW_l8C2GsP8PxKxnf3/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=301&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>294</td>
                                                <td>2023-06-14 12:47:34</td>
                                                <td>TRREC_302</td>
                                                <td>bootstrap utilities - navbar,carousel and embed demonstration</td>
                                                <td>2023-06-13</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1QpxvN0mvLqy-vAUJQ0IOJE4hhBh84z-g/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=302&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>295</td>
                                                <td>2023-06-14 13:59:37</td>
                                                <td>TRREC_303</td>
                                                <td>anatomy test for certification</td>
                                                <td>2023-06-14</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1QzJlNePdp5OgvPQfyXD9OizJ-4bFshzP/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=303&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>296</td>
                                                <td>2023-06-14 14:57:47</td>
                                                <td>TRREC_304</td>
                                                <td>(MODIFYING AND DELETING VOUCHERS,CONFIGURING VOUCHER NUMBERING AND
                                                    NARRATION</td>
                                                <td>2023-06-14</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/1NrnqFwuJHXMoXh7_I42RBXcktxPFUbjV/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=304&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>297</td>
                                                <td>2023-06-14 18:46:04</td>
                                                <td>TRREC_305</td>
                                                <td>building website using html,css and bootstrap utilities</td>
                                                <td>2023-06-14</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1pvXzazVKlHHpPGFTDvKpz9TnZDTLGLBj/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=305&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>298</td>
                                                <td>2023-06-14 19:13:47</td>
                                                <td>TRREC_306</td>
                                                <td>cardiovascular system</td>
                                                <td>2023-06-14</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1EyEddiSA2oMz7Uk0B-QrO9zNZpAQdfrU/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=306&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>299</td>
                                                <td>2023-06-15 12:45:44</td>
                                                <td>TRREC_307</td>
                                                <td>voucher classes and voucher types</td>
                                                <td>2023-06-15</td>
                                                <td>Vasundhara</td>
                                                <td><a href=" https://drive.google.com/file/d/1PfHptrFxWw-WQzoxVzny_qmzOBPCDZi2/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=307&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>300</td>
                                                <td>2023-06-15 13:47:07</td>
                                                <td>TRREC_308</td>
                                                <td>medical coding classes 1</td>
                                                <td>2023-06-15</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1BxOxsRwlABrE-559yUssMRbBVbCRNFQk/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=308&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>301</td>
                                                <td>2023-06-15 18:49:47</td>
                                                <td>TRREC_309</td>
                                                <td>string methods</td>
                                                <td>2023-06-13</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1Wj74rvmYTqCnrlwLPoI8rCBZqTsIbB5T/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=309&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>302</td>
                                                <td>2023-06-15 18:51:45</td>
                                                <td>TRREC_310</td>
                                                <td>array methods part 1</td>
                                                <td>2023-06-15</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1J-WWDEMZugqLr8JRZwgdLxqADa6qHLLa/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=310&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>303</td>
                                                <td>2023-06-15 19:05:37</td>
                                                <td>TRREC_311</td>
                                                <td>restaurant website project 1</td>
                                                <td>2023-06-15</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/13zI2uLmrBD3O_EFFSvoNSHuBoJLqouS4/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=311&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>304</td>
                                                <td>2023-06-16 13:40:18</td>
                                                <td>TRREC_312</td>
                                                <td>medical coding classes 2</td>
                                                <td>2023-06-16</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1Ce_65pedWsQGZGuA0IBN74e118MBBTU2/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=312&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>305</td>
                                                <td>2023-06-16 13:43:21</td>
                                                <td>TRREC_313</td>
                                                <td>integumentory system</td>
                                                <td>2023-06-15</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1GNuPbILMqakGu4kt8Kw27czOpIggPuFD/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=313&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>306</td>
                                                <td>2023-06-16 17:29:54</td>
                                                <td>TRREC_314</td>
                                                <td>senseorgans</td>
                                                <td>2023-06-16</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1HSBAZjzIHHoeIAwp7U7cKudNI_I2KNwE/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=314&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>307</td>
                                                <td>2023-06-16 18:52:50</td>
                                                <td>TRREC_315</td>
                                                <td>Restaurant website demonstration part 2</td>
                                                <td>2023-06-16</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1B4noSqLEZ7kgbqDh2Lf2ydgpdHBJ_Kpl/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=315&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>308</td>
                                                <td>2023-06-16 19:02:23</td>
                                                <td>TRREC_316</td>
                                                <td>voucher customization using tally prime</td>
                                                <td>2023-06-16</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/1dssglmYU83ABgHPsbODaktjGax4ERHiZ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=316&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>309</td>
                                                <td>2023-06-16 19:57:10</td>
                                                <td>TRREC_317</td>
                                                <td>Sense organs Eye anatomy and terminology</td>
                                                <td>2023-06-07</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1TqeCPEJVWjH33IKSuzm9xjRX0HdXMmb5/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=317&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>310</td>
                                                <td>2023-06-16 19:58:18</td>
                                                <td>TRREC_318</td>
                                                <td>Sense organs Ear anatomy and terminology</td>
                                                <td>2023-06-08</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1iLTXeXQXSaV_K9gq0lQf5MohQcE11IDv/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=318&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>311</td>
                                                <td>2023-06-16 19:59:40</td>
                                                <td>TRREC_319</td>
                                                <td>Endocrine system</td>
                                                <td>2023-06-09</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1AGk1lTmnI3PKPm13yvsVo6oz2J1FRfdk/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=319&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>312</td>
                                                <td>2023-06-16 20:01:02</td>
                                                <td>TRREC_320</td>
                                                <td>Cancer Medicine (Oncology)</td>
                                                <td>2023-06-12</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1eNV0ZUuJujHCUAsCKCM2QaG32k67GuTp/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=320&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>313</td>
                                                <td>2023-06-16 20:02:33</td>
                                                <td>TRREC_321</td>
                                                <td>Radiology and Nuclear Medicine</td>
                                                <td>2023-06-13</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1xJr3Eznmy3Vhe-3sN8lB1DLj3oP6vkLG/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=321&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>314</td>
                                                <td>2023-06-16 20:03:35</td>
                                                <td>TRREC_322</td>
                                                <td>Pharmacology</td>
                                                <td>2023-06-14</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1pbwtVvh1PgOB5Hq7Qj__yzO1qZXOakAr/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=322&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>315</td>
                                                <td>2023-06-16 20:04:28</td>
                                                <td>TRREC_323</td>
                                                <td>Psychiatry</td>
                                                <td>2023-06-15</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1B2ZImjm3dHGkYIymYtuYN4pLWUw5RGfk/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=323&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>316</td>
                                                <td>2023-06-16 20:22:26</td>
                                                <td>TRREC_324</td>
                                                <td>Additional suffixes and digestive system terminology</td>
                                                <td>2023-06-07</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1FFvMHOGqhfIXf9GON8ogHOcDGVMrDbHn/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=324&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>317</td>
                                                <td>2023-06-16 20:24:49</td>
                                                <td>TRREC_325</td>
                                                <td>Urinary System Anatomy</td>
                                                <td>2023-06-08</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1lBVwrCuUKmq5fYhpCqHhnXEp3QDfZ4aQ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=325&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>318</td>
                                                <td>2023-06-16 20:26:03</td>
                                                <td>TRREC_326</td>
                                                <td>Urinary System Terminology</td>
                                                <td>2023-06-09</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1AmalOltUrCZooMAcOL070Fn3vs6ik3V6/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=326&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>319</td>
                                                <td>2023-06-16 20:27:31</td>
                                                <td>TRREC_327</td>
                                                <td>Urinary System Pathology</td>
                                                <td>2023-06-12</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/12GkL7I0uZ8lLvOgLfmpPrMuWxS3m5ZJE/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=327&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>320</td>
                                                <td>2023-06-16 20:28:51</td>
                                                <td>TRREC_328</td>
                                                <td>Urinary System Lab and clinical procedures</td>
                                                <td>2023-06-13</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1PJ9ADYPZtlPJCmR1BMxjqwnqMXgLKWOS/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=328&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>321</td>
                                                <td>2023-06-16 20:30:31</td>
                                                <td>TRREC_329</td>
                                                <td>Female reproductive system - Anatomy</td>
                                                <td>2023-06-14</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/10JMrUvXaUe-yDxmk63V0gp2LrqJoW8pi/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=329&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>322</td>
                                                <td>2023-06-16 20:34:55</td>
                                                <td>TRREC_330</td>
                                                <td>Female reproductive system - Terminology</td>
                                                <td>2023-06-15</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1YAnGDIRme8G-2Y0Ntgfjywaq6EnmeiVP/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=330&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>323</td>
                                                <td>2023-06-16 20:53:45</td>
                                                <td>TRREC_331</td>
                                                <td>Female reproductive system - Pathology</td>
                                                <td>2023-06-16</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1IgfqKenQSDGHOSeQp0ygIzmJh4Pv16MO/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=331&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>324</td>
                                                <td>2023-06-17 11:35:02</td>
                                                <td>TRREC_332</td>
                                                <td>Business income under schedule -C</td>
                                                <td>2023-06-16</td>
                                                <td>Narender</td>
                                                <td><a href="https://drive.google.com/file/d/1ChLmtq8dRZMNhIDUAD_DfVGLAbQ2qj46/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=332&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>325</td>
                                                <td>2023-06-19 13:17:44</td>
                                                <td>TRREC_333</td>
                                                <td>Stacks and Queues in python and Mysql installation process</td>
                                                <td>2023-06-13</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1si7rCNgxHijepf3RB4c_vG_KjNMGs82J/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=333&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>326</td>
                                                <td>2023-06-19 13:19:46</td>
                                                <td>TRREC_334</td>
                                                <td>Creating Database in Mysql</td>
                                                <td>2023-06-15</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1FvWST1yaBp08zrZ7aMnrZQcu0L3xYqtk/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=334&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>327</td>
                                                <td>2023-06-19 13:21:33</td>
                                                <td>TRREC_335</td>
                                                <td>Creating Tables in Database</td>
                                                <td>2023-06-16</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/13Bp19lup_qlr5J8qEezcescL7HFpfTCe/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=335&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>328</td>
                                                <td>2023-06-19 13:26:32</td>
                                                <td>TRREC_336</td>
                                                <td>Types of Commands in Mysql</td>
                                                <td>2023-06-19</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/157Wrd7d79h5IILoBLck7qf6C6rGk08La/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=336&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>329</td>
                                                <td>2023-06-19 13:50:43</td>
                                                <td>TRREC_337</td>
                                                <td>medical coding class 2 and 3</td>
                                                <td>2023-06-19</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1DDKxgRdYB_qyHy0jcmFL1ffAWTYaqs2f/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=337&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>330</td>
                                                <td>2023-06-19 16:06:25</td>
                                                <td>TRREC_338</td>
                                                <td>map filter & reduce</td>
                                                <td>2023-06-19</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1OvLqgLuV02jktyIVV_CTU7hWsQiG4k2P/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=338&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>331</td>
                                                <td>2023-06-20 11:05:28</td>
                                                <td>TRREC_339</td>
                                                <td>EAT FRAMEWORK, SEO TOLS</td>
                                                <td>2023-06-14</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1yrwarqIlIKmE4xmaIXsx0G4bmwun5ox6/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=339&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>332</td>
                                                <td>2023-06-20 11:26:59</td>
                                                <td>TRREC_340</td>
                                                <td>SEO ISSUES</td>
                                                <td>2023-06-15</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1AGJBNN6_Y77mlZtswSAJeYoUfaTMnboz/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=340&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>333</td>
                                                <td>2023-06-20 11:45:42</td>
                                                <td>TRREC_341</td>
                                                <td>SEARCH CONSOLE</td>
                                                <td>2023-06-16</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1acwVZnhHX1NVNnxmKaWgASReM9PNMvnd/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=341&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>334</td>
                                                <td>2023-06-20 13:08:31</td>
                                                <td>TRREC_342</td>
                                                <td>SEARCH ENGINE MARKETING</td>
                                                <td>2023-06-19</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1gdqUEPOWoccedGOhP8ZpoqO987hw497b/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=342&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>335</td>
                                                <td>2023-06-20 13:58:03</td>
                                                <td>TRREC_343</td>
                                                <td>senseorgans and psychiatric disorders</td>
                                                <td>2023-06-19</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1ehKOCBxu4KLzwXnCqMSI8_h6_3firAAH/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=343&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>336</td>
                                                <td>2023-06-21 10:02:15</td>
                                                <td>TRREC_344</td>
                                                <td>revision</td>
                                                <td>2023-06-20</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/14VyIJC8MXWydEL-EuRcm5kDt7iTCSRad/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=344&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>337</td>
                                                <td>2023-06-21 11:00:29</td>
                                                <td>TRREC_345</td>
                                                <td>Css units ,bootstrap icons and width utilities</td>
                                                <td>2023-06-20</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/15xG-XzR7Qbb_1n1BzZpfiFqP6576syim/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=345&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>338</td>
                                                <td>2023-06-21 11:02:08</td>
                                                <td>TRREC_346</td>
                                                <td>AI TOOLS</td>
                                                <td>2023-06-20</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1LEfJm6ptEM2GIxxHMcjcTxmIXuqVlSrm/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=346&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>339</td>
                                                <td>2023-06-21 11:13:48</td>
                                                <td>TRREC_347</td>
                                                <td>dom manuplation</td>
                                                <td>2023-06-21</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1UHsrdu5jnawoUodhyhV2UlMm9DpuLHWD/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=347&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>340</td>
                                                <td>2023-06-21 13:58:11</td>
                                                <td>TRREC_348</td>
                                                <td>cpt coding and eye, ear, nose(otorhinolaryngologist) services for
                                                    cpt coding</td>
                                                <td>2023-06-21</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1nSFPbhgbNIwpYlxYp5GRxvyrlZBSJoHu/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=348&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>341</td>
                                                <td>2023-06-22 10:11:26</td>
                                                <td>TRREC_349</td>
                                                <td>bootstrap order and display utilities</td>
                                                <td>2023-06-21</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/10ZET-QnH62_A_111nLr3WnF4MOe41bLu/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=349&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>342</td>
                                                <td>2023-06-22 11:33:20</td>
                                                <td>TRREC_350</td>
                                                <td>Objects</td>
                                                <td>2023-06-22</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1Rpmhq4wRND6PsHrpUQxdIUnWKKXtaBbj/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=350&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>343</td>
                                                <td>2023-06-22 14:43:56</td>
                                                <td>TRREC_351</td>
                                                <td>W7 AND INTODUCTION OF CEO</td>
                                                <td>2023-06-21</td>
                                                <td>Narender</td>
                                                <td><a href="https://drive.google.com/file/d/1UBWB51QrOk7l4RIjGCL2Rcci4OcnbMNn/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=351&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>344</td>
                                                <td>2023-06-22 15:10:15</td>
                                                <td>TRREC_352</td>
                                                <td>Female reproductive system - Pathology n clinical procedures</td>
                                                <td>2023-06-21</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/15FcRHbnwtfN_h04ieoBXq3jTCzW9N5Ph/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=352&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>345</td>
                                                <td>2023-06-22 15:26:45</td>
                                                <td>TRREC_353</td>
                                                <td>anesthesia and radiology cpt coding guidelines</td>
                                                <td>2023-06-22</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1U7axD3ZY7z4G1eM0qUEgedmU3VTGiiul/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=353&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>346</td>
                                                <td>2023-06-23 10:04:34</td>
                                                <td>TRREC_354</td>
                                                <td>bootstrap order and display utilities</td>
                                                <td>2023-06-23</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1fWo_2_Wnt0NUgp4BL6rvwa1gTFbeyHvb/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=354&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>347</td>
                                                <td>2023-06-23 11:10:18</td>
                                                <td>TRREC_355</td>
                                                <td>GOOGLE ADS</td>
                                                <td>2023-06-22</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1OKVcdLdnwS5iCXpTN6XIFhPOktL346Bq/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=355&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>348</td>
                                                <td>2023-06-23 12:03:26</td>
                                                <td>TRREC_356</td>
                                                <td>Forms</td>
                                                <td>2023-06-22</td>
                                                <td>Narender</td>
                                                <td><a href="https://drive.google.com/file/d/1pDNFJl-z2XjwYJlqSyVHjRFDS4Xa69uP/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=356&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>349</td>
                                                <td>2023-06-23 12:33:04</td>
                                                <td>TRREC_357</td>
                                                <td>setTimeOut</td>
                                                <td>2023-06-23</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1oqwSp1ktOPxWMGORRchUhL5gWc8hBpmZ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=357&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>350</td>
                                                <td>2023-06-23 12:35:46</td>
                                                <td>TRREC_358</td>
                                                <td>anatomy test for certification</td>
                                                <td>2023-06-22</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/18vxVEy3wkONiCDHRlHxAzxBv8aq-Pxlv/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=358&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>351</td>
                                                <td>2023-06-23 16:46:41</td>
                                                <td>TRREC_359</td>
                                                <td>Grand and Revoke Commands in Mysql</td>
                                                <td>2023-06-20</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1edg3D7IIuoDsBYsbGH6aFh8XrRmC74MV/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=359&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>352</td>
                                                <td>2023-06-23 16:49:13</td>
                                                <td>TRREC_360</td>
                                                <td>Operators and Functions in Mysql</td>
                                                <td>2023-06-22</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/125nFwcuAO52OHqbXwh90XIFhl9FnsXJB/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=360&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>353</td>
                                                <td>2023-06-23 16:50:31</td>
                                                <td>TRREC_361</td>
                                                <td>operators and joins in mysql</td>
                                                <td>2023-06-23</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1eLMYPDnPuMs23UcZnCfuXcG6C3oYzf1_/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=361&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>354</td>
                                                <td>2023-06-23 17:04:27</td>
                                                <td>TRREC_362</td>
                                                <td>GridBagLayout and Swings in java</td>
                                                <td>2023-06-16</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1yRM_NvktfNJ6IxCtRzEdFwiun5Rxa8Vm/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=362&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>355</td>
                                                <td>2023-06-23 17:07:12</td>
                                                <td>TRREC_363</td>
                                                <td>Swing Components in java</td>
                                                <td>2023-06-21</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1qtAg4-kL6ITAzvkcGrpx1bkAWsDg0ts4/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=363&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>356</td>
                                                <td>2023-06-23 17:08:47</td>
                                                <td>TRREC_364</td>
                                                <td>Components in swings</td>
                                                <td>2023-06-22</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1YRZT9MnOroGezYFHA2Oz6G9olQ-HOZvs/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=364&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>357</td>
                                                <td>2023-06-23 17:12:59</td>
                                                <td>TRREC_365</td>
                                                <td>Layout Managers in Java</td>
                                                <td>2023-06-23</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1UZaHS3El_DWQvvhWFlu79WLi6ZOCLY_n/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=365&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>358</td>
                                                <td>2023-06-23 17:24:14</td>
                                                <td>TRREC_366</td>
                                                <td>Inventory Management</td>
                                                <td>2023-11-17</td>
                                                <td>Vasundhara</td>
                                                <td><a href=" https://drive.google.com/file/d/1_O-6jwbnrmG___mIKIHXCa8yGtN2Zlx0/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=366&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>359</td>
                                                <td>2023-06-23 17:50:55</td>
                                                <td>TRREC_367</td>
                                                <td>illustration on inventory management</td>
                                                <td>2023-06-20</td>
                                                <td>Vasundhara</td>
                                                <td><a href=" https://drive.google.com/file/d/1_O-6jwbnrmG___mIKIHXCa8yGtN2Zlx0/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=367&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>360</td>
                                                <td>2023-06-23 17:53:05</td>
                                                <td>TRREC_368</td>
                                                <td>Inventory Management</td>
                                                <td>2023-06-19</td>
                                                <td>Vasundhara</td>
                                                <td><a href=" https://drive.google.com/file/d/1_O-6jwbnrmG___mIKIHXCa8yGtN2Zlx0/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=368&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>361</td>
                                                <td>2023-06-23 17:54:41</td>
                                                <td>TRREC_369</td>
                                                <td>illustration on inventory management</td>
                                                <td>2023-06-19</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/1MYPGkvgrQ_tNs5ed2Yaz2i6LB_Cn0va-/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=369&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>362</td>
                                                <td>2023-06-23 18:11:11</td>
                                                <td>TRREC_370</td>
                                                <td>Trade discount and cash discount</td>
                                                <td>2023-06-20</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/16B7U5ywmDDF42y9DaTWysnicPr51AOyw/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=370&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>363</td>
                                                <td>2023-06-23 18:31:06</td>
                                                <td>TRREC_371</td>
                                                <td>MOBILE MARKETING</td>
                                                <td>2023-06-23</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1tyaYf0zFmYHJK6tYBq1hoPK0J9C-TuAf/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=371&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>364</td>
                                                <td>2023-06-24 11:10:10</td>
                                                <td>TRREC_372</td>
                                                <td>bootstrap display utilities in detail</td>
                                                <td>2023-06-24</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1Cua9JLymrpbjG8M9sXu_0PaDhFnVgmj4/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=372&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>365</td>
                                                <td>2023-06-26 10:39:40</td>
                                                <td>TRREC_373</td>
                                                <td>About Residance</td>
                                                <td>2023-06-23</td>
                                                <td>Narender</td>
                                                <td><a href="https://drive.google.com/file/d/1Ar7OiDJmyb0dD1Z-7wTZHiachRYQIV1G/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=373&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>366</td>
                                                <td>2023-06-26 11:54:09</td>
                                                <td>TRREC_374</td>
                                                <td>bill wise / instalments</td>
                                                <td>2023-06-22</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/1nkkRomC8TXeq5PAKmTniBdTtrFOMFEj8/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=374&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>367</td>
                                                <td>2023-06-26 11:51:55</td>
                                                <td>TRREC_375</td>
                                                <td>depreciation and adjustment entries</td>
                                                <td>2023-06-21</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/11tvelDqKhxtLd63ocK-hhnAbdp6e5YII/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=375&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>368</td>
                                                <td>2023-06-26 12:05:51</td>
                                                <td>TRREC_376</td>
                                                <td>bill wise / instalments</td>
                                                <td>2023-06-23</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/1J9jGfp-oNMLDqIYQBbOLp-lI-D0hDV0F/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=376&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>369</td>
                                                <td>2023-06-26 13:46:25</td>
                                                <td>TRREC_377</td>
                                                <td>icd coding guidelines</td>
                                                <td>2023-06-23</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1Dv7FMhVFrYiB3e-wUxQkrFl5cStsClto/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=377&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>370</td>
                                                <td>2023-06-27 10:32:11</td>
                                                <td>TRREC_378</td>
                                                <td>utilising font awesome icons and accesing sections in navbar </td>
                                                <td>2023-06-26</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/17d8SvVPvXeDSmlwzhY5YU-ps0Mf_HJuw/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=378&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>371</td>
                                                <td>2023-06-27 10:53:00</td>
                                                <td>TRREC_379</td>
                                                <td>IRA HSE</td>
                                                <td>2023-06-26</td>
                                                <td>Narender</td>
                                                <td><a href="https://drive.google.com/file/d/1rlcQjxYc6QkLxUZUkPNZyptF8I5LOk0F/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=379&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>372</td>
                                                <td>2023-06-27 13:45:59</td>
                                                <td>TRREC_380</td>
                                                <td>medical coding class 3 Respiratory systrm icd coding</td>
                                                <td>2023-06-26</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1d4UTlU4siax7aX0b_kjl0clFbor_n3qX/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=380&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>373</td>
                                                <td>2023-06-27 14:33:15</td>
                                                <td>TRREC_381</td>
                                                <td>operators and comments in mysql</td>
                                                <td>2023-06-26</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1b3m-nvkOKrByKMX18xGA-y5B33UiEvV4/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=381&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>374</td>
                                                <td>2023-06-27 14:34:59</td>
                                                <td>TRREC_382</td>
                                                <td>Mysql constraints and views</td>
                                                <td>2023-06-27</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/12LYjXZ7aXRu0uTh0UbU8OtVc0Jb-PyU3/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=382&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>375</td>
                                                <td>2023-06-27 18:00:24</td>
                                                <td>TRREC_383</td>
                                                <td>post dated cheque</td>
                                                <td>2023-06-27</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/1wvfjIsOovNU5ZSJ2TA_qtDDQ5zCIqIwA/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=383&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>376</td>
                                                <td>2023-06-27 18:23:47</td>
                                                <td>TRREC_384</td>
                                                <td>Social media marketing </td>
                                                <td>2023-06-27</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/11pfEVWDT1qMQLsytQZjRNS_zRdwNR3Bc/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=384&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>377</td>
                                                <td>2023-06-27 18:24:11</td>
                                                <td>TRREC_385</td>
                                                <td>css gradients and bootstrap modal</td>
                                                <td>2023-06-27</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1xVgFtj0VyR_cMIIf2fp5_6T85FWGJaeU/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=385&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>378</td>
                                                <td>2023-06-28 13:41:44</td>
                                                <td>TRREC_386</td>
                                                <td>cpt coding guidelines</td>
                                                <td>2023-06-27</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1tHXmOJA9mfUnNoWXgxUFTdPMzT5PsK7t/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=386&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>379</td>
                                                <td>2023-06-28 15:53:48</td>
                                                <td>TRREC_387</td>
                                                <td>PHP Introduction & Installation</td>
                                                <td>2023-06-27</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1kMiNIkauj02SVzZkrJe_LDl2lxRSvavH/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=387&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>380</td>
                                                <td>2023-06-28 15:55:46</td>
                                                <td>TRREC_388</td>
                                                <td>PHP Basics and XAMPP Installation</td>
                                                <td>2023-06-28</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1RfQ5bOTYJ6McWp-WGwAJbI0NlZqOXxEO/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=388&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>381</td>
                                                <td>2023-06-28 15:59:19</td>
                                                <td>TRREC_389</td>
                                                <td>PHP Basics and XAMPP Installation</td>
                                                <td>2023-06-28</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1kMiNIkauj02SVzZkrJe_LDl2lxRSvavH/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=389&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>382</td>
                                                <td>2023-06-28 16:24:37</td>
                                                <td>TRREC_390</td>
                                                <td>python variables in detail</td>
                                                <td>2023-06-28</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1FWL7vpLtHaRpsodTASuE5i91Ho-EVTZi/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=390&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>383</td>
                                                <td>2023-06-28 16:27:49</td>
                                                <td>TRREC_391</td>
                                                <td>python Introduction</td>
                                                <td>2023-06-27</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1XaqK8kR9zNROSm2bA_bmNBgxmgL-LQzG/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=391&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>384</td>
                                                <td>2023-06-30 10:46:16</td>
                                                <td>TRREC_392</td>
                                                <td>Schedule 2 of form 1040</td>
                                                <td>2023-06-28</td>
                                                <td>Narender</td>
                                                <td><a href="https://drive.google.com/file/d/1P6bbf6tEvqCfdUep4EnUgk34nC4EEuNJ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=392&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>385</td>
                                                <td>2023-06-30 13:55:16</td>
                                                <td>TRREC_393</td>
                                                <td>cpt coding for digestive sytem procedures</td>
                                                <td>2023-06-28</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1uXc5KNzbQlnGbW_exPPmvs7DIdIvc3QF/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=393&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>386</td>
                                                <td>2023-06-30 15:29:35</td>
                                                <td>TRREC_394</td>
                                                <td>overview of mysql topics</td>
                                                <td>2023-06-28</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/15vtujIpDeetY-3VcA_P2o9tWbPG9-v9j/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=394&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>387</td>
                                                <td>2023-06-30 15:31:17</td>
                                                <td>TRREC_395</td>
                                                <td>python and mysql connectivity</td>
                                                <td>2023-06-30</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1a2gkbBllVjVe_C_4RiDylbXjDShamLLt/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=395&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>388</td>
                                                <td>2023-06-30 15:41:35</td>
                                                <td>TRREC_396</td>
                                                <td>Card Layout and GridBag Layout in java</td>
                                                <td>2023-06-28</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/19evxG6TdeM_Txq-VVfw-Hdzvhal3V39h/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=396&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>389</td>
                                                <td>2023-06-30 15:42:47</td>
                                                <td>TRREC_397</td>
                                                <td>File Handlings in java</td>
                                                <td>2023-06-30</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/12tjPzLTvTcc1YP8yxRn7_1VCcVoBQ60V/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=397&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>390</td>
                                                <td>2023-07-05 15:06:11</td>
                                                <td>TRREC_398</td>
                                                <td>MySQL Database all Operation 1</td>
                                                <td>2023-06-30</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1FTk5HkZkdPNf7qa0IU8mCnRmz4TafLKy/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=398&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>391</td>
                                                <td>2023-07-05 15:12:22</td>
                                                <td>TRREC_399</td>
                                                <td>MySQL Database all Operation 2</td>
                                                <td>2023-06-30</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1zEkZf6cDE3G33z62VrJLK7efeF1rlXmp/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=399&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>392</td>
                                                <td>2023-06-30 18:41:08</td>
                                                <td>TRREC_400</td>
                                                <td>python strings in detail</td>
                                                <td>2023-06-30</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1Ndl-M8-slzBYOeZjMlwAzBAwPAxKJZ9X/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=400&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>393</td>
                                                <td>2023-06-30 19:07:15</td>
                                                <td>TRREC_401</td>
                                                <td>Male Reproductive system</td>
                                                <td>2023-06-22</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/18Chmtq99eWB04TEim4YgqZrUQBeDWqXb/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=401&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>394</td>
                                                <td>2023-06-30 19:08:19</td>
                                                <td>TRREC_402</td>
                                                <td>Nervous System</td>
                                                <td>2023-06-23</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1F9H3peqrIsLPt2s2fHGxSFNg6TRAVuEt/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=402&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>395</td>
                                                <td>2023-06-30 19:13:54</td>
                                                <td>TRREC_403</td>
                                                <td>Cardiovascular system</td>
                                                <td>2023-06-26</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1DZc37rUts7YRI51_Ix7_x9NmqINQLSCv/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=403&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>396</td>
                                                <td>2023-06-30 19:16:25</td>
                                                <td>TRREC_404</td>
                                                <td>Respiratory System</td>
                                                <td>2023-06-28</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/12op_PhhfVA67gTufl7WXclSpkezDcceN/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=404&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>397</td>
                                                <td>2023-06-30 19:18:03</td>
                                                <td>TRREC_405</td>
                                                <td>Blood System, Lymphatic and MSK</td>
                                                <td>2023-06-30</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1GjJ17IWGDBbkS9IgBu0dPcgBvRLGFteM/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=405&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>398</td>
                                                <td>2023-07-01 11:37:37</td>
                                                <td>TRREC_406</td>
                                                <td>FACEBOOK MARKETINTG</td>
                                                <td>2023-06-30</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1pMqioZ5eprlgjDXc3yG-PeZPKeocW105/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=406&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>399</td>
                                                <td>2023-07-02 14:15:39</td>
                                                <td>TRREC_407</td>
                                                <td>cpt coding for cvs, anesthesia, occular adenexa, radiology</td>
                                                <td>2023-06-30</td>
                                                <td>saitejaswi kolliboina</td>
                                                <td><a href="https://drive.google.com/file/d/1rd5mGNcDxxmLQybR6R3WQwQh8qdCP2XX/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=407&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>400</td>
                                                <td>2023-07-03 08:41:21</td>
                                                <td>TRREC_408</td>
                                                <td>Python OOPs-Inheritance</td>
                                                <td>2023-06-14</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1xzCaRGI1wE9JH_q0myHcYCwh-0NfIp6W/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=408&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>401</td>
                                                <td>2023-07-03 08:42:40</td>
                                                <td>TRREC_409</td>
                                                <td>Python OOPs-Inheritance</td>
                                                <td>2023-06-15</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1SEDwXLxmWzUQy_dSOHqImFK9ejxNbq_-/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=409&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>402</td>
                                                <td>2023-07-03 08:43:39</td>
                                                <td>TRREC_410</td>
                                                <td>Python OOPs-Inheritance</td>
                                                <td>2023-06-16</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1L9tgP38Xikl3WSx5YvKaHiv5U8HC_0Hi/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=410&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>403</td>
                                                <td>2023-07-03 08:44:53</td>
                                                <td>TRREC_411</td>
                                                <td>Python OOPs- Abstraction</td>
                                                <td>2023-06-19</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1KB08jvMZfcudxLiYbn1fzIQuJ-Q_VJYJ/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=411&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>404</td>
                                                <td>2023-07-03 08:49:15</td>
                                                <td>TRREC_412</td>
                                                <td>Python Exceptional handling</td>
                                                <td>2023-06-20</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1mhqiWFPRMNzQ8xhihQoE58AfYyU_DT0u/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=412&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>405</td>
                                                <td>2023-07-03 08:51:33</td>
                                                <td>TRREC_413</td>
                                                <td>Python Exceptional Handling</td>
                                                <td>2023-06-21</td>
                                                <td>Senthan M S V S</td>
                                                <td><a href="https://drive.google.com/file/d/1mhqiWFPRMNzQ8xhihQoE58AfYyU_DT0u/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=413&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>406</td>
                                                <td>2023-07-04 10:58:30</td>
                                                <td>TRREC_414</td>
                                                <td>INSTAGRAM MARKETING</td>
                                                <td>2023-07-03</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1BPzYD84YbHyEiJ9ptGqYswv9God6Orkj/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=414&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>407</td>
                                                <td>2023-07-04 11:00:57</td>
                                                <td>TRREC_415</td>
                                                <td>Revision of states, SSN and ITIN and FORM 1040 lines explanation
                                                </td>
                                                <td>2023-05-31</td>
                                                <td>Narender</td>
                                                <td><a href="https://drive.google.com/file/d/1_ECzg5QG_kbNXS8zFQecy-bMoXmKkTSX/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=415&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>408</td>
                                                <td>2023-07-04 11:02:32</td>
                                                <td>TRREC_416</td>
                                                <td>Explanation of Schedule 2- additional taxes part 2 and part 3</td>
                                                <td>2023-06-27</td>
                                                <td>Narender</td>
                                                <td><a href="https://drive.google.com/file/d/1mH29rDWNn8MP7jOUeEhCFcr61lY-8LW5/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=416&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>409</td>
                                                <td>2023-07-04 11:03:58</td>
                                                <td>TRREC_417</td>
                                                <td>Explanation about W2- Wage statement and impact on Form 1040</td>
                                                <td>2023-06-07</td>
                                                <td>Narender</td>
                                                <td><a href="https://drive.google.com/file/d/1C29CrBgGlETOxtEr9H0I0tru-V3KS4Em/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=417&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>410</td>
                                                <td>2023-07-04 12:22:59</td>
                                                <td>TRREC_418</td>
                                                <td>Schedule 3 Credits and payments</td>
                                                <td>2023-07-03</td>
                                                <td>Narender</td>
                                                <td><a href="https://drive.google.com/file/d/1d2uefjrNFbn5wGUIoIefLaLP_GKXMBmS/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=418&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>411</td>
                                                <td>2023-07-04 15:47:45</td>
                                                <td>TRREC_419</td>
                                                <td>Creating table and inserting data in mysql python connector</td>
                                                <td>2023-07-03</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1EvequzSqPhuSNZLONjvRva5rEawPtkNO/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=419&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>412</td>
                                                <td>2023-07-04 15:49:47</td>
                                                <td>TRREC_420</td>
                                                <td>Student Management Project(Student Login Form)</td>
                                                <td>2023-07-04</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1KxVuWIQ5DDvlRhVu91f11CxFRceeAM7i/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=420&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>413</td>
                                                <td>2023-07-04 15:49:54</td>
                                                <td>TRREC_421</td>
                                                <td>MySQL Database all Operation Practicals</td>
                                                <td>2023-07-04</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/12qV7CyMtK7CC0S7NL_ujYslt7dbnfA6s/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=421&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>414</td>
                                                <td>2023-07-04 16:13:28</td>
                                                <td>TRREC_422</td>
                                                <td>MSK, SKIN AND SENSE ORGANS</td>
                                                <td>2023-07-03</td>
                                                <td>Uma Kiran V</td>
                                                <td><a href="https://drive.google.com/file/d/1smAyr4gKWt2R5gf5eOQmFJ0qzgklCU0z/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=422&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>415</td>
                                                <td>2023-07-04 16:32:40</td>
                                                <td>TRREC_423</td>
                                                <td>python lists and tuples in detail</td>
                                                <td>2023-07-04</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1IHmD4QO32HW33cYTtMYluhDPhMdY-QQc/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=423&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>416</td>
                                                <td>2023-07-04 17:08:20</td>
                                                <td>TRREC_424</td>
                                                <td>BRS</td>
                                                <td>2023-06-28</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/1J3XvAefjIt1ZrzaWC9latUIzWbLqG-Ck/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=424&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>417</td>
                                                <td>2023-07-04 17:20:31</td>
                                                <td>TRREC_425</td>
                                                <td>GST</td>
                                                <td>2023-06-30</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/1oDU2ymURRCxwR5ZSopeOeA8ils8mJUUJ/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=425&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>418</td>
                                                <td>2023-07-04 18:07:34</td>
                                                <td>TRREC_426</td>
                                                <td>YOUTUBE MARKETING</td>
                                                <td>2023-07-04</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/11BgnH0XfxsGVUDB9u4-DlwcInAKOBle2/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=426&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>419</td>
                                                <td>2023-07-05 15:18:09</td>
                                                <td>TRREC_427</td>
                                                <td>MySQL Theory part 1</td>
                                                <td>2023-07-05</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1REqpK3gOR9-frOYiOwxoLqvkkAGtge_i/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=427&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>420</td>
                                                <td>2023-07-05 15:19:46</td>
                                                <td>TRREC_428</td>
                                                <td>MySQL Theory part 2</td>
                                                <td>2023-07-05</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1WSCBT4DQlKsh2wwRbyAdBMLYAJjbAF_j/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=428&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>421</td>
                                                <td>2023-07-05 15:23:02</td>
                                                <td>TRREC_429</td>
                                                <td>MySQL Theory part 2</td>
                                                <td>2023-07-05</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1WSCBT4DQlKsh2wwRbyAdBMLYAJjbAF_j/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=429&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>422</td>
                                                <td>2023-07-05 16:30:25</td>
                                                <td>TRREC_430</td>
                                                <td>Tax Analysis</td>
                                                <td>2023-07-03</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/1qCTKBWQVlHRIhDoa2Pzf0f3jm4Dvuan9/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=430&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>423</td>
                                                <td>2023-07-05 16:45:17</td>
                                                <td>TRREC_431</td>
                                                <td>TDS , TCS, other vouchers</td>
                                                <td>2023-07-04</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/1xVxHprJRUSIMTHpHD-KphcnJm8fQX-ma/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=431&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>424</td>
                                                <td>2023-07-05 17:06:23</td>
                                                <td>TRREC_432</td>
                                                <td>TDS, TCS , SUms</td>
                                                <td>2023-07-05</td>
                                                <td>Vasundhara</td>
                                                <td><a href="https://drive.google.com/file/d/1AuqumWqXDdyHNyPM8Q9Ls-WEEaWffPsW/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=432&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>425</td>
                                                <td>2023-07-05 17:17:22</td>
                                                <td>TRREC_433</td>
                                                <td>python data types - tuples and sets in detail</td>
                                                <td>2023-07-05</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1NN1WAS1gB0FLk9ST3i1-_GEahr6Ds628/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=433&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>426</td>
                                                <td>2023-07-10 15:58:00</td>
                                                <td>TRREC_434</td>
                                                <td>TUPLES AND SETS DATA TYPES</td>
                                                <td>2023-07-05</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1NN1WAS1gB0FLk9ST3i1-_GEahr6Ds628/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=434&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>427</td>
                                                <td>2023-07-10 16:00:02</td>
                                                <td>TRREC_435</td>
                                                <td>TUPLES IN DETAIL & LIST</td>
                                                <td>2023-07-04</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1IHmD4QO32HW33cYTtMYluhDPhMdY-QQc/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=435&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>428</td>
                                                <td>2023-07-10 16:03:57</td>
                                                <td>TRREC_436</td>
                                                <td>demo</td>
                                                <td>2023-06-30</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="none" target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=436&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>429</td>
                                                <td>2023-07-10 16:01:59</td>
                                                <td>TRREC_437</td>
                                                <td>PYTHON VARIABLES</td>
                                                <td>2023-06-28</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1XaqK8kR9zNROSm2bA_bmNBgxmgL-LQzG/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=437&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>430</td>
                                                <td>2023-07-10 16:02:50</td>
                                                <td>TRREC_438</td>
                                                <td>PYTHON INTRODUCTION</td>
                                                <td>2023-06-27</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1FWL7vpLtHaRpsodTASuE5i91Ho-EVTZi/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=438&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>431</td>
                                                <td>2023-07-10 16:04:58</td>
                                                <td>TRREC_439</td>
                                                <td>STRINGS IN DETAIL</td>
                                                <td>2023-06-27</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1FWL7vpLtHaRpsodTASuE5i91Ho-EVTZi/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=439&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>432</td>
                                                <td>2023-07-10 17:29:32</td>
                                                <td>TRREC_440</td>
                                                <td>python data types - dictionaries in detail</td>
                                                <td>2023-07-10</td>
                                                <td>Shaik Ashraf rahil</td>
                                                <td><a href="https://drive.google.com/file/d/1WF9vMnVlBn0AvSjdquw-RDjVo0JJDuB3/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=440&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>433</td>
                                                <td>2023-07-12 10:29:25</td>
                                                <td>TRREC_441</td>
                                                <td>Coding Introduction</td>
                                                <td>2023-07-11</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/1XrhH3hryur4qaZFdWEC_5xWHOGSBc8Kg/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=441&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>434</td>
                                                <td>2023-07-13 13:09:57</td>
                                                <td>TRREC_442</td>
                                                <td>Structure of ICD-10-CM coding</td>
                                                <td>2023-07-12</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/1QlpO3p19lJ-ZDkZcj7Mt3QwqrFG4zw_e/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=442&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>435</td>
                                                <td>2023-07-21 17:18:59</td>
                                                <td>TRREC_443</td>
                                                <td>How to coding ICD-10 CM </td>
                                                <td>2023-07-18</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/18jH9VDGi7F2gcomUoJut0qc5K4A8WHQS/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=443&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>436</td>
                                                <td>2023-07-21 17:20:36</td>
                                                <td>TRREC_444</td>
                                                <td>How to coding ICD- 10 PCS</td>
                                                <td>2023-07-19</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/1a2bHcQd4TohEehe6kSABNeIxucXZ9G2N/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=444&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>437</td>
                                                <td>2023-07-21 17:22:26</td>
                                                <td>TRREC_445</td>
                                                <td>ICD-10-PCS root operative descriptions </td>
                                                <td>2023-07-20</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/1mpeeoLIcBFxYLGoGjCriZPq2pvYL1mkK/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=445&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>438</td>
                                                <td>2023-07-21 17:23:42</td>
                                                <td>TRREC_446</td>
                                                <td>ICD-10-PCS CODING EXAMPLES WITH CODES </td>
                                                <td>2023-07-21</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/1bS0moyHC5iOyYCB3WivWE1BRt-AsLIjz/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=446&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>439</td>
                                                <td>2023-07-26 10:48:34</td>
                                                <td>TRREC_447</td>
                                                <td>CODES for infectious and parasitic Diseases </td>
                                                <td>2023-07-24</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/1cu-A9Q8CVnFx5Uj5M6ssmKrge1Je785X/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=447&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>440</td>
                                                <td>2023-07-26 10:50:40</td>
                                                <td>TRREC_448</td>
                                                <td>CODES for Mental Disorders</td>
                                                <td>2023-07-25</td>
                                                <td>Nandamuru Koteswara Rao</td>
                                                <td><a href="https://drive.google.com/file/d/1x3MPKKEKKkARAzTq3RBX4h3WEwVaPXuR/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=448&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>441</td>
                                                <td>2023-08-09 16:50:40</td>
                                                <td>TRREC_449</td>
                                                <td>html and css introduction</td>
                                                <td>2023-08-09</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://triarightsolutions.sharepoint.com/sites/Meeting3/Shared%20Documents/General/Recordings/General-20230809_145655-Meeting%20Recording.mp4?web=1"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=449&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>442</td>
                                                <td>2023-08-16 18:30:53</td>
                                                <td>TRREC_450</td>
                                                <td>Html and css basics part-1</td>
                                                <td>2023-08-10</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1B2vc3g5ich0Mze7GI0ziGNl-8x-hd15Q/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=450&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>443</td>
                                                <td>2023-08-18 17:19:17</td>
                                                <td>TRREC_451</td>
                                                <td>MEDICAL CODING DEMO</td>
                                                <td>2023-08-10</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1gSxsORB7hUicrjjHyYqqj2dAStOtcY8W/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=451&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>444</td>
                                                <td>2023-08-10 17:38:55</td>
                                                <td>TRREC_452</td>
                                                <td>Accounting entries</td>
                                                <td>2023-08-10</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://triarightsolutions.sharepoint.com/:v:/s/Triaright_Meet1/EUdOVksAoGhMuujcyjv6bQ4Bm5nHDG8SpiFNFKokkwq61g?e=efe23X"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=452&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>445</td>
                                                <td>2023-08-16 12:48:26</td>
                                                <td>TRREC_453</td>
                                                <td>Introduction to Machine learning</td>
                                                <td>2023-08-11</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1-WzlCkMIK4NlnAeJPQfEzQojnApdsHuR/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=453&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>446</td>
                                                <td>2023-08-16 18:42:12</td>
                                                <td>TRREC_454</td>
                                                <td>html and css basics</td>
                                                <td>2023-08-11</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1JkT_kXgm_HzhCPpgioLS3cSEY6UZu-GD/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=454&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>447</td>
                                                <td>2023-08-14 13:23:50</td>
                                                <td>TRREC_455</td>
                                                <td>Introduction of python</td>
                                                <td>2023-08-09</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1-tSdc4ktUZoCdTS7YOUgBdCmDIIM_GC4/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=455&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>448</td>
                                                <td>2023-08-16 10:51:37</td>
                                                <td>TRREC_456</td>
                                                <td>endocrine system</td>
                                                <td>2023-08-11</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1jbzxlsKquwG5jfc9QSApI6TFtDK5-hDM/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=456&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>449</td>
                                                <td>2023-08-18 16:27:43</td>
                                                <td>TRREC_457</td>
                                                <td>The hormonal system </td>
                                                <td>2023-08-14</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1GY-uY7Dd3_L8Dw3U-4lTk06c8WV-RQ8p/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=457&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>450</td>
                                                <td>2023-08-16 12:06:10</td>
                                                <td>TRREC_458</td>
                                                <td>Python Installation and Variables</td>
                                                <td>2023-08-10</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1yDtETq3T9KMVvO2UVsZnXOhYHVeJzMD5/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=458&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>451</td>
                                                <td>2023-08-16 12:08:08</td>
                                                <td>TRREC_459</td>
                                                <td>Data Types in python</td>
                                                <td>2023-08-11</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1x23-mcJ5ekCqN2qv7U8nClba_wuxyKTW/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=459&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>452</td>
                                                <td>2023-08-16 12:09:36</td>
                                                <td>TRREC_460</td>
                                                <td>Python Strings</td>
                                                <td>2023-08-14</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1oK7Gu-L8MYcjD0yVP1G56XU48nVTsMxe/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=460&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>453</td>
                                                <td>2023-08-16 12:46:24</td>
                                                <td>TRREC_461</td>
                                                <td>Introduction to Machine learning</td>
                                                <td>2023-08-10</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1eOYhniX-dIe6WYkegBZ88r9RtvTueZb2/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=461&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>454</td>
                                                <td>2023-08-16 12:50:27</td>
                                                <td>TRREC_462</td>
                                                <td>simple linear regression</td>
                                                <td>2023-08-14</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1iWFgMulnaErpOTV1i_xKr79OYetWYndZ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=462&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>455</td>
                                                <td>2023-08-16 12:58:06</td>
                                                <td>TRREC_463</td>
                                                <td>Introduction to tableau</td>
                                                <td>2023-08-10</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/10RNAD_MdmUACX6bmHh4hhhZ_n2-_UZnI/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=463&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>456</td>
                                                <td>2023-08-16 12:59:35</td>
                                                <td>TRREC_464</td>
                                                <td>Software installation</td>
                                                <td>2023-08-11</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1yo8e7CifNnJrh8Q4Ius2V3YcqkdrxK7i/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=464&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>457</td>
                                                <td>2023-08-16 13:00:52</td>
                                                <td>TRREC_465</td>
                                                <td>Aggregation and quick table calculations, Calculated fields</td>
                                                <td>2023-08-14</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1iJVc8-h9FxRA-GIeoY34EiACUGWoW9d4/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=465&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>458</td>
                                                <td>2023-08-18 16:26:10</td>
                                                <td>TRREC_466</td>
                                                <td>Medical Terminology of the Endocrine System</td>
                                                <td>2023-08-16</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1g8PgjartutCTssn7wDiAyGiYPcF5q4Ls/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=466&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>459</td>
                                                <td>2023-08-16 17:55:55</td>
                                                <td>TRREC_467</td>
                                                <td>Multiple_linear_regression</td>
                                                <td>2023-08-16</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/16-Y0O8QoWdi-RdgyK7mEGkz1nArhef-a/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=467&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>460</td>
                                                <td>2023-08-16 17:58:29</td>
                                                <td>TRREC_468</td>
                                                <td>Formatting_annotations_sorting_filtering</td>
                                                <td>2023-08-16</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1lF4RaBAM0lQYqn-zPIjGEO3wNNVZIoyZ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=468&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>461</td>
                                                <td>2023-08-16 18:44:46</td>
                                                <td>TRREC_469</td>
                                                <td>fundamentals of web technology</td>
                                                <td>2023-08-09</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1VKtuUMLlRKDhjbb05cfKQS1aJniCdizc/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=469&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>462</td>
                                                <td>2023-08-16 18:46:35</td>
                                                <td>TRREC_470</td>
                                                <td>css box model - intro </td>
                                                <td>2023-08-16</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1T4PwmnLZgQLruGfMBEN2YYhY2j2KcfPa/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=470&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>463</td>
                                                <td>2023-08-23 16:42:46</td>
                                                <td>TRREC_471</td>
                                                <td>Introduction to digital marketing </td>
                                                <td>2023-08-10</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1-DBoL3-BA_HU3Ah-3Wa6juPL7CK20RYf/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=471&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>464</td>
                                                <td>2023-08-23 16:43:12</td>
                                                <td>TRREC_472</td>
                                                <td>Understanding the importance of digital marketing in real life </td>
                                                <td>2023-08-11</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/10Qbl3sjh3FNqJQYwbp3WWrKeTWIoKzjd/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=472&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>465</td>
                                                <td>2023-08-23 16:44:05</td>
                                                <td>TRREC_473</td>
                                                <td>Types of digital marketing ||</td>
                                                <td>2023-08-16</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1FvzQoNEZaOk9nieGsYeVHVGtjxlKawAA/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=473&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>466</td>
                                                <td>2023-08-19 02:28:16</td>
                                                <td>TRREC_474</td>
                                                <td>tally intro</td>
                                                <td>2023-08-11</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1KMfZ_E2vYJ90ehzgrxs0Bgd0QUkGA-Cj/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=474&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>467</td>
                                                <td>2023-08-19 02:29:19</td>
                                                <td>TRREC_475</td>
                                                <td>revision</td>
                                                <td>2023-08-14</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1VYEt_Rrc7_A5GXqCqxg1TEsVH05YKpaH/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=475&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>468</td>
                                                <td>2023-08-19 02:31:04</td>
                                                <td>TRREC_476</td>
                                                <td>Inventory Management</td>
                                                <td>2023-08-16</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/11nWKP1BYQEIGyfnx8LqSqflwUxHBj5hh/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=476&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>469</td>
                                                <td>2023-08-17 12:29:33</td>
                                                <td>TRREC_477</td>
                                                <td>Operators in Python</td>
                                                <td>2023-08-16</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1cWR_8n0iwuqLZpik81PEIG9GfTqrV-KL/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=477&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>470</td>
                                                <td>2023-08-17 12:30:58</td>
                                                <td>TRREC_478</td>
                                                <td>Python list and list methods</td>
                                                <td>2023-08-17</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1k9d3HwNz88GNsU5HVcGidZxr84Q08mCh/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=478&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>471</td>
                                                <td>2023-08-23 16:44:43</td>
                                                <td>TRREC_479</td>
                                                <td>HOW TO DO DIGITAL MARKETING</td>
                                                <td>2023-08-17</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1l7bDdPOIk8ogvt2kwu8_uSLrWyaNYUaZ/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=479&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>472</td>
                                                <td>2023-08-23 16:45:46</td>
                                                <td>TRREC_480</td>
                                                <td>Types of digital marketing |</td>
                                                <td>2023-08-14</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/18HetiXtkOWyi0NGod0uVq6PKOJng0hpc/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=480&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>473</td>
                                                <td>2023-08-17 16:09:13</td>
                                                <td>TRREC_481</td>
                                                <td>css box model properties part 2</td>
                                                <td>2023-08-17</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1ea_t5TE3AdXZQ-BIWGL0d1lbqfiMLy0k/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=481&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>474</td>
                                                <td>2023-08-18 16:26:52</td>
                                                <td>TRREC_482</td>
                                                <td>Endocrine, nutritional and metabolic diseases ICD-10-CM Code range
                                                    E00-E89</td>
                                                <td>2023-08-17</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1CDMzGNwGeB_ZQpyLvhiTC7Xe3Pul1zU6/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=482&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>475</td>
                                                <td>2023-08-17 16:15:37</td>
                                                <td>TRREC_483</td>
                                                <td>Logistic_regression</td>
                                                <td>2023-08-17</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1kEZOOLlSddgzHpPu7POOjOXzdOr5_94Q/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=483&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>476</td>
                                                <td>2023-08-17 16:16:55</td>
                                                <td>TRREC_484</td>
                                                <td>Combined_fields, Groups, Sets, Aliases</td>
                                                <td>2023-08-17</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1TxR6EE5dawYiE3MaLMrWKWJW3VlhoVJV/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=484&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>477</td>
                                                <td>2023-08-19 02:32:02</td>
                                                <td>TRREC_485</td>
                                                <td>cash and trade discount</td>
                                                <td>2023-08-17</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1RTmilBaZmqTO4K8K7J0A5HxvcSEYfbLv/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=485&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>478</td>
                                                <td>2023-08-18 12:16:49</td>
                                                <td>TRREC_486</td>
                                                <td>logistic_reg_multiclass_underfitting_overfitting</td>
                                                <td>2023-08-18</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1f8KIdHAFYFetMBQd58RQKwUeTtwhshwQ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=486&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>479</td>
                                                <td>2023-08-18 12:22:11</td>
                                                <td>TRREC_487</td>
                                                <td>Python Tuple and Tuple methods</td>
                                                <td>2023-08-18</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1Q-24Z_x3Jyiw-eRUQPJ9n2d1teEHSRbn/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=487&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>480</td>
                                                <td>2023-08-18 16:24:06</td>
                                                <td>TRREC_488</td>
                                                <td>Metabolic disorders ICD</td>
                                                <td>2023-08-18</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1Z4v74ZgDH1LrLUrTXBhEJwV3U__lEmp7/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=488&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>481</td>
                                                <td>2023-08-18 16:25:57</td>
                                                <td>TRREC_489</td>
                                                <td>Hierarchies_grandTotals_subTotals</td>
                                                <td>2023-08-18</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1Q6mHAbPJuCdm_YuJRsnkC-BM_7s_gpKa/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=489&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>482</td>
                                                <td>2023-08-18 17:30:04</td>
                                                <td>TRREC_490</td>
                                                <td>css box model part 1</td>
                                                <td>2023-08-18</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1T4PwmnLZgQLruGfMBEN2YYhY2j2KcfPa/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=490&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>483</td>
                                                <td>2023-08-18 17:52:51</td>
                                                <td>TRREC_491</td>
                                                <td>css selectors and color picker</td>
                                                <td>2023-08-18</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1JpAv0_TXgRbBycf82zPhoJX91LFOu9Ek/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=491&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>484</td>
                                                <td>2023-08-20 22:53:13</td>
                                                <td>TRREC_492</td>
                                                <td>Daybook</td>
                                                <td>2023-08-18</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/19zKEwcysftqmFUzlaR1uJwfCrKTWHD3-/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=492&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>485</td>
                                                <td>2023-08-23 16:46:39</td>
                                                <td>TRREC_493</td>
                                                <td>ADVANTAGES & DISADVANTAGES OF DM</td>
                                                <td>2023-08-18</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1QWMrI4PjJFOG0aBRkk6KihvP1bQaIXHp/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=493&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>486</td>
                                                <td>2023-08-23 16:48:32</td>
                                                <td>TRREC_494</td>
                                                <td>EMAIL MARKETING</td>
                                                <td>2023-08-21</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1-lBRtPE3Z0Vjokci6fN65FtoXu8mKYxi/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=494&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>487</td>
                                                <td>2023-08-21 12:55:31</td>
                                                <td>TRREC_495</td>
                                                <td>Polynomial_regression</td>
                                                <td>2023-08-21</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1p3xkARuPvbHfw6vvsHnr-D35t5RG1eRd/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=495&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>488</td>
                                                <td>2023-08-21 13:10:44</td>
                                                <td>TRREC_496</td>
                                                <td>sets and sets methods</td>
                                                <td>2023-08-21</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1829CZim9MM-R-vfelN2QRPN1PjoyQxYq/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=496&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>489</td>
                                                <td>2023-08-23 16:47:43</td>
                                                <td>TRREC_497</td>
                                                <td>HOW TO WRITE EMAIL & EMAIL TERMS</td>
                                                <td>2023-08-22</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1uTYAypolGRjRnNcJTKbRjYN4YSqZ2CRR/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=497&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>490</td>
                                                <td>2023-08-22 13:04:01</td>
                                                <td>TRREC_498</td>
                                                <td>python dictionary and dictionary methods</td>
                                                <td>2023-08-22</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1CiiNoYk9I0R_r8Voj2zZklB6c5AYT59l/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=498&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>491</td>
                                                <td>2023-08-22 15:52:09</td>
                                                <td>TRREC_499</td>
                                                <td>html lists and css selectors</td>
                                                <td>2023-08-22</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/107-4ue7UxFitxInWWBHYdS3FqM7qEl8a/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=499&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>492</td>
                                                <td>2023-08-22 16:08:41</td>
                                                <td>TRREC_500</td>
                                                <td>Digestive System</td>
                                                <td>2023-08-22</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1NmA56MuzV4bDccFtpN_XgINO-PzRho3m/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=500&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>493</td>
                                                <td>2023-08-22 16:52:08</td>
                                                <td>TRREC_501</td>
                                                <td>Decision_Tree_Algorithm</td>
                                                <td>2023-08-22</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1rYqsQZG8aJGji0gIj0kVjMu95tYf6LaU/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=501&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>494</td>
                                                <td>2023-08-22 16:54:09</td>
                                                <td>TRREC_502</td>
                                                <td>Dynamic_webpage_stories</td>
                                                <td>2023-08-22</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1ibhITcKMhLmSC8VxpJNXgoIKbThxeA3e/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=502&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>495</td>
                                                <td>2023-08-23 08:44:03</td>
                                                <td>TRREC_503</td>
                                                <td>depreciation and adjustment entries</td>
                                                <td>2023-08-22</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1E11atNQc5fWfQW7kEhjI-Hxyykt3HEyG/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=503&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>496</td>
                                                <td>2023-08-23 16:18:11</td>
                                                <td>TRREC_504</td>
                                                <td>html forms 23-08-2023</td>
                                                <td>2023-08-23</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1DF16f453Z0nxWcp3Jm_HcSMUkLRAiHje/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=504&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>497</td>
                                                <td>2023-08-26 12:04:20</td>
                                                <td>TRREC_505</td>
                                                <td>fundamental of css - inheritance,specificity and cascade</td>
                                                <td>2023-08-24</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1eEOd_r6ecDzu1L8YHsEsUSCQV46Fe4uo/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=505&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>498</td>
                                                <td>2023-08-23 16:43:28</td>
                                                <td>TRREC_506</td>
                                                <td>Support Vector Machine</td>
                                                <td>2023-08-23</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1xJXOuATP6GhCLUp1ohTdDVTOcDdjdqEE/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=506&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>499</td>
                                                <td>2023-08-23 16:44:25</td>
                                                <td>TRREC_507</td>
                                                <td>Data_blending&Data_joining</td>
                                                <td>2023-08-23</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1xG3g_gM2Bn_XR9RXxntr0royoUF8mBBU/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=507&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>500</td>
                                                <td>2023-08-23 17:10:47</td>
                                                <td>TRREC_508</td>
                                                <td>Conditional Statements in pyrhon</td>
                                                <td>2023-08-23</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1gW02pvnLm8sK3litqvfNswoOhGOpHoEr/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=508&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>501</td>
                                                <td>2023-08-23 17:46:50</td>
                                                <td>TRREC_509</td>
                                                <td>medical coding pathology</td>
                                                <td>2023-08-23</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1t0vUl_wGXJJ5U25SW13ESKRjYIvgckUV/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=509&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>502</td>
                                                <td>2023-08-23 18:49:32</td>
                                                <td>TRREC_510</td>
                                                <td>Search Engine Optimisation </td>
                                                <td>2023-08-23</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/166AXkrOxHMbA67PXxzfvhiXAgaJ3kdOW/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=510&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>503</td>
                                                <td>2023-08-24 01:21:38</td>
                                                <td>TRREC_511</td>
                                                <td>GST</td>
                                                <td>2023-08-23</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/174VfMAcBc0X91A5LUR3csEGEOffYa2me/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=511&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>504</td>
                                                <td>2023-08-26 14:44:07</td>
                                                <td>TRREC_512</td>
                                                <td>SEO TECHNIQUES</td>
                                                <td>2023-08-24</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1maQNgMWrvXO6wXjVClB3eZo4K6mVG2SP/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=512&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>505</td>
                                                <td>2023-08-24 13:25:27</td>
                                                <td>TRREC_513</td>
                                                <td>SEO TECHNIQUES</td>
                                                <td>2023-08-24</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1maQNgMWrvXO6wXjVClB3eZo4K6mVG2SP/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=513&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>506</td>
                                                <td>2023-08-24 14:49:22</td>
                                                <td>TRREC_514</td>
                                                <td>Random Forest</td>
                                                <td>2023-08-24</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1J1JJckQk2h0K4w8BJtcq8ZPYXFecpYVL/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=514&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>507</td>
                                                <td>2023-08-24 16:12:12</td>
                                                <td>TRREC_515</td>
                                                <td>Diseases of the digestive system ICD-10-CM Code range K00-K95</td>
                                                <td>2023-08-24</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1WGKr1ncvLmF0bkY117WGo4SZVqxPIfKs/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=515&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>508</td>
                                                <td>2023-08-24 16:42:47</td>
                                                <td>TRREC_516</td>
                                                <td>Interview_questions</td>
                                                <td>2023-08-24</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1GLv_mpDq8lMKQ4Inb4DitFUfNU1jfgP1/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=516&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>509</td>
                                                <td>2023-08-25 03:12:19</td>
                                                <td>TRREC_517</td>
                                                <td>GST - ITC</td>
                                                <td>2023-08-24</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1Bi2y2DqaSGwQcsGun5jFA86y_22yYzgZ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=517&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>510</td>
                                                <td>2023-08-25 12:12:52</td>
                                                <td>TRREC_518</td>
                                                <td>Python Arrays and Functions</td>
                                                <td>2023-08-25</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1X2VHMW6cnWGFUTB4rMcYBM5p_fZ9jAlR/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=518&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>511</td>
                                                <td>2023-08-25 12:16:59</td>
                                                <td>TRREC_519</td>
                                                <td>Python Looping Statements</td>
                                                <td>2023-08-24</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1yfvUgKEuuRlRh46fWayhGo07LBXc8ldd/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=519&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>512</td>
                                                <td>2023-08-25 22:41:07</td>
                                                <td>TRREC_520</td>
                                                <td>GST</td>
                                                <td>2023-08-25</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1eXvhs1PWkCWK9ebyshWePDCzEZAMGsNI/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=520&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>513</td>
                                                <td>2023-08-26 12:01:28</td>
                                                <td>TRREC_521</td>
                                                <td>Random_Forest_classifier</td>
                                                <td>2023-08-25</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1XZxIUyhS1jf3irBkSxJBRFzy8R297Qbd/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=521&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>514</td>
                                                <td>2023-08-26 14:43:12</td>
                                                <td>TRREC_522</td>
                                                <td>SEO TYPES</td>
                                                <td>2023-08-25</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1gvxgeW5kciNWxQ_qeHkqJOHxdYgT3TVJ/view"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=522&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>515</td>
                                                <td>2023-08-28 12:20:28</td>
                                                <td>TRREC_523</td>
                                                <td>Types of arguments in functions</td>
                                                <td>2023-08-28</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1mX63UgB1B7RtOAPg_pnkXjd8XJKkd9id/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=523&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>516</td>
                                                <td>2023-08-28 12:20:49</td>
                                                <td>TRREC_524</td>
                                                <td>SEO AUDIT</td>
                                                <td>2023-08-28</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1idU6h97mwTsNRnhUwxKMZr6DaSuSdKO2/view"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=524&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>517</td>
                                                <td>2023-08-28 15:49:46</td>
                                                <td>TRREC_525</td>
                                                <td>html inline and block level elements - 28-08-2023</td>
                                                <td>2023-08-28</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1fJdiv7otzKAvqzrc9f2uR85r3GX6asPl/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=525&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>518</td>
                                                <td>2023-08-28 18:40:53</td>
                                                <td>TRREC_526</td>
                                                <td>java introduction</td>
                                                <td>2023-08-28</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1koJ9DkmhcbcdCoSr2VJr_hxOZP8izBtD/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=526&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>519</td>
                                                <td>2023-08-28 18:58:08</td>
                                                <td>TRREC_527</td>
                                                <td>k-fold</td>
                                                <td>2023-08-28</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1O6p_WSr4Jkt74VTixBAOHXE-v1DmTtAK/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=527&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>520</td>
                                                <td>2023-08-28 21:37:42</td>
                                                <td>TRREC_528</td>
                                                <td>Blended axis and interview questions</td>
                                                <td>2023-08-28</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1SIf1IhyaFK_mIMNjNH9Ff0FbzEQKApen/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=528&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>521</td>
                                                <td>2023-08-29 02:02:29</td>
                                                <td>TRREC_529</td>
                                                <td>GST</td>
                                                <td>2023-08-28</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1gOaUQWpVgK4WFiAOFalEDJJRNbj94iHV/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=529&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>522</td>
                                                <td>2023-08-29 10:30:11</td>
                                                <td>TRREC_530</td>
                                                <td>Other diseases of intestines ICD-10-CM Code range K55-K64</td>
                                                <td>2023-08-28</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1dwPJac4nDWSQZHhNJV1MkZ8qo_OJhdAY/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=530&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>523</td>
                                                <td>2023-08-29 11:27:18</td>
                                                <td>TRREC_531</td>
                                                <td>Blended axis and interview questions</td>
                                                <td>2023-08-28</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1SIf1IhyaFK_mIMNjNH9Ff0FbzEQKApen/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=531&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>524</td>
                                                <td>2023-08-29 16:50:32</td>
                                                <td>TRREC_532</td>
                                                <td>K means</td>
                                                <td>2023-08-29</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1fGxhvqL4_aShWGwRBDpfqaJ6hR2iPXMS/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=532&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>525</td>
                                                <td>2023-08-29 17:52:43</td>
                                                <td>TRREC_533</td>
                                                <td>digestive system revision </td>
                                                <td>2023-08-29</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1aDhDaHGK7u0SvCGI2pgWtj7FVA7znyyk/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=533&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>526</td>
                                                <td>2023-08-29 18:11:05</td>
                                                <td>TRREC_534</td>
                                                <td>Java Tokens, Variables, Datatypes and Operators</td>
                                                <td>2023-08-29</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1vndICHCHTfkMdjwBMLhZqbADFN2zFy-8/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=534&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>527</td>
                                                <td>2023-08-29 18:41:23</td>
                                                <td>TRREC_535</td>
                                                <td>Lod_expressions&interview_questions</td>
                                                <td>2023-08-29</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1zqvYfpRWxjpQaSXETM2rtDJI8MDUgNCM/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=535&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>528</td>
                                                <td>2023-08-30 10:35:45</td>
                                                <td>TRREC_536</td>
                                                <td>GST</td>
                                                <td>2023-08-29</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1Rw5JOy_AW7w_n2VYAVvh5ouZFa8V7zJ1/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=536&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>529</td>
                                                <td>2023-08-30 15:32:47</td>
                                                <td>TRREC_537</td>
                                                <td>KNN algorithm</td>
                                                <td>2023-08-30</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1aOBZ9F-_CESZ85DKX8yPYzbHOvS28qYT/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=537&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>530</td>
                                                <td>2023-08-30 17:06:37</td>
                                                <td>TRREC_538</td>
                                                <td>anatomy questions task paper</td>
                                                <td>2023-08-30</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1PX3zZ8jMzTLRR5wUy_Oibs9HiCSiOc8F/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=538&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>531</td>
                                                <td>2023-08-30 18:34:06</td>
                                                <td>TRREC_539</td>
                                                <td>Operators,Jre,Jvm,Jdk,basics of conditional statements</td>
                                                <td>2023-08-30</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/17_UE8OR53LyX1FJV61xrCetZ3kP_IYU_/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=539&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>532</td>
                                                <td>2023-08-30 18:35:39</td>
                                                <td>TRREC_540</td>
                                                <td>Building_a_dashboard</td>
                                                <td>2023-08-30</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1DFBQQ3l1dLnSgYD21ImxLU7BdbnW8P-0/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=540&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>533</td>
                                                <td>2023-09-01 16:48:07</td>
                                                <td>TRREC_541</td>
                                                <td>endocrine system icd 10 codes revision</td>
                                                <td>2023-09-01</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/18VpiJwt_D29hjvLuII7FuHO57ZQ7bAeG/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=541&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>534</td>
                                                <td>2023-09-01 17:19:36</td>
                                                <td>TRREC_542</td>
                                                <td>Revision_part_1</td>
                                                <td>2023-09-01</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1lXn7pUw-c9a7Uu_773WJ4sXqse2ekZwE/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=542&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>535</td>
                                                <td>2023-09-01 18:09:33</td>
                                                <td>TRREC_543</td>
                                                <td>confusion matrix and cross validation</td>
                                                <td>2023-09-01</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1cnYs2WXSu8jw7hvE1nWoWVRTAwJNwbY_/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=543&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>536</td>
                                                <td>2023-09-01 18:48:13</td>
                                                <td>TRREC_544</td>
                                                <td>if, if else, eleif, switch,nested if,nested if else</td>
                                                <td>2023-09-01</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1WIxdw9Assj3oNkjX1pjlED2dhWmsteTI/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=544&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>537</td>
                                                <td>2023-09-04 17:35:08</td>
                                                <td>TRREC_545</td>
                                                <td>Functions_in_Tableau</td>
                                                <td>2023-09-04</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1zS2pV6PhOYQaZhc2I1nW3ayPmzr3ACxF/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=545&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>538</td>
                                                <td>2023-09-04 18:03:59</td>
                                                <td>TRREC_546</td>
                                                <td>bootstrap basics </td>
                                                <td>2023-09-04</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1MTVIcdJVsbAigRmK5vBqiANJC-1wWq13/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=546&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>539</td>
                                                <td>2023-09-06 18:04:27</td>
                                                <td>TRREC_547</td>
                                                <td>class and object in python</td>
                                                <td>2023-09-04</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1_AYPBeui6kkD0dpDkVmvuD01Lbf2V0F2/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=547&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>540</td>
                                                <td>2023-09-04 18:44:40</td>
                                                <td>TRREC_548</td>
                                                <td>Hierarchial Clustering</td>
                                                <td>2023-09-04</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1FAAe2PvEaUkOBee8ct9dhTMMMdVfWmvr/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=548&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>541</td>
                                                <td>2023-09-05 12:26:29</td>
                                                <td>TRREC_549</td>
                                                <td>Class and Object in python</td>
                                                <td>2023-09-05</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1_AYPBeui6kkD0dpDkVmvuD01Lbf2V0F2/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=549&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>542</td>
                                                <td>2023-09-05 12:43:20</td>
                                                <td>TRREC_550</td>
                                                <td>Introduction to GST</td>
                                                <td>2023-09-01</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1nJDMQz7FA5w49rlfoiYsS65EuqbpiRXi/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=550&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>543</td>
                                                <td>2023-09-05 12:32:50</td>
                                                <td>TRREC_551</td>
                                                <td>Inheritance in python</td>
                                                <td>2023-09-05</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1XFdVA-GHe9Z1TW5aY8iSuGABz4P2v10N/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=551&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>544</td>
                                                <td>2023-09-05 12:40:41</td>
                                                <td>TRREC_552</td>
                                                <td>Introduction To GST</td>
                                                <td>2023-09-04</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1Iwf-Gqihc7YqUnkiWj1K_yLY7xKlmId7/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=552&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>545</td>
                                                <td>2023-09-05 12:45:24</td>
                                                <td>TRREC_553</td>
                                                <td>sepsis guidelines icd 10</td>
                                                <td>2023-09-04</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1Ejqjfpia0yn52m_KiNZVU8kTCmIjTrq6/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=553&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>546</td>
                                                <td>2023-09-05 16:20:42</td>
                                                <td>TRREC_554</td>
                                                <td>GST LAWS & RETURNS</td>
                                                <td>2023-09-05</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/120W9dzs7Au8rsH-3K6Amf07Om7lRy5Jv/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=554&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>547</td>
                                                <td>2023-09-05 17:11:27</td>
                                                <td>TRREC_555</td>
                                                <td>bootstrap grid system introduction </td>
                                                <td>2023-09-05</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/144gD-7OYTXLAls-WNekmLEO_lVsFFn1X/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=555&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>548</td>
                                                <td>2023-09-05 17:11:41</td>
                                                <td>TRREC_556</td>
                                                <td>Revision and Hierarchial CLustering Coding</td>
                                                <td>2023-09-05</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/16H7ybsz1jj_FhTmal4PYvxF_1UX8tUrP/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=556&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>549</td>
                                                <td>2023-09-05 18:24:27</td>
                                                <td>TRREC_557</td>
                                                <td>Looping and jump Statements in java</td>
                                                <td>2023-09-05</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1gK6WvZQBAgFhFn0CRovqFBcpQR9z8Nle/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=557&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>550</td>
                                                <td>2023-09-05 18:26:00</td>
                                                <td>TRREC_558</td>
                                                <td>Conditional statements in java</td>
                                                <td>2023-09-04</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1219-1mUv2c_kdL6zSBmFqTe9fkwaw2_N/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=558&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>551</td>
                                                <td>2023-09-06 11:05:59</td>
                                                <td>TRREC_559</td>
                                                <td>Types of operators in Tableau</td>
                                                <td>2023-09-05</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1mvP444vdJBtlLEZqpzfcJXe3BBj3T0z9/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=559&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>552</td>
                                                <td>2023-09-06 11:37:33</td>
                                                <td>TRREC_560</td>
                                                <td>Example: Sepsis Coding</td>
                                                <td>2023-09-05</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/19HHLn8qCfWCUd5FKw8clmJPhr318z4ew/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=560&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>553</td>
                                                <td>2023-09-06 14:17:36</td>
                                                <td>TRREC_561</td>
                                                <td>Anomaly Detection</td>
                                                <td>2023-09-06</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/18ZgscVo1hk6E7AktH6T2m_Zp-FuoxakK/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=561&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>554</td>
                                                <td>2023-09-06 16:51:54</td>
                                                <td>TRREC_562</td>
                                                <td>bootstrap margin utility and grid system</td>
                                                <td>2023-09-06</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1aRacldps7b3-GAMybXWmbKoLV-Gu2WRg/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=562&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>555</td>
                                                <td>2023-09-06 17:29:44</td>
                                                <td>TRREC_563</td>
                                                <td>Types of Charts & Graphs</td>
                                                <td>2023-09-06</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1t9KCAV3AuNTSyRmFlQ-86dawjue2Fd0G/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=563&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>556</td>
                                                <td>2023-09-06 17:55:08</td>
                                                <td>TRREC_564</td>
                                                <td>Typecasting and Arrays in java</td>
                                                <td>2023-09-06</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1ukmlAipQ5qoNZbfao_ExdHzy4XiftTuH/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=564&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>557</td>
                                                <td>2023-09-06 17:57:49</td>
                                                <td>TRREC_565</td>
                                                <td>Polymorphism in python</td>
                                                <td>2023-09-06</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1rJGU2AyELDdi4oOIuiz22Xc5clV9Skm9/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=565&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>558</td>
                                                <td>2023-09-06 18:29:05</td>
                                                <td>TRREC_566</td>
                                                <td>respiratory system</td>
                                                <td>2023-09-06</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1gLWvZDSAqX67DOSaaYoC05WhC4GayVxg/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=566&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>559</td>
                                                <td>2023-09-07 11:46:02</td>
                                                <td>TRREC_567</td>
                                                <td>GST on Tally </td>
                                                <td>2023-09-06</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1C1MM7A60Lwdbf9VdedhDXhRyCfzc4S9m/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=567&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>560</td>
                                                <td>2023-09-07 12:23:21</td>
                                                <td>TRREC_568</td>
                                                <td>Modules in python</td>
                                                <td>2023-09-07</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1ZBJb2cFGYdx0hQ9p8DomfdAb7SWbllOJ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=568&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>561</td>
                                                <td>2023-09-07 16:18:07</td>
                                                <td>TRREC_569</td>
                                                <td>bootstrap spacing utilities - padding</td>
                                                <td>2023-09-07</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1PUsLa1d64TMV4LGARJIH3hn-DuIQtWKD/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=569&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>562</td>
                                                <td>2023-09-07 17:55:53</td>
                                                <td>TRREC_570</td>
                                                <td>Strings and String methods in java</td>
                                                <td>2023-09-07</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1mcvTe9IkwFZsloHuQgZr-0YhnQXFvFkM/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=570&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>563</td>
                                                <td>2023-09-07 19:23:02</td>
                                                <td>TRREC_571</td>
                                                <td>Apriori Algorithm</td>
                                                <td>2023-09-07</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1HN0UtFHsv7oik3SAMLSImMTTQOqxAZoI/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=571&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>564</td>
                                                <td>2023-09-07 20:43:35</td>
                                                <td>TRREC_572</td>
                                                <td>GST in Tally 07-09-2023</td>
                                                <td>2023-09-07</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1y2WNxV7fKeGDs0YWFetds0Z-6j1sAbE7/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=572&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>565</td>
                                                <td>2023-09-08 12:03:54</td>
                                                <td>TRREC_573</td>
                                                <td>the respiratory system</td>
                                                <td>2023-09-07</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1N1uYlVSg4VoYGB2RnUML3eeA0NdLFOOI/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=573&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>566</td>
                                                <td>2023-09-08 12:50:20</td>
                                                <td>TRREC_574</td>
                                                <td>Revision Python Topics</td>
                                                <td>2023-09-08</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1xtBIRdX4fTUA8d0CFUTVzktDVWTtpMpV/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=574&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>567</td>
                                                <td>2023-09-08 12:51:59</td>
                                                <td>TRREC_575</td>
                                                <td>Revision Python Topics</td>
                                                <td>2023-09-08</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1xtBIRdX4fTUA8d0CFUTVzktDVWTtpMpV/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=575&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>568</td>
                                                <td>2023-09-08 15:58:47</td>
                                                <td>TRREC_576</td>
                                                <td>bootstrap navbar</td>
                                                <td>2023-09-08</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/12v3Ddr2pFE0cvCOBERabzNdhUzG7olkM/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=576&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>569</td>
                                                <td>2023-09-11 18:01:00</td>
                                                <td>TRREC_577</td>
                                                <td>OOPS in java</td>
                                                <td>2023-09-08</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1WgVocqmFKBoiez6ZfhCg9pa6J2_vgajo/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=577&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>570</td>
                                                <td>2023-09-08 20:13:02</td>
                                                <td>TRREC_578</td>
                                                <td>Voucher Entry on GST</td>
                                                <td>2023-09-08</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1ZK_BjWCApKFAu-MaMxC5IZFmPsdLb1kT/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=578&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>571</td>
                                                <td>2023-09-09 11:05:02</td>
                                                <td>TRREC_579</td>
                                                <td>PCA</td>
                                                <td>2023-09-09</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1UfnUpMYDC54fCdJCi6Ez8fRv9L9Wz0ZO/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=579&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>572</td>
                                                <td>2023-09-09 15:39:54</td>
                                                <td>TRREC_580</td>
                                                <td>Diseases of the respiratory system - ICD-10 Codes - AAPC</td>
                                                <td>2023-09-08</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/10XEHX518G6XQLn9ufHO76KXL-C2P0BFR/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=580&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>573</td>
                                                <td>2023-09-11 16:08:46</td>
                                                <td>TRREC_581</td>
                                                <td>anatomy questions task paper 2</td>
                                                <td>2023-09-11</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/10t0xoGk0ZNtvS-nFh1RoOEOL39_dlAM3/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=581&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>574</td>
                                                <td>2023-09-11 18:00:21</td>
                                                <td>TRREC_582</td>
                                                <td>Java Practice Programs</td>
                                                <td>2023-09-11</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/11qXNAQULBTG_IrBHBagjO7n1pHEQLiQM/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=582&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>575</td>
                                                <td>2023-09-11 18:07:26</td>
                                                <td>TRREC_583</td>
                                                <td>bootstrap utilities - carousel in detail </td>
                                                <td>2023-09-11</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1A7YZ5LXzgajDr6z8YoFUkaD2Ex-6MfBy/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=583&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>576</td>
                                                <td>2023-09-11 18:09:36</td>
                                                <td>TRREC_584</td>
                                                <td>Revision Python Topics(2)</td>
                                                <td>2023-09-11</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/15kwGko7fiRyoViX9Id17ShXuZNI4-X7r/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=584&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>577</td>
                                                <td>2023-09-11 19:15:35</td>
                                                <td>TRREC_585</td>
                                                <td>Theory on Naive Bayes Classifier</td>
                                                <td>2023-09-11</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1JqyzOZGfo_xGb9-Re-eGJamk5edZMa74/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=585&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>578</td>
                                                <td>2023-09-11 22:48:50</td>
                                                <td>TRREC_586</td>
                                                <td>Stock Journal</td>
                                                <td>2023-09-11</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1ms_9QvDtgBZty5akVaLnYcaCkMGw5aEh/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=586&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>579</td>
                                                <td>2023-09-12 12:34:48</td>
                                                <td>TRREC_587</td>
                                                <td>Revision Python Topics-3</td>
                                                <td>2023-09-12</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1DkxqDmk0RR5BhBac3mmwID3uImVJYL59/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=587&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>580</td>
                                                <td>2023-09-12 16:50:05</td>
                                                <td>TRREC_588</td>
                                                <td>hiv coding guidelines icd 10</td>
                                                <td>2023-09-12</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1VU1DK4KbQ2lNEdCOTP_nmRq23JR1hIc6/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=588&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>581</td>
                                                <td>2023-09-12 18:10:29</td>
                                                <td>TRREC_589</td>
                                                <td>Java programs(2)</td>
                                                <td>2023-09-12</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1DqjMCDIDuFUqG8g0dpMbuGVXRnslBH-w/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=589&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>582</td>
                                                <td>2023-09-12 19:13:49</td>
                                                <td>TRREC_590</td>
                                                <td>Naive and Gaussian Distribution implementation</td>
                                                <td>2023-09-12</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1akK03wCNwK2oNJWZjnKvcP0hiqzM1xAS/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=590&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>583</td>
                                                <td>2023-09-12 20:50:52</td>
                                                <td>TRREC_591</td>
                                                <td>Cost Center</td>
                                                <td>2023-09-12</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1MHuuGkHJz2NLRceP9bVNhVk9oO_srlKn/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=591&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>584</td>
                                                <td>2023-09-13 13:13:47</td>
                                                <td>TRREC_592</td>
                                                <td>Revision Python Topics-4</td>
                                                <td>2023-09-13</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1bQgmQomb0H7KjoETWmzQ_MMveXCC1X5e/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=592&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>585</td>
                                                <td>2023-09-13 16:04:29</td>
                                                <td>TRREC_593</td>
                                                <td>bootstrap - navbar and carousel live implementation</td>
                                                <td>2023-09-13</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1c88UCpngb0dZRTP0Cp6uBRuaAn-SRqd5/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=593&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>586</td>
                                                <td>2023-09-13 17:47:45</td>
                                                <td>TRREC_594</td>
                                                <td>Skeletal system</td>
                                                <td>2023-09-13</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/18HZ0y1DiJqFPmUcDEn_9TrHABatqcj0I/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=594&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>587</td>
                                                <td>2023-09-13 18:12:55</td>
                                                <td>TRREC_595</td>
                                                <td>Constructors in java</td>
                                                <td>2023-09-13</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1tDunuT9ye4kes0QpngHdeyGECM1QQtaO/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=595&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>588</td>
                                                <td>2023-09-13 21:50:40</td>
                                                <td>TRREC_596</td>
                                                <td>Bank Reconciliation Statement</td>
                                                <td>2023-09-13</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1mQgiEWllr66wMmopYV-WKdQ4Swqi9uwh/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=596&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>589</td>
                                                <td>2023-09-14 12:33:16</td>
                                                <td>TRREC_597</td>
                                                <td>Introduction to AI</td>
                                                <td>2023-09-14</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1-L89JLxXkuOnbfgZRR1aO0PyJ57kje2g/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=597&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>590</td>
                                                <td>2023-09-14 16:25:04</td>
                                                <td>TRREC_598</td>
                                                <td>bootstrap display utilities order and embed</td>
                                                <td>2023-09-14</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/18Hjro0fZC5jl553nrbs9WCP9qZDj6fZL/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=598&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>591</td>
                                                <td>2023-09-14 18:01:19</td>
                                                <td>TRREC_599</td>
                                                <td>constructor and types of constructors in python</td>
                                                <td>2023-09-14</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1e8V-fJJChuD8yJSu4_B3Z4Bas8JzTcKm/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=599&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>592</td>
                                                <td>2023-09-14 18:04:41</td>
                                                <td>TRREC_600</td>
                                                <td>static keyword and variable scope in java</td>
                                                <td>2023-09-14</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1MHiBGzbVTkEeJ99k2RHCFUln7OMn7AW9/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=600&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>593</td>
                                                <td>2023-09-14 19:02:19</td>
                                                <td>TRREC_601</td>
                                                <td>DropOut_Neural_network</td>
                                                <td>2023-09-14</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1jT9i8ffgC2OmgavNpmRc1ILJFpyTCvqr/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=601&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>594</td>
                                                <td>2023-09-14 22:10:15</td>
                                                <td>TRREC_602</td>
                                                <td>Budget Control</td>
                                                <td>2023-09-14</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1nGhQ_hFbmPwKUoV8VxSIesuFc6acT9xw/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=602&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>595</td>
                                                <td>2023-09-15 11:54:30</td>
                                                <td>TRREC_603</td>
                                                <td>Methods in python</td>
                                                <td>2023-09-15</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1bfGGq5eD-BHqe9ZIcLp3d9f5_OPggwy3/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=603&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>596</td>
                                                <td>2023-09-15 16:56:32</td>
                                                <td>TRREC_604</td>
                                                <td>bootstrap display utilities - for different breakpoints</td>
                                                <td>2023-09-15</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1xCE7bGfqLoek9xbuatPxr8zcbaeV1KEV/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=604&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>597</td>
                                                <td>2023-09-15 18:07:03</td>
                                                <td>TRREC_605</td>
                                                <td>Inheritance and Types of inheritances in java</td>
                                                <td>2023-09-15</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/15CKEALfwISXd68wEYEl7RWmzy0uNxJU2/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=605&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>598</td>
                                                <td>2023-09-15 21:35:26</td>
                                                <td>TRREC_606</td>
                                                <td>Multi Currencies</td>
                                                <td>2023-09-15</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1kyqRH5d8CpZBGn9C_x6-cBDyxIyjtmDO/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=606&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>599</td>
                                                <td>2023-09-16 10:57:45</td>
                                                <td>TRREC_607</td>
                                                <td>Convolution Neural Network</td>
                                                <td>2023-09-16</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1zLrVCYO9G_ZIY4e6w-kUB06xD2GX1wV5/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=607&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>600</td>
                                                <td>2023-09-16 11:39:15</td>
                                                <td>TRREC_608</td>
                                                <td>Skeletal system 1: the anatomy and physiology </td>
                                                <td>2023-09-15</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1Z4v74ZgDH1LrLUrTXBhEJwV3U__lEmp7/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=608&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>601</td>
                                                <td>2023-09-16 11:44:09</td>
                                                <td>TRREC_609</td>
                                                <td>linkedin marketing</td>
                                                <td>2023-09-15</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1g6xhc946E-yFN4kUYSCWfioWETZwGbet/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=609&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>602</td>
                                                <td>2023-09-16 11:44:57</td>
                                                <td>TRREC_610</td>
                                                <td>YOUTUBE MARKETING</td>
                                                <td>2023-09-14</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1_kmxGlJ5mg7KbMhZSRC_XgtXO7z3YHTJ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=610&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>603</td>
                                                <td>2023-09-16 11:45:48</td>
                                                <td>TRREC_611</td>
                                                <td>INSTAGRAM MARKETING</td>
                                                <td>2023-09-13</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1h9I9A6qMhpvqTU_nYf9sBUybYowXHwO6/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=611&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>604</td>
                                                <td>2023-09-16 11:47:09</td>
                                                <td>TRREC_612</td>
                                                <td>FACEBOOK MARKETINTG</td>
                                                <td>2023-09-12</td>
                                                <td>Saieshwari Gogu</td>
                                                <td><a href="https://drive.google.com/file/d/1OTOjeIBGiULiRlOsfBpYTH4Nz3p8-Q_Y/view"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=612&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>605</td>
                                                <td>2023-09-20 14:30:42</td>
                                                <td>TRREC_613</td>
                                                <td>Error and Exception in python</td>
                                                <td>2023-09-20</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1dymaINmYR6uAzHLC0nJKxvkgdo__aWFr/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=613&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>606</td>
                                                <td>2023-09-20 16:13:43</td>
                                                <td>TRREC_614</td>
                                                <td>Muscular System</td>
                                                <td>2023-09-20</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1yEtRUjC2xireKnf8amHnwpAVCP9MoMpS/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=614&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>607</td>
                                                <td>2023-09-20 19:15:09</td>
                                                <td>TRREC_615</td>
                                                <td>CNN with another dataset</td>
                                                <td>2023-09-20</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1QBpyWpBAcl8fkxIT4SdoYir9rMe9mhYu/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=615&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>608</td>
                                                <td>2023-09-20 20:20:49</td>
                                                <td>TRREC_616</td>
                                                <td>Multiple Reporting</td>
                                                <td>2023-09-20</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1SQbdoU8dWN9oI7DjMO1KM6361no58846/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=616&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>609</td>
                                                <td>2023-09-21 11:51:49</td>
                                                <td>TRREC_617</td>
                                                <td>Built in and user defined exceptions in python</td>
                                                <td>2023-09-21</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1zAOdH_xCK18two-1_3SmSLypiFhf6eGV/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=617&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>610</td>
                                                <td>2023-09-21 16:41:46</td>
                                                <td>TRREC_618</td>
                                                <td>respiratory system Revision</td>
                                                <td>2023-09-21</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1SLqsvvm_XE0DnMgr3_N1rVRWundaDfhS/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=618&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>611</td>
                                                <td>2023-09-21 17:39:48</td>
                                                <td>TRREC_619</td>
                                                <td>super,final keyword and abstract method ,class in java</td>
                                                <td>2023-09-21</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1V75bAd7pzJz1tDgFbi35A4DpfUMTzs5T/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=619&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>612</td>
                                                <td>2023-09-21 21:43:51</td>
                                                <td>TRREC_620</td>
                                                <td>Reporting</td>
                                                <td>2023-09-21</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1-r9lO9G1frRzu6OlF6NA69OLsdzoKp9W/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=620&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>613</td>
                                                <td>2023-09-25 12:15:21</td>
                                                <td>TRREC_621</td>
                                                <td>Python Practice Programs</td>
                                                <td>2023-09-25</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1_Bmk3st6udSL0pII7xBWTGNFze3hcwi8/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=621&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>614</td>
                                                <td>2023-09-25 13:07:01</td>
                                                <td>TRREC_622</td>
                                                <td>tensor flow and L1 and L2 regression</td>
                                                <td>2023-09-25</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1H7HGNHx5iGiFl_uoQRnQccQEcxYreaO6/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=622&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>615</td>
                                                <td>2023-09-25 15:54:19</td>
                                                <td>TRREC_623</td>
                                                <td>Nervous System</td>
                                                <td>2023-09-25</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1h8CWzbG6nUa7ccVKbCTSf9TxQ3fteb0G/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=623&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>616</td>
                                                <td>2023-09-25 19:07:51</td>
                                                <td>TRREC_624</td>
                                                <td>l1 and l2 regression</td>
                                                <td>2023-09-25</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1rpo-ZUX6x0GCtmGGgoFnC0fGhEepSSd0/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=624&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>617</td>
                                                <td>2023-09-26 11:55:53</td>
                                                <td>TRREC_625</td>
                                                <td>python programs on math module</td>
                                                <td>2023-09-26</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1yZw50Qx0nVeCjhbSsq868Rzhxkfru-EY/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=625&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>618</td>
                                                <td>2023-09-26 17:52:09</td>
                                                <td>TRREC_626</td>
                                                <td>variable scope and interfaces in java</td>
                                                <td>2023-09-26</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/14OSSZHm7X20l-BpxduOJNZb9o8IRgAji/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=626&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>619</td>
                                                <td>2023-09-26 19:18:49</td>
                                                <td>TRREC_627</td>
                                                <td>task3 and Revision</td>
                                                <td>2023-09-26</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1Q21RtDPmtvoJ_th6rHTYrkpP2neeT19u/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=627&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>620</td>
                                                <td>2023-09-26 21:46:01</td>
                                                <td>TRREC_628</td>
                                                <td>Basics</td>
                                                <td>2023-09-26</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1VpcH8prjQcj20YW0vYgy8LLT4XJi2RZq/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=628&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>621</td>
                                                <td>2023-09-27 19:06:10</td>
                                                <td>TRREC_629</td>
                                                <td>Test information</td>
                                                <td>2023-09-27</td>
                                                <td>Madanu Augustin</td>
                                                <td><a href="https://drive.google.com/file/d/1WRUGg9LOamGb1KgRRAcRbT9NTJk9rzg-/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=629&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>622</td>
                                                <td>2023-09-27 21:28:48</td>
                                                <td>TRREC_630</td>
                                                <td>Company Creation</td>
                                                <td>2023-09-27</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1P7zs96eQ4mb_uMeoTkxWner1wXauQ6oW/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=630&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>623</td>
                                                <td>2023-09-29 16:09:36</td>
                                                <td>TRREC_631</td>
                                                <td>medical coding demo</td>
                                                <td>2023-09-29</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1vMJmYNtEojSW1SzB6ur-dzvkcSMnaYbE/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=631&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>624</td>
                                                <td>2023-10-03 16:42:17</td>
                                                <td>TRREC_632</td>
                                                <td>Introduction to HRM</td>
                                                <td>2023-09-29</td>
                                                <td>Madhu Varshini</td>
                                                <td><a href="https://drive.google.com/file/d/16AmSItUMBc-mQSfpX85tZNHZs9RPJA70/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=632&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>625</td>
                                                <td>2023-10-28 16:44:38</td>
                                                <td>TRREC_634</td>
                                                <td>Introduction of java</td>
                                                <td>2023-09-29</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1zFfhVanfz0PlKrtMkupgia8ZGv5zml_1/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=634&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>626</td>
                                                <td>2023-10-28 12:49:46</td>
                                                <td>TRREC_635</td>
                                                <td>Introduction of java</td>
                                                <td>2023-09-29</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1a_rJXbucbU8hFlqnFoKyHpTWPlRwiZJX/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=635&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>627</td>
                                                <td>2023-10-28 16:44:23</td>
                                                <td>TRREC_636</td>
                                                <td>html history and introduction</td>
                                                <td>2023-09-29</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1O-P0KDiCpcFHsDKDvvK_TLQ24WtqQLrx/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=636&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>628</td>
                                                <td>2023-09-30 21:04:54</td>
                                                <td>TRREC_637</td>
                                                <td>Digital Marketing DEMO Class</td>
                                                <td>2023-09-29</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/1jvoYG6yy2SCRnLmFVYJfnSC4PUplAVv4/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=637&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>629</td>
                                                <td>2023-10-28 16:45:28</td>
                                                <td>TRREC_638</td>
                                                <td>css introduction and implementation</td>
                                                <td>2023-10-03</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1AzjZsFZco0Tyq0tMizQljhA6i2vtC_-G/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=638&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>630</td>
                                                <td>2023-10-03 16:42:44</td>
                                                <td>TRREC_639</td>
                                                <td>Importance of HRM</td>
                                                <td>2023-10-03</td>
                                                <td>Madhu Varshini</td>
                                                <td><a href="https://drive.google.com/file/d/1s33SqUd0Oi4kSWMDlZoDzXDqWywdo_8L/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=639&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>631</td>
                                                <td>2023-10-03 16:57:54</td>
                                                <td>TRREC_640</td>
                                                <td>Introduction to digital marketing </td>
                                                <td>2023-09-29</td>
                                                <td>Srinivas Yerrravelli </td>
                                                <td><a href="https://drive.google.com/file/d/169Wy5zj5xMpzNKRf2t9eKduYzTeZ3w1e/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=640&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>632</td>
                                                <td>2023-10-03 16:58:25</td>
                                                <td>TRREC_641</td>
                                                <td>endocrine system </td>
                                                <td>2023-10-03</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1JwevYyca5VYOQuLcfcbTL5MlO7wTR0J7/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=641&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>633</td>
                                                <td>2023-10-03 16:58:42</td>
                                                <td>TRREC_642</td>
                                                <td>Advantages of digital marketing </td>
                                                <td>2023-10-03</td>
                                                <td>Srinivas Yerrravelli </td>
                                                <td><a href="https://drive.google.com/file/d/169Wy5zj5xMpzNKRf2t9eKduYzTeZ3w1e/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=642&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>634</td>
                                                <td>2023-10-28 12:48:16</td>
                                                <td>TRREC_643</td>
                                                <td>html history and introduction</td>
                                                <td>2023-10-03</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1RLZkyo6Xh_pqJPGvV2MH5QCoJ2N3BM8D/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=643&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>635</td>
                                                <td>2023-10-28 16:45:33</td>
                                                <td>TRREC_644</td>
                                                <td>Structure of java program and java tokens</td>
                                                <td>2023-10-03</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1GzSlbLBuyAgX5dJvTbVZHI_9BfN4LEUv/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=644&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>636</td>
                                                <td>2023-10-03 21:25:48</td>
                                                <td>TRREC_645</td>
                                                <td>Company Creation</td>
                                                <td>2023-10-03</td>
                                                <td>Mekanaboyina Venkata murali Krishna</td>
                                                <td><a href="https://drive.google.com/file/d/1kYme3w7vkhY4f8XOsbK7Swew_NDZHwZi/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=645&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>637</td>
                                                <td>2023-10-04 09:57:16</td>
                                                <td>TRREC_646</td>
                                                <td>SEO introduction </td>
                                                <td>2023-10-03</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/12bU3eAzizQcU5w-yBFT9vlmgW_BAoKh-/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=646&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>638</td>
                                                <td>2023-10-04 11:35:52</td>
                                                <td>TRREC_647</td>
                                                <td>endocrine system functions</td>
                                                <td>2023-10-03</td>
                                                <td>vijay kumar sampathi</td>
                                                <td><a href="https://drive.google.com/file/d/1shThHXe1tcfP5gO_5tZr_IDPHO4VOTu_/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=647&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>639</td>
                                                <td>2023-10-28 12:50:39</td>
                                                <td>TRREC_648</td>
                                                <td>Java Tokens, Variables and Datatypes</td>
                                                <td>2023-10-04</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1s8UBl65VeAejTLeAvO7mrpH7vya64-H0/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=648&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>640</td>
                                                <td>2023-10-28 16:46:22</td>
                                                <td>TRREC_649</td>
                                                <td>html basics - headings, paragraphs, br,hr,pre elements</td>
                                                <td>2023-10-04</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1t0PYZ2nf7WPH6VjmR-g3yWVHMrNfFVuQ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=649&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>641</td>
                                                <td>2023-10-04 15:45:48</td>
                                                <td>TRREC_650</td>
                                                <td>endocrine system FUNCTION</td>
                                                <td>2023-10-04</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1_DRjtzkt1uzmBlIvJteuzOfoShM8D4q1/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=650&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>642</td>
                                                <td>2023-10-28 16:46:29</td>
                                                <td>TRREC_651</td>
                                                <td>Variables, Data types and Operators in java</td>
                                                <td>2023-10-04</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1k5ixwg4c4EfyAOaJkMu0bzP0GN6Fq-Qx/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=651&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>643</td>
                                                <td>2023-10-04 16:39:10</td>
                                                <td>TRREC_652</td>
                                                <td>Disadvantages of DM</td>
                                                <td>2023-10-04</td>
                                                <td>Srinivas Yerrravelli </td>
                                                <td><a href="https://drive.google.com/file/d/1fkQldlji7YM3Y90vUWOc3wsqMW3hoebK/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=652&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>644</td>
                                                <td>2023-10-04 17:04:49</td>
                                                <td>TRREC_653</td>
                                                <td>Human Resource Planning</td>
                                                <td>2023-10-04</td>
                                                <td>Madhu Varshini</td>
                                                <td><a href="https://drive.google.com/file/d/18DykjcO_zlt1D0LzEHfcM6G0in6sTf5D/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=653&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>645</td>
                                                <td>2023-10-04 20:35:37</td>
                                                <td>TRREC_654</td>
                                                <td>Blogger Introduction | SEO | Digital marketing class 3</td>
                                                <td>2023-10-04</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/1El6Z2TGiuoTMqXHqhEqFr4menCxANaE3/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=654&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>646</td>
                                                <td>2023-10-05 16:47:48</td>
                                                <td>TRREC_655</td>
                                                <td>The hormonal system </td>
                                                <td>2023-10-04</td>
                                                <td>vijay kumar sampathi</td>
                                                <td><a href="https://drive.google.com/file/d/1PPwRBhGyef5cSct0FkYF7jCnKkiSQ_BZ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=655&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>647</td>
                                                <td>2023-10-07 12:46:33</td>
                                                <td>TRREC_656</td>
                                                <td>digital marketing clss 4</td>
                                                <td>2023-10-06</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/13NJUq55-MNPcBbMOzqWRl-2cy1yebBfD/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=656&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>648</td>
                                                <td>2023-10-28 16:46:58</td>
                                                <td>TRREC_657</td>
                                                <td>html essentials - styles, font families, background color etc</td>
                                                <td>2023-10-09</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1Q5PKLCvf8ijArgoyg7u3r28XQlt0NBrP/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=657&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>649</td>
                                                <td>2023-10-28 12:50:02</td>
                                                <td>TRREC_658</td>
                                                <td>css introduction and implementation</td>
                                                <td>2023-10-09</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1LuGrtOOYeZFNzWbF3ghYTKRjNbBDS9Vx/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=658&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>650</td>
                                                <td>2023-10-09 12:29:20</td>
                                                <td>TRREC_659</td>
                                                <td>HomeCodesICD-10ICD-10-CM CodesEndocrine, nutritional and metabolic
                                                    diseases Endocrine, nutritional a</td>
                                                <td>2023-10-05</td>
                                                <td>vijay kumar sampathi</td>
                                                <td><a href="https://drive.google.com/file/d/10LxfMo341iLaVFYk1KTtaAsClV-VxSQk/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=659&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>651</td>
                                                <td>2023-10-09 12:28:48</td>
                                                <td>TRREC_660</td>
                                                <td>Malnutrition ICD-10-CM Code range E40-E46</td>
                                                <td>2023-10-06</td>
                                                <td>vijay kumar sampathi</td>
                                                <td><a href="https://drive.google.com/file/d/183XBUlYoILcnoPU94Hr_iJPwRF4S25lJ/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=660&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>652</td>
                                                <td>2023-10-28 16:48:31</td>
                                                <td>TRREC_661</td>
                                                <td>css box model introduction</td>
                                                <td>2023-10-09</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/18HBKa-NBa1RoNK24tvdHFs-OKENCx2Yx/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=661&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>653</td>
                                                <td>2023-10-09 16:22:00</td>
                                                <td>TRREC_662</td>
                                                <td>the hormonal system</td>
                                                <td>2023-10-05</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1lEBTrQSfAFAdFvmP8wypQepM2IbhGgie/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=662&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>654</td>
                                                <td>2023-10-09 16:29:47</td>
                                                <td>TRREC_663</td>
                                                <td>Endocrine, nutritional and metabolic diseases ICD-10-CM Code range
                                                    E00-E89</td>
                                                <td>2023-10-06</td>
                                                <td>vijay kumar sampathi</td>
                                                <td><a href="https://drive.google.com/file/d/10LxfMo341iLaVFYk1KTtaAsClV-VxSQk/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=663&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>655</td>
                                                <td>2023-10-09 16:30:07</td>
                                                <td>TRREC_664</td>
                                                <td>Endocrine, nutritional and metabolic diseases ICD-10-CM Code range
                                                    E00-E89</td>
                                                <td>2023-10-06</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/10LxfMo341iLaVFYk1KTtaAsClV-VxSQk/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=664&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>656</td>
                                                <td>2023-10-09 16:32:34</td>
                                                <td>TRREC_665</td>
                                                <td>Malnutrition ICD-10-CM Code range E40-E46</td>
                                                <td>2023-10-09</td>
                                                <td>vijay kumar sampathi</td>
                                                <td><a href="https://drive.google.com/file/d/16fYgXMqwg8uPbO8DX_-3ag-tq48eKEqv/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=665&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>657</td>
                                                <td>2023-10-09 16:32:44</td>
                                                <td>TRREC_666</td>
                                                <td>Malnutrition ICD-10-CM Code range E40-E46</td>
                                                <td>2023-10-09</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/16fYgXMqwg8uPbO8DX_-3ag-tq48eKEqv/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=666&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>658</td>
                                                <td>2023-10-28 16:40:19</td>
                                                <td>TRREC_667</td>
                                                <td>Operators in Java</td>
                                                <td>2023-10-06</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1Fo0kQzI9QtskEA5-J3LbVRFRH_lUCI-f/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=667&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>659</td>
                                                <td>2023-10-28 16:47:29</td>
                                                <td>TRREC_668</td>
                                                <td>Operators in Java</td>
                                                <td>2023-10-05</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1kM2s_Futl2uxcg_g_SjaXZYJ6mhTt3az/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=668&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>660</td>
                                                <td>2023-10-28 16:48:22</td>
                                                <td>TRREC_669</td>
                                                <td>Type Casting and Conditional Statements</td>
                                                <td>2023-10-06</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1nAnEJLILRfHr4Rs-N76a61XuFkAKrJ8m/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=669&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>661</td>
                                                <td>2023-10-09 19:31:35</td>
                                                <td>TRREC_670</td>
                                                <td>SEO | digital marketing class 5</td>
                                                <td>2023-10-09</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/1k6BS_xWzimHjoKg_b2MLkPwYOvDI2feq/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=670&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>662</td>
                                                <td>2023-10-28 12:56:35</td>
                                                <td>TRREC_671</td>
                                                <td>html and css essentials</td>
                                                <td>2023-10-10</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1jZr-ggPoe-KlZZLRVgiBurZID-bDkZ4b/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=671&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>663</td>
                                                <td>2023-12-09 16:08:29</td>
                                                <td>TRREC_672</td>
                                                <td>java introduction and history of java</td>
                                                <td>2023-10-09</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/1prkjj-mG_Q3N3qys6rhiScYUJ00bPn1X/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=672&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>664</td>
                                                <td>2023-10-10 12:10:31</td>
                                                <td>TRREC_673</td>
                                                <td>revision of endocrine system</td>
                                                <td>2023-10-09</td>
                                                <td>vijay kumar sampathi</td>
                                                <td><a href="https://drive.google.com/file/d/1hWW9DRScSMQl9BOikiJo-lYKIFBehUgq/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=673&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>665</td>
                                                <td>2023-10-10 12:51:24</td>
                                                <td>TRREC_674</td>
                                                <td>Job Analysis And Job Description</td>
                                                <td>2023-10-09</td>
                                                <td>Madhu Varshini</td>
                                                <td><a href="https://drive.google.com/file/d/1xDoi3k8VjePowdI7MfWJZ38QZtJvG_e0/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=674&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>666</td>
                                                <td>2023-10-10 12:53:14</td>
                                                <td>TRREC_675</td>
                                                <td>Job Analysis</td>
                                                <td>2023-10-06</td>
                                                <td>Madhu Varshini</td>
                                                <td><a href="https://drive.google.com/file/d/1HosboiBer_O_x4cP9B0NDchJ-nhmezzY/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=675&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>667</td>
                                                <td>2023-10-10 12:54:14</td>
                                                <td>TRREC_676</td>
                                                <td>Introduction to HRM</td>
                                                <td>2023-10-09</td>
                                                <td>Madhu Varshini</td>
                                                <td><a href="https://drive.google.com/file/d/1ROG6TkeYveNN4utL1CktYs96uXeN2rA8/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=676&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>668</td>
                                                <td>2023-10-10 15:47:49</td>
                                                <td>TRREC_677</td>
                                                <td>revision of endocrine system</td>
                                                <td>2023-10-10</td>
                                                <td>vijay kumar sampathi</td>
                                                <td><a href="https://drive.google.com/file/d/10LxfMo341iLaVFYk1KTtaAsClV-VxSQk/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=677&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>669</td>
                                                <td>2023-10-10 15:48:03</td>
                                                <td>TRREC_678</td>
                                                <td>revision of endocrine system</td>
                                                <td>2023-10-10</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/10LxfMo341iLaVFYk1KTtaAsClV-VxSQk/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=678&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>670</td>
                                                <td>2023-10-28 12:23:47</td>
                                                <td>TRREC_679</td>
                                                <td>structure of java and basic program of java and their meanings</td>
                                                <td>2023-10-10</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/1B-OomPjfvped-KLy0ZWl1Ck-OlfqtGTA/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=679&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>671</td>
                                                <td>2023-10-10 19:22:34</td>
                                                <td>TRREC_680</td>
                                                <td>Blogging | Digital Marketing Class 6</td>
                                                <td>2023-10-10</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/1LO0Ll6GwipR_ofHCOitkPDj-2qgzkiPG/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=680&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>672</td>
                                                <td>2023-10-28 16:49:40</td>
                                                <td>TRREC_681</td>
                                                <td>css box model part 1 in detail</td>
                                                <td>2023-10-11</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1DDOULPsP1AbNS0dpiDqMOKwb99D7S10L/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=681&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>673</td>
                                                <td>2023-10-28 13:01:03</td>
                                                <td>TRREC_682</td>
                                                <td>css box model introduction</td>
                                                <td>2023-10-11</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1nnFTOmg5IajGVN5IIfHxGpyqdcqvst3B/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=682&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>674</td>
                                                <td>2023-10-28 13:09:41</td>
                                                <td>TRREC_683</td>
                                                <td>css box model in detail </td>
                                                <td>2023-10-11</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1NYD0LqZmy9Mj-8VCqO4zTsBne-hfK0TN/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=683&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>675</td>
                                                <td>2023-10-28 16:49:19</td>
                                                <td>TRREC_684</td>
                                                <td>Jump statements in java</td>
                                                <td>2023-10-10</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1-kQZkbxuIIIWUJh_sVtBraPOOUbPZbnb/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=684&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>676</td>
                                                <td>2023-10-30 13:22:51</td>
                                                <td>TRREC_685</td>
                                                <td>Arrays in java</td>
                                                <td>2023-10-11</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1W6dybpQ9gKFAyfFXSIUbRftuh8VLApYe/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=685&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>677</td>
                                                <td>2023-10-28 16:41:11</td>
                                                <td>TRREC_686</td>
                                                <td>Type Casting and Conditional Statements in java</td>
                                                <td>2023-10-10</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1dlCaaEMY8qW2mXUs9fBkfVyHQgaqTAGU/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=686&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>678</td>
                                                <td>2023-10-28 16:42:00</td>
                                                <td>TRREC_687</td>
                                                <td>Switch case and Loop statements in java</td>
                                                <td>2023-10-11</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1LLOhDM9O7tyPuDqp3VJYB_wuzsjNHdoT/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=687&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>679</td>
                                                <td>2023-10-28 13:11:58</td>
                                                <td>TRREC_688</td>
                                                <td>css box model properties - spacing utilities</td>
                                                <td>2023-10-11</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1jl5dwey-gid6WHa0Fc4E32Ur8F6Y56sH/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=688&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>680</td>
                                                <td>2023-12-26 16:22:30</td>
                                                <td>TRREC_689</td>
                                                <td>Tokens and types and variables and their types</td>
                                                <td>2023-10-11</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/1FUEpRtJsFrb1XUhnIkPSVuBsTVeGSmLr/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=689&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>681</td>
                                                <td>2023-10-11 19:27:12</td>
                                                <td>TRREC_690</td>
                                                <td>Keyword Research Digital marketing class 7</td>
                                                <td>2023-10-11</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/1JCSCjBUe3IMweGBSf3A4stVt4AD9Tm-z/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=690&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>682</td>
                                                <td>2023-10-11 19:33:30</td>
                                                <td>TRREC_691</td>
                                                <td>Recruitment and Selection</td>
                                                <td>2023-10-11</td>
                                                <td>Madhu Varshini</td>
                                                <td><a href="https://drive.google.com/file/d/1fvS0jp_R89qNdbI0I0kCYfERf7s79U_d/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=691&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>683</td>
                                                <td>2023-10-11 19:34:04</td>
                                                <td>TRREC_692</td>
                                                <td>Introduction to HRM</td>
                                                <td>2023-10-11</td>
                                                <td>Madhu Varshini</td>
                                                <td><a href="https://drive.google.com/file/d/1V-IEJ4WA-uE9msfT8cdV3Hy6brdwAEkU/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=692&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>684</td>
                                                <td>2023-10-12 12:08:16</td>
                                                <td>TRREC_693</td>
                                                <td>anatomy questions task paper 1</td>
                                                <td>2023-10-11</td>
                                                <td>vijay kumar sampathi</td>
                                                <td><a href="https://drive.google.com/file/d/1UdMqYztfUzOqEcmHl9rW4UtElKjkj_28/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=693&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>685</td>
                                                <td>2023-10-12 12:12:27</td>
                                                <td>TRREC_694</td>
                                                <td>anatomy questions task paper 1</td>
                                                <td>2023-10-11</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1CGc27gInpMF9JW5BM4SRrnfeCZ1KO2xN/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=694&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>686</td>
                                                <td>2023-10-28 16:52:36</td>
                                                <td>TRREC_695</td>
                                                <td>css box spacing utilities - margin, padding and border properties
                                                </td>
                                                <td>2023-10-12</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1RNis45mpRyY-grp8ID_9rVhJ703-ed2f/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=695&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>687</td>
                                                <td>2023-10-12 15:52:53</td>
                                                <td>TRREC_696</td>
                                                <td>Sepsis guidelines</td>
                                                <td>2023-10-12</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1uhugvoHijlXeSr_s1bPtxobP-kqQ2FO6/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=696&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>688</td>
                                                <td>2023-10-12 16:15:32</td>
                                                <td>TRREC_697</td>
                                                <td>Interviews</td>
                                                <td>2023-10-13</td>
                                                <td>Madhu Varshini</td>
                                                <td><a href="https://drive.google.com/file/d/1nRF3_yqszCdEQoDs6Y5dk0KF8RcCPygj/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=697&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>689</td>
                                                <td>2023-10-28 16:42:54</td>
                                                <td>TRREC_698</td>
                                                <td>Jump statements in java</td>
                                                <td>2023-10-12</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1kGI_28-XyULe2rMjS5ByLfpqvl-ExivI/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=698&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>690</td>
                                                <td>2023-10-28 16:51:14</td>
                                                <td>TRREC_699</td>
                                                <td>Strings and String methods in java</td>
                                                <td>2023-10-12</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1Jdimv7OOdyqh3GEvx9GEh4HgtlA9X7pU/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=699&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>691</td>
                                                <td>2023-10-28 13:13:35</td>
                                                <td>TRREC_700</td>
                                                <td>css selectors intro </td>
                                                <td>2023-10-12</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1irtsIC3iQ4Ku3bcLViRgbLHiQgJPb-hI/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=700&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>692</td>
                                                <td>2023-10-28 14:58:44</td>
                                                <td>TRREC_701</td>
                                                <td>revised previous day topics and data types and basics of operators
                                                </td>
                                                <td>2023-10-12</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/1Hsg6EdKM9bUPAvRGG3tzV7qLkmmwat5g/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=701&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>693</td>
                                                <td>2023-10-12 19:54:17</td>
                                                <td>TRREC_702</td>
                                                <td>Functions OF HRM</td>
                                                <td>2023-10-12</td>
                                                <td>Madhu Varshini</td>
                                                <td><a href="https://drive.google.com/file/d/1Ly4y_TM5I6V5bCZr4i9F3v3kCMSZ30pR/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=702&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>694</td>
                                                <td>2023-10-12 21:38:11</td>
                                                <td>TRREC_703</td>
                                                <td>OnPage Techniques SEO Digital marketing Class 8</td>
                                                <td>2023-10-12</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/1MlPpfd0gGfBxsI1_m8_FQOlHhdt9Xx9T/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=703&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>695</td>
                                                <td>2023-10-12 21:43:41</td>
                                                <td>TRREC_704</td>
                                                <td>SEO Class 1</td>
                                                <td>2023-10-10</td>
                                                <td>Srinivas Yerrravelli </td>
                                                <td><a href="https://drive.google.com/file/d/175ub1R2rGDgWXMCOnMu9Bcx69F_S-Ly8/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=704&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>696</td>
                                                <td>2023-10-12 21:44:42</td>
                                                <td>TRREC_705</td>
                                                <td>SEO Class 2</td>
                                                <td>2023-10-11</td>
                                                <td>Srinivas Yerrravelli </td>
                                                <td><a href="https://drive.google.com/file/d/1qCNaftdruow_5puGhxzLzBoSY7ys0vez/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=705&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>697</td>
                                                <td>2023-10-12 21:46:06</td>
                                                <td>TRREC_706</td>
                                                <td>SEO Class 3 Intro to blogger</td>
                                                <td>2023-10-12</td>
                                                <td>Srinivas Yerrravelli </td>
                                                <td><a href="https://drive.google.com/file/d/1Hf167RW6Gl4ioEZJD2MRVaeBE44cVT6Q/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=706&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>698</td>
                                                <td>2023-10-13 16:00:39</td>
                                                <td>TRREC_707</td>
                                                <td>Blogger part 2 digtial marketing class 7</td>
                                                <td>2023-10-13</td>
                                                <td>Srinivas Yerrravelli </td>
                                                <td><a href="https://drive.google.com/file/d/1SVe6-3HRDlPwt3bUgCxW9Sq87hPNYDeN/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=707&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>699</td>
                                                <td>2023-10-28 16:52:06</td>
                                                <td>TRREC_708</td>
                                                <td>Scanner Class in Java</td>
                                                <td>2023-10-13</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/18BVzKeg8r2Y4LXhm4b48ba9XsbkdlLk-/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=708&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>700</td>
                                                <td>2023-10-28 13:23:02</td>
                                                <td>TRREC_709</td>
                                                <td>html lists and forms in detail</td>
                                                <td>2023-10-13</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1K-OQDdXULe7_RU9mSIiDBwsQ2-O80Qrr/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=709&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>701</td>
                                                <td>2023-10-28 16:56:04</td>
                                                <td>TRREC_710</td>
                                                <td>css selectors - 13-10-2023</td>
                                                <td>2023-10-13</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1Easqen6HY9M2tWzKyR4Yn67_qSvdg9aZ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=710&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>702</td>
                                                <td>2023-10-13 19:38:13</td>
                                                <td>TRREC_711</td>
                                                <td>OnPage Techniques part 2 Digital marketing Class 9</td>
                                                <td>2023-10-13</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/1o5m3PBslrYcS5VQz-WLzlAiggM6ghowN/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=711&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>703</td>
                                                <td>2023-10-16 14:15:11</td>
                                                <td>TRREC_712</td>
                                                <td>Human Resource Planning</td>
                                                <td>2023-10-13</td>
                                                <td>Madhu Varshini</td>
                                                <td><a href="https://drive.google.com/file/d/1mYEsNSTsnMCghbJtwNOK7bfJp1JVZCOA/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=712&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>704</td>
                                                <td>2023-10-16 15:51:42</td>
                                                <td>TRREC_713</td>
                                                <td>DIGESTIVE SYSTEM FUNCTIONS</td>
                                                <td>2023-10-16</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/18hyr8OKt0TOL8pJWIpwYB_gX6iAlDhll/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=713&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>705</td>
                                                <td>2023-10-16 19:13:48</td>
                                                <td>TRREC_714</td>
                                                <td>Induction and Placement</td>
                                                <td>2023-10-16</td>
                                                <td>Madhu Varshini</td>
                                                <td><a href="https://drive.google.com/file/d/1ufsUnHX31YKgeJSkIcRRmngPw94rKwvL/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=714&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>706</td>
                                                <td>2023-10-16 19:17:00</td>
                                                <td>TRREC_715</td>
                                                <td>Job Analysis</td>
                                                <td>2023-10-16</td>
                                                <td>Madhu Varshini</td>
                                                <td><a href="https://drive.google.com/file/d/1YW3r5Z2i2LGKtkadQy1XD8cvffSFKKQ_/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=715&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>707</td>
                                                <td>2023-10-28 14:58:55</td>
                                                <td>TRREC_716</td>
                                                <td>operators and previous class programs</td>
                                                <td>2023-10-16</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/1LZwIYvPdyB6QS4eJn3WGiAaqH7ejlc3y/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=716&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>708</td>
                                                <td>2023-10-28 13:16:17</td>
                                                <td>TRREC_717</td>
                                                <td>css selectors in detail part 1</td>
                                                <td>2023-10-16</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1IkRSTauASmiNTWsmXhaxrwIyMy7NcXh5/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=717&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>709</td>
                                                <td>2023-10-28 13:17:59</td>
                                                <td>TRREC_718</td>
                                                <td>css selectors in detail part 2 </td>
                                                <td>2023-10-17</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1M9BsrxeZUcHZhQNIap1dGU8QjeOEgDaJ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=718&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>710</td>
                                                <td>2023-10-28 14:59:04</td>
                                                <td>TRREC_719</td>
                                                <td>operators-2 and logical questions</td>
                                                <td>2023-10-17</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/1edJM1fxJYBONX4IS_jhmIfiKmqMzdgPM/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=719&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>711</td>
                                                <td>2023-10-17 19:19:06</td>
                                                <td>TRREC_720</td>
                                                <td>Training Introduction</td>
                                                <td>2023-10-17</td>
                                                <td>Madhu Varshini</td>
                                                <td><a href="https://drive.google.com/file/d/1Sjms9W2jvTl6wHO-vbfrMel_kf6_jq82/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=720&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>712</td>
                                                <td>2023-10-17 19:20:55</td>
                                                <td>TRREC_721</td>
                                                <td>Job Specifications And Job Description</td>
                                                <td>2023-10-17</td>
                                                <td>Madhu Varshini</td>
                                                <td><a href="https://drive.google.com/file/d/1NoLqqTEn51m1zo3lykQljlEnn0Na17e6/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=721&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>713</td>
                                                <td>2023-10-17 20:14:14</td>
                                                <td>TRREC_722</td>
                                                <td>Onpage Techniques part 3 Digital marketing CLass 10</td>
                                                <td>2023-10-17</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/1Giq00yrndjofc5JBB9Vvj6UTgcEQ8MB6/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=722&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>714</td>
                                                <td>2023-10-18 10:48:31</td>
                                                <td>TRREC_723</td>
                                                <td>DIGESTIVE SYSTEM ICD GUIDELINES</td>
                                                <td>2023-10-17</td>
                                                <td>vijay kumar sampathi</td>
                                                <td><a href="https://drive.google.com/file/d/1DKuJ3vtrwVWbOlwkCvLXQ3v7uXr9Oqdq/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=723&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>715</td>
                                                <td>2023-10-28 11:50:34</td>
                                                <td>TRREC_724</td>
                                                <td>INTRODUCTION AND PYTHON BASICS</td>
                                                <td>2023-10-28</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1FQPOmI4QBySYo_8ngeYSSpFvE8M2SZxd/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=724&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>716</td>
                                                <td>2023-10-18 16:56:04</td>
                                                <td>TRREC_725</td>
                                                <td>Blogger part 3 digital markeitng class 8</td>
                                                <td>2023-10-18</td>
                                                <td>Srinivas Yerrravelli </td>
                                                <td><a href="https://drive.google.com/file/d/1n7xgaMAhpkmTlunuXwrQ4Zugfzhp2abO/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=725&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>717</td>
                                                <td>2023-10-28 14:59:15</td>
                                                <td>TRREC_726</td>
                                                <td>INCREMENT,DECREMENT,BITWISE OPERATORS</td>
                                                <td>2023-10-18</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/1edJM1fxJYBONX4IS_jhmIfiKmqMzdgPM/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=726&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>718</td>
                                                <td>2023-10-28 13:19:40</td>
                                                <td>TRREC_727</td>
                                                <td>css inheritance and specificity</td>
                                                <td>2023-10-18</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1V4bDC4Ip8-r9J_p91-05vwt-qQOI2MKL/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=727&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>719</td>
                                                <td>2023-10-18 19:29:12</td>
                                                <td>TRREC_728</td>
                                                <td>Onpage Technqiues part 4 Digital Marketing Class 11</td>
                                                <td>2023-10-18</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/1wDzy4RHISAvQBEOOhPPg4h9ya51uAmgp/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=728&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>720</td>
                                                <td>2023-10-18 19:36:16</td>
                                                <td>TRREC_729</td>
                                                <td>Installation and Accounting of Tally Prime</td>
                                                <td>2023-10-18</td>
                                                <td>K Bharath Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1SGSeUDv-XNT8wT6l5I7EhcoPftrtQfeG/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=729&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>721</td>
                                                <td>2023-10-28 11:35:53</td>
                                                <td>TRREC_730</td>
                                                <td>PYTHON_OPERATORS_INSTALLING_VSCODE</td>
                                                <td>2023-10-28</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1mtyqM2fcAJYdc0gf-6TR1bo9A-_hVJ08/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=730&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>722</td>
                                                <td>2023-10-19 10:52:13</td>
                                                <td>TRREC_731</td>
                                                <td>DIGESTIVE SYSTEM REVISION</td>
                                                <td>2023-10-18</td>
                                                <td>vijay kumar sampathi</td>
                                                <td><a href="https://drive.google.com/file/d/1sn7VEIaGbtx8h8iHcYEWEIgKr_wEkUMi/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=731&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>723</td>
                                                <td>2023-10-19 19:07:40</td>
                                                <td>TRREC_732</td>
                                                <td>Onpage Techniques Part 1</td>
                                                <td>2023-10-19</td>
                                                <td>Srinivas Yerrravelli </td>
                                                <td><a href="https://drive.google.com/file/d/18rcCGnggtVAda6U3zg4y-f_acqmsz1CI/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=732&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>724</td>
                                                <td>2023-10-19 19:13:34</td>
                                                <td>TRREC_733</td>
                                                <td>Onpage Techniques Part 5 Digtial marketing class 12</td>
                                                <td>2023-10-19</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/1W97nix_n9ZN2JknszjmsEsOFX_LxmA29/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=733&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>725</td>
                                                <td>2023-10-19 19:13:55</td>
                                                <td>TRREC_734</td>
                                                <td>Steps in Training</td>
                                                <td>2023-10-19</td>
                                                <td>Madhu Varshini</td>
                                                <td><a href="https://drive.google.com/file/d/1menEqtGzF5v7ZEzlh4Z-dld85hbK7RKb/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=734&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>726</td>
                                                <td>2023-10-19 19:16:16</td>
                                                <td>TRREC_735</td>
                                                <td>Job Design</td>
                                                <td>2023-10-19</td>
                                                <td>Madhu Varshini</td>
                                                <td><a href="https://drive.google.com/file/d/1cxx2bHRPtYewPY73GTOu7E4HBZ-Bd5Q_/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=735&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>727</td>
                                                <td>2023-10-19 19:20:08</td>
                                                <td>TRREC_736</td>
                                                <td>Installation and Company Creation </td>
                                                <td>2023-10-19</td>
                                                <td>K Bharath Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1VxSr0G_N4geHEDWTNRxYv3oR2E8Pf7nI/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=736&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>728</td>
                                                <td>2023-10-28 13:20:34</td>
                                                <td>TRREC_737</td>
                                                <td>css cascade and specificity</td>
                                                <td>2023-10-19</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1vBcz_rW_7SJpIN240RNolznSYkhRu5iD/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=737&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>729</td>
                                                <td>2023-10-28 17:05:05</td>
                                                <td>TRREC_738</td>
                                                <td>css id selector in deatil and html bookmarking -</td>
                                                <td>2023-10-19</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1YuKrqUPRqqjsw_wevAE4kMb1P4I2xCs7/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=738&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>730</td>
                                                <td>2023-10-28 13:21:30</td>
                                                <td>TRREC_739</td>
                                                <td>html - inline and block level elements</td>
                                                <td>2023-10-20</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1nTU_EspRWj17ugipBdeqIirjdyEPnJ7H/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=739&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>731</td>
                                                <td>2023-10-20 19:29:17</td>
                                                <td>TRREC_740</td>
                                                <td>Recruitment and Selection</td>
                                                <td>2023-10-20</td>
                                                <td>Madhu Varshini</td>
                                                <td><a href="https://drive.google.com/file/d/18sZrBUH3SnYJIzmU_N1qwcCk7NgBTGeB/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=740&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>732</td>
                                                <td>2023-10-20 19:31:45</td>
                                                <td>TRREC_741</td>
                                                <td>Performance Appraisal Part 1</td>
                                                <td>2023-10-20</td>
                                                <td>Madhu Varshini</td>
                                                <td><a href="https://drive.google.com/file/d/1bzJvOdFGQWrWhMXtjLfFWcGi7KXeh8qo/view?usp=share_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=741&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>733</td>
                                                <td>2023-10-20 20:54:08</td>
                                                <td>TRREC_742</td>
                                                <td>Audit Report part 1 digital marketing class 13</td>
                                                <td>2023-10-20</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/14xLMYNu266IbLbG0_63jXoU3GvNDRbux/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=742&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>734</td>
                                                <td>2023-10-28 14:59:25</td>
                                                <td>TRREC_743</td>
                                                <td>SCANNER CLASS,IF,IF ELSE,ELSE IF STATEMENTS</td>
                                                <td>2023-10-20</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/1edJM1fxJYBONX4IS_jhmIfiKmqMzdgPM/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=743&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>735</td>
                                                <td>2023-10-28 11:43:16</td>
                                                <td>TRREC_744</td>
                                                <td>CONTROL STATEMENTS_OPERATORS</td>
                                                <td>2023-10-28</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/14eXGPMcK35ta_lRt65h5g9TfHbw2Yr5A/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=744&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>736</td>
                                                <td>2023-10-21 11:23:26</td>
                                                <td>TRREC_745</td>
                                                <td>Journal, Ledger and Vouchers of Tally</td>
                                                <td>2023-10-21</td>
                                                <td>K Bharath Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1sgGCoNE55W7RUboKNsOjTt5I8o_E6_ky/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=745&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>737</td>
                                                <td>2023-10-28 16:53:04</td>
                                                <td>TRREC_746</td>
                                                <td> Revision java topics[1]</td>
                                                <td>2023-10-19</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1Zk90IA9sXLNWf4FMsUkFXHb-L9jxDttN/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=746&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>738</td>
                                                <td>2023-10-27 12:51:12</td>
                                                <td>TRREC_747</td>
                                                <td>Java Revision Topics[2]</td>
                                                <td>2023-10-20</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/14caVhOUH8TFajk6HQG4JKH4jZvz4qmEl/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=747&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>739</td>
                                                <td>2023-10-27 12:52:44</td>
                                                <td>TRREC_748</td>
                                                <td>Access Modifiers and Java Main method explanation</td>
                                                <td>2023-10-25</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1Y76Y4wq7UTN3lESCbcLA7vPlsLuKhZYb/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=748&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>740</td>
                                                <td>2023-10-27 12:53:56</td>
                                                <td>TRREC_749</td>
                                                <td>Java OOPS Concept</td>
                                                <td>2023-10-26</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/161Y_hSP3yvZR_7WCwp2U68NDCdcKxl75/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=749&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>741</td>
                                                <td>2023-10-27 13:06:24</td>
                                                <td>TRREC_750</td>
                                                <td>Looping statements in java</td>
                                                <td>2023-10-09</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1kBoBAPNSZulNVhHKykPoZlQ7-0DVxo65/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=750&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>742</td>
                                                <td>2023-10-27 13:09:12</td>
                                                <td>TRREC_751</td>
                                                <td>Java introduction and installazation</td>
                                                <td>2023-10-19</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1A1YxwSDe4l63P4wtsOt2jAoZzU9l800O/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=751&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>743</td>
                                                <td>2023-10-28 16:57:26</td>
                                                <td>TRREC_752</td>
                                                <td>Java Tokens, Variables and Datatypes</td>
                                                <td>2023-10-20</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1btjxU_lvXBS_QzPMuJOY8x9i1XVJA3OF/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=752&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>744</td>
                                                <td>2023-10-27 13:11:46</td>
                                                <td>TRREC_753</td>
                                                <td>Operators in Java</td>
                                                <td>2023-10-25</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1QrpkZRfZ2KX2l8ftWGtGpXSgJefF6C38/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=753&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>745</td>
                                                <td>2023-11-08 14:45:04</td>
                                                <td>TRREC_754</td>
                                                <td>Constructors in java</td>
                                                <td>2023-10-27</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1ux3T5WAbkrwvSyQuI_xDuMUJc3yMpeKb/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=754&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>746</td>
                                                <td>2023-10-27 19:11:11</td>
                                                <td>TRREC_755</td>
                                                <td>Onpage Techniques part 2</td>
                                                <td>2023-10-25</td>
                                                <td>Srinivas Yerrravelli </td>
                                                <td><a href="https://drive.google.com/file/d/1RtECOTd4gvvn7TPaGn6lS3umRHiO12kM/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=755&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>747</td>
                                                <td>2023-10-27 19:15:18</td>
                                                <td>TRREC_756</td>
                                                <td>seo audit report part 2 class 14 </td>
                                                <td>2023-10-25</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/1QDMFIZTR7v6DA9TdwEPb9A9AwyZ5M6PN/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=756&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>748</td>
                                                <td>2023-10-27 19:20:15</td>
                                                <td>TRREC_757</td>
                                                <td>seo audit report part 3 class 15</td>
                                                <td>2023-10-26</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/1NLQbJzz7-W6p9CbMc_U7mqG9J1Hh09_X/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=757&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>749</td>
                                                <td>2023-10-27 19:22:41</td>
                                                <td>TRREC_758</td>
                                                <td>seo audit report part 4 class 16</td>
                                                <td>2023-10-27</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/1jt5smTRSAaGRWx_YcSG1QHyZ8DkOGF7y/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=758&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>750</td>
                                                <td>2023-10-28 10:30:41</td>
                                                <td>TRREC_759</td>
                                                <td>Nested if, switch statement and for loop</td>
                                                <td>2023-10-27</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/1BjB8l_wmArDfo8aSdT2J1EoDai2jCT_U/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=759&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>751</td>
                                                <td>2023-10-28 11:45:28</td>
                                                <td>TRREC_760</td>
                                                <td>LOOPS_PYTHON</td>
                                                <td>2023-10-28</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/13DaH3xDK8QzJZMeO24zL6boi4glpNh5o/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=760&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>752</td>
                                                <td>2023-10-28 11:48:44</td>
                                                <td>TRREC_761</td>
                                                <td>CONTROL STATEMENTS</td>
                                                <td>2023-10-28</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1MAu5gBgJ6Foh7pES62_Xd90WnqYVhv2i/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=761&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>753</td>
                                                <td>2023-10-28 11:50:05</td>
                                                <td>TRREC_762</td>
                                                <td>COLLECTIONS_PYTHON</td>
                                                <td>2023-10-28</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1aYvLl7Q25lduYUu2sEWoHv7b9NyXYQ5x/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=762&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>754</td>
                                                <td>2023-10-28 12:06:15</td>
                                                <td>TRREC_763</td>
                                                <td>digestive system</td>
                                                <td>2023-10-26</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1F_4YankFz7j5QW8OIUjv3s57MNNTI00N/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=763&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>755</td>
                                                <td>2023-10-28 16:56:34</td>
                                                <td>TRREC_764</td>
                                                <td>Type Casting and Conditional Statements in java</td>
                                                <td>2023-10-27</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1096_d4gvh1O3yJl-wGbB4DPkmV0kAYD_/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=764&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>756</td>
                                                <td>2023-10-28 17:08:19</td>
                                                <td>TRREC_765</td>
                                                <td>css selectors - universal and grouping selectors</td>
                                                <td>2023-10-17</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/19vv5sPLAmqkrGGOqPuhO_4th_aR-A6uU/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=765&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>757</td>
                                                <td>2023-10-28 17:13:23</td>
                                                <td>TRREC_766</td>
                                                <td>css inheritance</td>
                                                <td>2023-10-25</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1oUdoCEXqu9fEkhEv8HkpC_wqNKq__m1R/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=766&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>758</td>
                                                <td>2023-10-28 17:16:03</td>
                                                <td>TRREC_767</td>
                                                <td>css specificity - 27-10-2023</td>
                                                <td>2023-10-27</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1PCKNnghOhcRnkO4nkmwATxvMQxGAAwHY/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=767&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>759</td>
                                                <td>2023-10-28 17:23:11</td>
                                                <td>TRREC_768</td>
                                                <td>css cascade and important exception</td>
                                                <td>2023-10-28</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/13gCWJbNGe3JA80bJf2_JXvKJWhFz8jJ_/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=768&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>760</td>
                                                <td>2023-10-30 15:34:02</td>
                                                <td>TRREC_769</td>
                                                <td>The respiratory system </td>
                                                <td>2023-10-30</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1fVeVS90o5m_dVCLE6fCSaAjB6EfvPPeE/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=769&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>761</td>
                                                <td>2023-10-30 17:09:11</td>
                                                <td>TRREC_770</td>
                                                <td>Onpage Techniques part 3 Digital marketing CLass 11</td>
                                                <td>2023-10-30</td>
                                                <td>Srinivas Yerrravelli </td>
                                                <td><a href="https://drive.google.com/file/d/10sU61iE4d-ZLK9FCbAkRJp2RsA-MGePO/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=770&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>762</td>
                                                <td>2023-10-30 18:44:09</td>
                                                <td>TRREC_771</td>
                                                <td>medical coding</td>
                                                <td>2023-10-30</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1M46llKmZ3YRdibe011ZVJ2NEGYsbJmah/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=771&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>763</td>
                                                <td>2023-10-30 18:46:45</td>
                                                <td>TRREC_772</td>
                                                <td>Scope of Variables in java</td>
                                                <td>2023-10-30</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1pQIhemaJw0Nox42UaSywIftmQFcZvnJz/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=772&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>764</td>
                                                <td>2023-10-30 18:48:49</td>
                                                <td>TRREC_773</td>
                                                <td>Looping and jump Statements in java</td>
                                                <td>2023-10-30</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1zY3VRuyoBZf8VngJxg_arPDu4IQULmA1/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=773&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>765</td>
                                                <td>2023-10-31 09:34:14</td>
                                                <td>TRREC_774</td>
                                                <td>seo audit report part 5 class 17</td>
                                                <td>2023-10-30</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/1Vc2hp1UUbnx09J-s6SBTAyDzhvxco7vs/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=774&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>766</td>
                                                <td>2023-10-31 11:22:18</td>
                                                <td>TRREC_775</td>
                                                <td>LIST_COMPREHENSION</td>
                                                <td>2023-10-31</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1q4gqjqiPQ5lZhHUH1TocnAGFmelwc4Ha/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=775&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>767</td>
                                                <td>2023-10-31 12:45:31</td>
                                                <td>TRREC_776</td>
                                                <td>html - inline and block level elements</td>
                                                <td>2023-10-31</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/13riNlRsrtjjRvjbmsDahZIClY9MRfXpM/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=776&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>768</td>
                                                <td>2023-10-31 15:32:39</td>
                                                <td>TRREC_777</td>
                                                <td>Diseases of the respiratory system ICD-10-CM Code range J00-J99</td>
                                                <td>2023-10-31</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1hKU43MQhqZxkqKu-1yrGRmnKPlctj7Bl/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=777&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>769</td>
                                                <td>2023-10-31 16:30:32</td>
                                                <td>TRREC_778</td>
                                                <td>Constructors in java</td>
                                                <td>2023-10-27</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1bEkFYnBtS_dxk_Yala8b-xMBe_4KRXnu/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=778&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>770</td>
                                                <td>2023-10-31 16:40:01</td>
                                                <td>TRREC_779</td>
                                                <td>Static, this and final Keywords in java</td>
                                                <td>2023-10-31</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1Sudh0iMoPrnCMCLJDWq5rgVMBfJZrC6e/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=779&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>771</td>
                                                <td>2023-10-31 16:46:33</td>
                                                <td>TRREC_780</td>
                                                <td>Introduction of java</td>
                                                <td>2023-10-19</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1dG7lMGkYMKbNeYRK6lou2YsKgOy_e2Gn/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=780&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>772</td>
                                                <td>2023-11-01 10:38:40</td>
                                                <td>TRREC_781</td>
                                                <td>Arrays and Scanner class in java</td>
                                                <td>2023-11-01</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1O_SGcuAY5NWDjjnsAWeJgc7Qr51ytPI9/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=781&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>773</td>
                                                <td>2023-11-01 10:51:33</td>
                                                <td>TRREC_782</td>
                                                <td>RESPIRATORY SYSTEM ICD 1</td>
                                                <td>2023-10-31</td>
                                                <td>vijay kumar sampathi</td>
                                                <td><a href="https://drive.google.com/file/d/1ngDJTu_b3VMPmPJlrbR-YRhdvkRqESRJ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=782&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>774</td>
                                                <td>2023-11-01 15:22:48</td>
                                                <td>TRREC_783</td>
                                                <td>hiv coding guidelines icd 10</td>
                                                <td>2023-11-01</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1wuJiQYKuKYcEhQv5AtPLzcc9ebOG-SSg/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=783&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>775</td>
                                                <td>2023-11-01 16:32:32</td>
                                                <td>TRREC_784</td>
                                                <td>html forms and lists</td>
                                                <td>2023-11-01</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1aUvq8UfhhSFmfBLp9o31nEu9lYsVb-Dj/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=784&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>776</td>
                                                <td>2023-11-01 16:38:20</td>
                                                <td>TRREC_785</td>
                                                <td>Inheritance , Abstract method and abstract class in java</td>
                                                <td>2023-11-01</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1xuOaTj8jdt2zsUAj-76U4qfWLaxNZNz5/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=785&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>777</td>
                                                <td>2023-11-01 16:55:19</td>
                                                <td>TRREC_786</td>
                                                <td>html history and introduction</td>
                                                <td>2023-10-30</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1OnptMyXzV8mZDpJDCMUETrS5nKveIVEf/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=786&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>778</td>
                                                <td>2023-11-01 18:52:55</td>
                                                <td>TRREC_787</td>
                                                <td>String and String methods in java</td>
                                                <td>2023-11-01</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1TlYaxyWVeJ7yP5aCHZfDXfTtWh-epzPi/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=787&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>779</td>
                                                <td>2023-11-01 20:06:02</td>
                                                <td>TRREC_788</td>
                                                <td>set and dictionary in python</td>
                                                <td>2023-10-31</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/112sS2yqpbyf6NwDPqBIFlzZjSPHCdGWP/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=788&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>780</td>
                                                <td>2023-11-01 20:20:21</td>
                                                <td>TRREC_789</td>
                                                <td>FUNCTION IN PYTHON</td>
                                                <td>2023-11-01</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1dX_owzIC3uKqju59TsOCI9AyjzUrcr-0/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=789&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>781</td>
                                                <td>2023-11-01 20:52:36</td>
                                                <td>TRREC_790</td>
                                                <td>Onpage tech part 4 class 12</td>
                                                <td>2023-10-31</td>
                                                <td>Srinivas Yerrravelli </td>
                                                <td><a href="https://drive.google.com/file/d/1Eh6_nJMHjJ3Wmt0nlgS2uaUWx-HXrvrj/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=790&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>782</td>
                                                <td>2023-11-02 08:28:02</td>
                                                <td>TRREC_791</td>
                                                <td>Audit Report part 1 digital marketing class 13</td>
                                                <td>2023-10-31</td>
                                                <td>Srinivas Yerrravelli </td>
                                                <td><a href="https://drive.google.com/file/d/1ynpF3nhB3LdVp7yQcc25a_5Dn5HAjKdg/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=791&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>783</td>
                                                <td>2023-11-02 08:29:57</td>
                                                <td>TRREC_792</td>
                                                <td>SEO OffPage Part 1 Class 18</td>
                                                <td>2023-10-31</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/1ftZi8zq-srKC1nn02dmsm1zfq4jwBKSh/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=792&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>784</td>
                                                <td>2023-11-02 08:30:55</td>
                                                <td>TRREC_793</td>
                                                <td>SEO OffPage Part 2 Class 19</td>
                                                <td>2023-11-01</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/1p7a-mVLm5y6JwrvwciO91kt56MciCGgh/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=793&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>785</td>
                                                <td>2023-11-02 15:38:13</td>
                                                <td>TRREC_794</td>
                                                <td>anatomy questions task paper 2</td>
                                                <td>2023-11-02</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/11wln7pXZHX8zs1lZyjszOMBWuhnngUW6/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=794&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>786</td>
                                                <td>2023-11-02 16:38:08</td>
                                                <td>TRREC_795</td>
                                                <td>Java OPPS Concept</td>
                                                <td>2023-11-02</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1McmeFXClMXoDlhxw0w43FdKZ-kJYG_sf/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=795&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>787</td>
                                                <td>2023-11-02 16:40:20</td>
                                                <td>TRREC_796</td>
                                                <td>Interface and Method Overriding in java</td>
                                                <td>2023-11-02</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1ebWXhDyPmN2wZXcNqBrBlWw64MU9v6Kr/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=796&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>788</td>
                                                <td>2023-11-02 18:35:42</td>
                                                <td>TRREC_797</td>
                                                <td>html basics and css basics part 1</td>
                                                <td>2023-11-01</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1sZHP1x3Jq0c29yjfbQKp63n3rFSYK-xQ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=797&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>789</td>
                                                <td>2023-11-02 18:36:51</td>
                                                <td>TRREC_798</td>
                                                <td>html and css basics part 2</td>
                                                <td>2023-11-02</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1WNOa1kdf84cib0XGlnbp45MROIyjJnUF/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=798&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>790</td>
                                                <td>2023-11-02 18:50:52</td>
                                                <td>TRREC_799</td>
                                                <td>Java OOPS Concept</td>
                                                <td>2023-11-02</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1C0dVFM5grGFjZmgzz5gt2ZoT22TQGI54/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=799&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>791</td>
                                                <td>2023-11-02 19:00:16</td>
                                                <td>TRREC_800</td>
                                                <td>hormones system</td>
                                                <td>2023-11-02</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1vN0oXpYj-sdy8m6QgjYBPs9R-enWvJXe/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=800&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>792</td>
                                                <td>2023-11-03 15:23:39</td>
                                                <td>TRREC_801</td>
                                                <td>skeletal system</td>
                                                <td>2023-11-03</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1smOZcW6PuES7yetGQ8VUl8biTk7BWb6Z/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=801&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>793</td>
                                                <td>2023-11-03 18:37:56</td>
                                                <td>TRREC_802</td>
                                                <td>css box model introduction</td>
                                                <td>2023-11-03</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1Z2ymAEc5GH1fH6dFLc8ZAoYlbBHk2ZAd/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=802&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>794</td>
                                                <td>2023-11-03 18:57:40</td>
                                                <td>TRREC_803</td>
                                                <td>Constructors in java</td>
                                                <td>2023-11-03</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1IrhMkRbj8F7TI4WWqrG57DjIvKITHoUQ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=803&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>795</td>
                                                <td>2023-11-04 11:33:53</td>
                                                <td>TRREC_804</td>
                                                <td>PRACTICING EXAMPLES ON FUNCTION</td>
                                                <td>2023-11-02</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/18xClo3PTt52XfMOobYsBYb8rLGlzgS3n/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=804&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>796</td>
                                                <td>2023-11-04 11:37:24</td>
                                                <td>TRREC_805</td>
                                                <td>RECURSIONS_STRINGS IN PYTHON</td>
                                                <td>2023-11-03</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/18NNDcBVk-xcQP6U4rqttJfo7Gz7vX4Ly/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=805&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>797</td>
                                                <td>2023-11-06 18:37:33</td>
                                                <td>TRREC_806</td>
                                                <td>css box model in detail </td>
                                                <td>2023-11-06</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/11Dx0Rp0gDWcabuCRNDtv_ZNO8TK0-Ol8/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=806&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>798</td>
                                                <td>2023-11-06 18:44:44</td>
                                                <td>TRREC_807</td>
                                                <td>Constructors in java</td>
                                                <td>2023-11-04</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1IrhMkRbj8F7TI4WWqrG57DjIvKITHoUQ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=807&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>799</td>
                                                <td>2023-11-06 18:47:59</td>
                                                <td>TRREC_808</td>
                                                <td>Scope of Variables in java</td>
                                                <td>2023-11-06</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1TYJ0c3TY_X4mHxFW1fDO3ZSVm-E2p_dF/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=808&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>800</td>
                                                <td>2023-11-06 18:50:03</td>
                                                <td>TRREC_809</td>
                                                <td>Scope of Variables in java</td>
                                                <td>2023-11-06</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1IQ9Cl2r5nrITVsaOO3fhH8NQIOK-4LKX/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=809&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>801</td>
                                                <td>2023-11-06 18:52:56</td>
                                                <td>TRREC_810</td>
                                                <td>Java Programs(Prime,Palindrome,Factorial,ASCII programs)</td>
                                                <td>2023-11-06</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1ZORb6KRyhhetL6MAtKM2NHcpeBhBKLrg/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=810&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>802</td>
                                                <td>2023-11-07 10:06:36</td>
                                                <td>TRREC_811</td>
                                                <td>Recalling of all seo topics</td>
                                                <td>2023-03-11</td>
                                                <td>Srinivas Yerrravelli </td>
                                                <td><a href="https://drive.google.com/file/d/14-zwfC3cj3mkDoEQDjHhG-Jd9gGyyXnT/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=811&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>803</td>
                                                <td>2023-11-07 10:06:46</td>
                                                <td>TRREC_812</td>
                                                <td>Recalling of all seo topics</td>
                                                <td>2023-03-11</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/14-zwfC3cj3mkDoEQDjHhG-Jd9gGyyXnT/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=812&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>804</td>
                                                <td>2023-11-07 11:05:37</td>
                                                <td>TRREC_813</td>
                                                <td>CALL_BY_VALUE_REFERENCE</td>
                                                <td>2023-11-07</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1DKt37kZQYvBy_Yhyo75yzjj5ieRNuPH2/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=813&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>805</td>
                                                <td>2023-11-07 12:14:53</td>
                                                <td>TRREC_814</td>
                                                <td>endocrine system icd 10 codes</td>
                                                <td>2023-11-07</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1jTGeGefUVf06HqKRTxM78bIsC68Upw_A/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=814&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>806</td>
                                                <td>2023-11-07 18:43:16</td>
                                                <td>TRREC_815</td>
                                                <td>css selectors intro </td>
                                                <td>2023-11-07</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1pxDl7MBKNUG-oGawb6SzTXHrEdlozmRh/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=815&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>807</td>
                                                <td>2023-11-07 19:09:03</td>
                                                <td>TRREC_816</td>
                                                <td>endocrine system icd 10 codes</td>
                                                <td>2023-11-07</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1HQMY9JI5FM-XIgx-OlNl50r24YDxhv8O/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=816&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>808</td>
                                                <td>2023-11-07 22:14:53</td>
                                                <td>TRREC_817</td>
                                                <td>Audit Report part 2 digital marketing class 14</td>
                                                <td>2023-11-07</td>
                                                <td>Srinivas Yerrravelli </td>
                                                <td><a href="https://drive.google.com/file/d/1Zjad7Qzq7Qnw2xdspH3cgIcahuvlur2B/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=817&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>809</td>
                                                <td>2023-11-07 22:17:56</td>
                                                <td>TRREC_818</td>
                                                <td>onpage seo practical part 1</td>
                                                <td>2023-11-07</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/1zRAZBFR520Gr_SnPDiY13lPL5rZwLtb0/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=818&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>810</td>
                                                <td>2023-11-08 14:43:38</td>
                                                <td>TRREC_819</td>
                                                <td>Vector and Wrapper class in java</td>
                                                <td>2023-11-07</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1at2crRbcdstjYuyDO4eXHtlnPzy5GPZ0/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=819&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>811</td>
                                                <td>2023-11-08 18:49:15</td>
                                                <td>TRREC_820</td>
                                                <td>STRINGS_PYTHON</td>
                                                <td>2023-11-07</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1Ohg93L2orSq7aeU2a9Z8EkmxY20Q1QuS/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=820&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>812</td>
                                                <td>2023-11-08 18:57:43</td>
                                                <td>TRREC_821</td>
                                                <td>DOUBTS_CLARIFICATION_NETWORKISSUE</td>
                                                <td>2023-11-08</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1p8Atcu0KyOFnVU9g4EmXJLsFsl1aTNiU/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=821&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>813</td>
                                                <td>2023-11-08 18:59:35</td>
                                                <td>TRREC_822</td>
                                                <td>css id selector</td>
                                                <td>2023-11-08</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1KiHOxC0KMR1yUWpW4HqD0DCWJFxj53Dl/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=822&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>814</td>
                                                <td>2023-11-08 19:01:18</td>
                                                <td>TRREC_823</td>
                                                <td>css id selector - bookmarks implementation with anchor elements</td>
                                                <td>2023-11-08</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1uaddNThcX7pTWTi0aSjZURtAwKtDm7K5/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=823&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>815</td>
                                                <td>2023-11-09 14:58:13</td>
                                                <td>TRREC_824</td>
                                                <td>Inheritance in java</td>
                                                <td>2023-11-07</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/18e4Yq3n7yP9fJKvA6sLOWUhc3hDsw5Fe/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=824&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>816</td>
                                                <td>2023-11-09 14:59:32</td>
                                                <td>TRREC_825</td>
                                                <td>Types of inheritances in java</td>
                                                <td>2023-11-08</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1Xd52yNXjlFZ_GzzRcqPUWkDLwaQvOMu8/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=825&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>817</td>
                                                <td>2023-11-09 15:00:54</td>
                                                <td>TRREC_826</td>
                                                <td>Abstract method and class in java</td>
                                                <td>2023-11-09</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1iEHKPPExULIZAoiCIJ0cHdsGIWf6qTfF/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=826&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>818</td>
                                                <td>2023-11-09 15:05:30</td>
                                                <td>TRREC_827</td>
                                                <td>Abstract method and class in java</td>
                                                <td>2023-11-08</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1CUAA2_ZZmADBN2K7JdmWmmvQsy8nDJMn/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=827&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>819</td>
                                                <td>2023-11-09 17:10:43</td>
                                                <td>TRREC_828</td>
                                                <td>onpage seo practical part 2</td>
                                                <td>2023-11-08</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/1ico8TsI-ud71r2tkDDJtlhdltFTOuwHX/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=828&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>820</td>
                                                <td>2023-11-09 17:12:27</td>
                                                <td>TRREC_829</td>
                                                <td>Audit Report part 2 digital marketing class 15</td>
                                                <td>2023-11-08</td>
                                                <td>Srinivas Yerrravelli </td>
                                                <td><a href="https://drive.google.com/file/d/1Eh4PUN-SSPObNjj0XqF1sx6X4VHrxn95/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=829&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>821</td>
                                                <td>2023-11-09 17:14:41</td>
                                                <td>TRREC_830</td>
                                                <td>Audit Report part 4 digital marketing class 16</td>
                                                <td>2023-11-09</td>
                                                <td>Srinivas Yerrravelli </td>
                                                <td><a href="https://drive.google.com/file/d/1wUd8olLsnEr6joNpwqzKSFanhYpUQFpO/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=830&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>822</td>
                                                <td>2023-11-09 18:17:02</td>
                                                <td>TRREC_831</td>
                                                <td>css group , universal selectors and color picker</td>
                                                <td>2023-11-09</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1M4we9qeNNdWqMi-QW_yzHYS5b9q4BWF1/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=831&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>823</td>
                                                <td>2023-11-09 18:55:55</td>
                                                <td>TRREC_832</td>
                                                <td>Interface and keywords in java</td>
                                                <td>2023-11-09</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1EyMPyr11h9Ot-bvk5mAIobwd_dTcwwuM/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=832&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>824</td>
                                                <td>2023-11-09 20:40:24</td>
                                                <td>TRREC_833</td>
                                                <td>onpage seo practical class 22</td>
                                                <td>2023-11-09</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/19IJbvXSdViT84MNHL03g6Wj9cSVHPzZO/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=833&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>825</td>
                                                <td>2023-11-10 15:51:43</td>
                                                <td>TRREC_834</td>
                                                <td>sepsis coding guidelines icd-10</td>
                                                <td>2023-11-08</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1c6NRZZupnkxgVs3oEqZpty8KfpqqYgDn/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=834&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>826</td>
                                                <td>2023-11-10 18:41:59</td>
                                                <td>TRREC_835</td>
                                                <td>css fundamental concepts - specificity </td>
                                                <td>2023-11-10</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1xuJnfD8vkYLcAbV_Ky0c9msA5NxZeBwZ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=835&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>827</td>
                                                <td>2023-11-10 18:59:17</td>
                                                <td>TRREC_836</td>
                                                <td>css specificity - cascade and important exception</td>
                                                <td>2023-11-10</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1-H38qSuIjWJJuIogmc3yvi4fJDriwZ8z/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=836&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>828</td>
                                                <td>2023-11-10 19:02:01</td>
                                                <td>TRREC_837</td>
                                                <td>Method overriding and programs</td>
                                                <td>2023-11-10</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1mMvm5RONLstrExwb-mcHcIbE__qpkFNY/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=837&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>829</td>
                                                <td>2023-11-10 20:37:17</td>
                                                <td>TRREC_838</td>
                                                <td>Bank to Bank Transactions </td>
                                                <td>2023-11-09</td>
                                                <td>K Bharath Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1QKjvGlPoh6vPBfWnvnCPZjNo2Vyrvo0T/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=838&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>830</td>
                                                <td>2023-11-10 20:39:32</td>
                                                <td>TRREC_839</td>
                                                <td>Bank to Bank Transactions example 2</td>
                                                <td>2023-11-10</td>
                                                <td>K Bharath Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1cfIUOiSmCKNBNisrXTbXpsWrmeq9P4u5/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=839&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>831</td>
                                                <td>2023-11-11 14:21:25</td>
                                                <td>TRREC_840</td>
                                                <td>Offpage Tech part 1 class 17</td>
                                                <td>2023-11-10</td>
                                                <td>Srinivas Yerrravelli </td>
                                                <td><a href="https://drive.google.com/file/d/1KZ6NRuzEJZ3Yb9mYyRTb6tV1OsVvL7Jk/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=840&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>832</td>
                                                <td>2023-11-11 14:25:44</td>
                                                <td>TRREC_841</td>
                                                <td>onpage seo practical class 23</td>
                                                <td>2023-11-10</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/1ik4chS0P-XcHalW5mjCgf0HZv_9ATlV3/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=841&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>833</td>
                                                <td>2023-11-13 18:42:14</td>
                                                <td>TRREC_842</td>
                                                <td>css inheritance , block level elements and inline elements</td>
                                                <td>2023-11-13</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1F6VwoQjWb9XyEKnE2CoOf5sB8Snk382F/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=842&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>834</td>
                                                <td>2023-11-14 18:58:20</td>
                                                <td>TRREC_843</td>
                                                <td>Stock Purchases</td>
                                                <td>2023-11-13</td>
                                                <td>K Bharath Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1xJArfWRrt9p-aay1kBR27WLXOIYKNffi/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=843&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>835</td>
                                                <td>2023-11-16 20:22:07</td>
                                                <td>TRREC_844</td>
                                                <td>onpage techniques practical part 1 class 18</td>
                                                <td>2023-11-14</td>
                                                <td>Srinivas Yerrravelli </td>
                                                <td><a href="https://drive.google.com/file/d/1GF6oM7cn04XyyB7qRORczJff00fTNIq3/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=844&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>836</td>
                                                <td>2023-11-14 20:56:41</td>
                                                <td>TRREC_845</td>
                                                <td>Onpage SEO Practical class 24</td>
                                                <td>2023-11-14</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/16xXtsNZirK4UY7ILp8csipx_vv6F6eRZ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=845&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>837</td>
                                                <td>2023-11-15 12:12:47</td>
                                                <td>TRREC_846</td>
                                                <td>CLASS_PYTHON</td>
                                                <td>2023-11-10</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/16-nPP3dHLZVkdJ8q2TMunBwInB0mgjTA/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=846&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>838</td>
                                                <td>2023-11-15 12:13:55</td>
                                                <td>TRREC_847</td>
                                                <td>CLASS_PYTHON</td>
                                                <td>2023-11-10</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1IYJsmUDQ6KAzhh2dbkO3TI5-0-9wtJWu/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=847&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>839</td>
                                                <td>2023-11-15 12:14:45</td>
                                                <td>TRREC_848</td>
                                                <td>CLASS_PYTHON</td>
                                                <td>2023-11-10</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1zXu5x8nlmvdrHS6hzXfXZ4l_FIgPgEdH/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=848&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>840</td>
                                                <td>2023-11-15 12:29:50</td>
                                                <td>TRREC_849</td>
                                                <td>CONSTRUCTORS_PYTHON</td>
                                                <td>2023-11-13</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1WrUlZLCXNDKyOaCT7ERXl4kt9bObrhyw/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=849&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>841</td>
                                                <td>2023-11-15 12:43:48</td>
                                                <td>TRREC_850</td>
                                                <td>TYPES_OF_VARIABLES_PYTHON</td>
                                                <td>2023-11-14</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1VKFzV6TFu60ga1zHOQZ9P6y_ecnEPkE-/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=850&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>842</td>
                                                <td>2023-11-15 12:45:16</td>
                                                <td>TRREC_851</td>
                                                <td>TYPES_OF_VARIABLES_PYTHON</td>
                                                <td>2023-11-14</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/14ktLKjDagHkJXeNsHAbsB0NjYWsDRzeV/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=851&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>843</td>
                                                <td>2023-11-16 11:14:14</td>
                                                <td>TRREC_852</td>
                                                <td>TYPES_OF_METHODS_CLASS_AND_CLASS_IN_CLASS</td>
                                                <td>2023-11-16</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1jeIKFEhKyDsio727sWvxt1b3CwTOZ2bu/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=852&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>844</td>
                                                <td>2023-11-16 20:22:28</td>
                                                <td>TRREC_853</td>
                                                <td>Offapge seo class 19</td>
                                                <td>2023-11-16</td>
                                                <td>Srinivas Yerrravelli </td>
                                                <td><a href="https://drive.google.com/file/d/1GjlZdJsug-2-a9ULsXpX1pIjnxWbEQtA/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=853&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>845</td>
                                                <td>2023-11-17 10:40:28</td>
                                                <td>TRREC_854</td>
                                                <td>Wrapper classes in java</td>
                                                <td>2023-11-16</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1F8XXGFjjRLSl8sOcmEgizivokDvdfyvD/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=854&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>846</td>
                                                <td>2023-11-17 21:41:07</td>
                                                <td>TRREC_855</td>
                                                <td>seo interview questions</td>
                                                <td>2023-11-17</td>
                                                <td>Srinivas Yerrravelli </td>
                                                <td><a href="https://drive.google.com/file/d/1c3a7hJhx9j6mfZHAMD2JLR80AmuAsxWJ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=855&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>847</td>
                                                <td>2023-11-17 21:45:38</td>
                                                <td>TRREC_856</td>
                                                <td>offpage seo practical class 25</td>
                                                <td>2023-11-17</td>
                                                <td>Srinivas Yerrravelli</td>
                                                <td><a href="https://drive.google.com/file/d/1nqTRGX-SIYfyED7Acyrnjh-hInR9fHHS/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=856&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>848</td>
                                                <td>2023-11-21 18:45:29</td>
                                                <td>TRREC_857</td>
                                                <td>sales and purchases with inventory</td>
                                                <td>2023-11-16</td>
                                                <td>K Bharath Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1KE6vDexkv4GKG89yTWjS_5NucjaTc_gW/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=857&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>849</td>
                                                <td>2023-11-21 18:47:46</td>
                                                <td>TRREC_858</td>
                                                <td>sales and purchases with different units of measurments</td>
                                                <td>2023-11-17</td>
                                                <td>K Bharath Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1dTt6JWglxkn4hmiQsn-Rxz8xb7WCyZEH/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=858&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>850</td>
                                                <td>2023-11-21 18:49:27</td>
                                                <td>TRREC_859</td>
                                                <td>Tally Partner Ship Problem</td>
                                                <td>2023-11-20</td>
                                                <td>K Bharath Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1mDNKFYsa4cnrPTT6pMrtNuDCNZLqTpEv/view?usp=drive_link"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=859&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>851</td>
                                                <td>2023-11-24 19:04:32</td>
                                                <td>TRREC_860</td>
                                                <td>Bootstrap Introduction - 24-11-2023</td>
                                                <td>2023-11-24</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/16cXzGHjp1RjcKw_JF-Ex78SmdckYumYY/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=860&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>852</td>
                                                <td>2023-11-25 20:45:46</td>
                                                <td>TRREC_861</td>
                                                <td>INHERITANCE</td>
                                                <td>2023-11-17</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1b4szGMV7eMKtQZSFYQgloM5AEa7Nexlv/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=861&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>853</td>
                                                <td>2023-11-25 20:50:27</td>
                                                <td>TRREC_862</td>
                                                <td>SUPER_KEYWORD_METHOD</td>
                                                <td>2023-11-24</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1wJGgwHx32myzdTJ3igAyUy53xna4n-Y9/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=862&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>854</td>
                                                <td>2023-11-25 20:56:20</td>
                                                <td>TRREC_863</td>
                                                <td>POLYMORPHISM</td>
                                                <td>2023-11-25</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1R7adZajBNoiRxJ_aJpOoG_lBRkbRI_QV/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=863&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>855</td>
                                                <td>2023-11-28 10:45:36</td>
                                                <td>TRREC_864</td>
                                                <td>muscular system</td>
                                                <td>2023-11-27</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1SkP8_62LdwQ4oYEzjsiBrfTg_NnyBdTE/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=864&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>856</td>
                                                <td>2023-11-30 18:12:00</td>
                                                <td>TRREC_865</td>
                                                <td>METHOD OVERLOADING AND OVERRIDING</td>
                                                <td>2023-11-30</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1gIAp0xi8Gijlr2q434mD7NxZHwE0bzJa/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=865&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>857</td>
                                                <td>2023-11-30 18:14:47</td>
                                                <td>TRREC_866</td>
                                                <td>ABSTRACTION IN PYTHON</td>
                                                <td>2023-11-28</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/15OShQLVyFTfimOTNHD_mF92rtWyHHPYY/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=866&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>858</td>
                                                <td>2023-11-30 18:15:44</td>
                                                <td>TRREC_867</td>
                                                <td>ABSTRACTION IN PYTHON</td>
                                                <td>2023-11-28</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1IO_fUXSXuKjjEMo5x8WJ-4bWz1RWqAfe/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=867&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>859</td>
                                                <td>2023-11-30 18:17:49</td>
                                                <td>TRREC_868</td>
                                                <td>ACCESS SPECIFIERS</td>
                                                <td>2023-11-29</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1WgNUl6sv-32EI78Kpv6jJx4xE7OQSj8o/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=868&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>860</td>
                                                <td>2023-11-30 18:22:58</td>
                                                <td>TRREC_869</td>
                                                <td>PRIVATE ACCESS SPECIFIER</td>
                                                <td>2023-11-30</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1Nm09Afvv8DuRpglLeU9Jm7uwhYtTkTxJ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=869&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>861</td>
                                                <td>2023-12-01 14:52:22</td>
                                                <td>TRREC_870</td>
                                                <td>Bootstrap Introduction </td>
                                                <td>2023-11-24</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/16cXzGHjp1RjcKw_JF-Ex78SmdckYumYY/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=870&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>862</td>
                                                <td>2023-12-01 14:53:51</td>
                                                <td>TRREC_871</td>
                                                <td>Bootstrap grid system</td>
                                                <td>2023-11-28</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1OoVJsZNihwuLRZt5_kG7ExqhkKsZFh9s/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=871&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>863</td>
                                                <td>2023-12-01 14:56:01</td>
                                                <td>TRREC_872</td>
                                                <td>bootstrap spacing utilities - margin ,padding and different
                                                    breakeven points</td>
                                                <td>2023-11-29</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1hDuQmuvpAhoCmdhZ-kN_TkjdGjV-zQlg/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=872&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>864</td>
                                                <td>2023-12-02 10:57:21</td>
                                                <td>TRREC_873</td>
                                                <td>bootstrap - navbar, carousel and embed utilities</td>
                                                <td>2023-12-01</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/185xl_6BHQvIJPkfmzhthTfAPtk9--mlP/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=873&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>865</td>
                                                <td>2023-12-02 11:02:54</td>
                                                <td>TRREC_874</td>
                                                <td>respiratory system</td>
                                                <td>2023-12-01</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1wRDJ4QPzJRBY68MTq91KaS6VM1k5p0F_/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=874&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>866</td>
                                                <td>2023-12-02 14:38:42</td>
                                                <td>TRREC_875</td>
                                                <td>ENCAPSULATION_PYTHON</td>
                                                <td>2023-12-01</td>
                                                <td>Shanti Kiran</td>
                                                <td><a href="https://drive.google.com/file/d/1thnRnH9wOh8RujdZOAfaon8JUk3x9WbV/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=875&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>867</td>
                                                <td>2023-12-04 17:40:13</td>
                                                <td>TRREC_876</td>
                                                <td>BASICS OF JAVA, DATA TYPES, OPERATORS, TYPE CASTING, SCANNER
                                                    CLASS(4-12-2023)</td>
                                                <td>2023-12-04</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/1_Oh_HBKmn5U-rkfdnP-j4AtSJZfar3uP/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=876&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>868</td>
                                                <td>2023-12-05 12:15:53</td>
                                                <td>TRREC_877</td>
                                                <td>respiratory system diseases</td>
                                                <td>2023-12-04</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1zQqshm-gae3oEb2IZk81U1CcJJUseFCL/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=877&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>869</td>
                                                <td>2023-12-05 15:04:10</td>
                                                <td>TRREC_878</td>
                                                <td>Introduction to Digital Marketing </td>
                                                <td>2023-12-04</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/14GmrO2Shb_6lHfEY8u6D9E9fo5WSFGAo/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=878&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>870</td>
                                                <td>2023-12-05 18:43:50</td>
                                                <td>TRREC_879</td>
                                                <td>Digital Marketing Pros and Cons and Email marketing</td>
                                                <td>2023-12-05</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1aq0Onj-mniQBsAVwaxPC8XA4FZK_c-H9/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=879&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>871</td>
                                                <td>2023-12-06 11:47:31</td>
                                                <td>TRREC_880</td>
                                                <td>nervous system</td>
                                                <td>2023-12-05</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1BpF1gnJxdO55FJHwjP6nN0n7rz4zZ0Aw/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=880&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>872</td>
                                                <td>2023-12-06 13:23:45</td>
                                                <td>TRREC_881</td>
                                                <td>css inheritance</td>
                                                <td>2023-12-06</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/16cXzGHjp1RjcKw_JF-Ex78SmdckYumYY/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=881&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>873</td>
                                                <td>2023-12-06 18:35:59</td>
                                                <td>TRREC_882</td>
                                                <td>Mobile Marketing</td>
                                                <td>2023-12-06</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1C1iliJQGTlu4UPnRWVPv7mRr3_YYJyuC/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=882&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>874</td>
                                                <td>2023-12-06 18:49:26</td>
                                                <td>TRREC_883</td>
                                                <td>history of internet and world wide web</td>
                                                <td>2023-12-05</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1y-V_iE6xYAatrhfFgpUKr3X8pkGvFhFF/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=883&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>875</td>
                                                <td>2023-12-06 18:51:56</td>
                                                <td>TRREC_884</td>
                                                <td>search engines and dotcom bubble</td>
                                                <td>2023-12-05</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1sGJ5ZqtUB9lohYnuGwOM2vDyjh5HQq1c/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=884&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>876</td>
                                                <td>2023-12-07 11:17:31</td>
                                                <td>TRREC_885</td>
                                                <td>nervous system</td>
                                                <td>2023-12-06</td>
                                                <td>Ramu</td>
                                                <td><a href="https://drive.google.com/file/d/1akXgD7MF0Y0o1DI_YKnJ_vZdH3xWDhS7/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=885&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>877</td>
                                                <td>2023-12-26 16:09:13</td>
                                                <td>TRREC_886</td>
                                                <td>Arrays-1</td>
                                                <td>2023-12-07</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/1vx0QkqgxhHr9a4FZYNzpYCc3WQrX13hn/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=886&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>878</td>
                                                <td>2023-12-26 16:17:12</td>
                                                <td>TRREC_887</td>
                                                <td>Arrays-2</td>
                                                <td>2023-12-08</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/14aAS4WRhlEXKrMk2YAP6yiER2L4SoFwn/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=887&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>879</td>
                                                <td>2023-12-11 18:46:45</td>
                                                <td>TRREC_888</td>
                                                <td>css basics - font properties</td>
                                                <td>2023-12-08</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1XVwxBCtdRfaWfvC8GBCeS8hC31lIr4I6/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=888&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>880</td>
                                                <td>2023-12-12 11:46:33</td>
                                                <td>TRREC_889</td>
                                                <td>css box model</td>
                                                <td>2023-12-11</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1-5CBhLJEPq2yP5tlZZITdrSmU7TIGct2/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=889&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>881</td>
                                                <td>2023-12-12 12:40:50</td>
                                                <td>TRREC_890</td>
                                                <td>FB Intriduction</td>
                                                <td>2023-12-07</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/10qn26JTheB69ODLkHR6Q7tq_5a14Zo9z/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=890&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>882</td>
                                                <td>2023-12-12 12:41:42</td>
                                                <td>TRREC_891</td>
                                                <td>FB creatives and its usages </td>
                                                <td>2023-12-08</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/16wtx25HF6QwhpZuGNKW1MjtGTeBJrcOO/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=891&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>883</td>
                                                <td>2023-12-12 12:42:31</td>
                                                <td>TRREC_892</td>
                                                <td>Jyothirmayi college special classes</td>
                                                <td>2023-12-06</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1qRV1ssWV-hbPFGsNTw9ZiUi44BuuL57q/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=892&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>884</td>
                                                <td>2023-12-14 18:47:10</td>
                                                <td>TRREC_893</td>
                                                <td>css selectors - class and tag</td>
                                                <td>2023-12-14</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/15pKbeE6ZdoZqU0a9U9LqONljwqaA8jCT/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=893&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>885</td>
                                                <td>2023-12-18 15:41:13</td>
                                                <td>TRREC_894</td>
                                                <td>Arrays-3 and Strings</td>
                                                <td>2023-12-11</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/1siaoLIAZijLMBOfh9nbdQhJKZUz9QB7O/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=894&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>886</td>
                                                <td>2023-12-18 18:51:25</td>
                                                <td>TRREC_895</td>
                                                <td>css selectors - id and bookmarks</td>
                                                <td>2023-12-15</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/132EAmyTES9xUSJYRUaoVIxWWQLoZq80Y/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=895&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>887</td>
                                                <td>2023-12-19 13:21:18</td>
                                                <td>TRREC_896</td>
                                                <td>Full Stack Development Course Explanation</td>
                                                <td>2023-12-18</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1SAXjyLDzOgkML0_mGdhSC_SK_tfnq4vD/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=896&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>888</td>
                                                <td>2023-12-19 13:21:00</td>
                                                <td>TRREC_897</td>
                                                <td>Java Full Stack Course Explanation</td>
                                                <td>2023-12-19</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1gEnqJ_w-vpPuYJqTpn1AF4i2w4DFOys9/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=897&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>889</td>
                                                <td>2023-12-20 11:24:35</td>
                                                <td>TRREC_898</td>
                                                <td>css inheritance and specificity</td>
                                                <td>2023-12-19</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1k-PrYNoHhTvT5nTGYNFBi8xIGpXrpEtO/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=898&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>890</td>
                                                <td>2023-12-20 12:08:39</td>
                                                <td>TRREC_899</td>
                                                <td>Java Introduction</td>
                                                <td>2023-12-20</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1i054eLV8PA_lHBBwxGkFOcWJDcThUnBI/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=899&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>891</td>
                                                <td>2023-12-22 16:15:59</td>
                                                <td>TRREC_900</td>
                                                <td>Strings</td>
                                                <td>2023-12-12</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/1qguvpFS0OFpcyqQ__RkQIggxLDYDRSHN/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=900&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>892</td>
                                                <td>2023-12-22 16:18:35</td>
                                                <td>TRREC_901</td>
                                                <td>Programs on conditional statemts</td>
                                                <td>2023-12-14</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/1odWG8h4u5nXl18yxlEpC1IdxvAidGcjs/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=901&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>893</td>
                                                <td>2023-12-22 16:21:34</td>
                                                <td>TRREC_902</td>
                                                <td>Program on loops</td>
                                                <td>2023-12-18</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/1b0Ut4BfQP0gtOwgpdDYQttAiMCPl1Hy-/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=902&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>894</td>
                                                <td>2023-12-22 16:23:10</td>
                                                <td>TRREC_903</td>
                                                <td>Program on Arrays and Strings</td>
                                                <td>2023-12-20</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/1k9wwRQoaxYRcv4rHOwYdg4C-VKL2qWW6/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=903&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>895</td>
                                                <td>2023-12-22 16:25:05</td>
                                                <td>TRREC_904</td>
                                                <td>Programs on strings and basics of oops </td>
                                                <td>2023-12-21</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/1YvyIxpJXM8Uy-Iwi23bODXPuAgkt1wdL/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=904&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>896</td>
                                                <td>2023-12-23 11:32:05</td>
                                                <td>TRREC_905</td>
                                                <td>oops concept</td>
                                                <td>2023-12-22</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/1MtAYoTAZTmnIoLJXgnuGhFDWjHN_U2YO/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=905&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>897</td>
                                                <td>2023-12-26 19:03:39</td>
                                                <td>TRREC_906</td>
                                                <td>FB UI walkthrough and settings </td>
                                                <td>2023-12-13</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/12Qba52qf3xV0NIVBZBp129GUyJW2y74g/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=906&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>898</td>
                                                <td>2023-12-26 19:05:36</td>
                                                <td>TRREC_907</td>
                                                <td>Q and A sessions </td>
                                                <td>2023-12-14</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1o_JuCP3EZR7uufY1oWDJFaKRUoc1uuc6/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=907&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>899</td>
                                                <td>2023-12-26 19:16:23</td>
                                                <td>TRREC_908</td>
                                                <td>Campaign creations and FB metrics</td>
                                                <td>2023-12-15</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1CJx1b65amhBuEVQUyHaHXG_2DeEehciq/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=908&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>900</td>
                                                <td>2023-12-26 19:12:35</td>
                                                <td>TRREC_909</td>
                                                <td>SEO basics and Checklist</td>
                                                <td>2023-12-19</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1PWGBJ62TxrA8hXMlKorQRR4UMhtnDy_f/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=909&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>901</td>
                                                <td>2023-12-26 19:14:02</td>
                                                <td>TRREC_910</td>
                                                <td>SEO check list </td>
                                                <td>2023-12-20</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1ZBUOgAayUrT0R_c4IPaid0NL3nTba27g/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=910&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>902</td>
                                                <td>2023-12-26 19:15:40</td>
                                                <td>TRREC_911</td>
                                                <td>SEO checklist and Basics</td>
                                                <td>2023-12-20</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1ZBUOgAayUrT0R_c4IPaid0NL3nTba27g/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=911&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>903</td>
                                                <td>2023-12-26 19:18:13</td>
                                                <td>TRREC_912</td>
                                                <td>SEO basics and Checklists continuation </td>
                                                <td>2023-12-20</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1ZBUOgAayUrT0R_c4IPaid0NL3nTba27g/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=912&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>904</td>
                                                <td>2023-12-26 19:20:09</td>
                                                <td>TRREC_913</td>
                                                <td>Q and A sessions</td>
                                                <td>2023-12-21</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1XdxnUoa21qCEv_I5G0KzBpyGzNrSVcO8/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=913&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>905</td>
                                                <td>2023-12-26 19:22:29</td>
                                                <td>TRREC_914</td>
                                                <td>EAT and YMYL</td>
                                                <td>2023-12-26</td>
                                                <td>M Sandeep Kumar</td>
                                                <td><a href="https://drive.google.com/file/d/1PBnUazy6qJRzvOq3QrVuXIztX87-a8bG/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=914&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>906</td>
                                                <td>2023-12-28 14:52:14</td>
                                                <td>TRREC_915</td>
                                                <td>Data Types and variable in java</td>
                                                <td>2023-12-26</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1Qs8adT47kvmJXjfg6h-V856QB6GzAwvA/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=915&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>907</td>
                                                <td>2023-12-28 14:53:19</td>
                                                <td>TRREC_916</td>
                                                <td>Conditional statements and Scanner Class in java</td>
                                                <td>2023-12-28</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1CRu3h7M9SmBxWNYKWB054TOyz15ThdHo/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=916&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>908</td>
                                                <td>2023-12-29 16:39:12</td>
                                                <td>TRREC_917</td>
                                                <td>oops concept</td>
                                                <td>2023-12-26</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/1WSst35ulE1QOY3MA6vua72l5Gqw5-49s/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=917&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>909</td>
                                                <td>2023-12-29 19:02:41</td>
                                                <td>TRREC_918</td>
                                                <td>Looping and jump Statements in java</td>
                                                <td>2023-12-29</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1Uikdz_clG-QOmDWGQhRtkrHKsKg7H_ab/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=918&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>910</td>
                                                <td>2024-01-03 10:56:45</td>
                                                <td>TRREC_919</td>
                                                <td>Methods Creation</td>
                                                <td>2023-12-28</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/19C-EgoO0fyhdb6u14lWKcizZ3A5x23g7/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=919&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>911</td>
                                                <td>2024-01-03 10:58:16</td>
                                                <td>TRREC_920</td>
                                                <td>Constructors and Method Overloading</td>
                                                <td>2024-01-02</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/17Zriu84tDmoUJe5A5vfSPotLbNDxr0vF/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=920&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>912</td>
                                                <td>2024-01-03 12:24:37</td>
                                                <td>TRREC_921</td>
                                                <td>bootstrap flexbox </td>
                                                <td>2024-01-02</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1eSlUALzu_2cekSc-KNk0KZq4wMsISnWz/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=921&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>913</td>
                                                <td>2024-01-05 11:50:09</td>
                                                <td>TRREC_922</td>
                                                <td>Static variables and static method</td>
                                                <td>2024-01-04</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/1WCrOausx6Ly-IDe6JA1v21bffaLBl7Om/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=922&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>914</td>
                                                <td>2024-01-05 12:48:03</td>
                                                <td>TRREC_923</td>
                                                <td>Conditional Statements in pyrhon</td>
                                                <td>2023-12-28</td>
                                                <td>V Bala Tripura Sunadri </td>
                                                <td><a href="https://drive.google.com/file/d/1LVGox75uju_TkdSAieV4_zFX72HbUIIC/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=923&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>915</td>
                                                <td>2024-01-05 12:49:09</td>
                                                <td>TRREC_924</td>
                                                <td>Conditional Statements in pyrhon</td>
                                                <td>2024-01-02</td>
                                                <td>V Bala Tripura Sunadri </td>
                                                <td><a href="https://drive.google.com/file/d/18wiVBERoz_hNYBkVnJYC0K96k-RnEarN/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=924&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>916</td>
                                                <td>2024-01-05 12:50:17</td>
                                                <td>TRREC_925</td>
                                                <td>Loop and jump Statements in python</td>
                                                <td>2024-01-04</td>
                                                <td>V Bala Tripura Sunadri </td>
                                                <td><a href="https://drive.google.com/file/d/1FL1AhMGzpP6qtwTzo-ePIYdFWMKhsMG1/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=925&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>917</td>
                                                <td>2024-01-05 12:54:58</td>
                                                <td>TRREC_926</td>
                                                <td>Practice Array Programs in java</td>
                                                <td>2024-01-04</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/1TV_9tMwK8vaq2UJhHpwglmGyloZV7uUy/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=926&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>918</td>
                                                <td>2024-01-05 13:01:04</td>
                                                <td>TRREC_927</td>
                                                <td>Javascript Introduction</td>
                                                <td>2024-01-04</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/171HrozKFmR42t9bZ6rWtuwCLC1mg0pEM/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=927&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>919</td>
                                                <td>2024-01-10 11:32:03</td>
                                                <td>TRREC_928</td>
                                                <td>Js_Variables and Datatypes</td>
                                                <td>2024-01-05</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1hLVUu9vegw3USZosZWeHOnuREotVa0IZ/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=928&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>920</td>
                                                <td>2024-01-06 18:03:36</td>
                                                <td>TRREC_929</td>
                                                <td>Python Tuple and List Methods</td>
                                                <td>2024-01-05</td>
                                                <td>V Bala Tripura Sunadri </td>
                                                <td><a href="https://drive.google.com/file/d/1vk9ol0ErSBKZr4v8-wZQtBXKPmvFbZj0/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=929&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>921</td>
                                                <td>2024-01-08 16:46:04</td>
                                                <td>TRREC_930</td>
                                                <td>This keyword</td>
                                                <td>2024-01-05</td>
                                                <td>Tiruvidhula Naga Sai Priyanka</td>
                                                <td><a href="https://drive.google.com/file/d/1P0M6NcA9knEb0JPOMpMb5jhxTGflSyeF/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=930&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>922</td>
                                                <td>2024-01-08 19:06:15</td>
                                                <td>TRREC_931</td>
                                                <td>Java Programs(Armstrong number and Pattern Programs)</td>
                                                <td>2024-01-08</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/11AM8EFTBdoRy3ojopgD4g7KUVKsOTKJj/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=931&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>923</td>
                                                <td>2024-01-10 11:22:05</td>
                                                <td>TRREC_932</td>
                                                <td>Js_Operators_Conditional_Statements</td>
                                                <td>2024-01-08</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1424Jhs3OY_sQYMmci8LOgvIXoOm-sn7E/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=932&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>924</td>
                                                <td>2024-01-10 11:23:34</td>
                                                <td>TRREC_933</td>
                                                <td>Js_Conditional_Statements</td>
                                                <td>2024-01-09</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1ieXOh-cUaqKCO-ZtB3aFypObEdNofZoU/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=933&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>925</td>
                                                <td>2024-01-10 16:32:03</td>
                                                <td>TRREC_934</td>
                                                <td>Java Programs(Fibanoceei,palindrome)</td>
                                                <td>2024-01-09</td>
                                                <td>V Bala Tripura Sunadri</td>
                                                <td><a href="https://drive.google.com/file/d/14tX7b44-ESB2ON04H2r8STvtqVfYUgOp/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=934&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>926</td>
                                                <td>2024-01-10 16:33:43</td>
                                                <td>TRREC_935</td>
                                                <td>String in python</td>
                                                <td>2024-01-09</td>
                                                <td>V Bala Tripura Sunadri </td>
                                                <td><a href="https://drive.google.com/file/d/1Oq4YVtCkJDStu6L8suWyMdPz2G_v09O3/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=935&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>927</td>
                                                <td>2024-01-10 16:34:42</td>
                                                <td>TRREC_936</td>
                                                <td>Dictionary and set in python</td>
                                                <td>2024-01-08</td>
                                                <td>V Bala Tripura Sunadri </td>
                                                <td><a href="https://drive.google.com/file/d/1K9Lcz3GyCH-QV8PuH0U06jPQrHqppSbc/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=936&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>928</td>
                                                <td>2024-01-11 10:36:12</td>
                                                <td>TRREC_937</td>
                                                <td>Js_Loops</td>
                                                <td>2024-01-10</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1CnOJASeomV8nbRDCbxM-ACJfGfq3PFjF/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=937&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>929</td>
                                                <td>2024-01-12 10:51:33</td>
                                                <td>TRREC_938</td>
                                                <td>Js_For_Loops</td>
                                                <td>2024-01-11</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1_f489roAG0krlhBYSxE-wrUMPkTcR6T0/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=938&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>930</td>
                                                <td>2024-01-17 10:25:03</td>
                                                <td>TRREC_939</td>
                                                <td>Js_Loops_Tasks</td>
                                                <td>2024-01-12</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1F2TiuGL4uBsA-uNB_8lrNVqm7i7wwMNl/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=939&page=pending"
                                                        class="btn btn-info">update</a></td>
                                            </tr>


                                            <tr>
                                                <td>931</td>
                                                <td>2024-01-19 10:37:56</td>
                                                <td>TRREC_940</td>
                                                <td>Js_While_do_while_Loops</td>
                                                <td>2024-01-17</td>
                                                <td>tirdhala ashok</td>
                                                <td><a href="https://drive.google.com/file/d/1nvmLTTOz3-T1RXhRnKxYrrep24jwsoGo/view?usp=sharing"
                                                        target="_blank" class="btn btn-info">Link</a></td>
                                                <td><a href="updaterecordings.php?id=940&page=pending"
                                                        class="btn btn-info">update</a></td>
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

                                <p> Are you sure you want to accept a recordings??</p>
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

    <?php include("./scripts.php"); ?>

</body>

</html>