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
                                            const current_password = '<?php echo $current_password; ?>';

                                            function CheckPassword() {
                                                const inputPassword = document.getElementById('current_password').value;
                                                const passwordMsg = document.getElementById('current_password_msg');


                                                if (current_password === inputPassword) {
                                                    passwordMsg.textContent = 'Password Matched';
                                                    passwordMsg.classList.remove('text-danger');
                                                    passwordMsg.classList.add('text-success');
                                                } else {
                                                    passwordMsg.textContent = 'Incorrect Password';
                                                    passwordMsg.classList.remove('text-success');
                                                    passwordMsg.classList.add('text-danger');
                                                }
                                            }
                                            </script>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword">New Password</label>
                                                <input type="text" class="form-control" id="exampleInputName"
                                                    placeholder="Enter New Passowrd">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword">Re-Enter New Password</label>
                                                <input type="text" class="form-control" id="exampleInputName"
                                                    placeholder="Re-Enter New Passowrd">
                                            </div>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-info mt-3 mb-0" data-bs-target="#schedule"
                                        data-bs-toggle="modal" style="text-align:right">Change Password</button>

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