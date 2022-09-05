<?php 
require 'config/config.php';
?>

<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viña Tumuñan Lodge | Eventos</title>

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
    <link rel="stylesheet" href="assets/css/events.css">
</head>

<body style="background-color: #f5e1ce;">
    
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
								<li><a href="./alojamientos.php">Alojamientos</a></li>
								<li class="current-list-item"><a href="./events.php">Eventos</a></li>
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
											<a class="dropdown-item" href="./events.php" style="color:black;">
												<img src="images/traduccion/espana.png" class="logo-idioma">ES
											</a>
											<a class="dropdown-item" href="./en/events.php" style="color:black;">
												<img src="./images/traduccion/reino-unido.png" class="logo-idioma">EN
											</a>
											<a class="dropdown-item" href="./po/events.php" style="color:black;">
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
	<div class="hero-area hero-bg" style="background-image: url(images/events/2.jpeg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle"></p>
							<h1>Tumuñan Eventos</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->
    
    <!-- Eventos -->
    <main>
        <section class="center espacio mx-5 my-5">
			<div class="row align-items-center">
				<div class="info col-12 col-lg-6">
					<p class="displayjs" style="font-size: 19px">
					Tumuñan Lodge es el lugar perfecto para tus eventos o reuniones de negocios, 
					en un entorno privilegiado. Ubicado a solo 30 minutos de San Fernando en pleno pre-cordillera, 
					con vistas espectacular de las montañas y bosque nativo.
					Contamos con un salón principal, y grandes espacios y jardines al aire libre, perfectos tanto para lanzamientos, team building, planificación, estrategia, cierre de negocios entre otro.
					</p>
				</div>
				<div class="fotografia-info col-12 col-lg-6 my-5">
					<img src="images\events\2.jpeg" alt="">
				</div>
			</div>
			<hr>

			<div class="row align-items-center">
				<div class="fotografia-info col-12 col-lg-6 my-5">
					<img src="images\Homepage Picture Roll\40519900.jpg" alt="">
				</div>
				<div class="info col-12 col-lg-6">
					<p class="displayjs" style="font-size: 19px">
					Es el escenario ideal en un ambiente único, alejado del ruido de la ciudad e inspirador.
					Contamos además con la infraestructura ideal para trabajar y a la vez disfrutar de una experiencia inolvidable en el Valle de Colchagua.
					Se puede realizar eventos exclusivos con la totalidad del hotel a su disposición.
					</p>
				</div>
			</div>
        </section>
        
        <hr>

        <section class="integrations displayjs">
            <h2>Nuestros salones cuentan con</h2>

            <div class="items-list">
                <div>
                    <img src="images/icons/wifi.png">
                    <p style="font-size: 2.5vh;">Conexion a WIFI</p>
                </div>

                <div>
                    <img src="images/icons/gastronomy.png">
                    <p style="font-size: 2.5vh;">Gastronomía para eventos sociales y reuniones de empresa</p>
                </div>

                <div>
                    <img src="images/icons/dinner.png">
                    <p style="font-size: 2.5vh;">Servicios de almuerzo, cocktail, coffe break, cena y asados</p>
                </div>

                <div>
                    <img src="images/icons/catering.png">
                    <p style="font-size: 2.5vh;">Banquetería</p>
                </div>

                <div>
                    <img src="images/icons/air-conditioner.png">
                    <p style="font-size: 2.5vh;">Calefacción y aire condicionado</p>
                </div>
            </div>

        </section>

        <hr>
        
        <section class="activities displayjs">
            <h2>Actividades adicionales</h2>

            <div class="activities-list">
                <div style="background-image: url(images/activities/Wine\ Tours/IMG_5153.jpg); background-size: cover;">

                    <h3>Tour de Vinos</h3>
                    <p>Paseos a las viñas cercanas Tumuñan Lodge, conoceremos mas de su historia y las desafíos de viticultura en altura y la producion de fruta de alto calidad en climas estremos.</p>
                </div>

                <div style="background-image: url(images/activities/Hiking/1.jpg); background-size: cover;">
                    <h3>Senderismo</h3>
                    <p>Tumuñan esta alrededor de bosque nativo, ríos y montañas. Hay numerosas senderos exclusivos en donde pueden desfrutar la naturaleza y espectacular entorno. Excelente actividad para trabajar en equipo y educativo para la fauna y flora del sector.</p>
                </div>

                <div style="background-image: url(images/activities/Wine\ Tours/1.jpg); background-size: cover;">
                    <h3>Catas de Vinos</h3>
                    <p>Degustación de vinos de autor y boutique.</p>
                </div>
            </div>
        </section>
    </main>
    
    <!-- footer -->
    <?php  include("includes/footer.php");?>
	<!-- Script -->
	<script src="assets/js/effects.js"></script>
</body>

</html>
