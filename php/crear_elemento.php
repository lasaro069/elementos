<?php include ('ddbb.php') ?>

<?php include ('header.php') ?>





    <div class="contenedor-formulario">


        <form class="formulario-ingreso" action="guardar_elemento.php" method="post" enctype="multipart/form-data">
            <h2>Crear Elemento</h2>


            <div class="contenedor-inputs">
                <label class="label-inputs-formulario" for="id_categoria">Id Categoría:</label>
                <input class="entrada-datos" type="text" id="id_categoria" name="id_categoria" required><br>

            </div>



            <div class="contenedor-inputs">

                <label class="label-inputs-formulario" for="id_marca">Id Marca:</label>
                <input class="entrada-datos" type="text" id="id_marca" name="id_marca" required><br>
            </div>

            <div class="contenedor-inputs">

                <label class="label-inputs-formulario" for="modelo">Modelo:</label>
                <input class="entrada-datos" type="text" id="modelo" name="modelo" required><br>
            </div>



            <div class="contenedor-inputs">

                <label class="label-inputs-formulario" for="id_gama">Id Gama:</label>
                <input class="entrada-datos" type="text" id="id_gama" name="id_gama" required><br>
            </div>




            <div class="contenedor-inputs">

                <label class="label-inputs-formulario" for="descripcion">Descripción:</label>
                <input class="entrada-datos" type="text" id="descripcion" name="descripcion" required><br>
            </div>



            

<!-- 

            <div class="contenedor-inputs">

                <label class="label-inputs-formulario" for="fecha_ingreso">Fecha de Ingreso:</label>
                <input class="entrada-datos" type="text" id="fecha_ingreso" name="fecha_ingreso"  placeholder="aaaa/mm/dd"><br>
            </div>
 -->


            



            <div class="contenedor-inputs">

                <label class="label-inputs-formulario" for="id_estado">Id Estado:</label>
                <input class="entrada-datos" type="text" id="id_estado" name="id_estado" required><br>
            </div>








            <div class="contenedor-inputs">

                <label class="label-inputs-formulario" for="ubicacion">Ubicación:</label>
                <input class="entrada-datos" type="text" id="ubicacion" name="ubicacion" required><br>
            </div>








            <div class="contenedor-inputs">

                <label class="label-inputs-formulario" for="imagen">Imagen:</label>
                <input class="entrada-datos" type="file" id="imagen" name="imagen" ><br>
            </div>





            <input class="boton-ingresar" name="guardar-elemento" type="submit" value="Registrar">




            <a class="boton-ingresar-a" href="listar_elemento.php">
                        <div class="div-a"><h5>Listar Elementos</h5></div>
                            
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