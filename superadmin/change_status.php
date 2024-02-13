<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['superadmin_username']) && !isset($_COOKIE['superadmin_password'])) {
    header('location: ../super-admin_login.php');
    exit();
}

if (isset($_GET["id"]) && !empty($_GET["id"]) && isset($_GET["type"]) && !empty($_GET["type"]) && $_GET["type"] == "delete") {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $status = "Deleted";
    $query = mysqli_prepare($conn, "UPDATE `course_registration` SET `status`=? WHERE `id`=?");
    mysqli_stmt_bind_param($query, "si", $status, $id);
    if (mysqli_stmt_execute($query)) {
        header('location: managecourseregistrations.php');
        exit();
    }
} else {
    header('location: managecourseregistrations.php');
    exit();
}
