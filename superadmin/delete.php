<?php
session_start();
include('../db_connection/connection.php');

if (!isset($_COOKIE['superadmin_username']) && !isset($_COOKIE['superadmin_password'])) {
    header('location: ../super-admin_login.php');
    exit();
}
if (isset($_GET["user"]) && isset($_GET["id"]) && $_GET["user"] == "trainer") {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $sql = "DELETE FROM `trainer` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: trainersignup.php");
        exit();
    } else {
        echo mysqli_error($conn);
    }
} elseif (isset($_GET["user"]) && isset($_GET["id"]) && $_GET["user"] == "college") {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $sql = "DELETE FROM `college` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: collegelist.php");
        exit();
    } else {
        echo mysqli_error($conn);
    }
} elseif (isset($_GET["user"]) && isset($_GET["id"]) && $_GET["user"] == "student") {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $sql = "DELETE FROM `student` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: studentlist.php");
        exit();
    } else {
        echo mysqli_error($conn);
    }
} elseif (isset($_GET["type"]) && isset($_GET["id"]) && $_GET["type"] == "course") {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $sql = "DELETE FROM `course` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $_SESSION["success"] = "Course deleted successfully";
        header("location: managecourse.php");
        exit();
    } else {
        $_SESSION["error"] = "Something went wrong";
        header("location: managecourse.php");
        exit();
    }
} elseif (isset($_GET["type"]) && isset($_GET["id"]) && $_GET["type"] == "stream") {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $sql = "DELETE FROM `stream` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        if (isset($_SESSION['previous_url'])) {
            header('Location: ' . $_SESSION['previous_url']);
            exit();
        } else {
            // Fallback redirection if previous_url is not set
            header('Location: ./dashboard.php');
            exit();
        }
    } else {
        echo mysqli_error($conn);
    }
} elseif (isset($_GET["type"]) && isset($_GET["id"]) && $_GET["type"] == "allocate") {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $sql = "DELETE FROM `allocate_trainer_course` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        if (isset($_SESSION['previous_url'])) {
            header('location: ' . $_SESSION['previous_url']);
            exit();
        } else {
            // Fallback redirection if previous_url is not set
            $error = "Invalid Id";
            header("location:managetrainerallocation.php");
            exit();
        }
    } else {
        echo mysqli_error($conn);
    }
} elseif (isset($_GET["type"]) && isset($_GET["id"]) && $_GET["type"] == "student_unallocate") {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $sql = "DELETE FROM `student_allocate` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        if (isset($_SESSION['previous_url'])) {
            header('location: ' . $_SESSION['previous_url']);
            exit();
        } else {
            // Fallback redirection if previous_url is not set
            $error = "Invalid Id";
            header("location:coursestudentallocation.php");
            exit();
        }
    } else {
        echo mysqli_error($conn);
    }
} elseif (isset($_GET["id"]) && isset($_GET["type"]) && $_GET["type"] == "testimony") {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $sql = "DELETE FROM `testimonials` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:./manage_testimony.php");
        exit();
    } else {
        echo mysqli_error($conn);
    }
} elseif (isset($_GET["id"]) && isset($_GET["type"]) && $_GET["type"] == "internship") {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $sql = "DELETE FROM `internship` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:./manageinternship.php");
        exit();
    } else {
        echo mysqli_error($conn);
    }
} elseif (isset($_GET["id"]) && isset($_GET["type"]) && $_GET["type"] == "placement") {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $sql = "DELETE FROM `placement` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:./manageplacements.php");
        exit();
    } else {
        echo mysqli_error($conn);
    }
} elseif (isset($_GET["id"]) && isset($_GET["type"]) && $_GET["type"] == "internshipregistration") {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $sql = "DELETE FROM `internship_registration` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:./manageinternshipregistrations.php");
        exit();
    } else {
        echo mysqli_error($conn);
    }
} elseif (isset($_GET["id"]) && isset($_GET["type"]) && $_GET["type"] == "placementregistration") {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $sql = "DELETE FROM `placement_applicants` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location:./manageplacementsregistrations.php");
        exit();
    } else {
        echo mysqli_error($conn);
    }
} elseif (isset($_GET["m_id"])) {
    $id = filter_var($_GET["m_id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $sql = "DELETE FROM `batches_meetings` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: managemeetings.php");
        exit();
    } else {
        echo mysqli_error($conn);
    }
} elseif (isset($_GET["summary_id"])) {
    $id = filter_var($_GET["summary_id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $sql = "DELETE FROM `batches_summary` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: managesummary.php");
        exit();
    } else {
        echo mysqli_error($conn);
    }
} elseif (isset($_GET["r_id"])) {
    $id = filter_var($_GET["r_id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $sql = "DELETE FROM `batches_recording` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: managerecordings.php");
        exit();
    } else {
        echo mysqli_error($conn);
    }
} elseif (isset($_GET["task_id"])) {
    $id = filter_var($_GET["task_id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $sql = "DELETE FROM `batches_tasks` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("location: managetask.php");
        exit();
    } else {
        echo mysqli_error($conn);
    }
} elseif (isset($_GET["id"]) && isset($_GET["type"]) && $_GET["type"] == "course_category") {
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
    $id = (int) $id;
    $sql = "DELETE FROM `course_category` WHERE `id`='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $_SESSION["success"] = "Category deleted successfully";
        header("location: managecategory.php");
        exit();
    } else {
        $_SESSION["error"] = "Something went wrong";
        header("location: managecategory.php");
        exit();
    }
} else {
    if (isset($_SESSION['previous_url'])) {
        header('location: ' . $_SESSION['previous_url'] . '?error=Invalid_Request');
        exit();
    } else {
        $error = "Invalid Request";
        header("location:dashboard.php?error=" . $error . "");
        exit();
    }
}