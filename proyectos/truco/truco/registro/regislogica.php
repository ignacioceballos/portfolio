
<?php

//recibo los datos del formulario, guardo cada dato en una variable y les quito las mayúsculas en caso de que tengan, y elimino los espacios
$nombre = strtolower(trim($_POST['nombre']));
$apellido = strtolower(trim($_POST['apellido']));
$fechanacimiento = strtolower(trim($_POST['fecha_nacimiento']));
$correo = strtolower(trim($_POST['correo']));
$contrasena = strtolower(trim($_POST['password']));


//array que guarda los datos del formulario
$datosguardados = [ 
    "nombre" => $nombre,
     "apellido" => $apellido,
    "fecha_nac" => $fechanacimiento,
    "correo" => $correo,
    "contrasena" => $contrasena
];

$archivo = "registro.json";
//Si el archivo existe, lo abre y decodifica su contenido
if (file_exists($archivo)) 
{
    $contenido = file_get_contents($archivo);//Lee todo el contenido de un archivo y lo guarda como una cadena de texto
    $usuarios = json_decode($contenido, true);//Convierte una cadena en formato JSON a una estructura de PHP (como un array o un objeto), true hace que convierta el JSON en un array asociativo, no en un objeto.
} else {
    //Si no existe, crea un array vacío
    $usuarios = [];
}
$usuarios[] = $datosguardados;

//Guarda el array actualizado en el archivo JSON
file_put_contents($archivo, json_encode($usuarios, JSON_PRETTY_PRINT)); 
header("Location: /iniciosesion/iniciosesion.php");
exit();
?>
