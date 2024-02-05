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
    <title>Create Student</title>
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
        <form action="connection_files/create/student_create.php" method="POST" enctype="multipart/form-data">
            <!-- main-content -->
            <!-- main-content -->
            <div class="main-content app-content">

                <!-- container -->
                <div class="main-container container-fluid">


                    <!-- breadcrumb -->
                    <div class="breadcrumb-header justify-content-between">
                        <div class="left-content">
                            <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Create
                                Student</span>
                        </div>
                        <div class="justify-content-center mt-2">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Credentials</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Student</li>
                                <li class="breadcrumb-item active" aria-current="page">Create</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /breadcrumb -->

                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">


                                    <div class="">
                                        <div class="row row-xs formgroup-wrapper">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputName">Student Name <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <input type="text" class="form-control" id="exampleInputName" name="student_name" placeholder="Enter Student Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputAadhar">Gender <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <select class="form-control form-select select2" name="gender" data-bs-placeholder="Select Country" required>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="others">others</option>
                                                        <option value="ratherNotSay">Rather not say</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputDOB">Date of Birth <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <input class="form-control" id="dateMask" name="date_of_birth" placeholder="DD/MM/YYYY" type="date" d>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPersonalPhone">Phone Number <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <input type="number" class="form-control" name="phone_number" placeholder="1234567890" required max="9999999999" min="1000000000" id="exampleInputPersonalPhone" placeholder="1234567890" required max="9999999999" min="1000000000" placeholder="Enter Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPersonalPhone">Alternative Phone Number
                                                        <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <input type="number" class="form-control" placeholder="1234567890" max="9999999999" min="1000000000" name="alternative_phone_number" id="exampleInputPersonalPhone" placeholder="Enter Alternative Contact Number">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPerEmail">Mail Id <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <input type="email" class="form-control" name="mail_id" id="exampleInputPerEmail" placeholder="Enter Mail ID" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputPerEmail">Address <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <input type="text" class="form-control " name="address" id="exampleInputPerEmail" rows="5" placeholder="Enter address">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPerEmail">District <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <input type="text" class="form-control" name="district" id="exampleInputPerEmail" placeholder="Enter District">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPerEmail">State <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <input type="text" class="form-control" name="state" id="exampleInputPerEmail" placeholder="Enter State">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPerEmail">PIN code <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <input type="number" class="form-control" name="pincode" id="exampleInputPerEmail" placeholder="enter Pincode">
                                                </div>
                                            </div>






                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputQualification">Qualification <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <select class="form-control form-select select2" name="qualification" data-bs-placeholder="select qulification" required>
                                                        <option value="10th">10th</option>
                                                        <option value="+12">+12</option>
                                                        <option value="polytechnic">Polytechnic</option>
                                                        <option value="degree">Degree</option>
                                                        <option value="btech">B.Tech</option>
                                                        <option value="pg">Post Graduation</option>
                                                        <option value="ph.d">Ph.d</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPerEmail">Branch/Stream <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <input type="text" class="form-control " name="stream" id="exampleInputPerEmail" placeholder="MPC/BCOM/CSE" required>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputAadhar"> Semester <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span> </label>
                                                    <select class="form-control form-select select2" name="semester" data-bs-placeholder="Select Country" required>
                                                        <option value="1stsem">1st sem</option>
                                                        <option value="2ndSem">2nd Sem</option>
                                                        <option value="3rdSem">3rd Sem</option>
                                                        <option value="4thSem">4th Sem</option>
                                                        <option value="5thSem">5th Sem</option>
                                                        <option value="6thSem">6th Sem</option>
                                                        <option value="7thSem">7th Sem</option>
                                                        <option value="8thSem">8th Sem</option>
                                                        <option value="Not Required">Not Required</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputQualification">Account type <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <select class="form-control form-select select2" name="account_type" data-bs-placeholder="select qulification" required>
                                                        <option value=""></option>
                                                        <option value="college">College</option>
                                                        <option value="individual">Individual</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputQualification">Insitution Name <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <select class="form-control form-select select2" name="institution_name" data-bs-placeholder="select qulification">

                                                        <option value=""></option>
                                                        <option value="GNR Degree College">GNR Degree College</option>
                                                        <option value=""></option>
                                                        <option value="Gayatri Degree & PG College">Gayatri Degree & PG
                                                            College</option>
                                                        <option value=""></option>
                                                        <option value="SNR Degree College">SNR Degree College</option>
                                                        <option value=""></option>
                                                        <option value="SV Degree College">SV Degree College</option>
                                                        <option value=""></option>
                                                        <option value="Vidya Degree College">Vidya Degree College
                                                        </option>
                                                        <option value=""></option>
                                                        <option value="Vijetha Junior & Degree College">Vijetha Junior &
                                                            Degree College</option>
                                                        <option value=""></option>
                                                        <option value="Vignana Sudha Degree & PG College">Vignana Sudha
                                                            Degree & PG College</option>
                                                        <option value=""></option>
                                                        <option value="R K Degree College">R K Degree College</option>
                                                        <option value=""></option>
                                                        <option value="Krishnaveni Degree College">Krishnaveni Degree
                                                            College</option>
                                                        <option value=""></option>
                                                        <option value="S V S Degree College">S V S Degree College
                                                        </option>
                                                        <option value=""></option>
                                                        <option value="SRI VIVEKANANDA DEGREE COLLEGE">SRI VIVEKANANDA
                                                            DEGREE COLLEGE</option>
                                                        <option value=""></option>
                                                        <option value="Sri Y N Degree College">Sri Y N Degree College
                                                        </option>
                                                        <option value=""></option>
                                                        <option value="S V R M Degree College">S V R M Degree College
                                                        </option>
                                                        <option value=""></option>
                                                        <option value="S.V.G.M. GOVERNMENT DEGREE COLLEGE">S.V.G.M.
                                                            GOVERNMENT DEGREE COLLEGE</option>
                                                        <option value=""></option>
                                                        <option value="QSPIRE ">QSPIRE </option>
                                                        <option value=""></option>
                                                        <option value="SAI PARAMESHWARA DEGREE COLLEGE">SAI PARAMESHWARA
                                                            DEGREE COLLEGE</option>
                                                        <option value=""></option>
                                                        <option value="Satya institute of Technology and Management">
                                                            Satya institute of Technology and Management</option>
                                                        <option value=""></option>
                                                        <option value="Sri Hari Degree College">Sri Hari Degree College
                                                        </option>
                                                        <option value=""></option>
                                                        <option value="SVR DEGREE COLLEGE">SVR DEGREE COLLEGE</option>
                                                        <option value=""></option>
                                                        <option value=" BGBS Womens Degree College"> BGBS Womens Degree
                                                            College</option>
                                                        <option value=""></option>
                                                        <option value="Dadi Veerunaidu College">Dadi Veerunaidu College
                                                        </option>
                                                        <option value=""></option>
                                                        <option value="Aditya Degree College AWDCKKD">Aditya Degree
                                                            College AWDCKKD</option>
                                                        <option value=""></option>
                                                        <option value="Aditya Degree College ASCSKKD">Aditya Degree
                                                            College ASCSKKD</option>
                                                        <option value=""></option>
                                                        <option value="Aditya Degree College for women Rajahmundry">
                                                            Aditya Degree College for women Rajahmundry</option>
                                                        <option value=""></option>
                                                        <option value="Gayathri Degree College">Gayathri Degree College
                                                        </option>
                                                        <option value=""></option>
                                                        <option value="Aditya degree college">Aditya degree college
                                                        </option>
                                                        <option value=""></option>
                                                        <option value="universe">universe</option>
                                                        <option value=""></option>
                                                        <option value="BRR & GKR CHAMBERS DEGREE & PG COLLEGE ">BRR &
                                                            GKR CHAMBERS DEGREE & PG COLLEGE </option>
                                                        <option value=""></option>
                                                        <option value="SRI ABN & PRR COLLEGE OF SCIENCE">SRI ABN & PRR
                                                            COLLEGE OF SCIENCE</option>
                                                        <option value=""></option>
                                                        <option value="S. V. K. P. & Dr. K. S. Raju Arts and Science College (A)">
                                                            S. V. K. P. & Dr. K. S. Raju Arts and Science College (A)
                                                        </option>
                                                        <option value=""></option>
                                                        <option value="Gokul degree college">Gokul degree college
                                                        </option>
                                                        <option value=""></option>
                                                        <option value="Sir CR Reddy Degree College For Womens">Sir CR
                                                            Reddy Degree College For Womens</option>
                                                        <option value=""></option>
                                                        <option value="MCV DEGREE COLLEGE ">MCV DEGREE COLLEGE </option>
                                                        <option value=""></option>
                                                        <option value="DR.SARVEPALLI RADHA KRISHNA DEGREE COLLEGE">
                                                            DR.SARVEPALLI RADHA KRISHNA DEGREE COLLEGE</option>
                                                        <option value=""></option>
                                                        <option value="Andhra Pradesh residential degree College">Andhra
                                                            Pradesh residential degree College</option>
                                                        <option value=""></option>
                                                        <option value="DONBOSCO DEGREE COLLEGE">DONBOSCO DEGREE COLLEGE
                                                        </option>
                                                        <option value=""></option>
                                                        <option value="SRI SAMHITHA DEGREE COLLEGE">SRI SAMHITHA DEGREE
                                                            COLLEGE</option>
                                                        <option value=""></option>
                                                        <option value="SRI VENKATESHWARA DEGREE COLLEGE ">SRI
                                                            VENKATESHWARA DEGREE COLLEGE </option>
                                                        <option value=""></option>
                                                        <option value="SRI VASAVI DEGREE COLLEGE">SRI VASAVI DEGREE
                                                            COLLEGE</option>
                                                        <option value=""></option>
                                                        <option value="Demo Degree College">Demo Degree College</option>
                                                        <option value=""></option>
                                                        <option value="SV DEGREE COLLEGE PEDAGUMMULURU">SV DEGREE
                                                            COLLEGE PEDAGUMMULURU</option>
                                                        <option value=""></option>
                                                        <option value="AKRG Degree College">AKRG Degree College</option>
                                                        <option value=""></option>
                                                        <option value="CNR Arts & Science College- Annamayya">CNR Arts &
                                                            Science College- Annamayya</option>
                                                        <option value=""></option>
                                                        <option value="Sri Balaji Vidya Vihar degree college">Sri Balaji
                                                            Vidya Vihar degree college</option>
                                                        <option value=""></option>
                                                        <option value="MVN JS & RVR College of Arts and Science">MVN JS
                                                            & RVR College of Arts and Science</option>
                                                        <option value=""></option>
                                                        <option value="Jyothirmayee women’s degree college ">
                                                            Jyothirmayee women’s degree college </option>
                                                        <option value=""></option>
                                                        <option value="Sree Devi degree college ">Sree Devi degree
                                                            college </option>
                                                        <option value=""></option>
                                                        <option value="Sapthagiri Degree college Hindupur">Sapthagiri
                                                            Degree college Hindupur</option>
                                                        <option value=""></option>
                                                        <option value="SPVM Degree College Gorantla">SPVM Degree College
                                                            Gorantla</option>
                                                        <option value=""></option>
                                                        <option value="SVV Degree College, Penumuru ">SVV Degree
                                                            College, Penumuru </option>
                                                        <option value=""></option>
                                                        <option value="Sri Rachapudy Nagabhushanam Degree & P.G College, Badvel">
                                                            Sri Rachapudy Nagabhushanam Degree & P.G College, Badvel
                                                        </option>
                                                        <option value=""></option>
                                                        <option value="SMJL DEGREE COLLEGE, KADIRI-515 591">SMJL DEGREE
                                                            COLLEGE, KADIRI-515 591</option>
                                                        <option value=""></option>
                                                        <option value="SAI DEGREE COLLEGE">SAI DEGREE COLLEGE</option>
                                                        <option value=""></option>
                                                        <option value="SPACE DEGREE FOR WOMEN                                  ">
                                                            SPACE DEGREE FOR WOMEN </option>
                                                        <option value=""></option>
                                                        <option value="Vellore institute of Technology AP">Vellore
                                                            institute of Technology AP</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputUserName">Student Username <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <input type="text" class="form-control" name="student_username" id="exampleInputUserName" placeholder="Enter Username" minlength=8 maxlength=16 required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword">Password <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <input type="password" class="form-control" name="password" id='password' placeholder="Enter Password" minlength=8 maxlength=10 required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputRe-EnterPassword">Re-Enter Password <span style="color:#D3D3D3;font-size: 90%;">(Mandatory</span>
                                                        <span style="color:red;font-size: 90%;">*</span><span style="color:#D3D3D3;font-size: 90%;">)</span></label>
                                                    <input type="password" class="form-control" name="password" id='retypepassword' placeholder="Re-Enter Password" minlength=8 maxlength=10 required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputcode">Upload CV <span style="color:#D3D3D3;font-size: 90%;">(Optional)</span></label>
                                                    <input type="file" class="form-control" name="upload_cv" id="exampleInputcode" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputQualification">Internship Term </label>
                                                    <select class="form-control form-select select2" name="intership_term" data-bs-placeholder="select Internship Term" required>
                                                        <option value="short_term">Short Term</option>
                                                        <option value="long_term">Long Term</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <button type="submit" name="create" value="create" onclick="return check()" class="btn btn-primary mt-3 mb-0" style="text-align:right">Generate</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
                <!-- Container closed -->
            </div>

        </form>
        <script type="text/javascript">
            function check() {
                var b = document.getElementById('password').value;
                var c = document.getElementById('retypepassword').value;
                if (b != c) {
                    alert('Password doesnt match');
                    return false;
                } else
                    return true;
            }
        </script>
        <!-- Footer opened -->


    </div>
    <!-- End Page -->



    <?php include("./scripts.php"); ?>
</body>

</html>

</html>