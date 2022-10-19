<?php 

  


    //1: iniciar sesion
    session_start();

    // Comprobar si existe contador de visitas
    if(isset($_SESSION["contVisitas"])){
        //Incremento valor
        $_SESSION["contVisitas"] ++;
    }else{
        //Creamos contador
        $_SESSION["contVisitas"] = 1;
    }


    echo "Has visitado la web {$_SESSION['contVisitas']}";



?>