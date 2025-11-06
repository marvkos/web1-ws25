<?php

session_start();

if (!isset($_SESSION["counter"])) {
    $_SESSION["counter"] = 1;
} else {
    $counter = $_SESSION["counter"];
    $counter++;
    $_SESSION["counter"] = $counter;
}

// Navigate back to progress page
header("Location: ../progress.php");
