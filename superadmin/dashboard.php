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

    <title>Dashboard</title>

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
        <!-- main-content -->
        <div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">


                <!-- breadcrumb -->
                <div class="breadcrumb-header justify-content-between">
                    <div class="left-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700"> Dashboard</span>
                    </div>
                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-15"><a href="javascript:void(0);">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>

                        </ol>
                    </div>
                </div>
                <!-- /breadcrumb -->
                <div class="row">


                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="card-title pb-0  mb-2">Credentials - student</div>

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">

                                        <label class="tx-12">Sign up</label>
                                        <a href="candidatesignup.php" style="color:#1D71F2">
                                            <p class="font-weight-bold tx-24">16</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Pending</label>
                                        <a href="pendingstudent.php" style="color:#FF6700">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Total </label>
                                        <a href="studentlist.php" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">5049</p>
                                        </a>
                                    </div><!-- col -->

                                </div><!-- row -->

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <label class="tx-12">Rejected</label>
                                        <a href="studentlist.php?type=rejected" style="color:#FF0000">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Block</label>
                                        <a href="studentlist.php?type=block" style="color:#FF6700">
                                            <p class="font-weight-bold tx-24">1</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Active</label>
                                        <a href="studentlist.php?type=active" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">5032</p>
                                        </a>
                                    </div><!-- col -->

                                    <div class="col border-start text-center">
                                        <label class="tx-12">Delete</label>
                                        <a href="studentlist.php?type=delete" style="color:#000000">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->


                                </div><!-- row -->


                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="card-title pb-0  mb-2">Credentials - College</div>

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <label class="tx-12">Sign up</label>
                                        <a href="collegesignup.php" style="color:#1D71F2">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Pending</label>
                                        <a href="pendingcollege.php" style="color:#FF6700">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Total</label>
                                        <a href="collegelist.php" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">55</p>
                                        </a>
                                    </div><!-- col -->

                                </div><!-- row -->

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <label class="tx-12">Rejected</label>
                                        <a href="collegelist.php?type=rejected" style="color:#FF0000">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Block</label>
                                        <a href="collegelist.php?type=block" style="color:#FF6700">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Active</label>
                                        <a href="collegelist.php?type=active" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">55</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Delete</label>
                                        <a href="collegelist.php?type=delete" style="color:#000000">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->

                                </div><!-- row -->


                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="card-title pb-0  mb-2">Credentials - Company</div>

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <label class="tx-12">Sign up</label>
                                        <a href="companysignup.php" style="color:#1D71F2">
                                            <p class="font-weight-bold tx-24">9</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Pending</label>
                                        <a href="pendingcompany.php" style="color:#FF6700">
                                            <p class="font-weight-bold tx-24">1</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Total</label>
                                        <a href="managecompany.php" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">20</p>
                                        </a>
                                    </div><!-- col -->

                                </div><!-- row -->

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <label class="tx-12">Rejected</label>
                                        <a href="companylist.php?type=rejected" style="color:#FF0000">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Block</label>
                                        <a href="companylist.php?type=block" style="color:#FF6700">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Active</label>
                                        <a href="companylist.php?type=active" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">7</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Delete</label>
                                        <a href="companylist.php?type=delete" style="color:#000000">
                                            <p class="font-weight-bold tx-24">3</p>
                                        </a>
                                    </div><!-- col -->

                                </div><!-- row -->


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="card-title pb-0  mb-2">Credentials - College Mentor</div>

                            </div>
                            <div class="card-body">
                                <div class="row">


                                    <div class="col border-start text-center">
                                        <label class="tx-12">Total</label>
                                        <a href="managementor.php" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">14</p>
                                        </a>
                                    </div><!-- col -->

                                </div><!-- row -->

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!--										<div class="col text-center">-->
                                    <!--											<label class="tx-12">Rejected</label>-->
                                    <!--<a href="mentorlist.php?type=rejected" style="color:#FF0000"><p class="font-weight-bold tx-24">14</p></a>-->
                                    <!--										</div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Block</label>
                                        <a href="mentorlist.php?type=block" style="color:#FF6700">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Active</label>
                                        <a href="mentorlist.php?type=active" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">14</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Delete</label>
                                        <a href="mentorlist.php?type=delete" style="color:#000000">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->

                                </div><!-- row -->


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="card-title pb-0  mb-2">Credentials - Trainer</div>

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <label class="tx-12">Sign up</label>
                                        <a href="trainersignup.php" style="color:#1D71F2">
                                            <p class="font-weight-bold tx-24">6</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Pending</label>
                                        <a href="pendingtrainer.php" style="color:#FF6700">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Total</label>
                                        <a href="trainerlist.php" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">43</p>
                                        </a>
                                    </div><!-- col -->


                                </div><!-- row -->

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center">
                                        <label class="tx-12">Rejected</label>
                                        <a href="trainerlist.php?type=rejected" style="color:#FF0000">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Block</label>
                                        <a href="trainerlist.php?type=block" style="color:#FF6700">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Active</label>
                                        <a href="trainerlist.php?type=active" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">34</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Delete</label>
                                        <a href="trainerlist.php?type=delete" style="color:#000000">
                                            <p class="font-weight-bold tx-24">3</p>
                                        </a>
                                    </div><!-- col -->
                                </div><!-- row -->


                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="card-title pb-0  mb-2">Credentials - Employee</div>

                            </div>
                            <div class="card-body">
                                <div class="row">


                                    <div class="col border-start text-center">
                                        <label class="tx-12">Total</label>
                                        <a href="manageemployee.php" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">8</p>
                                        </a>
                                    </div><!-- col -->

                                </div><!-- row -->

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!--										<div class="col text-center">-->
                                    <!--											<label class="tx-12">Rejected</label>-->
                                    <!--<a href="employeelist.php?type=rejected" style="color:#FF0000"><p class="font-weight-bold tx-24">8</p></a>-->
                                    <!--										</div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Block</label>
                                        <a href="employeelist.php?type=block" style="color:#FF6700">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Active</label>
                                        <a href="employeelist.php?type=active" style="color:#4AA02C">
                                            <p class="font-weight-bold tx-24">8</p>
                                        </a>
                                    </div><!-- col -->
                                    <div class="col border-start text-center">
                                        <label class="tx-12">Delete</label>
                                        <a href="employeelist.php?type=delete" style="color:#000000">
                                            <p class="font-weight-bold tx-24">0</p>
                                        </a>
                                    </div><!-- col -->
                                </div><!-- row -->


                            </div>
                        </div>
                    </div>

                </div>

                <div class="breadcrumb-header justify-content-between">
                    <div class="left-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Courses</span>
                    </div>
                </div>
                <div class="row row-sm">
                    <div class="col-lg-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-header pb-1">
                                <div class="card-title mb-2">Listings</div>
                            </div>
                            <div class="card-body p-0">
                                <div class="list-group projects-list border-0">
                                    <a href="courselist.php" style="color:#1d71f2"
                                        class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Registered</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>18</b></h4>
                                        </div>
                                    </a>
                                    <a href="courselist.php?type=active" style="color:#4AA02C"
                                        class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Active</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>18</b></h4>
                                        </div>
                                    </a>
                                    <a href="courselist.php?type=pause" style="color:#ff6700"
                                        class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Paused</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>0</b></h4>
                                        </div>
                                    </a>
                                    <a href="courselist.php?type=delete" style="color:#000000"
                                        class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Delete</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>0</b></h4>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-header pb-1">
                                <div class="card-title mb-2">Registrations</div>
                            </div>
                            <div class="card-body p-0">
                                <div class="list-group projects-list border-0">
                                    <a href="courseregistrationslist.php" style="color:#1d71f2"
                                        class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Applied</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>4046</b></h4>
                                        </div>
                                    </a>
                                    <a href="pendingcourseregistrations.php" style="color:#ff6700"
                                        class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Pending</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>0</b></h4>
                                        </div>
                                        <a href="managecourseregistrations.php" style="color:#4AA02C"
                                            class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <p class="tx-13 mb-2 font-weight-semibold ">Accepted</p>
                                                <h4 class=" mb-0 font-weight-semibold  tx-18"><b>3978</b></h4>
                                            </div>
                                        </a>

                                    </a>
                                    <a href="courseregistrationslist.php?type=rejected" style="color:#ff0000"
                                        class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Rejected</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>12</b></h4>
                                        </div>
                                    </a>
                                    <a href="courseregistrationslist.php?type=delete" style="color:#ff0000"
                                        class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Deleted</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>50</b></h4>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-header pb-1">
                                <div class="card-title mb-2">Allocation</div>
                            </div>
                            <div class="card-body p-0">
                                <div class="list-group projects-list border-0">
                                    <a href="managecourseregistrations.php" style="color:#1d71f2"
                                        class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Available</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>3978</b></h4>
                                        </div>
                                    </a>
                                    <a href="managestudentallocation.php" style="color:#4AA02C"
                                        class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Allocated</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>3921</b></h4>
                                        </div>
                                    </a>
                                    <a href="managestudentdeallocation.php" style="color:#ff6700"
                                        class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Unallocated</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>57</b></h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-header pb-1">
                                <div class="card-title mb-2">Student batch</div>
                            </div>
                            <div class="card-body p-0">
                                <div class="list-group projects-list border-0">
                                    <a href="batchlist.php" style="color:#1d71f2"
                                        class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Created</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>52</b></h4>
                                        </div>
                                    </a>
                                    <a href="batchlist.php?type=active" style="color:#ff6700"
                                        class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Active</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>16</b></h4>
                                        </div>
                                    </a>
                                    <a href="batchlist.php?type=complete" style="color:#4AA02C"
                                        class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Completed</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>31</b></h4>
                                        </div>
                                    </a>
                                    <a href="batchlist.php?type=delete" style="color:#4AA02C"
                                        class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Deleted</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>5</b></h4>
                                        </div>
                                    </a>
                                    <a href="allocationstudentlist.php?type=batch" style="color:#ff6700"
                                        class="list-group-item list-group-item-action flex-column align-items-start border-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="tx-13 mb-2 font-weight-semibold ">Students</p>
                                            <h4 class=" mb-0 font-weight-semibold  tx-18"><b>3980</b></h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="breadcrumb-header justify-content-between">
                    <div class="left-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Others</span>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="card-title pb-0  mb-2">Payments Analysis</div>

                            </div>
                            <div class="card-body">

                                <div class="col text-center">
                                    <label class="tx-14">Expected Revenue</label>

                                    <a href="managecourseregistrations.php" style="color:#1d71f2">
                                        <p class="font-weight-bold tx-24">14922500</p>
                                    </a>
                                </div>

                                <!-- col -->


                                <!--			<div class="col border-start text-center">-->
                                <!--				<label class="tx-14">Acutal Revenue</label>-->
                                <!--<a  style="color:#000000"><p class="font-weight-bold tx-24">6364800</p></a>-->
                                <!--			</div>-->
                                <!-- col -->

                                <div class="col border-start text-center">
                                    <label class="tx-14">Received college </label>
                                    <a href="paymentslist.php?type=receivedcollege" style="color:#4AA02c">
                                        <p class="font-weight-bold tx-24">10000</p>
                                    </a>
                                </div><!-- col -->


                                <div class="col border-start text-center">
                                    <label class="tx-14">Received individuals </label>
                                    <a href="paymentslist.php?type=receivedindividuals" style="color:#4AA02c">
                                        <p class="font-weight-bold tx-24">2147968289</p>
                                    </a>
                                </div><!-- col -->


                                <div class="col border-start text-center">
                                    <label class="tx-14">Hold </label>
                                    <a href="paymentslist.php?type=hold" style="color:#ff6700">
                                        <p class="font-weight-bold tx-24"></p>
                                    </a>
                                </div><!-- col -->

                                <div class="col border-start text-center">
                                    <label class="tx-14">Remaining</label>
                                    <a href="paymentslist.php?type=remaining" style="color:#ff0000">
                                        <p class="font-weight-bold tx-24">-2133055789</p>
                                    </a>
                                </div><!-- col -->

                                <div class="col border-start text-center">
                                    <label class="tx-14">Rejected </label>
                                    <a href="paymentslist.php?type=rejected" style="color:#000000">
                                        <p class="font-weight-bold tx-24">2147502852</p>
                                    </a>
                                </div><!-- col -->



                            </div>

                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="card-title pb-0  mb-2">Internships</div>

                            </div>
                            <div class="card-body">

                                <div class="col text-center">
                                    <label class="tx-14">Listed</label>
                                    <a href="internshipcompanylist.php" style="color:#1d71f2">
                                        <p class="font-weight-bold tx-24">1</p>
                                    </a>
                                </div><!-- col -->
                                <div class="col border-start text-center">
                                    <label class="tx-14">Companies</label>
                                    <a style="color:#1d71f2" href="managecompanyinternship.php">
                                        <p class="font-weight-bold tx-24">1</p>
                                    </a>
                                </div><!-- col -->
                                <div class="col border-start text-center">
                                    <label class="tx-14">Vacancies</label>
                                    <a href="managecompanyinternship.php" style="color:#1d71f2">
                                        <p class="font-weight-bold tx-24">50</p>
                                    </a>
                                </div><!-- col -->

                                <div class="col border-start text-center">
                                    <label class="tx-14">Applicants</label>
                                    <a href="internshipregistrationlist.php" style="color:#000000">
                                        <p class="font-weight-bold tx-24">12</p>
                                    </a>
                                </div><!-- col -->

                                <div class="col border-start text-center">
                                    <label class="tx-14">Hold</label>
                                    <a href="pendinginternshipregistrations.php" style="color:#ff6700">
                                        <p class="font-weight-bold tx-24">2</p>
                                    </a>
                                </div><!-- col -->

                                <div class="col border-start text-center">
                                    <label class="tx-14">Selected </label>
                                    <a href="internshipregistrationlist.php?type=selected" style="color:#4AA20C">
                                        <p class="font-weight-bold tx-24">9</p>
                                    </a>
                                </div><!-- col -->
                                <div class="col border-start text-center">
                                    <label class="tx-14">Not selected & Deleted </label>
                                    <a href="internshipregistrationlist.php?type=notselected" style="color:#FF0000">
                                        <p class="font-weight-bold tx-24">1</p>
                                    </a>
                                </div><!-- col -->



                            </div>

                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="card-title pb-0  mb-2">Placements</div>

                            </div>
                            <div class="card-body">

                                <div class="col text-center">
                                    <label class="tx-14">Listed</label>
                                    <a href="placementcompanylist.php" style="color:#1d71f2">
                                        <p class="font-weight-bold tx-24">0</p>
                                    </a>
                                </div><!-- col -->
                                <div class="col border-start text-center">
                                    <label class="tx-14">Companies</label>
                                    <a style="color:#1d71f2">
                                        <p class="font-weight-bold tx-24">0</p>
                                    </a>
                                </div><!-- col -->
                                <div class="col border-start text-center">
                                    <label class="tx-14">Vacancies</label>
                                    <a href="placementcompanylist.php" style="color:#1d71f2">
                                        <p class="font-weight-bold tx-24"></p>
                                    </a>
                                </div><!-- col -->

                                <div class="col border-start text-center">
                                    <label class="tx-14">Applicants</label>
                                    <a href="placementcompanylist.php" style="color:#000000">
                                        <p class="font-weight-bold tx-24">4</p>
                                    </a>
                                </div><!-- col -->

                                <div class="col border-start text-center">
                                    <label class="tx-14">Hold</label>
                                    <a href="pendingplacementsregistrations.php" style="color:#ff6700">
                                        <p class="font-weight-bold tx-24">0</p>
                                    </a>
                                </div><!-- col -->

                                <div class="col border-start text-center">
                                    <label class="tx-14">Selected </label>
                                    <a href="placementsregistrationlist.php?type=selected" style="color:#4AA20C">
                                        <p class="font-weight-bold tx-24">0</p>
                                    </a>
                                </div><!-- col -->
                                <div class="col border-start text-center">
                                    <label class="tx-14">Not selected & Deleted </label>
                                    <a href="placementsregistrationlist.php?type=notselected" style="color:#FF0000">
                                        <p class="font-weight-bold tx-24">4</p>
                                    </a>
                                </div><!-- col -->



                            </div>

                        </div>
                    </div>




                </div>
                <!-- End Page -->


                <?php include("./scripts.php"); ?>

</body>

</html>