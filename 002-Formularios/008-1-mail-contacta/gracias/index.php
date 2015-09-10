<?php
if(!$_POST){
    header("location:../index.php");
}

//Recogemos datos del formulario y creamos variables con los names de los inputs,selects,textareas
extract($_POST); //$nombre,$apellido,$email,$telefono,$to,$consulta

$consulta .= "\r\n Email enviado por: $nombre $apellidos con teléfono $telefono";

//Cabeceras del email
//Saltos de línea -> \r(return, Linux) o \n(new line Windows)
$header = "To: Cice <$to>"."\r\n";
$header .= "From: $nombre $apellidos <$email>"."\r\n";
$header .= "BCC: Jesús Jefe Máximo <jesus@cice.es>";
	
//Función mail(destino,asunto,mensaje,header)= envía el email y devuelve T/F si se ha enviado correctamente 
if(mail($to,"Consulta desde web", $consulta, $header)){
    $titulo="Hemos recibido tu solicitud correctamente";
    $txt="En los próximos días nos pondremos en contacto contigo para ampliar información de tarifas, horarios y becas.";
} else {
    $titulo="Error en el envío";
    $txt="Contacta con los administradores de la página o inténtalo de nuevo";
}
//Envío de confirmación al usuario
$header = "To: $nombre $apellidos <$email>"."\r\n";
$header .= "From: Cice <$to>"."\r\n";
mail($email,"Cice - Consulta", $titulo."\r\n".$txt, $header);
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
	<link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
	
	<h1><?=$titulo?></h1>
	<p><?=$txt?></p>
	<a href="../index.php">Volver al formulario</a>

    </body>
</html>
