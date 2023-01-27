<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
require '../phpmailer/src/Exception.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                //Enable verbose debug output
    $mail->isSMTP();
    $mail->Host       = 'mail.tumunan.com';                     //Configure el servidor SMTP para enviar
    $mail->SMTPAuth   = true;                          // Habilita la autenticación SMTP
    $mail->Username   = 'admin@tumunan.com';                     //Usuario SMTP
    $mail->Password   = 'abraham1307';                     //Contraseña SMTP                             
    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
    $mail->SMTPAutoTLS = false;
    $mail->Port       = 587;                    //Puerto TCP al que conectarse, si usa 587 agregar `SMTPSecure = PHPMailer :: ENCRYPTION_STARTTLS`

    //Correo emisor y nombre
    $mail->setFrom('admin@tumunan.com','Ventas Tumunan Lodge');
    //Correo receptor y nombre
    $mail->addAddress($email, 'usuario');
    //Enviar copia correo
    $mail->addCC('tumunanlodge@gmail.com');

    //Contenido
    $mail->isHTML(true);   //Establecer el formato de correo electrónico en HTML
    $mail->Subject = 'Detalles de su pedido'; //Titulo del correo

    $cuerpo = "<h4>Gracias por su compra</h4>";
    $cuerpo .= '<p>El ID de su compra es: <b>' . $idTransaccion . '</b></p>';
    $cuerpo .= '<br>';
    //Cuerpo del correo
    $mail->Body    = utf8_decode($cuerpo);
    $mail->AltBody = 'Le enviamos los detalles de su compra.';

    $mail->setLanguage('es', '../phpmailer/language/phpmailer.lang-es.php');

    //Enviar correo
    $mail->send();
} catch (Exception $e) {
    echo "No se pudo enviar el mensaje. Error de envío: {$mail->ErrorInfo}";
}
