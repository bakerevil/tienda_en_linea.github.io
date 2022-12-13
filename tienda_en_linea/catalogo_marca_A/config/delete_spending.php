<?php
require_once('config.php');
$id = $_GET ['id'];

$query = "DELETE FROM productos_marca WHERE id = '$id'";
$conexion->query($query);
header("Location: ../index.php");
?>