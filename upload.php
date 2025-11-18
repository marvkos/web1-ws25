<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "includes/head.php"; ?>
    <title>Upload</title>
</head>

<body>
    <?php require_once "includes/nav.php"; ?>

    <main class="container">
        <form action="logic/formhandler/upload_file.php" method="post" enctype="multipart/form-data">
            <input type="file" name="image" accept="image/png, image/jpeg">
            <button type="submit">Upload</button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>
