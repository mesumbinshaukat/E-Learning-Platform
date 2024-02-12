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
    <title>Compose</title>

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
            <form action="../superadmin/connection_files/create/student_chat_create.php" method="POST"
                enctype="multipart/form-data">
                <!-- main-content -->
                <!-- main-content -->
                <div class="main-content app-content">

                    <!-- container -->
                    <div class="main-container container-fluid">


                        <!-- breadcrumb -->
                        <div class="breadcrumb-header justify-content-between">
                            <div class="left-content">
                                <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Compose
                                    Mail</span>
                            </div>

                        </div>

                        <div class="row row-sm">
                            <div class="form-group col-md-12">
                                <label for="dropdown">Receipant</label>
                                <select id="dropdown1" onchange="showOptions1()" name="Receipant" required
                                    class="form-control form-select select2" data-bs-placeholder="Select Country">
                                    <option value="superadmin">TriaRight</option>
                                    <option value="Trainer">Trainer</option>
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
                                if (harsha === "Trainer") {
                                    document.getElementById("optionsDiv").innerHTML = `

			<label for="exampleInputAadhar" >User ID</label>
<select name="User_ID"  required class="form-control form-select select2" data-bs-placeholder="Select Country">
<option value="35">TRTRA_35_demotrainer_Voice process</option>
<option value="35">TRTRA_35_demotrainer_Voice process</option>
<option value="35">TRTRA_35_demotrainer_Voice process</option>
<option value="35">TRTRA_35_demotrainer_Voice process</option>
<option value="35">TRTRA_35_demotrainer_Voice process</option>
<option value="35">TRTRA_35_demotrainer_Voice process</option>
<option value="35">TRTRA_35_demotrainer_Voice process</option>
<option value="35">TRTRA_35_demotrainer_Voice process</option>
<option value="35">TRTRA_35_demotrainer_Voice process</option>
<option value="35">TRTRA_35_demotrainer_Voice process</option>
<option value="35">TRTRA_35_demotrainer_Voice process</option>
	
</select>

`;
                                } else {
                                    document.getElementById("optionsDiv").innerHTML = `
				<label for="exampleInputAadhar" hidden>User ID</label>
				<select name="User_ID" hidden required class="form-control form-select select2" data-bs-placeholder="Select Country">
				<option value="ALL"></option>
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
                                                        <input class="form-control" placeholder="Textarea"
                                                            name="Describe" required>
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

        <?php include("./scripts.php") ?>
</body>

</html>