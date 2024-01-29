<?php
session_start();
include('./db_connection/connection.php');

if (isset($_COOKIE['student_username']) && isset($_COOKIE['student_password'])) {
    header('location: ./Student/dashboard.php');
    exit();
}
if (isset($_POST['loginBtn'])) {


    $username = $_POST['student_username'];
    $password = $_POST['password'];
    $_SESSION['check'] = "Working";
    $sql = "SELECT * FROM `student` WHERE username = ?";
    $sql_run = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($sql_run, "s", $username);

    mysqli_stmt_execute($sql_run);

    $result = mysqli_stmt_get_result($sql_run);

    $fetch_details = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        $fetch_username = $fetch_details['username'];
        $fetch_password = $fetch_details['password'];
        $fetch_email = $fetch_details['email'];

        if (password_verify($password, $fetch_password) && $username == $fetch_username) {
            setcookie("student_username", $fetch_username, time() + (86400 * 30), "/");
            setcookie("student_password", $fetch_password, time() + (86400 * 30), "/");
            setcookie("student_email", $fetch_email, time() + (86400 * 30), "/");
            header("location: ./Student/dashboard.php");
            exit();
        } else {
            $_SESSION['message_failed'] = true;
            $_SESSION["err_msg"] = "Username or Password Does Not Match.";
        }
    } else {
        $_SESSION['message_failed'] = true;
        $_SESSION["err_msg"] = "No Student Found";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Log-In</title>
    <?php
    include("links.php");
    ?>
</head>

<body>
    <section>
        <?php include("./partials/navbar.php"); ?>
    </section>

    <?php
    if (isset($_SESSION['message_failed']) && $_SESSION['message_failed'] == true) {
        echo "<script>toastr.error('" . $_SESSION["err_msg"] . "')</script>";
        session_destroy();
    }

    ?>

    <div class="main">

        <!--login section start-->
        <section class="section section-lg section-header position-relative min-vh-100 flex-column d-flex justify-content-center" style="background: url(./assets/background/abstract-design-purple-flowing-lines.jpg)no-repeat center bottom / cover">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-7 col-lg-6">
                        <div class="hero-content-left text-white">
                            <h1 class="display-2">Welcome<br> Student !</h1>
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
                                <form class="login-signup-form" action="" method="post">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Student Username</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-icon">
                                                <i class="bi bi-envelope"></i>
                                            </div>

                                            <input type="text" class="form-control" name="student_username" placeholder="Enter Username" required value="">
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
                                    <button class="btn btn-block btn-secondary mt-4 mb-3" type="submit" name="loginBtn">Sign
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