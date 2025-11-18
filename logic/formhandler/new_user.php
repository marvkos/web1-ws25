<?php

if ("POST" !== $_SERVER["REQUEST_METHOD"]) {
    header("Location: ../../register.php");
    exit();
}

if (
    !isset($_POST["email"])
    || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)
) {
    header("Location: ../../register.php?invalid=email");
    exit();
}

// import the db connection
require_once "../db/connection.php";

$email = $_POST["email"];

// prepare the sql statement
$sql = "INSERT INTO `emails` (`email`) VALUES (?)";
$stmt = $db_conn->prepare($sql);
$stmt->bind_param("s", $email);

// save the email to the database
$stmt->execute();

header("Location: ../../register.php");
