<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<table>";
    echo "<tr>";
    
    echo '<p>X</p>'.'<p>1</p>'.'<p>1</p>'.'<p>1</p>'.'<p>1</p>'.'<p>1</p>'.'<p>1</p>'.'<p>1</p>'.'<p>1</p>'.'<p>1</p>'.'<p>1</p>';
      for($i = 1; $i<=10;$i++){
        
        echo $i * 1;
         
      }
    
    
    echo "</tr>";
    
    echo "<tr>";
    
      for($i = 1; $i<=10;$i++){
        echo $i * 1;
        echo '<BR>'; 
      }
    echo "</tr>";
      for($i = 1; $i<=10;$i++){
        echo $i * 1;
      }
      echo '<BR>';
      for($i = 1; $i<=10;$i++){
        echo $i * 2;
      }
      echo '<BR>';
      for($i = 1; $i<=10;$i++){
        echo $i * 3;
      }
      echo '<BR>';
      for($i = 1; $i<=10;$i++){
        echo $i * 4;
      }
      echo '<BR>';
      for($i = 1; $i<=10;$i++){
        echo $i * 5;
      }
      echo '<BR>';
      for($i = 1; $i<=10;$i++){
        echo $i * 6;
      }
      echo '<BR>';
      for($i = 1; $i<=10;$i++){
        echo $i * 7;
      }
      echo '<BR>';
      for($i = 1; $i<=10;$i++){
        echo $i * 8;
      }
      echo '<BR>';
      for($i = 1; $i<=10;$i++){
        echo $i * 9;
      }
      echo '<BR>';
      for($i = 1; $i<=10;$i++){
        echo $i * 10;
      }
      echo "</table>";
    ?>
</body>
</html>