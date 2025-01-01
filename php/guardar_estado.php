<?php

    // Llamamos al archivo 'ddbb.php' para conectarnos a la base de datos
    include ('ddbb.php') ;


    if (isset($_POST['guardar-estado'])) { // 'guardar-estado' es el nombre del boton en el formulario que permite que se ejecute la orden
        
        //recibimos la información del formulario 'crear_estado.php' y la guardamos en variables
        $estado = $_POST['estado'];

        // creamos la consulta para insertar los datos en la tabla 'estados'
        $query = "INSERT INTO estado (estado) VALUES ('$estado')";

        //guardamos la consulta en la base de datos
        $resultado = mysqli_query($conn, $query);

        if (!$resultado) {

            die("Consulta fallida");
            
        }

        $_SESSION['mensaje'] = "Datos Guardados Exitosamente"; // creamos un mensaje para mostrar en la página
        $_SESSION['tipo-mensaje'] = "success"; // creamos un tipo de mensaje para mostrar en la página
        header('Location: crear_estado.php'); // redireccionamos a la página 'estado.php'
    }

?>