<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header("Location: /mvc-php/views/login/login.php");
    exit();
}

$now = time();

if ($now > $_SESSION['expire']) {
    session_destroy();
    header("Location: /mvc-php/views/login/login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/fb77cdb577.js" crossorigin="anonymous"></script>
    <title>User</title>
    <style>
        <?php include "style.css" ?>
    </style>

</head>

<body>
    <div class="user-page">
        <div class="container-card">
            <div class="container-back">
                <form method="POST" action="/mvc-php/index.php?type=products&action=index">
                    <button type="submit"><i class="fas fa-arrow-left"></i></button>
                </form>
            </div>
            <h2>User</h2>
            <div class="user-photo">
                <img src="https://mymodernmet.com/wp/wp-content/uploads/2019/09/100k-ai-faces-3.jpg" />
            </div>
            <div>
                <div class="user-name">
                    <h3><?php echo $_SESSION["username"]; ?></h3>
                </div>
                <div class="user-rol">
                    <h3><?php echo $_SESSION["rol"]; ?></h3>
                </div>
            </div>

        </div>
    </div>
</body>

</html>