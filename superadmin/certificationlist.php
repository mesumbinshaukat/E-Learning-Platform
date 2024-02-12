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

     <!-- Switcher -->
     <div class="switcher-wrapper">
         <div class="demo_changer">
             <div class="form_holder sidebar-right1">
                 <div class="row">
                     <div class="predefined_styles">

                         <div class="swichermainleft text-center">
                             <h4>LTR AND RTL VERSIONS</h4>
                             <div class="skin-body">
                                 <div class="switch_section">
                                     <div class="switch-toggle d-flex mt-2">
                                         <span class="me-auto">LTR</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch25"
                                                 id="myonoffswitch54" class="onoffswitch2-checkbox" checked>
                                             <label for="myonoffswitch54" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                     <div class="switch-toggle d-flex mt-2">
                                         <span class="me-auto">RTL</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch25"
                                                 id="myonoffswitch55" class="onoffswitch2-checkbox">
                                             <label for="myonoffswitch55" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="swichermainleft">
                             <h4>Navigation Style</h4>
                             <div class="skin-body">
                                 <div class="switch_section">
                                     <div class="switch-toggle d-flex">
                                         <span class="me-auto">Vertical Menu</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15"
                                                 id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
                                             <label for="myonoffswitch34" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                     <div class="switch-toggle d-flex mt-2">
                                         <span class="me-auto">Horizantal Click Menu</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15"
                                                 id="myonoffswitch35" class="onoffswitch2-checkbox">
                                             <label for="myonoffswitch35" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                     <div class="switch-toggle d-flex mt-2">
                                         <span class="me-auto">Horizantal Hover Menu</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15"
                                                 id="myonoffswitch111" class="onoffswitch2-checkbox">
                                             <label for="myonoffswitch111" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="swichermainleft">
                             <h4>Light Theme Style</h4>
                             <div class="skin-body">
                                 <div class="switch_section">
                                     <div class="switch-toggle d-flex">
                                         <span class="me-auto">Light Theme</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1"
                                                 id="myonoffswitch1" class="onoffswitch2-checkbox">
                                             <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                     <div class="switch-toggle d-flex">
                                         <span class="me-auto">Light Primary</span>
                                         <div class="">
                                             <input class="wd-25 ht-25 input-color-picker color-primary-light"
                                                 value="#38cab3" id="colorID" type="color" data-id="bg-color"
                                                 data-id1="bg-hover" data-id2="bg-border" data-id7="transparentcolor"
                                                 name="lightPrimary">
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="swichermainleft">
                             <h4>Dark Theme Style</h4>
                             <div class="skin-body">
                                 <div class="switch_section">
                                     <div class="switch-toggle d-flex mt-2">
                                         <span class="me-auto">Dark Theme</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1"
                                                 id="myonoffswitch2" class="onoffswitch2-checkbox">
                                             <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                     <div class="switch-toggle d-flex mt-2">
                                         <span class="me-auto">Dark Primary</span>
                                         <div class="">
                                             <input class="wd-25 ht-25 input-dark-color-picker color-primary-dark"
                                                 value="#38cab3" id="darkPrimaryColorID" type="color" data-id="bg-color"
                                                 data-id1="bg-hover" data-id2="bg-border" data-id3="primary"
                                                 data-id8="transparentcolor" name="darkPrimary">
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="swichermainleft">
                             <h4>Transparent Style</h4>
                             <div class="skin-body">
                                 <div class="switch_section">
                                     <div class="switch-toggle d-flex mt-2 mb-3">
                                         <span class="me-auto">Transparent Theme</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1"
                                                 id="myonoffswitchTransparent" class="onoffswitch2-checkbox">
                                             <label for="myonoffswitchTransparent" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                     <div class="switch-toggle d-flex">
                                         <span class="me-auto">Transparent Primary</span>
                                         <div class="">
                                             <input
                                                 class="wd-30 ht-30 input-transparent-color-picker color-primary-transparent"
                                                 value="#38cab3" id="transparentPrimaryColorID" type="color"
                                                 data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
                                                 data-id3="primary" data-id4="primary" data-id9="transparentcolor"
                                                 name="tranparentPrimary">
                                         </div>
                                     </div>
                                     <div class="switch-toggle d-flex mt-2">
                                         <span class="me-auto">Transparent Background</span>
                                         <div class="">
                                             <input
                                                 class="wd-30 ht-30 input-transparent-color-picker color-bg-transparent"
                                                 value="#38cab3" id="transparentBgColorID" type="color" data-id5="body"
                                                 data-id6="theme" data-id9="transparentcolor"
                                                 name="transparentBackground">
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="swichermainleft">
                             <h4>Transparent Bg-Image Style</h4>
                             <div class="skin-body">
                                 <div class="switch_section">
                                     <div class="switch-toggle d-flex">
                                         <span class="me-auto">BG-Image Primary</span>
                                         <div class="">
                                             <input
                                                 class="wd-30 ht-30 input-transparent-color-picker color-bgImg-transparent"
                                                 value="#38cab3" id="transparentBgImgPrimaryColorID" type="color"
                                                 data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
                                                 data-id3="primary" data-id4="primary" data-id9="transparentcolor"
                                                 name="tranparentPrimary">
                                         </div>
                                     </div>
                                     <div class="switch-toggle">
                                         <a class="bg-img1 bg-img" href="javascript:void(0);"><img
                                                 src="assets/img/media/bg-img1.jpg" id="bgimage1" alt="switch-img"></a>
                                         <a class="bg-img2 bg-img" href="javascript:void(0);"><img
                                                 src="assets/img/media/bg-img2.jpg" id="bgimage2" alt="switch-img"></a>
                                         <a class="bg-img3 bg-img" href="javascript:void(0);"><img
                                                 src="assets/img/media/bg-img3.jpg" id="bgimage3" alt="switch-img"></a>
                                         <a class="bg-img4 bg-img" href="javascript:void(0);"><img
                                                 src="assets/img/media/bg-img4.jpg" id="bgimage4" alt="switch-img"></a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="swichermainleft leftmenu-styles">
                             <h4>Leftmenu Styles</h4>
                             <div class="skin-body">
                                 <div class="switch_section">
                                     <div class="switch-toggle d-flex">
                                         <span class="me-auto">Light Menu</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2"
                                                 id="myonoffswitch3" class="onoffswitch2-checkbox" checked>
                                             <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                     <div class="switch-toggle d-flex mt-2">
                                         <span class="me-auto">Color Menu</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2"
                                                 id="myonoffswitch4" class="onoffswitch2-checkbox">
                                             <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                     <div class="switch-toggle d-flex mt-2">
                                         <span class="me-auto">Dark Menu</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2"
                                                 id="myonoffswitch5" class="onoffswitch2-checkbox">
                                             <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                     <div class="switch-toggle d-flex mt-2">
                                         <span class="me-auto">Gradient Menu</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2"
                                                 id="myonoffswitch25" class="onoffswitch2-checkbox">
                                             <label for="myonoffswitch25" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="swichermainleft header-styles">
                             <h4>Header Styles</h4>
                             <div class="skin-body">
                                 <div class="switch_section">
                                     <div class="switch-toggle d-flex">
                                         <span class="me-auto">Light Header</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3"
                                                 id="myonoffswitch6" class="onoffswitch2-checkbox" checked>
                                             <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                     <div class="switch-toggle d-flex mt-2">
                                         <span class="me-auto">Color Header</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3"
                                                 id="myonoffswitch7" class="onoffswitch2-checkbox">
                                             <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                     <div class="switch-toggle d-flex mt-2">
                                         <span class="me-auto">Dark Header</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3"
                                                 id="myonoffswitch8" class="onoffswitch2-checkbox">
                                             <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                     <div class="switch-toggle d-flex mt-2">
                                         <span class="me-auto">Gradient Header</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3"
                                                 id="myonoffswitch26" class="onoffswitch2-checkbox">
                                             <label for="myonoffswitch26" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="swichermainleft">
                             <h4>Layout Width Styles</h4>
                             <div class="skin-body">
                                 <div class="switch_section">
                                     <div class="switch-toggle d-flex">
                                         <span class="me-auto">Full Width</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4"
                                                 id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                             <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                     <div class="switch-toggle d-flex mt-2">
                                         <span class="me-auto">Boxed</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4"
                                                 id="myonoffswitch10" class="onoffswitch2-checkbox">
                                             <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="swichermainleft">
                             <h4>Layout Positions</h4>
                             <div class="skin-body">
                                 <div class="switch_section">
                                     <div class="switch-toggle d-flex">
                                         <span class="me-auto">Fixed</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5"
                                                 id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                             <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                     <div class="switch-toggle d-flex mt-2">
                                         <span class="me-auto">Scrollable</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5"
                                                 id="myonoffswitch12" class="onoffswitch2-checkbox">
                                             <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="swichermainleft vertical-switcher">
                             <h4>Sidemenu layout Styles</h4>
                             <div class="skin-body">
                                 <div class="switch_section">
                                     <div class="switch-toggle d-flex">
                                         <span class="me-auto">Default Menu</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                 id="myonoffswitch13" class="onoffswitch2-checkbox default-menu"
                                                 checked>
                                             <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                     <div class="switch-toggle d-flex mt-2">
                                         <span class="me-auto">Closed Menu</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                 id="myonoffswitch30" class="onoffswitch2-checkbox default-menu">
                                             <label for="myonoffswitch30" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                     <div class="switch-toggle d-flex mt-2">
                                         <span class="me-auto">Icon with Text</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                 id="myonoffswitch14" class="onoffswitch2-checkbox">
                                             <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                     <div class="switch-toggle d-flex mt-2">
                                         <span class="me-auto">Icon Overlay</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                 id="myonoffswitch15" class="onoffswitch2-checkbox">
                                             <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                     <div class="switch-toggle d-flex mt-2">
                                         <span class="me-auto">Hover Submenu</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                 id="myonoffswitch32" class="onoffswitch2-checkbox">
                                             <label for="myonoffswitch32" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                     <div class="switch-toggle d-flex mt-2">
                                         <span class="me-auto">Hover Submenu style 1</span>
                                         <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6"
                                                 id="myonoffswitch33" class="onoffswitch2-checkbox">
                                             <label for="myonoffswitch33" class="onoffswitch2-label"></label>
                                         </p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="swichermainleft">
                             <h4>Reset All Styles</h4>
                             <div class="skin-body">
                                 <div class="switch_section my-4">
                                     <button class="btn btn-danger btn-Block ResetCustomStyles" type="button">Reset All
                                     </button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- End Switcher -->

     <!-- Loader -->
     <!--<div id="global-loader">-->
     <!--	<img src="assets/img/preloader.svg" class="loader-img" alt="Loader">-->
     <!--</div>-->
     <!-- /Loader -->

     <!-- Page -->
     <div class="page">

         <div>

         <div class="main-header side-header sticky nav nav-item">
                
                <?php include('./partials/navbar.php'); ?>
            
        </div>
             <!-- /main-header -->

             <!-- main-sidebar -->
             <div class="sticky">
                 <?php include('./partials/sidebar.php');?>
             </div>
             <!-- main-sidebar -->

         </div> <!-- main-content -->
         <div class="main-content app-content">

             <!-- container -->
             <div class="main-container container-fluid">


                 <div class="breadcrumb-header justify-content-between">
                     <div class="right-content">
                         <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Certification
                             List</span>
                     </div>

                     <div class="justify-content-center mt-2">
                         <ol class="breadcrumb">
                             <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Internship Management</a>
                             </li>
                             <li class="breadcrumb-item ">Certification</li>
                             <li class="breadcrumb-item ">List</li>
                         </ol>
                     </div>

                 </div>
                 <form method="post">
                     <div class="row row-sm">
                         <div class="form-group col-md-3">
                             <b> <label>College name</label> </b>

                             <select name="college_name" class="form-control form-select"
                                 data-bs-placeholder="Select Filter">

                                 <option value="ALL" selected="selected">ALL</option>
                                 <option value="Aditya degree college">Aditya degree college</option>
                                 <option value="Aditya Degree College AWDCKKD">Aditya Degree College AWDCKKD</option>
                                 <option value="Aditya degree College for women">Aditya degree College for women
                                 </option>
                                 <option value="Aditya Degree College for women Rajahmundry">Aditya Degree College for
                                     women Rajahmundry</option>
                                 <option value="BRR & GKR CHAMBERS DEGREE & PG COLLEGE ">BRR & GKR CHAMBERS DEGREE & PG
                                     COLLEGE </option>
                                 <option value="DONBOSCO DEGREE COLLEGE">DONBOSCO DEGREE COLLEGE</option>
                                 <option value="DR.SARVEPALLI RADHA KRISHNA DEGREE COLLEGE">DR.SARVEPALLI RADHA KRISHNA
                                     DEGREE COLLEGE</option>
                                 <option value="Gayathri Degree College">Gayathri Degree College</option>
                                 <option value="GNR Degree College">GNR Degree College</option>
                                 <option value="MCV DEGREE COLLEGE">MCV DEGREE COLLEGE</option>
                                 <option value="S V S Degree College">S V S Degree College</option>
                                 <option value="S. V. K. P. & Dr. K. S. Raju Arts and Science College (A)">S. V. K. P. &
                                     Dr. K. S. Raju Arts and Science College (A)</option>
                                 <option value="S.V.G.M. GOVERNMENT DEGREE COLLEGE">S.V.G.M. GOVERNMENT DEGREE COLLEGE
                                 </option>
                                 <option value="Sir CR Reddy Degree College For Womens">Sir CR Reddy Degree College For
                                     Womens</option>
                                 <option value="SNR Degree College">SNR Degree College</option>
                                 <option value="SRI ABN & PRR COLLEGE OF SCIENCE">SRI ABN & PRR COLLEGE OF SCIENCE
                                 </option>
                                 <option value="Sri Aditya degree college">Sri Aditya degree college</option>
                                 <option value=" Sri Aditya degree college"> Sri Aditya degree college</option>
                                 <option value="Sri Hari Degree College">Sri Hari Degree College</option>
                                 <option value="SRI VIVEKANANDA DEGREE COLLEGE">SRI VIVEKANANDA DEGREE COLLEGE</option>
                                 <option value=" Sri Y N Degree College"> Sri Y N Degree College</option>
                                 <option value="Sri Y N Degree College">Sri Y N Degree College</option>
                                 <option value="Sri Y.N Degree College ">Sri Y.N Degree College </option>
                                 <option value="Sri yn college ">Sri yn college </option>
                                 <option value="Sri.y.n college ">Sri.y.n college </option>
                                 <option value="SV Degree College">SV Degree College</option>
                                 <option value="Svr  degree college">Svr degree college</option>
                                 <option value="Svr degree clg">Svr degree clg</option>
                                 <option value="SVR DEGREE COLLEGE">SVR DEGREE COLLEGE</option>
                                 <option value="testing">testing</option>
                                 <option value="universe">universe</option>
                                 <option value=""></option>
                                 <option value="Gayatri degree college, payakaraopeta ">Gayatri degree college,
                                     payakaraopeta </option>
                                 <option value=" BGBS Womens Degree College"> BGBS Womens Degree College</option>
                                 <option value="Andhra Pradesh residential degree College">Andhra Pradesh residential
                                     degree College</option>
                                 <option value="Gayatri Degree & PG College">Gayatri Degree & PG College</option>
                                 <option value="SRI VASAVI DEGREE COLLEGE">SRI VASAVI DEGREE COLLEGE</option>
                                 <option value="Sri Y.N College ">Sri Y.N College </option>
                                 <option value="Sri venkateshwara University  ">Sri venkateshwara University </option>
                                 <option value="Demo Degree College">Demo Degree College</option>
                                 <option value=" Sri yn college "> Sri yn college </option>
                                 <option value="SRI VENKATESHWARA DEGREE COLLEGE ">SRI VENKATESHWARA DEGREE COLLEGE
                                 </option>
                                 <option value="CNR Arts & Science College- Annamayya">CNR Arts & Science College-
                                     Annamayya</option>
                                 <option value="MVN JS & RVR College of Arts and Science">MVN JS & RVR College of Arts
                                     and Science</option>
                                 <option value="Jyothirmayee women�s degree college">Jyothirmayee women�s degree college
                                 </option>
                                 <option value="Sree Devi degree college ">Sree Devi degree college </option>
                                 <option value="Sri Balaji Vidya Vihar degree college">Sri Balaji Vidya Vihar degree
                                     college</option>
                                 <option value="SPVM Degree College Gorantla">SPVM Degree College Gorantla</option>
                                 <option value="S.p.v.m degree college ">S.p.v.m degree college </option>
                                 <option value="Sapthagiri Degree college Hindupur">Sapthagiri Degree college Hindupur
                                 </option>
                                 <option value="SMJL DEGREE COLLEGE, KADIRI-515 591">SMJL DEGREE COLLEGE, KADIRI-515 591
                                 </option>
                                 <option value="SVV Degree College, Penumuru ">SVV Degree College, Penumuru </option>
                                 <option value="Sri Y N College ">Sri Y N College </option>
                                 <option value="SAI DEGREE COLLEGE">SAI DEGREE COLLEGE</option>
                                 <option value="Jyothirmayee women’s degree college ">Jyothirmayee women’s degree
                                     college </option>
                             </select>
                         </div>
                         <div class="form-group col-md-3">
                             <b> <label>Course name</label> </b>

                             <select name="name_of_the_course" class="form-control form-select"
                                 data-bs-placeholder="Select Filter">

                                 <option value="ALL" selected="selected">ALL</option>
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
                         <div class="form-group col-md-3">
                             <P><b> Status</b> </p>
                             <select name="Certification" class="form-control form-select"
                                 data-bs-placeholder="Select Filter">
                                 <option value="ALL">ALL</option>
                                 <option value="0">pending</option>
                                 <option value="1">uploaded</option>
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
                                                 <th class="border-bottom-0">student id</th>
                                                 <th class="border-bottom-0">student name</th>
                                                 <th class="border-bottom-0">College name</th>
                                                 <th class="border-bottom-0">Course name</th>
                                                 <th class="border-bottom-0">status</th>




                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 <td>1</td>
                                                 <td>2270</td>
                                                 <td>Undi Rohith</td>
                                                 <td>Aditya degree college</td>
                                                 <td>Voice process</td>
                                                 <td style=color:#ff6700>
                                                     <b>
                                                         pending <b>
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


                 <div class="modal fade" id="allocate">
                     <div class="modal-dialog" role="document">
                         <div class="modal-content modal-content-demo">
                             <div class="modal-header">
                                 <h6 class="modal-title">confirmation Notification</h6><button aria-label="Close"
                                     class="btn-close" data-bs-dismiss="modal" type="button"><span
                                         aria-hidden="true">&times;</span></button>
                             </div>
                             <div class="modal-body">

                                 <p> Are you sure you want to allocate a student??</p>
                             </div>
                             <div class="modal-footer">
                                 <button class="btn ripple btn-success" type="button">allocate</button>
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