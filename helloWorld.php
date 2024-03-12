<?php

$nombre_estudiante = "Byron Ramirez";
$saludo = "Hola mundo, soy $nombre_estudiante";
$imagen_url = "/home/byronrmrz/Desktop/proyecto php/helloworld.jpeg";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo con imagen</title>
</head>
<body>
    <h1><?php echo $saludo; ?></h1>
    <img src="<?php echo $imagen_url; ?>" alt="Imagen">
</body>
</html>