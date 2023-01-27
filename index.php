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
	<meta name="title" content="Lodge turístico en la precordillera Del Valle de Colchagua">
	<meta name="description" content="Visite Tumuñan Lodge cercana de la Cordillera de los Andes a las puertas del Valle de Colchagua. Aprende sobre nosotros aquí.">

	<!-- title -->
	<title>Tumuñan Lodge | Sobre Nosotros</title>

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

<body style="background-color: #e7ece6;">

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
								<img src="images/Logo.png" width="120em">
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

<style>

    @media only screen and (min-width: 600px) {
        #hero{
            background-image: url(images/activities/Wine\ Tours/image2.jpg);
        }
    }
    
    @media only screen and (max-width: 600px) {
        #hero{
            display: none;
        }

        main{
            margin-top: 9em;
        }
    }
    
</style>
	<!-- hero area -->
	<div class="hero-area hero-bg" id="hero">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Conoce sobre nosotros</p>
							<h1>Tumuñan Lodge</h1>
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
					<h2 class="titulo">Quienes somos:</h2>
					<hr>
					<br>
					<p class="displayjs" style="font-size: 19px">Tumuñan Lodge y Viñedo fue fundado en 2006 por William Evelyn, un inglés que vino a explorar Chile en 1988, trabajando como guía de pesca con mosca en la naturaleza patagónica y surfeando la costa central, enamorándose de Chile, sus paisajes excepcionales, gente encantadora, cultura y buenos vinos.
					</p>
				</div>
				<div class="fotografia-info col-4 col-lg-2 my-5">
					<img src="images\cap1.png" alt="">
				</div>
				<div class="fotografia-info col-7 col-lg-4 my-5">
					<img src="images\activities\Fishing\_M8R0624.jpg" alt="">
				</div>
			</div>
			<hr>

			<div class="row align-items-center">
				<div class="fotografia-info col-12 col-lg-6 my-5">
					<img src="images\bed\IMG_5676 (1).jpg" alt="">
				</div>
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">Lodge:</h2>
					<p class="displayjs" style="font-size: 19px">Ubicado en los Andes, rodeado de hermosas colinas boscosas y arroyos claros, Tumuñan Lodge ofrece una casa y una cabaña totalmente equipadas disponibles para alquiler con piscina, jacuzzi y opciones gastronómicas. Hay abundantes senderos para uso exclusivo de los huéspedes, rutas del vino y otras actividades disponibles.<a href="./formReservas.php"> Reserve a través de Formulario</a> o via WhatsApp.</p>
					<div class="fotografia-info col-3 col-lg-4 my-5">
						<a href="https://wa.me/56996301152"><span class="text"><img src="images\WhatsApp_icon.png"></span></a>
					</div>
				</div>
			</div>
			<hr>

			<div class="row align-items-center">
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">El Viñedo</h2>
					<p class="displayjs" style="font-size: 19px">El viñedo más alto conocido de Cabernet Sauvignon en el Valle de Colchagua. Enclavado a 720 m sobre el nivel del mar, está en el límite mismo de donde se puede producir la uva. Se utilizan prácticas vitícolas orgánicas y biodinámicas para proteger cuidadosamente el ecosistema que rodea al viñedo. Los vinos producidos aquí han sido reconocidos internacionalmente como algunos de los mejores de Chile y se pueden comprar en nuestra <a href="./tienda.php">Tienda en linea</a>.</p>
				</div>
				<div class="fotografia-info col-8 col-lg-4 my-5">
					<img src="images\cap2.png" alt="">
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

		</section>


		<!--Presentacion-->
		<section>
			<div style="position: relative; width: 100%; height: 0; padding-top: 75.4530%;
padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
	border-radius: 8px; will-change: transform;">
				<iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
					src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFNhe0dGgU&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
				</iframe>
			</div>
			<a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFNhe0dGgU&#x2F;view?utm_content=DAFNhe0dGgU&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener">Tumunan Wine Presentation V2 Spanish</a> de Kat Sorbello
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
