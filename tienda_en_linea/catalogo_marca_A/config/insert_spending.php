<?php
require_once('config.php');
$nombre= $_POST['nombre'];
$categoria= $_POST ['categoria'];
$precio = $_POST ['precio'];

$query = "INSERT INTO productos_marca (nombre, precio, categoria) VALUES ('$nombre', '$precio','$categoria')";
$conexion->query($query);
header("Location: ../index.php");
?>