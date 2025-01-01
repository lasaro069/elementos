<?php

    include ('ddbb.php');



    if (isset($_GET['id_pais'])) {
        $id_pais = $_GET['id_pais'];
        $query = "DELETE FROM pais WHERE id_pais = $id_pais";
        $respuesta = mysqli_query($conn, $query);


        if (!$respuesta) {
            die("Consulta fallida");
        }

        $_SESSION['mensaje'] = "Datos Eliminados Correctamente";
        $_SESSION['tipo-mensaje'] = "danger";


        header("Location: listar_pais.php");
    }

    
    if (isset($_SESSION['mensaje'])) { ?>

    <div class="alert alert-success alert-dismissible fade show contenedor-mensaje" role="alert">
    <p><?= $_SESSION['mensaje'] ?>  </p>   
    <button type="button" class="btn-close input-mensaje" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php }; ?>

    

