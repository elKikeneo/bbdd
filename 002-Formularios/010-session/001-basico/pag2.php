<?php session_start() ?>
<?php
//SEGURIDAD -> Si no existe el dato guardado en la sesión, le redirecciono a la home que es donde se crea
if(!isset($_SESSION["nombre"])){
    header("location:index.php");
}
?>

<!--Cabecera-->
<?php $title="Página 2" ?>

<?php include './inc/header.php'; ?>	

	<h1>Página 2</h1>
	<p>Hola <?=$_SESSION["nombre"]?>, estás en la <?=$title?></p>


<?php include './inc/footer.php'; ?>	