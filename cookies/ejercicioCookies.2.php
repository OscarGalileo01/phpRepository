<?php 

  


    //1: iniciar sesion
    session_start();

    // Comprobar si existe contador de visitas
    if(!isset($_SESSION["contVisitas"])){
        //Incremento valor
        $_SESSION["visita"][1] = date("d-m-Y H:i:s");
    }else{
        //Creamos contador
        $_SESSION["visitas"][count($_SESSION["visita"]) + 1] = date("d-m-Y H:i:s");
    }


    echo "Has visitado la web {$_SESSION['contVisitas']}";
    echo "HOLA";
   // foreach($_SESSION["visita"]);



?>