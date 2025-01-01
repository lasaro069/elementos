<?php include ('ddbb.php') ?>

<?php include ('header.php') ?>





    <div class="contenedor-formulario">


        <form class="formulario-ingreso" action="guardar_marca.php" method="post">
            <h2>Crear Marca</h2>

    <!-- 
            <div class="contenedor-inputs">
                <label class="label-inputs-formulario"  for="id-marca">Id Marca:</label>
                <input class="entrada-datos" type="text" id="id-marca" name="id-marca" required placeholder="Este campo no debe poder modificarse. "><br>

            </div> -->


            <div class="contenedor-inputs">
                <label class="label-inputs-formulario" for="marca">Marca:</label>
                <input class="entrada-datos" type="text" id="marca" name="marca" required><br>

            </div>



            <div class="contenedor-inputs">

                <label class="label-inputs-formulario" for="fabricante">Fabricante:</label>
                <input class="entrada-datos" type="text" id="fabricante" name="fabricante" required><br>
            </div>

            <div class="contenedor-inputs">

                <label class="label-inputs-formulario" for="id_pais">ID País:</label>
                <input class="entrada-datos" type="text" id="id_pais" name="id_pais" required><br>
            </div>



            <input class="boton-ingresar" name="guardar-marca" type="submit" value="Registrar">





            <button class="boton-ingresar" name="listar-marca" value="Listado Genaral">
                        <a class="boton-ingresar-a" href="listar_marca.php">Listado General</a>
            </button>



            <?php
        
        if (isset($_SESSION['mensaje'])) { ?>


            <div class="alert alert-success alert-dismissible fade show contenedor-mensaje" role="alert">
            <p><?= $_SESSION['mensaje'] ?>  </p>   
            <button type="button" class="btn-close input-mensaje" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <?php session_unset(); } ?>
        
    

            </div>


    



        </form>






    </div>















<?php include ('footer.php') ?>