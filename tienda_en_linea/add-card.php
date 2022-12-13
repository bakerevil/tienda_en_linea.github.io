<?php 
    session_start();
    $id= $_GET['id'];
    if(!isset($_SESSION["productos"])){
        $_SESSION["productos"] = [];
    }
    array_push($_SESSION["productos"], $id);
    header("Location: index.php");
?>