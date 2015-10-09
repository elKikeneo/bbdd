<?php

function insertDeseo($deseo){
    include 'inc/connect.php';
    $sql="insert into deseos (deseo,fecha) values ('$deseo',CURDATE())";
    return  mysqli_query($link, $sql);
    mysqli_close($link);
}
function updateDeseo($deseo,$id){
    include 'inc/connect.php';
    $sql="update deseos set deseo='$deseo' where id=$id";
    return  mysqli_query($link, $sql);
    mysqli_close($link);
}

function deleteDeseo($id){
    include 'inc/connect.php';
    $sql="delete from deseos where id=$id";
    return  mysqli_query($link, $sql);
    mysqli_close($link);
}
function selectDeseo($id){
    include 'inc/connect.php';
    $sql="select * from deseos where id=$id";
    $result=mysqli_query($link, $sql);
    return mysqli_fetch_array($result);
    mysqli_close($link);
}
function selectDeseos(){
    include 'inc/connect.php';
    $sql="select * from deseos order by fecha DESC";
    $result=mysqli_query($link, $sql);
    $nfilas=  mysqli_num_rows($result);
    
    $arrayMultiDeseos=array();
    
    for($i=0;$i<$nfilas;$i++){
        $arrayMultiDeseos []= mysqli_fetch_array($result);
    }
    return $arrayMultiDeseos;
    
    
}