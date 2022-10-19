<?php 

    if(!isset($_COOKIE["ultimaVisita"])){ //Si no esta seteada => primera vez que entra
        echo "Bienvenido";
        echo "Es tu primera visita";
        //Creamos cookie con marca temporal
        setcookie("ultimaVisita", time(), time() + 60 * 60); 
    }else{
        //Si no es su primera visita
        echo "Bienvenido de nuevo" . "<br>";
        echo "Tu anterior visita fue: " . "<br>" ;
        echo "El " . date("d-m-Y", $_COOKIE["ultimaVisita"]) . " a las " . date("H:i:s", $_COOKIE["ultimaVisita"]);
        
        //Actualizamos la masrca temporal de esta nueva visita
        setcookie("ultimaVisita", time(), time() + 60 * 60); 
        
    }

    //Creamos cookie temporal
    setcookie("ultimaVisita", time(), time() + 60 * 60); //Expira en una hora




?>