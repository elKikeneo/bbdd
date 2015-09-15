<?php 
//Conectamos
include "./inc/connect.php";

//Obtenemos datos del formulario
//controlar que los campos que he establecido como obligatorios en el hatml traigan datos
extract($_POST); //$nombre=$_POST["nombre"]; $apellidos,$tlfn,$email,$foto
if ((isset($nombre) && !empty($nombre)) && (isset($tlfn) && !empty($tlfn))) {
    
    //Si no pone foto de contacto, le ponemos una por defecto. 
    if($foto=="") {
        $foto="http://www.thewantedmusic.com/img/default-avatar.gif";
    }
    
    //Antes de insertar, vamos a comprobar si ya existe un contacto con el mismo tlfn, para evitar asi duplicidad de registros
    $sql="select * from contactos where telefono='$tlfn'";
    $result=mysqli_query($link, $sql);
    //Vamos a contar el número de registro de la tabla devuelta, ya que si son >0 quiere decir que efectivamente ya existe un contacto con ese teléfono.
    
    
    
//Insertar contacto
    $sql = "INSERT INTO contactos (nombre,apellidos,telefono,email,foto) VALUES ('$nombre','$apellidos','$tlfn','$email','$foto')";
    $result = mysqli_query($link, $sql);

    if ($result) {
        $c = 1;
    } else {
        $c = 2;
    }
} else {
    $c = 3;
}


header("location:inddex.php?c=$c");
