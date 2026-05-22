<?php
// Iniciar sesión solo si no hay ninguna activa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="/cerrarsesion/cesioncerrada.css">
    <title>Document</title>
</head>
<body>
       <header class="main-header">
  <div class="logo"><!--Imágen del logo que a su vez es un ancla que redirige al index-->
    <a href="/index.php"
        ><img src="/imagenes/ChatGPT Image 18 oct 2025, 12_46_26 a.m..png" alt="Home" />
    </a>
    <div class="texto-logo"><!--Texto al lado del logo que indica en donde está el user-->
      <h1>Cerrar Sesion</h1>
      <p>Truk.io</p>
    </div>
  </div>

  <nav class="nav-bar">
    <a href="/reglas/reglas.php">Reglas</a>
    <a href="#historia">Historia</a> <!--lleva a la misma página-->
          <?php
if (!empty($_SESSION["usuario"]) && isset($_SESSION["usuario"]["nombre"])) {

} else {
    // Usuario NO logueado → mostrar Iniciar sesión
    echo '<a href="/iniciosesion/iniciosesion.php">Iniciar Sesión</a>';
    
}
?> 
  </nav>
</header>
<br>
<br>
 <!--Contenedor principal del formulario-->
    <div class="form-container">
      <!--Título principal-->
      <p class="title">Cerrar Sesión</p>
      <!--Formulario de inicio de sesión-->
      <form action="/index.php" class="form">
        <div class="input-group">
         <h1 align="center">¡Sesión cerrada con éxito!</h1>
         <h2 align="center">Lo estaremos esperando nuevamente...</h2>
        </div>
        <br />
        <!--Botón para iniciar sesión-->
        <button class="sign">Volver</button>
        <br />
      </form>
      </div>
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