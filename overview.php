<?php require_once "logic/user_service.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "includes/head.php"; ?>
    <title>Overview</title>
</head>

<body>
    <?php require_once "includes/nav.php"; ?>

    <main class="container mt-3">
        <ul>
            <?php
            foreach (get_users() as $user) {
                echo <<<EOD
                <li class="flex between my-2">
                    $user->id ($user->email)
                    <form method="post" action="logic/formhandler/delete_user.php">
                        <input type="hidden" name="user_id" value="$user->id">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </li>
                EOD;
            }
            ?>
        </ul>
    </main>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
</body>

</html>
