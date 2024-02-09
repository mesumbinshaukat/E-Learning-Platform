<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['superadmin_username']) && !isset($_COOKIE['superadmin_password'])) {
    header('location: ../super-admin_login.php');
    exit();
}

if (isset($_GET["id"]) && isset($_GET["status"]) && $_GET["status"] == "complete") {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int)$id;
    $status = "Completed";
    $query = mysqli_prepare($conn, "UPDATE `batch` SET `status` = ? WHERE `id` = ?");
    $query->bind_param("si", $status, $id);

    if ($query->execute()) {
        header('location: ./managebatch.php');
        exit();
    } else {
        $error = $query->error;
        echo $error;
    }
} else {
    $error = "Something went wrong. Please try again later.";
    echo $error;
}
