<?php
require_once "conexion.php"; // Incluir el archivo de conexión



// Si se recibe un valor en la variable $_GET['buscar']
if (isset($_GET['buscar'])) {
    $buscar = $_GET['buscar'];

    // Consulta para buscar productos que coincidan con el término de búsqueda
    $sql = "SELECT id, nombre, precio, tamaño, marca, foto FROM perfumes_la4° WHERE nombre LIKE '%$buscar%'";
    $resultado = $conn->query($sql);
}

// Si no se recibe un valor en $_GET['buscar'] o no se ejecutó la consulta, mostrar todos los registros
if (!isset($resultado) || !$resultado || $resultado->num_rows <= 0) {
    $sql = "SELECT id, nombre, precio, tamaño, marca, foto FROM perfumes_la4°";
    $resultado = $conn->query($sql);
}

// Cerrar la conexión
$conn->close();
?>