<?php

require 'config/config.php';
require 'config/database.php';

// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
MercadoPago\SDK::setAccessToken(TOKEN_MP);
$preference = new MercadoPago\Preference();
$productos_mp = array();

$productos = isset($_SESSION['carrito']['productos']) ? $_SESSION['carrito']['productos'] : null;

$db = new Database();
$con = $db->conectar();

$lista_carrito = array();

if ($productos != null) {
    foreach ($productos as $clave => $producto) {
        $sql = $con->prepare("SELECT id, nombre, precio, descuento, $producto AS cantidad FROM productos WHERE id=? AND activo=1");
        $sql->execute([$clave]);
        $lista_carrito[] = $sql->fetch(PDO::FETCH_ASSOC);
    }
} else {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Viña Tumuñan Lodge</title>

	<!--Style-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/botones-idioma.css">
	<!--Style-->
	<!-- index css -->
	<link rel="stylesheet" href="assets/css/index.css">
	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Pagos -->
    <script src="https://www.paypal.com/sdk/js?client-id=<?php echo CLIENT_ID; ?>&currency=<?php echo CURRENCY; ?>"></script>
    <script src="https://sdk.mercadopago.com/js/v2"></script>

</head>
<body>
	
	<!--PreLoader-->
    <!-- <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div> -->
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="./">
								<img src="images/logo-svg.svg" width="120em">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="./">Inicio</a>
								</li>
								<li><a href="about.php">Sobre nosotros</a></li>
								<li><a href="services.php">Reservas</a>
								<li><a href="news.html">Noticias</a>
									<ul class="sub-menu">
										<li><a href="news.html">News</a></li>
										<li><a href="single-news.html">Single News</a></li>
									</ul>
								</li>
								<li><a href="contact.php">Contacto</a></li>
								<li class="current-list-item"><a href="tienda.php">Tienda</a></li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="checkout.php">
                                            <?php if($num_cart==0){ ?>
                                                <i class="fas fa-shopping-cart fa-lg"></i> Carrito
                                            <?php }else{ ?>
											    <i class="fas fa-shopping-cart fa-lg"> <sup><?php echo $num_cart; ?></sup></i> Carrito 
                                            <?php } ?>
										</a>
									</div>
								</li>
							</ul>
						</nav>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg" style="background-image: url(images/bg_2.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Realiza tus pagos de una forma segura con nuestros medios de pago</i></p>
						<h1>Detalles de pago</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

    <!-- check out section -->
    <main>
        <div class="checkout-section mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-accordion-wrap">
                            <div class="accordion" id="accordionExample">
                                <div class="card single-accordion">
                                    <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Datos Básicos y datos de envío
                                        </button>
                                    </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="billing-address-form">
                                            <form action="clases/captura_datos_envio.php" method="POST">
                                                <h4><Label>Datos básicos</Label></h4>
                                                <p><input type="text" placeholder="Nombre" id="nombre" name="nombre"></p>
                                                <p><input type="text" placeholder="Apellido" id="apellido" name="apellido"></p>
                                                <p><input type="text" placeholder="Rut" id="rut" name="rut"></p>
                                                <p><input type="email" placeholder="Email" id="mail" name="mail"></p>
                                                <p><input type="tel" placeholder="Numero de telefono" id="fono" name="fono"></p>
                                                <h4><Label>Datos envío</Label></h4>
                                                <p><select class="billing-address-form" style="width:100%;" id="region" name="region">
                                                            <option value="I de Tarapacá">I de Tarapacá</option>
                                                            <option value="I de Antofagasta">I de Antofagasta</option>
                                                            <option value="III de Atacama">III de Atacama</option>
                                                            <option value="IV de Coquimboá">IV de Coquimbo</option>
                                                            <option value="V de Valparaíso">V de Valparaíso</option>
                                                            <option value="VI del Libertador General Bernardo O'Higgins">VI del Libertador General Bernardo O'Higgins</option>
                                                            <option value="VII del Maule">VII del Maule</option>
                                                            <option value="XVI de Ñuble">XVI de Ñuble</option>
                                                            <option value="VIII del Bío Bío">VIII del Bío Bío</option>
                                                            <option value="IX de la Araucanía">IX de la Araucanía</option>
                                                            <option value="XIV de los Ríos">XIV de los Ríos</option>
                                                            <option value="X de los Lagos">X de los Lagos</option>
                                                            <option value="XI Aysén del General Carlos Ibáñez del Campo">XI Aysén del General Carlos Ibáñez del Campo</option>
                                                            <option value="XII de Magallanes y Antártica Chilena">XII de Magallanes y Antártica Chilena</option>
                                                            <option value="Metropolitana de Santiago">Metropolitana de Santiago</option>
                                                            <option value="XV de Arica y Parinacota">XV de Arica y Parinacota</option>
                                                    </select></p>
                                                <p><input type="text" placeholder="Ciudad" id="ciudad" name="ciudad"></p>
                                                <p><input type="text" placeholder="Calle" id="calle" name="calle"></p>
                                                <p><input type="tel" placeholder="Número" id="numero" name="numero"></p>
                                                <input type="submit" class="boxed-btn black" value="Siguiente">
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                </div>
                <div class="col-lg-4">
                        <div class="order-details-wrap">
                            <table class="order-details">
                                <thead>
                                    <tr>
                                        <th>Detalles de su compra</th>
                                        <th>Precio</th>
                                    </tr>
                                </thead>
                                <tbody class="order-details-body">
                                    <tr>
                                        <?php
                                            if ($lista_carrito == null) {
                                                echo '<tr><td colspan="5" class="text-center"><b>Lista vacia</b></td></tr>';
                                            } else {
                                                $total = 0;
                                                foreach ($lista_carrito as $producto) {
                                                    $descuento = $producto['descuento'];
                                                    $precio = $producto['precio'];
                                                    $cantidad = $producto['cantidad'];
                                                    $precio_desc = $precio - (($precio * $descuento) / 100);
                                                    $subtotal = $cantidad * $precio_desc;
                                                    $total += $subtotal;

                                                    $item = new MercadoPago\Item();
                                                    $item->id = $producto['id'];
                                                    $item->title = $producto['nombre'];
                                                    $item->quantity = $cantidad;
                                                    $item->unit_price = $precio_desc;
                                                    $item->currency_id = CURRENCY;

                                                    array_push($productos_mp, $item);
                                                    unset($item);
                                        ?>
                                            <tr>
                                                <td><?php echo $producto['nombre']; ?></td>
                                                <td><?php echo $cantidad . ' x ' . MONEDA . number_format($subtotal, 0, ',', '.') ; ?></td>
                                            </tr>
                                        <?php }?>
                                        

                                    <?php } 
                                            //Obtener datos del dolar segun la api Mindicador
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
                                            $totalDolar=bcdiv($total,$dolarCam,2);
                                    ?>
                                    </tr>
                                </tbody>
                                <tbody class="checkout-details">
    <!-- 								<tr>
                                        <td>Subtotal</td>
                                        <td>$190</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td>$50</td>
                                    </tr> -->
                                    <tr>
                                        <tr>
                                            <td><h5><b>Total</b></h5></td>
                                            <td>
                                                <h5 id="total"><b><?php echo MONEDA . number_format($total, 0, ',', '.'); ?></b></h5>
                                            </td>
                                        </tr>
                                    </tr>
                                </tbody>
                            </table>                               
                        </div>
                    </div>
            </div>
        </div>
    </main>
	<!-- end check out section -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php  include("includes/footer.php");?>