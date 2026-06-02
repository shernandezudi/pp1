<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $pais = array(
    "españa" => array(
    "nombre" => "España",
    "lengua" => "Castellano",
    "moneda" => "Euro"

    ),
    "usa" => array(
    "nombre" => "USA",
    "lengua" => "Ingles",
    "moneda" => "Dolar"

    ),
    "argentina" => array(
    "nombre" => "Argentina",
    "lengua" => "Castellano",
    "moneda" => "Peso"

    )

    );

    echo $pais["españa"]["nombre"];
    ?>
</body>
</html>