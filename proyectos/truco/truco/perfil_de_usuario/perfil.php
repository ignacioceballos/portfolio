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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/perfil_de_usuario/perfil.css">
    <title>Document</title>
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
        <a href="/carta/carta.php">jugar</a>
        <a href="/index.php#historia">Historia</a>
        <a href="/ofertas/ofertaindex.php">Noticias</a>
        <a href="/reseñas/reseñas.php">Contacto</a>
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

 <!--Footer hermoso-->
     <footer class="main-footer">
      <div class="footer-content">
        <div class="footer-section">
          <h3>Redes Sociales</h3><!--Apartado de redes sociales-->
          <div class="redes-sociales">
            <p>📸 Instagram: @Truk.io</p>
            <p>📘 Facebook: Truk.io</p>
            <p>🐦 Twitter: @Truk.io</p>
          </div>
        </div>
   
        <div class="footer-section"><!--Contacto-->
          <h3>Contacto</h3>
          <p>Correo: Truk.io@gmail.com.ar</p>
          <p>Teléfono: +54 3548 23 40 15</p>
        </div>

        <div class="footer-section"><!--Ubicación-->
          <h3>Ubicación</h3>
          <p>Argentina</p>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; 2025 Truk.io. Todos los derechos reservados.</p>
      </div>
    </footer>
    </div> 
 
</body>
</html>