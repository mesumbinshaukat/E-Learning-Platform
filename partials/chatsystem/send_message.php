<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the user and message from the POST request
    $user = $_POST["user"];
    $message = $_POST["message"];
    $username = $_SESSION["lc_username"];
    $email = $_SESSION["lc_email"];


    // Store the message in the database
    // $pdo = new PDO("mysql:host=localhost;dbname=e-learning", "root", "");
    // $pdo = new PDO("mysql:host=127.0.0.1:3306;dbname=u612827123_e_learning", "u612827123_root", ">S4F&n$59Qr(");
    $pdo = new PDO("mysql:host=sql207.infinityfree.com;dbname=if0_35870820_e_learning", "if0_35870820", "EpxotIyvIo");
    $stmt = $pdo->prepare("INSERT INTO messages (sender_id,message,user_type,username,email,message_type) VALUES (0,:message,:user,:username,:email,'Live_Chat')");
    $stmt->bindParam(':message', $message);
    $stmt->bindParam(':user', $user);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
}
