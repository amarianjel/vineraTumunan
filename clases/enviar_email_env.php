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
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                //Enable verbose debug output
    $mail->isSMTP();
    $mail->Host       = 'mail.tumunan.com';                     //Configure el servidor SMTP para enviar
    $mail->SMTPAuth   = true;                          // Habilita la autenticación SMTP
    $mail->Username   = 'admin@tumunan.com';                     //Usuario SMTP
    $mail->Password   = 'abraham1307';                     //Contraseña SMTP                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   //Habilitar el cifrado TLS   SMTPS
    $mail->Port       = 465;                     //Puerto TCP al que conectarse, si usa 587 agregar `SMTPSecure = PHPMailer :: ENCRYPTION_STARTTLS`

    //Correo emisor y nombre
    $mail->setFrom('admin@tumunan.com', 'ViñaTumuñanLodge');
    //Correo receptor y nombre
    $mail->addAddress($email, 'usuario');
    //Enviar copia correo
    $mail->addCC('admin@tumunan.com');

    //Contenido
    $mail->isHTML(true);   //Establecer el formato de correo electrónico en HTML
    $mail->Subject = 'Detalles de su pedido'; //Titulo del correo


    $cuerpo = "<h3>Gracias por su compra</h3>";
    $cuerpo .= '<p>El ID de su compra es: <b>' . $id_transaccion . '</b></p>';
    $cuerpo .= '<p>Para ver el detalle de su compra <a href="localhost/vineratumunan/ver_detalles_compra.php?key=' . $id_transaccion . '">Pinche aquí</a></p>';
    $cuerpo .= '<br>';
    $cuerpo .= '<h4>Sus datos de envio son: </h4>';
    $cuerpo .= '<p>Nombre: <b>' . $nombre . '</b></p>';
    $cuerpo .= '<p>Apellido: <b>' . $apellido . '</b></p>';
    $cuerpo .= '<p>Rut: <b>' . $rut . '</b></p>';
    $cuerpo .= '<p>Teléfono: <b>' . $fono . '</b></p>';
    $cuerpo .= '<p>Región: <b>' . $region . '</b></p>';
    $cuerpo .= '<p>Calle: <b>' . $calle . '</b></p>';
    $cuerpo .= '<p>Numero Casa: <b>' . $numero . '</b></p>';
    //Cuerpo del correo
    $mail->Body    = utf8_decode($cuerpo);
    $mail->AltBody = 'Le enviamos los detalles de su compra.';

    $mail->setLanguage('es', '../phpmailer/language/phpmailer.lang-es.php');

    //Enviar correo
    $mail->send();
} catch (Exception $e) {
    echo "No se pudo enviar el mensaje. Error de envío: {$mail->ErrorInfo}";
}
