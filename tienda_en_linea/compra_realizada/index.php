<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="../style/est.css">
</head>
    <body class="text-center">
        <main class="form-signin w-100 m-auto">
            <form action="recup.php" method="POST">
            <h1>Denxy and bakerevil</h1>
                <h1 class="h3 mb-3 fw-normal">Porfavor ingrese su correo para confirmar su compra</h1>
                <div class="form-floating">
                    <input type="email" class="form-control" id="inputEmail" placeholder="correo electronico" name="email">
                    <label for="floatingInput">correo electronico</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">finalizar compra</button>
                <a href="../index.php" class="w-100 btn btn-warning">Quiero seguir viendo mas</a>
                <p class="mt-5 mb-3 text-muted">&copy; unid shop SA de CV</p>
            </form>
            <?php
                    if(isset($_GET['message'])){
                ?>
                    <div class="alert alert-primary" role="alert">
                        <?php
                        switch($_GET['message']){
                            case 'ok':
                                echo'porfavor,revise su correo';
                                break;
                            case 'success_password':
                                echo'inicia sesion con su nueva contraseña';
                                break;
                            default:
                                echo'algo salio mal, intenta de nuevo';
                                break;
                            }
                            ?>
                    </div>
                <?php } ?>
        </main>    
    </body>
</body>
</html>