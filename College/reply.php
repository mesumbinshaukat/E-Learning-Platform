<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
session_start();
include('../db_connection/connection.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);



if (!isset($_COOKIE['college_username']) && !isset($_COOKIE['college_password'])) {
    header('location: ../college_login.php');
    exit();
}

if (isset($_POST["recipient_id"]) && isset($_POST["sender_email"])) {

    $subject = $_POST["subject"];
    $recipient_id = $_POST["recipient_id"];
    $recipient_name = $_POST["recipient_name"];
    $recipient_email = $_POST["sender_email"];
    $college_id = $_POST["college_id"];
    $message = $_POST["message"];
    $sender_id = $_POST["sender_id"];
    $id = $_POST["id"];

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

        $mail->addAddress($recipient_email, $recipient_name);     //Add a recipient

        $mail->addCC('masumbinshaukat@gmail.com');

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->AltBody = strip_tags($message);


        $mail->addReplyTo($_COOKIE['college_email'], $_COOKIE['college_username']);

        if ($mail->send()) {
            $update_status = mysqli_prepare($conn, "UPDATE `mail` SET `reply_status` = 'Replied' WHERE `id` = ?");
            $update_status->bind_param("s", $id);
            $update_status->execute();

            $insert_query = mysqli_prepare($conn, "INSERT INTO `mail`(`sender_email`, `sender_id`, `sender_name`, `sender_type`, `recipient_email`, `recipient_id`, `recipient_name`, `subject`, `message`, `purpose`,`recipient_type`) VALUES (?,?,?,?,?,?,?,?,?,?,?)");

            $sender_type = "College";
            $recipient_type = "Admin";
            $sender_email = $_COOKIE['college_email'];
            $sender_name = $_COOKIE['college_username'];
            $purpose = "Reply To:" . $subject;


            $insert_query->bind_param(
                "sssssssssss",
                $sender_email,
                $sender_id,
                $sender_name,
                $sender_type,
                $recipient_email,
                $recipient_id,
                $recipient_name,
                $subject,
                $message,
                $purpose,

                $recipient_type
            );
            $insert_query->execute();
            session_destroy();
            session_start();

            $_SESSION["mail_sent"] = "Successfully sent!";
            header('location: ./inbox.php');
            exit();
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
