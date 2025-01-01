<?php include ('ddbb.php') ?>


<?php include ('header.php') ?>






<?php 






    if (isset($_GET['id_estado'])) {
            $id_estado = $_GET['id_estado'];
            $query = "SELECT * FROM estado WHERE id_estado = $id_estado";
            $respuesta = mysqli_query($conn, $query);


            if (mysqli_num_rows($respuesta) == 1) {
                
                $row = mysqli_fetch_array($respuesta);  // fetch_array() returns an array of strings that corresponds to the fetched row or NULL if there are no more rows in resultset.
                $estado = $row['estado'];
            }
    }

    if (isset($_POST['modificar-registro'])) {
        $id_estado = $_GET['id_estado'];
        $estado = $_POST['estado'];

        $query = "UPDATE estado SET estado = '$estado' WHERE id_estado = $id_estado";
        mysqli_query($conn, $query);

        //guardamos la consulta en la base de datos
        $resultado = mysqli_query($conn, $query);



        if (!$resultado) {

            die("Consulta fallida");
            
        }

        $_SESSION['mensaje'] = "Datos Guardados Exitosamente"; // creamos un mensaje para mostrar en la página
        $_SESSION['tipo-mensaje'] = "success"; // creamos un tipo de mensaje para mostrar en la página


        header("Location: listar_estado.php");

    }


    

    

?>










<div class="contenedor-formulario">


<form class="formulario-ingreso" action="modificar_estado.php?id_estado=<?php echo $_GET['id_estado']; ?>" method="post">
    <h2>Modificar estado</h2>


    <div class="contenedor-inputs">
        <label class="label-inputs-formulario"  for="id-estado">Id estado:</label>
        <input class="entrada-datos" type="text" id="id-estado" name="id-estado" readonly placeholder="<?php echo $id_estado ?> "><br>

    </div> 


    <div class="contenedor-inputs">
        <label class="label-inputs-formulario" for="estado">estado:</label>
        <input class="entrada-datos" type="text" id="estado" name="estado" value="<?php echo $estado ?>" required><br>

    </div>





    <input class="boton-ingresar" name="modificar-registro" type="submit" value="Modificar Registro">




    <?php

if (isset($_SESSION['mensaje'])) { ?>


    <div class="alert alert-success alert-dismissible fade show contenedor-mensaje" role="alert">
    <p><?= $_SESSION['mensaje'] ?>  </p>   
    <button type="button" class="btn-close input-mensaje" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<!-- 
        <div class="contenedor-mensaje">
        <p class="mensaje"><?= $_SESSION['mensaje'] ?> </p>
        <input class="input-mensaje" name="mensaje" type="submit" value="X"> -->
    <?php session_unset(); } ?>



    </div>






</form>






</div>



















<?php include ('footer.php') ?>


