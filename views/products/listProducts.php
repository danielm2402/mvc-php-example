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
    <title>Products</title>
    <style>
        <?php include "style.css" ?>
    </style>

</head>

<body>
    <div class="products-page">
        <div class="buttons">
            <form method="POST" action="/mvc-php/index.php?type=user&action=getuser">
                <button><i class="fas fa-user"></i></button>
            </form>
            <form method="POST" action="/mvc-php/index.php?type=user&action=logout">
                <button><i class="fas fa-power-off"></i></button>
            </form>
        </div>

        <div class="container-table">
            <div class="table-title">
                <h4>Products</h4>
                <div>
                    <div class="table">
                        <div class="table-header">
                            <div>Id</div>
                            <div>Name</div>
                            <div>Price</div>
                        </div>
                        <div class="table-body">
                            <?php foreach ($data["products"] as $dato) {
                                echo '<div class="table-row">';
                                echo "<div>" . $dato["id"] . "</div>";
                                echo '<div class="product-name">' . $dato["name"] . "</div>";
                                echo "<div>" . $dato["price"] . "</div>";
                                echo "</div>";
                            }
                            ?>
                        </div>
                    </div>
                </div>


            </div>
</body>

</html>