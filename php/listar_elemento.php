<?php include ('ddbb.php') ?>

<?php include ('header.php') ?>






<div class="contenedor-formulario contenedor-formulario-modificar">






<form class="formulario-ingreso" action="buscar_elemento.php" method="post">
                    <h2>Buscar Elemento</h2>

            

                    <div class="contenedor-inputs">
                        <label class="label-inputs-formulario" for="elemento">Id:</label>
                        <input class="entrada-datos" type="text" id="nr_inventario" name="nr_inventario" ><br>

                    </div>




                    <div class="contenedor-inputs">
                        <label class="label-inputs-formulario" for="elemento">Elemento:</label>
                        <input class="entrada-datos" type="text" id="elemento" name="elemento" ><br>

                    </div>



                    <div class="contenedor-inputs">

                        <label class="label-inputs-formulario" for="id_categoria">id_categoria:</label>
                        <input class="entrada-datos" type="text" id="id_categoria" name="id_categoria" ><br>
                    </div>




                    <input class="boton-ingresar" name="guardar-elemento" type="submit" value="Buscar">



                    <button class="boton-ingresar" name="listar-elemento" value="Listado Genaral">
                        <a class="boton-ingresar-a" href="listar_elemento.php">Listado General</a>
                    </button>





                    <?php if (isset($_SESSION['mensaje'])) { ?>


                        <div class="alert alert-success alert-dismissible fade show contenedor-mensaje" role="alert">
                        <p><?= $_SESSION['mensaje'] ?>  </p>   
                        <button type="button" class="btn-close input-mensaje" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                <?php session_unset(); } ?>
            
        





        </form>


 
    <div class="contenedor-tabla">

        <table class="tabla">
            
            <thead>
                <tr >
                    <th class="titulo-tabla" colspan="12">Listado de Elementos</th>
                </tr>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Gama</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Fecha Ingreso</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Ubicación</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    $query = "SELECT * FROM elementos";
                    $respuesta_elemento = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($respuesta_elemento)) { ?>
                        <tr>
                            <td> <?php echo $row['nr_inventario'] ?> </td>
                            <td> <?php echo $row['id_categoria'] ?> </td>
                            <td> <?php echo $row['id_marca'] ?> </td>
                            <td> <?php echo $row['modelo'] ?> </td>
                            <td> <?php echo $row['id_gama'] ?> </td>
                            <td> <?php echo $row['descripcion'] ?> </td>
                            <td> <?php echo $row['fecha_ingreso'] ?> </td>
                            <td> <?php echo $row['id_estado'] ?> </td>
                            <td> <?php echo $row['ubicacion'] ?> </td>
                            <td> <?php echo $row['imagen'] ?> </td>
                            <td>

                                <div class="contenedor-imagen">
                                    <a class="caja-imagen caja-imagen-edit" href="modificar_elemento.php?nr_inventario=<?php echo $row['nr_inventario'] ?>">
                                        <img class="icono icono-edit" src="../img/edit.ico" alt="">
                                    </a>
                                    <a class="caja-imagen caja-imagen-delete" href="eliminar_elemento.php?nr_inventario=<?php echo $row['nr_inventario'] ?>">
                                        <img class="icono icono-delete" src="../img/delete.ico" alt="">
                                    </a>

                                </div>

                                
                            </td>
                        </tr>
                    <?php }
                
                ?>
            </tbody>
        </table>

    </div>



















</div>





<?php include ('footer.php') ?>