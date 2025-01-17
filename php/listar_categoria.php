<?php include ('ddbb.php') ?>

<?php include ('header.php') ?>






<div class="contenedor-formulario contenedor-formulario-modificar">






<form class="formulario-ingreso" action="buscar_categoria.php" method="post">
                    <h2>Buscar Categoría</h2>

            

                    <div class="contenedor-inputs">
                        <label class="label-inputs-formulario" for="categoria">Id:</label>
                        <input class="entrada-datos" type="text" id="id_categoria" name="id_categoria" ><br>

                    </div>




                    <div class="contenedor-inputs">
                        <label class="label-inputs-formulario" for="categoria">Categoría:</label>
                        <input class="entrada-datos" type="text" id="categoria" name="categoria" ><br>

                    </div>



                    <div class="contenedor-inputs">

                        <label class="label-inputs-formulario" for="observaciones">Obs.:</label>
                        <input class="entrada-datos" type="text" id="observaciones" name="observaciones" ><br>
                    </div>




                    <input class="boton-ingresar" name="guardar-categoria" type="submit" value="Buscar">



                    <a class="boton-ingresar-a" href="crear_categoria.php">
                        <div class="div-a"><h5>Nueva Categoría</h5></div>
                    </a>


                    <a class="boton-ingresar-a" href="listar_categoria.php">
                        <div class="div-a"><h5>Listar Categorías</h5></div>
                            
                    </a>






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
                    <th class="titulo-tabla" colspan="5">Listado de Categorías</th>
                </tr>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Observaciones</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    $query = "SELECT * FROM categoria";
                    $respuesta_categoria = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($respuesta_categoria)) { ?>
                        <tr>
                            <td> <?php echo $row['id_categoria'] ?> </td>
                            <td> <?php echo $row['categoria'] ?> </td>
                            <td> <?php echo $row['observaciones'] ?> </td>
                            <td>

                                <div class="contenedor-imagen">
                                    <a class="caja-imagen caja-imagen-edit" href="modificar_categoria.php?id_categoria=<?php echo $row['id_categoria'] ?>">
                                        <img class="icono icono-edit" src="../img/edit.ico" alt="">
                                    </a>
                                    <a class="caja-imagen caja-imagen-delete" href="eliminar_categoria.php?id_categoria=<?php echo $row['id_categoria'] ?>">
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
