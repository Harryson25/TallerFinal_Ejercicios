<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreProducto = $_POST['nombre_producto'];

    //Linea importante (consulta sql)
    $sql = "DELETE FROM Inventario WHERE Nombre = '$nombreProducto'";

    $conexion->query($sql);
}
?>

<h2>Eliminar Producto</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Nombre del producto a eliminar: <input type="text" name="nombre_producto"><br>
    <input type="submit" value="Eliminar Producto">
</form>
