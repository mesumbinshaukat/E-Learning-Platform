<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internship List</title>

    <?php
    include("links.php")

    ?>
</head>

<body>
    <section>
        <?php include("./partials/navbar.php"); ?>
    </section>


    <!--page header section start-->
    <section>
        <div class="section-lg1 bg-gradient-primary text-white ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="page-header-content text-center">
                            <h1>Internships</h1>
                            <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>

                                    <li class="bi bi-arrow-right-short active" aria-current="page">Internships</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page header section end-->

    <?php include("./partials/footer.php");
    ?>
</body>

</html>