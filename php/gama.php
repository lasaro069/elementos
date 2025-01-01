<?php include ('ddbb.php') ?>

<?php include ('header.php') ?>

<div class="principal">
    <h2>Selecciona una opción</h2>
    <div class="contenedor-opciones">

        <a href="crear_gama.php" class="opciones">
            <img class="imagen" src="../img/ingresar.svg" alt="" class="icono">
            <p class="texto-opcion">Ingresar Gama</p>
        </a>
        <a href="./listar_gama.php" class="opciones">
            <img class="imagen" src="../img/modificar.svg" alt="" class="icono">
            <p class="texto-opcion">Modificar Gama</p>
        </a>
        <a href="./listar_gama.php" class="opciones">
            <img class="imagen" src="../img/buscar.svg" alt="" class="icono">
            <p class="texto-opcion">Buscar Gama</p>
        </a>
        <a href="./listar_gama.php" class="opciones">
            <img class="imagen" src="../img/eliminar.svg" alt="" class="icono">
            <p class="texto-opcion">Eliminar Gama</p>
        </a>

    </div>
</div>





<?php include ('footer.php') ?>
