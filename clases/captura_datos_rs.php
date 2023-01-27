<?php 

require '../config/config.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$rut = $_POST['rut'];
$email = $_POST['email'];
$fono = $_POST['fono'];
$fecha_ing = $_POST['fecha_ing'];
$fecha_sal = $_POST['fecha_sal'];
$c_personas = $_POST['c_personas'];
$c_adultos = $_POST['c_adultos'];
$c_ninios = $_POST['c_ninios'];
$ingreso = date("d-m-Y", strtotime($fecha_ing));
$salida = date("d-m-Y", strtotime($fecha_sal));

header('Location: ../mensajeReserva.php');


include 'enviar_email_reserva.php';

