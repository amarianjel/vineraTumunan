<?php

//Configuración del sistema
define("SITE_URL", "http://www.tumunan.com");
define("KEY_TOKEN", "TU_TOKEN");
define("MONEDA", "$");

//Configuración para Paypal
define("CLIENT_ID", "AWhQMptfFe9I3ZltfYbhTfozJ-1TjA5MrwN0pFLmCfsSPxx2U_O0Dlyr8xpDmcP5NI64bo4Bku3hAhjn");
define("CURRENCY", "USD");

//Configuración para Mercado Pago
define("TOKEN_MP", "TEST-XXXXXXXXX");
define("PUBLIC_KEY_MP", "TEST-XXXXXXXXX");
define("LOCALE_MP", "es-MX");


//Datos para envio de correo electronico
define("MAIL_HOST", "smtp.office365.com");
define("MAIL_USER", "pablo.araneda@hotmail.com");
define("MAIL_PASS", "Pablito.1243");
define("MAIL_PORT", 587);

session_start();

$num_cart = 0;
if (isset($_SESSION['carrito']['productos'])) {
    $num_cart = count($_SESSION['carrito']['productos']);
}
