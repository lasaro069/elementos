<?php include ('ddbb.php') ?>

<?php include ('header.php') ?>

<div class="principal principal-crear">
    <h2>Selecciona una opción</h2>
    <div class="contenedor-opciones">

        <a href="#" class="opciones">
            <img class="imagen" src="../img/new.svg" alt="" class="icono">
            <p class="texto-opcion">Modificar Elementos</p>
        </a>
        <a href="./modificar.php" class="opciones">
            <img class="imagen" src="../img/modificar.svg" alt="" class="icono">
            <p class="texto-opcion">Modificar Gama</p>
        </a>
        <a href="./buscar.php" class="opciones">
            <img class="imagen" src="../img/estado.svg" alt="" class="icono">
            <p class="texto-opcion">Modificar Estado</p>
        </a>
        <a href="listar_marca.php" class="opciones">
            <img class="imagen" src="../img/marca.svg" alt="" class="icono">
            <p class="texto-opcion">Modificar Marca</p>
        </a>
        <a href="./eliminar.php" class="opciones">
            <img class="imagen" src="../img/tipo.svg" alt="" class="icono">
            <p class="texto-opcion">Modificar Tipo</p>
        </a>
        <a href="./eliminar.php" class="opciones">
            <img class="imagen" src="../img/pais.svg" alt="" class="icono">
            <p class="texto-opcion">Modificar País</p>
        </a>

    </div>
</div>





<?php include ('footer.php') ?>
