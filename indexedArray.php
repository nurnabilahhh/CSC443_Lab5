<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
  
    for($i = 0; $i < 11; $i++) {
        sort ($month);
        echo $month[$i];
    
 echo "\n";
        
    }
    echo "<br>";
    echo "<br>";
    foreach ($month as $item) {
        echo $item;
        echo "<br>";
        
    }
    ?>
</body>
</html>