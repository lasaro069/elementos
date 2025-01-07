<?php include ('./php/ddbb.php') ?>




<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elementos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    </head>

<body>
    <header class="header">
        <h1>Tienda de Equipos</h1>
        <nav class="navbar">
            <a href="index.php">Inicio</a>
            <a href="./php/elemento.php">Elementos</a>
            <a href="./php/categoria.php">Categorías</a>
            <a href="./php/estado.php">Estado</a>
            <a href="./php/marca.php">Marcas</a>
            <a href="./php/gama.php">Gamas</a>
            <a href="./php/pais.php">Países</a>
        </nav>
    </header>
    <main>





<div class="principal">
    <h2>Selecciona una opción</h2>
    <div class="contenedor-opciones">

        <a href="./php/create.php" class="opciones">
            <img class="imagen" src="./img/ingresar.svg" alt="" class="icono">
            <p class="texto-opcion">Registrar</p>
        </a>
        <a href="./php/update.php" class="opciones">
            <img class="imagen" src="./img/modificar.svg" alt="" class="icono">
            <p class="texto-opcion">Modificar</p>
        </a>
        <a href="./php/read.php" class="opciones">
            <img class="imagen" src="./img/buscar.svg" alt="" class="icono">
            <p class="texto-opcion">Buscar</p>
        </a>
        <a href="./php/delete.php" class="opciones">
            <img class="imagen" src="./img/eliminar.svg" alt="" class="icono">
            <p class="texto-opcion">Eliminar</p>
        </a>

    </div>
</div>




        
</main>
    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> @LuisAntonioSantos</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>