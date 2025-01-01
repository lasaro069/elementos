<?php

    // Llamamos al archivo 'ddbb.php' para conectarnos a la base de datos
    include ('ddbb.php') ;


    if (isset($_POST['guardar-marca'])) { // 'guardar-marca' es el nombre del boton en el formulario que permite que se ejecute la orden
        
        //recibimos la información del formulario 'crear_marca.php' y la guardamos en variables
        $marca = $_POST['marca'];
        $fabricante = $_POST['fabricante'];
        $id_pais = $_POST['id_pais'];

        // creamos la consulta para insertar los datos en la tabla 'marcas'
        $query = "INSERT INTO marca (marca, fabricante, id_pais) VALUES ('$marca', '$fabricante', '$id_pais')";

        //guardamos la consulta en la base de datos
        $resultado = mysqli_query($conn, $query);

        if (!$resultado) {

            die("Consulta fallida");
            
        }

        $_SESSION['mensaje'] = "Datos Guardados Exitosamente"; // creamos un mensaje para mostrar en la página
        $_SESSION['tipo-mensaje'] = "success"; // creamos un tipo de mensaje para mostrar en la página
        header('Location: crear_marca.php'); // redireccionamos a la página 'marca.php'
    }

?>