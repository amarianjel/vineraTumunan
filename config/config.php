<?php

//Configuracion del sistema
define("SITE_URL", "http://www.tumunan.com");/* "http://localhost/vineratumunan" */
define("KEY_TOKEN", "TU_TOKEN");
define("MONEDA", "$");

//Configuracion para Paypal
define("CLIENT_ID", "AdYUAeWs-DjWkObg5x3TOC0VPO3kRgCpo_-dKMzXit9ufewJVcPgVfokq1hhVEPf68-UlKxop82FMOPV");
define("CURRENCY", "USD");

//Configuracion para Mercado Pago
define("TOKEN_MP", "TEST-525207997074765-081621-f88393fc3e4f4d8544f3f62e80740404-239049668");
define("PUBLIC_KEY_MP", "TEST-09bf5204-ef5e-4ee2-afd2-19df2b716f1c");
define("LOCALE_MP", "es-CL");


session_start();

$num_cart = 0;
if (isset($_SESSION['carrito']['productos'])) {
    $num_cart = count($_SESSION['carrito']['productos']);
}