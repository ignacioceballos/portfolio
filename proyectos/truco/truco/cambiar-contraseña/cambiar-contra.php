  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
     <header class="main-header">
  <div class="logo"><!--Imágen del logo que a su vez es un ancla que redirige al index-->
    <a href="/index.php"
        ><img src="/imagenes/ChatGPT Image 18 oct 2025, 12_46_26 a.m..png" alt="Home" />
    </a>
    <div class="texto-logo"><!--Texto al lado del logo que indica en donde está el user-->
      <h1>Truk.io</h1>
      <p>El truco, como nunca lo viste.</p>
    </div>
  </div>

  <nav class="nav-bar">
    <a href="/reglas/reglas.php">Reglas</a>
    <a href="#historia">Historia</a> <!--lleva a la misma página-->
          <?php
if (!empty($_SESSION["usuario"]) && isset($_SESSION["usuario"]["nombre"])) {
    //Usuario logueado, muestra perfil y demás
    echo '<a href="/perfil/perfil.php">Perfil</a>';
    echo '<a href="/juego/juego.php">Jugar</a>';
    echo '<a href="/noticias/noticias.php">Noticias</a>';
    echo '<a href="/reserva/reservas.php">Reserva</a>';
    echo '"">Contacto</a>';
} else {
    //Usuario NO logueado, muestra Iniciar sesión
    echo '<a href="/iniciosesion/iniciosesion.php">Iniciar Sesión</a>';
}
?> 
  </nav>
</header>
 <div class="form-container">
      <p class="title">Recuperar Contraseña</p>
      <p>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['token'];                    
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];

    if ($pass !== $pass2) {
        die("Las contraseñas no coinciden.");
    }

    $usuarios = json_decode(file_get_contents('usuarios.json'), true);

    $cambiado = false;
    foreach ($usuarios as &$usuario) {
        if ($usuario['token'] === $token && strtotime($usuario['token_expira']) > time()) {
            $usuario['password'] = password_hash($pass, PASSWORD_DEFAULT);
            $usuario['token'] = null;
            $usuario['token_expira'] = null;
            $cambiado = true;
            break;
        }
    }

    if ($cambiado) {
        file_put_contents('usuarios.json', json_encode($usuarios, JSON_PRETTY_PRINT));
        echo "Contraseña cambiada correctamente.";
    } else {
        echo "Token inválido o expirado.";
    }
}
?>
</p>

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
    </div><!--Footer hermoso-->
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