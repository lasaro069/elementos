<?php include ('ddbb.php') ?>

<?php include ('header.php') ?>





    <div class="contenedor-formulario">


        <form class="formulario-ingreso" action="guardar_categoria.php" method="post">
            <h2>Crear Categoría</h2>

    <!-- 
            <div class="contenedor-inputs">
                <label class="label-inputs-formulario"  for="id-categoria">Id categoria:</label>
                <input class="entrada-datos" type="text" id="id-categoria" name="id-categoria" required placeholder="Este campo no debe poder modificarse. "><br>

            </div> -->


            <div class="contenedor-inputs">
                <label class="label-inputs-formulario" for="categoria">Categoría:</label>
                <input class="entrada-datos" type="text" id="categoria" name="categoria" required><br>

            </div>



            <div class="contenedor-inputs">

                <label class="label-inputs-formulario" for="observaciones">Observaciones:</label>
                <input class="entrada-datos" type="text" id="observaciones" name="observaciones" required><br>
            </div>




            <input class="boton-ingresar" name="guardar-categoria" type="submit" value="Registrar">




            <a class="boton-ingresar-a" href="listar_categoria.php">
                        <div class="div-a"><h5>Listar Categorías</h5></div>
                            
                    </a>




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