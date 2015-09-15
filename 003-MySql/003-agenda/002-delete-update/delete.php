<?php
//Conectamos
include './inc/connect.php';


if (isset($_GET['id'])){
    extract($_GET);
    $sql="delete from contactos where id='$id'";
    $result=mysqli_query($link, $sql);
    if($result){
        $c=5;
    } else {
        $c=6;
    }
}

header("location:index.php?c=$c");