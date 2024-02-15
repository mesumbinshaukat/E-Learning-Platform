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
     <title>Pending Students</title>
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
                         <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Pending Course
                             Registrations </span>
                     </div>

                     <div class="justify-content-center mt-2">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Courses</a></li>
                             <li class="breadcrumb-item ">Registrations</li>
                             <li class="breadcrumb-item ">Pending</li>
                         </ol>
                     </div>

                 </div>


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
                                                 <th class="border-bottom-0">date of adding</th>
                                                 <th class="border-bottom-0">ID No</th>
                                                 <th class="border-bottom-0">Student name</th>
                                                 <th class="border-bottom-0">College name</th>
                                                 <th class="border-bottom-0">Course</th>
                                                 <th class="border-bottom-0">Acc type</th>
                                                 <th class="border-bottom-0">payment type</th>
                                                 <th class="border-bottom-0">College status</th>
                                                 <th class="border-bottom-0">Delete</th>





                                             </tr>
                                         </thead>
                                         <tbody>


                                             <!--<tr>-->
                                             <!--	<td>01</td>-->
                                             <!--	<td>23/11/2022 14:00:23</td>-->
                                             <!--	<td>TRSTU_1</td>-->
                                             <!--	<td>Manju Katikala</td>-->
                                             <!--	<td>Bullayya enginering college</td>-->
                                             <!--	<td>java</td>-->
                                             <!--	<td>College</td>-->
                                             <!--	<td>Individual</td>-->
                                             <!--	<td>Accept</td>-->
                                             <!--	<td><a  data-bs-target="#delete" data-bs-toggle="modal" class="btn btn-danger">Delete</a></td>-->
                                             <!--	<td><a  data-bs-target="#forward" data-bs-toggle="modal" class="btn btn-success">Forward</a></td>-->
                                             <!--</tr>-->
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

                                 <p> Are you sure you want to Delete the Course Registration??</p>
                             </div>
                             <div class="modal-footer">
                                 <button class="btn ripple btn-success" type="button">Accept</button>
                                 <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                     Now</button>
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="modal fade" id="forward">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content modal-content-demo">
                             <div class="modal-header">
                                 <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                     class="btn-close" data-bs-dismiss="modal" type="button"><span
                                         aria-hidden="true">&times;</span></button>
                             </div>
                             <div class="modal-body">

                                 <p> Are you sure you want to forward the Course registration??</p>
                             </div>
                             <div class="modal-footer">
                                 <button class="btn ripple btn-success" type="button">Reject</button>
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