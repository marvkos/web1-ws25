<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "includes/head.php"; ?>
    <title>Upload</title>
</head>

<body>
    <?php require_once "includes/nav.php"; ?>

    <main class="container">
        <form method="post" action="logic/formhandler/new_user.php">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input id="email" class="form-control <?php if (isset($_GET["invalid"]))
                    echo "is-invalid"; ?>" type="email" name="email">
            </div>
            <button class="btn btn-primary" type="submit">Register</button>
        </form>
    </main>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
</body>
