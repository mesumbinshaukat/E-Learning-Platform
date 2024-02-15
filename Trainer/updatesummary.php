<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['trainer_username']) && !isset($_COOKIE['trainer_password'])) {
    header('location: ../trainer_login.php');
    exit();
}

if (isset($_GET['summary_id'])) {
    $id = filter_var($_GET['summary_id'], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $query = "SELECT * FROM `batches_summary` WHERE `id` = '$id'";
    $run = mysqli_query($conn, $query);
    if (!$run) {
        if (isset($_SESSION['previous_url'])) {
            header('Location: ' . $_SESSION['previous_url']);
            exit();
        } else {
            // Fallback redirection if previous_url is not set
            header('Location: ./dashboard.php');
            exit();
        }
    }
    $summary = mysqli_fetch_assoc($run);

    if (!$id) {
        echo "Summary not found!";
        exit();
    }

    if (isset($_POST['UpdateBtn'])) {
        // Updated code here is similar to the createcourse.php file

        // Retrieve updated values
        $Date_of_Summary = $_POST['Date_of_Summary'];
        $Performer_of_the_day = $_POST['Performer_of_the_day'];
        $Topics_Covered = $_POST['Topics_Covered'];
        $Overall_Feedback = $_POST['Overall_Feedback'];
      

        // Update query
        $update_query = "UPDATE `batches_summary` SET `date_of_summary`=?,`performer_of_day`=?,`topics_covered`=?,`overall_feedback`=? WHERE id = ?";
        $update_stmt = mysqli_prepare($conn, $update_query);
        $update_stmt->bind_param(
            "ssssi",$Date_of_Summary,$Performer_of_the_day,$Topics_Covered,$Overall_Feedback,$id   
        );

        if (mysqli_stmt_execute($update_stmt)) {
            session_destroy();
            header("location: managesummary.php");
            exit();
        } else {
            echo mysqli_error($conn);
        }

        mysqli_stmt_close($update_stmt);
    }
} elseif (!isset($_GET["summary_id"]) || empty($_GET["summary_id"])) {
    echo "<script>alert('Error')</script>";
    if (isset($_SESSION['previous_url'])) {
        header('Location: ' . $_SESSION['previous_url']);
        exit();
    } else {
        // Fallback redirection if previous_url is not set
        header('Location: ./dashboard.php');
        exit();
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
    <title>Update Summary</title>

    <?php include("./style.php"); ?>
</head>

<body class="ltr main-body app sidebar-mini">

    <!-- Switcher -->
    <?php include("./switcher.php"); ?>
    <!-- End Switcher -->

    <!-- Page -->
    <div class="page">

        <div class="main-header side-header sticky nav nav-item">

            <?php include('./partials/navbar.php'); ?>

        </div>
        <!-- /main-header -->

        <!-- main-sidebar -->
        <div class="sticky">
            <?php include('./partials/sidebar.php') ?>
        </div>
        <!-- main-sidebar -->


        <form method="POST" enctype="multipart/form-data">
            <!-- main-content -->
            <!-- main-content -->
            <div class="main-content app-content">

                <!-- container -->
                <div class="main-container container-fluid">


                    <!-- breadcrumb -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="left-content">
                            <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Update
                                Summary</span>
                        </div>
                        <div class="justify-content-center mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">batches management</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Summary</li>
                                <li class="breadcrumb-item active" aria-current="page">Update</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /breadcrumb -->


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
                                                <label for="exampleInputDOB">Date of Summary</label>
                                                <input class="form-control" name="Date_of_Summary" id="dateMask"
                                                    placeholder="MM/DD/YYYY" type="date"
                                                    value="<?php echo $summary['date_of_summary']?>" required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputAadhar">Performer of the day</label>
                                                <input type="text" name="Performer_of_the_day" class="form-control"
                                                    id="exampleInputPersonalPhone"
                                                    value="<?php echo $summary['performer_of_day']?>"
                                                    placeholder="Enter candidate name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputAadhar">Topics Covered</label>
                                                <input type="text" name="Topics_Covered" class="form-control"
                                                    id="exampleInputAadhar"
                                                    value="<?php echo $summary['topics_covered']?>"
                                                    placeholder="Topics List" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputAadhar">Overall Feedback</label>
                                                <input type="text" name="Overall_Feedback" class="form-control"
                                                    id="exampleInputAadhar" placeholder="Feedback"
                                                    value="<?php echo $summary['overall_feedback']?>" required>
                                            </div>
                                        </div>


                                    </div>
                                    <button type="submit" name="UpdateBtn" class="btn btn-info mt-3 mb-0"
                                        data-bs-target="#schedule" data-bs-toggle="modal"
                                        style="text-align:right">Update Summary</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <!-- Container closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
    </form>
    </div>


    <!-- JS -->
    <?php include('./script.php'); ?>


</body>

</html>