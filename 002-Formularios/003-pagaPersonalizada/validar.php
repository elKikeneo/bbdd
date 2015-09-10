<?php
extract($_POST);
//Función urlencode()= codifica caracteres extraños de cadenas de textos para que puedan ser enviados por la URL
$bgFondo=urlencode($bgFondo);
$colorTexto=  urlencode($colorTexto);
$mng=  urlencode($mng);

header("location:Bienvenida.php?nombreUser=$nombre&colorFondo=$bgFondo&colorTexto=$colorTexto&mng=$mng");



