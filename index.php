<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumeria ADSO</title>
<link rel="stylesheet" href="./estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <header>
        <div class="title">
            <h1>COSMETICOS DOÑA GATA  </h1>
        </div>
     
    </header>
    <section class="buscar">
        <form action="index.php" method="get">
            <input type="text" name="buscar" placeholder="Buscar producto">
            <button type="submit">Buscar</button>
        </form>
    </section>

    <main>
        <section class="formulario">
            <div class="title-formulario">
                <h2>Ingrese su producto (●'◡'●)</h2>
            </div>
            <form action="post.php" method="post" enctype="multipart/form-data">
                <fieldset class="form-img">
                    <label for="foto"> Seleccione una foto para su producto:
                    </label>
                    <input type="file" name="foto" id="foto">
                </fieldset>
                <fieldset class="form-field">
                    <label for="nombre">Nombre:</label>
                    <i class="icon fas fa-perfume"></i>
                    <input type="text" name="nombre" id="nombre" required > 
                </fieldset>
                <fieldset class="form-field">
                    <i class="icon fas fa-dollar-sign"></i>
                    <label for="precio">Precio:</label>
                    <input type="number" name="precio" id="precio" required>
                </fieldset>
                <fieldset class="form-field">
                    <i class="icon fas fa-ruler-combined"></i>
                    <label for="tamaño">Tamaño:</label>
                    <input type="text" name="tamaño" id="tamaño" required>
                </fieldset>
                <fieldset class="form-field">
                    <i class="icon fas fa-tag"></i>
                    <label for="marca">Marca:</label>
                    <input type="text" name="marca" id="marca" required>
                </fieldset>
                <div class="form-buttons">
                    <input type="submit" value="Agregar">
                    <input src="/index.php" type="reset" value="Cancelar">
                </div>
            </form>
        </section>
        <section class="main-inventario">
            <div class="inventario-title">
                <h2>COSMETICOS 😎</h2>
            </div>
            <div class="inventario-container">

                <?php
                require_once "conexion.php"; // Incluir el archivo de conexión
                include "buscar.php";
                if ($resultado->num_rows > 0) {
                    while ($fila = $resultado->fetch_assoc()) {
                        $id=$fila["id"];
                                    $nombre = $fila["nombre"];
                                    $precio = $fila["precio"];
                                    $tamaño = $fila["tamaño"];
                                    $marca = $fila["marca"];
                                    $rutaImagen = $fila["foto"];
            
                                    echo "<div class='inventario-item'>";
                                   
                                    echo "<img class='item-img' src='$rutaImagen' alt='Imagen del perfume'>";
                                    echo "<h3>PRODUCTO: $id</h3>";
                                    echo "<div class='item-descripcion'>";
                                    echo "<h3>$nombre</h3>";
                                    echo "<span>Precio: $ $precio</span> <br>";
                                    echo "<span>Tamaño: $tamaño</span> <br>";
                                    echo "<span>Marca: $marca</span> <br>";
                                    echo "</div>";
                                    
                                    echo "<div class='item-botones'>";
                                    echo "<a href='eliminar.php?id=" . $id . "'><button class='botones-editar'>Eliminar</button></a>";
                                    echo "<a href='editar.php?id=" . $id . "'><button class='botones-editar'>Editar</button></a>";
                                    echo "</div>";
                                    echo "</div>";
                    }
                
                }
                ?>
            
            </div>
    </main>

    <footer>
        <section>
            <h3>Programa:</h3>
            <span>Analisis y Desarrollo de Sosftware (ADSO)</span>
        </section>
        <section>
            <h3>Ficha:</h3>
            <span>2561080</span>
        </section>
        <section>
            <h3>Trabajado por:</h3>
            <span>Jorge Enrique Muñoz</span>
        </section>
    </footer>
</body>

</html>