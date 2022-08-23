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
    $mail->setFrom('admin@tumunan.com', 'ViniaTumunanLodge');
    //Correo receptor y nombre
    $mail->addAddress($email, 'usuario');
    //Enviar copia correo
    $mail->addCC('admin@tumunan.com'); 

    //Contenido
    $mail->isHTML(true);   //Establecer el formato de correo electrónico en HTML
    $mail->Subject = 'Detalles de su solicitud de reserva'; //Titulo del correo

    $cuerpo = "<h4>Gracias por solicitar su reserva en la Viña Tumuñan Lodge</h4>";
    $cuerpo .= '<br>';
    $cuerpo .= '<p>Sus datos de solicitud de reserva son: </p>';
    $cuerpo .= '<p>Nombre: <b>' . $nombre . '</b></p>';
    $cuerpo .= '<p>Apellido: <b>' . $apellido . '</b></p>';
    $cuerpo .= '<p>Rut: <b>' . $rut . '</b></p>';
    $cuerpo .= '<p>Email: <b>' . $email . '</b></p>';
    $cuerpo .= '<p>Teléfono: <b>' . $fono . '</b></p>';
    $cuerpo .= '<p>Cantidad de días a reservas: <b>' . $dias . '</b></p>';
    $cuerpo .= '<p>Cantidad de personas: <b>' . $c_personas . '</b></p>';
    $cuerpo .= '<p>Cantidad de Adultos: <b>' . $c_adultos . '</b></p>';
    $cuerpo .= '<p>Cantidad de niños: <b>' . $c_ñiños . '</b></p>';
    $cuerpo .= '<br>';
    $cuerpo .= "<h4>Nos comunicaremos lo antes posible para confirmar su reserva!!</h4>";
    //Cuerpo del correo
    $mail->Body    = utf8_decode($cuerpo);
    $mail->AltBody = 'Le enviamos los detalles de su solicitud de reserva.';

    $mail->setLanguage('es', '../phpmailer/language/phpmailer.lang-es.php');

    //Enviar correo
    $mail->send();
} catch (Exception $e) {
    echo "No se pudo enviar el mensaje. Error de envío: {$mail->ErrorInfo}";
}
