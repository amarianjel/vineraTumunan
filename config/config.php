<?php

//Configuración del sistema
define("SITE_URL", "http://localhost/vineratumunan");
define("KEY_TOKEN", "TU_TOKEN");
define("MONEDA", "$");

//Configuración para Paypal
define("CLIENT_ID", "AWhQMptfFe9I3ZltfYbhTfozJ-1TjA5MrwN0pFLmCfsSPxx2U_O0Dlyr8xpDmcP5NI64bo4Bku3hAhjn");
define("CURRENCY", "USD");

//Configuración para Mercado Pago
define("TOKEN_MP", "TEST-525207997074765-081621-f88393fc3e4f4d8544f3f62e80740404-239049668");
define("PUBLIC_KEY_MP", "TEST-09bf5204-ef5e-4ee2-afd2-19df2b716f1c");
define("LOCALE_MP", "es-CL");


session_start();

$num_cart = 0;
if (isset($_SESSION['carrito']['productos'])) {
    $num_cart = count($_SESSION['carrito']['productos']);
}
