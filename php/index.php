<?php include ('ddbb.php') ?>

<?php include ('header.php') ?>

<div class="principal">
    <h2>Selecciona una opción</h2>
    <div class="contenedor-opciones">

        <a href="create.php" class="opciones">
            <img class="imagen" src="../img/ingresar.svg" alt="" class="icono">
            <p class="texto-opcion">Registrar</p>
        </a>
        <a href="update.php" class="opciones">
            <img class="imagen" src="../img/modificar.svg" alt="" class="icono">
            <p class="texto-opcion">Modificar</p>
        </a>
        <a href="read.php" class="opciones">
            <img class="imagen" src="../img/buscar.svg" alt="" class="icono">
            <p class="texto-opcion">Buscar</p>
        </a>
        <a href="delete.php" class="opciones">
            <img class="imagen" src="../img/eliminar.svg" alt="" class="icono">
            <p class="texto-opcion">Eliminar</p>
        </a>

    </div>
</div>





<?php include ('./footer.php') ?>
