<?php
require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar imagen
    $nombreImagen = $_FILES["foto"]["name"];
    $foto = "carpeta_imagenes/" . $nombreImagen; // Asegúrate de crear esta carpeta en tu servidor
    move_uploaded_file($_FILES["foto"]["tmp_name"], $foto);

    // Otros datos del formulario
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $tamaño = $_POST["tamaño"];
    $marca = $_POST["marca"];

    // Insertar ruta de imagen y otros datos en la base de datos
    $sql = "INSERT INTO perfumes_la4° (nombre, precio, tamaño, marca, foto) VALUES ('$nombre', '$precio', '$tamaño', '$marca', '$foto')";

    if ($conn->query($sql) === TRUE) {
        $mensaje = "Datos y imagen ingresados correctamente";
        echo "<script>alert('$mensaje'); window.location.href = 'index.php';</script>";
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
