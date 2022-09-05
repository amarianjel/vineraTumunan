<!--MUESTRA INDEX-->
<?php 
require 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- title -->
	<title>Viña Tumuñan Lodge | Sobre Nosotros</title>

	<!--Style-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
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
	<link rel="stylesheet" href="bootstrap.bundle.min.js">
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
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
	<!-- js -->
	<link rel="stylesheet" href="assets/css/displayjs.css">

</head>

<body style="background-color: #f5e1ce;">

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
								<li class="current-list-item"><a href="./">Sobre nosotros</a></li>
								<li><a href="./alojamientos.php">Alojamientos</a></li>
								<li><a href="./events.php">Eventos</a></li>
								<li><a href="./galeria.php">Galeria</a></li>
								<li><a href="./formReservas.php">Reservas</a></li>
								<li><a href="./contact.php">Contacto</a></li>
								<li><a href="./tienda.php">Tienda</a></li>

								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="checkout.php">
											<?php if($num_cart==0){ ?>
											<i class="fas fa-shopping-cart fa-lg"></i> Carrito
											<?php }else{ ?>
											<i class="fas fa-shopping-cart fa-lg">
												<sup><?php echo $num_cart; ?></sup></i> Carrito
											<?php } ?>
										</a>
									</div>
								</li>

								<li>
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Lenguaje
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="./" style="color:black;">
												<img src="images/traduccion/espana.png" class="logo-idioma">ES
											</a>
											<a class="dropdown-item" href="./en/index.php" style="color:black;">
												<img src="./images/traduccion/reino-unido.png" class="logo-idioma">EN
											</a>
											<a class="dropdown-item" href="./po/index.php" style="color:black;">
												<img src="./images/traduccion/portugal.png" class="logo-idioma">PO
											</a>
										</div>
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


	<!-- hero area -->
	<div class="hero-area hero-bg" style="background-image: url(images/food_Wine/cheese.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Conoce sobre nosotros</p>
							<h1>Viña Tumuñan Lodge</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<style>/*********Sobre Nosotros***********/
		.titulo{
			color: #051922;
		}	




	</style>
	<!-- main section -->
	<main>
		<section class="center espacio mx-5 my-5">
			<div class="row align-items-center">
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">Sobre Nosotros</h2>
					
					<p class="displayjs" style="font-size: 19px">A solo 2 horas en auto al sur
						de Santiago que lo lleva a través de viñedos y vistas espectaculares de los Andes centrales,
						este refugio de montaña familiar atiende a aquellos que necesitan descanso y relajación, a los
						viajeros más aventureros que pueden disfrutar de
						días únicos de senderismo , cabalgatas y pesca con mosca en el incomparable cordillera chileno.
					</p>
				</div>
				<div class="fotografia-info col-12 col-lg-6 my-5">
					<img src="images\activities\Wine Tours\wine tasting.jpg" alt="">
				</div>
			</div>
			<hr>

			<div class="row align-items-center">
				<div class="fotografia-info col-12 col-lg-6 my-5">
					<img src="images\activities\Wine Tours\55923167.jpg" alt="">
				</div>
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">Tienda</h2>
					<p class="displayjs" style="font-size: 19px">Tumuñan produce vinos de clase mundial gracias su terreno montañoso. Además puede comprar nuestros vinos y miel en nuestra tienda online. Para acceder a la tienda online <a href="./tienda.php">Pinche aquí. </a>Puede adquirir sus productos favoritos acercandose a nuestra viña ubicada en <a href="https://goo.gl/maps/NgVFDaCbyTaGf2XXA" class="dato"> I-325, Las Peñas, O'Higgins, Chile </a>donde adicionalmente ofrecemos tours y degustaciones. </p>
				</div>
			</div>
			<hr>

			<div class="row align-items-center">
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">Reserve Ahora</h2>
					<p class="displayjs" style="font-size: 19px">Para reservar una habitación, <a href="./formReservas.php">Pinche Aquí</a> y rellene el formulario. Nos pondremos en contacto a la brevedad con usted.</p>
					<p class="displayjs" style="font-size: 19px">SE INCLUYE: Acceso a piscina y jacuzzi, senderos, wifi, sábanas y almohadas, Direct TV en la casa de
						montañas, Toallas de baño y manos ( 1 por persona) Productos básicos de cocina ( Lavalozas, bolsas de
						basura, Sal).</p>
					<p style="font-size: 19px">NO SE INCLUYE: servicio de limpieza diario, desayuno, restaurante.</p>
				</div>
				<div class="fotografia-info col-12 col-lg-6 my-5">
					<img src="images\Homepage Picture Roll\To Keep\55921897.jpg" alt="">
				</div>
			</div>
			<hr>

			<div class="row align-items-center">
				<div class="fotografia-info col-12 col-lg-6 my-5">
					<img src="images\Homepage Picture Roll\To Keep\55922826.jpg" alt="">
				</div>
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">Paisaje</h2>
					<p class="displayjs" style="font-size: 19px">En nuestra propiedad hay 3 km de rutas de senderismo autoguiadas a través de pintorescos bosques 
						y paisajes de montaña.</p>
					<p class="displayjs" style="font-size: 19px">Para ver los paisajes de la zona <a href="./galeria.php">Pinche Aquí.</a></p>
				</div>
			</div>
			<hr>

			<div class="row align-items-center">
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">Senderismo</h2>
					<p class="displayjs" style="font-size: 19px">En la zona hay rutas de senderismo autoguiados de 1 km a 10 km de largo a través de pintorescos
						paisajes de montaña.</p>
					<p class="displayjs" style="font-size: 19px">Para ver la galeria de imagenes <a href="./galeria.php">Pinche Aquí.</a></p>
				</div>
				<div class="fotografia-info col-12 col-lg-6 my-5">
					<img src="images\Homepage Picture Roll\To Keep\40529940.jpg" alt="">
				</div>
			</div>
			<hr>

			<div class="row align-items-center">
				<div class="fotografia-info col-12 col-lg-6 my-5">
					<img src="images/activities/Hiking/ridingview.jpg" alt="">
				</div>
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">Montar a Caballo</h2>
					<p class="displayjs" style="font-size: 19px">Realice un relajante paseo a caballo para explorar las hermosas vistas del valle de Tumuñan desde la
						propiedad y sus alrededores. Con mucho gusto lo pondremos en contacto con los lugareños que pueden
						ayudarlo a planificar su viaje de un día.</p>
					<p class="displayjs" style="font-size: 19px">Para ver las galeria de imagenes <a href="./galeria.php">Pinche Aquí.</a></p>
				</div>
			</div>
			
		</section>
		<h2 class="titulo" style="display: flex; justify-content: center; margin:1em; background-color: #000000e7; color: #fff;">Ubicación</h2>
		<div class="mapa" style="display: flex; justify-content: center; margin:1em;">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21963.498815824205!2d-70.79943981194643!3d-34.7499001301102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9664c1b33eefd169%3A0x7c7f01fc0de1ef70!2sTumu%C3%B1an%20Lodge!5e0!3m2!1ses-419!2scl!4v1659462547925!5m2!1ses-419!2scl"
				width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<!--Video-->
		<section>
			<div class="ratio ratio-21x9 alto-completo">
				<iframe width="100%" height="100%" src="images/video_vina.mp4" title="Viña Tumuñan" frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
					allowfullscreen></iframe>
				<!--<iframe src="https://www.youtube.com/embed/_Y9afSciAAM?autoplay=1&mute=1 " title="YouTube video player " frameborder="0 " allowfullscreen></iframe>-->
			</div>
		</section>
	</main>
	<!-- end main section -->
    <!-- Script -->
	<script src="assets/js/effects.js"></script>
	<?php  include("includes/footer.php");?>
</body>
