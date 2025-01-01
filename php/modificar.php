<?php 

    include ('ddbb.php'); 





    if (isset($_GET['id_marca'])) {
            $id_marca = $_GET['id_marca'];
            $query = "SELECT * FROM marca WHERE id_marca = $id_marca";
            $respuesta = mysqli_query($conn, $query);


            if (mysqli_num_rows($respuesta) == 1) {
                
                $row = mysqli_fetch_array($respuesta);  // fetch_array() returns an array of strings that corresponds to the fetched row or NULL if there are no more rows in resultset.
                $marca = $row['marca'];
                $fabricante = $row['fabricante'];
                $pais = $row['id_pais'];
            }
    }

    if (isset($_POST['modificar-registro'])) {
        $id_marca = $_GET['id_marca'];
        $marca = $_POST['marca'];
        $fabricante = $_POST['fabricante'];
        $pais = $_POST['id_pais'];

        $query = "UPDATE marca SET marca = '$marca', fabricante = '$fabricante', id_pais = '$pais' WHERE id_marca = $id_marca";
        mysqli_query($conn, $query);

        //guardamos la consulta en la base de datos
        $resultado = mysqli_query($conn, $query);



        if (!$resultado) {

            die("Consulta fallida");
            
        }

        $_SESSION['mensaje'] = "Datos Guardados Exitosamente"; // creamos un mensaje para mostrar en la página
        $_SESSION['tipo-mensaje'] = "success"; // creamos un tipo de mensaje para mostrar en la página


        header("Location: modificar_marca.php");

    }


    

    

?>
