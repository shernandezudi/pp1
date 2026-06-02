<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $var1 = "comer verduras";
        $var2 = "es realmente sano";
        $var3 = $var1 . $var2;
        $pos = strpos($var3, "verduras");
        echo $pos;
    ?>
</body>
</html>