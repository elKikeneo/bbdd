<?php
//Definir variables
$host="localhost";
$user="root";
$password="root";
$database="m108_productos";

//1-Establecer conexión con el servidor
$link=mysqli_connect($host, $user, $password) or die ("Error de conexión con el servidor");

//2-Seleccionar la base de datos
mysqli_select_db($link, $database) or die ("Error en la selección de la base de datos");





