<?php

$host = "localhost";
$username = "user";
$password = "userpw";
$database = "example";

$db_conn = new mysqli($host, $username, $password, $database);

if ($db_conn->connect_error) {
    echo "Connection Error: " . $db_obj->connect_error;
    exit();
}
