<?php
session_start();
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
    <title>Compose</title>

    <?php include("./links.php"); ?>
</head>

<body class="ltr main-body app sidebar-mini">

    <!-- Page -->
    <div class="page">

        <div>
            <?php include("./partials/sidebar.php"); ?>
            <form action="" method="POST" enctype="multipart/form-data">
                <!-- main-content -->
                <div class="main-content app-content">
                    <!-- container -->
                    <div class="main-container container-fluid">
                        <!-- breadcrumb -->
                        <div class="breadcrumb-header justify-content-between">
                            <div class="left-content">
                                <span class="main-content-title mg-b-0 mg-b-lg-1" style="color: #ff6700"> Compose
                                    Mail</span>
                            </div>
                        </div>
                        <?php
                        if (isset($_SESSION["mail_sent"]) && !empty($_SESSION["mail_sent"])) {
                            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>" . $_SESSION['mail_sent'] . "</div> ";
                            unset($_SESSION["mail_sent"]);
                        }
                        ?>
                        <div class="row row-sm">
                            <div class="form-group col-md-6">
                                <label for="dropdown">Recipient</label>
                                <select id="dropdown1" onchange="showOptions1()" name="recipient" required
                                    class="form-select">
                                    <option value="Superadmin">Super Admin</option>
                                    <option value="Student">Trainer</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4" id="optionsDiv" style="display:none">
                                <label for="exampleInputAadhar">User ID</label>
                                <select name="User_ID" required class="form-select">
                                    <option value="ALL"></option>
                                    <?php
                                    $student_id = $_COOKIE['student_id'];
                                    $course_registration_query = mysqli_query($conn, "SELECT * FROM `course_registration` WHERE `student_id` = '{$student_id}'");
                                    if (mysqli_num_rows($course_registration_query) > 0) {
                                        while ($row = mysqli_fetch_assoc($course_registration_query)) {
                                            $student_allocate_query = mysqli_query($conn, "SELECT * FROM `student_allocate` WHERE `student_id` = '{$row['student_id']}' AND `course_id` = '{$row['course_id']}'");
                                            if (mysqli_num_rows($student_allocate_query) > 0) {
                                                $fetch_allocate_id = mysqli_fetch_assoc($student_allocate_query)['allocate_id'];
                                                $trainer_allocate_course_query = mysqli_query($conn, "SELECT * FROM `allocate_trainer_course` WHERE `allocate_id` = '{$fetch_allocate_id}'");
                                                if (mysqli_num_rows($trainer_allocate_course_query) > 0) {
                                                    $fetch_trainer_id = mysqli_fetch_assoc($trainer_allocate_course_query)['trainer_id'];
                                                    $trainer_query = mysqli_query($conn, "SELECT * FROM `trainer` WHERE `id` = '{$fetch_trainer_id}'");
                                                    $trainer = mysqli_fetch_assoc($trainer_query);
                                                    echo "<option value='{$trainer['email']}'>{$trainer['name']} | TID_{$trainer['id']} | Username : {$trainer['username']}</option>";
                                                }
                                            }
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>
                        <!-- row -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="">
                                            <div class="row row-xs formgroup-wrapper">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputCompanyPhone"
                                                            style="color: #ff6700"><b>Subject</b></label>
                                                        <input type="text" class="form-control"
                                                            id="exampleInputCompanyPhone" placeholder="Enter Subject"
                                                            name="subject" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputAadhar"
                                                            style="color: #ff6700"><b>Purpose</b></label>
                                                        <select name="purpose" class="form-select" required>
                                                            <option value="query">query</option>
                                                            <option value="feedback">feedback</option>
                                                            <option value="issue">issue</option>
                                                            <option value="General">General</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-label">
                                                        <label for="exampleInputAadhar"
                                                            style="color: #ff6700"><b>Describe</b></label>
                                                        <input class="form-control" placeholder="Textarea"
                                                            name="message" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="exampleInputcode">Add Attachments</label>
                                                        <input type="file" class="form-control" id="exampleInputcode"
                                                            placeholder="" name="add_attachments">
                                                    </div>
                                                </div>
                                                <button type="submit" name="submit" class="btn btn-primary mt-3 mb-0"
                                                    style="text-align: right">send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Container closed -->
                </div>
            </form>



        </div>
        <!-- End Page -->

        <!-- BACK-TO-TOP -->
        <a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

        <?php include("./scripts.php") ?>
        <script>
        function showOptions1() {
            var type = document.getElementById("dropdown1");
            if (type.value == "Student") {
                document.getElementById("optionsDiv").style.display = "block";
            } else {
                document.getElementById("optionsDiv").style.display = "none";

            }

        }
        </script>
</body>

</html>