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
    <title>Change Password</title>

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
            <!-- main-content -->
            <div class="main-content app-content">

                <!-- container -->
                <div class="main-container container-fluid">


                    <!-- breadcrumb -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="left-content">
                            <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Change
                                Password</span>
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
                                    <form method="post" name="frmPassword" action="pwd.php">


                                        <div class="">
                                            <div class="row row-xs formgroup-wrapper">








                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword">Current Password</label>
                                                        <input type="password" data-pristine-equals="#pwd"
                                                            data-pristine-equals-message="Passwords don't match"
                                                            class="form-control" name="oldpassword" id="oldpassword"
                                                            required />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword">New Password</label>
                                                        <input type="password" required
                                                            data-pristine-required-message="Please Enter a new password"
                                                            data-pristine-pattern="/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/"
                                                            data-pristine-pattern-message="Minimum 8 characters, at least one uppercase letter, one lowercase letter and one number"
                                                            class="form-control" name="newpassword" id="newpassword"
                                                            value="" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword">Re-Enter New Password</label>
                                                        <input type="password" data-pristine-equals="#pwd"
                                                            data-pristine-equals-message="Passwords don't match"
                                                            class="form-control" name="confirmpassword"
                                                            id="confirmpassword" value="" />
                                                    </div>
                                                </div>












                                            </div>
                                            <button type="submit" class="btn btn-info mt-3 mb-0" name="change_pwd"
                                                value="Change Password" onclick="return check()">Change
                                                password</button>
                                            <input type="hidden" name="id" id="id" value="" />
                                            <input type="hidden" name="action" id="change_pwd" value="changepwd" />
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- Container closed -->
            </div>

            <script type="text/javascript">
            function check() {
                var a = document.getElementById('oldpassword').value;
                var b = document.getElementById('newpassword').value;
                var c = document.getElementById('confirmpassword').value;
                if (b != c) {
                    $(".show_error").find(".alert").html("<p>Password doesnt match</p>");
                    $(".show_error").show();
                    return false;
                } else if (a != 'Mycompany@123') {
                    $(".show_error").find(".alert").html("<p>Old password doesnt matched</p>");
                    $(".show_error").show();
                    return false;
                } else
                    return true;
            }
            </script>

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
                            <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                Now</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Footer opened -->
            <div class="main-footer">
                <div class="container-fluid pd-t-0-f ht-100p">
                    Copyright © 2023 <a href="www.triaright.com" class="text-primary">triaright</a>. Designed with <span
                        class="fa fa-heart text-danger"></span> by <a href="http://www.mycompany.co.in"> my company</a>
                    . All rights reserved
                </div>
            </div>
            <!-- Footer closed -->

        </div>
        <!-- End Page -->

        <!-- BACK-TO-TOP -->
        <a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

        <?php include("./scripts.php") ?>
</body>

</html>