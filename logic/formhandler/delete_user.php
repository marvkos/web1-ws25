<?php

if ("POST" !== $_SERVER["REQUEST_METHOD"]) {
    header("Location: ../../overview.php");
    exit();
}

if (!isset($_POST["user_id"])) {
    header("Location: ../../overview.php");
    exit();
}

require_once "../db/connection.php";

$user_id = intval($_POST["user_id"]);

$sql = "DELETE FROM `emails` WHERE id = ?";
$stmt = $db_conn->prepare($sql);
$stmt->bind_param("d", $user_id);

$stmt->execute();

header("Location: ../../overview.php");
