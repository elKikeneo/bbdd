<?php
 define("PIC_PATH", "img/");//constante que indica el path de las imágenes
 $class = "";
 $msg = "";
 $picPath="";
if(isset($_POST["formSearch"])){
    setcookie("picPath", "", time());
    extract($_POST);
    $found = false;
    $bigArray = array(//bigArray es la variable que almacena palabras clave y las imagenes relacionadas con dichas palabras
                    array(
                        "palabrasClave"=>array("zapato", "moda", "payaso", "vestir", "prenda", "elegante", "zapatos", "graciosos")
                        ,"picPath"=>"zapato.jpg"),
                    array(
                        "palabrasClave"=>array("patito", "pato", "animal", "animales", "rio", "pollito")
                        ,"picPath"=>"pato.jpg"),
                    array(
                        "palabrasClave"=>array("cursos", "curso", "web", "desarrollo", "escuela", "tecnologia", "cice", "formación")
                        ,"picPath"=>"logo.jpg")
                );
    //Se recorre el array para comprobar si el término que nos viene del formulario coincide con una palabra clave de nuestra "BDD"
    for($i=0;$i<count($bigArray);$i++){
        foreach (($bigArray[$i]["palabrasClave"]) as $keyWords){//se puede usar otro bucle for anidado, pero con el foreach el recorrido es más limpio en código
            if($busqueda == $keyWords){
                $found = true;
                $picPath = $bigArray[$i]["picPath"];
               
                break;//en cuanto se encuentra el elemento se sale del bucle
            }
        }
    } 
    setcookie("picPath", $picPath, time() + 10000);
    echo $picPath;
    if($found == false){
        $class = "notFound";
        $msg = "No resultados en la búsqueda para ".$busqueda;
    }
}else{
     $picPath = $_COOKIE["picPath"];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Searcher</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="login">
        <h1>Searcher.com</h1>
        <main>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                <input type="text" name="busqueda" placeholder="Search" required>
               
                <input type="submit" name="formSearch" value="Go"></form>
            <p class="<?=$class?>"><?=$msg?></p>
            <?php  if($picPath!=""){?>
                <img src="<?=PIC_PATH.$picPath?>">
            <?php } ?>
        </main>

    </body>
</html>
