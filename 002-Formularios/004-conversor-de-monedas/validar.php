<?php

extract($_POST);


$dolareuro=0.87;
$libraeuro=1.30;

if (isset($origen)){
    switch ($origen){
        case 0:
            break;
            case 1:
                $cantidad*=$dolareuro;
                break;
                case 2:
                    $cantidad*=$libraeuro;
                    break;
    }
    switch ($destino){
        case 0:
            $cantidad=$cantidad." €";
            break;
            case 1:
                $cantidad=$cantidad/$dolareuro." $";
                break;
                case 2:
                    $cantidad=$cantidad/$libraeuro." £";
                    break;
    }   
    
}
header("location:resultado.php?cantidad=$cantidad");