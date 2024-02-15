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
    <title>Certications</title>
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
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Student List </span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item ">Student</li>
                            <li class="breadcrumb-item ">List</li>
                        </ol>
                    </div>

                </div>
                <div class="row row-sm">

                    <div class="form-group col-md-6">
                        <P><b> Semester</b> </p>
                        <select name="country" class="form-control form-select" data-bs-placeholder="Select Filter">
                            <option value="br" selected>All</option>
                            <option value="cz">none</option>
                            <option value="de">1st Sem</option>
                            <option value="pl">2nd Sem</option>
                            <option value="pl">3nd Sem</option>
                            <option value="pl">4nd Sem</option>
                            <option value="pl">5nd Sem</option>
                            <option value="pl">6nd Sem</option>
                            <option value="pl">7nd Sem</option>
                            <option value="pl">8nd Sem</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <P><b> Account Type</b> </p>
                        <select name="country" class="form-control form-select" data-bs-placeholder="Select Filter">
                            <option value="br" selected>All</option>
                            <option value="cz">none</option>
                            <option value="de">College type</option>
                            <option value="pl">Individual type</option>
                        </select>
                    </div>


                    &nbsp &nbsp <a href="javascript:void(0);" class="btn btn-success">Search</a>
                    &nbsp &nbsp <a href="javascript:void(0);" class="btn btn-danger">Reset All </a>
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
                                                <th class="border-bottom-0">Author</th>
                                                <th class="border-bottom-0">Student name</th>
                                                <th class="border-bottom-0">College</th>
                                                <th class="border-bottom-0">stream</th>
                                                <th class="border-bottom-0">District</th>
                                                <th class="border-bottom-0">Download Certificate</th>
                                                <th class="border-bottom-0">View Profile</th>



                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>

                                                <td> 1 </td>
                                                <td>2023-10-03 15:32:21</td>
                                                <td>TRSTU_5020</td>
                                                <td></td>
                                                <td>Neha banu</td>
                                                <td></td>
                                                <td>Kadiri</td>
                                                <td>Sri sathya sai</td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5020">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5020">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 2 </td>
                                                <td>2023-12-19 12:08:01</td>
                                                <td>TRSTU_5715</td>
                                                <td></td>
                                                <td>R Lakshmi kantha </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5715">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5715">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 3 </td>
                                                <td>2023-12-26 19:05:11</td>
                                                <td>TRSTU_5716</td>
                                                <td></td>
                                                <td>S.Thasleem</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5716">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5716">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 4 </td>
                                                <td>2024-01-03 14:18:17</td>
                                                <td>TRSTU_5720</td>
                                                <td></td>
                                                <td>Diksha Mane </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5720">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5720">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 5 </td>
                                                <td>2024-01-04 09:17:23</td>
                                                <td>TRSTU_5721</td>
                                                <td></td>
                                                <td>demo12345</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5721">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5721">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 6 </td>
                                                <td>2024-01-08 13:12:41</td>
                                                <td>TRSTU_5722</td>
                                                <td></td>
                                                <td>saitriaright</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5722">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5722">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 7 </td>
                                                <td>2024-01-08 14:22:24</td>
                                                <td>TRSTU_5727</td>
                                                <td></td>
                                                <td>K.Arfaz Roshan </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5727">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5727">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 8 </td>
                                                <td>2024-01-08 14:25:38</td>
                                                <td>TRSTU_5730</td>
                                                <td></td>
                                                <td>K Samreen</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5730">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5730">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 9 </td>
                                                <td>2024-01-08 20:39:04</td>
                                                <td>TRSTU_5738</td>
                                                <td></td>
                                                <td>N Veena</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5738">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5738">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 10 </td>
                                                <td>2024-01-09 13:56:26</td>
                                                <td>TRSTU_5740</td>
                                                <td></td>
                                                <td>demo2026</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5740">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5740">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 11 </td>
                                                <td>2024-01-10 13:08:14</td>
                                                <td>TRSTU_5741</td>
                                                <td></td>
                                                <td>Marella Meghana</td>
                                                <td></td>
                                                <td>Computer Science and Technology</td>
                                                <td>Chittoor</td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5741">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5741">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 12 </td>
                                                <td>2024-01-10 15:10:55</td>
                                                <td>TRSTU_5743</td>
                                                <td></td>
                                                <td>D Anvi teja</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5743">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5743">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 13 </td>
                                                <td>2024-01-11 15:26:20</td>
                                                <td>TRSTU_5746</td>
                                                <td></td>
                                                <td>Vallepu</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5746">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5746">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 14 </td>
                                                <td>2024-01-18 14:40:25</td>
                                                <td>TRSTU_5748</td>
                                                <td></td>
                                                <td>a</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5748">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5748">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 15 </td>
                                                <td>2024-01-18 15:53:59</td>
                                                <td>TRSTU_5749</td>
                                                <td></td>
                                                <td>p</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5749">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5749">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 16 </td>
                                                <td>2024-01-19 14:11:42</td>
                                                <td>TRSTU_5751</td>
                                                <td></td>
                                                <td>Tejasree samudrala </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5751">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5751">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 17 </td>
                                                <td>2024-01-24 18:41:11</td>
                                                <td>TRSTU_5753</td>
                                                <td></td>
                                                <td>as</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5753">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5753">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 18 </td>
                                                <td>2024-01-31 13:12:18</td>
                                                <td>TRSTU_5756</td>
                                                <td></td>
                                                <td>as</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5756">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5756">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 19 </td>
                                                <td>2024-01-31 17:58:25</td>
                                                <td>TRSTU_5758</td>
                                                <td></td>
                                                <td>Mulla Gareeb Basha </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5758">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5758">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 20 </td>
                                                <td>2024-01-31 19:33:55</td>
                                                <td>TRSTU_5759</td>
                                                <td></td>
                                                <td>Mangi Harikrishna</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5759">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5759">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 21 </td>
                                                <td>2024-01-31 20:16:55</td>
                                                <td>TRSTU_5760</td>
                                                <td></td>
                                                <td>Shaik Alfiya Asfa</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5760">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5760">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 22 </td>
                                                <td>2024-02-01 10:23:41</td>
                                                <td>TRSTU_5761</td>
                                                <td></td>
                                                <td>Km arun kumar </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5761">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5761">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 23 </td>
                                                <td>2024-02-01 10:23:43</td>
                                                <td>TRSTU_5762</td>
                                                <td></td>
                                                <td>P.Upendra</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5762">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5762">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 24 </td>
                                                <td>2024-02-01 10:24:36</td>
                                                <td>TRSTU_5763</td>
                                                <td></td>
                                                <td>Gajula jai bharath</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5763">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5763">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 25 </td>
                                                <td>2024-02-01 10:24:47</td>
                                                <td>TRSTU_5764</td>
                                                <td></td>
                                                <td>Balamma Ramanji</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5764">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5764">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 26 </td>
                                                <td>2024-02-01 10:25:08</td>
                                                <td>TRSTU_5765</td>
                                                <td></td>
                                                <td>Rama Krishna Dandu </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5765">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5765">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                            <tr>

                                                <td> 27 </td>
                                                <td>2024-02-01 10:26:03</td>
                                                <td>TRSTU_5766</td>
                                                <td></td>
                                                <td>J Ranganath </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a class="btn btn-info"
                                                        href="certification1.php?stu_id=5766">Certificate</a></td>

                                                <td><a class="btn btn-info" href="studentprofile.php?id=5766">view</a>
                                                </td>


                                            </tr>



                                            </tr>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->


                <div class="modal fade" id="Delete">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to Delete a student?</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">Delete</button>
                                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="Block">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to Block a student?</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">Block</button>
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

                                <p> Are you sure you want to Unblock a student?</p>
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
    <?php include("./script.php"); ?>
</body>

</html>