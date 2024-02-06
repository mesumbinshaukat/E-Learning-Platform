<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the user and message from the POST request
    $user = $_POST["user"];
    $message = $_POST["message"];
    $username = $_SESSION["lc_username"];	
    $email = $_SESSION["lc_email"];	


    // Store the message in the database
    $pdo = new PDO("mysql:host=localhost;dbname=e-learning", "root", "");
    $stmt = $pdo->prepare("INSERT INTO messages (sender_id,message,user_type,username,email,message_type) VALUES (0,:message,:user,:username,:email,'Live_Chat')");
    $stmt->bindParam(':message', $message);
    $stmt->bindParam(':user', $user);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
}
?>
