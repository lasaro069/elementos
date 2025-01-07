<?php


    // inicialmos una sesión para poder enviar mensajes
    session_start();


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "elementos";
    



    $conn = mysqli_connect(
        $servername,
        $username,
        $password,
        $dbname
    );

  
// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
  


?>