<?php
    //Paso 1: abrir sesion
    session_start();
    
    
    //Paso 2: almaceno informacion de sesion
    $_SESSION["fechaHoraActual"] = date("d-m-Y H:i:s"); 
    $_SESSION["nombreUsuario"] = "Pepe";
    /*  var_dump($_SESSION); */
    
    //Paso 3: borramos informacion de sesion
    unset($_SESSION["nombreUsuario"]);
    //var_dump($_SESSION);

    //Paso 4: borramos toda la informacion de la sesion
    session_unset();
    
    //Paso 5: Destruir la sesion (id+informacion)
    //session_destroy();
    var_dump($_SESSION);

    //Paso &: elimino la cookie
    if(isset($_COOKIE["PHPSESSID"])){ //Si esta seteada
        //La borro
        unset($_COOKIE["PHPSESSID"]); //Se borra pero se reinicia con el sessionstart()
        setcookie("PHPSESSID", null, -1, "/");//Asi se borra definitivamente
    }
    
    
    
?>