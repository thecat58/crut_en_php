<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumeria ADSO</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <header>
        <div class="header-title">
            <h1>Gestión de Inventario</h1>
        </div>
        <form class="header-search" action="">
            <input type="search" name="" id="buscar">
            <input type="submit" value="Buscar">
        </form>
    </header>

    <main>
        <section class="main-form">
            <div class="form-title">
                <h2>Ingresar perfume</h2>
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
                    <input type="reset" value="Cancelar">
                </div>
            </form>
        </section>
        <!-- <section class="main-inventario">
            <div class="inventario-title">
                <h2>Inventario</h2>
            </div>
            <div class="inventario-container">
                <div class="inventario-item">
                    <img class="item-img" src="" alt="">
                    <div class="item-descripcion">
                        <h3>Perfume 1</h3>
                        <span>Precio: $2000</span>
                    </div>
                    <div class="item-botones">
                        <button class="botones-eliminar">Eliminar</button>
                        <button class="botones-editar">Editar</button>
                    </div>
                </div>
                <div class="inventario-item">
                    <img class="item-img" src="" alt="">
                    <div class="item-descripcion">
                        <h3>Perfume 1</h3>
                        <span>Precio: $2000</span>
                    </div>
                    <div class="item-botones">
                        <button class="botones-eliminar">Eliminar</button>
                        <button class="botones-editar">Editar</button>
                    </div>
                </div>
                <div class="inventario-item">
                    <img class="item-img" src="" alt="">
                    <div class="item-descripcion">
                        <h3>Perfume 1</h3>
                        <span>Precio: $2000</span>
                    </div>
                    <div class="item-botones">
                        <button class="botones-eliminar">Eliminar</button>
                        <button class="botones-editar">Editar</button>
                    </div>
                </div>
                <div class="inventario-item">
                    <img class="item-img" src="" alt="">
                    <div class="item-descripcion">
                        <h3>Perfume 1</h3>
                        <span>Precio: $2000</span>
                    </div>
                    <div class="item-botones">
                        <button class="botones-eliminar">Eliminar</button>
                        <button class="botones-editar">Editar</button>
                    </div>
                </div>
                <div class="inventario-item">
                    <img class="item-img" src="" alt="">
                    <div class="item-descripcion">
                        <h3>Perfume 1</h3>
                        <span>Precio: $2000</span>
                    </div>
                    <div class="item-botones">
                        <button class="botones-eliminar">Eliminar</button>
                        <button class="botones-editar">Editar</button>
                    </div>
                </div>
                <div class="inventario-item">
                    <img class="item-img" src="" alt="">
                    <div class="item-descripcion">
                        <h3>Perfume 1</h3>
                        <span>Precio: $2000</span>
                    </div>
                    <div class="item-botones">
                        <button class="botones-eliminar">Eliminar</button>
                        <button class="botones-editar">Editar</button>
                    </div>
                </div>
                <div class="inventario-item">
                    <img class="item-img" src="" alt="">
                    <div class="item-descripcion">
                        <h3>Perfume 1</h3>
                        <span>Precio: $2000</span>
                    </div>
                    <div class="item-botones">
                        <button class="botones-eliminar">Eliminar</button>
                        <button class="botones-editar">Editar</button>
                    </div>
                </div>
                <div class="inventario-item">
                    <img class="item-img" src="" alt="">
                    <div class="item-descripcion">
                        <h3>Perfume 1</h3>
                        <span>Precio: $2000</span>
                    </div>
                    <div class="item-botones">
                        <button class="botones-eliminar">Eliminar</button>
                        <button class="botones-editar">Editar</button>
                    </div>
                </div>
                <div class="inventario-item">
                    <img class="item-img" src="" alt="">
                    <div class="item-descripcion">
                        <h3>Perfume 1</h3>
                        <span>Precio: $2000</span>
                    </div>
                    <div class="item-botones">
                        <button class="botones-eliminar">Eliminar</button>
                        <button class="botones-editar">Editar</button>
                    </div>
                </div>
                <div class="inventario-item">
                    <img class="item-img" src="" alt="">
                    <div class="item-descripcion">
                        <h3>Perfume 1</h3>
                        <span>Precio: $2000</span>
                    </div>
                    <div class="item-botones">
                        <button class="botones-eliminar">Eliminar</button>
                        <button class="botones-editar">Editar</button>
                    </div>
                </div>
                <div class="inventario-item">
                    <img class="item-img" src="" alt="">
                    <div class="item-descripcion">
                        <h3>Perfume 1</h3>
                        <span>Precio: $2000</span>
                    </div>
                    <div class="item-botones">
                        <button class="botones-eliminar">Eliminar</button>
                        <button class="botones-editar">Editar</button>
                    </div>
                </div>
                <div class="inventario-item">
                    <img class="item-img" src="" alt="">
                    <div class="item-descripcion">
                        <h3>Perfume 1</h3>
                        <span>Precio: $2000</span>
                    </div>
                    <div class="item-botones">
                        <button class="botones-eliminar">Eliminar</button>
                        <button class="botones-editar">Editar</button>
                    </div>
                </div>
        </section> -->
        <section class="main-inventario">
            <div class="inventario-title">
                <h2>Inventario</h2>
            </div>
            <div class="inventario-container">

                <?php
                require_once "conexion.php"; // Incluir el archivo de conexión

                // Consulta para obtener los datos de la base de datos
                $sql = "SELECT nombre, precio, tamaño, marca, foto FROM perfumes_la4°";
                $resultado = $conn->query($sql);

                if ($resultado->num_rows > 0) {
                    while ($fila = $resultado->fetch_assoc()) {
                        $nombre = $fila["nombre"];
                        $precio = $fila["precio"];
                        $tamaño = $fila["tamaño"];
                        $marca = $fila["marca"];
                        $rutaImagen = $fila["foto"];

                        echo "<div class='inventario-item'>";
                        echo "<img class='item-img' src='$rutaImagen' alt='Imagen del perfume'>";
                        echo "<div class='item-descripcion'>";
                        echo "<h3>$nombre</h3>";
                        echo "<span>Precio: $precio</span> <br>";
                        echo "<span>Tamaño: $tamaño</span> <br>";
                        echo "<span>Marca: $marca</span> <br>";
                        echo "</div>";
                        echo "<div class='item-botones'>";
                        echo "<button class='botones-eliminar'>Eliminar</button>";
                        echo "<button class='botones-editar'>Editar</button>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "No se encontraron registros.";
                }

                // Cerrar la conexión
                $conn->close();
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
            <span>Jhon Wilmer Azcárate</span>
            <span>Jorge Enrique Muñoz</span>
        </section>
    </footer>
</body>

</html>