<?php include ('ddbb.php') ?>

<?php include ('header.php') ?>

<div class="principal">
    <h2>Selecciona una opción</h2>
    <div class="contenedor-opciones">

        <a href="crear_marca.php" class="opciones">
            <img class="imagen" src="../img/ingresar.svg" alt="" class="icono">
            <p class="texto-opcion">Crear Marca</p>
        </a>
        <a href="./modificar.php" class="opciones">
            <img class="imagen" src="../img/modificar.svg" alt="" class="icono">
            <p class="texto-opcion">Modificar Marca</p>
        </a>
        <a href="./buscar.php" class="opciones">
            <img class="imagen" src="../img/buscar.svg" alt="" class="icono">
            <p class="texto-opcion">Buscar Marca</p>
        </a>
        <a href="./eliminar.php" class="opciones">
            <img class="imagen" src="../img/eliminar.svg" alt="" class="icono">
            <p class="texto-opcion">Eliminar Marca</p>
        </a>

    </div>
</div>





<?php include ('footer.php') ?>
