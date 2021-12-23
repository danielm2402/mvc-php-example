
<?php
require_once "config/db.php";
require_once "controllers/index.php";
require_once "controllers/userController.php";
if (isset($_GET['type'])) {
    $controlador = cargarControlador($_GET['type']);
    if (isset($_GET['action'])) {
        cargarAccion($controlador, $_GET['action']);
    }
} else {
    $controlador = cargarControlador("user");
    cargarAccion($controlador, "index");
}


?>
