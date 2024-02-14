<?php
if (!isset($_COOKIE['student_username']) && !isset($_COOKIE['student_password'])) {
    header('location: ../student_login.php');
    exit();
}
include('../db_connection/connection.php');
if (isset($_POST["change_pwd"])) {
    $student_id = $_COOKIE['student_id'];
    $old_password = $_POST['oldpassword'];
    $new_password = $_POST['newpassword'];
    $confirm_password = $_POST['confirmpassword'];


    $query = "SELECT `password` FROM `student` WHERE `id` = '$student_id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $current_password_hash = $row['password'];


        if (password_verify($old_password, $current_password_hash)) {
 
            if ($new_password === $confirm_password) {

                $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                

                $update_query = "UPDATE `student` SET `password` = '$new_password_hash' WHERE `id` = '$student_id'";
                if (mysqli_query($conn, $update_query)) {

                    $_SESSION['success'] = "Password changed successfully";
                    header('location: dashboard.php');
                    exit();
                } else {
                    echo "Error updating password: " . mysqli_error($conn);
                }
            } else {
                echo "New password and confirm password do not match";
            }
        } else {

            echo "Old password is incorrect";
        }
    } else {

        echo "Student ID not found";
    }
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
    <title>Change Password</title>
    <?php include("./links.php"); ?>
</head>

<body class="ltr main-body app sidebar-mini">
    <!-- Loader -->
    <!-- <div id="global-loader">
        <img src="assets/img/preloader.svg" class="loader-img" alt="Loader">
    </div> -->
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
                            <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Change Password</span>
                        </div>
                        <div class="justify-content-center mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Change Password</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Password</li>
                                <li class="breadcrumb-item active" aria-current="page">Change</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /breadcrumb -->
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="show_error" style="display:none;">
                                <div class="alert alert-danger">
                                    <p></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <form method="post">
                                        <div class="row row-xs formgroup-wrapper">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword">Current Password</label>
                                                    <input type="password" class="form-control" name="oldpassword" id="oldpassword" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword">New Password</label>
                                                    <input type="password" class="form-control" name="newpassword" id="newpassword" required />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword">Re-Enter New Password</label>
                                                    <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" required />
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info mt-3 mb-0" name="change_pwd">Change password</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container closed -->
            </div>
        </div>
        <!-- End Page -->
        <!-- BACK-TO-TOP -->
        <a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>
        <?php include("./scripts.php") ?>
</body>

</html>