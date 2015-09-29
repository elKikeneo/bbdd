<?php
//Conectamos
include './inc/connect.php';

$mng="";
if(isset($_GET['c'])){
    switch ($_GET['c']){
        case 1:
            $mng="Debes rellenar nombre y autor";
            break;
        case 2:
            $mng="Ya existe una excusa como esta";
            break;
    }
}

$id_excusa=$_GET['id'];

$sql="select * from excusas where id=$id_excusa";
$result= mysqli_query($link, $sql);

$fila=  mysqli_fetch_array($result);
extract($fila); //$id,$excusa,$autor,$id_categoria
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Editar Excusa</h2>
        <form action="update.php?id=<?=id_excusa?>" method="post">
            <textarea name="excusa" cols="100" rows="5" placeholder="Escribe aquí tu excusa..."></textarea>
            <br>
            <input type="text" name="autor" placeholder="Nombre del autor">
            <br>
            <select name="id_categoria">
                <?php
                $sql="select * from categorias order by categoria";
                $result=  mysqli_query($link, $sql);
                $nfilas=  mysqli_num_rows($result);
                if($nfilas>0){ ?>
                    <option value="0">Sin categoría</option>
                    <?php for($i=0; $i<$nfilas; $i++){ ?>
                        <?php $fila=  mysqli_fetch_array($result) ?>
                        <?php if($fila['id']==$id_categoria){ ?>
                            <option value="<?=$fila['id']?>" selected>
                                <?= $fila['categoria'] ?>
                            </option>
                        <?php } else { ?>
                        <?php } ?>
                    <?php } ?>
                <?php } else { ?>
                    <option value="0">No hay categorías</option>
                <?php } ?>
                
            </select>
            
            <input type="submit" value="Guardar">
        
        </form>
        
        <span><?=$mng?></span>
        
        
        
    </body>
</html>

