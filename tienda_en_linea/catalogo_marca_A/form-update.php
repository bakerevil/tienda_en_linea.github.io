<?php

require_once('config/config.php');
$id= $_GET['id'];
$query = "SELECT * FROM productos_categorias";
$result = $conexion->query($query);

$query2 = "SELECT * FROM productos_marca WHERE id= $id";
$result2= $conexion->query($query2);
$record = $result2->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row mt-5">
            <div class="col">
                <h1>Gastos <a href="index.php" class="btn btn-dark">regresar</a></h1>
             </div>
         </div>
         <form action="config/update_spending.php" method="POST">
        <div class="row mt-5">
            <div class="col-6">
             <label for="nombre" class="form-label">nombre</label>
             <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $record['nombre'];?>"> 
            </div>
            <div class= "col-6">
                <label for="categoria" class="form-label">categoria</label>
                <select class="form-select" name="categoria" id="categoria">
                    <option value="0" selected>seleccione tu opcion</option>
                    <?php
                    while($row = $result->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['categoria'];?></option>
                    <?php } ?>
                </select>
               </div>
               <div class= "col mt-3">
                <label for="precio" class="form-label">precio</label>
                <input type="text" class="form-control" name="precio" id="descripcion" value="<?php echo $record['precio'];?>">
               </div>
               <div class="col mt-3">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <button type="" class="btn btn-success">guardar</button>
            </div>
        </div>
        </form>
     </div>
</body>
</html>