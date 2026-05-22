<?php
//Iniciar sesión solo si no hay ninguna activa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

//Inicializar carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

//Agregar producto desde el form
if (isset($_POST['id']) && isset($_POST['nosmbre']) && isset($_POST['precio'])) { // Verifica si llegaron los datos id, nombre y precio desde el formulario
    $id = $_POST['id'];        // Guarda el id del producto enviado por POST
    $nombre = $_POST['nombre']; // Guarda el nombre del producto enviado por POST
    $precio = $_POST['precio']; // Guarda el precio del producto enviado por POST

    $encontrado = false; // Bandera para saber si el producto ya está en el carrito

    foreach ($_SESSION['carrito'] as &$producto) { // Recorre todos los productos que ya están en el carrito (en la sesión)
        if ($producto['id'] == $id) { // Si el producto actual del carrito tiene el mismo id que el que queremos agregar
            $producto['cantidad']++;  // Aumenta la cantidad de ese producto en 1
            $encontrado = true;       // Marca que ya estaba en el carrito

            break;                    // Sale del bucle, ya no hace falta seguir buscando
        }
    }
    unset($producto); // Libera la referencia creada con & para evitar problemas posteriores

    if (!$encontrado) { // Si después de recorrer el carrito el producto no estaba...
        $_SESSION['carrito'][] = [   // ...lo agrega como un nuevo producto en el carrito
            'id' => $id,
            'nombre' => $nombre,
            'precio' => $precio,
            'cantidad' => 1 // Empieza con cantidad 1
        ];
    }
}


//Vaciar carrito si se solicita
if (isset($_POST['vaciar'])) {
    $_SESSION['carrito'] = [];
}
//Actualiza cantidad manual
if (isset($_POST['id']) && isset($_POST['nueva_cantidad'])) {
    $id = $_POST['id'];
    $nuevaCantidad = (int)$_POST['nueva_cantidad'];

    if ($nuevaCantidad > 0) {
        foreach ($_SESSION['carrito'] as &$producto) {
            if ($producto['id'] == $id) {
                $producto['cantidad'] = $nuevaCantidad;
                break;
            }
        }
        unset($producto);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="carritodecompras.css" />
<title>Carrito de Compras</title>
</head>
<body>
 <header class="main-header">
  <div class="logo">
    <a href="/index.php"
        ><img src="/imagenes/logo.png" alt="Home" />
    </a>
    <div class="texto-logo">
      <h1>Carrito de Compras</h1>
      <p>La Gula</p>
    </div>
  </div>

  <nav class="nav-bar">
    <a href="/carta/carta.php">Carta</a>
    <a href="/index.php#historia">Historia</a>
          <?php
if (!empty($_SESSION["usuario"]) && isset($_SESSION["usuario"]["nombre"])) {
    echo '<a href="/perfil/perfil.php">Perfil</a>';
    echo '<a href="/ofertas/ofertaindex.php">Ofertas</a>';
    echo '<a href="/reseñas/reseñas.php">Reseñas</a>';
    echo '<a href="/reserva/reservas.php">Reserva</a>';
} else {
    echo '<a href="/iniciosesion/iniciosesion.php">Iniciar Sesión</a>';
    
}
?> 
  </nav>
</header>
<p class="title">🛒 Carrito de Compras</p>

<?php if(empty($_SESSION['carrito'])): ?><!--Si el carrito está vacío, muestra este msg-->
  <p style="text-align:center;">Tu carrito está vacío. <a class="volver" href="/index.php">Volver al menú</a></p>
<?php else: ?> <!--Sino el, muestra esta tabla-->
  <table>
    <tr>
      <th>Producto</th><!--Con 4 secciones-->
      <th>Precio</th><!--Precio del platillo-->
      <th>Cantidad</th><!--La cantidad de los productos-->
      <th>Subtotal</th><!--El total de los productos acumulados-->
    </tr>
    <?php 
      $total = 0; //Esta variable determina el precio total a pagar
      foreach($_SESSION['carrito'] as $item): //Recorre todo el carrito item por item
        $subtotal = $item['precio'] * $item['cantidad']; //Calcula todos los subtotales
        $total += $subtotal; //Y por último lo suma todo en el total a pagar
    ?>
    <tr>
      <td><?= $item['nombre'] ?></td><!--Nombre del producto-->
      <td>$<?= number_format($item['precio'],0,",",".") ?></td> <!--Muestra el precio del producto-->
      <!--El 0 es para que no haya decimales, la , para separar los decimales (aunque no se pueda), y el . es para los miles-->
      <td>
        <form action="carritodecompraslindo.php" method="post" style="display:inline;">
          <!--Este form modifica la cantidad (resta) siempre que el user toque el '-' -->
  <input type="hidden" name="id" value="<?= $item['id'] ?>">
  <input type="hidden" name="nueva_cantidad" value="<?= $item['cantidad'] - 1 ?>" >
  <button type="submit" name="actualizar" class="minus">−</button> <!--Este submit cambia la cant, siempre que se toque-->
</form>

<span><?= $item['cantidad'] ?></span><!--Muestra la cantidad-->

<form action="carritodecompraslindo.php" method="post" style="display:inline;">
      <!--Este form modifica la cantidad (suma) siempre que el user toque el '+' -->
  <input type="hidden" name="id" value="<?= $item['id'] ?>">
  <input type="hidden" name="nueva_cantidad" value="<?= $item['cantidad'] + 1 ?>" >
  <button type="submit" name="actualizar" class="plus">+</button> <!--Este submit cambia la cant, siempre que se toque-->
</form>


</td>
      <td>$<?= number_format($subtotal,0,",",".") ?></td> <!--Muestra el subtotal-->
    </tr>
    <?php endforeach; ?>
    <tr>
      <th colspan="3">Total</th>
      <th>$<?= number_format($total,0,",",".") ?></th><!--Muestra el total-->
    </tr>
  </table>

  <div class="acciones">
    <form method="post">
      <button type="submit" name="vaciar" class="btn">Vaciar Carrito</button><!--Este botón vacía todo el carrito-->
    </form>
    <br>
    <form action="final.php" method="post">
      <button type="submit" name="comprar" class="btn">Finalizar Compra</button><!--Este botón envía a comprar-->
    </form>
    <br>
    <br>
    <a href="/ofertas/ofertaindex.php" class="btn">Seguir Comprando</a> <!--Manda a ofertas para que el user siga comprando-->
  </div>
<?php endif; ?>
<!--Footer-->
 <footer class="main-footer">
  <div class="footer-content">
    <div class="footer-section">
          <h3>Redes Sociales</h3>
          <div class="redes-sociales">
            <p>📸 Instagram: @LaGulaRestaurant</p>
            <p>📘 Facebook: Restaurante La Gula</p>
            <p>🐦 Twitter: @LaGulaRestaurant</p>
          </div>
        </div>

    <div class="footer-section">
      <h3>Contacto</h3>
      <p>Correo: lagula@restaurante.com</p>
      <p>Teléfono: +34 123 456 789</p>
    </div>

    <div class="footer-section">
      <h3>Ubicación</h3>
      <p>La Falda, Cordoba </p>
      <p>Calle Sabores 123</p>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2025 La Gula. Todos los derechos reservados.</p>
  </div>
</footer>

</body>
</html>
