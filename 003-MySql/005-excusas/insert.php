<?php
//Conectamos
include './inc/connect.php';

extract($_POST); //$excusa, $autor, $id_categoria
if( (isset($excusa)&&!empty($excusa)) && (isset($autor)&&!empty($autor)) ){
    $sql="select * from excusas where excusa='$excusa";
    $result= mysqli_query($link, $sql);
    $nfilas=  mysqli_num_rows($result);
    if($nfilas>0){
        $c=4;
    } else {
        $sql="INSERT INTO excusas (excusa,autor,id_categoria) VALUES ('$excusa','$autor','$id_categoria')";
        $result= mysqli_query($link, $sql);
        if($result){
            $c=1;
        } else {
            $c=2;
        }
    }
} else {
    $c=3;
}

header("location:index.php?c=$c");