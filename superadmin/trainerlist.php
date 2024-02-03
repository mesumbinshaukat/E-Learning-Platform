<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['superadmin_username']) && !isset($_COOKIE['superadmin_password'])) {
	header('location: ../super-admin_login.php');
	exit();
}

$select_query = mysqli_query($conn, "SELECT * FROM `trainer`");


?>

<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">

    <?php include("./style.php"); ?>
</head>

<body class="ltr main-body app sidebar-mini">

    <?php include("./switcher.php"); ?>

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
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Trainer list </span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Credentials</a></li>
                            <li class="breadcrumb-item ">Trainer</li>
                            <li class="breadcrumb-item ">List</li>
                        </ol>
                    </div>

                </div>
                <form method="post">
                    <div class="row row-sm">
                        <div class="form-group col-md-3">
                            <b> <label>Qualifications</label> </b>
                            <select name="Qualification" class="form-control form-select"
                                data-bs-placeholder="Select Filter">
                                <option value="ALL">ALL</option>
                                <option value="Graduate">Graduate</option>
                                <option value="NA">NA</option>
                                <option value="MCA">MCA</option>
                                <option value="Btech">Btech</option>
                                <option value="Bachelor of technology ">Bachelor of technology </option>
                                <option value="B.com Computers">B.com Computers</option>
                                <option value="Bsc">Bsc</option>
                                <option value="B Tech 3rd year">B Tech 3rd year</option>
                                <option value="Doctor of pharmacy">Doctor of pharmacy</option>
                                <option value="MBA">MBA</option>
                                <option value="B.Tech">B.Tech</option>
                                <option value="b sc biotechnology">b sc biotechnology</option>
                                <option value="pursuing PGDM">pursuing PGDM</option>
                                <option value="cse">cse</option>
                                <option value="B-tech">B-tech</option>
                                <option value="B.E">B.E</option>
                                <option value="degree">degree</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <b> <label>Any Experience</label> </b>

                            <select name="Any_Experience" class="form-control form-select"
                                data-bs-placeholder="Select Filter">

                                <option value="ALL" selected="selected">ALL</option>
                                <option value=""></option>
                                <option value="yes">yes</option>
                                <option value="Fresher">Fresher</option>
                                <option value="no">no</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <P><b> Status</b> </p>
                            <select name="user_status" class="form-control form-select"
                                data-bs-placeholder="Select Filter">
                                <option value="ALL">ALL</option>
                                <option value="0">Active</option>
                                <option value="1">blocked</option>
                                <option value="2">Deleted</option>
                            </select>
                        </div>

                        &nbsp &nbsp <button type="submit" class="btn btn-primary" name="search"
                            style="height:40px;width:100px;margin-top:35px" value="search">Search</button>
                    </div>
                </form>
                <br>
                <br>
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
                                                <th class="border-bottom-0">Username</th>
                                                <th class="border-bottom-0">Email</th>
                                                <th class="border-bottom-0">Trainer ID</th>
                                                <th class="border-bottom-0">Trainer Name</th>
                                                <th class="border-bottom-0">Qualification</th>
                                                <th class="border-bottom-0">Experience</th>

                                                <th class="border-bottom-0">User status</th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (mysqli_num_rows($select_query) > 0) {
												$i = 1;
												while ($row = mysqli_fetch_assoc($select_query)) {
											?>

                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $row['username']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td>ID_<?php echo $row['id']; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo !empty($row['qualification']) ?? null; ?></td>
                                                <td><?php echo $row['experience'] ?? null; ?></td>
                                                <td style=color:#4aa02c> <b> Active <b></td>
                                            </tr>

                                            <?php
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
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to delete a trainer?</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">Delete</button>
                                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="block">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to block a trainer?</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">block</button>
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
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to unblock a trainer?</p>
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
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->

    <!-- Sidebar-right-->





    <!-- Footer opened -->
    <div class="main-footer">
        <div class="container-fluid pd-t-0-f ht-100p">
            Copyright © 2023 <a href="www.triaright.in" class="text-primary">triaright</a>. Designed with <span
                class="fa fa-heart text-danger"></span> by <a href="www.mycompany.co.in"> my company</a> . All rights
            reserved
        </div>
    </div>
    <!-- Footer closed -->


    </div>
    <!-- End Page -->

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="las la-arrow-up"></i></a>

    <?php include("./scripts.php"); ?>


</body>

</html>