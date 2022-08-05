<?php

require '../config/config.php';
require '../config/database.php';

$db = new Database();
$con = $db->conectar();

$json = file_get_contents('php://input');
$datos = json_decode($json, true);

if (is_array($datos)) {

    $apiUrl = 'https://mindicador.cl/api';
    //Es necesario tener habilitada la directiva allow_url_fopen para usar file_get_contents
    if ( ini_get('allow_url_fopen') ) {
        $json = file_get_contents($apiUrl);
    } else {
        //De otra forma utilizamos cURL
        $curl = curl_init($apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($curl);
        curl_close($curl);
    }

    $dailyIndicators = json_decode($json);  
    $dolarCam = $dailyIndicators->dolar->valor;

    $status = $datos['details']['status'];
    $fecha = $datos['details']['update_time'];
    $time = date("Y-m-d H:i:s", strtotime($fecha));
    $email = $datos['details']['payer']['email_address'];
    $idCliente = $datos['details']['payer']['payer_id'];
    $monto = $datos['details']['purchase_units'][0]['amount']['value']*$dolarCam; //Volvemos a transformar el valor del dolar a peso chileno para almacenarlo
    $idTransaccion = $datos['details']['purchase_units'][0]['payments']['captures'][0]['id'];

    $comando = $con->prepare("INSERT INTO compra (fecha, status, email, id_cliente, total, id_transaccion) VALUES(?,?,?,?,?,?)");
    $comando->execute([$time, $status, $email, $idCliente, $monto, $idTransaccion]);
    $id = $con->lastInsertId();

    if ($id > 0) {
        $productos = isset($_SESSION['carrito']['productos']) ? $_SESSION['carrito']['productos'] : null;

        if ($productos != null) {
            foreach ($productos as $clave => $cantidad) {

                $sqlProd = $con->prepare("SELECT id, nombre, precio, descuento, stock FROM productos WHERE id=? AND activo=1");
                $sqlProd->execute([$clave]);
                $row_prod = $sqlProd->fetch(PDO::FETCH_ASSOC);

                $precio = $row_prod['precio'];
                $descuento = $row_prod['descuento'];
                $precio_desc = $precio - (($precio * $descuento) / 100);

                $sql = $con->prepare("INSERT INTO detalle_compra (id_compra, id_producto, nombre, cantidad, precio) VALUES(?,?,?,?,?)");
                $sql->execute([$id, $row_prod['id'], $row_prod['nombre'], $cantidad, $precio_desc]);
                $sql = $con->prepare("UPDATE productos SET stock=?-? WHERE productos.id=?");
                $sql->execute([$row_prod['stock'],$cantidad,$row_prod['id']]);
                $sql = $con->prepare("UPDATE productos SET activo=0 WHERE id=? AND stock=0");
                $sql->execute([$row_prod['id']]);
            }
            include 'enviar_email.php';
        }

        unset($_SESSION['carrito']);
    }
}
