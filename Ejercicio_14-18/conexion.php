<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "Productos";


$conexion = new mysqli($servername, $username, $password, $database);

if ($conexion->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conexion->connect_error);
}
?>