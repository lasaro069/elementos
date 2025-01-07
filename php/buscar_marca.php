<?php include ('ddbb.php') ?>

<?php include ('header.php') ?>




<div class="contenedor-formulario contenedor-formulario-modificar">






    <form class="formulario-ingreso" action="buscar_marca.php" method="post">
                    <h2>Buscar Marca</h2>

            


                    <div class="contenedor-inputs">
                        <label class="label-inputs-formulario" for="id_marca">ID Marca:</label>
                        <input class="entrada-datos" type="text" id="id_marca" name="id_marca" ><br>

                    </div>



                    <div class="contenedor-inputs">
                        <label class="label-inputs-formulario" for="marca">Marca:</label>
                        <input class="entrada-datos" type="text" id="marca" name="marca" ><br>

                    </div>



                    <div class="contenedor-inputs">

                        <label class="label-inputs-formulario" for="fabricante">Fabricante:</label>
                        <input class="entrada-datos" type="text" id="fabricante" name="fabricante" ><br>
                    </div>




                    <input class="boton-ingresar" name="guardar-marca" type="submit" value="Buscar">



                    <button class="boton-ingresar" name="crear-marca" value="Nueva Marca">
                        <a class="boton-ingresar-a" href="crear_marca.php">Nueva Marca</a>
                    </button>


                    <button class="boton-ingresar" name="guardar-marca" value="Listado Genaral">
                        <a class="boton-ingresar-a" href="listar_marca.php">Listar Marcas</a>
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
                    <th class="titulo-tabla" colspan="5">Listado de Marcas</th>
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
                
                    $id_marca = $_POST['id_marca'];
                    $marca = $_POST['marca'];
                    $fabricante = $_POST['fabricante'];
                    
                    $query = "SELECT * FROM marca WHERE id_marca = '$id_marca' OR marca = '$marca' OR fabricante = '$fabricante'";
                    $respuesta_marca = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($respuesta_marca)) { ?>
                        <tr>
                            <td> <?php echo $row['id_marca'] ?> </td>
                            <td> <?php echo $row['marca'] ?> </td>
                            <td> <?php echo $row['fabricante'] ?> </td>
                            <td> <?php echo $row['id_pais'] ?> </td>
                            <td>

                                <div class="contenedor-imagen">
                                    <a class="caja-imagen caja-imagen-edit" href="modificar_marca.php?id_marca=<?php echo $row['id_marca'] ?>">
                                        <img class="icono icono-edit" src="../img/edit.ico" alt="">
                                    </a>
                                    <a class="caja-imagen caja-imagen-delete" href="eliminar_marca.php?id_marca=<?php echo $row['id_marca'] ?>">
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
