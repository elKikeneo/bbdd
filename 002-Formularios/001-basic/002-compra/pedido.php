<?php
extract($_POST); //$nombre,$direccion,$productos
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Pedido</title>
    </head>
    <body>
	<p>Gracias <?=$nombreUser?> por realizar tu pedido de:</p>
	<ul>
	    <?php foreach ($productos as $producto) { ?>
	    <li><?=$producto?></li>
	    <?php } ?>
	</ul>
	<p>Se enviará el pedido a <?=$direUser?></p>
    </body>
</html>