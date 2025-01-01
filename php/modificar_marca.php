<?php include ('ddbb.php') ?>


<?php include ('header.php') ?>






<?php 






    if (isset($_GET['id_marca'])) {
            $id_marca = $_GET['id_marca'];
            $query = "SELECT * FROM marca WHERE id_marca = $id_marca";
            $respuesta = mysqli_query($conn, $query);


            if (mysqli_num_rows($respuesta) == 1) {
                
                $row = mysqli_fetch_array($respuesta);  // fetch_array() returns an array of strings that corresponds to the fetched row or NULL if there are no more rows in resultset.
                $marca = $row['marca'];
                $fabricante = $row['fabricante'];
                $pais = $row['id_pais'];
            }
    }

    if (isset($_POST['modificar-registro'])) {
        $id_marca = $_GET['id_marca'];
        $marca = $_POST['marca'];
        $fabricante = $_POST['fabricante'];
        $pais = $_POST['id_pais'];

        $query = "UPDATE marca SET marca = '$marca', fabricante = '$fabricante', id_pais = '$pais' WHERE id_marca = $id_marca";
        mysqli_query($conn, $query);

        //guardamos la consulta en la base de datos
        $resultado = mysqli_query($conn, $query);



        if (!$resultado) {

            die("Consulta fallida");
            
        }

        $_SESSION['mensaje'] = "Datos Guardados Exitosamente"; // creamos un mensaje para mostrar en la página
        $_SESSION['tipo-mensaje'] = "success"; // creamos un tipo de mensaje para mostrar en la página


        header("Location: listar_marca.php");

    }


    

    

?>










<div class="contenedor-formulario">


<form class="formulario-ingreso" action="modificar_marca.php?id_marca=<?php echo $_GET['id_marca']; ?>" method="post">
    <h2>Modificar Marca</h2>


    <div class="contenedor-inputs">
        <label class="label-inputs-formulario"  for="id-marca">Id Marca:</label>
        <input class="entrada-datos" type="text" id="id-marca" name="id-marca" readonly placeholder="<?php echo $id_marca ?> "><br>

    </div> 


    <div class="contenedor-inputs">
        <label class="label-inputs-formulario" for="marca">Marca:</label>
        <input class="entrada-datos" type="text" id="marca" name="marca" value="<?php echo $marca ?>" required><br>

    </div>



    <div class="contenedor-inputs">

        <label class="label-inputs-formulario" for="fabricante">Fabricante:</label>
        <input class="entrada-datos" type="text" id="fabricante" name="fabricante" value="<?php echo $fabricante ?>"  required><br>
    </div>

    <div class="contenedor-inputs">

        <label class="label-inputs-formulario" for="pais">País:</label>
        <input class="entrada-datos" type="text" id="pais" name="pais" value="<?php echo $pais ?>"  required><br>
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


