<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Datos recibidos</title>
</head>
<body>

<?php
$nombre = $_POST["nombre"] ?? "";
$apellido = $_POST["apellido"] ?? "";
$sexo = $_POST["sexo"] ?? "";
$ecivil = $_POST["ecivil"] ?? "";


echo "<h1>Datos recibidos:</h1>";

echo "Nombre:   $nombre <br>";
echo "Apellido:  $apellido<br>";
echo "Sexo:  $sexo<br>";
echo "Estado civil: $ecivil";
?>
</body>
</html>