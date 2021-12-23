<?php

function cargarControlador($controlador)
{

    $nombreControlador = $controlador . "Controller";
    $archivoControlador = 'controllers/' . $nombreControlador . '.php';
    require_once $archivoControlador;
    $control = new $nombreControlador();
    return $control;
}

function cargarAccion($controller, $accion, $id = null)
{
    if (isset($accion) && method_exists($controller, $accion)) {
        $controller->$accion();
    }
}
