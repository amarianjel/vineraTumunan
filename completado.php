<?php

require 'config/config.php';
require 'config/database.php';

$id_transaccion = isset($_GET['key']) ? $_GET['key'] : '0';

$error = '';

if ($id_transaccion == '') {
    $error = 'Error al procesar la petición';
} else {

    $db = new Database();
    $con = $db->conectar();

    $sql = $con->prepare("SELECT count(id) FROM compra WHERE id_transaccion=? AND (status=? OR status=?)");
    $sql->execute([$id_transaccion, 'COMPLETED', 'approved']);
    if ($sql->fetchColumn() > 0) {

        $sql = $con->prepare("SELECT id, fecha, email, total FROM compra WHERE id_transaccion=? AND (status=? OR status=?) LIMIT 1");
        $sql->execute([$id_transaccion, 'COMPLETED', 'approved']);
        $row = $sql->fetch(PDO::FETCH_ASSOC);

        $idCompra = $row['id'];
        $total = $row['total'];
        $fecha = $row['fecha'];

        $sqlDet = $con->prepare("SELECT nombre, precio, cantidad FROM detalle_compra WHERE id_compra=?");
        $sqlDet->execute([$idCompra]);
    } else {
        $error = "Error al comprobar la compra";
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
								<li><a href="./">Sobre nosotros</a></li>
								<li><a href="alojamientos.php">Alojamientos</a></li>
								<li><a href="galeria.php">Galeria</a></li>
								<li><a href="formReservas.php">Reservas</a></li>
								<li><a href="contact.php">Contacto</a></li>
								<li class="current-list-item"><a href="tienda.php">Tienda</a></li>
								<li><a href="checkout.php">
									<img src="images/traduccion/espana.png" class="logo-idioma">
									</a>
								</li>
								<li><a href="./en/checkout.php">
									<img src="images/traduccion/reino-unido.png" class="logo-idioma">
									</a>
								</li>
								<li>
								<li><a href="./po/checkout.php">
									<img src="images/traduccion/portugal.png" class="logo-idioma">
									</a>
								</li>
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
						<p>Gracias por comprar los mejores vinos de la zona centro</i></p>
						<h1>Finalizar compra</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
	<main>
		<div class="checkout-section mt-100 mb-150">
				<?php if (strlen($error) > 0) { ?>
					<div class="container">
						<div class="col mb-5">
							<h3>Ha ocurrido un error al procesar su pago!! Vuelva a intentarlo</h3>
							<a href="tienda.php" class="boxed-btn black">Ir a la tienda</a>
						</div>
					</div>
				<?php } else { ?>
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
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
											<form action="clases/capturar_datos_envio.php" method="POST">
													<h4><Label>Datos básicos</Label></h4>
													<p><input type="text" placeholder="Nombre" id="nombre" name="nombre" required></p>
													<p><input type="text" placeholder="Apellido" id="apellido" name="apellido" required></p>
													<p><input type="text" placeholder="Rut" id="rut" name="rut" required></p>
													<p><input type="email" placeholder="Email" id="mail" name="mail" required></p>
													<p><input type="tel" placeholder="Numero de telefono" id="fono" name="fono" required></p>
													<h4><Label>Datos envío</Label></h4>
													<p><select class="billing-address-form" style="width:100%;" id="region" name="region" required>
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
													<p><input type="text" placeholder="Ciudad" id="ciudad" name="ciudad" required></p>
													<p><input type="text" placeholder="Calle" id="calle" name="calle" required></p>
													<p><input type="tel" placeholder="Número" id="numero" name="numero" required></p>
													<p><input type="hidden" id="id_transaccion" name="id_transaccion" value="<?php echo $id_transaccion; ?>"></p>
													<input type="submit" class="boxed-btn" value="Finalizar">
												</form>
											</div>
										</div>
										</div>
									</div>
								</div>
							</div> 
					</div>
			<div class="col-lg-5">
			<div class="container">
				
					<div class="container ">
						<div class="col mb-5">
							<h2>Detalles de compra</h2><br>
							<h5><b>Folio de compra: </b><?php echo $id_transaccion; ?><br></h5>
							<h5><b>Fecha de compra: </b> <?php echo $row['fecha']; ?><br></h5>
							<?php while ($row_det = $sqlDet->fetch(PDO::FETCH_ASSOC)) {
							$importe =  $row_det['cantidad'] * $row_det['precio']; ?>
								<h5><b>Total:</b> <?php echo MONEDA . number_format($importe, 0, ',', '.'); ?><br></h5>
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="cart-table-wrap">
								<table class="cart-table">
									<thead class="cart-table-head">
										<tr class="table-head-row">
											<th>Cantidad</th>
											<th>Producto</th>
											<th>Importe</th>
										</tr>
									</thead>
									<tbody>
										<tr class="table-head-row">               
												<th><b><?php echo $row_det['cantidad']; ?></b></th>
												<th><b><?php echo $row_det['nombre']; ?></b></th>
												<th><b><?php echo MONEDA . number_format($importe, 0, ',', '.'); ?></b></th>
											<?php } ?>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
							
					</div>
				</div>                                          
					</div>
				</div>
				<?php } ?>
			</div>
	</main>
    
<?php  include("includes/footer.php");?>