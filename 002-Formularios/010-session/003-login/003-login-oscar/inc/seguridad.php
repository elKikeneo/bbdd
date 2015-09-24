<?php
session_start();
if(!isset($_SESSION["emailUser"])){
    header("location:index.php");
}
?>