<?php include ('ddbb.php') ?>

<?php include ('header.php') ?>






<div class="contenedor-formulario contenedor-formulario-modificar">






<form class="formulario-ingreso" action="buscar_gama.php" method="post">
                    <h2>Buscar Gama</h2>

            

                    <div class="contenedor-inputs">
                        <label class="label-inputs-formulario" for="id_gama">Id Gama:</label>
                        <input class="entrada-datos" type="text" id="id_gama" name="id_gama" ><br>

                    </div>




                    <div class="contenedor-inputs">
                        <label class="label-inputs-formulario" for="gama">Gama:</label>
                        <input class="entrada-datos" type="text" id="gama" name="gama" ><br>

                    </div>





                    <input class="boton-ingresar" name="guardar-gama" type="submit" value="Buscar">



                    <a class="boton-ingresar-a" href="crear_gama.php">
                        <div class="div-a"><h5>Nueva Gama</h5></div>
                    </a>


                    <a class="boton-ingresar-a" href="listar_gama.php">
                        <div class="div-a"><h5>Listar Gamas</h5></div>
                            
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
                    <th class="titulo-tabla" colspan="5">Listado de Gamas</th>
                </tr>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Gama</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    $query = "SELECT * FROM gama";
                    $respuesta_gama = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($respuesta_gama)) { ?>
                        <tr>
                            <td> <?php echo $row['id_gama'] ?> </td>
                            <td> <?php echo $row['gama'] ?> </td>
                            <td>

                                <div class="contenedor-imagen">
                                    <a class="caja-imagen caja-imagen-edit" href="modificar_gama.php?id_gama=<?php echo $row['id_gama'] ?>">
                                        <img class="icono icono-edit" src="../img/edit.ico" alt="">
                                    </a>
                                    <a class="caja-imagen caja-imagen-delete" href="eliminar_gama.php?id_gama=<?php echo $row['id_gama'] ?>">
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
