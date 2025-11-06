<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "includes/head.php"; ?>
    <title>Progress</title>
</head>
<body>
    <?php require_once "includes/nav.php"; ?>

    <main class="container">
        <a href="logic/click_counter.php">Click</a>     
        <span><?php echo $_SESSION["counter"]; ?></span>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
