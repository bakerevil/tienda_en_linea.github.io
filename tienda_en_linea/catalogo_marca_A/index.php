<?php
require_once('config/config.php');
$query = "SELECT p.id, p.nombre, p.precio, c.categoria as categoria from productos_marca p LEFT JOIN productos_categorias c on p.categoria = c.id";
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
            <h1>Catalogo Deportivo<a href="form-insert.php" class="btn btn-primary">añadir</a></h1> <a href="../adm-index.php" class="btn btn-dark">regresar</a></h1>
             </div> 
         </div>
         <div class="row mt-5">
         <div class="col">
            <table class="table table-striped table-hover">
             <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>precio</th>
                    <th>categoria</th>
                    <th>Acciones</th>
                </tr>
             </thead>
             <tbody>
                <?php
                 while($row = $result->fetch_assoc ()){
                ?>
                <tr>
                <td><?php echo $row ['id']; ?></td>
                    <td><?php echo $row ['nombre']; ?></td>
                    <td><?php echo $row ['precio']; ?></td>
                    <td><?php echo $row ['categoria']; ?></td>
                    <td>
                        <a href="form-update.php?id=<?php echo $row ['id']; ?>" class="btn btn-warning">editar</a>
                        <a href="config/delete_spending.php?id=<?php echo $row ['id']; ?>" class="btn btn-danger">eliminar</a>
                    </td>
                </tr>
                <?php }?>
             </tbody>
            </table>
            <div>
         </div>
    </div>
</body>
</html>