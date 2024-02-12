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
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Manage Course
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
                <form method="post">
                    <div class="row row-sm">
                        <div class="form-group col-md-4">
                            <p><b> College Name </b> </p>

                            <select name="institution_name" class="form-control form-select"
                                data-bs-placeholder="Select Filter">

                                <!-- <option value="cz">none</option>
												<option value="de">College Name 1</option>
												<option value="pl" > College Name 2</option> -->

                                <option value="All" selected="selected">All</option>
                                <option value="GNR Degree College">GNR Degree College</option>
                                <option value="Gayatri Degree & PG College">Gayatri Degree & PG College</option>
                                <option value="SNR Degree College">SNR Degree College</option>
                                <option value="SV Degree College">SV Degree College</option>
                                <option value="Vidya Degree College">Vidya Degree College</option>
                                <option value="Vijetha Junior & Degree College">Vijetha Junior & Degree College</option>
                                <option value="Vignana Sudha Degree & PG College">Vignana Sudha Degree & PG College
                                </option>
                                <option value="R K Degree College">R K Degree College</option>
                                <option value="Krishnaveni Degree College">Krishnaveni Degree College</option>
                                <option value="S V S Degree College">S V S Degree College</option>
                                <option value="SRI VIVEKANANDA DEGREE COLLEGE">SRI VIVEKANANDA DEGREE COLLEGE</option>
                                <option value="Sri Y N Degree College">Sri Y N Degree College</option>
                                <option value="S V R M Degree College">S V R M Degree College</option>
                                <option value="S.V.G.M. GOVERNMENT DEGREE COLLEGE">S.V.G.M. GOVERNMENT DEGREE COLLEGE
                                </option>
                                <option value="QSPIRE ">QSPIRE </option>
                                <option value="SAI PARAMESHWARA DEGREE COLLEGE">SAI PARAMESHWARA DEGREE COLLEGE</option>
                                <option value="Satya institute of Technology and Management">Satya institute of
                                    Technology and Management</option>
                                <option value="Sri Hari Degree College">Sri Hari Degree College</option>
                                <option value="SVR DEGREE COLLEGE">SVR DEGREE COLLEGE</option>
                                <option value=" BGBS Womens Degree College"> BGBS Womens Degree College</option>
                                <option value="Dadi Veerunaidu College">Dadi Veerunaidu College</option>
                                <option value="Aditya Degree College AWDCKKD">Aditya Degree College AWDCKKD</option>
                                <option value="Aditya Degree College ASCSKKD">Aditya Degree College ASCSKKD</option>
                                <option value="Aditya Degree College for women Rajahmundry">Aditya Degree College for
                                    women Rajahmundry</option>
                                <option value="Gayathri Degree College">Gayathri Degree College</option>
                                <option value="Aditya degree college">Aditya degree college</option>
                                <option value="universe">universe</option>
                                <option value="BRR & GKR CHAMBERS DEGREE & PG COLLEGE ">BRR & GKR CHAMBERS DEGREE & PG
                                    COLLEGE </option>
                                <option value="SRI ABN & PRR COLLEGE OF SCIENCE">SRI ABN & PRR COLLEGE OF SCIENCE
                                </option>
                                <option value="S. V. K. P. & Dr. K. S. Raju Arts and Science College (A)">S. V. K. P. &
                                    Dr. K. S. Raju Arts and Science College (A)</option>
                                <option value="Gokul degree college">Gokul degree college</option>
                                <option value="Sir CR Reddy Degree College For Womens">Sir CR Reddy Degree College For
                                    Womens</option>
                                <option value="MCV DEGREE COLLEGE ">MCV DEGREE COLLEGE </option>
                                <option value="DR.SARVEPALLI RADHA KRISHNA DEGREE COLLEGE">DR.SARVEPALLI RADHA KRISHNA
                                    DEGREE COLLEGE</option>
                                <option value="Andhra Pradesh residential degree College">Andhra Pradesh residential
                                    degree College</option>
                                <option value="DONBOSCO DEGREE COLLEGE">DONBOSCO DEGREE COLLEGE</option>
                                <option value="SRI SAMHITHA DEGREE COLLEGE">SRI SAMHITHA DEGREE COLLEGE</option>
                                <option value="SRI VENKATESHWARA DEGREE COLLEGE ">SRI VENKATESHWARA DEGREE COLLEGE
                                </option>
                                <option value="SRI VASAVI DEGREE COLLEGE">SRI VASAVI DEGREE COLLEGE</option>
                                <option value="Demo Degree College">Demo Degree College</option>
                                <option value="SV DEGREE COLLEGE PEDAGUMMULURU">SV DEGREE COLLEGE PEDAGUMMULURU</option>
                                <option value="AKRG Degree College">AKRG Degree College</option>
                                <option value="CNR Arts & Science College- Annamayya">CNR Arts & Science College-
                                    Annamayya</option>
                                <option value="Sri Balaji Vidya Vihar degree college">Sri Balaji Vidya Vihar degree
                                    college</option>
                                <option value="MVN JS & RVR College of Arts and Science">MVN JS & RVR College of Arts
                                    and Science</option>
                                <option value="Jyothirmayee women’s degree college ">Jyothirmayee women’s degree college
                                </option>
                                <option value="Sree Devi degree college ">Sree Devi degree college </option>
                                <option value="Sapthagiri Degree college Hindupur">Sapthagiri Degree college Hindupur
                                </option>
                                <option value="SPVM Degree College Gorantla">SPVM Degree College Gorantla</option>
                                <option value="SVV Degree College, Penumuru ">SVV Degree College, Penumuru </option>
                                <option value="Sri Rachapudy Nagabhushanam Degree & P.G College, Badvel">Sri Rachapudy
                                    Nagabhushanam Degree & P.G College, Badvel</option>
                                <option value="SMJL DEGREE COLLEGE, KADIRI-515 591">SMJL DEGREE COLLEGE, KADIRI-515 591
                                </option>
                                <option value="SAI DEGREE COLLEGE">SAI DEGREE COLLEGE</option>
                                <option value="SPACE DEGREE FOR WOMEN                                  ">SPACE DEGREE
                                    FOR WOMEN </option>
                                <option value="Vellore institute of Technology AP">Vellore institute of Technology AP
                                </option>

                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <p><b> course</b> </p>
                            <select name="course" class="form-control form-select" data-bs-placeholder="Select Filter">
                                <option value="All" selected="selected">All</option>
                                <!-- <option value="cz">none</option>
												<option value="de">College Name 1</option>
												<option value="pl" > College Name 2</option> -->

                                <option value="Voice process">Voice process</option>
                                <option value="Tally">Tally</option>
                                <option value="Medical Coding">Medical Coding</option>
                                <option value="Web Technologies">Web Technologies</option>
                                <option value="Digital Marketing ">Digital Marketing </option>
                                <option value="Human resource management ">Human resource management </option>
                                <option value="Python">Python</option>
                                <option value="Cloud computing ">Cloud computing </option>
                                <option value="Java">Java</option>
                                <option value="US Taxation">US Taxation</option>
                                <option value="Tally + GST">Tally + GST</option>
                                <option value="My SQL ">My SQL </option>
                                <option value="Power BI & Tableau">Power BI & Tableau</option>
                                <option value="AI & ML">AI & ML</option>
                                <option value="GST">GST</option>
                                <option value="Medical Coding & Transcription">Medical Coding & Transcription</option>
                                <option value="Medical Transcription">Medical Transcription</option>
                                <option value="Income Tax">Income Tax</option>
                                <option value="Java Script">Java Script</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <p><b>Account type</b> </p>
                            <select name="acc_type" class="form-control form-select"
                                data-bs-placeholder="Select Filter">
                                <option value="All">All</option>
                                <!-- <option value="none">none</option> -->
                                <option value="college">College type</option>
                                <option value="individual">Individual type</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <P><b>Internship Term</b> </p>
                            <select name="intership_term" class="form-control form-select"
                                data-bs-placeholder="Select Filter">
                                <option value="All" selected="selected">All</option>
                                <!-- <option value="none">none</option> -->
                                <option value="short_term">Short Term</option>
                                <option value="long_term">Long Term</option>
                            </select>
                        </div>
                        <!-- <div class="form-group col-md-3">
										<select name="country" class="form-control form-select" data-bs-placeholder="Select Filter">
												<option value="br">Filter4</option>
												<option value="cz">Filter3</option>
												<option value="de">Filter2</option>
												<option value="pl" selected>Filter1</option>
											</select>
									</div> -->

                        &nbsp &nbsp <button type="submit" class="btn btn-primary">Search</button>
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
                                                <th class="border-bottom-0">date of adding</th>
                                                <th class="border-bottom-0">date of acceptance</th>
                                                <th class="border-bottom-0">Course ID</th>
                                                <th class="border-bottom-0">Student name</th>
                                                <th class="border-bottom-0">College name</th>
                                                <th class="border-bottom-0">Course Name</th>
                                                <!--	<th class="border-bottom-0">Acc type</th> -->
                                                <th class="border-bottom-0">Internship type</th>
                                                <th class="border-bottom-0">College status</th>
                                                <!--<th class="border-bottom-0">Re-allocate</th>-->
                                                <th class="border-bottom-0">Actions</th>




                                            </tr>
                                        </thead>
                                        <tbody>



                                            <tr>
                                                <td>1</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>0000-00-00 00:00:00</td>
                                                <td>TRSTU_1</td>
                                                <td>Undi Rohith</td>
                                                <td>Aditya degree college</td>
                                                <td>Voice process</td>
                                                <!--    <td>Individual</td> -->
                                                <td>long_term</td>
                                                <td>0</td>

                                                <td>
                                                    <div class="col-sm-6 col-md-15 mg-t-10 mg-sm-t-0">
                                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </button>

                                                        <div class="dropdown-menu">
                                                            <a class="btn dropdown-item"
                                                                href="connection_files/manage/course_registration_manage.php?id=1&delete=delete">Delete</a>
                                                        </div><!-- dropdown-menu -->
                                                    </div>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->


                <div class="modal fade" id="accept">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to accept a student Course request??</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">Accept</button>
                                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="reject">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to reject a student Course request??</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">Reject</button>
                                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="Delete">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                    class="btn-close" data-bs-dismiss="modal" type="button"><span
                                        aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">

                                <p> Are you sure you want to Delete a student Course request??</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-success" type="button">Delete</button>
                                <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Not
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>

    <?php include("./scripts.php"); ?>

</body>

</html>