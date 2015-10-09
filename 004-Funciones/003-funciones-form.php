<?php




function reloj(){
    
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

        
    </body>
</html>
