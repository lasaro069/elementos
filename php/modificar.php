<?php include ('ddbb.php') ?>

<?php include ('header.php') ?>




<div class="contenedor-formulario contenedor-formulario-modificar">






    <form class="formulario-ingreso" action="modificar.php" method="post">
                    <h2>Buscar Marca</h2>

            


                    <div class="contenedor-inputs">
                        <label class="label-inputs-formulario" for="marca">Marca:</label>
                        <input class="entrada-datos" type="text" id="marca" name="marca" ><br>

                    </div>



                    <div class="contenedor-inputs">

                        <label class="label-inputs-formulario" for="fabricante">Fabricante:</label>
                        <input class="entrada-datos" type="text" id="fabricante" name="fabricante" ><br>
                    </div>




                    <input class="boton-ingresar" name="guardar-marca" type="submit" value="Buscar">





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
                    <th class="titulo-tabla" colspan="5">Listado de Elementos</th>
                </tr>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Fabricante</th>
                    <th scope="col">País</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    $marca = $_POST['marca'];
                    $fabricante = $_POST['fabricante'];
                    
                    $query = "SELECT * FROM marca WHERE marca = '$marca' OR fabricante = '$fabricante'";
                    $respuesta_marca = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($respuesta_marca)) { ?>
                        <tr>
                            <td> <?php echo $row['id_marca'] ?> </td>
                            <td> <?php echo $row['marca'] ?> </td>
                            <td> <?php echo $row['fabricante'] ?> </td>
                            <td> <?php echo $row['id_pais'] ?> </td>
                            <td>
                                <!-- <a href="../ edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary"><img src="../img/edit.ico" alt="" width="25px" height="25px"></a>
                                <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger"><img src="../img/delete.ico" alt="" width="25px" height="25px"></a> -->

                                <div class="contenedor-imagen">
                                    <a class="caja-imagen caja-imagen-edit" href="modificar_marca.php">
                                        <img class="icono icono-edit" src="../img/edit.ico" alt="">
                                    </a>
                                    <a class="caja-imagen caja-imagen-delete" href="/creacion/modificar_marca.php">
                                        <img class="icono icono-delete" src="../img/delete.ico" alt="">
                                    </a>

                                </div>

                                
                            </td>
                        </tr>
                    <?php }    ?>
            </tbody>
        </table>

    </div>





</div>










<?php include ('footer.php') ?>
