<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['college_username']) && !isset($_COOKIE['college_password'])) {
	header('location: ../college_login.php');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Outbox</title>
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

        <!-- main-content -->
        <div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">


                <div class="breadcrumb-header justify-content-between">
                    <div class="right-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">outbox</span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Internship management</a>
                            </li>
                            <li class="breadcrumb-item ">Chats</li>
                            <li class="breadcrumb-item ">outbox</li>
                        </ol>
                    </div>

                </div>

                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">

                                <div class="table-responsive  export-table">
                                    <table id="file-datatable"
                                        class="table table-bordered text-nowrap key-buttons border-bottom">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">S.no</th>
                                                <th class="border-bottom-0">login type</th>
                                                <th class="border-bottom-0">user id</th>
                                                <th class="border-bottom-0">username</th>
                                                <th class="border-bottom-0">Subject</th>
                                                <th class="border-bottom-0">purpose</th>
                                                <th class="border-bottom-0">description</th>
                                                <th class="border-bottom-0">Attachment</th>
                                                <th class="border-bottom-0">Replied Description</th>
                                                <th class="border-bottom-0">Replied Attachment</th>
                                                <th class="border-bottom-0">date and time</th>




                                            </tr>
                                        </thead>
                                        <tbody>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <form action="../superadmin/connection_files/create/bxfxghhgvc" method="POST"
                    enctype="multipart/form-data">

                    <div class="modal fade" id="upload">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Reply</h6><button aria-label="Close" class="btn-close"
                                        data-bs-dismiss="modal" type="button"><span
                                            aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputCompanyPhone"
                                                style="color:#ff6700"><b>Subject</b></label>
                                            <input type="text" class="form-control" readonly
                                                id="exampleInputCompanyPhone" disabled value="">
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-label">
                                            <label for="exampleInputAadhar"
                                                style="color:#ff6700"><b>Describe</b></label>
                                            <input class="form-control" placeholder="Textarea" name="Describe" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputcode">add attachments</label>
                                            <input type="file" class="form-control" id="exampleInputcode" placeholder=""
                                                name="add_attachments" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn ripple btn-success" name="reply" type="submit">reply</button>
                                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                        Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="modal fade" id="reject">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to Delete a reply??</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">Delete</button>
                                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="Unblock">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to Unblock a employee??</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">Unblock</button>
                                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>
    <?php include("./script.php"); ?>
</body>

</html>