<?php
include "./../admin/auth.php";
include "./../../database/connect.php";
$deleted = $_GET["deleted"];
$stmt = $conn->prepare("DELETE FROM `cms` WHERE `id` = '$deleted'");
$stmt->execute();
echo "deleted id: " . $_GET["deleted"];
header("Location: ./delete.php");
?>