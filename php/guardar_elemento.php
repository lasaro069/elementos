<?php

    // Llamamos al archivo 'ddbb.php' para conectarnos a la base de datos
    include ('ddbb.php') ;


    if (isset($_POST['guardar-elemento'])) { // 'guardar-elemento' es el nombre del boton en el formulario que permite que se ejecute la orden
        
        //recibimos la información del formulario 'crear_elemento.php' y la guardamos en variables
        $nr_inventario = $_POST['nr_inventario'];
        $id_categoria = $_POST['id_categoria'];
        $id_marca = $_POST['id_marca'];
        $modelo = $_POST['modelo'];
        $id_gama = $_POST['id_gama'];
        $descripcion = $_POST['descripcion'];
//        $fecha_ingreso = $_POST['fecha_ingreso'];
        $id_estado = $_POST['id_estado'];
        $ubicacion = $_POST['ubicacion'];




        $imagen = $_FILES['imagen']['tmp_name'];
        $nombre_imagen = $_FILES['imagen']['name'];
        $tipo_imagen = strtolower(pathinfo($nombre_imagen, PATHINFO_EXTENSION));
        $size_imagen = $_FILES['imagen']['size'];
        $directorio = '../img/';





        
        // creamos la consulta para insertar los datos en la tabla 'elementos'

        $query = "INSERT INTO elementos (id_categoria, id_marca, modelo, id_gama, descripcion, id_estado, ubicacion, imagen) VALUES ('$id_categoria', '$id_marca', '$modelo', '$id_gama', '$descripcion',  '$id_estado', '$ubicacion', '$imagen')";


        //guardamos la consulta en la base de datos
        $resultado = mysqli_query($conn, $query);

        if (!$resultado) {

            die("Consulta fallida");
            
        }




        $id_registro = $conn -> insert_id;

        $ruta = ($directorio . $id_registro . "_" . $nombre_imagen) ;


        $actualizar_nombre_imagen = $conn -> query("UPDATE elementos SET imagen = '$ruta' WHERE nr_inventario = $id_registro");



        if (move_uploaded_file($imagen, $ruta)) {
            echo "El archivo se subió correctamente";
        }   else {
            echo "Hubo un error al subir el archivo";
        }
    
    
    
    





        $_SESSION['mensaje'] = "Datos Guardados Exitosamente"; // creamos un mensaje para mostrar en la página
        $_SESSION['tipo-mensaje'] = "success"; // creamos un tipo de mensaje para mostrar en la página
        header('Location: crear_elemento.php'); // redireccionamos a la página 'elemento.php'











    



    }



















?>