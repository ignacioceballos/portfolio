<?php
/*pasamos todo a minusculas y string*/ 
$nombre = strtolower(trim($_POST['nombre']));
$apellido = strtolower(trim($_POST['apellido']));
$texto = strtolower(trim($_POST['text']));
$rating =strtolower(trim($_POST['rating']));

$datosguardados=[
    "nombre" => $nombre,
    "apellido" => $apellido,
    "texto" => $texto,
    "rating" => $rating/*estrellas*/ 
];

$archivo ="reseñas.json";

if(file_exists($archivo)){
    $contenido = file_get_contents($archivo);
    $usuarios =json_decode($contenido, true);
} else{
    $usuarios =[];
}
$usuarios[] = $datosguardados;
file_put_contents($archivo, json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
header("Location: final.php");
exit();