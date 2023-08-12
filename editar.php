<?php
include 'conexion.php';

$id = $_GET['id'];

// Consulta para obtener los datos del producto
$sql = "SELECT nombre, precio, tamaño, marca, foto FROM perfumes.perfumes_la4° WHERE Id = '$id'";
$resultado = $conn->query($sql);

if ($fila = $resultado->fetch_assoc()) {
    $nombreActual = $fila["nombre"];
    $precioActual = $fila["precio"];
    $tamañoActual = $fila["tamaño"];
    $marcaActual = $fila["marca"];
    $rutaImagenActual = $fila["foto"];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreNuevo = $_POST["nombre"];
    $precioNuevo = $_POST["precio"];
    $tamañoNuevo = $_POST["tamaño"];
    $marcaNuevo = $_POST["marca"];

    // Manejar la imagen
    $rutaImagenNueva = $rutaImagenActual; // Por defecto, mantener la imagen actual

    if ($_FILES["foto"]["error"] === UPLOAD_ERR_OK) {
        $rutaImagenNueva = "carpeta_imagenes/" . $_FILES["foto"]["name"];
        move_uploaded_file($_FILES["foto"]["tmp_name"], $rutaImagenNueva);
    }

    $sqlActualizar = "UPDATE perfumes.perfumes_la4° SET nombre='$nombreNuevo', precio='$precioNuevo', tamaño='$tamañoNuevo', marca='$marcaNuevo', foto='$rutaImagenNueva'  WHERE Id='$id'";
    
    if ($conn->query($sqlActualizar) === TRUE) {
      $mensaje = "Datos y imagen actualizados correctamente";
      echo "<script>alert('$mensaje'); window.location.href = 'index.php';</script>";
        $rutaImagenActual = $rutaImagenNueva;
    } else {
        $mensaje = "verifique los datos";
        echo "<script>alert('$mensaje'); window.location.href = 'editar.php';</script>";
    }
}
?>
       <link rel="stylesheet" href="estiloss.css">

   <main>
<section class="main-form">
    <div class="form-title">
        <h2>Editar producto</h2>
    </div>
    <form action="editar.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
        <fieldset class="form-img">
            <label for="foto">IMAGEN</label>
            <input type="file" name="foto" id="foto">
            <img class="item-img" src="<?php echo $rutaImagenActual; ?>" alt="Imagen actual">
        </fieldset>
        <fieldset class="form-field">
            <label for="nombre">NOMBRE:</label>
            <input type="text" name="nombre" id="nombre" value="<?php echo $nombreActual; ?>" required>
        </fieldset>
        <fieldset class="form-field">
            <label for="precio">PRECIO:</label>
            <input type="number" name="precio" id="precio" value="<?php echo $precioActual; ?>" required>
        </fieldset>
        <fieldset class="form-field">
            <label for="tamaño">TAMAÑO:</label>
            <input type="text" name="tamaño" id="tamaño" value="<?php echo $tamañoActual; ?>" required>
        </fieldset>
        <fieldset class="form-field">
            <label for="marca">MARCA:</label>
            <input type="text" name="marca" id="marca" value="<?php echo $marcaActual; ?>" required>
        </fieldset>
        
        <div class="form-buttons">
            <input type="submit" value="Guardar cambios">
            <a href='/index.php'>
            <input  type="submit" value="cancelar">
            <a href='/index.php'>
        </div>
    </form>
</section>
