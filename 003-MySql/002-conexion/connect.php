<?php
//Definir variables
$host="localhost";
$user="root";
$password="";
$db_name="m108_productos";

//1-Establecer conexión con el servidor ("mysqli_connect" muy importante:poner mysql con la " i ")
$link=mysqli_connect($host, $user, $password) or die ("Error de conexión con el servidor");

//2- Seleccionar la bbdd
mysqli_select_db($link, $db_name) or die ("Error en la selección en la base de datos");


