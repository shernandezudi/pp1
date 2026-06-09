<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ej9</title>
</head>
<body>

<?php
Class Empleado{
    private $nombre;
    private $sueldo;

    function __construct($nombre,$sueldo){
    $this->nombre = $nombre;
    $this->sueldo = $sueldo;

    
    }

function pagarImpuesto(){
    if($this->sueldo > 3000){
    echo "$this->nombre debe pagar impuestos";

    }else{
    echo "$this->nombre NO debe pagar impuestos";

    }

    }
    
 
}

$empleado1 = new Empleado("sergio", 300);

$empleado1->pagarImpuesto();
?>
</body>
</html>