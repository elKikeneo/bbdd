<?php

//Definición de variables
$host="localhost";
$user="root";
$password="";
$database="m108_listaDeseos";

//1-establecer conexión
$link = mysqli_connect($host, $user, $password) or die ("Error en la conexión con el servidor");
//2-seleccionar la bbdd
mysqli_select_db($link, $database) or die ("Error en la selección de la base de datos");


//función que establece codificación a la hora de hablar con el servidor, para así garantizar que todo lo que insertemos, modifiquemos o pidamos se haga en base a utf8
mysqli_set_charset($link, "utf8");