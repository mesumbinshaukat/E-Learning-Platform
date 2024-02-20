<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['superadmin_username']) && !isset($_COOKIE['superadmin_password'])) {
    header('location: ../super-admin_login.php');
    exit();
}

$select_query = mysqli_query($conn, "SELECT * FROM `trainer`");

if (isset($_GET["error"])) {
    // Sanitize the value using htmlspecialchars
    $error = htmlspecialchars($_GET["error"], ENT_QUOTES, 'UTF-8');

    // Store the sanitized value in the session
    $_SESSION["error"] = $error;
}
?>



<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">
    <title>Trainer Sign Up - Registrations</title>

    <?php include("./style.php"); ?>

</head>

<body class="ltr main-body app sidebar-mini">

    <?php if (isset($_SESSION["error"]) && !empty($_SESSION["error"])) {
        echo "<script>toastr.alert('Unable To Delete. " . $_SESSION["error"] . "')</script>";
    } ?>

    <?php include("./switcher.php") ?>

    <!-- Page -->
    <div class="page">

        <div>

            <div class="main-header side-header sticky nav nav-item">

                <?php include('./partials/navbar.php'); ?>

            </div>
            <!-- /main-header -->

            <!-- main-sidebar -->
            <div class="sticky">
                <?php include('./partials/sidebar.php') ?>
            </div>
            <!-- main-sidebar -->

        </div>
        <!-- main-content -->
        <div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">


                <div class="breadcrumb-header justify-content-between">
                    <div class="right-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Trainer
                            Registrations</span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Credentials</a></li>
                            <li class="breadcrumb-item ">Trainer</li>
                            <li class="breadcrumb-item ">Registrations</li>
                        </ol>
                    </div>

                </div>

                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">

                                <div class="table-responsive  export-table">
                                    <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">S.No</th>
                                                <th class="border-bottom-0">Date of Adding</th>
                                                <th class="border-bottom-0">ID No</th>
                                                <th class="border-bottom-0">Trainer name</th>
                                                <th class="border-bottom-0">Phone no</th>
                                                <th class="border-bottom-0">Username</th>
                                                <th class="border-bottom-0">Password</th>
                                                <th class="border-bottom-0">Delete</th>
                                                <th class="border-bottom-0">update</th>



                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php if (mysqli_num_rows($select_query) > 0) {
                                                $i = 1;
                                                while ($row = mysqli_fetch_assoc($select_query)) {
                                                    if ($row["created_by"] == "user") {
                                            ?>

                                                        <tr>
                                                            <td><?php echo $i++; ?></td>
                                                            <td><?php echo $row['creation_date']; ?></td>
                                                            <td>REG_<?php echo $row['id']; ?></td>
                                                            <td><?php echo $row['name']; ?></td>
                                                            <td><?php echo $row['contact_number']; ?></td>
                                                            <td><?php echo $row['username']; ?></td>
                                                            <td><?php echo $row['password']; ?></td>
                                                            <td><a href="delete.php?id=<?php echo $row['id']; ?>&user=trainer" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this trainer?')">Delete</a>
                                                            </td>
                                                            <td><a href="edit_trainer.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a></td>
                                                        </tr>

                                                <?php
                                                    }
                                                }
                                            } else { ?>
                                            <?php echo "No data found";
                                            } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->


                <div class="modal fade" id="delete">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to delete a trainer?</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">Accept</button>
                                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="unblock">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to unblock a employee??</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">unblock</button>
                                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>




    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

    <?php include("./scripts.php"); ?>
</body>

</html>