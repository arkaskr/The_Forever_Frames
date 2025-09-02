<?php
session_start();

// Require login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

// Include DB connection
require_once "dbconnection.php";

// Check current banner count
$countSql = "SELECT COUNT(*) AS total FROM banners";
$countResult = $conn->query($countSql);
$row = $countResult->fetch_assoc();
$totalBanners = $row['total'];

// If already 5 banners, stop
if ($totalBanners >= 5) {
    $_SESSION['error'] = "⚠️ You can only upload up to 5 banners. Delete one first.";
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["banner"]) && $_FILES["banner"]["error"] == 0) {
        $fileName = basename($_FILES["banner"]["name"]);
        $fileTmp  = $_FILES["banner"]["tmp_name"];
        $fileSize = $_FILES["banner"]["size"];
        $fileType = mime_content_type($fileTmp);

        // Allowed types
        $allowed = ["image/jpg", "image/jpeg", "image/png"];

        if (in_array($fileType, $allowed)) {
            if ($fileSize <= 10 * 1024 * 1024) { // 10MB max
                $uploadDir = __DIR__ . "/bannerimages/";
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                $newFileName = "banner_" . time() . "_" . $fileName;
                $uploadPath = $uploadDir . $newFileName;

                if (move_uploaded_file($fileTmp, $uploadPath)) {
                    // Save path to DB
                    $stmt = $conn->prepare("INSERT INTO banners (path) VALUES (?)");
                    $stmt->bind_param("s", $uploadPath);

                    if ($stmt->execute()) {
                        $_SESSION['success'] = "Banner uploaded successfully!";
                    } else {
                        $_SESSION['error'] = "Database error: " . $stmt->error;
                    }

                    $stmt->close();
                } else {
                    $_SESSION['error'] = "Failed to move uploaded file.";
                }
            } else {
                $_SESSION['error'] = "File size too large. Max 10MB allowed.";
            }
        } else {
            $_SESSION['error'] = "Only JPG and PNG files are allowed.";
        }
    } else {
        $_SESSION['error'] = "No file uploaded or upload error.";
    }

    header("Location: dashboard.php");
    exit();
}
