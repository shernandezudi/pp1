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


function validar($nombre, $apellido){
    
    if (empty(trim($nombre))) {
        throw new Exception("El nombre es obligatorio");
    }

    if (empty(trim($apellido))) {
        throw new Exception("El apellido es obligatorio");
    }
}
try {
    validar($nombre, $apellido);

    echo "Nombre: $nombre <br>";
    echo "Apellido: $apellido <br>";

}catch (Exception $e) {
    echo $e->getMessage();
    echo "<br><a href='forms.html'>Volver al formulario</a><br>";
}



echo "Sexo:  $sexo<br>";
echo "Estado civil: $ecivil";
?>
</body>
</html>