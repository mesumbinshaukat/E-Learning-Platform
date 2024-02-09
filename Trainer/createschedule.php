<?php 
include('../db_connection/connection.php');
if (!isset($_COOKIE['trainer_username']) && !isset($_COOKIE['trainer_password'])) {
	header('location: ../trainer_login.php');
	exit();
}
if(isset($_POST['CreateBtn'])){
	$scheduled_date = $_POST['scheduled_date'];
	$main_topic = $_POST['main_topic'];
	$Duration = $_POST['Duration'];
	$tasks = $_POST['tasks'];
	$Shared_Documents_name = $_FILES['Shared_Documents']['name'];
	$Shared_Documents_tmpname = $_FILES['Shared_Documents']['tmp_name'];
	$Topics_to_be_covered = $_POST['Topics_to_be_covered'];
	$Training_Starting_time = $_POST['Training_Starting_time'];
	$Training_Ending_time = $_POST['Training_Ending_time'];
	$insert_query = mysqli_prepare($conn, "INSERT INTO `scheduling_internship`( `date_of_schedule`, `main_topic`, `class_duration`, `tasks`, `shared_documents`, `topics_to_be_covered`, `class_starting_time`, `class_ending_time`) VALUES (?,?,?,?,?,?,?,?)");
	$insert_query->bind_param("ssssssss",$scheduled_date,$main_topic,$Duration,$tasks,$Shared_Documents_name,$Topics_to_be_covered,$Training_Starting_time,$Training_Ending_time);
	if($insert_query->execute()){
		$_SESSION['message_success'] = true;
		move_uploaded_file($Shared_Documents_tmpname, "./assets/docs/supportive_docs/" . $Shared_Documents_name);
		header("location:createschedule.php");
	}
	else{
		$_SESSION['message_failed'] = true;
		$_SESSION["err_msg"] = "Unexpected Error. Please fill the correct details according to the required format.";
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

    <!-- Title -->
    <title> TriaRight: The New Era of Learning</title>

    <?php 
	 include('./style.php'); 
	  ?>


</head>

<body class="ltr main-body app sidebar-mini">

    <?php 
	 include('./switcher.php'); 
	  ?>

<?php
	if (isset($_SESSION['message_success']) && $_SESSION['message_success'] == true) {
		echo "<script>toastr.success('Schedule Created Successfully')</script>";
		session_destroy();
	}
	?>

    <?php
	if (isset($_SESSION['message_failed']) && $_SESSION['message_failed'] == true) {
		echo "<script>toastr.error('" . $_SESSION["err_msg"] . "')</script>";
		session_destroy();
	}
	?>
    <!-- Loader -->
    <!-- <div id="global-loader">
        <img src="assets/img/preloader.svg" class="loader-img" alt="Loader">
    </div> -->
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">

        <div>

            <div class="main-header side-header sticky nav nav-item">
                <?php include('./partials/navbar.php')?>
            </div>
            <!-- /main-header -->

            <!-- main-sidebar -->
            <div class="sticky">
                <?php include('./partials/sidebar.php')?>
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
                            <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Create
                                Schedule</span>
                        </div>
                        <div class="justify-content-center mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Internship Management</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Schedule</li>
                                <li class="breadcrumb-item active" aria-current="page">Create</li>
                            </ol>
                        </div>
                    </div>


                    <br>

                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">


                                    <div class="">
                                        <div class="row row-xs formgroup-wrapper">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputDOB">Date of Schedule</label>
                                                    <input class="form-control" name="scheduled_date" id="dateMask"
                                                        placeholder="MM/DD/YYYY" type="date" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPersonalPhone">Main Topic</label>
                                                    <input type="text" class="form-control" name="main_topic"
                                                        id="exampleInputPersonalPhone" placeholder="Enter Main Topic"
                                                        required>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputcode">Duration</label>
                                                    <input type="number" class="form-control" min="1" name="Duration"
                                                        id="exampleInputcode" placeholder="Enter Duration" required>
                                                </div>
                                            </div>




                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputAadhar">Tasks</label>
                                                    <select name="tasks" class="form-control form-select select2"
                                                        data-bs-placeholder="Select Batch" required>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputcode"> Shared Documents</label>
                                                    <input type="file" name="Shared_Documents" class="form-control"
                                                        id="exampleInputcode" placeholder="">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputAadhar">Topics to be covered</label>
                                                    <input type="text" name="Topics_to_be_covered" class="form-control"
                                                        id="exampleInputAadhar" placeholder="Topics List" required>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputUserName">Class Starting Time</label>
                                                    <input name="Training_Starting_time" class="form-control"
                                                        id="start-date" placeholder="" type="time" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputUserName">Class Ending time </label>
                                                    <input name="Training_Ending_time" class="form-control"
                                                        id="end-date" placeholder="" type="time" required>
                                                    <div id="message" style="color:red"></div>
                                                </div>
                                            </div>

                                            <!-- <script>
                                            function checkDateRange() {
                                                const startDate = new Date(document.getElementById("start-date").value);
                                                const endDate = new Date(document.getElementById("end-date").value);

                                                if (startDate < endDate) {
                                                    document.getElementById("message").textContent = "";
                                                    return true;
                                                } else {
                                                    document.getElementById("message").textContent =
                                                        "Start date is greater than or equal to end date.";
                                                    return false;
                                                }
                                            }
                                            </script> -->

                                        
                                        </div>
                                        <button type="submit" name="CreateBtn" onclick="return checkDateRange()"
                                            class="btn btn-info mt-3 mb-0" data-bs-target="#schedule"
                                            data-bs-toggle="modal" style="text-align:right">Schedule</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- Container closed -->
            </div>
        </form>


        <!-- <div class="modal fade" id="schedule">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <p> Are you sure you want to schedule a day??</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-success" type="button">Create</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not Now</button>
                                </div>
                            </div>
                        </div>
                    </div>

             -->

    </div>
    <!-- End Page -->

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

    <!-- JQUERY JS -->
    <?php 
	 include('./script.php'); 
	  ?>
</body>

<!-- Mirrored from laravel8.spruko.com/nowa/emptypage by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:32:40 GMT -->

</html>