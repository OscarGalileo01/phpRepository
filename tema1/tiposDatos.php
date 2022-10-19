<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Booleanos</h1>
    <?php 
    //Booleano puro
    $varBooleana = false;
    echo '$varBooleana es: ';
    var_dump($varBooleana);

    echo "<br>";
    //Booleano casteado
    echo 'El cast a bool del entero 1 es:';
    var_dump((bool)1);

    ?>
</body>
</html>