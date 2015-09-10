<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	<h2>Definir constantes con define()</h2>
	<?php
	define("DOC_ROOT","http://www.dominio.com/archivos/doc/");
	define("IMG_ROOT", DOC_ROOT."images/");
	define("IMGPERFIL_ROOT", IMG_ROOT."perfil/");	
	?>
	
	<p>Previsualiza el documento <a href="<?=DOC_ROOT?>documento.pdf" target="_blank">aquí</a></p>
	<img src="<?=IMG_ROOT?>casita.jpg">
	<img src="<?=IMGPERFIL_ROOT?>luis.jpg">
	<!--------------------------------------------------------------------->
	
	<h2>Verificar que se han definido las constantes</h2>
	<?php
	define("ISBN","0-165-7894-57");
	define("TITLE","Introducción al PHP");
	//Función defined("NAME_CTTE")=nos devuelve true o false si la constante está definida o creada
	
	//El ISBN 0-165-7894-57 pertenece al libro introducción al PHP
	//Falta el ISBN del libro introducción al PHP
	//Falta el Título del libro al ISBN 0-165-7894-57
	//El libro no está registrado
	
	if (!defined('ISBN') && !defined('TITLE')){
	    echo 'El libro no está registrado';
	}else if (!defined('TITLE')){
	    echo 'Falta el Título del libro asociado al ISBN'.ISBN;
	}else if (!defined('ISBN')){
	    echo 'Falta el ISBN del libro'.TITLE;
	}  else {
	    echo 'El ISBN'.ISBN.'pertenece al libro'.TITLE;
	}
	
	
	
	?>
	
	
    </body>
</html>