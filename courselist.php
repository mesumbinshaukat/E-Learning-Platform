<?php
include("./db_connection/connection.php");
$select_courses = mysqli_query($conn, "SELECT * FROM `course`");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course List</title>
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
                                <h1 class="mt-3">Courses</h1>
                                <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                    <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                        <li class="breadcrumb-item"><a href="./index.php">Home</a>
                                        </li>

                                        <li class="bi bi-arrow-right-short active" aria-current="page">Courses</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->
        <section class="m-5">
            <div class="container text-center">
                <h1>Courses</h1>

                <div class="row">
                    <div class="col-12">
                        <?php if (mysqli_num_rows($select_courses) > 0) { ?>
                            <div class="owl-carousel owl-theme">
                                <?php while ($fetch_courses = mysqli_fetch_assoc($select_courses)) { ?>
                                    <div class="card" style="width: 20rem; border: 2px solid black;">
                                        <img class="card-img-top" src="./superadmin/assets/img/course/<?php echo $fetch_courses['main_image']; ?>" alt="Course Image">
                                        <div class="card-body">
                                            <h4 class="card-title">Course Name: <?php echo $fetch_courses['course_name']; ?>
                                            </h4>
                                            <h5 class="card-title">Topics Covered:
                                                <?php echo $fetch_courses['topics_covered']; ?></h5>
                                            <h5 class="card-title">Slots: <?php echo $fetch_courses['slots']; ?></h5>
                                            <p class="card-text">Pre-Requirements:
                                                <?php echo $fetch_courses['pre_requirements']; ?>
                                            <p>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        <?php } else {
                            echo "<h3>No Available Courses</h3>";
                        } ?>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include("./partials/footer.php");
    ?>

    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel();
        });
    </script>

</body>

</html>