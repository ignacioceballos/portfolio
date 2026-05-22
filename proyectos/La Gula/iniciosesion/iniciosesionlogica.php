<?php
session_start(); // Necesario para usar $_SESSION

if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
    $email = strtolower(trim($_POST["email"]));
    $password = strtolower(trim($_POST["password"]));

    $archivo = __DIR__ . "/../registro/registro.json"; // Ajusta la ruta según tu carpeta

    if (file_exists($archivo)) 
    {
        $usuarios = json_decode(file_get_contents($archivo), true);

        $encontrado = false; // bandera para saber si encontramos el usuario

        foreach ($usuarios as $usuario) {
            if ($usuario["correo"] === $email && $usuario["contrasena"] === $password) {
                $encontrado = true;

                // Guardamos todos los datos del usuario en la sesión
                $_SESSION["usuario"] = $usuario;

                // Redirige al index
                header("Location: /index.php");
                exit();
            }
        }

        if (!$encontrado) {
            // Redirige de vuelta a la página de login con un parámetro de error
            header("Location: /iniciosesion/iniciosesion.php?error=1");
            exit();
        }

    } 
    else 
    {
        // Redirige con un error distinto si no hay usuarios registrados
        header("Location: /iniciosesion/iniciosesion.php?error=2");
        exit();
    }
}
?>
