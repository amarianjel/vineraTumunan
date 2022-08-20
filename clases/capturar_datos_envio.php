<?php

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $rut = $_POST['rut'];
    $email = $_POST['mail'];
    $fono = $_POST['fono'];
    $region = $_POST['region'];
    $ciudad = $_POST['ciudad'];
    $calle = $_POST['calle'];
    $numero = $_POST['numero'];
    $id_transaccion = $_POST['id_transaccion'];

    include 'enviar_email_env.php';
    header("Location: ../index.php");
    
?>