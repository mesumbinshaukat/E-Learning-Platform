<?php
include("./db_connection/connection.php");

$l_query = mysqli_query($conn, "SELECT * FROM `latest_course`");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Learning</title>
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

        <section class="section">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between justify-content-sm-center">
                    <div class="col-md-6 col-lg-6 mb-4 mb-md-4 mb-lg-0">
                        <div class="hero-slider-content">
                            <h1 class="display-2 pt-5">Welcome to <br> E-Learning Platform
                            </h1>
                            <p class="lead">To shewing another demands to. Marianne property cheerful informed at
                                striking
                                at. Clothes parlors however by cottage on. In views it or meant drift to. Be concern
                                parlors
                                settled or do shyness address. Remainder northward performed out for moonlight. Yet late
                                add
                                name was rent park from rich.</p>
                            <a href="./jobslist.php" class="btn btn-secondary mt-3">Jobs</a>
                            <a href="./internshipslist.php" class="btn btn-secondary mt-3">Internships</a>
                            <a href="./courselist.php" class="btn btn-secondary mt-3">Courses</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div>

                            <img class="pt-5"
                                src="https://worldoftech.company/wp-content/uploads/2023/10/site24x71112.webp"
                                alt="github logo">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about section start-->
        <section class="section section-lg">
            <div class="container">
                <h1 class="text-center">Why Choose Us? </h1>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-7 col-md-10 order-2 order-lg-1">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-6 col-md-6 mt-4">
                                <div class="feature-card text-md-center text-lg-left">
                                    <div>
                                        <div
                                            class="mb-4 p-3 p-md-4 icon icon-shape icon-md rounded-circle bg-default text-white">
                                            <i class="bi bi-link-45deg"></i>
                                        </div>
                                        <h5>Our Mission</h5>
                                        <p>We strive our best to give every student the Right course, creating an
                                            opportunity for a better learnability to become employable and a Company to
                                            acquire the Right candidate and trainers a Right platform to showcase their
                                            skills.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6 mt-4">
                                <div class="feature-card text-md-center text-lg-left">
                                    <div>
                                        <div
                                            class="mb-4 p-3 p-md-4 icon icon-shape icon-md rounded-circle bg-secondary text-white">
                                            <i class="bi bi-eye"></i>
                                        </div>
                                        <h5>Our Vision</h5>
                                        <p>To be the only platform which act as one stop solution for a student to
                                            become an Employee.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6 mt-4">
                                <div class="feature-card text-md-center text-lg-left">
                                    <div>
                                        <div
                                            class="mb-4 p-3 p-md-4 icon icon-shape icon-md rounded-circle bg-success text-white">
                                            <i class="bi bi-gem"></i>
                                        </div>
                                        <h5>Core Values</h5>
                                        <p>Being transparent and work towards the growth of the clients.</p>
                                        <p>Our team works with Passion.</p>
                                        <p>Quality is our way of being.</p>
                                        <p>Continuous Learning and we always strive to be accountable.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-6 mt-4">
                                <div class="feature-card text-md-center text-lg-left">
                                    <div>
                                        <div
                                            class="mb-4 p-3 p-md-4 icon icon-shape icon-md rounded-circle bg-primary text-white">
                                            <i class="bi bi-stars"></i>
                                        </div>
                                        <h5>Area of Expertise</h5>
                                        <p> We are expertise in upskilling the students with a skilled professional, and
                                            our Human Resource team holds expertise in all the core values of the
                                            organization at work.
                                            We are a team build with the sound knowledge in Industries of IT, Non IT,
                                            Pharmacy, Manufacturing, Constructions, Management and Creative fields.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-7 order-1 order-lg-2">
                        <div class="image-box fancy-radius p-2 bg-primary-alt">
                            <img class="fancy-radius img-fluid"
                                src="./assets/media/city-committed-education-collage-concept.jpg" alt="modern desk">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-lg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">

                        <h1>Latest Courses</h1>

                        <?php if (mysqli_num_rows($l_query) > 0) { ?>
                        <div class="owl-carousel owl-theme">



                            <?php while ($l_course = mysqli_fetch_assoc($l_query)) {
                                    $course_one = $l_course['course_one'];
                                    $course_two = $l_course['course_two'];
                                    $course_three = $l_course['course_three'];

                                    $courseOne = mysqli_query($conn, "SELECT * FROM `course` WHERE `id` = '$course_one'");
                                    $courseTwo = mysqli_query($conn, "SELECT * FROM `course` WHERE `id` = '$course_two'");
                                    $courseThree = mysqli_query($conn, "SELECT * FROM `course` WHERE `id` = '$course_three'");

                                    if (mysqli_num_rows($courseOne) > 0 && mysqli_num_rows($courseTwo) > 0 && mysqli_num_rows($courseThree) > 0) {
                                        $fetch_course_one = mysqli_fetch_assoc($courseOne);
                                        $fetch_course_two = mysqli_fetch_assoc($courseTwo);
                                        $fetch_course_three = mysqli_fetch_assoc($courseThree);
                                ?>

                            <div class="card mx-3" style="width: 20rem; border: 2px solid black;">
                                <img class="card-img-top"
                                    src="./superadmin/assets/img/course/<?php echo $fetch_course_one['main_image']; ?>"
                                    alt="Course Image">
                                <div class="card-body">
                                    <h4 class="card-title">Course Name:
                                        <?php echo $fetch_course_one['course_name']; ?>
                                    </h4>
                                    <h5 class="card-title">Topics Covered:
                                        <?php echo $fetch_course_one['topics_covered']; ?></h5>
                                    <h5 class="card-title">Slots: <?php echo $fetch_course_one['slots']; ?></h5>
                                    <p class="card-text">Pre-Requirements:
                                        <?php echo $fetch_course_one['pre_requirements']; ?></p>
                                </div>
                            </div>


                            <div class="card mx-3" style="width: 20rem; border: 2px solid black;">
                                <img class="card-img-top"
                                    src="./superadmin/assets/img/course/<?php echo $fetch_course_two['main_image']; ?>"
                                    alt="Course Image">
                                <div class="card-body">
                                    <h4 class="card-title">Course Name:
                                        <?php echo $fetch_course_two['course_name']; ?>
                                    </h4>
                                    <h5 class="card-title">Topics Covered:
                                        <?php echo $fetch_course_two['topics_covered']; ?></h5>
                                    <h5 class="card-title">Slots: <?php echo $fetch_course_two['slots']; ?></h5>
                                    <p class="card-text">Pre-Requirements:
                                        <?php echo $fetch_course_two['pre_requirements']; ?></p>
                                </div>
                            </div>


                            <div class="card mx-3" style="width: 20rem; border: 2px solid black;">
                                <img class="card-img-top"
                                    src="./superadmin/assets/img/course/<?php echo $fetch_course_three['main_image']; ?>"
                                    alt="Course Image">
                                <div class="card-body">
                                    <h4 class="card-title">Course Name:
                                        <?php echo $fetch_course_three['course_name']; ?></h4>
                                    <h5 class="card-title">Topics Covered:
                                        <?php echo $fetch_course_three['topics_covered']; ?></h5>
                                    <h5 class="card-title">Slots: <?php echo $fetch_course_three['slots']; ?>
                                    </h5>
                                    <p class="card-text">Pre-Requirements:
                                        <?php echo $fetch_course_three['pre_requirements']; ?></p>
                                </div>
                            </div>







                            <?php
                                    }
                                } ?>

                        </div>
                        <?php } else {
                            echo "<h3>No Available Courses</h3>";
                        } ?>

                    </div>
                </div>
            </div>
        </section>

        <section class="section section-lg  ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>How we are different from others</h2>
                            <p class="lead"> We are built with a uniqueness in the regular</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-5">
                        <!-- Icon box -->
                        <div class="icon-box text-center">
                            <div class="card-icon mb-4">
                                <img src="./assets/Icons/internship.png" alt="icon" width="60" class="img-fluid">
                            </div>
                            <h2 class="h5">Internship Management Software</h2>
                            <p class="mb-0">We are here with IMS with extended functionalities beyond the expectations.
                            </p>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <!-- Icon box -->
                        <div class="icon-box text-center">
                            <div class="card-icon mb-4">
                                <img src="./assets/Icons/coach.png" alt="icon" width="60" class="img-fluid">
                            </div>
                            <h2 class="h5">Experienced Trainers</h2>
                            <p class="mb-0"> Every Trainer at TriaRight holds real time experience in the respective
                                Industry.
                            </p>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <!-- Icon box -->
                        <div class="icon-box text-center">
                            <div class="card-icon mb-4">
                                <img src="./assets/Icons/customer-service.png" alt="icon" width="60" class="img-fluid">
                            </div>
                            <h2 class="h5">12/7 CS</h2>
                            <p class="mb-0"> A customer service strategy that involves providing support 12 hours a day,
                                and 7 days a week with immediate resolution
                            </p>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <!-- Icon box -->
                        <div class="icon-box text-center">
                            <div class="card-icon mb-4">
                                <img src="./assets/Icons/personality.png" alt="icon" width="60" class="img-fluid">
                            </div>
                            <h2 class="h5">Personality Development</h2>
                            <p class="mb-0">Not just the course TriaRight will also help the student in developing the
                                overall personality</p>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 mb-md-0">
                        <!-- Icon box -->
                        <div class="icon-box text-center">
                            <div class="card-icon mb-4">
                                <img src="./assets/Icons/rating-stars.png" alt="icon" width="60" class="img-fluid">
                            </div>
                            <h2 class="h5">Internships Oriented Training </h2>
                            <p class="mb-0">Most of our courses are designed based on the requirements of our clients
                                which helps the students become a Trainee followed to be an Employee
                            </p>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                    <div class="col-md-6 col-lg-4 mb-lg-0 mb-md-0">
                        <!-- Icon box -->
                        <div class="icon-box text-center">
                            <div class="card-icon mb-4">
                                <img src="./assets/Icons/salary.png" alt="icon" width="60" class="img-fluid">
                            </div>
                            <h2 class="h5">Placement Assistance </h2>
                            <p class="mb-0"> We strive hard to see every candidate as an employee and fill the gaps from
                                being a student to an employee
                            </p>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                </div>
            </div>
        </section>


        <section>
            <center>
                <h1>Testimonials</h1>
            </center>
            <div class="section section-sm ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="owl-carousel owl-theme clients-carousel">
                                <div class="item single-client">
                                    <img src="https://triaright.com/assets/img/web/15.jpeg" alt="client logo"
                                        class="img-fluid">
                                </div>
                                <div class="item single-client">
                                    <img src="https://triaright.com/assets/img/web/14.jpeg" alt="client logo"
                                        class="img-fluid">
                                </div>
                                <div class="item single-client">
                                    <img src="https://triaright.com/assets/img/web/13.jpeg" alt="client logo"
                                        class="img-fluid">
                                </div>
                                <div class="item single-client">
                                    <img src="https://triaright.com/assets/img/web/12.jpeg" alt="client logo"
                                        class="img-fluid">
                                </div>
                                <div class="item single-client">
                                    <img src="https://triaright.com/assets/img/web/11.jpeg" alt="client logo"
                                        class="img-fluid">
                                </div>
                                <div class="item single-client">
                                    <img src="https://triaright.com/assets/img/web/10.jpeg" alt="client logo"
                                        class="img-fluid">
                                </div>
                                <div class="item single-client">
                                    <img src="https://triaright.com/assets/img/web/2.jpeg" alt="client logo"
                                        class="img-fluid">
                                </div>
                                <div class="item single-client">
                                    <img src="https://triaright.com/assets/img/web/17.jpeg" alt="client logo"
                                        class="img-fluid">
                                </div>
                                <div class="item single-client">
                                    <img src="https://triaright.com/assets/img/web/1.jpeg" alt="client logo"
                                        class="img-fluid">
                                </div>
                                <div class="item single-client">
                                    <img src="https://triaright.com/assets/img/web/16.jpeg" alt="client logo"
                                        class="img-fluid">
                                </div>
                                <div class="item single-client">
                                    <img src="https://triaright.com/assets/img/web/7.jpeg" alt="client logo"
                                        class="img-fluid">
                                </div>
                                <div class="item single-client">
                                    <img src="https://triaright.com/assets/img/web/6.jpeg" alt="client logo"
                                        class="img-fluid">
                                </div>
                                <div class="item single-client">
                                    <img src="https://triaright.com/assets/img/web/5.jpeg" alt="client logo"
                                        class="img-fluid">
                                </div>
                                <div class="item single-client">
                                    <img src="https://triaright.com/assets/img/web/4.jpeg" alt="client logo"
                                        class="img-fluid">
                                </div>
                                <div class="item single-client">
                                    <img src="https://triaright.com/assets/img/web/3.jpeg" alt="client logo"
                                        class="img-fluid">
                                </div>
                                <div class="item single-client">
                                    <img src="https://triaright.com/assets/img/web/8.jpeg" alt="client logo"
                                        class="img-fluid">
                                </div>
                                <div class="item single-client">
                                    <img src="https://triaright.com/assets/img/web/9.jpeg" alt="client logo"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <?php
        include("./partials/footer.php");
        ?>

        <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                items: 3,
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 3000,
                responsiveClass: true,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 3,
                    }
                }

            });
        });
        </script>


</body>

</html>