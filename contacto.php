<?php
$nombre=$_POST["nombre"];
$actividad=$_POST["actividad"];
/*$direccion=$_POST["direccion"];*/
$telefono=$_POST["telefono"];
$mail=$_POST["mail"];
$pais=$_POST["pais"];
/*$programa=$_POST["programa"];
$mes=$_POST["mes"];
$anio=$_POST["anio"];*/
$comentario=$_POST["comentario"];

/* Receptor, aqu� agrega los correos de contacto */
$recipient .= "willevelyn@yahoo.com" . ", ". "info@tumunanlodge.com" . ", " . "webmasterjanoopy@gmail.com" ; //note the comma

/* subject */
$subject = "Contacto a trav�s de www.tumunanlodge.com";

/* message */
$message .= "Nombre : " . "$nombre\n";
$message .= "Actividad: " . "$actividad\n";
/*$message .= "Direcci�n: " . "$direccion\n";*/
$message .= "Tel�fono: " . "$telefono\n";
$message .= "E-mail: " . "$mail\n";
$message .= "Pa�s: " . "$pais\n";
/*$message .= "Programa: " . "$programa\n";
$message .= "Mes reserva: " . "$mes\n";
$message .= "A�o de reserva: " . "$anio\n";*/
$message .= "Comentario: " . "$comentario\n";

/* additional header pieces for errors, From cc's, bcc's, etc */
$headers .= "From: Contacto Tumu�an <info@tumunanlodge.com>\n";
$headers .= "X-Sender: <info@tumunanlodge.com>\n"; 
$headers .= "X-Mailer: PHP\n"; // mailer
$headers .= "X-Priority: 1\n"; // Urgent message!
$headers .= "Return-Path: <info@tumunanlodge.com>\n";  // Return path for errors

/* If you want to send html mail, uncomment the following line */
// $headers .= "Content-Type: text/html; charset=iso-8859-1\n"; // Mime type

/* and now mail it */
mail($recipient, $subject, $message, $headers); 
echo "<script>alert('$nombre, su mensaje fue enviado con �xito'); document.location = 'contactesp.htm'</script>";
