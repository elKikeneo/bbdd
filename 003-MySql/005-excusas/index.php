<?php
//Conectamos
include './inc/connect.php';

//Validación de mensaje devuelto por insert
$mng="";
if(isset($_GET["c"])){
    switch ($_GET["c"]){
        case 1:
            $mng="Excusa creada correctamente";
            break;
        case 2:
            $mng="Error al guardar";
            break;
        case 3:
            $mng="Debes rellenar la excusa y el autor";
            break;
        case 4:
            $mng="";
            break;
        case 5:
            $mng="Exucsa eliminada";
            break;
        case 6:
            $mng="Error al eliminar";
            break;
        case 7:
            $mng="Excusa modificada";
            break;
        case 8:
            $mng="Error al modificar la excusa";
            break;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <section>
            <h1>EXCUSAS</h1>
            <h2>Igresa una Nueva Excusa</h2>
            <form action="insert.php" method="post">
                <!--<textarea name="excusa" cols="100" rows="5" placeholder="Escribe aquí tu excusa..."></textarea>-->
                <input type="text" name="excusa" placeholder="Escribe aquí tu excusa...">
                <input type="text" name="autor" placeholder="Nombre del autor">
                <select id="id_categoria">
                    <?php
                    $sql="select * from categorias order by categoria";
                    $result= mysqli_query($link, $sql);
                    $nfilas= mysqli_num_rows($result);
                    if($nfilas>0){?>
                        <option value="0">Sin categoría</option>
                        <?php for($i=0; $i<$nfilas; $i++){?>
                            <?php $fila=  mysqli_fetch_array($result) ?>
                            <option value="<?=$fila['id']?>">
                                <?=$fila['categoria']?>
                            </option>
                        <?php } ?>
                    <?php } else { ?>
                            <option value="0">No hay categorias</option>
                    <?php } ?>
                </select>

                <input type="submit" value="Guardar">
            </form>
            <span><?=$mng?></span>
        </section>
        
        <h2>Búsqueda de Excusas</h2>
        <?php
        //Petición de excusas
        $sql="select excusas.*, categorias.categoria from excusas left join categorias on excusas.id_categoria=categorias.id order by excusa asc";
        $result= mysqli_query($link, $sql);
        //Obtener y procesar resultado
        $nfilas= mysqli_num_rows($result);
        ?>
        <section>
            <?php if($nfilas>0){ ?>
            
                <?php for($i=0; $i<$nfilas; $i++){ ?>
                    <?php $fila= mysqli_fetch_array($result) ?>
                    <article>
                        <p>
                            <?= $fila['excusa'] ?>
                            <br>
                            <?= $fila['autor'] ?>
                            <br>
                            <?php if($fila['id_categoria']==0){ ?>
                                <span>Sin categoría</span>
                            <?php } else { ?>
                                <?=$fila['categoria']?>
                            <?php } ?>
                            <br>
                            <a href="editar.php?id=<?=$fila['id']?>">Editar</a>
                            <a onclick="if(!confirm('¿Seguro que desea eliminar la excusa seleccionada?'))return false" href="delet.php?id=<?=$fila['id']?>">Eliminar</a>
                        </p>
                    </article>
                <?php } ?>
            <?php } else { ?>
            <p>No hay excusas</p>
            <?php } ?>
        </section>
        
    </body>
</html>