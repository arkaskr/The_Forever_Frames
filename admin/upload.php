<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}
require "../config.php";

$type = $_POST["type"];
$targetDir = "../uploads/" . ($type === "video" ? "videos/" : "photos/");
if (!is_dir($targetDir)) mkdir($targetDir, 0777, true);

$fileName = time() . "_" . basename($_FILES["media"]["name"]);
$targetFile = $targetDir . $fileName;

if (move_uploaded_file($_FILES["media"]["tmp_name"], $targetFile)) {
    $stmt = $pdo->prepare("INSERT INTO gallery (type, path) VALUES (?, ?)");
    $stmt->execute([$type, $targetFile]);
    header("Location: dashboard.php");
} else {
    echo "Upload failed.";
}
?>
