<?php include ('./php/ddbb.php') ?>

<?php include ('./php/header.php') ?>

<div class="principal">
    <h2>Selecciona una opción</h2>
    <div class="contenedor-opciones">

        <a href="./ingresar.php" class="opciones">
            <img class="imagen" src="./img/ingresar.svg" alt="" class="icono">
            <p class="texto-opcion">Registrar Vehículo</p>
        </a>
        <a href="./modificar.php" class="opciones">
            <img class="imagen" src="./img/modificar.svg" alt="" class="icono">
            <p class="texto-opcion">Modificar Vehículo</p>
        </a>
        <a href="./buscar.php" class="opciones">
            <img class="imagen" src="./img/buscar.svg" alt="" class="icono">
            <p class="texto-opcion">Buscar Vehículo</p>
        </a>
        <a href="./eliminar.php" class="opciones">
            <img class="imagen" src="./img/eliminar.svg" alt="" class="icono">
            <p class="texto-opcion">Eliminar Vehículo</p>
        </a>

    </div>
</div>





<?php include ('./php/footer.php') ?>
