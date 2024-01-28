<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="../assets/img/web/icon.png">
    <!--<link rel="shortcut icon" href="assets/img/web/icon.png" type="image/png" sizes="16x16">-->


    <title>College Registration</title>


    <link rel="stylesheet" href="assets/css/main.css">
    <?php
    include("links.php")

    ?>
</head>

<body>

    <section>
        <?php include("./partials/navbar.php"); ?>
    </section>

    <div class="main">

        <!--sign up section start-->

        <section
            class="section section-lg section-header position-relative min-vh-100 flex-column d-flex justify-content-center">
            <div class="container">
                <div class="row align-items-center justify-content-between">

                    <div class="col-md-5 col-lg-15">
                        <div class="card login-signup-card shadow-lg mb-0">
                            <div class="card-body px-md-5 py-5">
                                <div class="mb-5">
                                    <h3>Create Account</h3>
                                    <p class="text-muted">Sign in to your account to continue.</p>
                                </div>
                                <!--sign up form-->
                                <form class="login-signup-form" action="" method="POST">


                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="font-weight-bold">
                                            College Name
                                        </label>
                                        <!-- Input group -->
                                        <div class="input-group input-group-merge">

                                            <input type="text" name="college_name" class="form-control"
                                                placeholder="Enter your college name" required>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="font-weight-bold">
                                            Phone No
                                        </label>
                                        <!-- Input group -->
                                        <div class="input-group input-group-merge">

                                            <input type="text" maxlength="10" pattern=[0-9]{1}[0-9]{9}
                                                class="form-control" placeholder="1234567890" required max="9999999999"
                                                min="1000000000">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="font-weight-bold">
                                            Email Address
                                        </label>
                                        <!-- Input group -->
                                        <div class="input-group input-group-merge">

                                            <input type="email" name="college_mail_id" class="form-control"
                                                placeholder="name@address.com" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="font-weight-bold">
                                            College Username
                                        </label>
                                        <!-- Input group -->
                                        <div class="input-group input-group-merge">

                                            <input type="text" name="college_username" class="form-control"
                                                placeholder="Enter College name" required minlength=8 maxlenght=16>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="font-weight-bold">
                                            Password
                                        </label>
                                        <!-- Input group -->
                                        <div class="input-group input-group-merge">

                                            <input type="password" name="password" class="form-control" id='password'
                                                placeholder="Enter your password" minlength=8 maxlenght=10 required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="font-weight-bold">
                                            Re-Enter password
                                        </label>
                                        <!-- Input group -->
                                        <div class="input-group input-group-merge">

                                            <input type="password" class="form-control" id='retypepassword'
                                                placeholder="Re-Enter your password" minlength=8 maxlength=10 required>
                                        </div>
                                    </div>

                                    <!-- <div>
                                        <input type="checkbox" name="checkbox" id="send_newsletter" required />
                                        By clicking Agree and Join, you agree to the TriaRight <a href="useragreement.html"> User Agreement</a> and <a href="privacypolicy.html"> Privacy policy</a>
                                    </div> -->

                                    <!-- Submit -->
                                    <button class="btn btn-block btn-secondary border-radius mt-4 mb-3" name="submit"
                                        value="submit" type="submit" onclick="return check()">
                                        Register
                                    </button>
                                </form>
                                <script type="text/javascript">
                                function check() {
                                    var b = document.getElementById('password').value;
                                    var c = document.getElementById('retypepassword').value;
                                    if (b != c) {
                                        alert('Password doesnt match');
                                        return false;
                                    } else
                                        return true;
                                }
                                </script>

                            </div>
                            <div class="card-footer bg-soft text-center border-top px-md-5"><small>Already
                                    registered?</small>
                                <a href="college_login.php" class="small"> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--sign up section end-->


    </div>

    <!--scroll bottom to top button start-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </button>
    <!--scroll bottom to top button end-->
    <!--build:js-->
    <script src="assets/js/vendors/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendors/popper.min.js"></script>
    <script src="assets/js/vendors/bootstrap.min.js"></script>
    <script src="assets/js/vendors/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendors/jquery.easing.min.js"></script>
    <script src="assets/js/vendors/mixitup.min.js"></script>
    <script src="assets/js/vendors/headroom.min.js"></script>
    <script src="assets/js/vendors/smooth-scroll.min.js"></script>
    <script src="assets/js/vendors/wow.min.js"></script>
    <script src="assets/js/vendors/owl.carousel.min.js"></script>
    <script src="assets/js/vendors/jquery.waypoints.min.js"></script>
    <!--<script src="assets/js/vendors/countUp.min.js"></script>-->
    <script src="assets/js/vendors/jquery.countdown.min.js"></script>
    <script src="assets/js/vendors/validator.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!--endbuild-->
</body>


<!-- Mirrored from corporx.themetags.com/basic-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2023 13:39:06 GMT -->

</html>