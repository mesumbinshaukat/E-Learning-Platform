<?php
include("./db_connection/connection.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    include("links.php")

    ?>
</head>

<body>
    <section>
        <?php include("./partials/navbar.php"); ?>
    </section>

    <div class="main">
        <!--page header section start-->
        <section>
            <div class="section-lg1 bg-gradient-primary text-white ">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-7">
                            <div class="page-header-content text-center">
                                <h1>Contact Us</h1>
                                <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                    <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                        <li class="breadcrumb-item"><a href="./index.php">Home</a></li>


                                        <li class="bi bi-arrow-right-short active" aria-current="page">Contact Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->

        <section class="section section-lg pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-md-4 mb-lg-0">
                        <div class="rounded-custom text-center shadow-sm">
                            <div class="card-body py-5">
                                <div class="icon icon-md text-secondary">
                                    <i class="bi bi-phone"></i>
                                </div>
                                <div>
                                    <h5 class="h6">Call Us</h5>
                                    <p class="text-muted mb-0">+92 3362100225</p>
                                    <p class="text-muted mb-0">+92 03220275616</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-md-4 mb-lg-0">
                        <div class="rounded-custom text-center shadow-sm">
                            <div class="card-body py-5">
                                <div class="icon icon-md text-secondary">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div>
                                    <h5 class="h6">Visit Us</h5>
                                    <p class="text-muted mb-0">Demo, Address - 12-3/45 AB
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-md-4 mb-lg-0">
                        <div class="rounded-custom text-center shadow-sm">
                            <div class="card-body py-5">
                                <div class="icon icon-md text-secondary">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div>
                                    <h5 class="h6">Mail Us</h5>
                                    <p class="text-muted mb-0">info@worldoftech.company
                                    </p>
                                    <p class="text-muted mb-0">
                                        info@mesum.online
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-md-4 mb-lg-0">
                        <div class="rounded-custom text-center shadow-sm">
                            <div class="card-body py-5">
                                <div class="icon icon-md text-secondary">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <div>
                                    <h5 class="h6">Live Chat</h5>
                                    <p class="text-muted mb-0">Support Available 24/7</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include("./partials/footer.php");
    ?>
</body>

</html>