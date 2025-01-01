<?php

    // Llamamos al archivo 'ddbb.php' para conectarnos a la base de datos
    include ('ddbb.php') ;


    if (isset($_POST['guardar-categoria'])) { // 'guardar-categoria' es el nombre del boton en el formulario que permite que se ejecute la orden
        
        //recibimos la información del formulario 'crear_categoria.php' y la guardamos en variables
        $categoria = $_POST['categoria'];
        $observaciones = $_POST['observaciones'];

        // creamos la consulta para insertar los datos en la tabla 'categorias'
        $query = "INSERT INTO categoria (categoria, observaciones) VALUES ('$categoria', '$observaciones')";

        //guardamos la consulta en la base de datos
        $resultado = mysqli_query($conn, $query);

        if (!$resultado) {

            die("Consulta fallida");
            
        }

        $_SESSION['mensaje'] = "Datos Guardados Exitosamente"; // creamos un mensaje para mostrar en la página
        $_SESSION['tipo-mensaje'] = "success"; // creamos un tipo de mensaje para mostrar en la página
        header('Location: crear_categoria.php'); // redireccionamos a la página 'categoria.php'
    }

?>