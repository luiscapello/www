<?php

require "include/funciones.php";

$servicios = obtenerServicios();

echo json_encode($servicios);