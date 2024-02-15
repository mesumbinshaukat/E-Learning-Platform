<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['college_username']) && !isset($_COOKIE['college_password'])) {
    header('location: ../college_login.php');
    exit();
}

$college_query = "SELECT * FROM college WHERE username = '" . $_COOKIE['college_username'] . "' AND password = '" . $_COOKIE['college_password'] . "'";

$college_result = mysqli_query($conn, $college_query);

$college = mysqli_fetch_assoc($college_result);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Compose</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">
    <?php include("./style.php") ?>
</head>

<body class="ltr main-body app sidebar-mini">

    <!-- Page -->
    <div class="page">

        <div>

            <div class="main-header side-header sticky nav nav-item">
                <?php include("./partials/navbar.php") ?>
            </div>
            <!-- /main-header -->

            <!-- main-sidebar -->
            <div class="sticky">
                <?php include("./partials/sidebar.php"); ?>
            </div>
            <!-- main-sidebar -->

        </div>

        <form action="" method="POST" enctype="multipart/form-data">

            <!-- main-content -->
            <!-- main-content -->
            <div class="main-content app-content">

                <!-- container -->
                <div class="main-container container-fluid">


                    <!-- breadcrumb -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="left-content">
                            <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Compose Mail</span>
                        </div>

                    </div>

                    <div class="row row-sm">
                        <div class="form-group col-md-6">
                            <label for="dropdown">Receipant</label>
                            <select id="dropdown1" onchange="showOptions1()" name="Receipant" required
                                class="form-control form-select select2" data-bs-placeholder="Select Country">
                                <option value="superadmin">Super Admin</option>

                                <option value="Student">Student</option>
                            </select>
                        </div>


                        <div class="form-group col-md-4" id="optionsDiv">
                            <label for="exampleInputAadhar" hidden>User ID</label>
                            <select name="User_ID" hidden required class="form-control form-select select2"
                                data-bs-placeholder="Select Country">
                                <option value="ALL"></option>
                            </select>
                        </div>

                        <script>
                        function showOptions1() {
                            var harsha = document.getElementById("dropdown1").value;
                            if (harsha === "Student") {

                                document.getElementById("optionsDiv").innerHTML = `

<label for="exampleInputAadhar">User ID</label>
<select name="student" required class="form-control form-select select2" data-bs-placeholder="Select Student">
	<?php  ?>
</select>

`;
                            } else {
                                document.getElementById("optionsDiv").innerHTML = `
			<label for="exampleInputAadhar" hidden>User ID</label>
			<select name="User_ID" required hidden class="form-control form-select select2" data-bs-placeholder="Select Country">
			<option value="ALL">ALL</option>
			</select>
			`;
                            }
                        }
                        </script>


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
                                                        style="color:#ff6700"><b>Subject</b></label>
                                                    <input type="text" class="form-control"
                                                        id="exampleInputCompanyPhone" placeholder="Enter Subject"
                                                        name="Subject" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputAadhar"
                                                        style="color:#ff6700"><b>Purpose</b></label>
                                                    <select name="Purpose" class="form-control form-select select2"
                                                        data-bs-placeholder="Select Country" required>
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
                                                        style="color:#ff6700"><b>Describe</b></label>
                                                    <input class="form-control" placeholder="Textarea" name="Describe"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputcode">add attachments</label>
                                                    <input type="file" class="form-control" id="exampleInputcode"
                                                        placeholder="" name="add_attachments" required>
                                                </div>
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-primary mt-3 mb-0"
                                                data-bs-target="#send" data-bs-toggle="modal"
                                                style="text-align:right">send</button>
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
    <?php include("./script.php"); ?>
</body>

</html>