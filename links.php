<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<style>
.main {

    /* Media query for smaller screens */
    @media (max-width: 768px) {
        padding-top: 75px;
        /* Adjust the value for smaller screens */
    }
}

/* Reduce the navbar width on smaller screens */
@media (max-width: 767.98px) {
    .navbar {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }

    .navbar-brand img {
        max-width: 70px;
        /* Adjust the value as needed */
    }

    .navbar-toggler {
        padding: 0.25rem 0.75rem;
        /* Adjust the padding as needed */
        font-size: 0.875rem;
        /* Adjust the font size as needed */
    }
}



/* Add the following style to reduce the dropdown width on smaller screens */
@media (max-width: 767.98px) {
    .navbar-nav .nav-link {
        padding: 0.5rem 0.75rem;
        font-size: 0.9rem;
        /* Adjust the font size as needed */
    }

    .dropdown-menu {
        min-width: auto !important;
        /* Override Bootstrap's default width */
    }
}

/* Reduce the navbar height on larger screens */
@media (min-width: 768px) {
    .navbar {
        padding-top: 0.25rem;
        /* Adjust the padding as needed */
        padding-bottom: 0.25rem;
        /* Adjust the padding as needed */
    }

    .navbar-brand img {
        max-height: 40px;
        /* Adjust the max-height as needed */
    }

    .navbar-nav .nav-link {
        padding-top: 0.5rem;
        /* Adjust the padding as needed */
        padding-bottom: 0.5rem;
        /* Adjust the padding as needed */
    }

    .navbar-nav {
        display: flex;
        justify-content: center;
        /* Center-align the nav links */
        align-items: center;
        width: 100%;
    }

    .dropdown-menu {
        margin-top: 0;
        /* Remove the default margin top */
    }

    .navbar-toggler {
        padding: 0.25rem 0.75rem;
        /* Adjust the padding as needed */
        font-size: 1rem;
        /* Adjust the font size as needed */
    }
}
</style>

<script src="./assets/js/jquery-3.5.1.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/jquery.magnific-popup.min.js"></script>
<script src="./assets/js/jquery.easing.min.js"></script>
<script src="./assets/js/mixitup.min.js"></script>
<script src="./assets/js/headroom.min.js"></script>
<script src="./assets/js/smooth-scroll.min.js"></script>
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/jquery.waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/validator.min.js"></script>
<script src="./assets/js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<?php if (empty($_COOKIE["trainer_ip"]) && !isset($_COOKIE["trainer_ip"])) { ?>
<script>
let apiKey = '3caa1dbb-d5f8-430d-a5d8-3ee0623a9b31';

// Use AJAX to send the IP address to the server
$.getJSON('https://ipfind.co/me?auth=' + apiKey, function(data) {
    let ip = data["ip_address"];
    console.log(ip);

    // Use AJAX to send the IP address to the server
    $.ajax({
        type: 'POST',
        url: 'ip_script.php', // Replace with the actual PHP script URL
        data: {
            ip: ip
        },
        success: function(response) {
            console.log(response); // Log the response from the server
        },
        error: function(error) {
            console.error(error); // Log any errors
        }
    });
});
</script>
<?php } ?>