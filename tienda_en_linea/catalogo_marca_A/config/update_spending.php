<?php
require_once('config.php');
$nombre= $_POST['nombre'];
$categoria= $_POST ['categoria'];
$precio = $_POST ['precio'];
$id = $_POST ['id'];

$query = "UPDATE productos_marca set nombre = '$nombre', categoria = '$categoria', precio = '$precio'    WHERE id = '$id' ";
$conexion->query($query);
header("Location: ../index.php");
?>