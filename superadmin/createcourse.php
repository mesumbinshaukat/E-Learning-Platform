<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['superadmin_username']) && !isset($_COOKIE['superadmin_password'])) {
    header('location: ../super-admin_login.php');
    exit();
}

if (isset($_POST['create'])) {
    $course_name = $_POST['name_of_the_course'];
    $stream = $_POST['stream'];
    $posting_category = $_POST['posting_category'];
    $provider_name = $_POST['provider_name'];
    $training_type = $_POST['training_type'];
    $offline_address = $_POST['offline_address'];
    $duration = $_POST['duration'];
    $last_date = $_POST['last_date'];
    $hours_perday = $_POST['hours_perday'];
    $certifications = $_POST['certifications'];
    $no_of_slots = $_POST['no_of_slots'];
    $course_description = $_POST['course_description'];
    $topics_covered = $_POST['topics_covered'];
    $benefits = $_POST['benefits'];
    $pre_requirements = $_POST['pre_requirements'];
    $additional_information = $_POST['additional_information'];
    $course_type = $_POST['course_type'];
    $original_cost = $_POST['original_cost'];
    $discount = $_POST['discount'];
    $final_cost = $_POST['final_cost'];
    $main_image_name = $_FILES['main_image']['name'];
    $main_image_tmp = $_FILES['main_image']['tmp_name'];
    $inner_image_name = $_FILES['inner_image']['name'];
    $inner_image_tmp = $_FILES['inner_image']['tmp_name'];
    $image2_name = $_FILES['image2']['name'];
    $image2_tmp = $_FILES['image2']['tmp_name'];

    $query = mysqli_prepare($conn, "INSERT INTO `course`(`course_name`, `stream_name`, `posting_category`, `provider_name_company`, `training_type`, `offline_address`, `duration_days`, `last_date_to_apply`, `hours_per_day`, `certification`, `slots`, `course_description`, `topics_covered`, `benefits_of_course`, `pre_requirements`, `additional_info`, `course_type`, `original_cost`, `discount_percentage`, `final_cost`, `main_image`, `inner_image`, `image_two`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    mysqli_stmt_bind_param($query, "ssssssssssssssssssssss", $course_name, $stream, $posting_category, $provider_name, $training_type, $offline_address, $duration, $last_date, $hours_perday, $certifications, $no_of_slots, $course_description, $topics_covered, $benefits, $pre_requirements, $additional_information, $course_type, $original_cost, $discount, $final_cost, $main_image_name, $inner_image_name, $image2_name);


    if (mysqli_stmt_execute($query)) {

        move_uploaded_file($main_image_tmp, "./assets/img/course/" . $main_image_name);
        move_uploaded_file($inner_image_tmp, "./assets/img/course/" . $inner_image_name);
        move_uploaded_file($image2_tmp, "./assets/img/course/" . $image2_name);
        header("location: createcourse.php");
    } else {
        echo mysqli_error($conn);
    }
    mysqli_stmt_close($query);
}
?>


<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">
    <title>Create Course</title>

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
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <!-- main-content -->
            <div class="main-content app-content">

                <!-- container -->
                <div class="main-container container-fluid">


                    <!-- breadcrumb -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="left-content">
                            <span class="main-content-title mg-b-0 mg-b-lg-1">Create Course</span>
                        </div>
                        <div class="justify-content-center mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item "><a href="javascript:void(0);">Course</a></li>
                                <li class="breadcrumb-item " aria-current="page">Create</li>
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

                                    <div id="wizard3">
                                        <h3>Overview</h3>
                                        <section>
                                            <div class="control-group form-group">
                                                <label class="form-label">Name of the Course <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                <input type="text" class="form-control required" name="name_of_the_course" placeholder="Course Name" required>
                                            </div>
                                            <div class="control-group form-group mb-2">
                                                <label class="form-label">Stream <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                <select class="form-control form-select select2" required name="stream" data-bs-placeholder="select qulification" required>
                                                    <?php
                                                    $select_query = "SELECT * FROM `stream`";

                                                    $select_query_run = mysqli_query($conn, $select_query);

                                                    if (mysqli_num_rows($select_query_run) > 0) {

                                                        while ($i = mysqli_fetch_assoc($select_query_run)) {

                                                            if ($i["stream_location"] == "courses") {

                                                    ?>
                                                                <option value="<?php echo $i["stream_name"] ?>">
                                                                    <?php echo $i["stream_name"] ?>
                                                                </option>
                                                    <?php }
                                                        }
                                                    } ?>
                                                </select>
                                            </div>
                                            <div class="control-group form-group mb-2">
                                                <label class="form-label">Posting category <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                <select class="form-control form-select select2" name="posting_category" data-bs-placeholder="Posting Category" required>
                                                    <option value="self">Self</option>
                                                    <option value="others">others</option>

                                                </select>
                                            </div>

                                            <div class="control-group form-group mb-2">
                                                <label class="form-label">Provider name <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                <select class="form-control form-select select2" name="provider_name" data-bs-placeholder="Select stream" required>
                                                    <?php
                                                    $query = "SELECT * FROM `trainer`";
                                                    $run_query = mysqli_query($conn, $query);
                                                    if ($run_query) {
                                                        while ($row = mysqli_fetch_assoc($run_query)) {
                                                            echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="control-group form-group mb-2">
                                                <label class="form-label">Training type <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                <select class="form-control form-select select2" name="training_type" data-bs-placeholder="Select training type" required>
                                                    <option value="VirtualLiveSession">Virtual Live Session</option>
                                                    <option value="Offline">Offline</option>
                                                    <option value="Hybrid">Hybrid</option>
                                                    <option value=" VirtualRecordedSessions"> Virtual Recorded Sessions
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Offline address ( if offline ) <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                <input type="" class="form-control required" name="offline_address" placeholder="Offline address">
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Duration(Days) <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                <input type="number" class="form-control required" name="duration" placeholder="Duration(Days)" required>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Last date to apply <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                <input type="date" class="form-control required" name="last_date" placeholder="DD/MM/YYYY" required>
                                            </div>

                                            <div class="control-group form-group">
                                                <label class="form-label">Hours per day <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                <input type="number" class="form-control required" name="hours_perday" placeholder="Hours" required>
                                            </div>
                                            <div class="control-group form-group mb-2">
                                                <label class="form-label">Certification <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                <select class="form-control form-select select2" name="certifications" data-bs-placeholder="yes/no" required>
                                                    <option value="yes">yes</option>
                                                    <option value="no">no</option>

                                                </select>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">No of Slots available <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                <input type="number" class="form-control required" name="no_of_slots" placeholder="Seating Count" required>
                                            </div>

                                        </section>
                                        <h3> Full information</h3>
                                        <section>

                                            <label class="form-label">Course Description <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                            <div class="form-label">
                                                <input type="text" class="form-control" placeholder="description" name="course_description" required>
                                            </div>
                                            <label class="form-label">Topics Covered <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                            <div class="form-label">
                                                <input type="text" class="form-control" placeholder="topics covered" name="topics_covered" required>
                                            </div>
                                            <label class="form-label">Benefits of Course <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                            <div class="form-label">
                                                <input type="text" class="form-control" placeholder="benefits" name="benefits" required>
                                            </div>

                                            <label class="form-label">Pre-Requirements <span style="color:#D3D3D3;font-size: 90%;">(Optional) </span></label>
                                            <div class="form-label">
                                                <input type="text" class="form-control" placeholder="pre-requirements" name="pre_requirements">
                                            </div>
                                            <label class="form-label">Additional information <span style="color:#D3D3D3;font-size: 90%;">(Optional)</span></label>
                                            <div class="form-label">
                                                <input type="text" class="form-control" placeholder="additional information" name="additional_information">
                                            </div>
                                        </section>
                                        <h3>Pricings </h3>
                                        <section>
                                            <div class="control-group form-group mb-2">
                                                <label class="form-label">Course type <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                <select class="form-control form-select select2" name="course_type" data-bs-placeholder="Paid /free" required>
                                                    <option value="paid">paid</option>
                                                    <option value="free">Free</option>

                                                </select>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Orginal Cost <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                <input type="number" class="form-control" name="original_cost" placeholder="0,000 INR" required>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Discount % <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                <input type="number" class="form-control" name="discount" placeholder="0-100 %" required>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Final cost <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                <input type="number" class="form-control" name="final_cost" placeholder="0,000 INR" required>
                                            </div>
                                        </section>
                                        <h3>Uploadings </h3>
                                        <section>

                                            <div class="control-group form-group">
                                                <label class="form-label">Main Image (1200px*800px) <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                <input type="file" class="form-control" name="main_image" placeholder="Choose File" width="540" height="300" required>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">Inner image (600px*600px) <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                <input type="file" class="form-control" name="inner_image" placeholder="Choose File" width="540" height="300" required>
                                            </div>
                                            <div class="control-group form-group">
                                                <label class="form-label">image2(1200px*800px) <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span> <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                <input type="file" class="form-control" name="image2" placeholder="Choose File" width="540" height="300" required>
                                            </div>
                                        </section>
                                        <button name="create" value="submit" type="submit" class="btn btn-primary mt-3 mb-0" style="text-align:right">Finish</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row closed -->


                </div>
                <!-- Container closed -->
            </div>
            <!-- main-content closed -->
        </form>



        <!-- Footer opened -->
        <div class="main-footer">
            <div class="container-fluid pd-t-0-f ht-100p">
                Copyright © 2023 <a href="www.triaright.in" class="text-primary">triaright</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="http://www.mycompany.co.in"> my company</a> .
                All rights reserved
            </div>
        </div>
        <!-- Footer closed -->

    </div>
    <!-- End Page -->

    <?php include("./scripts.php"); ?>
</body>

</html>