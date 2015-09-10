<?php

session_start();

$inactivo=900; /*Valor numérico que representa los sg que permito que el usuario esté inactivo, si se supera este valor numérico desconectaré al usuario*/

if(isset($_SESSION["tiempo"])){
    $vida_session=time() - $_SESSION["tiempo"];
}

$_SESSION["tiempo"] = time();




/*
Cuando cerramos la sesión del usuario:
    -El tiempo de inactividad del usuario supere "X" cantidad de tiempo
    -El usuario cierra el navegador
    -Modificando los ficheros de configuración del servidor
    -El usuario desea salir de nuestro sitio
*/