<?php
    require_once('config/config.php');
    $id = $_POST['id'];
    $pass = $_POST['new_password'];

    $query = "UPDATE usuarios set contraseña= '$pass' WHERE id = '$id'";
    $result = $conexion->query($query);
    
    header("location: session.php?message=success_password");
?>