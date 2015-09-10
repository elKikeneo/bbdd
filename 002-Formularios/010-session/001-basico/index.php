<?php
//SIEMPRE!!!!! Antes de guardar un dato en el servidor, para que éste sea accesible por otros documentos, debo abrir un canal de comunicación con el servidor
session_start(); //OJOO!!! no poner espacios ni html por encima

//Ahora ya guardamos el dato
$_SESSION["nombre"]="Elena";


?>


<!--CABECERA-->
<?php $title="Home" ?>

<?php include './inc/header.php'; ?>	
	
	<h1>Home</h1>
	<p>Hola <?=$_SESSION["nombre"]?>, estás en la <?=$title?></p>
	
<?php include './inc/footer.php'; ?>	


