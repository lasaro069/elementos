<?php

    // Llamamos al archivo 'ddbb.php' para conectarnos a la base de datos
    include ('ddbb.php') ;


    if (isset($_POST['guardar-gama'])) { // 'guardar-gama' es el nombre del boton en el formulario que permite que se ejecute la orden
        
        //recibimos la información del formulario 'crear_gama.php' y la guardamos en variables
        $gama = $_POST['gama'];

        // creamos la consulta para insertar los datos en la tabla 'gamas'
        $query = "INSERT INTO gama (gama) VALUES ('$gama')";

        //guardamos la consulta en la base de datos
        $resultado = mysqli_query($conn, $query);

        if (!$resultado) {

            die("Consulta fallida");
            
        }

        $_SESSION['mensaje'] = "Datos Guardados Exitosamente"; // creamos un mensaje para mostrar en la página
        $_SESSION['tipo-mensaje'] = "success"; // creamos un tipo de mensaje para mostrar en la página
        header('Location: crear_gama.php'); // redireccionamos a la página 'gama.php'
    }

?>