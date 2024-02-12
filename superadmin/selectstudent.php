<!DOCTYPE html>
<html lang="en">


<head>
    <title>Select Student</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="">

    <?php include("./style.php") ?>
</head>

<body class="ltr main-body app sidebar-mini">
    <?php include("./switcher.php") ?>
    <!-- Page -->
    <div class="page">

        <div>

            <div class="main-header side-header sticky nav nav-item">
                <?php include("./partials/navbar.php") ?>
            </div>
            <!-- /main-header -->

            <!-- main-sidebar -->
            <div class="sticky">
                <?php include("./partials/sidebar.php") ?>
            </div>
            <!-- main-sidebar -->

        </div>

        <!-- main-content -->
        <div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">


                <div class="breadcrumb-header justify-content-between">
                    <div class="right-content">
                        <span class="main-content-title mg-b-0 mg-b-lg-1" style="color:#ff6700">Registration Allocation
                        </span>
                    </div>

                    <div class="justify-content-center mt-2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item tx-14"><a href="javascript:void(0);">Allocate</a></li>
                            <li class="breadcrumb-item ">Registered</li>
                            <li class="breadcrumb-item ">Students</li>
                        </ol>
                    </div>

                </div>
                <form method="post">
                    <div class="row row-sm">
                        <div class="form-group col-md-4">
                            <p><b> College Name</b> </p>

                            <select name="institution_name" class="form-control form-select"
                                data-bs-placeholder="Select Filter">

                                <!-- <option value="cz">none</option>
												<option value="de">College Name 1</option>
												<option value="pl" > College Name 2</option> -->

                                <option value="ALL" selected="selected">All</option>
                                <option value="GNR Degree College">GNR Degree College</option>

                            </select>
                        </div>






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
                                                <th class="border-bottom-0">student id</th>
                                                <th class="border-bottom-0">student name</th>

                                                <th class="border-bottom-0">College name</th>
                                                <th class="border-bottom-0">branch</th>
                                                <th class="border-bottom-0">full info.</th>
                                                <th class="border-bottom-0">allocate </th>




                                            </tr>
                                        </thead>
                                        <tbody>


                                            <tr>

                                            </tr>


                                        </tbody>

                                    </table>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <?php include("./scripts.php") ?>

</body>

</html>