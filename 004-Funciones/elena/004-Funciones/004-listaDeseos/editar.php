<?php
include './inc/functions.php';
$mng="";
if($_POST){
    $deseo=$_POST['deseo'];
    if(updateDeseo($deseo, $_GET['id'])){
        $mng="Modificado ok";
    }else{
        $mng="error al modificar";
    }
}

$arrayDeseo=selectDeseo($_GET['id']);
extract($arrayDeseo); //$id,$deseo,$fecha
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h2>Editar deseo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>?id=<?=$id?>" method="post">
            <input type="text" name="deseo" value="<?=$deseo?>" required>
            <input type="submit" value="guardar">
        </form>
        
        <?=$mng?>
        
    </body>
</html>
