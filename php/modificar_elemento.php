<?php include ('ddbb.php') ?>


<?php include ('header.php') ?>






<?php 






    if (isset($_GET['nr_inventario'])) {
            $nr_inventario = $_GET['nr_inventario'];
            $query = "SELECT * FROM elementos WHERE nr_inventario = $nr_inventario";
            $respuesta = mysqli_query($conn, $query);


            if (mysqli_num_rows($respuesta) == 1) {
                
                $row = mysqli_fetch_array($respuesta);  // fetch_array() returns an array of strings that corresponds to the fetched row or NULL if there are no more rows in resultset.
                $id_categoria = $row['id_categoria'];
                $id_marca = $row['id_marca'];
                $modelo = $row['modelo'];
                $id_gama = $row['id_gama'];
                $descripcion = $row['descripcion'];
                $fecha_ingreso = $row['fecha_ingreso'];
                $id_estado = $row['id_estado'];
                $ubicacion = $row['ubicacion'];
                $imagen = $row['imagen'];


            }
    }

    if (isset($_POST['modificar-registro'])) {
        $nr_inventario = $_GET['nr_inventario'];
        $id_categoria = $_POST['id_categoria'];
        $id_marca = $_POST['id_marca'];
        $modelo = $_POST['modelo'];
        $id_gama = $_POST['id_gama'];
        $descripcion = $_POST['descripcion'];
        $fecha_ingreso = $_POST['fecha_ingreso'];
        $id_estado = $_POST['id_estado'];
        $ubicacion = $_POST['ubicacion'];
        $imagen = $_POST['imagen'];








        // $imagen = $_FILES['imagen']['tmp_name'];
        // $nombre_imagen = $_FILES['imagen']['name'];
        // $tipo_imagen = strtolower(pathinfo($nombre_imagen, PATHINFO_EXTENSION));
        // $size_imagen = $_FILES['imagen']['size'];
        // $directorio = '../img/';







        $query = "UPDATE elementos SET id_categoria = '$id_categoria', id_marca = '$id_marca', modelo = '$modelo', id_gama = '$id_gama', descripcion = '$descripcion', fecha_ingreso = '$fecha_ingreso', id_estado = '$id_estado', ubicacion = '$ubicacion', imagen = '$imagen' WHERE nr_inventario = $nr_inventario";

        mysqli_query($conn, $query);




        //guardamos la consulta en la base de datos
        $resultado = mysqli_query($conn, $query);




    
        if (!$resultado) {

            die("Consulta fallida");
            
        }




        // $id_registro = $conn -> insert_id;

        // $ruta = ($directorio . $id_registro . "_" . $nombre_imagen) ;






        // $actualizar_nombre_imagen = $conn -> query("UPDATE elementos SET imagen = '$ruta' WHERE nr_inventario = $id_registro");



    
    

        // if (move_uploaded_file($imagen, $ruta)) {
        //     echo "El archivo se subió correctamente";
        // }   else {
        //     echo "Hubo un error al subir el archivo";
        // }
    




        $_SESSION['mensaje'] = "Datos Guardados Exitosamente"; // creamos un mensaje para mostrar en la página
        $_SESSION['tipo-mensaje'] = "success"; // creamos un tipo de mensaje para mostrar en la página


        header("Location: listar_elemento.php");

    }


    

    

?>










<div class="contenedor-formulario">


<form class="formulario-ingreso" action="modificar_elemento.php?nr_inventario=<?php echo $_GET['nr_inventario']; ?>" method="post">
    <h2>Modificar elemento</h2>


    <div class="contenedor-inputs">
        <label class="label-inputs-formulario"  for="nr_inventario">Nr Inventario:</label>
        <input class="entrada-datos" type="text" id="nr_inventario" name="nr_inventario" readonly placeholder="<?php echo $nr_inventario ?> "><br>

    </div> 


    <div class="contenedor-inputs">
                <label class="label-inputs-formulario" for="id_categoria">Id Categoría:</label>
                <input class="entrada-datos" type="text" id="id_categoria" name="id_categoria" value="<?php echo $id_categoria ?>" required><br>

    </div>



    <div class="contenedor-inputs">

        <label class="label-inputs-formulario" for="id_marca">Id Marca:</label>
        <input class="entrada-datos" type="text" id="id_marca" name="id_marca" value="<?php echo $id_marca ?>" required><br>
    </div>

    <div class="contenedor-inputs">

        <label class="label-inputs-formulario" for="modelo">Modelo:</label>
        <input class="entrada-datos" type="text" id="modelo" name="modelo" value="<?php echo $modelo ?>" required><br>
    </div>



    <div class="contenedor-inputs">

        <label class="label-inputs-formulario" for="id_gama">Id Gama:</label>
        <input class="entrada-datos" type="text" id="id_gama" name="id_gama" value="<?php echo $id_gama ?>" required><br>
    </div>




    <div class="contenedor-inputs">

        <label class="label-inputs-formulario" for="descripcion">Descripción:</label>
        <input class="entrada-datos" type="text" id="descripcion" name="descripcion" value="<?php echo $descripcion ?>" required><br>
    </div>







    <div class="contenedor-inputs">

        <label class="label-inputs-formulario" for="fecha_ingreso">Fecha de Ingreso:</label>
        <input class="entrada-datos" type="text" id="fecha_ingreso" name="fecha_ingreso" value="<?php echo $fecha_ingreso ?>" placeholder="aaaa/mm/dd"><br>
    </div>







    <div class="contenedor-inputs">

        <label class="label-inputs-formulario" for="id_estado">Id Estado:</label>
        <input class="entrada-datos" type="text" id="id_estado" name="id_estado" value="<?php echo $id_estado ?>" required><br>
    </div>








        <div class="contenedor-inputs">

        <label class="label-inputs-formulario" for="ubicacion">Ubicación:</label>
        <input class="entrada-datos" type="text" id="ubicacion" name="ubicacion" value="<?php echo $ubicacion ?>" required><br>
    </div>





    <div class="contenedor-inputs">

        <label class="label-inputs-formulario" for="imagen">Imagen:</label>
        <input class="entrada-datos" type="file" id="imagen" name="imagen" value="<?php echo $imagen ?>" ><br>
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


