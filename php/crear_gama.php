<?php include ('ddbb.php') ?>

<?php include ('header.php') ?>





    <div class="contenedor-formulario">


        <form class="formulario-ingreso" action="guardar_gama.php" method="post">
            <h2>Crear Gama</h2>



            <div class="contenedor-inputs">
                <label class="label-inputs-formulario" for="gama">Gama:</label>
                <input class="entrada-datos" type="text" id="gama" name="gama" required><br>

            </div>





            <input class="boton-ingresar" name="guardar-gama" type="submit" value="Registrar">





            <a class="boton-ingresar-a" href="listar_gama.php">
                        <div class="div-a"><h5>Listar Gamas</h5></div>
                            
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