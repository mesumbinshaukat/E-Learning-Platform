<?php
include('../db_connection/connection.php');

$current_password = $_POST['current_password'];
$username = $_COOKIE["student_username"];

$query = mysqli_query($conn, "SELECT `password` FROM `student` WHERE `username`='$username'");
if ($query) {
    $hashed_password_from_db = mysqli_fetch_assoc($query)["password"];
    $verify_pass = password_verify($current_password, $hashed_password_from_db);

    echo json_encode(['verify_pass' => $verify_pass]);
} else {
    echo json_encode(['error' => 'Error executing the query']);
}