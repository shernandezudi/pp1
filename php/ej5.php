<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo '<p> con while: </p>';
      $i = 1;
      
      while($i <= 10){
        echo $i . " ";
        $i++;

      }
    echo '<BR>';
    echo '<p> con for: </p>';
      for($i = 1; $i<=10;$i++){
        echo $i . " ";
       

      }
    ?>
</body>
</html>