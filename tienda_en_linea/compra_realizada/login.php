<?php
    require_once('config/config.php');
    $email = $_POST['email'];

    $query = "SELECT * FROM usuarios WHERE correo = '$email' AND estado = 1";
    $result = $conexion->query($query);
    if ($result->num_rows > 0){
        header("location: recup.php");
    } else{
        header("location: index.php");
    }
?>