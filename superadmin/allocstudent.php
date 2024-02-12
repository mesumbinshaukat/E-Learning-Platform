<?php
session_start();

include('../db_connection/connection.php');

if (!isset($_COOKIE['superadmin_username']) && !isset($_COOKIE['superadmin_password'])) {
	header('location: ../super-admin_login.php');
	exit();
}

if (isset($_GET["id"]) && !empty($_GET["id"]) && isset($_GET["internship_id"]) && !empty($_GET["internship_id"])) {
	$id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
	$id = (int) $id;
	$internship_id = filter_var($_GET["internship_id"], FILTER_SANITIZE_NUMBER_INT);
	$internship_id = (int) $internship_id;
	$query = mysqli_prepare($conn, "INSERT INTO `student_selected_for_internship`(`student_id`, `internship_id`) VALUES (?,?)");
	$query->bind_param("ss", $id, $internship_id);
	if ($query->execute()) {
		header("location:./selectstudent.php?id=" . $internship_id);
		exit();
	}
} else {
	header("location:./selectstudent.php");
	exit();
}
