<?php
session_start();

// Require login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

// Include DB connection
require_once "dbconnection.php";

if (isset($_GET['id'])) {
    $bannerId = intval($_GET['id']);

    // Fetch banner path
    $stmt = $conn->prepare("SELECT path FROM banners WHERE id = ?");
    $stmt->bind_param("i", $bannerId);
    $stmt->execute();
    $stmt->bind_result($filePath);
    $stmt->fetch();
    $stmt->close();

    if ($filePath) {
        // Delete file from server
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        // Delete record from DB
        $stmt = $conn->prepare("DELETE FROM banners WHERE id = ?");
        $stmt->bind_param("i", $bannerId);
        if ($stmt->execute()) {
            $_SESSION['success'] = "Banner deleted successfully!";
        } else {
            $_SESSION['error'] = "Database error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        $_SESSION['error'] = "Banner not found.";
    }
} else {
    $_SESSION['error'] = "No banner ID provided.";
}

header("Location: dashboard.php");
exit();
