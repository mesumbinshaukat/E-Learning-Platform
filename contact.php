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
    include("links.php");
  ?>
    <style>
        #livechat_div{
            transition: 0.3s ease-in-out; 
        }
        #livechat_div:hover{
            transform: scale(1.1);
            
        }
    </style>
  
</head>

<body>
   
    
    
    <section>
        <?php include("./partials/navbar.php"); ?>
    </section>
    <?php 
    if(isset($_SESSION['msg']) && $_SESSION['msg'] == true){
    echo "<script>toastr.success('Message Sent Successfully!');</script>";
    session_destroy();
    }?>
    <div class="main">
        <!--page header section start-->
        <section>
            <div class="section-lg1 bg-gradient-primary text-white ">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-7">
                            <div class="page-header-content text-center pt-2">
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

        <section class="mt-4">
    <div class="container">
        <form method="post" onsubmit="return validatecontactform()" action="./contact_backend.php">
  <div class="mb-3">
    <label class="form-label">Email address</label>
    <?php 
if(isset($_COOKIE['trainer_id'])){
    ?>
    <input type="email" class="form-control" value="<?php echo $_COOKIE['trainer_email']?>" placeholder="<?php echo $_COOKIE['trainer_email']?>" name="email" value="" id="email" >
    <?php } elseif(isset($_COOKIE['student_id'])){?>
        <input type="email" class="form-control" name="email" id="email" value="<?php echo $_COOKIE['student_email']?>" placeholder="<?php echo $_COOKIE['student_email']?>" >
        
        <?php } else {?>
            <input type="email" class="form-control" name="email" placeholder="Enter your email" id="email">
            
    <?php }?>
    <p id="email_msgerror" style="color:red;"></p>
  </div>
  <div class="mb-3">
    <label class="form-label">Username</label>
    <?php if(isset($_COOKIE['trainer_id'])){?>
    <input type="text" class="form-control" value="<?php echo $_COOKIE['trainer_username']?>" placeholder="<?php echo $_COOKIE['trainer_username']?>" name="username" id="username" >
    <?php } elseif(isset($_COOKIE['student_id'])) { ?>
        <input type="text" class="form-control" value="<?php echo $_COOKIE['student_username']?>" placeholder="<?php echo $_COOKIE['student_username']?>" name="username" id="username" >
        <?php } else {?>
            <input type="text" class="form-control" placeholder="Enter your username" name="username" id="username">

            <?php }?>
    <p id="username_msgerror" style="color:red;"></p>
  </div>

  <div class="mb-3">
    <label class="form-label">Message</label>
    <textarea type="text" class="form-control" id="message_box" rows="4" col="50" name="message" placeholder="Enter your Message"></textarea>
    <p id="message_msgerror" style="color:red;"></p>
  </div>
  <button type="submit" name="sendBtn" class="btn btn-dark">Send Message</button>
</form>
</div>
        </section>

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
                    <a href="./partials/chatsystem/chat.php">
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-md-4 mb-lg-0" id="livechat_div">
                        <div class="rounded-custom text-center shadow-sm">
                            <div class="card-body py-5">
                                <div class="icon icon-md text-secondary">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <div>
                                    <h5 class="h6">Live Chat</h5>
                                    <p class="text-muted mb-4">Support Available 24/7</p>
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <?php include("./partials/footer.php");
    ?>
<script>
    var errorMessage = "";
    function validatecontactform(){
        var username = document.getElementById("username").value;
        var email = document.getElementById("email").value;
        var message_box = document.getElementById("message_box").value;
        if(username == ""){
            errorMessage = "Please Enter Username"
            document.getElementById("username_msgerror").innerHTML = errorMessage;
        }  
        else{
            document.getElementById("username_msgerror").innerHTML = "";
        }
        if(email == ""){
            errorMessage = "Please Enter Email"
            document.getElementById("email_msgerror").innerHTML = errorMessage;
        }  
        else{
            document.getElementById("email_msgerror").innerHTML = "";
        }
        if(message_box == ""){
            errorMessage = "Please Enter Message";
            document.getElementById("message_msgerror").innerHTML = errorMessage;
        }  
        else{
            document.getElementById("message_msgerror").innerHTML = "";
        }

        if(errorMessage != ""){
            return false;
        }
        else{
            return true;
        }
    }
</script>
</body>

</html>