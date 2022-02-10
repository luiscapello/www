<?php
//Conexion a la base de datos
$db = mysqli_connect('localhost', 'root', 'root', 'appsalon');

if (!$db){
    echo "Error en la conexion";
} else{
    echo"Conexion correcta";
}