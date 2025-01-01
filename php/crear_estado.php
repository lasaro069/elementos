<?php include ('ddbb.php') ?>

<?php include ('header.php') ?>





    <div class="contenedor-formulario">


        <form class="formulario-ingreso" action="guardar_estado.php" method="post">
            <h2>Crear Estado</h2>

    <!-- 
            <div class="contenedor-inputs">
                <label class="label-inputs-formulario"  for="id-estado">Id estado:</label>
                <input class="entrada-datos" type="text" id="id-estado" name="id-estado" required placeholder="Este campo no debe poder modificarse. "><br>

            </div> -->


            <div class="contenedor-inputs">
                <label class="label-inputs-formulario" for="estado">Estado:</label>
                <input class="entrada-datos" type="text" id="estado" name="estado" required><br>

            </div>





            <input class="boton-ingresar" name="guardar-estado" type="submit" value="Registrar">





            <button class="boton-ingresar" name="listar-estado" value="Listado Genaral">
                        <a class="boton-ingresar-a" href="listar_estado.php">Listado General</a>
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