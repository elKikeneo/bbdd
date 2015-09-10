<?php
$banners=array();
$mng="";

if(isset($_COOKIE["search"])){
    switch($_COOKIE["search"]){
        case "cursos":
            $banners = array("cursos.gif");
            break;
        case "zapatos":
            $banners = array("zapatos.gif");
            break;
        case "minions":
            $banners = array("minios.gif","minios_2.gif");
            break;
        default:
            $mng="No se encontraron resultados de búsqueda para ".$_COOKIE["search"];
            setcookie("search","",time());
    }
}

if($_POST){
    setcookie("search",$_POST["search"],time()+60);
    header("location:index.php");
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
        
        
        <div id="search">    
            <div id="logo">
                <img src="publi/google.png" alt=""/>
            </div>
            
            <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
                <input type="search" name="search" placeholder="Search..." required>
                <input type="submit" value="Entrar">
            </form>
        </div>
        <main>
            <section>
                <?php if(count($banners)==0){ ?>
                    <p><?=$mng?></p>
                <?php }else{ ?>
                    <?php foreach($banners as $banner){ ?>
                        <img src="publi/<?=$banner?>" >
                    <?php } ?>
                <?php } ?>
            </section>
        
        </main>
        
    </body>
</html>
