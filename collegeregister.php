<?php
include("./db_connection/connection.php");
if (isset($_POST['submit'])) {
    $college_name = $_POST['college_name'];
    $phone_number = $_POST['phone_number'];
    $regex_email = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    $college_mail_id = $_POST['college_mail_id'];
    $college_username = $_POST['college_username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = mysqli_prepare($conn, "INSERT INTO `college` (`name`, `username`, `password`, `email`, `contact_number`) 
              VALUES (?,?,?,?,?)");
    $query->bind_param("sssss", $college_name, $college_username, $password, $college_mail_id, $phone_number);
    if (preg_match($regex_email, $college_mail_id) == 1) {
        if ($query->execute()) {
            $_SESSION['message_success'] = true;
            header('Location: collegeregister.php');
            exit();
        } else {
            $_SESSION['message_failed'] = true;
            $_SESSION["err_msg"] = "Database Error, Unable to register.";
        }
    } else {
        $_SESSION['message_failed'] = true;
        $_SESSION["err_msg"] = "Invalid Email Format";
    }
}
$_SESSION['previous_url'] = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>College Registration</title>

    <?php
    include("links.php")

    ?>
</head>

<body>
    <script>
        <?php
        if (isset($_SESSION['message_success']) && $_SESSION['message_success'] == true) {
        ?>
            toastr.success('Registration Successful')
        <?php
            session_destroy();
        } else if (isset($_SESSION['message_failed']) && $_SESSION['message_failed'] == true) {
        ?>
            toastr.error(<?php echo $_SESSION["err_msg"]; ?>)
        <?php
            session_destroy();
        }
        ?>
    </script>
    <section>
        <?php include("./partials/navbar.php"); ?>
    </section>

    <div class="main">

        <!--sign up section start-->

        <section class="section section-lg section-header position-relative min-vh-100 flex-column d-flex justify-content-center">
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

                                            <input type="text" name="college_name" class="form-control" placeholder="Enter your college name" required>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="font-weight-bold">
                                            Phone No
                                        </label>
                                        <!-- Input group -->
                                        <div class="input-group input-group-merge">

                                            <input type="text" maxlength="10" pattern=[0-9]{1}[0-9]{9} name="phone_number" class="form-control" placeholder="1234567890" required max="9999999999" min="1000000000">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="font-weight-bold">
                                            Email Address
                                        </label>
                                        <!-- Input group -->
                                        <div class="input-group input-group-merge">

                                            <input type="email" name="college_mail_id" class="form-control" placeholder="name@address.com" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="font-weight-bold">
                                            College Username
                                        </label>
                                        <!-- Input group -->
                                        <div class="input-group input-group-merge">

                                            <input type="text" name="college_username" class="form-control" placeholder="Enter College name" required minlength=8 maxlenght=16>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="font-weight-bold">
                                            Password
                                        </label>
                                        <!-- Input group -->
                                        <div class="input-group input-group-merge">

                                            <input type="password" name="password" class="form-control" id='password' placeholder="Enter your password" minlength=8 maxlenght=10 required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <!-- Label -->
                                        <label class="font-weight-bold">
                                            Re-Enter password
                                        </label>
                                        <!-- Input group -->
                                        <div class="input-group input-group-merge">

                                            <input type="password" class="form-control" id='retypepassword' placeholder="Re-Enter your password" minlength=8 maxlength=10 required>
                                        </div>
                                    </div>

                                    <!-- Submit -->
                                    <button class="btn btn-block btn-secondary border-radius mt-4 mb-3" name="submit" value="submit" type="submit" onclick="return check()">
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


</body>

</html>