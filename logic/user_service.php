<?php

function get_users()
{
    require_once "db/connection.php";

    $sql = "SELECT * FROM `emails`";
    $result = $db_conn->query($sql);

    $users = [];

    while ($user = $result->fetch_object()) {
        $users[] = $user;
    }

    return $users;
}

