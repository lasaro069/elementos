<?php include ('ddbb.php') ?>


<?php include ('header.php') ?>






<?php 






    if (isset($_GET['id_gama'])) {
            $id_gama = $_GET['id_gama'];
            $query = "SELECT * FROM gama WHERE id_gama = $id_gama";
            $respuesta = mysqli_query($conn, $query);


            if (mysqli_num_rows($respuesta) == 1) {
                
                $row = mysqli_fetch_array($respuesta);  // fetch_array() returns an array of strings that corresponds to the fetched row or NULL if there are no more rows in resultset.
                $gama = $row['gama'];
            }
    }

    if (isset($_POST['modificar-registro'])) {
        $id_gama = $_GET['id_gama'];
        $gama = $_POST['gama'];

        $query = "UPDATE gama SET gama = '$gama' WHERE id_gama = $id_gama";
        mysqli_query($conn, $query);

        //guardamos la consulta en la base de datos
        $resultado = mysqli_query($conn, $query);



        if (!$resultado) {

            die("Consulta fallida");
            
        }

        $_SESSION['mensaje'] = "Datos Guardados Exitosamente"; // creamos un mensaje para mostrar en la página
        $_SESSION['tipo-mensaje'] = "success"; // creamos un tipo de mensaje para mostrar en la página


        header("Location: listar_gama.php");

    }


    

    

?>










<div class="contenedor-formulario">


<form class="formulario-ingreso" action="modificar_gama.php?id_gama=<?php echo $_GET['id_gama']; ?>" method="post">
    <h2>Modificar gama</h2>


    <div class="contenedor-inputs">
        <label class="label-inputs-formulario"  for="id-gama">Id gama:</label>
        <input class="entrada-datos" type="text" id="id-gama" name="id-gama" readonly placeholder="<?php echo $id_gama ?> "><br>

    </div> 


    <div class="contenedor-inputs">
        <label class="label-inputs-formulario" for="gama">gama:</label>
        <input class="entrada-datos" type="text" id="gama" name="gama" value="<?php echo $gama ?>" required><br>

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


