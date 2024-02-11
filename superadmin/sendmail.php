<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include('../db_connection/connection.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
echo "Before creating PHPMailer instance<br>";

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

echo "After creating PHPMailer instance<br>";

if (!isset($_COOKIE['superadmin_username']) && !isset($_COOKIE['superadmin_password'])) {
    header('location: ../super-admin_login.php');
    exit();
}

if (isset($_SESSION["sending_format"]) && isset($_SESSION["purpose"])) {
    if ($_SESSION["sending_format"] !== "All") {
        $recipient_name = $_SESSION["recipient_name"];
        $recipient_email = $_SESSION["recipient_email"];
    }
    $recipient_subject = $_SESSION["subject"];
    $recipient_message = $_SESSION["message"];
    $attachment = $_SESSION["attachment"];
    $purpose = $_SESSION["purpose"];


    //Create an instance; passing `true` enables exceptions

    try {
        //Server settings
        $mail->SMTPDebug = 0; //Enable verbose debug output
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = 'smtp.gmail.com';  //Set the SMTP server to send through
        $mail->SMTPAuth = true;  //Enable SMTP authentication
        $mail->Username = 'soccer.club.techwiz@gmail.com';  //SMTP username
        $mail->Password = 'nohbegvnrivjfhlc';  //SMTP password
        $mail->SMTPSecure = 'ssl'; //Enable implicit TLS encryption
        $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->Debugoutput = 'html'; // Output debug information as HTML

        // Check if the request is not AJAX
        if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') {
            // echo "Before creating PHPMailer instance<br>";
            // echo "After creating PHPMailer instance<br>";
        }

        //Recipients
        $mail->setFrom($_COOKIE["superadmin_email"], $_COOKIE["superadmin_username"]);
        if (!empty($recipient_email) && !empty($recipient_name)) {
            $mail->addAddress($recipient_email, $recipient_name);     //Add a recipient

        } else {
            $mail->addAddress("masumbinshaukat786@gmail.com", "Mesum Bin Shaukat");
        }

        //$mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('', '');
        if ($_SESSION["sending_format"] === "All" && $_SESSION["recipient"] === "College") {
            $college_query = mysqli_query($conn, "SELECT * FROM `college`");
            if (mysqli_num_rows($college_query) > 0) {
                while ($college = mysqli_fetch_assoc($college_query)) {
                    $mail->addBCC($college["email"], $college["name"]);
                }
            }
        } else if ($_SESSION["sending_format"] === "All" && $_SESSION["recipient"] === "Trainer") {

            $trainer_query = mysqli_query($conn, "SELECT * FROM `trainer`");
            if (mysqli_num_rows($trainer_query) > 0) {
                while ($trainer = mysqli_fetch_assoc($trainer_query)) {
                    $mail->addBCC($trainer["email"], $trainer["name"]);
                }
            }
        } else if ($_SESSION["sending_format"] === "All" && $_SESSION["recipient"] === "Student") {

            $student_query = mysqli_query($conn, "SELECT * FROM `student`");
            if (mysqli_num_rows($student_query) > 0) {
                while ($student = mysqli_fetch_assoc($student_query)) {
                    $mail->addBCC($student["email"], $student["name"]);
                }
            }
        } else if ($_SESSION["sending_format"] === "Batches" && isset($_SESSION["batch_id"])) {

            $batch_query = mysqli_query($conn, "SELECT * FROM `batch` WHERE `id` IN (" . $_SESSION["batch_id"] . ")");
            $trainer_id = mysqli_fetch_assoc($batch_query)["id"];
            $trainer_query = mysqli_query($conn, "SELECT * FROM `trainer` WHERE `id`='$trainer_id'");
            if (mysqli_num_rows($trainer_query) > 0) {
                while ($batch = mysqli_fetch_assoc($trainer_query)) {
                    $mail->addBCC($batch["email"], $batch["name"]);
                }
            }
        }
        // $mail->addCC('');
        // $mail->addBCC('');

        //Attachments
        if (!empty($attachment) && file_exists('./assets/docs/attachments/' . $attachment)) {
            $mail->addAttachment('./assets/docs/attachments/' . $attachment, $purpose); //Add attachments

        }
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = $recipient_subject;
        $mail->Body    = $recipient_message;
        $mail->AltBody = strip_tags($recipient_message);

        if ($mail->send()) {
            session_destroy();
            session_start();
            $_SESSION["mail_sent"] = "Successfully sent!";
            // Check if the request is not AJAX before redirecting
            if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') {
                header('location: ./compose.php');
                exit();
            }
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
