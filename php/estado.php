<?php include ('ddbb.php') ?>

<?php include ('header.php') ?>

<div class="principal">
    <h2>Selecciona una opción</h2>
    <div class="contenedor-opciones">

        <a href="crear_estado.php" class="opciones">
            <img class="imagen" src="../img/ingresar.svg" alt="" class="icono">
            <p class="texto-opcion">Ingresar Estado</p>
        </a>
        <a href="./listar_estado.php" class="opciones">
            <img class="imagen" src="../img/modificar.svg" alt="" class="icono">
            <p class="texto-opcion">Modificar Estado</p>
        </a>
        <a href="./listar_estado.php" class="opciones">
            <img class="imagen" src="../img/buscar.svg" alt="" class="icono">
            <p class="texto-opcion">Buscar Estado</p>
        </a>
        <a href="./listar_estado.php" class="opciones">
            <img class="imagen" src="../img/eliminar.svg" alt="" class="icono">
            <p class="texto-opcion">Eliminar Estado</p>
        </a>

    </div>
</div>





<?php include ('footer.php') ?>
