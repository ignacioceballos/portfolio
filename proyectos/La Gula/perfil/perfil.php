<?php
// Iniciar sesión
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Asegurarnos que hay usuario logueado
if (empty($_SESSION["usuario"])) {
    header("Location: /iniciosesion/iniciosesion.php");
    exit;
}

// Obtener datos del usuario
$usuario = $_SESSION["usuario"];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="perfil.css" />
    <title>Perfil</title>
  </head>
  <body>
    <!-- HEADER -->
    <header class="main-header">
      <div class="logo">
        <a href="/index.php"><img src="/imagenes/logo.png" alt="Home" /></a>
        <div class="texto-logo">
          <h1>Perfil</h1>
          <p>La Gula</p>
        </div>
      </div>
      <nav class="nav-bar">
        <a href="/carta/carta.php">Carta</a>
        <a href="/index.php#historia">Historia</a>
        <a href="/ofertas/ofertaindex.php">Ofertas</a>
        <a href="/reseñas/reseñas.php">Reseñas</a>
        <a href="/carritodecompras/carritodecompraslindo.php">Carrito</a>
      </nav>
    </header>

    <div class="form-container">
  <p class="title">Perfil del Usuario</p>
  
  <div class="perfil-datos">
    <div class="dato">
      <p class="etiqueta">Nombre:</p>
      <p class="valor"><?php echo ucfirst($usuario['nombre']); ?></p>
    </div>
    <div class="dato">
      <p class="etiqueta">Apellido:</p>
      <p class="valor"><?php echo ucfirst($usuario['apellido']); ?></p>
    </div>
    <div class="dato">
      <p class="etiqueta">Correo:</p>
      <p class="valor"><?php echo $usuario['correo']; ?></p>
    </div>
    <div class="dato">
      <p class="etiqueta">Fecha de Nacimiento:</p>
      <p class="valor"><?php echo $usuario['fecha_nac']; ?></p>
    </div>
  </div>

  <br />
  <a href="/cerrarsesion/cerrarsesion.php">
    <button class="sign">Cerrar Sesión</button>
  </a>
</div>

  
  

    <!-- FOOTER -->
    <footer class="main-footer">
      <div class="footer-content">
        <div class="footer-section">
          <h3 style="margin-left: 35%">Redes Sociales</h3>
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
