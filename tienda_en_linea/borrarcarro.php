<?php
session_start(); 
if($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
    $deleteItem = $cart->remove($_REQUEST['id']);
    header("Location: carrito.php");
?>