<?php
    require_once('config/config.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM usuarios WHERE correo = '$email' AND contraseña = '$password'AND estado = 1 AND rol = 2";
    $result = $conexion->query($query);
    if ($result->num_rows > 0){
        header("location: ../adm-index.php");
    } else{
        header("location: session.php");
    }
?>