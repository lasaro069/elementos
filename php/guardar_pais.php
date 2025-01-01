<?php

    // Llamamos al archivo 'ddbb.php' para conectarnos a la base de datos
    include ('ddbb.php') ;


    if (isset($_POST['guardar-pais'])) { // 'guardar-pais' es el nombre del boton en el formulario que permite que se ejecute la orden
        
        //recibimos la información del formulario 'crear_pais.php' y la guardamos en variables
        $pais = $_POST['pais'];

        // creamos la consulta para insertar los datos en la tabla 'paiss'
        $query = "INSERT INTO pais (pais) VALUES ('$pais')";

        //guardamos la consulta en la base de datos
        $resultado = mysqli_query($conn, $query);

        if (!$resultado) {

            die("Consulta fallida");
            
        }

        $_SESSION['mensaje'] = "Datos Guardados Exitosamente"; // creamos un mensaje para mostrar en la página
        $_SESSION['tipo-mensaje'] = "success"; // creamos un tipo de mensaje para mostrar en la página
        header('Location: crear_pais.php'); // redireccionamos a la página 'pais.php'
    }

?>