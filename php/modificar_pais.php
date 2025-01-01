<?php include ('ddbb.php') ?>


<?php include ('header.php') ?>






<?php 






    if (isset($_GET['id_pais'])) {
            $id_pais = $_GET['id_pais'];
            $query = "SELECT * FROM pais WHERE id_pais = $id_pais";
            $respuesta = mysqli_query($conn, $query);


            if (mysqli_num_rows($respuesta) == 1) {
                
                $row = mysqli_fetch_array($respuesta);  // fetch_array() returns an array of strings that corresponds to the fetched row or NULL if there are no more rows in resultset.
                $pais = $row['pais'];
            }
    }

    if (isset($_POST['modificar-registro'])) {
        $id_pais = $_GET['id_pais'];
        $pais = $_POST['pais'];

        $query = "UPDATE pais SET pais = '$pais' WHERE id_pais = $id_pais";
        mysqli_query($conn, $query);

        //guardamos la consulta en la base de datos
        $resultado = mysqli_query($conn, $query);



        if (!$resultado) {

            die("Consulta fallida");
            
        }

        $_SESSION['mensaje'] = "Datos Guardados Exitosamente"; // creamos un mensaje para mostrar en la página
        $_SESSION['tipo-mensaje'] = "success"; // creamos un tipo de mensaje para mostrar en la página


        header("Location: listar_pais.php");

    }


    

    

?>










<div class="contenedor-formulario">


<form class="formulario-ingreso" action="modificar_pais.php?id_pais=<?php echo $_GET['id_pais']; ?>" method="post">
    <h2>Modificar pais</h2>


    <div class="contenedor-inputs">
        <label class="label-inputs-formulario"  for="id-pais">Id pais:</label>
        <input class="entrada-datos" type="text" id="id-pais" name="id-pais" readonly placeholder="<?php echo $id_pais ?> "><br>

    </div> 


    <div class="contenedor-inputs">
        <label class="label-inputs-formulario" for="pais">pais:</label>
        <input class="entrada-datos" type="text" id="pais" name="pais" value="<?php echo $pais ?>" required><br>

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


