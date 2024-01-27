<?php
session_start();



if (isset($_GET['logout']) && $_GET['logout'] === 'true') {

    session_destroy();

    header("Location: /svetlana/index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your Account</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <div class="jumbotron">
        <?php if (isset($_SESSION['username'])) : ?>
            <h1 class="display-4">Welcome, <?php echo $_SESSION['username']; ?>!</h1>
            <p class="lead">You have successfully logged in.</p>
            <hr class="my-4">
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="/svetlana/index.php?logout=true" role="button">Logout</a>
                <a class="btn btn-secondary btn-lg" href="javascript:history.go(-1)" role="button">Back</a>
            </p>
        <?php else : ?>
            <p class="lead">You are not logged in.</p>
        <?php endif; ?>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>
