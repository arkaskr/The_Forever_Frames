<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}
require "../config.php";

$id = $_GET["id"];
$gallery = loadGallery();
if (isset($gallery[$id])) {
    unlink($gallery[$id]["path"]); // delete file
    array_splice($gallery, $id, 1);
    saveGallery($gallery);
}
header("Location: dashboard.php");
?>
