<?php

    include ('ddbb.php');



    if (isset($_GET['nr_inventario'])) {
        $nr_inventario = $_GET['nr_inventario'];
        $query = "DELETE FROM elementos WHERE nr_inventario = $nr_inventario";
        $respuesta = mysqli_query($conn, $query);


        if (!$respuesta) {
            die("Consulta fallida");
        }

        $_SESSION['mensaje'] = "Datos Eliminados Correctamente";
        $_SESSION['tipo-mensaje'] = "danger";


        header("Location: listar_elemento.php");
    }

    
    if (isset($_SESSION['mensaje'])) { ?>

    <div class="alert alert-success alert-dismissible fade show contenedor-mensaje" role="alert">
    <p><?= $_SESSION['mensaje'] ?>  </p>   
    <button type="button" class="btn-close input-mensaje" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php }; ?>

    

