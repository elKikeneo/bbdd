<?php
extract($_POST);
//Función de redirección header("location:ruta.php")->OJO!!! no puede haber echo por encima, ni espacio al principioi ni al final del documentom, no puede ir entre etiquetas html.

if ($email=="elena@cice.es" && $pass=="1234"){
    header("location:bienvenida.php?email=$email");
}else if($email=="elena@cice.es" && $pass!="1234"){
    header("location:index.php?error=2");
}  else {
    
}
    

