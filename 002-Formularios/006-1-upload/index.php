<?php
$msg="";
if ($_GET){
//    $msg=$_GET["c"];

switch ($_GET["c"]){
    case 0:
	$msg="El fichero ya existe";
	break;
    case 1:
	$msg="Se ha subido correctamente";
	break;
    case 2:
	$msg="Error en la subida de fichero";
	break;
    case 3:
	$msg="Fichero no cumple requisitos";
	break;
    default:
	$msg="no te pases";
}
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
       
        <h1>Subir Fichero</h1>
	<form action="upload.php" method="post" enctype="multipart/form-data">
	    <label>Selecciona foto:</label><br><br>
	    <input type="file" name="archivo"><br><br>
	    <small>Máximo 70kb</small><br><br>
	    <input type="submit" value="Subir Fichero" >
	</form><br><br>
	<?=$msg?>
    </body>
</html>

