<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['trainer_username']) && !isset($_COOKIE['trainer_password'])) {
    header('location: ../trainer_login.php');
    exit();
}

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $query = "SELECT * FROM `batches_meetings` WHERE `id` = '$id'";
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
    $meetings = mysqli_fetch_assoc($run);

    if (!$id) {
        echo "Meeting not found!";
        exit();
    }

    if (isset($_POST['UpdateBtn'])) {
        // Updated code here is similar to the createcourse.php file

        // Retrieve updated values
        $data_of_meeting_link = $_POST['data_of_meeting_link'];
        $Platform = $_POST['Platform'];
        $Meeting_link = mysqli_real_escape_string($conn, $_POST['Meeting_link']);
      

        // Update query
        $update_query = "UPDATE `batches_meetings` SET `date_of_meeting_link`= ? ,`platform`= ?,`meeting_link`= ? WHERE `id` = ?";
        $update_stmt = mysqli_prepare($conn, $update_query);
        $update_stmt->bind_param(
            "sssi", $data_of_meeting_link, $Platform, $Meeting_link,$id
           
        );

        if (mysqli_stmt_execute($update_stmt)) {
            session_destroy();
            header("location: managemeetings.php");
            exit();
        } else {
            echo mysqli_error($conn);
        }

        mysqli_stmt_close($update_stmt);
    }
} elseif (!isset($_GET["id"]) || empty($_GET["id"])) {
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
    <title>Update Meetings</title>

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
            <div class="main-content app-content">

<!-- container -->
<div class="main-container container-fluid">

    
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
          <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Update Meetings</span>
        </div>
        <div class="justify-content-center mt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">batches management</a></li>
                <li class="breadcrumb-item active" aria-current="page">Meetings</li>
                <li class="breadcrumb-item active" aria-current="page">Update</li>
            </ol>
        </div>
    </div>
       
                        &nbsp &nbsp	<a href="https://meet.google.com/" class="btn btn-success">Create Meet</a>       								
                        &nbsp &nbsp	<a href="https://zoom.us/" class="btn btn-info">Create Zoom</a>       								
                        &nbsp &nbsp	<a href="https://www.microsoft.com/en-in/microsoft-teams/log-in" class="btn btn-primary">Create Teams</a>       								
                        &nbsp &nbsp	<a href="https://www.webex.com/" class="btn btn-danger">Create Webex</a>       								
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
                                <label for="exampleInputDOB">Date of Meeting link</label>
                                <input class="form-control" name="date_of_meeting_link" id="dateMask" required placeholder="MM/DD/YYYY" value="<?php echo $meetings['date_of_meeting_link']?>" type="date">
                            </div>
                            </div>
                            
                            <div class="col-md-6">
                            <div class="form-group">
                        <label for="exampleInputAadhar">Platform</label>
                        <select name="Platform" required class="form-control form-select select2" data-bs-placeholder="Select Batch">
                            <?php if($meetings['platform'] == "Webex"){?>
                            <option value="webex" selected>Webex</option>
                            <option value="Gmeet">Gmeet</option>
                            <option value="Zoom">Zoom</option>
                            <option value="Microsoft_Teams">Microsoft Teams</option>
                            <?php }?>
                            <?php if($meetings['platform'] == "Gmeet"){?>
                            <option value="webex" >Webex</option>
                            <option value="Gmeet" selected>Gmeet</option>
                            <option value="Zoom">Zoom</option>
                            <option value="Microsoft_Teams">Microsoft Teams</option>
                            <?php }?>
                            <?php if($meetings['platform'] == "Zoom"){?>
                            <option value="webex" >Webex</option>
                            <option value="Gmeet">Gmeet</option>
                            <option value="Zoom" selected>Zoom</option>
                            <option value="Microsoft_Teams">Microsoft Teams</option>
                            <?php }?>
                            <?php if($meetings['platform'] == "Microsoft_Teams"){?>
                            <option value="webex" selected>Webex</option>
                            <option value="Gmeet">Gmeet</option>
                            <option value="Zoom">Zoom</option>
                            <option value="Microsoft_Teams" selected>Microsoft Teams</option>
                            <?php }?>
                        </select>
                            </div>
                            </div>
                                                                        
                            
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputcode">Meeting link</label>
                                <input type="text" required name="Meeting_link" value= "<?php echo $meetings['meeting_link']?>" class="form-control" id="exampleInputcode" placeholder="Enter meet link">
                            </div>
                            </div>
                            

                
                    
                        </div>
                <button type="submit" name="UpdateBtn" class="btn btn-info mt-3 mb-0" data-bs-target="#schedule" data-bs-toggle="modal" style="text-align:right">Update Link</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


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