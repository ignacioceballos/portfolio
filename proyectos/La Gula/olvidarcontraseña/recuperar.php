<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="olvidarcontraseña.css" />
    <title>Recuperar Contraseña</title>
  </head>
  <body>
     <header class="main-header">
  <div class="logo">
    <a href="/index.php"
        ><img src="/imagenes/logo.png" alt="Home" />
    </a>
    <div class="texto-logo">
      <h1>Recuperar Contraseña</h1>
      <p>La Gula</p>
    </div>
  </div>

  <nav class="nav-bar">
    <a href="/carta/carta.php">Carta</a>
    <a href="#historia">Historia</a>
          <?php
if (!empty($_SESSION["usuario"]) && isset($_SESSION["usuario"]["nombre"])) {
    echo '<a href="/perfil/perfil.php">Perfil</a>';
    echo '<a href="/ofertas/ofertaindex.php">Ofertas</a>';
    echo '<a href="/reseñas/reseñas.php">Reseñas</a>';
    echo '<a href="/reserva/reservas.php">Reserva</a>';
    echo '<a href="/carritodecompras/carritodecompraslindo.php">Carrito</a>';
} else {
    echo '<a href="/iniciosesion/iniciosesion.php">Iniciar Sesión</a>';
    
}
?> 
  </nav>
</header>
    <div class="form-container" >
      <p class="title">Recuperar Contraseña</p>
      <p>
<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Acceso no permitido. Envía el formulario desde el sitio.");
}

//Validar que venga el correo
if (!isset($_POST['correo']) || empty(trim($_POST['correo']))) {
    die("Debes ingresar un correo electrónico.");
}

$correo = trim($_POST['correo']);

// Cargar usuarios desde JSON
$archivoUsuarios = '../registro/registro.json';
if (!file_exists($archivoUsuarios)) {
    die("Archivo de usuarios no encontrado.");
}

$usuarios = json_decode(file_get_contents($archivoUsuarios), true);
if ($usuarios === null) {
    die("Error al leer el archivo de usuarios.");
}

$encontrado = false;
foreach ($usuarios as &$usuario) {
    if (isset($usuario['correo']) && $usuario['correo'] === $correo) {
        $encontrado = true;
        $token = bin2hex(random_bytes(50));//token seguro
        $usuario['token'] = $token;
        $usuario['token_expira'] = date("Y-m-d H:i:s", strtotime('+1 hour'));
        break;
    }
}

if ($encontrado) {
    //Guardar cambios en el JSON
    file_put_contents($archivoUsuarios, json_encode($usuarios, JSON_PRETTY_PRINT));
    //Crear enlace de recuperación
    $enlace = "http://lagula.com/olvidarcontraseña/nuevacontra.php?token=$token";
    echo "Presiona aquí para cambiar tu contraseña: ";
    echo "<a href='$enlace' class='btn-enlace'>¡Aquí!</a>";

} else {
    echo "Correo no registrado.";
    echo "<a href='olvidarcontraseña.php' class='btn-enlace'>Volver</a>";
}
?>
</p>
    </div>
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
          <p>La Falda, Cordoba</p>
          <p>Calle Sabores 123</p>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; 2025 La Gula. Todos los derechos reservados.</p>
      </div>
    </footer>
  </body>
</html>

