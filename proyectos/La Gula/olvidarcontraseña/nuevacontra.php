

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
    <div class="form-container">
      <p class="title">Recuperar Contraseña</p>
      <p>
<?php
if (!isset($_GET['token']) || empty($_GET['token'])) {
    die("Acceso no permitido.");
}

$token = $_GET['token'];
$archivoUsuarios = '../registro/registro.json';
$usuarios = json_decode(file_get_contents($archivoUsuarios), true);

$usuarioEncontrado = null;
foreach ($usuarios as &$usuario) {
    if (isset($usuario['token']) && $usuario['token'] === $token) {
        //Verificar si el token no expiró
        if (strtotime($usuario['token_expira']) >= time()) {
            $usuarioEncontrado = &$usuario;
        } else {
            die("El enlace ha expirado.");
        }
        break;
    }
}
if (!$usuarioEncontrado) {
    die("Token inválido.");//Si no encuentra el user
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['contrasena']) || empty($_POST['contrasena'])) {
        die("Debes ingresar la nueva contraseña.");//Si está vacío
    }
    $usuarioEncontrado['contrasena'] = $_POST['contrasena'];
    unset($usuarioEncontrado['token']);
    unset($usuarioEncontrado['token_expira']);
    file_put_contents($archivoUsuarios, json_encode($usuarios, JSON_PRETTY_PRINT));
    exit;
}
?>
<form method="post"> <!--Pide contraseña nueva-->
    <div class="input-group">
          <label for="contrasena">Nueva contraseña:</label>
          <input type="password" name="contrasena" id="contrasena" required>
          <button class="btn-enlace" type="submit">Cambiar</button>
        </div>
</form>
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


