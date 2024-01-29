<!DOCTYPE html>
<html lang="en">



<head>
    <title>Trainer Log-In</title>
    <?php
    include("links.php")
    ?>

</head>

<body>

    <section>
        <?php include("./partials/navbar.php"); ?>
    </section>

    <div class="main">

        <!--login section start-->
        <section class="section section-lg section-header position-relative min-vh-100 flex-column d-flex justify-content-center" style="background: url(./assets/background/abstract-design-purple-flowing-lines.jpg)no-repeat center bottom / cover">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-7 col-lg-6">
                        <div class="hero-content-left text-white">
                            <h1 class="display-2">Welcome<br> Trainer !</h1>
                            <p class="lead">
                                Expereince your dashboard at more ease and security
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5">
                        <div class="card login-signup-card shadow-lg mb-0">
                            <div class="card-body px-md-5 py-5">
                                <div class="mb-5">
                                    <h3>Login</h3>
                                    <p class="text-muted">Sign in to your account to continue.</p>
                                </div>

                                <!--login form-->
                                <form class="login-signup-form" action="trainer.php.html" method="POST">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Trainer Username</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>

                                            <input type="text" class="form-control" name="Trainer_Username" placeholder="Enter Username" required value="">
                                            <span class="error"></span><br>


                                        </div>
                                    </div>
                                    <!-- Password -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col">
                                                <label class="font-weight-bold">Password</label>
                                            </div>
                                            <!--<div class="col-auto">
                                                <a href="password-reset.html" class="form-text small text-muted">
                                                    Forgot password?
                                                </a>
                                            </div> -->
                                        </div>
                                        <div class="input-group input-group-merge">
                                            <div class="input-icon">
                                                <i class="bi bi-lock"></i>
                                            </div>

                                            <input type="password" name="password" class="form-control" placeholder="Enter your password">
                                            <span class="error"></span><br>

                                        </div>
                                    </div>

                                    <!-- Submit -->
                                    <button class="btn btn-block btn-secondary mt-4 mb-3" name="sign_in">Sign
                                        in</button>
                                    <span class="error"></span>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--login section end-->


    </div>

</body>



</html>