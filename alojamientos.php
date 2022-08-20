<?php 
require 'config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    
    <link rel="stylesheet" href="assets/css/alojamientos.css">

    <title>Viña Tumuñan Lodge | Alojamientos</title>

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
<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="../index.php">
								<img src="images/logo-svg.svg" width="120em">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="./index.php">Inicio</a>
								</li>
								<li><a href="./about.php">Sobre nosotros</a></li>
								<li class="current-list-item"><a href="../alojamientos.php">Alojamientos</a>
								<li><a href="./galeria.php">Galeria</a>
								<li><a href="./formReservas.php">Reservas</a>
								<li><a href="./contact.html">Contacto</a></li>
								<li><a href="./tienda.php">Tienda</a></li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="details.php">
											<i class="fas fa-shopping-cart fa-lg"></i> Carrito <span id="num_cart" class="badge bg-secondary"><?php echo $num_cart; ?></span>
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
	<div class="hero-area hero-bg" style="background-image: url(images/bed/IMG_5562.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Nuestras opciones de Alojamiento</p>
							<h1>Lodge</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

    <main>
        <h1 class="portada">Alojamientos</h1>
        <section>
            <div class="row d-flex justify-content-center">
                <div class="col-8">
                    <h2><i>Desconectarse en el Alto Colchagua</i></h2>
                    <div>
                        <p class="justificar-inicio">Hemos estado trabajando arduamente para reconfigurar Tumuñan Lodge para poder recibir a los huéspedes de manera higiénica y segura. Los alquileres mensuales son solo una forma de alquilar una de nuestras 3 cabañas con cocina totalmente
                            equipadas.
                            <br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tumuñan Lodge ofrece el Chalet y Casa de Montaña para rentas mensuales, por favor contáctenos vía correo electrónico con las fechas que le interesan y nos comunicaremos con
                            usted con una cotización y lo que está incluido.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container container2">
                <div class="row">
                    <div class="col-md-7">
                        <div id="slider">
                            <input type="radio" name="slider" id="s1" checked id="ch">
                            <input type="radio" name="slider" id="s2">
                            <input type="radio" name="slider" id="s3">
                            <input type="radio" name="slider" id="s4">
                            <input type="radio" name="slider" id="s5">
            
                            <label for="s1" id="slide1">
                            <img class="carrusel" src="images/bed/Rooms Website/casa/IMG-20200519-WA0000.jpg">
                        </label>
                            <label for="s2" id="slide2">
                            <img class="carrusel" src="images/bed/Rooms Website/casa/IMG-20200519-WA0001.jpg">
                        </label>
                            <label for="s3" id="slide3">
                            <img class="carrusel" src="images/bed/Rooms Website/casa/IMG-20200519-WA0003.jpg">
                        </label>
                            <label for="s4" id="slide4">
                            <img class="carrusel" src="images/bed/Rooms Website/casa/IMG-20200519-WA0005.jpg">
                        </label>
                            <label for="s5" id="slide5">
                            <img class="carrusel" src="images/bed/IMG_4327.JPG">
                        </label>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <h1 class="titulo">Casa en la Montaña</h1>
                        <p class="justificar-parrafo">
                            Amplia casa de 4 dormitorios con una cocina completamente equipada, patio privado, jardín, un fogon, una parrilla y espectaculares vistas a las montañas.
                        </p>
                        <h4>Costos</h4>
                        <p class="costos">
                            CLP$410,000 por fin de semana (2 noches/ 3 días, un degustación de vino y 1 día de uso del jacuzzi incluido).
                        </p>
                        <hr>
                        <p class="costos">
                            CLP$410,000 por fin de semana (2 noches/ 3 días, un degustación de vino y 1 día de uso del jacuzzi incluido).
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="center espacio">
            <h3><i>Reserve Ahora</i></h3>
            <div>
                <p>Para reservar una habitación, envíenos un correo electrónico a tumunanlodge@gmail.com. </p>
                <p>Qué incluye: Acceso a piscina y jacuzzi, senderos, wifi, sábanas y almohadas (Direct TV en la casa de montañas).</p>
                <p> Qué no está incluido: servicio de limpieza diario, limpieza, desayuno, restaurante La tarifa también Incluye: Toallas de baño y manos ( 1 por persona) Productos básicos de cocina ( Lavalozas, bolsas de basura, Sal).</p>
            </div>
        </section>
        <section>
            <div class="container .container2">
                <div class="row">
                    <div class="col-md-3">
                        <h1 class="titulo">Chalet de Montaña para Parejas</h1>
                        <p class="justificar-parrafo">
                            Cabaña moderna que tiene 1 dormitorio con jardines privados, un fogon, una parrilla y una cocina pequeña. Cerca del río y con vistas a la montaña.
                        </p>
                        <h4>Costos</h4>
                        <p class="costos">
                            CLP$240,000 por fin de semana (2 noches/ 3 días, un degustación de vino y 1 día de uso del jacuzzi incluido).
                        </p>
                        <hr>
                        <p class="costos">
                            CLP$510,000 por semana (5 noches / 6 días, un tour y degustación de vinos y 2 días de uso del jacuzzi incluido).
                        </p>
                    </div>
                    <div class="col-md-7 offset-md-1">
                        <div id="slider2">
                            <input type="radio" name="slider" id="s6" checked>
                            <input type="radio" name="slider" id="s7">
                            <input type="radio" name="slider" id="s8">
                            <input type="radio" name="slider" id="s9">
                            <input type="radio" name="slider" id="s10">

                            <label for="s6" id="slide6">
                        <img class="carrusel" src="images/bed/Chalet/Website Only/King Suite 4.jpg">
                    </label>
                            <label for="s7" id="slide7">
                                <img class="carrusel" src="images/bed/chalet2020/DSC_0606.jpg">
                    </label>
                            <label for="s8" id="slide8">
                        <img src="images/bed/chalet2020/DSC_0595.jpg">
                    </label>
                            <label for="s9" id="slide9">
                        <img class="carrusel" src="images/bed/chalet2020/DSC_0679.jpg">
                    </label>
                            <label for="s10" id="slide10">
                                <img class="carrusel" src="images/bed/chalet2020/DSC_0666.jpg">
                    </label>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="center espacio">
                <h3>Tarifas Mensuales</h3>
                <p>Hemos estado trabajando arduamente para reconfigurar Tumuñan Lodge para poder recibir a los huéspedes de manera higiénica y segura.</p>
                <p>Los alquileres mensuales son solo una forma de alquilar una de nuestras 3 cabañas con cocina totalmente equipadas.</p>
                <p class="centrar-parrafo">Contáctenos para más detalles y discutir una tarifa.</p>
            </div>
        </section>
    </main>

    <?php  include("includes/footer.php");?>
</body>
</html>