<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ej9</title>
</head>
<body>

<?php


Class Persona{
    private $nombre;
    private $edad;

    function __construct($nombre,$edad){
    $this->nombre = $nombre;
    $this->edad = $edad;

    
    }

function setNombre(string $nombre): void{
    $this->nombre = $nombre;

    }
    
 function setEdad(string $edad): void{
    $this->edad = $edad;

    }
    function getNombre(): string{
    return $this->nombre;

    }
    function getEdad(): int{
    return $this->edad;

    }



}

Class Empleado extends Persona{
    private $sueldo;

    function __construct($nombre, $edad, $sueldo){
    parent::__construct($nombre,$edad);
    $this->sueldo = $sueldo;

    }

    function setSueldo(float $sueldo): void{
    $this->sueldo = $sueldo;

    }
    function getSueldo(): float{
    return $this->sueldo;

    }

}

$empleado1 = new Empleado("sergio", 25, 650000);

echo "Nombre: " . $empleado1->getNombre() . "<br>";
echo "Edad: " . $empleado1->getEdad() . "<br>";
echo "Sueldo: $" . $empleado1->getSueldo();
?>
</body>
</html>