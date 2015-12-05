<?php
include './core/Contacto_model.php';
$objContacto_model=new Contacto_model();

$arrayObjContact=$objContacto_model->selectContactos();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php 
        foreach($arrayObjContact as $objContacto){ ?>
            <p><?=$objContacto->getNombre()?></p>
        <?php } ?>
        
    </body>
</html>
