<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

require_once('config/config.php');
$email = $_POST['email'];

$query = "SELECT * FROM usuarios WHERE correo = '$email'";
$result = $conexion->query($query);
$row = $result->fetch_assoc();

if ($result->num_rows){
    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host       = 'smtp-mail.outlook.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = '00660153@red.unid.mx';
        $mail->Password   = 'Hoq00836';
        $mail->Port       = 587;

        $mail->setFrom('00660153@red.unid.mx', 'leonardo');
        $mail->addAddress('leonardingarcia@gmail.com', 'sujeto de prueba');

        $mail->isHTML(true);
        $mail->Subject = 'recuperacion de contraseña';
        $mail->Body    = 'buenas, este es un correo para solicitar un cambio de contraseña con el siguiente link <a href="localhost/tienda_en_linea/inicio-sesion/camb.php?id='.$row['id'].'">recuperacion</a>';

        $mail->send();
        header("location: session.php?message=ok");
    } catch (Exception $e) {
        header("location: session.php?message=error");
    }
}else
header("location: session.php?message=not_found"); 
?>