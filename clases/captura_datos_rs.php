<?php 

require '../config/config.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$rut = $_POST['rut'];
$email = $_POST['email'];
$fono = $_POST['fono'];
$dias = $_POST['dias'];
$c_personas = $_POST['c_personas'];
$c_adultos = $_POST['c_adultos'];
$c_niños = $_POST['c_niños'];

$datos = [$nombre, $apellido,$rut ,$email ,$fono ,$dias ,$c_personas ,$c_adultos ,$c_niños];
var_dump($datos);

header('Location: ../mensajeReserva.php');
include 'enviar_email_reserva.php';

