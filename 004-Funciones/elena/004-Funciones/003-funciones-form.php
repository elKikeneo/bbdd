<?php
//FUNCIONES:
function operar($a,$b,$op){
    switch($op){
        case "+":
           $result=$a+$b;
            break;
        case "-":
           $result=$a-$b;
            break;
        case "*":
           $result=$a*$b;
            break;
        case "/":
           $result=$a/$b;
            break;
    }
    return $result;
}

function validarHora($hora){
    if($hora<0 || $hora>23){
        return  "La $hora es incorrecta";
    }else if($hora<=12){
        return "Las $hora AM";
    }else{
        return "Las $hora PM";
    }    
}

        
//////////////////////////////////////////        
        
        
$mng="";
if(isset($_POST['operacion'])){
    extract($_POST); //$numA,$numB,$operacion
    $mng=operar($numA, $numB, $operacion);
}

$mngHora="";
if(isset($_POST['formHora'])){
    extract($_POST); //$hora
    $mngHora=  validarHora($hora);
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h2>Calculadora</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input type="number" name="numA" required>
            <input type="number" name="numB" required>
            
            <input type="submit" value="+" name="operacion">
            <input type="submit" value="-" name="operacion">
            <input type="submit" value="*" name="operacion">
            <input type="submit" value="/" name="operacion">
        </form>
        
        <p><?= $mng ?></p>
        
        <!------------------------------------------------------------------------->
        
        <h2>Validar hora</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input type="number" name="hora" required>
            <input type="submit" value="Mostrar" name="formHora">
        </form>
        
        <p><?=$mngHora?></p>
        
    </body>
</html>
