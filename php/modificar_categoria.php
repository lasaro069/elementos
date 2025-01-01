<?php include ('ddbb.php') ?>


<?php include ('header.php') ?>






<?php 






    if (isset($_GET['id_categoria'])) {
            $id_categoria = $_GET['id_categoria'];
            $query = "SELECT * FROM categoria WHERE id_categoria = $id_categoria";
            $respuesta = mysqli_query($conn, $query);


            if (mysqli_num_rows($respuesta) == 1) {
                
                $row = mysqli_fetch_array($respuesta);  // fetch_array() returns an array of strings that corresponds to the fetched row or NULL if there are no more rows in resultset.
                $categoria = $row['categoria'];
                $observaciones = $row['observaciones'];
            }
    }

    if (isset($_POST['modificar-registro'])) {
        $id_categoria = $_GET['id_categoria'];
        $categoria = $_POST['categoria'];
        $observaciones = $_POST['observaciones'];

        $query = "UPDATE categoria SET categoria = '$categoria', observaciones = '$observaciones' WHERE id_categoria = $id_categoria";
        mysqli_query($conn, $query);

        //guardamos la consulta en la base de datos
        $resultado = mysqli_query($conn, $query);



        if (!$resultado) {

            die("Consulta fallida");
            
        }

        $_SESSION['mensaje'] = "Datos Guardados Exitosamente"; // creamos un mensaje para mostrar en la página
        $_SESSION['tipo-mensaje'] = "success"; // creamos un tipo de mensaje para mostrar en la página


        header("Location: listar_categoria.php");

    }


    

    

?>










<div class="contenedor-formulario">


<form class="formulario-ingreso" action="modificar_categoria.php?id_categoria=<?php echo $_GET['id_categoria']; ?>" method="post">
    <h2>Modificar categoria</h2>


    <div class="contenedor-inputs">
        <label class="label-inputs-formulario"  for="id-categoria">Id:</label>
        <input class="entrada-datos" type="text" id="id-categoria" name="id-categoria" readonly placeholder="<?php echo $id_categoria ?> "><br>

    </div> 


    <div class="contenedor-inputs">
        <label class="label-inputs-formulario" for="categoria">Categoría:</label>
        <input class="entrada-datos" type="text" id="categoria" name="categoria" value="<?php echo $categoria ?>" required><br>

    </div>



    <div class="contenedor-inputs">

        <label class="label-inputs-formulario" for="observaciones">Observaciones:</label>
        <input class="entrada-datos" type="text" id="observaciones" name="observaciones" value="<?php echo $observaciones ?>"  ><br>
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


