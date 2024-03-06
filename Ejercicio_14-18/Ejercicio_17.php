<?php
include 'conexion.php';

$idProducto = "";
$precioActual = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreProducto = $_POST['nombre_producto'];

    //Linea importante (consulta sql)
    $sqlIdProducto = "SELECT ID FROM Inventario WHERE Nombre = '$nombreProducto'";
    $resultadoId = $conexion->query($sqlIdProducto);

    if ($resultadoId->num_rows > 0) {
        $filaId = $resultadoId->fetch_assoc();
        $idProducto = $filaId["ID"];

        $nuevoPrecio = $_POST['nuevo_precio'];

        $sql = "UPDATE Inventario SET Precio = $nuevoPrecio WHERE ID = $idProducto";

        $conexion->query($sql);
    }
}
?>

<h2>Actualizar Precio de Producto</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Nombre del Producto: <input type="text" name="nombre_producto"><br>
    Nuevo Precio: <input type="text" name="nuevo_precio"><br>
    <input type="submit" value="Actualizar Precio">
</form>
