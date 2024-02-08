<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['superadmin_username']) && !isset($_COOKIE['superadmin_password'])) {
    header('location: ../super-admin_login.php');
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
    <?php include("./style.php"); ?>

</head>

<body class="ltr main-body app sidebar-mini">
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
                <?php include('./partials/sidebar.php'); ?>
            </div>
            <!-- main-sidebar -->

        </div>
        <!-- main-content -->
        <div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">


                <div class="breadcrumb-header justify-content-between">
                    <div class="right-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Course List</span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Courses</a></li>
                            <li class="breadcrumb-item ">Create</li>
                            <li class="breadcrumb-item ">List</li>
                        </ol>
                    </div>

                </div>
                <!--	<div class="row row-sm">
					                 <div class="form-group col-md-3">
										<select name="country" class="form-control form-select" data-bs-placeholder="Select Filter">
												<option value="br">Filter4</option>
												<option value="cz">Filter3</option>
												<option value="de">Filter2</option>
												<option value="pl" selected>Filter1</option>
											</select>
									</div>
									<div class="form-group col-md-3">
										<select name="country" class="form-control form-select" data-bs-placeholder="Select Filter">
												<option value="br">Filter4</option>
												<option value="cz">Filter3</option>
												<option value="de">Filter2</option>
												<option value="pl" selected>Filter1</option>
											</select>
									</div>
									<div class="form-group col-md-3">
										<select name="country" class="form-control form-select" data-bs-placeholder="Select Filter">
												<option value="br">Filter4</option>
												<option value="cz">Filter3</option>
												<option value="de">Filter2</option>
												<option value="pl" selected>Filter1</option>
											</select>
									</div>
																		<div class="form-group col-md-3">
										<select name="country" class="form-control form-select" data-bs-placeholder="Select Filter">
												<option value="br">Filter4</option>
												<option value="cz">Filter3</option>
												<option value="de">Filter2</option>
												<option value="pl" selected>Filter1</option>
											</select>
									</div>

									&nbsp &nbsp	<a href="javascript:void(0);" class="btn btn-success">Search</a>	
                                               &nbsp &nbsp <a href="javascript:void(0);" class="btn btn-danger">Reset All </a>									
									</div> -->

                <br>
                <br>
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">

                                <div class="table-responsive  export-table">
                                    <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">S.no</th>
                                                <th class="border-bottom-0">date of adding</th>
                                                <th class="border-bottom-0">Course ID</th>
                                                <th class="border-bottom-0">Course name</th>
                                                <th class="border-bottom-0">Price</th>
                                                <th class="border-bottom-0">Duration</th>
                                                <th class="border-bottom-0">add student</th>





                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>


                                                <td>1</td>
                                                <td>2023-02-26 15:55:08</td>
                                                <td>TRCR_5</td>
                                                <td>Java Script</td>
                                                <td>5400</td>
                                                <td>90</td>

                                                <td><a href="selectstudent.php?crid=5&type=course" class="btn btn-info">add Student</a></td>
                                            </tr>

                                            <tr>


                                                <td>2</td>
                                                <td>2023-02-26 16:10:47</td>
                                                <td>TRCR_6</td>
                                                <td>Cloud computing </td>
                                                <td>5400</td>
                                                <td>90</td>

                                                <td><a href="selectstudent.php?crid=6&type=course" class="btn btn-info">add Student</a></td>
                                            </tr>

                                            <tr>


                                                <td>3</td>
                                                <td>2023-02-26 16:23:23</td>
                                                <td>TRCR_7</td>
                                                <td>My SQL </td>
                                                <td>5400</td>
                                                <td>90</td>

                                                <td><a href="selectstudent.php?crid=7&type=course" class="btn btn-info">add Student</a></td>
                                            </tr>

                                            <tr>


                                                <td>4</td>
                                                <td>2023-02-26 16:38:37</td>
                                                <td>TRCR_8</td>
                                                <td>Human resource management </td>
                                                <td>5400</td>
                                                <td>90</td>

                                                <td><a href="selectstudent.php?crid=8&type=course" class="btn btn-info">add Student</a></td>
                                            </tr>

                                            <tr>


                                                <td>5</td>
                                                <td>2023-02-26 16:38:42</td>
                                                <td>TRCR_9</td>
                                                <td>US Taxation</td>
                                                <td>5400</td>
                                                <td>90</td>

                                                <td><a href="selectstudent.php?crid=9&type=course" class="btn btn-info">add Student</a></td>
                                            </tr>

                                            <tr>


                                                <td>6</td>
                                                <td>2023-02-26 16:41:21</td>
                                                <td>TRCR_10</td>
                                                <td>Voice process</td>
                                                <td>5400</td>
                                                <td>90</td>

                                                <td><a href="selectstudent.php?crid=10&type=course" class="btn btn-info">add Student</a></td>
                                            </tr>

                                            <tr>


                                                <td>7</td>
                                                <td>2023-02-26 16:48:42</td>
                                                <td>TRCR_11</td>
                                                <td>Income Tax</td>
                                                <td>5400</td>
                                                <td>90</td>

                                                <td><a href="selectstudent.php?crid=11&type=course" class="btn btn-info">add Student</a></td>
                                            </tr>

                                            <tr>


                                                <td>8</td>
                                                <td>2023-02-26 16:54:25</td>
                                                <td>TRCR_12</td>
                                                <td>Non Voice Process</td>
                                                <td>5400</td>
                                                <td>90</td>

                                                <td><a href="selectstudent.php?crid=12&type=course" class="btn btn-info">add Student</a></td>
                                            </tr>

                                            <tr>


                                                <td>9</td>
                                                <td>2023-02-26 17:12:19</td>
                                                <td>TRCR_13</td>
                                                <td>Transcription</td>
                                                <td>5400</td>
                                                <td>90</td>

                                                <td><a href="selectstudent.php?crid=13&type=course" class="btn btn-info">add Student</a></td>
                                            </tr>

                                            <tr>


                                                <td>10</td>
                                                <td>2023-02-26 17:26:41</td>
                                                <td>TRCR_14</td>
                                                <td>Translation</td>
                                                <td>5400</td>
                                                <td>90</td>

                                                <td><a href="selectstudent.php?crid=14&type=course" class="btn btn-info">add Student</a></td>
                                            </tr>

                                            <tr>


                                                <td>11</td>
                                                <td>2023-02-26 17:39:45</td>
                                                <td>TRCR_16</td>
                                                <td>Digital Marketing </td>
                                                <td>5400</td>
                                                <td>90</td>

                                                <td><a href="selectstudent.php?crid=16&type=course" class="btn btn-info">add Student</a></td>
                                            </tr>

                                            <tr>


                                                <td>12</td>
                                                <td>2023-02-26 17:43:15</td>
                                                <td>TRCR_17</td>
                                                <td>Tally + GST</td>
                                                <td>5400</td>
                                                <td>90</td>

                                                <td><a href="selectstudent.php?crid=17&type=course" class="btn btn-info">add Student</a></td>
                                            </tr>

                                            <tr>


                                                <td>13</td>
                                                <td>2023-05-07 21:59:20</td>
                                                <td>TRCR_28</td>
                                                <td>Python</td>
                                                <td>5400</td>
                                                <td>90</td>

                                                <td><a href="selectstudent.php?crid=28&type=course" class="btn btn-info">add Student</a></td>
                                            </tr>

                                            <tr>


                                                <td>14</td>
                                                <td>2023-05-07 22:26:23</td>
                                                <td>TRCR_32</td>
                                                <td>JAVA</td>
                                                <td>5400</td>
                                                <td>90</td>

                                                <td><a href="selectstudent.php?crid=32&type=course" class="btn btn-info">add Student</a></td>
                                            </tr>

                                            <tr>


                                                <td>15</td>
                                                <td>2023-05-07 22:33:22</td>
                                                <td>TRCR_33</td>
                                                <td>Web Technologies</td>
                                                <td>6400</td>
                                                <td>90</td>

                                                <td><a href="selectstudent.php?crid=33&type=course" class="btn btn-info">add Student</a></td>
                                            </tr>

                                            <tr>


                                                <td>16</td>
                                                <td>2023-05-07 22:54:14</td>
                                                <td>TRCR_34</td>
                                                <td>Medical Coding & Transcription</td>
                                                <td>6400</td>
                                                <td>90</td>

                                                <td><a href="selectstudent.php?crid=34&type=course" class="btn btn-info">add Student</a></td>
                                            </tr>

                                            <tr>


                                                <td>17</td>
                                                <td>2023-08-09 13:29:29</td>
                                                <td>TRCR_38</td>
                                                <td>Power BI & Tableau</td>
                                                <td>5400</td>
                                                <td>60</td>

                                                <td><a href="selectstudent.php?crid=38&type=course" class="btn btn-info">add Student</a></td>
                                            </tr>

                                            <tr>


                                                <td>18</td>
                                                <td>2023-08-09 16:02:47</td>
                                                <td>TRCR_39</td>
                                                <td>AI & ML</td>
                                                <td>2700</td>
                                                <td>60</td>

                                                <td><a href="selectstudent.php?crid=39&type=course" class="btn btn-info">add Student</a></td>
                                            </tr>



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
            </div>
        </div>

    </div>
    <!-- Container closed -->


    <?php include("./scripts.php"); ?>

</body>

</html>