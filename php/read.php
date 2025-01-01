<?php include ('ddbb.php') ?>

<?php include ('header.php') ?>

<div class="principal principal-crear">
    <h2>Selecciona una opción</h2>
    <div class="contenedor-opciones">

        <a href="#" class="opciones">
            <img class="imagen" src="../img/new.svg" alt="" class="icono">
            <p class="texto-opcion">Listar Elementos</p>
        </a>
        <a href="./modificar.php" class="opciones">
            <img class="imagen" src="../img/modificar.svg" alt="" class="icono">
            <p class="texto-opcion">Listar Gama</p>
        </a>
        <a href="./buscar.php" class="opciones">
            <img class="imagen" src="../img/estado.svg" alt="" class="icono">
            <p class="texto-opcion">Listar Estado</p>
        </a>
        <a href="listar_marca.php" class="opciones">
            <img class="imagen" src="../img/marca.svg" alt="" class="icono">
            <p class="texto-opcion">Listar Marca</p>
        </a>
        <a href="./eliminar.php" class="opciones">
            <img class="imagen" src="../img/tipo.svg" alt="" class="icono">
            <p class="texto-opcion">Listar Tipo</p>
        </a>
        <a href="./eliminar.php" class="opciones">
            <img class="imagen" src="../img/pais.svg" alt="" class="icono">
            <p class="texto-opcion">Listar País</p>
        </a>

    </div>
</div>





<?php include ('footer.php') ?>
