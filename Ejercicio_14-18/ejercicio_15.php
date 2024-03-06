<?php
include 'conexion.php';

//Linea importante (consulta sql)
$sql = "SELECT * FROM Inventario";
$resultado = $conexion->query($sql);


if ($resultado->num_rows > 0) {
   
    while ($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["ID"]. " - Nombre: " . $fila["Nombre"]. " - Precio: " . $fila["Precio"]. " - Cantidad: " . $fila["Cantidad"]. "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}


$conexion->close();
?>