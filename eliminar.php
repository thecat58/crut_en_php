<?php
include 'conexion.php';

$id = $_GET['id'];

$sql = "DELETE FROM perfumes.perfumes_la4° WHERE Id = '$id'";

if (mysqli_query($conn, $sql)) {
    header('Location: index.php'); // Redirige a la página principal después de eliminar
    exit();
} else {
    echo "Error al eliminar: " . mysqli_error($conn);
}
?>
