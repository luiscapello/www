<?php

function obtenerServicios() {
    try{
        
        //importar conexion
        require 'database.php';

        echo '$db';
        var_dump($db);

        //escribir el codigo sql


        //obtener los resultados



    }catch (\Throwable $th) {
        //throw $th;

        var_dump($th);
    }
}