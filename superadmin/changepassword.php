<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['superadmin_username']) && !isset($_COOKIE['superadmin_password'])) {
    header('location: ../super-admin_login.php');
    exit();
}

if (isset($_POST["submit"])) {

    $username = $_COOKIE['superadmin_username'];
    $password = $_COOKIE['superadmin_password'];
    $email = $_COOKIE['superadmin_email'];

    $new_password = $_POST['new_pass'];
    $match_password = $_POST['match_pass'];

    if ($new_password === $match_password) {
        $hash_pass = password_hash($new_password, PASSWORD_DEFAULT);
        $update_query = mysqli_prepare($conn, "UPDATE `superadmin` SET `password` = ? WHERE `email` = '$email'");
        $update_query->bind_param("s", $hash_pass);
        if ($update_query->execute()) {
            unset($_COOKIE['superadmin_password']);
            setcookie("superadmin_password", $hash_pass, time() + (86400 * 30), "/");
            $_SESSION["success"] = "Password changed successfully";
            header('location: changepassword.php');
        }
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
    <?php include("./style.php"); ?>

</head>

<body class="ltr main-body app sidebar-mini">
    <?php include("./switcher.php") ?>

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

        </div>
        <!-- main-content -->
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
                <form method="post">
                    <?php if (isset($_SESSION["success"])) { ?>
                    <div class="d-flex justify-content-center">
                        <div class="alert alert-success" role="alert">
                            <?php echo $_SESSION["success"]; ?>
                        </div>
                    </div>
                    <?php session_destroy();
                    } ?>
                    <div class="row">

                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row row-xs formgroup-wrapper">



                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword">Current Password</label>
                                                <input type="password" class="form-control" oninput="CheckPassword()"
                                                    id="current_password" placeholder="Enter Current Password">
                                                <p class="text-danger" id="current_password_msg">Incorrect Password</p>
                                            </div>
                                            <?php
                                            $username = $_COOKIE["superadmin_username"];
                                            $query = mysqli_query($conn, "SELECT `password` FROM `superadmin` WHERE `username`='$username'");
                                            $current_password = mysqli_fetch_assoc($query)["password"];
                                            ?>
                                            <script>
                                            let check = false;
                                            const current_password = '<?php echo $current_password; ?>';
                                            const cookie_password = '<?php echo $_COOKIE["superadmin_password"]; ?>'

                                            function CheckPassword() {
                                                const inputPassword = document.getElementById('current_password').value;
                                                const passwordMsg = document.getElementById('current_password_msg');


                                                if (current_password === inputPassword || inputPassword ===
                                                    cookie_password) {
                                                    check = true;
                                                    passwordMsg.textContent = 'Password Matched';
                                                    passwordMsg.classList.remove('text-danger');
                                                    passwordMsg.classList.add('text-success');
                                                } else {
                                                    check = false;
                                                    passwordMsg.textContent = 'Incorrect Password';
                                                    passwordMsg.classList.remove('text-success');
                                                    passwordMsg.classList.add('text-danger');
                                                }

                                                if (check === true) {
                                                    document.querySelector('#new_pass').removeAttribute('disabled');
                                                    document.querySelector('#match_pass').removeAttribute('disabled');
                                                    document.querySelector('#submit').removeAttribute('disabled');

                                                } else {
                                                    document.querySelector('#new_pass').setAttribute('disabled', true);
                                                    document.querySelector('#match_pass').setAttribute('disabled',
                                                        true);
                                                    document.querySelector('#submit').setAttribute('disabled', true);
                                                }
                                            }
                                            </script>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword">New Password</label>
                                                <input type="text" class="form-control" id="new_pass"
                                                    placeholder="Enter New Passowrd" disabled>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword">Re-Enter New Password</label>
                                                <input type="text" class="form-control" id="match_pass"
                                                    placeholder="Re-Enter New Passowrd" disabled>
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-info mt-3 mb-0" data-bs-target="#schedule"
                                        data-bs-toggle="modal" style="text-align:right" name="submit" id="submit"
                                        disabled>Change
                                        Password</button>

                                </div>
                            </div>
                        </div>
                    </div>

                </form>


            </div>
            <!-- Container closed -->
        </div>



        <div class="modal fade" id="schedule">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                            class="btn-close" data-bs-dismiss="modal" type="button"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">

                        <p> Are you sure you want to change the password??</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn ripple btn-success" type="button">Change</button>
                        <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not Now</button>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- End Page -->


    <?php include("./scripts.php"); ?>

</body>

</html>