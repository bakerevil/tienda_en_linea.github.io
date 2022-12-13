<?php
require_once('inicio-sesion/config/config.php');
session_start();

($carrito= implode(",",$_SESSION["productos"]));
$query = "SELECT* FROM productos WHERE id in ($carrito)";
$result = $conexion->query($query);
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>carrito de compras</h1><a href="adm-index.php" class="btn btn-dark">regresar</a></h1>
            </div> 
        </div>
        <div class="row mt-5">
            <div class="col">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>nombre</th>
                            <th>precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row = $result->fetch_assoc ()){
                        ?>
                        <tr>
                            <td><?php echo $row ['nombre']; ?></td>
                            <td><?php echo $row ['precio']; ?></td>
                            <td>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>                            
                </table>
                <a href="#" class= "btn btn-danger">vaciar carrito</a>
            <div>
        </div>
    </div>
</body>
</html>