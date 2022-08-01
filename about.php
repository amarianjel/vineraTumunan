<!--MUESTRA SOBRE NOSTROS-->
<?php 
require 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Viña Tumuñan Lodge| Sobre Nosotros</title>

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
                                <li><a href="index.php">Inicio</a></li>
                                <li class="current-list-item"><a href="about.php">Sobre nosotros</a></li>
								<li><a href="services.php">Reservas</a>
								<li><a href="news.php">Noticias</a>
									<ul class="sub-menu">
										<li><a href="news.php">News</a></li>
										<li><a href="single-news.php">Single News</a></li>
									</ul>
								</li>
								<li><a href="contact.php">Contacto</a></li>
								<li><a href="tienda.php">Tienda</a></li>
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
	

	<!-- hero area -->
	<div class="hero-area hero-bg" style="background-image: url(images/bigstock-Vineyards-At-Sunset-37822447.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Los mejores vinos de la zona centro</p>
							<h1>Viña Tumuñan Lodge</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- main section -->
    <main>
        <section class="center espacio">
			<h1 class="titulo">Sobre Nosotros.</h1>
           		<p>Escondido en las estribaciones boscosas de los Andes, Tumuñan Lodge ofrece a los huéspedes de todo el mundo un retiro durante todo el año y la oportunidad única de explorar una parte de Chile muy linda, pero poco conocida. A solo 2 horas en auto al sur
            	de Santiago que lo lleva a través de viñedos y vistas espectaculares de los Andes centrales, este refugio de montaña familiar atiende a aquellos que necesitan descanso y relajación, a los viajeros más aventureros que pueden disfrutar de
                días únicos de senderismo , cabalgatas y pesca con mosca en el incomparable cordillera chileno. La propiedad ofrece estadías a largo plazo, incluyendo una casa de 4 dormitorios, chalet de 2 dormitorios y cabaña de 3 dormitorios.</p>
			<h1 class="titulo">Tours de Vinos</h1>
				<p>Tumuñan produce vinos de primera clase y estamos encantados de mostrarle los viñedos y degustar nuestros vinos juntos.</p>
			<h1 class="titulo">Reserve Ahora.</h1>
				<p>Para reservar una habitación, envíenos un correo electrónico a tumunanlodge@gmail.com. </p>
                <p>INCLUYE: Acceso a piscina y jacuzzi, senderos, wifi, sábanas y almohadas, Direct TV en la casa de montañas, Toallas de baño y manos ( 1 por persona) Productos básicos de cocina ( Lavalozas, bolsas de basura, Sal).</p>
                <p>NO INCLUYE: servicio de limpieza diario, limpieza, desayuno, restaurante.</p>
			<h1 class="titulo">Paisaje.</h1>
				<p>En la zona hay senderos de senderismo autoguiados de 1 km a 10 km de largo a través de pintorescos paisajes de montaña.</p>
			<h1 class="titulo">Senderismo.</h1>
				<p>En la zona hay senderos de senderismo autoguiados de 1 km a 10 km de largo a través de pintorescos paisajes de montaña.</p>
			<h1 class="titulo">Montar a Caballo.</h1>
				<p>Realice un relajante paseo a caballo para explorar las hermosas vistas del valle de Tumuñan desde la propiedad y sus alrededores. Con mucho gusto lo pondremos en contacto con los lugareños que pueden ayudarlo a planificar su viaje de un día.</p>
			<h1 class="titulo">Tarifas Mensuales.</h1>
				<p>Hemos estado trabajando arduamente para reconfigurar Tumuñan Lodge para poder recibir a los huéspedes de manera higiénica y segura. 
				Los alquileres mensuales son solo una forma de alquilar una de nuestras 3 cabañas con cocina totalmente equipadas.</p>
			<h1 class="titulo">Conoce Nuestros Alojamientos.</h1>
				<p>Hemos estado trabajando arduamente para reconfigurar Tumuñan Lodge para poder recibir a los huéspedes de manera higiénica y segura. Los alquileres mensuales son solo una forma de alquilar una de nuestras 3 cabañas con cocina totalmente equipadas. Contáctenos para más detalles y discutir una tarifa.</p>
		</section>
        <!--Video-->
        <section>
            <div class="ratio ratio-21x9 alto-completo">
                <iframe width="100%" height="100%" src="images/viña_tumuñan.mp4" title="Viña Tumuñan" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <!--<iframe src="https://www.youtube.com/embed/_Y9afSciAAM?autoplay=1&mute=1 " title="YouTube video player " frameborder="0 " allowfullscreen></iframe>-->
            </div>
        </section>
    </main>
	<!-- end main section -->

    <?php  include("includes/footer.php");?>