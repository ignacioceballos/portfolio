<?php
if(session_status()=== PHP_SESSION_NONE)
{
    session_start();
}
?>
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
<?php
$carta1=random_int(1, 13);
$carta2=random_int(1, 13);
$carta3=random_int(1, 13);
switch($carta1)
{
    case 1:
        $tipocarta1=random_int(1,4);
        switch($tipocarta1)
        {
            case 1:
                echo"a uds le a tocado el 4 de copa";
                break;
            case 2:
                echo"a uds le a tocado el 4 de basto";
                break;
            case 3:
                echo"a uds le a tocado el 4 de oro";
                break;
            case 4:
                echo"a uds le a tocado el 4 de espada";
                break;
        }
        break;
    case 2:
        $tipocarta1=random_int(1,4);
        switch($tipocarta1)
        {
            case 1:
                echo"a uds le a tocado el 5 de copa";
                break;
            case 2:
                echo"a uds le a tocado el 5 de basto";
                break;
            case 3:
                echo"a uds le a tocado el 5 de oro";
                break;
            case 4:
                echo"a uds le a tocado el 5 de espada";
                break;
        }
        break;
    case 3:
        $tipocarta1=random_int(1,4);
        switch($tipocarta1)
        {
            case 1:
                echo"a uds le a tocado el 6 de copa";
                break;
            case 2:
                echo"a uds le a tocado el 6 de basto";
                break;
            case 3:
                echo"a uds le a tocado el 6 de oro";
                break;
            case 4:
                echo"a uds le a tocado el 6 de espada";
                break;
        }
        break;
    case 4:
        $tipocarta1=random_int(1,2);
        switch($tipocarta1)
        {
            case 1:
                echo"a uds le a tocado el 7 de copa";
                break;
            case 2:
                echo"a uds le a tocado el 7 de basto";
                break;
        }
        break;
    case 5:
        $tipocarta1=random_int(1,4);
        switch($tipocarta1)
        {
            case 1:
                echo"a uds le a tocado el 11 de copa";
                break;
            case 2:
                echo"a uds le a tocado el 11 de basto";
                break;
            case 3:
                echo"a uds le a tocado el 11 de oro";
                break;
            case 4:
                echo"a uds le a tocado el 11 de espada";
                break;
        }
        break;
    case 6:
        $tipocarta1=random_int(1,4);
        switch($tipocarta1)
        {
            case 1:
                echo"a uds le a tocado el 12 de copa";
                break;
            case 2:
                echo"a uds le a tocado el 12 de basto";
                break;
            case 3:
                echo"a uds le a tocado el 12 de oro";
                break;
            case 4:
                echo"a uds le a tocado el 12 de espada";
                break;
        }
        break;
    case 7:
        $tipocarta1=random_int(1,2);
        switch($tipocarta1)
        {
            case 1:
                echo"a uds le a tocado el 1 de copa";
                break;
            case 2:
                echo"a uds le a tocado el 1 de oro";
                break;
        }
        break;
    case 8:
        $tipocarta1=random_int(1,4);
        switch($tipocarta1)
        {
            case 1:
                echo"a uds le a tocado el 2 de copa";
                break;
            case 2:
                echo"a uds le a tocado el 2 de basto";
                break;
            case 3:
                echo"a uds le a tocado el 2 de oro";
                break;
            case 4:
                echo"a uds le a tocado el 2 de espada";
                break;
        }
        break;
    case 9:
        $tipocarta1=random_int(1,4);
        switch($tipocarta1)
        {
            case 1:
                echo"a uds le a tocado el 3 de copa";
                break;
            case 2:
                echo"a uds le a tocado el 3 de basto";
                break;
            case 3:
                echo"a uds le a tocado el 3 de oro";
                break;
            case 4:
                echo"a uds le a tocado el 3 de espada";
                break;
        }
        break;
    case 10:
                echo"a uds le a tocado el 7 de oro";
       break;
    case 11:
                echo"a uds le a tocado el 7 de espada";
        break;
    case 12:
                echo"a uds le a tocado el 1 de basto";
        break;
    case 13:
                echo"a uds le a tocado el 1 de espada";
        break;
}
?>
</body>
</html>