<?php 
include './inc/functions.php'; 

$mng="";
if($_POST){
    extract($_POST);//$deseo
    if(insertDeseo($deseo)){
        $mng="Deseo guardado";
    }else{
        $mng="Error al guardar";
    }
}

if(isset($_GET['a'])){
    switch($_GET['a']){
        case 'd':
            if(deleteDeseo($_GET['id'])){
                $mng="Deseo eliminado";
            }else{
                $mng="Error al eliminar";
            }
            break;
    }
}

$todosLosDeseos=selectDeseos(); //array multi
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h2>Nuevo deseo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input type="text" name="deseo" required>
            <input type="submit" value="guardar">
        </form>
        <p><?=$mng?></p>
        
        <hr>
        
        <h1>Mis deseos</h1>
        <?php 
        for($i=0;$i<count($todosLosDeseos);$i++){ 
            for($sub=0;$sub<count($todosLosDeseos[$i][$sub]);$sub++){ ?>
            <p>
            <?=$todosLosDeseos[$i]['deseo']?> | <?=$todosLosDeseos[$i]['fecha']?> | 
            <a href="editar.php?id=<?=$todosLosDeseos[$i]['id']?>">editar</a> | 
            <a href="<?=$_SERVER['PHP_SELF']?>?a=d&id=<?=$todosLosDeseos[$i]['id']?>">eliminar</a>
            </p>
            <?php }
        } ?>
        
        
        
    </body>
</html>
