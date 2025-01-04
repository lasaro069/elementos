<?php include ('ddbb.php') ?>

<?php include ('header.php') ?>






<div class="contenedor-formulario contenedor-formulario-modificar">






<form class="formulario-ingreso" action="buscar_pais.php" method="post">
                    <h2>Buscar País</h2>

            

                    <div class="contenedor-inputs">
                        <label class="label-inputs-formulario" for="id_pais">Id Pais:</label>
                        <input class="entrada-datos" type="text" id="id_pais" name="id_pais" ><br>

                    </div>




                    <div class="contenedor-inputs">
                        <label class="label-inputs-formulario" for="pais">País:</label>
                        <input class="entrada-datos" type="text" id="pais" name="pais" ><br>

                    </div>





                    <input class="boton-ingresar" name="guardar-pais" type="submit" value="Buscar">



                    <button class="boton-ingresar" name="crear-pais" value="Crear País">
                        <a class="boton-ingresar-a" href="crear_pais.php">Nuevo País</a>
                    </button>




                    <button class="boton-ingresar" name="listar-pais" value="Listado Genaral">
                        <a class="boton-ingresar-a" href="listar_pais.php">Listado General</a>
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
                    <th class="titulo-tabla" colspan="5">Listado de Países</th>
                </tr>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">País</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    $query = "SELECT * FROM pais ORDER BY pais";
                    $respuesta_pais = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($respuesta_pais)) { ?>
                        <tr>
                            <td> <?php echo $row['id_pais'] ?> </td>
                            <td> <?php echo $row['pais'] ?> </td>
                            <td>

                                <div class="contenedor-imagen">
                                    <a class="caja-imagen caja-imagen-edit" href="modificar_pais.php?id_pais=<?php echo $row['id_pais'] ?>">
                                        <img class="icono icono-edit" src="../img/edit.ico" alt="">
                                    </a>
                                    <a class="caja-imagen caja-imagen-delete" href="eliminar_pais.php?id_pais=<?php echo $row['id_pais'] ?>">
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
