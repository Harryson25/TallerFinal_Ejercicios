<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    //Linea importante (consulta sql)
    $sql = "INSERT INTO Inventario (Nombre, Precio, Cantidad) VALUES ('$nombre', $precio, $cantidad)";

    if ($conexion->query($sql) === TRUE) {
        echo "Nuevo producto insertado exitosamente";
    } else {
        echo "Error al insertar el producto: " . $conexion->error;
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Nombre: <input type="text" name="nombre"><br>
    Precio: <input type="text" name="precio"><br>
    Cantidad: <input type="text" name="cantidad"><br>
    <input type="submit" value="Agregar Producto">
</form>
