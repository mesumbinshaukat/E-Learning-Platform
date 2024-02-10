<?php
include('../db_connection/connection.php');

if (!isset($_COOKIE['trainer_username']) && !isset($_COOKIE['trainer_password'])) {
    header('location: ../trainer_login.php');
    exit();
}
if (isset($_GET["id"])) {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $sql = "DELETE FROM `internship_meetings` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: managemeetings.php");
        exit();
    } else {
        echo mysqli_error($conn);
    }
}
 elseif (isset($_GET["s_id"])) {
    $id = filter_var($_GET["s_id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $sql = "DELETE FROM `scheduling_internship` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: manageschedule.php");
        exit();
    } else {
        echo mysqli_error($conn);
    }

}
elseif (isset($_GET["summary_id"])) {
    $id = filter_var($_GET["summary_id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $sql = "DELETE FROM `internship_summary` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: managesummary.php");
        exit();
    } else {
        echo mysqli_error($conn);
    }

}