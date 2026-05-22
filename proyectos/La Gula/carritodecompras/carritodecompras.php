<?php
session_start();

//Inicializa el carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

//Si vienen datos del formulario (agregar producto)
if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['precio'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $encontrado = false;
    //Buscar si ya existe en el carrito
    foreach ($_SESSION['carrito'] as &$producto) {
        if ($producto['id'] == $id) {
            $producto['cantidad']++;//Agregamos cantidad
            $encontrado = true;
            break;
        }
    }
    //Si no estaba en el carrito, lo agregamos
    if (!$encontrado) {
        $_SESSION['carrito'][] = [
            'id' => $id,
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => 1
        ];
    }
}

header("Location: carritodecompraslindo.php");//Dirige a la parte linda 
exit; 
?>

