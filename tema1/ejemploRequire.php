<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Require Include</title>
</head>
<body>
    <?php
    if(include_once 'config.php');
    echo "El nombre de la base de datos a la que me tengo que conectar es " . DBNAME . " el HOST " . 
    HOST . ", el USER " . USER;
    ?>

    
</body>
</html>