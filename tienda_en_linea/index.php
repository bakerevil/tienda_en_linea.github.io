<?php
session_start();
require_once('inicio-sesion/config/config.php');
$query = "SELECT id, nombre, precio FROM productos";
$result = $conexion-> query($query);
$row = $result->fetch_assoc();
$contador_carrito = 0;
if (isset($_SESSION["productos"])){
  $contador_carrito = count($_SESSION["productos"]);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>tienda en linea</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">

    

    
  
<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
  </head>
  <body>
    
<header>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="carrito.php" class="navbar-brand d-flex align-items-center">
        <strong class="btn btn-primary">carrito <?php echo $contador_carrito; ?> productos</strong>
      </a>
      <a href="inicio-sesion/session.php" class="navbar-brand d-flex align-items-center">
        <strong class="btn btn-success">inicio de sesion</strong>
      </a>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Unid Shop</h1>
        <p class="lead text-muted">Tienda en linea enfocada en la venta de tenis y calzado certificado por las marcas oficiales</p>
        <p>
        <a href="catalogo_deportivo" class="btn btn-primary my-2">catalogo de tenis deportivos</a>
          <a href="catalogo_marca" class="btn btn-secondary my-2">catalogo calzado de marca</a>
        </p>
      </div>
    </div>
  </section>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
  while($row = $result->fetch_assoc()){
    ?>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">UNID SHOP</text></svg>
              <div class="card-body">
                <p class="card-text"><?php echo $row ['nombre'];?>.</p>
                <p class="card-text"><?php echo $row ['precio'];?>$</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a class="btn btn-sm btn-outline-secondary" href="add-card.php?id=<?php echo $row['id']; ?>">agregar al carrito</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>


</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#" class="btn btn-sm btn-outline-secondary">Regresar arriba</a>
    </p>
    <p class="mb-1">derechos reservados por &copy; unid campus cancun </p>
    <p class="mb-0">Hecho por andrik,raul,leo y gael como proyecto para base de datos</p>
  </div>
</footer>


    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

      
  </body>
</html>