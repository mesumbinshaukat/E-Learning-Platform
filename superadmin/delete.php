<?php
include('../db_connection/connection.php');

if (!isset($_COOKIE['superadmin_username']) && !isset($_COOKIE['superadmin_password'])) {
    header('location: ../super-admin_login.php');
    exit();
}
if (isset($_GET["user"]) && isset($_GET["id"]) && $_GET["user"] == "trainer") {
    $id = $_GET["id"];
    $sql = "DELETE FROM `trainer` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: trainersignup.php");
        exit();
    } else {
        echo mysqli_error($conn);
    }
} else {
    $error = "Invalid Request";
    header("location:trainersignup.php?error=" . $error . "");
    exit();
}