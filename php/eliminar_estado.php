<?php

    include ('ddbb.php');



    if (isset($_GET['id_estado'])) {
        $id_estado = $_GET['id_estado'];
        $query = "DELETE FROM estado WHERE id_estado = $id_estado";
        $respuesta = mysqli_query($conn, $query);


        if (!$respuesta) {
            die("Consulta fallida");
        }

        $_SESSION['mensaje'] = "Datos Eliminados Correctamente";
        $_SESSION['tipo-mensaje'] = "danger";


        header("Location: listar_estado.php");
    }

    
    if (isset($_SESSION['mensaje'])) { ?>

    <div class="alert alert-success alert-dismissible fade show contenedor-mensaje" role="alert">
    <p><?= $_SESSION['mensaje'] ?>  </p>   
    <button type="button" class="btn-close input-mensaje" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php }; ?>

    

