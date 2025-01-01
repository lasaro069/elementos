<?php include ('ddbb.php') ?>

<?php include ('header.php') ?>






<div class="contenedor-formulario contenedor-formulario-modificar">






<form class="formulario-ingreso" action="buscar_estado.php" method="post">
                    <h2>Buscar estado</h2>

            

                    <div class="contenedor-inputs">
                        <label class="label-inputs-formulario" for="id_estado">Id Estado:</label>
                        <input class="entrada-datos" type="text" id="id_estado" name="id_estado" ><br>

                    </div>




                    <div class="contenedor-inputs">
                        <label class="label-inputs-formulario" for="estado">Estado:</label>
                        <input class="entrada-datos" type="text" id="estado" name="estado" ><br>

                    </div>





                    <input class="boton-ingresar" name="guardar-estado" type="submit" value="Buscar">



                    <button class="boton-ingresar" name="listar-estado" value="Listado Genaral">
                        <a class="boton-ingresar-a" href="listar_estado.php">Listado General</a>
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
                    <th class="titulo-tabla" colspan="5">Listado de estadoes</th>
                </tr>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">estado</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    $query = "SELECT * FROM estado";
                    $respuesta_estado = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($respuesta_estado)) { ?>
                        <tr>
                            <td> <?php echo $row['id_estado'] ?> </td>
                            <td> <?php echo $row['estado'] ?> </td>
                            <td>

                                <div class="contenedor-imagen">
                                    <a class="caja-imagen caja-imagen-edit" href="modificar_estado.php?id_estado=<?php echo $row['id_estado'] ?>">
                                        <img class="icono icono-edit" src="../img/edit.ico" alt="">
                                    </a>
                                    <a class="caja-imagen caja-imagen-delete" href="eliminar_estado.php?id_estado=<?php echo $row['id_estado'] ?>">
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
