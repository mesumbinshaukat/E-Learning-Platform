<?php
include('./db_connection/connection.php');
$select_jobs = mysqli_query($conn, "SELECT * FROM `placement`");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job List</title>
    <?php
    include("links.php")

    ?>
</head>

<body>
    <!--preloader start-->
    <div id="preloader">
        <div class="loader1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--preloader end-->

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
                            <h1 class="pt-5">Jobs</h1>
                            <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>


                                    <li class="bi bi-arrow-right-short active" aria-current="page">Jobs</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--page header section end-->
    <!--main section start-->
    <div class="container">
    <h2 class="text-center pt-5">Available Jobs</h2>
    <hr style="background-color:grey">
    </div>
    <main class="p-4 mb-5 mt-3">
    <div class="container">
      <?php if(mysqli_num_rows($select_jobs) > 0) {?>  
    <div class="owl-carousel owl-theme">
     <?php while($fetch_jobs = mysqli_fetch_assoc($select_jobs)) {?>   
  <div class="card" style="width: 20rem; border: 2px solid black;" >
    <img class="card-img-top" src="./superadmin/<?php echo $fetch_jobs['main_image']; ?>" alt="Job_main_image">
    <div class="card-body">
    <h4 class="card-title">Job Role: <?php echo $fetch_jobs['job_role']; ?></h4>
    <h5 class="card-title">Company: <?php echo $fetch_jobs['company_name']; ?></h5>
    <h5 class="card-title">Need <?php echo $fetch_jobs['years_open_experience'];?> Years of Experience</h5>
    <p class="card-text">Requirements: <?php echo $fetch_jobs['requirements']; ?><p>
  </div>
  </div>
  <?php }?>

</div>
<?php } else {?>
    <h2 class="p-2 text-center">No Jobs Available Right Now</h2>
    <?php }?>
</div>
    </main>
    <!--main section end-->
    <?php include("./partials/footer.php");
    ?>
<script>
    $(document).ready(function(){
  $('.owl-carousel').owlCarousel();
});
</script>


</body>

</html>