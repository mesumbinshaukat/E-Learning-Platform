<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="./assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
<link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />


<script src="./assets/js/jquery-3.5.1.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/jquery.magnific-popup.min.js"></script>
<script src="./assets/js/jquery.easing.min.js"></script>
<script src="./assets/js/mixitup.min.js"></script>
<script src="./assets/js/headroom.min.js"></script>
<script src="./assets/js/smooth-scroll.min.js"></script>
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/jquery.waypoints.min.js"></script>
<script src="./assets/js/jquery.countdown.min.js"></script>
<script src="./assets/js/validator.min.js"></script>
<script src="./assets/js/app.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>

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